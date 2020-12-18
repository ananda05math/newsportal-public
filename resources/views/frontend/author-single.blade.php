@extends('frontend.master')
@section('content')

   <!-- Single Author Page Start Here -->
    <div class="single-team-page-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 single-image">
                    <figure><img class="img-responsive" src="{{ url('public/images/single/toya.jpg') }}" alt="Toya"></figure>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 single-bio">
                    <h2 class="member-name">Toya Gonzalez</h2>
                    <h3 class="member-title">Publisher</h3>
                    <div class="member-desc">
                        <p>
                            Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since thewhen an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised.Simply dummy text of the printing and typesetting industry.
                        </p>
                        <p>
                            It was popularised.Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since thewhen an unknown printer took a galley of type and scrambled it to make.
                        </p>
                    </div>
                    <div class="contact-info">
                        <ul>
                            <li><i class="fa fa-phone"></i><a href="tel: +61 3 8376 6284">+61 3 8376 6284</a></li>
                            <li><i class="fa fa-envelope-o"></i><a href="mailto: jesmin@email.com">jesmin@email.com</a></li>
                            <li><i class="fa fa-share-alt" aria-hidden="true"></i><a href="#">facebook</a>,<a class="social_share" href="#">twitter</a>,<a class="social_share" href="#">linkedin</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid single-experience">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 experience experience-1">
                        <div class="inner text-center">
                            <img src="{{ url('public/images/single/illustrator.png') }}">
                            <h2 class="title">ILLUSTRATOR</h2>
                            <span class="time">09 Years Experience</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 experience experience-2">
                        <div class="inner text-center">
                            <img src="{{ url('public/images/single/editor.png') }}">
                            <h2 class="title">Editor</h2>
                            <span class="time">05 Years Experience</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 experience experience-3">
                        <div class="inner text-center">
                            <img src="{{ url('public/images/single/publisher.png') }}">
                            <h2 class="title">Publisher</h2>
                            <span class="time">02 Years Experience</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Author Slider Start Here -->
            <div class="fetuered-videos team-page-area">
                <div class="container">
                    <div class="row">
                        <div class="view-area">
                            <div class="col-sm-12">
                                <h3 class="title-bg">Related Member</h3>
                            </div>
                        </div>
                    </div>
                    <div id="author-slider-section" class="owl-carousel">
                        <div class="item">
                            <div class="single-videos">
                                <div class="single-member-area spc-o">
                                    <div class="cl-single-member">
                                        <figure><img class="img-responsive" src="{{ url('public/images/team/anthoni.jpg') }}" alt="jon"></figure>
                                        <div class="overlay">
                                            <h2 class="member-name"><a href="author-single.html">Anthoni Markse</a></h2>
                                            <h3 class="member-title">Editor</h3>
                                            <div class="short-desc">
                                                Vmply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since theypesetting industry.
                                            </div>
                                            <div class="social-icons">
                                                <a href="#" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                                <a href="#" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                                <a href="#" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                                                <a href="#" class="google-plus" target="_blank"><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="article">
                                        <h3><a href="author-single.html" data-id="1" class="cl-single-item-popup">Anthoni Markse</a></h3>
                                        <div class="member-title">Editor</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-videos">
                                <div class="single-member-area spc-o">
                                    <div class="cl-single-member">
                                        <figure><img class="img-responsive" src="{{ url('public/images/team/ridisha.jpg') }}" alt="jon"></figure>
                                        <div class="overlay">
                                            <h2 class="member-name"><a href="author-single.html">Anthoni Markse</a></h2>
                                            <h3 class="member-title">Editor</h3>
                                            <div class="short-desc">
                                                Vmply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since theypesetting industry.
                                            </div>
                                            <div class="social-icons">
                                                <a href="#" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                                <a href="#" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                                <a href="#" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                                                <a href="#" class="google-plus" target="_blank"><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="article">
                                        <h3><a href="author-single.html" data-id="1" class="cl-single-item-popup">Anthoni Markse</a></h3>
                                        <div class="member-title">Editor</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-videos">
                                <div class="single-member-area spc-o">
                                    <div class="cl-single-member">
                                        <figure><img class="img-responsive" src="{{ url('public/images/team/rashid.jpg') }}" alt="jon"></figure>
                                        <div class="overlay">
                                            <h2 class="member-name"><a href="author-single.html">Anthoni Markse</a></h2>
                                            <h3 class="member-title">Editor</h3>
                                            <div class="short-desc">
                                                Vmply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since theypesetting industry.
                                            </div>
                                            <div class="social-icons">
                                                <a href="#" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                                <a href="#" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                                <a href="#" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                                                <a href="#" class="google-plus" target="_blank"><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="article">
                                        <h3><a href="author-single.html" data-id="1" class="cl-single-item-popup">Anthoni Markse</a></h3>
                                        <div class="member-title">Editor</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="single-videos">
                                <div class="single-member-area spc-o">
                                    <div class="cl-single-member">
                                        <figure><img class="img-responsive" src="{{ url('public/images/team/hussy.jpg') }}" alt="jon"></figure>
                                        <div class="overlay">
                                            <h2 class="member-name"><a href="author-single.html">Anthoni Markse</a></h2>
                                            <h3 class="member-title">Editor</h3>
                                            <div class="short-desc">
                                                Vmply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since theypesetting industry.
                                            </div>
                                            <div class="social-icons">
                                                <a href="#" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                                <a href="#" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                                <a href="#" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                                                <a href="#" class="google-plus" target="_blank"><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="article">
                                        <h3><a href="author-single.html" data-id="1" class="cl-single-item-popup">Anthoni Markse</a></h3>
                                        <div class="member-title">Editor</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-videos">
                                <div class="single-member-area spc-o">
                                    <div class="cl-single-member">
                                        <figure><img class="img-responsive" src="{{ url('public/images/team/raisha.jpg') }}" alt="jon"></figure>
                                        <div class="overlay">
                                            <h2 class="member-name"><a href="author-single.html">Anthoni Markse</a></h2>
                                            <h3 class="member-title">Editor</h3>
                                            <div class="short-desc">
                                                Vmply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since theypesetting industry.
                                            </div>
                                            <div class="social-icons">
                                                <a href="#" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                                <a href="#" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                                <a href="#" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                                                <a href="#" class="google-plus" target="_blank"><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="article">
                                        <h3><a href="author-single.html" data-id="1" class="cl-single-item-popup">Anthoni Markse</a></h3>
                                        <div class="member-title">Editor</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <!-- Author Slider End Here -->
    </div>
    @endsection
