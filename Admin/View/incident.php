
<!DOCTYPE HTML>
<html>
<head>
<title>Admin Parc Informatique ENSAS</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all">

<!-- Custom Theme files -->
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="../css/style_form.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="../js/jquery-2.1.1.min.js"></script> 

<!--icons-css-->
<link href="../css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap.min.css"><!--static chart-->
<script src="../js/Chart.min.js"></script>
<!--//charts-->
<!-- geo chart -->
    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
     <!-- Chartinator  -->
    <script src="../js/chartinator.js" ></script>
    


<!--skycons-icons-->
<script src="../js/skycons.js"></script>
<!--//skycons-icons-->

</head>
<body>  
<div class="page-container">  

   <div class="left-content">
     <div class="mother-grid-inner">

            <?php include("../Menu.php");
            //include("../../Login/Model/ConnexionDb.php"); ?>

<!--inner block start here-->

<div class="inner-block">

<!--market updates updates-->
   <div class="market-updates">
      <div class="col-md-12 market-update-gd">
       

       <table id="myTable" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Commentaire</th>
                <th>Degre incident</th>
                <th>Date incident</th>
                <th>Heure incident</th>
                <th>ordinateur</th>
                <th>utilisateur</th>
                <th>Etat incident</th>

            </tr>
        </thead>
        <tbody>

          <?php

                            try {
                                      
                                       //$dbh=Connect();
                                        $stmt=$con->prepare("SELECT id_tech,id_incident,`commentaire`,`degre_incident`,`date_incident`,`heure`,o.nom_ordinateur,u.nom,`etat_incident` from ordinateur o,users u,incident i where i.`id_ordinateur`=o.`id_ordinateur` and i.`id_user`=u.`id_user`") ;
                                        $stmt->execute();
                                    }catch(PDOException $e)
                                    {
                                         echo  $e->getMessage();
                                    }
                            while($ligne=$stmt->fetch()){
                              echo "<tr>";
                              echo "<td>".$ligne["id_incident"]."</td>";
                              echo "<td>".$ligne["commentaire"]."</td>";
                              echo "<td>".$ligne["degre_incident"]."</td>";
                              echo "<td>".$ligne["date_incident"]."</td>";
                              echo "<td>".$ligne["heure"]."</td>";
                              echo "<td>".$ligne["nom_ordinateur"]."</td>";
                              echo "<td>".$ligne["nom"]."</td>";
                             // echo "<td>".$ligne["etat_incident"]."</td>";
                                ?>
                         <?php 
                              if($ligne["etat_incident"]=="RESOLU"){
                               echo "<td> <span style='color:green;font-weight:bold'>".$ligne["etat_incident"]."</span></td> ";
                             }else{
                               echo " <td>  <span style='color:red;font-weight:bold'>".$ligne["etat_incident"]."</span>  </td> ";
                              }
                             
                           ?>
                       


                        
                            <?php if($ligne["id_tech"] == ""){?>
                                <td> <a href="../View/AffecterTechnicient.php?id_ic=<?php echo $ligne["id_incident"] ?>">
                            <button class="btn btn-primary">Affecter</button></a> </td>  
                            <?php } ?>
                       
                          <?php
                              echo "</tr>";
                               
                            }

                                                                
           ?>
           
        </tbody>
        <tfoot>
            <tr>
                <th>#</th>
                <th>Commentaire</th>
                <th>Degre incident</th>
                <th>Date incident</th>
                <th>Heure incident</th>
                <th>ordinateur</th>
                <th>utilisateur</th>
                <th>Etat incident</th>
            </tr>
        </tfoot>
    </table>
      
      </div>
    <div class="clearfix"> </div>
    </div>
</div>


<!--copy rights start here-->
<div class="copyrights">
   <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>  
<!--COPY rights end here-->
</div>
</div>

<?php include("../sidebarMenu.php")  ?>


<!--scrolling js-->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="../js/jquery.nicescroll.js"></script>
    <script src="../js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
     <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap.min.js"></script>
     <script >
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
<!-- mother grid end here-->
</body>
</html>                     