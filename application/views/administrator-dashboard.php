<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>OADR-ADMIN</title>
        <link href="<?php echo base_url('adminassets/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="<?php echo base_url('adminassets/css/sb-admin-2.min.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('adminassets/css/adminloader.css');?>" rel="stylesheet" />
        <link href="<?php echo base_url('adminassets/css/style.css');?>" rel="stylesheet" />
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
    </head>
    <style>
        .container-scroll {max-height: 300px; max-width: 500px;overflow: hidden; overflow-y: scroll;}
    </style>
    <body id="page-top">
        <div id="wrapper">
        <?php $this->view('sidebar'); ?>
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    <?php $this->view('navbar'); ?>
                    <div class="container-fluid">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="retro1 retroshadow">Dashboard</h1>
                        </div>
                        <div class="row" >
                            <div class="col-xl-4 col-md-7 mb-5" >
                                <div class="card shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">News</h5>
                                                <span class="h2 font-weight-bold mb-0">0</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape rounded-circle shadow">
                                                    <i style = "font-size:50px; color:gold;"class="fa fa-newspaper-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-7 mb-5" >
                                <div class="card shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">Announcements</h5>
                                                <span class="h2 font-weight-bold mb-0">0</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape rounded-circle shadow">
                                                    <i style = "font-size:50px; color:gold;"class="fa fa-bullhorn"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-7 mb-5" >
                                <div class="card shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">Events</h5>
                                                <span class="h2 font-weight-bold mb-0">0</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape rounded-circle shadow">
                                                    <i style = "font-size:50px; color:gold;"class="fa fa-calendar"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-7 mb-5" >
                                <div class="card shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">Inquiries</h5>
                                                <span class="h2 font-weight-bold mb-0">0</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape rounded-circle shadow">
                                                    <i style = "font-size:50px; color:gold;"class="fa fa-question-circle"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-7 mb-5" >
                                <div class="card shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">Applications</h5>
                                                <span class="h2 font-weight-bold mb-0">0</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape rounded-circle shadow">
                                                    <i style = "font-size:50px; color:gold;"class="fa fa-folder-open"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-7 mb-5" >
                                <div class="card shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">Users</h5>
                                                <span class="h2 font-weight-bold mb-0">0</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape rounded-circle shadow">
                                                    <i style = "font-size:50px; color:gold;"class="fa fa-users"></i>
                                                </div>
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
        <script src="<?php echo base_url('adminassets/vendor/jquery/jquery.min.js');?>"></script>
        <script src="<?php echo base_url('adminassets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
        <script src="<?php echo base_url('adminassets/vendor/jquery-easing/jquery.easing.min.js');?>"></script>
        <script src="<?php echo base_url('adminassets/js/sb-admin-2.min.js');?>"></script>
        <script src="<?php echo base_url('adminassets/vendor/chart.js/Chart.min.js');?>"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    </body>
</html>