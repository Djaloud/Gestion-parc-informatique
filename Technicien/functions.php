<?php
define ('NOM',"root");
define ('PASS', "");
define ('SERVER', "localhost");
define ('DB', "piensa");

function getConnection($pNom, $pMotPASS, $pDB, $pSERVER){
    $dsn = 'mysql:host=' . $pSERVER . ';dbname=' . $pDB;
    try{
        $connexion = new PDO($dsn, $pNom, $pMotPASS);
        $connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
    } catch(PDOException $e){
        echo $e->getMessage();
    }
    if (!$connexion) {
        echo "Désolé, connexion au SERVER $pSERVER impossible\n";
        exit;
    }
    return $connexion;
}

function executeRequest($requete, $connexion){
    $resultat=$connexion->query($requete);
    if ($resultat)
        return $resultat;
    else {
        echo "<b>Erreur dans l'execution de la requete '$requete'.</b><br/>";
        exit;
    }
}

function Login($login,$password){
    $connexion =getConnection(NOM,PASS,DB,SERVER);
    $admin ="SELECT count(*) FROM admin where login = $login and password=$password";
    $result =executeRequest($admin,$connexion);
    if($result->fetchColumn() > 0){
        return 1;
    }
    return 0;
}
function getAllIncidents(){
    $connexion =getConnection(NOM,PASS,DB,SERVER);
    $incs ="SELECT * FROM incident";
    $result =executeRequest($incs,$connexion);
    return $result;
}

function getAllIncidentsResolues(){
    $connexion =getConnection(NOM,PASS,DB,SERVER);
    $incs ="SELECT * FROM incident_resolu";
    $result =executeRequest($incs,$connexion);
    return $result;
}