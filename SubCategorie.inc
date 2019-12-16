<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SubCategorie
 *
 * @author Khalil lahmer
 */
class SubCategorie {
    //put your code here
    public $idSubCategorie ; 
    public $NomSubCategorie ; 
    
        
    public function ViewProduitSubCat1($val1){
        require 'Connexion.php';
       return  $resultat=$rec->query('select idProduit , urlImage , NameProduit , Prix from produit where idSubCategorie='."$val1".'');
    }
  
    public function DisplaySubCategorie($idCat){
        require 'Connexion.php';
        return $resultat=$rec->query('select NomSubCategorie , idSubCategorie  from SubCategorie where idCategorie='."$idCat".'') ;
 
    }
    public function ViewAllProduiSort($val1,$val2,$val3){
        require'connexion.php'; 
        return  $resultat=$rec->query('select idProduit , urlImage ,NameProduit, Prix from produit where idSubCategorie ='."$val1".'  order by '."$val2".' '."$val3".' ' );
    }

    
    
    
}
