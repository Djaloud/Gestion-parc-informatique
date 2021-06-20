<?php
    print_r($_POST);
    include("../../Login/Model/ConnexionDb.php");
     $id = $_POST['id_incident'];
     $tech=$_POST['tech'];
     // recuperer l'id os qui correspond au nom     
            $con=Connect();
            $req="select * from technicien where nom_tech='$tech'";
            $stmt=$con->prepare($req) ;
            $stmt->execute();
            $val=$stmt->fetch();
            $id_techn=$val['id_tech']; 
            $up_apc = "UPDATE incident SET id_tech= '$id_techn' WHERE id_incident = $id";
            $result =$con->prepare($up_apc)->execute();
    header("Location:/Gestion_parc_informatique/Admin/View/incident.php");
   
?>