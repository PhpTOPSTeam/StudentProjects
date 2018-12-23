<?php

include('connection.php');
if(isset($_REQUEST["tech_sub"]))
{
$name=$_REQUEST["tech_name"];
$desc=$_REQUEST["tech_desc"];

$insert="insert into technology (techname,techdesc) values ('$name','$desc')";
$res=$conn->query($insert);
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
            <a href="#">Technology</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Manage Technologies</h2>

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
                        <label for="exampleInputEmail1">Technology Name</label>
                        <input type="text" class="form-control" data-bvalidator-msg="Please enter any technology name." style="width: 40%;" name="tech_name" data-bvalidator="required" id="exampleInputEmail1" placeholder="Enter Technology Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Technology Description</label>
                        <textarea  style="width: 40%;" class="form-control" data-bvalidator="required" ="exampleInputPassword1" name="tech_desc" placeholder="Enter Technology description"></textarea>  
                    </div>
                    <button type="submit" class="btn btn-primary" name="tech_sub">Submit</button>
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
        <h2><i class="glyphicon glyphicon-user"></i> Technology Details</h2>

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
        <th>Technology ID</th>
        <th>Technology Name</th>
        <th>Technology Description</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php
        $sel="select * from technology";
        $res_sel=$conn->query($sel);
        $no=1;
        while($r=$res_sel->fetch_object())
        {
        ?>
    <tr>
        <td><?php echo $no;?></td>
        <td class="center"><?php echo $r->techname ?></td>
        <td class="center"><?php echo $r->techdesc ?></td>
        <td class="center">
            <a class="btn btn-info" href="update_tech.php?tid=<?php echo $r->tech_id;?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
            <a class="btn btn-danger" href="delete_tech.php?id=<?php echo $r->tech_id;?>">
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