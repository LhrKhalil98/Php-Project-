
        <?php
 require 'panier.php';
require'Connexion.php'; 
require 'header.php';
$panier = new Panier(); 

        ?>
<?php if($_GET['T']==0) {
  
        $total = $panier->Total() ;
        $id=$_SESSION['iduser'];
        $rec->query("insert into Commande (PrixTotal , idUser) value  ('$total','$id')");

 
    
    
    
    ?>
<br> 
<div  class="container" >
      <div class="jumbotron" >
          <h1>Your Command was successfully sent  </h1>
        <p class="lead">  </p>
        <a class="btn btn-lg btn-primary" href="Acceuil.php" role="button">Home  &raquo;</a>
        <?php   unset ($_SESSION['panier']) ; ?>
      </div> </div>
<?php } else {
  unset ($_SESSION['panier']) ;
header('location: Acceuil.php') ;} 
    ?>

        <?php
        include 'Footer.php';
        ?>