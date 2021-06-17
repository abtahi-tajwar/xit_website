<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <title>XiT Bangladesh</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ URL::asset('/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ URL::asset('/lib/nivo-slider/css/nivo-slider.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('/lib/owlcarousel/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('/lib/owlcarousel/owl.theme.default.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('/lib/owlcarousel/owl.transitions.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('/lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('/lib/venobox/venobox.css') }}" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="{{ URL::asset('/css/nivo-slider-theme.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ URL::asset('/css/style.css') }}" rel="stylesheet">

  <!-- Single Project page stylesheet -->
  <link href="{{ URL::asset('/css/single-project.css') }}" rel="stylesheet">
  <!-- Responsive Stylesheet File -->
  <link href="{{ URL::asset('/css/responsive.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>
<?php
function endWith($str, $lastString) {
      $count = strlen($lastString);
      if ($count == 0) {
         return true;
      }
      return (substr($str, -$count) === $lastString);
  }
$homepageURL = ''; 
if(!endWith(url()->current(), "xit_website") ) {
  $homepageURL = route('home');
}  
?>    


  
<body data-spy="scroll" data-target="#navbar-example">
  <div id="preloader"></div>
  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="index-2.html">
                  <h1><span>XiT</span> Bangladesh</h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="{{$homepageURL}}#home">Home</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="{{$homepageURL}}#about">About</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="{{$homepageURL}}#services">Services</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="{{$homepageURL}}#team">Team</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="{{$homepageURL}}#portfolio"><b>Projects</b></a>
                  </li>
                  <!--<li>
                    <a class="page-scroll" href="#blog">Blog</a>
                  </li>-->
                  <li>
                    <a class="page-scroll" href="{{$homepageURL}}#contact">Contact</a>
                  </li>
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->