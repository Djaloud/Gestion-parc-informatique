
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

            <?php include("../Menu.php");include("../../Login/Model/ConnexionDb.php"); ?>

<!--inner block start here-->

<div class="inner-block">

<!--market updates updates-->
   <div class="market-updates">
      <div class="col-md-4 market-update-gd">
        <div class="market-update-block clr-block-1">
          <div class="col-md-8 market-update-left">
            <h3>83</h3>
            <h4>Registered User</h4>
            <p>Other hand, we denounce</p>
          </div>
          <div class="col-md-4 market-update-right">
            <i class="fa fa-file-text-o"> </i>
          </div>
          <div class="clearfix"> </div>
        </div>
      </div>

      <div class="col-md-4 market-update-gd">
        <div class="market-update-block clr-block-2">
         <div class="col-md-8 market-update-left">
          <h3>135</h3>
          <h4>Daily Visitors</h4>
          <p>Other hand, we denounce</p>
          </div>
          <div class="col-md-4 market-update-right">
            <i class="fa fa-eye"> </i>
          </div>
          <div class="clearfix"> </div>
        </div>
      </div>

      <div class="col-md-4 market-update-gd">
        <div class="market-update-block clr-block-3">
          <div class="col-md-8 market-update-left">
            <h3>23</h3>
            <h4>New Messages</h4>
            <p>Other hand, we denounce</p>
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
  <div class="col-md-12 chit-chat-layer1-left">
               <div class="work-progres">
                            
                      <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">Exporter des utilisateurs</a></li>
                        <li><a data-toggle="tab" href="#menu1"> Exporter des du materiels</a></li>
                      
                      </ul>

                      <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                         <div class="chit-chat-heading">
                                    Exporter des utilisateurs
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
                                          <div class="col-md-8">
                                          <input type="submit" value="Exporter" class="btn btn-primary">
                                         </div>
                                      </div>
                                </form>
                           </div>
                        </div>


                        <div id="menu1" class="tab-pane fade in">
                          <div class="chit-chat-heading">
                                  
                                  
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