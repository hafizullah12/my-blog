@section('title')
Hafiz's | Blog
@endsection
@include('FontEnd.master')
@include('FontEnd.menu')
<!-- technology-left -->
	<div class="technology">
	<div class="container">
		<div class="col-md-9 technology-left">
		<div class="tech-no">
			<!-- technology-top -->
			
			 <div class="tc-ch wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
				
					<div class="tch-img">
						<a href="{{route('singlePost',$best_1->id)}}">
						<img src="{{asset($best_1->feature_image)}}" 
						class="img-responsive" alt="" height="350" width="750"></a>
					</div>
					
					<h3><a href="{{route('singlePost',$best_1->id)}}">{{$best_1->title}}</a></h3>
					
					<h6><a href="singlepage.html">
						{{$best_1->user->name}} </a>
						||<b>{{$best_1->created_at->format('M d Y')}}</b>
						||<b><a href="">{{$best_1->category->name}}</a></b>
						</h6>

					<p>{{str_limit(strip_tags($best_1->description,100))}}</p>
					
						<div class="bht1">
							<a href="{{route('singlePost',$best_1->id)}}">Continue Reading</a>
						</div>
						<div class="soci" id="share">
							<ul>
								<li class="hvr-rectangle-out"><a class="fb" href="#"></a></li>
								<li class="hvr-rectangle-out"><a class="twit" href="#"></a></li>
								<li class="hvr-rectangle-out"><a class="goog" href="#"></a></li>
								<li class="hvr-rectangle-out"><a class="pin" href="#"></a></li>
								<li class="hvr-rectangle-out"><a class="drib" href="#"></a></li>
							</ul>
						</div>
						<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
			<!-- technology-top -->
			<!-- technology-top -->
			<div class="w3ls">
				<div class="col-md-6 w3ls-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
					 <div class="tc-ch">
						<div class="tch-img">
							<a href="{{route('singlePost',$best_2->id)}}">
							<img src="{{asset($best_2->feature_image)}}"
							 class="img-responsive" alt="" width="350" height="220"></a>
						</div>
					
						<h3><a href="{{route('singlePost',$best_2->id)}}">{{$best_2->title}}</a></h3>
						<h6><a href="singlepage.html">
						{{$best_2->user->name}} </a>
						||<b>{{$best_2->created_at->format('M d Y')}}</b>
						||<b><a href="">{{$best_2->category->name}}</a></b>
						</h6>

					<p>{{str_limit(strip_tags($best_2->description,100))}}</p>
							<div class="bht1">
								<a href="{{route('singlePost',$best_2->id)}}">Read More</a>
							</div>
							<div class="soci">
								<ul>
									<li class="hvr-rectangle-out"><a class="fb" href="#"></a></li>
									<li class="hvr-rectangle-out"><a class="pin" href="#"></a></li>
								</ul>
							</div>
							<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-6 w3ls-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
					 <div class="tc-ch">
						<div class="tch-img">
							<a href="{{route('singlePost',$best_3->id)}}">
							<img src="{{asset($best_3->feature_image)}}" 
							class="img-responsive" alt="" width="350" height="220"></a>
						</div>
					
						<h3><a href="{{route('singlePost',$best_3->id)}}">{{$best_3->title}}</a></h3>
						<h3><a href="singlepage.html">Lorem Ipsum is simply</a></h3>
						<h6><a href="singlepage.html">
						{{$best_3->user->name}} </a>
						||<b>{{$best_3->created_at->format('M d Y')}}</b>
						||<b><a href="">{{$best_3->category->name}}</a></b>
						</h6>

					<p>{{str_limit(strip_tags($best_3->description,100))}}</p>
							
							<div class="bht1">
								<a href="{{route('singlePost',$best_3->id)}}">Read More</a>
							</div>
							<div class="soci">
								<ul>
									<li class="hvr-rectangle-out"><a class="twit" href="#"></a></li>
									<li class="hvr-rectangle-out"><a class="drib" href="#"></a></li>
								</ul>
							</div>
							<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<!-- technology-top -->
			@foreach($posts as $post)
			<div class="wthree">
				 <div class="col-md-6 wthree-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
					<div class="tch-img">
				
							<a href="{{route('singlePost',$post->id)}}">
							<img src="{{asset($post->feature_image)}}"
							 class="img-responsive" alt="" width="350" height="220"></a>
						</div>
				 </div>
				 <div class="col-md-6 wthree-right wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
						<h3><a href="{{route('singlePost',$post->id)}}">{{$post->title}}</a></h3>

						<h6><a href="singlepage.html">
						{{$post->user->name}} </a>
						||<b>{{$post->created_at->format('M d Y')}}</b>
						||<b><a href="">{{$post->category->name}}</a></b>
						</h6>
						<p>{{str_limit(strip_tags($post->description,100))}}</p>
							<div class="bht1">
								<a href="">Read More</a>
							</div>
							<div class="soci">
								<ul>
									
									<li class="hvr-rectangle-out"><a class="twit" href="#"></a></li>
									<li class="hvr-rectangle-out"><a class="pin" href="#"></a></li>
								</ul>
							</div>
							<div class="clearfix"></div>
					
				 </div>
					<div class="clearfix"></div>
			</div>
			@endforeach
			
			</div>
		</div>
@include('FontEnd.sidebar')
@include('FontEnd.footer')