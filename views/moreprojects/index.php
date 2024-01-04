<?php
require_once  ('models/index_model.php');
$myData= new Index_model();
$displaytext=($myData->viewtext());
foreach ($displaytext as $key => $value) {
  $projectheadertext=$value['projectheadertext'];
  $projectsubtext=$value['projectsubtext'];
}

 ?>
<?php
require_once  ('models/index_model.php');
$myData= new Index_model();
$displaysettings=($myData->settings());
foreach ($displaysettings as $key => $value) {
  $logo=$value['logo'];
}

 ?>

    <head>
        <meta charset="utf-8" />
        <title>DreamCity HES Ltd</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Buy land, landsale" name="description" />
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
        <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark" id="nav-sticky">
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






        <!-- Demo start -->
        <section class="section" id="demo">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="title text-center">
                            <h6 class="text-primary small-title">Projects</h6>
                            <h4><?php echo $projectheadertext; ?></h4>
                            <p class="text-muted"><?php echo $projectsubtext; ?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                  <?php
                  require_once  ('models/index_model.php');
                  $myData= new Index_model();
                  $displayproject=($myData->oneproject());
                  foreach ($displayproject as $key => $value) {
                    $id=$value['id'];
                    $name=$value['name'];
                    $description=$value['description'];
                    $features1=$value['features1'];
                    $features2=$value['features2'];
                    $features3=$value['features3'];
                    $features4=$value['features4'];
                    $features5=$value['features5'];
                    $features6=$value['features6'];
                    $image=$value['image'];
                    $status=$value['status'];
                    $gettheproject="moreprojects/getfullproject/".$id;
                    echo '
                    <div class="col-lg-4 col-sm-6">
                         <div class="demo-box text-center p-3 mt-4">
                             <a href="'.$gettheproject.'" class="text-dark">
                                 <div class="position-relative demo-content">
                                     <div class="demo-img">
                                         <img src="'.$image.'" alt="" class="img-fluid mx-auto d-block rounded">
                                     </div>
                                     <div class="demo-overlay">
                                         <div class="overlay-icon">
                                             <i class="pe-7s-expand1 h1 text-white"></i>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="mt-3">
                                     <h5 class="font-18">'.$name.'</h5>
                                 </div>
                             </a>
                         </div>
                     </div>
                    ';
                  }

                   ?>

                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </section>
        <!-- Demo end -->



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
