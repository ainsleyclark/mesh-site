<?php

namespace App\Http\Controllers\Docs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GridController extends Controller
{

    public function __construct(){
        parent::__construct();
    }

    //Grid
    public function grid() { 

        $this->pageData = array_merge($this->pageData, [
            'pageTitle' => 'Grid',
            'pageDescription' => 'See how powerful our mobile-first flexbox grid is. With five breakpoints to choose from, sculpting elements to be responsive is a breeze.',
            'activePage' => 'grid',
            'pageContents' => [
                'howItWorks' => 'How it works',
                'gridOptions' => 'Grid options',
                'containers' => 'Containers',
                'rows' => 'Rows',
                'columns' => 'Columns',
                'offset' => 'Offset',
                'variables' => 'Variables',
            ]
        ]);

        return view('documentation.grid.grid', $this->pageData); 
    }

    public function flex() { 

        $this->pageData = array_merge($this->pageData, [
            'pageTitle' => 'Flex',
            'pageDescription' => 'The whole of flexbox is bundled with mesh, meaning you can use it inline, in the html. This makes vertical and horizontal centering a doddle. Of course all classes are responsive too.',
            'activePage' => 'flex',
            'pageContents' => [
                'usage' => 'Usage',
                'direction' => 'Direction',
                'justifyContent' => 'Justify content',
                'alignItems' => 'Align items',
                'alignSelf' => 'Align self',
                'alignContent' => 'Align content',
                'wrapFill' => 'Wrap & fill',
                'growShrink' => 'Grow & shrink',
            ]
        ]);

        return view('documentation.grid.flex', $this->pageData); 
    }

    public function order() { 

        $this->pageData = array_merge($this->pageData, [
            'pageTitle' => 'Order',
            'pageDescription' => 'Reorder columns and content with ease with our responsive order utility classes. Making visually challenging designs easy to work with.',
            'activePage' => 'order',
            'pageContents' => [
                'usage' => 'Usage',
                'examples' => 'Examples',
                'variations' => 'Variations',
            ]
        ]);

        return view('documentation.grid.order', $this->pageData); 
    }

    public function display() { 

        $this->pageData = array_merge($this->pageData, [
            'pageTitle' => 'Display',
            'pageDescription' => 'Easily toggle the display of items at each breakpoint by using our straightforward display classes. ',
            'activePage' => 'display',
            'pageContents' => [
                'usage' => 'Usage',
                'hiding' => 'Hiding/showing',
                'examples' => 'Examples',
                'variations' => 'Variations',
                'variables' => 'Variables',
            ]
        ]);

        return view('documentation.grid.display', $this->pageData); 
    }
    
}