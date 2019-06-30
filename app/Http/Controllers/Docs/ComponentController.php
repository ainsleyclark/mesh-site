<?php

namespace App\Http\Controllers\Docs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComponentController extends Controller
{
    
    public function __construct(){
        parent::__construct();
    }

    //Components
    public function alert() { 

        $this->pageData = array_merge($this->pageData, [
            'pageTitle' => 'Alert',
            'pageDescription' => 'Use mesh alerts to display informative text easily with varying colors and styles.',
            'activePage' => 'alert',
            'pageContents' => [
                'usage' => 'Usage',
                'plain' => 'Plain',
                'background' => 'Full background',
                'close' => 'Close',
                'icons' => 'Icon',
                'css' => 'CSS alert dismiss',
                'js' => 'JS alert dismiss',
                'variables' => 'Variables',
            ]
        ]);

        return view('documentation.components.alert', $this->pageData);
    }

    public function badges() { 

        $this->pageData = array_merge($this->pageData, [
            'pageTitle' => 'Badges',
            'pageDescription' => 'Create handsome looking badges & tags easily with these classes.',
            'activePage' => 'badges',
            'parentDirectory' => basename(__DIR__),
            'pageContents' => [
                'usage' => 'Usage',
                'colored' => 'Colored',
                'rounded' => 'Rounded',
                'notification' => 'Notification',
                'close' => 'Close',
                'variables' => 'Variables',
            ]
        ]);

        return view('documentation.components.badges', $this->pageData);
    }

    public function breadcrumb() { 

        $this->pageData = array_merge($this->pageData, [
            'pageTitle' => 'Breadcrumb',
            'pageDescription' => 'Easily indicate the current location of a user within a websites hierarchy with our breadcrumb component.',
            'activePage' => 'breadcrumb',
            'pageContents' => [
                'usage' => 'Usage',
                'arrows' => 'Arrows',
                'variables' => 'Variables',
            ]
        ]);
        
        return view('documentation.components.breadcrumb', $this->pageData);
    }

    public function button() { 

        $this->pageData = array_merge($this->pageData, [
            'pageTitle' => 'Button',
            'pageDescription' => 'Discover how to use our buttons in your forms, dialogs and more with our versatile classes - including various sizes, colors and states.',
            'activePage' => 'button',
            'pageContents' => [
                'usage' => 'Usage',
                'colored' => 'Colored',
                'disabled' => 'Disabled',
                'outline' => 'Outlined',
                'sizes' => 'Sizes',
                'icons' => 'Icons',
                'rounded' => 'Rounded',
                'loading' => 'Loading',
                'variables' => 'Variables',
            ]
        ]);

        return view('documentation.components.button', $this->pageData);
    }

    public function card() { 

        $this->pageData = array_merge($this->pageData, [
            'pageTitle' => 'Card',
            'pageDescription' => 'Create materialistic cards with various styles & formats with our card component.',
            'activePage' => 'card',
            'pageContents' => [
                'usage' => 'Usage',
                'action' => 'Action',
                'shadow' => 'Shadow',
                'image' => 'Image',
                'fab' => 'FAB',
                'background' => 'Background',
                'variants' => 'Variants',
                'header' => 'Header',
                'variables' => 'Variables',
            ]
        ]);

        return view('documentation.components.card', $this->pageData);
    }

    public function collapse() { 

        $this->pageData = array_merge($this->pageData, [
            'pageTitle' => 'Collapse',
            'pageDescription' => 'Use our collapse component to easily show and hide content',
            'activePage' => 'collapse',
            'pageContents' => [
                'usage' => 'Usage',
                'accordion' => 'Accordion',
                'expand' => 'Expand',
                'js' => 'JS',
                'variables' => 'Variables',
            ]
        ]);

        return view('documentation.components.collapse', $this->pageData);
    }

    public function epic() { 

        $this->pageData = array_merge($this->pageData, [
            'pageTitle' => 'Epic',
            'pageDescription' => 'An epic is an effective way of displaying meaningful content on a page with a hero styled appearance.',
            'activePage' => 'epic',
            'pageContents' => [
                'usage' => 'Usage',
                'variables' => 'Variables',
            ]
        ]);

        return view('documentation.components.epic', $this->pageData);
    }

    public function form() { 

        $this->pageData = array_merge($this->pageData, [
            'pageTitle' => 'Form',
            'pageDescription' => 'Something about this page',
            'activePage' => 'form',
            'parentDirectory' => basename(__DIR__),
            'pageContents' => [
                'usage' => 'Usage',
                'variables' => 'Variables',
            ]
        ]);

        return view('documentation.components.form', $this->pageData);
    }

    public function header() { 

        $this->pageData = array_merge($this->pageData, [
            'pageTitle' => 'Header',
            'pageDescription' => 'A lightweight header for your website',
            'activePage' => 'header',
            'pageContents' => [
                'usage' => 'Usage',
                'variables' => 'Variables',
            ]
        ]);

        return view('documentation.components.header', $this->pageData);
    }

    public function list() { 

        $this->pageData = array_merge($this->pageData, [
            'pageTitle' => 'List',
            'pageDescription' => 'Effectively group list items together with our list utility class.',
            'activePage' => 'list',
            'pageContents' => [
                'usage' => 'Usage',
                'active' => 'Active',
                'disabled' => 'Disabled',
                'link' => 'Link',
                'icon' => 'Icon',
                'badge' => 'Badge',
                'monty' => 'Full monty',
                'variables' => 'Variables',
            ]
        ]);

        return view('documentation.components.list', $this->pageData);
    }

    public function modal() { 

        $this->pageData = array_merge($this->pageData, [
            'pageTitle' => 'Modal',
            'pageDescription' => 'mesh includes a pure CSS modal to easily display custom information & content via an animated popup section.',
            'activePage' => 'modal',
            'pageContents' => [
                'usage' => 'Usage',
                'centered' => 'Centered',
                'small' => 'Small',
                'large' => 'Large',
                'scroll' => 'Scroll',
                'javascript' => 'Javascript',
                'variables' => 'Variables',
            ]
        ]);

        return view('documentation.components.modal', $this->pageData);
    }

    public function nav() { 

        $this->pageData = array_merge($this->pageData, [
            'pageTitle' => 'Nav',
            'pageDescription' => 'Use the mesh nav to easily add responsive navigation to your site',
            'activePage' => 'nav',
            'pageContents' => [
                'usage' => 'Usage',
                'search-form' => 'Search Form',
                'dropdown' => 'Dropdown',
                'animations' => 'Animations',
                'withjs' => "With JavaScript",
                'variables' => 'Variables',
            ]
        ]);

        return view('documentation.components.nav', $this->pageData);
    }

    public function pagination() { 

        $this->pageData = array_merge($this->pageData, [
            'pageTitle' => 'Pagination',
            'pageDescription' => 'Add pagination to posts or extended elements to help break up your content with the mesh pagination component.',
            'activePage' => 'pagination',
            'pageContents' => [
                'usage' => 'Usage',
                'prevnext' => 'Prev/Next',
                'arrow' => 'Arrow',
                'variables' => 'Variables',
            ]
        ]);

        return view('documentation.components.pagination', $this->pageData);
    }

    public function table() { 

        $this->pageData = array_merge($this->pageData, [
            'pageTitle' => 'Table',
            'pageDescription' => 'Simple and sleek tables to clearly display your information.',
            'activePage' => 'table',
            'pageContents' => [
                'usage' => 'Usage',
                'striped' => 'Striped',
                'hover' => 'Hover',
                'scroll' => 'Scroll',
                'icon' => 'Icon',
                'variables' => 'Variables',
            ]
        ]);

        return view('documentation.components.table', $this->pageData);
    }

    public function tabs() { 

        $this->pageData = array_merge($this->pageData, [
            'pageTitle' => 'Tabs',
            'pageDescription' => 'Display content efficiently and choose from different tab styles & classes with our easy to use tab component.',
            'activePage' => 'tabs',
            'pageContents' => [
                'usage' => 'Usage',
                'plain' => 'Plain',
                'animate' => 'Animate',
                'bottom' => 'Bottom',
                'left' => 'Left',
                'right' => 'Right',
                'variables' => 'Variables',
            ]
        ]);

        return view('documentation.components.tabs', $this->pageData);
    }

    public function toast() { 

        $this->pageData = array_merge($this->pageData, [
            'pageTitle' => 'Toasts',
            'pageDescription' => 'Use our stylish snack-bars to display informative content easily, you can even use our JS code to have them appear and fade out.',
            'activePage' => 'toast',
            'pageContents' => [
                'usage' => 'Usage',
                'variables' => 'Variables',
            ]
        ]);

        return view('documentation.components.toast', $this->pageData);
    }

    public function tooltip() { 

        $this->pageData = array_merge($this->pageData, [
            'pageTitle' => 'Tooltip',
            'pageDescription' => 'Use mesh tooltips on any element to display extra information on hover.',
            'activePage' => 'tooltip',
            'pageContents' => [
                'usage' => 'Usage',
                'position' => 'Position',
                'dark' => 'Dark mode',
                'variables' => 'Variables',
            ]
        ]);

        return view('documentation.components.tooltip', $this->pageData);
    }
    
}