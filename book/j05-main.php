<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>งานที่ 5 แก้ไขข้อมูลลูกค้า</title>
</head>
<style>
	body {
		font-family: Tahoma;
		font-size: 13px;
	}

	a {
		text-decoration: none;
	}
</style>

<body>
	<!-- เริ่ม ส่วนหัวของเว็บ -->
	<div>
		<h2 style="color:#00CC66;">งานที่ 5 งานแก้ไขข้อมูลลูกค้า</h2>
	</div>
	<table width="800">
		<tr>
			<td align="left"><a href="j01-main.php"><img style="width:25px; height:25px;" src="home_icon01.jpg">
					กลับหน้าหลัก</a></td>
		</tr>
	</table>
	<!-- สิ้นสุด ส่วนหัวของเว็บ -->
	<hr width="800" align="left">
	<form name="frmfind" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		รหัสลูกค้า <input type="text" name="emp_Rec" required> /* required คือ บังคับให้กรอกข้อมูล */
		<input type="submit" name="find_Emp" value="ค้นหา">
	</form>
	<hr width="800" align="left">
	<?php
 if(isset($_POST["find_Emp"])){
    $c_id=$_POST["emp_Rec"];
	$server=$_SERVER['HTTP_HOST'];
	$username="admin2";
	$password="1234";
	$database="dbbook";
	$conn=mysqli_connect($server,$username,$password,$database);
	if(!$conn){
	   die("เกิดข้อผิดพลาดในการเชื่อมต่อกับเครื่องให้บริการฐานข้อมูล!!!!!".mysqli_connect_error());
}
	mysqli_set_charset($conn,"utf8"); /* กำหนดการเข้ารหัสเป็นแบบ utf8 เพื่อไม่เกิดปัญหากับภาษาไทย */
	$SQL="SELECT * FROM tblcustomer WHERE cus_id='$c_id'";
	$result=mysqli_query($conn,$SQL) or die("เกิดข้อผิดพลาดในการค้นหา").mysqli_error();
	if(mysqli_num_rows($result)==1){
	  $rs=mysqli_fetch_array($result);
	  $c_id=$rs["cus_id"];
	  $c_name=$rs["cus_name"];
	  $c_addr=$rs["cus_addr"];
	  $c_tel=$rs["cus_tel"];
	  $c_degree=$rs["cus_degree"];
	  $c_hobby1=$rs["cus_hobby1"];
	  $c_hobby2=$rs["cus_hobby2"];
	  $c_hobby3=$rs["cus_hobby3"];
	  echo "<form name='frmchange' method='POST' action='j05-edit.php'>";
	  echo "<table border='0' cellpadding='5' cellspaning='2' width='100%' bordercolor='blue'>";
 	  echo "<tr>";
	  echo "<td width='150' align='right'> รหัสลูกค้า</td>";
	  echo "<td><input name='cus_id' type='text' value='$c_id' size='15' readonly ></td>";
	  echo "</tr>";
	  echo "<tr>";
	  echo "<td align='right'> ชื่อลูกค้า</td>";
	  echo "<td><input name='cus_name' type='text' size='50' value='$c_name' ></td>";
	  echo "</tr>";
	  echo "<tr>";
	  echo "<td align='right'>ที่อยู่</td>";
	  echo "<td><textarea name='cus_addr' rows='3' cols='50'>$c_addr</textarea></td>";
	  echo "</tr>";
	  echo "<tr>";
	  echo "<td align='right'>เบอร์โทร</td>";
	  echo "<td><input name='cus_tel' type='text' value='$c_tel' /></td>";
	  echo "</tr>";
	  echo "<tr>";
	  echo "<td align='right'>ระดับการศึกษา</td>";
	  echo "<td>";
	  $d_check_1="";
	  $d_check_2="";
	  $d_check_3="";
	  if($c_degree=="ตรี")
	     $d_check_1="checked";
	  else if($c_degree=="โท")
	     $d_check_2="checked";
	  else if($c_degree=="เอก")
	     $d_check_3="checked";
	  echo "<input type='radio' name='cus_degree' value='ตรี'".$d_check_1."> ปริญญาตรี";
		  echo "<input type='radio' name='cus_degree' value='โท'".$d_check_2."> ปริญญโท";
		  echo "<input type='radio' name='cus_degree' value='เอก'".$d_check_3."> ปริญญเอก";
	  echo "</td>";
	  echo "</tr>";
	  echo "<tr>";
	  echo "<td align='right'>งานอดิเรก</td>";
	  echo "<td>";
	  $hobby1="";
	  $hobby2="";
	  $hobby3="";
	  if($c_hobby1==1)
	     $hobby1="CHECKED";
	  if($c_hobby2==1)
	     $hobby2="CHECKED";
	  if($c_hobby3==1)
	     $hobby3="CHECKED";
	  echo "<input name='cus_hobby1' type='checkbox' value='1' $hobby1> อ่านหนังสือ "; 
	  echo "<input name='cus_hobby2' type='checkbox' value='1' $hobby2> เล่นอินเทอร์เน็ต ";
	  echo "<input name='cus_hobby3' type='checkbox' value='1' $hobby3> ดูหนัง ";
	  echo "</td>";
	  echo "</tr>";
	  echo "<td align='right'></td>";
	  echo "<td><input name='submit' type='submit' value='แก้ไขข้อมูล'></td>";
	  echo "</tr>";
	  echo "</table>";
	  echo "</td></tr></table>";
	  echo "</form>";
	 }else{
	    echo "ไม่พบข้อมูลลูกค้าที่ต้องการแก้ไขหรือข้อมูลลูกค้ามีมากกว่า 1 รายการ"; 
	    exit(0);
	 }
    mysqli_close($conn);
 }
 ?>
</body>

</html>