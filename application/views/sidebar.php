<ul class="navbar-nav sidebar sidebar-dark accordion" style = "background-color: #f4c430; "id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url();?>User/dashboard">
        <div class="sidebar-brand-icon">
            <img style = "max-width:90%;"src="<?php echo base_url('assets/img/OADRNOBG.png');?>">
        </div>
    </a> 
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>User/dashboard">
            <i style = "color:black;"class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading"> Updates </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i style = "color:black;" class="fa fa-pencil-square-o"></i>
            <span>Updates</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" >
            <div class="bg-white py-2 collapse-inner rounded"  style = "border-left:.25rem solid black!important;">
                <h6 class="collapse-header">Select:</h6>
                <a class="collapse-item" href="<?php echo base_url();?>User/newsadmin"><i style = "color:black;"class="fa fa-newspaper-o"></i> News </a>
                <a class="collapse-item" href="<?php echo base_url();?>User/announcementsadmin"> <i style = "color:black;"class="fa fa-bullhorn"></i> Announcement</a>
                <a class="collapse-item" href="<?php echo base_url();?>User/eventadmin"><i style = "color:black;"class="fa fa-calendar"></i> Events</a>
                <a class="collapse-item" href="<?php echo base_url();?>User/admingallery"><i style = "color:black;"class="fa fa-file-image-o"></i> Gallery</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading"> Resources </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseTwo">
            <i style = "color:black;" class="fa fa-file"></i>
            <span>Resources</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" >
            <div class="bg-white py-2 collapse-inner rounded"  style = "border-left:.25rem solid black!important;">
                <h6 class="collapse-header">Select:</h6>
                <a class="collapse-item" href="<?php echo base_url();?>User/admincatresources"><i style = "color:black;"class="fa fa-bars"></i> Category </a>
                <a class="collapse-item" href="<?php echo base_url();?>User/adminresources"> <i style = "color:black;"class="fa fa-file"></i> Resources</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading"> G.A.D </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
            <i style = "color:black;" class="fa fa-pencil-square-o"></i>
            <span>Files</span>
        </a>
        <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" >
            <div class="bg-white py-2 collapse-inner rounded"  style = "border-left:.25rem solid black!important;">
                <h6 class="collapse-header">Select:</h6>
                <a class="collapse-item" href="<?php echo base_url();?>User/gadplan"><i style = "color:black;"class="fa fa-newspaper-o"></i> Plan and Budget </a>
                <a class="collapse-item" href="<?php echo base_url();?>User/gadreport"> <i style = "color:black;"class="fa fa-bullhorn"></i> Accomplishment <br>Report</a>
                <a class="collapse-item" href="<?php echo base_url();?>User/gadactivities"><i style = "color:black;"class="fa fa-calendar"></i> Activities</a>
                <a class="collapse-item" href="<?php echo base_url();?>User/gadpublications"><i style = "color:black;"class="fa fa-book"></i> Publications</a>
                <a class="collapse-item" href="<?php echo base_url();?>User/gadavm"><i style = "color:black;"class="fa fa-file-video-o"></i> A.V.M</a>
                <a class="collapse-item" href="<?php echo base_url();?>User/gadinfographics"><i style = "color:black;"class="fa fa-file-image-o"></i> Infographics</a>
                <a class="collapse-item" href="<?php echo base_url();?>User/gadpcw"><i style = "color:black;"class="fa fa-file"></i> PCW Publication</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading"> Inquiries </div>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>User/admininquiries">
            <i style = "color:black;"class="fa fa-calendar"></i>
            <span>Inquiries</span> 
            <?php
                $query = $this->db->query('SELECT * FROM inquiries where status != "Addressed" ');
                echo "<span style = 'background-color:white;color:black;'class='badge badge-secondary'>".$query->num_rows()."</span>"
            ?>
        </a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading"> T.P.D Division </div>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>User/admintraining">
            <i style = "color:black;"class="fa fa-calendar"></i>
            <span>T.P.D Division</span> 
        </a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading"> Job Opportunities </div>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>User/adminapplications">
            <i style = "color:black;"class="fa fa-file"></i>
            <span>Job Positions</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading"> Website Updates </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseTwo">
            <i style = "color:black;" class="fa fa-desktop"></i>
            <span>Website Updates</span>
        </a>
        <div id="collapseFive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" >
            <div class="bg-white py-2 collapse-inner rounded"  style = "border-left:.25rem solid black!important;">
                <h6 class="collapse-header">Select:</h6>
                <a class="collapse-item" href="<?php echo base_url();?>User/employeesadmin"><i style = "color:black;"class="fa fa-user"></i> Employees </a>
                <a class="collapse-item" href="<?php echo base_url();?>User/admincert"> <i style = "color:black;"class="fa fa-certificate"></i> Certifications</a>
            </div>
        </div>
    </li>
    
    <hr class="sidebar-divider">
    <?php if($this->session->userdata('role') == "Administrator" ){   ?>
    <div class="sidebar-heading"> Account </div>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>User/adminusers">
            <i style = "color:black;"class="fa fa-users"></i>
            <span>Users</span>
        </a>
    </li>
    <?php } ?>
    <hr class="sidebar-divider">
</ul>