<?php
  include("../../Login/Model/ConnexionDb.php");
      
      $nom_salle=$_POST["nom_salle"]; 
      $etage=$_POST["etage"]; 
     
        try {
                $req="INSERT into salle(`nom_salle`,`etage`) values ('$nom_salle','$etage')";        
                $con=Connect();
                $stmt=$con->prepare($req) ;
                $stmt->execute();   
                header("location:../View/os_salle.php");       
           }        
        catch(PDOException $e)
            {
                 echo  $e->getMessage();
            }
    
      
      ?>
