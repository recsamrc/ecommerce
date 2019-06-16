<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>BookFreak -Ecommerce  | Shop</title>

    <link rel="stylesheet" href="{{ asset('css/frontend_css/core-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/passtrength.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/bootstrap.min.css') }}">
</head>

<body>
    <header class="header_area bg-img background-overlay-white" >
            <!-- Top Header Area Start -->
            <div class="top_header_area">
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-end">

                        <div class="col-12 col-lg-7">
                            <div class="top_single_area d-flex align-items-center">
                                <!-- Logo Area -->
                                <div style="margin: 0px -50px " class="top_logo">
                                    <a href="{{ url('/') }}"><img src="{{ asset('images/frontend_images/core-img/logo.png')}}" alt=""></a>
                                </div>
                                    
                                       
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
        </header>
<section id="form" ><!--form-->
	<div class="container">
        @if(Session::has('flash_message_success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{!! session('flash_message_success') !!}</strong>
                </div>
            @endif
            @if(Session::has('flash_message_error'))
                <div class="alert alert-error alert-block" style="background-color:#f4d2d2">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{!! session('flash_message_error') !!}</strong>
                </div>
            @endif  
                <div class="row">
                	

                    <div class="col-12 col-lg-12 ">
                        <div class="checkout_details_area mt-50 clearfix">
                             <div>
                            <div class="cart-page-heading">
                                <h3>Hello!</h3>
                                <p>Sign in to BookFreak or <a href="{{ url('/userregister') }}">create an account</a></p>
                              
                            </div>

                            <form  style="margin-bottom: 70px;" id="loginForm" name="loginForm" action="{{ url('/user-login') }}" method="POST">{{ csrf_field() }}
                                <div class="row">                       
								   <div class="col-12 mb-4">
                                        <label for="email_address">Email <span>*</span></label>
                                        <input style="width:40%;" type="email" name="email" class="form-control" id="email" value="" >
                                    </div>
									
                                    <div class="col-12 mb-3">
                                        <label for="postcode">Password <span>*</span></label>
                                        <input style="width:40%;" type="password" name="password" class="form-control" id="password" value="" >
                                    </div>
                                    <div class="col-12 mb-3">
                                    <a  href="#"><span style="color:blue">Forget password?</span></a>
                                       </div>  
                                </div>
							<input style="width:40%;"  class="btn karl-checkout-btn" type="submit" value="Log in">
		                         
			
                            </form>
                            </div>
							
                        </div>						
                    </div>

                    

                </div>
            </div>
</section>

    
</footer>
<script src="{{ asset('js/frontend_js/jquery/jquery-2.2.4.min.js') }}"></script>
	<script src="{{ asset('js/frontend_js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/frontend_js/popper.min.js') }}"></script>
	<script src="{{ asset('js/frontend_js/active.js') }}"></script>
    <script src="{{ asset('js/frontend_js/plugins.js') }}"></script>
    <script src="{{ asset('js/frontend_js/main.js') }}"></script>
    <script src="{{ asset('js/frontend_js/jquery.validate.js') }}"></script>
    <script src="{{ asset('js/frontend_js/passtrength.js') }}"></script>
</body>
</html>

