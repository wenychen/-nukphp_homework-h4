<?php
	session_start();
	require("DBconnect.php");
	
	$uNo=$_POST['uNo'];
	$uaccount = $_POST['uaccount'];
	$upsw = $_POST['upsw'];
	$urole = $_POST['urole'];

	echo $uNo.$uaccount.$upsw.$urole;

	$SQL="UPDATE user SET uaccount='$uaccount', upsw='$upsw', uRole='$urole' WHERE uNo='$uNo'";
	
	if (mysqli_query($link, $SQL)) {
		echo "<script type='text/javascript'>";
		echo "alert('修改成功')";
		echo "</script>";
		echo "<meta http-equiv='Refresh' content='0; url=list.php'>";
	}else{
		echo "<script type='text/javascript'>";
		echo "alert('修改失敗')";
		echo "</script>";
		echo "<meta http-equiv='Refresh' content='0; url='enroll.php'>";
	}	


?>

