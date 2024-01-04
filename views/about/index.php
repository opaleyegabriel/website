<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Realtor a Real Estates and Builders  | Home :: DreamCityHES Ltd</title>
<!--mobile apps-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Realtor Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- fonts -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css">
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
<!-- /fonts -->
<!-- css files -->
<link href="<?php echo URL ?>public/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo URL ?>public/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo URL ?>public/css/progressbar.css" rel="stylesheet" type="text/css" media="all"/>
<link href="<?php echo URL ?>public/css/team.css" rel="stylesheet" type="text/css" media="all"/>
<link href="<?php echo URL ?>public/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- /css files -->
<!-- js files -->
<script src="<?php echo URL ?>public/js/modernizr.custom.js"></script>
<!-- /js files -->
</head>
<?php
require_once  ('models/about_model.php');
$myData= new About_model();
$displaywebsitebg=($myData->getwebsitebg());
foreach ($displaywebsitebg as $key => $value) {
	$websitebg=$value['background'];
}
?>
<body class="extra-page" style="background:url(<?php echo $websitebg; ?>)no-repeat;     background-attachment: fixed;
    background-position: center;
    background-size: 100% 100%;
    -webkit-background-size: 100% 100%;
    -moz-background-size: 100% 100%;
    -o-background-size: 100% 100%;" >
<!-- navigation -->
<section class="navigation">
	<div class="navbar-wrapper">
		<div class="container">
			<nav class="navbar navbar-inverse navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo URL; ?>index" id="hideandshow" ><h1>DreamCityHES</h1></a>
						<a class="navbar-brand" href="<?php echo URL; ?>index"><h1><img src="<?php echo URL ?>public/images/logo.png" alt="" /></h1></a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right cl-effect-14">
							<li><a href="<?php echo URL; ?>index">Home</a></li>
							<li><a href="<?php echo URL; ?>about">About</a></li>
							<li><a href="<?php echo URL; ?>project">Projects</a></li>
							<li><a href="<?php echo URL; ?>blog">Blog</a></li>
							<!-- <li><a href="<?php echo URL; ?>project">Shortcodes</a></li> -->
							<li><a href="<?php echo URL; ?>contact">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
    </div>
</section>
<!-- /navigation -->
<!-- banner section -->
<section class="banner">
	<div class="banner-info">
		<h2 class="about">About Us</h2>
	</div>
	<div id="slideshow-banner2">
		<ul>
			<?php
			require_once  ('models/index_model.php');
			$myData= new Index_model();
			$displayslider=($myData->getslider());
			foreach ($displayslider as $key => $value) {
				$background=$value['background'];
				echo '<li class="slideshow-item"><img src="'.$background.'" alt="" /></li>';

			}
			?>
		</ul>
	</div>
</section>
<section class="about-header">
	<div class="container">
		<!-- Page Heading/Breadcrumbs -->
		<div class="row">
			<div class="col-lg-12">
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li class="active">About Us</li>
				</ol>
			</div>
		</div>
		<!-- /.row -->
	</div>
</section>
<section class="about-content">
	<div class="container">
		<!-- Intro Content -->
		<div class="row">
			<div class="col-md-6">
				<div class="hover01 column">
					<div>
						<?php
						foreach ($this->getabtpicture as $key => $value) {
							// code...
							$abtpicture=$value['abtpicture'];
						}
						 ?>
						<figure><img class="img-responsive" src="<?php echo $abtpicture ?>" alt=""></figure>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<?php
				foreach ($this->getabtheader as $key => $value) {
					// code...
					$abtheader=$value['abtheader'];
				}
				foreach ($this->getabtcontent as $key => $value) {
					// code...
					$abtcontent=$value['abtcontent'];
				}
				 ?>
				<h3><?php echo $abtheader; ?></h3>
				<p><?php echo $abtcontent; ?></p>
			</div>
		</div>
	</div>
</section>
<!-- Our Customers -->
<section class="customers">
	<h3 class="text-center">Our Customers</h3>
	<!-- <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> -->
	<div class="container">
	<hr>
		<div class="row">
			<?php
			foreach ($this->getcustomers as $key => $value) {
				// code...
				$clientname=$value['clientname'];
				$imgurl=$value['imgurl'];
				echo '
				<div class="col-md-2 col-sm-4 col-xs-6">
		<div class="hover01 column">
			<div>
				<figure><img class="img-responsive customer-img" src="'.$imgurl.'" alt=""></figure>
			</div>
		</div>
		<h4 class="cust1">'.$clientname.'</h4>
				</div>
				';
			}
			 ?>
        </div>
        <!-- /.row -->
	</div>
</section>
<!-- testimonial section -->
<?php
require_once  ('models/index_model.php');
$myData= new Index_model();
$displaytestimonyimg=($myData->gettestimonyimg());
foreach ($displaytestimonyimg as $key => $value) {
	$testimonybackground=$value['background'];

}
?>
<?php
require_once  ('models/index_model.php');
$myData= new Index_model();
$displaycustomerssubtxt=($myData->getcustomerssubtxt());
foreach ($displaycustomerssubtxt as $key => $value) {
	$customerssubtxt=$value['txt'];

}
?>
<?php
/*
<section class="testimonials" style="background:url(<?php echo $testimonybackground; ?>) no-repeat; background-attachment: fixed;
    background-position: center;
    background-size: 100% 100%;
    -webkit-background-size: 100% 100%;">
	<h2 class="text-center">What Our Customers Say</h2>
	<p class="text-center"><?php echo $customerssubtxt ?></p>
	<div class="container">
		<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="<?php echo URL ?>public/images/test1.png" alt="test1" class="img-responsive">
					<h4 class="text-center">Johnny Blaze - Business Man</h4>
					<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>
				<div class="item">
					<img src="<?php echo URL ?>public/images/test2.png" alt="test1" class="img-responsive">
					<h4 class="text-center">Kate Winslet - Executive Manager</h4>
					<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>
				<div class="item">
					<img src="<?php echo URL ?>public/images/test3.png" alt="test1" class="img-responsive">
					<h4 class="text-center">Max Payne - CEO</h4>
					<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>
				<div class="item">
					<img src="<?php echo URL ?>public/images/test4.png" alt="test1" class="img-responsive">
					<h4 class="text-center">Britney Spears - Marketing Manager</h4>
					<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>
			</div>
			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</section>
*/
?>
<!-- /testimonial section -->
<section class="footer">
	<p>© 2023 DreamcityHes. All Rights Reserved </p>
</section>
<a href="#0" class="cd-top">Top</a>
<!-- js files -->
<script src="<?php echo URL ?>public/js/jquery.min.js"></script>
<script src="<?php echo URL ?>public/js/bootstrap.min.js"></script>
<script src="<?php echo URL ?>public/js/SmoothScroll.min.js"></script>
<!-- js for banner -->
<script type="text/javascript" src="<?php echo URL ?>public/js/jquery.slide.js"></script>
<script type="text/javascript">
	$('#slideshow-banner2').slide({
		cdTime : 5000,
	    controllerLeftButton : "<?php echo URL ?>public/images/left.png",
	    controllerRightButton : "<?php echo URL ?>public/images/right.png"
	});
</script>
<!-- /js for banner -->
<!-- js for skill section -->
<script src="<?php echo URL ?>public/js/progressbar.js"></script>
<script>
    // Display the progress bar calling progressbar.js
	$('.progressbarPhp').progressBar({
		shadow : true,
		percentage : false,
		animation : true,
		animateTarget : true,
		barColor : "rgb(86, 79, 77)",
	});
	//Menu
	$(".spinDown").click(function() {
		var target = $(this).data("target");
		var scrollFix = -80;
		target = "#" + target;
		$("html,body").animate({
			scrollTop : $(target).offset().top + scrollFix
		}, 1000);
		return false;
	});
</script>
<!-- /js for skill section -->
<script src="<?php echo URL ?>public/js/main.js"></script>
<!-- /js files -->
</body>
</html>
