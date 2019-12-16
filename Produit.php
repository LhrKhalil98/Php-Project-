<?php  require'header.php'?>

    <section class="jumbotron text-center">
   
      </section>
  <?php 
  require 'Produit.inc';
           $val1=$_GET['id1']; 
           $Produit = new Produit() ; 
           $resultat = $Produit->ViewProduitDetails($val1) ; 
          $row = $resultat->fetch_assoc();
                 extract($row) ;  echo '
 <body class="bg-light">

    <div class="container">


      <div class="row">
              <div class="col-xl-4">
            <p>  </p> <img src="'.$urlImage.'" alt="..." class="img-thumbnail">
              </div>
          <div class="col-xl-4">
                 <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Description</span>
            
          </h4>
                          <p>'.$Description.' </p>

        </div>

        <div class="col-xl-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your Produit</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Gategorie name</h6>
              </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                
                    <h6 class="my-0">'.$NameProduit.'</h6>
              </div>
            </li>
         
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0"> Prix</h6>
              </div>
              <span class="text-success">'.$Prix.'DT</span>
            </li>
        
          </ul>

            <div class="input-group">
              <div class="input-group-append">
               <a href="addPanier.php?idp='.$idProduit.'"><button type="button" class="btn btn-primary">Order</button></a>
              </div>
            </div>
        </div>
          
        
    
      </div>
                 '?>
                <?php include'Footer.php'?>
