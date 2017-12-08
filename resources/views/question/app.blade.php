<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Timeline</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Brilliance Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset ('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- js -->

<script type="text/javascript" src="{{asset('js/jquery-2.1.4.min.js')}}"></script>

<!-- //js -->
<!-- pop-up-box -->
<link href="{{asset('css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- //pop-up-box -->
<!-- font-awesome icons -->
<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet"> 
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Prata" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400i,700,700i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!-- header -->

<script type="text/javascript">
var Sson="{{session()->get('notifi')}}";
	//alert(Sson);
	if(Sson=='1'){


		$(document).ready(function(){
   
        $("#notifi").css("color", "blue");
    
});
		//alert(Sson);

	 	//document.getElementById('notifi').style.Background='green';
	 	
	}


		function go_ques(){

				var Sson="{{session()->forget('notifi')}}";

			$(document).ready(function(){
   
        $("#notifi").css("color", "black");
        
        window.location.replace("/notification/0");
    
});

	}
</script>
	<div class="header-w3ls-agileinfo ">
		
			<div class="wthree_agile_top_header">
				<div class="logo-agileits">
					<h1><a href="/userinfo"><span>K</span>Nowledge Sea <i class="fa fa-graduation-cap" aria-hidden="true"></i></a></h1>
				</div>
				<div class="agileits_w3layouts_sign_in">
					<ul>
					<form action="/logout" method="get">
					{{csrf_field()}}
						
						<li><input data-toggle="modal" data-target="" type="submit" value="Log Out" name="btn_logout" class="active logoutbtn" data-toggle="modal" ></li>
						</form>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="container">
			<div class="w3layouts_agileits_nav_section">
				<nav class="navbar navbar-default">
					<div class="navbar-header navbar-left">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="w3ls__agileinfo_search">
								<form action="#" method="post">
									<input type="search" name="Search" placeholder="Search here..." required="">
									<input type="submit" value=" ">
								</form>
							</div>
					<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					
						<nav>
							<ul class="nav navbar-nav">
								<li class="hvr-rectangle-out"><a href="{{URL::to('/userinfo')}}">Home</a></li>
								
								<li><a href="{{URL::to('/question')}}" class="hvr-rectangle-out ">Post Question</a></li>
								<li><a href="{{URL::to('/question/1')}}" class="hvr-rectangle-out ">See Questions</a></li>
								<li><a href="/exam" class="hvr-rectangle-out ">Exam</a></li>
								<li><a id="notifi" onclick="go_ques()" class="hvr-rectangle-out ">News</a></li>
								<li><a href="/notification/create" class="hvr-rectangle-out ">Rank List</a></li>
								{{csrf_field()}}
								<li><a href="{{URL::to('/userinfo/0')}}" class="hvr-rectangle-out ">My Info</a></li>
							</ul>
							
						</nav>
					</div>
				</nav>	
			</div>
		</div>
	</div>


<!-- //bootstrap-pop-up -->
											
<!-- banner-down-->
			
@section('body')

@show

	


<!-- Footer -->
<div class="footer w3ls">
	<div class="container">
	<!-- <div class="newsletter-agile">
		<form action="#" method="post">
			<p>Send us Your Mail, we'll make sure You Never Miss a Thing!</p>
			<input type="email" name="email" size="30" required="" placeholder="Enter your email here...">
			<input type="submit" value="Subscribe">
		</form>
	</div> -->
		<div class="footer-main">
			<div class="footer-top">
				<div class="col-md-4 ftr-grid fg1">

				<?php

					$nm=str_split(session::get('name'),1);



				?>
					<h3><a href="index.html"><span>{{session::get('name')}}</span></a></h3>
					<p>{{session::get('aboutme')}}.</p>
				</div>
				<div class="col-md-4 ftr-grid fg2 mid-gd">
					<h3>My Address</h3>
					<div class="ftr-address">
						<div class="local">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
						<div class="ftr-text">
							<p>{{session::get('address')}}</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="ftr-address">
						<div class="local">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</div>
						<div class="ftr-text">
							<p>{{session::get('phone')}}</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="ftr-address">
						<div class="local">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="ftr-text">
							<p><a href="{{session::get('email')}}">{{session::get('email')}}</a></p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 ftr-grid fg2">
					<h3>MY SOCIAL LINKS</h3>
					<div class="right-w3l">
						<ul class="top-links">
							<li><a href="{{session::get('facebook')}}"><i class="fa fa-facebook"></i></a></li>
							<li><a href="{{session::get('twitter')}}"><i class="fa fa-twitter"></i></a></li>
							<li><a href="{{session::get('google')}}"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
					<div class="right-w3-2">
						<ul class="text-w3">
							<li><a href="{{session::get('facebook')}}">Facebook</a></li>
							<li><a href="{{session::get('twitter')}}">Twitter</a></li>
							<li><a href="{{session::get('google')}}">Google</a></li>
						</ul>
					</div>
				</div>
			   <div class="clearfix"> </div>
			</div>
			<div class="copyrights">
				<p>&copy; 2017 Knowledge Sea. All Rights Reserved</a> </p>
			</div>
		</div>
	</div>
	
</div>
 
	
	

<!-- Footer -->	

	<!-- start-smoth-scrolling -->
	
<!-- js -->
		<!--//pop-up-box -->
<script type="text/javascript" src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<!--pop-up-box -->
					<script src="{{asset('js/jquery.magnific-popup.js')}}" type="text/javascript"></script>
					<script>
					$(document).ready(function() {
					$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
					});

					});
					</script>
<!-- //pop-up-box -->

<!-- //js -->
<script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->

			<script src="{{asset('js/jzBox.js')}}"></script>

			<!-- Countdown-Timer-JavaScript -->
			<script src="{{asset('js/simplyCountdown.js')}}"></script>
			<script>
				var d = new Date(new Date().getTime() + 948 * 120 * 120 * 2000);

				// default example
				simplyCountdown('.simply-countdown-one', {
					year: d.getFullYear(),
					month: d.getMonth() + 1,
					day: d.getDate()
				});

				// inline example
				simplyCountdown('.simply-countdown-inline', {
					year: d.getFullYear(),
					month: d.getMonth() + 1,
					day: d.getDate(),
					inline: true
				});

				//jQuery example
				$('#simply-countdown-losange').simplyCountdown({
					year: d.getFullYear(),
					month: d.getMonth() + 1,
					day: d.getDate(),
					enableUtc: false
				});
			</script>
		<!-- //Countdown-Timer-JavaScript -->

<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>


</body>
</html>