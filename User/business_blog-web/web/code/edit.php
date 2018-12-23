 <?php
 include('conn.php');
 if(isset($_GET["eid"]))
{
	$eid=$_GET["eid"];
	$edit="select * from reg where rid=$eid";
	$res_edit=$conn->query($edit);
	$fetch=$res_edit->fetch_object();
}

if(isset($_REQUEST['update']))
{
	$unm=$_REQUEST['unm'];
	$passw=$_REQUEST['pass'];
	$gen=$_REQUEST['gen'];
	$count=$_REQUEST['country'];
	$ch=$_REQUEST['ch'];
	$sh=implode(',', $ch);

	echo $update="update reg set unm='$unm',pass='$passw',gen='$gen',country=$count,hob='$sh' where rid=$eid";
		$res=$conn->query($update);

	if($res)
	{
		header('location:show1.php');
	}
	else
	{
		echo "Update not success";
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
		<td><input type="text" name="unm" value="<?php echo $fetch->unm;?>"></td>
		</tr>
		<tr>
		<td>PASSWORD: </td>
		<td><input type="password" name="pass" value="<?php echo $fetch->pass;?>"></td>
		<tr>
		<td>Gender: </td>
		<?php
		$g=$fetch->gen;
		if($g=='Male')
		{
		?>	
		<td><input type="radio" name="gen" value="Male" checked="checked">MALE </td>
		<td><input type="radio" name="gen" value="Female">FEMALE</td>
		<?php
		}
		else
		{
		?>
		<td><input type="radio" name="gen" value="Male" >MALE </td>
		<td><input type="radio" name="gen" value="Female" checked="checked">FEMALE</td>
		<?php
		}
		?>

		<tr>
		<td>Country: </td>
		<td><select name="country">
		<?php
		$sel="select * from country";
		$res_sel=$conn->query($sel);
		while($r=$res_sel->fetch_object())
		{
				if($fetch->country==$r->cid)
			{
		
		?>
			<option value="<?php echo $r->cid;?>" selected><?php echo $r->cname;?></option>
		<?php
			}
			else
			{

		?>
			<option value="<?php echo $r->cid;?>"><?php echo $r->cname;?></option>
		<?php

			}
		}
		?>
		</select></td>
		<tr>
		<td>Hobbies: </td>
		<td>
		<?php
		$str=$fetch->hob;
		$ch_arr=explode(',', $str);
		?>
		<input type="checkbox" name="ch[]" value="reading" 
		<?php
		if(in_array('reading',$ch_arr))
		{
			echo "checked=checked";
		}
		?>
		>Reading
		<input type="checkbox" name="ch[]" value="Playing" 
		<?php
		if(in_array('Playing',$ch_arr))
		{
			echo "checked=checked";
		}
		?>

		>Playing
		<input type="checkbox" name="ch[]" value="Sports" 
		<?php
		if(in_array('Sports',$ch_arr))
		{
			echo "checked=checked";
		}
		?>
		>Sports

		</td>
		
		<tr>
		<td><input type="submit" value="EDIT" name="update"></td>
		</tr>	
</table>
</form>
</body>
</html>