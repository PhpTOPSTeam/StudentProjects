<?php
include('alheader.php');
include('connection.php');
$quesid=$_REQUEST['qid'];
//$uname=$_SESSION['user']->username;
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
?>
<script type="text/javascript">
	window.location="almainpage.php";
</script>
<?php
    }
  }
?>
<script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>
<div class="technology-1">
	<div class="container">
		<div class="col-md-12">
			<div class="login_bg">
				<div id="contact" class="contact">
				<h3><u>Answers</u></h3><br>
				<label><b>Q : </b><?php echo $r->questions; ?></label><br>
        <label class="marginleft20">Tehnology : </label> <?php echo $r->techname; ?><br>
        <p class="marginleft20" style="text-align: justify;"><?php echo $r->query_desc; ?><i class="pull-right" style="color:skyblue; ">- <?php echo $r->username; ?></i></p>
        <div class="row">
          <div class="col-md-2 pull-right" style="padding-left: 50px" > Date: <?php echo $r->date; ?></div>
          </div>
        <h2 class="marginleft20"></h2><br>
        <div class="well">
        <h4>Leave a Comment: </h4><br>
          <form role="form" method="GET">
          <div class="form-group">
              <textarea rows=3 class="form-control" id="text" name="ans" required></textarea>
              <script>
                  CKEDITOR.replace( 'text' );
              </script>
          </div>
          <input type="hidden" name="qid" value="<?php echo $_REQUEST['qid']?>">
          <button type="submit" name="answer" class="btn btn-info">Submit</button>
          </form>
        </div>
</div>
</div>
</div>
</div>
</form>
</div>