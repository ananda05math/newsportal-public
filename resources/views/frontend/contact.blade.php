@extends('frontend.master')
@section('content')

   <!-- Contact Us Page Start Here -->
    <div class="single-blog-page-area contact-page-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="google-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9364273.363926433!2d-12.392661146939734!3d55.03971934808962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x25a3b1142c791a9%3A0xc4f8a0433288257a!2sUnited+Kingdom!5e0!3m2!1sen!2sbd!4v1500619264549" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="location-area">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                        <h3>Location</h3>
                        <p>Lorem Ipsum is simply dummy text of the and typesetting industry. Lorem Ipsum is has been the industry’s stasn ndard dummy text ever since the 1500s, when an unknown printer took a galley of it to make. Lorem Ipsum is the simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indus try’s standard they dummy text ever since.</p>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                        <ul>
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i> Mirpur:-1,Block-c,<span>Dhaka-1216, Bangladesh</span></li>
                            <li><i class="fa fa-mobile" aria-hidden="true"></i> Phone: <a href="tel:+3301-341-0476">+8801750738565</a></li>
                            <li><i class="fa fa-fax" aria-hidden="true"></i> Fax:<a href="fax:+3450-875-3313"> +3450-875-3313</a></li>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:info@gmail.com">Primebd180@gmail.com</a></li>
                        </ul>
                        </div>
                    </div>
                    </div>
                    <div class="leave-comments-area">
                        <h3>Contact Us</h3>
                        <div id="form-messages"></div>
                        <form id="contact-form" method="post" action="http://codesless.com/products/news24/news-magazine/contact.php">
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="fname" id="fname" class="form-control" required placeholder="First Name*">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="lname" id="lname" class="form-control" required placeholder="Last Name*">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required placeholder="Email*">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="phone" id="phone" class="form-control" required placeholder="Phone*">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea cols="40" id="message" name="message" rows="10" class="textarea form-control" placeholder="Your Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <button class="btn-send" type="submit">Send Message </button>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="sidebar-area">
                        <div class="like-box-area">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> <span class="like-page">like our facebook page <br/>210,956 likes</span> <span class="like"><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> <span class="like-page">Follow us on twitter<br/>2109 followers</span> <span class="like">
                                <i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i> <span class="like-page">Subscribe to our rss <br/>210,956 likes</span> <span class="like"><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                            </ul>
                        </div>

                    <!--Add Start Here -->
                        <div class="add-section add-section3"style="margin-top:25px;">
                        <img src="images/add/arif3.gif" alt="add image">
                         </div>
                    <!--Add Box End Here -->
                        <div class="recent-post-area hot-news">
                        <h3 class="title-bg">সদ্যপ্রাপ্ত সংবাদ</h3>
                        <ul class="news-post">
                            <li>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                        <div class="item-post">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 paddimg-right-none">
                                                    <img src="images/popular/1.jpg" alt="" title="News image">
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                                    <h4><a href="blog-single.html">লর্ড কারলাইলকে খালেদার আইনি পরামর্শক নিয়োগ</a></h4>
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
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 paddimg-right-none">
                                                    <img src="images/popular/2.jpg" alt="" title="News image">
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                                    <h4><a href="blog-single.html">লর্ড কারলাইলকে খালেদার আইনি পরামর্শক নিয়োগ</a></h4>
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
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 paddimg-right-none">
                                                    <img src="images/popular/3.jpg" alt="" title="News image">
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                                    <h4><a href="blog-single.html">লর্ড কারলাইলকে খালেদার আইনি পরামর্শক নিয়োগ</a></h4>
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
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 paddimg-right-none">
                                                    <img src="images/popular/4.jpg" alt="" title="News image">
                                                </div>
                                                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                                    <h4><a href="blog-single.html">লর্ড কারলাইলকে খালেদার আইনি পরামর্শক নিয়োগ</a></h4>
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
        </div>
    </div>
    <!-- Blog Details Page end here -->
    @endsection
