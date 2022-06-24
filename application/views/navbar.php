<nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow" >
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>
    <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <span class="badge badge-danger badge-counter"></span>
            </a>
            <div class="container-scroll dropdown-menu dropdown-menu-right shadow animated--grow-in " aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header" style="background:black; color:white;"> Notifications </h6>
            </div>
        </li>
        <div class="topbar-divider d-none d-sm-block"></div>
        <li class="nav-item dropdown no-arrow">
        
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php if($this->session->userdata('username')){  echo $this->session->userdata('username'); }?></span>
                <img class="img-profile rounded-circle"style = "max-width:90%;"src="<?php echo base_url('assets/img/avatarboy.png');?>">
            </a>
         	  
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="http://localhost/OADR-Website/User/edituser">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> My Account Settings
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>
    </ul>
</nav>