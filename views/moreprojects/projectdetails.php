<?php

foreach ($this->viewtext as $key => $value) {
  $projectheadertext=$value['projectheadertext'];
  $projectsubtext=$value['projectsubtext'];
}

 ?>
<?php

foreach ($this->settings as $key => $value) {
  $nlogo=$value['logo'];
  $logo='../../'.$nlogo;
}

 ?>
<?php
require_once  ('models/index_model.php');
$myData= new Index_model();
$displayproject=($myData->projects());
foreach ($displayproject as $key => $value) {
  $name=$value['name'];
  $description=$value['description'];
  $features1=$value['features1'];
  $features2=$value['features2'];
  $features3=$value['features3'];
  $features4=$value['features4'];
  $features5=$value['features5'];
  $features6=$value['features6'];
  $nimage=$value['image'];
  $image='../../'.$nimage;
  $status=$value['status'];
}

 ?>
    <head>
        <meta charset="utf-8" />
        <title>DreamCity HES Ltd</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="buyland, landsales, " name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo URL; ?>public/images/logo.png" width="150em" height="150em">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/bootstrap.min.css" type="text/css">

        <!--Material Icon -->
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/materialdesignicons.min.css" />

        <!--pe-7 Icon -->
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/pe-icon-7-stroke.css" />

        <!-- Custom  sCss -->
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/style.css" />

    </head>

    <body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="58" class="scrollspy-example">

        <!--Navbar Start-->
        <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark mb-10" id="nav-sticky">
            <div class="container-fluid">
                <!-- LOGO -->

                <a class="logo text-uppercase" href="<?php echo URL; ?>index" >
                    <img src="<?php echo $logo; ?>" alt="" class="logo-light" height="50" />
                    <img src="<?php echo $logo; ?>" alt="" class="logo-dark" height="50" />
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ms-auto" id="mySidenav">
                        <li class="nav-item">
                            <a href="<?php echo URL; ?>index#home" class="nav-link active">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo URL; ?>index#features" class="nav-link">Features</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo URL; ?>index#services" class="nav-link">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo URL; ?>index#demo" class="nav-link">Demos</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo URL; ?>index#clients" class="nav-link">Clients</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo URL; ?>index#pricing" class="nav-link">Pricing</a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo URL; ?>index#contact" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->


        <!-- features start -->
        <section class="mt-10 mb-5" id="features">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fades how active" id="pills-customize" role="tabpanel" aria-labelledby="pills-customize-tab">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-lg-4 col-sm-6">
                                        <div>
                                          <img src="<?php echo $image; ?>" alt="" class="img-fluid mx-auto d-block">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 offset-lg-1">
                                        <div>
                                            <div class="feature-icon mb-4">
                                                <h1><i class="pe-7s-edit text-primary"></i></h1>
                                            </div>
                                            <h5 class="mb-3"><?php echo $name; ?> <span style="color:green">(<?php echo $status; ?>)<span></h5>
                                            <p class="text-muted"><?php echo $description; ?></p>                                            <div class="row pt-4">
                                                <div class="col-lg-6">
                                                    <div class="text-muted">
                                                      <?php
                                                        if ($features1=="") {
                                                        }
                                                        else {
                                                          echo "<p><i class='mdi mdi-checkbox-marked-outline text-primary me-2 h6'></i>  $features1</p>";
                                                        }
                                                       ?>
                                                      <?php
                                                        if ($features2=="") {
                                                        }
                                                        else {
                                                          echo "<p><i class='mdi mdi-checkbox-marked-outline text-primary me-2 h6'></i>  $features2</p>";
                                                        }
                                                       ?>
                                                      <?php
                                                        if ($features3=="") {
                                                        }
                                                        else {
                                                          echo "<p><i class='mdi mdi-checkbox-marked-outline text-primary me-2 h6'></i>  $features3</p>";
                                                        }
                                                       ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="text-muted">
                                                      <?php
                                                        if ($features4=="") {
                                                        }
                                                        else {
                                                          echo "<p><i class='mdi mdi-checkbox-marked-outline text-primary me-2 h6'></i>  $features4</p>";
                                                        }
                                                       ?>
                                                      <?php
                                                        if ($features5=="") {
                                                        }
                                                        else {
                                                          echo "<p><i class='mdi mdi-checkbox-marked-outline text-primary me-2 h6'></i>  $features5</p>";
                                                        }
                                                       ?>
                                                      <?php
                                                        if ($features6=="") {
                                                        }
                                                        else {
                                                          echo "<p><i class='mdi mdi-checkbox-marked-outline text-primary me-2 h6'></i>  $features6</p>";
                                                        }
                                                       ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                        <!-- end tab-content -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </section>
        <!-- features end -->


        <!-- footer start -->
        <footer class="footer bg-dark">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="text-center">
                            <div class="footer-logo mb-3">
                                <img src="<?php echo $logo; ?>" alt="" height="50">
                            </div>
                            <ul class="list-inline footer-list text-center mt-5">
                                <li class="list-inline-item"><a href="#">Home</a></li>
                                <li class="list-inline-item"><a href="#">About</a></li>
                                <li class="list-inline-item"><a href="#">Services</a></li>
                                <li class="list-inline-item"><a href="#">Clients</a></li>
                                <li class="list-inline-item"><a href="#">Pricing</a></li>
                                <li class="list-inline-item"><a href="#">Contact</a></li>
                            </ul>
                            <ul class="list-inline social-links mb-4 mt-5">
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-google-plus"></i></a></li>
                            </ul>
                            <p class="text-white-50 mb-4">2016 - 2020 © Adminto. Design by <a href="#" target="_blank" class="text-white-50">Coderthemes</a> </p>

                        </div>
                    </div>

                </div>

            </div>
        </footer>
        <!-- footer end -->

        <!-- Back to top -->
        <a href="#" class="back-to-top" id="back-to-top"> <i class="mdi mdi-chevron-up"> </i> </a>

        <!-- javascript -->
        <script src="<?php echo URL; ?>public/js/bootstrap.bundle.min.js"></script>
        <!-- counter js -->
        <script src="<?php echo URL; ?>public/js/counter.int.js"></script>
        <!-- custom js -->
        <script src="<?php echo URL; ?>public/js/app.js"></script>
    </body>
