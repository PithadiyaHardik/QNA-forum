<?php
require "dbConfig.php";
$username=$_POST['username'];
$password=$_POST['password'];
$role=$_POST['role'];
$sql="select * from users where username='$username' and password='$password' and role='$role' ";
$result=$mysql->query($sql);
echo $mysql->error;
if($result->num_rows>0)
{   session_start();
    $row=$result->fetch_array();  
    $_SESSION['username']=$row['username'];
    $_SESSION['email']=$row['email'];
    $_SESSION['role']=$row['role'];

    if($role=='Teacher')
    {
        header('location:Teacher_view.php');
  
    }
    else{
        header('location:Student_view_allquestion.php');
    }
}  
else{
    header('location:Login.html');
} 

?>