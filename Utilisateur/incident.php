<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  
  <!-- Page plugins -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">

</head>
<body>
    <!-- SideBar !-->
    <?php include("sidenav.php")  ?>

    <div class="main-content" id="panel" >
        <!-- navbar !-->
        <?php include("topnav.php")  ?>
        <br><br>
        <div class="col-xl-12 col-md-8" style="margin: 0 auto; width:80%" >
        <form>
                <div class="form-row" style="margin: 1em;">
                    <div class="col">
                      <textarea class="form-control" placeholder="Commentaire" id="comment" style="height: 50px;" id="floatingTextarea" name="comment"></textarea>
                    </div>
                    <div class="col">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="inputGroupSelect01">Degree</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01" name="degree">
                          <option value="1" selected>Intense</option>
                          <option value="2">Moyen</option>
                          <option value="3">Normal</option>
                        </select>
                      </div>
                    </div>
                </div>
                <div class="row mb-3" style="margin: 1em;">
                    <div class="col">
                      <input type="date" class="form-control" id="date" placeholder="Date d'incident" name="date">
                    </div>
                    <div class="col">
                      <input type="time" class="form-control" id="heure" placeholder="Heure d'incident" name="heure">
                    </div>
                </div>
                <div class="row mb-3" style="margin: 1em;">
                    <div class="col">   
                      <input type="text" class="form-control" id="ordinat" placeholder="Ordinateur" value="<?php if(isset($_GET['ordi']))
                      {
                        echo $_GET['ordi'];
                      }
                      else{
                        echo "Entrer un ordinateur";
                      }
                      ?>" name="ordinateur">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" id="user" placeholder="Utilisateur" name="utilisateur">
                    </div>
                </div>
                <div class="row mb-3" style="margin: 1em;">
                    <div class="col">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="inputGroupSelect01">Admin</label>
                        </div>
                        <?php
                            include("../Login/Model/ConnexionDb.php");
                            $con = connect();
                            $stmn =$con->prepare("SELECT * FROM admin");
                            $stmn->execute();
                            echo "<select name = 'admin' class='custom-select'>";
                            while($row =$stmn->fetch()){
                              echo "<option value = '{$row[0]}'";
                              echo ">{$row[1]}</option>";
                          }
                          echo "</select>";
                          ?>
                      </div>
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" id="heure" placeholder="Etat" name="etat">
                    </div>
                </div>
                <div class="row mb-3" style="margin-top:40px;margin-left:200px;">
                  <div class="col-xl-6 col-md-12">
                    <button type="submit" class="btn btn-primary" style="width: 150px;" name="save">Soumettre</button>
                  </div>
                  <div class="col-xl-6 col-md-12">
                    <button type="reset" class="btn btn-warning" style="width: 150px;">cancel</button>
                  </div>
                </div>
          </form>
        </div>
          <br><br>  
    </div>
    <?php

       
      if(isset($_POST['save']))
      {
        $comment = $_POST['comment'];
        $degree = $_POST['degree'];
        $date = $_POST['date'];
        $heure = $_POST['heure'];
        $ordinateur = $_POST['ordinateur'];
        $utilisateur = $_POST['utilisateur'];
        $admin = $_POST['admin'];
        $etat = $_POST['etat'];
        
        // recuperer l'id os qui correspond au nom de l'ordinateur     
        $con=Connect();
        $req="select * from ordinateur where numero_serie='$ordinateur'";
        $stmt=$con->prepare($req) ;
        $stmt->execute();
        $val=$stmt->fetch();
        $id_ordina=$val[0];

        try {
          $req2="INSERT into incident(`commentaire`,`degre_incident`,`date_incident`,`heure`,`id_ordinateur`,
          `id_tech`,`id_user`,`id_admin`,`etat_incident`,) values
         ('$comment',' $degree','$date','$heure','$ordinateur',0,'$utilisateur',' $admin','$etat')";
              
                $stmt2=$con->prepare($req2) ;
                $stmt2->execute();  
                header("location:incident.php"); 
                // $message = "Incident bien enregistré et il est en cours de traitement";
                // echo "<script type='text/javascript'>alert('$message');</script>"; 
           }        
        catch(PDOException $e)
            {
                 echo  $e->getMessage();
            }
      }
    ?>





    <!-- Footer !-->
    <?php include("footer.php")  ?>

</body>


</html>