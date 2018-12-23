<?php
include('connection.php');
if(isset($_REQUEST["ins_st"]))
{

$con=$_REQUEST["country"];
$name=$_REQUEST["sname"];

echo $insert="insert into state(state_name,cid) values ('$name',$con)";
$res=$conn->query($insert);

if($res)
{
    header('location:manage_states.php');
}
else
{
    echo "not inserted";
}
}

include('top_heaader.php');

include('left_menu.php');
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
            <a href="#">States</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Manage States</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form role="form" id="frm">
                <div class="form-group">
                   <label for="exampleInputPassword1">Country Name</label>
                    <select name="country" class="form-control" style="width: 40%;">
                    <?php
                        $sel="select * from country";
                        $res_sel=$conn->query($sel);
                        while($r=$res_sel->fetch_object())
                        {
                            ?>
                            <option value="<?php echo $r->cid;?>">
                            <?php echo $r->cname;?></option>
                     <?php
                         }
                     ?>
        </select>
                    </option>
                        <label for="exampleInputPassword1">State Name</label>
                        <input type="text" style="width: 40%;" data-bvalidator="required" data-bvalidator-msg="Please enter any state name." class="form-control" name="sname" id="exampleInputPassword1" placeholder="Enter state name">
                    </div>
                    <button type="submit" class="btn btn-default" name="ins_st">Submit</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->


   <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> Manage States</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>State ID</th>
        <th>State Name</th>
        <th>Country Name</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
     <?php
        $sel="select * from state join country on state.cid=country.cid";
        $res_sel=$conn->query($sel);
        $no=1;
        while($r=$res_sel->fetch_object())
        {
        ?>
        <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $r->state_name;?></td>
        <td><?php echo $r->cname;?></td>
        <td>    <a class="btn btn-info" href="update_state.php?sid=<?php echo $r->state_id;?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
            <a class="btn btn-danger" href="delete_state.php?id=<?php echo $r->state_id;?>">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
            </a>
        </td>
    </tr>
    <?php
    $no++;
    }
    ?>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    </div>

<?php
include('footer.php');
?>