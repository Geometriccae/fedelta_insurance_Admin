<!DOCTYPE html>

<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">



<head>



    <!-- Meta Data -->

    <meta charset="UTF-8">

    <meta name='viewport' content='width=device-width, initial-scale=1.0'>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title> Fedelta CRM </title>

    <meta name="Description" content="">

    <meta name="Author" content="">

    <meta name="keywords" content="">



    <!-- Favicon -->

    <link rel="icon" href="<?= base_url() ?>/assets/images/brand-logos/fav.ico" type="image/x-icon">



    <!-- Main Theme Js -->

    <script src="<?= base_url() ?>/assets/js/authentication-main.js"></script>



    <!-- Bootstrap Css -->

    <link id="style" href="<?= base_url() ?>/assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">



    <!-- Style Css -->

    <link href="<?= base_url() ?>/assets/css/styles.min.css" rel="stylesheet">



    <!-- Icons Css -->

    <link href="<?= base_url() ?>/assets/css/icons.min.css" rel="stylesheet">





</head>



<body>


    <div class="page error-bg" id="particles-js">

        <!-- Start::error-page -->

        <div class="error-page  ">

            <div class="container">

                <div class="row justify-content-center align-items-center authentication authentication-basic h-100">

                    <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">

                        <div class="my-5 d-flex justify-content-center">

                            <a href="index.html">

                                <img src="<?= base_url() ?>/assets/images/brand-logos/logo.png" alt="logo" class="desktop-logo">

                            </a>

                        </div>

                        <div class="card custom-card rectangle2">

                            <div class="card-body p-5 rectangle3">

                                <p class="h4 fw-semibold mb-2 text-center">Sign In</p>

                                <p class="mb-4 text-muted op-7 fw-normal text-center">Welcome back!</p>

                                <form action="<?= base_url('sign_in/check_login') ?>" method="post">

                                    <div class="row gy-3">

                                        <div class="col-xl-12">

                                            <label for="signin-username" class="form-label text-default">User Name</label>

                                            <input type="text" class="form-control form-control-lg" name="username" id="signin-username" placeholder="user name" required>

                                        </div>

                                        <div class="col-xl-12 mb-2">

                                            <label for="signin-password" class="form-label text-default d-block">Password

                                                <!-- <a href="reset-password-basic.html" class="float-end text-primary">Forget password ?</a> -->

                                            </label>

                                            <div class="input-group">

                                                <input type="password" class="form-control form-control-lg" name="password" id="signin-password" placeholder="password">

                                                <button class="btn btn-light bg-transparent" type="button" onclick="createpassword('signin-password',this)" id="button-addon2"><i

                                                        class="ri-eye-off-line align-middle"></i></button>

                                            </div>

                                            <div class="mt-2">



                                            </div>

                                        </div>

                                        <div class="col-xl-12 d-grid mt-2">

                                            <button id="btn" type="submit" class="btn">Sign In</button>

                                        </div>

                                    </div>

                                </form>
                               

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- End::error-page -->

    </div>
    <style>
    #btn{
    background-color: #000750;
    border-color: rgb(var(--primary-rgb))!important;
    color: #fff!important;
}
</style>


    <!-- Custom-Switcher JS -->

    <script src="<?= base_url() ?>/assets/js/custom-switcher.min.js"></script>



    <!-- Bootstrap JS -->

    <script src="<?= base_url() ?>/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>



    <!-- Show Password JS -->

    <script src="<?= base_url() ?>/assets/js/show-password.js"></script>



</body>





</html>