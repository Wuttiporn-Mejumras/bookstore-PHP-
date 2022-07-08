<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>งานที่ 2 สร้างตารางลูกค้า</title>
</head>
<body>
<?php
/* เชื่อมต่อกับ Database Server และเลือก database ที่ต้องการใช้งาน */
$server=$_SERVER['HTTP_HOST'];
$username="admin2";
$password="1234";
$database="dbbook";
echo $server;
echo $username;
echo $password;
echo $database;
$conn=mysqli_connect($server,$username,$password,$database);
/* ตรวจสอบการเชื่อมต่อ database server */
if(!$conn){
die("เกิดข้อผิดพลาดในการเชื่อมต่อกับเครื่องให้บริการฐานข้อมูล!!!!!".mysqli_connect_error());
}
/* กำหนดตัวแปร $sql เพื่อเก็บข้อความ ซึ่งข้อความที่เก็บเป็นภาษา SQL */
$sql="CREATE TABLE tblcustomer(
cus_id INT(10) NOT NULL AUTO_INCREMENT,
cus_name VARCHAR(50) NOT NULL,
cus_addr TEXT,
cus_tel VARCHAR(10),
cus_degree VARCHAR(3) NOT NULL,
cus_hobby1 TINYINT(1) ,
cus_hobby2 TINYINT(1) ,
cus_hobby3 TINYINT(1) ,
PRIMARY KEY (cus_id)
)";
/* สั่งให้ท าการประมวลผลภาษา SQL ที่ก าหนด */
if(!mysqli_query($conn,$sql)){
echo "<p><div align='center'>คำเตือน : ระบบไม่สามารถสร้างตารางได้ อาจเกิดจาก ตารางนี้ได้สร้าง
ไว้แล้ว</div></p>";
}else{
echo "<div align='center'><h2 style='color:#55DDFF;'>ระบบได้สร้าง ตาราง เพื่อเก็บข้อมูลเรียบร้อย
แล้ว</h2></div>";}
/* ปิดการเชื่อมต่อกับ database ที่ใช้งาน และ database server */
mysqli_close($conn);
?>
<div align='center'>|<a href="j02-main.php"> กลับหน้าจัดการตารางข้อมูล </a>|</div>
</body>
</html>