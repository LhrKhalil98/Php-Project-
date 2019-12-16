
<?php require 'header.php';
      require 'Categorie.inc' ; 
      $val=$_GET['id'] ; 
      $valS=$_GET['idSub'] ; 
     if(isset($_POST['sort'])){ $SORT = $_POST['Sort'] ; } 
      $Categorie = new Categorie() ; 
      require 'SubCategorie.inc' ; 
      $SubCategorie = new SubCategorie() ; 

?>

      <section class="jumbotron text-center">
     
      </section>
 
<div class="container-fluid">
  <div class="row content">

 <div class="col-sm-3 sidenav">
     <hr>
       <div class="col-xl-4">
                 <h5 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Categorie </span>
          </h5>
        </div> <?php    
                $resultat1 = $SubCategorie-> DisplaySubCategorie($val) ; 
           while ($row1 = $resultat1->fetch_assoc())
           {               extract($row1) ; 
        echo' 
      <div class="input-group">  
        <a href="Produits.php?idSub='.$idSubCategorie.'&id='.$val.'"> <button type="button"  href="Produits.php?idSub='.$idSubCategorie.'" class="btn btn-default">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  '.$NomSubCategorie.' &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</button>
          </a> </div><br>' ; }
     ?>
     <hr>
         <div class="col-md-11">
                <div class="col-xl-8">
                 <h6 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Sort Product By  </span>
                 </h6> </div>
     <?php      echo'  <form action="Produits.php?id='.$val.'&idSub='.$valS.'" Method="POST">' ;?>
                <select class="custom-select d-block w-100" id="country"  name="Sort" required>
                  <option value=""> Choose ...   </option>
                   <option>Alphabetical </option>
                   <option>Most Popular</option> 
                  <option>Price : Low to high</option>
                  <option>Price : high to low</option>

                </select>
                 <br> 
                 <button type="submit" name="sort"  class="btn btn-primary">Update</button>

             </form>
              </div>
    </div>
    <div class="col-sm-9">

        <div class="container" > 
            
          <div class="row">
           <?php 
          if(isset($_POST['sort'])){
              $val9="Alphabetical";
              $val91="Most Popular";
              $val92="Price : Low to high";
              $val93="Price : high to low";

              if ($SORT == $val9){ $vval1="NameProduit" ; $vval2="ASC";}
              if ($SORT == $val91){ $vval1="Rate" ; $vval2="ASC";}
              if ($SORT == $val92){ $vval1="Prix" ; $vval2="DESC";}
              if ($SORT == $val93){ $vval1="Prix"; $vval2="ASC";}
             if ($valS!=0){
          $resultat22 = $SubCategorie->ViewAllProduiSort($valS,$vval1,$vval2) ; 
           while ($row22 = $resultat22->fetch_assoc())
           {               extract($row22) ; 
echo '
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
           ';
          } }else {
          
           $resultat00 = $Categorie->ViewAllProduiSort($val,$vval1,$vval2) ; 
           while ($row00 = $resultat00->fetch_assoc())
           {               extract($row00) ; 
echo '
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
           ';
          }}
          }
         else if ($valS!=0){
     $resultat2 = $SubCategorie->ViewProduitSubCat1($valS) ; 
           while ($row2 = $resultat2->fetch_assoc())
           {               extract($row2) ; 
echo '
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
           ';
          } }else {
          
           $resultat = $Categorie->ViewAllProduit($val) ; 
           while ($row = $resultat->fetch_assoc())
           {               extract($row) ; 
echo '
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
           ';
          }}

 
?>
   
          </div>
        </div>
      </div>
  </div>
      </div>
            <?php include'Footer.php'?>
