<!-- Start::app-sidebar -->
<aside class="app-sidebar" id="sidebar">

    <!-- Start::main-sidebar-header -->
    <div class="main-sidebar-header">
        <a href="index.html" class="header-logo">
            <img src="<?= base_url() ?>/assets/images/brand-logos/logo.png" alt="logo" class="desktop-logo" style='display:block' width='150'>
        </a>
    </div>
    <!-- End::main-sidebar-header -->
<br><br><br>
    <!-- Start::main-sidebar -->
    <div class="main-sidebar" id="sidebar-scroll">

        <!-- Start::nav -->
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="slide-left" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                </svg>
            </div>
            <ul class="main-menu">
                <!-- Start::slide__category -->
                
                <!-- End::slide__category -->


                <!-- Start::slide -->
                <li class="slide">
                    <a href="<?= base_url() ?>dashboard" class="side-menu__item">
                        <span class=" side-menu__icon">
                            <i class='bx bx-desktop'></i>
                        </span>
                        <span class="side-menu__label">Dashboards</span>
                    </a>
                </li>
                <!-- End::slide -->


                <!-- Start::slide__category -->
              
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <span class=" side-menu__icon">
                            <i class='bx bx-line-chart'></i>
                        </span>
                        <span class="side-menu__label">Sales</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Sales</a>
                        </li>
                        <li class="slide">
                            <a href="#" class="side-menu__item">Upload from Excel</a>
                        </li>
                        <li class="slide">
                            <a href="<?= base_url() ?>leads/create" class="side-menu__item">Create Prospect</a>
                        </li>
                        <li class="slide">
                            <a href="<?= base_url() ?>leads" class="side-menu__item">Prospect table</a>
                        </li>
                    </ul>
                </li>
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <span class=" side-menu__icon">
                            <i class='bx bxs-data'></i>
                        </span>
                        <span class="side-menu__label">Applications</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Applications</a>
                        </li>
                        <li class="slide">
                            <a href="#" class="side-menu__item">Under Process</a>
                        </li>
                        <li class="slide">
                            <a href="#" class="side-menu__item">Issue Cases</a>
                        </li>
                        <li class="slide">
                            <a href="#" class="side-menu__item">Rejected Cases</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide__category -->
             
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="#" class="side-menu__item">
                        <span class=" side-menu__icon">
                            <i class='bx bxs-user-circle'></i>
                        </span>
                        <span class="side-menu__label">Customers</span>
                    </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="#" class="side-menu__item">
                        <span class=" side-menu__icon">
                            <i class='bx bx-credit-card-alt'></i>
                        </span>
                        <span class="side-menu__label">Renewals</span>
                    </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="#" class="side-menu__item">
                        <span class=" side-menu__icon">
                            <i class='bx bx-dna'></i>
                        </span>
                        <span class="side-menu__label">Services</span>
                    </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="#" class="side-menu__item">
                        <span class=" side-menu__icon">
                            <i class='bx bx-task'></i>
                        </span>
                        <span class="side-menu__label">Tasks</span>
                    </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="#" class="side-menu__item">
                        <span class=" side-menu__icon">
                            <i class='bx bxs-user-rectangle'></i>
                        </span>
                        <span class="side-menu__label">Users</span>
                    </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="#" class="side-menu__item">
                        <span class=" side-menu__icon">
                            <i class='bx bx-rupee'></i>
                        </span>
                        <span class="side-menu__label">Commissions</span>
                    </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide__category -->
               
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <span class=" side-menu__icon">
                            <i class='bx bxs-component'></i>
                        </span>
                        <span class="side-menu__label">Master Data</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Master Data</a>
                        </li>

                        <!-- Start::slide__category -->
                       
                        <!-- End::slide__category -->
                        <li class="slide">
                            <a href="<?= base_url() ?>lead-status" class="side-menu__item">Lead Status</a>
                        </li>
                        <li class="slide">
                            <a href="<?= base_url() ?>lead-source" class="side-menu__item">Lead Source</a>
                        </li>

                        <!-- Start::slide__category -->
                       
                        <!-- End::slide__category -->
                        <li class="slide">
                            <a href="<?= base_url() ?>insurer" class="side-menu__item">Insurer</a>
                        </li>
                        <li class="slide">
                            <a href="<?= base_url() ?>insurer-type" class="side-menu__item">Line Of Business</a>
                        </li>
                        <!-- Start::slide__category -->
                      
                        <!-- End::slide__category -->
                        <li class="slide">
                            <a href="<?= base_url() ?>policy-type" class="side-menu__item">Policy Type</a>
                        </li>
                        <li class="slide">
                            <a href="<?= base_url() ?>policy" class="side-menu__item">Policy Name</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

        </nav>
        <!-- End::nav -->

    </div>
    <!-- End::main-sidebar -->

</aside>
<!-- End::app-sidebar -->