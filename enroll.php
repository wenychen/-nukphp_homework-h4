<?php
	session_start();

?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>會員註冊</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="NUKIM_php_homework">
    	<meta name="author" content="weny">
    	<link rel="icon" href="/h4/images/id-card.png" type="image/x-icon"/>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet'></link>
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header">
					<div class="container">
						<?php require_once("all_head.php"); ?>
						<h1 id="logo">會員註冊</h1>
					</div>
				</section>

			<!-- Features -->
				<section id="features">
					<div class="container">						
						<div class="row aln-center">
								<!-- Feature -->
									<form action="enrollconfirm.php" method="post" style="width: 60%;" enctype="multipart/form-data">
											<table>
												<tr>
													<td>帳號</td>
													<td><input type="text" name="uaccount"onkeyup="value=value.replace(/[^\w\.\/]/ig,'')" maxlength="20" placeholder="請輸入您要設定的帳號" required="required"></td>
												</tr>
												<tr>
													<td>密碼</td>
													<td><input type="password" name="upsw"onkeyup="value=value.replace(/[^\w\.\/]/ig,'')" placeholder="請輸入您要設定的密碼" required="required"></td>
												</tr>
												<tr>
													<td>身分別</td>
													<td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="urole" value="user" required="required">user&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="urole" value="admin">admin</td>
												</tr>												
												<tr>
													<td colspan="2" style="text-align: center;">
														<input type="submit" name="" value="註冊會員">
														<input type="reset" name="" value="清除資料">
														<input type="button" value="登入會員" onclick="javascript:location.href='login.php'">
													</td>
												</tr>
									</form>										
						</div>
					</div>
				</section>

			<!-- Footer -->

		<!-- <?php require_once("all_footer.php"); ?> -->

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>