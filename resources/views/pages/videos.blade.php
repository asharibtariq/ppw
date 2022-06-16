@extends('main_layouts.app')
@section('main_content')

    <div id="page-header">
        <div class="section-bg" style="background-image:url(img/background-2.jpg)"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-content">
                        <h1>Videos Gallery</h1>
                        <ul class="breadcrumb">
                            <li><a href="{{url('')}}">Home</a></li>
                            <li><a href="#">Videos Gallery</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="article">
                        <div class="article-img">
                            <a href="{{asset('img/dg5.jpeg')}}">
                                <img src="{{asset('img/dg5.jpeg')}}" alt="">
                            </a>
                        </div>
                        <div class="article-content">
                            <h3 class="article-title"><a href="#"></a>DR. Sabina Imran Durrani</h3>
                            <p>Direcor General Population Program Wing</p>
                              </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="article">
                        <div class="article-content">
                            <h2 class="article-title text-center">Video Messages</h2>
                            <hr/>
                        </div>
                    </div>
                </div>





                <div class="col-md-12">
                    <div class="article">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="article-img">
                                    {{--<a href="{{asset('vid/SAPMMessage.mp4')}}">--}}
                                    <video src="{{asset('vid/SAPMMessage.mp4')}}" height="270px" width="590px" controls=""></video>
                                    {{--</a>--}}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="article-img">
                                    {{--<a href="{{asset('img/gal_5.jpg')}}">--}}
                                    <video src="{{asset('vid/Secretary Message.mp4')}}" height="270px" width="590px" controls=""></video>
                                    {{--</a>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="article">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="article-img">
                                    {{--<a href="{{asset('vid/SAPMMessage.mp4')}}">--}}
                                    <video src="{{asset('vid/Asad Umar.mp4')}}" height="270px" width="590px" controls=""></video>
                                    {{--</a>--}}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="article-img">
                                    {{--<a href="{{asset('img/gal_5.jpg')}}">--}}
                                    <video src="{{asset('vid/garddea Farooqi.mp4')}}" height="270px" width="590px" controls=""></video>
                                    {{--</a>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="article">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="article-img">
                                    {{--<a href="{{asset('vid/SAPMMessage.mp4')}}">--}}
                                    <video src="{{asset('vid/hareem farooq.mp4')}}" height="270px" width="590px" controls=""></video>
                                    {{--</a>--}}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="article-img">
                                    {{--<a href="{{asset('img/gal_5.jpg')}}">--}}
                                    <video src="{{asset('vid/jamal shah.mp4')}}" height="270px" width="590px" controls=""></video>
                                    {{--</a>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="article">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="article-img">
                                    {{--<a href="{{asset('vid/SAPMMessage.mp4')}}">--}}
                                    <video src="{{asset('vid/ulma message.mp4')}}" height="270px" width="590px" controls=""></video>
                                    {{--</a>--}}
                                </div>
                            </div>
                            <div class="col-md-6">
                                {{--<div class="article-img">--}}
                                    {{--<a href="{{asset('img/gal_5.jpg')}}">--}}
                                    {{--<video src="{{asset('vid/SAPMMessage.mp4')}}" height="270px" width="590px" controls=""></video>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

@endsection