 <!DOCTYPE html>
 <html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>งานที่ 7 งานสร้างฐานข้อมูลส าหรับเก็บสินค้าหนังสือ</title>
 </head>
 <style>
 body{font-family:Tahoma;font-size:13px;}
 h2{font-face:"Tahoma";color:#00CC00;}

 a{text-decoration:none;}
 img{width:25px;height:25px;}
 </style>
 <body>
 <h2>งานที่ 7 งานสร้างฐานข้อมูลส าหรับเก็บสินค้าหนังสือ</h2>
 <?php
 function dbConnect(){
 global $conn;
 $server=$_SERVER['HTTP_HOST'];
 $username="admin2";
 $password="1234";
 $database="dbbook";
 $conn=mysqli_connect($server,$username,$password,$database);
 if(!$conn){
 die("เกิดข้อผิดพลาดในการเชื่อมต่อกับเครื่องให้บริการฐานข้อมูล!!!!!".mysqli_connect_error());
 }
 mysqli_set_charset($conn,"utf8");
 }
 include("func_qry.inc.php"); /* เรียกใช้ไฟล์ func_qry.inc.php */
 dbConnect(); /* เรียกใช้ function dbConnect() */
 echo "<a href='j01-main.php'><img src='home_icon01.jpg'>กลับหน้าหลัก</a>";
 echo "<hr width='800' align='left'>";
 $result=qry_create_tblproduct($conn);/* เรียกใช้ฟังก์ชันที่อยู่ในไฟล์ func_qry.inc.php ชื่อ */
 qry_create_tblproduct($conn);
 if($result!="")
 $status="YES";
 else
 $status="NO";
 echo "<table border='0' width='600'>";
 echo "<tr>";
 echo "<td>ตารางหนังสือ(tblproduct)</td>";
 echo "<td>สถานะ : $status</td>";
 echo "<td>";
 echo "<a href='j07-create.php'>สร้างตาราง | </a>";
 echo "<a href='j07-drop.php'>ลบตาราง</a>";
 echo "</td>";
 echo "</tr>";
echo "<table>";
 echo "<table width='600' border='1' cellspacing='0' cellpadding='0' bordercolor='#CCCCCC'>";
 echo "<tr align='center' bgcolor='#BBBBBB'>";
 echo "<td width='70'>ล าดับ</td>";
 echo "<td>ชื่อฟิลด์</td>";
 echo "<td>ชนิดข้อมูล</td>";
 echo "<td>ชื่อคีย์</td>";
 echo "</tr>";
 $row=1;
 if( $result!="" ){
 while( $rs=mysqli_fetch_array($result) ){
 echo "<tr>";
 echo "<td align='center'>$row</td>";
 echo "<td>$rs[Field]</td>";
 echo "<td>$rs[Type]</td>";

 echo "<td>$rs[Key]</td>";
 echo "</tr>";
 $row++;
 }
 }else{
 echo "<tr><td colspan='4' align='center'> ไม่มีฟิลด์ หรือ ยังไม่สร้างตาราง </td></tr>";
 }
 echo "</table>";
 mysqli_close($conn);
 ?>
 </body>
 </html>