<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeamController extends Controller
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
        $title = "Teams";
        return view('adminpanel.team.team')->with('title', $title);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Add Team";
        return view('adminpanel.team.add_team')->with('title', $title);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeamRequest $request)
    {
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

            $destinationPath = public_path('/uploads/team');
            $file->move($destinationPath, $imageName);
            $insertData['image'] = $imageName;
        }
        Team::create($insertData);
        return redirect('event')->with('success', 'Team Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::findOrFail($id);
        $title = "Edit Team";
        $data['team'] = $team;
        return view('adminpanel.team.edit_team', $data)->with('title', $title);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(TeamRequest $request, $id)
    {
        $userId = Auth::id();
        $team = Team::findOrFail($id);
        $updateData = $request->all();
        //    $updateData['slug'] = strtolower(str_replace(' ','_',$updateData['title']));
        $updateData['updated_by'] = $userId;
        //    pre($request->all(),1);
        if ($request->hasFile('image')){
            File::delete($team->image);
            //    $files = array($event->image);
            //    File::delete($files);
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $imageName = 'event_'.time().'.'.$extension;

            $destinationPath = public_path('/uploads/event');
            $file->move($destinationPath, $imageName);
            $updateData['image'] = $imageName;
        }else{
            $updateData['image'] = $team->image;
        }
        $team->update($updateData);
        return redirect('team')->with('success', 'Team Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        File::delete($team->image);
        $team->delete();
        return redirect('team')->with('success', 'Team Successfully Deleted');
    }
}
