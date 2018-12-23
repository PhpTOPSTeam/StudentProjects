<?php
include('codesearch.php');
include('connection.php');
if(isset($_REQUEST['upload']))
{
	$id=$_SESSION['user']->userid;
	$tid=$_REQUEST['tech'];
	$title=$_REQUEST['title'];
  $date=date("Y-m-d");
	if($_FILES["fpath"]["error"] == 0 ){
    $target_dir = "code/";
    $target_file = $target_dir . basename($_FILES["fpath"]["name"]);
    $FileName = $_FILES["fpath"]["name"];
    $extension=pathinfo($FileName,PATHINFO_EXTENSION);
  	if($extension=="php" || $extension=="html" || $extension=="txt")
  	{
    move_uploaded_file($_FILES["fpath"]["tmp_name"], $target_file);
    $Sql="INSERT INTO code_details(date,filename,userid,tid,code_title) values('$date','$FileName',$id,$tid,'$title')";
    $res=$conn->query($Sql);
    //print_r($_FILES["fpath"]);
    if($res)
    {
      $sel_code="select * from code_details";
      $res_code=$conn->query($sel_code);
      $r_code=$res_code->fetch_object();
    	?>
    	<h3>Thank You..Your code has been uploaded</h3>
      <script type="text/javascript">
       window.location="view_code.php?cid=<?php echo $r_code->codeid; ?>";
      </script>
    	<?php
    }
    else
    {
    	echo "File uploading Fail !!";
    }
    }
	else
	{
		?>
		<script type="text/javascript">
			alert('Wrong ! Extension Selected..Please select .PHP | .HTML | .JAVA | .NET ');
			window.location="upload_code.php";
		</script>
		<?php
	}
}
}
?>
<html>
<body>
<div class="technology-1">
	<div class="container">
		<div class="col-md-12">
			<div class="business">
				<div id="contact" class="contact">
          			<div class="container">
            			<div class="row">
							<div class="box-content">
               				<form method="post" enctype="multipart/form-data">
                      <div class="row">
                        <div class="col-md-6 col-md-offset-2"><br>
                          <div class="panel panel-default">
                          <div class="panel-heading">
                            <h2>Upload Your Code File Here </h2>
                          </div>
                            <div class="panel-body">
                              <div class="form-group">
                          <label for="InputEmail">Technology</label>
                        <div class="input-group" >
                         <select style="width: 100%" class="form-control" id="InputEmailSecond" name="tech">
                            <option>---Select Technology---</option>
                            <?php
                               $sel="select * from technology";
                               $res_sel=$conn->query($sel);
                               while($r=$res_sel->fetch_object())
                               {
                                 ?>
                                    <option value="<?php echo $r->tech_id; ?>">
                                    <?php echo $r->techname;?></option>
                              <?php   
                               }
                            ?>
                          </select>
                        </div>
                    </div>
                    <div class="form-group">
                          <label for="InputName">Title </label>
                          <div class="input-group">
                            <input type="text" class="form-control" name="title" id="InputName" placeholder="Enter Title for Code..." required>
                          </div>
                    </div>
                    <div class="form-group">
                          <input type="file" class="btn btn-btn" name="fpath" >
                    </div>
                        &nbsp;&nbsp;&nbsp;<input type="submit" class="btn btn-info" name="upload" value="Upload Code">
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
</div>
</body>
</html>
<?php

include('footer.php');
?>