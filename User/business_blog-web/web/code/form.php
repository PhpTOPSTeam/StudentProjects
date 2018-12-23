 <?php
 include('conn.php');
if(isset($_REQUEST['submit']))
{
	$unm=$_REQUEST['unm'];
	$passw=$_REQUEST['pass'];
	$gen=$_REQUEST['gen'];
	$count=$_REQUEST['country'];
	$ch=$_REQUEST['ch'];
	$sh=implode(',', $ch);

	echo $sq="insert into reg (unm,pass,gen,country,hob)
	values ('$unm','$passw','$gen',$count,'$sh')";
	$res=$conn->query($sq);
	if($res)
	{
		header('location:loginForm.php');
	}
	else
	{
		echo "insert not success";
	}
}
?>
<html>
<head>
</head>
<body>
	<form action="" method="POST">
	<table border="2" align="center">
		
		<tr>
		<td>USERNAME:</td> 
		<td><input type="text" name="unm"></td>
		</tr>
		<tr>
		<td>PASSWORD: </td>
		<td><input type="password" name="pass"></td>
		<tr>
		<td>Gender: </td>
		<td><input type="radio" name="gen" value="Male">MALE </td>
		<td><input type="radio" name="gen" value="Female">FEMALE</td>
		<tr>
		<td>Country: </td>
		
		<td>
		<select name="country">
		<?php
		$sel="select * from country";
		$res_sel=$conn->query($sel);
		while($r=$res_sel->fetch_object())
		{
		?>
			<option value="<?php echo $r->cid;?>"><?php echo $r->cname;?></option>
		<?php
	}
		?>
		</select></td>
		<tr>
		<td>Hobbies: </td>
		<td><input type="checkbox" name="ch[]" value="reading">Reading
		<input type="checkbox" name="ch[]" value="Playing">Playing
		<input type="checkbox" name="ch[]" value="Sports" checked>Sports</td>
		<tr>
		<td><input type="submit" value="SUBMIT" name="submit"></td>
		</tr>	
</table>
</form>
</body>
</html>