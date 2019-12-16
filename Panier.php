<?php 

Class Panier {
     
    
    public function __construct(){
      if(!isset ($_SESSION)){
          session_start(); 
      }
    if(!isset ($_SESSION['panier'])){
        $_SESSION['panier']=array() ; 
    } 
    }
    public function getPanier ()
    {
        return $_SESSION['panier'] ; 
    }
    public function set ( $value){
        if(isset ($_SESSION['panier'][$value])){
                    $_SESSION['panier'][$value]++; 
        }
        else 
        $_SESSION['panier'][$value]=1; 
    }
    
 /*   public function get($key){
        if(isset($_SESSION['paniers'][$this->name][$key]))
            return $_SESSION['paniers'][$this->name][$key]; 
        return null ; 
    }*/
     public function delete($key){
            unset ($_SESSION['panier'][$key]); 
    }/*
     public function getPanier(){
        if(isset($_SESSION['paniers'][$this->name]))
            return  $_SESSION['paniers'][$this->name]; 
        return array() ; 
    }
   */  public function clear(){
      require 'Connexion.php';
       $ids=array_keys($_SESSION['panier']);
        $res=$rec->query('select * from produit where idProduit IN ('.implode(',',$ids).') '); 
         while($row = $res-> fetch_assoc() ){
             extract($row) ;  
            unset($_SESSION['panier'][$idProduit]); 
         }
    }    
    public function  Changer($key){
            $ids=array_keys($_SESSION['panier']);
        if (empty ($ids) ){
        $res=array() ; }
        else {
        $res=$rec->query('select * from produit where idProduit IN ('.implode(',',$ids).') ') ;}
         while($row = $res-> fetch_assoc() ){
          extract($row);
         $_SESSION['panier'][$idProduit]=$key ;  
         }
    }
    public function Total ()
    {  
              require 'Connexion.php';

        $total=0 ;
        $ids=array_keys($_SESSION['panier']);
        if (empty ($ids) ){
        $res=array() ; }
        else {
        $res=$rec->query('select * from produit where idProduit IN ('.implode(',',$ids).') ') ;}
         while($row = $res-> fetch_assoc() ){
          extract($row);
          $total += ($Prix *  $_SESSION['panier'][$idProduit]) ;
        
        }
         return $total ; 
        
        
    }
    
}