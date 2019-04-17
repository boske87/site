<!DOCTYPE html>
<!-- saved from url=(0060)http://www.venmond.com/demo/vendroid/pages-user-profile.php# -->
<html style="" class=" js no-touch no-mobile no-phone no-tablet mobilegradea"><!--<![endif]--><!-- Specific Page Data --><!-- End of Data --><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>User Profile Pages HTML Template - Responsive Multipurpose Admin Templates | Vendroid</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="Venmond">
    <meta name="csrf-token" content="{!! csrf_token() !!}" />
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://www.venmond.com/demo/vendroid/img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://www.venmond.com/demo/vendroid/img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://www.venmond.com/demo/vendroid/img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="http://www.venmond.com/demo/vendroid/img/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="http://www.venmond.com/demo/vendroid/img/ico/favicon.png">


    <!-- CSS -->

    <!-- Bootstrap & FontAwesome & Entypo CSS -->
    <link href="{{ asset('assets/front/admin/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/front/admin/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <!--[if IE 7]><link type="text/css" rel="stylesheet" href="{{ asset('assets/front/css/font-awesome-ie7.min.css')}}"><![endif]-->
    <link href="{{ asset('assets/front/admin/font-entypo.css')}}" rel="stylesheet" type="text/css">

    <!-- Fonts CSS -->
    <link href="{{ asset('assets/front/admin/fonts.css')}}" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="{{ asset('assets/front/admin/jquery-ui.custom.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/front/admin/prettyPhoto.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/front/admin/isotope.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/front/admin/jquery.pnotify.css')}}" media="screen" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/front/admin/prettify.css')}}" rel="stylesheet" type="text/css">


    <link href="{{ asset('assets/front/admin/jquery.mCustomScrollbar.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/front/admin/jquery.tagsinput.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/front/admin/bootstrap-switch.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/front/admin/daterangepicker-bs3.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/front/admin/bootstrap-timepicker.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/front/admin/colorpicker.css')}}" rel="stylesheet" type="text/css">


    <!-- Theme CSS -->
    <link href="{{ asset('assets/front/admin/theme.min.css')}}" rel="stylesheet" type="text/css">
    <!--[if IE]> <link href="css/ie.css" rel="stylesheet" > <![endif]-->
    <link href="{{ asset('assets/front/admin/chrome.css')}}" rel="stylesheet" type="text/chrome"> <!-- chrome only css -->
    <!-- Responsive CSS -->
    <link href="{{ asset('assets/front/admin/theme-responsive.min.css')}}" rel="stylesheet" type="text/css">

    <style>
        .square {
            float:left;
            position: relative;
            width: 90%;
            padding-bottom : 90%; /* = width for a 1:1 aspect ratio */
            margin:1.66%;
            background-position:center center;
            background-repeat:no-repeat;
            background-size:cover; /* you change this to "contain" if you don't want the images to be cropped */
        }

        .square2 {
            float:left;
            position: relative;
            width: 30%;
            margin:1.66%;
            background-position:center center;
            background-repeat:no-repeat;
            background-size:cover; /* you change this to "contain" if you don't want the images to be cropped */
        }

        .img_1-1{background-image:url('https://farm4.staticflickr.com/3766/12953056854_b8cdf14f21.jpg');}
        .img_1-2{background-image:url('https://farm7.staticflickr.com/6092/6227418584_d5883b0948.jpg');}
        .img_1-3{background-image:url('https://farm8.staticflickr.com/7187/6895047173_d4b1a0d798.jpg');}
        .img_2-1{background-image:url('https://farm8.staticflickr.com/7163/6822904141_50277565c3.jpg');}
        .img_2-2{background-image:url('https://farm7.staticflickr.com/6139/5986939269_10721b8017.jpg');}
        .img_2-3{background-image:url('https://farm4.staticflickr.com/3165/5733278274_2626612c70.jpg');}
    </style>


    <!-- for specific page in style css -->

    <!-- for specific page responsive in style css -->


    <link href="{{ asset('assets/front/admin/custom.css')}}" rel="stylesheet" type="text/css">

    <!-- Head SCRIPTS -->
    <script type="text/javascript" async="" src="{{ asset('assets/front/admin/ga.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/front/admin/modernizr.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/front/admin/mobile-detect.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/front/admin/mobile-detect-modernizr.js')}}"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="js/html5shiv.js"></script>
    <script type="text/javascript" src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body id="pages" class="full-layout  nav-right-start-hide  nav-top-fixed      responsive    clearfix breakpoint-975 nav-right-hide" data-active="pages " data-smooth-scrolling="1">
<div class="vd_body">
    <!-- Header Start -->
    <header class="header-1" id="header">
        <div class="vd_top-menu-wrapper">
            <div class="container ">
                <div class="vd_top-nav vd_nav-width  ">
                    <div class="vd_panel-header">
                        <div class="logo">
                            <a href="">Izvedi me</a>
                        </div>
                        <!-- logo -->
                        <div class="vd_panel-menu  hidden-sm hidden-xs" data-intro="&lt;strong&gt;Minimize Left Navigation&lt;/strong&gt;&lt;br/&gt;Toggle navigation size to medium or small size. You can set both button or one button only. See full option at documentation." data-step="1">
            		                	<span class="nav-medium-button menu" data-toggle="tooltip" data-placement="bottom" data-original-title="Medium Nav Toggle" data-action="nav-left-medium">
	                    <i class="fa fa-bars"></i>
                    </span>

                            <span class="nav-small-button menu" data-toggle="tooltip" data-placement="bottom" data-original-title="Small Nav Toggle" data-action="nav-left-small">
	                    <i class="fa fa-ellipsis-v"></i>
                    </span>

                        </div>
                        <div class="vd_panel-menu left-pos visible-sm visible-xs">

                        <span class="menu" data-action="toggle-navbar-left">
                            <i class="fa fa-ellipsis-v"></i>
                        </span>


                        </div>
                        <div class="vd_panel-menu visible-sm visible-xs">
                	<span class="menu visible-xs" data-action="submenu">
	                    <i class="fa fa-bars"></i>
                    </span>

                            <span class="menu visible-sm visible-xs" data-action="toggle-navbar-right">
                            <i class="fa fa-comments"></i>
                        </span>

                        </div>
                        <!-- vd_panel-menu -->
                    </div>
                    <!-- vd_panel-header -->

                </div>
                <div class="vd_container">
                    <div class="row">
                        <div class="col-sm-5 col-xs-12">

                        </div>
                        <div class="col-sm-7 col-xs-12">
                            <div class="vd_mega-menu-wrapper">
                                <div class="vd_mega-menu pull-right">

                                    <!-- Head menu search form ends -->
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- container -->
        </div>
        <!-- vd_primary-menu-wrapper -->

    </header>
    <!-- Header Ends -->
    <div class="content">
        <div class="container">
            <div class="vd_navbar vd_nav-width vd_navbar-tabs-menu vd_navbar-left  ">

                <div class="navbar-menu clearfix">
                    <div class="vd_panel-menu hidden-xs">
            <span data-original-title="Expand All" data-toggle="tooltip" data-placement="bottom" data-action="expand-all" class="menu" data-intro="&lt;strong&gt;Expand Button&lt;/strong&gt;&lt;br/&gt;To expand all menu on left navigation menu." data-step="4">
                <i class="fa fa-sort-amount-asc"></i>
            </span>
                    </div>
                    <h3 class="menu-title hide-nav-medium hide-nav-small">UI Features</h3>
                    <div class="vd_menu">
                        <ul>
                            <li>
                                <a href="{{route('/men.offers')}}" >
                                    <span class="menu-icon"><i class="fa fa-dashboard"></i></span>
                                    <span class="menu-text">Poslate ponude</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('/men-moj-profil')}}" >
                                    <span class="menu-icon"><i class="fa fa-dashboard"></i></span>
                                    <span class="menu-text">Moj profil</span>
                                    <span class="menu-text"></span>
                                </a>
                            </li>
                        </ul>
                        <!-- Head menu search form ends -->         </div>
                </div>
                <div class="navbar-spacing clearfix">
                </div>
                <div class="vd_menu vd_navbar-bottom-widget">
                    <ul>
                        <li>
                            <a href="">
                                <span class="menu-icon"><i class="fa fa-sign-out"></i></span>
                                <span class="menu-text">Logout</span>
                            </a>

                        </li>
                    </ul>
                </div>
            </div>    <div class="vd_navbar vd_nav-width vd_navbar-chat vd_bg-black-80 vd_navbar-right   ">
                <div class="navbar-tabs-menu clearfix">
			<span class="expand-menu" data-action="expand-navbar-tabs-menu">
            	<span class="menu-icon menu-icon-left">
            		<i class="fa fa-ellipsis-h"></i>
                    <span class="badge vd_bg-red">
                        20
                    </span>
                </span>
            	<span class="menu-icon menu-icon-right">
            		<i class="fa fa-ellipsis-h"></i>
                    <span class="badge vd_bg-red">
                        20
                    </span>
                </span>
            </span>
                    <div class="menu-container">
                        <div class="navbar-search-wrapper">
                            <div class="navbar-search vd_bg-black-30">


                                <div class="pull-right search-config">
                                    <a data-toggle="dropdown" href="javascript:void(0);" class="dropdown-toggle"><span class="prepend-icon vd_grey"><i class="fa fa-cog"></i></span></a>
                                    <ul role="menu" class="dropdown-menu">
                                        <li><a href="http://www.venmond.com/demo/vendroid/pages-user-profile.php#">Action</a></li>
                                        <li><a href="http://www.venmond.com/demo/vendroid/pages-user-profile.php#">Another action</a></li>
                                        <li><a href="http://www.venmond.com/demo/vendroid/pages-user-profile.php#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="http://www.venmond.com/demo/vendroid/pages-user-profile.php#">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="navbar-menu clearfix">

                </div>
                <div class="navbar-spacing clearfix">
                </div>
            </div>
            <!-- Middle Content Start -->

            <div class="vd_content-wrapper" style="min-height: 1059px;">
                <div class="vd_container" style="min-height: 1059px;">
                    <div class="vd_content clearfix">

                        <div class="vd_title-section clearfix">
                            <div class="vd_panel-header no-subtitle">
                                <h1>Detaljna pretraga</h1>
                            </div>
                        </div>
                        <div class="row" id="bootstrap-time">
                                <div class="col-md-12">
                                <div class="panel widget">
                                    <div class="panel-heading vd_bg-grey">
                                        <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-arrows-v" id="form-pretraga"></i>  </span> Pretraga </h3>
                                    </div>
                                    <div class="panel-body" id="pretraga" {{isset($input['location']) && !empty($input['location']) ? 'style=display:none;' : '' }}>
                                        <form class="form-horizontal" method="GET" action="{{route('/lista-devojaka')}}" role="form">
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Lokacija</label>
                                                <div class="col-sm-3 controls">
                                                    <select name="location">

                                                        <option value="">Izaberite lokaciju</option>
                                                        @foreach($city as $one)
                                                            <option {{isset($input['location']) && !empty($input['location']) && $input['location'] == $one ? 'selected' : ''}} value="{{$one}}">
                                                                {{$one}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Godine</label>
                                                <div class="col-sm-2 controls">
                                                    <input type="number" value="{{isset($input['fromYear']) && !empty($input['fromYear']) ? $input['fromYear'] : ''}}"  name="fromYear" id="datepicker-from" />
                                                </div>
                                                <div class="col-sm-1 controls text-center"> do </div>
                                                <div class="col-sm-2 controls">
                                                    <input type="number" value="{{isset($input['toYear']) && !empty($input['toYear']) ? $input['toYear'] : ''}}"  name="toYear" id="datepicker-to" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Visina</label>
                                                <div class="col-sm-2 controls " >
                                                    <input type="number" value="{{isset($input['fromHeight']) && !empty($input['fromHeight']) ? $input['fromHeight'] : ''}}" name="fromHeight" id="datepicker-from" />
                                                </div>
                                                <div class="col-sm-1 controls text-center"> to </div>
                                                <div class="col-sm-2 controls">
                                                    <input type="number" value="{{isset($input['toHeight']) && !empty($input['toHeight']) ? $input['toHeight'] : ''}}"
                                                           name="toHeight" id="datepicker-to" />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Tezina</label>
                                                <div class="col-sm-2 controls">
                                                    <input type="number" value="{{isset($input['fromWeight']) && !empty($input['fromWeight']) ? $input['fromWeight'] : ''}}" name="fromWeight" id="datepicker-from" />
                                                </div>
                                                <div class="col-sm-1 controls text-center"> to </div>
                                                <div class="col-sm-2 controls">
                                                    <input type="number" value="{{isset($input['toWeight']) && !empty($input['toWeight']) ? $input['toWeight'] : ''}}" name="toWeight" id="datepicker-to" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Broj zvezdica</label>
                                                <div class="col-sm-2 controls">
                                                    <input type="number" value="{{isset($input['stars']) && !empty($input['stars']) ? $input['stars'] : ''}}" name="stars" id="datepicker-from" />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Jezik</label>
                                                <div class="col-sm-3 controls">
                                                    <select name="lang">
                                                        <option>Izaberite jezik</option>
                                                        @foreach($langNew as $one)
                                                            <option>{{$one}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group form-actions">
                                                <div class="col-sm-4"> </div>
                                                <div class="col-sm-7">
                                                    <button class="btn vd_btn vd_bg-green vd_white" type="submit"><i class="icon-ok"></i> Pretraga</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                                <!-- Panel Widget -->
                            </div>
                            <!-- col-md-12 -->
                        </div>
                        <!-- row -->

                        @if(!empty($input))
                        <div class="vd_content-section clearfix">
                                <!-- row -->
                                <div class="row">
                                    <div class="col-md-11">
                                        <div class="panel widget light-widget panel-bd-top">
                                            <div class="panel-heading no-title"> </div>
                                            <div class="panel-body" id="girlsDiv">

                                                @foreach($girls as $oneG)
                                                    <a  href="{{route('/profil',$oneG->id)}}">
                                                    <div class="square2">
                                                        <label style="display: block; text-align: center;">{{$oneG->name}}</label>
                                                        <label style="display: block; text-align: center;">{{$oneG->city}}</label>
                                                    </a>
                                                        <label style="display: block; text-align: center;"><input type="checkbox" id="girlCh" name="girlChec" value="{{$oneG->id}}"></label>
                                                    <a  href="{{route('/profil',$oneG->id)}}">
                                                    <div style="background-image:url('{{ Image::load('gallery/devojka'.$oneG->id.'/' . $oneG->images[0]->imageName, ['h' => 5]) }}'); " class="square img_1-1">

                                                    </div>
                                                    </a>
                                                    </div>

                                                @endforeach
                                                <div class="content-grid column-xs-3 column-sm-4 column-md-5 column-lg-6 height-xs-4" style="width: 100%">

                                                    {{--<ul class="list-wrapper">--}}
                                                        {{--@foreach($girls as $oneG)--}}
                                                        {{--<li style="">--}}
                                                            {{--<a  href="{{route('/profil',$oneG->id)}}">--}}
                                                                {{--<div class="menu-icon">--}}
                                                                    {{--<img class="img-rounded" style="height:auto; border-radius: 50% !important;"  src="{{ Image::load('gallery/devojka'.$oneG->id.'/' . $oneG->images[0]->imageName, ['h' => 5]) }}" alt="example image"></div>--}}
                                                            {{--</a>--}}
                                                            {{--<div class="menu-text">{{$oneG->fullName}}--}}
                                                                {{--<div class="menu-info">--}}
                                                                    {{--<div class="menu-date">{{$oneG->city}}</div>--}}
                                                                    {{--<div class="menu-action">--}}
                                                                            {{--<input type="checkbox" id="girlCh" name="girlChec" value="{{$oneG->id}}">--}}
                                                                          {{--</div>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</li>--}}
                                                            {{--@endforeach--}}

                                                    {{--</ul>--}}
                                                </div>

                                                <!-- content-grid -->
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <a href=""  id="salji" class="btn btn-default btn-rounded mb-4"  data-toggle="modal" data-target="#modalContactForm">Posalji ponudu</a>
                                        </div>
                                        <!-- Panel Widget -->

                                    </div>
                                    <!-- col-md-4 -->

                                    <!-- col-md-4 -->

                                </div>
                                <!--row -->

                            </div>
                            <!-- .vd_content-section -->

                        </div>
                    @endif

                        <!-- .vd_content -->
                </div>
                <!-- .vd_container -->
            </div>
            <!-- .vd_content-wrapper -->

            <!-- Middle Content End -->

        </div>
        <div class="modal fade" id="modalContactForm" tabindex="-1"   role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document" style="background-color: white">
                <div class="modal-content">
                        <h2> <span class="font-semibold"></span></h2>
                        <ul class="nav nav-pills">
                            <li class="active"><a id="0" href="#tab31" data-toggle="tab">Izlazak</a></li>
                            <li><a href="#tab32" id="1" data-toggle="tab">Putovanje</a></li>
                        </ul>

                        <br/>
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Ponuda</h4>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="tab-content  mgbt-xs-20">

                            <div class="tab-pane active" id="tab31">
                                <form id="submitOfferGetOut" class="" method="GET" action="" role="form">
                                    <input type="hidden" name="offerTypeForm" id="offerType" value="0">
                                <div class="modal-body mx-3" id="offerDiv">
                                    <div class="md-form mb-5">
                                        <label data-error="wrong" data-success="right" for="form34">Grad</label>
                                        <input type="text" id="form34" name="city" class="form-control validate" required>

                                    </div>

                                    <div class="md-form mb-5">
                                        <label data-error="wrong" data-success="right" for="form29">Mesto na koje se izlazi</label>
                                        <input type="text" id="form29" name="placeGoOut" class="form-control validate" required>

                                    </div>

                                    <div class="md-form mb-5">
                                        <label data-error="wrong" data-success="right" for="form29">Adresa mesta na koje se izlazi</label>
                                        <input type="text" id="form29" name="placeGoOutAddress" class="form-control validate" required>

                                    </div>

                                    <div class="md-form mb-5">
                                        <label data-error="wrong" data-success="right" for="form32">Broj devojaka</label>
                                        <input type="text" id="form32GirlNum" name="girlsNumber" class="form-control validate" required>

                                    </div>

                                    <div class="md-form mb-5">
                                        <label data-error="wrong"  data-success="right" for="form32">Vremenski period</label>
                                        <input type="number" name="timeRange" id="form32timeRange" class="form-control validate" required>

                                    </div>

                                    <div class="md-form">
                                        <label data-error="wrong" data-success="right" for="form32">Datum i vreme</label>
                                        <div class='input-group date' id='datetimepicker1'>
                                            <input type='text' name="offerDateTime" class="form-control"  placeholder="Od" required/>
                                            <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                        </div>
                                            <div class='input-group date' id='datetimepicker4' style="margin-top: 2%">
                                            <input type='text' name="offerDateTimeEnd" class="form-control"  placeholder="Do" required/>
                                            <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                    </span>

                                        </div>
                                    </div>



                                    <div class="md-form mb-5" id="divPrice">

                                    </div>

                                </div>
                                <div class="modal-footer d-flex justify-content-center" id="offerBut">
                                    <button  type="submit" id="sendOffer" class="btn btn-unique">Posalji ponudu <i class="fa fa-paper-plane-o ml-1"></i></button>
                                </div>
                                </form>
                            </div>

                            <div class="tab-pane" id="tab32">
                                <form id="submitOfferTravel" class="" method="GET" action="" role="form">
                                    <input type="hidden" name="offerTypeForm" id="offerType" value="0">
                                <div class="modal-body mx-3" id="offerDiv">
                                    <div class="md-form mb-5">
                                        <label data-error="wrong" data-success="right" for="form34">Uslovi putovanja</label>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                            industry's standard dummy text ever since the 1500s, when an unknown printer took
                                            a galley of type and scrambled it to make a type specimen book.</p>

                                    </div>
                                    <div class="md-form mb-5">
                                        <label data-error="wrong" data-success="right" for="form34">Grad</label>
                                        <input type="text" id="form34" name="cityTravel" class="form-control validate" required>

                                    </div>

                                    <div class="md-form mb-5">
                                        <label data-error="wrong" data-success="right" for="form29">Nacin putovanja:</label>
                                        <input type="text" id="form29" name="travelOption" class="form-control validate" required>

                                    </div>

                                    <div class="md-form mb-5">
                                        <label data-error="wrong" data-success="right" for="form29">Hotel</label>
                                        <input type="text" id="form29" name="placeTravel" class="form-control validate" required>

                                    </div>

                                    <div class="md-form mb-5">
                                        <label data-error="wrong" data-success="right" for="form32">Broj devojaka</label>
                                        <input type="number" id="form32" name="girlsNumberTravel" class="form-control validate" required>

                                    </div>


                                    <div class="md-form">
                                        <label data-error="wrong" data-success="right" for="form32">Datum odlaska</label>
                                        <div class='input-group date' id='datetimepicker2'>
                                            <input type='text' name="offerDateTimeTravel" class="form-control"  required/>
                                            <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                        </span>

                                        </div>
                                        <div class="md-form">
                                            <label data-error="wrong" data-success="right" for="form32">Datum povratka</label>
                                            <div class='input-group date' id='datetimepicker3'>
                                                <input type='text' name="offerDateTimeEndTravel" class="form-control"  required/>
                                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                    </div>


                                </div>

                            </div>


                        </div>
                                    <div class="modal-footer d-flex justify-content-center" id="offerBut">
                                        <button  type="submit" id="sendOffer" class="btn btn-unique">Posalji ponudu <i class="fa fa-paper-plane-o ml-1"></i></button>
                                    </div>
                                </form>
                            </div>

                        </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalContactFormDone" tabindex="-1"   role="dialog" aria-labelledby="myModalLabelDone" aria-hidden="true">
            <div class="modal-dialog" role="document" style="background-color: white">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Ponuda je uspesno poslata</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>


        <!-- .container -->
    </div>




    <!-- Footer Start -->
    <footer class="footer-1" id="footer">
        <div class="vd_bottom ">
            <div class="container">
                <div class="row">
                    <div class=" col-xs-12">
                        <div class="copyright">
                            Copyright ©2018. All Rights Reserved
                        </div>
                    </div>
                </div><!-- row -->
            </div><!-- container -->
        </div>
    </footer>

    </div>




<a class="back-top" href="#" id="back-top"> <i class="icon-chevron-up icon-white"> </i> </a> -->


<script type="text/javascript" src="{{ asset('assets/front/admin/jquery.js')}}"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/excanvas.js"></script>
<![endif]-->
<script type="text/javascript" src="{{ asset('assets/front/admin/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/front/admin/jquery-ui.custom.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/front/admin/jquery.ui.touch-punch.min.js')}}"></script>

<script type="text/javascript" src="{{ asset('assets/front/admin/caroufredsel.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/front/admin/plugins.js')}}"></script>

<script type="text/javascript" src="{{ asset('assets/front/admin/breakpoints.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/front/admin/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/front/admin/jquery.prettyPhoto.js')}}"></script>

<script type="text/javascript" src="{{ asset('assets/front/admin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/front/admin/jquery.tagsinput.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/front/admin/bootstrap-switch.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/front/admin/jquery.blockUI.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/front/admin/jquery.pnotify.min.js')}}"></script>

<script type="text/javascript" src="{{ asset('assets/front/admin/theme.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/front/admin/custom.js')}}"></script>



<script type="text/javascript">
    $(document).ready(function() {
        "use strict";

        $( "#form32timeRange" ).change(function() {
            var range = $(this).val();
            if(range<3)
                range = 3;
            var girlNum = $('#form32GirlNum').val();
            range = range * 1000 * girlNum;
            $('#divPrice').html('<h4 style="margin-top: 5%;color: red;" >Cena je '+range+'din</h4>');
        });

        $( "#form32GirlNum" ).change(function() {
            var range = $('#form32timeRange').val();
            if(range<3)
                range = 3;
            var girlNum = $('#form32GirlNum').val();
            range = range * 1000 * girlNum;
            $('#divPrice').html('<h4 style="margin-top: 5%;color: red;" >Cena je '+range+'din</h4>');
        });

        $(".nav-pills a").click(function(){
            $('#offerType').val($(this).attr('id'));
        });


        $('#salji').click(function() {
            return checkChecked();
        });

        $( "#submitOfferGetOut" ).submit(function( event) {
            var girls = [];
            $('#girlsDiv input[type="checkbox"]').each(function() {
                if ($(this).is(":checked")) {
                    girls.push($(this).val());

                }
            });
            $.ajax({
                type        : 'POST',
                url         : '/sendOffer/{{Auth::user()->id}}',

                data        : getFormDataGetOut(girls),
                dataType    : 'json',
                encode          : true
            }).done(function(data) {
                    $('#modalContactForm').modal('hide');
                    $('#modalContactFormDone').modal();
                });
            event.preventDefault();
        });

        $( "#submitOfferTravel" ).submit(function( event) {
            alert('fff');
            var girls = [];
            $('#girlsDiv input[type="checkbox"]').each(function() {
                if ($(this).is(":checked")) {
                    girls.push($(this).val());

                }
            });
            $.ajax({
                type        : 'POST',
                url         : '/sendOffer/{{Auth::user()->id}}',

                data        : getFormDataTravel(girls),
                dataType    : 'json',
                encode          : true
            }).done(function(data) {
                $('#modalContactForm').modal('hide');
                $('#modalContactFormDone').modal();
            });
            event.preventDefault();
        });

        $( "#form-pretraga" ).click(function() {
            if($("#pretraga").is(":visible") ){
                $( "#pretraga" ).hide(800);
            } else {
                $( "#pretraga" ).show(800);
            }

        });


    });

    function getFormDataGetOut(girls){
         return formData = {
            'city'              : $('input[name=city]').val(),
            'placeGoOut'             : $('input[name=placeGoOut]').val(),
            'placeGoOutAddress'    : $('input[name=placeGoOutAddress]').val(),
            'girlsId' : girls,
             'girlsNumber'             : $('input[name=girlsNumber]').val(),
             'offerDateTime'             : $('input[name=offerDateTime]').val(),
             'timeRange'             : $('input[name=timeRange]').val(),
             'offerDateTimeEnd'     :   $('input[name=offerDateTimeEnd]').val(),
             'offerType'     :   $('input[name=offerTypeForm]').val(),
             'placeAddress'     :   $('input[name=placeGoOutAddress]').val(),
             '_token': $('meta[name="csrf-token"]').attr('content')
         };

    }

    function getFormDataTravel(girls){
        return formData = {
            'city'              : $('input[name=cityTravel]').val(),
            'travelOption'             : $('input[name=travelOption]').val(),
            'place'    : $('input[name=placeTravel]').val(),
            'girlsId' : girls,
            'girlsNumber'             : $('input[name=girlsNumberTravel]').val(),
            'offerDateTime'             : $('input[name=offerDateTimeTravel]').val(),
            'offerDateTimeEnd'     :   $('input[name=offerDateTimeEndTravel]').val(),
            'offerType'     :   '1',
            '_token': $('meta[name="csrf-token"]').attr('content')
        };

    }

    function checkChecked() {
        var anyBoxesChecked = false;
        $('#girlsDiv input[type="checkbox"]').each(function() {
            if ($(this).is(":checked")) {
                anyBoxesChecked = true;
            }
        });

        if (anyBoxesChecked == false) {
            alert('Izaberite bar 1 devojku');
            return false;
        } else {
            return true;
        }
    }
</script>
<link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
<script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#datetimepicker1').datetimepicker();
        $('#datetimepicker2').datetimepicker();
        $('#datetimepicker3').datetimepicker();
        $('#datetimepicker4').datetimepicker();
    });


</script>



</body></html>