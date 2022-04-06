
<!DOCTYPE HTML>

<html>
	<head>
		<title>會員登入忘記帳號與密碼</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="NUKIM_php_homework">
    	<meta name="author" content="weny">
    	<link rel="icon" href="/h4/images/login.png" type="image/x-icon"/>
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header">
					<div class="container">

						<!-- Nav -->
						<?php require_once("all_head.php"); ?>
						<h1 id="logo">忘記帳號與密碼</h1>
					</div>
				</section>



				<section id="features">
					<div class="container">
						<div class="row aln-center">
							<div class="col-6 col-8-medium col-12-small">

								<!-- Feature -->
								<header>
																
								</header>
								<form action="" method="post" style="width: 60%; margin: 0px auto;" enctype="multipart/form-data">
									<table>
										<tr>
											<td colspan="2">
												<input type="text" name="uname"placeholder="請輸入您註冊的名字" required="required" style="width: 100%; text-align: center;">
											</td>
										</tr>
										<tr>
											<td colspan="2">
												<input type="email" name="uemail"placeholder="請輸入您註冊的E-mail" required="required" style="width: 100%;text-align: center;">
											</td>
										</tr>
										<tr>
											<td colspan="2">
												<input type="button" value="取回帳號與密碼" onclick="javascript:location.href=''" style="width: 100%;">
											</td>
										</tr>
										<tr>
											<td>
												<input type="button" value="登入會員" onclick="javascript:location.href='login.php'" style="width: 100%;">
											</td>
											<td>
												<input type="button" value="註冊去！" onclick="javascript:location.href='register.php'" style="width: 100%;">
											</td>
										</tr>
										
									</table>
								</form>		
							</div>
						</div>
					</div>
				</section>


			<!-- Footer -->

		<?php require_once("all_footer.php"); ?>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>