<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>งานที่4 แสดงข้อมูลลูกค้า</title>
</head>

<body>
    <style>
        body {
            font-family: Consolas, Tahoma;
            font-size: 13px;
        }
    </style>
    <!-- เริ่ม ส่วนหัวของเว็บ -->
    <div>
        <h2 style="color:#00CC66;">งานที่ 4. งานแสดงข้อมูลลูกค้า</h2>
    </div>
    <table width="90%">
        <tr>
            <td align='left'>
                <a href="j01-main.php"><img style="width:25px; height:25px;" src="home_icon01.jpg" />
                    กลับหน้าหลัก</a>
            </td>
        </tr>
    </table>
    <hr width='800' align='left' />

    <!-- สิ้นสุด ส่วนหัวของเว็บ -->
    <table border="1" cellpadding='5' cellspacing='0'>
        <tr align='center' bgcolor="#EEEEEE">
            <td width='80'>รหัสลูกค้า</td>
            <td width='200'>ชื่อลูกค้า</td>
            <td width='400'>ที่อยู่</td>
            <td width='100'>เบอร์โทรศัพท์</td>
            <td width='70'>ระดับการศึกษา</td>
            <td>งานอดิเรก</td>
        </tr>
        <?php
 $server=$_SERVER["HTTP_HOST"];
 $username="admin2"; /* ชื่อผู้ใช้ username ของผู้เรียน*/
 $password="1234"; /* รหัสผ่านpassword ของผู้เรียน*/
 $database="dbbook"; /* ฐานข้อมูลของผู้เรียน */
 $conn=mysqli_connect($server,$username,$password,$database);
 mysqli_set_charset($conn, "utf8");
 if(!$conn){
 die("เกิดข้อผิดพลาดในการเชื่อมต่อกับเครื่องให้บริการฐานข้อมูล!!!".mysqli_connect_error());
 }
 $SQL="SELECT cus_id,cus_name,cus_addr,cus_tel,cus_degree,cus_hobby1,cus_hobby2,cus_hobby3 ";
 $SQL=$SQL."FROM tblcustomer ORDER BY cus_id";
 $result=mysqli_query($conn,$SQL) or die("ระบบเกิดข้อผิดพลาดในการแสดงข้อมูลลูกค้า").mysqli_error();
 $num_data=mysqli_num_rows($result);
 if($num_data!=0)
 {
 while($rs=mysqli_fetch_array($result))
 {
 echo "<tr>";
 echo "<td>$rs[cus_id]</td>";
 echo "<td>$rs[cus_name]</td>";
echo "<td>$rs[cus_addr]</td>";
 echo "<td>$rs[cus_tel]</td>";
 echo "<td>ปริญญา$rs[cus_degree]</td>";
 echo "<td>";
 if("$rs[cus_hobby1]"==1)
 echo " อ่านหนังสือ";
 if("$rs[cus_hobby2]"==1){
 echo " เล่นอินเทอร์เน็ต";}
 else{
     echo"ไม่เล่น";
 }
 if("$rs[cus_hobby3]"==1){
 echo " ดูหนัง";}
 else{
    echo"ไม่เล่น";
}
 echo "</td>";
 echo "</tr>";

 }
 }else{
 echo "<tr align='center'><td colspan='6'>ไม่มีข้อมูลลูกค้า</td></tr>";
 }
 mysqli_close($conn);
 ?>
    </table>
</body>

</html>