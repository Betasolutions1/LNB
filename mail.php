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
     
        <!--End Remodel-->
        <style>
            /* hola bonita */
            /*#parallelogram {
            width: 150px;
            height: 100px;
            -webkit-transform: skew(20deg);
            -moz-transform: skew(20deg);
            -o-transform: skew(20deg);
            background:#7c7c7c;
            }*/
</style>
    </head>
    <body>
       <?php include "inc/header_m.php" ?>
        <div class="container-fluid paper" style=" padding-top: 30px;">
            <div class="row" style="overflow-x:none;"> 
                <div class="col-lg-4 col-md-4 pad_0 pst_box row" style="height: 600px;background-color:#fff;border: 2px solid #7c7c7c;">
                 <div class="col-lg-12 pad_0" align="center">
                                            <a href="#sendmail" class="btn btn_grn" style="width: 518px;height:50px;margin-top: 5px;padding:15px;background-color: #808080;">
                                                COMPOSE
                                            </a>
                                        </div>
                    <div class="col-lg-12 pad_0" style="border-bottom:2px solid #7c7c7c; padding-bottom:20px;">
                        <input type="text" class="club_txt" placeholder="Search" />
                    </div>
                    <div class="col-lg-12 pad_0" style="overflow-y:scroll;height: 465px;">
                    <?php
                    $maily_exe=mysqli_query($conn,"select * from send_mails where sender_user_id='$_SESSION[id]' group by recive_user_id order by datetime desc");
					while($maly_de=mysqli_fetch_array($maily_exe))
					{
						$reci_users=mysqli_query($conn,"select * from send_mails where recive_user_id='$_SESSION[id]' and sender_user_id='$maly_de[recive_user_id]' order by datetime desc");
						$recmails=mysqli_fetch_array($reci_users);
						//$rec_sen=mysqli_query($conn,"select * from send_mails where  recive_user_id='$_SESSION[id]' group by sender_user_id order by datetime desc");
						//$rec_semil=mysqli_fetch_array($rec_sen);
						$maily_user_exe=mysqli_query($conn,"select * from users where user_id='$maly_de[recive_user_id]'");
						$maily_usr=mysqli_fetch_array($maily_user_exe);
						$maily_ppicexe=mysqli_query($conn,"select * from user_profile_pic where user_id='$maly_de[recive_user_id]'");
						$maily_pic=mysqli_fetch_array($maily_ppicexe);
						//where recive_user_id='$maily_de[user_id]'
						
						
					?>
                        <div class="col-lg-12 pad_0" style="border-bottom:1px solid #7c7c7c;">
                        	
                            <div class="col-lg-2 pad_0" style="width:80px;">
                            <?php
                            if($maily_pic['image']!='')
							{
							?>
                                <img class="img-circle" src="fb_users/<?php echo $maily_usr['Gender'];?>/<?php echo $maily_usr['Email'];?>/Profile/<?php echo $maily_pic['image'];?>" width="80px" style="margin-top: 12px;"/>
                                <?php
							}else{
								?>
                                <img class="img-circle" src="images/profile/sq.PNG" width="80px">
                                <?php
							}
								?>
                            </div> 
                            <?php
                            if($maly_de['datetime'] > $recmails['datetime'])
							{
							?>                            
                            <div class="col-lg-10 pad_0" style="width:320px;padding-top:10px;line-height: 15px;">
                                <span class="club_headers" style="color:#808080;"> <a href="#" style="color:#7c7c7c;font-size:18px;"><?php echo $maily_usr['Name'];?></a> &nbsp <i class="fa fa-clock-o" style="color:#7c7c7c; font-size:13px;">&nbsp <?php echo $maly_de['datetime'];?></i> </span>
                                <br>
                                <h4 style="padding-left:10px;color:808080;">
            <?php echo $maly_de['subject']?></h4>
            <p style="padding-left:10px;color:#808080">
            <?php echo $maly_de['matter_desc']?></p>
                            </div>
                           <!--  <div class="col-lg-12">
                                <p style="color:#808080">
            <?php //echo $maly_de['matter_desc']?></p>
                            </div> -->
                            <?php
							}else if($maly_de['datetime'] < $recmails['datetime'])
							{?>
                            <div class="col-lg-10 pad_0" style="width:320px; padding-top:10px">
                                <span class="club_headers" style="color:#808080;"> <a href="#" style="color:#7c7c7c;font-size:18px;"><?php echo $maily_usr['Name'];?></a> &nbsp <i class="fa fa-clock-o" style="color:#a9a9a9; font-size:13px;">&nbsp <?php echo $maly_de['datetime'];?></i> </span>
                                <br>
                                <h4 style="padding-left:10px;color:808080;">
            <?php echo $recmails['subject']?></h4>
                            </div>
                            <div class="col-lg-12">
                                <p style="color:#808080">
            <?php echo $recmails['matter_desc']?></p>
                            </div>
                            <?php
							}
							?>
                        </div>
                       <?php
					}
					   ?>
                       <?php /*?> <?php
                        if($maly_de['sender_user_id']!=$_SESSION['id'])
						{
						$maily_user_exe=mysqli_query($conn,"select * from users where user_id='$maly_de[sender_user_id]'");
						$maily_usr=mysqli_fetch_array($maily_user_exe);
						$maily_ppicexe=mysqli_query($conn,"select * from user_profile_pic where user_id='$maly_de[sender_user_id]'");
						$maily_pic=mysqli_fetch_array($maily_ppicexe);
						//where recive_user_id='$maily_de[user_id]'
						$get_maily=mysqli_query($conn,"select * from send_mails sender_user_id='$maly_de[sender_user_id]' AND recive_user_id='$_SESSION[id]'");
						$maies=mysqli_fetch_array($get_maily);
						
					?>
                        <div class="col-lg-12 pad_0" style="border-bottom:1px solid #7c7c7c;">
                        	
                            <div class="col-lg-2 pad_0" style="width:80px;">
                                <img src="fb_users/<?php echo $maily_usr['Gender'];?>/<?php echo $maily_usr['Email'];?>/Profile/<?php echo $maily_pic['image'];?>" width="80px" />
                            </div> 
                            <?php
                            if($maly_de['datetime']>$maies['datetime'] );
							{
							?>                            
                            <div class="col-lg-10 pad_0" style="width:320px; padding-top:10px">
                                <span class="club_headers" style="color:#808080;"> <a href="#" style="color:#7c7c7c;font-size:18px;"><?php echo $maily_usr['Name'];?></a> &nbsp <i class="fa fa-clock-o" style="color:#a9a9a9; font-size:13px;">&nbsp <?php echo $maly_de['datetime'];?></i> </span>
                                <br>
                                <h4 style="padding-left:10px;color:808080;">
            <?php echo $maly_de['subject']?></h4>
                            </div>
                            <div class="col-lg-12">
                                <p style="color:#808080">
            <?php echo $maly_de['matter_desc']?></p>
                            </div>
                            <?php
							}
							?>
                        </div>
                        <?php
					}
                       
					}
					
						?><?php */?>
                       <!-- <div class="col-lg-12 pad_0" style="border-bottom:1px solid #7c7c7c;">
                            <div class="col-lg-2 pad_0" style="width:80px;">
                                <img src="images/profile/1.jpg" width="80px" />
                            </div>                             
                            <div class="col-lg-10 pad_0" style="width:320px; padding-top:10px">
                                <span class="club_headers" style="color:#808080;"> <a href="#" style="color:#7c7c7c;font-size:18px;">Rajesh</a> &nbsp <i class="fa fa-clock-o" style="color:#a9a9a9; font-size:13px;">&nbsp 11-02-2017 12:10</i> </span>
                                <br>
                                <h4 style="padding-left:10px;color:808080;">
            Please share the document to my mail id...</h4>
                            </div>
                            <div class="col-lg-12">
                                <p style="color:#808080">
            Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem....</p>
                            </div>
                        </div>-->
                       <!-- <div class="col-lg-12 pad_0" style="border-bottom:1px solid #7c7c7c;">
                            <div class="col-lg-2 pad_0" style="width:80px;">
                                <img src="images/profile/1.jpg" width="80px" />
                            </div>                             
                            <div class="col-lg-10 pad_0" style="width:320px; padding-top:10px">
                                <span class="club_headers" style="color:#808080;"> <a href="#" style="color:#7c7c7c;font-size:18px;">Rajesh</a> &nbsp <i class="fa fa-clock-o" style="color:#a9a9a9; font-size:13px;">&nbsp 11-02-2017 12:10</i> </span>
                                <br>
                                <h4 style="padding-left:10px;color:808080;">
            Please share the document to my mail id...</h4>
                            </div>
                            <div class="col-lg-12">
                                <p style="color:#808080">
            Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem....</p>
                            </div>
                        </div>-->
                        <!--<div class="col-lg-12 pad_0" style="border-bottom:1px solid #7c7c7c;">
                            <div class="col-lg-2 pad_0" style="width:80px;">
                                <img src="images/profile/1.jpg" width="80px" />
                            </div>                             
                            <div class="col-lg-10 pad_0" style="width:320px; padding-top:10px">
                                <span class="club_headers" style="color:#808080;"> <a href="#" style="color:#7c7c7c;font-size:18px;">Rajesh</a> &nbsp <i class="fa fa-clock-o" style="color:#a9a9a9; font-size:13px;">&nbsp 11-02-2017 12:10</i> </span>
                                <br>
                                <h4 style="padding-left:10px;color:808080;">
            Please share the document to my mail id...</h4>
                            </div>
                            <div class="col-lg-12">
                                <p style="color:#808080">
            Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem....</p>
                            </div>
                        </div>-->
                       <!-- <div class="col-lg-12 pad_0" style="border-bottom:1px solid #7c7c7c;">
                            <div class="col-lg-2 pad_0" style="width:80px;">
                                <img src="images/profile/1.jpg" width="80px" />
                            </div>                             
                            <div class="col-lg-10 pad_0" style="width:320px; padding-top:10px">
                                <span class="club_headers" style="color:#808080;"> <a href="#" style="color:#7c7c7c;font-size:18px;">Rajesh</a> &nbsp <i class="fa fa-clock-o" style="color:#a9a9a9; font-size:13px;">&nbsp 11-02-2017 12:10</i> </span>
                                <br>
                                <h4 style="padding-left:10px;color:808080;">
            Please share the document to my mail id...</h4>
                            </div>
                            <div class="col-lg-12">
                                <p style="color:#808080">
            Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem....</p>
                            </div>
                        </div>-->
                       <!-- <div class="col-lg-12 pad_0" style="border-bottom:1px solid #7c7c7c;">
                            <div class="col-lg-2 pad_0" style="width:80px;">
                                <img src="images/profile/1.jpg" width="80px" />
                            </div>                             
                            <div class="col-lg-10 pad_0" style="width:320px; padding-top:10px">
                                <span class="club_headers" style="color:#808080;"> <a href="#" style="color:#7c7c7c;font-size:18px;">Rajesh</a> &nbsp <i class="fa fa-clock-o" style="color:#a9a9a9; font-size:13px;">&nbsp 11-02-2017 12:10</i> </span>
                                <br>
                                <h4 style="padding-left:10px;color:808080;">
            Please share the document to my mail id...</h4>
                            </div>
                            <div class="col-lg-12">
                                <p style="color:#808080">
            Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem....</p>
                            </div>
                        </div>-->
                       <!-- <div class="col-lg-12 pad_0" style="border-bottom:1px solid #7c7c7c;">
                            <div class="col-lg-2 pad_0" style="width:80px;">
                                <img src="images/profile/1.jpg" width="80px" />
                            </div>                             
                            <div class="col-lg-10 pad_0" style="width:320px; padding-top:10px">
                                <span class="club_headers" style="color:#808080;"> <a href="#" style="color:#7c7c7c;font-size:18px;">Rajesh</a> &nbsp <i class="fa fa-clock-o" style="color:#a9a9a9; font-size:13px;">&nbsp 11-02-2017 12:10</i> </span>
                                <br>
                                <h4 style="padding-left:10px;color:808080;">
            Please share the document to my mail id...</h4>
                            </div>
                            <div class="col-lg-12">
                                <p style="color:#808080">
            Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem....</p>
                            </div>
                        </div>-->
                       <!-- <div class="col-lg-12 pad_0" style="border-bottom:1px solid #7c7c7c;">
                            <div class="col-lg-2 pad_0" style="width:80px;">
                                <img src="images/profile/1.jpg" width="80px" />
                            </div>                             
                            <div class="col-lg-10 pad_0" style="width:320px; padding-top:10px">
                                <span class="club_headers" style="color:#808080;"> <a href="#" style="color:#7c7c7c;font-size:18px;">Rajesh</a> &nbsp <i class="fa fa-clock-o" style="color:#a9a9a9; font-size:13px;">&nbsp 11-02-2017 12:10</i> </span>
                                <br>
                                <h4 style="padding-left:10px;color:808080;">
            Please share the document to my mail id...</h4>
                            </div>
                            <div class="col-lg-12">
                                <p style="color:#808080">
            Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem....</p>
                            </div>
                        </div>-->
                       <!-- <div class="col-lg-12 pad_0" style="border-bottom:1px solid #7c7c7c;">
                            <div class="col-lg-2 pad_0" style="width:80px;">
                                <img src="images/profile/1.jpg" width="80px" />
                            </div>                             
                            <div class="col-lg-10 pad_0" style="width:320px; padding-top:10px">
                                <span class="club_headers" style="color:#808080;"> <a href="#" style="color:#7c7c7c;font-size:18px;">Rajesh</a> &nbsp <i class="fa fa-clock-o" style="color:#a9a9a9; font-size:13px;">&nbsp 11-02-2017 12:10</i> </span>
                                <br>
                                <h4 style="padding-left:10px;color:808080;">
            Please share the document to my mail id...</h4>
                            </div>
                            <div class="col-lg-12">
                                <p style="color:#808080">
            Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem....</p>
                            </div>
                        </div>-->
                        <!--<div class="col-lg-12 pad_0" style="border-bottom:1px solid #7c7c7c;">
                            <div class="col-lg-2 pad_0" style="width:80px;">
                                <img src="images/profile/1.jpg" width="80px" />
                            </div>                             
                            <div class="col-lg-10 pad_0" style="width:320px; padding-top:10px">
                                <span class="club_headers" style="color:#808080;"> <a href="#" style="color:#7c7c7c;font-size:18px;">Rajesh</a> &nbsp <i class="fa fa-clock-o" style="color:#a9a9a9; font-size:13px;">&nbsp 11-02-2017 12:10</i> </span>
                                <br>
                                <h4 style="padding-left:10px;color:808080;">
            Please share the document to my mail id...</h4>
                            </div>
                            <div class="col-lg-12">
                                <p style="color:#808080">
            Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem....</p>
                            </div>
                        </div>-->
                       <!-- <div class="col-lg-12 pad_0" style="border-bottom:1px solid #7c7c7c;">
                            <div class="col-lg-2 pad_0" style="width:80px;">
                                <img src="images/profile/1.jpg" width="80px" />
                            </div>                             
                            <div class="col-lg-10 pad_0" style="width:320px; padding-top:10px">
                                <span class="club_headers" style="color:#808080;"> <a href="#" style="color:#7c7c7c;font-size:18px;">Rajesh</a> &nbsp <i class="fa fa-clock-o" style="color:#a9a9a9; font-size:13px;">&nbsp 11-02-2017 12:10</i> </span>
                                <br>
                                <h4 style="padding-left:10px;color:808080;">
            Please share the document to my mail id...</h4>
                            </div>
                            <div class="col-lg-12">
                                <p style="color:#808080">
            Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem....</p>
                            </div>
                        </div>-->
                      <!--  <div class="col-lg-12 pad_0" style="border-bottom:1px solid #7c7c7c;">
                            <div class="col-lg-2 pad_0" style="width:80px;">
                                <img src="images/profile/1.jpg" width="80px" />
                            </div>                             
                            <div class="col-lg-10 pad_0" style="width:320px; padding-top:10px">
                                <span class="club_headers" style="color:#808080;"> <a href="#" style="color:#7c7c7c;font-size:18px;">Rajesh</a> &nbsp <i class="fa fa-clock-o" style="color:#a9a9a9; font-size:13px;">&nbsp 11-02-2017 12:10</i> </span>
                                <br>
                                <h4 style="padding-left:10px;color:808080;">
            Please share the document to my mail id...</h4>
                            </div>
                            <div class="col-lg-12">
                                <p style="color:#808080">
            Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem....</p>
                            </div>
                        </div>-->
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 "> 
                    <div class="tab-content" style="
    border: 2px solid #7c7c7c;height: 600px">
                        <div class="tab-pane active" id="workspace-vr">
                            <div class="pst_main_background pst_box " style="background-color:#fff;">
                                <br>
                                <div class="club_sub_div_height" style="height:575px; overflow-y:scroll;">
                                    <div class="row" style="padding:0px;">
                                    <?php 
									$mails_exe=mysqli_query($conn,"select * from send_mails where sender_user_id='$_SESSION[id]' order by send_id desc limit 1");
									$mails=mysqli_fetch_array($mails_exe);
									$rev_urs_de_exe=mysqli_query($conn,"select * from users where user_id='$mails[recive_user_id]'");
									$urs_fe=mysqli_fetch_array($rev_urs_de_exe);
									$use_ppicexe=mysqli_query($conn,"select * from user_profile_pic where user_id='$urs_fe[user_id]'");
									$usr_pic=mysqli_fetch_array($use_ppicexe);
									$get_total_mail_exe=mysqli_query($conn,"select * from send_mails where recive_user_id='$mails[recive_user_id]'");
									while($gmail=mysqli_fetch_array($get_total_mail_exe))
									{
									?>
                                        <div class="col-lg-12" style="border-bottom:2px solid #7c7c7c; margin-bottom:10px; padding-top:10px;">
                                            <div class="col-lg-12 pad_0" style="margin-bottom:10px;">
                                                <div class="col-lg-3 pad_0" align="left" style="width:80px;">
                                                    <img class="img-circle" src="fb_users/<?php echo $urs_fe['Gender']?>/<?php echo $urs_fe['Email'];?>/Profile/<?php echo $usr_pic['image'];?>" width="80" />
                                                </div>
                                                <div class="col-lg-9" style="width:91%"> 
                                                    <div class="col-lg-12 pad_0">
                                                        <div class="col-lg-9 pad_0">
                                                            <h3 class="club_headers" style="width:500px;color: #808080">
           Rajesh </h3> 
                                                        </div><div class="col-lg-1"></div>
                                                        <div class="col-lg-2" align="right" style="padding:15px;">
                                                            <a href="#"><i class="fa fa-forward" style="color:#7c7c7c;padding-right:5px;"></i></a>
                                                            <a href="#"><i class="fa fa-share" style="color:#7c7c7c;padding-right:5px;"></i></a>
                                                            <a href="#"><i class="fa fa-trash" style="color:#7c7c7c;padding-right:5px;"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="club_headers" style="color:#000;">Inked by <a href="#" style="color:#7c7c7c;">Valli</a> &nbsp <i class="fa fa-clock-o" style="color:#a9a9a9; font-size:13px;">&nbsp 11-02-2017 12:10</i> </span>
                                                </div>



                                                <div class="col-lg-12 pad_0">
                                                    <h4>
    Please Share the document to my mail id....</h4>
                                                </div>
                                            </div>
                                             <hr style="color: #7c7c7c;width: 100%">
                                            <div class="col-lg-12" style="margin-bottom:15px;">
                                                <p>
            Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem singulis est id. Enim sale adolescens vim te. Ea ignota gloriatur eos, no minim zril quo. Mei graece recteque id. Cu per facer recusabo, te labore equidem vix, cu eam singulis mediocrem. Et nec facete maiestatis, quo impedit aliquando ei. Saepe animal recteque ad eam, sea vitae putent causae ei, eu qui everti vituperata.</p>
                                                <span style="color:#a9a9a9">thanks</span>
                                                <br>
                                                <span style="color:#a9a9a9">Rajesh</span>
                                                <br>
                                                <span style="color:#a9a9a9">www.ln.business</span>
                                            </div>
                                        </div>
                                        <?php
									}
										?>
                                     <!--   <div class="col-lg-12" style="border-bottom:2px solid #7c7c7c; margin-bottom:10px; padding-top:10px;">
                                            <div class="col-lg-12 pad_0" style="border-bottom:1px solid #7c7c7c;margin-bottom:10px;">
                                                <div class="col-lg-2 pad_0" align="left" style="width:80px;">
                                                    <img src="images/profile/6.jpg" width="80" />
                                                </div>
                                                <div class="col-lg-10" style="width:675px"> 
                                                    <div class="col-lg-12 pad_0">
                                                        <div class="col-lg-10 pad_0">
                                                            <h3 class="club_headers" style="width:500px;">
           Rajesh </h3> 
                                                        </div>
                                                        <div class="col-lg-2" align="right" style="padding:15px;">
                                                            <a href="#"><i class="fa fa-forward" style="color:#7c7c7c;padding-right:5px;"></i></a>
                                                            <a href="#"><i class="fa fa-share" style="color:#7c7c7c;padding-right:5px;"></i></a>
                                                            <a href="#"><i class="fa fa-trash" style="color:#7c7c7c;padding-right:5px;"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="club_headers" style="color:#000;">Inked by <a href="#" style="color:#7c7c7c;">Valli</a> &nbsp <i class="fa fa-clock-o" style="color:#a9a9a9; font-size:13px;">&nbsp 11-02-2017 12:10</i> </span>
                                                </div>
                                                <div class="col-lg-12 pad_0">
                                                    <h4>
    Please Share the document to my mail id....</h4>
                                                </div>
                                            </div>
                                            <div class="col-lg-12" style="margin-bottom:15px;">
                                                <p>
            Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem singulis est id. Enim sale adolescens vim te. Ea ignota gloriatur eos, no minim zril quo. Mei graece recteque id. Cu per facer recusabo, te labore equidem vix, cu eam singulis mediocrem. Et nec facete maiestatis, quo impedit aliquando ei. Saepe animal recteque ad eam, sea vitae putent causae ei, eu qui everti vituperata.</p>
                                                <span style="color:#a9a9a9">thanks</span>
                                                <br>
                                                <span style="color:#a9a9a9">Rajesh</span>
                                                <br>
                                                <span style="color:#a9a9a9">www.ln.business</span>
                                            </div>
                                        </div>-->
                                      <!--  <div class="col-lg-12" style="border-bottom:2px solid #7c7c7c; margin-bottom:10px; padding-top:10px;">
                                            <div class="col-lg-12 pad_0" style="border-bottom:1px solid #7c7c7c;margin-bottom:10px;">
                                                <div class="col-lg-2 pad_0" align="left" style="width:80px;">
                                                    <img src="images/profile/6.jpg" width="80" />
                                                </div>
                                                <div class="col-lg-10" style="width:675px"> 
                                                    <div class="col-lg-12 pad_0">
                                                        <div class="col-lg-10 pad_0">
                                                            <h3 class="club_headers" style="width:500px;">
           Rajesh </h3> 
                                                        </div>
                                                        <div class="col-lg-2" align="right" style="padding:15px;">
                                                            <a href="#"><i class="fa fa-forward" style="color:#7c7c7c;padding-right:5px;"></i></a>
                                                            <a href="#"><i class="fa fa-share" style="color:#7c7c7c;padding-right:5px;"></i></a>
                                                            <a href="#"><i class="fa fa-trash" style="color:#7c7c7c;padding-right:5px;"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="club_headers" style="color:#000;">Inked by <a href="#" style="color:#7c7c7c;">Valli</a> &nbsp <i class="fa fa-clock-o" style="color:#a9a9a9; font-size:13px;">&nbsp 11-02-2017 12:10</i> </span>
                                                </div>
                                                <div class="col-lg-12 pad_0">
                                                    <h4>
    Please Share the document to my mail id....</h4>
                                                </div>
                                            </div>
                                            <div class="col-lg-12" style="margin-bottom:15px;">
                                                <p>
            Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem singulis est id. Enim sale adolescens vim te. Ea ignota gloriatur eos, no minim zril quo. Mei graece recteque id. Cu per facer recusabo, te labore equidem vix, cu eam singulis mediocrem. Et nec facete maiestatis, quo impedit aliquando ei. Saepe animal recteque ad eam, sea vitae putent causae ei, eu qui everti vituperata.</p>
                                                <span style="color:#a9a9a9">thanks</span>
                                                <br>
                                                <span style="color:#a9a9a9">Rajesh</span>
                                                <br>
                                                <span style="color:#a9a9a9">www.ln.business</span>
                                            </div>
                                        </div>-->
                                    <?php /*?>    <div class="col-lg-12" style="border-bottom:2px solid #7c7c7c; margin-bottom:10px; padding-top:10px;">
                                            <div class="col-lg-12 pad_0" style="border-bottom:1px solid #7c7c7c;margin-bottom:10px;">
                                                <div class="col-lg-2 pad_0" align="left" style="width:80px;">
                                                    <img src="images/profile/6.jpg" width="80" />
                                                </div>
                                                <div class="col-lg-10" style="width:675px"> 
                                                    <div class="col-lg-12 pad_0">
                                                        <div class="col-lg-10 pad_0">
                                                            <h3 class="club_headers" style="width:500px;">
           Rajesh </h3> 
                                                        </div>
                                                        <div class="col-lg-2" align="right" style="padding:15px;">
                                                            <a href="#"><i class="fa fa-forward" style="color:#7c7c7c;padding-right:5px;"></i></a>
                                                            <a href="#"><i class="fa fa-share" style="color:#7c7c7c;padding-right:5px;"></i></a>
                                                            <a href="#"><i class="fa fa-trash" style="color:#7c7c7c;padding-right:5px;"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="club_headers" style="color:#000;">Inked by <a href="#" style="color:#7c7c7c;">Valli</a> &nbsp <i class="fa fa-clock-o" style="color:#a9a9a9; font-size:13px;">&nbsp 11-02-2017 12:10</i> </span>
                                                </div>
                                                <div class="col-lg-12 pad_0">
                                                    <h4>
    Please Share the document to my mail id....</h4>
                                                </div>
                                            </div>
                                            <div class="col-lg-12" style="margin-bottom:15px;">
                                                <p>
            Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem singulis est id. Enim sale adolescens vim te. Ea ignota gloriatur eos, no minim zril quo. Mei graece recteque id. Cu per facer recusabo, te labore equidem vix, cu eam singulis mediocrem. Et nec facete maiestatis, quo impedit aliquando ei. Saepe animal recteque ad eam, sea vitae putent causae ei, eu qui everti vituperata.</p>
                                                <span style="color:#a9a9a9">thanks</span>
                                                <br>
                                                <span style="color:#a9a9a9">Rajesh</span>
                                                <br>
                                                <span style="color:#a9a9a9">www.ln.business</span>
                                            </div>
                                        </div><?php */?>
                                     <?php /*?>   <div class="col-lg-12" style="border-bottom:2px solid #7c7c7c; margin-bottom:10px; padding-top:10px;">
                                            <div class="col-lg-12 pad_0" style="border-bottom:1px solid #7c7c7c;margin-bottom:10px;">
                                                <div class="col-lg-2 pad_0" align="left" style="width:80px;">
                                                    <img src="images/profile/6.jpg" width="80" />
                                                </div>
                                                <div class="col-lg-10" style="width:675px"> 
                                                    <div class="col-lg-12 pad_0">
                                                        <div class="col-lg-10 pad_0">
                                                            <h3 class="club_headers" style="width:500px;">
           Rajesh </h3> 
                                                        </div>
                                                        <div class="col-lg-2" align="right" style="padding:15px;">
                                                            <a href="#"><i class="fa fa-forward" style="color:#7c7c7c;padding-right:5px;"></i></a>
                                                            <a href="#"><i class="fa fa-share" style="color:#7c7c7c;padding-right:5px;"></i></a>
                                                            <a href="#"><i class="fa fa-trash" style="color:#7c7c7c;padding-right:5px;"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="club_headers" style="color:#000;">Inked by <a href="#" style="color:#7c7c7c;">Valli</a> &nbsp <i class="fa fa-clock-o" style="color:#a9a9a9; font-size:13px;">&nbsp 11-02-2017 12:10</i> </span>
                                                </div>
                                                <div class="col-lg-12 pad_0">
                                                    <h4>
    Please Share the document to my mail id....</h4>
                                                </div>
                                            </div>
                                            <div class="col-lg-12" style="margin-bottom:15px;">
                                                <p>
            Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem singulis est id. Enim sale adolescens vim te. Ea ignota gloriatur eos, no minim zril quo. Mei graece recteque id. Cu per facer recusabo, te labore equidem vix, cu eam singulis mediocrem. Et nec facete maiestatis, quo impedit aliquando ei. Saepe animal recteque ad eam, sea vitae putent causae ei, eu qui everti vituperata.</p>
                                                <span style="color:#a9a9a9">thanks</span>
                                                <br>
                                                <span style="color:#a9a9a9">Rajesh</span>
                                                <br>
                                                <span style="color:#a9a9a9">www.ln.business</span>
                                            </div>
                                        </div><?php */?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                 
            </div>
            <div>
</div>
        </div>
        
          <!---------------------------Mail insertion model--------------------------->
                                        
                                           <div class="remodal" data-remodal-id="sendmail" id="sendmail" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                                            <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                                            <form class="form-horizontal" role="form" method="post" action="">
                                                <div>
                                                <?php
                                                $dummy_count=1;
												?>
                                                <div class="form-group">
                                                        <label class="col-sm-3 control-label">Select User</label>
                                                        <div class="col-sm-9">
                                                            <div class="row">
                                                                <select class="selectpicker col-md-12 form-control" name="recer_user_id" id="recer_user_id_<?php echo $dummy_count;?>">
                                                                <option>Select User</option>
																<?php 
																$get_urd=mysqli_query($conn,"select * from users where user_id!='$_SESSION[id]'");
																while($urde=mysqli_fetch_array($get_urd))
																{
																?>
                                                                    <option value="<?php echo $urde['user_id'];?>"><?php echo $urde['Name'];?></option>
                                                                   <?php
																}
																   ?>
                                                                    
                                                                  
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Subject</label>
                                                        <div class="col-sm-9">
                                                           
                                                            <input type="text" class="form-control" id="mail_subject_<?php echo $dummy_count;?>"  name="mail_subject"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Description</label>
                                                        <div class="col-sm-9">
                                                            <textarea rows="3" style="resize:none;"  class="club_txt" id="mail_desc_<?php echo $dummy_count;?>"  name="mail_desc"></textarea>
                                                        </div>
                                                    </div>
                                                    
                                                  
                                                </div>
                                                <br>
                                                

                                                <button  data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
                                                <!---->
                                                <button type="submit" name="sub_forms" data-remodal-action="confirm" onClick="return sendmails(<?php echo $dummy_count;?>);" class="remodal-confirm">Send Mail</button>

                                            </form>
                                        </div>
                                        
                                        <!--------------------------------END Mail Model------------------------------------>
                                        
          <script  type="text/javascript">
         
</script>                              
                                        
        <script type="text/javascript" src="js/space_discussion.js"></script>
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
