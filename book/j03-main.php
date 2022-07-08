<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>งานที่ 3 ลงทะเบียนลูกค้า</title>
</head>

<body>
    <style>
        body {
            font-family: Tahoma;
            font-size: 13px;
        }
    </style>


    <div>
        <h2 style="color:#00CC66;">งานที่ 3. งานลงทะเบียนสามาชิกสำหรับลูกค้า</h2>
    </div>
    <table width="800">
        <tr>
            <td align="left"><a href="j01-main.php"><img style="width:25px; height:25px;"
            src="home_icon01.png" align="left"  />กลับหน้าหลัก</a></td>
        </tr>
    </table>
    <hr width='800' align='left' />
    <!-- สิ้นสุด ส่วนหัวของเว็บ -->
    <form name="frmemp" method="POST" action="j03-add.php">
        <table border='2' cellpadding='0' cellspacing='0' width='800'> /*  เทคนิคก าหนดเส้นขอบโดยตาราง */
            <tr>
                <td>
                    <table border="0" cellpadding="5" cellspaning="2" width="100%" bordercolor='blue'>
                        <tr>
                            <td width="150" align="right"> รหัสลูกค้า</td>
                            <td><input name="cus_id" type="text" /></td>
                        </tr>
                        <tr>
                            <td align="right"> ชื่อลูกค้า</td>
                            <td><input name="cus_name" type="text" size='50' /></td>
                        </tr>
                        <tr>
                            <td align="right">ที่อยู่</td>
                            <td><textarea name="cus_addr" rows="3" cols='50'></textarea></td>
                        </tr>
                        <tr>
                            <td align="right">เบอร์โทร</td>
                            <td><input name="cus_tel" type="text" /></td>
                        </tr>
                        <tr>
                            <td align="right">ระดับการศึกษา</td>
                            <td>
                                <input type='radio' name='cus_degree' value='ตรี' /> ปริญญาตรี
                                <input type='radio' name='cus_degree' value='โท' /> ปริญญโท
                                <input type='radio' name='cus_degree' value='เอก' /> ปริญญเอก
                            </td>
                        </tr>
                        <tr>
                            <td align="right">งานอดิเรก</td>
                            <td>
                                <input name="cus_hobby1" type="checkbox" value="1" /> อ่านหนังสือ
                                <input name="cus_hobby2" type="checkbox" value="1" /> เล่นอินเทอร์เน็ต
                                <input name="cus_hobby3" type="checkbox" value="1" /> ดูหนัง
                            </td>
                        </tr>
                        <td align="right"></td>

                        <td><input name="submit" type="submit" value="ลงทะเบียน" /></td>
            </tr>
        </table>
        </td>
        </tr>
        </table> <!-- ปิดตาราง-->
    </form>
</body>

</html>