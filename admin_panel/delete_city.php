<?php
include('connection.php');
if(isset($_GET["id"]))
{
	$id=$_GET["id"];
	$del="delete from city where city_id=$id";
	$res=$conn->query($del);
	if($res)
	{
		header('location:manage_cities.php');
	}
	else
	{
		echo "Delete unsucess";
	}
}

?>