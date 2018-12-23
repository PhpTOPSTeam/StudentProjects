<?php
include('top_heaader.php');
include('connection.php');
include('left_menu.php');
?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		function userid(a)
		{
			//alert(a);
			window.location="view_all.php?uid="+a ;
		}
	</script>
</head>
<noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>
                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
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
        <h2><i class="glyphicon glyphicon-user"></i>Query Details</h2>
        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    <div class="alert alert-info">For help with such table please check <a href="http://datatables.net/" target="_blank">http://datatables.net/</a></div>
    <label for="exampleInputEmail1">Username: </label>
    <select name="users" style="width: 40%;" class="form-control" id="" onchange="userid(this.value)" >
    <option value="">--Select User--</option>
                    <?php
                        $sel="select * from user_details where userid<>3";
                        $res_sel=$conn->query($sel);
                        while($r=$res_sel->fetch_object())
                        {
                            ?>
                            <option value="<?php echo $r->userid;?>" 
                            <?php 
                            if(isset($_REQUEST['uid']) && $r->userid==$_REQUEST['uid'])
                            	{
                            	echo "selected=selected";
                            	} ?> >
                            <?php echo $r->username;?></option>
                     <?php
                         }
                     ?>
      </select><br>
      <?php
      if(!isset($_REQUEST['uid']))
      {
      ?>
      <h2>Please select user to display queries</h2>
      <?php
  }
  ?>
 <?php if(isset($_REQUEST['uid']))
    { 
  ?>
  
  <!-- <div class="row">
    <div class="col-md-12">
    <div class="form-group">-->
    <table class="nwidth table table-striped table-bordered bootstrap-datatable datatable" style="font-size: 12px">
         
    <thead>
    <tr>
        <th>Query id</th>
        <th>Date</th>
        <th>Technology</th>
        <th style="width: 5% !important">Topic</th>
        <th>Query Description</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php
       $uid=$_GET['uid'];
         $sel="select * from query_details where uid=$uid";
         $res_sel=$conn->query($sel);
         if($res_sel->num_rows > 0)
         {
         ?>
         <tr>
         <?php
         $no=1;
         while($r=$res_sel->fetch_object())   
          {
          ?>
        <td><?php echo $no; ?></td>
        <td class="center"><?php echo $r->date; ?></td>
        <td class="center"><?php echo $r->tid; ?></td>
        <td class="center"><?php echo $r->topic; ?></td>
        <td class="center nwidth"><?php echo $r->query_desc; ?></td>
         <td class="center">
            <a class="btn btn-danger" href="delete_query.php?id=<?php echo $r->quid;?>">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
            </a>
        </td>
        </tr>
        <?php
        $no++;
          }
        }
      }
      ?>
    </tbody>
    
    </table>  
    <!-- </div>
    </div>
  </div> -->
    
    </div>
    </div>
    </div>
    </div>
    </div>
<?php
include('footer.php');
?>