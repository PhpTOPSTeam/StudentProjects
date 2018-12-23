<?php
include('alheader.php');
include('connection.php');
$user=$_SESSION['user'];
$sel="SELECT * FROM user_details JOIN country ON user_details.cid = country.cid JOIN state ON user_details.sid = state.state_id JOIN city ON user_details.ct_id=city.city_id where user_details.userid=$user->userid";
$res_sel=$conn->query($sel);

$r=$res_sel->fetch_object();
// echo "<pre>";
// print_r($r);
?>
<div class="technology-1">
	<div class="container">
		<div class="col-md-12">
			<div class="login_bg">
				<div id="contact" class="contact">
				<h3 style="margin-left:20px; margin-bottom:40px;">Profile</h3>
          <div class="container">
            <div class="row">
              <form role="form" method="post" enctype="multipart/form-data">
                <div class="col-lg-6"> 
                  <div class="panel panel-info">
                    <div class="panel-heading">
                    <h class="panel-title"><?php echo $r->username; ?></h>
                    </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img src="upload/<?php echo $r->profile_pic; ?>" class="img-circle img-responsive"> 
                </div>
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        	<td>First Name </td>
                        	<td><?php echo $r->fname; ?> </td>
                      </tr>
                      <tr>
                        	<td>Last Name </td>
                        	<td><?php echo $r->lname; ?></td>
                      </tr>
                      <tr>
                        	<td>Username </td>
                        	<td><?php echo $r->username; ?></td>
                      </tr>
                      <tr>
                        	<td>Date of Birth </td>
                        	<td><?php echo $r->dob; ?></td>
                      </tr>
                      <tr>
                        	<td>Gender</td>
                        	<td><?php echo $r->gender; ?></td>
                      </tr>
                      <tr>
                        	<td>Home Address</td>
                        	<td><?php echo $r->address; ?></td>
                      </tr>
                      <tr>
                        <td>Email </td>
                        <td><a href="mailto:info@support.com"><?php echo $r->email; ?></a></td>
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
                 <div class="panel-footer">
                   <a href="editprofile.php?uid=<?php echo $user->userid;?>" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning">EDIT PROFILE</a>
                        </span> 
                   <a href="changepassword.php?uid=<?php echo $user->userid;?>" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning">CHANGE PASSWORD</a>
                        </span>                
          </div>
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
 <?php
 include('footer.php');
 ?>