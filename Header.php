<?php
 session_start() ; ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FIT TO EAT </title>
    <link href="bootstrap\dist\css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap\site\docs\4.1\examples\carousel\carousel.css" rel="stylesheet">
    <link href="bootstrap\site\docs\4.1\examples\navbars\navbar.css" rel="stylesheet">
  </head>
  <body>

<header>
  
      
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" >
        <a class="navbar-brand" href="Acceuil.php">FiToEat</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <p>&nbsp &nbsp &nbsp &nbsp &nbsp</p>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
              <a class="nav-link" href="Produits.php?id=2&idSub=0">Proteine <span class="sr-only">(current)</span></a>
          </li>
            <li class="nav-item active">
            <a class="nav-link" href="Produits.php?id=3&idSub=0">Supplement <span class="sr-only">(current)</span></a>
          </li>
            <li class="nav-item active">
            <a class="nav-link" href="Produits.php?id=4&idSub=0">Vitamines <span class="sr-only">(current)</span></a>
          </li>
            <li class="nav-item active">
            <a class="nav-link" href="Produits.php?id=5&idSub=0">Accesoires <span class="sr-only">(current)</span></a>
          </li>
              <p>&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</p>
          <li class="nav-item active">
              <a class="nav-link" href="Panierpage.php"> Pannier  <span class="glyphicon glyphicon-shopping-cart"></span></a>
            </li>
            <?php  if(isset($_SESSION['Connect'])) { 
      require 'Connexion.php';
                $nom=$_SESSION['NomUser'] ; 

                echo'
   <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$nom.'</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#"> Personal Information </a>
              <a class="dropdown-item" href="Logout.php">Log out</a>
            
            </div>
          </li> ';
            }
            else 
                echo ' <li class="nav-item">
                 <a class="nav-link" href="Login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a>
            </li> ';
                ?>
         

        </ul>
          
          <form class="form-inline my-2 my-lg-0" action="search.php" method="POST">
              <input class="form-control mr-sm-2" name="valeur" type="text" placeholder="Search" aria-label="Search" required="">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search">Search</button>
        </form>
      </div>
    </nav>
    </header>
    <main role="main">