<?php require  'Base.inc' ; 
 
$BD=new Base () ; 
require 'Panier.php' ; 
$panier = new Panier() ; 
if (isset($_GET['idp']))
{
    
    $var2 = $BD->query( 'Select idProduit from produit where idProduit=:id ',array ('id'=>$_GET['idp'] ) ); 
    //var_dump($var2);
    $panier->set($var2[0]->idProduit) ; 
    header("location:javascript://history.go(-1)") ; 
    $_SESSION['msg']=1 ; 
}
    else { die ("Vous n'aves pas selectionee ... ") ; 
} 
        ?>
  