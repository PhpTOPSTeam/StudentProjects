<?php
include('blheader.php');
include('connection.php');
if(isset($_REQUEST['login']))
{
	   $u = $_REQUEST['uname'];
   	 $p = $_REQUEST['pass'];
   	 $sel = "select * from user_details where username='$u' and password='$p'";
     $ex = $conn->query($sel);
     $res=$ex->fetch_object();
     // echo "<br>";
     // echo "<br>";
     // echo "<br>";
     // echo "<br>";

     // echo "<pre>";
     // print_r($res);
     // exit();
     $nm = $ex->num_rows;
      if($nm > 0)
          {
            if($res->Status == 1 ){
              if($res->roll_id==1)
            {
              ?>
              <script>
              window.location="../../../admin_panel/dashboard.php?unm=$u";
              </script>  
              <?php
            }
            else
            {
              ?>
              <script type="text/javascript">
                 window.location="almainpage.php?unm=$u";
              </script>
             <?php
            }
            }else{ ?>
              <script type="text/javascript">
            alert("User Deactivated by Admin");
            </script>
           <?php }
          	$_SESSION['user']=$res;
          }
      else
        {
        	?>
          <script type="text/javascript">
          	alert("Wrong username or passsword");
          	</script>
          	<?php
        }
}
if(isset($_REQUEST['register']))
{
	?>
	<script>
		//alert('Update successfull');
		window.location="signup.php";
		</script>
		<?php
}
?>
<div class="technology-1">
	<div class="container">
		<div class="col-md-12">
			<div class="login_bg">
				<div id="contact" class="contact">
				<h3 style="margin-left:280px; color: #fa4b2a">Login</h3>	
        <br>	
 <form style="margin-left:280px;">
  <div class="form-group">
    <label for="email">Username</label>
    <input type="text" class="form-control" name="uname" id="email" style="width:60%;" required>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="pass" id="pwd" style="width:60%;" required>
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default" name="login">Login</button>
  &nbsp;&nbsp;<a href="signup.php">Register &nbsp;</a>|
  <a href="signup.php">Forgot Password?</a>
</form> 
</div>
</div>
</div>
</div>
</div>
<?php
include('footer.php');
?>