<?php
include('header.php');
include('banner.php');
include('connection.php');
 
$sel="select * from query_details";
$res=$conn->query($sel);
$r=$res->fetch_object();

?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Business_Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<!-- technology -->
<div class="technology">
	<div class="container">
		<div class="col-md-9 technology-left">
		<div class="tech-no">
			<!-- technology-top -->
			 <div class="tc-ch">
				<ul>
					<li><i class="glyphicon glyphicon-eye-open"> </i><a class="admin" href="show_postform.php"> Post Your Comment </a></li>
				</ul><br>
				<div class="form-group">
                    <label for="InputEmail">Select Technology</label>
                    <div class="input-group">
                        <select class="form-control" name="tech" required>
                        <option>lhsdjkfhjsdahfj</option>
                        <option>jdhjfkjfhjj</option>
                        </select>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="InputEmail">Ask Your Question</label>
                    <div class="input-group">
                        <textarea type="email" class="form-control" id="InputEmailFirst" name="email" placeholder="Enter your query" required></textarea>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                 <div class="form-group">
                    <div class="input-group">
                        <td><input type="submit" class="btn btn-info pull-right" id="submit" name="post" required value="Post"></td>
                    </div>
                </div>
                <h3><a href="singlepage.html"><?php echo $r->topic ?></a></h3>
                <?php
					while($r=$res->fetch_object())
					{
						?>
					
						<p><?php echo $r->query_desc ; ?>
					</p>
					<?php
				}
				?>
						<div class="form-group">
                    <label for="InputEmail">Answers</label>
                </div>
					<div class="blog-poast-info">
							<ul>
								<li><i class="glyphicon glyphicon-user"> </i><a class="admin" href="#"> Admin </a></li>
								<li><i class="glyphicon glyphicon-calendar"> </i>30-12-2015</li>
								<li><i class="glyphicon glyphicon-comment"> </i><a class="p-blog" href="#">3 Comments </a></li>
								<li><i class="glyphicon glyphicon-heart"> </i><a class="admin" href="#">5 favourites </a></li>
								<li><i class="glyphicon glyphicon-eye-open"></i><a href="reply_page.php">Reply</a>
							</ul>
						</div>
			</div>
			<div class="clearfix"></div>
			<!-- technology-top -->

			<!-- technology-top -->
			<div class="soci">
				<ul>
					<li><a href="#" class="facebook-1"> </a></li>
					<li><a href="#" class="facebook-1 twitter"> </a></li>
					<li><a href="#" class="facebook-1 chrome"> </a></li>
					<li><a href="#"><i class="glyphicon glyphicon-envelope"> </i></a></li>
					<li><a href="#"><i class="glyphicon glyphicon-print"> </i></a></li>
					<li><a href="#"><i class="glyphicon glyphicon-plus"> </i></a></li>
				</ul>
			</div>
			 <div class="tc-ch">
				
					<div class="tch-img">
						<a href="singlepage.html"><img src="images/2.jpg" class="img-responsive" alt=""/></a>
					</div>
					<a class="blog pink" href="singlepage.html">Science</a>
					<h3><a href="singlepage.html">Lorem Ipsum is simply</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud eiusmod tempor incididunt ut labore et dolore magna aliqua exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						<p>Ut enim ad minim veniam, quis nostrud eiusmod tempor incididunt ut labore et dolore magna aliqua exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					
						<div class="blog-poast-info">
							<ul>
								<li><i class="glyphicon glyphicon-user"> </i><a class="admin" href="#"> Admin </a></li>
								<li><i class="glyphicon glyphicon-calendar"> </i>30-12-2015</li>
								<li><i class="glyphicon glyphicon-comment"> </i><a class="p-blog" href="#">3 Comments </a></li>
								<li><i class="glyphicon glyphicon-heart"> </i><a class="admin" href="#">5 favourites </a></li>
								<li><i class="glyphicon glyphicon-eye-open"> </i>1.128 views</li>
							</ul>
						</div>
			</div>
			<!-- technology-top -->
			<!-- technology-top -->
			<div class="soci">
				<ul>
					<li><a href="#" class="facebook-1"> </a></li>
					<li><a href="#" class="facebook-1 twitter"> </a></li>
					<li><a href="#" class="facebook-1 chrome"> </a></li>
					<li><a href="#"><i class="glyphicon glyphicon-envelope"> </i></a></li>
					<li><a href="#"><i class="glyphicon glyphicon-print"> </i></a></li>
					<li><a href="#"><i class="glyphicon glyphicon-plus"> </i></a></li>
				</ul>
			</div>
			 <div class="tc-ch">
				
					<div class="tch-img">
						<a href="singlepage.html"><img src="images/3.jpg" class="img-responsive" alt=""/></a>
					</div>
					<a class="blog gren" href="singlepage.html">Culture</a>
					<h3><a href="singlepage.html">Lorem Ipsum is simply</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud eiusmod tempor incididunt ut labore et dolore magna aliqua exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						<p>Ut enim ad minim veniam, quis nostrud eiusmod tempor incididunt ut labore et dolore magna aliqua exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					
						<div class="blog-poast-info">
							<ul>
								<li><i class="glyphicon glyphicon-user"> </i><a class="admin" href="#"> Admin </a></li>
								<li><i class="glyphicon glyphicon-calendar"> </i>30-12-2015</li>
								<li><i class="glyphicon glyphicon-comment"> </i><a class="p-blog" href="#">3 Comments </a></li>
								<li><i class="glyphicon glyphicon-heart"> </i><a class="admin" href="#">5 favourites </a></li>
								<li><i class="glyphicon glyphicon-eye-open"> </i>1.128 views</li>
							</ul>
						</div>
			</div>
			<!-- technology-top -->
			</div>
		</div>
		<!-- technology-right -->
		<div class="col-md-3 technology-right">
				<div class="blo-top">
					<div class="tech-btm">
					<img src="images/banner1.jpg" class="img-responsive" alt=""/>
					</div>
				</div>
				<div class="blo-top">
					<div class="tech-btm">
					<h4>Sign up to our newsletter</h4>
					<p>Pellentesque dui, non felis. Maecenas male</p>
						<div class="name">
							<form>
								<input type="text" placeholder="Email" required="">
							</form>
						</div>	
						<div class="button">
							<form>
								<input type="submit" value="Subscribe">
							</form>
						</div>
							<div class="clearfix"> </div>
					</div>
				</div>
				<div class="blo-top1">
					<div class="tech-btm">
					<h4>Top stories of the week </h4>
						<div class="blog-grids">
							<div class="blog-grid-left">
								<a href="singlepage.html"><img src="images/6.jpg" class="img-responsive" alt=""/></a>
							</div>
							<div class="blog-grid-right">
								
								<h5><a href="singlepage.html">Pellentesque dui, non felis. Maecenas male</a> </h5>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="blog-grids">
							<div class="blog-grid-left">
								<a href="singlepage.html"><img src="images/7.jpg" class="img-responsive" alt=""/></a>
							</div>
							<div class="blog-grid-right">
								
								<h5><a href="singlepage.html">Pellentesque dui, non felis. Maecenas male</a> </h5>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="blog-grids">
							<div class="blog-grid-left">
								<a href="singlepage.html"><img src="images/11.jpg" class="img-responsive" alt=""/></a>
							</div>
							<div class="blog-grid-right">
								
								<h5><a href="singlepage.html">Pellentesque dui, non felis. Maecenas male</a> </h5>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="blog-grids">
							<div class="blog-grid-left">
								<a href="singlepage.html"><img src="images/9.jpg" class="img-responsive" alt=""/></a>
							</div>
							<div class="blog-grid-right">
								
								<h5><a href="singlepage.html">Pellentesque dui, non felis. Maecenas male</a> </h5>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="blog-grids">
							<div class="blog-grid-left">
								<a href="singlepage.html"><img src="images/10.jpg" class="img-responsive" alt=""/></a>
							</div>
							<div class="blog-grid-right">
								<h5><a href="singlepage.html">Pellentesque dui, non felis. Maecenas male</a> </h5>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
		</div>
		<div class="clearfix"></div>
		<!-- technology-right -->
	</div>
</div>
<!-- technology -->
</html>