<?php
       include("../../Login/Model/ConnexionDb.php");
			$id=$_GET['id_tech'];
				try {
				          $dbh=Connect(); 
						  $req="delete  FROM technicien where id_tech='".$id."'";
						  $stmt=$dbh->prepare($req) ;
						  $stmt->execute();
						  header("location:../index.php");  
				}
				catch(PDOException $e)
				    {
				         echo  $e->getMessage();
				    }
?>