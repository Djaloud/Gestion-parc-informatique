<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

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
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
</head>

<body>
  <!-- Sidenav -->
  <?php include("../Utilisateur/sidenav.php")  ?>

  <!-- Main content -->
  <div class="main-content" id="panel">

    <?php include("../Utilisateur/topnav.php")  ?>

    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">

          <!-- Header accueil !-->
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="materiel.php" class="btn btn-sm btn-neutral"> Nouveau incident</a>
            </div>
          </div>
          
          <!-- Card stats -->
          <div class="row">
            
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Historique des incidents</h3>
                </div>
                <div class="col text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Voir tout</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush" id="tabl">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Commentaire</th>
                    <th scope="col">Degré</th>
                    <th scope="col">Date d'incident</th>
                    <th scope="col">Administrateur</th>
                    <th scope="col">Etat d'incident</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                        include("../Login/Model/ConnexionDb.php");
                        $con = connect();
                        $stmn =$con->prepare("SELECT * FROM incident");
                        $stmn->execute();
                        while($row =$stmn->fetch()){
                    ?>
                    <tr>
                        <td><?php echo $row['commentaire'];?></td>
                        <td><?php echo $row['degre_incident'];?></td>
                        <td><?php echo $row['date_incident'];?></td>
                        <td><?php $st=$con->prepare("SELECT * FROM ordinateur WHERE id_ordinateur='$row[5]'");
                                $st->execute();
                                $val=$st->fetch();
                                echo $val[1];
                        ?></td>
                        <td><?php echo $row['etat_incident'];?></td>

                        <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer !-->

      <?php include("../Utilisateur/footer.php")  ?>
      
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
                    
      <script type="text/javascript">
        $(document).ready(function() {
            $('#tabl').DataTable();
        } );
    </script>
     
</body>

</html>
