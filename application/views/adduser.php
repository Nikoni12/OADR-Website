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
                            <h1 class="retro1 retroshadow">Add User </h1>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-6 col-lg-10 col-md-6">
                                <div class="card o-hidden border-0 shadow-lg my-5">
                                    <div class="card-body " data-aos="slide-up">
                                    <form method="post"  class = "user" action="<?php echo base_url();?>User/add_user" >
                                            <div class="form-group">
                                                <label for="username">Name:</label>
                                                <input name = "adminName" type="text" class="form-control" id="adminname"  placeholder="Enter Name">
                                                <span class="text-danger fontColor"><?php echo form_error('adminName'); ?></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="username">Username:</label>
                                                <input name = "adminUsername"type="text" class="form-control" id="adminname" placeholder="Enter Username">
                                                <span class="text-danger fontColor"><?php echo form_error('adminUsername'); ?></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="username">Phone Number:</label>
                                                <input name = "adminnumber"type="text" class="form-control" id="adminname"  placeholder="Enter Phone Number" >
                                                <span class="text-danger fontColor"><?php echo form_error('adminnumber'); ?></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="username">Password:</label>
                                                <input name = "adminPassword"type="password" class="form-control" id="adminname" placeholder="Enter Password" >
                                                <span class="text-danger fontColor"><?php echo form_error('adminPassword'); ?></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="username">Confirm Password:</label>
                                                <input name = "adminconfirmpass"type="password" class="form-control" id="adminname" placeholder="Confirm Password" >
                                                <span class="text-danger fontColor"><?php echo form_error('adminconfirmpass'); ?></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="username">Select Role:</label>
                                                <select class="form-control " style = "max-width:100%;" name="adminrole" required>
                                                    <option value="Accepted">Category 1</option>
                                                    <option value="Rejected">Category 2</option>
                                                </select>
                                                <span class="text-danger fontColor"><?php echo form_error('adminrole'); ?></span>
                                            </div>
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
    <?php if($this->session->userdata('added')){   ?>
    <script>
		Swal.fire({
					title: 'User Added',
					text: "You successfully added an user.",
					icon: 'success',
					iconColor: 'gold',
					confirmButtonColor: 'gold'
				})
		</script>
    <?php $this->session->unset_userdata('added');}  ?>
    <script type="text/javascript">
    $(document).ready(function () {
 
        $('#master').on('click', function(e) {
         if($(this).is(':checked',true))  
         {
            $(".sub_chk").prop('checked', true);  
         } else {  
            $(".sub_chk").prop('checked',false);  
         }  
        });
 
        $('.delete_all').on('click', function(e) {
 
            var allVals = [];  
            $(".sub_chk:checked").each(function() {  
                allVals.push($(this).attr('data-id'));
            });  
 
            if(allVals.length <=0)  
            {  
                alert("Please select row.");  
            }  else {  
                Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                        }).then((result) => {
                        if (result.isConfirmed) {
                            var join_selected_values = allVals.join(","); 
                            $.ajax({
                                url: $(this).data('url'),
                                type: 'POST',
                                data: 'ids='+join_selected_values,
                                success: function (data) {
                                console.log(data);
                                $(".sub_chk:checked").each(function() {  
                                    $(this).parents("tr").remove();
                                });
                                Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                            )
                                },
                                error: function (data) {
                                    alert(data.responseText);
                                }
                            });
                            $.each(allVals, function( index, value ) {
                                $('table tr').filter("[data-row-id='" + value + "']").remove();
                            });
                           
                        }
                    })  
            }  
        });
    });
</script>
</html>