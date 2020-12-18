@extends('frontend.master')
@section('content')
   <!-- Blog Page Start Here -->
    <div class="account-page-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="border">
                        <form>
                            <fieldset>
                                <div class="row">
                                    <h3>Login</h3>
                                    <div class="form-group">
                                        <label>Username or email address *</label>
                                        <input class="form-control" required="" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Password *</label>
                                        <input class="form-control" required="" type="pass">
                                    </div>
                                    <div class="form-group btn-register">
                                        <span class="lost-pass">Lost your password?</span>
                                        <button class="btn-send" type="submit">Login</button>
                                        <span class="checkbox">
                                          <label>
                                            <input type="checkbox" value=""><span class="cr"><i class="fa cr-icon fa-check" aria-hidden="true"></i></span>Remember Me
                                          </label>
                                        </span>
                                        <span class="login">Or you can login with</span>
                                        <ul class="share-link">
                                            <li class="facebook"><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                            <li class="google"><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="border register">
                        <form>
                            <fieldset>
                                <div class="row">
                                    <h3>Register</h3>
                                    <div class="form-group">
                                        <label>Email address *</label>
                                        <input class="form-control" required="" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Password *</label>
                                        <input class="form-control" required="" type="pass">
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input class="form-control" required="" type="confirm-pass">
                                    </div>
                                    <div class="form-group btn-register">
                                        <button class="btn-send" type="submit">Register</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog page end here -->
    @endsection
