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
                            <h1 class="retro1 retroshadow">APPLICATIONS</h1>
                        </div>
                        <div class="card shadow mb-4">
                            <div class="card-header py-3"></div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead style = "text-align:center;">
                                        <button type="button" class="btn btn-warning delete_all" data-url="<?php echo base_url();?>User/deleteAllapplications"><span class="icon text-white-50">
                                                    <i style = "color:black;" class="fas fa-trash"></i>
                                                </span><span style = "color:black;" class="text">Delete Selected</span></button>
                                            <tr>
                                                <th><input type="checkbox" id="master"></th>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Position</th>
                                                <th>Date Applied</th>
                                                <th>Date Updated</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                                foreach($app->result() as $lp){
                                                    echo "<tr>";
                                                    echo "<td align = 'center'><input type='checkbox' class='sub_chk' data-id='".$lp->ID."'></td>";
                                                    echo "<td align = 'center'>".$lp->ID."</td>";
                                                    echo "<td align = 'center'>".$lp->Name."</td>";
                                                    echo "<td align = 'center'>".$lp->Email."</td>";
                                                    echo "<td align = 'center'>".$lp->Category."</td>";
                                                    echo "<td align = 'center'>".$lp->date_applied."</td>";
                                                    echo "<td align = 'center'>".$lp->date_edited."</td>";
                                                    echo "<td align = 'center'>
                                                        <div class='btn-group btn-group-sm'>
                                                            <a href='#' class='btn btn-warning'>".$lp->status."</a>
                                                            <button type='button' class='btn btn-warning dropdown-toggle dropdown-toggle-split' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                                                <span class='sr-only'>Toggle Dropdown</span>
                                                            </button>
                                                            <div class='dropdown-menu dropdown-menu-right'>
                                                                <a class='dropdown-item' href='".base_url()."User/acceptapp/".$lp->appnum."'>Accepted</a>
                                                                <a class='dropdown-item' href='".base_url()."User/rejectapp/".$lp->appnum."'>Rejected</a>
                                                            </div>
                                                        </div>
                                                    </td>"; ?>
                                                    <td style = 'text-align:center; font-size:20px;'>
                                                        <a href="<?php echo base_url();?>User/viewapplication/<?php echo $lp->appnum;?>">
                                                            <i class='fa fa-eye' aria-hidden='true'></i>
                                                        </a>
                                                    </td> 
                                                    </tr>
                                                <?php } ?>
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
        <?php if($this->session->userdata('accepted')){   ?>
    <script>
		Swal.fire({
					title: 'Applicant Accepted',
					text: "You successfully accepted an applicant.",
					icon: 'success',
					iconColor: 'gold',
					confirmButtonColor: 'gold'
				})
		</script>
    <?php $this->session->unset_userdata('accepted');} else if($this->session->userdata('rejected')){?>
        <script>
		Swal.fire({
					title: 'Applicant Rejected',
					text: "You successfully rejected an applicant.",
					icon: 'success',
					iconColor: 'gold',
					confirmButtonColor: 'gold'
				})
		</script>
    <?php $this->session->unset_userdata('rejected');} ?>
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
                Swal.fire({
                    icon: 'error',
                    title: 'Please Select A row',
                    text: 'You did not select any row',
                })
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
                                    'Your deleted this data',
                                    'success'
                                ).then(function(){
                                     location.reload();
                                });},
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
    </body>
</html>