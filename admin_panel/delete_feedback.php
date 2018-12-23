<?php
include('connection.php');
if(isset($_GET["id"]))
{
	$fid=$_GET["id"];
	$del="delete from feedback_details where fd_id=$fid";
	$res=$conn->query($del);
	if($res)
	{
		header('location:manage_feedback.php');
	}
	else
	{
		echo "Delete unsucess";
	}
}

?>