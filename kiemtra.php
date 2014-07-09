<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kiểm tra X </title>
</head>

<body>
<?php
if(isset($_POST['Submit'])) {
    $nhapmang = $_POST['nhapmang'];
    $mang = explode(",", $nhapmang);
	$x =$_POST['x'];

    for($i = 0; $i < count($mang); $i++) {
		if($mang[$i]==$x['x']){
		echo'X thuộc mảng';
		break;
		}
		else{
		echo'X không thuộc mảng';
		}}
			
}
?>
<form id="form1" name="form1" method="post" action="kiemtra.php">
<table width="50%" border="0">
<tr>
<td colspan="2" align="center"> Các số cách nhau bởi dấu &quot;,&quot; </div></td>
</tr>
<tr align="center" valign="center"><td width="50%">Nhâp mảng:</td>
<td width="50%">
<input name="nhapmang" type="text" id="nhapmang" size="40" />
</td></tr>
<tr align="center" valign="center"><td width="50%">Nhâp X:</td>
<td width="50%">
<input name="x" type="text" id="x" size="40" />
</td></tr>
<tr>
<td colspan="2" align="center">
<input name="Submit" type="submit" value="Kiểm tra" />
</td>
</tr>
<tr align="center" valign="center"><td>Kết Quả : </td>
<td>
<input name="tangdan" type="text" id="tangdan" size="40" value="<?php if(isset($a))echo $a; ?>" readonly="readonly"/>
</td></tr>
</table>
</form>
</body>
</html>