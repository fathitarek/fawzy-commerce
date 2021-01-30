@extends('front.master.app')
@section('content')
<style>
    body {
        font-family: Verdana, sans-serif;
        margin: 0;
    }

    * {
        box-sizing: border-box;
    }

    .row > .column {
        padding: 0 8px;
    }

    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    .column {
        float: left;
        width: 25%;
    }

    /* The Modal (background) */
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: black;
    }

    /* Modal Content */
    .modal-content {
        position: relative;
        background-color: #fefefe;
        margin: auto;
        padding: 0;
        width: 90%;
        max-width: 1200px;
    }

    /* The Close Button */
    .close {
        color: white;
        position: absolute;
        top: 10px;
        right: 25px;
        font-size: 35px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #999;
        text-decoration: none;
        cursor: pointer;
    }

    .mySlides {
        display: none;
    }

    .cursor {
        cursor: pointer;
    }

    /* Next & previous buttons */
    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -50px;
        color: white;
        font-weight: bold;
        font-size: 20px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
        -webkit-user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    /* Number text (1/3 etc) */
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    img {
        margin-bottom: -4px;
    }

    .caption-container {
        text-align: center;
        background-color: black;
        padding: 2px 16px;
        color: white;
    }

    .demo {
        opacity: 0.6;
    }

    .active,
    .demo:hover {
        opacity: 1;
    }

    img.hover-shadow {
        transition: 0.3s;
    }

    .hover-shadow:hover {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
</style>
<div class="top-image">
    <img src="{{URL('images/single-page-top2.jpg')}}" alt="" />
</div><!-- Page Top Image -->

<section class="page">
    <div class="container">
        <div class="row">
            <div class="left-content col-md-9">
                <div class="post">
                    <h1 style="color: black;text-decoration: none;font-size: 40px;font-weight: 400;">{{$reports->{'name_'.strtolower(app()->getLocale())} }}</h1>
                    <img src="{{URL($reports->image )}}" alt="" /><!-- Post Image -->

                    <div class="post-desc">
<p>{!! $reports->{'description_'.strtolower(app()->getLocale())} !!}  </p>
				</div>
                <div class="post-image-list">
					<!-- <a href="images/blank-image.jpg" class="html5lightbox post-image" title="">
						<img src="http://placehold.it/370x374" alt="" />
					</a>
					<a href="images/blank-image.jpg" class="html5lightbox post-image" title="">
						<img src="http://placehold.it/370x374" alt="" />
					</a>
					<a href="images/blank-image.jpg" class="html5lightbox post-image" title="">
						<img src="http://placehold.it/370x374" alt="" />
					</a>						 -->
                </div>

                   
                        
                      


                        

                        

                  


                    <div class="form">
                        <h3 class="sub-head">{{__('home.have_spical_request')}}</h3>
                        <!-- <p>Anean sit amet nibh ut magna malesuada <span>*</span></p> -->
                        @if (\Session::has('success'))
                        <div class="alert alert-success">
                            <ul>
                                <li>{{__('home.successfully')}}</li>
                            </ul>
                        </div>
                        @endif
                        {!! Form::open(['route' => 'reportsForms.store']) !!}

                        <label>{{__('home.full_name')}} <span>*</span></label>
                        <input type="text" class="form-control input-field" name="name" required/>
                        <label>{{__('home.mobile')}} <span>*</span></label>
                        <input type="number" class="form-control input-field"  name="mobile" required/>
                        <label>{{__('home.address')}}<span>*</span></label>
                        <input type="text" class="form-control input-field" name="address" required/>
                        <label>{{__('home.message')}} <span>*</span></label>
                        <textarea rows="7" class="form-control input-field" name="note" required></textarea>
                        <input type="hidden" class="form-control input-field" name="report_id" value="{{$reports->id}}"/>
                        <input type="submit" class="form-button" value="{{__('home.send_msg')}}" />
                        </form>

                    </div><!-- Form -->

                </div>




            </div>

            <div class="sidebar col-md-3 pull-right">
                <div class="sidebar-widget">
                    <div class="sidebar-search">
                        <input class="search"  name="word" id="report_search" type="text" placeholder="{{__('home.Enter_Search_Item')}}" />
                        <input class="search-button" type="submit" value="" />
                    </div>
                    <div id="country_list"></div>
                </div>
                <!-- Sidebar Search -->
                <div class="sidebar-widget">
                    <div class="sidebar-title">
                        <h4>{{__('home.recent')}} <span> {{__('home.info_bank')}}</span></h4>
                    </div>
                    @foreach($bank_information as $bank_info)
                    <div class="popular-post">
                        <img src="{{URL($bank_info->image )}}" alt="" />
                        <div class="popular-post-title">
                            <h6><a href="{{URL('inner-infoBank/')}}/{{$bank_info->id}}" title="">{{$bank_info->{'name_'.strtolower(app()->getLocale())} }}</a></h6>
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
                        <h4>{{__('home.recent')}} <span>{{__('home.live_certificate')}} </span></h4>
                    </div>
                    @foreach($live_certificate as $live_certific)
                    <div class="popular-post">
                        <img src="{{URL($live_certific->image )}}" alt="" />
                        <div class="popular-post-title">
                            <h6><a href="{{URL('inner-certifcate/')}}/{{$live_certific->id}}" title="">{{$live_certific->{'name_'.strtolower(app()->getLocale())} }}</a></h6>
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
                        <img src="{{URL($competition->image)}}" alt="" />
                        <div class="popular-post-title">
                            <h6><a href="{{URL('inner-competition')}}/{{$competition->id}}" title="">{{$competition->{'name_'.strtolower(app()->getLocale())} }}</a></h6>
                        </div>
                    </div>
                    @endforeach

                </div><!-- Recent Events -->


            </div>
        </div>
    </div>


</section>
</div>

<script>
    function openModal() {
    document.getElementById("myModal").style.display = "block";
    }

    function closeModal() {
    document.getElementById("myModal").style.display = "none";
    }

    var slideIndex = 1;
    showSlides(slideIndex);
    function plusSlides(n) {
    showSlides(slideIndex += n);
    }

    function currentSlide(n) {
    showSlides(slideIndex = n);
    }

    function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    captionText.innerHTML = dots[slideIndex - 1].alt;
    }
</script>
@endsection