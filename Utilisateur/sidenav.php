<!-- Sidenav -->
<?php
include('../Login/session.php');
 ?>
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">

      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
        <i class="ni ni-single-02 text-primary"></i>
            <span class="nav-link-text">Utilisateur</span>
        </a>
      </div>

      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
              <div style="height:50px;">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">
                        <i class="ni ni-books text-primary"></i>
                        <span class="nav-link-text">Accueil</span>
                    </a>
                </li>
              </div>
            <div style="height:50px;">
                <li class="nav-item">
                    <a class="nav-link" href="incident.php">
                        <i class="ni ni-basket text-orange"></i>
                        <span class="nav-link-text">Incident</span>
                    </a>
                </li>
            </div>
            <div style="height:50px;">
                <li class="nav-item">
                    <a class="nav-link" href="consultation.php">
                        <i class="ni ni-paper-diploma text-green"></i>
                        <span class="nav-link-text">Consultation</span>
                    </a>
                </li>
            </div>
            <div style="height:50px;">
                <li class="nav-item">
                    <a class="nav-link" href="materiel.php">
                        <i class="ni ni-settings text-yellow"></i>
                        <span class="nav-link-text">Materiels</span>
                    </a>
                </li>
            </div>
            
          </ul>
        </div>
      </div>
    </div>
  </nav>