
<!DOCTYPE HTML>

<html>
	<head>
		<title>會員註冊資料</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="NUKIM_php_homework">
    	<meta name="author" content="weny">
    	<link rel="icon" href="/h4/images/note.png" type="image/x-icon"/>
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header">
					<div class="container">

						<!-- Nav -->
						<h1 id="logo">會員註冊資料</h2>
					</div>
				</section>



				<section id="features">
					<div class="container">
						<div class="row aln-center">
							<div class="col-8 col-10-medium col-12-small">

								<!-- Feature -->
								<header>
																
								</header>
									<?php
										$uaccount = $_POST['uaccount'];
										$upsw = $_POST['upsw'];
										$uname = $_POST['uname'];
										$utel = $_POST['utel'];
										$uemail = $_POST['uemail'];
										$ubir = $_POST['ubir'];
										$uid = $_POST['uid'];
										$usex = $_POST['usex'];
									?>
									<table style="margin: 0px auto; width: 60%;">
										<tr>
											<td colspan="2"><img src="<?php echo $_FILES['uphoto']['name'] ?>" width="150px" height="150px"></img></td>
										</tr>
										<tr>
											<td style="text-align: left;">帳號</td>
											<td style="text-align: left;"><?php echo $uaccount; ?></td>
										</tr>
										<tr>
											<td style="text-align: left;">密碼</td>
											<td style="text-align: left;"><?php echo $upsw; ?></td>
										</tr>
										<tr>
											<td style="text-align: left;">姓名</td>
											<td style="text-align: left;"><?php echo $uname ?></td>
										</tr>
										<tr>
											<td style="text-align: left;">電話</td>
											<td  style="text-align: left;"><?php echo $utel; ?></td>
										</tr>
										<tr>
											<td style="text-align: left;">E-mail</td>
											<td style="text-align: left;"><?php echo $uemail; ?></td>
										</tr>
										<tr>
											<td style="text-align: left;">生日</td>
											<td style="text-align: left;"><?php echo $ubir; ?></td>
										</tr>
										<tr>
											<td style="text-align: left;">身份證字號</td>
											<td style="text-align: left;"><?php echo $uid; ?></td>
										</tr>
										<tr>
											<td style="text-align: left;">性別</td>
										 	<td style="text-align: left;">
												<?php 
												if ($usex=='1') {
											 	echo '男';} 
											 	elseif ($usex=='2') {
											 	echo '女';}
											 	elseif ($usex=='3') {
											 	echo '不方便透露';}
											 	if ($usex=='5') {
											 	echo '不明';}
											 	?>
										 	</td>
										</tr>
										<tr>
											<td style="text-align: left;">會員照資訊</td>
											<td style="text-align: left;">
												<?php 
												echo $_FILES['uphoto']['name'].'</br>';
												echo $_FILES['uphoto']['tmp_name'].'</br>';
												echo $_FILES['uphoto']['size'].'</br>';
												echo $_FILES['uphoto']['type'].'</br>';
												if(copy($_FILES['uphoto']['tmp_name'],$_FILES['uphoto']['name'])){
													echo 'success';
												}else{
												echo 'failed';
												}
												?>
														
											</td>
										</tr>
										<tr>
											<td colspan="2"><input type="button" value="登入去！！" onclick="javascript:location.href='login.php'" style="width: 100%;"></td>
										</tr>
									</table>	
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