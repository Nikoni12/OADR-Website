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
                <a class="collapse-item" href="#"> <i style = "color:black;"class="fa fa-bullhorn"></i> Announcement</a>
                <a class="collapse-item" href="#"><i style = "color:black;"class="fa fa-calendar"></i> Events</a>
                <a class="collapse-item" href="#"><i style = "color:black;"class="fa fa-file-archive-o"></i> Resources</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading"> Inquiries </div>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i style = "color:black;"class="fa fa-calendar"></i>
            <span>Inquiries</span> <span style = "background-color:white;color:black;"class="badge badge-secondary">0</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading"> Job Applications </div>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i style = "color:black;"class="fa fa-file"></i>
            <span>Applications</span> <span style = "background-color:white;color:black;"class="badge badge-secondary">0</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading"> Account </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdmin" aria-expanded="true" aria-controls="collapseAdmin">
            <i style = "color:black;"class="fas fa-users"></i>
            <span>Users</span>
        </a>
        <div id="collapseAdmin" class="collapse" aria-labelledby="headingAdmin" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded"  style = "border-left:.25rem solid black!important;">
                <h6 class="collapse-header">User Settings:</h6>
                <a class="collapse-item" href="#"> <i style = "color:black;"class="fas fa-user"></i> All Users</a>
                <a class="collapse-item" href="#"><i style = "color:black;"class="fas fa-plus"></i> Add User</a>
            </div>
        </div>
    </li>
</ul>