<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Event;

class MainPageController extends Controller{

    public function __construct(){
//    $this->middleware('auth');
    }

    public function index(){
        $data['result'] = array();
        $data['news'] = News::all()->sortByDesc('id')->where('status','=','Y');
        $data['event'] = Event::all()->where('status','=','Y');
        return view('index', $data)->with('title', 'PPW Home');
    }

    public function news_details($id){
        $data['result'] = array();
        $data['result'] = News::findOrFail($id);
        return view('pages/news_details', $data)->with('title', 'News Details');
    }

    public function event_details($id){
        $data['result'] = array();
        $data['result'] = Event::findOrFail($id);
        return view('pages/event_details', $data)->with('title', 'Event Details');
    }

}
