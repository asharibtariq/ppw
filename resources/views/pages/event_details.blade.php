@extends('main_layouts.app')
@section('main_content')

<div id="page-header">

	<div class="section-bg" style="background-image:url({{asset('img/background-2.jpg')}})"></div>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="header-content">
					<h1>Event Details</h1>
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
			</aside>

		</div>

	</div>

</div>

@endsection