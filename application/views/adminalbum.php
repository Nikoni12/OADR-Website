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
        <link href="<?php echo base_url('adminassets/css/style.css');?>" rel="stylesheet" />
        <link href="<?php echo base_url('adminassets/vendor/datatables/dataTables.bootstrap4.min.css');?>" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"> 
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
    </head>
    <body id="page-top">
        <div id="wrapper">
            <?php $this->view('sidebar'); ?>
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    <?php $this->view('navbar'); ?>
                    <div class="container-fluid">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="retro1 retroshadow">Album Title</h1>
                        </div>
                        <br><br>
                        <div class="card shadow mb-4">
                            <div class="card-header py-3"></div>
                            <div class="card-body">
                                <section class="image-grid">
                                    <div class="container">
                                        <div class="row text-center text-lg-start">
                                            <div class="col-lg-3 col-md-4 col-6">
                                                <a href="#" class="d-block mb-4 h-100">
                                                    <img class="img-fluid img-thumbnail" src="<?php echo base_url('assets/img/news1.jpg');?>">
                                                </a>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-6">
                                                <a href="#" class="d-block mb-4 h-100">
                                                    <img class="img-fluid img-thumbnail" src="<?php echo base_url('assets/img/news1.jpg');?>">
                                                </a>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-6">
                                                <a href="#" class="d-block mb-4 h-100">
                                                    <img class="img-fluid img-thumbnail" src="<?php echo base_url('assets/img/news1.jpg');?>">
                                                </a>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-6">
                                                <a href="#" class="d-block mb-4 h-100">
                                                    <img class="img-fluid img-thumbnail" src="<?php echo base_url('assets/img/news1.jpg');?>">
                                                </a>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-6">
                                                <a href="#" class="d-block mb-4 h-100">
                                                    <img class="img-fluid img-thumbnail" src="<?php echo base_url('assets/img/news1.jpg');?>">
                                                </a>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-6">
                                                <a href="#" class="d-block mb-4 h-100">
                                                    <img class="img-fluid img-thumbnail" src="<?php echo base_url('assets/img/news1.jpg');?>">
                                                </a>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-6">
                                                <a href="#" class="d-block mb-4 h-100">
                                                    <img class="img-fluid img-thumbnail" src="<?php echo base_url('assets/img/news1.jpg');?>">
                                                </a>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-6">
                                                <a href="#" class="d-block mb-4 h-100">
                                                    <img class="img-fluid img-thumbnail" src="<?php echo base_url('assets/img/news1.jpg');?>">
                                                </a>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-6">
                                                <a href="#" class="d-block mb-4 h-100">
                                                    <img class="img-fluid img-thumbnail" src="<?php echo base_url('assets/img/news1.jpg');?>">
                                                </a>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-6">
                                                <a href="#" class="d-block mb-4 h-100">
                                                    <img class="img-fluid img-thumbnail" src="<?php echo base_url('assets/img/news1.jpg');?>">
                                                </a>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-6">
                                                <a href="#" class="d-block mb-4 h-100">
                                                    <img class="img-fluid img-thumbnail" src="<?php echo base_url('assets/img/news1.jpg');?>">
                                                </a>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-6">
                                                <a href="#" class="d-block mb-4 h-100">
                                                    <img class="img-fluid img-thumbnail" src="<?php echo base_url('assets/img/news1.jpg');?>">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </section>
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
                            <span aria-hidden="true">??</span>
                        </button>
                    </div>
                    <div class="modal-body">Are you sure?</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" style = "background-color:black;" href="<?php echo base_url()."User/logout/"; ?>">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="<?php echo base_url('adminassets/vendor/jquery/jquery.min.js');?>"></script>
        <script src="<?php echo base_url('adminassets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
        <script src="<?php echo base_url('adminassets/vendor/jquery-easing/jquery.easing.min.js');?>"></script>
        <script src="<?php echo base_url('adminassets/js/sb-admin-2.min.js');?>"></script>
        <script src="<?php echo base_url('adminassets/vendor/datatables/jquery.dataTables.min.js');?>"></script>
        <script src="<?php echo base_url('adminassets/vendor/datatables/dataTables.bootstrap4.min.js');?>"></script>
        <script src="<?php echo base_url('adminassets/js/demo/datatables-demo.js');?>"></script>
    </body>
</html>