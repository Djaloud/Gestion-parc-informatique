
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
            //include("../../Login/Model/ConnexionDb.php"); ?>




<!--inner block start here-->

<div class="inner-block">

<!--market updates updates-->
<form action="../Controller/GestionAjoutOrdinateur.php" method="POST">
   <div class="market-updates">
      
      <div class="col-md-6 form-ro market-update-gd">
         <label for="numSerie">Numero de serie </label>
         <input type="text" class="form-control" name="numSerie" required>
      </div>

      <div class="col-md-6 form-ro market-update-gd">
  
            <label for="nomOrdi">Nom d'ordinateur</label>
            <input type="text" class="form-control" name="nomOrdi" required>
       
      </div>

       <div class="clearfix"> </div>
    </div>

    <div class="market-updates">
      
        <div class="col-md-6 form-ro market-update-gd">
            <label for="salle">Choix de la salle</label>        
            <select name="salle" class="form-control" required>
            <option selected disabled >Choix de la salle...</option>
            <optgroup>  
              <?php    
                 //$con=Connect();
                 $req=$con->prepare("SELECT * FROM salle") ;
                 $req->execute();       
                 while($ligne=$req->fetch()) {
                  echo "<option>".$ligne['nom_salle']."</option>";
                }
              ?>   
            </optgroup>
            </select>
      </div>

      <div class="col-md-6 form-ro market-update-gd">
            <label for="emplacement">Emplacement</label>
            <input type="text" class="form-control" name="emplacement" required>
      </div>
          
       <div class="clearfix"> </div>
    </div>



   
    <div class="market-updates">
      
      <div class="col-md-6 form-ro market-update-gd">
            <label for="fabricant">Nom du fabricant</label>
            <input type="text" class="form-control" name="fabricant" required>
      </div>

      <div class="col-md-6 form-ro market-update-gd">
            <label for="Os">Systeme d'exploitation</label>        
            <select name="Os" class="form-control" required>
            <option selected disabled >Choix du systeme d'exploitation...</option>
            <optgroup>  
              <?php    
                 //$con=Connect();
                 $req=$con->prepare("SELECT * FROM os") ;
                 $req->execute();         
                 while($ligne=$req->fetch()) {
                  echo "<option value".$ligne['nom_os'].">".$ligne['nom_os']."</option>";
                }
              ?>   
            </optgroup>
            </select>
      </div>
          
       <div class="clearfix"> </div>
    </div>

    <div class="market-updates">
      
     

      <div class="col-md-12 form-ro market-update-gd">
           <label for="date_Invetaire">Date d'inventaire</label>
            <input type="Date" class="form-control" name="date_Invetaire" required>
      </div>
          
       <div class="clearfix"> </div>
    </div>



    
   <button type="submit" class="btn btn-primary my-btn">Valider</button>
</form>
<!--market updates end here-->


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