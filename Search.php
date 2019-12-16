<?php  include  'Header.php';?>

<!DOCTYPE html>

    <section class="jumbotron text-center">

      </section>

  <div class="col-sm-12">

        <div class="container" > 
            
          <div class="row">
              
              <?php  
              require "Produit.inc" ; 
              $val=$_POST['valeur'];
              $Produit = new Produit() ; 
               $resultat= $Produit->Search($val);
         
                     while ($row = $resultat->fetch_assoc()){
                        
                         extract($row);
                         
                        
          echo'     
               
             
       <div class="col-md-4">
           
              <div class="card mb-4 shadow-sm">
               <img class="card-img-top" src='.$urlImage.'  width="50px"  style="height: 225px; width: 100% alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">'.$NameProduit.'</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                   <a href="Produit.php?id1='.$idProduit.'"><button type="button"  class="btn btn-sm btn-outline-secondary">View</button></a>
                    </div>
                    <small class="text-muted">From '.$Prix.' DT</small>
                  </div>
                </div>
              </div>
       </div>
                     '; } ?>
           
           
            </div>
          </div>
        </div>
  </div>

          <?php include'Footer.php'?>
