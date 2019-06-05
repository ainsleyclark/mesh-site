<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\View;
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

        chdir('mesh-src');

        $test = shell_exec('gulp website --input ' . $scssFile . ' --output ' . base_path('temp/') . $fileName . '.css --build_dir ' . base_path('temp/'));

        $this->line($test);
        // //Delete scss file
        //unlink($scssFile);


        // $path = base_path().'/mesh-src/temp-css/51e7edc9df0378dde14656157f84e3a6/mesh.css';


        // $download = Response::download($tempFile . '/' . 'mesh.css');

        
        // //$this->line($newdir);
        // $this->line($download);
        // //$this->line($tempFile);
        // $FILENAMESTRING = '071a9648b6b368b3f5a16f7a7922462f';
        // $TEMPORARYFILE = '/Users/Ainsley/Desktop/Web/mesh-site/mesh-src/temp-css/b0abbfa257f71847e73fcd528e1e2e2d TEMPFILE';


    }
}
