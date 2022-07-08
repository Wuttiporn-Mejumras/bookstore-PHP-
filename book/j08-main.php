<!DOCTYPE html>
 <html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <title>งานที่ 8 เพิ่มรายการหนังสือที่จ าหน่าย</title>
 </head>
 <style>
 body{font-family:Tahoma;font-size:13px;}
 .home-icon{width:25px; height:25px;}
 h2{font-face:"Tahoma";color:#00CC00;}
 a{text-decoration:none;}
 a:visited{color:#0000FF;}
 </style>
 <body>
 <h2 style="color:#00CC66;">งานที่ 8. งานเพิ่มรายการหนังสือที่จ าหน่าย</h2>
 <a href='j01-main.php'><img class='home-icon' src='home_icon01.jpg'>กลับหน้าหลัก</a>
 <hr width='700' align='left' />
 <form name="frmbook" method="POST" action="j08-add.php" enctype='multipart/form-data'>
 <table width="700" border="0" cellpadding='5' cellspacing='3' >
 <tr>
 <td align="right">รหัสหนังสือ</td>
 <td><input type="text" name="book_id"></td>
 </tr>
 <tr>
 <td align="right">ชื่อหนังสือ</td>
 <td><input type="text" name="book_title"></td>
 </tr>
 <tr>
 <td align="right">รายละเอียด</td>
 <td><textarea name="book_detail" cols='50' rows='3'></textarea></td>
 </tr>
 <tr>
 <td align="right">ราคาต่อเล่ม</td>
 <td><input type="text" name="book_price" size='10'></td>
</tr>
 <tr>
 <td align="right">จ านวนที่มี</td>
 <td><input type="text" name="book_unit" size='10'></td>
 </tr>
 <tr>
 <td align="right">รูปภาพ</td>
 <td><input type="file" name="book_img" id="book_img"></td>
 </tr>
 <tr>
 <td align='right'></td>
 <td><input type="submit" name="submit" value="เพิ่มสินค้า"></td>
 </tr>
 </table>
 </form>
 <hr width='700' align='left'>
 </body>
 </html>