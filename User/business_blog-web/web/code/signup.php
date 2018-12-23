<?php
include('blheader.php');
include("connection.php");
if(isset($_REQUEST['submit']))
{
	  $fname=$_REQUEST['fname'];
    $lname=$_REQUEST['lname'];
    $uname=$_REQUEST['uname'];
    $email=$_REQUEST['email'];
    $pass=$_REQUEST['pass'];
    $cpass=$_REQUEST['cpass'];
    $gen=$_REQUEST['gen'];
    $address=$_REQUEST['add'];
    $dob=$_REQUEST['dob'];
    $country=$_REQUEST['country'];
    $state=$_REQUEST['state'];
    $city=$_REQUEST['city'];
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["imgpath"]["name"]);
    if(move_uploaded_file($_FILES["imgpath"]["tmp_name"], $target_file)){
      $image_name = $_FILES["imgpath"]["name"];
    } else{
      $image_name=" ";
    } 
    $sel="insert into user_details (fname,lname,username,email,password,confirm_password,gender,address,dob,cid,sid,ct_id,profile_pic) values ('$fname','$lname','$uname','$email','$pass','$cpass','$gen','$address','$dob',$country,$state,$city,'$image_name')";
    $res=$conn->query($sel);
  }
?>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript">
      function getstate(val)
      {
        //alert(val);
       $.ajax({
                type:"POST",
                url: "get_state.php",
                data: "cid="+val,
                success:function(data)
                {
                 // how can I get selected value here
                // alert(data);
                 $("#state").html(data);
                }
            });
      }
 function getcity(val)
      {
        //alert(val);
       $.ajax({
                type:"POST",
                url: "get_city.php",
                data: "sid="+val,
                success:function(data)
                {
                 // how can I get selected value here
                //alert(data);
                 $("#city").html(data);
                }
            });
      }
  </script>
<div class="technology-1">
	<div class="container">
		<div class="col-md-12">
			<div class="login_bg">
				<div id="contact" class="contact">
				<h3 style="margin-left:20px; color:#fa4b2a;">Personal Details</h3><br>
          <div class="container">
            <div class="row">
              <form role="form" method="post" enctype="multipart/form-data">
                <div class="col-lg-6">
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                <div class="form-group">
                    <label for="InputName">First Name</label>
                    <div class="input-group">
                        <input typ e="text" class="form-control" name="fname" id="InputName" placeholder="Enter Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                    <label for="InputName">Last Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="lname" id="InputName" placeholder="Enter Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div><br>
                    </div>
                    <div class="form-group">
                    <label for="InputName">Username</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="uname" id="InputName" placeholder="Enter any username" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div><br>
              <div class="form-group">
                    <label for="InputEmail">Other Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="InputEmailFirst" name="email" placeholder="Enter Email" required>
                        </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="InputEmailSecond" name="pass" placeholder="Enter new password" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Confirm Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="InputEmailSecond" name="cpass" placeholder="Enter new password" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="InputEmail">Gender</label>
                    <div class="input-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="femaleRadio" value="Female" name="gen">Female
                                </label>
                            </div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="maleRadio"  name="gen" value="Male">Male
                                </label>
                            </div>
                            </div>
                    </div>
                </div> 
                <div class="form-group">
                    <label for="InputEmail">Address</label>
                    <div class="input-group">
                        <textarea class="form-control" id="InputEmailSecond" name="add" placeholder="Enter current address" required></textarea>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
               <div class="form-group">
                    <label for="InputEmail">Date of Birth</label>
                    <div class="row">
                <div class="controls input-append date form_date col-lg-11" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="padding-right: 0px">
                    <input size="16" style="height: 35px; "  type="text" class="form-control" name='dob' value="" readonly>
                    <span class="add-on"  style="height: 35px"><i class="icon-remove"></i></span>
                    <span class="add-on" style="height: 35px"><i class="icon-th"></i></span>
                    </div>
                    <div class="col-lg-1" style="padding-left: 0px">
                <span class="input-group-addon" style="width: 0%;height: 35%;border-right: 1px solid;    border-color: #cccccc; border-radius: 4px"><span class="glyphicon glyphicon-asterisk" style="padding-top: 3px;padding-bottom: 4px "></span></span>
                </div>
                </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Country</label>
                    <div class="input-group" >
                     <select style="width: 100%" id="country" class="form-control" id="InputEmailSecond" name="country" onchange="getstate(this.value)">
                     <option>Select Country</option>
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
                         <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                     </div>
                 </div>
                  <div class="form-group">
                    <label for="InputEmail">State</label>
                    <div class="input-group" >
                     <select style="width: 100%" id="state" class="form-control" name="state" onchange="getcity(this.value)">
                            <option>Select State</option>
                        </select>
                         <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                     </div>
                 </div>
                  <div class="form-group">
                    <label for="InputEmail">City</label>
                    <div class="input-group" >
                     <select style="width: 100%" id="city" class="form-control" id="city" name="city">
                         <option>Select City</option>  
                        </select>
                         <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                     </div>
                 </div>
                  <table>
                  <div class="form-group">
                    <div class="input-group">
                    <tr>
                        <td><input type="submit" class="btn btn-info pull-right"" id="submit" name="submit" required value="Register"></td>
                        <td><input type="reset" class="btn btn-danger pull-right" id="submit" required value="Cancel"></td>
                    </tr>
                    </div>
                    </div>
                    <div class="form-group">
                    <label for="InputEmail">Profile Picture</label>
                    <div class="input-group">
                        <input type="file" name="imgpath" class="form-control" id="InputEmailSecond">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                </tr>
                </table>
            </div>
            </div>
        </form>
        </table>
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
<?php
include('footer.php');
?>