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
								<h1>Admin Page</h1>
								<!--<p><br />
                                Blockchain Based<br />
								Finacal Support Service</p>-->
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#Upload">Upload</a></li>
								<li><a href="#User">User</a></li>
								<!--<li><a href="#Admin">Admin</a></li>
								<li><a href="#contact">Contact</a></li>
								<!--<li><a href="#elements">Elements</a></li>-->
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Intro -->
							<article id="Upload">
								<h2 class="major">Upload Transation</h2>
									<form action="post.php" method="post">
                                    <h3>Center Name : </h3>
                                    <input type="text" name="center" placeholder="Center" style="text-align:center; width:1000; height:50px;">
                                    <br><h3>Admin Name : </h3>
                                    <input type="text" name="admin" placeholder="Admin Name" style="text-align:center; width:1000; height:50px;">
                                    <br><h3>Code : </h3>
                                    <select name="Code-select" id="demo-category">
													<option value="">- Code Name -</option>
													<option value="1">0001 ========= 이체 =========</option>
													<option value="1">0002 ========= 입금 =========</option>
													<option value="1">0003 ===== 예금상품 가입 ====</option>
													<option value="1">0004 ===== 예금상품 해지 ====</option>
													<option value="1">0005 ======= 보험 가입 ======</option>
													<option value="1">0006 ======= 보험 해지 ======</option
													<option value="1">5555 ====== 보험금 지급 =====</option>
													<option value="1">6666 ====== 보험금 납부 =====</option>
													<option value="1">9999 ======= 기타 납부 ======</option>
									</select><br>
                                    <input type="text" name="code" placeholder="Code" style="text-align:center; width:1000; height:50px;">
                                    <br><h3>Pay : </h3>
                                    <input type="text" name="pay" placeholder="Pay" style="text-align:center; width:1000; height:50px;">
                                    <br><h3>Member Code : </h3>
                                    <input type="text" name="member" placeholder="Member Code" style="text-align:center; width:1000; height:50px;">
                                    <br><span style = "float:right"><input type = "submit" />
                                </form>
							</article>

						<!-- Work -->
							<article id="User">
								<h2 class="major">User & Log</h2>
                                <div class = "b_main">
                                    <?php
                                        error_reporting(E_ALL);
                                        ini_set("display_errors", 1);
                                        $host = '13.67.107.10:3306';
                                        $user = 'root';
                                        $pw = '1qaz2wsx#EDC';
                                        $dbName = 'hk';
                                        $mysqli = new mysqli($host, $user, $pw, $dbName);
                                        
                                        $result = mysqli_query($mysqli,'select * from data');
                                        
                                        while($row = mysqli_fetch_assoc($result))
                                        {
                                            echo '<big>Number : </big>', '[ ', $row['number'], ' ]', '<br><br>';
                                            echo '<strong>Member Code</strong> : ',$row['member'], '<br>';
                                            echo 'Center Name : ', $row['center'], '<br>';
                                            echo 'Center Admin : ', $row['admin'], '<br>'; 
                                            echo 'Postal Service Code : ', $row['code'], '<br>';
                                            echo '<strong>Result Money : </strong>', $row['pay'], '<br><br>';
                                        }
                                    ?>
                                </div>
                        
							</article>

						<!-- Contact -->
						<!--
							<article id="contact">
								<h2 class="major">Contact</h2>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" />
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="4"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="primary" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</form>
								<ul class="icons">
									<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</article>
                        -->
					
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

	</body>
</html>
