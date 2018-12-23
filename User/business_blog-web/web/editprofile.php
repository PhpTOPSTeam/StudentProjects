<!DOCTYPE html>
<html>
    <head>
        <style>
            body {font-family: calibri;}
            .bgColor {
                height: 400px;
                background-color: #c3e8cb;
                padding: 30px;
                border-radius: 4px;
                text-align: center;    
            }
            #targetOuter{	
                position:relative;
                text-align: center;
                background-color: #F0E8E0;
                margin: 20px auto;
                width: 200px;
                height: 200px;
                border-radius: 4px;
            }
            .btnSubmit {
                background-color: #565656;
                border-radius: 4px;
                padding: 10px;
                border: #333 1px solid;
                color: #FFFFFF;
                width: 200px;
                cursor:pointer;
            }
            .inputFile {
                padding: 5px 0px;
                margin-top:8px;	
                background-color: #FFFFFF;
                width: 48px;	
                overflow: hidden;
                opacity: 0;	
                cursor:pointer;
            }
            .icon-choose-image {
                position: absolute;
                opacity: 0.1;
                top: 50%;
                left: 50%;
                margin-top: -24px;
                margin-left: -24px;
                width: 48px;
                height: 48px;
            }
            .upload-preview {border-radius:4px;}
            #body-overlay {background-color: rgba(0, 0, 0, 0.6);z-index: 999;position: absolute;left: 0;top: 0;width: 100%;height: 100%;display: none;}
            #body-overlay div {position:absolute;left:50%;top:50%;margin-top:-32px;margin-left:-32px;}
            #pntr
            {
                cursor:pointer;
            }
        </style>
        <script type="text/javascript">
            function showPreview(objFileInput) {
                if (objFileInput.files[0]) {
                    var fileReader = new FileReader();
                    fileReader.onload = function (e) {
                        $("#targetLayer").html('<img src="' + e.target.result + '" width="200px" height="200px" class="upload-preview" />');
                        $("#targetLayer").css('opacity', '0.7');
                        $(".icon-choose-image").css('opacity', '0.5');
                    }
                    fileReader.readAsDataURL(objFileInput.files[0]);
                }
            }
            
            $(document).ready(function (e) {
                alert('call ready');
                $("#uploadForm").on('submit', (function (e) {
                    alert("call");
                    return false;
                    e.preventDefault();
//                    alert("call");
//                    return false;
                    var id = $("#UserID").val();
                    $.ajax({
                        url: "upload.php",
                        type: "POST",
                        data: new FormData(this),
                        beforeSend: function () {
                            $("#body-overlay").show();
                        },
                        contentType: false,
                        processData: false,
                        success: function (data)
                        {
//                            $("#targetLayer").html(data);
//                            $("#targetLayer").css('opacity', '1');
//                            setInterval(function () {
//                                $("#body-overlay").hide();
//                            }, 500);
window.location.href="editprofile.php?uid="+id;
                        },
                        error: function ()
                        {
                        }
                    });
                }));
            });
        </script>
    </head>
    <body>
    </body>
</html>
<?php
include('alheader.php');
include('connection.php');
if (isset($_REQUEST['btnSubmit'])) {
    $id = $_GET['uid'];
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["savedp"]["name"]);
    if (move_uploaded_file($_FILES["savedp"]["tmp_name"], $target_file)) {
        $image_name = $_FILES["savedp"]["name"];
    } else {
        $image_name = " ";
    }
    $update = "update user_details set profile_pic=$image_name where userid=$id";
    $sel_dp = $conn->query($update);
    $res_dp = $sel_dp->fetch_object();
    if ($res_dp) {
        echo "updated DP";
    } else {
        echo "Failure in updation";
    }
}
$user = $_SESSION['user'];
if (isset($_GET['uid'])) {
    $id = $_GET['uid'];
    $sel = "select * FROM user_details JOIN country ON user_details.cid = country.cid JOIN state ON user_details.sid=state.state_id JOIN city ON user_details.ct_id=city.city_id where user_details.userid=$id";
    $res_sel = $conn->query($sel);
    $r = $res_sel->fetch_object();
}
if (isset($_REQUEST['btnSubmit'])) {
    $sel = "update user_details set profile_pic='userImage' where userid=$id";
    $res = $conn->query();
    if ($res) {
        echo "updated";
    } else {
        echo "Failure";
    }
}
if (isset($_REQUEST['save'])) {
    $id = $_GET['uid'];
    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $uname = $_REQUEST['uname'];
    $dob = $_REQUEST['dob'];
    $gen = $_REQUEST['gen'];
    $add = $_REQUEST['add'];
    $email = $_REQUEST['email'];
    $cnt = $_REQUEST['country'];
    $state = $_REQUEST['state'];
    $city = $_REQUEST['city'];
    $update = "update user_details set fname='$fname',lname='$lname',username='$uname',dob='$dob',gender='$gen',address='$add',email='$email',cid=$cnt,sid=$state,ct_id=$city where userid=$id";
    $res = $conn->query($update);
    if ($res) {
        ?>
        <script type="text/javascript">
            window.location="profile.php";
        </script>
        <?php
    } else {
        echo "Update not success";
    }
}
?>
<div class="technology-1">
    <div class="container">
        <div class="col-md-12">
            <div class="login_bg">
                <div id="contact" class="contact">
                    <h3 style="margin-left:20px; margin-bottom: 20px">Profile</h3>
                    <div class="container">
                        <div class="row">
                            <form role="form" method="post" enctype="multipart/form-data">
                                <div class="col-lg-6"> 
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            <h class="panel-title"><?php echo $user->username; ?></h>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-3 col-lg-3 " align="center" > 
                                                    <a data-target="#myModal" data-toggle="modal" id="pntr">
                                                        <img src="upload/<?php echo $r->profile_pic; ?>" class="img-circle img-responsive"></a></div> 
                                                <div class=" col-md-9 col-lg-9 "> 
                                                    <table class="table table-user-information">
                                                        <tbody>
                                                            <tr>
                                                                <td>First Name </td>
                                                                <td><input type="text" value="<?php echo $r->fname; ?>" name="fname"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Last Name </td>
                                                                <td><input type="text" value="<?php echo $r->lname; ?>" name="lname"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Username </td>
                                                                <td><input type="text" value="<?php echo $r->username; ?>" name="uname"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Date of Birth </td>
                                                                <td><input type="text" value="<?php echo $r->dob; ?>" name="dob"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Gender</td>
                                                                <?php
                                                                $g = $r->gender;
                                                                ?>  
                                                                <td><input type="radio" name="gen" value="Male" <?php if ($g == 'Male') { ?> checked="checked" <?php } ?>>Male
                                                                    <input type="radio" name="gen" <?php if ($g == 'Female') { ?> checked="checked" <?php } ?> value="Female">Female</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Home Address</td>
                                                                <td><input type="text" value="<?php echo $r->address; ?>" name="add"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Email </td>
                                                                <td><a href="mailto:info@support.com"><input type="text" value="<?php echo $r->email; ?>" name="email"></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Country </td>
                                                                <td><select name="country">
                                                                        <?php
                                                                        $sel_cnt = "select * from country";
                                                                        $res_cnt = $conn->query($sel_cnt);
                                                                        while ($r1_cnt = $res_cnt->fetch_object()) {
                                                                            ?>
                                                                            <option value="<?php echo $r1_cnt->cid; ?>"><?php echo $r1_cnt->cname; ?></option>
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                    </select></td>         
                                                            </tr>
                                                            <tr>
                                                                <td>State </td>
                                                                <td><select name="state">
                                                                        <?php
                                                                        $sel = "select * from state";
                                                                        $res = $conn->query($sel);
                                                                        while ($r1 = $res->fetch_object()) {
                                                                            ?>
                                                                            <option value="<?php echo $r1->state_id; ?>"><?php echo $r1->state_name; ?></option>
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                    </select></td>         
                                                            </tr>
                                                            <tr>
                                                                <td>City </td>
                                                                <td><select name="city">
                                                                        <?php
                                                                        $sel = "select * from city";
                                                                        $res = $conn->query($sel);
                                                                        while ($r1 = $res->fetch_object()) {
                                                                            ?>
                                                                            <option value="<?php echo $r1->city_id; ?>"><?php echo $r1->city_name; ?></option>
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                    </select></td>         
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                            <button type="submit" value="save" class="btn btn-default" name="save">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
<!-- <form id="PicModal" enctype="multipart/form-data" method="post" > -->
<div class="modal fade" id="myModal" role="dialog" >
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Change Profile Picture</h4>
            </div>
            <div class="modal-body">
                <div id="body-overlay"><div><img src="loading.gif" width="64px" height="64px"/></div></div>
                <div class="bgColor">
                    <form id="uploadForm" action="upload.php" method="post" enctype="multipart/form-data">
                        <div id="targetOuter">
                            <div id="targetLayer"></div>
                            <img src="photo.png"  class="icon-choose-image" />
                            <div class="icon-choose-image" >
                                <input name="userImage" id="userImage" type="file" class="inputFile" onChange="showPreview(this);" accept="image/*"/>
                                <input type="hidden" value="<?php  echo $_REQUEST['uid']?>" name="UserID" id="UserID">
                            </div>
                        </div>
                        <input type="submit" value="Upload Photo" class="btnSubmit"  />
                    </form>

                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
</div>