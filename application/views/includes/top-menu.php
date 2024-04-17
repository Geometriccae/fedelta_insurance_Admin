<div class="page">
    <!-- app-header -->
    <header class="app-header">

        <!-- Start::main-header-container -->
        <div class="main-header-container container-fluid">

            <!-- Start::header-content-left -->
            <div class="header-content-left">

                <!-- Start::header-element -->
                <div class="header-element">
                    <div class="horizontal-logo">
                        <a href="index.html" class="header-logo">
                            <img src="<?= base_url() ?>/assets/images/brand-logos/logo.png" alt="logo" class="desktop-logo">
                        </a>
                    </div>
                </div>
                <!-- End::header-element -->

                <!-- Start::header-element -->
                <div class="header-element">
                    <!-- Start::header-link -->
                    <a aria-label="anchor" href="javascript:void(0);" class="sidemenu-toggle header-link" data-bs-toggle="sidebar">
                        <span class="open-toggle me-2">
                            <i class="bx bx-menu header-link-icon"></i>
                        </span>
                    </a>
                    <div class="main-header-center  d-none d-lg-block  header-link">
                        <input type="text" class="form-control form-control-lg" id="typehead" placeholder="Search for results..." autocomplete="off">
                        <button type="button" aria-label="button" class="btn pe-1"><i class="fe fe-search" aria-hidden="true"></i></button>
                    </div>

                    <!-- End::header-link -->
                </div>
                <!-- End::header-element -->



                <!-- Start::header-element -->
                <div class="header-element header-search d-lg-none d-block ">
                    <!-- Start::header-link -->
                    <a aria-label="anchor" href="javascript:void(0);" class="header-link" data-bs-toggle="modal" data-bs-target="#searchModal">
                        <i class="bx bx-search-alt-2 header-link-icon"></i>
                    </a>
                    <!-- End::header-link -->
                </div>
                <!-- End::header-element -->

            </div>
            <!-- End::header-content-left -->

            <!-- Start::header-content-right -->
            <div class="header-content-right">

                <!-- Start::header-element -->
                <div class="header-element header-theme-mode">
                    <!-- Start::header-link|layout-setting -->
                    <a aria-label="anchor" href="javascript:void(0);" class="header-link layout-setting">
                        <!-- Start::header-link-icon -->
                        <i class="bx bx-sun bx-flip-horizontal header-link-icon ionicon  dark-layout"></i>
                        <!-- End::header-link-icon -->
                        <!--  Start::header-link-icon -->
                        <i class="bx bx-moon bx-flip-horizontal header-link-icon ionicon light-layout"></i>
                        <!-- End::header-link-icon -->
                    </a>
                    <!-- End::header-link|layout-setting -->
                </div>
                <!-- End::header-element -->



                <!-- Start::header-element -->
                <div class="header-element header-fullscreen">
                    <!-- Start::header-link -->
                    <a aria-label="anchor" onclick="openFullscreen();" href="javascript:void(0);" class="header-link">
                        <i class="bx bx-fullscreen header-link-icon  full-screen-open"></i>
                        <i class="bx bx-exit-fullscreen header-link-icon  full-screen-close  d-none"></i>
                    </a>
                    <!-- End::header-link -->
                </div>
                <!-- End::header-element -->



                <!-- Start::header-element -->
                <div class="header-element mainuserProfile">
                    <!-- Start::header-link|dropdown-toggle -->
                    <a href="javascript:void(0);" class="header-link dropdown-toggle" id="mainHeaderProfile" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <div class="d-sm-flex wd-100p">
                                <!-- <div class="avatar avatar-sm"><img alt="avatar" class="rounded-circle" src="../assets/images/faces/1.jpg"></div> -->
                                <div class="ms-2 my-auto d-none d-xl-flex">
                                    <h6 class=" font-weight-semibold mb-0 fs-13 user-name d-sm-block d-none">Admin</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- End::header-link|dropdown-toggle -->
                    <ul class="dropdown-menu  border-0 main-header-dropdown  overflow-hidden header-profile-dropdown" aria-labelledby="mainHeaderProfile">
                        <li><a class="dropdown-item border-bottom" href="profile.html"><i class="fs-13 me-2 bx bx-user"></i>Profile</a></li>
                        <li><a class="dropdown-item border-bottom" href="mail-settings.html"><i class="fs-13 me-2 bx bx-cog"></i>Settings</a></li>
                        <li><a class="dropdown-item" href="sign_in/logout"><i class="fs-13 me-2 bx bx-arrow-to-right"></i>Log Out</a></li>
                    </ul>
                </div>
                <!-- End::header-element -->

            </div>
            <!-- End::header-content-right -->

        </div>
        <!-- End::main-header-container -->

    </header>
    <!-- /app-header -->