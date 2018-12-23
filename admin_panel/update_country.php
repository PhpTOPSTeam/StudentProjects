<?php
include('top_heaader.php');

include('left_menu.php');

include('connection.php');

if(isset($_REQUEST['update']))
{
	$cid=$_REQUEST['id'];
	$name=$_REQUEST['cname'];

   $update="update country set cid=$cid,cname='$name' where cid=$cid ";
	 $res=$conn->query($update);

	if($res)
	{
		?>
        <script>
       // alert('Update successfull');
        window.location="manage_countries.php";
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
            <a href="#">Country</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Update Country</h2>

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
            if(isset($_REQUEST['cid']))
				{
					$id=$_REQUEST['cid'];
					$select="select * from country where cid=$id";
					$res=$conn->query($select);
					$fetch=$res->fetch_object();
				}
            ?>
            <div class="box-content">
                <form role="form">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Country ID:</label>
                        <input type="text" class="form-control" value="<?php echo $fetch->cid;?>" name="id" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Country Name: </label>
                        <input type="text" class="form-control" value="<?php echo $fetch->cname;?>"
                        name="cname" id="exampleInputPassword1">
                    </div>
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