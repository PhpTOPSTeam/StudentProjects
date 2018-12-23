<?php
include './connection.php';
if(is_array($_FILES)) {
	// echo "<pre>";
	// print_r($_FILES);
	// exit;
	
if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
$sourcePath = $_FILES['userImage']['tmp_name'];
$targetPath = "upload/".$_FILES['userImage']['name'];
$image_name=$_FILES['userImage']['name'];
//header("editprofile.php?uid=$id");
if(move_uploaded_file($sourcePath,$targetPath)) {
?>
<!-- <img src="upload/<?php echo $image_name; ?>" width="200px" height="200px" class="upload-preview" /> -->
<?php
    $id= $_REQUEST['UserID'];
    $update = "update user_details set profile_pic='$image_name' where userid=$id";
    $sel_dp = $conn->query($update);
  
    ?>
    <script>
    window.location.href="editprofile.php?uid=<?php echo $id; ?>";
    </script>
<?php }
}
}
?>