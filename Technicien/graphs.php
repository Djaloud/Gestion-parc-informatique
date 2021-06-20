
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Minimal an Admin Panel Category Flat Bootstrap Resposive Website Template | Graphs :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery.min.js"> </script>
<script src="js/Chart.js"></script>
</head>
<body>
<div id="wrapper">
       <!----->
        <nav class="navbar-default navbar-static-top" role="navigation">
			<?php include("Nav.php");  ?>
		  <div class="content-main">
	
     
       
            <!-- Brand and toggle get grouped for better mobile display -->
		 
		   <!-- Collect the nav links, forms, and other content for toggling -->
		    
		     
       
     </div>
	  
		    
        </nav>
		 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Graphs</span>
				</h2>
		    </div>
		<!--//banner-->
	
 	<!--//grid-->
 	<div class="graph">
<div class="graph-grid">
	<div class="col-md-6 graph-1">
		<div class="grid-1">
									<h4>Bar</h4>
									<canvas id="bar1" height="300" width="500" style="width: 500px; height: 300px;"></canvas>
									<script>
										var barChartData = {
											labels : ["Mon","Tue","Wed","Thu","Fri","Sat","Mon","Tue","Wed","Thu"],
											datasets : [
												{
													fillColor : "#FBB03B",
													strokeColor : "#FBB03B",
													data : [25,40,50,65,55,30,20,10,6,4]
												},
												{
													fillColor : "#FBB03B",
													strokeColor : "#FBB03B",
													data : [30,45,55,70,40,25,15,8,5,2]
												}
											]
											
										};
											new Chart(document.getElementById("bar1").getContext("2d")).Bar(barChartData);
									</script>
								</div>
	</div>
	<div class="col-md-6 graph-2">
		<div class="grid-1">
								<h4>Nombre Des Incidents par Mois</h4>
								<canvas id="line1" height="300" width="500" style="width: 500px; height: 300px;"></canvas>
								<script>
										var lineChartData = {
											labels : ["Janvier","Fevrier","Mars","Avril","Mai","Juin","Septembre","Octobre","Novembre","Decembre"],
											datasets : [
												{
													fillColor : "#fff",
													strokeColor : "#1ABC9C",
													pointColor : "#1ABC9C",
													pointStrokeColor : "#1ABC9C",
													data : [20,35,45,30,10,65,40,20,15]
												}
											]
											
										};
										new Chart(document.getElementById("line1").getContext("2d")).Line(lineChartData);
								</script>
							</div>
	</div>
	<div class="clearfix"> </div>
</div>
	
  
<!---->

<script src="js/bootstrap.min.js"> </script>
  
  
<!-- Mainly scripts -->
<script src="js/jquery.metisMenu.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="css/custom.css" rel="stylesheet">
<script src="js/custom.js"></script>
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
			

			
		});
		</script>

<!----->

<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
</body>
</html>

