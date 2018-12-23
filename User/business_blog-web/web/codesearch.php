<!DOCTYPE HTML>
<?php
session_start();
$user=$_SESSION['user']->username;
//echo "<pre>";
//print_r($_SESSION['user']);
//exit();
if(isset($_REQUEST['search']))
{
  $ques=$_REQUEST['ques'];
  ?>
  <script type="text/javascript">
    window.location="search.php?ques=$ques";
  </script>
  <?php
}
?>
<html>
<head>
<style type="text/css">
  .searchbtn{
    background: url(images/search-icon.png) no-repeat 0px 2px #fff;
    border: none;
    height: 26px;
    width: 26px;
    display: inline-block;
    position: absolute;
    outline: none;
    cursor: pointer;
    top: 6px;
    right: 2px;
  }
</style>
<!--<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>-->
<!-- <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />-->
<!-- Custom Theme files -->
<!--<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open<link href="css/style.css" rel='stylesheet' type='text/css' />	+Sans' rel='stylesheet' type='text/css'>
<link href="Dp/bootstrap/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen"> -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="../min/jquery.rateyo.min.css"/>	
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="index_files/ca-pub-2074772727795809.js" type="text/javascript" async=""></script>	
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link href="Dp/bootstrap/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<script type="text/javascript">

function search(){
      var quest = $("#ques").val();
      // var data = ("#form").serialize();
      // alert(data);
       $.ajax({
                type:"POST",
                url: "searchcode.php",
                data: "Question="+quest,
                success:function(data)
                {
                 //  alert(data);
                 // $("#out_search").html(data);
                 window.location="search.php?ques="+quest;
                }
            });
      }
      </script>
</head>
<body>
	<!--start-main-->
  <div id="out_search">
  </div>
           <div class="header">
		        <div class="header-top">
			        <div class="container">
						<div class="logo">
							<a href="index.html"><h1>Ask Me Solution</h1></a>
						</div>
						<div class="search">
							<form>
								<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" name="ques" id="ques" ondragenter="search()">
								<!-- <input type="submit" name="search" onclick="search(this.value)" value=""> -->
                <input type="button" class="searchbtn" name="Search" onclick="search()">
							</form>
						</div>
						<div class="social">
							<ul>
								<li><a href="https://www.facebook.com/" class="facebook"> </a></li>
								<li><a href="https://twitter.com/login" class="facebook twitter"> </a></li>
								<li><a href="https://gmail.com/" class="facebook chrome"> </a></li>
								<li><a href="#" class="facebook in"> </a></li> 
								<li><a href="#" class="facebook beh"> </a></li>
								<li><a href="#" class="facebook vem"> </a></li>
								<li><a href="#" class="facebook yout"> </a></li>
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>	
<!--head-bottom-->
<div class="head-bottom">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <?php
            $pageurl= explode('/', $_SERVER['REQUEST_URI']);
        ?>
          <ul class="nav navbar-nav">
            <li class="<?php if($pageurl[5]=="almainpage.php"){
            	echo "active";
            	} ?>"><a href="almainpage.php">Home</a></li>
            <li class="<?php if($pageurl[5]=="manage_video.php"){
            	echo "active";
            	} ?>"><a href="manage_video.php">Videos</a></li>
            <li class="dropdown <?php if($pageurl[5]=="unanswered_ques.php" || $pageurl[5]=="askquery.php" || $pageurl[5]=="questions.php"){
              echo "active123";
              } ?>">
              <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Query<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="<?php if($pageurl[5]=="askquery.php"){
            	echo "active";
            	} ?>"><a href="askquery.php">Ask questions</a></li>
				 <li class="<?php if($pageurl[5]=="questions.php"){
            	echo "active";
            	} ?>"><a href="questions.php">Manage Questions</a></li>
				  <li class="<?php if($pageurl[5]=="unanswered_ques.php"){
            	echo "active";
            	} ?>"><a href="unanswered_ques.php">Unanswered Questions</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Code<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="upload_code.php">Upload Code</a></li>
				 <li><a href="view_code.php ">View Code</a></li>
              </ul>
            </li>
				 <li class="<?php if($pageurl[5]=="profile.php"){
            	echo "active";
            	} ?>"><a href="profile.php">My Profile</a></li>
				 <li class="<?php if($pageurl[5]=="aboutus.php"){
            	echo "active";
            	} ?>"><a href="aboutus.php">About us</a></li>
            <li class="<?php if($pageurl[5]=="contactus.php"){
            	echo "active";
            	} ?>"><a href="contactus.php">Contact Us</a></li>
            <li><a>Welcome: <?php echo $user; ?></a></li>
				  <li class="<?php if($pageurl[5]=="logout.php"){
            	echo "active";
            	} ?>"><a href="logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
</div>