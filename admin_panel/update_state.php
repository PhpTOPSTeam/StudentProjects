<?php
include('top_heaader.php');

include('left_menu.php');

include('connection.php');

if(isset($_REQUEST['update']))
{
	$sid=$_REQUEST['id'];
	$sname=$_REQUEST['sname'];
	$cid=$_REQUEST['country'];

    $update="update state set state_id=$sid,state_name='$sname',cid=$cid where state_id=$sid";
	 $res=$conn->query($update);

	if($res)
	{
		?>
		<script>
		//alert('Update successfull');
		window.location="manage_states.php";
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
            <a href="#">State</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Update State</h2>

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
            if(isset($_REQUEST['sid']))
				{
					$sid=$_REQUEST['sid'];
					$select="select * from state where state_id=$sid";
					$res=$conn->query($select);
					$fetch=$res->fetch_object();
				}
            ?>
            <div class="box-content">
                <form role="form">
                    <div class="form-group">
                        <label for="exampleInputEmail1">State ID:</label>
                        <input type="text" class="form-control" value="<?php echo $fetch->state_id;?>" name="id" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">State Name: </label>
                        <input type="text" class="form-control" value="<?php echo $fetch->state_name;?>"
                        name="sname" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                   <label for="exampleInputPassword1">Country Name</label>
                    <select name="country" class="form-control">
                    <?php
                        $sel="select * from country";
                        $res_sel=$conn->query($sel);
                        while($r=$res_sel->fetch_object())
                        {
                            if($fetch->cid==$r->cid)
                            {
                            ?>
                            <option value="<?php echo $r->cid;?>" selected>
                            <?php echo $r->cname;?></option>
                            <?php
                            }
                            else
                            {
                                ?>
                                    <option value="<?php echo $r->cid;?>"><?php echo $r->cname;?></option>
                            <?php
                            }
                        }
                     ?>
                    </select>
                    </option>
                    <button type="submit" class="btn btn-default" name="update">EDIT</button>
                </form>
            </div>
           
        </div>
    </div>

    <!--/span-->

</div><!--/row-->

<?php
include('footer.php');
?>