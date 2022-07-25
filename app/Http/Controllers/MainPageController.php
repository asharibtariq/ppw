<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\News;
use App\Models\Event;
use App\Models\Team;
use App\Models\Training;
use App\Models\Publication;
use App\Models\Press;
use App\Models\Gallery;
use App\Models\Video;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class MainPageController extends Controller{

    public function __construct(){
//    $this->middleware('auth');
    }

    public function index(){
        $data['result'] = array();
//        $data['news'] = News::all()->sortByDesc('id')->where('status','=','Y');
        $data['news'] = News::orderBy('id', 'desc')->take(6)->where('status','=','Y')->get();
        $data['event'] = Event::orderBy('id', 'desc')->take(4)->where('status','=','Y')->get();
        $data['carousel_event'] = Event::orderBy('id', 'desc')->take(3)->where('status','=','Y')->get();
        $data['team'] = Team::orderBy('id', 'desc')->where('status','=','Y')->get();
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
        $data['publication'] = Publication::orderBy('id', 'desc')->get();
        return view('pages/publication_details', $data)->with('title', 'Event Details');
    }

    public function training_details(){
        $data['result'] = array();
//        $data['result'] = Training::findOrFail($id);
//        $date = date("d-m-Y");
        $data['training'] = Training::orderBy('id', 'desc')->get();
        return view('pages/training_details', $data)->with('title', 'Training Details');
    }

    public function press_details(){
        $data['result'] = array();
//        $data['result'] = Press::findOrFail($id);
//        $date = date("d-m-Y");
        $data['press'] = Press::orderBy('id', 'desc')->get();
        return view('pages/press_details', $data)->with('title', 'Press Release Details');
    }

    public function picture_gallery(){
        $data['result'] = array();
//        $data['result'] = Gallery::findOrFail($id);
//        $date = date("d-m-Y");
        $data['gallery'] = Gallery::orderBy('id', 'desc')->get();
        return view('pages/picture_gallery', $data)->with('title', 'Gallery');
    }

    public function video_gallery(){
        $data['result'] = array();
//        $data['result'] = Video::findOrFail($id);
//        $date = date("d-m-Y");
        $data['video'] = Video::orderBy('id', 'desc')->get();
        return view('pages/video_gallery', $data)->with('title', 'Videos');
    }

    public function contact_add(ContactRequest $request){
        $insertData = $request->all();
        Contact::create($insertData);
        return redirect(url(''))->with('success', 'Contact Added Successfully');
    }

}
