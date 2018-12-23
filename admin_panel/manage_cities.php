<?php
include('connection.php');
if(isset($_REQUEST["submit"]))
{

$con=$_REQUEST["state"];
$name=$_REQUEST["cname"];

 $insert="insert into city(city_name,sid) values ('$name',$con)";
 $res=$conn->query($insert);

}
include('top_heaader.php');

include('left_menu.php');
?>
<html>
<head>
    <script type="text/javascript" src="C:\xampp\htdocs\centrlize_forum\admin_panel\js\jquery.js"></script>
  <script type="text/javascript">
      function getstate(val)
      {
      //    alert("hi");
        $.ajax({
            type:"POST",
            url:"get_state.php",
            data:"cid="+val,
            success:function(data)
            {
                // alert(data);
                 $("#state1").html(data);
            }
        });
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
            <a href="#">City</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Manage City</h2>

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
                        <div class="form-group">
                         <label for="exampleInputPassword1">Select Country</label>
                    <select name="country" class="form-control" style="width: 40%;" id="state" onchange="getstate(this.value)">
                    <?php
                        $sel="select * from country";
                        $res_sel=$conn->query($sel);
                        while($r=$res_sel->fetch_object())
                        {
                            ?>
                            <option value="<?php echo $r->cid;?>">
                            <?php echo $r->cname;?></option>
                     <?php
                         }
                     ?>
        </select></td>
                    </option>
                         <label for="exampleInputPassword1">Select State</label>
                    <select name="state" class="form-control" style="width: 40%;" id="state1">
                    <?php
                        $sel="select * from state";
                        $res_sel=$conn->query($sel);
                        while($r=$res_sel->fetch_object())
                        {
                            ?>
                            <option value="<?php echo $r->state_id;?>">
                            <?php echo $r->state_name;?></option>
                     <?php
                         }
                     ?>
        </select></td>
                    </option>
                        <label for="exampleInputPassword1">City Name</label>
                        <input type="text" data-bvalidator="required" data-bvalidator-msg="Please enter any state name." style="width: 40%;" class="form-control" name="cname" id="exampleInputPassword1" placeholder="Enter city name">
                    </div>
                    <button type="submit" class="btn btn-default" name="submit">Submit</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->
   <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> City Details</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>City ID</th>
        <th>City Name</th>
        <th>State Name</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php
        $se="select * from city join state on city.sid=state.state_id";
        $res_se=$conn->query($se);
        $no=1;
        while($re=$res_se->fetch_object())
        {
        ?>
        <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $re->city_name; ?></td>
        <td><?php echo $re->state_name; ?></td>
        <td class="center">
          
            <a class="btn btn-info" href="update_city.php?ctid=<?php echo $re->city_id;?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
            <a class="btn btn-danger" href="delete_city.php?id=<?php echo $re->city_id;?>">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
            </a>
        </td>
    </tr>
    <?php
    $no++;
        }
    ?>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    </div>

<?php
include('footer.php');
?>