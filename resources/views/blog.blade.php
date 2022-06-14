@extends('main_layouts.app')
@section('main_content')

<div id="page-header">
    <div class="section-bg" style="background-image:url(img/background-2.jpg)"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header-content">
                    <h1>Blog Page</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{url('')}}">Home</a></li>
                        <li class="active">Blog</li>
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
                <div class="row">

                    <div class="col-md-6">
                        <div class="article">
                            <div class="article-img">
                                <a href="{{url('single_blog')}}">
                                    <img src="{{asset('img/xpost-1.jpg.pagespeed.ic.vrRgc_3PjI.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="article-content">
                                <h3 class="article-title"><a href="{{url('single_blog')}}">Possit nostro aeterno eu vis, ut
                                        cum quem reque</a></h3>
                                <ul class="article-meta">
                                    <li>12 November 2018</li>
                                    <li>By John doe</li>
                                    <li>0 Comments</li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="article">
                            <div class="article-img">
                                <a href="{{url('single_blog')}}">
                                    <img src="{{asset('img/xpost-2.jpg.pagespeed.ic.xh7_NMuawU.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="article-content">
                                <h3 class="article-title"><a href="{{url('single_blog')}}">Vix fuisset tibique facilisis cu.
                                        Justo accusata ius at</a></h3>
                                <ul class="article-meta">
                                    <li>12 November 2018</li>
                                    <li>By John doe</li>
                                    <li>0 Comments</li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix visible-md visible-lg"></div>

                    <div class="col-md-6">
                        <div class="article">
                            <div class="article-img">
                                <a href="{{url('single_blog')}}">
                                    <img src="{{asset('img/xpost-3.jpg.pagespeed.ic.THm-cPziJC.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="article-content">
                                <h3 class="article-title"><a href="{{url('single_blog')}}">Possit nostro aeterno eu vis, ut
                                        cum quem reque</a></h3>
                                <ul class="article-meta">
                                    <li>12 November 2018</li>
                                    <li>By John doe</li>
                                    <li>0 Comments</li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="article">
                            <div class="article-img">
                                <a href="{{url('single_blog')}}">
                                    <img src="{{asset('img/xpost-4.jpg.pagespeed.ic.GCjGREkb1-.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="article-content">
                                <h3 class="article-title"><a href="{{url('single_blog')}}">Vix fuisset tibique facilisis cu.
                                        Justo accusata ius at</a></h3>
                                <ul class="article-meta">
                                    <li>12 November 2018</li>
                                    <li>By John doe</li>
                                    <li>0 Comments</li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix visible-md visible-lg"></div>

                    <div class="col-md-6">
                        <div class="article">
                            <div class="article-img">
                                <a href="{{url('single_blog')}}">
                                    <img src="{{asset('img/xpost-5.jpg.pagespeed.ic.qvDU9cRyRX.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="article-content">
                                <h3 class="article-title"><a href="{{url('single_blog')}}">Possit nostro aeterno eu vis, ut
                                        cum quem reque</a></h3>
                                <ul class="article-meta">
                                    <li>12 November 2018</li>
                                    <li>By John doe</li>
                                    <li>0 Comments</li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="article">
                            <div class="article-img">
                                <a href="{{url('single_blog')}}">
                                    <img src="{{asset('img/xpost-6.jpg.pagespeed.ic.EY1W5yetOp.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="article-content">
                                <h3 class="article-title"><a href="{{url('single_blog')}}">Vix fuisset tibique facilisis cu.
                                        Justo accusata ius at</a></h3>
                                <ul class="article-meta">
                                    <li>12 November 2018</li>
                                    <li>By John doe</li>
                                    <li>0 Comments</li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <ul class="article-pagination">
                            <li class="active">1</li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li>...</li>
                            <li><a href="#">12</a></li>
                        </ul>
                    </div>

                </div>
            </main>
            <aside id="aside" class="col-md-3">

                <div class="widget">
                    <h3 class="widget-title">Category</h3>
                    <div class="widget-category">
                        <ul>
                            <li><a href="#">Health<span>(57)</span></a></li>
                            <li><a href="#">Food<span>(86)</span></a></li>
                            <li><a href="#">Education<span>(241)</span></a></li>
                            <li><a href="#">Donation<span>(65)</span></a></li>
                            <li><a href="#">Events<span>(14)</span></a></li>
                        </ul>
                    </div>
                </div>


                <div class="widget">
                    <h3 class="widget-title">Latest Posts</h3>

                    <div class="widget-post">
                        <a href="#">
                            <div class="widget-img">
                                <img src="{{asset('img/xwidget-1.jpg.pagespeed.ic.oldoL5gfhD.jpg')}}" alt="">
                            </div>
                            <div class="widget-content">
                                Possit nostro aeterno eu vis, ut cum quem reque
                            </div>
                        </a>
                        <ul class="article-meta">
                            <li>By John doe</li>
                            <li>12 November 2018</li>
                        </ul>
                    </div>


                    <div class="widget-post">
                        <a href="#">
                            <div class="widget-img">
                                <img src="{{asset('img/xwidget-2.jpg.pagespeed.ic.BwvwTN5sj9.jpg')}}" alt="">
                            </div>
                            <div class="widget-content">
                                Vix fuisset tibique facilisis cu. Justo accusata ius at
                            </div>
                        </a>
                        <ul class="article-meta">
                            <li>By John doe</li>
                            <li>12 November 2018</li>
                        </ul>
                    </div>


                    <div class="widget-post">
                        <a href="#">
                            <div class="widget-img">
                                <img src="{{asset('img/xwidget-3.jpg.pagespeed.ic.Cz6oaCi-ex.jpg')}}" alt="">
                            </div>
                            <div class="widget-content">
                                Possit nostro aeterno eu vis, ut cum quem reque
                            </div>
                        </a>
                        <ul class="article-meta">
                            <li>By John doe</li>
                            <li>12 November 2018</li>
                        </ul>
                    </div>

                </div>

                <div class="widget">
                    <h3 class="widget-title">Latest Causes</h3>
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