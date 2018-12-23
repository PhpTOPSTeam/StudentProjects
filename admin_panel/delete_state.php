<?php
include('connection.php');
if(isset($_GET["id"]))
{
	$sid=$_GET["id"];
	$del="delete from state where state_id=$sid";
	$res=$conn->query($del);
	if($res)
	{
		header('location:manage_states.php');
	}
	else
	{
		echo "Delete unsucess";
	}
}

?>