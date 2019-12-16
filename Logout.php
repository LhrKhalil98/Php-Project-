<?php
 session_start() ; 
 
  unset($_SESSION['Connect']) ;
   unset($_SESSION['NomUser']) ; 
   unset ($_SESSION['panier']); 

  header('location: Acceuil.php');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

