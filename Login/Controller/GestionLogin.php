<?php
     include("../Model/ConnexionDb.php");  
     $log=$_POST['username'];
     $psw=$_POST['password'];
    
     
     try{  
            $con=Connect();
            $req1="select * from users where email='$log' and mdp='$psw'";
            $stmt1=$con->prepare($req1) ;
            $stmt1->execute();

            $req2="select * from technicien where email_tech='$log' and mdp_tech='$psw'";
            $stmt2=$con->prepare($req2) ;
            $stmt2->execute();


            $req3="select * from admin where login='$log' and mdp='$psw'";
            $stmt3=$con->prepare($req3) ;
            $stmt3->execute();

            
            if($stmt1->rowCount()==1) {
              session_start();
              $_SESSION['login']=$log;
              header("location:../../Utilisateur/index.php");
            }else if($stmt2->rowCount()==1){
              session_start();
              $_SESSION['login']=$log;
              header("location:../../Technicien/index.php");
            }else if($stmt3->rowCount()==1){
               session_start();
              $_SESSION['login']=$log;
             header("location:../../Admin/index.php");
            }else{
                 header("location:../index.html");
            }     
             
     }catch(PDOException $e)
            {
                 echo  $e->getMessage();
            }

?>