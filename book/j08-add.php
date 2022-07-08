<!DOCTYPE html>
 <html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>งานที่ 8 งานเพิ่มรายการหนังสือที่จำหน่าย</title>
 </head>
 <body>
 <?php
 $book_id=$_POST["book_id"];
 $book_title=$_POST["book_title"];
 $book_detail=$_POST["book_detail"];
 $book_price=$_POST["book_price"];
 $book_unit=$_POST["book_unit"];
 include("db.inc.php");
$file_img=basename($_FILES["book_img"]["name"]);
$path_img="image/".$file_img; /*-- เพิ่มคำสั่งให้กำหนดตำแหน่งของภาพ(directory) */ 
if(file_exists($path_img)){
 echo "<p align='center'>Error#2 : มีไฟล์นี้ในระบบ อยู่แล้ว !!!</p>";
 echo "<div align='center'>|<a href='j08-main.php'> กลับหน้าเพิ่มหนังสือ </a>|</div>";
 exit(0);
 }
 if(move_uploaded_file($_FILES["book_img"]["tmp_name"],$path_img)){
 echo "<p align='center'>ไฟล์ ". basename( $_FILES["book_img"]["name"]). " อัพโหลดส าเร็จ </p>";
 }else{
 echo "<p align='center'>Error#6 : เกิดข้อผิดพลาดในการอัพโหลดไฟล์รูปภาพ</p>";
 echo "<div align='center'>|<a href='j08-main.php'> กลับหน้าเพิ่มหนังสือ </a>|</div>";
 exit(0);
 }
 $sql="INSERT INTO tblproduct(book_id,book_title,book_detail,book_price,book_unit,book_img)
 VALUES('$book_id','$book_title','$book_detail','$book_price','$book_unit','$file_img')
 ";
 if(!mysqli_query($conn,$sql)){
 echo "<p><div align='center'>ค าเตือน : ระบบไม่สามารถเพิ่มข้อมูลหนังสือได้ </div></p>";
 }else{
 echo "<div align='center'><h2 style='color:#55DDFF;'>ระบบ บันทึกข้อมูลหนังสือเรียบร้อยแล้ว
</h2></div>";
 }
 mysqli_close($conn);
 echo "<br>";
 ?>
 <div align='center'>|<a href='j08-main.php'> หน้าเพิ่มหนังสือ </a>|</div>
 </body>
 </html>