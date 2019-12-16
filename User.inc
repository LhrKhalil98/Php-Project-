<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Khalil lahmer
 */
class User {
    public  $idUser ; 
    public  $NomUser ;   
    public  $PrenomUser; 
    public  $Tel ; 
    public  $AdresseMail ; 
    public  $City ; 
    public  $Ville ;   
    public  $Rue; 
    public  $Mdp; 
    public  $EtatCompte ; 
    public  $Role ; 
    
    
    
    public function SetInformation($val1 , $val2 , $val3, $val4 , $val5 ,$val6,$val7,$val8  ){
        require 'Connexion.php' ; 
         $msg=  0;
        $rec->query("insert into User (NomUser , PrenomUser , Tel, AdresseMail , City , Ville , Rue , Mdp) value  ('$val1','$val2','$val3','$val4','$val5','$val6','$val7','$val8')")or die ($rec->error);  
        if($rec->affected_rows ==1)
	   $msg=1;
    
	  
    return $msg ;
    }
    public function  Login ($ValAdresseMail ,  $valMdp){
        $inscrit=false ; 
        require 'Connexion.php' ;  
      return $resultat=$rec->query("select AdresseMail , Mdp , idUser , NomUser ,PrenomUser   from User");
      
    }
}
