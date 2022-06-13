<ul class="navbar-nav sidebar sidebar-dark accordion" style = "background-color:#0C0404;color:white;"id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="administrator-panel.php">
        <div class="sidebar-brand-icon">
            <img src = "img/whitelogo.png" style = "max-width:100%;">
        </div>
    </a> 
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="administrator-panel.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading"> Categories </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Support</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Support Category:</h6>
                <a class="collapse-item" href="hardware.php">Hardware</a>
                <a class="collapse-item" href="software.php">Software</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Applications</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Category</h6>
                <a class="collapse-item" href="consultant.php">Consultant</a>
                <a class="collapse-item" href="datascientist.php">Data Scientist</a>
                <a class="collapse-item" href="designer.php">Designer</a>
                <a class="collapse-item" href="developer.php">Developer</a>
            </div>
        </div>
    </li>
    <div class="sidebar-heading"> Account </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdmin" aria-expanded="true" aria-controls="collapseAdmin">
            <i class="fas fa-fw fa-user"></i>
            <span>Users</span>
        </a>
        <div id="collapseAdmin" class="collapse" aria-labelledby="headingAdmin" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">User Settings:</h6>
                <a class="collapse-item" href="users.php">All Users</a>
                <a class="collapse-item" href="addadmin.php">Add User</a>
            </div>
        </div>
    </li>
    <div class="sidebar-heading"> Logs </div>
    <li class="nav-item">
        <a class="nav-link" href="log.php">
            <i class="fas fa-fw fa-list"></i>
            <span>Activity Log</span>
        </a>
    </li>
    <hr class="sidebar-divider d-none d-md-block">
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>