<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
//use kirksfletcher\pagespeed\Pagespeed;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $pagespeed;
    protected $websiteData;
    public $pageData;

    public function __construct(){

        //Page Speed
//        $this->pagespeed = new Pagespeed();
//        $this->pagespeed->plugin('trimWhiteSpace', false);
//        $this->pagespeed->plugin('removeComments', false);
//        $this->pagespeed->plugin('insertDNSPreconnect', false);
//        $this->pagespeed->plugin('insertPreload', false);
//        $this->pagespeed->allowDynamicContent(false);

        //Website Data
        $this->websiteData = [
            'siteURL' => 'https://www.meshcss.com',
            'siteName' => 'mesh',
            'ogImage' => 'https://www.meshcss.com'
        ];

        //Page Data
        $this->pageData = array_merge($this->websiteData, [
            'pageTitle' => '',
            'pageDescription' => '',
            'activePage' => '',
            'parentURL' => request()->segment(1),
            'pageContents' => []
        ]);

    }

    public function removeLastSegment(string $url): string {
        $stringParts = explode('/', $url);
        array_pop($stringParts); // Remove last element
        return implode('/', $stringParts);
    }
}
