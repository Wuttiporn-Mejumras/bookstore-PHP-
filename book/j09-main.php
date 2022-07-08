<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<style>
body{font-family:Tahoma;font-size:13px;}
.home-icon{width:25px; height:25px;}
h2{font-face:"Tahoma";color:#00CC00;}
a{text-decoration:none;}
a:visited{color:#0000FF;}
</style>
<body>
<h2 style="color:#00CC66;">งานที่ 9. งานแสดงรายการหนังสือที่จ าหน่าย</h2>
<a href='j08-add.php'><img class='home-icon' src='home_icon01.png' />กลับหน้าหลัก</a>
<hr width='700' align='left' />
<table border="1" cellpadding='5' cellspacing='0'>
<tr align='center' bgcolor="#EEEEEE" align='center'>
<td width='80'>รหัสหนังสือ</td>
<td width='200'>ชื่อหนังสือ</td>
<td width='400'>รายละเอียด</td>
<td width='70'>ราคา</td>
<td width='50'>จำนวน</td>
<td width='100'>รูปภาพ</td>
</tr>
<?php
include("db.inc.php");
$sql="SELECT *
FROM tblproduct
ORDER BY book_id
";
$result=mysqli_query($conn,$sql) or die("เกิดข้อผิดพลาด") . mysqli_error();
$path_img="image/"; 
while($rs=mysqli_fetch_array($result)){
echo "<tr>";
echo "<td align='center'>".$rs["book_id"]."</td>";
echo "<td>".$rs["book_title"]."</td>";
echo "<td>".$rs["book_detail"]."</td>";
echo "<td align='center'>".$rs["book_price"]."</td>";
echo "<td align='center'>".$rs["book_unit"]."</td>";
echo "<td align='center'>";
echo "<img src='".$path_img.$rs["book_img"]."' width='60' height='80' /><br>";
echo $rs["book_img"];
echo "</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>
</body>
</html>