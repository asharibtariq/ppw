<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\News;
use App\Models\Event;

class MainPageController extends Controller{

    public function __construct(){
//    $this->middleware('auth');
    }

    public function index(){
        $data['result'] = array();
//        $data['news'] = News::all()->sortByDesc('id')->where('status','=','Y');
        $data['news'] = News::orderBy('id', 'desc')->take(6)->where('status','=','Y')->get();
        $data['event'] = Event::orderBy('id', 'desc')->take(4)->where('status','=','Y')->get();
//        $data['event'] = Event::all()->where('status','=','Y');
        return view('index', $data)->with('title', 'PPW Home');
    }

    public function news_details($id){
        $data['result'] = array();
        $data['result'] = News::findOrFail($id);
        $data['news'] = News::orderBy('id', 'desc')->take(3)->get();
//        pre($data['news'],1);
        return view('pages/news_details', $data)->with('title', 'News Details');
    }

    public function event_details($id){
        $data['result'] = array();
        $data['result'] = Event::findOrFail($id);
        $date = date("d-m-Y");
        $data['event'] = Event::orderBy('id', 'desc')->take(3)->where('date','>',$date)->get();
        return view('pages/event_details', $data)->with('title', 'Event Details');
    }

    public function publication_details(){
        $data['result'] = array();
//        $data['result'] = Publication::findOrFail($id);
//        $date = date("d-m-Y");
        $data['publication'] = Publication::orderBy('id', 'desc')->take(3)->get();
        return view('pages/publication_details', $data)->with('title', 'Event Details');
    }

    public function contact_add(ContactRequest $request){
        $insertData = $request->all();
        Contact::create($insertData);
        return redirect(url(''))->with('success', 'Contact Added Successfully');
    }

}
