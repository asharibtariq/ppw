<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Requests\GalleryRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $title = "Gallery";
        return view('adminpanel.gallery.gallery')->with('title', $title);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $title = "Add Gallery";
        return view('adminpanel.gallery.add_gallery')->with('title', $title);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request){
        $userId = Auth::id();
        $insertData = $request->all();
    //    $insertData['slug'] = strtolower(str_replace(' ','_',$insertData['title']));
        $insertData['created_by'] = $userId;
        $insertData['updated_by'] = $userId;
    //    pre($request->all(),1);
        if ($request->hasFile('image')){
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $imageName = 'gallery_'.time().'.'.$extension;

            $destinationPath = public_path('/uploads/gallery');
            $file->move($destinationPath, $imageName);
            $insertData['image'] = $imageName;
        }
        Gallery::create($insertData);
        return redirect('gallery')->with('success', 'Gallery Image Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery){
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $gallery = Gallery::findOrFail($id);
        $title = "Edit Gallery";
        $data['gallery'] = $gallery;
        return view('adminpanel.gallery.edit_gallery', $data)->with('title', $title);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryRequest $request, $id){
        $userId = Auth::id();
        $gallery = Gallery::findOrFail($id);
        $updateData = $request->all();
    //    $updateData['slug'] = strtolower(str_replace(' ','_',$updateData['title']));
        $updateData['updated_by'] = $userId;
    //    pre($request->all(),1);
        if ($request->hasFile('image')){
            File::delete($gallery->image);
            //    $files = array($event->image);
            //    File::delete($files);
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $imageName = 'gallery_'.time().'.'.$extension;

            $destinationPath = public_path('/uploads/gallery');
            $file->move($destinationPath, $imageName);
            $updateData['image'] = $imageName;
        }else{
            $updateData['image'] = $gallery->image;
        }
        $gallery->update($updateData);
        return redirect('gallery')->with('success', 'Gallery Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $gallery = Gallery::findOrFail($id);
        File::delete($gallery->image);
        $gallery->delete();
        return redirect('gallery')->with('success', 'Gallery Successfully Deleted');
    }
}
