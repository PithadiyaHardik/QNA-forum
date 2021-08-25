<?php
session_start();
if(isset($_SESSION['email'])&& $_SESSION['role']=='Teacher')
{
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Teacher_view</title>
    <style>
        [contenteditable] {
  outline: 0px solid transparent;
}
    </style>
  </head>
  <body style="background-color:grey">
  <nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid"> 
    <a class="navbar-brand" href="">
      <img src="logo.png" alt="" width="70px" height="50px" class="d-inline-block align-text-top">
    </a>
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link" href="Home.php">Home</a>
                    </li>
    </ul> 
  </div>
</nav>
<div> 
    <?php
      require "dbConfig.php";
      $sql="SELECT * FROM questions ORDER BY question_id DESC ";
      $result=$mysql->query($sql);
      while($row=$result->fetch_array())
      {
    ?>
    <!-- Repating component -->
    <div class="card" name=<?php echo $row['question_id']?>>
        <!-- card header -->
        <div class="card-header"><svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
         <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
         <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
        </svg>&nbsp <?php echo $row['email'] ?> <button class="btn btn-danger" question_no=<?php echo $row['question_id']?> onclick="deleteQuestion(this)">DELETE</button></div>
        <!-- card header -->
           <!-- Question -->
        <div class="card-body">
        <div class="card-text"  contenteditable="true" question_no=<?php echo $row['question_id']?> onblur="changeQuestion(this)"><?php echo  $row['question'] ?></div>
        </div>
        <!-- Question -->
        <!-- Answer -->
        <div class="card-body">
        <h6 class="card-title">Answers:</h6>
        <div class="card-text"  contenteditable="true" id=<?php echo $row['question_id']?> onblur="changeAnswer(this)"><?php echo $row['answer']?></div>
        <!-- Answer -->
        <!-- Attachements -->
        <form  onsubmit="event.preventDefault(); fileSubmit(this)" method="post" enctype="multipart/formdata" >
        <input type="file" id="attachement" name="attachement" style="display:none" onchange="fileUpload(this);">
        <?php
        if($row['attachement_path']=='')
        {
        ?>
          <label for="attachement">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-plus-fill" viewBox="0 0 16 16">
              <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM8.5 7v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 1 0z"/>
            </svg>
          </label>
          <button style="display:none" class="btn btn-success" type="submit">Upload</button>
          <?php }
          else{
            ?>
            <button type="button" path="<?php echo $row['attachement_path'];?>"  onclick="showAttachement(this)" class="btn btn-success">SHOW ATTACHEMENT</button>
            <?php
            }
            ?>
          <input type="text" style="display:none" name="form_name" value="<?php echo $row['question_id']?>">
          </form>
          <!-- Attachements -->
        </div>
         <!-- Repating component -->
         

    </div>
    <?php 
          }
         ?>



</div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script language="JavaScript" type="text/javascript" src="jquery-3.6.0.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="addAnswer.js"></script>
    <script language="JavaScript" type="text/javascript" src="fileUpload.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<?php

        }
        
        
        else{
        
        header('location:Home.php');}?>

