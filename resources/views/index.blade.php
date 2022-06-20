@extends('main_layouts.app')
@section('main_content')

    <style>
        #btn_scroll_up {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: #8ec020;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 4px;
        }

        #btn_scroll_up:hover {
            background-color: #555;
        }
    </style>

    <button onclick="topFunction()" id="btn_scroll_up" title="Go to top">Top</button>

    <header id="home">
        <div id="home-owl" class="owl-carousel owl-theme">

            <div class="home-item">
                <div class="section-bg" style="background-image:url({{asset('img/main_page_img_01.jpg')}})"></div>
                <div class="home">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="home-content">
                                    <h1>Midwives Day 2022</h1>
                                    <p class="lead">Commemoration of the International Midwives Day 2022 Arranged by
                                        Ministry of National Health Services Regulation& Coordination held at MCH PIMS,
                                        9th May 2022.</p>
                                    {{--<a href="#" class="primary-button">View Event</a>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="home-item">
                <div class="section-bg" style="background-image:url({{asset('img/main_page_img_02.jpg')}})"></div>
                <div class="home">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="home-content">
                                    <h1>International Women's Day</h1>
                                    <p class="lead">International Women's Day was marked by the Launch of National
                                        Gender Policy Framework. Ministry of Planning Development & Special Initiatives
                                        arranged the event.</p>
                                    {{--<a href="#" class="primary-button">View Event</a>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="home-item">
                <div class="section-bg" style="background-image:url({{asset('img/main_page_img_03.jpg')}})"></div>
                <div class="home">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="home-content">
                                    <h1>MPDSR National Meeting</h1>
                                    <p class="lead">The event was graced by Iftikhar Shallwani Special Secretary M/o
                                        MHSRC@Shallwani DG Sabina Durrani PPW, Dr Mohamed Afifi Regional Director , and
                                        health professionals from all provinces.</p>
                                    {{--<a href="#" class="primary-button">View Event</a>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </header>

    <div id="about" class="section" style="padding-bottom: 4%;">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="section-title">
                        <h2 class="title">Welcome to PPW</h2>
                        <p class="sub-title">Population planning has been a regular feature of periodic-five-year
                            National Development Plans of Pakistan since 1955.</p>
                    </div>
                    <div class="about-content">
                        <p>Although Pakistan has one of the oldest family planning programmes in the region yet,
                            strategic disconnects between informed population policies and planning, and socio-economic
                            development has resulted in limited progress not only towards lowering the fertility rates,
                            but also in improving the contraceptive prevalence rates, resulting in a sluggish
                            demographic transition.</p>
                        <a href="{{url("about")}}" class="primary-button">Read More</a>
                    </div>
                </div>
                <div class="col-md-offset-1 col-md-6">
                    <a href="{{asset('vid/about_video_01.mp4')}}" class="about-video" target="_blank">
                        <i class="play-icon fa fa-play"></i>
                        <img src="{{asset('img/aboout_img_01.jpg')}}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="numbers" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="number">
                        <i class="fa fa-smile-o"></i>
                        <h3>47k</h3>
                        <span>Families</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="number">
                        <i class="fa fa-heartbeat"></i>
                        <h3>154K</h3>
                        <span>Health Insurances</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="number">
                        <i class="fa fa-money"></i>
                        <h3>785K</h3>
                        <span>Funds Donated</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="number">
                        <i class="fa fa-handshake-o"></i>
                        <h3>357</h3>
                        <span>Gov't Collabs</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="news" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title text-center">
                        <h2 class="title">Latest News</h2>
                    </div>
                </div>
                @php
                    $news = json_decode($news)
                @endphp
                <?php
                if (!empty($news)){
                $i = 0;
                foreach ($news as $news_row){
                $news_description = strlen($news_row->description) > 120 ? substr($news_row->description, 0, 120) . "..." : $news_row->description;
                ?>
                <div class="col-md-4">
                    <div class="causes">
                        <div class="causes-img">
                            <a href="{{url('news_details', $news_row->id)}}">
                                <img src="{{asset('uploads/news/'.$news_row->image)}}" alt="">
                            </a>
                        </div>
                        <div class="causes-content">
                            <h3>
                                <a href="{{url('news_details', $news_row->id)}}">{{$news_row->title}}</a>
                            </h3>
                            <p>{{$news_description}}</p>
                            <a href="{{url('news_details', $news_row->id)}}" class="primary-button causes-donate">View
                                Details</a>
                        </div>
                    </div>
                </div>
                <?php
                $i++;
                if ($i % 3 == 0){
                ?>
                <div class="clearfix visible-md visible-lg"></div>
                <?php
                }
                ?>
                <?php
                }
                }
                ?>

            </div>
        </div>
    </div>

    <div id="cta" class="section">
        <div class="section-bg" style="background-image:url({{asset('img/background-2.jpg')}})"
             data-stellar-background-ratio="0.5"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="cta-content text-center">
                        <h1 style="color: white">PPW</h1>
                        <p style="color: white" class="lead">Working on Pakistan's National narrative : Rights,
                            Responsibility & Balance (Tawazun).</p>
                        <a href="{{url('about')}}" class="primary-button">Visit Us Now!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="events" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title text-center">
                        <h2 class="title">Events</h2>
                    </div>
                </div>

                @php
                    $event = json_decode($event)
                @endphp
                <?php
                if (!empty($event)){
                $i = 0;
                foreach ($event as $event_row){
                $event_description = strlen($event_row->description) > 120 ? substr($event_row->description, 0, 120) . "..." : $event_row->description;
                ?>

                <div class="col-md-6">
                    <div class="event">
                        <div class="event-img">
                            <a href="{{url('event_details', $event_row->id)}}">
                                <img src="{{asset('uploads/event/'.$event_row->image)}}" alt="">
                            </a>
                        </div>
                        <div class="event-content">
                            <h3><a href="{{url('event_details', $event_row->id)}}">{{$event_row->title}}</a></h3>
                            <ul class="event-meta">
                                <li><i class="fa fa-clock-o"></i> {{$event_row->date}}</li>
                                <li><i class="fa fa-map-marker"></i> {{$event_row->location}}</li>
                            </ul>
                            <p>{{$event_description}}</p>
                        </div>
                    </div>
                </div>

                <?php
                $i++;
                if ($i % 2 == 0){
                ?>
                <div class="clearfix visible-md visible-lg"></div>
                <?php
                }
                ?>
                <?php
                }
                }
                ?>

            </div>
        </div>
    </div>

    <div id="population_day" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title text-center">
                        <h2 class="title">World Population Day 11th July 2021</h2>
                        <p style="color: black !important;"><i>World Population Day is Celebrated on 11th July of every
                                year</i></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <img src="{{asset('img/pp_analysis_thumb.jpg')}}"/>
                </div>
                <div class="col-md-8 col-sm-6 col-xs-12" style="margin-top: 2%;">
                    <span class=""></span>
                    <ul class="list-group" style="color: black !important;">
                        <li class="list-group-item"><img src="{{asset('img/tick.png')}}" width="15"/> Pakistan is the
                            world's 5th most populous country, with the population of over 220 million
                        </li>
                        <li class="list-group-item"><img src="{{asset('img/tick.png')}}" width="15"/> Pakistan has the
                            highest population growth rate among SAARC countries at 2.4 percent which means an addition
                            of over 3 million people every year.
                        </li>
                        <li class="list-group-item"><img src="{{asset('img/tick.png')}}" width="15"/> Theme of this
                            year's World Population Day is 'Rights &amp; Choices are the Answer; Whether baby boom or
                            bust, the solution lies in prioritizing the reproductive health and rights of all people'
                        </li>
                    </ul>
                    <span style="color: black !important;">National narrative of Pakistan on population states; "Parents have the right to freely and responsibly decide the number and spacing of their children to fulfill the fundamental rights of their children and family by maintaining a Balance/ Tawazun between their family size and resources. The Government and society have the responsibility to facilitate parents to achieve this balance by providing universal access to family planning information and services, thereby achieving sustainable development."</span>
                </div>
            </div>
        </div>
    </div>

    <div id="testimonial" class="section">
        <div class="section-bg" style="background-image:url({{asset('img/office_wall_01.jpg')}})"
             data-stellar-background-ratio="0.5"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title text-center">
                        <h2 class="title" style="color: white !important;">Our Team</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div id="testimonial-owl" class="owl-carousel owl-theme">

                        <div class="testimonial">
                            <div class="testimonial-meta">
                                <div class="testimonial-img">
                                    <img src="{{asset('img/dg2.jpg')}}" alt="">
                                </div>
                                <h3>DR. SABINA IMRAN DURRANI</h3>
                                <span style="text-shadow: 2px 2px 2px black; font-size: medium;">DG POPULATION</span>
                            </div>
                            <div style="background-color:white; border-radius: 10px; padding: 25px"
                                 class="testimonial-quote">

                                <p>Currently working as a Director General in Population Program Wing of Ministry of
                                    NHSRC, Islamabad, Pakistan.</p>

                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-meta">
                                <div class="testimonial-img">
                                    <img src="{{asset('img/dg2.jpg')}}" alt="">
                                </div>
                                <h3>DR. SABINA IMRAN DURRANI</h3>
                                <span style="text-shadow: 2px 2px 2px black; font-size: medium;">DG POPULATION</span>
                            </div>
                            <div style="background-color:white; border-radius: 10px; padding: 25px"
                                 class="testimonial-quote">

                                <p>Currently working as a Director General in Population Program Wing of Ministry of
                                    NHSRC, Islamabad, Pakistan.</p>

                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-meta">
                                <div class="testimonial-img">
                                    <img src="{{asset('img/dg2.jpg')}}" alt="">
                                </div>
                                <h3>DR. SABINA IMRAN DURRANI</h3>
                                <span style="text-shadow: 2px 2px 2px black; font-size: medium;">DG POPULATION</span>
                            </div>
                            <div style="background-color:white; border-radius: 10px; padding: 25px"
                                 class="testimonial-quote">

                                <p>Currently working as a Director General in Population Program Wing of Ministry of
                                    NHSRC, Islamabad, Pakistan.</p>

                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-meta">
                                <div class="testimonial-img">
                                    <img src="{{asset('img/dg2.jpg')}}" alt="">
                                </div>
                                <h3>DR. SABINA IMRAN DURRANI</h3>
                                <span style="text-shadow: 2px 2px 2px black; font-size: medium;">DG POPULATION</span>
                            </div>
                            <div style="background-color:white; border-radius: 10px; padding: 25px"
                                 class="testimonial-quote">

                                <p>Currently working as a Director General in Population Program Wing of Ministry of
                                    NHSRC, Islamabad, Pakistan.</p>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="contact" class="article-reply" style="padding-bottom: 50px">
        <div class="container">
            <h3>Contact Us</h3>
            <p>Population Program Wing.</p>
            <form name="" method="post" action="{{url('contact_add')}}">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="input"
                                   id="firstname"
                                   name="firstname"
                                   placeholder="First Name"
                                   type="text"
                                   required/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="input"
                                   id="lastname"
                                   name="lastname"
                                   placeholder="Last Name"
                                   type="text"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="input"
                                   id="phonenumber"
                                   name="phonenumber"
                                   placeholder="Phone Number"
                                   type="text" required/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="input"
                                   id="email"
                                   name="email"
                                   placeholder="Email"
                                   type="email" required/>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea class="input"
                                      id="message"
                                      name="message"
                                      placeholder="Message"
                                      required></textarea>
                        </div>
                        <button type="submit" class="primary-button">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{--<div id="blog" class="section">--}}
    {{--<div class="container">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-8 col-md-offset-2">--}}
    {{--<div class="section-title text-center">--}}
    {{--<h2 class="title">Our Blog</h2>--}}
    {{--<p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor--}}
    {{--incididunt ut labore et dolore magna aliqua.</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-4">--}}
    {{--<div class="article">--}}
    {{--<div class="article-img">--}}
    {{--<a href="single-blog.html">--}}
    {{--<img src="{{asset('img/xpost-1.jpg.pagespeed.ic.vrRgc_3PjI.jpg')}}" alt="">--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--<div class="article-content">--}}
    {{--<h3 class="article-title"><a href="single-blog.html">Possit nostro aeterno eu vis, ut cum quem--}}
    {{--reque</a></h3>--}}
    {{--<ul class="article-meta">--}}
    {{--<li>12 November 2018</li>--}}
    {{--<li>By John doe</li>--}}
    {{--<li>0 Comments</li>--}}
    {{--</ul>--}}
    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut--}}
    {{--labore et dolore magna aliqua.</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="col-md-4">--}}
    {{--<div class="article">--}}
    {{--<div class="article-img">--}}
    {{--<a href="single-blog.html">--}}
    {{--<img src="{{asset('img/xpost-2.jpg.pagespeed.ic.xh7_NMuawU.jpg')}}" alt="">--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--<div class="article-content">--}}
    {{--<h3 class="article-title"><a href="single-blog.html">Vix fuisset tibique facilisis cu. Justo--}}
    {{--accusata ius at</a></h3>--}}
    {{--<ul class="article-meta">--}}
    {{--<li>12 November 2018</li>--}}
    {{--<li>By John doe</li>--}}
    {{--<li>0 Comments</li>--}}
    {{--</ul>--}}
    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut--}}
    {{--labore et dolore magna aliqua.</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="col-md-4">--}}
    {{--<div class="article">--}}
    {{--<div class="article-img">--}}
    {{--<a href="single-blog.html">--}}
    {{--<img src="{{asset('img/xpost-3.jpg.pagespeed.ic.THm-cPziJC.jpg')}}" alt="">--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--<div class="article-content">--}}
    {{--<h3 class="article-title"><a href="single-blog.html">Possit nostro aeterno eu vis, ut cum quem--}}
    {{--reque</a></h3>--}}
    {{--<ul class="article-meta">--}}
    {{--<li>12 November 2018</li>--}}
    {{--<li>By John doe</li>--}}
    {{--<li>0 Comments</li>--}}
    {{--</ul>--}}
    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut--}}
    {{--labore et dolore magna aliqua.</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    <script>
        //Get the button
        var mybutton = document.getElementById("btn_scroll_up");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>

@endsection