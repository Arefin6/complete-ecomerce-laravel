<!DOCTYPE html>
<html lang="en">
 <head>
    <title>Vegefoods  Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('frontend')}}/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/animate.css">
    
    <link rel="stylesheet" href="{{asset('frontend')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/magnific-popup.css">

    <link rel="stylesheet" href="{{asset('frontend')}}/css/aos.css">

    <link rel="stylesheet" href="{{asset('frontend')}}/css/ionicons.min.css">

    <link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="{{asset('frontend')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/icomoon.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/style.css">
  </head>
  <body class="goto-here">
		<div class="py-1 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+ 1235 2355 98</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">youremail@email.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">3-5 Business days delivery &amp; Free Returns</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    @include('includes.navbar')
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('{{asset('frontend')}}/images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Checkout</span></p>
            <h1 class="mb-0 bread">Checkout</h1>
          </div>
        </div>
      </div>
    </div>

    
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 ftco-animate">
				<form action="{{route('checkout.store')}}"  id="checkout-form" method="POST" class="billing-form">
						{{csrf_field()}}	
						<h3 class="mb-4 billing-heading">Billing Details</h3>
						@if(Session::has('error'))
						    <div class="alert alert-danger">{{Session::get('error')}} {{Session::put('error',null)}}</div>
						@endif
	          	<div class="row align-items-end">
	          		<div class="col-md-12">
	                <div class="form-group">
	                	<label for="name">Full Name</label>
	                  <input type="text" name="name" class="form-control" placeholder="name">
	                </div>
	              </div>
	              
                <div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
		            		<label for="address">Address</label>
							<input type="text" name="address" class="form-control" placeholder="Address">
		                 
		            	</div>
		            </div>
		            
		            
					<div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
		            		<label for="card-name">Name On Card</label>
							<input id="card-name" type="text" name="NameOnCard" class="form-control" placeholder="Name On Card">
		                 
		            	</div>
					</div>
					
					<div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
		            		<label for="card-number">Card Number</label>
							<input id="card-number" type="text" name="card-number" class="form-control" placeholder="card-number">
		                 
		            	</div>
		            </div>
		            
		            <div class="w-100"></div>
		            <div class="col-md-6">
	                <div class="form-group">
	                	<label for="card-expiry-month">Exp Month</label>
	                  <input  id ="card-expiry-month" type="text" name="expMonth" class="form-control" placeholder="exp-month">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="card-expiry-year">Exp Year</label>
	                  <input  id ="card-expiry-year" type="text" name="exp-Year" class="form-control" placeholder="exp-Year">
	                </div>
                </div>
                <div class="w-100"></div>
                <div class="col-md-12">
                	<div class="form-group">
					<label for="card-cvc">CVC</label>
	                  <input  id="card-cvc" type="text" name="CVC" class="form-control" placeholder="CVC">				
					</div>
				</div>
				<button type="submit" class="btn btn-primary">Place Order</button>
	        </div>
	          </form><!-- END -->
					</div>
					<div class="col-xl-5">
	          <div class="row mt-5 pt-3">
	          	<div class="col-md-12 d-flex mb-5">
	          		<div class="cart-detail cart-total p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Cart Total</h3>
	          			<p class="d-flex">
		    						<span>Subtotal</span>
		    						<span>$20.60</span>
		    					</p>
		    					<p class="d-flex">
		    						<span>Delivery</span>
		    						<span>$0.00</span>
		    					</p>
		    					<p class="d-flex">
		    						<span>Discount</span>
		    						<span>$3.00</span>
		    					</p>
		    					<hr>
		    					<p class="d-flex total-price">
		    						<span>Total</span>
		    						<span>${{Session::get('cart')->totalPrice}}</span>
		    					</p>
								</div>
	          	</div>
	          	
	          </div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->

		<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
          	<h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
          	<span>Get e-mail updates about our latest shops and special offers</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <footer class="ftco-footer ftco-section">
      <div class="container">
      	<div class="row">
      		<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Vegefoods</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Shop</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Journal</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Help</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
	                <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
	                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
	                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
	              </ul>
	              <ul class="list-unstyled">
	                <li><a href="#" class="py-2 d-block">FAQs</a></li>
	                <li><a href="#" class="py-2 d-block">Contact</a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
          </div>
        </div>
      </div>
    </footer>
    
  

	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

	

<script src="https://js.stripe.com/v2/"></script>

<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>

<script src="src/js/checkout.js"></script>

<script src="{{asset('frontend')}}/js/jquery.min.js"></script>
<script src="{{asset('frontend')}}/js/jquery-migrate-3.0.1.min.js"></script>
<script src="{{asset('frontend')}}/js/popper.min.js"></script>
<script src="{{asset('frontend')}}/js/bootstrap.min.js"></script>
<script src="{{asset('frontend')}}/js/jquery.easing.1.3.js"></script>
<script src="{{asset('frontend')}}/js/jquery.waypoints.min.js"></script>
<script src="{{asset('frontend')}}/js/jquery.stellar.min.js"></script>
<script src="{{asset('frontend')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('frontend')}}/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('frontend')}}/js/aos.js"></script>
<script src="{{asset('frontend')}}/js/jquery.animateNumber.min.js"></script>
<script src="{{asset('frontend')}}/js/bootstrap-datepicker.js"></script>
<script src="{{asset('frontend')}}/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{asset('frontend')}}/js/google-map.js"></script>
<script src="{{asset('frontend')}}/js/main.js"></script>

<script>
	  $(document).ready(function(){

	  var quantitiy=0;
		 $('.quantity-right-plus').click(function(e){
			  
			  // Stop acting like a button
			  e.preventDefault();
			  // Get the field name
			  var quantity = parseInt($('#quantity').val());
			  
			  // If is not undefined
				  
				  $('#quantity').val(quantity + 1);

				
				  // Increment
			  
		  });

		   $('.quantity-left-minus').click(function(e){
			  // Stop acting like a button
			  e.preventDefault();
			  // Get the field name
			  var quantity = parseInt($('#quantity').val());
			  
			  // If is not undefined
			
				  // Increment
				  if(quantity>0){
				  $('#quantity').val(quantity - 1);
				  }
		  });
		  
	  });
  </script>
    
  </body>
</html>