<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>OADR-ADMIN</title>
        <link href="<?php echo base_url('vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="<?php echo base_url('css/sb-admin-2.min.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('css/adminloader.css');?>" rel="stylesheet" />
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="sweetalert2.min.js"></script>
        <link rel="stylesheet" href="sweetalert2.min.css">
    </head>
    <style>
        .container-scroll {max-height: 300px; max-width: 500px;overflow: hidden; overflow-y: scroll;}
    </style>
    <body id="page-top">
        <div id="wrapper">
        <ul class="navbar-nav sidebar sidebar-dark accordion" style = "background-color:#E0AA3E; color:red;"id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="administrator-panel.php">
        <div class="sidebar-brand-icon">
        <img class="img-fluid" src="<?php echo base_url('assets/img/OADRNOBG.png');?>">
        </div>
    </a> 
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="administrator-panel.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading"> Articles </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Announcements</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Support Category:</h6>
                <a class="collapse-item" href="hardware.php">Hardware</a>
                <a class="collapse-item" href="software.php">Software</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Applications</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Category</h6>
                <a class="collapse-item" href="consultant.php">Consultant</a>
                <a class="collapse-item" href="datascientist.php">Data Scientist</a>
                <a class="collapse-item" href="designer.php">Designer</a>
                <a class="collapse-item" href="developer.php">Developer</a>
            </div>
        </div>
    </li>
    <div class="sidebar-heading"> Account </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdmin" aria-expanded="true" aria-controls="collapseAdmin">
            <i class="fas fa-fw fa-user"></i>
            <span>Users</span>
        </a>
        <div id="collapseAdmin" class="collapse" aria-labelledby="headingAdmin" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">User Settings:</h6>
                <a class="collapse-item" href="users.php">All Users</a>
                <a class="collapse-item" href="addadmin.php">Add User</a>
            </div>
        </div>
    </li>
    <div class="sidebar-heading"> Logs </div>
    <li class="nav-item">
        <a class="nav-link" href="log.php">
            <i class="fas fa-fw fa-list"></i>
            <span>Activity Log</span>
        </a>
    </li>
    <hr class="sidebar-divider d-none d-md-block">
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
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
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                <img class="img-profile rounded-circle" src="<?php echo base_url('assets/img/avatarboy.png');?>">
                
            </a>
         	  
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="myprofile.php">
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
                    <div class="container-fluid">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        </div>
                        <div class="row" >
                            <div class="col-xl-3 col-md-6 mb-4" data-aos="slide-right">
                                <div class="card shadow h-100 py-2" style = "border-left: 5px solid black;">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-uppercase mb-1" style = "color:black;">User Concerns
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-cog fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4" data-aos="slide-left">
                            <div class="card shadow h-100 py-2" style = "border-left: 5px solid black;">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1" style = "color:black;"> Applications</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4" data-aos="slide-left">
                            <div class="card shadow h-100 py-2" style = "border-left: 5px solid black;">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1" style = "color:black;"> Users</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; OADR 2022</span>
                    </div>
                </div>
            </footer>
        </div>
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Are you sure?</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" style = "background-color:black;"href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <script src="<?php echo base_url('vendor/jquery/jquery.min.js');?>"></script>
        <script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
        <script src="<?php echo base_url('vendor/jquery-easing/jquery.easing.min.js');?>"></script>
        <script src="<?php echo base_url('js/sb-admin-2.min.js');?>"></script>
        <script src="<?php echo base_url('vendor/chart.js/Chart.min.js');?>"></script>
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    </body>
</html>