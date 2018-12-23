<?php
include('top_heaader.php');
include('connection.php');
include('left_menu.php');
if(isset($_REQUEST['']))
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
            <a href="#">User</a>
        </li>
    </ul>
</div>

   <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> User Details</h2>

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
        <th>User ID</th>
        <th>Username</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $sel="select * from user_details";
    $res=$conn->query($sel);
    $no=1;
    while($r=$res->fetch_object())
    {
    ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td class="center"><?php echo $r->username; ?></td>
        <td class="center">
            <a class="btn btn-success" href="view_all_users.php?uid=<?php echo $r->userid;?>">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                View
            </a>
            <a class="btn btn-danger" href="disableuser.php?uid=<?php echo $r->userid;?>">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Disable
            </a>
            <a class="btn btn-success" href="enableusers.php?uid=<?php echo $r->userid;?>">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Enable
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