@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Contact</h4>
                    </div>
                    <div class="card-body">
                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger" style="margin: 6px; padding: 10px" role="alert">{{ $error }}</div>
                            @endforeach
                        @endif

                        <form method="post" action="{{url('update_contact', $contact->id)}}" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            {{--<input type="hidden" name="_method" value="PUT">--}}
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="label-paf" for="firstname">First Name</label>
                                        <input type="text"
                                               name="firstname"
                                               id="firstname"
                                               class="form-control input-paf only_alpha"
                                               placeholder="FirstName"
                                               minlength="3"
                                               value="{{ $contact->firstname }}"
                                               required />
                                        @if ($errors->has('firstname'))
                                            <span class="text-danger">{{ $errors->first('firstname') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="label-paf" for="lastname">Last Name</label>
                                        <input type="text"
                                               name="lastname"
                                               id="lastname"
                                               class="form-control input-paf"
                                               value="{{ $contact->lastname }}"
                                               placeholder="Title" />
                                        @if ($errors->has('lastname'))
                                            <span class="text-danger">{{ $errors->first('lastname') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="label-paf" for="email">Email</label>
                                        <input type="email"
                                               name="email"
                                               id="email"
                                               class="form-control input-paf"
                                               value="{{ $contact->email }}"
                                               placeholder="Email" />
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="label-paf" for="phonenumber">Phone Number</label>
                                        <input type="text"
                                               name="phonenumber"
                                               id="phonenumber"
                                               class="form-control input-paf"
                                               value="{{ $contact->phonenumber }}"
                                               placeholder="PhoneNumber" />
                                        @if ($errors->has('phonenumber'))
                                            <span class="text-danger">{{ $errors->first('phonenumber') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="label-paf" for="message">Message</label>
                                        <textarea name="message"
                                                  id="message"
                                                  class="form-control input-paf"
                                                  placeholder="Message">{{ $contact->message }}</textarea>
                                        @if ($errors->has('message'))
                                            <span class="text-danger">{{ $errors->first('message') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="label-paf" for="status">Status</label>
                                        <select class="form-control input-paf" name="status" id="status">
                                            <option value="Y" {{$contact->status == "Y" ? "selected" : ""}}>Active</option>
                                            <option value="N" {{$contact->status == "N" ? "selected" : ""}}>In-Active</option>
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