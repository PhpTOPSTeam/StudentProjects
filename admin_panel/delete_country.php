<?php
include('connection.php');
if(isset($_GET["id"]))
{
	$cid=$_GET["id"];
	$del="delete from country where cid=$cid";
	$res=$conn->query($del);
	if($res)
	{
		header('location:manage_countries.php');
	}
	else
	{
		echo "Delete unsucess";
	}
}

?>