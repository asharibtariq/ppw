<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class PublicationController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Publication";
        return view('adminpanel.publication.publication')->with('title', $title);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Add Publication";
        return view('adminpanel.publication.add_publication')->with('title', $title);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userId = Auth::id();
        $insertData = $request->all();
        //    $insertData['slug'] = strtolower(str_replace(' ','_',$insertData['title']));
        $insertData['created_by'] = $userId;
        $insertData['updated_by'] = $userId;
        //    pre($request->all(),1);
        if ($request->hasFile('document')){
            $file = $request->document;
            $extension = $file->getClientOriginalExtension();
            $documentName = 'publication_'.time().'.'.$extension;

            $destinationPath = public_path('/uploads/publication');
            $file->move($destinationPath, $documentName);
            $insertData['document'] = $documentName;
        }
        Publication::create($insertData);
        return redirect('publication')->with('success', 'Publication Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function show(Publication $publication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publication = Publication::findOrFail($id);
        $title = "Edit Publication";
        $data['publication'] = $publication;
        return view('adminpanel.publication.edit_publication', $data)->with('title', $title);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $userId = Auth::id();
        $publication = Publication::findOrFail($id);
        $updateData = $request->all();
        //    $updateData['slug'] = strtolower(str_replace(' ','_',$updateData['title']));
        $updateData['updated_by'] = $userId;
        //    pre($request->all(),1);
        if ($request->hasFile('document')){
            File::delete($publication->document);
            //    $files = array($news->image);
            //    File::delete($files);
            $file = $request->document;
            $extension = $file->getClientOriginalExtension();
            $documentName = 'publication_'.time().'.'.$extension;

            $destinationPath = public_path('/uploads/publication');
            $file->move($destinationPath, $documentName);
            $updateData['document'] = $documentName;
        }else{
            $updateData['document'] = $publication->document;
        }
        $publication->update($updateData);
        return redirect('publication')->with('success', 'Publication Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $publication = Publication::findOrFail($id);
        File::delete($publication->document);
        $publication->delete();
        return redirect('publication')->with('success', 'Publication Successfully Deleted');
    }
}
