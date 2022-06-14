@extends('main_layouts.app')
@section('main_content')

<header id="home">
    <div id="home-owl" class="owl-carousel owl-theme">

        <div class="home-item">
            <div class="section-bg" style="background-image:url(img/main_page_img_01.jpg)"></div>
            <div class="home">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="home-content">
                                <h1>Midwives Day 2022</h1>
                                <p class="lead">Commemoration of the International Midwives Day 2022 Arranged by Ministry of National Health Services Regulation& Coordination held at MCH PIMS, 9th May 2022.</p>
                                <a href="#" class="primary-button">View Event</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-item">
            <div class="section-bg" style="background-image:url(img/main_page_img_02.jpg)"></div>
            <div class="home">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="home-content">
                                <h1>International Women's Day</h1>
                                <p class="lead">International Women's Day was marked by the Launch of National Gender Policy Framework. Ministry of Planning Development & Special Initiatives arranged the event.</p>
                                <a href="#" class="primary-button">View Event</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-item">
            <div class="section-bg" style="background-image:url(img/main_page_img_03.jpg)"></div>
            <div class="home">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="home-content">
                                <h1>MPDSR National Meeting</h1>
                                <p class="lead">The event was graced by Iftikhar Shallwani  Special Secretary M/o MHSRC@Shallwani DG Sabina Durrani PPW, Dr Mohamed Afifi Regional Director , and health professionals from all provinces.</p>
                                <a href="#" class="primary-button">View Event</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</header>

<div id="about" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="section-title">
                    <h2 class="title">Welcome to PPW</h2>
                    <p class="sub-title">Population planning has been a regular feature of periodic-five-year National Development Plans of Pakistan since 1955.</p>
                </div>
                <div class="about-content">
                    <p>Although Pakistan has one of the oldest family planning programmes in the region yet, strategic disconnects between informed population policies and planning, and socio-economic development has resulted in limited progress not only towards lowering the fertility rates, but also in improving the contraceptive prevalence rates, resulting in a sluggish demographic transition.</p>
                    <a href="#" class="primary-button">Read More</a>
                </div>
            </div>
            <div class="col-md-offset-1 col-md-6">
                <a href="{{asset('vid/about_video_01.mp4')}}" class="about-video">
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

<div id="causes" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="section-title text-center">
                    <h2 class="title">Latest News</h2>

                </div>
            </div>
            <div class="col-md-4">
                <div class="causes">
                    <div class="causes-img">
                        <a href="{{url('single_cause')}}">
                            <img src="{{asset('img/news4.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="causes-content">
                        <h3><a href="{{url('single_cause')}}">Special Secretary Iftikhar Ali Shallwani
                                called a meeting at the PPW Resource Centre</a></h3>
                        <p>Meeting was held to discuss the current work done on Population. He called on the wing to get to the ground level of
                            efforts by all stakeholders and gave some recommendations for a way forward @UNFPA.</p>
                        <a href="{{url('single_cause')}}" class="primary-button causes-donate">View Details</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="causes">
                    <div class="causes-img">
                        <a href="{{url('single_cause')}}">
                            <img src="{{asset('img/news7.jpg')}}" alt="">
                        </a>
                    </div>

                    <div class="causes-content">
                        <h3><a href="{{url('single_cause')}}">Tahir Mehmood Ashrafi ( All Pakistan Ulema Council of Pakistan) met with DG PPW</a></h3>
                        <p>in the Population Program Wing of MNHSRC. Matters pertaining to the State and its policies regarding Family Planning were discussed. Tahir Mehmood Ashrafi said that Behbud-eAbadi important. #Ulema..</p>
                        <a href="{{url('single_cause')}}" class="primary-button causes-donate">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="causes">
                    <div class="causes-img">
                        <a href="{{url('single_cause')}}">
                            <img src="{{asset('img/news3.jpg')}}" alt="">
                        </a>
                    </div>

                    <div class="causes-content">
                        <h3><a href="{{url('single_cause')}}">Ministry of NHSRC planned a meeting under the chairmanship of DG</a></h3>
                        <p>with the stakeholders of the Medical Tourism Initiative, to discuss a way forward. Focal persons from the
                            Ministry of Interior and Foreign Affairs along with the PTDC Director gave reports on the initiative.</p>
                        <a href="{{url('single_cause')}}" class="primary-button causes-donate">View Details</a>
                    </div>
                </div>
            </div>

            <div class="clearfix visible-md visible-lg"></div>

            <div class="col-md-4">
                <div class="causes">
                    <div class="causes-img">
                        <a href="{{url('single_cause')}}">
                            <img src="{{asset('img/news1.jpg')}}" alt="">
                        </a>
                    </div>

                    <div class="causes-content">
                        <h3><a href="{{url('single_cause')}}">DG PPW met with Dr Mohammed Afifi</a></h3>
                        <p> Regional Advisor on Women Health. Ms Ellen Thom, Team Lead for Healthier Population through the Life Course and
                            Dr Qudsia Uzma, Technical Officer</p>
                        <a href="{{url('single_cause')}}" class="primary-button causes-donate">View Details</a>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="causes">
                    <div class="causes-img">
                        <a href="{{url('single_cause')}}">
                            <img src="{{asset('img/news5.jpg')}}" alt="">
                        </a>
                    </div>

                    <div class="causes-content">
                        <h3><a href="{{url('single_cause')}}">Metting with Dr. Qibla Ayaz (CII)</a></h3>
                        <p>DG Population Program Wing and team met with Dr. Qibla Ayaz (CII).
                            for guidance and cooperation on holding Ulema conference. .</p>
                        <a href="{{url('single_cause')}}" class="primary-button causes-donate">View Details</a>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="causes">
                    <div class="causes-img">
                        <a href="{{url('single_cause')}}">
                            <img src="{{asset('img/news6.jpg')}}" alt="">
                        </a>
                    </div>

                    <div class="causes-content">
                        <h3><a href="{{url('single_cause')}}">A meeting with PPW partners from HSA UNFPA</a></h3>
                        <p>Where a presentaion was given on Midwifery in Pakistan and its plans of way forward. DG Dr. Sabina Durrani gave her suggestions and concerns. .</p>
                        <a href="{{url('single_cause')}}" class="primary-button causes-donate">View Details</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div id="cta" class="section">
    <div class="section-bg" style="background-image:url(img/npn.jpg)" data-stellar-background-ratio="0.5"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="cta-content text-center">
                    <h1 style="color: #1a1a1a">PPW</h1>
                    <p style="color: #1a1a1a" class="lead">Working on Pakistan's National narrative : Rights, Responsibility & Balance (Tawazun).</p>
                    <a href="#" class="primary-button">Visit Us Now!</a>
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
            <div class="col-md-6">
                <div class="event">
                    <div class="event-img">
                        <a href="single-event.html">
                            <img src="{{asset('img/event1.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="event-content">
                        <h3><a href="single-event.html">Ministry of NHSRC
                                in collaboration with the Council of Islamic Ideology arranged an Ulema Conference in Islamabad.
                            </a></h3> <ul class="event-meta">
                            <li><i class="fa fa-clock-o"></i> 24 October, 2018 | 8:00AM - 11:00PM</li>
                            <li><i class="fa fa-map-marker"></i> 2736 Hinkle Deegan Lake Road</li>
                        </ul>
                        <p>The conference was attended by a score of renowned religious scholars.
                            The Minister of National Health Services was the Chief Guest at the Conference..</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="event">
                    <div class="event-img">
                        <a href="single-event.html">
                            <img src="{{asset('img/event2.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="event-content">
                        <h3><a href="single-event.html">Population Wing arranged a Training session</a></h3>
                        <ul class="event-meta">
                            <li><i class="fa fa-clock-o"></i> 24 October, 2018 | 8:00AM - 11:00PM</li>
                            <li><i class="fa fa-map-marker"></i> 2736 Hinkle Deegan Lake Road</li>
                        </ul>
                        <p>Population Wing arranged a Training session for Public Private partnership of Doctors and Nurses on Post Partum Contraceptive use in ICT. DG met all participants and a healthy discussion on way forward
                            @UNFPAPakistan
                            .</p>
                    </div>
                </div>
            </div>
            <div class="clearfix visible-md visible-lg"></div>
            <div class="col-md-6">
                <div class="event">
                    <div class="event-img">
                        <a href="single-event.html">
                            <img src="{{asset('img/event3.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="event-content">
                        <h3><a href="single-event.html">MPDSR National Meeting</a></h3>
                        <ul class="event-meta">
                            <li><i class="fa fa-clock-o"></i> 24 October, 2018 | 8:00AM - 11:00PM</li>
                            <li><i class="fa fa-map-marker"></i> 2736 Hinkle Deegan Lake Road</li>
                        </ul>
                        <p>The event was graced by Iftikhar Shallwani  Special Secretary M/o MHSRC@Shallwani DG Sabina Durrani PPW, Dr Mohamed Afifi Regional Director , and health professionals from all provinces. Maternal mortality and ways to curtail its occurance was  discussed..</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="event">
                    <div class="event-img">
                        <a href="single-event.html">
                            <img src="{{asset('img/event4.jpg')}}" alt="">
                        </a>
                    </div>

                    <div class="event-content">
                        <h3><a href="single-event.html">Health Services Academy & Accountability Group meeting</a></h3>
                        <ul class="event-meta">
                            <li><i class="fa fa-clock-o"></i> 24 October, 2018 | 8:00AM - 11:00PM</li>
                            <li><i class="fa fa-map-marker"></i> 2736 Hinkle Deegan Lake Road</li>
                        </ul>
                        <p>Health Services Academy arranged a Technical Advisory & Accountability Group meeting On #MNCH and #FP. It was attended by DG PPW and other health Officials including Dr Jamil
                            @UNFPA.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="testimonial" class="section">
    <div class="section-bg" style="background-image:url(img/background-2.jpg)" data-stellar-background-ratio="0.5"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="section-title text-center">
                    <h2 class="title">Our Team</h2>

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
                            <span>DG POPULATION</span>
                        </div>
                        <div class="testimonial-quote">
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="testimonial-meta">
                            <div class="testimonial-img">
                                <img src="{{asset('img/xavatar-2.jpg.pagespeed.ic.lZk0jiPD8Z.jpg')}}" alt="">
                            </div>
                            <h3>John Doe</h3>
                            <span>Volunteer</span>
                        </div>
                        <div class="testimonial-quote">
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="testimonial-meta">
                            <div class="testimonial-img">
                                <img src="{{asset('img/xavatar-1.jpg.pagespeed.ic.RkR3XY-knB.jpg')}}" alt="">
                            </div>
                            <h3>John Doe</h3>
                            <span>Volunteer</span>
                        </div>
                        <div class="testimonial-quote">
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="testimonial-meta">
                            <div class="testimonial-img">
                                <img src="{{asset('img/xavatar-2.jpg.pagespeed.ic.lZk0jiPD8Z.jpg')}}" alt="">
                            </div>
                            <h3>John Doe</h3>
                            <span>Volunteer</span>
                        </div>
                        <div class="testimonial-quote">
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                            </blockquote>
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
    <form>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input class="input" id="firstname" name="firstname" placeholder="First Name" type="text" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input class="input" id="lastname" name="lastname" placeholder="Last Name" type="text">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input class="input" id="phonenumber" name="phonenumber" placeholder="Phone Number" type="text" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input class="input" id="email" name="email" placeholder="Email" type="email" required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <textarea class="input" id="message" name="message" placeholder="Message" required></textarea>
                </div>
                <button class="primary-button">Submit</button>
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
    $(document).ready(function () {

        {{--
        $("#about_tab").click(function() {
            $('html, body').animate({
                scrollTop: $("#about").offset().top
            }, 1200);
        });
        $("#numbers_tab").click(function() {
            $('html, body').animate({
                scrollTop: $("#numbers").offset().top
            }, 1200);
        });
        $("#causes_tab").click(function() {
            $('html, body').animate({
                scrollTop: $("#causes").offset().top
            }, 1200);
        });
        $("#cta_tab").click(function() {
            $('html, body').animate({
                scrollTop: $("#cta").offset().top
            }, 1200);
        });
        $("#events_tab").click(function() {
            $('html, body').animate({
                scrollTop: $("#events").offset().top
            }, 1200);
        });
        $("#testimonial_tab").click(function() {
            $('html, body').animate({
                scrollTop: $("#testimonial").offset().top
            }, 1200);
        });
        $("#blog_tab").click(function() {
            $('html, body').animate({
                scrollTop: $("#blog").offset().top
            }, 1200);
        });
        --}}

    });
</script>

@endsection