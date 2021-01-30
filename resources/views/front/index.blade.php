@extends('front.master.app')
@section('content')
<style>
	span.ls-s-1:after {
		width: 0px;
	}
	#thumbs{
		width:100% !important;
	}
	#thumbs-wrapper{
		margin-bottom:5rem;
	}
	#carousel{
		position:static !important;
	}
</style>
<!-- <script type="text/javascript" language="javascript" src="https://raw.githubusercontent.com/Codeinwp/carouFredSel-jQuery/master/jquery.carouFredSel-6.2.1-packed.js"></script> -->

<div id="layerslider-container-fw">
	<div id="layerslider" style="width: 100%; height: 600px; margin: 0px auto; ">
		@foreach($sliders as $slider)


		<!-- <div class="ls-layer" style="transition2d: 5; slidedelay: 8000;" >			
			<img src="http://placehold.it/1366x640" class="ls-bg" alt="Slide background">
				<h3 class="ls-s-1" style="top: 223px; left:248px; background: url(images/slider1-img2.png) no-repeat scroll 0 0 / auto 100% transparent; font-family:roboto; font-size:34px; font-weight:bold; color:#4c4c4c; line-height:56px; padding:0 60px 0 60px; ; border-radius:3px; delayin:500; scaleout:.5; slidedirection:fade;" ><i>SAVE</i> <span>ENVIRONMENT</span></h3>
				<span class="ls-s-1"	style="top: 300px; left:248px; font-family:roboto; font-size:24px; font-weight:600; color:#000; padding:10px 20px 10px 50px; background:rgba(255,255,255,0.9); border-radius:4px 0 0px 4px; border-left:2px solid #93b631; position:relative; line-height:22px; float:left; delayin:1000; scalein:0; slidedirection:left; durationin : 2500;">BE READY TO WORK <i>WITH US</i></span>
				<p class="ls-s-1"	style="top: 360px; left:248px; font-family:roboto; font-size:13px; color:#fefefe; delayin:2000; scalein:4; slidedirection:fade; durationin : 2000;">Sed interdum, lacus et vulputate pellentesque, velit nulla commodo <br/> sem, at egestas nulla metus vel sapien! Lorem ipsum dolor</p>
		</div> -->
		<!-- Slide1 -->
		

		


		<div class="ls-layer" style="transition2d: 5; slidedelay: 8000;">
			<img src="{{URL($slider->image)}}" class="ls-bg" alt="Slide background">
			<a href="{{$slider->url}}" class="btn btn-danger">{{$slider->{'btn_'.strtolower(app()->getLocale())} }} </a>

			<h3 class="ls-s-1"
				style="display:block; top: 300px; left: 248px; font-family: roboto; font-size: 24px; font-weight: 600; color: rgb(0, 0, 0); padding: 10px 20px 10px 50px; background: rgba(255, 255, 255, 0.9); border-radius: 4px 0px 0px 4px; border-width: 0px 0px 0px 2px; border-left-style: solid; border-left-color: rgb(147, 182, 49); position: relative; line-height: 22px; float: left; width: auto; height: auto; opacity: 1; transform: rotate(0deg) scale(1, 1); margin-left: 1272px; margin-top: 0px; display: block; visibility: visible;">
				{{$slider->{'title_'.strtolower(app()->getLocale())} }}</h3>

			<span class="ls-s-1"
				style=" display:block; top: 300px; left:248px; font-family:roboto; font-size:24px; font-weight:600; color:#fff; padding:10px 20px 10px 50px; position:relative; line-height:22px; float:left; delayin:1000; scalein:0; slidedirection:left; durationin : 2500;">{!!
				$slider->{'description_'.strtolower(app()->getLocale())} !!}</span>
				
			<p class="ls-s-1"
				style="display:block; top: 360px; left:248px; font-family:roboto; font-size:13px; color:#fefefe; delayin:2000; scalein:4; slidedirection:fade; durationin : 2000;">
				{!! $slider->{'description_'.strtolower(app()->getLocale())} !!}</p>
		</div><!-- Slide1 -->

		@endforeach


	</div>

	<!-- <div class="message-box">
		<div class="message-box-title">			
			<span><i class="icon-envelope-alt"></i></span>
			<p>Leave A Message</p>
			<i class="icon-angle-up"></i>
		</div>
		<div class="message-form">
			<p>Lorem ipsum dolor sit amet, cons ectetur adipisei ing elit. Pellentesque mi tellus, fringilla nonintedi.</p>
			<div id="message"></div>
			<form method="post" action="contact.php" name="contactform" id="contactform">
				<input name="name" class="form-control" type="text" id="name" size="30" value=""  placeholder="Name" />
				<input name="email" class="form-control" type="text" id="email" size="30" value=""  placeholder="Email" />
				<textarea name="comments" rows="3" id="comments" rows="7" class="form-control"  placeholder="Your Message"></textarea>
				<input type="submit" class="submit-btn submit" id="submit" value="SEND MESSAGE" />
			</form>
		</div>
    </div> -->
	<!-- Message Box -->

</div><!-- Layer Slider -->


<section class="block">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="sec-heading">
					<!-- <h2><strong>Our</strong> Causes</h2> -->
					<h2>{{__('home.sucess')}} <strong>{{__('home.story')}} </strong></h2>
				</div><!-- Section Title -->
				<div class="our-causes">
					<ul class="slides">
						<li>
							<div class="row">
								@foreach( $sucess_stories as $key=>$sucess_story)
								<div class="col-md-4">
									<div class="causes-image">
										<a href="inner-successful-stories/{{$sucess_story->id}}" title="">
											<img src="{{URL($sucess_story->image )}}" style="height: 40%;"
												alt="thumb1" />
										</a>
										<div class="cause-heading">
											<a href="inner-successful-stories/{{$sucess_story->id}}" title="">
												<h3>{{$sucess_story->{'name_'.strtolower(app()->getLocale())} }}</h3>
											</a>
											<!-- <p>We needed to collect: <span><i>$</i>29,000</span> </p> -->
										</div>
										<!-- <div class="our-causes-hover">
												<h3>Feeding the Hungry</h3>
												<span>in <i>South Africa</i></span>
												<p>Duis accumsan rhosn cius arcvira orem bland it sit admet. Sedi ceel ugue. In idn iacues ante. Proi rien is mi gravida viverra.</p>
												<span class="help"><strong>Help us</strong> to collect:</span>
												<span class="needed-amount"><span>$</span>20,000 </span>
											</div> -->
									</div>
								</div>

								<?php ++$key; ?>
								@if($key>=3&&$key%3==0)
								@if(count($sucess_stories)==$key)
								@break
								@endif
							</div>
						</li>
						<li>
							<div class="row">
								@endif
								@endforeach
							</div>
						</li>

					</ul>
				</div><!-- Causes -->
			</div>

			<!-- <div class="col-md-3 pull-right">
			<div class="sec-heading">
				<h2><strong>Donate</strong> Us</h2>
			</div>
			<div class="donate-us-box">
				<h5>Give Your Donations</h5>
				<span>Donation Needed</span>
				<span class="amount-figures"><strong>$</strong> 7,089,758!</span>
				<span>Collection Donation</span>
				<span class="amount-figures coloured"><strong>$</strong> 7,089,758!</span>
				<span class="cell"><i class="icon-phone"></i>1 (123) 12345678</span>
				<a href="checkout.html" class="donate-btn" title="">Donate Us</a>
            </div>
             Donate Us Box -->
			<!-- </div>  -->
		</div>
	</div>
</section>


<section class="block">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="sec-heading">
					<h2>{{__('home.blog')}}</h2>
				</div><!-- Section Title -->
				<div class="carusal-slider">
					<div id="carousel-wrapper">
						<div id="carousel" style="">
							<div id="news1" style="width: 570px;">
								<div class="row" >
									<div class="col-md-6 desc">
										<h3><a href="{{URL('/inner_blog')}}/{{$blogs[0]->id}}"
												title="">{{$blogs[0]->{'name_'.strtolower(app()->getLocale())} }}</a>
										</h3>
										{!! str_limit($blogs[0]->{'description_'.strtolower(app()->getLocale())},100)
											!!}

									</div>
									<a href="{{URL('/inner_blog')}}/{{$blogs[0]->id}}" style="width:100%;height:100% " >
									<div class="col-md-6">
									
										<!-- <div class="" style="width:250px;height:150px "> -->
										
											<img src="{{URl($blogs[0]->image)}}" alt="" style="width:250px;height:150px" />
											<!-- <a class="html5lightbox" href="http://player.vimeo.com/video/31943945?color=ffffff" title="This Is a Demo Video"> -->
											<!-- <span><i class="icon-play"></i></span> -->
											<!-- </a> -->
										<!-- </div> -->
									</div>
								</a>
								</div>
							</div><!-- News -->

						</div>
					</div>
					<style>
						.caroufredsel_wrapper {
							width: 410px;
						}
					</style>
					<div id="thumbs-wrapper">
						<div id="thumbs">
							@foreach($blogs as $key=>$blog)
							@if($key==0)
							@continue
							@endif
							<a href="{{URL('/inner_blog')}}/{{$blog->id}}" class=""><img src="{{URl($blog->image)}}"
									alt="" /><span
									class="carusal-our-news">{{$blog->{'name_'.strtolower(app()->getLocale())}
									}}</span></a>
							<!-- <a href="#news2"><img src="http://placehold.it/131x78" alt="" /><span class="carusal-our-news">Safety Quiz and Tips </span></a>
							<a href="#news3"><img src="http://placehold.it/131x78" alt="" /><span class="carusal-our-news">Safety Quiz and Tips </span></a>
							<a href="#news4"><img src="http://placehold.it/131x78" alt="" /><span class="carusal-our-news">Safety Quiz and Tips </span></a>
							<a href="#news5"><img src="http://placehold.it/131x78" alt="" /><span class="carusal-our-news">Safety Quiz and Tips </span></a>
							<a href="#news6"><img src="http://placehold.it/131x78" alt="" /><span class="carusal-our-news">Safety Quiz and Tips </span></a> -->
							@endforeach
						</div>
						<!-- Selectors -->
						<a id="prev" href="#"><i class="icon-angle-left"></i></a>
						<a id="next" href="#"><i class="icon-angle-right"></i></a>
					</div>
				</div>
			</div><!-- Recent News -->

			<div class="col-md-6 pull-right">
				<div class="sec-heading">
					<h2> {{__('home.compitiion')}}</h2>
				</div>


				<div class="our-project-box">
					<div class="row">
						@foreach( $competitions as $key=>$competition)
						<div class="col-md-6" style="height:35%">
							<div class="row">
								<div class="col-md-5">
								
									<div class="" style="border: none;">
										<!-- <i class="icon-cloud"> -->
										<a href="inner-competition/{{$competition->id}}">
										<img src="{{URL($competition->image )}}" class="img-circle"
											style="width: 80%;height: 30%;" alt="" />
											</a>
										<!-- </i> -->
										<!-- <div class="need">
											<p>NEED <span>$5,550,20</span></p>
											<a href="#" title="">Donate</a>
										</div> -->
									</div>
									
								</div>
								<div class="col-md-7" style="margin-top: 30px;">
									<div class="project-detail">
										<a href="inner-competition/{{$competition->id}}">{{$competition->{'name_'.strtolower(app()->getLocale())}
											}}</a>
										<!-- <p>{{ $competition->{'description_'.strtolower(app()->getLocale())} }}</p>			 -->
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div><!-- Projects -->

			</div>
		</div>
	</div>
</section>
<!-- </div> -->
@endsection