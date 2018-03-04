<?php 

class Blocks extends User{

 public function blockData($user_id){
        $sql  = "SELECT * FROM blocks WHERE user_id = :user_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(":user_id",$user_id, PDO::PARAM_INT);
        $stmt->execute();
        // return $stmt->fetch(PDO::FETCH_OBJ);
        return $stmt->fetchAll(PDO::FETCH_OBJ);

    }

 }//end of blocks


 ?>