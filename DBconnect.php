<?php

$link = @mysqli_connect( 
            'localhost',  // MySQL主機名稱 
            'root',       // 使用者名稱 
            'nukim3201',  // 密碼
            'php');  // 預設使用的資料庫名稱

		// $dbname="php";
		// if ( !mysqli_select_db($link, $dbname)){
		//    	die("無法開啟 $dbname 資料庫!<br/>");
		// }else{
  //  			echo "資料庫: $dbname 開啟成功!<br/>";
  //  		}
// $SQL="SELECT * FROM user";

// // print_r ($result);
// // print_r($row);
// if($result=mysqli_query($link,$SQL)){
// 	// echo "<table border='1'>";
// 	// while ($row=mysqli_fetch_assoc($result)){
// 	// 	echo "<tr>";
// 	// 	echo "<td>".$row["uNo"]."</td><td>".$row["uaccount"]."</td><td>".$row["upsw"]."</td><td>".$row["uRole"]."</td><br/>";
// 	// 	echo "</tr>";
// 	// }
// 	// echo "</table>";
// }

?>