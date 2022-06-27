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
        <link crossorigin="anonymous" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"rel="stylesheet">
        <script crossorigin="anonymous" integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script crossorigin="anonymous" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script crossorigin="anonymous" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="<?php echo base_url('adminassets/css/bootstrap-datetimepicker.min.css');?>" type="text/css" media="all" />
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('adminassets/js/bootstrap-datetimepicker.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('adminassets/js/demo.js');?>"></script>
    </head>
    <body id="page-top">
        <div id="wrapper">
            <?php $this->view('sidebar'); ?>
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    <?php $this->view('navbar'); ?>
                    <div class="container-fluid">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="retro1 retroshadow">Add Event</h1>
                        </div>
                        <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-10 col-md-6">
                            <div class="card o-hidden border-0 shadow-lg my-5">
                                <div class="card-body " data-aos="slide-up">
                        <form method="POST" action="<?php echo base_url();?>User/submitevent" enctype="multipart/form-data" class="user">
                        <div class="form-group">
                            <label for="username">Title:</label>
                            <input type="text" class="form-control" id="event_title" name="event_title"  placeholder="Enter Event Title" required>
                        </div>
                        <div class="form-group">
                            <label for="username">Content:</label>
                            <textarea class="form-control" id="event_content" name="event_content" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="username">Image:</label>
                            <input type="file" class="form-control" id="event_image" name="event_image"  placeholder="Enter Image Title" required>
                        </div>
                        <div class="form-group">
                            <label for="id_start_datetime">Start Date</label>
                            <div class="input-group date" id="id_0">
                                <input type="text" id="picker1" name="event_start" value="" class="form-control" required/>
                                <div class="input-group-addon input-group-append">
                                    <div class="input-group-text">
                                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="id_start_datetime">End Date</label>
                            <div class="input-group date" id="id_1">
                                <input type="text" id="picker2" name="event_end" value="" class="form-control" required/>
                                <div class="input-group-addon input-group-append">
                                    <div class="input-group-text">
                                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                    </div>
                                </div>
                            </div>
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
</html>