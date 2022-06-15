@extends('main_layouts.app')
@section('main_content')

    <div id="page-header">
        <div class="section-bg" style="background-image:url({{asset('img/background-2.jpg')}})"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-content">
                        <h1>News Details</h1>
                        <ul class="breadcrumb">
                            <li><a href="{{url('')}}">Home</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">

                <main id="main" class="col-md-9">
                    <div class="article causes-details">
                        <div class="article-img">
                            <img src="{{asset('uploads/news/'.$result->image)}}" alt="">
                        </div>
                        <div class="article-content">
                            <h2 class="article-title">{{$result->title}}</h2>
                            <ul class="article-meta">
                                <li>{{$result->created_at}}</li>
                                <li>By {{$result->author}}</li>
                            </ul>
                            <p>{{$result->description}}</p>
                        </div>
                    </div>
                </main>

                <aside id="aside" class="col-md-3">

                    <div class="widget">
                        <h3 class="widget-title">Latest News</h3>

                        <div class="widget-causes">
                            <a href="#">
                                <div class="widget-img">
                                    <img src="{{asset('img/xwidget-1.jpg.pagespeed.ic.oldoL5gfhD.jpg')}}" alt="">
                                </div>
                                <div class="widget-content">
                                    Possit nostro aeterno eu vis, ut cum quem reque
                                    <div class="causes-progress">
                                        <div class="causes-progress-bar">
                                            <div style="width: 64%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div>
                                <span class="causes-raised">Raised: <strong>52.000$</strong></span> -
                                <span class="causes-goal">Goal: <strong>90.000$</strong></span>
                            </div>
                        </div>


                        <div class="widget-causes">
                            <a href="#">
                                <div class="widget-img">
                                    <img src="{{asset('img/xwidget-2.jpg.pagespeed.ic.BwvwTN5sj9.jpg')}}" alt="">
                                </div>
                                <div class="widget-content">
                                    Vix fuisset tibique facilisis cu. Justo accusata ius at
                                    <div class="causes-progress">
                                        <div class="causes-progress-bar">
                                            <div style="width: 75%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div>
                                <span class="causes-raised">Raised: <strong>52.000$</strong></span> -
                                <span class="causes-goal">Goal: <strong>90.000$</strong></span>
                            </div>
                        </div>


                        <div class="widget-causes">
                            <a href="#">
                                <div class="widget-img">
                                    <img src="{{asset('img/xwidget-3.jpg.pagespeed.ic.Cz6oaCi-ex.jpg')}}" alt="">
                                </div>
                                <div class="widget-content">
                                    Possit nostro aeterno eu vis, ut cum quem reque
                                    <div class="causes-progress">
                                        <div class="causes-progress-bar">
                                            <div style="width: 53%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div>
                                <span class="causes-raised">Raised: <strong>52.000$</strong></span> -
                                <span class="causes-goal">Goal: <strong>90.000$</strong></span>
                            </div>
                        </div>

                    </div>

                </aside>

            </div>
        </div>
    </div>

@endsection