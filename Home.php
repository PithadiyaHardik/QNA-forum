<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Home</title>
  </head>
  <body style="background-color:grey">
    
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid"> 
        <a class="navbar-brand" href="">
        <img src="logo.png" alt="" width="70px" height="50px" class="d-inline-block align-text-top">
        </a>
        
        <?php 
            session_start();
            @$_SESSION['username'];
            @$_SESSION['email'];
            @$_SESSION['role'];
            if(!isset($_SESSION['email']))
            {
        ?>  <form class="form-horizontal"> 
            <button type="button" class="btn btn-success navbar-btn" onclick="window.location.href='Login.html'">Login</button>
            <button type="button" class="btn btn-primary navbar-btn " onclick="window.location.href='Register.html'">Sign UP</button>
            </form> 
            <?php
            }
            else{
                
                ?>
                <?php  
                
                if($_SESSION['role']=='Teacher')
                {
                ?>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                 <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link" href="Home.php">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="Teacher_view.php">Questions</a>
                    </li>
                </ul> 
                
                <?php
                 } 
                else{
                    ?>
                     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                 <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                 <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
                    <li class="nav-item" >
                    <a class="nav-link" href="Home.php">Home</a>
                    </li>
                    <li class="nav-item" >
                    <a class="nav-link" href="Student_view_allquestion.php">Questions</a>
                    </li>
                </ul> 
                
                <?php }
                ?>
                <form class="form-horizontal" action="LogOut.php">
                <button class="btn btn-danger navbar-btn" type="submit">LogOut</button>
                </form>
                </div>
                <?php
                }?>
        
    </div>
   
    </div>
    
    </nav>
    <div style="display:flex;justify-content:cente;padding:10px">

        <div class="row"style="position:relative;top:50px">
            <div class="col">
                <font style="color:white;font-size:30px">
            <ul>
            <li>
                Ask You Doubts Here.
            </li>
            <li>
                Teachers will directly answer your questions.
            </li>
            <li>
                View other students questions and answers.
            </li>
            <li>
                History of all your asked question is available with answers.
            </li>
            <li>
                SignUp/Login to ask your doubts.
            </li

            </ul>
                
            </font>
            </div>
            <div class="col">
                <img class="shadow" src="QNA_Home.jpg" style="height:60vh;width:40vw;">
            </div>
        </div>




    </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>