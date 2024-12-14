<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bootstrap Landing Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="app/styles.css">
    
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">Bebalridge</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <?php
                        if(isset($_SESSION["id"])){
                            echo "<li class='nav-item'>
                            <form id='logoutForm' action='app/logout.php' method='POST' style='display: inline;'>
                            <button type='submit' class='btn btn-primary' id='SignoutBtn' role='button'>Signout</button>
                        </form>
                            Signout</li>";
                         } else {
                            echo "<li class='nav-item'><a class='btn btn-primary' href='#' id='loginBtn' role='button'>Login</a></li>";
                    
                        }                    ?>    
                    </ul>
                </div>
            </div>
        </nav>
    </head>
