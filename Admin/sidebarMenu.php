<!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="index.html"><i class="fa fa-tachometer"></i><span>Statistiques</span></a></li>


		        <li id="menu-home" ><a href="index.html"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i><span>Gestion Incident</span></a></li>


		        <li><a href="#"><i class="fa fa-terminal" aria-hidden="true"></i><span>Inventaire</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul>
		            <li><a href="grids.html">Ordinateur</a></li>
		            <li><a href="portlet.html">Logiciel</a></li>		            
		          </ul>
		        </li>


		        <li><a href="#"><i class="fa fa-cogs"></i><span>Technicien</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul>
		            <li><a href="grids.html">Ajouter technicien</a></li>
		            <li><a href="portlet.html">Les Techiniciens</a></li>		            
		          </ul>
		        </li>

		        <li><a href="#"><i class="fa fa-user"></i><span>Utilisateur</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul>
		            <li><a href="grids.html">Ajouter utilisateur</a></li>
		            <li><a href="portlet.html">Les utilisateurs</a></li>		            
		          </ul>
		        </li>



		        
		         
		        
		        
		         
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