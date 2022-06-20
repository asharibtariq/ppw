@extends('main_layouts.app')
@section('main_content')

    <div id="page-header">
        <div class="section-bg" style="background-image:url(img/background-2.jpg)"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-content">
                        <h1>Picture Gallery</h1>
                        <ul class="breadcrumb">
                            <li><a href="{{url('')}}">Home</a></li>
                            <li><a href="#">Picture Gallery</a></li>
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
                            <h2 class="article-title text-center">Pictures Gallery</h2>
                            <hr/>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="article">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="article-img">
                                    <a href="{{asset('img/pic_gal_01.jpg')}}">
                                        <img src="{{asset('img/pic_gal_01.jpg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="article-img">
                                    <a href="{{asset('img/pic_gal_03.jpg')}}">
                                        <img src="{{asset('img/pic_gal_03.jpg')}}" alt="">
                                    </a>
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
                                    <a href="{{asset('img/pic_gal_04.jpg')}}">
                                        <img src="{{asset('img/pic_gal_04.jpg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="article-img">
                                    <a href="{{asset('img/pic_gal_06.jpg')}}">
                                        <img src="{{asset('img/pic_gal_06.jpg')}}" alt="">
                                    </a>
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
                                    <a href="{{asset('img/pic_gal_07.jpg')}}">
                                        <img src="{{asset('img/pic_gal_07.jpg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="article-img">
                                    <a href="{{asset('img/pic_gal_08.jpg')}}">
                                        <img src="{{asset('img/pic_gal_08.jpg')}}" alt="">
                                    </a>
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
                                    <a href="{{asset('img/pic_gal_09.jpg')}}">
                                        <img src="{{asset('img/pic_gal_09.jpg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="article-img">
                                    <a href="{{asset('img/pic_gal_10.jpg')}}">
                                        <img src="{{asset('img/pic_gal_10.jpg')}}" alt="">
                                    </a>
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
                                    <a href="{{asset('img/pic_gal_11.jpg')}}">
                                        <img src="{{asset('img/pic_gal_11.jpg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="article-img">
                                    <a href="{{asset('img/pic_gal_14.jpg')}}">
                                        <img src="{{asset('img/pic_gal_14.jpg')}}" alt="">
                                    </a>
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
                                    <a href="{{asset('img/pic_gal_12.jpg')}}">
                                        <img src="{{asset('img/pic_gal_12.jpg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="article-img">
                                    <a href="{{asset('img/pic_gal_13.jpg')}}">
                                        <img src="{{asset('img/pic_gal_13.jpg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection