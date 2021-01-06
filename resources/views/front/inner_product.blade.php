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
					<div class="single-product-page">
						<div class="row">
							<div class="col-md-5">
								<img src="{{URL($shop_items->main_image )}}" alt="" /><!-- Post Image -->
							</div>
	
							<div class="col-md-7">
							<div class="alert alert-success" id="alert_cart" role="alert"style="display:none;">
							{{__('home.cart_msg')}}  
</div>

<div class="alert alert-success" id="alert_wishlist" role="alert"style="display:none;">
							{{__('home.wishlist_msg')}}  
</div>
								<h1>{{$shop_items->{'name_'.strtolower(app()->getLocale())} }}</h1>
							
								<div class="post-desc">
									<p>{!! $shop_items->{'description_'.strtolower(app()->getLocale())} !!}</p>
									@if(Auth::guard('customer')->check()&&$shop_items->wishlist>0)
									<button class="favorite-btn disabled" disabled id="favorite-btn"><i class="icon-heart"></i> {{__('home.add_to_favorites')}}</button>
									@else
									<button class="favorite-btn" id="favorite-btn"><i class="icon-heart"></i>{{__('home.add_to_favorites')}}</button>
								@endif
									<button type="button" class="btn btn-primary disabled">{{$shop_items->main_price}}  EGP</button>
									
									@if($shop_items->sale_price)
									<button type="button" class="btn btn-primary active">{{$shop_items->sale_price}} EGP</button>
									@endif
									@if(Auth::guard('customer')->check())
									<div class="row">
										<div class="col-md-6">
											<div id="quantity-field">
												<button id="up" onclick="setQuantity('up');">+</button>
                                                <input type="text" id="quantity" value="{{$shop_items->cart[0]->quantity}}">
                                                <input type="hidden" id="customer_id" value="{{ Auth::guard('customer')->user()->id }}">
                                                <input type="hidden" id="product_id" value="{{$shop_items->id}}">
												<button id="down" onclick="setQuantity('down');">-</button>
											</div>
										</div>
										<div class="col-md-6">
											<a class="cart-btn"  id="cart-btn"   title=""><span><i class="fa fa-shopping-cart"></i></span>Add To Cart</a>
										</div>
									</div>
								@endif
								</div>
							</div>					
						</div>					
					</div>
					
				</div>
				<div class="post-image-list">
										@foreach( $shop_items->shopImages as $img)
									<a href="#" class=" post-image" title="">
											<img src="{{URL($img->images)}}" alt="" />
										</a>	
										@endforeach
										<!--
										<a href="images/blank-image.jpg" class="html5lightbox post-image" title="">
											<img src="http://placehold.it/370x374" alt="" />
										</a>
										<a href="images/blank-image.jpg" class="html5lightbox post-image" title="">
											<img src="http://placehold.it/370x374" alt="" />
										</a>						 -->
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
					<h4>{{__('home.recent')}} <span> {{__('home.info_bank')}}</span></h4>
                </div>
               @foreach($bank_information as $bank_info)
				<div class="popular-post">
					<img src="{{URL($bank_info->image )}}" alt="" />
					<div class="popular-post-title">
					<h6><a href="inner-infoBank/{{$bank_info->id}}" title="">{{$bank_info->{'name_'.strtolower(app()->getLocale())} }}</a></h6>
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
                        <li><a href="/our-products-with-category/{{$category->id}}" title="">{{$category->{'name_'.strtolower(app()->getLocale())} }} ({{count($category->shop_items) }})</a></li>
                        <ul class="sidebar-list">
                            @foreach($category->subcategories as $sub)
                           
                            <li style="width: 90%;"><a href="/our-products-with-sub_category/{{$sub->id}}" title="">  {{$sub->{'name_'.strtolower(app()->getLocale())} }}  ({{count($sub->shop_items) }}) </a></li>
                            
                            @endforeach
							</ul>
                        
                        @endforeach
					</ul>
				</div><!-- Category List -->
				
			</div>
		</div>
	</div>


</section>
</div>
@endsection