<!DOCTYPE html>
<html>

<head>
	<title>Rooster and Chill Story</title>
	<link rel="icon" type="image/x-icon" href="./images/infinity.png">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/home.css">
</head>



	<nav class="navbar">
		<div class="nav_logo">
			<i class="fa-solid fa-font-awesome"></i>
			<a href="index.php">
				<img src="logo/rc-high-resolution-logo-white-on-transparent-background.png" alt="">
			</a>
		</div>
		<div class="menu">
			<div class="menu-links">
				<a href="index.php">Home</a>
				<a href="blog_page.php">Blog</a>
				<a href="date_count_page.php" class="date-count" id="date-count">date count</a>
				<a href="contact_page.php">Contact</a>
				
		
			</div>
			<div class="dropdown" id="dropdown">
			<a href="login_form.php"><button id ='login-btn' class="log-in">log in</button></a>
				<div class="dropdown-content" id="dropdown-content">
					<a href="">Account</a>
					<a href="">Setting</a>
					<a href="login_form.php" onclick="lock_out()">Log out</a>
				</div>
			</div>
			
			
		</div>
	</nav>
	
