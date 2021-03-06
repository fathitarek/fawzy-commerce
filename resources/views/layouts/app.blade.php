<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Fldo Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Theme style -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/AdminLTE.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/skins/_all-skins.min.css">

        <!-- iCheck -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css">

        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">

        @yield('css')
    </head>

    <body class="skin-blue sidebar-mini">
        @if (!Auth::guest())
        <div class="wrapper">
            <!-- Main Header -->
            <header class="main-header">

                <!-- Logo -->
                <a href="#" class="logo">
                    <b>Fldo</b>
                </a>

                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- User Account Menu -->
                            <li class="dropdown user user-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <!-- The user image in the navbar-->
                                    <img src="{{URL('images/ava.png')}}"
                                         class="user-image" alt="User Image"/>
                                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                    <span class="hidden-xs">{{ Auth::user()->name }}</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- The user image in the menu -->
                                    <li class="user-header">
                                        <img src="{{URL('images/ava.png')}}"
                                             class="img-circle" alt="User Image"/>
                                        <p>
                                            {{ Auth::user()->name }}
                                            <small>Member since {{ Auth::user()->created_at->format('M. Y') }}</small>
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <!-- <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div> -->
                                        <div class="pull-right">
                                            <a href="{{ url('/logout') }}" class="btn btn-default btn-flat"
                                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                Sign out
                                            </a>
                                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <!-- Left side column. contains the logo and sidebar -->
            @include('layouts.sidebar')
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @yield('content')
            </div>

            <!-- Main Footer -->
            <footer class="main-footer" style="max-height: 100px;text-align: center">
                <strong>Copyright © 2020 <a href="#">Company</a>.</strong> All rights reserved.
            </footer>

        </div>
        @else
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <a href="../front/master/app.blade.php"></a>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Fldo
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('/home') }}">Home</a></li>
                    </ul>
                    <a href="../front/master/app.blade.php"></a>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        @endif

        <!-- jQuery 3.1.1 -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
        <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>

        <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> 
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/NicEdit/0.93/nicEdit.js"></script>
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=5629tzxi411hiplfm7zo34vtck8tvt6c6brb5mw55fewgjxn"></script>
        <!--tags -->
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
        <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script> -->
        <script src="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
        <script>
                                                   function myFunction() {
                                                       document.getElementById("demo").innerHTML = "Hello World";
                                                   }
        </script>

        <style>
            .buttons-csv{display:none}
            .buttons-pdf{display:none;}
        </style>
        <script>
            $(function () {
                tinymce.init({
                    mode: "textareas",
                    plugins: ["advlist autolink lists link charmap print preview hr anchor pagebreak",
                        "searchreplace wordcount visualblocks visualchars code fullscreen",
                        "insertdatetime media nonbreaking save table contextmenu",
                        "emoticons template paste textcolor colorpicker textpattern"
                    ],
                    menu: {},
                    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | table | link",
                    default_link_target: "_blank",
                });
            });
        </script>

        <script type="text/javascript">

            $(document).ready(function () {
                $("#more_img").click(function () {
                    $("#div_img_more").append("<div><input type='file' name='images[]'  style='padding-bottom: 10px;padding-top: 6px;' class = 'form-control add_more_image_input'> <span onclick='removeInput(this)' style='float: right;top: 10px;right: -5px;' class='fa fa-times close_image'></span></div>");

                });
            });
        </script>

        <script>
            function removeInput(el) {
                $(el).parent().hide();
            }
        </script>

        <script type="text/javascript">
            function removeImgItem(element) {

                console.log(element.id);

                $.ajax({
                    type: "GET",
                    url: "/remove_image_item/" + element.id,
                    success: function (msg) {
                        $("#div_" + element.id).hide();
                        console.log(msg);
                    },
                    error: function (msg) {
                        console.log(msg);
                    }
                });
            }

        </script>

        <script type="text/javascript">
            function removeImgProject(element) {

                console.log(element.id);

                $.ajax({
                    type: "GET",
                    url: "/remove_image_project/" + element.id,
                    success: function (msg) {
                        $("#div_" + element.id).hide();
                        console.log(msg);
                    },
                    error: function (msg) {
                        console.log(msg);
                    }
                });
            }

        </script>
        <script>
            $(document).ready(function () {
                $(".close_image").click(function () {
                    $(".add_more_image_input").hide();
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
        @stack('scripts')
    </body>
</html>