 <!DOCTYPE html>
 <html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>งานที่ 7 สร้างตารางข้อมูลสินค้า</title>
 </head>
 <body>
 <?php
 include("db.inc.php");
 $sql="CREATE TABLE tblproduct(
 book_id INT(5) NOT NULL,
 book_title VARCHAR(50) NOT NULL,
 book_detail TEXT,
 book_price INT(4),
 book_unit INT(3),
 book_img VARCHAR(40),
 PRIMARY KEY (book_id)
 )";
 mysqli_query($conn,$sql) or die("ค าเตือน : ระบบถูกรบกวนหรือ ตารางนี้ได้สร้างไว้แล้ว | <a href='j07-main.php'>กลับ
หน้า
สร้างตาราง |</a>");
 echo "<div align='center'><h3 style='color:#55DDFF;'>ระบบได้สร้าง ตาราง เพื่อเก็บข้อมูลสินค้าเรียบร้อยแล้ว</h3></
div>";
 echo "<div align='center' style='color:#CCCCCC'><a href='j07-main.php'>กลับหน้าจัดการตาราง สินค้า</a></div>";
 mysqli_close($conn);
 ?>
 </body>
 </html>