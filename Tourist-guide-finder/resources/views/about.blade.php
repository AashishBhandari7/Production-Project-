<!DOCTYPE html>
<html lang="en">
<head>
	<title>E-Home</title>
	<meta charset="UTF-8">
	<meta name="description" content="LERAMIZ Landing Page Template">
	<meta name="keywords" content="LERAMIZ, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="img/icon.ico" rel="shortcut icon"/>


	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 header-top-left">
						<div class="top-info">
							<i class="fa fa-phone"></i>
							(+77) 9867313725
						</div>
						<div class="top-info">
							<i class="fa fa-envelope"></i>
							touristguidefinder@gmail.com
						</div>
					</div>
					<div class="col-lg-6 text-lg-right header-top-right">
						<div class="top-social">
							<a href=""><i class="fa fa-facebook"></i></a>
							<a href=""><i class="fa fa-twitter"></i></a>
							<a href=""><i class="fa fa-instagram"></i></a>
							<a href=""><i class="fa fa-pinterest"></i></a>
							<a href=""><i class="fa fa-linkedin"></i></a>
						</div>
						<div class="user-panel">
							<a href="#" id="registerbutton"><i class="fa fa-user-circle-o"></i> Register</a>
							<a href="#" id="logbutton"><i class="fa fa-sign-in"></i> Login</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="site-navbar">
						<a href="#" class="site-logo"><img style="margin-top: -75px;" src="img/logo.png" alt=""></a>
						<div class="nav-switch">
							<i class="fa fa-bars"></i>
						</div>
						<ul class="main-menu">
							<li><a href="{{route('index')}}">Home</a></li>
							<li><a href="{{route('about')}}">About Us</a></li>
							<li><a href="{{route('postpage')}}">Guides</a></li>
							<li><a href="{{route('blog')}}">Blog</a></li>
							<li><a href="{{route('contact')}}">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container text-white">
			<h2>About us</h2>
		</div>
	</section>
	<!--  Page top end -->

	<!-- Breadcrumb -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="{{route('index')}}"><i class="fa fa-home"></i>Home</a>
			<span><i class="fa fa-angle-right"></i>About us</span>
		</div>
	</div>

	<!-- page -->
	<section class="page-section">
		<div class="container">
			<img class="mb-5" src="img/about.jpg" alt="">
			<div class="row about-text">
				<div class="col-xl-6 about-text-left">
					<h5>ABOUT US</h5>
					<p>Tourist Guide finder is a national tourism organization of Nepal it is a new concept for finding tourist guides by yourself  by an Act of Parliament in the form of partnership between the Government of Nepal and private sector tourism industry  to develop and market Nepal as an attractive tourist destination. The Board provides platform for vision-drawn leadership for Nepal’s tourism sector by integrating Government commitment with the dynamism of private sector.

TGF is promoting Nepal in the domestic and international market and is working toward positioning the image of the country. It also aims to regulate product development activities. Fund for TGF is collected in the form of Tourist Service Fee from departing foreign passengers at the Tribhuvan International Airport, Kathmandu, thus keeping it financially independent. The Board chaired by the Secretary at the Ministry of Tourism and Civil Aviation consists of 11 Board Members with five Government representatives, five private sector representatives and the Chief Executive Officer.

To learn more about TGF and its executive committee board members, please click here..</p>
				</div>
				<div class="col-xl-6 about-text-right">
					<h5>OUR QUALITY</h5>
					<p>We are proud that we have genuine tourist guides. They are experienced and motivated or in other words you will know that they were born for this. They are well trained and they know what tourists wants. We also let you talk to them and know them before travelling with them. some of our qualities are listed below:</p>
					<ul class="about-list">
						<li><i class="fa fa-check-circle-o"></i>Tourists can reach to the guides by using this site..</li>
						<li><i class="fa fa-check-circle-o"></i>. </li>
						<li><i class="fa fa-check-circle-o"></i>You can discuss where are you travelling directly with the guide </li>
						<li><i class="fa fa-check-circle-o"></i>The guide will provide you with travelling vehicle and accomodation service</li>
					</ul>
				</div>
			</div>
		</div>
		
		<!-- Review section -->
		<section class="review-section set-bg" data-setbg="img/review-bg.jpg">
			<div class="container">
				<div class="review-slider owl-carousel">
					<div class="review-item text-white">
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<p>“Sudeep is motivated travel guide himself who made this web application possible by his determination of guiding for past several year.”</p>
						<h5>Sudeep Adhikari</h5>
						<span>TGF's Director</span>
						<div class="clint-pic set-bg" data-setbg="img/review/1.jpg"></div>
					</div>
					<div class="review-item text-white">
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<p>“Aashish is the founder of this web application. He was the one who thought the concept of this site on the occasion of visit Nepal 2020”</p>
						<h5>Aashish Bhandari</h5>
						<span>TGF’s Founder</span>
						<div class="clint-pic set-bg" data-setbg="img/review/2.jpg"></div>
					</div>
					<div class="review-item text-white">
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<p>“Sudeep is motivated travel guide himself who made this web application possible by his determination of guiding for past several year.”</p>
						<h5>Stacy Mc Neeley</h5>
						<span>TGF’s Director</span>
						<div class="clint-pic set-bg" data-setbg="img/review/1.jpg"></div>
					</div>
				</div>
			</div>
		</section>
		<!-- Review section end-->


		<!-- Team section -->
		<section class="team-section spad pb-0">
			<div class="container">
				<div class="section-title text-center">
					<h3>OUR AGENTS</h3>
					<p>Our directory of real estate agents who can help you</p>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="team-member">
							<div class="member-pic">
								<img src="img/team/1.jpg" alt="#">
								<div class="member-social">
									<a href=""><i class="fa fa-facebook"></i></a>
									<a href=""><i class="fa fa-instagram"></i></a>
									<a href=""><i class="fa fa-twitter"></i></a>
								</div>
							</div>
							<div class="member-info">
								<h5>Raaz Karki</h5>
								<span>Tourism Board Chairman</span>
								<div class="member-contact">
									<p><i class="fa fa-phone"></i>(+977) 9865263254</p>
									<p><i class="fa fa-envelope"></i>karkiraaj.com</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="team-member">
							<div class="member-pic">
								<img src="img/team/2.jpg" alt="#">
								<div class="member-social">
									<a href=""><i class="fa fa-facebook"></i></a>
									<a href=""><i class="fa fa-instagram"></i></a>
									<a href=""><i class="fa fa-twitter"></i></a>
								</div>
							</div>
							<div class="member-info">
								<h5>Avisek KC</h5>
								<span>Researcher</span>
								<div class="member-contact">
									<p><i class="fa fa-phone"></i>(+977) 9865236547</p>
									<p><i class="fa fa-envelope"></i>avisek365@gmail.com</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="team-member">
							<div class="member-pic">
								<img src="img/team/3.jpg" alt="#">
								<div class="member-social">
									<a href=""><i class="fa fa-facebook"></i></a>
									<a href=""><i class="fa fa-instagram"></i></a>
									<a href=""><i class="fa fa-twitter"></i></a>
								</div>
							</div>
							<div class="member-info">
								<h5>Sagar Gaihre</h5>
								<span>Tourism Education Head</span>
								<div class="member-contact">
									<p><i class="fa fa-phone"></i>(+977) 9868523145</p>
									<p><i class="fa fa-envelope"></i>Sgrrgaire@gmail.com</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="team-member">
							<div class="member-pic">
								<img src="img/team/4.jpg" alt="#">
								<div class="member-social">
									<a href=""><i class="fa fa-facebook"></i></a>
									<a href=""><i class="fa fa-instagram"></i></a>
									<a href=""><i class="fa fa-twitter"></i></a>
								</div>
							</div>
							<div class="member-info">
								<h5>Santosh Shrestha</h5>
								<span>MD of Timur Tourism College </span>
								<div class="member-contact">
									<p><i class="fa fa-phone"></i>(+977) 9865231452</p>
									<p><i class="fa fa-envelope"></i>santoseeestha@gmail.com</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Team section end-->
	</section>
	<!-- page end -->


	<!-- Clients section -->
	<div class="clients-section">
		<div class="container">
			<div class="clients-slider owl-carousel">
				<a href="#">
					<img src="img/partner/1.png" alt="">
				</a>
				<a href="#">
					<img src="img/partner/2.png" alt="">
				</a>
				<a href="#">
					<img src="img/partner/3.png" alt="">
				</a>
				<a href="#">
					<img src="img/partner/4.png" alt="">
				</a>
				<a href="#">
					<img src="img/partner/5.png" alt="">
				</a>
			</div>
		</div>
	</div>
	<!-- Clients section end -->


	<!-- Footer section -->
	<footer class="footer-section set-bg" data-setbg="img/footer-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 footer-widget">
					<img src="img/logo.png" alt="">
					<p>You have the right to choose who shows you the way</p>
					<div class="social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 footer-widget">
					<div class="contact-widget">
						<h5 class="fw-title">CONTACT US</h5>
						<p><i class="fa fa-map-marker"></i>Tinkune Kathmandu </p>
						<p><i class="fa fa-phone"></i>(+977) 9867313725</p>
						<p><i class="fa fa-envelope"></i>touristguidefinder@gmail.com</p>
						<p><i class="fa fa-clock-o"></i>Mon - Sat, 08 AM - 06 PM</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 footer-widget">
					<div class="double-menu-widget">
						<h5 class="fw-title">POPULAR PLACES</h5>
						<ul>
							<li><a href="">Pokhara</a></li>
							<li><a href="">Chitwan</a></li>
							<li><a href="">Kathmandu</a></li>
							<li><a href="">Rasuwa</a></li>
							<li><a href="">Lumbini</a></li>
						</ul>
						<ul>
							<li><a href="">Morang</a></li>
							<li><a href="">Solukhumbu</a></li>
							<li><a href="">Annapurna</a></li>
							<li><a href="">Makalu</a></li>
							<li><a href="">Doti</a></li>
						</ul>
					</div>
				</div>
				
			</div>
			<div class="footer-bottom">
				<div class="footer-nav">
					<ul>
							<li><a href="{{route('index')}}">Home</a></li>
							<li><a href="{{route('blog')}}">About Us</a></li>
							<li><a href="{{route('postpage')}}">Properties</a></li>
							<li><a href="{{route('blog')}}">Blog</a></li>
							<li><a href="{{route('contact')}}">Contact</a></li>
					</ul>
				</div>
				<span style="color:white">Developer : Aashish Bhandari</span>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->

<!-- Modal for Button-->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog form-dark" role="document">
    <!--Content-->
    <div class="modal-content card card-image" style="background-image: url('img/modelimg.jpg');">
      <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
        <!--Header-->
        <div class="modal-header text-center pb-4">
          <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel"><strong>SIGN</strong> <a
              class="green-text font-weight-bold"><strong> UP</strong></a></h3>
          <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!--Body-->
        <div class="modal-body">
          <!--Body-->
        
          <!--Grid row-->
          <div class="row d-flex align-items-center mb-4">
            <!--Grid column-->
            <div class="text-center mb-3 col-md-12">
              <a href="{{route('signupadvisor')}} "><button type="button" class="btn btn-success btn-block btn-rounded z-depth-1">Tourist Guide</button></a>
            </div>
            <!--Grid column-->
          </div>
		  <!--Grid row-->
		    <!--Grid row-->
			<div class="row d-flex align-items-center mb-4">
            <!--Grid column-->
            <div class="text-center mb-3 col-md-12">
              <a href="{{route('signuptenet')}} "><button type="button" class="btn btn-success btn-block btn-rounded z-depth-1">Tourist</button></a>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col-md-12">
              <p  class="font-small white-text d-flex justify-content-end">Have an account? <a href="#" id="loginform" class="green-text ml-1 font-weight-bold">
                  Log in</a></p>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->

        </div>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Modal for Button -->
<!-- Modal Login -->	
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog form-dark" role="document">
	<!--Content-->
	@if(Session::has('msg'))
			<span style="background-color:black; padding:10px; color:white; font-weight:bold; border-radius=10px;">{{Session('msg')}}</span>
	@endif
    <div class="modal-content card card-image" style="background-image: url('img/modelimg.jpg');">
      <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
        <!--Header-->
        <div class="modal-header text-center pb-4">
          <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel"><strong>SIGN</strong> <a
              class="green-text font-weight-bold"><strong> In</strong></a></h3>
          <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!--Body-->
        <div class="modal-body">
          <!--Body-->
		  <form action="{{route('login')}}" method="post" autocomplete="off">
		  @csrf
		@if ($errors->any())
			<div class="alert alert-danger alert-dismissable">
				<a class="panel-close close" data-dismiss="alert">×</a>
				@foreach ($errors->all() as $error)
					<div class="glyphicon glyphicon-warning-sign">&nbsp</div><b>{{ $error }}</b>
					<br />
				@endforeach
			</div>
		@endif
          <div class="md-form mb-5">
            <input type="email" name="email" id="Form-email5" class="form-control validate white-text">
            <label data-error="wrong" data-success="right" for="Form-email5">Your email</label>
          </div>
          <div class="md-form pb-3">
            <input type="password" name="pass"  id="Form-pass5" class="form-control validate white-text">
            <label data-error="wrong" data-success="right" for="Form-pass5">Your password</label>
          </div>
          <!--Grid row-->
          <div class="row d-flex align-items-center mb-4">
            <!--Grid column-->
            <div class="text-center mb-3 col-md-12">
              <button type="submit" class="btn btn-success btn-block btn-rounded z-depth-1">Sign in</button>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
		  </form>
          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col-md-12">
              <p  class="font-small white-text d-flex justify-content-end">Create Account? <a href="#" id="createsignup" class="green-text ml-1 font-weight-bold">
                  Signup</a></p>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </div>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Modal for signin-->



                                        
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/main.js"></script>

	<script> 
		$('#registerbutton').on('click', function() {
    //  alert("hello"); 
     $('#register').modal('show');  
 });
 $('#logbutton').on('click', function() {
    //  alert("hello"); 
     $('#login').modal('show');  
 });
 $('#createsignup').on('click', function() {
	//  alert("hello"); 
	$('#login').modal('hide');
     $('#register').modal('show');  
 });
 $('#loginform').on('click', function() {
	//  alert("hello"); 
	$('#register').modal('hide');
     $('#login').modal('show');  
 });
	</script>

</body>
</html>