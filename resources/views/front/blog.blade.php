@extends('front.master.app')
@section('content')


<div class="top-image">
	<img src="{{URL('images/single-page-top3.jpg')}}" alt="" />
</div><!-- Page Top Image -->
	
<section class="page switch">
	<div class="container">
		<div class="page-title">
			<h1>{{__('home.blog')}}</h1>
		</div><!-- Page Title -->
		<div class="row">
			<div class="left-content col-md-9">
            @foreach($blogs as $blog)  
				<div class="blog-post">
					<h2><a href="{{URL('/inner_blog')}}/{{$blog->id}}" title="">{{$blog->{'name_'.strtolower(app()->getLocale())} }}</a></h2>
					<a class="blog-post-img" href="{{URL('/inner_blog')}}/{{$blog->id}}" title=""><img style="width: 870px;height: 325px;" src="{{URl($blog->image)}}" alt="" /></a>
					<div class="blog-post-details">
						<ul class="post-meta">
							<li><a href="" title=""><i class="icon-calendar-empty"></i>{{$blog->date}}</a></li>
							<!-- <li><a href="" title=""><i class="icon-share-alt"></i>Home / Blog</a></li> -->
							<!-- <li><a href="" title=""><i class="icon-map-marker"></i>In South Africa</a></li> -->
						</ul>
						<div class="post-desc">
							<div class="image-lists">
								<!-- <ul>
									<li><a href="images/blank-image.jpg" class="html5lightbox" title=""><img src="http://placehold.it/68x61" alt="" /></a></li>
									<li><a href="images/blank-image.jpg" class="html5lightbox" title=""><img src="http://placehold.it/68x61" alt="" /></a></li>
								</ul> -->
							</div>						
                        <p>{!! $blog->{'description_'.strtolower(app()->getLocale())} !!}</p>	
                        <p>{{  $blog->tags}}</p>			
                    		</div>
					</div>
			
            </div>
            @endforeach
			</div>
			<div class="sidebar col-md-3 pull-right">
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
					
				</div><!-- Sidebar Search -->
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
			
			
				<div class="sidebar-widget">
					<div class="sidebar-title">
						<h4>{{__('home.category_list')}}</h4>
					</div>
					<ul class="sidebar-list">
                        @foreach($categories as $category)
                        <li><a href="/our-blogs-with-category/{{$category->id}}" title="">{{$category->{'name_'.strtolower(app()->getLocale())} }} ({{count($category->blogs) }})</a></li>
                        @endforeach
					</ul>
				</div><!-- Category List -->
				
			</div><!-- Sidebar -->
		</div>
	</div>


</section>
</div>
@endsection