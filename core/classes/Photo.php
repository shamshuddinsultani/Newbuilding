<?php 

class Photo {
   // public $filename; 
   // public $tmp_path;
   // public $size;
   // public $upload_directory="uploads";
   // public $errors = array();
   // public $upload_errors= array( 
   //   UPLOAD_ERR_OK         =>"There is no error",
   //   UPLOAD_ERR_INI_SIZE   =>"The uploaded file exceeds the upload_max_filesize",
   //   UPLOAD_ERR_FORM_SIZE  =>"The uploaded file exceeds the MAX_FILE_SIZE",
   //   UPLOAD_ERR_PARTIAL    =>"The uploaded file was only partially uploaded",
   //   UPLOAD_ERR_NO_FILE    =>"No file was uploaded",
   //   UPLOAD_ERR_NO_TMP_DIR =>"Missing a temporary folder",
   //   UPLOAD_ERR_CANT_WRITE =>"Failed to write file to disk",
   //   UPLOAD_ERR_EXTENSION  =>"A PHP extention stopped the file upload"

   // );

   public function uploadImage($file){
      
      // if(empty($file) || !$file || !is_array($file)){
      // 	$this->errors[]="No file is uploaded here";
      // 	return false;
      // }elseif ($file['error'] !=0) {
      // 	$this->errors[]=$this->upload_errors[$file['error']];
      // 	return false;
      // }else{

     $filename = basename($file['name']);
     $tmp_path = $file['tmp_name'];
     $size     = $file['size'];

     $ext      = explode('.',$filename);
     $ext      = strtolower(end($ext));
     $allowed_ext =array('jpg','png','jpeg');

     if(in_array($ext,$allowed_ext) === false){
     	die("this extention is not allowed");     
     }else{
         	  $target_path = SITE_ROOT.DS.'uploads'.DS.$filename;
         /*print_r($target_path);
         exit;*/

         if(move_uploaded_file($tmp_path,$target_path)){
         	return $filename;
         }
// }
   }
}
}// End of class
$photo = new Photo();


 ?>