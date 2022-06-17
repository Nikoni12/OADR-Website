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
                            <h1 class="retro1 retroshadow">INQUIRIES</h1>
                        </div>
                        <div class="card shadow mb-4">
                            <div class="card-header py-3"></div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead style = "text-align:center;">
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Subject</th>
                                                <th>Date Inquired</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                                foreach($inq->result() as $lp){
                                                    echo "<tr>";
                                                    echo "<td align = 'center'>".$lp->ID."</td>";
                                                    echo "<td align = 'center'>".$lp->Name."</td>";
                                                    echo "<td align = 'center'>".$lp->Email."</td>";
                                                    echo "<td align = 'center'>".$lp->Subject."</td>";
                                                    echo "<td align = 'center'>".$lp->date."</td>";
                                                    echo "<td align = 'center'>
                                                        <div class='btn-group btn-group-sm'>
                                                            <a href='#' class='btn btn-warning'>".$lp->status."</a>
                                                            <button type='button' class='btn btn-warning dropdown-toggle dropdown-toggle-split' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                                                <span class='sr-only'>Toggle Dropdown</span>
                                                            </button>
                                                            <div class='dropdown-menu dropdown-menu-right'>
                                                                <a class='dropdown-item' href='#'>Addressed</a>
                                                                <a class='dropdown-item' href='#'>Not Yet Addressed</a>
                                                            </div>
                                                        </div>
                                                    </td>";
                                                    echo "<td style = 'text-align:center; font-size:20px;'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>&ensp; <i class='fa fa-trash-o' aria-hidden='true'></i></td>";
                                                    echo "</tr>";
                                                }
                                            ?>
                                        </tbody>
                                    </table>
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