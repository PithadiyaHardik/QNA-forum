<?php
require "dbConfig.php";

$firstname=$_POST['firstName'];
$middlename=$_POST['middleName'];
$lastname=$_POST['lastName'];
$d_o_b=$_POST['DOB'];
$email=$_POST['email'];
$password=$_POST['password'];
$username=$_POST['username'];
$role=$_POST['role'];
session_start();
$_SESSION['email']=$email;
$_SESSION['username']=$username;
$_SESSION['role']=$role;
$sql="INSERT INTO users(first_name,middle_name,last_name,email,d_o_b,username,password,role) VALUES('$firstname','$middlename','$lastname','$email.','$d_o_b','$username','$password','$role')";
$result=$mysql->query($sql);
if($role=='Student')
{
    header('location:Student_view_allquestion.php');
}
else{
    header('location:Teacher_view.php');
}
    

?>