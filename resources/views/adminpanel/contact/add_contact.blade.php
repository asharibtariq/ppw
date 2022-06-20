@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Contact</h4>
                    </div>
                    <div class="card-body">
                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger" style="margin: 6px; padding: 10px" role="alert">{{ $error }}</div>
                            @endforeach
                        @endif

                        <form name="" method="post" action="{{url('add_contact')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="label-paf" for="firstname">First Name</label>
                                        <input type="text" name="firstname" id="firstname" class="form-control input-paf only_alpha" placeholder="FirstName" minlength="3" required />
                                        @if ($errors->has('firstname'))
                                            <span class="text-danger">{{ $errors->first('firstname') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="label-paf" for="lastname">Last Name</label>
                                        <input type="text" name="lastname" id="lastname" class="form-control input-paf" placeholder="LastName" minlength="3" required />
                                        @if ($errors->has('lastname'))
                                            <span class="text-danger">{{ $errors->first('lastname') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="label-paf" for="email">Email</label>
                                        <input type="email" name="email" id="email"class="form-control input-paf" placeholder="LastName" required />
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="label-paf" for="phonenumber">Phone Number</label>
                                        <input type="text" name="phonenumber" id="phonenumber" class="form-control input-paf" placeholder="PhoneNumber" minlength="10" required />
                                        @if ($errors->has('phonenumber'))
                                            <span class="text-danger">{{ $errors->first('phonenumber') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="label-paf" for="message">Message</label>
                                        <textarea name="message" id="message" class="form-control input-paf" placeholder="Message"></textarea>
                                        @if ($errors->has('message'))
                                            <span class="text-danger">{{ $errors->first('message') }}</span>
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