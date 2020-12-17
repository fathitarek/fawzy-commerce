@extends('front.master.app')

@section('content')
<div class="top-image">
	<img src="images/single-page-top3.jpg" alt="" />
</div><!-- Page Top Image -->
	
<section class="page">
	<div class="container">
		<div class="page-title">
			<h1>{{__('home.contact')}} <span>{{__('home.us')}}</span></h1>
		</div><!-- Page Title -->
		<div class="row">
			<div class="col-md-6">
				<div class="contact-info">
					<h3 class="sub-head">{{__('home.contact_information')}}</h3>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d513.2386281321495!2d31.271997829060847!3d30.075732207530155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583f857df1babb%3A0x945a56eeaf4e9117!2z2YXYpNiz2LPYqSDYo9i22YjYp9ihINin2YTZhdiz2KrZgtio2YQg2YTZhNiq2YbZhdmK2Kk!5e0!3m2!1sen!2seg!4v1608056896771!5m2!1sen!2seg"></iframe>
<p>{!! $settings[0]->{'description_'.strtolower(app()->getLocale())} !!}</p>
					<ul class="contact-details">
						<li>
							<span><i class="icon-home"></i>{{__('home.address')}}</span>
							<p>{{$settings[0]->address}}</p>
						</li>
						<li>
							<span><i class="icon-phone-sign"></i>{{__('home.phone_no')}}</span>
							<p>{{$settings[0]->mobile}}</p>
						</li>
						<li>
							<!-- <span><i class="icon-envelope-alt"></i>{{__('home.email_id')}}</span> -->
							<!-- <p>#8901 Marmora Road Chi Minh City, Vietnam</p> -->
						</li>
						<li>
							<span><i class="icon-link"></i>{{__('home.web_address')}}</span>
							<p>{{$settings[0]->email}}</p>
						</li>
					</ul>
				</div>
			</div>	<!-- Contact Info -->
			<div class="col-md-6 pull-right">
				<div id="message"></div>
				<div class="form">
					<h3 class="sub-head">{{__('home.contact_us_by_message')}}</h3>
					<!-- <p>Anean sit amet nibh ut magna malesuada <span>*</span></p> -->
					<form method="post"  action="contact.php" name="contactform" id="contactform">
						<label for="name" accesskey="U">{{__('home.full_name')}} <span>*</span></label>
						<input name="name" class="form-control input-field" type="text" id="name" size="30" value="" />
						<label for="email" accesskey="E">{{__('home.email_address')}} <span>*</span></label>
						
						<input name="email" class="form-control input-field" type="text" id="email" size="30" value="" />
						<label for="comments" accesskey="C">{{__('home.message')}} <span>*</span></label>
						<textarea name="comments" rows="9" id="comments" rows="7" class="form-control input-field"></textarea>
						<input type="submit" class="form-button submit" id="submit" value="{{__('home.send_msg')}}" />
					</form>
				
				</div>
			</div>	<!-- Message Form -->
		</div>	
	</div>	
		
	<div class="social-connect">	
		<div class="container">
			<h3>{{__('home.find_us_on_socisl_meida')}}</h3>
			<ul class="social-bar">
				<!-- <li><a title="" href="#"><img alt="" src="images/rss.jpg"></a></li> -->
				<li><a title="" href="{{$social[0]->facebook}}"><img alt="" src="images/facebook.jpg"></a></li>
				<li><a title="" href="{{$social[0]->youtube}}"><img alt="" src="images/youtube.png" style="width: 35px;height: 35px;"></a></li>
				<li><a title="" href="{{$social[0]->linkedin}}"><img alt="" src="images/linked-in.jpg"></a></li>
				<li><a title="" href="{{$social[0]->instgram}}"><img alt="" src="images/ins.png" style="width: 35px;height: 36px;"></a></li>
			</ul>			
		</div>
	</div><!-- Social Media Bar -->
	
	
</section>
</div>
@endsection