<!DOCTYPE html>
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>งานที่ 7 ลบตารางข้อมูลสินค้า</title>
 </head>
 <body>
 <?php
 include("db.inc.php");
 $sql="DROP TABLE tblproduct";
 if( !mysqli_query($conn,$sql) )
 echo "<p><div align='center'>ค าเตือน : ระบบไม่สามารถลบตารางนี้ได้ </div></p>";
 else
 echo "<div align='center' style='color:#66DD00;'><h2>ระบบลบ ตารางสินค้า เรียบร้อยแล้ว</h2></div>";
 echo "<div align='center' style='color:#CCCCCC'><a href='j07-main.php'>กลับหน้าจัดการตารางสินค้า</a></div>";
 mysqli_close($conn);
?>
 </body>
</html>