<?php require_once("../core/init.php"); ?>
<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>
<?php include 'sidenav.php'; ?>
<?php $user_id=$_SESSION['user_id'];?>
<?php if(isset($_POST['submit'])){
  if(isset($_FILES['file'])){
        
      $fileRoot=$photo->uploadImage($_FILES['file']);
      $user->update('users',$user_id,array('image'=>$fileRoot)); 
    
  }
} ?>

        <div id="page-wrapper">
            <div id="page-inner">
            	<fieldset>
  
          		<legend>Change Profile Pic</legend>
            		<form action="" method="post" enctype="multipart/form-data">
                  <?php if(isset($imageError)) { echo '<div class="alert alert-danger">'.$imageError.'</div>'; }?>
                  
            		<table class="table table-dark">
  <tbody>
    <tr>
      
      <td>Pic to be uploaded</td>
      <td><input type="file" name="file" required></td>
      <td></td>
    </tr>
    <tr>
     
      <td></td>
      <td><small>1.Max size must be 100kb</small><br>
      	<small>2.Only bmp,png,jpg,tiff and gif types of file are allowed</small></td>
      <td></td>
    </tr>
    <tr>
     
      <td><button type="submit" name="submit" class="btn btn-info">Upload picture</button></td>
      <td><a href="editprofile.php"><button type="button" class="btn btn-info">Back to my profile</button></a></td>
      <td></td>
    </tr>
  </tbody>
</table>
</form>
            	</fieldset>
            </div>
<?php include 'footer.php'; ?>