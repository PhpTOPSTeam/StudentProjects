<?php
include('top_heaader.php');

include('left_menu.php');

include('connection.php');

if(isset($_REQUEST['update']))
{
	$cityid=$_REQUEST['cityid'];
	$ctname=$_REQUEST['ctname'];
	$sid=$_REQUEST['state'];

    $update="update city set city_id=$cityid,city_name='$ctname',sid=$sid where city_id=$cityid";
	 $res=$conn->query($update);

	if($res)
	{
		?>
		<script>
		//alert('Update successfull');
		window.location="manage_cities.php";
		</script>
		<?php
	}
	else
	{
		echo "Update not success";
	}
}
 ?>
 <html>
 <head>
   <script type="text/javascript" src="C:\xampp\htdocs\centrlize_forum\admin_panel\js\jquery.js"></script>
  <script type="text/javascript">
      function getstate(val)
      {
      //    alert("hi");
        $.ajax({
            type:"POST",
            url:"get_state.php",
            data:"cid="+val,
            success:function(data)
            {
                // alert(data);
                 $("#state1").html(data);
            }
        });
      }
        </script>  
 </head>
 </html>
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
            <a href="#">City</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Update City</h2>

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
            if(isset($_REQUEST['ctid']))
				{
					$ctid=$_REQUEST['ctid'];
					$select="select * from city where city_id=$ctid";
					$res=$conn->query($select);
					$fetch=$res->fetch_object();
				}
            ?>
            <div class="box-content">
                <form role="form">
                    <div class="form-group">
                        <label for="exampleInputEmail1">City ID:</label>
                        <input type="text" class="form-control" value="<?php echo $fetch->city_id;?>" name="cityid" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">City Name: </label>
                        <input type="text" class="form-control" value="<?php echo $fetch->city_name;?>"
                        name="ctname" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                   <label for="exampleInputPassword1">State Name</label>
                    <select name="state" class="form-control">
                    <?php
                        $sel="select * from state";
                        $res_sel=$conn->query($sel);
                        while($r=$res_sel->fetch_object())
                        {
                            if($fetch->sid==$r->state_id)
                            {
                            ?>
                            <option value="<?php echo $r->state_id;?>" selected>
                            <?php echo $r->state_name;?></option>
                            <?php
                            }
                            else
                            {
                                ?>
                                    <option value="<?php echo $r->state_id;?>"><?php echo $r->state_name;?></option>
                            <?php
                            }
                        }
                     ?>
                    </select>
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