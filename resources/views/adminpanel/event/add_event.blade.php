@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Event</h4>
                    </div>
                    <div class="card-body">
                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger" style="margin: 6px; padding: 10px" role="alert">{{ $error }}</div>
                            @endforeach
                        @endif

                        <form name="" method="post" action="{{url('add_event')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="label-paf" for="author">Author</label>
                                        <input type="text" name="author" id="author" class="form-control input-paf only_alpha" placeholder="Author" minlength="3" required />
                                        @if ($errors->has('author'))
                                            <span class="text-danger">{{ $errors->first('author') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="label-paf" for="title">Title</label>
                                        <input type="text" name="title" id="title" class="form-control input-paf" placeholder="Title" minlength="3" required />
                                        @if ($errors->has('title'))
                                            <span class="text-danger">{{ $errors->first('title') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="label-paf" for="image">Image</label>
                                        <input type="file" name="image" id="image" class="btn btn-default">
                                        @if ($errors->has('image'))
                                            <span class="text-danger">{{ $errors->first('image') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="label-paf" for="location">Location</label>
                                        <input type="text" name="location" id="location" class="form-control input-paf" placeholder="Location" minlength="3" required />
                                        @if ($errors->has('location'))
                                            <span class="text-danger">{{ $errors->first('location') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="label-paf" for="date">Date</label>
                                        <input type="text" name="date" id="date" class="form-control input-paf" placeholder="Date" required />
                                        @if ($errors->has('date'))
                                            <span class="text-danger">{{ $errors->first('date') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="label-paf" for="description">Description</label>
                                        <textarea name="description" id="description" class="form-control input-paf" placeholder="Description"></textarea>
                                        @if ($errors->has('description'))
                                            <span class="text-danger">{{ $errors->first('description') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group"><br/>
                                        <button type="submit" class="btn btn-info pull-right">
                                            <i class="fa fa-check"> Enter</i>
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