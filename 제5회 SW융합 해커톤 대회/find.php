<?php
session_start();
if (isset($_SESSION['id']))
{
	$login_chk = 1;
}
else
{
	$login_chk = 0;
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>BFAS</title>
		<link rel="shortcut icon" href="/assets/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/assets/favicon.ico" type="image/x-icon">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		
		<!-- Wrapper -->
		
			<div id="wrapper">
				
			<!-- Header -->
			
				<header id="header">
					<div class="logo">
						<span class="icon fa-lock"></span>
					</div>
					<div class="content">
						<div class="inner">
							<h1>Finding Result</h1>
							<h3>Member : 1258745632586 </h3>
                            <p>
                                Center Name : Jeonju.Local<br>
                                Center Admin : KimDoHyeon<Br>
                                Postal Service Code : 1<br>
                                <h3>Result Money : 100,000,000</h3>
						    </p>
						</div>
					</div>
					<nav>
						<ul>
							<!--<li><a href="#Upload">Upload</a></li>-->
							<li><a href="http://hk.system32.kr">Return</a></li>
							<!--<li><a href="#elements">Elements</a></li>-->
						</ul>
					</nav>
				</header>

			<!-- Main -->
			
			<div id="main">
		
			</div>
			<!-- Footer -->
			
				<footer id="footer">
					<p class="copyright"><h3>&copy; 『공백』 5TH SW-HACKATHON</h3></p>
				</footer>
		</div>

		<!-- BG -->
		
			<div id="bg"></div>

		<!-- Scripts -->
		
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="https://unpkg.com/sweetalert2@7.19.3/dist/sweetalert2.all.js"></script>

	</body>
</html>
