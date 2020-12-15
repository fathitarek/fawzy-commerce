@extends('front.master.app')

@section('content')
<div class="top-image">
	<img src="images/single-page-top2.jpg" alt="" />
</div><!-- Page Top Image -->
	
<section class="page">
	<div class="container">
		<div class="page-title">
        <h1>{{__('home.about')}} <span>{{__('home.us_for_about')}}</span></h1>
		</div><!--Page Title-->
	<div class="container">
		
	</div>
	</div>
		

	
	<div class="about-charity">
		<div class="container">
			<div class="row">
				<div class="about-charity-desc col-md-7">

					<h2>{{$about_us[0]->{'name_'.strtolower(app()->getLocale())} }}</h2>
					{!! $about_us[0]->{'description_'.strtolower(app()->getLocale())} !!}

					<!-- <ul>
						<li><h6>08</h6><span>Years In Charity</span></li>
						<li><h6>28</h6><span>Project Handled</span></li>
						<li><h6>230</h6><span>Staff<br/> Members</span></li>
					</ul> -->
				</div>
				<div class="col-md-5">
					<div class="about-charity-video">
						<img src="{{URL($about_us[0]->image )}}" alt="" />
						<!-- <a class="html5lightbox" href="http://player.vimeo.com/video/31943945?color=ffffff" title="This Is a Demo Video"><span><i class="icon-play"></i></span></a> -->
					</div>
				</div> <!-- Video -->
			</div>
		</div>
	</div> <!--About Charity-->
</section>
</div>
@endsection