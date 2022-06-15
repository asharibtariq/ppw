@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Team</h4>
                    </div>
                    <div class="card-body">
                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger" style="margin: 6px; padding: 10px" role="alert">{{ $error }}</div>
                            @endforeach
                        @endif

                        <form method="post" action="{{url('update_team', $team->id)}}" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            {{--<input type="hidden" name="_method" value="PUT">--}}
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="label-paf" for="name">Name</label>
                                        <input type="text"
                                               name="name"
                                               id="name"
                                               class="form-control input-paf only_alpha"
                                               placeholder="Name"
                                               minlength="3"
                                               value="{{ $team->name}}"
                                               required />
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="label-paf" for="designation">Designation</label>
                                        <input type="text"
                                               name="designation"
                                               id="designation"
                                               class="form-control input-paf"
                                               value="{{ $team->designation }}"
                                               placeholder="Designation" />
                                        @if ($errors->has('designation'))
                                            <span class="text-danger">{{ $errors->first('designation') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="label-paf" for="image">
                                            @if ($team->image != '')
                                                <img src="{{asset('uploads/team/'.$team->image)}}" width="50" />
                                            @else
                                                Image
                                            @endif
                                            <input type="file" name="image" id="image" class="btn btn-default">
                                        </label>
                                        @if ($errors->has('image'))
                                            <span class="text-danger">{{ $errors->first('image') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="label-paf" for="department">Department</label>
                                        <input type="text"
                                               name="department"
                                               id="department"
                                               class="form-control input-paf"
                                               value="{{ $team->department }}"
                                               placeholder="Department" />
                                        @if ($errors->has('department'))
                                            <span class="text-danger">{{ $errors->first('department') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="label-paf" for="description">Description</label>
                                        <textarea name="description"
                                                  id="description"
                                                  class="form-control input-paf"
                                                  placeholder="Description">{{ $team->description }}</textarea>
                                        @if ($errors->has('description'))
                                            <span class="text-danger">{{ $errors->first('description') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="label-paf" for="status">Status</label>
                                        <select class="form-control input-paf" name="status" id="status">
                                            <option value="Y" {{$team->status == "Y" ? "selected" : ""}}>Active</option>
                                            <option value="N" {{$team->status == "N" ? "selected" : ""}}>In-Active</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="label-paf" for="btn_submit"> &nbsp; </label>
                                        <button type="submit" id="btn_submit" class="btn btn-info">
                                            <i class="fa fa-check"> Update</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection