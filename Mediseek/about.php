<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap4" />

	<!-- Bootstrap CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<link href="css/tiny-slider.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<title>Mediseek</title>
</head>

<body>

	<!-- Start Header/Navigation -->
	<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark fixed-top" id="navbar" arial-label="Furni navigation bar">

		<div class="container">
			<a class="navbar-brand" href="index.html">Mediseek<span></span></a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
				aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarsFurni">
				<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
					<li>
						<a class="nav-link" href="index.php">Home</a>
					</li>
					<li><a class="nav-link" href="shop.php">Shop</a></li>
					<li class="nav-item active"><a class="nav-link" href="about.php">About us</a></li>
					<li><a class="nav-link" href="contact.php">Contact us</a></li>
				</ul>

				<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
					<li><a class="nav-link" href="profile.php"><img src="images/user.svg"><span id="profile"
								style="color: #fff;"><?php
						if(isset($_SESSION['name'])){
							echo $_SESSION["name"];
						}else{
							echo "Profile";
						}
						?></span></a></li>
					<li><a class="nav-link" href="cart.html"><img src="images/cart.svg"></a></li>
				</ul>
			</div>
		</div>

	</nav>
	<!-- End Header/Navigation -->



    		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between align-items-center">
					<div class="col-lg-6">
						<h2 class="section-title">Why Choose Us</h2>
						<p>Mediseek is a platform which provides its customers the freedom to choose their products at a varied range of prices,customer reviews,branding and ratings.Apart from customer ratings,they also provide customised ratings approved by the team and set them in priority.We are an unparalled service providers in the field of pharmaceutical products</p>

						<div class="row my-5">
							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/truck.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Fast &amp; Free Shipping</h3>
									<p>The shipping system works according to the time taken by the pharmaceutical website from which you are booking.Akthough,we try to notify them as soon as possible.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/bag.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Easy to Shop</h3>
									<p>You can directly visit your interested website in just one click.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/support.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>24/7 Support</h3>
									<p>Our team is present 24/7 to customers in the chat section.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/return.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Hassle Free Returns</h3>
									<p>Products can be easily returned or replaced if wrong or damaged product is receieved.</p>
								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-5">
						<div class="img-wrap">
							<img src="images/why-choose-us-img.jpg" alt="Image" class="img-fluid">
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Why Choose Us Section -->


        <!-- Start Team Section -->
		<div class="untree_co-section">
			<div class="container">

				<div class="row mb-5">
					<div class="col-lg-5 mx-auto text-center">
						<h2 class="section-title">Our Team</h2>
					</div>
				</div>

				<div class="row">

					<!-- Start Column 1 -->
					<div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
						<img src="images/devjit.jpg" class="img-fluid mb-5">
						<h3 clas><a href="#"><span class="">Devjit</span> Laha</a></h3>
            <span class="d-block position mb-4">CEO, Founder, Frontend Developer</span>
            <p>Devjit laha works as a Frontend developer on this platform. He is a B-tech graduate computer science engineer from Academy of Technology.</p>
            <p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>
					</div> 
					<!-- End Column 1 -->

					<!-- Start Column 2 -->
					<div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
						<img src="images/aniket.jpg" class="img-fluid mb-5">

						<h3 clas><a href="#"><span class="">Aniket</span> Ganguli</a></h3>
            <span class="d-block position mb-4">CEO, Founder, Backend Developer</span>
            <p>Aniket Ganguli work as a Backend developer on this platform. He is a B-tech graduate computer science engineer from Academy of Technology.</p>
            <p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>

					</div> 
					<!-- End Column 2 -->

					<!-- Start Column 3 -->
					<div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
						<img src="images/pallab.jpg" class="img-fluid mb-5">
						<h3 clas><a href="#"><span class="">Pallab</span> Samanta</a></h3>
            <span class="d-block position mb-4">CEO, Fullstack Developer, Data-Base incharge</span>
            <p>Pallab Samanta work as a Fullstack developer and Data-Base Incharge on this platform. He is a B-tech graduate computer science engineer from Academy of Technology.</p>
            <p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>
					</div> 
					<!-- End Column 3 -->

					<!-- Start Column 4 -->
					<div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
						<img src="images/abhiraj.jpg" class="img-fluid mb-5">
						<h3 clas><a href="#"><span class="">Abhiraj</span> Bose</a></h3>
            <span class="d-block position mb-4">CEO, Designer</span>
            <p>Abhiraj Bose work as a Designer or Side Frontend developer on this platform. He is a B-tech graduate computer science engineer from Academy of Technology.</p>
            <p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>
					</div> 
					<!-- End Column 4 -->
					<!-- <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
						<img src="images/person_1.jpg" class="img-fluid mb-5">
						<h3 clas><a href="#"><span class="">Ayan</span> Sanki</a></h3>
            <span class="d-block position mb-4">CEO, Fullstack Developer, Security Incharge</span>
            <p>Ayan Sanki work as a Fullstack developer and Security Incharge on this platform. He is a B-tech graduate Artificial Intelligent and Machine Learning engineer from St. Thomas College of Engineering & Technology.</p>
            <p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>
					</div>  -->

				</div>
			</div>
		</div>
		<!-- End Team Section -->



        <footer class="footer-section">
            <div class="container relative">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="subscription-form">
                            <h3 class="d-flex align-items-center"><span class="me-1"><img src="images/envelope-outline.svg"
                                        alt="Image" class="img-fluid"></span><span>Subscribe to Newsletter</span></h3>
    
                            <form action="#" class="row g-3">
                                <div class="col-auto">
                                    <input type="text" class="form-control" placeholder="Enter your name">
                                </div>
                                <div class="col-auto">
                                    <input type="email" class="form-control" placeholder="Enter your email">
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-primary">
                                        <span class="fa fa-paper-plane"></span>
                                    </button>
                                </div>
                            </form>
    
                        </div>
                    </div>
                </div>
    
                <div class="row g-5 mb-5">
                    <div class="col-lg-4">
                        <div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Mediseek<span>.com</span></a>
                        </div>
                        <p class="mb-4">We at Mediseek,try to provide our customers to buy the pharmaceutical products at their comfortable prices and also allow them to buy the products based on the customer reviews,brandings,ratings etc.We also provide ratings which are approved by our team and which can be trusted by the customers.We have some terms and conditions which the users can check and find out.</p>
    
                        <ul class="list-unstyled custom-social">
                            <li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
                            <li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
                            <li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
                        </ul>
                    </div>
    
                    <div class="col-lg-8">
                        <div class="row links-wrap">
                            <div class="col-6 col-sm-6 col-md-3">
                                <ul class="list-unstyled">
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact us</a></li>
                                </ul>
                            </div>
    
                            <div class="col-6 col-sm-6 col-md-3">
                                <ul class="list-unstyled">
                                    <li><a href="#">Support</a></li>
                                    <li><a href="#">Knowledge base</a></li>
                                    <li><a href="#">Live chat</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
    
                </div>
    
                <div class="border-top copyright">
                    <div class="row pt-4">
                        <div class="col-lg-6">
                            <p class="mb-2 text-center text-lg-start">Copyright &copy;
                                <script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash;
                                 <a href="#">Mediseek.com</a>
                            </p>
                        </div>
    
                        <div class="col-lg-6 text-center text-lg-end">
                            <ul class="list-unstyled d-inline-flex ms-auto">
                                <li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
    
                    </div>
                </div>
    
            </div>
        </footer>
        <!-- End Footer Section -->
    
    
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/tiny-slider.js"></script>
        <script src="js/custom.js"></script>
    



</body>
</html>