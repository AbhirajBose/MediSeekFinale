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
	<link href="css/searchbar.css" rel="stylesheet">
	<link href="css/autocomplete.css" rel="stylesheet">

	<title>Mediseek</title>
</head>

<body>

	<!-- Start Header/Navigation -->
	<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark fixed-top" id="navbar"
		arial-label="Furni navigation bar">

		<div class="container">
			<a class="navbar-brand" href="index.html">Mediseek<span></span></a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
				aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarsFurni">
				<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
					<li class="">
						<div class="wrapper">
							<div class="search-input">
								<div class="form" id="search-form">
									<form action="shop.php" method="post" target="_self">
										<i class="fa fa-search"></i>
										<input name="data" type="text" class="form-control form-input" placeholder="Search anything..." >
										<!-- <span class="left-pan"><i class="fa fa-microphone"></i></span> -->
										<!-- <span class="left-pan"><button class="mic-button"><i class="fa fas fa-microphone"></i></button></span> -->
									</form>
									<?php
									
									?>
									<div class="autocom-box">
									</div>
									<div class="icon"></div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<a class="nav-link" href="index.php">Home</a>
					</li>
					<li class="nav-item active"><a class="nav-link" href="shop.php">Shop</a></li>
					<li><a class="nav-link" href="about.php">About us</a></li>
					<!-- <li><a class="nav-link" href="services.html">Services</a></li> -->
					<li><a class="nav-link" href="contact.php">Contact us</a></li>
				</ul>

				<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
					<li><a class="nav-link" href="profile.php"><img src="images/user.svg"><span id="profile" style="color: #fff;">
					<?php
						if(isset($_SESSION['name'])){
							echo $_SESSION["name"];
						}else{
							echo "Profile";
						}
					?>
					</span></a></li>
					<li><a class="nav-link" href="cart.html"><img src="images/cart.svg"></a></li>
				</ul>
			</div>
		</div>
		<!-- <div class="container">

			<div class="row height d-flex justify-content-center align-items-center">
		  
			  <div class="col-md-6">
		  
				<div class="form">
				  <i class="fa fa-search"></i>
				  <input type="text" class="form-control form-input" placeholder="Search anything...">
				  <span class="left-pan"><i class="fa fa-microphone"></i></span>
				</div>
		  
			  </div>
		  
			</div>
		  
		  </div> -->

	</nav>
	<!-- End Header/Navigation -->



	<div class="untree_co-section product-section before-footer-section">
		<div class="container">
			<div class="row">
				<?php
				if(!empty($_POST)){
					$q = $_POST["data"]; 
					$output = passthru('python test.py '.$q);
					echo $output;
				}
				?>

			
				<!-- <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="#">
                        <img src="images/product-3.png" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Nordic Chair</h3>
                        <strong class="product-price">$50.00</strong>

                        <span class="icon-cross">
                            <img src="images/cross.svg" class="img-fluid">
                        </span>
                    </a>
                </div>  -->

			</div>
		</div>
	</div>


	<footer class="footer-section">
		<div class="container relative">
			<div class="row">
				<div class="col-lg-8">
					<div class="subscription-form">
						<h3 class="d-flex align-items-center"><span class="me-1"><img src="images/envelope-outline.svg"
									alt="Image" class="img-fluid"></span><span>Subscribe to Newsletter</span></h3>

						<form action="" class="row g-3">
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
					<p class="mb-4">Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus
						malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.
						Pellentesque habitant</p>

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
	<script src="js/tts.js"></script>
	<script src="js/script.js"></script>
	<script src="js/suggestions.js"></script>
	


</body>

</html>