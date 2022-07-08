<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>งานที่ 2. ลบข้อมูลลูกค้า</title>
</head>
<body>
<?php
/* เชื่อมต่อกับ Database Server */
$server=$_SERVER['HTTP_HOST'];
$username="admin2";
$password="1234";
$database="dbbook";
$conn=mysqli_connect($server,$username,$password,$database);
/* ตรวจสอบการเชื่อมต่อ database server */
if(!$conn){
die("เกิดข้อผิดพลาดในการเชื่อมต่อกับเครื่องให้บริการฐานข้อมูล!!!!!".mysqli_connect_error());
}
/* กำหนดตัวแปร $sql เพื่อเก็บข้อความ ซึ่งข้อความที่เก็บเป็นภาษา SQL */
$sql="DROP TABLE tblcustomer";
/* ตรวจสอบผลการลบตารางลูกค้า */
if(!mysqli_query($conn,$sql))
echo "<p><div align='center'>คำเตือน : ระบบไม่สามารถลบตารางนี้ได้ </div></p>";
else
echo "<div align='center' style='color:#66DD00;'><h2>ระบบลบ ตาราง เรียบร้อยแล้ว</h2></div>";
echo "<div align='center' style='color:#CCCCCC'><a href='j02-main.php'>กลับหน้าจัดการตารางลูกค้า
 </a></div>";
/* ปิดการเชื่อมต่อกับ database ที่ใช้งาน และ database server */
mysqli_close($conn);
?>
</body>
</html>