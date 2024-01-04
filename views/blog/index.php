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
		<h2 class="blog">Our Blog</h2>
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
<section class="blog-header">
 <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Blog</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
	</div>
</section>
<section class="blog-content">
	<div class="container">
  <!-- Blog Post Row -->
		<?php
		foreach ($this->getpost as $key => $value) {
			// code...
			$id=$value['id'];
			$imgurl=$value['imgurl'];
			$title=$value['title'];
			$nnpost=$value['post'];
			$npost=substr($nnpost,0, 500);
			$post=$npost.'......';
			$created_at=$value['created_at'];
			$createdday=date("d", strtotime($created_at));
			$createdmonth=date("F", strtotime($created_at));
			$createdYear=date("Y", strtotime($created_at));
			$readmore="blog/getfullpost/".$id;
			echo '
			<div class="row">
					<div class="col-md-1 text-center">
							<p class="icon"><i class="fa fa-camera fa-4x"></i>
							</p>
							<p>'.$createdmonth.' '.$createdday.', '.$createdYear.'</p>
					</div>
					<div class="col-md-5">
							<a href="'.$readmore.'">
				<div class="hover01 column">
					<div>
						<figure><img class="img-responsive img-hover" src="'.$imgurl.'" alt=""></figure>
					</div>
				</div>
							</a>
					</div>
					<div class="col-md-6">
							<h3>
									<a href="'.$readmore.'">'.$title.'</a>
							</h3>
							<p class="p1">by <a>DreamCityHES</a>
							</p>
							<p class="p2">'.$post.'.</p>
							<a class="btn btn-primary btn-outline" href="'.$readmore.'">Read More <i class="fa fa-angle-right"></i></a>
					</div>
			</div>
			<hr>

			';
		}
		 ?>


	</div>
</section>
        <hr>
<section class="blog-pages">
	<div class="container">
        <!-- Pager -->
        <div class="row">
							<?php
															$pageURL="";
															if ($GLOBALS["blogpageno"]>=2) {
																//echo "<script>";
																//echo "alert('me')";
																//echo "</script>";
																echo '<ul class="pager">';
																echo "
																<li class='previous'><a href='?pageno=".($GLOBALS["blogpageno"]-1)."'>&larr; Older</a>
								                </li>
																";
																echo "            </ul>";

																}
																echo "$pageURL";
																if ($GLOBALS["blogpageno"]<$GLOBALS['blogtnopages']) {
																	// code...
																	echo '<ul class="pager">';
																	echo "
																	<li class='next'><a href='?pageno=".($GLOBALS["blogpageno"]+1)."'>Newer &rarr;</a>
																	</li>

																	";
																}
																echo "            </ul>";
															 ?>

								 <!-- /.row -->


        </div>
        <!-- /.row -->
	</div>
</section>
        <hr>


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
