<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Produit
 *
 * @author Khalil lahmer
 */
class Produit {
   
    public $idProduit ; 
    public $NameProduit ; 
    public $Rate; 
    public $DateAjoute ;
    public $Description ;
    public $Prix ;  
    public $Quantite ; 
    public $urlImage ;
    
    
    
    public function ViewProduitDetails($val){
        $this->idProduit=$val; 
        require'connexion.php'; 
        return $resultat=$rec->query('select * from produit where idProduit= '." $this->idProduit".' ') ; 
  
}

    public function Search($val){
        require'connexion.php'; 
       return $resultat=$rec->query('select idProduit , urlImage , Prix  , NameProduit from produit where NameProduit like "%'.$val.'%"');
             
               
}}
