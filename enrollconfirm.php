<?php
	session_start();
	require("DBconnect.php");

	$uaccount = $_POST['uaccount'];
	$upsw = $_POST['upsw'];
	$urole = $_POST['urole'];

	echo $uaccount.$upsw.$urole;

	$SQL="INSERT INTO user (uaccount, upsw, uRole) VALUES ('$uaccount', '$upsw', '$urole')";
	if (mysqli_query($link, $SQL)) {
		echo "<script type='text/javascript'>";
		echo "alert('註冊成功')";
		echo "</script>";
		echo "<meta http-equiv='Refresh' content='0; url=list.php'>";
	}else{
		echo "<script type='text/javascript'>";
		echo "alert('註冊失敗')";
		echo "</script>";
		echo "<meta http-equiv='Refresh' content='0; url='enroll.php'>";
	}	
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
						<h1 id="logo">會員資料</h1>
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
													<td><?php echo $uaccount; ?></td>
												</tr>
												<tr>
													<td>密碼</td>
													<td><?php echo $upsw; ?></td>
												</tr>
												<tr>
													<td>身分別</td>
													<td><?php echo $urole; ?></td>
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