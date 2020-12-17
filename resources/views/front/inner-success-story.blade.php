@extends('front.master.app')
@section('content')
<div class="top-image">
	<img src="images/single-page-top2.jpg" alt="" />
</div><!-- Page Top Image -->
	
<section class="page">
	<div class="container">
		<div class="row">
		<div class="left-content col-md-9">
			<div class="post">
				<img src="{{URL($sucess_stories->image)}}" alt="" /><!-- Post Image -->
				<!-- <span class="category">In <a href="#" title="">Home</a>, <a href="#" title="">Blog</a>, <a href="#" title="">Charity</a></span>Categories -->
				<h1>{{$sucess_stories->{'name_'.strtolower(app()->getLocale())} }}</h1>
				<!-- <ul class="post-meta">
					<li><a href="" title=""><i class="icon-calendar-empty"></i><span>September</span> 1,2013</a></li>
					<li><a href="" title=""><i class="icon-user"></i>By James Gomaz</a></li>
					<li><a href="" title=""><i class="icon-map-marker"></i>In South Africa</a></li>
				</ul> -->
				<div class="post-desc">
				<p>{!! $sucess_stories->{'description_'.strtolower(app()->getLocale())} !!}</p>						
				</div>
				<blockquote>Dused pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget  blandit nunc tortor ucnibh. <span>Nullam mollis</span>. Ut justo.</blockquote>
				<p>Donec et libero quis erat commodo suscipit. Mae elit a,  eleifend leo. Phase llus ut pharetra mi, ctor diam. id iarciet spen idisse rhoncus id arcet porta. Aenean blandit mi ipsum, ut pharetrnisi vestibul mum ornare.Lorie ipsum dolor stamet, cons ctetur adipiscing elit. Duis non scelerisque esit, aliquiam ligula.Aenean blamp esum. Lorem ipsum dolor sit amet, consec tietuer adipiscing elit. Phasellus hendrerit. Pellent iesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor ucnibh. Nullam mollis. Ut justo. Suspendisse potenti. Ut convallis, sem sit amet interdum conis ectetuer, odio augue aliquam leo, nec dapibus tortor nibh sed augue. Integer eu magna sit amet metus fermentum posuere. Morbi sit amet nulla sed dolor elementum imperdiet.</p>
				<div class="post-image-list">
					<a href="images/blank-image.jpg" class="html5lightbox post-image" title="">
						<img src="http://placehold.it/370x374" alt="" />
					</a>
					<a href="images/blank-image.jpg" class="html5lightbox post-image" title="">
						<img src="http://placehold.it/370x374" alt="" />
					</a>
					<a href="images/blank-image.jpg" class="html5lightbox post-image" title="">
						<img src="http://placehold.it/370x374" alt="" />
					</a>						
                </div>
                <!-- Post Images -->
				<p>Donec et libero quis erat commodo suscipit. Mae elit a,  eleifend leo. Phase llus ut pharetra mi, ctor diam. id iarciet spen idisse rhoncus id arcet porta. Aenean blandit mi ipsum, ut pharetrnisi vestibul mum ornare.Lorie ipsum dolor stamet, cons ctetur adipiscing elit. Duis non scelerisque esit, aliquiam ligula.Aenean blamp esum. Lorem ipsum dolor sit amet, consec tietuer adipiscing elit. Phasellus hendrerit. Pellent iesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor ucnibh. Nullam mollis. Ut justo. Suspendisse potenti. Ut convallis, sem sit amet interdum conis ectetuer, odio augue aliquam leo, nec dapibus tortor nibh sed augue. Integer eu magna sit amet metus fermentum posuere. Morbi sit amet nulla sed dolor elementum imperdiet.</p>
								
				<div class="cloud-tags">
					<h3 class="sub-head">Tags Clouds</h3>
					<a title="" href="#">Uncategorized</a>
					<a title="" href="#">Susipit</a>
					<a title="" href="#">Diam</a>
					<a title="" href="#">Diam</a>
					<a title="" href="#">Susipit</a>
				</div><!-- Tags -->	

				<div class="comments">
					<h3 class="sub-head">03 Comments</h3>
					<ul>
						<li>
							<div class="comment">
								<img src="http://placehold.it/73x74" alt="" />
								<a href="#" class="reply" title="">Reply</a>
								<h5>Thoms Gomz Britian</h5>
								<i><span>September</span> 24, 2013  at  1:05 <span>pm</span></i>
								<p>Aenean blamp esum. erat commodo suscipit. Mae elit a,  eleifend leo. Phase llus ut pharetra mi, ctor diam. id iarciet spen dis se rhoncus idarciret porta. Aenean blandit mi ipsum, ut pharetrnisi vestibul mum ornare.</p>
							</div><!-- Comment -->
								<ul>
									<li>
										<div class="comment">
											<img src="http://placehold.it/73x74" alt="" />
											<a href="#" class="reply" title="">Reply</a>
											<h5>Thoms Gomz Britian</h5>
											<i><span>September</span> 24, 2013  at  1:05 <span>pm</span></i>
											<p>Aenean blamp esum. erat commodo suscipit. Mae elit a,  eleifend leo. Phase llus ut pharetra.</p>
										</div><!-- Reply -->

									</li>
								</ul>
						</li>
						<li>
							<div class="comment">
								<img src="http://placehold.it/73x74" alt="" />
								<a href="#" class="reply" title="">Reply</a>
								<h5>Thoms Gomz Britian</h5>
								<i><span>September</span> 24, 2013  at  1:05 <span>pm</span></i>
								<p>Aenean blamp esum. erat commodo suscipit. Mae elit a,  eleifend leo. Phase llus ut pharetra mi, ctor diam. id iarciet spen dis se rhoncus idarciret porta. Aenean blandit mi ipsum, ut pharetrnisi vestibul mum ornare.</p>
							</div><!-- Comment -->
						</li>
					
					</ul>
				</div>
				<div class="form">
					<h3 class="sub-head">Send Us Message</h3>
					<p>Anean sit amet nibh ut magna malesuada <span>*</span></p>
					
					<form>
						<label>Full name <span>*</span></label>
						<input type="text" class="form-control input-field" />
						<label>Email Address <span>*</span></label>
						<input type="email" class="form-control input-field" />
						<label>Message <span>*</span></label>
						<textarea rows="7" class="form-control input-field"></textarea>
						<input type="submit" class="form-button" value="SEND MESSAGE" />
					</form>
				
				</div><!-- Form -->
					
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
					<img src="http://placehold.it/270x103" alt="" />
					<div class="popular-post-title">
						<h6><a href="#" title="">Quisque Sit Amet Unte</a></h6>
						<span>May 3,2013 / 02 comments</span>
					</div>
				</div>
				<div class="popular-post">
					<img src="http://placehold.it/270x103" alt="" />
					<div class="popular-post-title">
						<h6><a href="#" title="">Quisque Sit Amet Unte</a></h6>
						<span>May 3,2013 / 02 comments</span>
					</div>
				</div>

			</div><!-- Popular Posts -->
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
			<div class="sidebar-widget">
				<div class="sidebar-title">
					<h4>Recent <span>Events</span></h4>
				</div>
				<div class="popular-post">
					<img src="http://placehold.it/270x103" alt="" />
					<div class="popular-post-title">
						<h6><a href="#" title="">Quisque Sit Amet Unte</a></h6>
						<span>May 3,2013 / 02 comments</span>
					</div>
				</div>
				<div class="popular-post">
					<img src="http://placehold.it/270x103" alt="" />
					<div class="popular-post-title">
						<h6><a href="#" title="">Quisque Sit Amet Unte</a></h6>
						<span>May 3,2013 / 02 comments</span>
					</div>
				</div>

			</div><!-- Recent Events -->
			<div class="sidebar-widget">
				<div class="sidebar-title">
					<h4>Donate <span>Us</span></h4>
				</div>
				<div class="donate-us">
					<h3>Give Your Donations</h3>
					<span><i class="icon-phone"></i>1 (123) 12345678</span>
					<div class="collected">
						<p>Collected Donations</p>
						<span><strong>$</strong> 7,089,7!</span>
					</div>
					<div class="d-now">
						<a title="" class="donate-btn" href="">Donate Now</a>
					</div>
				</div>
			</div><!--Donate Us -->
			<div class="sidebar-widget">
				<div class="sidebar-title">
					<h4>Video <span>Widget</span></h4>
				</div>
				<div class="sidebar-video">
					<img src="images/sidebar-video.jpg" alt="" />
					<h6>Quisque Sit Amet Unte</h6>
					<span><a class="html5lightbox" href="http://player.vimeo.com/video/31943945?color=ffffff" title="This Is a Demo Video"><i class="icon-play"></i></a></span>
				</div>
			</div><!-- Video Widget -->
			<div class="sidebar-widget">
				<div class="sidebar-title">
					<h4>Gallery <span>Widget</span></h4>
				</div>
				<div class="gallery row">
					<div class="col-md-4">
						<a href="#" title=""><img src="http://placehold.it/77x75" alt="" /></a>
					</div>
					<div class="col-md-4">
						<a href="#" title=""><img src="http://placehold.it/77x75" alt="" /></a>
					</div>
					<div class="col-md-4">
						<a href="#" title=""><img src="http://placehold.it/77x75" alt="" /></a>
					</div>
					<div class="col-md-4">
						<a href="#" title=""><img src="http://placehold.it/77x75" alt="" /></a>
					</div>
					<div class="col-md-4">
						<a href="#" title=""><img src="http://placehold.it/77x75" alt="" /></a>
					</div>
					<div class="col-md-4">
						<a href="#" title=""><img src="http://placehold.it/77x75" alt="" /></a>
					</div>
				
				</div>
			</div><!-- Sidebar Gallery -->
			
		</div>
		</div>
	</div>


</section>
</div>
@endsection