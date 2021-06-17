<?php
  include("../../Login/Model/ConnexionDb.php");
      
      $nom_tech=$_POST["nom_tech"]; 
      $tel_tech=$_POST["tel_tech"]; 
      $email_tech=$_POST["email_tech"]; 
      $type_user=$_POST["type_user"];

      $mdp_tech=password_hash($_POST["mdp_tech"], PASSWORD_DEFAULT); 



      if(strcmp($type_user, "Technicien")==0){
        try {
                $req="INSERT INTO `technicien`(`nom_tech`, `mdp_tech`, `email_tech`, `tel_tech`) VALUES ('$nom_tech','$mdp_tech','$email_tech','$tel_tech')";        
                $con=Connect();
                $stmt=$con->prepare($req) ;
                $stmt->execute();   
                header("location:../View/AjouterTechnicien.php");       
           }        
        catch(PDOException $e)
            {
                 echo  $e->getMessage();
            }
          }elseif (strcmp($type_user, "Utilisateur")==0) {
           try {
                $req="INSERT INTO `users`(`nom`, `mdp`, `email`, `tel`) VALUES ('$nom_tech','$mdp_tech','$email_tech','$tel_tech')";        
                $con=Connect();
                $stmt=$con->prepare($req) ;
                $stmt->execute();   
                header("location:../View/AjouterTechnicien.php");       
           }        
        catch(PDOException $e)
            {
                 echo  $e->getMessage();
            }
          }else{
            header("location:../View/AjouterTechnicien.php");  
          }

        
    
      
      ?>
