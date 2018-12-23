<?php
session_start();
error_reporting(0);
if(isset($_SESSION['user']))
{
include('alheader.php');
}
else
{
	include('blheader.php');
}
include('banner_inside.php');
include('connection.php');
if(isset($_REQUEST['send']))
{
	$name=$_REQUEST['name1'];
	$email=$_REQUEST['email'];
	$num=$_REQUEST['num'];
	$message=$_REQUEST['msg'];
	$id=$_SESSION['user']->userid;
    $sel="insert into contact_details(name,email,ph_no,message,userid) values('$name','$email','$num','$message',$id)";
	$res=$conn->query($sel);
	// if($res)
	// {
	// 	echo "inserted";
	// }
	// else
	// {
	// 	echo "FAILURE";
	// }
}
?>
<!-- technology -->
<div class="technology-1">
	<div class="container">
		<div class="col-md-9 technology-left">
			<div class="login_bg">
				<div id="contact" class="contact">
						<h3 style="color: #f53f1a">Contact</h3>		
					 <div class="contact-grids">
						 <div class="contact-icons">
						 <div class="contact-grid">
									<div class="contact-fig2">
										<span class="glyphicon glyphicon-envelope2" aria-hidden="true"></span>
									</div>
									<p><a href="mailto:info@example.com">askmesolutions.ams@gmail.com</a></p>
								</div>
								<!--<div class="contact-grid">
									<div class="contact-fig">
										<span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>
									</div>
									<p>555-222-333</p>
								</div>
								<div class="contact-grid">
									<div class="contact-fig1">
										<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
									</div>
									<p>T317 Timber Oak Drive
										<span>Sundown,TX 79372</span></p>
								</div>-->
								<div class="clearfix"> </div>
							 </div>
							 <form>
								<input type="text" placeholder="Name" name="name1">
								<input type="text" placeholder="Email" name="email">
								<input type="text" placeholder="Phone" name="num">
								<textarea name="msg" placeholder="Message..."></textarea>
								<input type="submit" name="send" value="SEND">
							 </form>
							 </div>			 
					 <div class="map">
					<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235014.36533858115!2d72.57974207166964!3d23.020120128023226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e84faa5a36071%3A0x9af325a448f09478!2sTOPS+Technologies+Testing+PHP+.Net+Java+iOS+Android+Training!5e0!3m2!1sen!2sin!4v1498556632449" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>-->
						</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<?php
include('footer.php');
?>