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
													<i class="fa fa-2x fa-id-card " style="padding-left:0px; padding-right:25px; margin-top:15px;"></i>
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
                                            <a href="#fourms" class="btn" style="width:280px;height:50px;padding:12px;background:#808080; ">
                                               RAISE A TOPIC 
</a>


                                        <div class="col-lg-12" style="border-bottom:1px dashed #afdf7c;">
                                            <div class="col-lg-12" tyle="padding:0px;">
																							<!--<div align="center" style="background:#808080;height:40px;margin-top:5px;padding-top:1px; color:#fff"><h4> LEDGER</h4> </div>-->
                                                                                             <div ><h3 align="right" style="border-bottom:4px solid #Dbd8d8;"><span ><b style="border-bottom:12px solid #Dbd8d8;margin-right:8px;">FORUM</b></span></h3></div>
                                              
												
                                              
                                                <br>
										 <div align="right" id="txtQuest" style="height:450px; overflow-y:scroll;">
                                         
                                                    <ul  style="padding:0px;height:10px;">
                                                                    <?php
                                            $dis_geet_qut=mysqli_query($conn,"select * from question order by  q_id desc");
											while($qust_d=mysqli_fetch_array($dis_geet_qut))
											{
												$qusr_exe=mysqli_query($conn,"select * from users where user_id='$qust_d[user_id]'");
												$quser=mysqli_fetch_array($qusr_exe);
												$qusr_pic_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$quser[user_id]'");
												$qusrpic=mysqli_fetch_array($qusr_pic_exe);
											?>
                                                                         <li style="border-bottom:2px solid  #DBD8D8;list-style:none;padding:6px;">
                                                                        
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
														?>
                                                         
                                                          
                                                      
                                                         <?php
											}
											  ?>
                                                                         
                                                                         </li>
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
                                                                      
                                                                </ul>
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
