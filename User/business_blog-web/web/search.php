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
include('connection.php');
$sel_tech = "select * from technology";
$ex = $conn->query($sel_tech);
if(isset($_REQUEST['Question']) && $_REQUEST['Question'] != '')
{
	 $sel="select * from query_details JOIN technology ON query_details.tid=technology.tech_id where questions like '%".$_REQUEST['Question']."%' OR query_desc like '%".$_REQUEST['Question']."%'";
	$res=$conn->query($sel);
	while($ex1=$res->fetch_object())
	{
	?>
	<div class="technology-1">
	<div class="container">
		<div class="col-md-12">
			<div class="business">
				<div id="contact" class="contact">
				<div class="row">
				<div class="col-md-8">
				<h3><a href="answers.php?qid=<?php echo $r->quid; ?>"><?php echo $ex1->questions; ?></a></h3>
				</div>
				<div class="col-md-1 techtop">
				Tech: <?php echo $ex1->techname; ?></div>
				<div class="col-md-3 techtop topic">
				<label class="topiclabel">Topic: <?php echo $ex1->topic; ?></label></div></div>
				<div class="row">
				<div class="col-md-12 desc">
				<?php echo $ex1->query_desc; ?>
				</div>
				</div><br>
			</div>
		</div>
	</div>
	</div>
	</div>
	<?php			
	}
}
else if(isset($_REQUEST['ques']) && !isset($_REQUEST['tech_id']))
	{
	?>
	<div class="technology-1">
	<div class="container">
		<div class="col-md-12">
			<div class="business">
				<div id="contact" class="contact">
              <div class="container">
          <div class="row">
        <form role="form">
            <div class="col-lg-6">
               	<label for="InputEmail">Select Technology</label>
                    <div class="input-group">
                        <select class="form-control" name="tech" onchange="get_tech(this.value)" required>
                      <?php
                       while($res_tech=$ex->fetch_object())
                       {
                       	?>
                       	 <option value="<?php echo $res_tech->tech_id; ?>" <?php
                    if(isset($_REQUEST['tech_id']))
                    { 
                    	if($res_tech->tech_id==$_REQUEST['tech_id']){
                    	echo "selected";
                    	} } ?>><?php echo $res_tech->techname; ?></option>
                       	<?php                  
                   }
                  	?>
                      </select>
                      <input type="hidden" name="query" id="query" value="<?php echo $_REQUEST['ques']; ?>">
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
	// echo "SUCCESS";
	 $sel="select * from query_details JOIN technology ON query_details.tid=technology.tech_id where questions like '%".$_REQUEST['ques']."%' OR query_desc like '%".$_REQUEST['ques']."%' OR topic like '%".$_REQUEST['ques']."%'";
	$res=$conn->query($sel); 
	while($ex=$res->fetch_object())
	{
	?>
	<div class="technology-1">
	<div class="container">
		<div class="col-md-12">
			<div class="business">
				<div id="contact" class="contact">
					<div class="row">
						<div class="col-md-8">
							<h3><a href="answers.php?qid=<?php echo $r->quid; ?>"><?php echo $ex->questions; ?></a></h3>
						</div>
						<div class="col-md-1 techtop">
							Tech: <?php echo $ex->techname; ?>
						</div>
						<div class="col-md-3 techtop topic">
						<label class="topiclabel">Topic: <?php echo $ex->topic; ?></label>
						</div>
					</div>
						<div class="row">
						<div class="col-md-12 desc">
						<?php echo $ex->query_desc; ?>
						</div>
						</div><br>
						<hr>
				</div>
			</div>
		</div>
	</div>
	</div>
<?php
}
	}
else{
	 $sel="select * from query_details JOIN technology ON query_details.tid=technology.tech_id where questions like '%".$_REQUEST['ques']."%' AND query_details.tid= ".$_REQUEST['tech_id']."";
	$res=$conn->query($sel);
	while($ex=$res->fetch_object())
	{	
	?>
	<div class="technology-1">
	<div class="container">
		<div class="col-md-12">
			<div class="business">
				<div id="contact" class="contact">
				<div class="row">
				<div class="col-md-8">
				<h3><a href="answers.php?qid=<?php echo $r->quid; ?>"><?php echo $ex->questions; ?></a></h3></div>
				<div class="col-md-1 techtop">
				Tech: <?php echo $ex->techname; ?>
				</div>
				<div class="col-md-3 techtop topic">
				<label class="topiclabel">Topic: <?php echo $ex->topic; ?></label>
				</div>
				</div>
				<div class="row">
				<div class="col-md-12 desc">
				<?php echo $ex->query_desc; ?>
				</div>
				</div><br>
	<hr>
	</div>
	</div>
	</div>
	</div>
	</div>
<?php
}
}
?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
	function get_tech(val)
	{
		var Query = $("#query").val();
       // alert(val);
       // return false;
       $.ajax({
                type:"POST",
                url: "get_tech.php",
                data: "techid="+val,
                success:function(data)
                {
                 // $("#tech").html(data);
                 window.location="search.php?ques="+Query+"&tech_id="+val;
                }
            });
    }
</script>
</head>
<body>
</body>
</html>	
<?php
include('footer.php');
?>