<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.html">



    <!-- Place favicon.ico in the root directory -->
    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="{{ url('public/css/bootstrap.min.css') }}">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{ url('public/css/font-awesome.min.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ url('public/css/animate.css') }}">
    <!-- hover-min css -->
    <link rel="stylesheet" href="{{ url('public/css/hover-min.css') }}">
      <!-- magnific-popup css -->
    <link rel="stylesheet" href="{{ url('public/css/magnific-popup.css') }}">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="{{ url('public/css/meanmenu.min.css') }}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ url('public/css/owl.carousel.css') }}">
    <!-- lightbox css -->
    <link href="{{ url('public/css/lightbox.min.css') }}" rel="stylesheet">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" href="{{ url('public/inc/custom-slider/css/nivo-slider.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ url('public/inc/custom-slider/css/preview.css') }}" type="text/css" media="screen" />
    <!-- style css -->
    <link rel="stylesheet" href="{{ url('public/css/style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ url('public/css/responsive.css') }}">
    <!-- modernizr js -->
        <script src="{{ url('public/js/modernizr-2.8.3.min.js') }}"></script>
</head>

<body class="home">
    <!--Preloader start here-->
        <div id="loader-wrapper">
           <div id="loader"></div>
           <div class="loader-section section-left"></div>
           <div class="loader-section section-right"></div>
        </div>
    <!--Preloader area end here-->
    <!--Header area start here-->
    <header>
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="header-top-left">
                            <ul>
                                <li><p id="date_now"></p></li>
                                <li><a href="{{ route('account') }}">Sign In / Join</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                                <li>Dhaka, 27 <sup>o</sup> C</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="social-media-area">
                            <nav>
                                <ul>
                                    <li><a href="#" class="active"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="logo-area">
                            <a href="index.html"><img src="{{ url('public/images/logo.png') }}" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="right-banner">
                            <img src="{{ url('public/images/add/1.jpg') }}" alt="add image">
                        </div>
                    </div>
            </div>
            </div>
           </div>

        <div class="header-bottom-area" id="sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                        <div class="navbar-header">
                            <div class="col-sm-8 col-xs-8 padding-null">
                                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
	                                <span class="sr-only">Toggle navigation</span>
	                                <span class="icon-bar"></span>
	                                <span class="icon-bar"></span>
	                                <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="col-sm-4 col-xs-4 hidden-desktop text-right search">
                                <a href="#search-mobile" data-toggle="collapse" class="search-icon"><i class="fa fa-search" aria-hidden="true"></i></a>
                                <div id="search-mobile" class="collapse search-box">
                                    <input type="text" class="form-control" placeholder="Search...">
                                </div>
                            </div>
                        </div>
                        <div class="main-menu navbar-collapse collapse">
                            <nav>
                                <ul>
								  <li><a class="active" href="{{ route('index') }}">প্রচ্ছদ</a></li>
                                  <li><a href="#" class="has">স্পেশাল <i class="fa fa-caret-down"></i></a>
                                    <ul class="sub-menu">
 										 <li><a href="{{ route('blog') }}">বাংলা ব্লগ</a></li>
								         <li><a href="{{ route('fable') }}">উপকথা</a></li>
										 <li><a href="{{ route('history') }}">ইতিহাস</a></li>
                                    </ul>
                                    </li>
							    <li><a href="#" class="has dropdown-toggle">বাংলাদেশ<i class="fa fa-caret-down"></i></a>
                                    <ul class="sub-menu">
									            <li><a href="{{ route('bangladesh') }}">সমগ্র বাংলাদেশ</a></li>
                                                <li><a href="{{ route('bd-politics') }}">রাজনীতি</a></li>
											    <li><a href="{{ route('bd-economy-business') }}">অর্থ-বাণিজ্য</a></li>
                                        </ul>
                                    </li>
									<li><a href="{{ route('international') }}">আন্তর্জাতিক</a></li>
									<li><a href="{{ route('sports') }}">খেলাধুলা </a></li>
                                    <li><a href="{{ route('entertainment') }}">বিনোদন</a></li>
                                    <li><a href="{{ route('technology') }}">বিজ্ঞান-প্রযুক্তি</a></li>

		 				            <li><a href="#" class="has dropdown-toggle">জীবনধারা  <i class="fa fa-caret-down"></i></a>
                                    <ul class="sub-menu">
								  				<li><a href="{{ route('lifestyle') }}">জীবনধারা</a></li>
										          <li><a href="{{ route('lifestyle-health') }}">স্বাস্থ্যসেবা</a></li>
                                                     <li><a href="{{ route('lifestyle-travel') }}">ভ্রমণ পরামর্শ</a></li>
													 </ul>
                                                     </li>
 								    <li><a href="#" class="has dropdown-toggle">বিবিধ  <i class="fa fa-caret-down"></i></a>
                                    <ul class="sub-menu">
                                                <li><a href="{{ route('category-career') }}">ক্যারিয়ার</a></li>
												<li><a href="{{ route('category-art-literature') }}">শিল্প-সাহিত্য</a></li>
				                                <li><a href="{{ route('category-religion') }}">ধর্ম ও জীবন </a></li>
                                                  </ul>
												  </li>
								<li><a href="{{ route('gallery') }}">গ্যালারি</a></li>
                                <li><a href="{{ route('videos') }}">ভিডিও</a></li>
						        </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-2 col-sm-hidden col-xs-hidden text-right search hidden-mobile">
                        <a href="#search" data-toggle="collapse" class="search-icon"><i class="fa fa-search" aria-hidden="true"></i></a>
                        <div id="search" class="collapse search-box">
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{-- header end --}}

        @yield('content')
    <!-- Footer Area Section Start Here -->
    <div class="add-section separator-large2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <img src="{{ url('public/images/footer-top.png') }}" alt="footer">
                </div>
            </div>
        </div>
    </div>


<div class="footer-bottom-line">
        </div>
    <footer>
        <div class="footer-top-area">
            <div class="container">
                <div class="row">
                    <!-- Footer About Section Start Here -->
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="single-footer footer-one">
							<h2>Asian<span>post.net</span></h2>
                            <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Asianpost.net is Bangladesh first dedicated 24×7 news website which offers the latest national & international news on current affairs, religion etc.</p>
					   </div>
                    </div>
                    <!-- Footer About Section End Here -->

                    <!-- Footer Start Here -->
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                        <div class="single-footer footer-menu">
                            <nav>
                                <ul>
                                    <li>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <p><a href="{{ route('bangladesh') }}"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>Bangladesh</a></p>
                                        </div>
                                    </li>
                                    <li>
                                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <p><a href="{{ route('bd-politics') }}"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>Politics</a></p>
                                        </div>
                                    </li>
                                    <li>
                                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <p><a href="{{ route('bd-economy-business') }}"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>Economy</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <p><a href="{{ route('sports') }}"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>Sports</a></p>
                                        </div>
                                    </li>
						            <li>
                                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <p><a href="{{ route('international') }}"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>International</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </nav>

                        </div>

                    </div>
                    <!-- Footer Section End Here -->
					<!-- Footer Start Here -->
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                        <div class="single-footer footer-menu">
                            <nav>
                                <ul>
                                    <li>
                                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <p><a href="{{ route('technology') }}"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>Tecnology</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <p><a href="{{ route('lifestyle') }}"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>Lifestyle</a></p>
                                        </div>
                                    </li>
                                    <li>
                                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <p><a href="{{ route('lifestyle-health') }}"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>Health</a></p>
                                        </div>
                                    </li>
                                    <li>
                                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <p><a href="{{ route('lifestyle-travel') }}"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>Travel</a></p>
                                        </div>
                                    </li>
                                    <li>
                                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                           <p><a href="{{ route('entertainment') }}"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>Entertainment</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </nav>

                        </div>

                    </div>

                    <!-- Footer Section End Here -->

                    <!-- Footer Section Start Here -->

                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                        <div class="single-footer footer-menu">
                            <nav>
                                <ul>
                                    <li>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <p><a href="{{ route('blog') }}"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>Blog Post</a></p>
                                        </div>
                                    </li>
                                    <li>
                                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <p><a href="{{ route('history') }}"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>History</a></p>
                                        </div>
                                    </li>
                                    <li>
                                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <p><a href="{{ route('gallery') }}"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>Gallery</a></p>
                                        </div>
                                    </li>
                                    <li>
                                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                           <p><a href="{{ route('videos') }}"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>Videos</a></p>
                                        </div>
                                    </li>
                                    <li>
                                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <p><a href="{{ route('fable') }}"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>Fable Post</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Footer Section End Here -->
                    <!-- Footer Section start Here -->
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                        <div class="single-footer footer-menu">
                            <nav>
                                <ul>
                                    <li>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <p><a href="{{ route('about') }}"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>About US</a></p>
                                        </div>
                                    </li>
                                    <li>
                                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <p><a href="{{ route('author') }}"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>Author</a></p>
                                        </div>
                                    </li>
                                    <li>
                                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <p><a href="{{ route('testimonial') }}"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>Testimonial</a></p>
                                        </div>
                                    </li>
                                    <li>
                                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <p><a href="{{ route('account') }}"><i class="fa fa-user-circle-o" aria-hidden="true"></i>Account</a></p>
                                        </div>
                                    </li>
                                    <li>
                                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <p><a href="{{ route('contact') }}"><i class="fa fa-address-book" aria-hidden="true"></i>Contact Us</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Footer From social-media Section End Here -->
	                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                         <h3 class="box-line"></h3>
			                    <div class="footer-social-media-area">
                                <nav>
                                    <ul>
                                        <!-- Facebook Icon Here -->
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <!-- Google Icon Here -->
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <!-- Twitter Icon Here -->
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <!-- Vimeo Icon Here -->
                                        <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                                        <!-- Pinterest Icon Here -->
                                        <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
					    </div>
                </div>
            </div>
        </div>

    </footer>


    <!-- Start scrollUp  -->
    <div id="return-to-top">
        <span>Top</span>
    </div>
    <!-- End scrollUp  -->

    <!-- Footer Area Section End Here -->
    <script>
        var d = new Date();
        document.getElementById("date_now").innerHTML = d;
    </script>
    <!-- all js here -->
	<script src="{{  url('public/js/jquery.min.js') }}"></script>
    <!-- jquery latest version -->
    <script src="{{ url('public/js/jquery.min.js') }}"></script>
	 <!-- jquery-ui js -->
    <script src="{{ url('public/js/jquery-ui.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ url('public/js/bootstrap.min.js') }}"></script>
    <!-- meanmenu js -->
    <script src="{{ url('public/js/jquery.meanmenu.js') }}"></script>
    <!-- wow js -->
    <script src="{{ url('public/js/wow.min.js') }}"></script>
	<!-- owl.carousel js -->
    <script src="{{ url('public/js/owl.carousel.min.js') }}"></script>
    <!-- magnific-popup js -->
    <script src="{{ url('public/js/jquery.magnific-popup.js') }}"></script>

    <!-- jquery.counterup js -->
    <script src="{{ url('public/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ url('public/js/waypoints.min.js') }}"></script>
    <!-- jquery light box -->
    <script src="{{ url('public/js/lightbox.min.js') }}"></script>
    <!-- Nivo slider js -->
    <script src="{{ url('public/inc/custom-slider/js/jquery.nivo.slider.js') }}" type="text/javascript"></script>
    <script src="{{ url('public/inc/custom-slider/home.js') }}" type="text/javascript"></script>
    <!-- main js -->
    <script src="{{ url('public/js/main.js') }}"></script>
</body>

</html>
