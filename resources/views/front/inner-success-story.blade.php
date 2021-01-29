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
			<h1 style="color: black;text-decoration: none;font-size: 40px;font-weight: 400;">{{$sucess_stories->{'name_'.strtolower(app()->getLocale())} }}</h1>
				<img src="{{URL($sucess_stories->image)}}" alt="" /><!-- Post Image -->
				<!-- <span class="category">In <a href="#" title="">Home</a>, <a href="#" title="">Blog</a>, <a href="#" title="">Charity</a></span>Categories -->
				
				<!-- <ul class="post-meta">
					<li><a href="" title=""><i class="icon-calendar-empty"></i><span>September</span> 1,2013</a></li>
					<li><a href="" title=""><i class="icon-user"></i>By James Gomaz</a></li>
					<li><a href="" title=""><i class="icon-map-marker"></i>In South Africa</a></li>
				</ul> -->
				<div class="post-desc">
				<p>{!! $sucess_stories->{'description_'.strtolower(app()->getLocale())} !!}</p>						
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
								
			</div>
			
			
			

		</div>
		
		<div class="sidebar col-md-3 pull-right">
			<div class="sidebar-widget">
				<div class="sidebar-search">
					<input class="search"  name="word" id="sucess_story_search" type="text" placeholder="{{__('home.Enter_Search_Item')}}" />
					<input class="search-button" type="submit" value="" />
				</div>
				<div id="country_list"></div>
			</div>
			<!-- Sidebar Search -->
            <div class="sidebar-widget">
				<div class="sidebar-title">
				<h4>{{__('home.recent')}} <span> {{__('home.info_bank')}}</span></h4>
                </div>
               @foreach($bank_information as $bank_info)
				<div class="popular-post">
					<img src="{{URL($bank_info->image )}}" alt="" />
					<div class="popular-post-title">
						<h6><a href="{{URL('inner-infoBank/')}}/{{$bank_info->id}}" title="">{{$bank_info->{'name_'.strtolower(app()->getLocale())} }}</a></h6>
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