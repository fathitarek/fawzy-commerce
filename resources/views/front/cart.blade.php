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
							<a class="cart-btn pull-right" href="checkout.html" title="">Proceed To Checkout</a>
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
					<div class="sidebar-search">
						<input class="search" type="text" placeholder="Enter Search Item" />
						<input class="search-button" type="submit" value="" />
					</div>
				</div><!-- Sidebar Search -->
				<div class="sidebar-widget">
					<div class="sidebar-title">
						<h4>Popular <span>Posts</span></h4>
					</div>
					<div class="popular-post">
						<img src="images/popular-post1.jpg" alt="" />
						<div class="popular-post-title">
							<h6><a href="#" title="">Quisque Sit Amet Unte</a></h6>
							<span>May 3,2013 / 02 comments</span>
						</div>
					</div>
					<div class="popular-post">
						<img src="images/popular-post2.jpg" alt="" />
						<div class="popular-post-title">
							<h6><a href="#" title="">Quisque Sit Amet Unte</a></h6>
							<span>May 3,2013 / 02 comments</span>
						</div>
					</div>

				</div><!-- Popular Post -->
				<div class="sidebar-widget">
					<div class="sidebar-title">
						<h4>Meta <span>Data</span></h4>
					</div>
					<ul class="sidebar-list">
						<li><a href="#" title="">Blog</a></li>
						<li><a href="#" title="">Creative</a></li>
						<li><a href="#" title="">Powerful</a></li>
						<li><a href="#" title="">Clean</a></li>
					</ul>
				</div><!-- Meta Data -->
				<div class="sidebar-widget">
					<div class="sidebar-title">
						<h4>Tags <span>Clouds</span></h4>
					</div>
					<div class="cloud-tags">
						<a href="#" title="">Uncategorized</a>
						<a href="#" title="">Susipit</a>
						<a href="#" title="">Diam</a>
						<a href="#" title="">Diam</a>
						<a href="#" title="">Susipit</a>
						<a href="#" title="">Diam</a>
						<a href="#" title="">Susipit</a>
						<a href="#" title="">Uncategorized</a>
						<a href="#" title="">Susipit</a>
					</div>
				</div><!-- Tags Clouds -->
				<div class="sidebar-widget">
					<div class="sidebar-title">
						<h4>Category <span>List</span></h4>
					</div>
					<ul class="sidebar-list">
						<li><a href="#" title="">Blog (6)</a></li>
						<li><a href="#" title="">Colourful (5)</a></li>
						<li><a href="#" title="">Feature (2)</a></li>
						<li><a href="#" title="">Nature (7)</a></li>
						<li><a href="#" title="">Scenery(3)</a></li>
						<li><a href="#" title="">Uncategorized(1)</a></li>
					</ul>
				</div><!-- Category List -->
				
			</div><!-- Sidebar -->
		</div>
	</div>


</section>
</div>
@endsection