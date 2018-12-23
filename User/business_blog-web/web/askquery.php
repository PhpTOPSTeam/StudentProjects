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
  // $desc=htmlentities($_REQUEST['desc']);
  $desc=$_REQUEST['desc'];
  $data = str_replace("'","\'",$desc);
  $topic=$_REQUEST['topic'];
 	$uid=$_SESSION['user']->userid;
 	$sel="insert into query_details(date,tid,topic,questions,query_desc,uid) values ('$date',$tid,'$topic','$ques','$data',$uid)";
 	$res=$conn->query($sel);
  ?>
  <script type="text/javascript">
    window.location="questions.php";
  </script>
  <?php
}
?>
<script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>
<div class="technology-1">
	<div class="container">
		<div class="col-md-12">
			<div class="login_bg">
				<div id="contact" class="contact">
				<h3 style="margin-left:20px; color: #fa4b2a;">Ask A Question</h3><br>
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
                        <textarea maxlength="25" class="form-control" id="InputEmailSecond" name="topic" placeholder="Enter your query topic" required></textarea>
                        <span class="input-group-addon"></span>
                    </div>
                    </div>
                    <div class="form-group">
                    <label for="InputEmail">Description </label><br>
                    <div class="input-group">
                        <textarea cols=92 rows=10 class="form-control" id="text" name="desc" placeholder="Description should not be more than 250 characters...." required></textarea>
                        <span class="input-group-addon"></span>
                    </div>
                    </div>
                     <button type="submit" class="btn btn-info" name="postans">POST</button>
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
<script>
  CKEDITOR.replace( 'text', {
    toolbar: [
//      { name: 'clipboard', items: [ 'Undo', 'Redo' ] },
//      { name: 'styles', items: [ 'Styles', 'Format' ] },
      { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Strike', '-', 'RemoveFormat' ] },
      { name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote' ] },
      { name: 'links', items: [ 'Link', 'Unlink' ] },
      { name: 'insert', items: [ 'Image', 'EmbedSemantic', 'Table' ] },
      { name: 'tools', items: [ 'Maximize' ] },
      { name: 'editing', items: [ 'Scayt' ] }
    ],
  } );
</script>
<?php
include('footer.php');
?>