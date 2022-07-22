@extends('main_layouts.app')
@section('main_content')
<style>
.pressbox {
    padding: 50px;
    margin: 4%;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
min-height: 315px}
</style>
    <div id="page-header">
        <div class="section-bg" style="background-image:url(img/background-2.jpg)"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-content">
                        <h1>Press Release</h1>
                        <ul class="breadcrumb">
                            <li><a href="{{url('')}}">Home</a></li>
                            <li><a href="#">Press Release</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">

                <main id="main" class="col-md-12">
                    <div class="article causes-details">

                        <div class="article-content">

                            <h2 class="article-title text-center">Press Release</h2>

                            <hr>
                            @php
                                $press = json_decode($press)
                            @endphp
                            <?php
                            if (!empty($press)){
                            $i = 0;
                            foreach ($press as $press_row){

                            $press_title = strlen($press_row->title ) > 65 ? substr($press_row->title , 0, 65) . "..." : $press_row->title ;
                            $press_description = strlen($press_row->description) > 180 ? substr($press_row->description, 0, 180) . "..." : $press_row->description;

                            ?>
                            <div class="col-md-5 pressbox" >
                              <div class="row">
                                  <div class="col-md-3">
                                <img src="{{asset("img/bookicon1.png")}}" style="padding-left: 25px">
                                    </div>
                                  <div class="col-md-9">
                                      <h4>
                                        <a href="#">{{$press_title}}</a>
                                    </h4>
                                  </div>
                                  </div>
                                    <p style="font-size: small">{{$press_description}}</p>
                                
                                <a href="{{asset('uploads/press/'.$press_row->document)}}"
                                   class="primary-button" target="_blank">Download pdf</a>
                            </div>
                            <?php
                            $i++;
                            ?>
                            <?php
                            }
                            }
                            ?>


                        </div>
                    </div>


                </main>
            </div>
        </div>
    </div>

@endsection