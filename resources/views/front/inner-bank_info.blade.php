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
			<h1 style="color: black;text-decoration: none;font-size: 40px;font-weight: 400;">{{$bank_information->{'name_'.strtolower(app()->getLocale())} }}</h1>
				<img src="{{URL($bank_information->image )}}" alt="" /><!-- Post Image -->
				<div class="post-desc">
				<p>{!! $bank_information->{'details_'.strtolower(app()->getLocale())} !!}</p>						
				</div>
				@if(isset($bank_information->video_url)) 
                <div class="post-desc">
				{!! $bank_information->video_url !!}
                <!-- <iframe src="{{$bank_information->video_url}}" style="width: 100%;height: 100%;"></iframe>			 -->
            	</div>
				@endif
				
				
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
					<!-- <p>Anean sit amet nibh ut magna malesuada <span>*</span></p> -->
					@if (\Session::has('success'))
						<div class="alert alert-success">
							<ul>
								<li>{{__('home.successfully')}}</li>
							</ul>
						</div>
					@endif
					{!! Form::open(['route' => 'infoBankForms.store']) !!}
						
						<label>{{__('home.full_name')}} <span>*</span></label>
						<input type="text" class="form-control input-field" name="name" required/>
						<label>{{__('home.mobile')}} <span>*</span></label>
						<input type="number" class="form-control input-field"  name="mobile" required/>
						<label>{{__('home.address')}}<span>*</span></label>
						<input type="text" class="form-control input-field" name="address" required/>
						<label>{{__('home.message')}} <span>*</span></label>
						<textarea rows="7" class="form-control input-field" name="note" required></textarea>
						<input type="hidden" class="form-control input-field" name="bank_informations_id" value="{{$bank_information->id}}"/>
						<input type="submit" class="form-button" value="{{__('home.send_msg')}}" />
					</form>
				
				</div><!-- Form -->
					
			</div>
			
			
			

		</div>
		
		<div class="sidebar col-md-3 pull-right">
		<div class="sidebar-widget">
				<div class="sidebar-search">
					<input class="search"  name="word" id="info_bank_search" type="text" placeholder="{{__('home.Enter_Search_Item')}}" />
					<input class="search-button" type="submit" value="" />
				</div>
				<div id="country_list"></div>
			</div>
			<!-- Sidebar Search -->
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
			

		</div>
		</div>
	</div>


</section>
</div>
@endsection