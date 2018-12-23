<?php
include('alheader.php');
include('connection.php');

$quesid=$_GET['qid'];
$uname=$_SESSION['user']->username;
$sel="select * from query_details JOIN technology ON query_details.tid=technology.tech_id JOIN user_details ON query_details.uid=user_details.userid where query_details.quid=$quesid";
$res=$conn->query($sel);
$r=$res->fetch_object();

if(isset($_REQUEST["answer"]))
{
$ans=$_REQUEST['ans'];
$qid = $_REQUEST['qid'];
$uid=$_SESSION['user']->userid;
$sel1="insert into answers(quesid,answers,userid) values($quesid,'$ans',$uid)";
// exit;
$res1=$conn->query($sel1);
if($res1)
{
	echo "inserted";
	?>
<!-- 	<script>
		//alert('Update successfull');
		window.location="answers.php?qid=$qid";
		</script>
 -->	<?php
}
else
{
	echo "failure";
}
}
?>
<div class="technology-1">
	<div class="container">
		<div class="col-md-12">
			<div class="business">
				<div id="contact" class="contact">
				<h3 style="margin-left:20px;">Answers</h3><br>
				<?php
				echo $r->questions."<br>";
echo $r->techname."<br>";
echo $r->query_desc."<br>";
echo $uname."<br>";
?>
<div class="form-group"><br>
<form method="GET">
      <label for="InputEmail">Answer</label><br>
     <div class="input-group">
              <textarea cols=92 rows=10 class="form-control" id="InputEmailSecond" name="ans" placeholder="Enter your question" required></textarea>
                        <span class="input-group-addon"></span>
                    </div>
</div>
<div class="form-group">
                    <div class="input-group">
                    <input type="hidden" name="qid" value="<?php echo $_REQUEST['qid']?>">
                    <input type="submit" id="submit" name="answer" required>
                    </div>
</div>
</div>
</div>
</div>
</div>
</form>
</div>