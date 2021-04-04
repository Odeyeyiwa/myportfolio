<!DOCTYPE html>
	<html lang="en">
	<head>
		<title>omotoyosiportfolio.com</title>
			<meta name="keyword" content="">
			<meta name="description" content="">
			<meta name="author" content="">
			<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
				<style type="text/css">
					.info{
						position: relative;
						top: 40%;
					}
					#typing{
						width: .15em;
						white-space: nowrap;
						overflow: hidden;
					}
					#typing{
						width: 30em;
						opacity: 0;
						-webkit-animation: type 2s steps(50, end);
						animation: type 4s steps(50, end);
						-webkit-animation-delay: 1s;
						animation-delay: 1s;
						-webkit-animation-fill-mode: forwards;
						animation-fill-mode: forwards;
					}
					@keyframes type{
						0% {width: 0;}
						1% {opacity: 1;}
						100% {opacity: 1;
						border: none;
						}
					}
					@-webkit-keyframes type{
						0% {width: 0;}
						1% {opacity: 1;}
						100% {opacity: 1;
						border: none;
						}
					}
					@keyframes blink{
						50%{
							border-color: transparent;
						}
					}
					@-webkit-keyframes blink{
						50%{
							border-color: transparent;
						}
					}
					.socials{
						list-style-type:none;
					}
					#home{
						background-color:black;
					}
					#skills{
						background-color:black;
					}
					#experience{
						background-color:black;
					}
					#about{
						background-color: rgb(212,212,212);
					}
					#project{
						background-color: rgb(212,212,212);
					}

				</style>
				<link rel="stylesheet" type="text/css" href="<?php echo asset('bootstrap.css');?>">
				<link rel="stylesheet" type="text/css" href="<?php echo asset('icons/css/all.css');?>">
	</head>
	<body>
	<div class="container-fluid p-0">
		<div class="container-fluid fixed-top" id="home">
			<nav class="navbar navbar-expand-md navbar-dark">
				<div class="container-fluid">
					<a class="navbar-brand fw-bolder" href="#top" style="font-family:montserrat;color:white;font-size:30px;"><span class="text-danger">O</span>MOTOYOSI.</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
					<ul class="navbar-nav align-item-end">
						<li class="nav-item active">
						  <a class="nav-link text-white ml-2" style="font-weight: bold" href="#top">Home<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
						  <a class="nav-link text-white ml-2" style="font-weight: bold" href="#about">About</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link text-white ml-2" style="font-weight: bold" href="#skills">Skills</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link text-white ml-2" style="font-weight: bold" href="#experience">Experience</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link text-white ml-2" style="font-weight: bold" href="#project">Projects</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link text-white ml-2" href="#contact"><i class="fa fa-envelope"></i></a>
						</li>
						<li class="nav-item text-white">
						  <a class="btn btn-light btn-sm ml-2" href="#"
							  onclick="
							  confirm('If you have a job to offer me, kindly reach out in the contact section');
							  var yourname=prompt('What is your name?');
							  alert('Thank you for reaching out' +' '+ yourname + ', kindly drop a message in the contact form and i will get bact to you soonest.'); 
						  ">HIRE ME</a>
						</li>
					  </ul>
				  </div>
				</div>
			  </nav>
		</div>
		<div class="container-fluid p-0 m-0" id="top">
			<div class="row">
				<div class="col">
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img src="<?php echo asset('images/banner4.jpg');?>" class="d-block w-100" alt="...">
							<div class="carousel-caption info">
					        <h2 id="typing" style="font-size: 2.8vw">HI! I'M ODEYEYIWA OMOTOYOSI, I AM A PHP DEVELOPER</h2><br>
					        <!-- Button trigger modal -->
							<a href="#"class="btn btn-light" data-toggle="modal" data-target="#exampleModal" style="font-size: 2.8vw">
							  CONTACT ME <i class="fa fa-phone-alt"></i>
							</a>
					      	</div>
					    </div>
					    <div class="carousel-item">
					      <img src="<?php echo asset('images/banner4.jpg');?>" class="d-block w-100 img-fluid" alt="...">
						<div class="carousel-caption info">
					        <h2 style="font-size: 2.8vw">You Can Always Find Me Anywhere</h2>
					        <h3 style="font-size: 2.8vw">Designing And Coding Intersects</h3>
							<a href="tel:+2348098745461" class="ml-md-5 text-white"><i class="fa fa-phone" style="font-size: 2vw;"></i></a>
					        <a href="https://www.facebook.com/odeyeyiwa.omotoyosi/" class="ml-md-5 text-white"><i class="fab fa-facebook-f" style="font-size: 2vw;"></i>
							</a>
							<a href="https://twitter.com/hallie_maa/" class="ml-md-5 text-white"><i class="fab fa-twitter" style="font-size: 2vw;"></i></a>
							<a href="mailto:omotoyosi.odeyeyiwa@gmail.com" class="ml-md-5 text-white"><i class="fa fa-envelope" style="font-size: 2vw;"></i></a>
							<a href="https://www.linkedin.com/in/omotoyosi-odeyeyiwa-977ab6183/" class="ml-md-5 text-white"><i class="fab fa-linkedin-in" style="font-size: 2vw;"></i></a>
							<a href="https://github.com/Odeyeyiwa" class="ml-md-5 text-white"><i class="fab fa-github" style="font-size: 2vw;"></i></a>	<br>
					         <a class="btn btn-light mt-3" href="#about" style="font-size: 2.8vw">VIEW MY PROFILE</a>
					      	</div>
					    </div>
					    <div class="carousel-item">
					      <img src="<?php echo asset('images/banner4.jpg');?>" class="d-block w-100" alt="...">
						<div class="carousel-caption info">
					        <h3 style="font-size: 2.8vw">I SPECIALIZE IN WEBSITE DESIGNS AND ADD VALUE BY SOLVING PROBLEMS WITH LINES OF CODES</h3>
					        <a class="btn btn-light mt-3" href="#project" style="font-size: 2.8vw">CHECK MY WORK</a>
					      	</div>
					    </div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					    {{-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> --}}
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					    {{-- <span class="carousel-control-next-icon" aria-hidden="true"></span> --}}
					    <span class="sr-only">Next</span>
					  </a>
					</div>
				</div>
			</div>
		</div>

		<div class="container-fluid" id="experience">
			<div class="row text-white">
				<div class="col-md-5 col-10 offset-1 m-auto">
					<h1 class="text-danger">EXPERIENCE</h1>
					<p class="text-white p-2">I am a full stack web developer, my area of expertise is PHP, although i am also knowledgeable on both front end
						(that is the client aspect of the web) and back end. Asides from knowing the likes of HTML, CSS, JAVASCRIPT, REACT, JQUERY, AJAX, PHP, etc. i also have skills in graphic designing with the likes of canvas. I can build fully responsive web applications. Visit my <a href="https://www.linkedin.com/in/omotoyosi-odeyeyiwa-977ab6183/"><i class="fab fa-linkedin lass"></i></a> for more details, you can also check some of my other works out on my github <a href="https://github.com/Odeyeyiwa" class="text-white"><i class="fab fa-github" style="font-size: 2vw;"></i></a> or you can also just choose to <a href="mailto:omotoyosi.odeyeyiwa@gmail.com"><i class="fa fa-envelope lass"></i></a> me for any other additional information. I am available for freelance work, collaborations, employment and different programming opportunities.</p>
				</div>
				<div class="col-md-5 col-10 offset-1 text-white">
			    	<img src="<?php echo asset('images/red.gif');?>" alt="" class="img-fluid">
				</div>
			</div>
				<div class="row mx-0 my-0 text-white">
				<div class="col-md-4 col-12 mt-4">
					  <div class="card-body m-0">
							<h5 class="card-title text-danger text-center"><i class="fa fa-layer-group text-white"></i> Full Stack Web Development</h5>
					    	<p class="card-text p-3 text-center">I am knowledgeable in the following MySQL, JavaScipt, CSS, HTML etc. I have also been opportuned to explore PHP/LARAVEL development. I can develop both the frontend and backend of a web app</p>
					</div>
				</div>
				<div class="col-md-4 col-12 pl-2 mt-4">
					  <div class="card-body m-0">
					    	<h5 class="card-title text-danger text-center"><i class="fa fa-laptop text-white"></i> Front End Design </h5>
					    	<p class="card-text text-center">I can design a fully responsive, highly interactive and beautiful site of your choice, be it a personal website or a business website, i am your go to person.</p>
					</div>
				</div>
				<div class="col-md-4 col-12 pl-2">
					  <div class="card-body m-0">
					    	<h5 class="card-title text-danger p-3 text-center"> <i class="fa fa-edit text-white"></i> PHP Developer </h5>
					    	<p class="card-text text-center">I can design websites with vanilla PHP and PHP frameworks like "LARAVEL". I am knowledgeable on building custom object-oriented PHP MVC framework and application </p>
					</div>
				</div>
			</div>
		</div>
			<div class="container-fluid p-0 m-0" id="project">
				<h1 class="col-md-12 text-center text-danger px-5 pt-5 pb-1">PROJECTS</h1>
				<h5 class="text-center pb-4">Check out some of my projects i created for fun</h5>
				<div class="row justify-content-center mt-md-2">
					<div class="col-md-3 ml-5">
						<div class="card shadow-lg mb-5 bg-body rounded" style="width: 18rem; background-color: rgb(212,212,212);">
							<img src="<?php echo asset('images/checker.png');?>" alt="" class="img-fluid">
							<div class="card-body">
								<p class="text-center pt-2 mt-2" style="font-weight: bold;">an online score analyser for students to calculate what grade and percentage they will get in different subject in their school assessment.</p>
								<p style="font-size: 2.5vw"><i class="fab fa-html5 ml-5"></i><i class="fab fa-css3-alt ml-5"></i><i class="fab fa-js-square ml-5"></i></p>
								<a href="https://result-checker-4f5f7.web.app/index.html" class="btn btn-danger my-1 col-md-4 offset-md-1 btn-sm"><i class="fas fa-eye"></i></a><a href="https://github.com/Odeyeyiwa/result-checker" class="btn btn-danger ml-md-5 my-1 col-md-4 btn-sm"><i class="fas fa-code"></i></a>
							</div>
						  </div>
					</div>
					<div class="col-md-3 ml-5">
						<div class="card shadow-lg mb-5 bg-body rounded" style="width: 18rem; background-color: rgb(212,212,212);">
							<img src="<?php echo asset('images/calculator.png');?>" alt="" class="img-fluid">
							<div class="card-body">
								<p class="text-center pt-2 mt-2" style="font-weight: bold;">A simple arithemetic calculator for solving mathematical problems like addition, subtraction, multiplication, division and modulus.</p>
								<p style="font-size: 2.5vw"><i class="fab fa-html5 ml-5"></i><i class="fab fa-css3-alt ml-5"></i><i class="fab fa-js-square ml-5"></i></p>
								<a href="https://simple-calculator-ecf2c.web.app/" class="btn btn-danger my-1 col-md-4 offset-md-1 btn-sm"><i class="fas fa-eye"></i></a><a href="https://github.com/Odeyeyiwa/simple-calculator" class="btn btn-danger ml-md-5 my-1 col-md-4 btn-sm"><i class="fas fa-code"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-3 ml-5">
						<div class="card shadow-lg mb-5 bg-body rounded" style="width: 18rem; background-color: rgb(212,212,212);">
							<img src="<?php echo asset('images/sneak-head.png');?>" alt="" class="img-fluid">
							<div class="card-body">
								<p class="text-center pt-2 mt-2" style="font-weight: bold;">A frontend design of an e-commerce sneakers website for sneakers head to get varieties of the latest sneakers at discounted rates.</p>
								<p style="font-size: 2.5vw"><i class="fab fa-html5 ml-5"></i><i class="fab fa-css3-alt ml-5"></i><i class="fab fa-js-square ml-5"></i></p>
								<a href="https://sneak-head.web.app/" class="btn btn-danger my-1 col-md-4 offset-md-1 btn-sm"><i class="fas fa-eye"></i></a><a href="https://github.com/Odeyeyiwa/sneak-head" class="btn btn-danger ml-md-5 my-1 col-md-4 btn-sm"><i class="fas fa-code"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="skills" class="container-fluid p-0 m-0">
				<h1 class="col-md-12 text-center text-danger pt-5">SKILLS</h1>
				<br>
				<div class="row justify-content-center">
					<label class="col-md-1 text-white">HTML</label>
						<div class="progress col-md-6">
							<div class="progress-bar lg bg-dark" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
				</div> <br>
				<div class="row justify-content-center">
					<label class="col-md-1 text-white">CSS</label>
						<div class="progress col-md-6">
							<div class="progress-bar bg-dark" role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
				</div><br>
				<div class="row justify-content-center">
					<label class="col-md-1 text-white">JAVASCRIPT</label>
						<div class="progress col-md-6">
							<div class="progress-bar bg-dark" role="progressbar" style="width: 60%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
				</div><br>
				<div class="row justify-content-center">
						<label class="col-md-1 text-white">JQUERY</label>
						<div class="progress col-md-6">
							<div class="progress-bar bg-dark" role="progressbar" style="width: 60%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
				</div><br>
				<div class="row justify-content-center">
					<label class="col-md-1 text-white">MYSQL</label>
						<div class="progress col-md-6">
							<div class="progress-bar bg-dark" role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
				</div><br>
				<div class="row justify-content-center">
					<label class="col-md-1 text-white">AJAX</label>
						<div class="progress col-md-6">
							<div class="progress-bar bg-dark" role="progressbar" style="width: 50%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
				</div><br>
				<div class="row justify-content-center">
						<label class="col-md-1 text-white">LARAVEL</label>
						<div class="progress col-md-6">
							<div class="progress-bar bg-dark" role="progressbar" style="width: 50%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
				</div><br>
				<div class="row justify-content-center pb-5">
					<label class="col-md-1 text-white">REACT</label>
					<div class="progress col-md-6">
					<div class="progress-bar bg-dark" role="progressbar" style="width: 60%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div><br>
			</div>	
		
		<div class="container-fluid p-0 m-0" id="about">	
			<div class="row m-0">
				<div class="col-md-6 col-12 mt-5 px-5">
					<img src="<?php echo asset('images/toyosi1.png');?>" class="img-fluid rounded-circle"><br>
					<div class="pt-3 pb-5"><h3 style="color:rgb(81,81,81);text-align:left;">ODEYEYIWA OMOTOYOSI</h3></div>
				</div>
				<div class="col-md-6 col-12 px-5 mt-5" style="text-align: center;">
					<h1 class="text-danger">Hello, i am Omotoyosi</h1>
					<p style="color:rgb(81,81,81)" class="text-center">I am a junior PHP fullstack developer with a passion for programming. I have always been a tech enthusiast, my true love for STEM started years back when i attened a tech confrence, and in that very moment i knew that i was where i have always wanted to be, for the first time in a really long while, i finally felt like i fit in and i was really looking forward to doing something i actually really fancy in a very long while.</p><br><br>
							<div class="row m-0 mb-5">
								<div class="col-3"><a href="<?php echo url('https://www.twitter.com');?>"><img src="<?php echo asset('images/twitter.png');?>"class=img-fluid></a></div>
								<div class="col-3"><a href="#contact"><img src="<?php echo asset('images/phone.png');?>" class=img-fluid></a></div>
								<div class="col-3"><a href="<?php echo url('https://www.gmail.com');?>"><img src="<?php echo asset('images/email.png');?>"class=img-fluid></a></div>
								<div class="col-3"><a href="<?php echo url('https://www.linkedin.com');?>"><img src="<?php echo asset('images/linkedin.png');?>"class=img-fluid></a></div>
							</div>
				</div>
			</div>
		</div>
		<script src="<?php echo asset('js/jquery-3.5.1.min.js');?>"></script>
		<script src="<?php echo asset('js/popper.min.js');?>"></script>
		<script src="<?php echo asset('js/bootstrap.js');?>"></script>
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header" style="border-bottom: none;">
							        <h2 class="modal-title text-dark" id="exampleModalLabel">CONTACT ME</h2>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body">
							        <form class="form-horizontal" action="<?php echo url('/submitservice');?>" method="POST">
										@csrf
							        	<div class="form-group row">
							        		<div class="col-12 pb-2">
												<input class="form-control" type="text" id="fullname" name="bname" required placeholder="ENTER YOUR BUSINESS NAME">
											</div>
											<div class="col-12 pb-2">
												<input class="form-control" type="email" id="email" name="bemail" required placeholder="ENTER EMAIL ADDRESS">
											</div>
											<div class="col-12 pb-2">
												<input class="form-control" type="number" id="phoneno" name="bphone" required placeholder="ENTER PHONE NUMBER">
											</div>
											<div class="col-12 pb-2">
												<input class="form-control" type="text" id="service" name="service" required placeholder="ENTER SERVICE REQUIRED">
											</div>
											<div class="col-12 pb-2">
												<textarea class="form-control" id="info" name="info" placeholder="ANY ADDITIONAL INFORMATION"></textarea>
											</div>
											<div class="col-12">
												<button class="btn btn-danger btn-block">CONTACT</button>
											</div>
							        	</div>
							        </form>
							      </div>
							      <div class="modal-footer"style="border-top: none;">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
		</div>
	</div>
		<div class="row" style="background-color:black;" id="contact">
			<div class="col-md-6 pt-5 pl-5">
				<h1 class="text-danger">Contact Me</h1>
				<p class="text-white text-center">Want to discuss a project, have a job opportunity or freelance opportunity, want a collaboration, want to make enquires or just want to say hi, please do not hesitate to reach out</p>
					<form action="<?php echo url('/submitcontact');?>" method="POST">
						@csrf
						<div class="form-group row">
							<div class="col-md-12 col-10">
								<input class="form-control" type="text" id="name" name="name" required placeholder="Enter your Name">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-12 col-10">
								<input class="form-control" type="email" id="email" name="email" required placeholder="Enter Your Email">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-12 col-10">
								<input class="form-control" type="number" id="phone" name="phone" required placeholder="Enter Your Phone Number">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-12 col-10">
								<textarea id="message" name="message" class="form-control" rows="4" cols="20" required placeholder="Enter a message">
								</textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 pt-2 offset-4">
								<button class="btn btn-danger">SUBMIT</button>
							</div>
						</div>
					</form>
			</div>
			<div class="col-md-6 pt-5">
				<iframe src="<?php echo url('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.2298848482415!2d3.361101614449751!3d6.618337923890481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b93b434bdedab%3A0x425cd05bf4a73bf7!2sAlausa%20Royal%20Estate!5e0!3m2!1sen!2sng!4v1610058578033!5m2!1sen!2sng');?>" width="100%" height="450" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
		</div>
		<div class="row" style="background-color:black;">
			<div class="col">
				<p class="text-white pt-3" style="text-align:center;">Designed and builted by Odeyeyiwa Omotoyosi &copy 2020</p>
			</div>
		</div>
	</div>
</div>
	</body>
	</html>