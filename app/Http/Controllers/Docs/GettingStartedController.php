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
            'pageDescription' => 'Something Something.',
            'pageContents' => [
            ]
        ]);

        return view('documentation.gettingstarted.builder', $this->pageData);
    }

    public function notation() { 

        $this->pageData = array_merge($this->pageData, [
            'pageTitle' => 'Notation',
            'pageDescription' => 'Get to grips with the mesh notation and see how easy it is.',
            'pageContents' => [
                'classes' => 'Classes',
                'important' => '!important',
            ]
        ]);

        return view('documentation.gettingstarted.notation', $this->pageData);
    }
    
}
