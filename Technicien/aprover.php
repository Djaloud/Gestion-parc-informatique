<?php

require "./functions.php";

if(isset($_POST['id'])){
    $id = $_POST['id'];
    $connexion =getConnection(NOM,PASS,DB,SERVER);
    $inc ="SELECT * FROM incident WHERE id_incident = $id";
    $result =executeRequest($inc,$connexion);
    $result = $result->fetch();
    
    print_r($_POST);
    $com = $_POST['comment'];
    $cout = $_POST['cout']; 
    $dat = date("Y-m-d");
    $datttt = date("Y-m-d", strtotime($result->date_incident));
    $ap_inc = "INSERT INTO incident_resolu(date_debut, date_fin,cout,commentaire,id_incident) VALUES ('$datttt','$dat',$cout,'$com',$id)";
    $result =$connexion->prepare($ap_inc)->execute();
    $up_apc = "UPDATE incident SET etat_incident= 'RESOLU' WHERE id_incident = $id";
    $result =$connexion->prepare($up_apc)->execute();
    header("Location:/Gestion_parc_informatique/Technicien/incidents_res.php");
    echo json_encode(array('success' => 1));
}else{
    echo json_encode(array('success' => 0));
}