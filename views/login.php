<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="/projectjewellery/css/login.css">
</head>
<body>

<!-- Notification Bar -->
<div class="notification-bar-top" id="home">
        <p id="paragraph-1">Sign In and get 20% discount in your first order!</p>
    </div>

<!-- Header -->	
<header class="header">
<a href="index.php" class="logo">Seashella</a>

<div class="user-icons">
	<!-- User Icon -->
	<a id="icon-user" href="login.html"><i class="fa-solid fa-user fa-lg" style="color: #bba35a;"></i></a>
	<!-- Cart Icon -->
	<i class="fa-solid fa-bag-shopping fa-lg" style="color: #bba35a;" id="cart-icon"></i>
</div>

<!-- Check box, Close icon -->
<input type="checkbox" id="check">
<label for="check" class="icons">
	<i class='bx bx-menu' id="menu-icon"></i>
	<i class='bx bx-x' id="close-icon"></i>
</label>
</header>

<!-- LOGIN FORM -->
<form method="post" action="login.php" name="form" onsubmit="return validated()">
  <div class="login">
	<p>Login</p>
</div><br>
<?php include('errors.php'); ?>
  	
<div class="login-form">
            <label id="label-username" for="email">USERNAME</label><br>
            <input autocomplete="off" type="text" name="username" placeholder="Username"><br><br>

            <div id="email_error">Please fill up your Username</div>

            <label id="label-password" for="password">PASSWORD</label><br>
            <input type="password" name="password" placeholder="Password"><br><br>

            <div id="pass_error">Please fill up your Password</div>

            <input type="checkbox" name="rememberMe" id="rememberMe">
			<label for ="rememberMe">Remember me</label>

            <div class="sign-in">
                <button type="submit" class="sign-in" name="login_user">SIGN IN</button>
            </div><br>

            <div class="create-account"><a href="register.php">Create account</a></div>
            <div class="forgot-password"><a href="#">Forgot password?</a></div>
        </div>
</form>

<!-- FOOTER -->
  <footer class="footer" id="contact">
<article class="footer-articles">
	<h1 class="footer-title-name">Seashella</h1>
	<p class="footer-paragraph"><span style="color: #b3995c;"><b>100%</b></span> Handmade products.</p>
	<p class="footer-paragraph" id="footer-para-2">Sign In and get <span
			style="color: #b3995c;"><b>20%</b></span> discount <br> in your first order!</p>

	<div class="social-icons">
		<a href="#"><i class='bx bxl-instagram'></i></a>
		<a href="https://www.facebook.com/michal.vesely.96"><i class='bx bxl-facebook'></i></a>
		<a href="#"><i class='bx bxl-messenger'></i></a>
		<a href="#"><i class='bx bxl-google'></i></a>
	</div>
</article>

<article class="footer-articles">
	<h1 class="footer-title-name">Menu</h1>
	<ul>
		<li><a href="">Home</a></li>
		<li><a href="">Jewellery</a></li>
		<li><a href="">About</a></li>
		<li><a href="">Contact</a></li>
	</ul>
</article>

<article class="footer-articles">
	<h1 class="footer-title-name">Contact</h1>
	<ul>
		<li><i class="fa-solid fa-phone" style="color: #6d6654;"></i><a href=""> 402 106 207</a></li>
		<li><i class="fa-solid fa-envelope" style="color: #6d6654;"></i><a href="">Sheashella@gmail.com</a></li>
		<li><i class="fa-solid fa-location-dot" style="color: #6d6654;"></i><a href=""> 8 MarlowStreet</a></li>
		<li><i class="fa-solid fa-city" style="color: #6d6654;"></i><a href=""> Western Australia 6002</a></li>
	</ul>
</article>
</footer>

<!-- Notification Bar -->
<div class="notification-bar-bottom">
<p id="paragraph-1">Sign In and get 20% discount in your first order!</p>
</div>


 <!-- User error, Email error JS -->
<script src="../JavaScript/Errors.js"></script>


</body>
</html>
