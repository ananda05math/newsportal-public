@extends('frontend.master')
@section('content')
   <!-- Erroe 404 Page Start Here -->
    <div class="error-page-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="erroe-404">
                        <h2>404</h2>
                        <span>Sorry Page Was Not Found</span>
                    </div>
                    <p>The page you are looking is not available or has been removed.
                    Try going to Home Page by using the button below.</p>
                    <a href="index.html">Go To Home Page</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Erroe 404 Page End Here -->
    @endsection
