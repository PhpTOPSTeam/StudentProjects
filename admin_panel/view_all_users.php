<html>
    <head>
        <style>
                .panelhead
                {
                        background-color: #d9edf7;
                        border-color: #dddddd;
                        height: 8%;
                        margin-top: -20px 
                }
                .paneltitle
                {
                    color: #3a87ad;
                    font-size: 15px;
                    margin-left: 45%;
                    padding-top: 15px;
                }
        </style>
    </head>
</html>
<?php
include('top_heaader.php');
include('connection.php');
include('left_menu.php');
$id=$_REQUEST['uid'];
$sel="SELECT * FROM user_details JOIN country ON user_details.cid = country.cid JOIN state ON user_details.sid = state.state_id JOIN city ON user_details.ct_id=city.city_id where user_details.userid=$id";
$res=$conn->query($sel);
$r=$res->fetch_object();
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
            <a href="#">Users</a>
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
    <div class="panel panel-info">
        <div class="panelhead">
            <h3 class="paneltitle"><?php echo $r->username; ?></h3>
        </div>
        <div class="panel-body">
            <div class="row">
               <div class="col-md-3 col-lg-3 " align="center" > 
                    <a data-target="#myModal" data-toggle="modal" id="pntr">
                    <img src="..\..\centrlize_forum\User\business_blog-web\web\upload\<?php echo $r->profile_pic; ?>" class="img-circle img-responsive"></a></div> 
                    <div class=" col-md-9 col-lg-9 "> 
                    <table class="table table-user-information">
                    <tbody>
                    <tr>
                    <td>First Name </td>
                    <td><?php echo $r->fname; ?></td>
                    </tr>
                    <tr>
                    <td>Last Name </td>
                    <td><?php echo $r->lname; ?></td>
                    </tr>
                    <tr>
                    <td>Email </td>
                    <td><?php echo $r->email; ?></td>
                    </tr>
                    <tr>
                    <td>Username </td>
                    <td><?php echo $r->username; ?></td>
                    </tr>
                    <tr>
                    <td>Gender </td>
                    <td><?php echo $r->gender; ?></td>
                    </tr>
                    <tr>
                    <td>address </td>
                    <td><?php echo $r->address; ?></td>
                    </tr>
                    <tr>
                    <td>Date of Birth </td>
                    <td><?php echo $r->dob; ?></td>
                    </tr>
                    <tr>
                        <td>Country </td>
                        <td><?php echo $r->cname; ?></td>         
                    </tr>
                      <tr>
                        <td>State </td>
                        <td><?php echo $r->state_name; ?></td>         
                      </tr>
                      <tr>
                        <td>City </td>
                        <td><?php echo $r->city_name; ?></td>         
                      </tr>
                    </tbody>
                    </table>
                    </div>
                    </div>
                    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
<?php
include('footer.php');
?>