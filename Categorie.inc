<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Categorie
 *
 * @author Khalil lahmer
 */
class Categorie {
    public $idCategorie ; 
    public $NomCatgeorie ; 
       
    
    
    public function ViewAllProduit($val){
        require'connexion.php'; 
        $valc="idCategorie";
        return  $resultat=$rec->query('select idProduit , urlImage , Prix  , NameProduit from produit where '."$valc".'='."$val".'');


    }
     
    public function ViewAllProduiSort($val1,$val2,$val3){
        require'connexion.php'; 
        return  $resultat=$rec->query('select idProduit , urlImage ,NameProduit, Prix from produit where idCategorie ='."$val1".'  order by '."$val2".' '."$val3".' ' );
    }

        
   
      
      
    
}
