<?php
session_start();
if(!(isset($_SESSION['login']))){
	header("location:/Gestion_parc_informatique/Login/index.html");
}
?>