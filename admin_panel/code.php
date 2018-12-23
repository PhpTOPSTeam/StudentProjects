<?php
include('top_heaader.php');

include('left_menu.php');
?>
<html>
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
            <a href="#">Code</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i>Code details</h2>

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
                <form role="form">
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
                        <label for="exampleInputPassword1">Page Name</label>
                        <input type="text" style="width: 40%;" class="form-control" id="exampleInputPassword1" name="pname" placeholder="Topic">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <textarea class="form-control" style="width: 40%;" id="exampleInputPassword1" name="desc" placeholder="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Code</label>
                        <textarea class="form-control" id="exampleInputPassword1" style="width: 40%;" name="code" placeholder="Enter code"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default" name="submit">ADD</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->

<?php
include('footer.php');
?>