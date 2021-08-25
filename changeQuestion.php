<?php
require "dbConfig.php";
$question=$_POST['question'];
$id=$_POST['id'];
$sql="UPDATE questions SET question='$question' where question_id=$id";
$mysql->query($sql);
if($mysql->error)
{
    echo $mysql->error;
}
?>