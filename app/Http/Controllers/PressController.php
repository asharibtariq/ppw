<?php

namespace App\Http\Controllers;

use App\Models\Press;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PressRequest;
use Illuminate\Support\Facades\File;

class PressController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $title = "Press Release";
        return view('adminpanel.press.press')->with('title', $title);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $title = "Add Press Release";
        return view('adminpanel.press.add_press')->with('title', $title);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PressRequest $request){
        $userId = Auth::id();
        $insertData = $request->all();
    //    $insertData['slug'] = strtolower(str_replace(' ','_',$insertData['title']));
        $insertData['created_by'] = $userId;
        $insertData['updated_by'] = $userId;
        //    pre($request->all(),1);
        if ($request->hasFile('document')){
            $file = $request->document;
            $extension = $file->getClientOriginalExtension();
            $documentName = 'press_'.time().'.'.$extension;

            $destinationPath = public_path('/uploads/press');
            $file->move($destinationPath, $documentName);
            $insertData['document'] = $documentName;
        }
        Press::create($insertData);
        return redirect('press')->with('success', 'Press Release Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Press  $press
     * @return \Illuminate\Http\Response
     */
    public function show(Press $press){
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Press  $press
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $press = Press::findOrFail($id);
        $title = "Edit Press Release";
        $data['press'] = $press;
        return view('adminpanel.press.edit_press', $data)->with('title', $title);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Press  $press
     * @return \Illuminate\Http\Response
     */
    public function update(PressRequest $request, $id){
        $userId = Auth::id();
        $press = Press::findOrFail($id);
        $updateData = $request->all();
    //    $updateData['slug'] = strtolower(str_replace(' ','_',$updateData['title']));
        $updateData['updated_by'] = $userId;
    //    pre($request->all(),1);
        if ($request->hasFile('document')){
            File::delete($press->document);
            //    $files = array($news->image);
            //    File::delete($files);
            $file = $request->document;
            $extension = $file->getClientOriginalExtension();
            $documentName = 'press_'.time().'.'.$extension;

            $destinationPath = public_path('/uploads/press');
            $file->move($destinationPath, $documentName);
            $updateData['document'] = $documentName;
        }else{
            $updateData['document'] = $press->document;
        }
        $press->update($updateData);
        return redirect('press')->with('success', 'Press Release Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Press  $press
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $press = Press::findOrFail($id);
        File::delete($press->document);
        $press->delete();
        return redirect('press')->with('success', 'Press Release Successfully Deleted');
    }
}
