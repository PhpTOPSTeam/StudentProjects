<html>
    <head>
    <title></title>
   
    </head>
    <body>
<?php
include('connection.php');
if(isset($_REQUEST["submitc"]))
{
$name=$_REQUEST["cname"];

$insert="insert into country (cname) values ('$name')";
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
            <a href="#">Country</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Manage Countries</h2>

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
                        <input type="text" style="width: 40%;" class="form-control" data-bvalidator="required" name="cname" id="exampleInputPassword1" placeholder="Enter country name">
                    </div>
                    <button type="submit" class="btn btn-default" name="submit">Submit</button>
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
        <h2><i class="glyphicon glyphicon-user"></i> Country Details</h2>

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
        <th>Country ID</th>
        <th>Country Name</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php
        $sel="select * from country";
        $res_sel=$conn->query($sel);
        $no=1;
        while($r=$res_sel->fetch_object())
        {
        ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td class="center"><?php echo $r->cname ?></td>
        <td class="center">
            <a class="btn btn-info" href="update_country.php?cid=<?php echo $r->cid ?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
            <a class="btn btn-danger" href="delete_country.php?id=<?php echo $r->cid;?>">
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
</body>
</html>