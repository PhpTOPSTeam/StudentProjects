<?php
include('top_heaader.php');
include('left_menu.php');
include('connection.php');
if(isset($_REQUEST['submit']))
{
	$date=date("Y-m-d");
	$tech=$_REQUEST["technology"];
	$topic=$_REQUEST["topic"];
	$query=$_REQUEST["query"];
    $desc=$_REQUEST["desc"];
    $uid=$_SESSION['user']->userid;
    $insert="insert into query_details(date,tid,topic,questions,query_desc,uid) values ('$date',$tech,
    '$topic','$query','$desc',$uid)";
    $res=$conn->query($insert);
}
if(isset($_REQUEST['view']))
{
	?>
		<script>
		//alert('Update successfull');
		window.location="view_queries.php";
		</script>
		<?php
	}
?>
        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
            </noscript>
            <html>
            <head>
            	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  
  <script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
  });
  </script>
            </head>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> 
        </li>
        <li>
            <a href="#">Queries</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Query details</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
             <div class="box-content">
                <form role="form" id="frm">
                   <div class="form-group">
                   <label for="exampleInputPassword1">Technology </label>
                    <select name="technology" style="width: 40%;" class="form-control">
                    <?php
                        $sel="select * from technology";
                        include('connection.php');
                        $res_sel=$conn->query($sel);
                        while($r=$res_sel->fetch_object())
                        {
                            ?>
                            <option value="<?php echo $r->tech_id;?>">
                            <?php echo $r->techname;?></option>
                     <?php
                         }
                     ?>
        </select></td>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Topic</label>
                        <input type="text" style="width: 40%;" data-bvalidator="required" class="form-control" id="exampleInputPassword1" name="topic" placeholder="Topic">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Question</label>
                        <textarea class="form-control" style="width: 40%;" id="exampleInputPassword1" name="query" placeholder="Ask Question"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Query Description </label>
                        <textarea class="form-control" style="width: 40%;" id="exampleInputPassword1" name="desc" placeholder="Description here..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-default" name="submit">Submit</button>
                    <button type="submit" class="btn btn-default" name="view">View All Queries</button>
                </form>

            </div>
        </div>
    </div><!--/span-->
</div><!--/row-->
<?php
include('footer.php');
?>