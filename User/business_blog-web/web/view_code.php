<?php
include('alheader.php');
include('banner_inside.php');
include('connection.php');
if(isset($_REQUEST['FileID']))
{
  $fid=$_REQUEST['FileID'];
  $sel1="select * from code_details where codeid=$fid";
  $res1=$conn->query($sel1);
  $r1=$res1->fetch_object();
  $file="code".$r1->filename;
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: '.filesize($file));
    readfile($file);
    exit();
}
$sel="select * from code_details JOIN technology ON code_details.tid=technology.tech_id JOIN user_details ON user_details.userid=code_details.userid order by date desc";
$res=$conn->query($sel);
while($r=$res->fetch_object())
{
?>
<div class="technology-1">
	<div class="container">
		<div class="col-md-12">
			<div class="login_bg">
				<div id="contact" class="contact">
            <form method="post">
               <div class="form-group">
               <div class="row">
               <div class="col-md-2">
               		<label for="InputName">Technology: </label> <?php echo $r->techname; ?>
               </div>
               <div class="col-md-3">
               		<label for="InputName">Title: </label> <?php echo $r->code_title; ?>               	
                </div>
                <div class="col-md-4 col-md-offset-2 pull-right"><label for="InputName">PostedBy:</label> <i style="color: #fa4b2a"><?php echo $r->username; ?></i></div>
                </div>
                <div class="row">
                <div class="col-md-3 pull-right"><label for="InputName" style="margin-left: 40px">Date: <?php echo $r->date; ?></label></div>
                </div> 
                          <div class="code_view_div">
                    				<label for="InputEmail"></label>
                    					<div class="input-group"><?php show_source("code/".$r->filename); ?>
                    					</div>
                				</div>
                				 <div class="form-group">
                         				<div class="input-group">
                         					<td>  
                         					<input type="button" class="btn btn-info pull-right"" onclick="getFileID(<?php echo $r->codeid?>)" id="submit" name="download" required value="Download Code File"></td>
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
<?php
}
?>
<script>
  function getFileID(e){
    window.location.href = "view_code.php?FileID="+e;
  }
</script>
<?php
include('footer.php');
?>