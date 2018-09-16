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
							<h1>블록체인</h1>
							<h3>금융 업무 처리 지원 서비스</h3>
                            <p>Blockchain Based<br />
							Financial Affairs Support Service</p>
						</div>
					</div>
					<nav>
						<ul>
							<!--<li><a href="#Upload">Upload</a></li>-->
							<li><a href="#User">User</a></li>
							<li><a href="#Admin">Admin</a></li>
							<li><a href="#contact">Contact</a></li>
							<!--<li><a href="#elements">Elements</a></li>-->
						</ul>
					</nav>
				</header>

			<!-- Main -->
			
			<div id="main">
					
			<!-- Work -->
			
				<article id="User">
					<h2 class="major">Finding Information</h2>
                        <form action="find.php" method="post" id="search" name="search">
                        	<input type="text" name="search" placeholder="Search"/><br>
                        	<span style = "float:right"><input type = "submit" placeholder = "Find" name = "find" />
                    	</form>
				</article>
				
			<!-- About -->
				<article id="Admin">
					<h2 class="major">Admin Page</h2>
						<form action="login.php" method="post" id="loginform" name="loginform">
                            <label for="id"><h3>Admin Name</h3></label>
                            <input type="text" name="loginID" id="loginID" value="" placeholder="Username">
                            <br>
                            <label for="pw"><h3>Password</h3></label>
                            <input type="password" name="loginPASS" id="loginPASS" placeholder="Password"/>
                            <br></br>
                            <span style = "float:right"><ul class="actions">
                                <li><input id="loginbtn" name="loginbtn" type="submit" class="button submit" value="login"></li>
                            </ul></span>
                        </form>
				</article>

			<!-- Contact -->
				<article id="contact">
					<h2 class="major">Contact Us</h2>
						<form  autocomplete="on">
							<p>추가 정보가 필요하신 분은 063-222-2221로 전화주시거나 <br>
							Blockchain_With_Postal@postoffice.kr로 메일을 보내주세요.</p>
						</form>
				</article>
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
