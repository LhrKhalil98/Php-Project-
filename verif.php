<?php
    session_start() ; 
    
    require 'Connexion.php';
    require 'User.inc';
    if(isset($_POST['submit1'])){
        $val1=$_POST['nom']; 
        $val2=$_POST['prenom']; 
        $val3=$_POST['tel']; 
        $val4=$_POST['AdresseMail'];
        $val5=$_POST['City'];    
        $val6=$_POST['Ville'];
        $val7=$_POST['Rue'];
        $val8=$_POST['Mdp'];
        $user1 = new User() ; 
        $val0= $user1->SetInformation($val1 , $val2 , $val3 ,$val4,$val5 ,$val6,$val7,$val8  ); 
          
        if($val0==1){ 
        header("location: InscriptionSuccess.php ");
      }
         

    }
    if(isset($_POST['submit2'])){
        $inscrit=false;
         $ValAdresseMail=$_POST['AdresseMail'];
         $valMdp=$_POST['Mdp'];
         $user2 = new User() ;
         $val0=$user2->Login ($ValAdresseMail ,$valMdp); 
           while ($row = $val0->fetch_assoc())
        {    
            extract($row); 
            
           if( $AdresseMail==$ValAdresseMail && $Mdp==$valMdp){
               
              $inscrit=true ; 
              $iduser=$idUser; 
              $nomu=$NomUser; 
              $prenomu=$PrenomUser ; 
           break; }
    } 
           if ($inscrit==false){
            $msg="<br> Mot de passe Ou Adresse Mail incorrect  $ValAdresseMail $valMdp " ;
            $_SESSION['msg']=$msg ; 
            header('location: Login.php');
           }
        else {
             header('location: Acceuil.php') ; 
             $_SESSION['Connect']='YES';
             $_SESSION['NomUser']= $nomu;
             $_SESSION['prenom']= $prenomu;
             $_SESSION['iduser']=$iduser;
                 
        }
        
        
    }
      
     
    
    
    
    


