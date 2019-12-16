<?php 
require 'header.php';
require 'Connexion.php';
require 'Panier.php' ; 
$panier = new Panier(); 

?> 
<br> <br> <br> <br> <br> <br> 
<div class="container">
    
  <h2>Check your Commande </h2>
  <h5>  <?php $nom=$_SESSION['NomUser'] ; 
   $prenom=$_SESSION['prenom'] ;
   
   echo 'Mr ' . $nom .' '.  $prenom ;
  ?> </h5>
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Name Product </th>
         <th> Quantite</th>
        <th> Prix</th>
        <th> Prix Total </th>
      </tr>
    </thead>
    <tbody>
        <?php $ids=array_keys($_SESSION['panier']);
                if (empty ($ids) ){     $res=array() ; }
            else {
                $res=$rec->query('select * from produit where idProduit IN ('.implode(',',$ids).') ') ;
            }
   while($row = $res-> fetch_assoc() ){
       extract($row);
          $val1 =$_SESSION['panier'][$idProduit] ; 

       echo '
             
      <tr>
        <td>'.$NameProduit.'</td>
        <td>'.$val1.'</td>
        <td>'.$Prix*$val1.'DT</td>
   </tr>'; } ?> 
   
      <tr>
        <td></td>
        <td></td>
        <td></td>

        <td><?php $total = $panier->Total() ; echo $total .'DT' ?> </td>
      </tr>
     
      
    </tbody>
  </table>
    <hr> 
    <br> 
    
    <a href="CommandeVerif.php?T=0"><button type="button" class="btn btn-success"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Confirmation   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </button></a>
    <a href="CommandeVerif.php?T=1"  <button type="button" class="btn btn-danger"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Annul Command  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </button></a>


</div>
           <?php include'Footer.php'?> 
