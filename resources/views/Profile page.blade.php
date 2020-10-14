<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Profile Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="/Profile page/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/Profile page/css/animate.css">
    
    <link rel="stylesheet" href="/Profile page/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/Profile page/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/Profile page/css/magnific-popup.css">

    <link rel="stylesheet" href="/Profile page/css/aos.css">

    <link rel="stylesheet" href="/Profile page/css/ionicons.min.css">
    
    <link rel="stylesheet" href="/Profile page/css/flaticon.css">
    <link rel="stylesheet" href="/Profile page/css/icomoon.css">
    <link rel="stylesheet" href="/Profile page/css/style.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand">{{$student->username}}</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="\Landing\{{$student->id}}" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="#blog-section" class="nav-link"><span>Achievement</span></a></li>
			  <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Mail</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	  <section class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
          <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-center">
          	<div class="text text-center">
          		<span class="subheading">Hey! I am</span>
		  				<h1>{{$student->username}}</h1>
			  				<h2>I'm a 
								  <span
								     class="txt-rotate"
								     data-period="2000"
								     data-rotate='[ "Student." ]'></span>
								</h2>
							</div>
            </div>
          </div>
        </div>
      </div>
      <div class="mouse">
				<a href="#" class="mouse-icon">
					<div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
				</a>
			</div>
    </section>

    <section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
    	<div class="container">
    		<div class="row d-flex no-gutters">
    			<div class="col-md-6 col-lg-6 d-flex">
    				<div class="img-about img d-flex align-items-stretch">
    					<div class="overlay"></div>
	    				<div class="img d-flex" style="background-image:url('/Profile page/images/about.jpg');">
	    				</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-6 pl-md-5 py-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<h1 class="big">About</h1>
		            <h2 class="mb-4">About Me</h2>
		            <p>{{$student->about}}</p>
		            <ul class="about-info mt-4 px-md-0 px-2">
		            	<li class="d-flex"><span>Name:</span> <span>{{$student->username}}</span></li>
		            	<li class="d-flex"><span>Date of birth:</span> <span>{{$student->birth}}</span></li>
		            	<li class="d-flex"><span>Address:</span> <span>{{$student->address}}</span></li>
		            	<li class="d-flex"><span>Email:</span> <span>{{$student->email}}</span></li>
		            	<li class="d-flex"><span>Phone: </span> <span>{{$student->phone}}</span></li>
						<li class="d-flex"><span>Occupation: </span> <span>{{$student->occupation}}</span></li>
		            </ul>
		          </div>
		        </div>
	          <div class="counter-wrap ftco-animate d-flex mt-md-3">
              <div class="text">
                <p><a href="\new" class="btn btn-primary py-3 px-3">Update</a></p>
              </div>
	          </div>
	        </div>
        </div>
    	</div>
    </section>

   
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="/Profile page/js/jquery.min.js"></script>
  <script src="/Profile page/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/Profile page/js/popper.min.js"></script>
  <script src="/Profile page/js/bootstrap.min.js"></script>
  <script src="/Profile page/js/jquery.easing.1.3.js"></script>
  <script src="/Profile page/js/jquery.waypoints.min.js"></script>
  <script src="/Profile page/js/jquery.stellar.min.js"></script>
  <script src="/Profile page/js/owl.carousel.min.js"></script>
  <script src="/Profile page/js/jquery.magnific-popup.min.js"></script>
  <script src="/Profile page/js/aos.js"></script>
  <script src="/Profile page/js/jquery.animateNumber.min.js"></script>
  <script src="/Profile page/js/scrollax.min.js"></script>
  
  <script src="/Profile page/js/main.js"></script>
    
  </body>
</html>