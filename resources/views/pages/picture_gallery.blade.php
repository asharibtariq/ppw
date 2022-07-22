@extends('main_layouts.app')
@section('main_content')

    <style>
        .row > .column {
            padding: 0 8px;
        }
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
        /* The Modal (background) */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: black;
        }
        /* Modal Content */
        .modal-content {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 0;
            width: 90%;
            max-width: 1200px;
        }
        /* The Close Button */
        .close {
            color: white;
            position: absolute;
            top: 10px;
            right: 25px;
            font-size: 35px;
            font-weight: bold;
        }
        .close:hover, .close:focus {
            color: #999;
            text-decoration: none;
            cursor: pointer;
        }
        /* Hide the slides by default */
        .gallerySlides {
            display: none;
        }
        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -50px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
            -webkit-user-select: none;
        }
        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }
        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }
        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }
        /* Caption text */
        .caption-container {
            text-align: center;
            background-color: black;
            padding: 2px 16px;
            color: white;
        }
        img.demo {
            opacity: 0.6;
        }
        .active, .demo:hover {
            opacity: 1;
        }
        img.hover-shadow {
            transition: 0.3s;
            width: 106%;
            height: 180px;
            padding-top: 2%;
        }
        .hover-shadow:hover {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>

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
                        <div class="article-content">
                            <h2 class="article-title text-center">Pictures Gallery</h2>
                            <hr/>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <!-- Images used to open the lightbox -->
                    <div class="row">

                        @php
                            $gallery = json_decode($gallery)
                        @endphp
                        <?php
                        if (!empty($gallery)){
                        $total_count = count($gallery);
                        $slide_count = 1;
                        foreach ($gallery as $gallery_row){
                        ?>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <img src="{{asset('uploads/gallery/'.$gallery_row->image)}}" onclick="openModal();currentSlide({{$slide_count}})"
                                 class="hover-shadow">
                        </div>
                        <?php
                        $slide_count++;
                        }
                        }
                        ?>

                        {{--
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <img src="{{asset('img/pic_gal_01.jpg')}}" onclick="openModal();currentSlide(1)"
                                 class="hover-shadow">
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <img src="{{asset('img/pic_gal_03.jpg')}}" onclick="openModal();currentSlide(2)"
                                 class="hover-shadow">
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <img src="{{asset('img/pic_gal_07.jpg')}}" onclick="openModal();currentSlide(3)"
                                 class="hover-shadow">
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <img src="{{asset('img/pic_gal_08.jpg')}}" onclick="openModal();currentSlide(4)"
                                 class="hover-shadow">
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <img src="{{asset('img/pic_gal_09.jpg')}}" onclick="openModal();currentSlide(5)"
                                 class="hover-shadow">
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <img src="{{asset('img/pic_gal_10.jpg')}}" onclick="openModal();currentSlide(6)"
                                 class="hover-shadow">
                        </div>
                        --}}

                    </div>

                    <!-- The Modal/Lightbox -->
                    <div id="galleryModal" class="modal">
                        <span class="close cursor" onclick="closeModal()">&times;</span>
                        <div class="modal-content">

                            <?php
                            if (!empty($gallery)){
                            $total_count = count($gallery);
                            $slide_count = 1;
                            foreach ($gallery as $gallery_row){
                            ?>

                            <div class="gallerySlides">
                                <div class="numbertext">{{$slide_count}} / {{$total_count}}</div>
                                <img src="{{asset('uploads/gallery/'.$gallery_row->image)}}" style="width:100%">
                            </div>

                            <?php
                            $slide_count++;
                            }
                            }
                            ?>

                            {{--
                            <div class="gallerySlides">
                                <div class="numbertext">1 / 6</div>
                                <img src="{{asset('img/pic_gal_01.jpg')}}" style="width:100%">
                            </div>
                            <div class="gallerySlides">
                                <div class="numbertext">2 / 6</div>
                                <img src="{{asset('img/pic_gal_03.jpg')}}" style="width:100%">
                            </div>
                            <div class="gallerySlides">
                                <div class="numbertext">3 / 6</div>
                                <img src="{{asset('img/pic_gal_07.jpg')}}" style="width:100%">
                            </div>
                            <div class="gallerySlides">
                                <div class="numbertext">4 / 6</div>
                                <img src="{{asset('img/pic_gal_08.jpg')}}" style="width:100%">
                            </div>
                            <div class="gallerySlides">
                                <div class="numbertext">5 / 6</div>
                                <img src="{{asset('img/pic_gal_09.jpg')}}" style="width:100%">
                            </div>
                            <div class="gallerySlides">
                                <div class="numbertext">6 / 6</div>
                                <img src="{{asset('img/pic_gal_10.jpg')}}" style="width:100%">
                            </div>
                            --}}

                            <!-- Next/previous controls -->
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>

                            <!-- Caption text -->
                            <div class="caption-container">
                                <p id="caption"></p>
                            </div>

                            <!-- Thumbnail image controls -->
                            {{--
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <img class="demo" src="{{asset('img/pic_gal_01.jpg')}}" onclick="currentSlide(1)" alt="image-1">
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <img class="demo" src="{{asset('img/pic_gal_03.jpg')}}" onclick="currentSlide(2)" alt="image-2">
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <img class="demo" src="{{asset('img/pic_gal_07.jpg')}}" onclick="currentSlide(3)" alt="image-3">
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <img class="demo" src="{{asset('img/pic_gal_08.jpg')}}" onclick="currentSlide(4)" alt="image-4">
                            </div>
                            --}}

                        </div>
                    </div>
                    <br/>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Open the Modal
        function openModal() {
            document.getElementById("galleryModal").style.display = "block";
        }
        // Close the Modal
        function closeModal() {
            document.getElementById("galleryModal").style.display = "none";
        }
        var slideIndex = 1;
        showSlides(slideIndex);
        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }
        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }
        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("gallerySlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            captionText.innerHTML = dots[slideIndex - 1].alt;
        }
    </script>

@endsection