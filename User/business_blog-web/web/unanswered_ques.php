<?php
include('alheader.php');
include('connection.php');
 $sel="select * from query_details LEFT OUTER JOIN answers ON query_details.quid=answers.quesid JOIN technology ON query_details.tid=technology.tech_id JOIN user_details ON query_details.uid=user_details.userid WHERE answers.ansid is null";
$res=$conn->query($sel);
// print_r($r);
?>
<br>
<h3 style="margin-left:20px; text-align: center;">Questions</h3>
<?php
while($r=$res->fetch_object())
{
?>
<div class="technology-1">
	<div class="container">
		<div class="col-md-12">
			<div class="business">
				<div id="contact" class="contact">
				<div class="row">
				<div class="col-md-8">
				<h3><a href="answers.php?qid=<?php echo $r->quid; ?>"><?php echo $r->questions; ?></a></h3></div>
				<div class="col-md-1 techtop" style="padding-left: 5px; padding-right: 5px;">
				Tech: <?php echo $r->techname; ?>	
				</div>
				<div class="col-md-3 techtop topic">
				<label class="topiclabel">Topic: <?php echo $r->topic; ?></label></div></div>
				<div class="row">
				<div class="col-md-10 desc">
			    <?php echo $r->query_desc; ?>
				</div>
				</div><br>
				<div class="col-md-2" style="float: right;">
					- PostedBy : <?php echo $r->username; ?>
				</div>
				<div class="col-md-2" style="float: right;">
					Date : <?php echo $r->date; ?>
				</div><br>
				<div class="row">
				<div class="col-md-3">
				<a href="update_ques.php?quesid=<?php echo $r->quid; ?>"> EDIT </a>&nbsp;
				<a href="delques.php?qid=<?php echo $r->quid; ?>"> DELETE </a>
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