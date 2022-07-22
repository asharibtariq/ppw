<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;
use App\Http\Requests\TrainingRequest;
use Illuminate\Support\Facades\Auth;

class TrainingController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $title = "Training";
        return view('adminpanel.training.training')->with('title', $title);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $title = "Add Training";
        return view('adminpanel.training.add_training')->with('title', $title);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TrainingRequest $request){
        $userId = Auth::id();
        $insertData = $request->all();
    //    $insertData['slug'] = strtolower(str_replace(' ','_',$insertData['title']));
        $insertData['created_by'] = $userId;
        $insertData['updated_by'] = $userId;
        //    pre($request->all(),1);
        if ($request->hasFile('document')){
            $file = $request->document;
            $extension = $file->getClientOriginalExtension();
            $documentName = 'training_'.time().'.'.$extension;

            $destinationPath = public_path('/uploads/training');
            $file->move($destinationPath, $documentName);
            $insertData['document'] = $documentName;
        }
        Training::create($insertData);
        return redirect('training')->with('success', 'Training Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function show(Training $training){
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $training = Training::findOrFail($id);
        $title = "Edit Training";
        $data['training'] = $training;
        return view('adminpanel.training.edit_training', $data)->with('title', $title);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function update(TrainingRequest $request, $id){
        $userId = Auth::id();
        $training = Training::findOrFail($id);
        $updateData = $request->all();
    //    $updateData['slug'] = strtolower(str_replace(' ','_',$updateData['title']));
        $updateData['updated_by'] = $userId;
    //    pre($request->all(),1);
        if ($request->hasFile('document')){
            File::delete($training->document);
            //    $files = array($news->image);
            //    File::delete($files);
            $file = $request->document;
            $extension = $file->getClientOriginalExtension();
            $documentName = 'training_'.time().'.'.$extension;

            $destinationPath = public_path('/uploads/training');
            $file->move($destinationPath, $documentName);
            $updateData['document'] = $documentName;
        }else{
            $updateData['document'] = $training->document;
        }
        $training->update($updateData);
        return redirect('training')->with('success', 'Training Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $training = Training::findOrFail($id);
        File::delete($training->document);
        $training->delete();
        return redirect('training')->with('success', 'Training Successfully Deleted');
    }
}
