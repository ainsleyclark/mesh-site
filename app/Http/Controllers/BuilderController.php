<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuilderController extends Controller
{

    /**
     *
     */
    public function getImportsArray()
    {
        $scss_dir = '../../mesh-src/src';
        $userVars = [
            'scssimports' => [
                'global' => [
                    "normalize" => '@import \''.$scss_dir.'/base/normalize\';'
                ],
                'util' => [
                    "spacing" => '@import \''.$scss_dir.'/util/_spacing\';',
                    "position" => '@import \''.$scss_dir.'/util/_position\';',
                    "sizing" => '@import \''.$scss_dir.'/util/_sizing\';',
                    "colors" => '@import \''.$scss_dir.'/util/_colors\';',
                    "type" => '@import \''.$scss_dir.'/util/_type\';',
                    "borders" => '@import \''.$scss_dir.'/util/_borders\';',
                    "spacers" => '@import \''.$scss_dir.'/util/_spacers\';',
                    "float" => '@import \''.$scss_dir.'/util/_float\';',
                    "visibility" => '@import \''.$scss_dir.'/util/_visibility\';',
                    "media" => '@import \''.$scss_dir.'/util/_media\';'
                ],
                'components' => [
                    "alerts" => '@import \''.$scss_dir.'/components/_alerts\';',
                    "badges" => '@import \''.$scss_dir.'/components/_badges\';',
                    "breadcrumb" => '@import \''.$scss_dir.'/components/_breadcrumb\';',
                    "button" => '@import \''.$scss_dir.'/components/_button\';',
                    "card" => '@import \''.$scss_dir.'/components/_card\';',
                    "collapse" => '@import \''.$scss_dir.'/components/_collapse\';',
                    "epic" => '@import \''.$scss_dir.'/components/_epic\';',
                    "list" => '@import \''.$scss_dir.'/components/_list\';',
                    "modal" => '@import \''.$scss_dir.'/components/_modal\';',
                    "pagination" => '@import \''.$scss_dir.'/components/_pagination\';',
                    "table" => '@import \''.$scss_dir.'/components/_table\';',
                    "tabs" => '@import \''.$scss_dir.'/components/_tabs\';',
                    "tooltip" => '@import \''.$scss_dir.'/components/_tooltip\';',
                    "toast" => '@import \''.$scss_dir.'/components/_toast\';'
                ]
            ]
        ];

        $this->compileScss($userVars['scssimports']);

    }

    /**
     * Renders master scss view, compiles scss & deletes scss file
     *
     * @param $scssImports
     */
    protected function compileScss($scssImports) {

        // Get variables
        $scss = View::make('builder.components', $scssImports)->render();
        $fileName = md5(serialize($scssImports).time());
        $temp_folder_dir = base_path('temp/' . $fileName . '/');
        $scssFile = $temp_folder_dir . 'mesh.scss';

        try {

            // Make new folder with ID
            shell_exec('mkdir ' . base_path() . '/temp/' . $fileName);

            // Create new .scss file in temp location based on scss var
            file_put_contents($temp_folder_dir . 'mesh.scss', $scss);

            // Change directory to the mesh-src folder
            chdir('mesh-src');

            // Compile scss via gulp
            $this->liveExecuteCommand('gulp website --input ' . $scssFile . ' --output ' . $temp_folder_dir . 'mesh.css --build_dir ' . $temp_folder_dir);
        
            // Change to parent directory
            chdir('../');

            // Delete scss file
            unlink($scssFile);

            //Send to zip & download
            $this->zipDownload($temp_folder_dir);

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
        $zip_file = $folder . 'meshBuilder.zip';
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
        
                //Close & Download ZIP
                if ($zip->close()) {
                    return response()->download($zip_file);
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

        // get exit status
        preg_match('/[0-9]+$/', $complete_output, $matches);

        // return exit status and intended output
        return array (
            'exit_status'  => intval($matches[0]),
            'output'       => str_replace("Exit status : " . $matches[0], '', $complete_output)
        );
    }
}
