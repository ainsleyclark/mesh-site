<?php

namespace App\Http\Controllers\Docs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UtilityController extends Controller
{
    
    public function __construct(){
        parent::__construct();
    }

    //Utility
    public function borders() { 

        $this->pageData = array_merge($this->pageData, [
            'pageTitle' => 'Borders',
            'pageDescription' => 'Use these utility classes to rapidly style elements border with color classes & shape their border radius.',
            'activePage' => 'borders',
            'pageContents' => [
                'borders' => 'Borders',
                'radius' => 'Border radius',
                'variables' => 'Variables',
            ]
        ]);

        return view('documentation.utility.borders', $this->pageData);
    }

    public function colors() { 

        $this->pageData = array_merge($this->pageData, [
            'pageTitle' => 'Colors',
            'pageDescription' => "A small color pallette has been added to mesh to keep things quick, but it's totally customisable. Manipulate the element color and background color quickly.",
            'activePage' => 'colors',
            'pageContents' => [
                'usage' => 'Usage',
                'background' => 'Background Colors',
                'colors' => 'Colors',
                'variables' => 'Variables',
            ]
        ]);

        return view('documentation.utility.colors', $this->pageData);
    }

    public function float() { 

        $this->pageData = array_merge($this->pageData, [
            'pageTitle' => 'Float',
            'pageDescription' => 'Toggle between floats at different breakpoints using our float utility classes.',
            'activePage' => 'float',
            'pageContents' => [
                'usage' => 'Usage',
                'clearfix' => 'Clearfix',
                'example' => 'Example',
                'variations' => 'Variations',
            ]
        ]);

        return view('documentation.utility.float', $this->pageData);
    }

    public function media() { 

        $this->pageData = array_merge($this->pageData, [
            'pageTitle' => 'Media',
            'pageDescription' => 'Quickly add responsive media to your projects by using our easy image utility class.',
            'activePage' => 'media',
            'pageContents' => [
                'usage' => 'Usage',
                'image' => 'Responsive image',
                'iframe' => 'Responsive iFrame',
            ]
        ]);

        return view('documentation.utility.media', $this->pageData);
    }

    public function position() { 

        $this->pageData = array_merge($this->pageData, [
            'pageTitle' => 'Position',
            'pageDescription' => 'Use our position classes to easily adjust the position of an element while remaining responsive.',
            'activePage' => 'position',
            'parentDirectory' => basename(__DIR__),
            'pageContents' => [
                'usage' => 'Usage',
                'pinning' => 'Pinning',
                'examples' => 'Examples',
                'variations' => 'Variations',
                'variables' => 'Variables',
            ]
        ]);

        return view('documentation.utility.position', $this->pageData);
    }

    public function sizing() { 

        $this->pageData = array_merge($this->pageData, [
            'pageTitle' => 'Sizing',
            'pageDescription' => 'Easily make adjustments to the width and height to an element with our responsive sizing utility classes.',
            'activePage' => 'sizing',
            'pageContents' => [
                'usage' => 'Usage',
                'examples' => 'Examples',
                'variations' => 'Variations',
                'variables' => 'Variables',
            ]
        ]);

        return view('documentation.utility.sizing', $this->pageData);
    }

    public function spacers() { 

        $this->pageData = array_merge($this->pageData, [
            'pageTitle' => 'Spacers',
            'pageDescription' => "Use these helpful classes to separate content when margin & padding isn't large enough.",
            'activePage' => 'spacers',
            'pageContents' => [
                'usage' => 'Usage',
                'examples' => 'Examples',
                'variables' => 'Variables',
            ]
        ]);

        return view('documentation.utility.spacers', $this->pageData);
    }

    public function spacing() { 

        $this->pageData = array_merge($this->pageData, [
            'pageTitle' => 'Spacing',
            'pageDescription' => 'mesh has a wide range of spacing utility classes, which makes it easy to toggle margin and padding responsively in your web builds.',
            'activePage' => 'spacing',
            'pageContents' => [
                'usage' => 'Usage',
                'examples' => 'Examples',
                'variables' => 'Variables',
            ]
        ]);

        return view('documentation.utility.spacing', $this->pageData);
    }

    public function text() { 

        $this->pageData = array_merge($this->pageData, [
            'pageTitle' => 'Text',
            'pageDescription' => 'mesh includes a wide range of responsive and helpful utility classes for text. Responsive text is also included, great for decreasing size on smaller viewports.',
            'activePage' => 'text',
            'pageContents' => [
                'sizes' => 'Font sizes',
                'sub' => 'Sub headings',
                'examples' => 'Examples',
                'utility' => 'Utility classes',
                'responsive' => 'Responsive text',
                'align' => 'Alignment',
                'variables' => 'Variables',
            ]
        ]);

        return view('documentation.utility.text', $this->pageData);
    }

    public function visibility() { 

        $this->pageData = array_merge($this->pageData, [
            'pageTitle' => 'Visibility',
            'pageDescription' => 'Remove an elements visibility from the DOM with our responsive classes.',
            'activePage' => 'visibility',
            'pageContents' => [
                'usage' => 'Usage',
                'example' => 'Example',
                'variations' => 'Variations',
            ]
        ]);

        return view('documentation.utility.visibility', $this->pageData);
    }

}