@extends('front.master.app')
@section('content')
<div class="top-image">
	<img src="{{URL('images/single-page-top2.jpg')}}" alt="" />
</div><!-- Page Top Image -->
	
<section class="page">
	<div class="container">
		<div class="page-title">
			<h1>{{__('home.products')}}</h1>
		</div><!-- Page Title -->
		<div class="row">
		<form method="get" action="{{URL('/our-products')}}"> 
			<div class="left-content col-md-9">
				
				<div class="featured-products">
					<!-- <h3 class="sub-head">Buy these products to help us raise donations for the poor</h3> -->
					<!-- <p>Aenean tristique pulvinar urna, et lacinia magna imperdiet vitae. In vitae lorem dolor, in lacinia augue. Fusce pretium dolor non odio aucto at iaculis nibh pellentesque. Integer dapibus vehicula ligula sit amet aliquam lorem ipsum dolor sit amet. Vestibulum posuere placerat me tus, nec porttitor nisl tempus et tristique pulvinar urna, et lacinia magna imperdiet vitae.</p> -->
			<div class="row">
			<div class="col-md-3">
				<select name="category_id"  id='category_id' class="form-control">
				<option value='0'>{{__('home.select_category')}}</option>
				@foreach($categories as $category)
				<option value="{{$category->id}}"> {{$category->{'name_'.strtolower(app()->getLocale())} }}</option>
				@endforeach
				</select>
				</div>
				<div class="col-md-3">
				<select class="form-control" name="sub_category_id" id="sub_category_id">
   				 <option value='0'>{{__('home.select_sub_category')}}</option>
   				 </select>
					</div>
					<div class="col-md-3">
					<select class="form-control" name="price" id="price">
					<option value="2">{{__('home.select_price')}}</option>
   					<option value="0">{{__('home.low_to_high')}}</option>
					<option value="1">{{__('home.high_to_low')}} </option>
   				 </select>
					</div>
					<div class="col-md-2">
					<select class="form-control" name="order" id="order">
					<option value="2">{{__('home.order')}}</option>
   					<option value="0">{{__('home.low_to_high')}}</option>
					<option value="1">{{__('home.high_to_low')}} </option>
   				 </select>
					</div>
					<div class="row">
					<div class="col-md-3">
					<input type="submit" value="{{__('home.search')}}" class="btn" style="background-color: #4fc0aa;color:white">
					</div>
					<div class="col-md-3">
					<!-- <input type="submit" value="{{__('home.search')}}" class="btn" style="background-color: #4fc0aa;color:white"> -->
					</div>
					</div>
		</form>
	</div>
					<div class="row">
                        @foreach($shop_items as $product)
						<div class="col-md-4">
							<img src="{{URL($product->main_image )}}" alt="" />
							<h4>{{$product->{'name_'.strtolower(app()->getLocale())} }}</h4>
							<!-- <div class="ratings">
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star-empty"></i>
							</div> -->
							<div class="product-price">
								<span>{{$product->main_price}} $</span>
								<p>{{$product->sale_price}} $</p>
								<a href="checkout.html" title="">Add To Cart</a>
							</div>
                        </div><!--Product-->
                        @endforeach
					</div>
				
				</div>
				{{$shop_items->render()}}
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
						<h6><a href="#" title="">{{$bank_info->{'name_'.strtolower(app()->getLocale())} }}</a></h6>
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
						<h6><a href="#" title="">{{$sucess_story->{'name_'.strtolower(app()->getLocale())} }}</a></h6>
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
						<h6><a href="#" title="">{{$competition->{'name_'.strtolower(app()->getLocale())} }}</a></h6>
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
						<h6><a href="{{$project->id}}" title="">{{$project->{'name_'.strtolower(app()->getLocale())} }}</a></h6>
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
						<h6><a href="{{$live_cert->id}}" title="">{{$live_cert->{'name_'.strtolower(app()->getLocale())} }}</a></h6>
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