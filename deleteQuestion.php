<?php

require "dbConfig.php";
$id=$_POST['id'];
$sql="DELETE FROM questions WHERE question_id=$id";
$mysql->query($sql);

?>