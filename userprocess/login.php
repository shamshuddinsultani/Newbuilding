<?php require_once("../core/init.php"); ?>
<?php
if(isset($_POST['submit'])){
$email    = trim($_POST['email']);
$password = trim($_POST['password']);
if(!empty($email) or !empty($password)){
 $found_user=User::verifyUser('users',$email,$password);
 if($found_user){
  $session->login($found_user);
  redirect("../includes/profile.php");
 }else{
$error = "Please enter Email & Password!";
} 
}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
  </head>
  <body>
    
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card card-body bg-light mt-5">
            
            <h2>Login</h2>
            <p>Please fill in your credentials to log in</p>
            <form action="" method="post">
              <div class="form-group">
                <label for="email">Email: <sup>*</sup></label>
                <input type="email" name="email" class="form-control form-control-lg">
                <span class="invalid-feedback"></span>
              </div>
              <div class="form-group">
                <label for="password">Password: <sup>*</sup></label>
                <input type="password" name="password" class="form-control form-control-lg">
              </div>
              <div class="row">
                <div class="col">
                  <input type="submit" name="submit" value="Login" class="btn btn-success btn-block">
                </div>
                <div class="col">
                  <a href="signup.php" class="btn btn-light btn-block">No account? Register</a>
                </div>
              </div>
            </form>
          </div>
          <?php if(isset($error)) { echo '<div class="alert alert-danger">'.$error.'</div>'; }?>
        </div>
      </div>
    </div>
  </body>
</html>