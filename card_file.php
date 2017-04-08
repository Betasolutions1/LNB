<?php
error_reporting(0);
include 'config.php';
session_start();
$mails_count=0;
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

        <!--End Remodel-->

    </head>
    <body>
			<nav class="navbar navbar-inverse navbar-fixed-top " style="height:10%;border-bottom:3px solid #808080;">
									<div class="container" align="center" style="padding-left:9%;height:100%;position:relative;top:10%;">
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

															<li style=" padding-left:30px; padding-top:10px; padding-right:20px; ">
																<div style="background-color:#808080;padding-right:5px;">
																													 <form method="get" action="search.php">
																	<input type="text" name="search_data" id="search_data" style="width:350px; height:30px;background-color:#808080; border:0px; color:#fff;margin-left:5px;">
																	<i class="fa   fa-search" style="color:#fff; padding-top:5px;"></i>
																															<input type="submit" name="sub_search" style="display:none;">
																	</form>
															</div>
															</li>
															<li>
																<i class="fa fa-2x fa-id-card " style="padding-left:0px; padding-right:25px; margin-top:11px;"></i>
															</li>
															<li >
																	<a href="#" style="font-family:Stencil Std; font-size:24px; padding-left:25px; padding-right:25px; color: #808080;">F</a>
															</li>
															<li>
																	<a href="#about" style="font-family:Stencil Std; font-size:24px; padding-left:25px; padding-right:25px; color: #808080;">M</a>
															</li>
																										 <li style="height:50px;line-height:10px;padding-top:3px;">
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
															<li style="height:50px; float:right; padding-top:0px;">
																	<span class="date" style="font-family:Stencil Std; font-size:40px; padding-top:0px; padding-right:10px;color:#808080;">31</span>
															</li>
													</ul>
											</div>
											<!--/.nav-collapse -->
									</div>
							</nav>

        <div class="container-fluid paper" style=" padding-top: 30px;">
            <div class="row" >
<br>
<br>
                <div class="col-lg-12 col-md-12 ">
                    <div class="pst_main_background" style="background-color:transparent;">
                        <div class="row cf_block_height" style="width:100%;height:500px;">
                        <?php
                        $usr_frnd_list_exe=mysqli_query($conn,"select * from friend_request where who_sent_user_id='".$_SESSION['id']."' AND status='1'");

 while($usr_frnd_list=mysqli_fetch_array($usr_frnd_list_exe))
 {
	 ++$mails_count;
	 $usr_frnds_deta=mysqli_query($conn,"select * from users where  user_id='$usr_frnd_list[to_whom_user_id]'");
	 $usr_frnd_details=mysqli_fetch_array($usr_frnds_deta);

	 ?>

                            <div class="col-lg-4 cf_card  " style="background-color:#fff;border:0px solid #fff;">
                                <div class="col-lg-12" style="height:120px;padding-top:10px;">
                                    <div class="col-lg-10" style="padding:0px; font-family:lato; ">
                                        <span style="text-align:center; color:#808080; font-family:lato;text-transform:uppercase; "> <?php echo $usr_frnd_details['industry'];?></span>
                                        <br>
                                        <span style="color:#d3d3d3;text-transform:capitalize;"><?php echo $usr_frnd_details['Name'];?></span>
                                        <br>
                                        <span style="color:#d3d3d3;"><?php echo $usr_frnd_details['designation'];?></span>
                                        <br>
                                        <span style="color:#d3d3d3;"><?php echo $usr_frnd_details['company'];?></span>
                                    </div>
                                    <div align="right" style="margin:0px; width:25px; padding:0px;" class="col-lg-2">
                                        <img src="images/profile/logo.jpg" width="25px;" />
                                    </div>
                                </div>
                                <div class="col-lg-12" style="height:22px;background-color:#808080;">
                                    <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                        <i class="fa fa-1x fa-phone" style="color:#fff;"></i>
                                    </div>
                                    <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                       <a href="#sendmail_<?php echo $usr_frnd_details['user_id'];?>"> <i class="fa fa-1x fa-envelope" style="color:#fff;"></i></a>
                                    </div>
                                    <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                       <a href="profile.php?id=<?php echo $usr_frnd_details['user_id'];?>"> <i class="fa fa-1x fa-book" style="color:#fff;"></i></a>
                                    </div>
                                </div>
                            </div>

                               <!---------------------------Mail insertion model--------------------------->

                                           <div class="remodal" data-remodal-id="sendmail_<?php echo $usr_frnd_details['user_id'];?>" id="sendmail_<?php echo $usr_frnd_details['user_id'];?>" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                                            <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                                            <form class="form-horizontal" role="form" method="post" action="" id="">
                                                <div>
                                                <div class="form-group">
                                                        <label class="col-sm-3 control-label">Select User</label>
                                                        <div class="col-sm-9">
                                                        <input type="hidden" name="recer_user_id" id="recer_user_id_<?php echo $mails_count;?>" value="<?php echo $usr_frnd_details['user_id'];?>">
                                                           <input type="text" class="form-control" id="recer_user_id_<?php echo $mails_count;?>"  name="recer_user_id" value="<?php echo $usr_frnd_details['Name'];?>" readonly/>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Subject</label>
                                                        <div class="col-sm-9">

                                                            <input type="text" class="form-control" id="mail_subject_<?php echo $mails_count?>"  name="mail_subject"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Description</label>
                                                        <div class="col-sm-9">
                                                            <textarea rows="3" style="resize:none;"  class="club_txt" id="mail_desc_<?php echo $mails_count;?>"  name="mail_desc"></textarea>
                                                        </div>
                                                    </div>


                                                </div>
                                                <br>


                                                <button  data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
                                                <!---->
                                                <button type="submit" name="sub_forms" data-remodal-action="confirm" onClick="return sendmails(<?php echo $mails_count; ?>);" class="remodal-confirm">Send Mail</button>

                                            </form>
                                        </div>

                                        <!--------------------------------END Mail Model------------------------------------>

                            <?php
 }
							?>


                             <?php
 $urr_frnd_list_exe=mysqli_query($conn,"select * from friend_request where to_whom_user_id='$_SESSION[id]' AND status='1'");
 while($urr_frnd_list=mysqli_fetch_array($urr_frnd_list_exe))
 {
	 ++$mails_count;
	 $urr_frnds_deta=mysqli_query($conn,"select * from users where  user_id='$urr_frnd_list[who_sent_user_id]'");
	 $urr_frnd_details=mysqli_fetch_array($urr_frnds_deta);



	 ?>

                            <div class="col-lg-4 cf_card  " style="background-color:#fff;border:0px solid #fff;">
                                <div class="col-lg-12" style="height:120px;padding-top:10px;">
                                    <div class="col-lg-10" style="padding:0px; font-family:lato; ">
                                        <span style="text-align:center; color:#808080; font-family:lato;text-transform:uppercase;"> <?php echo $urr_frnd_details['industry']?></span>
                                        <br>
                                        <span style="color:#d3d3d3; text-transform:capitalize;"><?php echo $urr_frnd_details['Name'];?></span>
                                        <br>
                                        <span style="color:#d3d3d3;"><?php echo $urr_frnd_details['designation'];?></span>
                                        <br>
                                        <span style="color:#d3d3d3;"><?php echo $urr_frnd_details['company'];?></span>
                                    </div>
                                    <div align="right" style="margin:0px; width:25px; padding:0px;" class="col-lg-2">
                                        <img src="images/profile/logo.jpg" width="25px;" />
                                    </div>
                                </div>
                                <div class="col-lg-12" style="height:22px;background-color:#808080;">
                                    <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                        <i class="fa fa-1x fa-phone" style="color:#fff;"></i>
                                    </div>
                                    <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                       <a href="#compose_mail_<?php echo $urr_frnd_details['user_id'];?>">  <i class="fa fa-1x fa-envelope" style="color:#fff;"></i></a>
                                    </div>
                                    <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                       <a href="profile.php?id=<?php echo $urr_frnd_details['user_id'];?>"> <i class="fa fa-1x fa-book" style="color:#fff;"></i></a>
                                    </div>
                                </div>
                            </div>

                             <!---------------------------Mail insertion model--------------------------->

                                           <div class="remodal" data-remodal-id="compose_mail_<?php echo $urr_frnd_details['user_id'];?>" id="compose_mail_<?php echo $urr_frnd_details['user_id'];?>" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                                            <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                                            <form class="form-horizontal" role="form" method="post" action="" id="compose_mail_form_<?php echo $mails_count;?>">
                                                <div>
                                                <div class="form-group">
                                                        <label class="col-sm-3 control-label">Select User</label>
                                                        <div class="col-sm-9">
                                                        <input type="hidden" name="recer_user_id" id="recer_user_id_<?php echo $mails_count;?>" value="<?php echo $urr_frnd_details['user_id'];?>">
                                                           <input type="text" class="form-control" id="recer_user_id_<?php echo $mails_count;?>"  name="recer_user_id" value="<?php echo $urr_frnd_details['Name'];?>" readonly/>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Subject</label>
                                                        <div class="col-sm-9">

                                                            <input type="text" class="form-control" id="mail_subject_<?php echo $mails_count;?>"  name="mail_subject"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Description</label>
                                                        <div class="col-sm-9">
                                                            <textarea rows="3" style="resize:none;"  class="club_txt" id="mail_desc_<?php echo $mails_count;?>"  name="mail_desc"></textarea>
                                                        </div>
                                                    </div>


                                                </div>
                                                <br>


                                                <button  data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
                                                <!---->
                                                <button type="submit" name="sub_forms" data-remodal-action="confirm" onClick="return sendmails(<?php echo $mails_count;?>);" class="remodal-confirm">Send Mail</button>

                                            </form>
                                        </div>

                                        <!--------------------------------END Mail Model------------------------------------>

                            <?php
 }
							?>


                        </div>
                    </div>
                </div>
              <?php /*?>  <div class="col-md-3 col-lg-3 b_s">
                    <div class="row">
                        <div>
                            <img class="b_s" src="../assets//images/Banner_1.jpg" style="width:200px; height:900px;" />
                        </div>
                    </div>
                    <!-- Widget -->
                    <!-- // Widget END -->
                </div>   <?php */?>
            </div>
            <div>
</div>
        </div>
				<footer>
					<div>
				 <ul style="list-style-type: none;margin-top:2px;">
					 <li style="  float: left; margin-left: 5px; margin-right: 10px;">
						 <!-- <i class="fa fa-pencil" style="color:#fff;"></i> -->
						 <img src="image/stick.png" style="width:30px;height:30px;" class="img-responsive">
					 </li>
					 <li style="  float: left; margin-left: 10px; margin-right: 10px;">
						 <!-- <i class="fa fa-pencil" style="color:#fff;"></i> -->
						 <img src="image/notification.png" style="width:30px;height:30px;" class="img-responsive">
					 </li>
					 <li style="  float: left; margin-left: 0px; margin-right: 10px;margin-top:-5px;">
						 <!-- <i class="fa fa-pencil" style="color:#fff;"></i> -->
						 <img src="image/setting3.png" style="width:45px;height:45px;" class="img-responsive">
					 </li>

				 </ui>
				 <div style=" border-left: 2px solid #fff; float: left; height: 30px; margin-left: 10px;">
				 </div>
				 <div style=" float: left; color: #fff; font-size: 15px; text-align: center; width: 80% ; margin-top: 5px;">
					 <span>Design is not just how it look like, It's how it works like - Steve Jobs<span>
				 </div>
					</div>
				</footer>
        <!-- /.container -->
        <script type="text/javascript" src="js/space_discussion.js"></script>
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
