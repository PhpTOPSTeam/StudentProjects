<?php
include('conn.php');
if(isset($_GET["id"]))
{
	$rid=$_GET["id"];
	$del="delete from reg where rid=$rid";
	$res=$conn->query($del);
	if($res)
	{
		header('location:show1.php');
	}
	else
	{
		echo "Delete unsucess";
	}
}

?>