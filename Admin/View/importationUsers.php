
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
<!--static chart-->
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
            //include("../../Login/Model/ConnexionDb.php");
             try {                                   

                                        $stmt2=$con->prepare("SELECT count(*) as nbr_ordi from ordinateur") ;
                                        $stmt2->execute();
                                        $tble2=$stmt2->fetch();
                                        $nombre_ordinateur=$tble2['nbr_ordi'];

                                        $stmt3=$con->prepare("SELECT count(*) as nbr_users from users") ;
                                        $stmt3->execute();
                                        $tble3=$stmt3->fetch();
                                        $nombre_users=$tble3['nbr_users'];

                                    }catch(PDOException $e)
                                    {
                                         echo  $e->getMessage();
                                    }
                            

             ?>

<!--inner block start here-->

<div class="inner-block">

<!--market updates updates-->
   <div class="market-updates">
      <div class="col-md-6 market-update-gd">
        <div class="market-update-block clr-block-1">
          <div class="col-md-8 market-update-left">
            <h3><?php echo $nombre_users; ?></h3>
            <h4>Nombre des utilisateurs</h4>
            <p>la totalité des utilisateurs de notre parc</p>
          </div>
          <div class="col-md-4 market-update-right">
            <i class="fa fa-file-text-o"> </i>
          </div>
          <div class="clearfix"> </div>
        </div>
      </div>

      

      <div class="col-md-6 market-update-gd">
        <div class="market-update-block clr-block-3">
          <div class="col-md-8 market-update-left">
             <h3><?php echo $nombre_ordinateur; ?></h3>
            <h4>Nombre d'ordinateurs</h4>
            <p>Nombre d'ordinateurs  dans notre parc</p>
          </div>
          <div class="col-md-4 market-update-right">
            <i class="fa fa-envelope-o"> </i>
          </div>
          <div class="clearfix"> </div>
        </div>
      </div>
      
       <div class="clearfix"> </div>
    </div>
<!--market updates end here-->

<!--mainpage chit-chating-->
<div class="chit-chat-layer1">
  <div class="col-md-6 chit-chat-layer1-left">
               <div class="work-progres">
                            
                      <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">Exporter des utilisateurs</a></li>                    
                      </ul>

                      <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                         <div class="chit-chat-heading">
                                 <span style="color: green;">Exporter des utilisateurs </span>  
                          </div>

                             <div class="table-responsive">
                                <form method="post" action="/Gestion_parc_informatique/Admin/Controller/GestionImportationUsers.php" enctype="multipart/form-data">
                                      <div class="form-group row">
                                        <div class="col-md-12">
                                        <input type="file" name="uploadfile" class="form-control"/>
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                          <label class="col-md-3"></label>
                                          <div class="col-md-6">
                                          <input type="submit" value="Exporter" class="btn btn-primary">
                                         </div>
                                      </div>
                                </form>
                           </div>
                        </div>


                        
                        
                      </div>
               </div>
      </div>
      
     <div class="clearfix"> </div>
</div>
<!--main page chit chating end here-->
</div>
<!--inner block end here-->



<!--copy rights start here-->
<div class="copyrights">
   <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>  
<!--COPY rights end here-->
</div>
</div>

<?php include("../sidebarMenu.php")  ?>


<!--scrolling js-->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script src="../js/jquery.nicescroll.js"></script>
    <script src="../js/scripts.js"></script>
    <!--//scrolling js-->
<script src="../js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>                     