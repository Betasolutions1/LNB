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

 
            <?php
			 
			$count=0;
			$from_count=0;
            $user_profile_post_exet=mysqli_query($conn,"select * from user_post where user_id='".$_GET['id']."'");
			while($user_profile_post=mysqli_fetch_array($user_profile_post_exet))
			{
				++$from_count;
				$count++;
			?>
                                           
               <div class="pst_box" style="background-color:#eee;height:370px">
                                                    <div class="row">
                                                        <div class="col col-lg-3" style="background-color:#eee;  border-right:1px dashed #ddd;height:300px; padding:5px;">
                                                            <div align="center" style="margin-top:5px;">
                                                           <a href="profile.php?id=<?php echo $candy['user_id'] ?>" ><!--class="pst_head_left"-->
                                                             <?php 
																if($candy_pic['image']!='')
																{
																?>
                                                                <img src="fb_users/<?php echo $candy['Gender']; ?>/<?php echo $candy['Email']; ?>/Profile/<?php echo $candy_pic['image'];?>" width="80" class="triangle-down" />
                                                                <?php
																}else
																{
																	?>
                                                                    <img src="images/profile/sq.PNG" width="80" class="triangle-down">
                                                                    <?php
																}
																	?>
                                                                </a>
                                                            </div>
                                                            <div align="center" style="margin-top:5px;">
                                                                <div style="border-bottom:1px dashed #000;line-height:15px;padding-bottom:5px;">
                                                                    <a href="profile.php?id=<?php echo $candy['user_id'] ?>"><span style="color:#000; font-family:lato-bold;font-size:12px;"><?php echo $candy['Name'];?></span></a>
                                                                    <br />
                                                                </div>
                                                                <div style="line-height:15px;border-bottom:1px dashed #000;padding-bottom:5px;">
                                                                    <span style="color:#000; font-family:lato-light;font-size:11px;line-height:.1px;">
        <?php echo $candy['designation'];?></span>
                                                                    <br />
                                                                </div>
                                                                <div style="line-height:15px;border-bottom:1px dashed #000;padding-bottom:5px;">
                                                                    <span style="color:#000; font-family:lato-light;font-size:11px;line-height:.1px;"><?php echo $candy['company'];?></span>
                                                                    <br />
                                                                </div>
                                                                <div style="line-height:15px;border-bottom:1px dashed #000;padding-bottom:5px;">
                                                                    <span style="color:#000; font-family:lato-regular;font-size:11px;line-height:.1px;"><?php echo $candy['industry'];?></span>
                                                                </div>
                                                            </div>
                                                            <div style="position:absolute;bottom:0px;right:0px;padding:0px;padding-bottom:10px;" lign="center" class=" col-lg-12">
                                                           <?php
                                                                 $user_profile_bookmark_exe=mysqli_query($conn,"select * from user_post_status where post_id='$user_profile_post[post_id]' AND user_id='$_SESSION[id]'");
							$user_profilr_bookmark=mysqli_fetch_array($user_profile_bookmark_exe);
							$user_profile_post_comment_execu=mysqli_query($conn,"select * from user_post_comment where post_id='$user_profile_post[post_id]'");
				$user_profile_comment_count=mysqli_num_rows($user_profile_post_comment_execu);
                                                                ?>
                                                                <div class="col col-lg-6" style="padding:0px;" align="center">
                                                                    <i class="fa fa-pencil-square-o"> <a href="#" style="font-size:13px">+<?php echo $user_profile_comment_count ?></a></i> 
                                                                </div>
                                                                <div class="col col-lg-6" style="padding:0px;" align="center">
                                                                    <i class="fa fa-tag" style=""> <a href="#" style="font-size:13px">+<?php echo $user_profile_post['likes'];?></a></i>
                                                                </div>
                                                                <br />
                                                            </div>
                                                        </div>
                                                        <div class="col col-lg-9" style="background-color:#fff; height:370px;padding:0px;">
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
                                                            <div class="pst_body" style="height:px;overflow-y:scrol; padding-right:10px; height:500px">
                                                            <?php
                                                        if($user_profile_post['post_pic'])
                                                        {
                                                            ?>
                                                              <img src="fb_users/<?php echo $candy['Gender'];?>/<?php echo $candy['Email']; ?>/Post/<?php echo $user_profile_post['post_pic'];?>" class="img-responsive" width="400" />
                                                              <?php
                                                        }
                                                        ?>
                                                                <p style="margin-top:10px;margin-right:30px;text-align:"><?php echo $user_profile_post['post_txt']?></p> 
                                                            </div>
                                                            <div class="col-lg-12" style=" border-top:1px dashed #eee; position:absolute;bottom:35px;" align="right">
                                                                <span style="font-size:10px; margin-left:5px;"> - on  <?php echo $user_profile_post['post_time'];?></span>
                                                            </div>
                                                            
                                                            
                                                            <div class="col-lg-12" style="padding:0px;position:absolute;bottom:0px;">
                                                              <form method="post" action="script_code.php" id="form_<?php echo $from_count;?>" >
                                                                <input type="hidden" name="cmt_ins_id" id="cmt_ins_id_<?php echo $from_count;?>" value="<?php echo $_SESSION['id'];?>">
                                                                <input type="hidden" name="cmt_post_id" id="cmt_post_id_<?php echo $from_count;?>" value="<?php echo $user_profile_post['post_id'];?>">
                                                                <?php
                                                                $date=date('Y-m-d h:i');

                                                                ?>
                                                                <input type="hidden" name="cmt_ins_date" id="cmt_ins_date_<?php echo $from_count;?>" value="<?php echo $date;?>">
                                                                <input type="text"  name="cmt_txt" id="cmt_txt_<?php echo $from_count;?>" class="form-control" style="width:100%; padding-left:10px;padding-right:10px; border-radius:0px;" placeholder="Ink...">
                                                                <input type="submit" name="cmt_ins" onClick="return comment_insertion(<?php echo $from_count;?>);" style="display:none;">
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                              
                                           
                                           
                                           
                                            <?php
				}
											?>

</div>
</div>
                                   
                                    
                                 <!--END PROFILE INKED-->   
                                </div>
                                <div class="tab-pane" id="tab3">
                                <!--BEGIN PROFILE NOTED POSTS-->
                                    <div class="bg_pst">
                                    <div id="profile_noted_post">
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
            
              <div class="pst_box" style="background-color:#eee;height:370px">
                                                    <div class="row">
                                                        <div class="col col-lg-3" style="background-color:#eee;  border-right:1px dashed #ddd;height:300px; padding:5px;">
                                                            <div align="center" style="margin-top:5px;">
                                                           <a href="profile.php?id=<?php echo $candy['user_id'] ?>" ><!--class="pst_head_left"-->
                                                             <?php 
																if($candy_pic['image']!='')
																{
																?>
                                                                <img src="fb_users/<?php echo $user_pos_nrty['Gender']; ?>/<?php echo $user_pos_nrty['Email']; ?>/Profile/<?php echo $user_noted_ppic['image'];?>" width="80" class="triangle-down" />
                                                                <?php
																}else
																{
																	?>
                                                                    <img src="images/profile/sq.PNG" width="80" class="triangle-down">
                                                                    <?php
																}
																	?>
                                                                </a>
                                                            </div>
                                                            <div align="center" style="margin-top:5px;">
                                                                <div style="border-bottom:1px dashed #000;line-height:15px;padding-bottom:5px;">
                                                                    <a href="profile.php?id=<?php echo $user_pos_nrty['user_id'] ?>"><span style="color:#000; font-family:lato-bold;font-size:12px;"><?php echo $user_pos_nrty['Name'];?></span></a>
                                                                    <br />
                                                                </div>
                                                                <div style="line-height:15px;border-bottom:1px dashed #000;padding-bottom:5px;">
                                                                    <span style="color:#000; font-family:lato-light;font-size:11px;line-height:.1px;">
        <?php echo $user_pos_nrty['designation'];?></span>
                                                                    <br />
                                                                </div>
                                                                <div style="line-height:15px;border-bottom:1px dashed #000;padding-bottom:5px;">
                                                                    <span style="color:#000; font-family:lato-light;font-size:11px;line-height:.1px;"><?php echo $user_pos_nrty['company']?></span>
                                                                    <br />
                                                                </div>
                                                                <div style="line-height:15px;border-bottom:1px dashed #000;padding-bottom:5px;">
                                                                    <span style="color:#000; font-family:lato-regular;font-size:11px;line-height:.1px;"><?php echo $user_pos_nrty['industry'];?></span>
                                                                </div>
                                                            </div>
                                                            <div style="position:absolute;bottom:0px;right:0px;padding:0px;padding-bottom:10px;" lign="center" class=" col-lg-12">
                                                           <?php
                                                                $candy_noted_exe=mysqli_query($conn,"select * from user_post_status where post_id='$user_noted_post[post_id]' AND user_id='$_SESSION[id]'");
				$can=mysqli_fetch_array($candy_noted_exe);
				$cany=mysqli_num_rows($candy_noted_exe);
				 $user_noted_post_comment_execu=mysqli_query($conn,"select * from user_post_comment where post_id='$user_noted_post[post_id]'");
				$user_noted_comment_count=mysqli_num_rows($user_noted_post_comment_execu);
                                                                ?>
                                                                <div class="col col-lg-6" style="padding:0px;" align="center">
                                                                    <i class="fa fa-pencil-square-o"> <a href="#" style="font-size:13px">+<?php echo $user_noted_comment_count; ?></a></i> 
                                                                </div>
                                                                <div class="col col-lg-6" style="padding:0px;" align="center">
                                                                    <i class="fa fa-tag" style=""> <a href="#" style="font-size:13px">+<?php echo $user_noted_post['likes'];?></a></i>
                                                                </div>
                                                                <br />
                                                            </div>
                                                        </div>
                                                        <div class="col col-lg-9" style="background-color:#fff; height:370px;padding:0px;">
                                                            <div>
                                                            <?php
                                                                if($can['status']=='Like')
                                                                {

                                                                    ?>
                                                                    <a href="#"    onClick="return unlike(<?php echo $user_noted_post['post_id'];?>,<?php echo $_SESSION['id'];?>);"  >
                                                                <img src="images/others/unnote_1.png" height="90" style="position:absolute;left:400px;top:0px;" /></a>
                                                                 <?php
                                                                }else
                                                                {
                                                                   
                                                                    ?>
                                                                <a href="#"  onClick="return like(<?php echo $user_noted_post['post_id'];?>,<?php echo $_SESSION['id'];?>);" ><img src="images/others/note.png" height="90" style="position:absolute;left:400px;top:0px;"  /></a>
                                                                <?php
                                                        }
                                                        ?>
                                                            </div>
                                                            <div class="pst_body" style="height:px;overflow-y:scrol; padding-right:10px; height:500px">
                                                            <?php
                                                        if($user_noted_post['post_pic']!='')
                                                        {
                                                            ?>
                                                              <img src="fb_users/<?php echo $user_pos_nrty['Gender'];?>/<?php echo $user_pos_nrty['Email']; ?>/Post/<?php echo $user_noted_post['post_pic'];?>" class="img-responsive" width="400" />
                                                              <?php
                                                        }
                                                        ?>
                                                                <p style="margin-top:10px;margin-right:30px;text-align:"><?php echo $user_noted_post['post_txt']?></p> 
                                                            </div>
                                                            <div class="col-lg-12" style=" border-top:1px dashed #eee; position:absolute;bottom:35px;" align="right">
                                                                <span style="font-size:10px; margin-left:5px;"> - on  <?php echo $user_noted_post['post_time'];?></span>
                                                            </div>
                                                            
                                                            
                                                            <div class="col-lg-12" style="padding:0px;position:absolute;bottom:0px;">
                                                              <form method="post" action="script_code.php" id="form_<?php echo $from_count;?>" >
                                                                <input type="hidden" name="cmt_ins_id" id="cmt_ins_id_<?php echo $from_count;?>" value="<?php echo $_SESSION['id'];?>">
                                                                <input type="hidden" name="cmt_post_id" id="cmt_post_id_<?php echo $from_count;?>" value="<?php echo $user_profile_post['post_id'];?>">
                                                                <?php
                                                                $date=date('Y-m-d h:i');

                                                                ?>
                                                                <input type="hidden" name="cmt_ins_date" id="cmt_ins_date_<?php echo $from_count;?>" value="<?php echo $date;?>">
                                                                <input type="text"  name="cmt_txt" id="cmt_txt_<?php echo $from_count;?>" class="form-control" style="width:100%; padding-left:10px;padding-right:10px; border-radius:0px;" placeholder="Ink...">
                                                                <input type="submit" name="cmt_ins" onClick="return comment_insertion(<?php echo $from_count;?>);" style="display:none;">
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
            
                        
                                            <?php
				}
											?>
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
