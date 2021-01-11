@extends('front.master.app')
@section('content')

<div class="top-image">
	<img src="images/single-page-top3.jpg" alt="" />
</div><!-- Page Top Image -->
	
<section class="page">
	<div class="container">
			<div class="page-title">
            <h1>{{__('home.projects')}}</h1>
			</div><!-- Page Title -->	
				
					<div class="gallery-content tab-content" id="myTabContent">
						<div id="events" class="tab-pane fade active in">
							<div class="row">
                            @foreach($projects as $key=> $project)

								<div class="col-md-4">
									<div class="gallery-image" style="width: 370px;height: 222px;">
										<img src="{{URL($project->images[0]->images)}}" alt="" />
										<!-- <span>GALLERY / EVENTS</span> -->
										<!-- <div class="image-lists">
											<ul>
												<li><a href="images/blank-image.jpg" class="html5lightbox" data-group="group1" title=""><img src="http://placehold.it/68x61" alt="" /></a></li>
												<li><a href="images/blank-image.jpg" class="html5lightbox" data-group="group1" title=""><img src="http://placehold.it/68x61" alt="" /></a></li>
												<li><a href="images/blank-image.jpg" class="html5lightbox" data-group="group1" title=""><img src="http://placehold.it/68x61" alt="" /></a></li>
											</ul>
										</div> -->
									</div>
									<h3 class="image-title"><a href="inner-project/{{$project->id}}" title="">{{$project->{'name_'.strtolower(app()->getLocale())} }}</a></h3>
								</div>
                                <?php ++$key; ?>
                @if($key>2&&$key%3==0)
</div>
<div class="row">
    @endif

@endforeach
								
							</div>
							
						</div><!-- Events -->
						
					</div>
	</div>


</section>
</div>
@endsection
