<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">


            <a class="sidebar-brand align-items-center justify-content-center d-flex" href="">
                <div class="sidebar-brand-icon">
                    <img src="<?= base_url('asset/frontend/img/icon.png'); ?>" alt="" class="w-25 img-circle">
                </div>
            </a>


            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Home </div>



            <li class="nav-item <?= (site_url(uri_string()) == base_url('home'))?'active':'';?>">
                <a class="nav-link  pb-0" href="<?= base_url('home'); ?>">
                    <i class="fas fa-tachometer-alt text-green"></i>
                    <span>Dasboard</span></a>
            </li>


            <hr class="sidebar-divider mt-3">
            <div class="sidebar-heading">
                User </div>



            <li class="nav-item <?= (site_url(uri_string()) == base_url('profile'))?'active':'';?>">
                <a class="nav-link pb-0" href="<?= base_url('profile'); ?>">
                    <i class="far fa-edit text-green"></i>
                    <span>Edit Profile</span></a>

            </li>


            <hr class="sidebar-divider mt-3">
            <div class="sidebar-heading">
                Content </div>

            <!-- SIAPKAN SUB-MENU SESUAI MENU -->
            <li class="nav-item <?= (site_url(uri_string()) == base_url('blogs'))?'active':'';?>">
                <a class="nav-link pb-0" href="<?= base_url('blogs');?>">
                    <i class="far fa-comment-alt text-blue"></i>
                    <span>Blogs</span></a>
            </li>
            <li class="nav-item <?= (site_url(uri_string()) == base_url('materi'))?'active':'';?>">
                <a class="nav-link pb-0" href="<?= base_url('materi');?>">
                    <i class="far fa-list-alt text-blue"></i>
                    <span>Cetegories</span></a>
            </li>
            <hr class="sidebar-divider mt-3">

            <li class="nav-item">
                <a class="nav-link pb-0 logout" href="<?= base_url('logout'); ?>">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>
            <hr class="sidebar-divider mt-3">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline mt-5">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>