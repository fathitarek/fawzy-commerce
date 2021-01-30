@extends('front.master.app')

@section('content')
<div class="top-image">
	<img src="images/single-page-top3.jpg" alt="" />
</div><!-- Page Top Image -->
	
<section class="page">
	<div class="container">
		<div class="page-title">
			<h1>{{__('home.custom')}} <span>{{__('home.order')}}</span></h1>
		</div><!-- Page Title -->
		<div class="row">
			<div class="col-md-6">
				<div class="contact-info">
					<h3 class="sub-head">{!! $donation[0]->{'description_'.strtolower(app()->getLocale())} !!}</h3>
					<img src="{{URL( $donation[0]->image)}}"></iframe>
<p>{!! $donation[0]->{'description_'.strtolower(app()->getLocale())} !!}</p>
				
				</div>
			</div>	<!-- Contact Info -->
			<div class="col-md-6 pull-right">
				<div id="message"></div>
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
					  {!!Form::open(array('action' => 'donation_formController@store'))!!}

						<label for="name" accesskey="U">{{__('home.full_name')}} <span>*</span></label>
						<input name="name" class="form-control input-field" type="text" id="name" size="30" value=""  require/>
						<label for="email" accesskey="E">{{__('home.email_address')}} <span>*</span></label>
						
						<input name="email" class="form-control input-field" type="text" id="email" size="30" value="" require/>
						<label for="comments" accesskey="C">{{__('home.message')}} <span>*</span></label>
						<textarea name="message" rows="9" id="comments" rows="7" class="form-control input-field" require></textarea>
						<input type="submit" class="form-button submit" id="submit" value="{{__('home.send_msg')}}" />
					</form>
				
				</div>
			</div>	<!-- Message Form -->
		</div>	
	</div>	
		
	
	
</section>
</div>
@endsection