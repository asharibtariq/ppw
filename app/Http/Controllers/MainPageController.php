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

    public function single_cause($id){
        $data['result'] = array();
        $data['result'] = News::findOrFail($id);
        return view('single_cause', $data)->with('title', 'News Details');
    }

}
