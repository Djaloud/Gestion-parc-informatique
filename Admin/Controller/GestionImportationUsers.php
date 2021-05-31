<?php
include("../../Login/Model/ConnexionDb.php");

 $uploadfile=$_FILES['uploadfile']['tmp_name'];

require '../../phpExcel/Classes/PHPExcel.php';
require_once '../../phpExcel/Classes/PHPExcel/IOFactory.php';
 $con=Connect();
$objExcel=PHPExcel_IOFactory::load($uploadfile);
foreach($objExcel->getWorksheetIterator() as $worksheet)
{
	 $highestrow=$worksheet->getHighestRow();

	for($row=1;$row<=$highestrow;$row++)
	{
		 $name=$worksheet->getCellByColumnAndRow(0,$row)->getValue();
		 $mdp=$worksheet->getCellByColumnAndRow(1,$row)->getValue();
		 $email=$worksheet->getCellByColumnAndRow(2,$row)->getValue();
		 $tel=$worksheet->getCellByColumnAndRow(3,$row)->getValue();
	
			$req="INSERT INTO users(nom,mdp,email,tel) 
			 VALUES ('$name','$mdp','$email','$tel')";
                $stmt=$con->prepare($req) ;
                $stmt->execute();   
               
		
	}
}
 header("location:../View/importationUsers.php");  
?>