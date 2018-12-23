<?php
include('connection.php');
$id=$_REQUEST['uid'];
if(isset($_REQUEST['uid']))
{
	$update="update user_details set Status=1 where userid=$id";
	$res=$conn->query($update);
	if($res)
	{
		?>
		<script type="text/javascript">
			window.location="manage_user.php";
		</script>
		<?php
	}
	else
	{
		echo "failure";
	}
}
?>