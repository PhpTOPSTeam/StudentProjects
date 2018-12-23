<?php
session_start();
error_reporting(0);
// echo "<pre>";
// print_r($_SESSION);
if(isset($_SESSION['user']))
{
	include('alheader.php');
}
else
{
	include('blheader.php');
}
?>
<head>
<style>
.background
{
	background-image:  url('images/logo_image.png') ;
	border: 2px solid black;
	height: 500px;
	background-size: cover;
}
.textbox
{
	margin-left: 60%; 
	background-color: white;
	opacity: 1;
}
</style>
</head>
<div class="background">
	</div>
	<!--<div class="row"><br>
	<p style="color:black;">iSolutions is the online community for programmers to learn,share their knowledge and advance their careers.Users can freely share ideas about their knowledge in particular technology.Member users can post their own questions and post answers for the same.</p>
	</div>-->
<?php
include('footer.php');
?>