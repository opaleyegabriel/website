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
	$nwebsitebg=$value['background'];
  $websitebg='../../'.$nwebsitebg;
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
		<h2 class="blog-post">Our Blog Post</h2>
	</div>
	<div id="slideshow-banner2">
    <ul>
			<?php
			require_once  ('models/index_model.php');
			$myData= new Index_model();
			$displayslider=($myData->getslider());
			foreach ($displayslider as $key => $value) {
				$nbackground=$value['background'];
        $background='../../'.$nbackground;
				echo '<li class="slideshow-item"><img src="'.$background.'" alt="" /></li>';

			}
			?>
		</ul>
	</div>
</section>
<section class="blog-post-header">
<!-- Page Content -->
    <div class="container">
		<!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Blog Post</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
	</div>
</section>
<section class="blog-post-content">
	<div class="container">
	 <!-- Content Row -->
        <div class="row">
          <?php
          foreach ($this->getfullpost as $key => $value) {
            // code...
            $id=$value['id'];
            $nimgurl=$value['imgurl'];
            $imgurl='../../'.$nimgurl;
            $title=$value['title'];
            $post=$value['post'];
            $created_at=$value['created_at'];
            $createdday=date("d", strtotime($created_at));
            $createdmonth=date("F", strtotime($created_at));
            $createdYear=date("Y", strtotime($created_at));
            $createdtime=date("h:i A", strtotime($created_at));
          }

           ?>
            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->

                <hr>

                <!-- Date/Time -->
                <p class="p5"><i class="fa fa-clock-o"></i> Posted on <?php echo $createdmonth ." ". $createdday .",  ". $createdYear ." at ". $createdtime; ?></p>

                <hr>

                <!-- Preview Image -->
				<div class="hover01 column">
					<div>
						<figure><img class="img-responsive" src="<?php echo $imgurl; ?>" alt=""></figure>
					</div>
				</div>

                <hr>

                <!-- Post Content -->
                <p class="lead"><?php echo $title ?></p>
                <p class="p6"><?php echo $post ?>.</p>
                <!-- <p class="p7">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p> -->
                <!-- <p class="p8">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p> -->
                <!-- <p class="p9">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p> -->

                <hr>

                <!-- Blog Comments -->

                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form  id="savecomment">
						<div class="row">
								<input type="hidden" class="form-control user-name" name="postid" value="<?php echo $id ?>" required/>
							<div class="form-group col-lg-4">
								<input type="text" class="form-control user-name" name="name" placeholder="Your Name" required/>
							</div>
							<div class="form-group col-lg-4">
								<input type="email" class="form-control mail" name="email" placeholder="Your Email" required/>
							</div>
							<div class="form-group col-lg-4">
								<input type="tel" class="form-control pno" name="phone" placeholder="Your Phone Number" required/>
							</div>
							<div class="clearfix"></div>
							<div class="form-group col-lg-12">
								<textarea class="form-control" rows="6" name="comment" placeholder="Your Comment" required/></textarea>
							</div>
							<div class="form-group col-lg-12">
								<button type="submit"  class="btn-outline">Submit</button>
							</div>
						</div>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->
								<div class="getlive">

                <!-- Comment -->
								<?php
								foreach ($this->getcomment as $key => $value) {
									// code...
									$name=$value['name'];
									$email=$value['email'];
									$phone=$value['phone'];
									$comment=$value['comment'];
									$created_at=$value['created_at'];
									$commentday=date("d", strtotime($created_at));
									$commentmonth=date("F", strtotime($created_at));
									$commentYear=date("Y", strtotime($created_at));
									$commenttime=date("h:i A", strtotime($created_at));
									if ($comment=="") {
										// code...
										echo "No comment Availble";
									}else{
									echo '
									<div class="media">
	                    <a class="pull-left" href="#">
							<div class="hover01 column">
								<div>
									<figure><img class="media-object" src="'.URL.'public/images/user.png" alt="" style="border-radius:50%; height:50px; width:50px;"></figure>
								</div>
							</div>
	                    </a>
	                    <div class="media-body">
	                        <h4 class="media-heading">'.$name.'
	                            <small>'.$commentmonth.' '.$commentday .', '.$commentYear.' at '.$commenttime.'</small>
	                        </h4>
													'.$comment.'
	                    </div>
	                </div>
									';
								}
								}
								 ?>
							 </div>


            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4 col-sm-12 col-xs-12 sidebar">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Other Blog Titles</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">
															<?php
															foreach ($this->getposttitle as $key => $value) {
																// code...
																$id=$value['id'];
																$title=$value['title'];
																$readmore="../../blog/getfullpost/".$id;

																echo '
																<li><a href="'.$readmore.'">'.$title.'</a>
                                </li>
																';
															}
															 ?>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <!-- <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div> -->

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
<script type="text/javascript">
// Start Ajax Script for Saving
$(document).on('submit', '#savecomment', function(e){
// alert();
e.preventDefault();
var formData = new FormData(this);
// formData.append("save_ajax", true);
$.ajax({
	type: "POST",
	url: "<?php echo URL ?>blog/save",
	data: new FormData(this),
	// dataType: "dataType";
	processData: false,
	contentType: false,
	success: function (response) {
		var res = jQuery.parseJSON(response);
		if (res.status == 122) {
			// $("#cartbtn").remove();
			// // $("#addedtocartbtn").css("margin-top","0px");
			// // $("#addedtocartbtn").append("eee");
		alert(res.message)

}else if (res.status == 422) {
	alert(res.message)
	// $("#cartbtn").css("display","none");

}
 else if (res.status == 200) {
	// $('#errorMessage').addClass('d-none');
	// $('#errorMessage').text(res.message);
		$('#savecomment')[0].reset();
	// $('.dropify-wrapper').removeClass('has-preview');
	// $("#cartbtn").css("display","none");
	// $("#addedtocartbtn").css("display","block");
	// $("#cartbtn").text=("Added to cart");
	// $("#cartbtn").remove();

	// showMysuccessToast(res.message, 'top-right' );
	$('.getlive').load(location.href + " .getlive")
	}
	}
});
});
// End Ajax Script for Saving
</script>
<!-- /js for skill section -->
<script src="<?php echo URL ?>public/js/main.js"></script>
<!-- /js files -->
</body>
</html>
