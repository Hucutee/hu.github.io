<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="csss.css" />
<title>Web của Hậu</title>
</head>


<body  bgcolor="#CCFFFF";

<div class="tieude">
	Bạn có thể đăng nhập tại đây.
</div>
<p style="font-size:18px; color:red;margin:5px;">Các mục dấu * là bắt buộc.</p>
<div class="dangky">
  
  <form action="hello.php" method="post" enctype="multipart/form-data">
	<table width="100%" border="1" style="border-collapse:collapse;">
  <tr>
    <td width="40%">Email : <strong style="color:red;"> (*)</strong></td>
    <td width="60%"><input type="text" name="email" size="50"></td>
  </tr>
    <td>Tên : <strong style="color:red;"> (*)</strong></td>
   <td width="60%"><input type="text" name="name" size="50"></td>
  </tr>
  <tr>
    <td colspan="2">
    	 
           <p><input id="button" type="submit" name="dangnhap" value="Submit" /></p>
         
    </td>
    </tr>
</table>
</form>

</div>

 
</body>
</html>
