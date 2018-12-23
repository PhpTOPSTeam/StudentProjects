<?php
include 'connection.php';

if(isset($_REQUEST['sid']))
{
	$sid=$_REQUEST['sid'];
	$sel="select * from city where sid=$sid";
	$exe=$conn->query($sel);
	echo "<option>---Select City---</option>";
	while($fet=$exe->fetch_object())
	{
		?>
		<option value="<?php echo $fet->city_id; ?>"><?php echo $fet->city_name; ?></option>

	<?php 
	}

}


?>