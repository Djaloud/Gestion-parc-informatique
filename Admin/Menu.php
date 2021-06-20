          <?php    
           include ($_SERVER["DOCUMENT_ROOT"]."/Gestion_parc_informatique/Login/session.php");                 
           include ($_SERVER["DOCUMENT_ROOT"]."/Gestion_parc_informatique/Login/Model/ConnexionDb.php");                           
            						 try {
            						 	 $con=Connect();
                                        $stmt8=$con->prepare("SELECT count(*) as nbr_incident from incident where `etat_incident`='EN ATTENTE' ") ;
                                        $stmt8->execute();
                                        $tble8=$stmt8->fetch();
                                        $nbr_incident=$tble8['nbr_incident'];
                                        }catch(PDOException $e)
                                    {
                                         echo  $e->getMessage();
                                    }
                                      ?>

<!--header start here-->
				<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
									 <a href="index.php"> <h1>Admin</h1> 
									<!--<img id="logo" src="" alt="Logo"/>--> 
								  </a> 								
							</div>
							<!--search-box-->
								<div class="search-box">
									<form>
										<input type="text" placeholder="Search..." required="">	
										<input type="submit" value="">					
									</form>
								</div><!--//end-search-box-->
							<div class="clearfix"> </div>
						 </div>
						 <div class="header-right">
							<div class="profile_details_left"><!--notifications of menu start -->
								<ul class="nofitications-dropdown">
									
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue"><?php echo $nbr_incident; ?></span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<a href="/Gestion_parc_informatique/Admin/View/incident.php"><h3>Vous avez <?php echo $nbr_incident; ?> nouvel incident</h3></a>
												</div>
											</li>
											
											 
											
										</ul>
									</li>	
									
											
								</ul>
								<div class="clearfix"> </div>
							</div>
							<!--notification menu end -->
							<div class="profile_details">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"> </span> 
												<div class="user-name">
													<p><?php echo $_SESSION['login']; ?></p>
													<span>Administrateur</span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											
											<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
											<li> <a href="/Gestion_parc_informatique/Login/deconnexion.php"><i class="fa fa-sign-out"></i> Deconnexion</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>				
						</div>
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->

<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->