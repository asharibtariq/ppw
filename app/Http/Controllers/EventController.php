<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Requests\EventRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class EventController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $title = "Events";
        return view('adminpanel.event.event')->with('title', $title);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $title = "Add Event";
        return view('adminpanel.event.add_event')->with('title', $title);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventRequest $request){
        $userId = Auth::id();
        $insertData = $request->all();
    //    $insertData['slug'] = strtolower(str_replace(' ','_',$insertData['title']));
        $insertData['created_by'] = $userId;
        $insertData['updated_by'] = $userId;
    //    pre($request->all(),1);
        if ($request->hasFile('image')){
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $imageName = 'event_'.time().'.'.$extension;

            $destinationPath = public_path('/uploads/event');
            $file->move($destinationPath, $imageName);
            $insertData['image'] = $imageName;
        }
        Event::create($insertData);
        return redirect('event')->with('success', 'Event Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event){
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $event = Event::findOrFail($id);
        $title = "Edit Event";
        $data['event'] = $event;
        return view('adminpanel.event.edit_event', $data)->with('title', $title);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(EventRequest $request, $id){
        $userId = Auth::id();
        $event = Event::findOrFail($id);
        $updateData = $request->all();
    //    $updateData['slug'] = strtolower(str_replace(' ','_',$updateData['title']));
        $updateData['updated_by'] = $userId;
        //    pre($request->all(),1);
        if ($request->hasFile('image')){
            File::delete($event->image);
        //    $files = array($event->image);
        //    File::delete($files);
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $imageName = 'event_'.time().'.'.$extension;

            $destinationPath = public_path('/uploads/event');
            $file->move($destinationPath, $imageName);
            $updateData['image'] = $imageName;
        }else{
            $updateData['image'] = $event->image;
        }
        $event->update($updateData);
        return redirect('event')->with('success', 'Event Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $event = News::findOrFail($id);
        File::delete($event->image);
        $event->delete();
        return redirect('event')->with('success', 'Event Successfully Deleted');
    }
}
