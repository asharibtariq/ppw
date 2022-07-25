<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use App\Http\Requests\VideoRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class VideoController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $title = "Videos";
        return view('adminpanel.video.video')->with('title', $title);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $title = "Add Video";
        return view('adminpanel.video.add_video')->with('title', $title);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VideoRequest $request){
        $userId = Auth::id();
        $insertData = $request->all();
    //    $insertData['slug'] = strtolower(str_replace(' ','_',$insertData['title']));
        $insertData['created_by'] = $userId;
        $insertData['updated_by'] = $userId;
    //    pre($request->all(),1);
        if ($request->hasFile('video')){
            $file = $request->video;
            $extension = $file->getClientOriginalExtension();
            $videoName = 'video_'.time().'.'.$extension;

        $destinationPath = public_path('/uploads/videos');
            $file->move($destinationPath, $videoName);
            $insertData['video'] = $videoName;
        }
        Video::create($insertData);
        return redirect('video')->with('success', 'Video Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(VideoRequest $request, $id){
        $userId = Auth::id();
        $video = Video::findOrFail($id);
        $updateData = $request->all();
    //    $updateData['slug'] = strtolower(str_replace(' ','_',$updateData['title']));
        $updateData['updated_by'] = $userId;
    //    pre($request->all(),1);
        if ($request->hasFile('video')){
            File::delete($video->video);
        //    $files = array($event->video);
        //    File::delete($files);
            $file = $request->video;
            $extension = $file->getClientOriginalExtension();
            $videoName = 'video_'.time().'.'.$extension;

            $destinationPath = public_path('/uploads/videos');
            $file->move($destinationPath, $videoName);
            $updateData['video'] = $videoName;
        }else{
            $updateData['video'] = $video->video;
        }
        $video->update($updateData);
        return redirect('video')->with('success', 'Video Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $gallery = Video::findOrFail($id);
        File::delete($gallery->video);
        $gallery->delete();
        return redirect('video')->with('success', 'Video Successfully Deleted');
    }
}
