<?php
session_start();
if(isset($_SESSION['email'])&& $_SESSION['role']=='Student')
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

    <title>Student View</title>
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
        <ul class="nav justify-content-center nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">All Questions</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Student_view_myquestion.php">Myquestions</a>
        </li>
        </ul>
        <div>
            <?php
            require "dbConfig.php";
            $sql="SELECT * FROM questions ORDER BY question_id DESC";
            $result = $mysql->query($sql);
            while($row=$result->fetch_array())
            {
            ?>
            <!-- Repating element -->
        <div class="card">
            <div class="card-header"><svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                 <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                 <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>&nbsp <?php echo $row['email']?> </div>
            <div class="card-body">
                <div class="card-text"><?php echo $row['question']?></div>
            </div>
                <div class="card-body">
                    <h6 class="card-title">Answers:</h6>
                <div class="card-text" ><?php echo $row['answer']?></div>

                <?php
                if($row['attachement_path']!='')
                {
                ?>
                <button class="btn btn-success"  path="<?php echo $row['attachement_path'];?>" onclick="showAttachement(this)">VIEW ATTACHEMENT</button>
                <?php
                }
                ?>
            </div>
        </div>
     <!-- Repating element -->
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