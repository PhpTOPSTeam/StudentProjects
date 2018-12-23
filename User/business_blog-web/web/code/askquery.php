<?php
include('connection.php');
include('alheader.php');
include('banner_inside.php');
 $sel = "select * from technology";
 $ex = $conn->query($sel);

 if(isset($_REQUEST['postans']))
 {
  $date=date("Y-m-d");
 	$tid=$_REQUEST['tech'];
 	$ques=$_REQUEST['ques'];
 	$desc=$_REQUEST['desc'];
  $topic=$_REQUEST['topic'];
 	$uid=$_SESSION['user']->userid;
 	$sel="insert into query_details(date,tid,topic,questions,query_desc,uid) values ('$date',$tid,'$topic','$ques','$desc',$uid)";
 	$res=$conn->query($sel);
}
?>
<div class="technology-1">
	<div class="container">
		<div class="col-md-12">
			<div class="business">
				<div id="contact" class="contact">
				<h3 style="margin-left:20px;">Ask A Question</h3>
<div class="container">
    <div class="row">
        <form role="form">
            <div class="col-lg-6">
               	<label for="InputEmail">Select Technology</label>
                    <div class="input-group">
                        <select class="form-control" name="tech" required>
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
                        <textarea class="form-control" id="InputEmailSecond" name="ques" placeholder="Enter your question" required></textarea>
                        <span class="input-group-addon"></span>
                    </div>
                    </div>

                    <div class="form-group">
                    <label for="InputEmail">Topic</label><br>
                    <div class="input-group">
                        <textarea class="form-control" id="InputEmailSecond" name="topic" placeholder="Enter your query topic" required></textarea>
                        <span class="input-group-addon"></span>
                    </div>
                    </div>

                    <div class="form-group">
                    <label for="InputEmail">Description </label><br>
                    <div class="input-group">
                        <textarea cols=92 rows=10 class="form-control" id="InputEmailSecond" name="desc" placeholder="Enter your question" required></textarea>
                        <span class="input-group-addon"></span>
                    </div>
                    </div>
                     <button type="submit" class="btn btn-default" name="postans">POST</button>
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
