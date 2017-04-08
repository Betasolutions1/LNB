<?php
error_reporting(0);
include 'config.php';
session_start();
if(!$_SESSION['Email'])
{
	header("location:signup.php");
}
if($_SESSION['id']==$_GET['id'])
{
	echo "<script>
	
	$(document).ready(function(){
	setInterval(function(){
		$('#begin_folio').load('index.php #begin_folio');
    });
});
	</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>LN.BUSINESS</title>
        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="starter-template.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/font/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/custom.css">
        <link rel="stylesheet" href="assets/css/folio.css">
        <link href="//db.onlinewebfonts.com/c/93c4327f0457b01d13b376849536395d?family=Stencil+Std" rel="stylesheet" type="text/css" />
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Pacifico'>
        <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
        <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
                <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/style.css">
         <!--REmodel Begin-->
        
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
    <!--feed style-->

 <style>
	 *, *:before, *:after {box-sizing:  border-box !important;}


.news_feed {
 -moz-column-width: 18em;
 -webkit-column-width: 18em;
 -moz-column-gap: 1em;
 -webkit-column-gap:1em;

}

.item {
 display: inline-block;
 padding:  .25rem;
 width:  100%;
}

.well {
 position:relative;
 display: block;
}
	 </style>
    
        <style>
            /*#parallelogram {
            width: 150px;
            height: 100px;
            -webkit-transform: skew(20deg);
            -moz-transform: skew(20deg);
            -o-transform: skew(20deg);
            background:#afdf7c;
            }*/
</style>
<script type="text/javascript" src="js/scripts.js"></script>
    </head>
    <body>
    <?php
    $candy_user_exe=mysqli_query($conn,"select * from users where user_id='$_GET[id]'");
	$candy=mysqli_fetch_array($candy_user_exe);
	$candy_pic_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$_GET[id]'");
	$candy_pic=mysqli_fetch_array($candy_pic_exe);
	$candy_info_exe=mysqli_query($conn,"select * from user_info where user_id='$_GET[id]'");
	$candy_info=mysqli_fetch_array($candy_info_exe);
	?>
    
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php" style="font-family:Stencil Std;color:#808080;">
    LN.BUSINESS</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li style=" padding-left:30px; padding-top:10px; padding-right:100px;">
                            <input type="text" laceholder="search" style="width:350px; height:30px">
                        </li>
                        <li class="active">
                            <a href="#" style="font-family:Stencil Std;color:#808080; font-size:24px; padding-left:25px; padding-right:25px;">F</a>
                        </li>
                        <li>
                            <a href="#about" style="font-family:Stencil Std;color:#808080; font-size:24px; padding-left:25px; padding-right:25px;">M</a>
                        </li>
                        <li>
                            <a href="#contact" style="font-family:Stencil Std;color:#808080; font-size:24px; padding-left:25px; padding-right:25px;">S</a>
                        </li>
                        <li>
                            <a href="#" style="font-family:Stencil Std;color:#808080; font-size:24px; padding-left:25px; padding-right:25px;">N</a>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
        <div class="container-fluid paper" style=" padding-top: 30px;">
            <div class="row"> 
                <div class="col-lg-3 col-md-4" align="center">
                    <div class="jumbotron" style="padding-bottom:150px;">
</div>
                    <div class="jumbotron banner_1_sticky sticky">
                    
                         <div id="index_add1">
                     <?php
                    $get_ads_exe=mysqli_query($conn,"select * from advertisments order by RAND() desc limit 1");
					$ads=mysqli_fetch_array($get_ads_exe);
					
					?>
                        <img src="Console/advertises/<?php echo $ads['advertise_image'];?>" style="width:275px; height:400px; margin-left:-60px; margin-top:-45px; margin-bottom:-45px" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 "> 
                    <div class="pst_main_background" style="background-color:#fff;">
                        <div class="row cf_block_height">
                      <ul class="nav nav-tabs"> 
                                <li class="active">
                                    <a href="#tab1" data-toggle="tab"><?php echo $candy['Name'];?></a>
                                </li>                                 
                                <li>
                                    <a href="#tab2" data-toggle="tab">Inked</a>
                                </li>                                 
                                <li>
                                    <a href="#tab3" data-toggle="tab">Noted</a>
                                </li>                                 
                                <li>
                                    <a href="#tab4" data-toggle="tab">Folio</a>
                                </li> 
                                <!--<li>
                                    <a href="#tab5" data-toggle="tab">Ankita</a>
                                </li>-->                                
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab1">
                                    <div class="pst_main_background">
                                       
                                        <?php include 'profile_files/profile_ankitha.php';?>
                                        
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab2">
                                <!--PROFILE INKED BEGIN-->
                                <div class="bg_pst">
                                <div id="profile_inked_posts">
                                	<div class="container">
                                            <div class="news_feed">

 
            <?php
			 
			$count=0;
			$from_count=0;
            $user_profile_post_exet=mysqli_query($conn,"select * from user_post where user_id='".$_GET['id']."'");
			while($user_profile_post=mysqli_fetch_array($user_profile_post_exet))
			{
				++$from_count;
				$count++;
			?>
             <?php
                                                                 $user_profile_bookmark_exe=mysqli_query($conn,"select * from user_post_status where post_id='$user_profile_post[post_id]' AND user_id='$_SESSION[id]'");
							$user_profilr_bookmark=mysqli_fetch_array($user_profile_bookmark_exe);
							$user_profile_post_comment_execu=mysqli_query($conn,"select * from user_post_comment where post_id='$user_profile_post[post_id]'");
				$user_profile_comment_count=mysqli_num_rows($user_profile_post_comment_execu);
                                                                ?>
                          
                            <div class="item ">
                            <div class="well su_shadow" style=" background: #fff; border-radius: 0px; border: 0px solid #fff;padding:0px;">
<!-- box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0); -->
			 <div style="background:#fff;">
                                                     <div>
                                                            <?php
                                                                if($user_profilr_bookmark['status']=='Like')
                                                                {

                                                                    ?>
                                                                    <a href="#"    onClick="unlike(<?php echo $user_profile_post['post_id'];?>,<?php echo $_SESSION['id'];?>);"  >
                                                                <img src="images/others/unnote_1.png" height="90" style="position:absolute;left:400px;top:0px;" /></a>
                                                                 <?php
                                                                }else
                                                                {
                                                                   
                                                                    ?>
                                                                <a href="#" onClick="like(<?php echo $user_profile_post['post_id'];?>,<?php echo $_SESSION['id'];?>);" ><img src="images/others/note.png" height="90" style="position:absolute;left:400px;top:0px;"  /></a>
                                                                <?php
                                                        }
                                                        ?>
                                                            </div>
                                                             <?php
                                                        if($user_profile_post['post_pic'])
                                                        {
                                                            ?>
                                                              <img src="fb_users/<?php echo $candy['Gender'];?>/<?php echo $candy['Email']; ?>/Post/<?php echo $user_profile_post['post_pic'];?>" class="img-responsive" width="400" style="width:100%;height:240px;" />
                                                              <?php
                                                        }
                                                        ?>

                               
                               
                                <div style="width:60px; position:relative;float:right;top:5px;right:30px;margin-right:-10px;">
                                 <a href="profile.php?id=<?php echo $candy['user_id'] ?>" ><!--class="pst_head_left"-->
                                                             <?php 
																if($candy_pic['image']!='')
																{
																?>
                                                                <img src="fb_users/<?php echo $candy['Gender']; ?>/<?php echo $candy['Email']; ?>/Profile/<?php echo $candy_pic['image'];?>" width="80" class="triangle-down" style="height:70px;width:70px;"/>
                                                                <?php
																}else
																{
																	?>
                                                                    <img src="images/profile/sq.PNG" width="80" class="triangle-down" style="height:70px;width:70px;">
                                                                    <?php
																}
																	?>
                                                                </a>
                                
                                </div>
                                <div style=" position: relative; float: right; right: 35px; top: 5px; text-align: right; line-height: 8px; margin-left: -15px; margin-top: 5px;">
                                    <p >
            <a href="profile.php?id=<?php echo $candy['user_id'] ?>"><span style="color:#000; font-family:lato; font-weight:bold;font-size:12px;"><?php echo $candy['Name'];?></span></a><span style="color:#5a5a5a; font-family:lato;font-size:11px;line-height:.1px;">
        <?php /*echo $pud['designation'];*/?></span></p>
				<p >
<a href="profile.php?id=<?php echo $candy['user_id'] ?>"><span style="color:#000; font-family:lato; font-weight:bold;font-size:12px;"><?php/* echo $pud['Name'];*/?></span></a><span style="color:#5a5a5a; font-family:lato;font-size:11px;line-height:.1px;">
<?php echo $candy['designation'];?></span></p>
                                    <p>
          <span style="color:#5a5a5a; font-family:lato;font-size:11px;line-height:.1px;"><?php echo $candy['company'];?></span>/  <span style="color:#5a5a5a; font-family:lato;font-size:11px;line-height:.1px;"><?php echo $candy['industry'];?> </span></p>
                                </div>
                                <div style="padding:15px;">
<br>
<br>
                                    <br>
                                    <hr>
                                    <!--<h3>Letterpress asymmetrical</h3>-->
                                    <p> <?php echo $user_profile_post['post_txt']?></p>
                                    <hr>
																		<br>


                                      <div style="position:absolute;bottom:0px;right:0px;padding:0px;padding-bottom:10px;" lign="center" class=" col-lg-12">
                                                           
                                                                 <div class="col col-lg-6" style="padding:0px;" align="center">
                                                                    <i class="fa fa-pencil-square-o"> <a href="#" style="font-size:13px">+<?php echo $user_profile_comment_count ?></a></i> 
                                                                </div>
                                                                <div class="col col-lg-6" style="padding:0px;" align="center">
                                                                    <i class="fa fa-tag" style=""> <a href="#" style="font-size:13px">+<?php echo $user_profile_post['likes'];?></a></i>
                                                                </div>
                                                                <br />
                                                            </div>
                                </div>
                            </div>
                             </div>
                          </div>                 
             
             
                                          
                                           
                                           
                                           
                                            <?php
				}
											?>
                                            </div></div>

</div>
</div>
                                   
                                    
                                 <!--END PROFILE INKED-->   
                                </div>
                                <div class="tab-pane" id="tab3">
                                <!--BEGIN PROFILE NOTED POSTS-->
                                    <div class="bg_pst">
                                    <div id="profile_noted_post">
                                    <div class="container">
                                            <div class="news_feed">

<?php
            $user_noted_posts_exe=mysqli_query($conn,"select * from user_post_status where user_id='$_GET[id]'");
			while($ret_user_noted=mysqli_fetch_array($user_noted_posts_exe))
			{
				++$from_count;
			?>
            
            <?php
			 
			$count=0;
            $user_noted_post_exet=mysqli_query($conn,"select * from user_post where post_id='".$ret_user_noted['post_id']."'");
			$user_noted_post=mysqli_fetch_array($user_noted_post_exet);
			
				$count++;
			?>
            <?php 
			$user_noted_photo_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$user_noted_post[user_id]'");
			$user_noted_ppic=mysqli_fetch_array($user_noted_photo_exe);
			?>
            
            <?php
            $user_noted_pers_de_ex=mysqli_query($conn,"select * from users where user_id='".$user_noted_post['user_id']."'");
			$user_pos_nrty=mysqli_fetch_array($user_noted_pers_de_ex);
			?>         
            
            <?php
                                                                $candy_noted_exe=mysqli_query($conn,"select * from user_post_status where post_id='$user_noted_post[post_id]' AND user_id='$_SESSION[id]'");
				$can=mysqli_fetch_array($candy_noted_exe);
				$cany=mysqli_num_rows($candy_noted_exe);
				 $user_noted_post_comment_execu=mysqli_query($conn,"select * from user_post_comment where post_id='$user_noted_post[post_id]'");
				$user_noted_comment_count=mysqli_num_rows($user_noted_post_comment_execu);
                                                                ?>
           
             <div class="item ">
              
                            <div class="well su_shadow" style=" background: #fff; border-radius: 0px; border: 0px solid #fff;padding:0px;">
<!-- box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0); -->
			 <div style="background:#fff;">
                                                     
                                                             <?php
                                                        if($user_noted_post['post_pic']!='')
                                                        {
                                                            ?>
                                                              <img src="fb_users/<?php echo $user_pos_nrty['Gender'];?>/<?php echo $user_pos_nrty['Email']; ?>/Post/<?php echo $user_noted_post['post_pic'];?>" class="img-responsive" width="400" style="width:100%;height:240px;" />
                                                              <?php
                                                        }
                                                        ?>
                                                            
                                                            
                                                            

                               
                               
                                <div style="width:60px; position:relative;float:right;top:5px;right:30px;margin-right:-10px;">
                                
                                <a href="profile.php?id=<?php echo $user_pos_nrty['user_id'] ?>" ><!--class="pst_head_left"-->
                                                             <?php 
																if($candy_pic['image']!='')
																{
																?>
                                                                <img src="fb_users/<?php echo $user_pos_nrty['Gender']; ?>/<?php echo $user_pos_nrty['Email']; ?>/Profile/<?php echo $user_noted_ppic['image'];?>" width="80" class="triangle-down" style="height:70px;width:70px;" />
                                                                <?php
																}else
																{
																	?>
                                                                    <img src="images/profile/sq.PNG" width="80" class="triangle-down" style="height:70px;width:70px;">
                                                                    <?php
																}
																	?>
                                                                </a>
                                
                                
                                 
                                
                                </div>
                                <div style=" position: relative; float: right; right: 35px; top: 5px; text-align: right; line-height: 8px; margin-left: -15px; margin-top: 5px;">
                                    <p >
            <a href="profile.php?id=<?php echo $user_pos_nrty['user_id'] ?>"><span style="color:#000; font-family:lato; font-weight:bold;font-size:12px;"><?php echo $user_pos_nrty['Name'];?></span></a><span style="color:#5a5a5a; font-family:lato;font-size:11px;line-height:.1px;">
        <?php /*echo $pud['designation'];*/?></span></p>
				<p >
<a href="profile.php?id=<?php echo $user_pos_nrty['user_id'] ?>"><span style="color:#000; font-family:lato; font-weight:bold;font-size:12px;"><?php/* echo $pud['Name'];*/?></span></a><span style="color:#5a5a5a; font-family:lato;font-size:11px;line-height:.1px;">
<?php echo $user_pos_nrty['designation'];?></span></p>
                                    <p>
          <span style="color:#5a5a5a; font-family:lato;font-size:11px;line-height:.1px;"><?php echo $user_pos_nrty['company'];?></span>/  <span style="color:#5a5a5a; font-family:lato;font-size:11px;line-height:.1px;"><?php echo $user_pos_nrty['industry'];?> </span></p>
                          <div style="z-index:9999;">
                                                            <?php
                                                                if($can['status']=='Like')
                                                                {

                                                                    ?>
                                                                    <a href="#"    onClick="return unlike(<?php echo $user_noted_post['post_id'];?>,<?php echo $_SESSION['id'];?>);"  >
                                                                <img src="images/others/unnote_1.png" height="90" style="position:absolute;left: 320px;top: 45px;" /></a>
                                                                 <?php
                                                                }else
                                                                {
                                                                   
                                                                    ?>
                                                                <a href="#"  onClick="return like(<?php echo $user_noted_post['post_id'];?>,<?php echo $_SESSION['id'];?>);" ><img src="images/others/note.png" height="90" style="position:absolute;left: 320px;top: 45px;"  /></a>
                                                                <?php
                                                        }
                                                        ?>
                                                            </div>
                                </div>
                                <div style="padding:15px;">
<br>
<br>
                                    <br>
                                    <hr>
                                    <!--<h3>Letterpress asymmetrical</h3>-->
                                    <p> <?php echo $user_noted_post['post_txt']?></p>
                                    <hr>
																		<br>


                                      <div style="position:absolute;bottom:0px;right:0px;padding:0px;padding-bottom:10px;" lign="center" class=" col-lg-12">
                                                           
                                                                 <div class="col col-lg-6" style="padding:0px;" align="center">
                                                                    <i class="fa fa-pencil-square-o"> <a href="#" style="font-size:13px">+<?php echo $user_noted_comment_count; ?></a></i> 
                                                                </div>
                                                                <div class="col col-lg-6" style="padding:0px;" align="center">
                                                                    <i class="fa fa-tag" style=""> <a href="#" style="font-size:13px">+<?php echo $user_noted_post['likes'];?></a></i>
                                                                </div>
                                                                <br />
                                                            </div>
                                </div>
                            </div>
                             </div>
                             
                          </div>                 
           
           
           
           
            
                        
                                            <?php
				}
											?>
                                            
                                            </div></div>
</div>
</div>
                                 <!--PROFILE NOTED POSTS END-->
                                </div>
                                <div class="tab-pane" id="tab4">
                                     <?php include 'profile_files/profile_folio.php';?>
                                </div>
                              <?php /*?>  <div class="tab-pane" id="tab5">
                                   <?php include 'Dairy_files/ankitha.php';?>
                                </div><?php */?>
                            </div>
                        
                           
                        </div>
                    </div>
                </div>                 
                <div class="col-md-3 col-lg-3 b_s">
                    <div class="row">
                        <div>
                            <img class="b_s" src="../assets//images/Banner_1.jpg" style="width:200px; height:900px;" />
                        </div>
                    </div>
                    <!-- Widget -->
                    <!-- // Widget END -->
                </div>                 
            </div>
            <div>
</div>
        </div>
        <!-- /.container -->
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
        <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
        <script src="js/index.js"></script>
    </body>
</html>
