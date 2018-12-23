<?php
include('connection.php');
if(isset($_GET["id"]))
{
	$vid=$_GET["id"];
	$del="delete from videos where vis=$vid";
	$res=$conn->query($del);
	if($res)
	{
		header('location:sample_videos.php');
	}
	else
	{
		echo "Delete unsucess";
	}
}

?>