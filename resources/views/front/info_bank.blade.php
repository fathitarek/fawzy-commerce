@extends('front.master.app')
@section('content')
<div class="top-image">
	<img src="images/single-page-top2.jpg" alt="" />
</div><!-- Page Top Image -->
	
<section class="page">
	<div class="container">
		<div class="page-title">
			<h1>{{__('home.info_bank')}}</h1>
		</div><!-- Page Title -->
		<div class="row">
			<div class="left-content col-md-9">
				
				<div class="featured-products">
					<!-- <h3 class="sub-head">Buy these products to help us raise donations for the poor</h3> -->
					<!-- <p>Aenean tristique pulvinar urna, et lacinia magna imperdiet vitae. In vitae lorem dolor, in lacinia augue. Fusce pretium dolor non odio aucto at iaculis nibh pellentesque. Integer dapibus vehicula ligula sit amet aliquam lorem ipsum dolor sit amet. Vestibulum posuere placerat me tus, nec porttitor nisl tempus et tristique pulvinar urna, et lacinia magna imperdiet vitae.</p> -->
				
					<div class="row">
                        @foreach($info_banks as $info_bank)
						<div class="col-md-4" style="width: 370px;height: 222px;margin: 14px;">
						<h4> <a href="/inner-infoBank/{{$info_bank->id}}" >{{$info_bank->{'name_'.strtolower(app()->getLocale())} }} </a></h4>
						<a href="/inner-infoBank/{{$info_bank->id}}" >
							<img src="{{URL($info_bank->image )}}" style="height: 222px;width: 370px;" alt="" />
</a>
							<!-- <div class="ratings">
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star-empty"></i>
							</div> -->
							
                        </div><!--Product-->
                        @endforeach
					</div>
				
				</div>
				
			</div>
			
			<div class="sidebar col-md-3 pull-right">
				<div class="sidebar-widget">
					<!-- <div class="sidebar-search">
						<input class="search" type="text" placeholder="Enter Search Item" />
						<input class="search-button" type="submit" value="" />
					</div> -->
				</div><!--Sidebar Search-->
               
             
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
					<h4>{{__('home.recent')}} <span> {{__('home.compitiion')}}</span></h4>
                </div>
               @foreach($competitions as $competition)
				<div class="popular-post">
					<img src="{{URL($competition->image )}}" alt="" />
					<div class="popular-post-title">
						<h6><a href="{{URL('inner-competition')}}/{{$competition->id}}" title="">{{$competition->{'name_'.strtolower(app()->getLocale())} }}</a></h6>
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

        <div class="sidebar-widget">
				<div class="sidebar-title">
					<h4>{{__('home.recent')}} <span>{{__('home.live_certificate')}} </span></h4>
                </div>
               @foreach($live_certificate as $live_cert)
				<div class="popular-post">
					<img src="{{URL($live_cert->image)}}" alt="" />
					<div class="popular-post-title">
						<h6><a href="{{URL('inner-certifcate/')}}/{{$live_cert->id}}" title="">{{$live_cert->{'name_'.strtolower(app()->getLocale())} }}</a></h6>
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