<!DOCTYPE HTML>

<html>
	<head>
		<title>A3 : Cross-Site Scripting (XSS)</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body>

		<!-- Nav -->
			<nav id="nav">
				<ul class="container">
					<img src="images/ninja.png" alt="" width="8.5%" height="8.5%" align="left" />
					<li><a href="a1.html">A1</a></li>
					<li><a href="a2.html">A2</a></li>
					<li><a href="a3.html">A3</a></li>
					<li><a href="a4.html">A4</a></li>
					<li><a href="a5.html">A5</a></li>
					<li><a href="a6.html">A6</a></li>
					<li><a href="a7.html">A7</a></li>
					<li><a href="a8.html">A8</a></li>
					<li><a href="a9.html">A9</a></li>
					<li><a href="a10.html">A10</a></li>
					<!-- <li><img src="images/katalean_logo.png" alt="" width="65.5%" height="65.5%" align="right" /> -->
				</ul>
			</nav>
			<div class="wrapper style2">
				<article id="work">
					
						<h5>A3 : Reflected Cross-Site Scripting (XSS)</h5>
					
					<b>Want to know your lucky number? Type your name here!</b><br>
					<div class="container">
						<form name="input" action="lucky.php" method="get">
							<input type="text" name="name"><br>
							<input type="submit" value="Submit">

						</form>					
					</div>
					
				</article>
			</div>

		
		
			<div class="wrapper style4">
				<article id="contact" class="container small">
					<header>
				
						<p>Textbox input isn't validated/ sanitized properly.</p>
					</header>
					<footer>
						<ul id="copyright">
							<li>&copy; KataLean. All rights reserved.</li><li><a href="http://www.katalean.com/" target="_blank">KataLean Security</a></li>
						</ul>
					</footer>
				</article>
			</div>


	</body>
</html>