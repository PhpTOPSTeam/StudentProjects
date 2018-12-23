<?php
session_start();
if(!$_SESSION['user'])
{
	header('location:loginForm.php');
}
if(isset($_GET['unm']))
   {
   	  $u = $_GET['unm'];
   ?>
<html>
<head>
	<body>
	<h1>Welcome : <?php echo $_SESSION['user'];?></h1>
		<table border="2" align="center">
		<tr>
			<td> rid : </td>
			<td> Username: </td>
			<td> Password: </td>
			<td> Country: </td>
			<td> Hobbies : </td>
			<td> Gender: </td>
			<td> <a href="logout.php">Logout</a></td>
		</tr>
		<?php
		include('conn.php');
		$sel="select * from reg where unm='$u'";
		$res_sel=$conn->query($sel);
		while($r=$res_sel->fetch_object())
		{
		//$r=$res_sel->fetch_object();
			?>
				<tr>
					<td><?php echo $r->rid;?></td>
					<td><?php echo $r->unm;?></td>
					<td><?php echo $r->pass;?></td>
					<td><?php echo $r->hob;?></td>
					<td><?php echo $r->gen;?></td>
					<td><?php echo $r->country;?></td>
					<td><a href="delete.php?id=<?php echo $r->rid;?>">Delete</a></td>
					<td><a href="edit.php?eid=<?php echo $r->rid;?>">Edit</a></td>
				</tr>
		<?php
		}
		?>	
	</body>
</head>
</html>