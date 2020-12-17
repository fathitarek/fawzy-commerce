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
                <img src="{{URL($competitions->image )}}" alt="" /><!-- Post Image -->
                <div class="post-desc">
                <iframe src="{{$competitions->video_url}}" style="width: 100%;height: 100%;"></iframe>			
            	</div>
				<h1>{{$competitions->{'name_'.strtolower(app()->getLocale())} }}</h1>
				
				
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
								
				
				
				<div class="form">
					<h3 class="sub-head">{{__('home.contact_us_by_message')}}</h3>
					<p>Anean sit amet nibh ut magna malesuada <span>*</span></p>
					
					<form>
						<label>{{__('home.full_name')}} <span>*</span></label>
						<input type="text" class="form-control input-field" />
						<label>{{__('home.email_address')}} <span>*</span></label>
						<input type="email" class="form-control input-field" />
						<label>{{__('home.message')}} <span>*</span></label>
						<textarea rows="7" class="form-control input-field"></textarea>
						<input type="submit" class="form-button" value="{{__('home.send_msg')}}" />
					</form>
				
				</div><!-- Form -->
					
			</div>
			
			
			

		</div>
		
		<div class="sidebar col-md-3 pull-right">
			<div class="sidebar-widget">
				<div class="sidebar-search">
					<input class="search" type="text" placeholder="Enter Search Item" />
					<input class="search-button" type="submit" value="" />
				</div>
			</div><!-- Sidebar Search -->
            <div class="sidebar-widget">
				<div class="sidebar-title">
					<h4>Recent <span>bank_info</span></h4>
                </div>
               @foreach($bank_information as $bank_info)
				<div class="popular-post">
					<img src="{{URL($bank_info->image )}}" alt="" />
					<div class="popular-post-title">
						<h6><a href="#" title="">{{$bank_info->{'name_'.strtolower(app()->getLocale())} }}</a></h6>
					</div>
				</div>
		@endforeach

			</div><!-- Recent Events -->
			
			<div class="sidebar-widget">
				<div class="sidebar-title">
					<h4>Recent <span>sucess_stories</span></h4>
                </div>
               @foreach($sucess_stories as $sucess_story)
				<div class="popular-post">
					<img src="{{URL($sucess_story->image )}}" alt="" />
					<div class="popular-post-title">
						<h6><a href="#" title="">{{$sucess_story->{'name_'.strtolower(app()->getLocale())} }}</a></h6>
					</div>
				</div>
		@endforeach

			</div><!-- Recent Events -->
			
            <div class="sidebar-widget">
				<div class="sidebar-title">
					<h4>Recent <span>live_certificate</span></h4>
                </div>
               @foreach($live_certificate as $live_certific)
				<div class="popular-post">
					<img src="{{URL($live_certific->image )}}" alt="" />
					<div class="popular-post-title">
						<h6><a href="#" title="">{{$live_certific->{'name_'.strtolower(app()->getLocale())} }}</a></h6>
					</div>
				</div>
		@endforeach

			</div><!-- Recent Events -->
            
            <div class="sidebar-widget">
				<div class="sidebar-title">
					<h4>Recent <span>projects</span></h4>
                </div>
               @foreach($projects as $project)
				<div class="popular-post">
					<img src="{{URL($project->images[0]->images)}}" alt="" />
					<div class="popular-post-title">
						<h6><a href="{{$project->id}}" title="">{{$project->{'name_'.strtolower(app()->getLocale())} }}</a></h6>
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