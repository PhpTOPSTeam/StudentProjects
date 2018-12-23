<?php
include('top_heaader.php');
include('left_menu.php');
include('connection.php');

if(isset($_REQUEST['update']))
{
    $id=$_REQUEST['eid'];
	$tid=$_REQUEST['technology'];
    $ques=$_REQUEST['ques'];
    $desc=$_REQUEST['desc'];
    $topic=$_REQUEST['topic'];
   	$update="update query_details set tid=$tid,topic='$topic',questions='$ques',query_desc='$desc' where quid=$id";
	$res=$conn->query($update);
	if($res)
	{ //header('location:manage_feedback.php');
		?>
		<script>
		alert('Update successfull');
		window.location="view_queries.php";
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
            <a href="#">Queries</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Query Details</h2>

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
					$select="select * from query_details where quid=$eid";
					$res=$conn->query($select);
					$fetch=$res->fetch_object();
				}
            ?>
                         <div class="box-content">
                <form role="form" id="frm">
                   <div class="form-group">
                   <label for="exampleInputPassword1">Technology </label>
                    <select name="technology" style="width: 40%;" class="form-control">
                    <?php
                        $sel="select * from technology";
                        include('connection.php');
                        $res_sel=$conn->query($sel);
                        while($r=$res_sel->fetch_object())
                        {
                            ?>
                            <option value="<?php echo $r->tech_id;?>">
                            <?php echo $r->techname;?></option>
                     <?php
                         }
                     ?>
        </select></td>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Topic</label>
                        <input type="text" style="width: 40%;" data-bvalidator="required" class="form-control" id="exampleInputPassword1" name="topic" placeholder="Topic" value="<?php echo $fetch->topic;?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Question</label>
                        <textarea class="form-control" value="<?php echo $fetch->questions; ?>" style="width: 40%;" id="exampleInputPassword1" name="ques" placeholder="Ask Question"><?php echo $fetch->questions; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Query Description </label>
                        <textarea class="form-control" style="width: 40%;" value="<?php echo $fetch->query_desc;?>" id="exampleInputPassword1" name="desc" placeholder="Description here..."><?php echo $fetch->query_desc;?></textarea>
                    </div>
                    <input type=hidden name="eid" value="<?php echo $_REQUEST['eid']; ?>">
                    <button type="submit" class="btn btn-default" name="update">Save Changes</button>
                    
                </form>
            </div>
        </div>
    </div><!--/span-->
</div><!--/row-->
<?php
include('footer.php');
?>