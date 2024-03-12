
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<meta charset="utf-8" />
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content=""/>
<title>index page</title>
<!-- Favicon-->
<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
<!-- Font Awesome icons (free version)-->
<script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
	crossorigin="anonymous"></script>
<!-- Google fonts-->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700"
	rel="stylesheet" type="text/css" />
<link
	href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic"
	rel="stylesheet" type="text/css" />
<!-- Core theme CSS (includes Bootstrap)-->
<link href="css/index-styles.css" rel="stylesheet" />

<style>
	#bubble {
        width: 100px;
        height: 100px;
        /* background-color: #007bff; */
        background-image: linear-gradient(to bottom right, #007bff, #00ffff);
        position: fixed;
        bottom: 0;
        right: 0;
        border: 2px solid #fff;
        border-radius: 50%;
        cursor: pointer;
        transition: all 0.2s ease-in-out;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        animation: pulse 2s ease-in-out infinite;
      }

      @keyframes pulse {
        0% {
          transform: scale(1);
        }
        50% {
          transform: scale(1.1);
        }
        100% {
          transform: scale(1);
        }
      }

      #bubble:hover {
        transform: scale(1.1);
      }

      #messageBox {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 20px;
        padding: 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        background-color: #fff;
        border-radius: 10px;
      }

      #message {
        border: 1px solid #ccc;
        padding: 10px;
        margin: 10px 0;
      }

      label {
        font-weight: bold;
        margin-bottom: 10px;
      }
      .button1 {
        background-color: #010c18;
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        cursor: pointer;
      }

	</style>
</head>
<body id="page-top">
	
    <div id="bubble" onclick="showMessageBox()"></div>

    <div id="messageBox">
      <label for="message">Enter your message:</label><button class="button1" onclick="hideMessageBox()">X</button><br />
      <textarea id="message"></textarea><br />
      <button class="button1" onclick="hideMessageBox()">Submit</button>
    </div>
	<!-- Navigation-->

	<!-- Masthead-->
	 <header class="masthead bg-primary text-white text-center">
			<!-- Masthead Avatar Image-->
	<nav
		class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top"
		id="mainNav">
		<div class="container">
			<a class="navbar-brand" href="#page-top"><img src="images/logo.png" width="67"></a>
			<p><h2>CREW X</h2></p>
			<button
				class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded"
				type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
				aria-expanded="true" aria-label="Toggle navigation">
				Menu <i class="fas fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ms-auto">
					{{-- <li class="nav-item mx-0 mx-lg-1"><a
						class="nav-link py-3 px-0 px-lg-3 rounded" href="userRegistration">User Registration</a></li>
						<li class="nav-item mx-0 mx-lg-1">
						

						<a class="nav-link py-3 px-0 px-lg-3 rounded" href="userLogin">User Login</a></li> --}}
                        
						<li class="nav-item mx-0 mx-lg-1">

							<div class="w3-dropdown-hover">
								<button class="w3-button py-3 px-2 px-lg-4">REGISTRATION</button>
								<div class="w3-dropdown-content w3-bar-block w3-card-4">
								  <a href="userRegistration" class="w3-bar-item w3-button px-lg-20"> User Registration</a>
								  <a href="BankRegister" class="w3-bar-item w3-button ">Bank Registration</a>
								  
								</div>
							  </div>
						</li>
						<li class="nav-item mx-0 mx-lg-1">
                        <div class="w3-dropdown-hover">
							<button class="w3-button py-3 px-2 px-lg-5">LOGIN</button>
							<div class="w3-dropdown-content w3-bar-block w3-card-4">
							  <a href="bankLogin" class="w3-bar-item w3-button ">Bank Login</a>
							  <a href="userLogin" class="w3-bar-item w3-button ">User Login</a>
							</div>
						  </div>
						</li>
						{{-- <li class="nav-item mx-0 mx-lg-1"><a
						class="nav-link py-3 px-0 px-lg-13 rounded" href="BankRegister">Bank Registration</a></li>
					   <li class="nav-item mx-0 mx-lg-1"><a
						class="nav-link py-3 px-0 px-lg-3 rounded" href="bankLogin">Bank Login</a></li>--}}
					
					<li class="nav-item mx-0 mx-lg-1"><a
						class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About</a></li>
					<li class="nav-item mx-0 mx-lg-1"><a
						class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contact</a></li>
						<li class="nav-item mx-0 mx-lg-1"><a
							class="nav-link py-3 px-0 px-lg-3 rounded" href="adminLogin">Admin</a></li> 
					
					
				</ul>
			</div>
		</div>
	</nav>
			<!-- Masthead Heading-->
		<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://cdn.pixabay.com/photo/2020/04/17/08/11/blood-5053771_1280.jpg" height="400" width="200"class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://cdn.pixabay.com/photo/2012/02/25/19/12/animal-16976_1280.jpg" height="400" width="200"class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://cdn.pixabay.com/photo/2019/02/14/12/04/blood-3996485_1280.jpg" height="400" width="200"class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div><br>
<div class="divider-custom divider-light">
				<div class="divider-custom-line"></div>
				<div class="divider-custom-icon">
					<i class="fas fa-star"></i>
				</div>
				<div class="divider-custom-line"></div>
			</div>
			<h1 class="masthead-heading text-uppercase mb-0"> Blood alone remains: take it and born a new life </h1>
			<!-- Icon Divider-->
			
			<!-- Masthead Subheading-->
		
	</header>
	
	<!-- About Section-->
	<section class="page-section bg-primary text-white mb-0" id="about">
		<div class="container">
			<!-- About Section Heading-->
			<h2
				class="page-section-heading text-center text-uppercase text-white">About</h2>
			<!-- Icon Divider-->
			<div class="divider-custom divider-light">
				<div class="divider-custom-line"></div>
				<div class="divider-custom-icon">
					<i class="fas fa-star"></i>
				</div>
				<div class="divider-custom-line"></div>
			</div>
			<!-- About Section Content-->
			<div class="row">
				<div class="col-15">
				<p class="lead"><i>In this Platform there are severels number of blood bank thats have already 
					registerd our portal.At first user create account to our portal and then login.After then they can search their nearest blood bank.
				</i>
				</p>
				<h4>Our target is to reach the near of the People..</h4>
				</div>
				{{-- <div class="col-lg-3 ms-auto">
					<p class="lead">In this Platform there are severels number of blood bank thats have already 
						register our portal.At first user create account to our portal and then login.
					</p>
				</div> --}}
				{{-- <div class="col-lg-4 me-auto">
					<p class="lead">Here also same</p>
				</div> --}}
			</div>
			<!-- About Section Button-->
			
		</div>
	</section>
	<!-- Contact Section-->
	<section class="page-section" id="contact">
		<div class="container">
			<!-- Contact Section Heading-->
			<h2
				class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact
				Us</h2>
			<!-- Icon Divider-->
			<div class="divider-custom">
				<div class="divider-custom-line"></div>
				<div class="divider-custom-icon">
					<i class="fas fa-star"></i>
				</div>
				<div class="divider-custom-line"></div>
			</div>
			<!-- Contact Section Form-->
			<div class="row justify-content-center">
				<div class="col-lg-8 col-xl-7">
					
					<form id="contactForm" data-sb-form-api-token="API_TOKEN">
						<!-- Name input-->
						<div class="form-floating mb-3">
							<input class="form-control" id="name" type="text"
								placeholder="Enter your name..." data-sb-validations="required" />
							<label for="name">Full name</label>
							<div class="invalid-feedback" data-sb-feedback="name:required">A
								name is required.</div>
						</div>
						<!-- Email address input-->
						<div class="form-floating mb-3">
							<input class="form-control" id="email" type="email"
								placeholder="name@example.com"
								data-sb-validations="required,email" /> <label for="email">Email
								address</label>
							<div class="invalid-feedback" data-sb-feedback="email:required">An
								email is required.</div>
							<div class="invalid-feedback" data-sb-feedback="email:email">Email
								is not valid.</div>
						</div>
						<!-- Phone number input-->
						<div class="form-floating mb-3">
							<input class="form-control" id="phone" type="tel"
								placeholder="(123) 456-7890" data-sb-validations="required" />
							<label for="phone">Phone number</label>
							<div class="invalid-feedback" data-sb-feedback="phone:required">A
								phone number is required.</div>
						</div>
						<!-- Message input-->
						<div class="form-floating mb-3">
							<textarea class="form-control" id="message" type="text"
								placeholder="Enter your message here..." style="height: 10rem"
								data-sb-validations="required"></textarea>
							<label for="message">Message</label>
							<div class="invalid-feedback" data-sb-feedback="message:required">A
								message is required.</div>
						</div>
						<!-- Submit success message-->
						<!---->
						<!-- This is what your users will see when the form-->
						<!-- has successfully submitted-->
						<div class="d-none" id="submitSuccessMessage">
							<div class="text-center mb-3">
								<div class="fw-bolder">Form submission successful!</div>
								To activate this form, sign up at <br /> <a
									href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
							</div>
						</div>
						<!-- Submit error message-->
						<!---->
						<!-- This is what your users will see when there is-->
						<!-- an error submitting the form-->
						<div class="d-none" id="submitErrorMessage">
							<div class="text-center text-danger mb-3">Error sending
								message!</div>
						</div>
						<!-- Submit Button-->
						<button class="btn btn-primary btn-xl disabled" id="submitButton"
							type="submit">Send</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer-->
	<footer class="footer text-center">
		<div class="container">
			<div class="row">
				<!-- Footer Location-->
				<div class="col-lg-4 mb-5 mb-lg-0">
					<h4 class="text-uppercase mb-4">Location</h4>
					<p class="lead mb-0">
						700141 Kolkata, Maheshtala <br /> CNS, MO 988330
					</p>
				</div>
				<!-- Footer Social Icons-->
				<div class="col-lg-4 mb-5 mb-lg-0">
					<h4 class="text-uppercase mb-4">Visit Our social side</h4>
					<a class="btn btn-outline-light btn-social mx-1" href="#!"><i
						class="fab fa-fw fa-facebook-f"></i></a> <a
						class="btn btn-outline-light btn-social mx-1" href="#!"><i
						class="fab fa-fw fa-twitter"></i></a> <a
						class="btn btn-outline-light btn-social mx-1" href="#!"><i
						class="fab fa-fw fa-linkedin-in"></i></a> <a
						class="btn btn-outline-light btn-social mx-1" href="#!"><i
						class="fab fa-fw fa-dribbble"></i></a>
				</div>
				<!-- Footer About Text-->
				 <div class="col-lg-4">
					<h4 class="text-uppercase mb-4">About Portal</h4>
					<p class="lead mb-0">
						.....Something.
					</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- Copyright Section-->
	<div class="copyright py-4 text-center text-white">
		<div class="container">
			<small>Copyright &copy; Your Website 2024</small>
		</div>
	</div>
	<!-- Bootstrap core JS-->
	<script
		src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<!-- Core theme JS-->
	<script src="js/scripts.js"></script>
	<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
	<!-- * *                               SB Forms JS                               * *-->
	<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
	<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
	<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
	<script>
		function showMessageBox() {
		  document.getElementById("messageBox").style.display = "block";
		  document.getElementById("bubble").style.display = "none";
		}
	
		function hideMessageBox() {
		  document.getElementById("messageBox").style.display = "none";
		  document.getElementById("bubble").style.display = "block";
		}
	  </script>
</body>
</html>