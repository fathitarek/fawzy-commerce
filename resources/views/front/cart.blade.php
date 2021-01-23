@extends('front.master.app')
@section('content')
<div class="top-image">
	<img src="{{URL('images/single-page-top2.jpg')}}" alt="" />
</div><!-- Page Top Image -->

<section class="page">
	<div class="container">
		<div class="page-title">
			<h1>{{__('home.cart')}} </h1>
		</div><!-- Page Title -->
		<div class="row">
			<div class="left-content col-md-9">
				
				<div class="cart-table">
					<div class="cart-head">
						<h2 class="product">{{__('home.product')}} </h2>
						<h2 class="price"> {{__('home.price')}}</h2>
						<h2 class="quantity">{{__('home.quantity')}}</h2>
						<h2 class="total"> {{__('home.total')}}</h2>
					</div>
					<ul>
						@foreach($carts as $cart)
						<li>	
							<div class="product">
								<a href="remove_cart/{{$cart->id}}" title=""><i class="icon-remove"></i></a>
								<h6>{{$cart->shop_item->{'name_'.strtolower(app()->getLocale())} }}</h6>
								<img src="{{URl($cart->shop_item->main_image)}}" style="width: 30px;height: 30px;" alt="" />
							</div>
							<div class="price">
								@if(isset($cart->shop_item->sale_price))
								<h6>{{$cart->shop_item->sale_price}} EGP</h6>
								@else
								<h6>{{$cart->shop_item->main_price}} EGP</h6>
								@endif
							</div>
							<div class="quantity">
							{{$cart->quantity}}
								<!-- <select class="styled">
								  <option>01</option>
								  <option>02</option>
								  <option>03</option>
								  <option>04</option>
								  <option>05</option>
								</select> -->
							</div>
							
							<div class="total">
							@if(isset($cart->shop_item->sale_price))
								<h6>${{$cart->shop_item->sale_price*$cart->quantity}}</h6>
								@else
								<h6>${{$cart->shop_item->main_price*$cart->quantity}}</h6>
								@endif
							</div>
						</li>
						@endforeach
						<li>
							<!-- <input type="text" /> -->
							<!-- <a class="cart-btn pull-left" href="#" title="">Apply Coupon</a> -->
							<a class="cart-btn pull-right" href="{{URL('/checkout')}}" title="">Proceed To Checkout</a>
							<!-- <a class="cart-btn pull-right" href="#" title="">Update Cart</a> -->
						</li>
					</ul>
				</div>
				
				
				<div class="cart-total cart-table">
					<div class="cart-head">
						<h2>{{__('home.cart_total')}}</h2>
					</div>
					<ul>
						<!-- <li><p>Cart Subtotal</p><span>EGP{{$total}}</span></li> -->
						<li><p>{{__('home.shipping')}} </p><span>{{__('home.free_shipping')}}</span></li>
						<li><p> {{__('home.order_total')}}</p><span>EGP {{$total}}</span></li>
					</ul>
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