<?php

namespace App\Http\Controllers\Docs;

use Request;
use App\Http\Controllers\Controller;

class GettingStartedController extends Controller
{

    public function __construct(){
        parent::__construct();
    }

    //Getting started
    public function introduction() {  

        $this->pageData = array_merge($this->pageData, [
            'pageTitle' => 'Getting started',
            'pageDescription' => 'Get familiar with the setup and overview of mesh',
            'activePage' => 'introduction',
            'pageContents' => [
                'whatIs' => 'What is mesh?',
                'download' => 'Download',
                'js' => 'A note about JS',
            ]
        ]);

        return view('documentation.gettingstarted.introduction', $this->pageData);
    }

    public function installation() {

        $this->pageData = array_merge($this->pageData, [
            'pageTitle' => 'Installation',
            'pageDescription' => 'Get familiar with the setup and overview of mesh',
            'activePage' => 'installation',
            'pageContents' => [
                'cdn' => 'mesh CDN',
                'css' => 'Source Files (CSS)',
                'sass' => 'Source Files (SCSS)',
                'npm' => 'npm',
            ]
        ]);

        return view('documentation.gettingstarted.installation',  $this->pageData);
    }

    public function builder() { 

        $this->pageData = array_merge($this->pageData, [
            'pageTitle' => 'Builder',
            'pageDescription' => 'Only download what you need with meshBuilder, an extremely powerful tool helping you customize what components to import and colors to use.',
            'activePage' => 'builder',
            'pageContents' => [
                'usage' => 'What does it do?',
                'import' => 'Import',
                'colors' => 'Colors',
            ]
        ]);

        return view('builder.builder-home', $this->pageData);
    }

    public function javascript() { 

        $this->pageData = array_merge($this->pageData, [
            'pageTitle' => 'Javascript',
            'pageDescription' => 'We realise everything can\'t be done in CSS & somethings are best done with JavaScript. Which is why we have included a simple JS script to get you going.',
            'activePage' => 'javascript',
            'pageContents' => [
                'Usage' => 'usage',
                'Script' => 'script',
            ]
        ]);

        return view('documentation.gettingstarted.javascript', $this->pageData);
    }

    public function notation() { 

        $this->pageData = array_merge($this->pageData, [
            'pageTitle' => 'Notation',
            'pageDescription' => 'Get to grips with the mesh notation and see how easy it is.',
            'activePage' => 'notation',
            'pageContents' => [
                'classes' => 'Classes',
                'important' => '!important',
            ]
        ]);

        return view('documentation.gettingstarted.notation', $this->pageData);
    }
    
}
