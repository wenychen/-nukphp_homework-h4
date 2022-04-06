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
									<form action="rinfo.php" method="post" style="width: 60%;" enctype="multipart/form-data">
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
												<tr>
													<td>姓名</td>
													<td><input type="text" name="uname"placeholder="請輸入您的名字" required="required"></td>
												</tr>
												<tr>
													<td>電話</td>
													<td><input type="text" name="utel" minlength="10" maxlength="10" oninput="value=value.replace(/[^\d]/g,'')" pattern="[0-9]{10}"placeholder="請輸入您的聯絡電話" required="required"></td>
												</tr>
												<tr>
													<td>E-mail</td>
													<td><input type="email" name="uemail"placeholder="例如：abc@gmail.com" required="required"></td>
												</tr>
												<tr>
													<td>生日</td>
													<td><input type="date" name="ubir" required="required"></td>
												</tr>
												<tr>
													<td>身份證字號</td>
													<td><input type="text" name="uid" onkeyup="value=value.replace(/[^\w\.\/]/ig,'')" pattern="[a-zA-Z0-9]{10}" placeholder="請輸入您的身份證字號" required="required"></td>
												</tr>
												<tr>
													<td>性別</td>
													<td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="usex" value="1" required="required">男&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="usex" value="2">女&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="usex" value="3">不方便透露</td>
												</tr>
												<tr>
													<td rowspan="2">會員照</td>
													<td>
														<label class="btn btn-primary" style="width: 100%">
																<input name="uphoto" id="photo" style="display:none;" type="file" onchange="selectImgFile(this.files)" />
																<i class="fa fa-picture-o"></i> 上傳會員照
														</label>
													</td>
												</tr>
												<tr>
													<td>
														<span id="file_name"></span>		
														    <script>
    
														      var inputFile = document.getElementById('photo');

														      inputFile.addEventListener('change', function(e) {

														        var fileData = e.target.files[0]; // 檔案資訊
														        var fileName = fileData.name; // 檔案名稱
														        // var fileType = fileData.type; // 檔案類型
														        // var fileSize = Math.floor(fileData.size * 0.001); // 檔案大小轉成kb
														        // var fileTime = fileData.lastModifiedDate;

														        // console.log(fileData); // 用開發人員工具可看到資料

														        document.getElementById('file_name').innerText = fileName;
														        // document.getElementById('file_type').innerText = fileType;
														        // document.getElementById('file_size').innerText = fileSize + 'kb';
														        // document.getElementById('file_time').innerText = fileTime;
														        // document.getElementById('file_thumbnail').src = URL.createObjectURL(fileData);

														      }, false);

														    </script>
													</td>
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