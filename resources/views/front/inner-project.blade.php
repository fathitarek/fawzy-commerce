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
                    <h1 style="color: black;text-decoration: none;font-size: 40px;font-weight: 400;">{{$projects->{'name_'.strtolower(app()->getLocale())} }}</h1>
                    <img src="{{URL($projects->images[0]->images )}}" alt="" /><!-- Post Image -->

                    <div class="post-desc">
<p>{!! $projects->{'description_'.strtolower(app()->getLocale())} !!}  </p>
				</div>


                    <div class="post-image-list">
                        @foreach( $projects->images as $key=>$img)
                        <!-- <a href="#{{$key}}"  class="html5lightbox post-image" title="">
                                       <img src="{{URL($img->images)}}" alt="" id="{{$key}}"/>
                               </a>	 -->

                        <div class="col-md-6    ">
                            <img src="{{URL($img->images)}}" style="width:100%" onclick="openModal();currentSlide({{$key+1}})" class="hover-shadow cursor">
                        </div>
                        <!-- <div class="column">
                          <img src="img_snow.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
                        </div>
                        -->


                        

                        @endforeach

                        <div id="myModal" class="modal">
                            <span class="close cursor" onclick="closeModal()">&times;</span>
                            <div class="modal-content">
 @foreach( $projects->images as $key=>$img)
                                <div class="mySlides">
                                    <div class="numbertext"> {{$key+1}}</div> 
                                    <img src="{{URL($img->images)}}" style="width:100%">
                                </div>
@endforeach
                                <!-- <div class="mySlides">
                                  <div class="numbertext">2 / 4</div>
                                  <img src="img_snow_wide.jpg" style="width:100%">
                                </div>
                            
                                <div class="mySlides">
                                  <div class="numbertext">3 / 4</div>
                                  <img src="img_mountains_wide.jpg" style="width:100%">
                                </div>
                                
                                <div class="mySlides">
                                  <div class="numbertext">4 / 4</div>
                                  <img src="img_lights_wide.jpg" style="width:100%">
                                </div> -->

                                <a class="prev" onclick="plusSlides( - 1)">&#10094;</a>
                                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                                <div class="caption-container">
                                    <p id="caption"></p>
                                </div>

 @foreach( $projects->images as $key=>$img)
                                <div class="column">
                                    <img class="demo cursor" src="{{URL($img->images)}}" style="width:100%" onclick="currentSlide({{$key+1}})" alt="">
                                </div>
@endforeach
                            </div>
                        </div>
                        <!-- <a href="images/blank-image.jpg" class="html5lightbox post-image" title="">
                                <img src="http://placehold.it/370x374" alt="" />
                        </a>
                        <a href="images/blank-image.jpg" class="html5lightbox post-image" title="">
                                <img src="http://placehold.it/370x374" alt="" />
                        </a>						 -->
                    </div>
                    <!-- Post Images -->



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
                        {!! Form::open(['route' => 'projectsForms.store']) !!}

                        <label>{{__('home.full_name')}} <span>*</span></label>
                        <input type="text" class="form-control input-field" name="name" required/>
                        <label>{{__('home.mobile')}} <span>*</span></label>
                        <input type="number" class="form-control input-field"  name="mobile" required/>
                        <label>{{__('home.address')}}<span>*</span></label>
                        <input type="text" class="form-control input-field" name="address" required/>
                        <label>{{__('home.message')}} <span>*</span></label>
                        <textarea rows="7" class="form-control input-field" name="note" required></textarea>
                        <input type="hidden" class="form-control input-field" name="project_id" value="{{$projects->id}}"/>
                        <input type="submit" class="form-button" value="{{__('home.send_msg')}}" />
                        </form>

                    </div><!-- Form -->

                </div>




            </div>

            <div class="sidebar col-md-3 pull-right">
                <div class="sidebar-widget">
                    <div class="sidebar-search">
                        <input class="search"  name="word" id="project_search" type="text" placeholder="{{__('home.Enter_Search_Item')}}" />
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