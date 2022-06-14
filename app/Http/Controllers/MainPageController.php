<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainPageController extends Controller{

    public function __construct(){
//    $this->middleware('auth');
    }

    public function index(){
        $data['result'] = array();
        return view('index', $data)->with('title', 'PPW Home');
    }

}
