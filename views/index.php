<?php
require_once  ('models/index_model.php');
$myData= new Index_model();
$displaytext=($myData->viewtext());
foreach ($displaytext as $key => $value) {
  $projectheadertext=$value['projectheadertext'];
  $projectsubtext=$value['projectsubtext'];
  $bannertoptext=$value['bannertoptext'];
  $bannermidtext=$value['bannermidtext'];
  $bannerendtext=$value['bannerendtext'];
  $branchheadertext=$value['branchheadertext'];
  $branchsubtext=$value['branchsubtext'];
  $serviceheadertext=$value['serviceheadertext'];
  $servicesubtext=$value['servicesubtext'];
  $pricingheadertext=$value['pricingheadertext'];
  $pricingsubtext=$value['pricingsubtext'];
  $contactheadertext=$value['contactheadertext'];
  $contactsubtext=$value['contactsubtext'];
}

 ?>

<?php
require_once  ('models/index_model.php');
$myData= new Index_model();
$displayClientCount=($myData->clients());
foreach ($displayClientCount as $key => $value) {
  $clientcount=$value['Numclient'] + 1054;
}

 ?>

<?php
require_once  ('models/index_model.php');
$myData= new Index_model();
$displaySales=($myData->totalsales());
foreach ($displaySales as $key => $value) {
  $salescount=$value['Numsales'] + 1269;
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
  $image=$value['image'];
  $status=$value['status'];
}

 ?>
    <head>
        <meta charset="utf-8" />
        <title>DreamCity HES Ltd</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Landsales, buyland, buy land" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo URL; ?>public/images/logo.png">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/bootstrap.min.css" type="text/css">

        <!--Material Icon -->
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/materialdesignicons.min.css" />

        <!--pe-7 Icon -->
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/pe-icon-7-stroke.css" />
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/owl.carousel.min.css">
      	<link rel="stylesheet" href="<?php echo URL; ?>public/css/owl.theme.default.min.css">
        <!-- Custom  sCss -->
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/style.css" />

    </head>

    <body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="58" class="scrollspy-example">

        <!--Navbar Start-->
        <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark" id="nav-sticky">
            <div class="container-fluid">
                <!-- LOGO -->

                <a class="logo text-uppercase" href="<?php echo URL; ?>index" >
                    <img src="<?php echo $logo; ?>" alt="" class="logo-light" width="50px" height="20px" />
                    <img src="<?php echo $logo; ?>" alt="" class="logo-dark" width="20%" height="20%" />
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ms-auto" id="mySidenav">
                        <li class="nav-item">
                            <a href="#home" class="nav-link active">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#features" class="nav-link">Features</a>
                        </li>
                        <li class="nav-item">
                            <a href="#services" class="nav-link">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="#demo" class="nav-link">Demos</a>
                        </li>
                        <li class="nav-item">
                            <a href="#clients" class="nav-link">Clients</a>
                        </li>
                        <li class="nav-item">
                            <a href="#pricing" class="nav-link">Pricing</a>
                        </li>

                        <li class="nav-item">
                            <a href="#contact" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- home start -->
        <section class="bg-home bg-gradient" id="home">
            <div class="home-center">
                <div class="home-desc-center">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-sm-6">
                                <div class="home-title">
                                    <h5 class="mb-3 text-white-50"><?php echo $bannertoptext; ?></h5>
                                    <h2 class="mb-4 text-white"><?php echo $bannermidtext ?></h2>
                                    <p class="text-white-50 home-desc font-16 mb-5"><?php echo $bannerendtext ?> </p>
                                    <!-- <div class="watch-video mt-5">
                                        <a href="#" class="btn btn-custom me-4">Get Started <i class="mdi mdi-chevron-right ms-1"></i></a>
                                        <a href="http://vimeo.com/99025203" class="video-play-icon text-white"><i class="mdi mdi-play play-icon-circle me-2"></i> <span>Watch The Video</span></a>
                                    </div> -->

                                </div>
                            </div>
                            <div class="col-lg-5 offset-lg-1 col-sm-6">
                                <div class="home-img mo-mt-20">
                                    <img src="<?php echo URL; ?>public/images/home-img.png" alt="" class="img-fluid mx-auto d-block">
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div>
                    <!-- end container-fluid -->
                </div>
            </div>
        </section>
        <!-- home end -->

        <!-- features start -->
        <section class="features" id="features">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav nav-pills nav-justified features-tab mb-5" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="pills-code-tab" data-bs-toggle="pill" href="#pills-code" role="tab" aria-controls="pills-code" aria-selected="true">
                                    <div class="clearfix">
                                        <div class="features-icon float-end">
                                           <h1><i class="pe-7s-notebook tab-icon"></i></h1>
                                        </div>
                                        <div class="d-none d-lg-block me-4">
                                            <h5 class="tab-title"><?php echo  $projectheadertext; ?></h5>
                                            <p><?php echo $projectsubtext; ?></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-customize-tab" data-bs-toggle="pill" href="#pills-customize" role="tab" aria-controls="pills-customize" aria-selected="false">
                                    <div class="clearfix">
                                        <div class="features-icon float-end">
                                            <h1><i class="pe-7s-edit tab-icon"></i></h1>
                                        </div>
                                        <div class="d-none d-lg-block me-4">
                                            <h5 class="tab-title"><?php echo $branchheadertext ?></h5>
                                            <p><?php echo $branchsubtext ?></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-support-tab" data-bs-toggle="pill" href="#pills-support" role="tab" aria-controls="pills-support" aria-selected="false">
                                    <div class="features-icon float-end">
                                       <h1><i class="pe-7s-headphones tab-icon"></i></h1>
                                    </div>
                                    <div class="d-none d-lg-block me-4">
                                        <h5 class="tab-title">Awesome Support</h5>
                                        <p>It will be as simple as fact</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade" id="pills-code" role="tabpanel" aria-labelledby="pills-code-tab">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-lg-4 col-sm-6">
                                        <div>
                                            <img src="<?php echo $image; ?>" alt="" class="img-fluid mx-auto d-block">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 offset-lg-1">
                                        <div>
                                            <div class="feature-icon mb-4">
                                                <h1><i class="pe-7s-notebook text-primary"></i><h1>
                                            </div>
                                            <h5 class="mb-3"><?php echo $name; ?> <span style="color:green">(<?php echo $status; ?>)<span></h5>
                                            <p class="text-muted"><?php echo $description; ?></p>
                                            <div class="row pt-4">
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
                                            <div class="mt-4">
                                                <a href="<?php echo URL; ?>moreprojects" class="btn btn-custom">More Projects <i class="mdi mdi-arrow-right ms-1"></i></a>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <!-- end row -->
                            </div>
                            <div class="tab-pane fades how active" id="pills-customize" role="tabpanel" aria-labelledby="pills-customize-tab">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-lg-4 col-sm-6">
                                        <div>
                                            <img src="<?php echo URL; ?>public/images/features-img/img-2.png" alt="" class="img-fluid mx-auto d-block">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 offset-lg-1">
                                        <div>
                                            <div class="feature-icon mb-4">
                                                <h1><i class="pe-7s-edit text-primary"></i></h1>
                                            </div>
                                            <?php
                                            require_once  ('models/index_model.php');
                                            $myData= new Index_model();
                                            $displaybranch=($myData->branch());
                                            foreach ($displaybranch as $key => $value) {
                                              $branch=$value['branch'];
                                              $branchaddress=$value['branchaddress'];
                                              echo '
                                              <h5 class="mb-2">'.$branch.'</h5>
                                              <p class="text-muted">'.$branchaddress.'</p>

                                              ';
                                            }

                                             ?>

                                        </div>

                                    </div>
                                </div>
                                <!-- end row -->
                            </div>
                            <div class="tab-pane fade" id="pills-support" role="tabpanel" aria-labelledby="pills-support-tab">

                                <div class="row align-items-center justify-content-center">
                                    <div class="col-lg-4 col-sm-6">
                                        <div>
                                            <img src="<?php echo URL; ?>public/images/newwhatapp.png" alt="" class="img-fluid mx-auto d-block">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 offset-lg-1">
                                        <div>
                                            <div class="feature-icon mb-4">
                                                <i class="pe-7s-headphones h1 text-primary"></i>
                                            </div>
                                            <h5 class="mb-3">Awesome Support</h5>
                                            <div class="mt-4">
                                                <a href="https://wa.me/+2348034453549" class="btn btn-custom">Chat With Us<i class="mdi mdi-arrow-right ms-1"></i></a>
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

        <!-- services start -->
        <section class="section bg-light" id="services">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="title text-center">
                            <h6 class="text-primary small-title">Services</h6>
                            <h4>What we do</h4>
                            <p class="text-muted">Our Services are not limited to these only...</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                  <?php
                  require_once  ('models/index_model.php');
                  $myData= new Index_model();
                  $displayservices=($myData->services());
                  foreach ($displayservices as $key => $value) {
                    $servicetext=$value['servicetext'];
                    $servicedesc=$value['servicedesc'];
                    echo '
                    <div class="col-xl-4 col-sm-6">
                        <div class="services-box p-4 bg-white mt-4">
                            <div class="services-img float-start me-4">
                                <img src="'.URL.'public/images/icons/layers.png" alt="">
                            </div>
                            <h5>'.$servicetext.'</h5>
                            <div class="overflow-hidden">
                                <p class="text-muted">'.$servicedesc.'</p>
                            </div>
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
        <!-- services end -->

        <!-- Demo start -->
        <section class="section" id="demo">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="title text-center">
                            <h6 class="text-primary small-title">App Demos</h6>
                            <h4>Available App Demos</h4>
                            <p class="text-muted">Some of our App Screenshot!</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="demo-box text-center p-3 mt-4">
                            <a href="#" class="text-dark">
                                <div class="position-relative demo-content">
                                    <div class="demo-img">
                                        <img src="<?php echo URL; ?>public/images/demo/demo-1.jpg" alt="" class="img-fluid mx-auto d-block rounded">
                                    </div>
                                    <div class="demo-overlay">
                                        <div class="overlay-icon">
                                            <i class="pe-7s-expand1 h1 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <h5 class="font-18">Light Layouts</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="demo-box text-center p-3 mt-4">
                            <a href="#" class="text-dark">
                                <div class="position-relative demo-content">
                                    <div class="demo-img">
                                        <img src="<?php echo URL; ?>public/images/demo/demo-2.jpg" alt="" class="img-fluid mx-auto d-block rounded">
                                    </div>
                                    <div class="demo-overlay">
                                        <div class="overlay-icon">
                                            <i class="pe-7s-expand1 h1 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <h5 class="font-18">Horizontal Layouts</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="demo-box text-center p-3 mt-4">
                            <a href="#" class="text-dark">
                                <div class="position-relative demo-content">
                                    <div class="demo-img">
                                        <img src="<?php echo URL; ?>public/images/demo/demo-3.jpg" alt="" class="img-fluid mx-auto d-block rounded">
                                    </div>
                                    <div class="demo-overlay">
                                        <div class="overlay-icon">
                                            <i class="pe-7s-expand1 h1 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <h5 class="font-18">Semi Dark Layout</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="demo-box text-center p-3 mt-4">
                            <a href="#" class="text-dark">
                                <div class="position-relative demo-content">
                                    <div class="demo-img">
                                        <img src="<?php echo URL; ?>public/images/demo/demo-4.jpg" alt="" class="img-fluid mx-auto d-block rounded">
                                    </div>
                                    <div class="demo-overlay">
                                        <div class="overlay-icon">
                                            <i class="pe-7s-expand1 h1 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <h5 class="font-18">Semi Dark Horizontal</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="demo-box text-center p-3 mt-4">
                            <a href="#" class="text-dark">
                                <div class="position-relative demo-content">
                                    <div class="demo-img">
                                        <img src="<?php echo URL; ?>public/images/demo/demo-5.jpg" alt="" class="img-fluid mx-auto d-block rounded">
                                    </div>
                                    <div class="demo-overlay">
                                        <div class="overlay-icon">
                                            <i class="pe-7s-expand1 h1 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <h5 class="font-18">Landing Page</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="demo-box text-center p-3 mt-4">
                            <a href="#" class="text-dark">
                                <div class="position-relative demo-content">
                                    <div class="demo-img">
                                        <img src="<?php echo URL; ?>public/images/demo/demo-6.jpg" alt="" class="img-fluid mx-auto d-block rounded">
                                    </div>
                                    <div class="demo-overlay">
                                        <div class="overlay-icon">
                                            <i class="pe-7s-expand1 h1 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <h5 class="font-18">Dark Sidebar</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-12">
                        <div class="text-center mt-4">
                            <button class="btn btn-custom">More Demos <i class="mdi mdi-chevron-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end container-fluid -->
        </section>
        <!-- Demo end -->

        <!-- clients start -->
        <section class="section bg-light" id="pricing">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="title text-center mb-4">
                            <h6 class="text-primary small-title">Clients</h6>
                            <h4>What our Users Says</h4>
                            <p class="text-muted">our customers are king!....</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="product-carousel">
                      <?php
                      require_once  ('models/index_model.php');
                      $myData= new Index_model();
                      $displaytestimony=($myData->testimony());
                      foreach ($displaytestimony as $row) {
                        // $servicetext=$value['servicetext'];
                        // $servicedesc=$value['servicedesc'];

                       ?>
                      <div class="items">
                        <div class="">
                            <div class="testi-box p-4 bg-white mt-4 text-center">
                                <p class="text-muted mb-4">"<?php echo $row['testimony'] ?>"</p>
                                <div class="testi-img mb-4 d-flex text-center align-items-center justify-content-center">
                                    <img src="<?php echo $row['clientpicture'] ?>" alt="" class="rounded-circle img-thumbnail">
                                </div>
                                <p class="text-muted mb-1"> - <?php echo $row['clientoccupation']; ?></p>
                                <h5 class="font-18"><?php echo $row['clientname'] ?></h5>

                                <div class="testi-icon">
                                    <i class="mdi mdi-format-quote-open display-2"></i>
                                </div>

                            </div>
                        </div>
                      </div>
                    <?php } ?>
                    </div>
                  </div>

                </div>
                <!-- end row -->


            </div>
            <!-- end container-fluid -->
        </section>
        <!-- clients end -->

        <!-- counter start -->
        <section class="section bg-gradient">
            <div class="container-fluid">
                <div class="row" id="counter">
                    <div class="col-lg-3 col-sm-6">
                        <div class="text-center p-3">
                            <div class="counter-icon text-white-50 mb-4">
                                <i class="pe-7s-add-user display-4"></i>
                            </div>
                            <div class="counter-content">
                                <h2 class="counter_value mb-3 text-white" data-target="<?php echo $clientcount ;?>">0</h2>
                                <h5 class="counter-name text-white">Total Customers</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="text-center p-3">
                            <div class="counter-icon text-white-50 mb-4">
                                <i class="pe-7s-cart display-4"></i>
                            </div>
                            <div class="counter-content">
                                <h2 class="mb-3 text-white"><span class="counter_value" data-target="<?php echo $salescount ;?>">10</span> +</h2>
                                <h5 class="counter-name text-white">Total Sales</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="text-center p-3">
                            <div class="counter-icon text-white-50 mb-4">
                                <i class="pe-7s-mail-open-file display-4"></i>
                            </div>
                            <div class="counter-content">
                                <h2 class="counter_value mb-3 text-white" data-target="793">7</h2>
                                <h5 class="counter-name text-white">Total Allocations</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="text-center p-3">
                            <div class="counter-icon text-white-50 mb-4">
                                <i class="pe-7s-copy-file display-4"></i>
                            </div>
                            <div class="counter-content">
                                <h2 class="counter_value mb-3 text-white" data-target="364">2</h2>
                                <h5 class="counter-name text-white">Total Deed Of Transfer</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- counter end -->

        <!-- pricing start -->
        <section class="section bg-light" id="pricing">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="title text-center mb-4">
                            <h6 class="text-primary small-title">Pricing</h6>
                            <h4><?php echo $pricingheadertext ?></h4>
                            <p class="text-muted"><?php echo $pricingsubtext; ?></p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="product-carousel">
                      <?php
                      require_once  ('models/index_model.php');
                      $myData= new Index_model();
                      $displayoneproject=($myData->oneproject());
                      foreach ($displayoneproject as $row) {
                        // $servicetext=$value['servicetext'];
                        // $servicedesc=$value['servicedesc'];

                       ?>
                        <div class="items">
                          <div class="">
                              <div class="pricing-plans bg-white text-center p-4 mt-4">
                                  <h5 class="plan-title mt-2 mb-4"><?php echo $row['name'] ?></h5>

                                  <div class="plan-price">
                                      <h4 class="mb-3 price"><sup></sup><?php echo $row['price'] ?></h4>
                                      <h5 class="plan-duration text-muted font-18"><?php echo $row['description'] ?></h5>
                                  </div>

                                  <div class="pricing-content p-4 text-muted mb-2">
                                      <?php
                                        if ($row['features1']=="") {
                                        }else {
                                          echo '<p>'.$row['features1'].'</p>';
                                        }
                                        if ($row['features2']=="") {
                                        }else {
                                          echo '<p>'.$row['features2'].'</p>';
                                        }
                                        if ($row['features3']=="") {
                                        }else {
                                          echo '<p>'.$row['features3'].'</p>';
                                        }
                                        if ($row['features4']=="") {
                                        }else {
                                          echo '<p>'.$row['features4'].'</p>';
                                        }
                                        if ($row['features5']=="") {
                                        }else {
                                          echo '<p>'.$row['features5'].'</p>';
                                        }
                                        if ($row['features6']=="") {
                                        }else {
                                          echo '<p>'.$row['features6'].'</p>';
                                        }
                                       ?>
                                  </div>

                                  <div class="pt-4">
                                      <a href="https://www.dreamcityhes.com/land" target="_blank" class="btn btn-custom d-block">Purchase Now</a>
                                  </div>
                              </div>
                          </div>
                        </div>
                      <?php } ?>
                        <!-- <div class="items">
                          <div class="">
                              <div class="pricing-plans bg-white text-center p-4 mt-4">
                                  <h5 class="plan-title mt-2 mb-4">Multiple</h5>

                                  <div class="plan-price">
                                      <h4 class="mb-3 price"><sup><small>$</small></sup>120</h4>
                                      <h5 class="plan-duration text-muted font-18">Per license</h5>
                                  </div>

                                  <div class="pricing-content p-4 text-muted mb-2">
                                      <p>Number of end products 1</p>
                                      <p>Customer support</p>
                                      <p>Free Updates</p>
                                      <p>Monthly updates</p>
                                      <p>24 x 7 Support</p>
                                  </div>

                                  <div class="pt-4">
                                      <a href="#" class="btn btn-custom d-block">Purchase Now</a>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="items">
                          <div class="">
                              <div class="pricing-plans bg-white text-center p-4 mt-4">
                                  <h5 class="plan-title mt-2 mb-4">Extended</h5>

                                  <div class="plan-price">
                                      <h4 class="mb-3 price"><sup><small>$</small></sup>999</h4>
                                      <h5 class="plan-duration text-muted font-18">Per license</h5>
                                  </div>

                                  <div class="pricing-content p-4 text-muted mb-2">
                                      <p>Number of end products 1</p>
                                      <p>Customer support</p>
                                      <p>Free Updates</p>
                                      <p>Monthly updates</p>
                                      <p>24 x 7 Support</p>
                                  </div>

                                  <div class="pt-4">
                                      <a href="#" class="btn btn-custom d-block">Purchase Now</a>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="items">
                          <div class="">
                              <div class="pricing-plans bg-white text-center p-4 mt-4">
                                  <h5 class="plan-title mt-2 mb-4">Extended</h5>

                                  <div class="plan-price">
                                      <h4 class="mb-3 price"><sup><small>$</small></sup>999</h4>
                                      <h5 class="plan-duration text-muted font-18">Per license</h5>
                                  </div>

                                  <div class="pricing-content p-4 text-muted mb-2">
                                      <p>Number of end products 1</p>
                                      <p>Customer support</p>
                                      <p>Free Updates</p>
                                      <p>Monthly updates</p>
                                      <p>24 x 7 Support</p>
                                  </div>

                                  <div class="pt-4">
                                      <a href="#" class="btn btn-custom d-block">Purchase Now</a>
                                  </div>
                              </div>
                          </div>
                        </div> -->
                    </div>
                  </div>



                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </section>
        <!-- pricing end -->

        <!-- contact start -->
        <section class="section" id="contact">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="title text-center mb-5">
                            <h6 class="text-primary small-title">Contact</h6>
                            <h4><?php echo $contactheadertext ?></h4>
                            <p class="text-muted"><?php echo $contactsubtext ?></p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="get-in-touch">
                            <h5>Get in touch</h5>
                            <p class="text-muted mb-5"></p>

                            <div class="mb-3">
                                <div class="get-touch-icon float-start me-3">
                                   <h2><i class="pe-7s-mail text-primary"></i></h2>
                                </div>
                                <div class="overflow-hidden">
                                    <h5 class="font-16 mb-0">E-mail</h5>
                                    <?php
                                    require_once  ('models/index_model.php');
                                    $myData= new Index_model();
                                    $displayemail=($myData->email());
                                    foreach ($displayemail as $row) {
                                      // $servicetext=$value['servicetext'];
                                      // $servicedesc=$value['servicedesc'];

                                     ?>
                                     <p class="text-muted"><?php echo $row['email'] ?></p>
                                   <?php } ?>                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="get-touch-icon float-start me-3">
                                    <h2><i class="pe-7s-phone text-primary"></i></h2>
                                </div>
                                <div class="overflow-hidden">
                                    <h5 class="font-16 mb-0">Phone</h5>
                                    <?php
                                    require_once  ('models/index_model.php');
                                    $myData= new Index_model();
                                    $displayphone=($myData->phone());
                                    foreach ($displayphone as $row) {
                                      // $servicetext=$value['servicetext'];
                                      // $servicedesc=$value['servicedesc'];

                                     ?>
                                     <p class="text-muted"><?php echo $row['phone'] ?></p>
                                   <?php } ?>                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="get-touch-icon float-start me-3">
                                   <h2> <i class="pe-7s-map-marker text-primary"></i></h2>
                                </div>
                                <div class="overflow-hidden">
                                    <h5 class="font-16 mb-0">Address</h5>
                                    <?php
                                    require_once  ('models/index_model.php');
                                    $myData= new Index_model();
                                    $displayaddress=($myData->address());
                                    foreach ($displayaddress as $row) {
                                      // $servicetext=$value['servicetext'];
                                      // $servicedesc=$value['servicedesc'];

                                     ?>
                                     <p class="text-muted"><?php echo $row['address'] ?></p>
                                   <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="custom-form bg-white">
                            <span id="error-msg"></span>
                                <form method="post" name="myForm"  action="<?php echo URL; ?>index/savecomment">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input name="name" id="name" type="text" class="form-control" placeholder="Enter your name...">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email address</label>
                                            <input name="email" id="email" type="email" class="form-control" placeholder="Enter your email...">
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="subject" class="form-label">Subject</label>
                                            <input name="subject" id="subject" type="text" class="form-control" placeholder="Enter Subject...">
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="comments" class="form-label">Message</label>
                                            <textarea name="comment" id="comments" rows="4" class="form-control" placeholder="Enter your message..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-lg-12 text-end">
                                        <input type="submit" id="submit" name="send" class="submitBnt btn btn-custom" value="Send Message" />
                                    </div>
                                </div>
                                <!-- end row -->
                            </form>
                        </div>
                        <!-- end custom-form -->

                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </section>
        <!-- contact end -->

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
                            <p class="text-white-50 mb-4">2022 © DreamcityHES LTD</p>

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
        <script src="<?php echo URL; ?>public/js/owl.carousel.min.js"></script>
        <script src="<?php echo URL; ?>public/js/owl.animate.js"></script>
        <!-- custom js -->
        <script src="<?php echo URL; ?>public/js/app.js"></script>
        <script src="<?php echo URL; ?>public/js/custom.js"></script>
    </body>
