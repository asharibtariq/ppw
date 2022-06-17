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
						<li><a href="#">Events</a></li>
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

				<div class="article event-details">

					<div class="article-img">
						<img src="{{asset('uploads/event/'.$result->image)}}" alt="">
					</div>

					<div class="article-content">

						<h2 class="article-title">{{$result->title}}</h2>

						<ul class="article-meta">
							<li>{{$result->created_at}}</li>
							<li>{{$result->author}}</li>
						</ul>
						<p>{{$result->description}}</p>
					</div>

					<ul class="event-meta">
						<li><h4>Event Details</h4></li>
						<li><i class="fa fa-clock-o"></i><strong>Date:</strong> {{$result->date}}{{--24 October, 2018 | 8:00AM - 11:00PM--}}</li>
						<li><i class="fa fa-map-marker"></i><strong>Location:</strong> {{$result->location}}</li>
						{{--<li><i class="fa fa-ticket"></i><strong>Ticket:</strong> 50$</li>--}}
					</ul>

				</div>

			</main>

			<aside id="aside" class="col-md-3">
				<div class="widget">
					<h3 class="widget-title">Latest Events</h3>
					@php
						$event = json_decode($event)
					@endphp
                    <?php
                    if (!empty($event)){
                        $i = 0;
                        foreach ($event as $event_row){
                            $event_description = strlen($event_row->description) > 80 ? substr($event_row->description,0,80)."..." : $event_row->description;
                            $event_title= strlen($event_row->title) > 40 ? substr($event_row->title,0,40)."..." : $event_row->title;
                            ?>
					<div class="widget-post">
						<a href="{{url('event_details', $event_row->id)}}" target="_blank">
							<div class="widget-img">
								<img src="{{asset('uploads/event/'.$event_row->image)}}" alt="">
							</div>
							<div class="widget-content">
								{{$event_title}}
							</div>
						</a>
						<small>{{$event_description}}</small>
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