<?php

include('top_heaader.php');
include('left_menu.php');
include('connection.php');



if(isset($_REQUEST['video']))
{
    if($_FILES["vdpath"]["error"] == 0 ){
    $title=$_REQUEST['title'];
    $date=$_REQUEST['date'];
    $desc=$_REQUEST['desc'];
    $target_dir = "../video/";
    $target_file = $target_dir . basename($_FILES["vdpath"]["name"]);
    $FileName = $_FILES["vdpath"]["name"];
    move_uploaded_file($_FILES["vdpath"]["tmp_name"], $target_file);
    $Sql = "INSERT INTO videos(vname,videotitle,videodesc,posteddate) values('$FileName','$title','$desc','$date')";
    $res=$conn->query($Sql);
    if($res)
    {
        echo "video uploaded";
    }
    else
    {
        echo "Not upload";
    }
    }
}
?>
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
            <a href="#">Videos</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Manage Videos</h2>

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
               <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="file" class="btn btn-primary" name="vdpath" >
                    </div>
                    <div class="form-group">
                     <label for="exampleInputPassword1">Video Title</label>
                        <input type="text" data-bvalidator="required" data-bvalidator-msg="Enter video title" name." style="width: 40%;" class="form-control" name="title" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                     <label for="exampleInputPassword1">Video Description</label>
                        <input type="text" data-bvalidator="required" data-bvalidator-msg="Enter Description" name." style="width: 40%;" class="form-control" name="desc" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                        <label for="exampleInputPassword1">Date</label>
                        <input type="text" name="date" style="width: 40%;" class="form-control">
                        </div>
                         <input type="submit" class="btn btn-primary" name="video" value="Upload">
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
        <h2><i class="glyphicon glyphicon-user"></i> Video Details</h2>

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
        <th>Video ID</th>
        <th>Video Name</th>
         <th>Video Title</th>
          <th>Video Description</th>
          <th>Date</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php
        $sel="select * from videos";
        $res_sel=$conn->query($sel);
        $no=1;
        while($r=$res_sel->fetch_object())
        {
        ?>
    <tr>
        <td><?php echo $no;?></td>
        <td class="center"><video width="320" height="240" controls>
             <source src="Upload/Videos/<?php echo $r->vname; ?>" type=video/mp4> 
            <!-- <source src=http://techslides.com/demos/sample-videos/small.mp4 type=video/mp4> -->
            </video></td>
            <td><?php echo $r->videotitle;?></td>
            <td><?php echo $r->videodesc;?></td>
            <td><?php echo $r->posteddate;?></td>
        <td class="center">
            <a class="btn btn-danger" href="delete_video.php?id=<?php echo $r->vis;?>">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
            </a>
        </td>
            <td class="center">

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