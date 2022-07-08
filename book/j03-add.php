<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>งานที่ 3 งานลงทะเบียนสมาขิก</title>
</head>

<body>
    <?php
 $server=$_SERVER["HTTP_HOST"];
 $username="admin2"; /* ชื่อผู้ใช้ username ของผู้เรียน */
 $password="1234"; /* รหัสผ่าน password ของผู้เรียน */
 $database="dbbook"; /* ฐานข้อมูลของผู้เรียน */
 $conn=mysqli_connect($server,$username,$password,$database); /*  ขั้นตอนที่ 1 */
 mysqli_set_charset($conn, "utf8"); /* ใช้เพื่อเก็บรหัสภาษา ให้เป็น utf8 เพื่อแสดงภาษาไทยได้ */
 if(!$conn){
 die("เกิดข้อผิดพลาดในการเชื่อมต่อกับเครื่องให้บริการฐานข้อมูล!!!".mysqli_connect_error());
 }
 $c_id=$_POST["cus_id"];
 $c_name=$_POST["cus_name"];
 $c_addr=$_POST["cus_addr"];
 $c_tel=$_POST["cus_tel"];
 $c_degree=$_POST["cus_degree"];
 /*$c_hobby1=$_POST["cus_hobby1"];
 $c_hobby2=$_POST["cus_hobby2"];
 $c_hobby3=$_POST["cus_hobby3"];*/
 if(!isset($_POST["cus_hobby1"])){
     $c_hobby1='0';
 }
 else{
    $c_hobby1=$_POST["cus_hobby1"];
 }
 if(!isset($_POST["cus_hobby2"])){
    $c_hobby2='0';
}
else{
    $c_hobby2=$_POST["cus_hobby2"];
 }
if(!isset($_POST["cus_hobby3"])){
    $c_hobby3='0';
}
else{
    $c_hobby3=$_POST["cus_hobby3"];
 }
 echo $c_hobby1 ;
 echo $c_hobby2 ;
    echo $c_hobby3;
 $SQL="INSERT INTO tblcustomer(cus_id,cus_name,cus_addr,cus_tel,cus_degree,cus_hobby1,cus_hobby2,cus_hobby3) ";
 $SQL=$SQL."VALUES('$c_id','$c_name','$c_addr','$c_tel','$c_degree','$c_hobby1','$c_hobby2','$c_hobby3')";
 if(mysqli_query($conn,$SQL)) 
 echo "<p><h2 style='color:#00FF00;' align='center'>ระบบได้ท าการลงทะเบียนลูกค้าเรียบร้อยแล้ว</h2>
</p>";
 else
 echo "<p><h2 style='color:#FF0000;' align='center'>เกิดข้อผิดพลาดในการลงทะเบียนลูกค้า</h2></p>";
 echo "<p align='center'><a href='j01-main.php'>กลับหน้าหลัก</a></p>";
 mysqli_close($conn); 
 ?>
</body>

</html>