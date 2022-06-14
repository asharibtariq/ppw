<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Requests\NewsRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class NewsController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $title = "News";
        return view('adminpanel.news.news')->with('title', $title);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $title = "Add News";
        return view('adminpanel.news.add_news')->with('title', $title);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request){
        $userId = Auth::id();
        $insertData = $request->all();
    //    $insertData['slug'] = strtolower(str_replace(' ','_',$insertData['title']));
        $insertData['created_by'] = $userId;
        $insertData['updated_by'] = $userId;
    //    pre($request->all(),1);
        if ($request->hasFile('image')){
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $imageName = 'news_'.time().'.'.$extension;

            $destinationPath = public_path('/uploads/news');
            $file->move($destinationPath, $imageName);
            $insertData['image'] = $imageName;
        }
        News::create($insertData);
        return redirect('news')->with('success', 'News Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news){
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $news = News::findOrFail($id);
        $title = "Edit News";
        $data['news'] = $news;
        return view('adminpanel.news.edit_news', $data)->with('title', $title);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(NewsRequest $request, $id){
        $userId = Auth::id();
        $news = News::findOrFail($id);
        $updateData = $request->all();
    //    $updateData['slug'] = strtolower(str_replace(' ','_',$updateData['title']));
        $updateData['updated_by'] = $userId;
        //    pre($request->all(),1);
        if ($request->hasFile('image')){
            File::delete($news->image);
        //    $files = array($news->image);
        //    File::delete($files);
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $imageName = 'news_'.time().'.'.$extension;

            $destinationPath = public_path('/uploads/news');
            $file->move($destinationPath, $imageName);
            $updateData['image'] = $imageName;
        }else{
            $updateData['image'] = $news->image;
        }
        $news->update($updateData);
        return redirect('news')->with('success', 'News Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $news = News::findOrFail($id);
        File::delete($news->image);
        $news->delete();
        return redirect('news')->with('success', 'News Successfully Deleted');
    }
}
