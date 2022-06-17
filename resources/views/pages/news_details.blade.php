@extends('main_layouts.app')
@section('main_content')

    <div id="page-header">
        <div class="section-bg" style="background-image:url({{asset('img/background-2.jpg')}})"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-content">
                        <h1>{{$result->title}}</h1>
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
                        @php
                            $news = json_decode($news)
                        @endphp
                        <?php
                        if (!empty($news)){
                            $i = 0;
                            foreach ($news as $news_row){
                                $news_description = strlen($news_row->description) > 80 ? substr($news_row->description,0,80)."..." : $news_row->description;
                                ?>
                        <div class="widget-causes">
                            <a href="{{url('news_details', $news_row->id)}}" target="_blank">
                                <div class="widget-img">
                                    <img src="{{asset('uploads/news/'.$news_row->image)}}" alt="">
                                </div>
                                <div class="widget-content">
                                    {{$news_row->title}}
                                </div>
                            </a>
                            <small>{{$news_description}}</small>
                        </div>
                         <?php
                                $i++;
                                    ?>
            <?php
                            }
                        }
                        ?>


                    </div>

                </aside>

            </div>
        </div>
    </div>

@endsection