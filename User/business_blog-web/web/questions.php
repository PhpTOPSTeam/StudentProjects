<?php
include('alheader.php');
include('connection.php');
$id=$_SESSION['user']->userid;
$sel="select * from query_details JOIN technology ON query_details.tid=technology.tech_id JOIN user_details ON query_details.uid=user_details.userid where query_details.uid=$id order by date DESC";
$ex=$conn->query($sel);
?>
<br>
<h3 style="margin-left:20px; text-align: center;">Questions</h3>
<?php
while($r=$ex->fetch_object())
{
?>
<div class="technology-1">
	<div class="container">
		<div class="col-md-12">
			<div class="business">
				<div id="contact" class="contact">
				<div class="row">
				<div class="col-md-8">
				<h3><a href="answers.php?qid=<?php echo $r->quid; ?>"><?php echo $r->questions; ?></a></h3>
				</div>
				<div class="col-md-1 techtop">
				Tech: <?php echo $r->techname; ?></div>
				<div class="col-md-3 techtop topic">
				<label class="topiclabel">Topic: <?php echo $r->topic; ?></label></div></div>
				<div class="row">
				<div class="col-md-12 desc">
				<?php echo $r->query_desc; ?>
				</div>
				</div><br>
				<div class="row">
				<div class="col-md-3">
				<a class="btn btn-success" href="update_ques.php?quesid=<?php echo $r->quid; ?>"> EDIT </a>&nbsp;
				<a class="btn btn-danger" href="delques.php?qid=<?php echo $r->quid; ?>"> DELETE </a>
				</div>
				</div>
</div>
</div>
</div>
</div>
</div>
<?php
}
include('footer.php');
?>