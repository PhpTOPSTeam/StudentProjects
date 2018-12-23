<?php
include 'connection.php';
if(isset($_REQUEST['cid']))
{
	$cid=$_REQUEST['cid'];
	$sel="select * from state where cid=$cid";
	$exe=$conn->query($sel);
	echo "<option>---Select State---</option>";
	while($fet=$exe->fetch_object())
	{
		?>
		<option value="<?php echo $fet->state_id; ?>"><?php echo $fet->state_name; ?></option>
	<?php 
	}
}
?>