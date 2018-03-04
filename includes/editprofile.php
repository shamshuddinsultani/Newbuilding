<?php require_once("../core/init.php"); ?>

<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>
<?php include 'sidenav.php'; ?>
<?php $user_id=$_SESSION['user_id'];?>
<?php $users=$user->fetchbyid('users',$user_id); ?>
<?php 
if(isset($_POST["update"])){
    $name  =$_POST['name'];
    $gender=$_POST['gender'];
    $birth =$_POST['birth'];
    $blood =$_POST['blood'];


    $user->update('users',$user_id,array('fullname'=>$name,'gender'=>$gender,'dateofbirth'=>$birth,'bloodgroup'=>$blood));
       
    
}

 ?>
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                    	<fieldset>
                    		<legend>Edit profile</legend>
                    		
     		<div class="col-sm-4 col-xs-12">

        <div id="preview">
   
            <img src="<?php echo BASE_URL.DS.'uploads'.DS. $users->image; ?>" alt="Image" />
      
      </div>
     
     	<a href="changepic.php"><button type="button" class="btn btn-primary" style="width: 225px;">change profile</button></a>
     </div>
     <div class="col-sm-8 col-xs-12">
      <form action="" method="post">
     	<table class="table table-dark">
 
        <tbody>
          <tr>
            
            <td>Fullname:</td>
            <td><input type="text" name="name"></td>
            
          </tr>
          <tr>
            
            <td>Gender:</td>
            <td> <select size="1" name="gender" >
          	<option></option>
              <option value="male" >Male</option>
              <option value="female" >Female</option>
              <option value="others" >Others</option>
          </select></td>
            
          </tr>
          <tr>
            
            <td>Birthday</td>
            <td><input type="date" name="birth"></td>
            
          </tr>
            <tr>
            
            <td>Bloodgroup:</td>
            <td> 
              <select size="1" name="blood" >
                <option></option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
              </select>
            </td>
            
          </tr>
        </tbody>
      </table>
      <button type="submit" name="update" class="btn btn-info">Update Profile</button>
    </form>
     </div>
                    	</fieldset>

  </div>
  </div><br><br><br>
  <div class="row">
  	<div class="col-md-12 col-sm-12 col-xs-12">
  		
  	<fieldset>
  		<legend>Email</legend>
  		
  			<table class="table table-dark">
  <tbody>
    <tr>
      
      <td>Email Address</td>
      <td></td>
      <td><a href="changeemail.php">Change email</a></td>
      <td><a href="changepass.php">Change password</a></td>
    </tr>
    <tr>
     
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td></td>
    </tr>
    <tr>
      
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td></td>
    </tr>
  </tbody>
</table>
    	</fieldset>
  
  </div>
                    	    </div>
                    	</div>
	<?php include 'footer.php'; ?>