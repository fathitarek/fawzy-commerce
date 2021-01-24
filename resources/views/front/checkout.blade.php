@extends('front.master.app')
@section('content')

<div class="top-image">
	<img src="images/single-page-top1.jpg" alt="" />
</div>
	
<section class="page">
	<div class="container">
		<div class="page-title">
			<h1>{{__('home.checkout')}}</h1>
		</div>
		<div class="row">
			<div class="left-content col-md-9">
				
				<section class="block">
					<div class="billing">
						<h3 class="sub-head"></h3>			
						<!-- <div class="row">
							<div class="col-md-12 co-form half-field">
							<label>Cupon Code<span>*</span></label>
								<select class="styled">
								  <option>01</option>
								  <option>02</option>
								  <option>03</option>
								  <option>04</option>
								  <option>05</option>
								</select>
							</div>
						</div> -->
						@if (\Session::has('success'))
						<div class="alert alert-success">
							<ul>
								<li>{{__('home.order_msg')}}</li>
							</ul>
						</div>
					@endif
						<div class="row">
						{!! Form::open(['route' => 'orders.store']) !!}
							<div class="col-md-12 co-form">
								<label>{{__('home.full_name')}} <span>*</span></label>
								<input type="text" name="full_name" value='{{$user->name}}' class="form-control input-field" placeholder=" {{__('home.full_name')}}">
							</div>
							<!-- <div class="col-md-6 co-form">
								<label>Last name<span>*</span></label>
								<input type="password" class="form-control input-field">
							</div> -->
							<!-- <div class="col-md-12 co-form">
								<label>Company name</label>
								<input type="text" class="form-control input-field">
							</div> -->
							<div class="col-md-12 co-form">
								<label>{{__('home.address')}} <span>*</span></label>
								<input type="text"   name="address"  value='{{$user->address}}'  class="form-control input-field" placeholder=" {{__('home.address')}}">
								<!-- <input type="text" class="form-control input-field" placeholder="Apartment, suite, unit etc. (opitional)"> -->
							</div>
							<div class="col-md-12 co-form">
								<label>{{__('home.city')}} <span>*</span></label>
								<input type="text"  name="city" class="form-control input-field" placeholder="{{__('home.city')}}">
							</div>
							
							<div class="col-md-6 co-form half-field">
								<label>{{__('home.zip_code')}}<span>*</span></label>
								<input type="text"   name="zip" class="form-control input-field" placeholder="{{__('home.zip_code')}}">
							</div>
							<div class="col-md-6 co-form half-field">
								<label>{{__('home.email_address')}} <span>*</span></label>
								<input type="text"  placeholder="{{__('home.email_address')}}"  value='{{$user->email}}' name="email"  class="form-control input-field">
							</div>
							<div class="col-md-12 co-form half-field">
								<label>{{__('home.phone_no')}}<span>*</span></label>
								<input type="text" placeholder="{{__('home.phone_no')}}"  value='{{$user->mobile}}' name="mobile" class="form-control input-field">
							</div>
							<div class="col-md-12  co-form half-field">
									
										<label>{{__('home.order_note')}}</label>
										<textarea class="form-control input-field" name="order_note"></textarea>
									
									<input type="hidden"  name="total"  value="{{$total}}" class="form-control input-field">	
									<input type="hidden"  name="customer_id"  value="{{Auth::guard('customer')->user()->id}}" class="form-control input-field">	

									<input type="submit" class="form-control" value="{{__('home.order')}}" style="background-color: #4fc0aa;color: white;">
							</div>
									</form>
					</div>
						</div>
						
							
				</section>

					
				<section class="block">
					<div class="cart-total cart-table order">
						<div class="cart-head">
						<h2>{{__('home.cart_total')}}</h2>
						</div>
						<ul>
						<!-- <li><p>Cart Subtotal</p><span>EGP{{$total}}</span></li> -->
						<li><p>{{__('home.shipping')}} </p><span>{{__('home.free_shipping')}}</span></li>
						<li><p> {{__('home.order_total')}}</p><span>EGP {{$total}}</span></li>
					</ul>
					</div>
				</section>
				
			
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
	</div>


</section>
</div>
@endsection