 <!DOCTYPE html>
 <html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <title>งานที่ 5 แก้ไขข้อมูลลูกค้า</title>
 </head>
 <body>
 <?php
 $c_id=$_POST["cus_id"];
 $c_name=$_POST["cus_name"];
 $c_addr=$_POST["cus_addr"];
 $c_tel=$_POST["cus_tel"];
 $c_degree=$_POST["cus_degree"];
 /* ตรวจสอบ $_POST ของงานอดิเรก1  */
 if(isset($_POST["cus_hobby1"]))
   $c_hobby1=$_POST["cus_hobby1"];
 else
   $c_hobby1="";
 /* ตรวจสอบ $_POST ของงานอดิเรก2  */
 if(isset($_POST["cus_hobby2"]))
   $c_hobby2=$_POST["cus_hobby2"];
 else
   $c_hobby2="";
 /* ตรวจสอบ $_POST ของงานอดิเรก3  */
 if(isset($_POST["cus_hobby3"]))
   $c_hobby3=$_POST["cus_hobby3"];
 else
   $c_hobby3="";
 $server=$_SERVER['HTTP_HOST'];
 $username="admin2";
 $password="1234";
 $database="database_name";
 $conn=mysqli_connect($server,$username,$password,$database);
 if(!$conn){
  die("เกิดข้อผิดพลาดในการเชื่อมต่อกับเครื่องให้บริการฐานข้อมูล!!!!!".mysqli_connect_error());
 }
 mysqli_set_charset($conn,"utf8");
 $SQL="UPDATE tblcustomer 
	  SET cus_name='$c_name',
	  cus_addr='$c_addr',
	  cus_tel='$c_tel',
	  cus_degree='$c_degree',
	  cus_hobby1='$c_hobby1',
	  cus_hobby2='$c_hobby2',
	  cus_hobby3='$c_hobby3'
	  WHERE cus_id='$c_id'
	  ";
 if(!mysqli_query($conn,$SQL))
   die("เกิดข้อผิดพลาดในการแก้ไขข้อมูลลูกค้า").mysqli_error();
 else
   echo "<div align='center'><h2>ระบบทำการแก้ไขข้อมูลลูกค้าเรียบร้อยแล้ว</h2></div>";
 echo "<div align='center'><a href='j01-main.php'>|  กลับหน้าหลัก |</a></div>";
 mysqli_close($conn);
 ?>
 </body>
 </html>
