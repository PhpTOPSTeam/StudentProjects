<?php
include('connection.php');
if(isset($_GET["id"]))
{
	$tid=$_GET["id"];
	$del="delete from technology where tech_id=$tid";
	$res=$conn->query($del);
	if($res)
	{
		header('location:manage_tech.php');
	}
	else
	{
		echo "Delete unsucess";
	}
}

?>