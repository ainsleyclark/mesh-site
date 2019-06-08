<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\View;
use Carbon;
use ZipArchive;
use Response;

class BuilderController extends Controller
{

    protected $scss_imports = [];
    protected $temp_id = '';

    public function process(Request $request) {

        $scss_dir = '../../mesh-src/src';
        $build_array = $request->input('scss')['build'];

        foreach($build_array as $array_name => $array) {
            foreach($array as $component => $include) {
                if($include == true)  {
                    //! NEED TO ADD NOT EQUAL TO HERE
                    $this->scss_imports[$array_name] = [
                        $component => '@import \'' .$scss_dir . '/' . $array_name . '/' . $component . '\';'
                    ];

                    //! HERE IS AN  ERROR BECAUSE OF THE UNDERSCORE IN NORMALIZE AND THE ALERT IS NOT ALERT ITS ALERTS!!!

                    $this->scss_imports[$array_name][$component] = '@import \'' .$scss_dir . '/' . $array_name . '/' . $component . '\';';
                }
            }
        }

        $download_dir = $this->compileScss();
        $zip_file = $this->zipDownload($download_dir);

        // Return the zip url
        return response($this->temp_id);
        
    }

    /**
     * Renders master scss view, compiles scss & deletes scss file
     *
     * @param $scssImports
     */
    protected function compileScss() {

        // Get variables
        $scss = View::make('builder.components', $this->scss_imports)->render();
        $this->temp_id = md5(serialize($this->scss_imports).time());
        $temp_folder_dir = base_path('temp/' . $this->temp_id . '/');
        $scssFile = $temp_folder_dir . 'mesh.scss';

        try {

            // Make new folder with ID
            shell_exec('mkdir ' . base_path() . '/temp/' . $this->temp_id);

            // Create new .scss file in temp location based on scss var
            file_put_contents($temp_folder_dir . 'mesh.scss', $scss);

            // Change directory to the mesh-src folder
            chdir(base_path('/mesh-src'));

            // Compile scss via gulp
            shell_exec('gulp website --input ' . $scssFile . ' --output ' . $temp_folder_dir . 'mesh.css --build_dir ' . $temp_folder_dir);

            // Change to parent directory
            chdir(base_path());

            // Delete scss file
            unlink($scssFile);

            //Send to zip & download
            return $temp_folder_dir;

        } catch (Exception $e) {

            //! LEARN HOW TO DEAL WITH EXCEPTIONS

        }
    }


    /**
     * Delete files in given directory and removes folder
     *
     * @param $dirPath
     */
    private function deleteDir($dirPath) {

        $files = glob($dirPath . '*', GLOB_MARK);
        
        // Throw exception if directory is invalid
        if (! is_dir($dirPath)) {
            throw new InvalidArgumentException('$dirPath must be a directory');
        }

        if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
            $dirPath .= '/';
        }

        // Unlink files
        foreach ($files as $file) {
            if (is_dir($file)) {
                self::deleteDir($file);
            } else {
                unlink($file);
            }
        }

        // Remove directory
        rmdir($dirPath);
    }


    /**
     * Zip all contents of folder, downloads them, removes folder no matter what.
     *
     * @param $folder
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function zipDownload($folder) {

        // Variables
        $zip_file = storage_path() . '/zips/' . $this->temp_id . '.zip';
        $zip = new \ZipArchive();
        $files = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($folder));

        //Try creating Zip file
        try {

            if ($zip->open($zip_file, \ZipArchive::CREATE | \ZipArchive::OVERWRITE)) {
        
                foreach ($files as $name => $file){
    
                    // We're skipping all subfolders
                    if (!$file->isDir()) {
                        $filePath = $file->getRealPath();
                
                        // Extracting filename with substr/strlen
                        $relativePath = 'meshBuilder/' . substr($filePath, strlen($folder));
                        if ($zip->addFile($filePath, $relativePath)) {
                            continue;
                        } else {
                            throw new Exception("File `{$file}` could not be added to the zip file: " . $zip->getStatusString());
                        }  
                    }
                }

                $headers = [
                    'Cache-control: maxage=1',
                    'Pragma: no-cache',
                    'Expires: 0',
                    'Content-Type : application/octet-stream',
                    'Content-Transfer-Encoding: binary',
                    'Content-Type: application/force-download',
                    //"Content-length: " . filesize($zip_file)
                ];

                //Close & Download ZIP
                if ($zip->close()) {
                    
                    return $zip_file;
                    
                } else {
                    throw new Exception("Could not close Zip file: " . $zip->getStatusString());
                }
    
            } else {   
                throw new Exception("Zip file could not be created: " . $zip->getStatusString()); 
            }
            
        // Catch Exception
        } catch (Exception $e) {
            $this->line($e);
        // Delte directory
        } finally {
            $this->deleteDir($folder);
        }
    }

    /**
     * Executes command line args live.
     *
     * @param $cmd
     * @return array
     */
    public function liveExecuteCommand($cmd){

        while (@ ob_end_flush()); // end all output buffers if any

        $proc = popen("$cmd 2>&1 ; echo Exit status : $?", 'r');

        $live_output     = "";
        $complete_output = "";

        while (!feof($proc))
        {
            $live_output     = fread($proc, 4096);
            $complete_output = $complete_output . $live_output;
            echo "$live_output";
            @ flush();
        }

        pclose($proc);

        // Get exit status
        preg_match('/[0-9]+$/', $complete_output, $matches);

        // Return exit status and intended output
        return array (
            'exit_status'  => intval($matches[0]),
            'output'       => str_replace("Exit status : " . $matches[0], '', $complete_output)
        );
    }
}
