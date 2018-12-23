<?php
include('alheader.php');
include('connection.php');
$sel = "select * from technology";
$ex = $conn->query($sel);
 $quesid=$_REQUEST['quesid'];
if(isset($_REQUEST['quesid']))
{

	$select="select * from query_details JOIN user_details ON query_details.uid=user_details.userid where quid=$quesid";
	$res=$conn->query($select);
	$fetch=$res->fetch_object();
}
if(isset($_REQUEST['update']))
{
	$tid=$_REQUEST['tech'];
	$ques=$_REQUEST['ques'];
  $topic=$_REQUEST['topic'];
	$desc=htmlentities($_REQUEST['desc']);
  $d='"'.$desc.'"';
 //echo $d;exit;
	$id=$_REQUEST['id'];
  $update="update query_details set topic='$topic',questions='$ques',query_desc='$d',tid='$tid' where quid=$id";
	$res=$conn->query($update);
	if($res)
	{
		?>
		<script>
		//alert('Update successfull');
		window.location="questions.php";
		</script>
		<?php
	}
	else
	{
		echo "Update not success";
	}
}
 ?>
<div class="technology-1">
	<div class="container">
		<div class="col-md-12">
			<div class="business">
				<div id="contact" class="contact">
				<h3 style="margin-left:20px;">Edit Query</h3>
<div class="container">
    <div class="row">
        <form role="form" method="post">
            <div class="col-lg-6">
               	<label for="InputEmail">Select Technology</label>
                    <div class="input-group">
                        <select class="form-control" name="tech">
                      <?php
                          
                       while($fe = $ex->fetch_object())
                       {
                       	?>
                       	  <option value="<?php echo $fe->tech_id; ?>"><?php echo $fe->techname; ?></option>
                       	<?php
                       }
                  ?>
                        </select>
                        <span class="input-group-addon"></span>
                    </div><br>
                    <div class="form-group">
                    <label for="InputEmail">Question </label><br>
                    <div class="input-group">
                        <textarea class="form-control" id="InputEmailSecond" name="ques"><?php echo $fetch->questions; ?></textarea>
                        <span class="input-group-addon"></span>
                    </div>
                    </div>
                    <div class="form-group">
                    <label for="InputEmail">Topic</label><br>
                    <div class="input-group">
                        <textarea class="form-control" id="InputEmailSecond" 
                        value="" name="topic"><?php echo $fetch->topic; ?></textarea>
                        <span class="input-group-addon"></span>
                    </div>
                    </div>
                    <div class="form-group">
                    <label for="InputEmail">Description </label><br>
                    <div class="input-group">
                        <textarea cols=92 rows=10 class="form-control" id="InputEmailSecond" 
                        value="" name="desc"><?php echo $fetch->query_desc; ?></textarea>
                        <span class="input-group-addon"></span>
                    </div>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $_GET['quesid']; ?>" >
                     <button type="submit" class="btn btn-default" name="update">Save</button>
                </div>
                </div>
                </div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
