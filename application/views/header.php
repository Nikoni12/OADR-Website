<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">
        <div class = "logo">
            <a class="" href="<?php echo base_url();?>User/index" title="OADR">
                <img style="width:100%; height:auto;" src="<?php echo base_url('assets/img/OADRNOBG.png');?>">
            </a>
        </div>
        <nav id="navbar" class="navbar">
            <ul>
				<li class="dropdown "><a href="<?php echo base_url();?>User/about"><span>About</span> <i class="bi bi-chevron-down"></i></a>
					<ul class = "bg-white py-2 collapse-inner rounded">
						<li><a href="<?php echo base_url();?>User/about">Who we are?</a></li>
						<li><a href="<?php echo base_url();?>User/mvision">Mission and Vision</a></li>
						<li><a href="<?php echo base_url();?>User/quality">Quality Policy</a></li>
						<li><a href="<?php echo base_url();?>User/orgstructure">Organization Structure</a></li>
						<li class="dropdown"><a href="<?php echo base_url();?>User/employees"><span>Officials</span><i class="bi bi-chevron-right"></i></a>
							<ul class = "bg-white py-2 collapse-inner rounded">
								<li><a href="<?php echo base_url();?>User/director">Director</a></li>
								<li><a href="<?php echo base_url();?>User/employees">Employees</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li ><a style = "text-decoration: none;" href="<?php echo base_url();?>User/careers">Careers</a></li>
				<li class="dropdown "><a href="<?php echo base_url();?>User/news"><span>Updates</span> <i class="bi bi-chevron-down"></i></a>
					<ul class = "bg-white py-2 collapse-inner rounded">
						<li><a href="<?php echo base_url();?>User/news">News</a></li>
						<li><a href="<?php echo base_url();?>User/announcement">Announcements</a></li>
						<li><a href="<?php echo base_url();?>User/events">Events</a></li>
						<li><a href="<?php echo base_url();?>User/gallery">Photo Gallery</a></li>
					</ul>
				</li>
				<li ><a style = "text-decoration: none;" href="<?php echo base_url();?>User/gender">Gender and Development Corner</a></li>
				<li><a style = "text-decoration: none;" href="<?php echo base_url();?>User/contact">Contact Us</a></li>
				<li><a style = "text-decoration: none;" href="<?php echo base_url();?>User/resources">Resources</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>

