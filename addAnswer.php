<?php

require "dbConfig.php";

$ans=$_POST['answer'];
$id=$_POST['id'];
$sql="UPDATE questions SET answer='$ans' where question_id='$id'";
$mysql->query($sql);
if($mysql->error)
{
    echo "<script>console.log('$mysql->error')</script>";
}




?>