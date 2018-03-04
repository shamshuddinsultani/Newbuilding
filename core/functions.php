<?php 

function classAutoLoad($class){
  $class = strtoupper($class);
  $path  ="classes/{$class}.php";	

  if(file_exists($path)){
  	require_once($path);
  }else{
  	die("The file named {$class}.php doesnt exists");
  }
}

spl_autoload_register('classAutoLoad');

function redirect($location)
{
  header("location:{$location}");
}

 ?>