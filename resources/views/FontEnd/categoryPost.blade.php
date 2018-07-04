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
			@foreach($posts as $post)
			<div class="wthree">
				 <div class="col-md-6 wthree-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
					<div class="tch-img">
				
							<a href="singlepage.html"><img src="{{asset($post->feature_image)}}" class="img-responsive" alt=""></a>
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