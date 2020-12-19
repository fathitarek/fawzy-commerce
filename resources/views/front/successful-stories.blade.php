@extends('front.master.app')
@section('content')
<div class="top-image">
	<img src="images/single-page-top1.jpg" alt="" />
</div><!--Page Top Image-->
	
<section class="page">
	<div class="container">
			<div class="page-title">
				<h1>{{__('home.stories')}}  <span>{{__('home.successful')}}</span></h1>
			</div><!--Page Title-->
			<div class="row">
                @foreach($sucess_stories as $key=>$sucess_story)
				<div class="col-md-3">
					<div class="story">
						<div class="story-img">
							<img src="{{URL($sucess_story->image )}}" alt="" />
                            <a href="inner-successful-stories/{{$sucess_story->id}}" title="">
                                <h5>{{$sucess_story->{'name_'.strtolower(app()->getLocale())} }}</h5>
</a>
							<a href="inner-successful-stories/{{$sucess_story->id}}" title=""><span></span></a>
						</div>
						<p>{!! str_limit($sucess_story->{'description_'.strtolower(app()->getLocale())},250) !!}</p>
						<!-- <h6><i>$</i> 85920<span>Money Spent</span></h6> -->
						<!-- <span><i class="icon-map-marker"></i>In SouthAfrica</span> -->
					</div><!--Story-->
                
                </div>
                <?php ++$key; ?>
                @if($key>3&&$key%4==0)
</div>
<div class="row">
    @endif

@endforeach
			</div>

			
	</div>
		


</section>
</div>
@endsection