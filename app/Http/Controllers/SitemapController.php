<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Response;

class SitemapController extends Controller{

    public function index() {
        $page = Page::where('status', '=', 1)->get();
        return response()->view('sitemap_xml', ['page' => $page])->header('Content-Type', 'text/xml');
    }

    /*
    public function index() {
        $content = View::make('sitemap');
        return Response::make($content)->header('Content-Type', 'text/xml;charset=utf-8');
    }
    */

}
