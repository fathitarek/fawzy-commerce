<!DOCTYPE html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Life Line</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,900italic,700italic,900,700,500italic,500,400italic,300italic,300,100italic,100|Open+Sans:400,300,400italic,300italic,600,600italic,700italic,700,800|Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700' rel='stylesheet' type='text/css'>


    <!-- Styles -->
    @if(Session::get('locale')=='en')
    {!! Html::style('css/bootstrap.css') !!}
    @else
    {!! Html::style('css/bootstrap-arabic.css') !!}

    @endif
    {!! Html::style('font-awesome/css/font-awesome.css') !!}
    @if(Session::get('locale')=='en')
    {!! Html::style('css/style.css') !!}
    @else
    {!! Html::style('css/style_ar.css') !!} 

    @endif
    {!! Html::style('css/responsive.css') !!}
    {!! Html::style('layerslider/css/layerslider.css') !!} 
    {!! Html::style('css/sea-green.css') !!}







    <link href="css/contact.css" rel="stylesheet" type="text/css" /> <!-- AJAX Contact Form Stylesheet -->
    <style>
        .pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus{
            background-color: #4fc0aa;
        }
        .inactiveLink {
            pointer-events: none;
            cursor: default;
        }
    </style>
    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="css/ie.css" />
    <script type="text/javascript" language="javascript" src="js/html5shiv.js"></script>
    <![endif]-->


    <!-- Scripts -->
    {!! Html::script('js/jquery.1.9.1.js') !!}
    {!! Html::script('js/jquery.jigowatt.js') !!}<!-- AJAX Form Submit -->
    {!! Html::script('js/script.js') !!}
    {!! Html::script('js/bootstrap.js') !!}
    {!! Html::script('js/html5lightbox.js') !!}
    {!! Html::script('js/jquery.flexslider.js') !!}
    {!! Html::script('js/jquery.mousewheel.js') !!}

    <script>
        $(window).load(function () {
            $('.countries').flexslider({
                animation: "slide",
                animationLoop: false,
                slideShow: false,
                controlNav: false,
                pausePlay: false,
                mousewheel: true,
                start: function (slider) {
                    $('body').removeClass('loading');
                }
            });

            $('.footer_carousel').flexslider({
                animation: "slide",
                animationLoop: false,
                slideShow: false,
                controlNav: true,
                maxItems: 1,
                pausePlay: false,
                mousewheel: true,
                start: function (slider) {
                    $('body').removeClass('loading');
                }
            });


        });
    </script>
    <script>
        function setQuantity(upordown) {
            var quantity = document.getElementById('quantity');
            if (quantity.value > 1) {
                if (upordown == 'up') {
                    ++document.getElementById('quantity').value;
                } else if (upordown == 'down') {
                    --document.getElementById('quantity').value;
                }
            } else if (quantity.value == 1) {
                if (upordown == 'up') {
                    ++document.getElementById('quantity').value;
                }
            } else
            {
                document.getElementById('quantity').value = 1;
            }
        }
    </script>
</head>
<body>
    <div class="theme-layout">
        <div id="top-bar">
            <div class="container">
                <ul>
                    <li>
                        <i class="icon-home"></i>
                        {{$settings[0]->address}}
                    </li>
                    <li>
                        <i class="icon-phone"></i>
                        {{$settings[0]->mobile}}
                    </li>
                    <li>
                        <i class="icon-envelope"></i>
                        {{$settings[0]->email}}
                    </li>
                </ul> 
                <div class="search-box">
                    <input class="submit-button" type="submit" value="" >
                    <input class="search-input" type="text" onblur="if (this.value == '')
                                this.value = this.defaultValue;" onfocus="if (this.value == this.defaultValue)
                                            this.value = '';"  value="Search">
                </div>
            </div>
        </div><!--top bar-->


        <header>
            <div class="container">
                <div class="logo">
                    <a href="#" title=""><img src="{{URL('images/logo.png')}}" alt="Logo" /><h1><i>L</i>ifeline</h1></a>
                </div><!-- Logo -->
                <nav class="menu">
                    <ul id="menu-navigation">
                        <li class="active"><a>{{__('home.home')}}</a>
                            <!-- <ul>
                                    <li><a href="index.html" title="">Home Simple 1</a></li>
                                    <li><a href="index2.html" title="">Home Modern Style</a></li>
                                    <li><a href="index3.html" title="">Home Simple 2</a></li>
                                    <li><a href="index4.html" title="">Home Simple 3</a></li>
                                    <li><a href="index7.html" title="">Home Traditional Style</a></li>
                                    <li><a href="index5.html" title="">Home With Video</a></li>
                                    <li><a href="index6.html" title="">Home With Portfolio</a></li>
                                    <li><a><strong>Header Styles</strong></a>
                                            <ul>
                                                    <li><a href="sticky-menu.html" title="">Sticky Header</a></li>
                                                    <li><a href="menu-below-slider.html" title="">Menu Below Slider</a></li>
                                                    <li><a href="middle-logo.html" title="">With Logo In The Mid</a></li>
                                                    <li><a href="index5.html" title="">Toggle Header</a></li>
                                    </ul>
                                    </li>
                            </ul> -->
                            <!-- Drop Down -->
                        </li>
                        <li><a>{{__('home.blog')}}</a>
                            <!-- <ul class="mega-menu">
                                    <li><a href="about.html" title="">About Wide</a></li>
                                    <li><a href="contact.html" title="">Contact Wide</a></li>
                                    <li><a href="profile-single-page.html" title="">Profile Single Page</a></li>
                                    <li><a>Events</a>
                                            <ul class="drop-right">
                                                    <li><a href="events.html" title="">Right Sidebar</a></li>
                                                    <li><a href="events-left-sidebar.html" title="">Left Sidebar</a></li>
                                                    <li><a href="single-event-page.html" title="">Event Single Page</a></li>
                                            </ul>
                                    </li>
                                    <li><a href="successful-stories.html" title="">Successful Stories Wide</a></li>
                                    <li><a href="projects.html" title="">On Going Projects Wide</a></li>
                                    <li><a href="404.html" title="">404 Page Wide</a></li>
                                    <li><a href="causes.html" title="">Our Causes Wide</a></li>
                                    <li><a href="single-causes.html" title="">Causes Single Page</a></li>
                                    <li><a href="services-single.html" title="">Service Single Page</a></li>
                                    <li><a>Search With Right Sidebar</a>
                                            <ul>
                                                    <li><a href="search-found.html" title="">Search Results Found</a></li>
                                                    <li><a href="nothing-found.html" title="">Search Result Not Found</a></li>
                                            </ul>
                                    </li>
                                    <li><a>Search With Left Sidebar</a>
                                            <ul class="drop-right">
                                                    <li><a href="search-found-left-sidebar.html" title="">Search Results Found</a></li>
                                                    <li><a href="nothing-found-left-sidebar.html" title="">Search Result Not Found</a></li>
                                            </ul>
                                    </li>
                            </ul> -->
                            <!-- Drop Down -->				
                        </li>
                        <li><a>{{__('home.shop')}}</a>
                            <!-- <ul>
                                    <li><a>My Cart</a>
                                            <ul class="drop-right">
                                                    <li><a href="cart.html" title="">Right Sidebar</a></li>
                                                    <li><a href="cart-left-sidebar.html" title="">Left Sidebar</a></li>
                                            </ul>
                                    </li>
                                    <li><a>Products</a>
                                            <ul class="drop-right">
                                                    <li><a href="products.html" title="">Right Sidebar</a></li>
                                                    <li><a href="products-left-sidebar.html" title="">Left Sidebar</a></li>
                                            </ul>
                                    </li>
                                    <li><a>Checkout</a>
                                            <ul class="drop-right">
                                                    <li><a href="checkout.html" title="">Right Sidebar</a></li>
                                                    <li><a href="checkout-left-sidebar.html" title="">Left Sidebar</a></li>
                                            </ul>
                                    </li>
                                    <li><a>Order Recieved</a>
                                            <ul class="drop-right">
                                                    <li><a href="order-recieved.html" title="">Right Sidebar</a></li>
                                                    <li><a href="order-recieved-left-sidebar.html" title="">Left Sidebar</a></li>
                                            </ul>
                                    </li>
                                    <li><a href="single-product.html"  title="">Product Single Page</a></li>
                            </ul> -->
                        </li>
                        <li><a>{{__('home.projects')}}</a>
                            <!-- <ul>
                                    <li><a href="portfolio-2-column.html" title="">2 Column Wide</a></li>
                                    <li><a href="portfolio-3-column.html" title="">3 Column Wide</a></li>
                                    <li><a href="portfolio-4-column.html" title="">4 Column Wide</a></li>
                            </ul> -->
                        </li>
                        <li><a>{{__('home.about_us')}}</a>
                            <!-- <ul>
                                    <li><a href="gallery-one-column.html" title="">1 Column Wide</a></li>
                                    <li><a href="gallery-two-column.html" title="">2 Column Wide</a></li>
                                    <li><a href="gallery-three-column.html" title="">3 Column Wide</a></li>
                                    <li><a href="gallery-four-column.html" title="">4 Column Wide</a></li>
                                    <li><a>Right Sidebar</a>
                                            <ul class="drop-right">
                                                    <li><a href="gallery-one-column-with-sidebar.html" title="">1 Column</a></li>
                                                    <li><a href="gallery-two-column-with-sidebar.html" title="">2 Column</a></li>
                                                    <li><a href="gallery-three-column-with-sidebar.html" title="">3 Column</a></li>
                                            </ul>
                                    </li>
                                    <li><a>Left Sidebar</a>
                                            <ul class="drop-right">
                                                    <li><a href="gallery-one-column-with-left-sidebar.html" title="">1 Column</a></li>
                                                    <li><a href="gallery-two-column-with-left-sidebar.html" title="">2 Column</a></li>
                                                    <li><a href="gallery-three-column-with-left-sidebar.html" title="">3 Column</a></li>
                                            </ul>
                                    </li>
                            </ul> -->
                            <!-- Drop Down -->
                        </li>
                        <li><a>{{__('home.contact')}} {{__('home.us')}}</a>
                            <!-- <ul>
                                    <li><a href="blog-without-sidebar.html" title="">Blog Wide</a></li>
                                    <li><a href="blog-with-sidebar.html" title="">Blog With Left Sidebar</a></li>
                                    <li><a href="blog-with-left-sidebar.html" title="">Blog With Right Sidebar</a></li>
                                    <li><a>Single Posts Right Sidebar</a>
                                            <ul class="drop-right">
                                                    <li><a href="single-post-image.html" title="">Single Post With Image</a></li>
                                                    <li><a href="single-post-video.html" title="">Single Post With Video</a></li>
                                                    <li><a href="single-post-slider.html" title="">Single Post With Slider</a></li>
                                                    <li><a href="single-post-project.html" title="">Project Single Post</a></li>
                                            </ul>
                                    </li>
                                    <li><a>Single Posts Left Sidebar</a>
                                            <ul class="drop-right">
                                                    <li><a href="single-post-image-left-sidebar.html" title="">Single Post With Image</a></li>
                                                    <li><a href="single-post-video-left-sidebar.html" title="">Single Post With Video</a></li>
                                                    <li><a href="single-post-slider-left-sidebar.html" title="">Single Post With Slider</a></li>
                                                    <li><a href="single-post-project-left-sidebar.html" title="">Project Single Post</a></li>
                                            </ul>
                                    </li>
                                    
                            </ul>Drop Down -->
                        </li>
                        <li><a href="elements.html">{{__('home.more')}}</a>
                            <ul class="drop-right">
                                <li><a href="elements.html#tabs-style">{{__('home.info_bank')}} </a></li>
                                <li><a href="{{URL('successful-stories')}}">{{__('home.sucess_stories')}}</a></li>
                                <li><a href="elements.html#blockquotes-style">{{__('home.compitiion')}} </a></li>
                                <li><a href="elements.html#highlightedtext">{{__('home.partners')}}</a></li>
                                <li><a href="elements.html#buttons-style">{{__('home.live_certificate')}}</a></li>
                            </ul>
                        </li>
                        <li>
                            <select id="language_select"  class="form-control" style="margin-left: 10px;border: 1px solid #4fc0aa;color: #3d3d3d;margin-top: 30px;">
                                <option value="">@lang('home.select_language') </option>
                                <option value="en">English</option>
                                <option value="ar">عربي</option>
                            </select>  
                        </li>
                    </ul> 

                </nav><!-- Menu -->

                <select class="ipadMenu">
                    <option value="">Menu</option>
                    <option value="index.html">Home Simple 1</option>
                    <option value="index2.html">Home Modern Style</option>
                    <option value="index3.html">Home Simple 2</option>
                    <option value="index4.html">Home Simple 3</option>
                    <option value="index7.html">Home Traditional Style</option>
                    <option value="index5.html">Home With Video</option>
                    <option value="index6.html">Home With Portfolio</option>
                    <option value="sticky-menu.html">Sticky Header</option>
                    <option value="menu-below-slider.html">Menu Below Slider</option>
                    <option value="middle-logo.html">With Logo In The Mid</option>
                    <option value="index5.html">Toggle Header</option>
                    <option value="about.html">About Wide</option>
                    <option value="contact.html">Contact Wide</option>
                    <option value="events-left-sidebar.html">Events With Left Sidebar</option>
                    <option value="events.html">Events With Right Sidebar</option>
                    <option value="single-event-page.html">Events Single Page</option>
                    <option value="successful-stories.html">Successful Stories Wide</option>
                    <option value="projects.html">On Going Project Wide</option>
                    <option value="404.html">404 Page Wide</option>
                    <option value="causes.html">Our Causes Wide</option>
                    <option value="single-causes.html">Our Causes Single</option>
                    <option value="services-single.html">Services Single Page</option>
                    <option value="search-found.html">Search Found With R.Sidebar</option>
                    <option value="search-found-left-sidebar.html">Search Found With L.Sidebar</option>
                    <option value="nothing-found.html">Nothing Found With R.Sidebar</option>
                    <option value="cart.html">My Cart With R.Sidebar</option>
                    <option value="cart-left-sidebar.html">My Cart With L.Sidebar</option>
                    <option value="products.html">Products With R.Sidebar</option>
                    <option value="products-left-sidebar.html">Products With L.Sidebar</option>
                    <option value="checkout.html">Checkout With R.Sidebar</option>
                    <option value="checkout-left-sidebar.html">Checkout With L.Sidebar</option>
                    <option value="order-recieved.html">Order Recieved With R.Sidebar</option>
                    <option value="order-recieved-left-sidebar.html">Order Recieved With L.Sidebar</option>
                    <option value="single-product.html">Products Single Page</option>
                    <option value="portfolio-2-column.html">Portfolio 2 Col</option>
                    <option value="portfolio-3-column.html">Portfolio 3 Col</option>
                    <option value="portfolio-4-column.html">Portfolio 4 Col</option>
                    <option value="gallery-one-column.html">Gallery 1 Col Wide</option>
                    <option value="gallery-two-column.html">Gallery 2 Col Wide</option>
                    <option value="gallery-three-column.html">Gallery 3 Col Wide</option>
                    <option value="gallery-four-column.html">Gallery 4 Col Wide</option>
                    <option value="gallery-one-column-with-sidebar.html">Gallery 1 Col With R.Sidebar</option>
                    <option value="gallery-one-column-with-left-sidebar.html">Gallery 1 Col With L.Sidebar</option>
                    <option value="gallery-two-column-with-sidebar.html">Gallery 2 Col With R.Sidebar</option>
                    <option value="gallery-two-column-with-left-sidebar.html">Gallery 2 Col With L.Sidebar</option>
                    <option value="gallery-three-column-with-sidebar.html">Gallery 3 Col With R.Sidebar</option>
                    <option value="gallery-three-column-with-left-sidebar.html">Gallery 3 Col With L.Sidebar</option>
                    <option value="blog-without-sidebar.html">Blog With Out Sidebar</option>
                    <option value="blog-with-left-sidebar.html">Blog With L.Sidebar</option>
                    <option value="blog-with-sidebar.html">Blog With R.Sidebar</option>
                    <option value="single-post-image-left-sidebar.html">Single Post With Image L.Sidebar</option>
                    <option value="single-post-image.html">Single Post With Image R.Sidebar</option>
                    <option value="single-post-video-left-sidebar.html">Single Post With Video L.Sidebar</option>
                    <option value="single-post-video.html">Single Post With Video R.Sidebar</option>
                    <option value="single-post-slider-left-sidebar.html">Single Post With Slider L.Sidebar</option>
                    <option value="single-post-slider.html">Single Post With Slider R.Sidebar</option>
                    <option value="project-single-post-left-sidebar.html">Project Single Post L.Sidebar</option>
                    <option value="project-single-post.html">Project Single Post R.Sidebar</option>
                    <option value="elements.html">Features</option>
                </select>
            </div>		
        </header><!--header-->
        @yield('content')


        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="footer-widget-title">
                            <h4>{{__('home.about_us')}}</h4>
                        </div>
                        <div class="row">

                            <ul class="slides">
                                <li>
                                    <div class="review" style="color:white;">
                                        {!! str_limit($about_us[0]->{'description_'.strtolower(app()->getLocale())},250) !!}                                    </div>						
                                    <!-- <div class="from">
                                        <h6>Thoms gomz britian</h6>
                                        <span>CE0, Australia</span>
                                    </div> -->
                                </li>
                                <!-- <li>
                                    <div class="review">
                                        <i>L</i><p><span>ifeline</span> is clean and modern responsive Template built with HTML5 & CSS3 coding and easy to use Shortcodes with load of features in it. We have implemented many features in this theme which makes your project easier and better than before and can be used for multipurpose. </p>
                                    </div>						
                                    <div class="from">
                                        <h6>Thoms gomz britian</h6>
                                        <span>CE0, Australia</span>
                                    </div>
                                </li> -->
                            </ul>
                        </div>
                    </div><!-- Reviews Widget -->
                    <div class="col-md-3">
                        <div class="footer-widget-title">
                            <h4><strong>{{__('home.sucess_stories')}}</h4>
                        </div>
                        <div class="flickr-images">
                            @foreach($sucess_stories as $sucess_story)
                            <a href="inner-successful-stories/{{$sucess_story->id}}" title=""><img src="{{URL($sucess_story->image)}}" alt="" /></a>
                            @endforeach
                                <!-- <a href="#" title=""><img src="http://placehold.it/77x75" alt="" /></a>
                                <a href="#" title=""><img src="http://placehold.it/77x75" alt="" /></a>
                                <a href="#" title=""><img src="http://placehold.it/77x75" alt="" /></a>
                                <a href="#" title=""><img src="http://placehold.it/77x75" alt="" /></a>
                                <a href="#" title=""><img src="http://placehold.it/77x75" alt="" /></a>
                                <a href="#" title=""><img src="http://placehold.it/77x75" alt="" /></a>
                                <a href="#" title=""><img src="http://placehold.it/77x75" alt="" /></a>
                                <a href="#" title=""><img src="http://placehold.it/77x75" alt="" /></a>
                                <a href="#" title=""><img src="http://placehold.it/77x75" alt="" /></a> -->
                        </div>
                    </div><!-- Flickr Widget -->
                    <div class="col-md-3">
                        <div class="footer-widget-title">
                            <h4><strong>{{__('home.contact')}}</strong> {{__('home.us')}}</h4>
                        </div>
                        <ul class="contact-details">
                            <li>
                                <span><i class="icon-home"></i>{{__('home.address')}}</span>
                                <p>{{$settings[0]->address}}</p>
                            </li>
                            <li>
                                <span><i class="icon-phone-sign"></i>{{__('home.phone_no')}}</span>
                                <p>{{$settings[0]->mobile}}</p>
                            </li>
                            <!-- <li> -->
                                    <!-- <span><i class="icon-envelope-alt"></i>EMAIL ID</span> -->
                                    <!-- <p>#8901 Marmora Road Chi Minh City, Vietnam</p> -->
                            <!-- </li> -->
                            <li>
                                <span><i class="icon-link"></i>{{__('home.email_id')}}</span>
                                <p>{{$settings[0]->email}}</p>
                            </li>
                        </ul>
                    </div><!-- Contact Us Widget -->
                    <div class="col-md-3">
                        <div class="newsletter">
                            <h4>{{__('home.signup_newsletter')}}</h4>
                            <p id="sucess_msg"></p>
                            <input class="form-control" type="email" placeholder="Email" id="news_letter"/>
                        </div>
                        <ul class="social-bar">
                                <!-- <li><a href="#" title=""><img src="images/rss.jpg" alt="" /></a></li> -->
                            <li><a href="{{$social[0]->facebook}}" title=""><img src="{{URL('images/facebook.jpg')}}" alt="" /></a></li>
                            <li><a href="{{$social[0]->youtube}}" title=""><img src="{{URL('images/youtube.png')}}" alt=""  style="width: 35px; height: 35px;"/></a></li>
                            <li><a href="{{$social[0]->linkedin}}" title=""><img src="{{URL('images/linked-in.jpg')}}" alt="" /></a></li>
                            <li><a href="{{$social[0]->instgram}}" title=""><img src="{{URL('images/ins.png')}}" alt="" style="width: 35px; height: 35px;"  /></a></li>
                        </ul>
                        <div class="newsletter-btn">
                            <input type="button" value="{{__('home.submit')}}" id="news_letter_btn"/>
                        </div>
                    </div>	<!-- News Letter SignUp -->		
                </div>
            </div>
        </footer><!-- Footer -->


        <div class="footer-bottom">
            <div class="container">
                <p>Copyright © 2013 Global News. <span>All rights reserved.</span> </p>
                <ul>
                    <li><a href="index.html" title="">{{__('home.home')}}</a></li>
                    <li><a href="about.html" title="">{{__('home.blog')}}</a></li>
                    <li><a href="elements.html" title="">{{__('home.projects')}}</a></li>
                    <li><a href="blog-with-sidebar.html" title="">{{__('home.about_us')}}</a></li>
                    <li><a href="events.html" title="">{{__('home.contact')}} {{__('home.us')}}</a></li>
                    <!-- <li><a href="contact.html" title="">CONTACT</a></li> -->
                </ul>

            </div>
        </div><!-- Bottom Footer Strip -->
        <script type="text/javascript">

            $("#language_select").change(function () {
                language = $(this).val();
                $.ajax({
                    type: "GET",
                    // url: "{{ URL('changelanguage') }}",
                    url: "/changelanguage",
                    data: {
                        "lang": language,
                    },
                    success: function (msg) {
                        location.reload();
                    },
                    error: function (msg) {
                        console.log(msg);
                    }
                });
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function () {

                $('#category_id').on('change', function (e) {

                    var cat_id = jQuery(this).val();
                    if (cat_id) {


                        $.ajax({

                            url: "/subcat/" + cat_id,
                            type: "get",
                            data: {
                                // "category_id": cat_id,
                                //"_token": "{{ csrf_token() }}",
                            },

                            success: function (data) {
                                $('#sub_category_id').empty();
                                $.each(data.subcategories[0].subcategories, function (index, subcategory) {
                                    $('#sub_category_id').append('<option value="' + subcategory.id + '">' + subcategory.name_en + '</option>');
                                })

                            }
                        })
                    } else {
                        $('#sub_category_id').empty();
                        $('#sub_category_id').append('<option>Select Sub Category...</option>');
                    }
                });

            });
        </script>

        <script type="text/javascript">

            $("#cart-btn").click(function () {
                qty = $('#quantity').val();
                customer_id = $('#customer_id').val();
                product_id = $('#product_id').val();
                $.ajax({
                    type: "GET",
                    // url: "{{ URL('changelanguage') }}",
                    url: "/add_to_cart/" + product_id + '/' + customer_id + '/' + qty,
                    data: {
                        //"lang": language,
                    },
                    success: function (msg) {
                        $('#alert_cart').css('display','block');
                        console.log(msg);
                    },
                    error: function (msg) {
                        console.log(msg);
                    }
                });
            });
        </script>


        <script type="text/javascript">
            function addToCart(this) {
                // $("#product-cart-btn").click(function () {
                qty = this.data('qty');
                customer_id = this.val('customer-id');
                product_id = this.val('product-id');
                alert(qty);
                $.ajax({
                    type: "GET",
                    // url: "{{ URL('changelanguage') }}",
                    url: "/add_to_cart/" + product_id + '/' + customer_id + '/' + qty,
                    data: {
                        //"lang": language,
                    },
                    success: function (msg) {
                        $('#alert_cart').css('display','block');
                        console.log(msg);
                    },
                    error: function (msg) {
                        console.log(msg);
                    }
                });
                // });
            }

        </script>



        <script type="text/javascript">

            $("#news_letter_btn").click(function () {
                email = $('#news_letter').val();
                $.ajax({
                    type: "POST",
                    // url: "{{ URL('changelanguage') }}",
                    url: "/admin/newsletters",
                    data: {
                        "email": email,
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function (msg) {
                        console.log(msg);
                        //  $("#sucess_msg").html({{__('home.contact_us_by_message')}});
                    },
                    error: function (msg) {
                        console.log(msg);
                    }
                });
            });
        </script>

</body>
</html>
