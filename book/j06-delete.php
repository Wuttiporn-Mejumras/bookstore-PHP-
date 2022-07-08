<!DOCTYPE html>
 <html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <title>งานที่ 6 ลบข้อมูลลูกค้า</title>
 </head>
 <style>
   body{font-family:Consolas, Tahoma; font-size:13px;}
   a{text-decoration:none;}
 </style>
 <body>
<?php
	$server=$_SERVER['HTTP_HOST'];
$username="admin2";
	$password="1234";
	$database="database_name";
	$conn=mysqli_connect($server,$username,$password,$database);
	if( !$conn ){
	   die("เกิดข้อผิดพลาดในการเชื่อมต่อกับเครื่องให้บริการฐานข้อมูล!!!!!".mysqli_connect_error());
	}
	mysqli_set_charset($conn,"utf8");
	$c_id=$_POST["cus_id"];
	$SQL="DELETE FROM tblcustomer WHERE cus_id='$c_id'";
	if( !mysqli_query($conn,$SQL) )
		die("เกิดข้อผิดพลาดในการลบข้อมูลลูกค้า") . mysqli_error();
	else
	echo "<h3>ระบบทำการลบข้อมูลลูกค้าเรียบร้อยแล้ว</h3>";
	echo "<a href='j01-main.php'>| กลับหน้าหลัก |</a>";
	mysqli_close($conn);
 ?>
 </body>
 </html>
