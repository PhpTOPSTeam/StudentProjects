<?php
include('connection.php');
if(isset($_GET["id"]))
{
	$id=$_GET["id"];
	echo $del="delete from query_details where quid=$id";
	$res=$conn->query($del);
	if($res)
	{
		header('location:view_queries.php');
	}
	else
	{
		echo "Delete unsucess";
	}
}
?>