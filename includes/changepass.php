<?php require_once("../core/init.php"); ?>
<?php if($getUser->loggedIn() === false){
header('location:'.BASE_URL.'/index.php');
} ?>
<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>
<?php include 'sidenav.php'; ?>
<?php 
if(isset($_POST['submit'])){
	$oldpass=$_POST['oldpass'];
	$newpass=$_POST['newpass'];
	$conpass=$_POST['conpass'];
	$error  =array();

	if(!empty($oldpass) && !empty($newpass) && !empty($conpass)){
       if($getUser->checkPassword($oldpass)===true){
       	if($newpass != $conpass){
       	$error['password']='password doesnt match';
       }else{
       	$getUser->update('users',$user_id,array('password'=>$newpass));
       	header('location:'.BASE_URL.'/includes/changepass.php');
       }
       }
	}else{
		$error['fields']='All fields are required';
	}
}

 ?>
<div id="page-wrapper">
<div id="page-inner">
<div class="row">
<fieldset>
<legend>Change Password</legend>
<form action="" method="post">
<table class="table table-dark">
<tbody>
<tr>
    <td>Old Pass:</td>
    <td><input type="text" name="oldpass"></td>
</tr>
<tr>
    <td>New Pass:</td>
    <td><input type="text" name="newpass"></td>
</tr>
<tr>
    <td>Con Pass:</td>
    <td><input type="text" name="conpass"></td>
</tr>
</tbody>
</table>
<button type="submit" name="submit" class="btn btn-info">Change</button>
</form>
</fieldset>
</div>
</div>
<?php include 'footer.php'; ?>
