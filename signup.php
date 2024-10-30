<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KASSS Advertising Agency</title>

	<link rel="stylesheet" type="text/css" href="content/css/header_footer_style.css">
	<link rel="stylesheet" type="text/css" href="content/css/sign_up.css">
	<script src="content/js/script.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
</head>
<body>
	<header class="header">
		<div class="brand">
			<img src="content/images/logo-width.png" alt="logo" class="brand-logo">
		</div>
		<nav class="navbar" id="navMenu">
			
			<div class="nav-content">
				<a href="index.php" class="nav-item ">Home</a>
				<a href="about.php" class="nav-item">About</a>
				<a href="services.php" class="nav-item">Services</a>
				<a href="contacts.php" class="nav-item">Contacts</a>
				<a href="signin.php" class="nav-item nav-button">Sign-in &nbsp<i class="fa fa-sign-in"></i></a>
				<a href="signup.php" class="nav-item nav-button active-btn">Sign-up &nbsp<i class="fa fa-user-plus"></i></a>
			</div>
		</nav>
	</header>
	<main>
		<section class="Home">
			<div class="form_container">
				<!--create acc form-->
				<div class="form log_form">
					<div class="form login_form">
						<form action="include/signup.inc.php" method="post">
							<h2>Create Account</h2>

	                        <div class="input_box">
	                            <input type="text" name="name" placeholder="Your name">
								<i class="il uil-users-alt user"></i>
							</div>
	                        
	                        <div class="input_box">
								<input type="email" name="email" placeholder="Email" required>
								<i class="il uil-envelope-alt email"></i>
							</div>
	                        <div class="input_box">
								<input type="tel" name="phonenumber" placeholder="Phone Number" required>
								<i class="il uil-phone-alt phone"></i>
							</div>
							
							<div class="input_box">
								<input type="username" name="username" placeholder="Username" required>
								<i class="il uil-users-alt user"></i>
							</div>

							<div class="input_box">
								<input type="password" name="password" placeholder="password" required>
								<i class="uil uil-lock password"></i>
								<i class="uil uil-eye-slash pw_hide"></i>
							</div>

	                        <div class="input_box">
								<input type="password" name="confirmpassword" placeholder="Confirm password" required>
								<i class="uil uil-lock password"></i>
								<i class="uil uil-eye-slash pw_hide"></i>
							</div>

							<div class="option_field">
								<span class="checkbox">
									<input type="checkbox">
									<label for="check">Remember Me</label>
								</span>
								<a href="#" class="forgot_pw">Terms and conditions</a>
							</div>
							<?php if (isset($_GET['error'])) {
	                            if ($_GET['error'] == 'emptyinputs') {
	                                echo '<div class="error"> Fill the all fields!! </div>';
	                            }else if ($_GET['error'] == 'passwordcheck') {
	                                echo '<div class="error"> Password are not match</div>';
	                            }else if ($_GET['error'] == 'usernameexist') {
	                                echo '<div class="error">Username already taken, Please choose another username</div>';
	                            }else if ($_GET['error'] == 'accountexist') {
	                                echo '<div class="error"> This email are already registered.</div>';
	                            }
	                        }?>

							<input type="submit" name="submit" class="button">
							
							<div class="login_signup">
								Already have an account? <a href="signin.php">Login</a>
							</div>
						</form>
					</div>
				</div>
			</div>

		</section>
	</main>	
    <footer>
		<div class="container">
			<div class="left-content">
				<a href="index.php"><img src="content/images/logo-width.png" alt="logo"></a>
				<p>KASSS Advertising is a full-service advertising agency dedicated to helping businesses grow their brands and achieve their marketing goals.</p>
			</div>
			<div class="center-content">
				<h3>Quick Links</h3>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About Us</a></li>
					<li><a href="services.php">Products</a></li>
					<li><a href="contacts.php">Contact Us</a></li>
					<li><a href="privacy.html">Privacy Policy</a></li>
				</ul>
			</div>
			<div class="right-content">
				<h3>Follow us on</h3>
				<ul class="social-icons">
					<li><i class="fa fa-facebook"> Facebook</i></li>
					<li><i class="fa fa-twitter"></i> Twitter</li>
					<li><i class="fa fa-instagram"></i> Instagram</li>
					<li><i class="fa fa-linkedin"></i> Linkedin</li>
					<li><i class="fa fa-youtube"> Youtube</i></li>
				</ul>
			</div>
		</div>
		<div class="copyright">
			&copy;2024 All rights reserved | Design by <a href="https://www.sjaywebsolutions.lk/" target="_blank">S JAY Web Solutions (Pvt) Ltd</a>
		</div>
	</footer>
</body>
</html>