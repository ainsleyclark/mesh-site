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
        //
        $scssimports = [
            'global' => [
                "normalize" => "@import '../../src/base/normalize';"
            ],
            'util' => [
                "spacing" => "@import '../../src/util/_spacing';",
                "position" => "@import '../../src/util/_position';",
                "sizing" => "@import '../../src/util/_sizing';",
                "colors" => "@import '../../src/util/_colors';",
                "type" => "@import '../../src/util/_type';",
                "borders" => "@import '../../src/util/_borders';",
                "spacers" => "@import '../../src/util/_spacers';",
                "float" => "@import '../../src/util/_float';",
                "visibility" => "@import '../../src/util/_visibility';",
                "media" => "@import '../../src/util/_media';",
            ],
            'components' => [
                "alerts" => "@import '../../src/components/_alerts';",
                "badges" => "@import '../../src/components/_badges';",
                "breadcrumb" => "@import '../../src/components/_breadcrumb';",
                "button" => "@import '../../src/components/_button';",
                "card" => "@import '../../src/components/_card';",
                "collapse" => "@import '../../src/components/_collapse';",
                "epic" => "@import '../../src/components/_epic';",
                "list" => "@import '../../src/components/_list';",
                "modal" => "@import '../../src/components/_modal';",
                "pagination" => "@import '../../src/components/_pagination';",
                "table" => "@import '../../src/components/_table';",
                "tabs" => "@import '../../src/components/_tabs';",
                "tooltip" => "@import '../../src/components/_tooltip';",
                "toast" => "@import '../../src/components/_toast';",
            ]
        ];

        $this->line(print_r($scssimports));

        $scss = View::make('builder.components', $scssimports)->render();
        $fileName = md5(serialize($scssimports).time());
        $tempFile = base_path('mesh-src/temp-css/'.$fileName);

        chdir('mesh-src');
        $newdir = shell_exec('mkdir '.$tempFile);
        file_put_contents($tempFile . '/' . $fileName . '.scss', $scss);


        //! NEED TO CLEAN THIS UP, NOT NECCESSARY TO USE MESH.CSS CAN REDEFINE IT IN DOWNLOAD METHOD OF RESPONSE CLASS

        //Build CSS
        shell_exec('node_modules/.bin/node-sass --include-path scss temp-css/'.$fileName.'/'.$fileName.'.scss temp-css/'.$fileName.'/mesh.css --output-style expanded');
        //Add Prefix
        shell_exec("node_modules/.bin/postcss temp-css/" . $fileName . '/mesh.css --use=autoprefixer --no-map --output=temp-css/' . $fileName . '/mesh.css');
        //Clean
        shell_exec('node_modules/.bin/prettier --config ./config/.prettierrc --write "temp-css/' . $fileName . '/mesh.css" --ignore-path ./config/.prettierignore');
        //Minify
        shell_exec('node_modules/.bin/cleancss --level=1 --output temp-css/' . $fileName . '/mesh.min.css temp-css/' . $fileName . '/mesh.css');

        //Delete scss file
        unlink($tempFile . '/' . $fileName . '.scss');


        $path = base_path().'/mesh-src/temp-css/51e7edc9df0378dde14656157f84e3a6/mesh.css';


        $download = Response::download($tempFile . '/' . 'mesh.css');

        
        //$this->line($newdir);
        $this->line($download);
        //$this->line($tempFile);
        $FILENAMESTRING = '071a9648b6b368b3f5a16f7a7922462f';
        $TEMPORARYFILE = '/Users/Ainsley/Desktop/Web/mesh-site/mesh-src/temp-css/b0abbfa257f71847e73fcd528e1e2e2d TEMPFILE';


    }
}
