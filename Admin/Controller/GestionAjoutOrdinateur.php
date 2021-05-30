<?php
  include("../../Login/Model/ConnexionDb.php");
      $num_serie=$_POST["numSerie"]; 
      $nom_ordi=$_POST["nomOrdi"]; 
      $date_inv=$_POST["date_Invetaire"]; 
      $nom_salle=$_POST["salle"];
      $nom_os=$_POST["Os"]; 
      $emplacement=$_POST["emplacement"];  
      $fabricant=$_POST["fabricant"]; 

      // recuperer l'id os qui correspond au nom     
            $con=Connect();
            $req="select * from os where nom_os='$nom_os'";
            $stmt=$con->prepare($req) ;
            $stmt->execute();
            $val=$stmt->fetch();
            $id_os=$val['id_os'];


      // recuperer l'id salle qui correspond au nom     
            
            $req1="select * from salle where nom_salle='$nom_salle'";
            $stmt1=$con->prepare($req1) ;
            $stmt1->execute();
            $val1=$stmt1->fetch();
            $num_salle=$val1['id_salle'];

        try {
          $req2="INSERT into ordinateur(`numero_serie`,`nom_ordinateur`,`date_inv`,`id_salle`,`id_os`,
          `emplacement`,`fabricant`) values
         ('$num_serie',' $nom_ordi','$date_inv','$num_salle','$id_os','$emplacement',' $fabricant')";
              
                $stmt2=$con->prepare($req2) ;
                $stmt2->execute();  
                header("location:../View/AjoutOrdinateur.php");        
           }        
        catch(PDOException $e)
            {
                 echo  $e->getMessage();
            }
    
      
      ?>
