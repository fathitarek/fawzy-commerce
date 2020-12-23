@extends('front.master.app')
@section('content')
<div class="top-image">
	<img src="{{URL('images/single-page-top2.jpg')}}" alt="" />
</div><!-- Page Top Image -->
	
<section class="page">
	<div class="container">
		<div class="row">
		<div class="left-content col-md-9">
			<div class="post">
				<img src="{{URL($blogs->image)}}" alt="" /><!-- Post Image -->
				<!-- <span class="category">In <a href="#" title="">Home</a>, <a href="#" title="">Blog</a>, <a href="#" title="">Charity</a></span>Categories -->
				<h1>{{$blogs->{'name_'.strtolower(app()->getLocale())} }}</h1>
				<ul class="post-meta">
                <li><a href="" title=""><i class="icon-calendar-empty"></i>{{$blogs->date}}</a></li>
					<!-- <li><a href="" title=""><i class="icon-user"></i>By James Gomaz</a></li> -->
					<!-- <li><a href="" title=""><i class="icon-map-marker"></i>In South Africa</a></li> -->
				</ul>
				<div class="post-desc">
				<p>{!! $blogs->{'description_'.strtolower(app()->getLocale())} !!}</p>						
				</div>
				<!-- <blockquote>Dused pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget  blandit nunc tortor ucnibh. <span>Nullam mollis</span>. Ut justo.</blockquote> -->
				<!-- <p>Donec et libero quis erat commodo suscipit. Mae elit a,  eleifend leo. Phase llus ut pharetra mi, ctor diam. id iarciet spen idisse rhoncus id arcet porta. Aenean blandit mi ipsum, ut pharetrnisi vestibul mum ornare.Lorie ipsum dolor stamet, cons ctetur adipiscing elit. Duis non scelerisque esit, aliquiam ligula.Aenean blamp esum. Lorem ipsum dolor sit amet, consec tietuer adipiscing elit. Phasellus hendrerit. Pellent iesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor ucnibh. Nullam mollis. Ut justo. Suspendisse potenti. Ut convallis, sem sit amet interdum conis ectetuer, odio augue aliquam leo, nec dapibus tortor nibh sed augue. Integer eu magna sit amet metus fermentum posuere. Morbi sit amet nulla sed dolor elementum imperdiet.</p> -->
				<div class="post-image-list">
					<!-- <a href="images/blank-image.jpg" class="html5lightbox post-image" title="">
						<img src="http://placehold.it/370x374" alt="" />
					</a>
					<a href="images/blank-image.jpg" class="html5lightbox post-image" title="">
						<img src="http://placehold.it/370x374" alt="" />
					</a>
					<a href="images/blank-image.jpg" class="html5lightbox post-image" title="">
						<img src="http://placehold.it/370x374" alt="" />
					</a>						 -->
                </div> 
                <!-- Post Images -->
				<!-- <p>Donec et libero quis erat commodo suscipit. Mae elit a,  eleifend leo. Phase llus ut pharetra mi, ctor diam. id iarciet spen idisse rhoncus id arcet porta. Aenean blandit mi ipsum, ut pharetrnisi vestibul mum ornare.Lorie ipsum dolor stamet, cons ctetur adipiscing elit. Duis non scelerisque esit, aliquiam ligula.Aenean blamp esum. Lorem ipsum dolor sit amet, consec tietuer adipiscing elit. Phasellus hendrerit. Pellent iesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor ucnibh. Nullam mollis. Ut justo. Suspendisse potenti. Ut convallis, sem sit amet interdum conis ectetuer, odio augue aliquam leo, nec dapibus tortor nibh sed augue. Integer eu magna sit amet metus fermentum posuere. Morbi sit amet nulla sed dolor elementum imperdiet.</p> -->
                <p>{{  $blogs->tags}}</p>			
			</div>
			
			
			

		</div>
		
		<div class="sidebar col-md-3 pull-right">
			<div class="sidebar-widget">
				<!-- <div class="sidebar-search">
					<input class="search" type="text" placeholder="Enter Search Item" />
					<input class="search-button" type="submit" value="" />
				</div> -->
			</div><!-- Sidebar Search -->
            <div class="sidebar-widget">
				<div class="sidebar-title">
				<h4>{{__('home.recent')}} <span> {{__('home.info_bank')}}</span></h4>
                </div>
               @foreach($bank_information as $bank_info)
				<div class="popular-post">
					<img src="{{URL($bank_info->image )}}" alt="" />
					<div class="popular-post-title">
						<h6><a href="{{$bank_info->id}}" title="">{{$bank_info->{'name_'.strtolower(app()->getLocale())} }}</a></h6>
					</div>
				</div>
		@endforeach

			</div><!-- Recent Events -->
            
            
            <div class="sidebar-widget">
				<div class="sidebar-title">
					<h4>{{__('home.recent')}} <span> {{__('home.sucess_stories')}}</span></h4>
                </div>
               @foreach($sucess_stories as $sucess_story)
				<div class="popular-post">
					<img src="{{URL($sucess_story->image )}}" alt="" />
					<div class="popular-post-title">
					<h6><a href="{{URL('inner-successful-stories/')}}/{{$sucess_story->id}}" title="">{{$sucess_story->{'name_'.strtolower(app()->getLocale())} }}</a></h6>
					</div>
				</div>
		@endforeach

			</div><!-- Recent Events -->
            <div class="sidebar-widget">
				<div class="sidebar-title">
				<h4>{{__('home.recent')}} <span>{{__('home.projects')}} </span></h4>
                </div>
               @foreach($projects as $project)
				<div class="popular-post">
					<img src="{{URL($project->images[0]->images)}}" alt="" />
					<div class="popular-post-title">
						<h6><a href="{{URL('inner-project/')}}/{{$project->id}}" title="">{{$project->{'name_'.strtolower(app()->getLocale())} }}</a></h6>
					</div>
				</div>
		@endforeach

			</div><!-- Recent Events -->
			

            <div class="sidebar-widget">
				<div class="sidebar-title">
				<h4>{{__('home.recent')}} <span>{{__('home.live_certificate')}} </span></h4>
                </div>
               @foreach($live_certificate as $live_certific)
				<div class="popular-post">
					<img src="{{URL($live_certific->image )}}" alt="" />
					<div class="popular-post-title">
						<h6><a href="{{URL('inner-certifcate/')}}/{{$live_certific->id}}" title="">{{$live_certific->{'name_'.strtolower(app()->getLocale())} }}</a></h6>
					</div>
				</div>
		@endforeach

			</div><!-- Recent Events -->
            
            <div class="sidebar-widget">
				<div class="sidebar-title">
				<h4>{{__('home.recent')}} <span> {{__('home.compitiion')}}</span></h4>
                </div>
               @foreach($competitions as $competition)
				<div class="popular-post">
					<img src="{{URL($competition->image)}}" alt="" />
					<div class="popular-post-title">
						<h6><a href="{{URL('inner-competition')}}/{{$competition->id}}" title="">{{$competition->{'name_'.strtolower(app()->getLocale())} }}</a></h6>
					</div>
				</div>
		@endforeach

			</div><!-- Recent Events -->
			
		</div>
		</div>
	</div>


</section>
</div>
@endsection