<!DOCTYPE html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Fldo</title>
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
        button, html input[type="button"], input[type="reset"], input[type="submit"] {
            padding:1rem !important;
            color:black !important;
        }
    </style>
    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="css/ie.css" />
    <script type="text/javascript" language="javascript" src="js/html5shiv.js"></script>
    <![endif]-->


    <!-- Scripts -->
    {!! Html::script('js/jquery.1.9.1.js') !!}
    {!! Html::script('js/bootstrap.js') !!}
    {!! Html::script('js/html5lightbox.js') !!}
    {!! Html::script('js/jquery.carouFredSel-6.2.1-packed.js') !!}
    {!! Html::script('js/jquery.jigowatt.js') !!}<!-- AJAX Form Submit -->
    {!! Html::script('js/script.js') !!}
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
    <script>
$(window).load(function(){
  $('.our-causes').flexslider({
	animation: "slide",
	animationLoop: false,
	controlNav: true,	
    maxItems: 1,
	pausePlay: false,
	mousewheel:true,
	start: function(slider){
	  $('body').removeClass('loading');
	}
	});
	
	
  $('.slideshow').flexslider({
	animation: "fade",
	animationLoop: false,
	slideShow:false,
	controlNav: true,	
    maxItems: 1,
	pausePlay: false,
	mousewheel:true,
	start: function(slider){
	  $('body').removeClass('loading');
	}
	});
	
  $('.footer_carousel').flexslider({
	animation: "slide",
	animationLoop: false,
	slideShow:false,
	controlNav: true,	
    maxItems: 1,
	pausePlay: false,
	mousewheel:true,
	start: function(slider){
	  $('body').removeClass('loading');
	}
	});
	
});
  
</script>

	
<!-- Scripts For Layer Slider  -->
{!! Html::script('layerslider/JQuery/jquery-easing-1.3.js') !!}
{!! Html::script('layerslider/JQuery/jquery-transit-modified.js') !!}
{!! Html::script('layerslider/js/layerslider.transitions.js') !!}
{!! Html::script('layerslider/js/layerslider.kreaturamedia.jquery.js') !!}

<script type="text/javascript">
	$(document).ready(function(){
		$('#layerslider').layerSlider({
			skinsPath : 'layerslider/skins/',
			skin : 'defaultskin',
			responsive: true,
			responsiveUnder: 1200,			
			pauseOnHover: false,
			showCircleTimer: false,
			navStartStop:false,
			navButtons:false,
		}); // LAYER SLIDER
		
$(function() {
	


	$('#carousel').carouFredSel({
		responsive: true,
		circular: false,
		auto: false,
		items: {
			visible: 1,
			width: 20,
		},
		scroll: {
			fx: 'directscroll'
		}
	});
	$('#thumbs').carouFredSel({
		responsive: true,
		circular: false,
		infinite: false,
		auto: false,
		prev: '#prev',
		next: '#next',
		items: {
			visible: {
				min: 1,
				max: 6
			},
			width: 200,
			height: '80%'
		}
	});
	$('#thumbs a').click(function() {
		$('#carousel').trigger('slideTo', '#' + this.href.split('#').pop() );
		$('#thumbs a').removeClass('selected');
		$(this).addClass('selected');
		return false;
	});
	
});
	
			
});		

</script>
</head>
<body>
    <div class="theme-layout">
        <div id="top-bar">
            <div class="container">
                <ul>
                @if (Auth::guard('customer')->guest())
                        <li><a href="{{ url('/customer/login') }}" style="color: #9d9b9b;">{{__('home.login')}}</a></li>
                        <li><a href="{{ url('/customer/register') }}" style="color: #9d9b9b;">{{__('home.register')}}</a></li>
                    @else
                        <li class="">
                            <a href="#" class="" style="color: #9d9b9b;" >
                                {{ Auth::guard('customer')->user()->name }} 
                            </a>
    </li>
    <li>
                                    <a href="{{ url('/customer/logout') }}" style="color: #9d9b9b;" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        {{__('home.logout')}}
                                    </a>

                                    <form id="logout-form" action="{{ url('/customer/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                           
                    @endif
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

               
            </div>
        </div><!--top bar-->


        <header>
            <div class="" style="width:100%;padding:0 5rem">
                    <div class="row">
                    <div class="logo col-2">
                    <a href="{{URL('/')}}" title=""><img src="{{URL('images/logo.png')}}" alt="Logo" /><h1><i>L</i>ifeline</h1></a>
                </div><!-- Logo -->
                <div class="search-box col-2" style="margin-top:3.1rem;">
                        <!-- <input class="submit-button" type="submit" value=""  > -->
                        <input class="search-input" style="border-bottom-style: solid;border-color: #4fc0aa;padding:1.5rem;width: 150px;" type="text" id="search_products" name="word" onblur="if (this.value == '')
                                this.value = this.defaultValue;" onfocus="if (this.value == this.defaultValue)
                                            this.value = '';"  value="{{__('home.search')}}">
                        <div id="product_list" style="width:200px;max-height:200px;overflow-y:overlay;position:absolute;margin-top:30px"></div>
                </div>
                <nav class="menu col-5">
                    <ul id="menu-navigation">
                        <li class="active"><a href="{{URL('/')}}">{{__('home.home')}}</a>

                        </li>
                        <li><a href="{{URL('our-blogs')}}">{{__('home.blog')}}</a>
    				
                        </li>
                        <li><a  href="{{URL('our-products')}}">{{__('home.shop')}}</a>
       
                        </li>
                        <li><a href="{{URL('our-projects')}}">{{__('home.projects')}}</a>
      
                        </li>
                        <li><a href="{{URL('about')}}">{{__('home.about_us')}}</a>
        
                        </li>
                        <li><a href="{{URL('contact')}}">{{__('home.contact')}} {{__('home.us')}}</a>
 
                        </li>
                        <li><a >{{__('home.more')}}</a>
                            <ul class="drop-right">
                                <li><a href="{{URL('our-infoBank')}}">{{__('home.info_bank')}} </a></li>
                                <li><a href="{{URL('successful-stories')}}">{{__('home.sucess_stories')}}</a></li>
                                <li><a href="{{URL('our-competitions')}}">{{__('home.compitiion')}} </a></li>
                                <!-- <li><a href="elements.html#highlightedtext">{{__('home.partners')}}</a></li> -->
                                <li><a href="{{URL('our-certifcate')}}">{{__('home.live_certificate')}}</a></li>
                            </ul>
                        </li>
                        @if (Auth::guard('customer')->user()) 
                        <li><a href="{{URL('profile')}}">{{__('home.profile')}}</a>
                        @endif
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
                </select>
                    </div>
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
                            @foreach($our_sucess_stories as $sucess_story)
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
                            
                            <input class="form-control" type="email" placeholder="Email" id="news_letter"/>
                            <p id="sucess_msg"></p>
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
                    <li><a href="{{URL('/')}}" title="">{{__('home.home')}}</a></li>
                    <li><a href="{{URL('our-blogs')}}" title="">{{__('home.blog')}}</a></li>
                    <li><a href="{{URL('our-projects')}}" title="">{{__('home.projects')}}</a></li>
                    <li><a href="{{URL('about')}}" title="">{{__('home.about_us')}}</a></li>
                    <li><a href="{{URL('contact')}}" title="">{{__('home.contact')}} {{__('home.us')}}</a></li>
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
                    
                     @if(Session::get('locale')=='en')
                     $("#sucess_msg").html('Success Subscribtion ');
                     @else
                     $("#sucess_msg").html('تم الاشتراك');
                     @endif
                    },
                    error: function (msg) {
                        console.log(msg);
                    }
                });
            });
        </script>





<script type="text/javascript">

$("#favorite-btn").click(function () {
    customer_id = $('#customer_id').val();
    product_id = $('#product_id').val();
    $.ajax({
        type: "GET",
        // url: "{{ URL('changelanguage') }}",
        url: "/add_to_wishlist/" + product_id + '/' + customer_id ,
        data: {
            //"lang": language,
        },
        success: function (msg) {
            $('#alert_wishlist').css('display','block');
            $("#favorite-btn").addClass('disabled');
            $("#favorite-btn").prop('disabled',true);
            console.log(msg);
        },
        error: function (msg) {
            console.log(msg);
        }
    });
});
</script>
<script type="text/javascript">
            // jQuery wait till the page is fullt loaded
            $(document).ready(function () {
                // keyup function looks at the keys typed on the search box
                $('#sucess_story_search').on('keyup',function() {
                    // the text typed in the input field is assigned to a variable 
                    var query = $(this).val();
                    // call to an ajax function
                    $.ajax({
                        // assign a controller function to perform search action - route name is search
                        url:"/search-successful-stories",
                        // since we are getting data methos is assigned as GET
                        type:"GET",
                        // data are sent the server
                        data:{'word':query},
                        // if search is succcessfully done, this callback function is called
                        success:function (data) {
                            // print the search results in the div called country_list(id)
                            $('#country_list').html(data);
                        }
                    })
                    // end of ajax call
                });
            });
</script>


<script type="text/javascript">
            // jQuery wait till the page is fullt loaded
            $(document).ready(function () {
                // keyup function looks at the keys typed on the search box
                $('#project_search').on('keyup',function() {
                    // the text typed in the input field is assigned to a variable 
                    var query = $(this).val();
                    // call to an ajax function
                    $.ajax({
                        // assign a controller function to perform search action - route name is search
                        url:"/search-projects",
                        // since we are getting data methos is assigned as GET
                        type:"GET",
                        // data are sent the server
                        data:{'word':query},
                        // if search is succcessfully done, this callback function is called
                        success:function (data) {
                            // print the search results in the div called country_list(id)
                            $('#country_list').html(data);
                        }
                    })
                    // end of ajax call
                });
            });
</script>


<script type="text/javascript">
            // jQuery wait till the page is fullt loaded
            $(document).ready(function () {
                // keyup function looks at the keys typed on the search box
                $('#info_bank_search').on('keyup',function() {
                    // the text typed in the input field is assigned to a variable 
                    var query = $(this).val();
                    // call to an ajax function
                    $.ajax({
                        // assign a controller function to perform search action - route name is search
                        url:"/search-infoBank",
                        // since we are getting data methos is assigned as GET
                        type:"GET",
                        // data are sent the server
                        data:{'word':query},
                        // if search is succcessfully done, this callback function is called
                        success:function (data) {
                            // print the search results in the div called country_list(id)
                            $('#country_list').html(data);
                        }
                    })
                    // end of ajax call
                });
            });
</script>

<script type="text/javascript">
            // jQuery wait till the page is fullt loaded
            $(document).ready(function () {
                // keyup function looks at the keys typed on the search box
                $('#competition_search').on('keyup',function() {
                    // the text typed in the input field is assigned to a variable 
                    var query = $(this).val();
                    // call to an ajax function
                    $.ajax({
                        // assign a controller function to perform search action - route name is search
                        url:"/search-competitions",
                        // since we are getting data methos is assigned as GET
                        type:"GET",
                        // data are sent the server
                        data:{'word':query},
                        // if search is succcessfully done, this callback function is called
                        success:function (data) {
                            // print the search results in the div called country_list(id)
                            $('#country_list').html(data);
                        }
                    })
                    // end of ajax call
                });
            });
</script>


<script type="text/javascript">
            // jQuery wait till the page is fullt loaded
            $(document).ready(function () {
                // keyup function looks at the keys typed on the search box
                $('#certificate_search').on('keyup',function() {
                    // the text typed in the input field is assigned to a variable 
                    var query = $(this).val();
                    // call to an ajax function
                    $.ajax({
                        // assign a controller function to perform search action - route name is search
                        url:"/search-certifcate",
                        // since we are getting data methos is assigned as GET
                        type:"GET",
                        // data are sent the server
                        data:{'word':query},
                        // if search is succcessfully done, this callback function is called
                        success:function (data) {
                            // print the search results in the div called country_list(id)
                            $('#country_list').html(data);
                        }
                    })
                    // end of ajax call
                });
            });
</script>


<script type="text/javascript">
            // jQuery wait till the page is fullt loaded
            $(document).ready(function () {
                // keyup function looks at the keys typed on the search box
                $('#search_products').on('keyup',function() {
                    // the text typed in the input field is assigned to a variable 
                    var query = $(this).val();
                    // call to an ajax function
                    $.ajax({
                        // assign a controller function to perform search action - route name is search
                        url:"/search-product",
                        // since we are getting data methos is assigned as GET
                        type:"GET",
                        // data are sent the server
                        data:{'word':query},
                        // if search is succcessfully done, this callback function is called
                        success:function (data) {
                            // print the search results in the div called country_list(id)
                            $('#product_list').html(data);
                        }
                    })
                    // end of ajax call
                });
            });
</script>


<script type="text/javascript">
            // jQuery wait till the page is fullt loaded
            $(document).ready(function () {
                // keyup function looks at the keys typed on the search box
                $('#blog_search').on('keyup',function() {
                    // the text typed in the input field is assigned to a variable 
                    var query = $(this).val();
                    // call to an ajax function
                    $.ajax({
                        // assign a controller function to perform search action - route name is search
                        url:"/search-blogs",
                        // since we are getting data methos is assigned as GET
                        type:"GET",
                        // data are sent the server
                        data:{'word':query},
                        // if search is succcessfully done, this callback function is called
                        success:function (data) {
                            // print the search results in the div called country_list(id)
                            $('#country_list').html(data);
                        }
                    })
                    // end of ajax call
                });
            });
</script>

</body>
</html>
