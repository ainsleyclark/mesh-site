<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function __construct(){
        parent::__construct();
    }

    //Home
    public function home() {

        $this->pageData = array_merge($this->pageData, [
            'pageTitle' => '',
            'pageDescription' => 'A blazingly fast, versatile, pure CSS open source framework with a modular approach to a responsive grid system and a vast amount of utilities.',
            'activePage' => 'home',
        ]);

        return view('documentation.home', $this->pageData);
    }
}
