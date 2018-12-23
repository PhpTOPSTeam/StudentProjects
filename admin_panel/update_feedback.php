<?php
include('top_heaader.php');

include('left_menu.php');

include('connection.php');
/*if(isset($_GET["eid"]))
{
	$eid=$_GET["eid"];
	$select="select * from feedback_details where fd_id=$eid";
	$res=$conn->query($select);
	$fetch=$res->fetch_object();
}*/

if(isset($_REQUEST['update']))
{
	$id=$_REQUEST['id'];
	$name=$_REQUEST['uname'];
	$email=$_REQUEST['email'];
	$mob=$_REQUEST['mob'];
	$desc=$_REQUEST['desc'];

   		$update="update feedback_details set fd_id=$id,user_name='$name',user_email='$email',mobile='$mob',feedback_desc='$desc' where fd_id=$id";
		$res=$conn->query($update);

	if($res)
	{
		//header('location:manage_feedback.php');
		?>
		<script>
		alert('Update successfull');
		window.location="manage_feedback.php";
		</script>
		<?php
	}
	else
	{
		echo "Update not success";
	}
}
 ?>
        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Feedback</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Update Feedback Details</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <?php
            if(isset($_REQUEST['eid']))
				{
					$eid=$_REQUEST["eid"];
					$select="select * from feedback_details where fd_id=$eid";
					$res=$conn->query($select);
					$fetch=$res->fetch_object();
				}
            ?>
            <div class="box-content">
                <form role="form">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Feedback ID:</label>
                        <input type="text" class="form-control" value="<?php echo $fetch->fd_id;?>" name="id" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">First Name: </label>
                        <input type="text" class="form-control" value="<?php echo $fetch->fname;?>"
                        name="uname" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Last Name: </label>
                        <input type="text" class="form-control" value="<?php echo $fetch->lname;?>"
                        name="email" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email: </label>
                        <input type="text" class="form-control" value="<?php echo $fetch->user_email;?>" 
                        name="mob" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Feedback Description: </label>
                        <input type="text" class="form-control" value="<?php echo $fetch->feedback_desc;?>" name="desc" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-default" name="update">EDIT</button>
                </form>
            </div>
        </div>
    </div><!--/span-->
</div><!--/row-->
<?php
include('footer.php');
?>