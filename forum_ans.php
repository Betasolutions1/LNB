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
																		<!-- disscussions	 -->

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
                                                                   
                                                                         <li style="border-bottom:1px solid  #DBD8D8;list-style:none;padding:6px;"><span class=" todo_right"><a href="#" onClick="get_industryanswers(<?php echo $ddii['INDUSTRY_ID']?>)" <span> <h5><?php echo $ddii['INDUSTRY_NAME'];?> &nbsp <span class="badge"><?php echo $di_cou;?></span></h5> </span></a></span></li>
                                                                         <?php
						}
							?>
                                                                       
                                                                      
                                                                </ul>
                                                                </div>
                                                     </div>
																	                                        </div>
																																					<!-- discussion end -->
                                                                                                                                                    
<!-- company info -->
<div class="col-lg-9 col-md-9 pst_box panel" style="margin-right:-25px;">
 <div class="col-lg-12 " align="center">
                                           

                                        <div class="col-lg-12" style="border-bottom:1px dashed #afdf7c;">
                                            <div class="col-lg-12" tyle="padding:0px;">
																							<!--<div align="center" style="background:#808080;height:40px;margin-top:5px;padding-top:1px; color:#fff"><h4> LEDGER</h4> </div>-->
                                                                                             <div ><h3 align="right" style="border-bottom:4px solid #Dbd8d8;"><span ><b style="border-bottom:12px solid #Dbd8d8;margin-right:8px;">FORUM Answers</b></span></h3></div>
                                              
												
                                              
                                                <br>
										 <div align="right" id="txtAnswe" style="height:450px; overflow-y:scroll;">
                                         
                                                    <ul  style="padding:0px;height:10px;">
                                                                   <?php
                                        $get_Qust_ans_exe=mysqli_query($conn,"select * from question where q_id='$_GET[Qid]'");
										$ques_desc=mysqli_fetch_array($get_Qust_ans_exe);
										$in_qeuser_exe=mysqli_query($conn,"select * from users where user_id='$ques_desc[user_id]'");
										$in_qwy=mysqli_fetch_array($in_qeuser_exe);
										$inqppic=mysqli_query($conn,"select * from user_profile_pic where user_id='$in_qwy[user_id]'");
										$upiv=mysqli_fetch_array($inqppic);
										//echo $in_qwy['Name'];
										?>
                                                                         <li style="border-bottom:2px solid  #DBD8D8;list-style:none;padding:6px;">
                                                                        
                                                                         <i style="float:left;" class="fa fa-comments">+99</i>
                                                                         <br/>
                                                                         <span style="float:left;">1 day ago</span>
                                                                        
                                                                         <a href="forum_ans.php?Qid=<?php echo $qust_d['q_id'];?>"><?php echo $ques_desc['question'];?> &nbsp</a>
                                                                         <br>
                                                                           <span class="club_headers" style="color:#000;">Inked by <a href="#" style="color:#afdf7c;"><?php echo $in_qwy['Name'];?></a> &nbsp <i class="fa fa-clock-o" style="color:#a9a9a9; font-size:13px;">&nbsp <?php echo $ques_desc['datetime'];?></i> </span>
                                                                           
                                                 <?php
                                                if($upiv['image']!='')
												{
												?>
                                                    <img src="fb_users/<?php echo $in_qwy['Gender']?>/<?php echo $in_qwy['Email'];?>/Profile/<?php echo $upiv['image'];?>" width="40" style="margin-left:0px;border-radius:50px"/>
												<?php
												}else{
													?>
                                                    <img src="images/profile/sq.PNG" width="80" style="margin-left:0px;border-radius:50px">
                                                    <?php }?>
                                                    <br/>
                                                      <div  style="margin-bottom:15px;">
                                                <p><span><h4>Description:</h4></span>
            <?php echo $ques_desc['que_desc'];?></p>
                                               <!-- <span style="color:#a9a9a9">thanks</span>
                                                <br>-->
                                               <?php /*?> <span style="color:#a9a9a9"><?php echo $in_qwy['Name'];?></span><?php */?>
                                            </div>
                                                 
                                                 
                                                  <div class="col-lg-12" style="height:100px; padding:0px;">
                                            <div class="col-lg-12">
                                            <?php 
											$dummy_frm_id=1;
											?>
                                            <form method="post" action="" id="form_<?php echo $dummy_frm_id;?>">
                                            <input type="hidden" name="qus_id" id="que_id_<?php echo $dummy_frm_id;?>" value="<?php echo $ques_desc['q_id'];?>">
                                                <input type="text" class="club_txt" name="ans_frms" id="ans_frms_<?php echo $dummy_frm_id;?>"style="margin-bottom:15px;" placeholder="Ink your reply...">
                                                <input type="submit" style="display:none;"  onClick="return insert_answer(<?php echo $dummy_frm_id;?>);" >
                                             </form>
                                            </div>
                                            <div class="col-lg-12" style="height:800px; overflow-y:scroll; padding:0px; border-top:2px solid #afdf7c">
                                            <div id="disanswers">
                                            <?php
                                            $get_anse_frm_qte=mysqli_query($conn,"select * from answered where quest_id='$_GET[Qid]' order by ans_id desc");
											while($dip_ans=mysqli_fetch_array($get_anse_frm_qte))
											{
											$watq_exe=mysqli_query($conn,"select * from users where user_id='$dip_ans[user_id]'");
											$watq=mysqli_fetch_array($watq_exe);
											$ah_ppic_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$watq[user_id]'");
											$ur_pic=mysqli_fetch_array($ah_ppic_exe);
											?>
                                                <div class="col-lg-12 pad_0" style=" border-bottom:1px solid #afdf7c; ">
                                                    <div class="col-lg-2 pad_0" style="width:80px;float:right;">
                                                    <?php
                                                    if($ur_pic['image']!='')
													{
													?>
                                                        <img src="fb_users/<?php echo $watq['Gender'];?>/<?php echo $watq['Email'];?>/Profile/<?php echo $ur_pic['image'];?>" width="80px" style="margin-left:0px;border-radius:50px"/>
                                                        <?php }else {?>
                                                        <img src="images/profile/sq.PNG" width="80" style="margin-left:0px;border-radius:50px">
                                                        <?php }?>
                                                    </div>                                                     
                                                    <div class="col-lg-10 pad_0" style="width:810px;padding-left:15px;">
                                                        <div class="col-lg-12" style="padding:5px;padding-left:5px">
                                                            <span class="club_headers" style="color:#808080;">Inked by <a href="#" style="color:#afdf7c;"><?php echo $watq['Name'];?></a> &nbsp <i class="fa fa-clock-o" style="color:#a9a9a9; font-size:13px;">&nbsp <?php echo $dip_ans['datetime'];?></i> </span>
                                                        </div>
                                                        <div class="col-lg-12" style="float:left;"> 
                                                            <p><?php echo $dip_ans['answer'];?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                          <?php
											}
										  ?>
                                            
                                              </div>
                                              
                                              
                                            
                                            </div>
                                        </div>   
                                                         
                                                                          
                                                         
                                                          
                                                      
                                                      
                                                                         
                                                                         </li>
                                                                       
                                                                      
                                                                </ul>
                                                    </div>
                                            </div>
                                           
                                        </div>
                                        <br>
                                         
	
                                       
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
		<footer>
		</footer>




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
