
<?php require "./functions.php"; ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Minimal an Admin Panel Category Flat Bootstrap Responsive Website Template | Inbox :: w3layouts</title>
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
<script src="js/bootstrap.min.js"> </script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap.min.css"> 
<!-- Mainly scripts -->
<script src="js/jquery.metisMenu.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="css/custom.css" rel="stylesheet">
<script src="js/custom.js"></script>
<script src="js/screenfull.js"></script>
		

</head>
<body>
<div id="wrapper">
       <!----->
        <?php include("Nav.php");  ?> 
		 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="index.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Inbox</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	 
<!-- tab content -->
<div class="col-md-12 tab-content tab-content-in">
<div class="tab-pane active text-style" id="tab1">
  <div class="inbox-right">
         	
            <div class="mailbox-content">
               <div class="mail-toolbar clearfix">
			     <div class="float-left">
			       <div class="btn-group m-r-sm mail-hidden-options" style="display: inline-block;">
                                <div class="btn-group">
                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-folder"></i> <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                        <li><a href="#">Social</a></li>
                                        <li><a href="#">Forums</a></li>
                                        <li><a href="#">Updates</a></li>
                                       
                                        <li><a href="#">Spam</a></li>
                                        <li><a href="#">Trash</a></li>
                                       
                                        <li><a href="#">New</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tags"></i> <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                        <li><a href="#">Work</a></li>
                                        <li><a href="#">Family</a></li>
                                        <li><a href="#">Social</a></li>
                                       
                                        <li><a href="#">Primary</a></li>
                                        <li><a href="#">Promotions</a></li>
                                        <li><a href="#">Forums</a></li>
                                    </ul>
                                </div>
                            </div>
			        
			        
			    </div>
			    <div class="float-right">
<div class="dropdown">
			            <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
			                <i class="fa fa-cog icon_8"></i>
			                <i class="fa fa-chevron-down icon_8"></i>
			            <div class="ripple-wrapper"></div></a>
			            <ul class="dropdown-menu float-right">
			                <li>
			                    <a href="#" title="">
			                        <i class="fa fa-pencil-square-o icon_9"></i>
			                        Edit
			                    </a>
			                </li>
			                <li>
			                    <a href="#" title="">
			                        <i class="fa fa-calendar icon_9"></i>
			                        Schedule
			                    </a>
			                </li>
			                <li>
			                    <a href="#" title="">
			                        <i class="fa fa-download icon_9"></i>
			                        Download
			                    </a>
			                </li>
			               
			                <li>
			                    <a href="#" class="font-red" title="">
			                        <i class="fa fa-times" icon_9=""></i>
			                        Delete
			                    </a>
			                </li>
			            </ul>
			        </div>
                            
                            <div class="btn-group">
                                <a class="btn btn-default"><i class="fa fa-angle-left"></i></a>
                                <a class="btn btn-default"><i class="fa fa-angle-right"></i></a>
                            </div>
                        
			        
			    </div>
				
               </div>
               <div class="content-mid">
            <div class="mailbox-content bg-info">
                <table id="myTable" class="table table-striped table-bordered" style="width:100%">

                    <thead class="text-center">
                        <th>ID</th>
                        <th>Degre</th>
                        <th>Commentaire</th>
                        <th>Date</th>
                        <th>Heure</th>
                        <th>Ordinateur</th>
                        <th>Etat</th>
                        <th>Approver</th>
                    </thead>
                    <tbody>
                    <?php
                        $incidents = getAllIncidents();
                        foreach ($incidents as $incident){
                    ?>
                    <tr class="table-row">
                        <td class="table-img">
                            <?php echo $incident->id_incident ?>
                        </td>
                        <td class="table-text">
                            <?php echo $incident->degre_incident ?>
                        </td>
                        <td class="table-img">
                            <?php echo $incident->commentaire ?>
                        </td>
                        <td class="table-text">
                            <?php echo $incident->date_incident ?>
                        </td>
                        <td class="table-img">
                            <?php echo $incident->heure ?>
                        </td>
                        <td class="table-text">
                            <?php echo $incident->id_ordinateur ?>
                        </td>
                        <td class="table-text">
                            <?php echo $incident->etat_incident ?>
                        </td>
                        <td>
                            <?php if($incident->etat_incident != "RESOLU"){?>
                                <a href="validation.php?id=<?php echo $incident->id_incident ?>">
                            approuver</a>
                            <?php } ?>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
               </div>
            </div>
</div>
<div class="tab-pane text-style" id="tab2">
	<div class="inbox-right">
         	
            <div class="mailbox-content">
               <div class="mail-toolbar clearfix">
			     <div class="float-left">
			       <div class="btn-group m-r-sm mail-hidden-options" style="display: inline-block;">
                                <div class="btn-group">
                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-folder"></i> <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                        <li><a href="#">Social</a></li>
                                        <li><a href="#">Forums</a></li>
                                        <li><a href="#">Updates</a></li>
                                       
                                        <li><a href="#">Spam</a></li>
                                        <li><a href="#">Trash</a></li>
                                       
                                        <li><a href="#">New</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tags"></i> <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                        <li><a href="#">Work</a></li>
                                        <li><a href="#">Family</a></li>
                                        <li><a href="#">Social</a></li>
                                       
                                        <li><a href="#">Primary</a></li>
                                        <li><a href="#">Promotions</a></li>
                                        <li><a href="#">Forums</a></li>
                                    </ul>
                                </div>
                            </div>
			        
			        
			    </div>
			    <div class="float-right">
<div class="dropdown">
			            <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
			                <i class="fa fa-cog icon_8"></i>
			                <i class="fa fa-chevron-down icon_8"></i>
			            <div class="ripple-wrapper"></div></a>
			            <ul class="dropdown-menu float-right">
			                <li>
			                    <a href="#" title="">
			                        <i class="fa fa-pencil-square-o icon_9"></i>
			                        Edit
			                    </a>
			                </li>
			                <li>
			                    <a href="#" title="">
			                        <i class="fa fa-calendar icon_9"></i>
			                        Schedule
			                    </a>
			                </li>
			                <li>
			                    <a href="#" title="">
			                        <i class="fa fa-download icon_9"></i>
			                        Download
			                    </a>
			                </li>
			               
			                <li>
			                    <a href="#" class="font-red" title="">
			                        <i class="fa fa-times" icon_9=""></i>
			                        Delete
			                    </a>
			                </li>
			            </ul>
			        </div>
                            
                            <div class="btn-group">
                                <a class="btn btn-default"><i class="fa fa-angle-left"></i></a>
                                <a class="btn btn-default"><i class="fa fa-angle-right"></i></a>
                            </div>
                        
			        
			    </div>
				
               </div>
                <table class="table">
                    <tbody>
                    
                       <tr class="table-row">
                            <td class="table-img">
                               <img src="images/in1.jpg" alt="" />
                            </td>
                            <td class="table-text">
                            	<h6> Lorem ipsum</h6>
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                            </td>
                            <td>
                            	<span class="mar">Market</span>
                            </td>
                            <td class="march">
                                in 5 days 
                            </td>
                          
                             <td >
                               <i class="fa fa-star-half-o icon-state-warning"></i>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-img">
                               <img src="images/in2.jpg" alt="" />
                            </td>
                            <td class="table-text">
                            	<h6> Lorem ipsum</h6>
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                            </td>
                            <td>
                            	<span class="work">work</span>
                            </td>
                            <td class="march">
                                in 5 days 
                            </td>
                          
                             <td >
                               <i class="fa fa-star-half-o icon-state-warning"></i>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-img">
                               <img src="images/in3.jpg" alt="" />
                            </td>
                            <td class="table-text">
                            	<h6> Lorem ipsum</h6>
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                            </td>
                            <td>
                            	<span class="fam">Family</span>
                            </td>
                            <td class="march">
                              in 4 days 
                            </td>
                          
                             <td >
                               <i class="fa fa-star-half-o icon-state-warning"></i>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-img">
                               <img src="images/in4.jpg" alt="" />
                            </td>
                            <td class="table-text">
                            	<h6> Lorem ipsum</h6>
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                            </td>
                            <td>
                            	<span class="ur">urgent</span>
                            </td>
                            <td class="march">
                                in 4 days 
                            </td>
                          
                             <td >
                               <i class="fa fa-star-half-o icon-state-warning"></i>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-img">
                               <img src="images/in5.jpg" alt="" />
                            </td>
                            <td class="table-text">
                            	<h6> Lorem ipsum</h6>
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                            </td>
                            <td>
                            	
                            </td>
                            <td class="march">
                                in 3 days  
                            </td>
                          
                             <td >
                               <i class="fa fa-star-half-o icon-state-warning"></i>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-img">
                               <img src="images/in6.jpg" alt="" />
                            </td>
                            <td class="table-text">
                            	<h6> Lorem ipsum</h6>
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                            </td>
                            <td>
                            	<span class="fam">Family</span>
                            </td>
                            <td class="march">
                               in 2 days  
                            </td>
                          
                             <td >
                               <i class="fa fa-star-half-o icon-state-warning"></i>
                            </td>
                        </tr>
                      
                    </tbody>
                </table>
               </div>
            </div>
</div>
<div class="tab-pane text-style" id="tab3">
	<div class="inbox-right">
         	
            <div class="mailbox-content">
               <div class="mail-toolbar clearfix">
			     <div class="float-left">
			       <div class="btn-group m-r-sm mail-hidden-options" style="display: inline-block;">
                                <div class="btn-group">
                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-folder"></i> <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                        <li><a href="#">Social</a></li>
                                        <li><a href="#">Forums</a></li>
                                        <li><a href="#">Updates</a></li>
                                       
                                        <li><a href="#">Spam</a></li>
                                        <li><a href="#">Trash</a></li>
                                       
                                        <li><a href="#">New</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tags"></i> <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                        <li><a href="#">Work</a></li>
                                        <li><a href="#">Family</a></li>
                                        <li><a href="#">Social</a></li>
                                       
                                        <li><a href="#">Primary</a></li>
                                        <li><a href="#">Promotions</a></li>
                                        <li><a href="#">Forums</a></li>
                                    </ul>
                                </div>
                            </div>
			        
			        
			    </div>
			    <div class="float-right">
<div class="dropdown">
			            <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
			                <i class="fa fa-cog icon_8"></i>
			                <i class="fa fa-chevron-down icon_8"></i>
			            <div class="ripple-wrapper"></div></a>
			            <ul class="dropdown-menu float-right">
			                <li>
			                    <a href="#" title="">
			                        <i class="fa fa-pencil-square-o icon_9"></i>
			                        Edit
			                    </a>
			                </li>
			                <li>
			                    <a href="#" title="">
			                        <i class="fa fa-calendar icon_9"></i>
			                        Schedule
			                    </a>
			                </li>
			                <li>
			                    <a href="#" title="">
			                        <i class="fa fa-download icon_9"></i>
			                        Download
			                    </a>
			                </li>
			               
			                <li>
			                    <a href="#" class="font-red" title="">
			                        <i class="fa fa-times" icon_9=""></i>
			                        Delete
			                    </a>
			                </li>
			            </ul>
			        </div>
                            
                            <div class="btn-group">
                                <a class="btn btn-default"><i class="fa fa-angle-left"></i></a>
                                <a class="btn btn-default"><i class="fa fa-angle-right"></i></a>
                            </div>
                        
			        
			    </div>
				
               </div>
                <table class="table">
                    <tbody>
                        
                        <tr class="table-row">
                            <td class="table-img">
                               <img src="images/in6.jpg" alt="" />
                            </td>
                            <td class="table-text">
                            	<h6> Lorem ipsum</h6>
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                            </td>
                            <td>
                            	<span class="fam">Family</span>
                            </td>
                            <td class="march">
                               in 2 days  
                            </td>
                          
                             <td >
                               <i class="fa fa-star-half-o icon-state-warning"></i>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-img">
                               <img src="images/in7.jpg" alt="" />
                            </td>
                            <td class="table-text">
                            	<h6> Lorem ipsum</h6>
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                            </td>
                            <td>
                            	<span class="ur">urgent</span>
                            </td>
                            <td class="march">
                                in 2 days 
                            </td>
                          
                             <td >
                               <i class="fa fa-star-half-o icon-state-warning"></i>
                            </td>
                        </tr>
						<tr class="table-row">
                            <td class="table-img">
                               <img src="images/in8.jpg" alt="" />
                            </td>
                            <td class="table-text">
                            	<h6> Lorem ipsum</h6>
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                            </td>
                            <td>
                            
                            </td>
                            <td class="march">
                                in 2 days 
                            </td>
                          
                             <td >
                               <i class="fa fa-star-half-o icon-state-warning"></i>
                            </td>
                        </tr>
						<tr class="table-row">
                            <td class="table-img">
                               <img src="images/in9.jpg" alt="" />
                            </td>
                            <td class="table-text">
                            	<h6> Lorem ipsum</h6>
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                            </td>
                            <td>
                            	
                            </td>
                            <td class="march">
                                in 2 days 
                            </td>
                          
                             <td >
                               <i class="fa fa-star-half-o icon-state-warning"></i>
                            </td>
                        </tr>
						<tr class="table-row">
                            <td class="table-img">
                               <img src="images/in10.jpg" alt="" />
                            </td>
                            <td class="table-text">
                            	<h6> Lorem ipsum</h6>
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                            </td>
                            <td>
                            	<span class="mar">Market</span>
                            </td>
                            <td class="march">
                                in 1 days 
                            </td>
                          
                             <td >
                               <i class="fa fa-star-half-o icon-state-warning"></i>
                            </td>
                        </tr>
						<tr class="table-row">
                            <td class="table-img">
                               <img src="images/in11.jpg" alt="" />
                            </td>
                            <td class="table-text">
                            	<h6> Lorem ipsum</h6>
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                            </td>
                            <td>
                            	<span class="ur">urgent</span>
                            </td>
                            <td class="march">
                                in 1 days 
                            </td>
                          
                             <td >
                               <i class="fa fa-star-half-o icon-state-warning"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
               </div>
            </div>
 </div>
  <div class="tab-pane text-style" id="tab4">
  <div class="inbox-right">
         	
            <div class="mailbox-content">
               <div class="mail-toolbar clearfix">
			     <div class="float-left">
			       <div class="btn-group m-r-sm mail-hidden-options" style="display: inline-block;">
                                <div class="btn-group">
                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-folder"></i> <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                        <li><a href="#">Social</a></li>
                                        <li><a href="#">Forums</a></li>
                                        <li><a href="#">Updates</a></li>
                                       
                                        <li><a href="#">Spam</a></li>
                                        <li><a href="#">Trash</a></li>
                                       
                                        <li><a href="#">New</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tags"></i> <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                        <li><a href="#">Work</a></li>
                                        <li><a href="#">Family</a></li>
                                        <li><a href="#">Social</a></li>
                                       
                                        <li><a href="#">Primary</a></li>
                                        <li><a href="#">Promotions</a></li>
                                        <li><a href="#">Forums</a></li>
                                    </ul>
                                </div>
                            </div>
			        
			        
			    </div>
			    <div class="float-right">
<div class="dropdown">
			            <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
			                <i class="fa fa-cog icon_8"></i>
			                <i class="fa fa-chevron-down icon_8"></i>
			            <div class="ripple-wrapper"></div></a>
			            <ul class="dropdown-menu float-right">
			                <li>
			                    <a href="#" title="">
			                        <i class="fa fa-pencil-square-o icon_9"></i>
			                        Edit
			                    </a>
			                </li>
			                <li>
			                    <a href="#" title="">
			                        <i class="fa fa-calendar icon_9"></i>
			                        Schedule
			                    </a>
			                </li>
			                <li>
			                    <a href="#" title="">
			                        <i class="fa fa-download icon_9"></i>
			                        Download
			                    </a>
			                </li>
			               
			                <li>
			                    <a href="#" class="font-red" title="">
			                        <i class="fa fa-times" icon_9=""></i>
			                        Delete
			                    </a>
			                </li>
			            </ul>
			        </div>
                            
                            <div class="btn-group">
                                <a class="btn btn-default"><i class="fa fa-angle-left"></i></a>
                                <a class="btn btn-default"><i class="fa fa-angle-right"></i></a>
                            </div>
                        
			        
			    </div>
				
               </div>
                <table class="table">
                    <tbody>
                        <tr class="table-row">
                            <td class="table-img">
                               <img src="images/in.jpg" alt="" />
                            </td>
                            <td class="table-text">
                            	<h6> Lorem ipsum</h6>
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                            </td>
                            <td>
                            	<span class="fam">Family</span>
                            </td>
                            <td class="march">
                               in 5 days 
                            </td>
                          
                             <td >
							 <i class="fa fa-star-half-o icon-state-warning"></i>
                                
                            </td>
                        </tr>
                       <tr class="table-row">
                            <td class="table-img">
                               <img src="images/in1.jpg" alt="" />
                            </td>
                            <td class="table-text">
                            	<h6> Lorem ipsum</h6>
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                            </td>
                            <td>
                            	<span class="mar">Market</span>
                            </td>
                            <td class="march">
                                in 5 days 
                            </td>
                          
                             <td >
                               <i class="fa fa-star-half-o icon-state-warning"></i>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-img">
                               <img src="images/in2.jpg" alt="" />
                            </td>
                            <td class="table-text">
                            	<h6> Lorem ipsum</h6>
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                            </td>
                            <td>
                            	<span class="work">work</span>
                            </td>
                            <td class="march">
                                in 5 days 
                            </td>
                          
                             <td >
                               <i class="fa fa-star-half-o icon-state-warning"></i>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-img">
                               <img src="images/in3.jpg" alt="" />
                            </td>
                            <td class="table-text">
                            	<h6> Lorem ipsum</h6>
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                            </td>
                            <td>
                            	<span class="fam">Family</span>
                            </td>
                            <td class="march">
                              in 4 days 
                            </td>
                          
                             <td >
                               <i class="fa fa-star-half-o icon-state-warning"></i>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-img">
                               <img src="images/in4.jpg" alt="" />
                            </td>
                            <td class="table-text">
                            	<h6> Lorem ipsum</h6>
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                            </td>
                            <td>
                            	<span class="ur">urgent</span>
                            </td>
                            <td class="march">
                                in 4 days 
                            </td>
                          
                             <td >
                               <i class="fa fa-star-half-o icon-state-warning"></i>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-img">
                               <img src="images/in5.jpg" alt="" />
                            </td>
                            <td class="table-text">
                            	<h6> Lorem ipsum</h6>
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                            </td>
                            <td>
                            	
                            </td>
                            <td class="march">
                                in 3 days  
                            </td>
                          
                             <td >
                               <i class="fa fa-star-half-o icon-state-warning"></i>
                            </td>
                        </tr>
                
                    </tbody>
                </table>
               </div>
            </div>
  </div>
  <div class="tab-pane text-style" id="tab5">
  	<div class="inbox-right">
         	
            <div class="mailbox-content">
               <div class="mail-toolbar clearfix">
			     <div class="float-left">
			       <div class="btn-group m-r-sm mail-hidden-options" style="display: inline-block;">
                                <div class="btn-group">
                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-folder"></i> <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                        <li><a href="#">Social</a></li>
                                        <li><a href="#">Forums</a></li>
                                        <li><a href="#">Updates</a></li>
                                       
                                        <li><a href="#">Spam</a></li>
                                        <li><a href="#">Trash</a></li>
                                       
                                        <li><a href="#">New</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tags"></i> <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                        <li><a href="#">Work</a></li>
                                        <li><a href="#">Family</a></li>
                                        <li><a href="#">Social</a></li>
                                       
                                        <li><a href="#">Primary</a></li>
                                        <li><a href="#">Promotions</a></li>
                                        <li><a href="#">Forums</a></li>
                                    </ul>
                                </div>
                            </div>
			        
			        
			    </div>
			    <div class="float-right">
<div class="dropdown">
			            <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
			                <i class="fa fa-cog icon_8"></i>
			                <i class="fa fa-chevron-down icon_8"></i>
			            <div class="ripple-wrapper"></div></a>
			            <ul class="dropdown-menu float-right">
			                <li>
			                    <a href="#" title="">
			                        <i class="fa fa-pencil-square-o icon_9"></i>
			                        Edit
			                    </a>
			                </li>
			                <li>
			                    <a href="#" title="">
			                        <i class="fa fa-calendar icon_9"></i>
			                        Schedule
			                    </a>
			                </li>
			                <li>
			                    <a href="#" title="">
			                        <i class="fa fa-download icon_9"></i>
			                        Download
			                    </a>
			                </li>
			               
			                <li>
			                    <a href="#" class="font-red" title="">
			                        <i class="fa fa-times" icon_9=""></i>
			                        Delete
			                    </a>
			                </li>
			            </ul>
			        </div>
                            
                            <div class="btn-group">
                                <a class="btn btn-default"><i class="fa fa-angle-left"></i></a>
                                <a class="btn btn-default"><i class="fa fa-angle-right"></i></a>
                            </div>
                        
			        
			    </div>
				
               </div>
                <table class="table">
                    <tbody>
                       
                       <tr class="table-row">
                            <td class="table-img">
                               <img src="images/in1.jpg" alt="" />
                            </td>
                            <td class="table-text">
                            	<h6> Lorem ipsum</h6>
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                            </td>
                            <td>
                            	<span class="mar">Market</span>
                            </td>
                            <td class="march">
                                in 5 days 
                            </td>
                          
                             <td >
                               <i class="fa fa-star-half-o icon-state-warning"></i>
                            </td>
                        </tr>
                       
                        <tr class="table-row">
                            <td class="table-img">
                               <img src="images/in3.jpg" alt="" />
                            </td>
                            <td class="table-text">
                            	<h6> Lorem ipsum</h6>
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                            </td>
                            <td>
                            	<span class="fam">Family</span>
                            </td>
                            <td class="march">
                              in 4 days 
                            </td>
                          
                             <td >
                               <i class="fa fa-star-half-o icon-state-warning"></i>
                            </td>
                        </tr>
                       
                        <tr class="table-row">
                            <td class="table-img">
                               <img src="images/in5.jpg" alt="" />
                            </td>
                            <td class="table-text">
                            	<h6> Lorem ipsum</h6>
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                            </td>
                            <td>
                            	
                            </td>
                            <td class="march">
                                in 3 days  
                            </td>
                          
                             <td >
                               <i class="fa fa-star-half-o icon-state-warning"></i>
                            </td>
                        </tr>
                       
                        <tr class="table-row">
                            <td class="table-img">
                               <img src="images/in7.jpg" alt="" />
                            </td>
                            <td class="table-text">
                            	<h6> Lorem ipsum</h6>
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                            </td>
                            <td>
                            	<span class="ur">urgent</span>
                            </td>
                            <td class="march">
                                in 2 days 
                            </td>
                          
                             <td >
                               <i class="fa fa-star-half-o icon-state-warning"></i>
                            </td>
                        </tr>
						
						<tr class="table-row">
                            <td class="table-img">
                               <img src="images/in10.jpg" alt="" />
                            </td>
                            <td class="table-text">
                            	<h6> Lorem ipsum</h6>
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                            </td>
                            <td>
                            	<span class="mar">Market</span>
                            </td>
                            <td class="march">
                                in 1 days 
                            </td>
                          
                             <td >
                               <i class="fa fa-star-half-o icon-state-warning"></i>
                            </td>
                        </tr>
						<tr class="table-row">
                            <td class="table-img">
                               <img src="images/in11.jpg" alt="" />
                            </td>
                            <td class="table-text">
                            	<h6> Lorem ipsum</h6>
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                            </td>
                            <td>
                            	<span class="ur">urgent</span>
                            </td>
                            <td class="march">
                                in 1 days 
                            </td>
                          
                             <td >
                               <i class="fa fa-star-half-o icon-state-warning"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
               </div>
            </div>
</div>
</div>
<div class="clearfix"> </div>
   </div>
    
</div>

 	<!--//grid-->
		<!---->
<div class="copy">
            <p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>	    </div>
		</div>
		</div>
		<div class="clearfix"> </div>
       </div>
     
<!---->
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap.min.js"></script>
    <script >
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
</script>
	<!--//scrolling js-->
</body>
</html>

