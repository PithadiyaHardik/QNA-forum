<?php
    require "dbConfig.php";
$q=$_POST['question'];
$email=$_POST['email'];
$sql="INSERT INTO questions(question,email,answer) VALUES('$q','$email','')";
$mysql->query($sql);
if($mysql->error)
{
    echo "<script>console.log('$mysql->error')</script>";
}

?>