<?php
	session_start();

	$link = @mysqli_connect( 
            'localhost',  // MySQL主機名稱 
            'root',       // 使用者名稱 
            'nukim3201',  // 密碼
            'php');  // 預設使用的資料庫名稱
?>

<?php
   if (isset($_COOKIE['uaccount'])){
   		$cookieID=$_COOKIE['uaccount'];
   		echo '歡迎'.$cookieID.'再度光臨!!';
   }else{
   		echo '恭喜你發現本網站!!!';
   }

?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>會員登入</title>
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
						<h1 id="logo">登入</h1>
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
											<img src="/h3/images/user.png" width="150px" height="150px">
										</tr>
										<tr>
											<td><input type="text" name="uaccount" style="text-align: center;" onkeyup="value=value.replace(/[^\w\.\/]/ig,'')" maxlength="20" placeholder="您的帳號" ></td>
										</tr>
										<tr>
											<td><input type="password" name="upsw" style="text-align: center;" onkeyup="value=value.replace(/[^\w\.\/]/ig,'')" maxlength="20"placeholder="您的密碼" ></td>
										</tr>
										<tr>
											<td>
												<input type="submit" name="" value="登入" style="width: 100%;">
											</td>
										</tr>
										<tr>
											<td>
												<input type="button" value="忘記帳號與密碼" onclick="javascript:location.href='forget.php'" style="width: 100%;">
											</td>
										</tr>
										<tr>
											<td>
												<input type="button" value="註冊去！" onclick="javascript:location.href='register.php'" style="width: 100%;">
											</td>
										</tr>
									</table>
								</form>		
								</section>
							</div>
						</div>
					</div>


			<!-- Footer -->

		<?php require_once("all_footer.php"); ?>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

		<?php

		if(isset($_POST['uaccount'])){
			if ($_POST['uaccount']!=null) {
			$uaccount = $_POST['uaccount'];
			$upsw = $_POST['upsw'];

			$SQL="SELECT * FROM user WHERE uaccount='$uaccount' AND upsw='$upsw'";

			$result=mysqli_query($link,$SQL);
			

			if(mysqli_num_rows($result)==1){
				$row=mysqli_fetch_assoc($result);
				if($row['uRole']=='user'){
					$_SESSION['login']='Yes';
					setcookie('uaccount',$uaccount,time()+17280);
				    header('Location: signup.php');
				}elseif ($row['uRole']=='admin') {
					$_SESSION['adminlogin']='Yes';
					setcookie('uaccount',$uaccount,time()+17280);
				    header('Location: admin.php');
				}else{
					echo '無法判斷身份別，請洽系統管理員';
				}
			}else{
				echo '帳號或密碼輸入錯誤';
				header('Location: loginfail.php');
				}			
			
			}else{
				echo '您尚未輸入帳號或密碼';
				}
			}else{
			echo '歡迎登入，請輸入帳號或密碼';		
			}
		
		?>

	</body>
</html>