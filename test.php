<?php
error_reporting(0);
include 'config.php';
session_start();

if(!$_SESSION['Email'])
{
	header("location:signup.php");
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->



        <meta name="description" content="">
        <meta name="author" content="">
        <title>LN.BUSINESS</title>
        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
       <!-- <link href="assets/css/non-responsive.css" rel="stylesheet">-->


        <!-- Custom styles for this template -->
        <link href="starter-template.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/font/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/custom.css">
        <?php //include 'assets/css/folio.php';?>
         <link rel="stylesheet" href="assets/css/folio.php">
        <link href="//db.onlinewebfonts.com/c/93c4327f0457b01d13b376849536395d?family=Stencil+Std" rel="stylesheet" type="text/css" />
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Pacifico'>
        <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
        <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
        <link rel="stylesheet" href="css/style.css">

        <!--REmodel Begin-->
        <!-- editor-->
         <!--   <script src="//cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>-->
          <script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
          <script src="http://cloud.tinymce.com/stable/tinymce.min.js?apiKey=3x8m7u6eu4r17en245q10ya3a0u7j7695z1elia7zhm2o1xk	"></script>
  <script>
  tinymce.init({
  selector: 'post_data',
  height: 200,
  statusbar: false,
  menubar: false,
  plugins: [
    'advlist autolink lists link image charmap  preview anchor',
    'searchreplace',
    'insertdatetime media '
  ],
  toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  content_css: '//www.tinymce.com/css/codepen.min.css'
});</script>
<!-- include libraries(jQuery, bootstrap) -->
<!-- include summernote css/js-->
<!--<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>-->

<!----------------------------------EDITOR------------------------------>
        <!-- Load local jQuery -->
    <script src="Remodal-1.1.0/libs/jquery-loader.js"></script>

    <!-- Load local QUnit -->
    <link rel="stylesheet" href="Remodal-1.1.0/libs/qunit/qunit/qunit.css" media="screen">
    <script src="Remodal-1.1.0/libs/qunit/qunit/qunit.js"></script>

    <!-- Load local lib and tests -->
    <link rel="stylesheet" href="Remodal-1.1.0/src/remodal.css">
    <link rel="stylesheet" href="Remodal-1.1.0/src/remodal-default-theme.css">
    <script src="Remodal-1.1.0/src/remodal.js"></script>
    <script src="Remodal-1.1.0/remodal_test.js"></script>
    <style>
      .remodal-overlay.without-animation.remodal-is-opening,
      .remodal-overlay.without-animation.remodal-is-closing,
      .remodal.without-animation.remodal-is-opening,
      .remodal.without-animation.remodal-is-closing,
      .remodal-bg.without-animation.remodal-is-opening,
      .remodal-bg.without-animation.remodal-is-closing {
        animation: none;
      }
    </style>

        <!--End Remodel-->
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Stencil+Std" />
     <style>
	 @import url(//db.onlinewebfonts.com/c/93c4327f0457b01d13b376849536395d?family=Stencil+Std);#3 Use font-face declaration Fonts.(http | https)@font-face {font-family: "Stencil Std";
    src: url("//db.onlinewebfonts.com/t/93c4327f0457b01d13b376849536395d.eot");
    src: url("//db.onlinewebfonts.com/t/93c4327f0457b01d13b376849536395d.eot?#iefix") format("embedded-opentype"),
    url("//db.onlinewebfonts.com/t/93c4327f0457b01d13b376849536395d.woff2") format("woff2"),
    url("//db.onlinewebfonts.com/t/93c4327f0457b01d13b376849536395d.woff") format("woff"),
    url("//db.onlinewebfonts.com/t/93c4327f0457b01d13b376849536395d.ttf") format("truetype"),
    url("//db.onlinewebfonts.com/t/93c4327f0457b01d13b376849536395d.svg#Stencil Std") format("svg");
}


font-face {
        font-family: "Lato Black";
        src: url('698242188-Lato-Bla.eot');
        src: url('698242188-Lato-Bla.eot?#iefix') format('embedded-opentype'),
        url('698242188-Lato-Bla.svg#Lato Black') format('svg'),
        url('698242188-Lato-Bla.woff') format('woff'),
        url('698242188-Lato-Bla.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
}
	 </style>

<script type="text/javascript">
function on_profile_hover()
{
	document.getElementById("change_user_ppic").style.display='block';
}

function out_profile_hover()
{
	document.getElementById("change_user_ppic").style.display='none';
}

function dis_cover_pic_edit()
{
	document.getElementById("edit_cover_button").style.display='block';
}

function out_cover_pic_edit()
{
	document.getElementById("edit_cover_button").style.display='none';
}
function change_activetab()
{
	document.getElementById('act_tbw21').style.display='block';
	document.getElementById('act_tbw22').style.display='none';
	document.getElementById('act_tab11').style.display='none';
	document.getElementById('act_tab12').style.display='block';
}

function change_activetab11()
{
	document.getElementById('act_tbw21').style.display='none';
	document.getElementById('act_tbw22').style.display='block';
	document.getElementById('act_tab11').style.display='block';
	document.getElementById('act_tab12').style.display='none';
}
function club_tab8()
{
	document.getElementById('club_tab11').style.display='block';
	document.getElementById('club_tab12').style.display='none';
	document.getElementById('clubingb_tab21').style.display='none';
	document.getElementById('clubingb_tab22').style.display='block';
	document.getElementById('clubtagme_tab31').style.display='none';
	document.getElementById('clubtagme_tab32').style.display='block';
	document.getElementById('clubtag_tab41').style.display='none';
	document.getElementById('clubtag_tab42').style.display='block';
	document.getElementById('clubsettings_tab51').style.display='none';
	document.getElementById('clubsettings_tab52').style.display='block';
}
function clubbind_tab9()
{
	document.getElementById('club_tab11').style.display='none';
	document.getElementById('club_tab12').style.display='block';
	document.getElementById('clubingb_tab21').style.display='block';
	document.getElementById('clubingb_tab22').style.display='none';
	document.getElementById('clubtagme_tab31').style.display='none';
	document.getElementById('clubtagme_tab32').style.display='block';
	document.getElementById('clubtag_tab41').style.display='none';
	document.getElementById('clubtag_tab42').style.display='block';
	document.getElementById('clubsettings_tab51').style.display='none';
	document.getElementById('clubsettings_tab52').style.display='block';
}
function tagme_tab10()
{
	document.getElementById('club_tab11').style.display='none';
	document.getElementById('club_tab12').style.display='block';
	document.getElementById('clubingb_tab21').style.display='none';
	document.getElementById('clubingb_tab22').style.display='block';
	document.getElementById('clubtagme_tab31').style.display='block';
	document.getElementById('clubtagme_tab32').style.display='none';
	document.getElementById('clubtag_tab41').style.display='none';
	document.getElementById('clubtag_tab42').style.display='block';
	document.getElementById('clubsettings_tab51').style.display='none';
	document.getElementById('clubsettings_tab52').style.display='block';
}
function tag_tab11()
{
	document.getElementById('club_tab11').style.display='none';
	document.getElementById('club_tab12').style.display='block';
	document.getElementById('clubingb_tab21').style.display='none';
	document.getElementById('clubingb_tab22').style.display='block';
	document.getElementById('clubtagme_tab31').style.display='none';
	document.getElementById('clubtagme_tab32').style.display='block';
	document.getElementById('clubtag_tab41').style.display='block';
	document.getElementById('clubtag_tab42').style.display='none';
	document.getElementById('clubsettings_tab51').style.display='none';
	document.getElementById('clubsettings_tab52').style.display='block';
}
function settigs_tab12()
{
	document.getElementById('club_tab11').style.display='none';
	document.getElementById('club_tab12').style.display='block';
	document.getElementById('clubingb_tab21').style.display='none';
	document.getElementById('clubingb_tab22').style.display='block';
	document.getElementById('clubtagme_tab31').style.display='none';
	document.getElementById('clubtagme_tab32').style.display='block';
	document.getElementById('clubtag_tab41').style.display='none';
	document.getElementById('clubtag_tab42').style.display='block';
	document.getElementById('clubsettings_tab51').style.display='block';
	document.getElementById('clubsettings_tab52').style.display='none';
}
</script>

      <script type="text/javascript" src="js/scripts.js"></script>
      <link rel="stylesheet" href="../preloaders/css3-preloader-transition-finish/css/main.css">
	<script src="../preloaders/css3-preloader-transition-finish/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body class="paper">
    <?php
    if($_SESSION['sess_count']==0)
	{
		++$_SESSION['sess_count'];
	?>
    <!-- <div id="loader-wrapper" >
			<div id="loader" ></div>

			<div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

   </div> -->
   <?php
	}
   ?>
    <?php
$user_det=mysqli_query($conn,"select * from users where user_id='$_SESSION[id]'");
$usr_dis=mysqli_fetch_array($user_det);
$get_user_ppic_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$_SESSION[id]'");
$fet_ppic=mysqli_fetch_array($get_user_ppic_exe);
$user_personal_dets_exe=mysqli_query($conn,"select * from user_info where user_id='$_SESSION[id]'");
$fet_info=mysqli_fetch_array($user_personal_dets_exe);
$from_count=0;
?>
<nav class="navbar navbar-inverse navbar-fixed-top " style="height:10%;">
						<div class="container">
								<div class="navbar-header ">
										<!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
										</button> -->
										<a class="navbar-brand" href="#" style="font-family:Stencil Std;color: #808080;">
		LN BUSINESS</a>
								</div>
								<div id="navbar" class="collapse navbar-collapse">
										<ul class="nav navbar-nav">

												<li style=" padding-left:30px; padding-top:10px; padding-right:100px; ">
													<div style="background-color:#808080;padding-right:5px;">
														<input type="text" style="width:350px; height:30px;background-color:#808080; border:0px; color:#fff;margin-left:5px;">
														<i class="fa  fa-2x fa-search" style="color:#fff; padding-top:5px;"></i>
												</div>
												</li>
												<li>
													<i class="fa fa-3x fa-id-card " style="padding-left:0px; padding-right:25px; margin-top:15px;"></i>
												</li>
												<li >
														<a href="#" style="font-family:Stencil Std; font-size:24px; padding-left:25px; padding-right:25px; color: #808080;">F</a>
												</li>
												<li>
														<a href="#about" style="font-family:Stencil Std; font-size:24px; padding-left:25px; padding-right:25px; color: #808080;">M</a>
												</li>
																							 <li style="height:50px;line-height:13px;padding-top:3px;">
														<p class="diary" style="padding-top:0px; padding-left:50px;color:#808080">
															<span class="day" style="font-family:Stencil Std; font-size:10px;">friday</span>
															<br>
															<span class="month" style="font-family:Stencil Std; font-size:10px;">March</span>
															<br>
															<span class="year" style="font-family:Stencil Std; font-size:10px;">2017</span></p>
												</li>
												<li style="height:50px;">
														<!--<hr style="width:0px; height:10px;" class="vertical" />-->
														<div style="border-left:2px solid #d3d3d3;margin-top:6px; margin-left:4px; margin-right:4px;height:40px;" class="line_div">
</div>
												</li>
												<li style="height:50px; float:right;">
														<span class="date" style="font-family:Stencil Std; font-size:40px; padding-top:5px; padding-right:10px;color:#808080;">31</span>
												</li>
										</ul>
								</div>
								<!--/.nav-collapse -->
						</div>
				</nav>
<div class="container" style="margin-top:90px; height:600px;">
	<div class="row">
		<div class="col-lg-6 col-md-6" style="border:1px solid #808080; height:550px;">
<div align="center" style="background:#808080;height:40px;margin-top:5px;padding-top:1px; color:#fff"><h4> Disscusion Thread</h4> </div>
<div>

</div>
</div>
<div class="col-lg-6 col-md-6" style="border:1px solid #808080; height:550px;">

<div class="col-lg-12">
<div align="center" style="background:#808080;height:40px;margin-top:5px;padding-top:1px; color:#fff"><h4> COLLEAGUES</h4> </div>
<div id="gallerycontainer" style="background-color:#FFF;">
		<div id="gallery">
				<?php
				$collegus_exe=mysqli_query($conn,"select * from users where company='$usr_dis[company]'");
				while($colle=mysqli_fetch_array($collegus_exe))
				{
						$colle_ppic_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$colle[user_id]'");
						$colle_pic=mysqli_fetch_array($colle_ppic_exe);
						?>

						<div style="width:150px; height:190px;" align="center" id="c_hs">

						<?php
						if($colle_pic['image']!='')
{
?>
								<img src="fb_users/<?php echo $colle['Gender']?>/<?php echo $colle['Email']?>/Profile/<?php echo $colle_pic['image'];?>" width="120" height="90" style="border-radius:50%; padding-left:3px; padding-top:3px;" alt="" />
								<?php
}else
{
?>
								<img src="images/profile/sq.PNG" width="120" height="90" style="border-radius:50%; padding-left:3px; padding-top:3px;" alt=""/>
								<?php
}
?>
								<h4 style=" color:#afdf7c">
										<?php echo $colle['Name'];?></h4>
								<h5 style=" color:#afdf7c">
										<?php echo $colle['designation'];?></h5>
						</div>
						<?php
				}
				?>
				<?php /*?> <div style="width:150px; height:180px;" align="center" id="c_hs">
										<img src="images/profile/6.jpg" width="120" style="border-radius:50%; padding-left:3px; padding-top:3px;" alt="" />
										<h4 style=" color:#afdf7c">
Rajesh</h4>
										<h5 style=" color:#afdf7c">
CEO</h5>
								</div><?php */?>



		</div>


</div>
<br>
<div class="col-lg-12" style="background-color:#fff">
	<div align="center" style="background:#808080;height:40px;margin-top:5px;padding-top:1px; color:#fff"><h4> COMPANY INFO</h4> </div>
	<div class="row" style="padding-top:10px;">
		<div class="col-lg-2">
			<img src="images/profile/logo.jpg" width="80"/>
		</div>
		<div class="col-lg-10">
<div class="col-lg-12">
	<h5><b>Beta Solutions</b></h5>
</div>
<div class="col-lg-12">
<p> nugnasngsfgklnfgvkdnsfvknfdskj</p>
</div>
		</div>

		<div>
</div>
</div>
</div>
</div>
</div>

</div>
</div>

<footer>

</footer>
			</body>

      </html>
