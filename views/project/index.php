<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Realtor a Real Estates and Builders Category Flat bootstrap Responsive website Template | Home :: w3layouts</title>
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
		<h2 class="project">Our Projects</h2>
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
<!-- Page Content -->
<section class="portfolio-header">
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Projects</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
	</div>
</section>
<section class="portfolio-content">
	<h2 class="text-center">Check Our Projects</h2>
	<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
	<div class="container">
 <!-- Projects Row -->

        <div class="row">
					<?php
				 	foreach ($this->getproject as $key => $value) {
				 		// code...
				 		$id=$value['id'];
				 		$picture1=$value['picture1'];
				 		$name=$value['name'];
				 		$displayproject="project/getprojectdetails/".$id;

				 		echo '            <div class="col-md-4 img-portfolio">
				 		                <a href="'.$displayproject.'">
				 							<div class="hover01 column">
				 								<div>
				 									<figure><img class="img-responsive img-hover" src="'.$picture1.'" alt=""></figure>
				 								</div>
				 							</div>
				 		                </a>
				 		                <h3>
				 		                    <a href="projects-item.html">'.$name.'</a>
				 		                </h3>
				 		            </div>';
				 	}
				   ?>
        </div>
        <!-- /.row -->
	</div>
</section>
        <hr>
<section class="portfolio-pages">
	<div class="container">
        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->
	</div>
</section>
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
