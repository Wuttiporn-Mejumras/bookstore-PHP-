 <!DOCTYPE html>
 <html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>งานที่ 6 ลบข้อมูลลูกค้า</title>
 </head>
 <style>
   body{font-family:Tahoma;font-size:13px;}
   a{text-decoration:none;}
 </style>
 <body>
 <div><h2 style="color:#00CC66;">งานที่ 6 งานลบข้อมูลลูกค้า</h2></div>
 <table width="800">
   <tr><td align="left"><a href="j01-main.php"><img style="width:25px; height:25px;" src="home_icon01.jpg">
   กลับหน้าหลัก</a></td></tr>
 </table>
<hr width="800" align="left">
 <form name="frmfind" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 รหัสลูกค้า <input type="text" name="emp_Rec" required>
 <input type="submit" name="find_Emp" value="ค้นหา">
 </form>
 <hr width="800" align="left">
 <?php
if(isset($_POST["find_Emp"]))
 {
   $server=$_SERVER['HTTP_HOST'];
   $username="admin2";
  $password="1234";
   $database="dbbook";
   $conn=mysqli_connect($server,$username,$password,$database);
   if(!$conn){
     die("เกิดข้อผิดพลาดในการเชื่อมต่อกับเครื่องให้บริการฐานข้อมูล!!!!!".mysqli_connect_error());
   }
   mysqli_set_charset($conn,"utf8");
  $c_id=$_POST["emp_Rec"];
   $SQL="SELECT * FROM tblcustomer WHERE cus_id='$c_id'";
   $result=mysqli_query($conn,$SQL) or die("เกิดข้อผิดพลาดในการค้นหา").mysqli_error();
   if(mysqli_num_rows($result)==1)
   {
  	$rs=mysqli_fetch_array($result);
 	$c_id=$rs["cus_id"];
	$c_name=$rs["cus_name"];
	$c_addr=$rs["cus_addr"];
 	$c_tel=$rs["cus_tel"];
	$c_degree=$rs["cus_degree"];
	$c_hobby1=$rs["cus_hobby1"];
 	$c_hobby2=$rs["cus_hobby2"];
	$c_hobby3=$rs["cus_hobby3"];
	echo "<form name='frmdel' method='POST' action='j06-delete.php'>";
	echo "<table width='700' cellpadding='2' cellspacing='5' border='0'>";
	echo "<input name='cus_id' type='hidden' value='$c_id'>";
	echo "<tr>";
 	echo "<td align='right' width='200'>รหัสลูกค้า : </td>";
	echo "<td>$c_id</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td align='right'>ชื่อลูกค้า : </td>";
	echo "<td>$c_name</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td align='right'>ที่อยู่ : </td>";
	echo "<td>$c_addr</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td align='right'>เบอร์โทรศัพท์ :</td>";
	echo "<td>$c_tel</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td align='right'>ระดับการศึกษา : </td>";
	echo "<td>ปริญญา$c_degree</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td align='right'>งานอดิเรก : </td>";
	if($c_hobby1==1)
	  echo "- อ่านหนังสือ <br>";
	if($c_hobby2==1)
	  echo "- เล่นอินเทอร์เน็ต <br>";
	if($c_hobby3==1)
	  echo "- ดูหนัง";
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td></td>";
	echo "<td><input type='submit' name='rec_del' value='ลบลูกค้า' onclick=\"return confirm('ท่านต้องการลบ
       ข้อมูลลูกค้ารายนี้ใช่หรือไม่')\"></td>"; /* เป็นคำสั่งแสดงข้อความเพื่อยืนยันการลบจากผู้ใช้ */
	echo "</tr>";
	echo "</table>";
	echo "</form>";
	}else{
	  echo "<h3>ไม่พบข้อมูลลูกค้าที่ต้องการลบ</h3>";
	  exit(0);
	}
 }
 ?>
 </body>
 </html>
