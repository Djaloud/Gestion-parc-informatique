<?php
  include("../../Login/Model/ConnexionDb.php");
      
      $nom_os=$_POST["os"]; 
      $version=$_POST["version"]; 
     
        try {
                $req="INSERT into os(`nom_os`,`version`) values ('$nom_os',' $version')";        
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
