<!--https://pixelgrade.com/themes/pile/?utm_source=creativemarket&utm_medium=presentation&utm_campaign=pile-->
<!--https://codepen.io/ArnaudBalland/pen/vGZKLr-->
<!DOCTYPE html>
<html lang="en-us">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Folio</title>
		<link rel="stylesheet" href="assets/stylesheets/custom.css">
		<link rel="stylesheet" href="assets/stylesheets/reset.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/js/splide-2.4.12/dist/css/themes/splide-skyblue.min.css">
		<script type="text/javascript" src="assets/js/splide-2.4.12/dist/js/splide.min.js"></script>
		<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.3.0/snap.svg-min.js"></script> -->


	</head>
	    <body>
	        <header>
	            <nav>
	                <img class="light-switch" src="/assets/images/wdm-logo.png">
	                <div class="mobile-nav-wrapper">
	                    <i id="bars" onclick="navOn()" class="fas fa-bars"></i>
	                    <div id="mobile-nav" class="mobile-nav mobile-nav-on mobile-nav-off">
	                        <i id="times" onclick="navOff()" class="fas fa-times"></i>
	                        <ul>
    	                        <li><a onclick="navOff()" href="#main">Work</a></li>
    	 												<li><a onclick="navOff()" href="#skills">Skills</a></li>
    	                        <li><a onclick="navOff()" href="#main-background-right-mobile">Contact</a></li>
    	                        <li><a onclick="navOff()" href="#main-background">Home</a></li>
    	                    </ul>
    	                   <i class="fab fa-github"></i>
	                    </div>
	                </div>
	            </nav>
						<div class="header-sections-wrapper">
			           <section id="main-background" class="main-background-1">
			                <!-- <img class="background-one" src="assets/images/code-wall.jpg" alt="code-wall"> -->
											<div id="splide" class="splide" data-splide='{"type":"loop","autoplay":"true"}'>
												<div class="splide__track">
													<ul class="splide__list">
														<li class="splide__slide"><img src="assets/images/red-comp.jpg" alt=""></li>
														<li class="splide__slide"><img src="assets/images/bio-lum-jelly.jpeg" alt=""></li>
														<li class="splide__slide"><img src="assets/images/dock.jpeg" alt=""></li>
														<li class="splide__slide"><img src="assets/images/code.jpeg" alt=""></li>
													</ul>
												</div>
											</div>
			                <div id="floater" class="main-layover-1">
		        	            <h1 id="demo" class="main-layover-item">WebDevelopmental</h1>
		        	            <p class="main-layover-item">The work <em>of</em> Web Developer Thomas Rio</p>
		        	            <a href="work.php" class="main-layover-item main-layover-item-3">SEE WORK</a>
													<a class="down-arrow arrow" href="#main" id="downBounce"><i href="#main" class="fas fa-chevron-down"></i></a>
		    	            </div>
		    	            <!-- <div onclick="scrollRight()"  class="arrows arrows-right"><i class="fas fa-angle-double-right"></i><i class="fas fa-angle-double-right"></i></div> -->
		    	        </section>
									<section id="main-background-right" class="main-background-right">
													<a class="left-arrow arrow" href="#main-background"><i href="#main" class="fas fa-chevron-left"></i></a>
											<!-- modify this form HTML and place wherever you want your form -->
									    <div>
													<div class="heading-contact-wrap">
														<h5 class="heading-main-contact">HAVE A PROJECT?</h5>
														<p>I enjoy both working in a studio as well as taking on solo commissions. So if you want to work with me — don’t hesitate to fill the form below.</p>
													</div>
													<form id="my-form"
													  action="https://formspree.io/f/xgepkvgw"
													  method="POST">
														<div class="label-wrapper-shorts">
															<div class="label-inner-wrap">
																<label>Your Name</label>
																	<input type="text" name="name" placeholder="John Smith" />
															</div>
															<div class="label-inner-wrap">
														  	<label>Interest in</label>
																	<input type="text" name="interest" placeholder="New website" />
															</div>
														</div>
														<div class="label-wrapper-shorts">
															<div class="label-inner-wrap">
																<label>Email:</label>
															  	<input type="email" name="email" placeholder="your@email.com" />
															</div>
															<div class="label-inner-wrap">
																<label>Message:</label>
																	<input type="phone" name="phone" placeholder="867-5309"/>
															</div>
														</div>
														<div class="label-wrapper-long">
															<div class="label-inner-wrap">
																<label>Message:</label>
																	<input type="text" name="message" placeholder="I'm looking for.."/>
															</div>
														</div>
														<button id="my-form-button">SEND</button>
													  <p id="my-form-status"></p>
													</form>
											</div>
											<!-- Place this script at the end of the body tag -->

											<script>
											  window.addEventListener("DOMContentLoaded", function() {

											    // get the form elements defined in your form HTML above

											    var form = document.getElementById("my-form");
											    var button = document.getElementById("my-form-button");
											    var status = document.getElementById("my-form-status");

											    // Success and Error functions for after the form is submitted

											    function success() {
											      form.reset();
											      button.style = "display: none ";
											      status.innerHTML = "Thanks!";
											    }

											    function error() {
											      status.innerHTML = "Oops! There was a problem.";
											    }

											    // handle the form submission event

											    form.addEventListener("submit", function(ev) {
											      ev.preventDefault();
											      var data = new FormData(form);
											      ajax(form.method, form.action, data, success, error);
											    });
											  });

											  // helper function for sending an AJAX request

											  function ajax(method, url, data, success, error) {
											    var xhr = new XMLHttpRequest();
											    xhr.open(method, url);
											    xhr.setRequestHeader("Accept", "application/json");
											    xhr.onreadystatechange = function() {
											      if (xhr.readyState !== XMLHttpRequest.DONE) return;
											      if (xhr.status === 200) {
											        success(xhr.response, xhr.responseType);
											      } else {
											        error(xhr.status, xhr.response, xhr.responseType);
											      }
											    };
											    xhr.send(data);
											  }
											</script>
									</section>
							</div>
					</header>
