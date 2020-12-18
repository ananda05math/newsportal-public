
    @extends('frontend.master')
    @section('content')


    <!-- Slider Section Start Here -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0">
                <div class="wrapper">
                <!-- News Slider -->
                    <div class="ticker marg-botm">
                        <div class="ticker-wrap">
                            <!-- News Slider Title -->
                            <div class="ticker-head up-case backg-colr col-md-2">ব্রেকিংনিউজ <i class="fa fa-angle-double-right" aria-hidden="true"></i></div>
                            <div class="tickers col-md-10">
                                <div id="top-news-slider" class="owl-carousel ">
                                    <div class="item">
                                        <a href="{{ route('blog-single') }}"> <img src="{{ url('public/images/breaking/1.jpg') }}" alt="news image"> <span>কর্মীদের স্বাস্থ্য সেবা কেন্দ্র চালু করছে অ্যাপল</span></a>
                                    </div>
                                    <div class="item">
                                        <a href="{{ route('blog-single') }}"><img src="{{ url('public/images/breaking/2.jpg') }}" alt="news image"> <span>কর্মীদের স্বাস্থ্য সেবা কেন্দ্র চালু করছে অ্যাপল</span></a>
                                    </div>
                                    <div class="item">
                                        <a href="{{ route('blog-single') }}"><img src="{{ url('public/images/breaking/3.jpg') }}" alt="news image"> <span>কর্মীদের স্বাস্থ্য সেবা কেন্দ্র চালু করছে অ্যাপল</span></a>
                                    </div>
                                    <div class="item">
                                        <a href="{{ route('blog-single') }}"><img src="{{ url('public/images/breaking/4.jpg') }}" alt="news image"> <span>কর্মীদের স্বাস্থ্য সেবা কেন্দ্র চালু করছে অ্যাপল</span></a>
                                    </div>
                                    <div class="item">
                                        <a href="{{ route('blog-single') }}"><img src="{{ url('public/images/breaking/5.jpg') }}" alt="news image"> <span>কর্মীদের স্বাস্থ্য সেবা কেন্দ্র চালু করছে অ্যাপল</span></a>
                                    </div>
                                    <div class="item">
                                        <a href="{{ route('blog-single') }}"> <img src="{{ url('public/images/breaking/1.jpg') }}" alt="news image"> <span>কর্মীদের স্বাস্থ্য সেবা কেন্দ্র চালু করছে অ্যাপল</span></a>
                                    </div>
                                    <div class="item">
                                        <a href="{{ route('blog-single') }}"><img src="{{ url('public/images/breaking/4.jpg') }}" alt="news image"> <span>কর্মীদের স্বাস্থ্য সেবা কেন্দ্র চালু করছে অ্যাপল</span></a>
                                    </div>
                               </div>
                           </div>
                        </div>
                    </div>
                    <!-- End News Slider -->
                </div>
            </div>




            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 padding-0">
                <div class="slider-area">
                    <div class="bend niceties preview-2">
                        <div id="ensign-nivoslider" class="slides">
                            <img src="{{ url('public/images/slider/slide_1.jpg') }}" alt="" title="#slider-direction-1" />
                            <img src="{{ url('public/images/slider/slide_3.jpg') }}" alt="" title="#slider-direction-2" />
							 <img src="{{ url('public/images/slider/slide_5.jpg') }}" alt="" title="#slider-direction-3" />
                        </div>
                        <!-- direction 2 -->
                        <div id="slider-direction-1" class="slider-direction">
                            <div class="slider-content t-cn s-tb slider-1">
                                <div class="title-container s-tb-c">
                                    <div class="slider-botton">
                                        <ul>
                                            <li>
                                                <a class="cat-link" href="bangladesh.html">বাংলাদেশ</a>
                                                <span class="date">
                                                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i>November 28, 2017
                                                </span>
                                                <span class="comment">
                                                    <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50
                                                    </a>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h1 class="title1"><a href="{{ route('blog-single') }}"><span>Record</span>proportion of women<br/>on degrees</a></h1>
                                    <div class="title2">The exhibition Banksy doesn’t want to see whle travelling hear.</div>
                                </div>
                            </div>
                        </div>
                        <!-- direction 2 -->
                        <div id="slider-direction-2" class="slider-direction">
                            <div class="slider-content t-cn s-tb slider-2">
                                <div class="title-container s-tb-c">
                                    <div class="slider-botton">
                                        <ul>
                                            <li>
                                                <a class="cat-link" href="international.html">আন্তর্জাতিক</a>
                                                <span class="date">
                                                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i>November 28, 2017
                                                </span>
                                                <span class="comment">
                                                    <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50
                                                    </a>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h1 class="title1"><a href="{{ route('blog-single') }}"><span>John</span>to retire as director</a></h1>
                                    <div class="title2">The exhibition Banksy doesn’t want to see whle travelling hear.</div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!-- Slider Area End Here-->

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-left-none">
                <div class="slider-right">
                    <ul>
                        <li>
                            <div class="right-content">
                                <span class="category"><a class="cat-link" href="category-career.html">ক্যারিয়ার</a></span>
                                <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i> June  28,  2017</span>
                                <h3><a href="{{ route('blog-single') }}">ট্রুডো ফাউন্ডেশন ফর রেফিউজি</a></h3>
                            </div>
                            <div class="right-image"><a href="{{ route('blog-single') }}"><img src="{{ url('public/images/sidebar-images/1.jpg') }}" alt="sidebar image"></a></div>
                        </li>
                        <li>
                            <div class="right-content">
                                <span class="category"><a class="cat-link" href="history.html">ইতিহাস</a></span>
                                <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i>June  28,  2017 </span>
                                <h3><a href="{{ route('blog-single') }}">প্রদর্শনী ব্যাংকসি</a></h3>
                            </div>
                            <div class="right-image"><a href="{{ route('blog-single') }}"><img src="{{ url('public/images/sidebar-images/2.jpg') }}" alt="sidebar image"></a></div>
                        </li>
                        <li>
                            <div class="right-content">
                                <span class="category"><a class="cat-link" href="fable.html">উপকথা</a></span>
                                <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i> June  28,  2017 </span>
                                <h3><a href="{{ route('blog-single') }}">হারিকেন হার্ভে: নির্বাসন</a></h3>
                            </div>
                            <div class="right-image"><a href="{{ route('blog-single') }}"><img src="{{ url('public/images/sidebar-images/3.jpg') }}" alt="sidebar image"></a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Section end Here -->

    <!-- All News Section Start Here -->
    <div class="all-news-area">
        <div class="container">
            <!-- latest news Start Here -->
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 tab-home">
                    <ul class="nav nav-tabs">
                        <li class="title-bg">লেটেস্ট সংবাদ</li>
                        <li class="active"><a data-toggle="tab" href="#tab1">বাংলাদেশ</a></li>
                        <li><a data-toggle="tab" href="#tab2">রাজনীতি</a></li>
                        <li><a data-toggle="tab" href="#tab3">অর্থ-বাণিজ্য</a></li>
                        <li><a data-toggle="tab" href="#tab4">পূর্ববর্তী</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab1" class="tab-pane fade in active">
                            <div class="tab-top-content">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 paddimg-right-none">
                                        <a href="{{ route('blog-single') }}"><img src="{{ url('public/images/tab/1.jpg') }}" alt="sidebar image"></a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 last-col">
                                        <span class="date"><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> james Bond </a></span> <span class="comment"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50</a></span>
                                        <h3><a href="#">আবিদের স্ত্রীর অবস্থা ‘অপরিবর্তিত’</a></h3>
                                        <p>নেপালের কাঠমান্ডুতে বিধ্বস্ত ইউএস-বাংলা এয়ারলাইন্সের উড়োজাহাজটির প্রধান বৈমানিক আবিদ সুলতানের স্ত্রী আফসানা খানমের অবস্থা এখনো সঙ্কটাপন্ন বলে জানিয়েছেন চিকিৎসকরা।</p>
                                        <a href="{{ route('blog-single') }}" class="read-more hvr-bounce-to-right">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-bottom-content">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-area">
                                        <div class="col-sm-12 col-xs-3 img-tab">
                                            <a href="{{ route('blog-single') }}"><img src="{{ url('public/images/tab/2.jpg') }}" alt="News image"></a>
                                        </div>
                                        <div class="col-sm-12 col-xs-9 img-content">
                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i>June 28, 2017</span>
                                            <h4><a href="{{ route('blog-single') }}">এই স্বীকৃতি তাদের জন্য চপেটাঘাত: হাসিনা</a></h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-area">
                                        <div class="col-sm-12 col-xs-3 img-tab">
                                            <a href="{{ route('blog-single') }}"><img src="{{ url('public/images/tab/3.jpg') }}" alt="News image"></a>
                                        </div>
                                        <div class="col-sm-12 col-xs-9 img-content">
                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i>June 28, 2017</span>
                                            <h4><a href="{{ route('blog-single') }}">এই স্বীকৃতি তাদের জন্য চপেটাঘাত: হাসিনা</a></h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-area">
                                        <div class="col-sm-12 col-xs-3 img-tab">
                                            <a href="{{ route('blog-single') }}"><img src="{{ url('public/images/tab/4.jpg') }}" alt="News image"></a>
                                        </div>
                                        <div class="col-sm-12 col-xs-9 img-content">
                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i>June 28, 2017</span>
                                            <h4><a href="{{ route('blog-single') }}">এই স্বীকৃতি তাদের জন্য চপেটাঘাত: হাসিনা</a></h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-area">
                                        <div class="col-sm-12 col-xs-3 img-tab">
                                            <a href="{{ route('blog-single') }}"><img src="{{ url('public/images/tab/5.jpg') }}" alt="News image"></a>
                                        </div>
                                        <div class="col-sm-12 col-xs-9 img-content">
                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i>June 28, 2017</span>
                                            <h4><a href="{{ route('blog-single') }}">এই স্বীকৃতি তাদের জন্য চপেটাঘাত: হাসিনা</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab2" class="tab-pane fade">
                            <div class="tab-top-content">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 paddimg-right-none">
                                        <a href="{{ route('blog-single') }}"><img src="{{ url('public/images/tab/7.jpg') }}" alt="sidebar image"></a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 last-col">
                                      	<span class="date"><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> james Bond </a></span> <span class="comment"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50</a></span>
                                        <h3><a href="#">নৌবন্দরগুলো ধূমপানমুক্ত রাখার সিদ্ধান্ত</a></h3>
                                        <p>নেপালের কাঠমান্ডুতে বিধ্বস্ত ইউএস-বাংলা এয়ারলাইন্সের উড়োজাহাজটির প্রধান বৈমানিক আবিদ সুলতানের স্ত্রী আফসানা খানমের অবস্থা এখনো সঙ্কটাপন্ন বলে জানিয়েছেন চিকিৎসকরা।</p>
                                        <a href="{{ route('blog-single') }}" class="read-more hvr-bounce-to-right">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-bottom-content">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-area">
                                        <div class="col-sm-12 col-xs-3 img-tab">
                                            <a href="{{ route('blog-single') }}"><img src="{{ url('public/images/tab/2.jpg') }}" alt="News image"></a>
                                        </div>
                                        <div class="col-sm-12 col-xs-9 img-content">
                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                            <h4><a href="{{ route('blog-single') }}">এই স্বীকৃতি তাদের জন্য চপেটাঘাত: হাসিনা</a></h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-area">
                                        <div class="col-sm-12 col-xs-3 img-tab">
                                            <a href="{{ route('blog-single') }}"><img src="{{ url('public/images/tab/3.jpg') }}" alt="News image"></a>
                                        </div>
                                        <div class="col-sm-12 col-xs-9 img-content">
                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                            <h4><a href="{{ route('blog-single') }}">এই স্বীকৃতি তাদের জন্য চপেটাঘাত: হাসিনা</a></h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-area">
                                        <div class="col-sm-12 col-xs-3 img-tab">
                                            <a href="{{ route('blog-single') }}"><img src="{{ url('public/images/tab/2.jpg') }}" alt="News image"></a>
                                        </div>
                                        <div class="col-sm-12 col-xs-9 img-content">
                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                            <h4><a href="{{ route('blog-single') }}">এই স্বীকৃতি তাদের জন্য চপেটাঘাত: হাসিনা</a></h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-area">
                                        <div class="col-sm-12 col-xs-3 img-tab">
                                            <a href="{{ route('blog-single') }}"><img src="{{ url('public/images/tab/5.jpg') }}" alt="News image"></a>
                                        </div>
                                        <div class="col-sm-12 col-xs-9 img-content">
                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>

                                            <h4><a href="{{ route('blog-single') }}">এই স্বীকৃতি তাদের জন্য চপেটাঘাত: হাসিনা</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab3" class="tab-pane fade">
                            <div class="tab-top-content">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 paddimg-right-none">
                                                <a href="{{ route('blog-single') }}"><img src="{{ url('public/images/tab/8.jpg') }}" alt="sidebar image"></a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 last-col">
                                        <span class="date"><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> james Bond </a></span> <span class="comment"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50</a></span>
                                        <h3><a href="#">নেপাল ট্রাজেডি: শেষ যাত্রায় সাংবাদিক ফয়সাল</a></h3>
                                        <p>নেপালের কাঠমান্ডুতে বিধ্বস্ত ইউএস-বাংলা এয়ারলাইন্সের উড়োজাহাজটির প্রধান বৈমানিক আবিদ সুলতানের স্ত্রী আফসানা খানমের অবস্থা এখনো সঙ্কটাপন্ন বলে জানিয়েছেন চিকিৎসকরা।</p>
                                        <a href="{{ route('blog-single') }}" class="read-more hvr-bounce-to-right">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-bottom-content">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-area">
                                        <div class="col-sm-12 col-xs-3 img-tab">
                                            <a href="{{ route('blog-single') }}"><img src="{{ url('public/images/tab/2.jpg') }}" alt="News image"></a>
                                        </div>
                                        <div class="col-sm-12 col-xs-9 img-content">
                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>


                                            <h4><a href="{{ route('blog-single') }}">এই স্বীকৃতি তাদের জন্য চপেটাঘাত: হাসিনা</a></h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-area">
                                        <div class="col-sm-12 col-xs-3 img-tab">
                                            <a href="{{ route('blog-single') }}"><img src="{{ url('public/images/tab/3.jpg') }}" alt="News image"></a>
                                        </div>
                                        <div class="col-sm-12 col-xs-9 img-content">
                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                            <h4><a href="{{ route('blog-single') }}">এই স্বীকৃতি তাদের জন্য চপেটাঘাত: হাসিনা</a></h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-area">
                                        <div class="col-sm-12 col-xs-3 img-tab">
                                            <a href="{{ route('blog-single') }}"><img src="{{ url('public/images/tab/3.jpg') }}" alt="News image"></a>
                                        </div>
                                        <div class="col-sm-12 col-xs-9 img-content">
                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                            <h4><a href="{{ route('blog-single') }}">এই স্বীকৃতি তাদের জন্য চপেটাঘাত: হাসিনা</a></h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-area">
                                        <div class="col-sm-12 col-xs-3 img-tab">
                                            <a href="{{ route('blog-single') }}"><img src="{{ url('public/images/tab/2.jpg') }}" alt="News image"></a>
                                        </div>
                                        <div class="col-sm-12 col-xs-9 img-content">
                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                            <h4><a href="{{ route('blog-single') }}">এই স্বীকৃতি তাদের জন্য চপেটাঘাত: হাসিনা</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab4" class="tab-pane fade">
                            <div class="tab-top-content">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 paddimg-right-none">
                                        <a href="{{ route('blog-single') }}"><img src="{{ url('public/images/tab/1.jpg') }}" alt="sidebar image"></a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 last-col">
                                        <span class="date"><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> james Bond </a></span> <span class="comment"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50</a></span>
                                        <h3><a href="#">নেপালে দুর্ঘটনায় আহত সর্বশেষ বাংলাদেশি ঢাকায়</a></h3>
                                        <p>নেপালের কাঠমান্ডুতে বিধ্বস্ত ইউএস-বাংলা এয়ারলাইন্সের উড়োজাহাজটির প্রধান বৈমানিক আবিদ সুলতানের স্ত্রী আফসানা খানমের অবস্থা এখনো সঙ্কটাপন্ন বলে জানিয়েছেন চিকিৎসকরা।</p>
                                        <a href="{{ route('blog-single') }}" class="read-more hvr-bounce-to-right">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-bottom-content fadeInUp">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-area">
                                        <div class="col-sm-12 col-xs-3 img-tab">
                                            <a href="{{ route('blog-single') }}"><img src="{{ url('public/images/tab/2.jpg') }}" alt="News image"></a>
                                        </div>
                                        <div class="col-sm-12 col-xs-9 img-content">
                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                            <h4><a href="{{ route('blog-single') }}">এই স্বীকৃতি তাদের জন্য চপেটাঘাত: হাসিনা</a></h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-area">
                                        <div class="col-sm-12 col-xs-3 img-tab">
                                            <a href="{{ route('blog-single') }}"><img src="{{ url('public/images/tab/3.jpg') }}" alt="News image"></a>
                                        </div>
                                        <div class="col-sm-12 col-xs-9 img-content">
                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>

                                            <h4><a href="{{ route('blog-single') }}">এই স্বীকৃতি তাদের জন্য চপেটাঘাত: হাসিনা</a></h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-area">
                                        <div class="col-sm-12 col-xs-3 img-tab">
                                            <a href="{{ route('blog-single') }}"><img src="{{ url('public/images/tab/2.jpg') }}" alt="News image"></a>
                                        </div>
                                        <div class="col-sm-12 col-xs-9 img-content">
                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>

                                            <h4><a href="{{ route('blog-single') }}">এই স্বীকৃতি তাদের জন্য চপেটাঘাত: হাসিনা</a></h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-area">
                                        <div class="col-sm-12 col-xs-3 img-tab">
                                            <a href="{{ route('blog-single') }}"><img src="{{ url('public/images/tab/4.jpg') }}" alt="News image"></a>
                                        </div>
                                        <div class="col-sm-12 col-xs-9 img-content">
                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>

                                            <h4><a href="{{ route('blog-single') }}">এই স্বীকৃতি তাদের জন্য চপেটাঘাত: হাসিনা</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- International news  here-->
                    <div class="International-news separator-large">
                        <div class="row">
                            <div class="view-area">
                                <div class="col-sm-8">
                                    <h3 class="title-bg">আন্তর্জাতিক সংবাদ</h3>
                                </div>
                                <div class="col-sm-4 text-right">
                                    <a href="international.html">View All <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="list-col">
                                    <a href="{{ route('blog-single') }}"> <img src="{{ url('public/images/home/1.jpg') }}" alt="" title="bangladesh image" /></a>
                                    <div class="dsc">
                                        <span class="date"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> November 28, 2017 </span> <span class="comment"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50</a></span>
                                        <h3><a href="{{ route('blog-single') }}">স্যাটেলাইটের গায়ে সই হিসেবে তারানা হালিমের লেখা ‘জয় বাংলা জয় বঙ্গবন্ধু’</a></h3>
                                        <p>দেশের প্রথম স্যাটেলাইট বঙ্গবন্ধু-১ স্যাটেলাইটের গায়ে নিজ হাতে ‘জয় বাংলা জয় বঙ্গবন্ধু’ শ্লোগান লিখে দিয়েছেন তথ্য প্রতিমন্ত্রী তারানা হালিম। </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <ul class="news-post">
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                                <div class="item-post">
                                                    <div class="row">
                                                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 paddimg-right-none">
                                                            <a href="{{ route('blog-single') }}"> <img src="{{ url('public/images/home/2.jpg') }}" alt="" title="Trending image"></a>
                                                        </div>
                                                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                           <h4><a href="{{ route('blog-single') }}">বিনামূল্যে ব্রেস্ট সার্জারি করবে চেন্নাইয়ের সরকারি </a></h4>
                                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                                <div class="item-post">
                                                    <div class="row">
                                                         <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 paddimg-right-none">
                                                            <a href="{{ route('blog-single') }}"> <img src="{{ url('public/images/home/3.jpg') }}" alt="" title="Trending image"></a>
                                                        </div>
                                                         <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                            <h4><a href="{{ route('blog-single') }}">লর্ড কারলাইলকে খালেদার আইনি পরামর্শক নিয়োগ</a></h4>
                                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                                <div class="item-post">
                                                    <div class="row">
                                                         <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 paddimg-right-none">
                                                            <a href="{{ route('blog-single') }}"> <img src="{{ url('public/images/home/4.jpg') }}" alt="" title="bangladesh image"></a>
                                                        </div>
                                                         <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                            <h4><a href="{{ route('blog-single') }}">লর্ড কারলাইলকে খালেদার আইনি পরামর্শক নিয়োগ </a></h4>
                                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                                <div class="item-post">
                                                    <div class="row">
                                                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 paddimg-right-none">
                                                            <a href="{{ route('blog-single') }}"> <img src="{{ url('public/images/home/5.jpg') }}" alt="" title="bangladesh image"></a>
                                                        </div>
                                                         <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                            <h4><a href="{{ route('blog-single') }}">লর্ড কারলাইলকে খালেদার আইনি পরামর্শক নিয়োগ</a></h4>
                                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

				 <!-- sport news  here-->
                    <div class="sport-news separator-large">
                        <div class="row">
                            <div class="view-area">
                                <div class="col-sm-8">
                                    <h3 class="title-bg">খেলাধুলা সংবাদ</h3>
                                </div>
                                <div class="col-sm-4 text-right">
                                    <a href="sports.html">View All <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="list-col">
                                    <a href="{{ route('blog-single') }}"> <img src="{{ url('public/images/home/6.jpg') }}" alt="" title="International image" /></a>
                                    <div class="dsc">
                                        <span class="date"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> November 28, 2017 </span> <span class="comment"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50</a></span>
                                        <h3><a href="{{ route('blog-single') }}">ইউএস-বাংলা দুর্ঘটনা: ডিএনএ পরীক্ষা ছাড়া দুটি লাশ শনাক্ত করা ‘সম্ভব নয়’</a></h3>
                                        <p>ইউএস-বাংলা এয়ারলাইন্সের উড়োজাহাজ দুর্ঘটনায় নিহত যে তিন বাংলাদেশির লাশ এখনও দেশে ফেরেনি, তাদের মধ্যে দুজনকে </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <ul class="news-post">
                                    <li>

                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                                <div class="item-post">
                                                    <div class="row">
                                                         <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 paddimg-right-none">
                                                            <a href="{{ route('blog-single') }}"> <img src="{{ url('public/images/home/7.jpg') }}" alt="" title="International image"></a>
                                                        </div>
                                                         <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                            <h4><a href="{{ route('blog-single') }}">লর্ড কারলাইলকে খালেদার আইনি পরামর্শক নিয়োগ</a></h4>
                                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                                <div class="item-post">
                                                    <div class="row">
                                                         <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 paddimg-right-none">
                                                            <a href="{{ route('blog-single') }}"> <img src="{{ url('public/images/home/8.jpg') }}" alt="" title="International image"></a>
                                                        </div>
                                                         <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                            <h4><a href="{{ route('blog-single') }}">লর্ড কারলাইলকে খালেদার আইনি পরামর্শক নিয়োগ</a></h4>
                                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>

                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                                <div class="item-post">
                                                    <div class="row">
                                                         <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 paddimg-right-none">
                                                            <a href="{{ route('blog-single') }}"> <img src="{{ url('public/images/home/9.jpg') }}" alt="" title="International image"></a>
                                                        </div>
                                                         <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                            <h4><a href="{{ route('blog-single') }}">লর্ড কারলাইলকে খালেদার আইনি পরামর্শক নিয়োগ </a></h4>
                                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                                <div class="item-post">
                                                    <div class="row">
                                                         <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 paddimg-right-none">
                                                            <a href="{{ route('blog-single') }}"> <img src="{{ url('public/images/home/10.jpg') }}" alt="" title="International image"></a>
                                                        </div>
                                                         <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                            <h4><a href="{{ route('blog-single') }}">লর্ড কারলাইলকে খালেদার আইনি পরামর্শক নিয়োগ</a></h4>
                                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Sidebar Start Here -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-left-none sidebar-latest">
                    <!--Like Box Start Here -->
                    <div class="like-box">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/primebd24/"><i class="fa fa-facebook" aria-hidden="true"></i> </a><span>210,956 <br />likes</span>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> </a><span>350,580 <br />followers</span>
                            </li>
                            <li class="last">
                                <a href="#"><i class="fa fa-rss" aria-hidden="true"></i> </a><span>210,956 <br />subscribers</span>
                            </li>
                        </ul>
                    </div>
                    <!--Like Box End Here -->

                    <!--popular Post Start Here -->

                    <!--Add Start Here -->
                    <div class="add-section add-section1">
                        <img src="{{ url('public/images/add/arif2.gif') }}" alt="add image">
                    </div>
                    <!--Add Box End Here -->
                    <!--Newsletter Start Here -->
                    <div class="newsletter-info"style="#">
                        <form>
                            <fieldset>
                                <div class="form-group">
                                    <h4>Subscribe to Newsletter</h4>
                                    <div class="newsletter">
                                    <input class="form-control" placeholder="Email address..." type="text">
                                    <button class="btn-send" type="submit">Subscribe</button>
                                    <p>Get the latest news stories in your inbox</p>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>

                    <!--Newsletter End Here -->
					 <!--Add Start Here -->
                    <div class="add-section add-section1">
                     <a href="#"><img src="{{ url('public/images/add/2.png') }}"></a>
                    </div>
                    <!--Add Box End Here -->

                    <div class="hot-news popular-related">
			      <h3 class="title-bg" style="margin-top:15px;">সদ্যপ্রাপ্ত সংবাদ</h3>
                        <ul class="news-post">
                            <li>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                        <div class="item-post">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3 paddimg-right-none">
                                                    <img src="{{ url('public/images/popular/1.jpg') }}" alt="" title="News image">
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-9 col-xs-9">
                                                    <h4><a href="{{ route('blog-single') }}">লর্ড কারলাইলকে খালেদার আইনি পরামর্শক নিয়োগ</a></h4>
                                                    <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                        <div class="item-post">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3 paddimg-right-none">
                                                    <img src="{{ url('public/images/popular/2.jpg') }}" alt="" title="News image">
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-9 col-xs-9">
                                                    <h4><a href="{{ route('blog-single') }}">লর্ড কারলাইলকে খালেদার আইনি পরামর্শক নিয়োগ</a></h4>
                                                    <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                        <div class="item-post">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3 paddimg-right-none">
                                                    <img src="{{ url('public/images/popular/3.jpg') }}" alt="" title="News image">
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-9 col-xs-9">
                                                    <h4><a href="{{ route('blog-single') }}">লর্ড কারলাইলকে খালেদার আইনি পরামর্শক নিয়োগ</a></h4>
                                                    <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                        <div class="item-post">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3 paddimg-right-none">
                                                    <img src="{{ url('public/images/popular/4.jpg') }}" alt="" title="News image">
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-9 col-xs-9">
                                                    <h4><a href="{{ route('blog-single') }}">লর্ড কারলাইলকে খালেদার আইনি পরামর্শক নিয়োগ</a></h4>
                                                    <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <!--popular Post End Here -->

</br>

                <!--popular Post Start Here -->
                    <div class="sidebar popular">
                        <ul>
                            <li>
                                <a href="bd-economy-business.html" class="category-btn hvr-bounce-to-right">Economic</a>
                                <div class="post-image"><img src="{{ url('public/images/sidebar/5.jpg') }}" alt="News image"></div>
                                <div class="content">
                                    <h4>
                                        <a href="#">The exhibition Bankasy doesn’t want you to see</a>
                                    </h4>
                                    <span class="date">
                                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i> November 28, 2017
                                    </span>
                                    <span class="comment">
                                        <a href="#">
                                            <i class="fa fa-comment-o" aria-hidden="true"></i> 50
                                        </a>
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
         <!--popular Post End Here -->
    <!-- Fetuered videos Start Here -->
            <div class="fetuered-videos">
                <div class="container">
				  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">

                        <div class="view-area">
                            <div class="col-sm-12">
                                <h3 class="title-bg">ভিডিও গ্যালারি</h3>
                            </div>
                        </div>
                    </div>
                    <div id="featured-videos-section" class="owl-carousel">
					    <div class="item">
							<div class="single-videos">
								<div class="images">
									<a href="#"><img src="{{ url('public/images/fetuered/1.jpg') }}" alt=""></a>
									<div class="overley">
										<div class="videos-icon">
											<a class="popup-videos" href="http://www.youtube.com/watch?v=Cdajfy4voyY"><img src="images/fetuered/video-icon.png" alt=""></a>
										</div>
									</div>
								</div>
								<div class="videos-text">
									<h3><a href="#">Smart Packs Parking Sensor Tech</a></h3>
									<span class="date"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> November 28, 2017 </span>
                                    <span class="comment"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50 </a></span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="single-videos">
								<div class="images">
									<a href="#"><img src="{{ url('public/images/fetuered/2.jpg') }}" alt=""></a>
									<div class="overley">
										<div class="videos-icon">
											<a class="popup-videos" href="http://www.youtube.com/watch?v=Cdajfy4voyY"><img src="images/fetuered/video-icon.png" alt=""></a>
										</div>
									</div>
								</div>
								<div class="videos-text">
									<h3><a href="#">Woman Endure Five Year Slvery</a></h3>
									<span class="date"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> November 28, 2017 </span><span class="comment"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50 </a></span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="single-videos">
								<div class="images">
									<a href="#"><img src="{{ url('public/images/fetuered/3.jpg') }}" alt=""></a>
									<div class="overley">
										<div class="videos-icon">
											<a class="popup-videos" href="http://www.youtube.com/watch?v=Cdajfy4voyY"><img src="images/fetuered/video-icon.png" alt=""></a>
										</div>
									</div>
								</div>
								<div class="videos-text">
									<h3><a href="#">Health Benefits of Morning Running</a></h3>
									<span class="date"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> November 28, 2017 </span><span class="comment"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50 </a></span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="single-videos">
								<div class="images">
									<a href="#"><img src="{{ url('public/images/fetuered/4.jpg') }}" alt=""></a>
									<div class="overley">
										<div class="videos-icon">
											<a class="popup-videos" href="http://www.youtube.com/watch?v=Cdajfy4voyY"><img src="images/fetuered/video-icon.png" alt=""></a>
										</div>
									</div>
								</div>
								<div class="videos-text">
									<h3><a href="#">Smart Packs Parking Sensor Tech</a></h3>
									<span class="date"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> November 28, 2017 </span><span class="comment"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50 </a></span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="single-videos">
								<div class="images">
									<a href="#"><img src="{{ url('public/images/fetuered/5.jpg') }}" alt=""></a>
									<div class="overley">
										<div class="videos-icon">
											<a class="popup-videos" href="http://www.youtube.com/watch?v=Cdajfy4voyY"><img src="images/fetuered/video-icon.png" alt=""></a>
										</div>
									</div>
								</div>
								<div class="videos-text">
									<h3><a href="#">Smart Packs Parking Sensor Tech</a></h3>
									<span class="date"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> November 28, 2017 </span><span class="comment"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50 </a></span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="single-videos">
								<div class="images">
									<a href="#"><img src="{{ url('public/images/fetuered/2.jpg') }}" alt=""></a>
									<div class="overley">
										<div class="videos-icon">
											<a class="popup-videos" href="http://www.youtube.com/watch?v=Cdajfy4voyY"><img src="images/fetuered/video-icon.png" alt=""></a>
										</div>
									</div>
								</div>
								<div class="videos-text">
									<h3><a href="#">Smart Packs Parking Sensor Tech</a></h3>
									<span class="date"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> November 28, 2017 </span><span class="comment"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50 </a></span>
								</div>
							</div>
						</div>
                    </div>
				</div>
              </div>
           </div>
    <!-- Fetuered videos End Here -->

    <!-- Hot News Start Here -->
    <div class="hot-news">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div id="news-Carousel" class="carousel carousel-news slide" data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <!-- Left and right controls -->
                                    <div class="next-prev-top">
                                        <div class="row">
                                            <div class="col-sm-9 col-xs-9">
                                                <div class="view-area">
                                                    <h3 class="title-bg">বিনোদন</h3>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 next-prev col-xs-3">
                                                <a class="left news-control" href="#news-Carousel" data-slide="prev">
                                                    <span class="news-arrow-left"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                                                </a>
                                                <a class="right news-control" href="#news-Carousel" data-slide="next">
                                                    <span class="news-arrow-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <a href="#"><img src="{{ url('public/images/home/18.jpg') }}" alt="" title="#slider-direction-1" /></a>
                                            <div class="dsc">
                                                <span class="date">
                                                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                    November 28, 2017
                                                </span>
                                                <span class="comment">
                                                    <a href="#"> <i class="fa fa-comment-o" aria-hidden="true"></i> 50
                                                    </a>
                                                </span>
                                                <h4><a href="{{ route('blog-single') }}"> তিদিন পুষ্টিকর খাবার খাওয়ার উপায়?  খাওয়ার উপায়?</a></h4>
                                                <p>প্রতিদিন পুষ্টিকর খাবার খাচ্ছেন কিনা তা যদি লক্ষ্য রাখতে চান তবে অনুসরণ করুন কয়েকটি সহজ পদক্ষেপ  আরও বাড়ানো যায় ফল ও তেল মিশিয়ে।</p>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <a href="#"><img src="{{ url('public/images/home/19.jpg') }}" alt="" title="#slider-direction-1" /></a>
                                            <div class="dsc">
                                                <span class="date">
                                                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i> November 28, 2017
                                                </span>
                                                <span class="comment">
                                                    <a href="#"> <i class="fa fa-comment-o" aria-hidden="true"></i> 50
                                                    </a>
                                                </span>
                                                <h4><a href="{{ route('blog-single') }}">তিদিন পুষ্টিকর খাবার খাওয়ার উপায়?  খাওয়ার উপায়?</a></h4>
                                                <p>প্রতিদিন পুষ্টিকর খাবার খাচ্ছেন কিনা তা যদি লক্ষ্য রাখতে চান তবে অনুসরণ করুন কয়েকটি সহজ পদক্ষেপ  আরও বাড়ানো যায় ফল ও তেল মিশিয়ে।</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <a href="#"><img src="{{ url('public/images/home/20.jpg') }}" alt="" title="#slider-direction-1" /></a>
                                            <div class="dsc">
                                                <span class="date">
                                                <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                November 28, 2017 </span>
                                                <span class="comment">
                                                <a href="#"> <i class="fa fa-comment-o" aria-hidden="true"></i> 50
                                                </a></span>
                                                <h4><a href="{{ route('blog-single') }}">গৌরব হারানো, লজ্জায় লাল ছাত্রলীগ, সামলাবে কে?</a></h4>
                                                <p>ঠোঁটের যত্নে লিপবামের জুড়ি নেই। এই প্রসাধনীর কার্যকারিতা আরও বাড়ানো যায় ফল ও তেল মিশিয়ে  আরও বাড়ানো যায় ফল ও তেল মিশিয়ে।</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div id="news-Carousel2" class="carousel carousel-news slide" data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <!-- Left and right controls -->
                                    <div class="next-prev-top">
                                        <div class="row">
                                            <div class="col-sm-9 col-xs-9">
                                                <div class="view-area">
                                                    <h3 class="title-bg">স্বাস্থ্যসেবা</h3>
                                                </div>
                                            </div>

                                            <div class="col-sm-3 col-xs-3 next-prev">
                                                <a class="left news-control" href="#news-Carousel2" data-slide="prev">
                                                    <span class="news-arrow-left"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                                                </a>
                                                <a class="right news-control" href="#news-Carousel2" data-slide="next">
                                                    <span class="news-arrow-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <a href="#"><img src="{{ url('public/images/home/20.jpg') }}" alt="" title="#slider-direction-1" /></a>
                                            <div class="dsc">
                                                <span class="date">
                                                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                    November 28, 2017
                                                </span>
                                                <span class="comment">
                                                    <a href="#"> <i class="fa fa-comment-o" aria-hidden="true"></i> 50
                                                    </a>
                                                </span>
                                                <h4><a href="{{ route('blog-single') }}">গৌরব হারানো, লজ্জায় লাল ছাত্রলীগ, সামলাবে কে?</a></h4>
                                                <p>ঠোঁটের যত্নে লিপবামের জুড়ি নেই। এই প্রসাধনীর কার্যকারিতা আরও বাড়ানো যায় ফল ও তেল মিশিয়ে  আরও বাড়ানো যায় ফল ও তেল মিশিয়ে।</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <a href="#"><img src="{{ url('public/images/home/22.jpg') }}" alt="" title="#slider-direction-1" /></a>
                                            <div class="dsc">
                                                <span class="date">
                                                <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                November 28, 2017 </span>
                                                <span class="comment">
                                                <a href="#"> <i class="fa fa-comment-o" aria-hidden="true"></i> 50
                                                </a></span>
                                                <h4><a href="{{ route('blog-single') }}">গৌরব হারানো, লজ্জায় লাল ছাত্রলীগ, সামলাবে কে?</a></h4>
                                                <p>ঠোঁটের যত্নে লিপবামের জুড়ি নেই। এই প্রসাধনীর কার্যকারিতা আরও বাড়ানো যায় ফল ও তেল মিশিয়ে  আরও বাড়ানো যায় ফল ও তেল মিশিয়ে।</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <a href="#"><img src="{{ url('public/images/home/21.jpg') }}" alt="" title="#slider-direction-1" /></a>
                                            <div class="dsc">
                                                <span class="date">
                                                <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                November 28, 2017 </span>
                                                <span class="comment">
                                                <a href="#"> <i class="fa fa-comment-o" aria-hidden="true"></i> 50
                                                </a></span>
                                                <h4><a href="{{ route('blog-single') }}">গৌরব হারানো, লজ্জায় লাল ছাত্রলীগ, সামলাবে কে?</a></h4>
                                                <p>ঠোঁটের যত্নে লিপবামের জুড়ি নেই। এই প্রসাধনীর কার্যকারিতা আরও বাড়ানো যায় ফল ও তেল মিশিয়ে  আরও বাড়ানো যায় ফল ও তেল মিশিয়ে।</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Two Slider -->

                <!--Around Area Start Here -->
				<div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 content">
	               <h3 class="box-heading" style="margin-top:25px;"><a href="#"><span class="h-text"> বিজ্ঞান-প্রযুক্তি</span></a></h3>
                    <ul class="news-post news-post2 around-news">
                        <li>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                    <div class="item-post">

                                        <div class="blog-image">
                                            <a href="{{ route('blog-single') }}"><img src="{{ url('public/images/home/23.jpg') }}" alt="" title="News image" /></a>
                                        </div>
                                        <div class="content">
                                           <span class="date">
                                                <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                November 28, 2017
                                            </span>
                                            <span class="comment">
                                                <a href="#"> <i class="fa fa-comment-o" aria-hidden="true"></i> 50
                                                </a>
                                            </span>
                                            <h4><a href="{{ route('blog-single') }}">এবার ডাক্তারদের ফি নির্ধারণ করে দিবে সরকার,থাকছে জেল-জরিমানা</a></h4>
                                             </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="news-post news-post2 related">
                        <li>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                    <div class="item-post">
                                        <div class="row">
                                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 paddimg-right-none">
                                                <a href="{{ route('blog-single') }}"><img src="{{ url('public/images/home/25.jpg') }}" alt="" title="News image" /></a>
                                            </div>
                                          <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                <h4><a href="{{ route('blog-single') }}">কর্মীদের স্বাস্থ্য সেবা কেন্দ্র চালু করছে অ্যাপল</a></h4>
                                                <span class="date">
                                                <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                November 28, 2017
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                    <div class="item-post">
                                        <div class="row">
                                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 paddimg-right-none">
                                                <a href="{{ route('blog-single') }}"><img src="{{ url('public/images/home/27.jpg') }}" alt="" title="News image" /></a>
                                            </div>
                                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                <h4><a href="{{ route('blog-single') }}">কর্মীদের স্বাস্থ্য সেবা কেন্দ্র চালু করছে অ্যাপল</a></h4>
                                                <span class="date">
                                                <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                November 28, 2017
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
					</div>

               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 content">
	               <h3 class="box-heading"style="margin-top:25px;"><a href="#"><span class="h-text">ধর্ম ও জীবন  </span></a></h3>
                    <ul class="news-post news-post2 around-news">
                        <li>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                    <div class="item-post">

                                        <div class="blog-image">
                                            <a href="{{ route('blog-single') }}"><img src="{{ url('public/images/home/24.jpg') }}" alt="" title="News image" /></a>
                                        </div>
                                        <div class="content">
                                           <span class="date">
                                                <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                November 28, 2017
                                            </span>
                                            <span class="comment">
                                                <a href="#"> <i class="fa fa-comment-o" aria-hidden="true"></i> 50
                                                </a>
                                            </span>
                                            <h4><a href="{{ route('blog-single') }}">এবার ডাক্তারদের ফি নির্ধারণ করে দিবে সরকার,থাকছে জেল-জরিমানা</a></h4>
                                             </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <ul class="news-post news-post2 related">
                        <li>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                    <div class="item-post">
                                        <div class="row">
                                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 paddimg-right-none">
                                                <a href="{{ route('blog-single') }}"><img src="{{ url('public/images/home/25.jpg') }}" alt="" title="News image" /></a>
                                            </div>
                                          <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                <h4><a href="{{ route('blog-single') }}">কর্মীদের স্বাস্থ্য সেবা কেন্দ্র চালু করছে অ্যাপল</a></h4>
                                                <span class="date">
                                                <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                November 28, 2017
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                    <div class="item-post">
                                        <div class="row">
                                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 paddimg-right-none">
                                                <a href="{{ route('blog-single') }}"><img src="{{ url('public/images/home/27.jpg') }}" alt="" title="News image" /></a>
                                            </div>
                                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                <h4><a href="{{ route('blog-single') }}">কর্মীদের স্বাস্থ্য সেবা কেন্দ্র চালু করছে অ্যাপল</a></h4>
                                                <span class="date">
                                                <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                November 28, 2017
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
				  </div>
			     </div>
			 <!--Around Area End Here -->
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-left-none">
                    <h3 class="title-bg featured-title">আলোচিত সংবাদ</h3>
                    <div class="sidebar">
                        <ul>
                            <li>
                                <a href="lifestyle.html" class="category-btn hvr-bounce-to-right">Lifestyle</a>
                                <div class="post-image"><a href="{{ route('blog-single') }}"><img src="{{ url('public/images/sidebar/1.jpg') }}" alt="News image" /></a></div>
                                <div class="content">
                                    <h4><a href="{{ route('blog-single') }}"> গৌরব হারানো, লজ্জায় লাল ছাত্রলীগ, সামলাবে কে?</a></h4>
                                    <span class="date">
                                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i> November 28, 2017
                                    </span>
                                    <span class="comment">
                                        <a href="#">
                                            <i class="fa fa-comment-o" aria-hidden="true"></i> 50
                                        </a>
                                    </span>

                                </div>
                            </li>
                            <li>
                                <a href="lifestyle-travel.html" class="category-btn hvr-bounce-to-right">Travel </a>
                                <div class="post-image"><a href="{{ route('blog-single') }}"><img src="{{ url('public/images/sidebar/3.jpg') }}" alt="News image" /></a></div>
                                <div class="content">
                                    <h4><a href="{{ route('blog-single') }}"> গৌরব হারানো, লজ্জায় লাল ছাত্রলীগ, সামলাবে কে?</a></h4>
                                    <span class="date">
                                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i> November 28, 2017
                                    </span>
                                    <span class="comment">
                                        <a href="#">
                                            <i class="fa fa-comment-o" aria-hidden="true"></i> 50
                                        </a>
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="sidebar">
                        <div class="categories-home separator-large3">
                            <h3 class="title-bg">ক্যাটাগরি লিঙ্ক </h3>
							<div style="height:322px;width:100%;font:16px/26px Georgia, Garamond, Serif;overflow:auto;">
                            <ul>
				                 <li><a href="bangladesh.html"><i class="fa fa-angle-right" aria-hidden="true"></i>  সমগ্র বাংলাদেশ <span>70</span></a></li>
                                 <li><a href="bd-politics.html"><i class="fa fa-angle-right" aria-hidden="true"></i> রাজনীতি<span>65</span></a></li>
				                 <li><a href="bd-economy-business.html"><i class="fa fa-angle-right" aria-hidden="true"></i>অর্থ-বাণিজ্য <span>70</span></a></li>

                                <li><a href="international.html"><i class="fa fa-angle-right" aria-hidden="true"></i>  আন্তর্জাতিক <span>70</span></a></li>
				                 <li><a href="sports.html"><i class="fa fa-angle-right" aria-hidden="true"></i>খেলাধুলা<span>70</span></a></li>
                                <li><a href="entertainment.html"><i class="fa fa-angle-right" aria-hidden="true"></i> বিনোদন<span>65</span></a></li>
                                <li><a href="technology.html"><i class="fa fa-angle-right" aria-hidden="true"></i> বিজ্ঞান-প্রযুক্তি<span>65</span></a></li>

                                <li><a href="lifestyle.html"><i class="fa fa-angle-right" aria-hidden="true"></i> লাইফস্টাইল<span>65</span></a></li>
                                <li><a href="lifestyle-health.html"><i class="fa fa-angle-right" aria-hidden="true"></i> স্বাস্থ্যসেবা<span>65</span></a></li>
								<li><a href="lifestyle-travel.html"><i class="fa fa-angle-right" aria-hidden="true"></i>ভ্রমণ পরামর্শ<span>65</span></a></li>

								 <li><a href="category-career.html"><i class="fa fa-angle-right" aria-hidden="true"></i> ক্যারিয়ার<span>45</span></a></li>
								 <li><a href="category-art-literature.html"><i class="fa fa-angle-right" aria-hidden="true"></i> শিল্প-সাহিত্য<span>45</span></a></li>
                                 <li><a href="category-religion.html"><i class="fa fa-angle-right" aria-hidden="true"></i> ধর্ম ও জীবন<span>45</span></a></li>

                                <li><a href="gallery.html"><i class="fa fa-angle-right" aria-hidden="true"></i> গ্যালারি<span>65</span></a></li>
                                <li><a href="videos.html"><i class="fa fa-angle-right" aria-hidden="true"></i> ভিডিও<span>65</span></a></li>

                                <li><a href="blog.html"><i class="fa fa-angle-right" aria-hidden="true"></i> বাংলা ব্লগ<span>65</span></a></li>
                                <li><a href="fable.html"><i class="fa fa-angle-right" aria-hidden="true"></i> উপকথা<span>65</span></a></li>
                                <li><a href="history.html"><i class="fa fa-angle-right" aria-hidden="true"></i> ইতিহাস<span>65</span></a></li>
						   </ul>
                         </div>
				     </div>
                 </div>
            </div>



        </div>
    </div>
	</div>
    <!-- All News Section end Here -->
    @endsection


