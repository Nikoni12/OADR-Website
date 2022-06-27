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
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="sweetalert2.min.js"></script>
        <link rel="stylesheet" href="sweetalert2.min.css">
    </head>
    <body id="page-top">
        <div id="wrapper">
            <?php $this->view('sidebar'); ?>
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    <?php $this->view('navbar'); ?>
                    <div class="container-fluid">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="retro1 retroshadow">Add Announcement</h1>
                        </div>
                        <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-10 col-md-6">
                            <div class="card o-hidden border-0 shadow-lg my-5">
                                <div class="card-body " data-aos="slide-up">
                        <form method="POST" action="<?php echo base_url();?>User/submitannouncement" enctype="multipart/form-data" class="user">
                        <div class="form-group">
                            <label for="username">Title:</label>
                            <input type="text" class="form-control" id="announcement_title" name="announcement_title"  placeholder="Enter Article Title" required>
                        </div>
                        <div class="form-group">
                            <label for="username">Content:</label>
                            <textarea class="form-control" id="announcement_content" name="announcement_content" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="username">Image:</label>
                            <input type="file" class="form-control" id="announcement_image" name="announcement_image" accept="image/*"  required>
                        </div>
                        <input type="hidden" class="form-control" id="date_added" name="date_added" value=<?php echo date("m-d-y");?>>
                        <button type="submit" class="btn btn-outline-warning">SUBMIT</button>
                        </form>
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
    <?php if($this->session->userdata('invalid')){ ?>
 
 <script>
     Swal.fire({
                 title: 'Invalid File',
                 text: "Please upload PDF File Only",
                 icon: 'success',
                 iconColor: 'gold',
                 confirmButtonColor: 'gold'
             })
     </script>
 <?php $this->session->unset_userdata('invalid');}?>
</html>