<?php
 function qry_create_tblproduct($conn){ /* สร้างฟังก์ชัน เพื่อให้เรียกใช้จากไฟล์อื่น*/
 $sql_chk="describe tblproduct";
 $result=mysqli_query($conn,$sql_chk);
 return $result;
 }
 ?>