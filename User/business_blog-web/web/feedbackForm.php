
<?php
include('alheader.php');
include('connection.php');
if(isset($_REQUEST['submitfeedback']))
{
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$email=$_REQUEST['email'];
$rate=$_REQUEST['RateValue'];
$id=$_SESSION['user']->userid;
$desc=htmlentities($_REQUEST['desc']);
$data = str_replace("'","\'",$desc);
$sel="insert into feedback_details(fname,lname,user_email,rating,feedback_desc,userid)values('$fname','$lname','$email',$rate,'$data',$id)";
$res=$conn->query($sel);
//$ex=$res->fetch_object();
if($res)
{
	?>
		<script>
		//alert('Update successfull');
		window.location="feedbackForm.php";
		</script>
		<?php
}
else
{
	echo "Failed";
}
}
?>
<style>
            /****** Rating Starts *****/
            @import url(http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);
            fieldset, label { margin: 0; padding: 0; }
            body{ margin: 0px; }
            h1 { font-size: 1.5em; margin: 10px; }
            .rating { 
                border: none;
                float: left;
            }
            .rating > input { display: none; } 
            .rating > label:before { 
                margin: 5px;
                font-size: 1.25em;
                font-family: FontAwesome;
                display: inline-block;
                content: "\f005";
            }
            .rating > .half:before { 
                content: "\f089";
                position: absolute;
            }

            .rating > label { 
                color: #ddd; 
                float: right; 
            }
            .rating > input:checked ~ label, 
            .rating:not(:checked) > label:hover,  
            .rating:not(:checked) > label:hover ~ label { color: #FFD700;  }
            .rating > input:checked + label:hover, 
            .rating > input:checked ~ label:hover,
            .rating > label:hover ~ input:checked ~ label, 
            .rating > input:checked ~ label:hover ~ label { color: #FFED85;  }     
            /* Downloaded from http://devzone.co.in/ */
        </style>
        <!-- <script src="http://localhost/centrlize_forum/User/business_blog-web/web/js/ckeditor.js"></script> -->
        <script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>
        <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
        <!-- <script src="index_files/ca-pub-2074772727795809.js" type="text/javascript" async=""></script> -->
<script>
                        $(document).ready(function () {
                            $("#demo3 .stars").click(function () {
                                var label = $("label[for='" + $(this).attr('id') + "']");
                                //alert(label.attr('title'));
                                //$("#feedback").text(label.attr('title'));
                                $("#RateValue").val(label.attr('title'));
                                $(this).attr("checked");
                            });
                        });
                    </script>
<div class="technology-1">
	<div class="container">
		<div class="col-md-12">
			<div class="login_bg">
				<div id="contact" class="contact">
				<div class="row">
				<h3 style="margin-left:35px; color:#fa4b2a;">Customer Feedback Form</h3></div>
				<div class="row" style="margin-left: 20px;"><p>Please take a few minutes to give us feedback about our service by filling in this short Customer Feedback Form. We are conducting this research in order to measure your level of satisfaction with the quality of our service.</p></div>
				<div class="container">
						<div class="row">
						<form role="form" method="post">
							<div class="col-lg-6">
								<div class="form-group" style="margin-left: 1px;">
                    				<label for="InputName">First Name</label>
                    					<div class="input-group">
                        					<input type="text" class="form-control" name="fname" id="InputName" placeholder="Enter Name" required>
                        					<span class="input-group-addon"></span>
                        					</div>
                        		</div>
                        		<div class="form-group">
                    				<label for="InputName">Last Name</label>
                    					<div class="input-group">
                        					<input type="text" class="form-control" name="lname" id="InputName" placeholder="Enter Name" required>
                        					<span class="input-group-addon"></span>
                        					</div>
                        		</div>
                        		<div class="form-group">
                    				<label for="InputName">Email</label>
                    					<div class="input-group">
                        					<input type="text" class="form-control" name="email" id="InputName" placeholder="Enter Name" required>
                        					<span class="input-group-addon"></span>
                        					</div>
                        		</div>
                        		<div class="form-group">
                    				<label for="InputName">Rating</label><br>
                    				<fieldset id='demo3' class="rating">
                        <input class="stars" type="radio" id="star53" name="rating" value="5" />
                        <label class = "full" for="star53" title="5"></label>
                        <input class="stars" type="radio" id="star4half3" name="rating" value="4.5" />
                        <label class="half" for="star4half3" title="4.5"></label>
                        <input class="stars" type="radio" id="star43" name="rating" value="4" />
                        <label class = "full" for="star43" title="4"></label>
                        <input class="stars" type="radio" id="star3half3" name="rating" value="3.5" />
                        <label class="half" for="star3half3" title="3.5"></label>
                        <input class="stars" type="radio" id="star33" name="rating" value="3" />
                        <label class = "full" for="star33" title="3"></label>
                        <input class="stars" type="radio" id="star2half3" name="rating" value="2.5" />
                        <label class="half" for="star2half3" title="2.5"></label>
                        <input class="stars" type="radio" id="star23" name="rating" value="2" />
                        <label class = "full" for="star23" title="2"></label>
                        <input class="stars" type="radio" id="star1half3" name="rating" value="1.5" />
                        <label class="half" for="star1half3" title="1.5"></label>
                        <input class="stars" type="radio" id="star13" name="rating" value="1" />
                        <label class = "full" for="star13" title="1"></label>
                        <input class="stars" type="radio" id="starhalf3" name="rating" value="0.5" />
                        <label class="half" for="starhalf3" title="0.5"></label>
                    </fieldset>
                    <div style='clear:both;'></div>
                                </div>
                                <div class="form-group">
                    				<input type="hidden" name="RateValue" id="RateValue">
                    				<label for="InputName">How would you suggest we improve it?</label>
                    					<div class="input-group">
                        					<textarea rows="5" class="form-control" name="desc" id="text" required></textarea>
<!--                        					<script>
                  								CKEDITOR.replace( 'text' );
              								</script>-->
              								<!-- <textarea name="area"></textarea> -->
                        					<span class="input-group-addon"></span>
                        					</div>
                        		</div>
                        		<input type="submit" class="btn btn-info" name="submitfeedback" value="Send Feedback"></button>
                        		</div>
                        		</form>
                        		</div>
                        		</div>
                        		</div>
                        		</div>
                        		</div>
                        		</div>
                        		</div>
<script>
//CKEDITOR.editorConfig = function (config) {
//// alert('call');
//config.removePlugins = 'Copy,Cut,Paste,Undo,Redo,Print,Form,TextField,Textarea,Button,SelectAll,NumberedList,BulletedList,CreateDiv,Table,PasteText,PasteFromWord,Select,HiddenField'; 
////The options which you don't need in the toolbar, you can add them in the above remove plugins list.
//config.toolbar = {name:'clipboard',items:['Cut','Copy']}; 
//
//};
</script>
<script>
	CKEDITOR.replace( 'text', {
		toolbar: [
//			{ name: 'clipboard', items: [ 'Undo', 'Redo' ] },
//			{ name: 'styles', items: [ 'Styles', 'Format' ] },
			{ name: 'basicstyles', items: [ 'Bold', 'Italic', 'Strike', '-', 'RemoveFormat' ] },
			{ name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote' ] },
			{ name: 'links', items: [ 'Link', 'Unlink' ] },
			{ name: 'insert', items: [ 'Image', 'EmbedSemantic', 'Table' ] },
			{ name: 'tools', items: [ 'Maximize' ] },
			{ name: 'editing', items: [ 'Scayt' ] }
		],
	} );
</script>
<?php
include('footer.php');
?>