<?php 

class Members extends User {
   
   public function createMembers(){
   global $connection;
   $sql = "INSERT INTO members (wings,wingno,name,email,num,relation,residency) VALUES";
   for ($i=0; $i <=4 ; $i++) { 
       $sql.="('".$_POST['wings'][$i]."','".$_POST['wingno'][$i]."','".$_POST['name'][$i]."','".$_POST['email'][$i]."','".$_POST['num'][$i]."','".$_POST['relation'][$i]."','".$_POST['residency'][$i]."'),";
   }
   $sql = rtrim($sql,",");
   // print_r($sql);
   // exit;

      if($connection->query($sql)){
            echo "submitted";
        }else{
            echo "conn error";
        }
}
}//end of class

$members = new Members();
?>