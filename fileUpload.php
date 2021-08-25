<?php
 
require "dbConfig.php";
$id=$_POST['form_name'];
$file_name=$_FILES['attachement']['name'];
$temp_name=$_FILES['attachement']['tmp_name'];
$new_name=rand().$id.$file_name;
$path="images/".$new_name;
if(move_uploaded_file($temp_name,$path))
{   
  $sql="UPDATE questions SET attachement_path='$path' WHERE question_id=$id";
    $mysql->query($sql);
    echo "success";
}
else{
    echo "Error";
}
?>