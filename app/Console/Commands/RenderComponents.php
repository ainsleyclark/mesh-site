<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\View;
use Carbon;
use ZipArchive;
use Response;

class RenderComponents extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

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

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $scss_dir = '../mesh-src/src';
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


        //$this->line(print_r($userVars['scssimports']));

        $scss = View::make('builder.components', $userVars['scssimports'])->render();
        $fileName = md5(serialize($userVars['scssimports']).time());
        $tempFile = base_path('temp/' . $fileName);
        file_put_contents('temp/' . $fileName . '.scss', $scss);

        $scssFile = $tempFile . '.scss';
        $cssFiles = [
            $tempFile . '.css',
            $tempFile . '.min.css'
        ];

        chdir('mesh-src');

        $this->liveExecuteCommand('gulp website --input ' . $scssFile . ' --output ' . base_path('temp/') . $fileName . '.css --build_dir ' . base_path('temp/'));
        //! OR
        //$shell_response = shell_exec('gulp website --input ' . $scssFile . ' --output ' . base_path('temp/') . $fileName . '.css --build_dir ' . base_path('temp/'));

        //Delete scss file
        unlink($scssFile);



        $this->zipFiles($cssFiles);


        // $path = base_path().'/mesh-src/temp-css/51e7edc9df0378dde14656157f84e3a6/mesh.css';


        // $download = Response::download($tempFile . '/' . 'mesh.css');

        
        // //$this->line($newdir);
        // $this->line($download);
        // //$this->line($tempFile);
        // $FILENAMESTRING = '071a9648b6b368b3f5a16f7a7922462f';
        // $TEMPORARYFILE = '/Users/Ainsley/Desktop/Web/mesh-site/mesh-src/temp-css/b0abbfa257f71847e73fcd528e1e2e2d TEMPFILE';


    }

    public function zipFiles($files) {

        // define the name of the archive and create a new ZipArchive instance.
        $archiveFile = base_path("app/Downloads/");
        $archive = new ZipArchive();

        // check if the archive could be created.
        if ($archive->open($archiveFile, ZipArchive::CREATE | ZipArchive::OVERWRITE)) {

            foreach ($files as $file) {
                if ($archive->addFile($file, basename($file))) {
                        $archive->addFile($file, basename($file));
                    continue;
                } else {
                    throw new Exception("file `{$file}` could not be added to the zip file: " . $archive->getStatusString());
                }
            }

            // close the archive.

                $archive->close();
                return response()->download($archiveFile, basename($archiveFile))->deleteFileAfterSend(true);

        } else {
            throw new Exception("zip file could not be created: " . $archive->getStatusString());
        }
    }
}
