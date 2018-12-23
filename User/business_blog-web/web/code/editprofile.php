<?php
include('alheader.php');
include('connection.php');
$user=$_SESSION['user'];
if(isset($_GET['uid']))
{

$id=$_GET['uid'];
$sel="SELECT * FROM user_details JOIN country ON user_details.cid = country.cid JOIN state ON user_details.sid=state.state_id JOIN city ON user_details.ct_id=city.city_id where user_details.userid=$id";
$res_sel=$conn->query($sel);
$r=$res_sel->fetch_object();
}
if(isset($_REQUEST['save']))
{
  $id=$_GET['uid'];
  $fname=$_REQUEST['fname'];
  $lname=$_REQUEST['lname'];
  $uname=$_REQUEST['uname'];
  $dob=$_REQUEST['dob'];
  $gen=$_REQUEST['gen'];
  $add=$_REQUEST['add'];
  $email=$_REQUEST['email'];
  $cnt=$_REQUEST['country'];
  $state=$_REQUEST['state'];
  $city=$_REQUEST['city'];
echo $update="update user_details set fname='$fname',lname='$lname',username='$uname',dob='$dob',gender='$gen',address='$add',email='$email',cid=$cnt,sid=$state,ct_id=$city where userid=$id";
$res=$conn->query($update);
if($res)
  {
    header('location:profile.php');
  }
  else
  {
    echo "Update not success";
  }
}
?>
<div class="technology-1">
	<div class="container">
		<div class="col-md-12">
			<div class="business">
				<div id="contact" class="contact">
				<h3 style="margin-left:20px;">Profile</h3>
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
                <div class="col-md-3 col-lg-3 " align="center"> <img src="upload/<?php echo $r->profile_pic; ?>" class="img-circle img-responsive"></div>
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
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
                              $g=$r->gender;
                              
                              ?>  
                                <td><input type="radio" name="gen" value="Male" <?php if($g == 'male'){ ?> checked="checked" <?php } ?>>Male
                                <input type="radio" name="gen" <?php if($g == 'Female'){ ?> checked="checked" <?php } ?> value="Female">Female</td>
                         
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
                          $sel_cnt="select * from country";
                          $res_cnt=$conn->query($sel_cnt);
                          while($r1_cnt=$res_cnt->fetch_object())
                          {
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
                          $sel="select * from state";
                          $res=$conn->query($sel);
                          while($r1=$res->fetch_object())
                          {
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
                          $sel="select * from city";
                          $res=$conn->query($sel);
                          while($r1=$res->fetch_object())
                          {
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
            <button type="submit" class="btn btn-default" name="save">Save</button>
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