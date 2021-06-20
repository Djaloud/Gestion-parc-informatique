<!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="/Gestion_parc_informatique/Admin/index.php"><i class="fa fa-tachometer"></i><span>Statistiques </span></a></li>


		        <li id="menu-home" ><a href="/Gestion_parc_informatique/Admin/View/incident.php"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i><span>Gestion Incident</span></a></li>


		        <li><a href="#"><i class="fa fa-terminal" aria-hidden="true"></i><span>Inventaire</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul>
		            <li><a href="/Gestion_parc_informatique/Admin/View/AjoutOrdinateur.php">Ordinateur</a></li>
		            <li><a href="/Gestion_parc_informatique/Admin/View/os_salle.php">Os & Salle</a></li>		            
		          </ul>
		        </li>

		        <li><a href="#"><i class="fa fa-user"></i><span>Utilisateur</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul>
		            <li><a href="/Gestion_parc_informatique/Admin/View/AjouterTechnicien.php">Ajouter utilisateur</a></li>
		           		            
		          </ul>
		        </li>


                <li id="menu-home" ><a href="/Gestion_parc_informatique/Admin/View/importationUsers.php"><i class="fa fa-download" aria-hidden="true"></i><span>Importations</span></a></li>


                <li id="menu-home" ><a href="/Gestion_parc_informatique/Login/deconnexion.php"><i class="fa fa-sign-out" aria-hidden="true"></i><span>Deconnexion</span></a></li>
		        
		        
		         	         
		      </ul>
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>