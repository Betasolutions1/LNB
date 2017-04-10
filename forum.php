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
          <script src="http://cloud.tinymce.com/stable/tinymce.min.js?apiKey=3x8m7u6eu4r17en245q10ya3a0u7j7695z1elia7zhm2o1xk"></script>
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
<?php include 'inc/header_f.php';?>
        <div class="container " style="width:100%;">
        <div class="container " style=" padding-top: 30px;">
            <div class="row">

                <div class="col-lg-12 col-md-12">

                <div class="col-lg-12 col-md-12  ">

                    <div class="tab-content">
                        <div class="tab-pane active" id="workspace-vr">

                            <div class="tab-content">
                                <div class="tab-pane active" id="tab6">
                                    <div class="accordion-wrap">
                                        <!-----------------------------WORK BEGIN------------------------------------->

                                         <div class="row " style=" height:550px">
                                    <br>
																		<!-- disscussions-->

							        <div class="col-lg-3 col-md-3 panel pst_box">
                                                                                                                <br>
																											 <div ><h3 align="right" style="border-bottom:4px solid #Dbd8d8;"><span ><b style="border-bottom:12px solid #Dbd8d8;margin-top:-15px;">Recent Topics</b></span></h3></div>
                                                                                                            												<!--<div align="center" style="background:#808080;height:40px;margin-top:-15px;padding-top:1px; color:#fff"><h4> TODO</h4> </div>-->



                                                 <div align="right" class="panel-content col-lg-12" style="height:400px;overflow-y:scroll;">
                                                 <div id="frm_Qus">
                                                      <ul  style="padding:0px;height:10px;">
                                                       <?php
                        $dis_indu=mysqli_query($conn,"select * from add_industry");
						while($ddii=mysqli_fetch_array($dis_indu))
						{
							$qt_cou_exe=mysqli_query($conn,"select * from question where INDUSTRY_ID='$ddii[INDUSTRY_ID]'");
							$di_cou=mysqli_num_rows($qt_cou_exe);
						?>

                                                                         <li style="border-bottom:1px solid  #DBD8D8;list-style:none;padding:6px;"><span class=" todo_right"><a href="#" onClick="get_industryquestions(<?php echo $ddii['INDUSTRY_ID']?>)"> <span> <h5><?php echo $ddii['INDUSTRY_NAME'];?> &nbsp <span class="badge"><?php echo $di_cou;?></span></h5> </span></a></span></li>
                                                                         <?php
						}
							?>
                                                                        <?php /*?> <li style="border-bottom:1px solid  #DBD8D8;list-style:none;padding:6px;"><span id="test" class="todo_right "><a href="#" id="check" onclick="return Check()">Completed</a></span></li>
                                                                         <li style="border-bottom:1px solid  #DBD8D8;list-style:none;padding:6px;">Date</li>
                                                                         <li style="border-bottom:1px solid  #DBD8D8;list-style:none;padding:6px;"><a href="#" onClick="return getodotype('CONSIGNMENTS');">Consignments</a></li>
                                                                         <li style="border-bottom:1px solid  #DBD8D8;list-style:none;padding:6px;"><a href="#" onClick="return getodotype('MEETINGS');">Meetings</a></li>
                                                                         <li style="border-bottom:1px solid  #DBD8D8;list-style:none;padding:6px;"><a href="#" onClick="return getodotype('CALL');">Clients</a></li><?php */?>

                                                                </ul>
                                                                </div>
                                                     </div>
																	                                        </div>
																																					<!-- discussion end -->

<!-- company info -->
<div class="col-lg-9 col-md-9 pst_box panel" style="margin-right:-25px;">
 <div class="col-lg-12 " align="center">
	 <br>
                                            <a href="#fourms" class="btn" style="width:280px;height:50px;padding:12px;background:#808080; color:#fff">
                                               RAISE A TOPIC
</a>


                                        <div class="col-lg-12" style="border-bottom:1px dashed #808080;">
                                            <div class="col-lg-12" tyle="padding:0px;">
																							<!--<div align="center" style="background:#808080;height:40px;margin-top:5px;padding-top:1px; color:#fff"><h4> LEDGER</h4> </div>-->
                                                                                             <div ><h3 align="right" style="border-bottom:4px solid #Dbd8d8;"><span ><b style="border-bottom:12px solid #Dbd8d8;margin-right:8px;">FORUM</b></span></h3></div>



                                                <br>
										 <div align="right" id="txtQuest" style="height:450px; overflow-y:scroll;">

                                                    <div  style="padding:0px;height:10px;">
                                                                    <?php
                                            $dis_geet_qut=mysqli_query($conn,"select * from question order by  q_id desc");
											while($qust_d=mysqli_fetch_array($dis_geet_qut))
											{
												$qusr_exe=mysqli_query($conn,"select * from users where user_id='$qust_d[user_id]'");
												$quser=mysqli_fetch_array($qusr_exe);
												$qusr_pic_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$quser[user_id]'");
												$qusrpic=mysqli_fetch_array($qusr_pic_exe);
											?>
											<div class="row club_network_row" style="width:100%;">
												<div class="col-lg-2" style="padding:0px;">
<div class="col-lg-12" style="margin-bottom:5px;">
 <i style="float:left;" class="fa fa-comments">+99</i>
</div>
<div class="col-lg-12">
	<span style="float:left;">1 day ago</span>
</div>
												</div>
												<div class="col-lg-8 club_msg_shape" style=" height: 70px; background-color: #fff; padding-right: 0px;  border-botto: 1px solid #7c7c7c;" align="right">
													<p>
														<a href="forum_ans.php?Qid=<?php echo $qust_d['q_id'];?>" style="color:#808080;"><?php echo $qust_d['question'];?> &nbsp</a>
													</p>
													<span class="club_headers" style="color:#000;">Inked by <a href="#" style="color:#808080;"><?php echo $quser['Name']?></a> &nbsp <i class="fa fa-clock-o" style="color:#a9a9a9; font-size:13px;">&nbsp <?php echo $qust_d['datetime'];?></i> </span>


												</div>

													<div class="col-lg-2" style="padding-left:0px;padding-right:0px; width:70px; ">
															<div class="col-lg-4" align="left" style="padding-left:3px;padding-right:0px; width:70px;">
																<?php
					if($qusrpic['image']!='')
	{
	?>
							<img src="fb_users/<?php echo $quser['Gender']?>/<?php echo $quser['Email'];?>/Profile/<?php echo $qusrpic['image'];?>" width="80px" style="margin-left:0px;border-radius:50px" />
							<?php
	}else
	{
	?>
							<img src="images/profile/sq.PNG" width="80px" style="margin-left:0px;border-radius:50px" >
							<?php
	}
	?>




															</div>
													</div>

											</div>
											<hr style="margin:2px;margin-bottom:5px;">
											<?php
			 	}
			 	?>
                                                                    <?php /*  <li style="border-bottom:2px solid  #DBD8D8;list-style:none;padding:6px;">

                                                                         <i style="float:left;" class="fa fa-comments">+99</i>
                                                                         <br/>
                                                                         <span style="float:left;">1 day ago</span>

                                                                         <a href="forum_ans.php?Qid=<?php echo $qust_d['q_id'];?>"><?php echo $qust_d['question'];?> &nbsp</a>
                                                                         <br>
                                                                           <span class="club_headers" style="color:#000;">Inked by <a href="#" style="color:#afdf7c;"><?php echo $quser['Name']?></a> &nbsp <i class="fa fa-clock-o" style="color:#a9a9a9; font-size:13px;">&nbsp <?php echo $qust_d['datetime'];?></i> </span>
                                                                          <?php
                                                    if($qusrpic['image']!='')
													{
													?>
                                                        <img src="fb_users/<?php echo $quser['Gender']?>/<?php echo $quser['Email'];?>/Profile/<?php echo $qusrpic['image'];?>" width="80px" style="margin-left:0px;border-radius:50px" />
                                                        <?php
													}else
													{
														?>
                                                        <img src="images/profile/sq.PNG" width="80px" style="margin-left:0px;border-radius:50px" >
                                                        <?php
													}
														*/?>





                                                                         <!-- </li> -->
                                                                        <?php /*?> <li style="border-bottom:2px solid  #DBD8D8;list-style:none;padding:6px;"><a href="#" id="check">Completed</a>
                                                                          <img src="img/16.jpg" style="border-radius:50px;height:50px;width:50px;">
                                                                         </li>
                                                                         <li style="border-bottom:2px solid  #DBD8D8;list-style:none;padding:6px;">Date
                                                                          <img src="img/16.jpg" style="border-radius:50px;height:50px;width:50px;"></li>
                                                                         <li style="border-bottom:2px solid  #DBD8D8;list-style:none;padding:6px;"><a href="#" >Consignments</a>
                                                                          <img src="img/16.jpg" style="border-radius:50px;height:50px;width:50px;">
                                                                         </li>
                                                                         <li style="border-bottom:2px solid  #DBD8D8;list-style:none;padding:6px;"><a href="#" >Meetings</a>
                                                                          <img src="img/16.jpg" style="border-radius:50px;height:50px;width:50px;"></li>
                                                                         <li style="border-bottom:2px solid  #DBD8D8;list-style:none;padding:6px;"><a href="#" >Clients</a>
                                                                          <img src="img/16.jpg" style="border-radius:50px;height:50px;width:50px;">
                                                                         </li><?php */?>

                                                                </div>
                                                    </div>
                                            </div>

                                        </div>
                                        <br>
                                         <!---------------------------Forums insertion model--------------------------->

                                           <div class="remodal" data-remodal-id="fourms" id="fourms" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                                            <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                                            <form class="form-horizontal" role="form" method="post" action="script2.php">
                                                <div>

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Question</label>
                                                        <div class="col-sm-9">

                                                            <input type="text" class="form-control" id="forum_question"  name="forum_question"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Description</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="quest_desc"  name="quest_desc">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Select Industry</label>
                                                        <div class="col-sm-9">
                                                            <div class="row">
                                                                <select class="selectpicker col-md-12 form-control" name="set_indus" id="set_indus">
                                                                <option>Select Industry</option>
																<?php
																$get_inds=mysqli_query($conn,"select * from add_industry");
																while($insd=mysqli_fetch_array($get_inds))
																{
																?>
                                                                    <option value="<?php echo $insd['INDUSTRY_ID'];?>"><?php echo $insd['INDUSTRY_NAME'];?></option>
                                                                   <?php
																}
																   ?>


                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>



                                                </div>
                                                <br>


                                                <button  data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
                                                <!--onClick="return gourmquestions();"-->
                                                <button type="submit" name="sub_forms" data-remodal-action="confirm" onClick="return Fourmquestions();" class="remodal-confirm">Add Question</button>

                                            </form>
                                        </div>

                                        <!--------------------------------END Forums Model------------------------------------>


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
    </div>
		<?php include 'inc/footer.php';?>




<script type="text/javascript" src="js/space_discussion.js"></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="../preloaders/css3-preloader-transition-finish/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
	<script src="../preloaders/css3-preloader-transition-finish/js/main.js"></script>

        <!--Bookmark End-->
        <!--End todo Script-->
        <!-- /.container -->
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>

        <script src="js/index.js"></script>

        <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>

         <script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script>

    </body>
</html>
