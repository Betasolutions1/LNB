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
      <!-- notification -->
<!-- <script type="text/javascript" src="js/jquery.min.js"></script> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<style type="text/css">
  
#notification_li
{
position:relative
-ms-transform: rotate(180deg); /* IE 9 */
    -webkit-transform: rotate(180deg); /* Chrome, Safari, Opera */
    transform: rotate(180deg);
}
#notificationContainer 
{
background-color: #fff;
border: 1px solid rgba(100, 100, 100, .4);
-webkit-box-shadow: 0 3px 8px rgba(0, 0, 0, .25);
overflow: visible;
position: absolute;
top: 30px;
margin-left: -170px;
width: 300px;
z-index: -1;
display: none; // Enable this after jquery implementation 
-ms-transform: rotate(180deg); /* IE 9 */
    -webkit-transform: rotate(180deg); /* Chrome, Safari, Opera */
    transform: rotate(180deg);
}
// Popup Arrow
#notificationContainer:before {
content: '';
display: block;
position: absolute;
width: 0;
height: 0;
color: transparent;
border: 10px solid black;
border-color: transparent transparent white;
margin-top: -20px;
margin-left: 188px;

}
#notificationTitle
{
font-weight: bold;
padding: 8px;
font-size: 13px;
background-color: #ffffff;
position: fixed;
z-index: 1000;
width: 290px;
border-bottom: 1px solid #dddddd;

}
#notificationsBody
{
padding: 33px 0px 0px 0px !important;
min-height:300px;

}
#notificationFooter
{
background-color: #e9eaed;
text-align: center;
font-weight: bold;
padding: 8px;
font-size: 12px;
border-top: 1px solid #dddddd;
}
#notification_count 
{
padding: 3px 7px 3px 7px;
background: #cc0000;
color: #ffffff;
font-weight: bold;
margin-left: 77px;
border-radius: 9px;
-moz-border-radius: 9px; 
-webkit-border-radius: 9px;
position: absolute;
margin-top: -11px;
font-size: 11px;

}
#notification_li1
{
position:relative
-ms-transform: rotate(180deg); /* IE 9 */
    -webkit-transform: rotate(180deg); /* Chrome, Safari, Opera */
    transform: rotate(180deg);
}
#notificationContainer1 
{
background-color: #fff;
border: 1px solid rgba(100, 100, 100, .4);
-webkit-box-shadow: 0 3px 8px rgba(0, 0, 0, .25);
overflow: visible;
position: absolute;
top: 30px;
margin-left: -170px;
width: 300px;
z-index: -1;
display: none; // Enable this after jquery implementation 
-ms-transform: rotate(180deg); /* IE 9 */
    -webkit-transform: rotate(180deg); /* Chrome, Safari, Opera */
    transform: rotate(180deg);
}
// Popup Arrow
#notificationContainer1:before {
content: '';
display: block;
position: absolute;
width: 0;
height: 0;
color: transparent;
border: 10px solid black;
border-color: transparent transparent white;
margin-top: -20px;
margin-left: 188px;

}
#notificationTitle1
{
font-weight: bold;
padding: 8px;
font-size: 13px;
background-color: #ffffff;
position: fixed;
z-index: 1000;
width: 290px;
border-bottom: 1px solid #dddddd;

}
#notificationsBody1
{
padding: 33px 0px 0px 0px !important;
min-height:300px;

}
#notificationFooter1
{
background-color: #e9eaed;
text-align: center;
font-weight: bold;
padding: 8px;
font-size: 12px;
border-top: 1px solid #dddddd;
}
#notification_count1 
{
padding: 3px 7px 3px 7px;
background: #cc0000;
color: #ffffff;
font-weight: bold;
margin-left: 77px;
border-radius: 9px;
-moz-border-radius: 9px; 
-webkit-border-radius: 9px;
position: absolute;
margin-top: -11px;
font-size: 11px;

}


</style>
<script type="text/javascript" src="js/jquery.min.1.9.js"></script>
<script type="text/javascript" >
$(document).ready(function()
{
$("#notificationLink").click(function()
{
$("#notificationContainer").fadeToggle(300);
$("#notification_count").fadeOut("slow");
return false;
});

//Document Click hiding the popup 
$(document).click(function()
{
$("#notificationContainer").hide();
});

//Popup on click
$("#notificationContainer").click(function()
{
return false;
});

});
</script>
<script type="text/javascript" >
$(document).ready(function()
{
$("#notificationLink1").click(function()
{
$("#notificationContainer1").fadeToggle(300);
$("#notification_count1").fadeOut("slow");
return false;
});

//Document Click hiding the popup 
$(document).click(function()
{
$("#notificationContainer1").hide();
});

//Popup on click
$("#notificationContainer1").click(function()
{
return false;
});

});
</script>
<!-- end notification -->

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
					$frnd_liat_exe=mysqli_query($conn,"select * from friend_request where who_sent_user_id='".$_SESSION['id']."' OR to_whom_user_id='".$_SESSION['id']."' AND status='1'");
					while($frnd_list=mysqli_fetch_array($frnd_liat_exe))
					{
						$fend_det_exe=mysqli_query($conn,"select * from users where (user_id='$frnd_list[who_sent_user_id]' OR user_id='$frnd_list[to_whom_user_id]') AND user_id!='$_SESSION[id]'");
						$fend_dets=mysqli_fetch_array($fend_det_exe);
						$frnd_pic_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$fend_dets[user_id]'");
						$frnd_pic=mysqli_fetch_array($frnd_pic_exe);
						
					?>
                        <div class="col-lg-12 pad_0" style="border-bottom:1px solid #7c7c7c;">
                        	
                            <div class="col-lg-2 pad_0" style="width:80px;">
                            <?php
                            if($frnd_pic['image']!='')
							{
							?><a href="mail.php?mailu2_id=<?php echo $fend_dets['user_id'];?>">
                                <img class="img-circle" src="fb_users/<?php echo $fend_dets['Gender'];?>/<?php echo $fend_dets['Email'];?>/Profile/<?php echo $frnd_pic['image'];?>" width="80px" style="margin-top: 12px;"/></a>
                                <?php
							}else{
								?>
                                <a href="mail.php?mailu2_id=<?php echo $fend_dets['user_id'];?>">
                                <img class="img-circle" src="images/profile/sq.PNG" width="80px">
                                </a>
                                <?php
							}
								?>
                            </div> 
                                                     
                            <div class="col-lg-10 pad_0" style="width:320px;padding-top:10px;line-height: 15px;">
                                <span class="club_headers" style="color:#808080;"> <a href="mail.php?mailu2_id=<?php echo $fend_dets['user_id'];?>" style="color:#7c7c7c;font-size:18px;"><?php echo $fend_dets['Name'];?></a> &nbsp <i class="fa fa-clock-o" style="color:#7c7c7c; font-size:13px;">&nbsp <?php echo $maly_de['datetime'];?></i> </span>
                                <br>
                                <h4 style="padding-left:10px;color:808080;">
            <?php echo $maly_de['subject']?></h4>
            <p style="padding-left:10px;color:#808080">
            <?php echo $maly_de['matter_desc']?></p>
                            </div>
                           
                            
                           
                          
                           
                        </div>
                       <?php
					}
					   ?>
                      
                      
                    
                     
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
                                    <div id="mail_msgs" class="display-message">
                                    <?php
                //check $_GET['id'] is set
                if(isset($_GET['mailu2_id'])){
                    $user_two = trim(mysqli_real_escape_string($conn, $_GET['mailu2_id']));
                    //check $user_two is valid
                    $q = mysqli_query($conn, "SELECT `user_id` FROM `users` WHERE user_id='$user_two' AND user_id!='$_SESSION[id]'");
                    //valid $user_two
                    if(mysqli_num_rows($q) == 1){
                        //check $user_id and $user_two has conversation or not if no start one
                        $conver = mysqli_query($conn, "SELECT * FROM `mail_conversation` WHERE (user_one='$_SESSION[id]' AND user_two='$user_two') OR (user_one='$user_two' AND user_two='$_SESSION[id]')");
 
                        //they have a conversation
                        if(mysqli_num_rows($conver) == 1){
                            //fetch the converstaion id
                            $fetch = mysqli_fetch_assoc($conver);
                            $conversation_id = $fetch['conversation_id'];
                        }else{ //they do not have a conversation
                            //start a new converstaion and fetch its id
                            $q = mysqli_query($conn, "INSERT INTO `mail_conversation` VALUES ('','$_SESSION[id]',$user_two)");
                            $conversation_id = mysqli_insert_id($conn);
                        }
                    }else{
                        die("Invalid $_GET ID.");
                    }
                }else {
                    die("Click On the Person to start Chating.");
                }
            ?>
                                    
                                    </div>
                                       
                                        <div  class="send-message" style="border:1px solid #CDC7C7;height:250px;">
                               
                                 <form class="form-horizontal" role="form" method="post" action="">
                                            
                                    <input type="hidden" id="conversation_id" value="<?php echo base64_encode($conversation_id); ?>">
                                    <input type="hidden" id="user_form" value="<?php echo base64_encode($_SESSION['id']); ?>">
                                    <input type="hidden" id="user_to" value="<?php echo base64_encode($user_two); ?>">
                                                <div>
                                                
                                            
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Subject</label>
                                                        <div class="col-sm-9">
                                                           
                                                            <input type="text" class="form-control" id="mail_subject"  name="mail_subject"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Description</label>
                                                        <div class="col-sm-9">
                                       <textarea rows="3" style="resize:none;"  class="club_txt" id="mail_desc"  name="mail_desc"></textarea>
                                                        </div>
                                                    </div>
                                                    
                                                  
                                                </div>
                                                <br>
                                                

                                                
                                               
                                                <button type="submit" name="sub_forms" id="mail_rply" onClick="return smails();"  class="remodal-confirm">Send Mail</button>

                                            </form>
                               
                               
                                </div>  
                                    
                                  
                                   
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
                                        
                                        <?php /*?>   <div class="remodal" data-remodal-id="sendmail" id="sendmail" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                                            <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                                            <form class="form-horizontal" role="form" method="post" action="">
                                            <?php
                                                $dummy_count=1;
												?>
                                    <input type="hidden" id="conversation_id_<?php echo $dummy_count;?>" value="<?php echo base64_encode($conversation_id); ?>">
									<input type="hidden" id="user_form" value="<?php echo base64_encode($_SESSION['id']); ?>">
                                    <input type="hidden" id="user_to" value="<?php echo base64_encode($user_two); ?>">
                                          <div>
                                                
                                                <div class="form-group">
                                                        <label class="col-sm-3 control-label">Select User</label>
                                                        <div class="col-sm-9">
                                                            <div class="row">
                                                                <select class="selectpicker col-md-12 form-control" name="recer_user_id" id="recer_user_id_<?php echo $dummy_count;?>">
                                                                <option>Select User</option>
																<?php
																$get_frnbd_list_Exe=mysqli_query($conn,"select * from friend_request where who_sent_user_id='".$_SESSION['id']."' OR to_whom_user_id='".$_SESSION['id']."' AND status='1'") ;
																while($getfrnd_list=mysqli_fetch_array($get_frnbd_list_Exe))
																{
																$get_urd=mysqli_query($conn,"select * from users where (user_id='$getfrnd_list[who_sent_user_id]' OR user_id='$getfrnd_list[to_whom_user_id]') AND user_id!='$_SESSION[id]'");
																$urde=mysqli_fetch_array($get_urd);
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
                                        </div><?php */?>
                                        
                                        <!--------------------------------END Mail Model------------------------------------>
               <?php include 'inc/footer.php';?>   
 <script type="text/javascript">
    
	
			   
 </script>
               
                                     
          <script  type="text/javascript" src="js/mail.js"></script>                              
                                        
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
