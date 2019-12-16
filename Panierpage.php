<?php 
 require'Connexion.php ';
 require 'produit.inc';
require 'Panier.php' ; 
require 'header.php';
$val =""; 

$panier = new Panier(); 
if(isset($_GET['reset']))
{
    $panier->clear();
}
if(isset($_GET['del']))
{
    $panier->delete($_GET['del']);
}

//var_dump($_SESSION);
?> 
    <link href="bootstrap\site\docs\4.1\examples\grid\grid.css" rel="stylesheet">

<body>
       <section class="jumbotron text-center">
    
      </section>

<?php $ids=array_keys($_SESSION['panier']); 
if (empty ($ids) ){
    $res=array() ; 
    $val="EMPTY !";


?>
        <div class="container">
            <h2 >Your Pannier <b><?php  echo $val ;  ?></b></h2>
            <hr>
    
  <?php 
 
}else  {?>
        <div class="container">
            <h2>Your Pannier <b><?php  echo $val ;  ?></b></h2>
            <hr>
            <?php 
    $res=$rec->query('select * from produit where idProduit IN ('.implode(',',$ids).') ') ;
   while($row = $res-> fetch_assoc() ){
       extract($row);
       $val1 =$_SESSION['panier'][$idProduit] ; 
   echo'
                 <div class="row">
          <div class="col-md-4"><img src='.$urlImage.' style="height: 105px; width: 100% "></div>

        <div class="col-md-8">
          '.$NameProduit.'
   <a href="Panierpage.php?del='.$idProduit.'"><button  style="float: right;" "type="button" class="btn btn-danger">Delete</button></a>
          <div class="row">
            <div class="col-md-6"> Quantite &nbsp &nbsp &nbsp 
                <input  type="number" style="width: 40px "   value='.$val1.' >
              </div>
            <div class="col-md-6">Prix &nbsp '.$Prix*$val1.' DT 

              </div>
          </div>
        </div> 

      </div>
';} ?>
            
            
             <div class="row">
        <div class="col-md-8"> 
            <button type="button" class="btn btn-info"style="float: center;">  Update Your Pannier  </button>
            <a href="Panierpage.php?reset=1" >  <button type="button" class="btn btn-danger">Reset</button> </a>

                 </div>
                 <div class="col-md-4">Prix Total <?php $total = $panier->Total() ; echo $total .'DT'?>  </div>
      </div>
            <hr>
<?php if ( isset($_SESSION['Connect'])) {echo '
               <a  href="CommandeVerification.php" > <p> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp    &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <button type="button"  class="btn btn-success">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Validation &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </button></p> </a>' ; 
 }
            else {
                echo'
            <a href="Login.php" <p> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp    &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <button type="button"  class="btn btn-success">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Validation &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </button></p></a>
            ' ; } ?>
      </div>
<?php } ?> 

          <?php include'Footer.php'?>
