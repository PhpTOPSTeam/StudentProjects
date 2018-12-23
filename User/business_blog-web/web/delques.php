<?php
include('connection.php');
if(isset($_GET["qid"]))
{
	$id=$_GET["qid"];
	$del="delete from query_details where quid=$id";
	$res=$conn->query($del);
	if($res)
	{
		header('location:questions.php');
	}
	else
	{
		echo "Delete unsucess";
	}
}

?>