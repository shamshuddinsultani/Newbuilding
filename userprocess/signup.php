 <?php include '../core/init.php'; ?>
<?php if(isset($_POST['submit'])){
  $email=$_POST['email'];
  $password=$_POST['password'];
  $conpassword=$_POST['conpassword'];

  
  if(empty($email) or empty($password) or empty($conpassword)){
    $error = 'All fields are required';
  }else{
    $email       = $connection->escape_string($email);
    $password    = $connection->escape_string($password);
    $conpassword = $connection->escape_string($conpassword);

    $user->create('users',array('email'=>$email,'password'=>$password));

}
} ?>
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
        <?php if(isset($alert)) { echo '  <div class="alert alert-info">'.$alert.'</div>'; }?>
         <?php if(isset($error)) { echo '<div class="alert alert-danger">'.$error.'</div>'; }?>
        <h2>Create An Account</h2>
        <p>Please fill out this form to register with us</p>
        <form action="" method="post">
       
          <div class="form-group">
            <label for="email">Email: <sup>*</sup></label>
            <input type="email" name="email" class="form-control form-control-lg ">
            <span class="invalid-feedback"></span>
          </div>
          <div class="form-group">
            <label for="password">Password: <sup>*</sup></label>
            <input type="password" name="password" class="form-control form-control-lg">
            <span class="invalid-feedback"></span>
          </div>
          <div class="form-group">
            <label for="confirm_password">Confirm Password: <sup>*</sup></label>
            <input type="password" name="conpassword" class="form-control form-control-lg">
            <span class="invalid-feedback"></span>
          </div>

          <div class="row">
            <div class="col">
              <input type="submit" name="submit" value="Register" class="btn btn-success btn-block">
            </div>
            <div class="col">
              <a href="login.php" class="btn btn-light btn-block">Have an account? Login</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>
