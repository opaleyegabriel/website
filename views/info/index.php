<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo URL ?>public/admin/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo URL ?>public/admin/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="<?php echo URL ?>public/admin/css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo URL ?>public/admin/css/style.green.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo URL ?>public/admin/css/custom.css">
    <link rel="stylesheet" href="<?php echo URL ?>public/admin/css/accordion.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo URL ?>public/admin/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <header class="header">
      <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn">Close <i class="fa fa-close"></i></div>
            <form id="searchForm" action="#">
              <div class="form-group">
                <input type="search" name="search" placeholder="What are you searching for...">
                <button type="submit" class="submit">Search</button>
              </div>
            </form>
          </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="index.html" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">DreamCity</strong><strong>HES</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">D</strong><strong>H</strong></div></a>
            <!-- Sidebar Toggle Btn-->
            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          </div>
          <div class="right-menu list-inline no-margin-bottom">
            <div class="list-inline-item"><a href="#" class="search-open nav-link"><i class="icon-magnifying-glass-browser"></i></a></div>
            <div class="list-inline-item dropdown"><a id="navbarDropdownMenuLink1" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link messages-toggle"><i class="icon-email"></i><span class="badge dashbg-1">5</span></a>
              <div aria-labelledby="navbarDropdownMenuLink1" class="dropdown-menu messages"><a href="#" class="dropdown-item message d-flex align-items-center">
                  <div class="profile"><img src="<?php echo URL ?>public/admin/img/avatar-3.jpg" alt="..." class="img-fluid">
                    <div class="status online"></div>
                  </div>
                  <div class="content">   <strong class="d-block">Nadia Halsey</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">9:30am</small></div></a><a href="#" class="dropdown-item message d-flex align-items-center">
                  <div class="profile"><img src="<?php echo URL ?>public/admin/img/avatar-2.jpg" alt="..." class="img-fluid">
                    <div class="status away"></div>
                  </div>
                  <div class="content">   <strong class="d-block">Peter Ramsy</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">7:40am</small></div></a><a href="#" class="dropdown-item message d-flex align-items-center">
                  <div class="profile"><img src="<?php echo URL ?>public/admin/img/avatar-1.jpg" alt="..." class="img-fluid">
                    <div class="status busy"></div>
                  </div>
                  <div class="content">   <strong class="d-block">Sam Kaheil</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">6:55am</small></div></a><a href="#" class="dropdown-item message d-flex align-items-center">
                  <div class="profile"><img src="<?php echo URL ?>public/admin/img/avatar-5.jpg" alt="..." class="img-fluid">
                    <div class="status offline"></div>
                  </div>
                  <div class="content">   <strong class="d-block">Sara Wood</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">10:30pm</small></div></a><a href="#" class="dropdown-item text-center message"> <strong>See All Messages <i class="fa fa-angle-right"></i></strong></a></div>
            </div>
            <!-- Tasks-->
            <div class="list-inline-item dropdown"><a id="navbarDropdownMenuLink2" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link tasks-toggle"><i class="icon-new-file"></i><span class="badge dashbg-3">9</span></a>
              <div aria-labelledby="navbarDropdownMenuLink2" class="dropdown-menu tasks-list"><a href="#" class="dropdown-item">
                  <div class="text d-flex justify-content-between"><strong>Task 1</strong><span>40% complete</span></div>
                  <div class="progress">
                    <div role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-1"></div>
                  </div></a><a href="#" class="dropdown-item">
                  <div class="text d-flex justify-content-between"><strong>Task 2</strong><span>20% complete</span></div>
                  <div class="progress">
                    <div role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-3"></div>
                  </div></a><a href="#" class="dropdown-item">
                  <div class="text d-flex justify-content-between"><strong>Task 3</strong><span>70% complete</span></div>
                  <div class="progress">
                    <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-2"></div>
                  </div></a><a href="#" class="dropdown-item">
                  <div class="text d-flex justify-content-between"><strong>Task 4</strong><span>30% complete</span></div>
                  <div class="progress">
                    <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-4"></div>
                  </div></a><a href="#" class="dropdown-item">
                  <div class="text d-flex justify-content-between"><strong>Task 5</strong><span>65% complete</span></div>
                  <div class="progress">
                    <div role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-1"></div>
                  </div></a><a href="#" class="dropdown-item text-center"> <strong>See All Tasks <i class="fa fa-angle-right"></i></strong></a>
              </div>
            </div>
            <!-- Tasks end-->
            <!-- Megamenu-->
            <div class="list-inline-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="nav-link">Mega <i class="fa fa-ellipsis-v"></i></a>
              <div class="dropdown-menu megamenu">
                <div class="row">
                  <div class="col-lg-3 col-md-6"><strong class="text-uppercase">Elements Heading</strong>
                    <ul class="list-unstyled mb-3">
                      <li><a href="#">Lorem ipsum dolor</a></li>
                      <li><a href="#">Sed ut perspiciatis</a></li>
                      <li><a href="#">Voluptatum deleniti</a></li>
                      <li><a href="#">At vero eos</a></li>
                      <li><a href="#">Consectetur adipiscing</a></li>
                      <li><a href="#">Duis aute irure</a></li>
                      <li><a href="#">Necessitatibus saepe</a></li>
                      <li><a href="#">Maiores alias</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-3 col-md-6"><strong class="text-uppercase">Elements Heading</strong>
                    <ul class="list-unstyled mb-3">
                      <li><a href="#">Lorem ipsum dolor</a></li>
                      <li><a href="#">Sed ut perspiciatis</a></li>
                      <li><a href="#">Voluptatum deleniti</a></li>
                      <li><a href="#">At vero eos</a></li>
                      <li><a href="#">Consectetur adipiscing</a></li>
                      <li><a href="#">Duis aute irure</a></li>
                      <li><a href="#">Necessitatibus saepe</a></li>
                      <li><a href="#">Maiores alias</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-3 col-md-6"><strong class="text-uppercase">Elements Heading</strong>
                    <ul class="list-unstyled mb-3">
                      <li><a href="#">Lorem ipsum dolor</a></li>
                      <li><a href="#">Sed ut perspiciatis</a></li>
                      <li><a href="#">Voluptatum deleniti</a></li>
                      <li><a href="#">At vero eos</a></li>
                      <li><a href="#">Consectetur adipiscing</a></li>
                      <li><a href="#">Duis aute irure</a></li>
                      <li><a href="#">Necessitatibus saepe</a></li>
                      <li><a href="#">Maiores alias</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-3 col-md-6"><strong class="text-uppercase">Elements Heading</strong>
                    <ul class="list-unstyled mb-3">
                      <li><a href="#">Lorem ipsum dolor</a></li>
                      <li><a href="#">Sed ut perspiciatis</a></li>
                      <li><a href="#">Voluptatum deleniti</a></li>
                      <li><a href="#">At vero eos</a></li>
                      <li><a href="#">Consectetur adipiscing</a></li>
                      <li><a href="#">Duis aute irure</a></li>
                      <li><a href="#">Necessitatibus saepe</a></li>
                      <li><a href="#">Maiores alias</a></li>
                    </ul>
                  </div>
                </div>
                <div class="row megamenu-buttons text-center">
                  <div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link dashbg-1"><i class="fa fa-clock-o"></i><strong>Demo 1</strong></a></div>
                  <div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link dashbg-2"><i class="fa fa-clock-o"></i><strong>Demo 2</strong></a></div>
                  <div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link dashbg-3"><i class="fa fa-clock-o"></i><strong>Demo 3</strong></a></div>
                  <div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link dashbg-4"><i class="fa fa-clock-o"></i><strong>Demo 4</strong></a></div>
                  <div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link bg-danger"><i class="fa fa-clock-o"></i><strong>Demo 5</strong></a></div>
                  <div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link bg-info"><i class="fa fa-clock-o"></i><strong>Demo 6</strong></a></div>
                </div>
              </div>
            </div>
            <!-- Megamenu end     -->
            <!-- Languages dropdown    -->
            <div class="list-inline-item dropdown"><a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle"><img src="<?php echo URL ?>public/admin/img/flags/16/GB.png" alt="English"><span class="d-none d-sm-inline-block">English</span></a>
              <div aria-labelledby="languages" class="dropdown-menu"><a rel="nofollow" href="#" class="dropdown-item"> <img src="<?php echo URL ?>public/admin/img/flags/16/DE.png" alt="English" class="mr-2"><span>German</span></a><a rel="nofollow" href="#" class="dropdown-item"> <img src="<?php echo URL ?>public/admin/img/flags/16/FR.png" alt="English" class="mr-2"><span>French  </span></a></div>
            </div>
            <!-- Log out               -->
            <div class="list-inline-item logout">                   <a id="logout" href="login.html" class="nav-link">Logout <i class="icon-logout"></i></a></div>
          </div>
        </div>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="<?php echo URL ?>public/admin/img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Mark Stephen</h1>
            <p>Web Designer</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li ><a href="<?php echo URL; ?>myadmindashboard"> <i class="icon-home"></i>Home </a></li>
                <li ><a href="<?php echo URL; ?>changebackgrounds"> <i class="icon-home"></i>Change Backgrounds </a></li>
                <li ><a href="<?php echo URL; ?>changetext"> <i class="icon-home"></i>Change Text </a></li>
                <li ><a href="<?php echo URL; ?>prices"> <i class="icon-home"></i>Prices </a></li>
                <li><a href="<?php echo URL; ?>services"> <i class="icon-home"></i>Services </a></li>
                <li ><a href="<?php echo URL; ?>team"> <i class="icon-home"></i>Team </a></li>
                <li class="active"><a href="<?php echo URL; ?>info"> <i class="icon-home"></i>Info </a></li>
                <li ><a href="<?php echo URL; ?>updateabt"> <i class="icon-home"></i>About Page </a></li>
                <li ><a href="<?php echo URL; ?>testimonies"> <i class="icon-home"></i>Testimony </a></li>
                <li ><a href="<?php echo URL; ?>blogcreate"> <i class="icon-home"></i>Blog </a></li>
      </nav>
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Dashboard</h2>
          </div>
        </div>
        <section class="no-padding-top no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12 block ">
                <div class="acod-head">
			               <h6 class="acod-title">
                       <a data-toggle="collapse" href="#faq1" class="collapsed" data-parent="#faq1">
									      Change Address 1
                      </a>
                    </h6>
                    <div id="faq1" class="acod-body collapse">
                      <div class="acod-content">
                        <form class="edit-profile m-b30" method="post" enctype="multipart/form-data" action="<?php echo URL; ?>info/updateaddress1">
                          <div class="form-group row"  >
													<label class="col-lg-2 col-md-2 col-sm-6 col-form-label">Change Address 1 </label>
													<div class="col-lg-6 col-md-6 col-sm-6 " style="margin-bottom:15px;">
														<input type="text" class="form-control" name="address1" placeholder="Change Address 1" >
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 ">
														<button type="submit" class="btn">Save changes</button>
													</div>
												</div>
                      </form>
                    </div>
                </div>
              </div><br>
                <div class="acod-head">
			               <h6 class="acod-title">
                       <a data-toggle="collapse" href="#faq2" class="collapsed" data-parent="#faq1">
									      Change Address 2
                      </a>
                    </h6>
                    <div id="faq2" class="acod-body collapse">
                      <div class="acod-content">
                        <form class="edit-profile m-b30" method="post" enctype="multipart/form-data" action="<?php echo URL; ?>info/updateaddress2">
                          <div class="form-group row"  >
													<label class="col-lg-2 col-md-2 col-sm-6 col-form-label">Change Address 2 </label>
													<div class="col-lg-6 col-md-6 col-sm-6 " style="margin-bottom:15px;">
														<input type="text" class="form-control" name="address2" placeholder="Change Address 2" >
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 ">
														<button type="submit" class="btn">Save changes</button>
													</div>
												</div>
                      </form>
                    </div>
                  </div>
                  </div><br>
                <div class="acod-head">
			               <h6 class="acod-title">
                       <a data-toggle="collapse" href="#faq3" class="collapsed" data-parent="#faq1">
									      Change Phone Number 1
                      </a>
                    </h6>
                    <div id="faq3" class="acod-body collapse">
                      <div class="acod-content">
                        <form class="edit-profile m-b30" method="post" enctype="multipart/form-data" action="<?php echo URL; ?>info/updatephone1">
                          <div class="form-group row"  >
													<label class="col-lg-2 col-md-2 col-sm-6 col-form-label">Change Phone Number 1 </label>
													<div class="col-lg-6 col-md-6 col-sm-6 " style="margin-bottom:15px;">
														<input type="number" class="form-control" name="phone1" placeholder="Change Phone Number 1" >
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 ">
														<button type="submit" class="btn">Save changes</button>
													</div>
												</div>
                      </form>
                    </div>
                  </div>
                  </div><br>
                <div class="acod-head">
			               <h6 class="acod-title">
                       <a data-toggle="collapse" href="#faq4" class="collapsed" data-parent="#faq1">
									      Change Phone Number 2
                      </a>
                    </h6>
                    <div id="faq4" class="acod-body collapse">
                      <div class="acod-content">
                        <form class="edit-profile m-b30" method="post" enctype="multipart/form-data" action="<?php echo URL; ?>info/updatephone2">
                          <div class="form-group row"  >
													<label class="col-lg-2 col-md-2 col-sm-6 col-form-label">Change Phone Number 2 </label>
													<div class="col-lg-6 col-md-6 col-sm-6 " style="margin-bottom:15px;">
														<input type="number" class="form-control" name="phone2" placeholder="Change Phone Number 2" >
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 ">
														<button type="submit" class="btn">Save changes</button>
													</div>
												</div>
                      </form>
                    </div>
                  </div>
                  </div><br>
                <div class="acod-head">
			               <h6 class="acod-title">
                       <a data-toggle="collapse" href="#faq5" class="collapsed" data-parent="#faq1">
									      Change Email Address
                      </a>
                    </h6>
                    <div id="faq5" class="acod-body collapse">
                      <div class="acod-content">
                        <form class="edit-profile m-b30" method="post" enctype="multipart/form-data" action="<?php echo URL; ?>info/updateemail">
                          <div class="form-group row"  >
													<label class="col-lg-2 col-md-2 col-sm-6 col-form-label">Change Email Address </label>
													<div class="col-lg-6 col-md-6 col-sm-6 " style="margin-bottom:15px;">
														<input type="email" class="form-control" name="email" placeholder="Change Email Address" >
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 ">
														<button type="submit" class="btn">Save changes</button>
													</div>
												</div>
                      </form>
                    </div>
                  </div>
                  </div><br>
                <div class="acod-head">
			               <h6 class="acod-title">
                       <a data-toggle="collapse" href="#faq6" class="collapsed" data-parent="#faq1">
									      Change first (index) Our Contact Subtext
                      </a>
                    </h6>
                    <div id="faq6" class="acod-body collapse">
                      <div class="acod-content">
                        <form class="edit-profile m-b30" method="post" enctype="multipart/form-data" action="<?php echo URL; ?>changetext/updatecontactsubtxt">
                          <div class="form-group row"  >
													<label class="col-lg-2 col-md-2 col-sm-6 col-form-label">Change Our Contact Subtext </label>
													<div class="col-lg-6 col-md-6 col-sm-6 " style="margin-bottom:15px;">
														<textarea class="form-control" name="contactsubtxt" placeholder="Change Our Contact Subtext" rows="3" cols="80"></textarea>
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 ">
														<button type="submit" class="btn">Save changes</button>
													</div>
												</div>
                      </form>
                    </div>
                  </div>
								</div><br>
                <div class="acod-head">
			               <h6 class="acod-title">
                       <a data-toggle="collapse" href="#faq7" class="collapsed" data-parent="#faq1">
									      Change first(index) Contact Background
                      </a>
                    </h6>
                    <div id="faq7" class="acod-body collapse">
                      <div class="acod-content">
                        <form class="edit-profile m-b30" method="post" enctype="multipart/form-data" action="<?php echo URL; ?>changebackgrounds/updatecontactbg">
                          <div class="form-group row"  >
													<label class="col-lg-2 col-md-2 col-sm-6 col-form-label">Change Contact Background</label>
													<div class="col-lg-6 col-md-6 col-sm-6 " style="margin-bottom:15px;">
														<input class="form-control" type="file" value="" name="contact" placeholder="Change Contact Background">
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 ">
														<button type="submit" class="btn">Save changes</button>
													</div>
												</div>
                      </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>

        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
              <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
               <p class="no-margin-bottom">2018 &copy; Your company. Download From <a target="_blank" href="https://templateshub.net">Templates Hub</a>.</p>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="<?php echo URL ?>public/admin/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo URL ?>public/admin/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="<?php echo URL ?>public/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo URL ?>public/admin/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="<?php echo URL ?>public/admin/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo URL ?>public/admin/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?php echo URL ?>public/admin/js/charts-home.js"></script>
    <script src="<?php echo URL ?>public/admin/js/front.js"></script>
  </body>
</html>
