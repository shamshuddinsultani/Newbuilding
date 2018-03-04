<?php 
class User {
	

    public static function fetchall($table){
        global $connection;
        $result=$connection->query("SELECT * FROM {$table}");
        $row = mysqli_fetch_object($result);
        return $row;
    }

    public static function fetchbyid($table,$user_id){
        global $connection;
        $result = $connection->query("SELECT * FROM {$table} WHERE user_id={$user_id}");
        $row = mysqli_fetch_object($result);
        return $row;
    }

    public static function verifyUser($table,$email,$password){
        global $connection;
        $email    = $connection->escape_string($email);
        $password = $connection->escape_string($password);
        $sql ="SELECT * FROM {$table} WHERE ";
        $sql.= "email='{$email}' ";
        $sql.= "AND  password='{$password}' ";
        $result = $connection->query($sql);
        $row    = mysqli_fetch_object($result);
        return $row;
    }

    public static function create($table,$fields=array()){
        global $connection;
        $column = implode(',',array_keys($fields));
        $value  = "'".implode("','", array_values($fields))."'";
        $sql =  "INSERT INTO {$table} ({$column}) VALUES ({$value})";
        if($connection->query($sql)){
            echo "submitted";
        }else{
            echo "conn error";
        }
    }

    public static function update($table,$user_id,$fields=array()){
        global $connection;
        foreach ($fields as $key => $value) {
            $fields1[]="{$key} ='{$value}'";
            // print_r($fields);
            // exit;
        }
        $sql  =  "UPDATE {$table} SET ";
        $sql .= implode(", ",$fields1);
        $sql .= " WHERE user_id= {$user_id}";
        // print_r($sql);
        // exit;
        if($connection->query($sql)){
            echo "submitted";
        }else{
            echo "conn error";
        }
        
    }

}//End of user

$user=new User();

 ?>