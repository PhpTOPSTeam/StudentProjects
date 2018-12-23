<?php
include('connection.php');
include('alheader.php');
$id=$_REQUEST['uid'];
$sel="select * from user_details where userid=$id";
$res=$conn->query($sel);
$r=$res->fetch_object();
if(isset($_REQUEST['save']))
{
	//echo "hello";
	if(($_REQUEST['oldpwd'])== ($r->password))
	{ ?>
	<script type="text/javascript">
		alert("You recently used this password");
	</script><?php }
else
{
		$newpwd=$_REQUEST['newpwd'];
		$confirmpwd=$_REQUEST['confirmpwd'];
		$update_pwd="update user_details set password='$newpwd',confirm_password='$confirmpwd' where userid=$id";
		$res_pwd=$conn->query($update_pwd);
		if($res_pwd)
		{
			echo "Password Changed Successfully";
		}
		else
		{
			echo "failure";
		}
	}
}

?>
<script type="text/javascript">
	
	function conf_password(e){
		var pass = $("#pass").val();
		if(pass == e){
			$("#errormsg").text('');
			$('#save').attr('disabled',false);
		}else{
			$("#errormsg").text('Password and Confirm Password does not match');
			$('input[type="submit"]').attr('disabled','disabled');
			$('#save').attr('disabled',true);
			// alert('not match');
		}
	}
</script>
<div class="technology-1">
	<div class="container">
		<div class="col-md-12">
			<div class="login_bg">
				<div id="contact" class="contact">
				<h3 style="margin-left:20px; margin-bottom:40px;">Password Details</h3>
          			<div class="container">
            			<div class="row">
              				<form role="form" method="post" enctype="multipart/form-data">
                				<div class="col-lg-6"> 
                  				<div class="panel panel-info">
                    				<div class="panel-heading">
                    					<h class="panel-title">Change Password</h>
                    				</div>
                    				<div class="panel-body">
                    				<div class=" col-md-12 col-lg-12 "> 
                  						<table class="table table-user-information">
                   						<tbody>
                      					<tr>
                        					<td style="width: 30%">Old Password</td>
                        					<td><input type="password" name="oldpwd"></td>
                      					</tr>
                      					<tr>
                        					<td>New Password</td>
                        					<td><input type="password" name="newpwd" id="pass"></td>
                      					</tr>
                      					<tr>
                        					<td>Confirm Password</td>
                        					<td><input type="password" name="confirmpwd" onblur="conf_password(this.value)"><span id="errormsg" style="color: red"></span></td>
                      					</tr>
                      					</tbody>
                      					</table>
                      					</div>
                      					</div>
                      					<div class="panel-footer">
                                            <button type="submit" value="save" class="btn btn-info" id="save" name="save">CHANGE PASSWORD</button>
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


