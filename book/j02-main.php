<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css">
    <title>งานที่ 2 งานสร้างฐานข้อมูลสำหรับเก็บข้อมูลลูกค้า</title>
</head>

<body>
    <h2>งานที่ 2 งานสร้างฐานข้อมูลสำหรับเก็บข้อมูลลูกค้า</h2>
    <?php
/* เชื่อมต่อกับ Database Server */
$server=$_SERVER['HTTP_HOST'];
$username="admin2";
$password="1234";
$database="dbbook";
$conn=mysqli_connect($server,$username,$password,$database);
/* ตรวจสอบการเชื่อมต่อ database server */
if(!$conn){
die("เกิดข้อผิดพลาดในการเชื่อมต่อกับเครื่องให้บริการฐานข้อมูล!!!!!".mysqli_connect_error());
}
 echo "<a href='j01-main.php'><img class='home-icon' src='home_icon01.png' align='left' >กลับหน้าหลัก</a>";
echo "<hr width='800' align='left'>";
/* ก าหนดตัวแปร $sql_chk เพื่อเก็บข้อความ ซึ่งข้อความที่เก็บเป็นภาษา SQL */
$sql_chk="describe tblcustomer";
/* ท าการประมวลผลคำสั่งภาษา SQL */
$result=mysqli_query($conn,$sql_chk);
/* ตรวจสอบการเรียกใช้ตารางลูกค้า(tblcustomer) */
if($result != "")
$status="YES";
else
$status="NO";
echo "<table border='0' width='800'>";
echo "<tr>";
echo "<td>ตารางลูกค้า(tblcustomer)</td>";
echo "<td>สถานะ : $status</td>";
echo "<td>";
echo "<a href='j02-create.php'>สร้างตาราง | </a>";
echo "<a href='j02-drop.php'>ลบตาราง</a>";
echo "</td>";
echo "</tr>";
echo "<table>";
echo "<table width='1000' border='1' cellspacing='0' cellpadding='0' bordercolor='#CCCCCC'>";
echo "<tr align='center' bgcolor='#BBBBBB'>";
echo "<td width='70'>ลำดับ</td>";
echo "<td>ชื่อฟิลด์</td>";
echo "<td>ชนิดข้อมูล</td>";
echo "<td>ชื่อคีย์</td>";
echo "</tr>";
$row=1;
if($result!="")
{
/* แยกข้อมูลที่อยู่ในแถวปัจจุบันมาแยกไปเป็นอาร์เรย์ */
while($rs=mysqli_fetch_array($result)){
echo "<tr>";
echo "<td align='center'>$row</td>";
echo "<td>$rs[Field]</td>";
echo "<td>$rs[Type]</td>";
echo "<td>$rs[Key]</td>";
echo "</tr>";
$row++;
}
}else{
echo "<tr><td colspan='4' align='center' class='notfound'> ไม่มีฟิลด์ หรือ ยังไม่สร้างตาราง </td></tr>";
}
echo "</table>";
/* ปิดการเชื่อมต่อกับ database ที่ใช้งาน และ database server */
mysqli_close($conn);
?>
</body>

</html>