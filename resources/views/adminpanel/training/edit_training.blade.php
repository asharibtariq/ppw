@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Training</h4>
                    </div>
                    <div class="card-body">
                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger" style="margin: 6px; padding: 10px" role="alert">{{ $error }}</div>
                            @endforeach
                        @endif

                        <form method="post" action="{{url('update_training', $training->id)}}" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            {{--<input type="hidden" name="_method" value="PUT">--}}
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="label-paf" for="author">Author</label>
                                        <input type="text"
                                               name="author"
                                               id="author"
                                               class="form-control input-paf only_alpha"
                                               placeholder="Author"
                                               minlength="3"
                                               value="{{$training->author }}"
                                               required />
                                        @if ($errors->has('author'))
                                            <span class="text-danger">{{ $errors->first('author') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="label-paf" for="title">Title</label>
                                        <input type="text"
                                               name="title"
                                               id="title"
                                               class="form-control input-paf"
                                               value="{{ $training->title }}"
                                               placeholder="#" />
                                        @if ($errors->has('title'))
                                            <span class="text-danger">{{ $errors->first('title') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="label-paf" for="document">
                                            @if ($training->document != '')
                                                <img src="{{asset('uploads/training/'.$training->document)}}" width="50" />
                                            @else
                                                Document
                                            @endif
                                            <input type="file" accept="application/pdf" name="document" id="document" class="btn btn-default">
                                        </label>
                                        @if ($errors->has('document'))
                                            <span class="text-danger">{{ $errors->first('document') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="label-paf" for="description">Description</label>
                                        <textarea name="description"
                                                  id="description"
                                                  class="form-control input-paf"
                                                  placeholder="Description">{{ $training->description }}</textarea>
                                        @if ($errors->has('description'))
                                            <span class="text-danger">{{ $errors->first('description') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="label-paf" for="status">Status</label>
                                        <select class="form-control input-paf" name="status" id="status">
                                            <option value="Y" {{$training->status == "Y" ? "selected" : ""}}>Active</option>
                                            <option value="N" {{$training->status == "N" ? "selected" : ""}}>In-Active</option>
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