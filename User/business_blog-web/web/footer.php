<?php
error_reporting(E_ALL);
?>
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!--<script src="js/bootstrap.min.js"></script>-->
<!--<script type="text/javascript" src="Dp/bootstrap/js/bootstrap.min.js"></script>-->
<script src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/jquery.rateyo.js"></script>
<script type="text/javascript" src="Dp/bootstrap/js/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="Dp/bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
	$('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
	$('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
    });
</script>
<script>

      $(function () {
        var rating = 1.6;
        $(".rateyo-readonly-widg").rateYo({
          rating: rating,
          numStars: 5,
          precision: 2,
          minValue: 1,
          maxValue: 5
        }).on("rateyo.change", function (e, data) {
        // alert(data.rating);
          console.log(data.rating);
        });
      });
    </script>
</head>
<body>
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-4 footer-left">
				<h6>LEARN MORE ABOUT......</h6>
				<p><a href="https://www.w3schools.com/php/"><img height="50" width="50" src="images/PHP-Logo.png"></a>
				&nbsp;&nbsp;
				<a href="https://www.tutorialspoint.com/python/"><img height="50" width="70" src="images/python.png"></a>
				&nbsp;&nbsp;
				<a href="http://www.w3schools.in/java-tutorial/"><img height="50" width="80" src="images/java.png"></a>
				&nbsp;&nbsp;
				<a href="https://www.w3schools.com/html/"><img height="50" width="80" src="images/html5.png"></a>
				&nbsp;&nbsp;
				<br>
				</p>
				<p>
				<a href="https://www.tutorialspoint.com/csharp/"><img height="50" width="70" src="images/visual_studio.png">
				</a>
				&nbsp;&nbsp;&nbsp;
				<a href="https://www.tutorialspoint.com/cprogramming/"><img height="50" width="80" src="images/CPlus.jpg"></a>
				&nbsp;&nbsp;&nbsp;
				<a href="https://www.tutorialspoint.com/android/"><img height="70" width="80" src="images/android.png"></a></p>
			</div>
			<div class="col-md-4 footer-middle">
			 <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;width&amp;layout=standard&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:80px;" allowTransparency="true"></iframe>
			 <!-- <iframe src="http://www.facebook.com" style="width:100%;height:100%"> -->
			</div>
			<div class="col-md-4 footer-right">
				<h4>Quick Links</h4>
				<li><a href="almainpage.php"> Home</a></li>
				<li><a href="askquery.php"> Ask A Query</a></li>
				<li><a href="view_code.php"> View Code</a></li>
				<li><a href="profile.php"> My Profile </a></li>
				<li><a href="contactus.php"> About US </a></li>
				<li><a href="contactus.php"> Contact US </a></li>
				<?php
				if(isset($_SESSION['user'])) { ?><li><a href="feedbackForm.php"> Feedback </a></li><?php }else{  ?> <li><a href="BeforeLoginfeedbackForm.php"> Feedback </a></li> <?php } ?>

				<?php 
// var_dump($_POST);
  if(isset($_POST['Search']))
       {
         echo "<script>search();</script>";
       }
?>

			</div>
			<div class="clearfix"></div>
		</div>
	</div>
<!-- footer -->
<!-- footer-bottom -->
			<div class="copyright">
				<div class="container">
					<p>© 2017 AskMeSolutions. All rights reserved |</p>
				</div>
			</div>
</body>
</html>