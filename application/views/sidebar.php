<ul class="navbar-nav sidebar sidebar-dark accordion" style = "background-color: #f4c430; "id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="http://localhost/OADR-Website/User/dashboard">
        <div class="sidebar-brand-icon">
            <img style = "max-width:90%;"src="<?php echo base_url('assets/img/OADRNOBG.png');?>">
        </div>
    </a> 
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="http://localhost/OADR-Website/User/dashboard">
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
                <a class="collapse-item" href="http://localhost/OADR-Website/User/newsadmin"><i style = "color:black;"class="fa fa-newspaper-o"></i> News </a>
                <a class="collapse-item" href="http://localhost/OADR-Website/User/announcementsadmin"> <i style = "color:black;"class="fa fa-bullhorn"></i> Announcement</a>
                <a class="collapse-item" href="http://localhost/OADR-Website/User/eventadmin"><i style = "color:black;"class="fa fa-calendar"></i> Events</a>
                <a class="collapse-item" href="http://localhost/OADR-Website/User/admingallery"><i style = "color:black;"class="fa fa-file-image-o"></i> Gallery</a>
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
                <a class="collapse-item" href="http://localhost/OADR-Website/User/admincatresources"><i style = "color:black;"class="fa fa-bars"></i> Category </a>
                <a class="collapse-item" href="http://localhost/OADR-Website/User/adminresources"> <i style = "color:black;"class="fa fa-file"></i> Resources</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading"> Gender and Development Corner </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
            <i style = "color:black;" class="fa fa-pencil-square-o"></i>
            <span>Files</span>
        </a>
        <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" >
            <div class="bg-white py-2 collapse-inner rounded"  style = "border-left:.25rem solid black!important;">
                <h6 class="collapse-header">Select:</h6>
                <a class="collapse-item" href="http://localhost/OADR-Website/User/gadplan"><i style = "color:black;"class="fa fa-newspaper-o"></i> Plan and Budget </a>
                <a class="collapse-item" href="http://localhost/OADR-Website/User/gadreport"> <i style = "color:black;"class="fa fa-bullhorn"></i> Accomplishment Report</a>
                <a class="collapse-item" href="http://localhost/OADR-Website/User/gadactivities"><i style = "color:black;"class="fa fa-calendar"></i> Activities</a>
                <a class="collapse-item" href="http://localhost/OADR-Website/User/admingallery"><i style = "color:black;"class="fa fa-file-image-o"></i>Materials</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading"> Inquiries </div>
    <li class="nav-item">
        <a class="nav-link" href="http://localhost/OADR-Website/User/admininquiries">
            <i style = "color:black;"class="fa fa-calendar"></i>
            <span>Inquiries</span> 
            <?php
                $query = $this->db->query('SELECT * FROM inquiries where status != "Addressed" ');
                echo "<span style = 'background-color:white;color:black;'class='badge badge-secondary'>".$query->num_rows()."</span>"
            ?>
        </a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading"> Job Applications </div>
    <li class="nav-item">
        <a class="nav-link" href="http://localhost/OADR-Website/User/adminapplications">
            <i style = "color:black;"class="fa fa-file"></i>
            <span>Applications</span>
            <?php
                $query = $this->db->query('SELECT * FROM careers where status = "Not Addressed"');
                echo "<span style = 'background-color:white;color:black;'class='badge badge-secondary'>".$query->num_rows()."</span>"
            ?>
        </a>
    </li>
    <?php if($this->session->userdata('role') == "Administrator" ){   ?>
    <div class="sidebar-heading"> Account </div>
    <li class="nav-item">
        <a class="nav-link" href="http://localhost/OADR-Website/User/adminusers">
            <i style = "color:black;"class="fa fa-users"></i>
            <span>Users</span>
        </a>
    </li>
    <?php } ?>
    <hr class="sidebar-divider">
</ul>