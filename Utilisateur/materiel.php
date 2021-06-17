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
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
  
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
    <!-- SideBar !-->
    <?php include("sidenav.php")  ?>

    <div class="main-content" id="panel">
        <!-- navbar !-->
        <?php include("topnav.php")  ?> 
        <!-- Search form -->
        <br>
        <!-- <div style="float: right; margin:1em;">
            <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main" >
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge" style="background-color: burlywood;">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Recherche" type="text" id="search_text" style="background-color: burlywood;">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
        </div>
        <div class="container mb-5 mt-3"> -->
            <table class="table table-striped table-bordered " id="mydata" style="width: 100%;">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Num serie</th>
                        <th>Nom ordi</th>
                        <th>Date d'inv</th>
                        <th>Salle</th>
                        <th>Operating Sys</th>
                        <th>Emplace</th>
                        <th>Fabricant</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        include("../Login/Model/ConnexionDb.php");
                        $con = connect();
                        $stmn =$con->prepare("SELECT * FROM ordinateur");
                        $stmn->execute();
                        while($row =$stmn->fetch()){
                    ?>
                    <tr>
                        <td><?php echo $row['id_ordinateur'];?></td>
                        <td><?php echo $row['numero_serie'];?></td>
                        <td><?php echo $row['nom_ordinateur'];?></td>
                        <td><?php echo $row['date_inv'];?></td>
                        <td><?php echo $row['id_salle'];?></td>
                        <td><?php echo $row['id_os'];?></td>
                        <td><?php echo $row['emplacement'];?></td>
                        <td><?php echo $row['fabricant'];?></td>
                        <td><a href="incident.php?ordi=<?php echo $row['id_ordinateur']; ?>" class="btn btn-primary"><i class="fa fa-bug" aria-hidden="true"></i>  Lancer incident</a></button></td>
                        
                    </tr>
                    <?php }?>
                   
                </tbody>
                
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Num serie</th>
                        <th>Nom ordi</th>
                        <th>Date d'inv</th>
                        <th>Salle</th>
                        <th>Operating Sys</th>
                        <th>Emplace</th>
                        <th>Fabricant</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <br><br><br><br>




    <!-- Footer !-->
    <?php include("footer.php")  ?>
    
                    <!-- Ajax !-->
  <script src="htpps://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="htpps://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="htpps://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="htpps://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="htpps://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script src="htpps://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
  <link rel="stylesheet" href="htpps://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"></script>

    <script type="text/javascript">
        // $(document).ready(function(){
        //     $("#search_text").keyup(function(){
        //         var search = $(this).val();
        //         $.ajax({
        //             url:'action.php',
        //             method:'post',
        //             data:{query:search},
        //             success:function(response){
        //                 $("#mydata").html(response);
        //             }
        //         });
        //     });
        // });

        $(document).ready(function() {
            $('#mydata').DataTable();
        } );
    </script>

    <!-- <script type="text/javascript">
        $(document).ready(function(){
            function fetchData(search_text)
            {
                var datatable = $('#mydata').DataTable(
                    {
                        "processing":true,
                        "serverSide":true,
                        "order":[],
                        "searching":false,
                        "ajax":{
                            url:"action.php",
                            type:"post",
                            data:{
                                search_text:search_text
                            }
                        }
                    });
            }
        });
    </script> -->
</body>
</html>