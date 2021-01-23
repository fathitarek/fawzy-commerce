@extends('front.master.app')
@section('content')

<div class="top-image">
	<img src="images/single-page-top3.jpg" alt="" />
</div><!-- Page Top Image -->
	
<section class="page">
	<div class="container">
		<div class="row">
			<div class="profile-page">
				<div class="col-md-6">
					<div class="tab-content profile-tabs-content" id="myTabContent">
						<div id="profile-pic1" class="tab-pane fade in active">
							@if(!empty($user->image))
							<img src="{{URL($user->image)}}" alt="ff" style="width: 250px;height: 250px;" />
							@else
							<img src="{{URL('images/human.jpg')}}" alt="" style="width: 250px;height: 250px;" />
							@endif
						</div>
						<!-- <div id="profile-pic2" class="tab-pane fade in">
							<img src="http://placehold.it/570x531" alt="" />
						</div>
						<div id="profile-pic3" class="tab-pane fade in">
							<img src="http://placehold.it/570x531" alt="" />
						</div> -->
					</div>					
					
					
									
				</div>
				<!-- <div class="col-md-6">
					<h1><i class="icon-user"></i>{{$user->name}}</h1>
					<h1><i class="glyphicon glyphicon-envelope"></i>{{$user->email}}</h1>
					<p>Aenean eros erat, tincidunt vitae fringilla nec, fermentum et quam. Class aptent tacit socio squ ad litora torquent per iubia nostra, per inceptos himenaeos. Ut eleif end, nisi se iporta mollis, odio urna auctor tellus, eu semper neque eravitae elitv. Quisque sapien dl posuere in congue a, euismod rhoncus turpis. Integer aliquet tellus a neque elementum ornareIsni. Nullam neque massa, sodales eu volutpat id, interdum ac nibh. Aenean eros erat, tincdunt vitae fringilla nec, ferme ntuim et quam. Class aptent taciti sociosqu ad litora torquent per con ubia nostra, per inceptos himenaeos. Aenean eros erat, tincidunt vitae fringilla niferm entum et quam. Class aptent tacit socio squ ad litora torquent per iubia nostra, per incitos himenaeos. Ut eleif end, nisi se iporta mollis, odio urna auctor tellus, eu semper neravitae elitv. Quisque sapien dl posuere in congue a, euismod rhoncus turpis.</p>
					<p>Integer aliquet tellus a neque elementum ornareIsni. Nullam neque massa, sodales euaeo volutpat id, interdum ac nibh. Aenean eros erat, tincdunt vitae fringilla nec, ferme ntuimuv et quam. Class aptent taciti sociosqu ad litora torquent per con ubia nostra, per inceptosvi himenaeos. Aenean eros erat, tincidunt vitae fringilla nec, fermentum et quam. Class oient tacit socio squ ad litora torquent per iubia nostra, per inceptos himenaeos. Ut eleif end, ui nisi se iporta mollis, odio urna auctor tellus, eu semper neque eravitae elitv. Quisq isapien dl posuere in congue a, euismod rhoncus turpis. Integer aliquet tellus a neque elementum ornareIsni. Nullam neque massa, sodales eu volutpat idurna auctor tellus, eu sei neravitae elitv. Quisque sapien dl posuere in congue a, euismod rhoncus turpis.</p> 
					
				</div> -->
				<div class="col-md-6">
				<div class="form">
					<!-- <h3 class="sub-head">{{__('home.contact_us_by_message')}}</h3> -->
					<!-- <p>Anean sit amet nibh ut magna malesuada <span>*</span></p> -->
					@if (\Session::has('success'))
						<div class="alert alert-success">
							<ul>
								<li>{{__('home.successfully_update')}}</li>
							</ul>
						</div>
					@endif
					
					{{ Form::open(array('action' => "CustomerController@update",'files' => true)) }}

						
						<label>{{__('home.full_name')}} <span>*</span></label>
						<input type="text" class="form-control input-field" name="name" value="{{$user->name}}" required/>
						<label>{{__('home.email_address')}} <span>*</span></label>
						<input type="email" class="form-control input-field" disabled value="{{$user->email}}"  name="email"/>
						<label>{{__('auth.password')}}</label>
						<input type="password" class="form-control input-field"  value=""  name="password"/>
						<label>{{__('home.mobile')}} <span>*</span></label>
						<input type="number" class="form-control input-field"  value="{{$user->mobile}}"  name="mobile"/>
						<label>{{__('home.address')}}</label>
						<input type="text" class="form-control input-field" name="address"  value="{{$user->address}}" />
						<label>{{__('home.image')}} </label>
						<input type="file" class="form-control input-field" name="image"  />

					
						<input type="hidden" class="form-control input-field" name="id" value="{{$user->id}}"/>
						<input type="submit" class="form-button" value="{{__('home.update_btn')}}" />
					</form>
				
				</div><!-- Form -->
</div>
			</div>
		</div>	
	</div>	
		
	
</section>
</div>
@endsection