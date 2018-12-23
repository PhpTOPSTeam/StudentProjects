<!DOCTYPE HTML>
<?php
session_start();
?>
<html>
<head>
<!--<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>-->
<!-- <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />-->
<!-- Custom Theme files -->
<!--<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open<link href="css/style.css" rel='stylesheet' type='text/css' />	+Sans' rel='stylesheet' type='text/css'>
<link href="Dp/bootstrap/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen"> -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel='stylesheet' type='text/css' />	

<link href="Dp/bootstrap/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
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
<script type="text/javascript">

function search(){
      var quest = $("#ques").val();
      // var data = ("#form").serialize();
      // alert(data);
       $.ajax({
                type:"POST",
                url: "search.php",
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
           <div class="header">
		        <div class="header-top">
			        <div class="container">
						<div class="logo">
							<a href="index.php"><h1>Ask Me Solutions</h1></a>
						</div>
						<div class="search">
							<form action="" method="post">
								<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" name="ques" id="ques">
                <!-- <input type="submit" name="search" onclick="search(this.value)" value=""> -->
              <input type="button" class="searchbtn" name="Search"  onclick="search()">
							</form>
						</div>
						<div class="social">
							<ul>
								<li><a href="#" class="facebook"> </a></li>
								<li><a href="#" class="facebook twitter"> </a></li>
								<li><a href="#" class="facebook chrome"> </a></li>
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
            <li class="<?php if($pageurl[5]=="index.php"){
            	echo "active";
            	} ?>"><a href="index.php">Home</a></li>
            <li class="<?php if($pageurl[5]=="aboutus.php"){
            	echo "active";
            	} ?>"><a href="aboutus.php">About us</a></li>
            <li class="<?php if($pageurl[5]=="contactus.php"){
            	echo "active";
            	} ?>"><a href="contactus.php">Contact Us</a></li>
			   <li class="<?php if($pageurl[5]=="login.php"){
            	echo "active";
            	} ?>"><a href="login.php">Login</a></li>
			    <li class="<?php if($pageurl[5]=="signup.php"){
            	echo "active";
            	} ?>"><a href="signup.php">Register</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
</div>
<!--head-bottom-->