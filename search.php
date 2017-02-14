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
        <?php //include 'assets/css/folio.php';?>
         <link rel="stylesheet" href="assets/css/folio.php">
        <link href="//db.onlinewebfonts.com/c/93c4327f0457b01d13b376849536395d?family=Stencil+Std" rel="stylesheet" type="text/css" />
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Pacifico'>
        <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
        <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
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
          <script type="text/javascript" src="js/form_scripts.js"></script>
             
    </head>
    <body>
    <?php
$user_det=mysqli_query($conn,"select * from users where user_id='$_SESSION[id]'");
$usr_dis=mysqli_fetch_array($user_det);
$get_user_ppic_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$_SESSION[id]'");
$fet_ppic=mysqli_fetch_array($get_user_ppic_exe);
$user_personal_dets_exe=mysqli_query($conn,"select * from user_info where user_id='$_SESSION[id]'");
$fet_info=mysqli_fetch_array($user_personal_dets_exe);
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
                        <form method="get" action="search.php">
                            <input type="text" name="search_data" id="search_data" style="width:350px; height:30px;color:#808080;" placeholder="Search">
                            <input type="submit" name="sub_search" style="display:none;">
                            </form>
                        </li>
                        <li class="active">
                            <a href="forum.php" style="font-family:Stencil Std;color:#808080; font-size:24px; padding-left:25px; padding-right:25px;">F</a>
                        </li>
                        <li>
                            <a href="mail.php" style="font-family:Stencil Std;color:#808080; font-size:24px; padding-left:25px; padding-right:25px;">M</a>
                        </li>
                        <li>
                            <a href="#contact" style="font-family:Stencil Std;color:#808080; font-size:24px; padding-left:25px; padding-right:25px;">S</a>
                        </li>
                        <!--<li>
                            <a href="#" style="font-family:Stencil Std;color:#808080; font-size:24px; padding-left:25px; padding-right:25px;">N</a>
                        </li>-->
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
                        <img src="../assets//images/b_2.jpg" style="width:275px; height:400px; margin-left:-60px; margin-top:-45px; margin-bottom:-45px" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 "> 
                <?php
                if(isset($_GET['search_data']))
				{
				?>
                    <div class="tab-content">
                       
                        
                            <div class="pst_main_background pst_box " align="center" style="background-color:#fff; z-index:-1;">
                           
                            <div class="club_sub_div_height">
                                    <ul class="nav nav-tabs"> 
                                        <li class="active">
                                            <a href="#tab8" data-toggle="tab"><i class="fa fa-pencil"></i> Ink</a>
                                        </li>                                         
                                        <li>
                                            <a href="#tab9" data-toggle="tab"><i class="fa fa-pencil"></i> Folio</a>
                                        </li>                                         
                                        <li>
                                            <a href="#tab10" data-toggle="tab"><i class="fa fa-pencil"></i> Forums</a>
                                        </li>                                         
                                        <li>
                                            <a href="#tab11" data-toggle="tab"><i class="fa fa-pencil"></i> Mails</a>
                                        </li>                                         
                                       <!-- <li>
                                            <a href="#tab12" data-toggle="tab"><i class="fa fa-pencil"></i> Settings</a>
                                        </li>   -->
                                        
                                        
                                        
                                                                              
                                    </ul>
                                   
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab8">
      <!---------------------------------------------------INKED SEARCH--------------------------------------------------------------->
                                          
                                          <div class="bg_pst">

 <?php 
			$user_profile_photo_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$_SESSION[id]'");
			$user_profile_pic=mysqli_fetch_array($user_profile_photo_exe);
			?>
            <?php
			 
			$count=0;
            $user_profile_post_exet=mysqli_query($conn,"select * from user_post where user_id='".$_SESSION['id']."' And post_txt LIKE '%$_GET[search_data]%';");
			$get_ink_count=mysqli_num_rows($user_profile_post_exet);
			if($get_ink_count!=0)
			{
			while($user_profile_post=mysqli_fetch_array($user_profile_post_exet))
			{
				$count++;
			?>
                                            <div class="pst_box" style="background-color:#fff;">
                                                <div class="pst_head">
                                                    <div class="row pst_row_fill" style="">
                                                        <div class="col-lg-2 " align="left" style="width:70px;">
                                                            <a href="#" class="pst_head_left">
                                                                <img src="fb_users/<?php echo $usr_dis['Gender']; ?>/<?php echo $usr_dis['Email']; ?>/Profile/<?php echo $user_profile_pic['image'];?>" width="70" style="margin-left:-15px;">
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-8 pst_head_txt">
                                                            <a href="#" class="text_wht"><?php echo $usr_dis['Name'];?></a>
                                                            <br>
                                                            <span class="pst_head_pos text_wht"><?php echo $usr_dis['designation'];?>-<?php echo $usr_dis['company']?></span>
                                                            <br>
                                                            <span class="text_wht"><?php echo $usr_dis['industry'];?></span>
                                                        </div>
                                                        <div class="col-lg-2">
                                                       <?php
                            $user_profile_bookmark_exe=mysqli_query($conn,"select * from user_post_status where post_id='$user_profile_post[post_id]'");
							$user_profilr_bookmark=mysqli_fetch_array($user_profile_bookmark_exe);
							if($user_profilr_bookmark['status']=='Like')
							{
							?>
					
					
                    <span><a href=""  onClick="return unlike(<?php echo $user_profile_post['post_id'];?>,<?php echo $_SESSION['id'];?>);" >unlike</a></span>
                    <?php
				}else
				{
					//echo $resp['post_id'] ."<br>";
					//echo $_SESSION['id'];
				?>
                
                <span><a href=""  onClick="return like(<?php echo $user_profile_post['post_id'];?>,<?php echo $_SESSION['id'];?>);" >like</a></span>
                <?php
				}
				?>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                                <div class="pst_body">
                                                 <?php
                    if($user_profile_post['post_pic'])
					{
					?>
                                                    <span><img src="fb_users/<?php echo $usr_dis['Gender'];?>/<?php echo $usr_dis['Email']; ?>/Post/<?php echo $user_profile_post['post_pic'];?>" class="img-responsive" style=""></span>
                                                     <?php
												}
												?>
                                                    <br>
                                                      <p style="margin-top:10px;"><?php echo $user_profile_post['post_txt']?></p> 
                                                    <span style="font-size:10px;"> - <?php echo $user_profile_post['post_time'];?></span>
                                                   
                                                </div>
                                                <div class="pst_cmt">
                                                  <?php
                $user_profile_post_comment_execu=mysqli_query($conn,"select * from user_post_comment where post_id='$user_profile_post[post_id]'");
				$user_profile_comment_count=mysqli_num_rows($user_profile_post_comment_execu);
				
				?>
                                                    <div class="pst_cmt_tog pst_cmt_pad">
                                                        <!--comment toggle-->
                                                        <i></i>
                                                        <a href="#"><span style="margin-left:10px;">View Comments</span></a>
                                                        <span class="pst_cmt_muted"><?php echo $user_profile_comment_count;?> writes</span>
                                                    </div>
                                                    <?php
                                                   while($user_profile_post_comment=mysqli_fetch_array($user_profile_post_comment_execu))
				{
				$profile_post_comment_user_exec=mysqli_query($conn,"select * from users where user_id='$user_profile_post_comment[user_id]'");
				$profile_post_comment_user_de=mysqli_fetch_array($profile_post_comment_user_exec);
				$profile_post_comment_user_pic_exect=mysqli_query($conn,"select * from user_profile_pic where user_id='$user_profile_post_comment[user_id]'");
				$prof_post_comment_user_pp=mysqli_fetch_array($profile_post_comment_user_pic_exect);
				?>
													
                                                    <div class="row  pst_cmt_body">
                                                        <div class="col-lg-2" style="width:70px;">
                                                            <a href="#" class="pst_head_left">
                                                                <img src="fb_users/<?php echo $profile_post_comment_user_de['Gender'];?>/<?php echo $profile_post_comment_user_de['Email']; ?>/Profile/<?php echo $prof_post_comment_user_pp['image']; ?>"  width="70" style="margin-left:-15px;">
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-10" style="padding-top:5px;">
                                                            <a href="#" style="color:#000;"><?php echo $profile_post_comment_user_de['Name'];?></a>
                                                            <br>
                                                            <span class="pst_head_pos  pst_cmt_muted">- wrote on <?php echo $user_profile_post_comment['comment_time'];?></span>
                                                            <br>
                                                            <div style="margin-left:10px;"><?php echo $user_profile_post_comment['comment'];?></div>
                                                        </div>
                                                    </div>
                                                    <?php
				}
													?>
                                                    
                                                    <div class="row pst_cmt_row"> 
                                                        <div class="col-lg-10 pst_cmt_pad">
                                                        <form method="post" action="script_code.php">
                                                        <input type="hidden" name="cmt_ins_id" value="<?php echo $_SESSION['id'];?>">
              											<input type="hidden" name="cmt_post_id" value="<?php echo $user_profile_post['post_id'];?>">
                                                        <?php
                                                        $date=date('Y-m-d h:i');
														
														?>
                                                        <input type="hidden" name="cmt_ins_date" value="<?php echo $date;?>">
                                                        <input type="text" class="form-control" name="cmt_txt" style="width:100%; padding-left:10px;padding-right:10px; " placeholder="Write..."> 
                                                        <input type="submit" name="cmt_ins" style="display:none;">
                                                            </form>
                                                        </div>
                                                        <!--<div class="col-lg-2 pst_cmt_c1">
                                                            <button type="button" class="btn btn-primary" href="#" style="background:#afdf7c; ">
                                                                <i class="fa fa-pencil"></i>
                                                            </button>                                                             
                                                        </div>-->
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
				}
			}else{
											?>
                                            <p>Result Not Found</p>
                                            <?php
			}
											?>

</div>
                                          
          <!------------------------------------------------END INKED------------------------------------------------------------->
                                        </div>
                                        <div class="tab-pane" id="tab9">
          <!------------------------------------------------------Seach FOLIO--------------------------------------->
                                         <div class="pst_main_background" style="background-color:#fff;">
 <?php
 $cover_pic_exe=mysqli_query($conn,"select * from user_cover_pic where user_id='$_SESSION[id]'");
$cvpic=mysqli_fetch_array($cover_pic_exe);
 ?>
                                <div class="pst_box">
                                    <div class="parallax_folio" style="background-image: url('fb_users/<?php echo $usr_dis['Gender'];?>/<?php echo $usr_dis['Email'];?>/Cover/<?php echo $cvpic['image'];?>');">
                                   
                                    </div>
                                    <br>
                                    <br>
                                    <div style="border-top:1px solid #afdf7c;border-bottom:1px solid #afdf7c; width:570px; margin-left:10px; margin-right:10px;">
                                     
                                        <br>
                                      <h4 style="color:#afdf7c;">
    WHO I AM <!--<span class="icon" ><a href="#folio" class="icon" > <i class="fa fa-pencil icon"></i></a> </span>--></h4>
    <?php
	$folio_desc=mysqli_query($conn,"select * from folio where user_id='$_SESSION[id]'");
	$fo_des=mysqli_fetch_array($folio_desc);
	?>
                                        <P style="color:#d3d3d3">
        <?php echo $fo_des['description'];?></P>
                                        <br>
                                    </div>
                                
                                    
                                    
                                    
                                    
                                    <br>
                                    <div style="border-bottom:1px solid #afdf7c; width:570px; margin-left:10px; margin-right:10px;">
                                        <h4 style="color:#afdf7c;">SKILLS <!--<span class="icon" ><a href="#skill" class="icon" > <i class="fa fa-pencil icon"></i></a> </span>--></h4>
                                        <br>
    								 <?php
        $us_sli_exe11=mysqli_query($conn,"select * from user_skills where user_id='$_SESSION[id]' AND skill LIKE  '%$_GET[search_data]%'");
		$cou_slill=mysqli_num_rows($us_sli_exe11);
		if($cou_slill)
		{
		while($uskil11=mysqli_fetch_array($us_sli_exe11))
		{
		?>
                                                                    <button type="button" class="btn btn_grn" value="" style="height:30px; margin:5px;text-transform:uppercase;"><?php echo $uskil11['skill'];?></button>
                                                                    <?php
		}
		}else
		{
																	?>
                                                                    <p>Result Not found</p>
                                                                    <?php
		}
																	?>
    
                                        <br>
                                    </div>
                                    <br>
                                    <div style=" width:570px; margin-left:10px; margin-right:10px;">
                                        <h4 style="color:#afdf7c;">
   WORKS <!--<span class="icon" ><a href="#user_work" class="icon" > <i class="fa fa-pencil icon"></i></a> </span>--></h4>
                                        <BR>
                                    </div>
                                    <div> 
                                    <?php 
									$get_wpjs=mysqli_query($conn,"select * from work_projects where user_id='$_SESSION[id]' AND work_title LIKE  '%$_GET[search_data]%'");
									$cou_work=mysqli_num_rows($get_wpjs);
									if($cou_work!=0)
									{
									while($fol_wrks=mysqli_fetch_array($get_wpjs))
									{
									?>
                                     <a href="#popup_work_<?php echo $fol_wrks['work_id'];?>">
                                        <div class="folio_wrk" style="background-image: url('fb_users/<?php echo $usr_dis['Gender'];?>/<?php echo $usr_dis['Email'];?>/Projects/<?php echo $fol_wrks['work_image'];?>');">
                                            <div align="center" style="color:#fff; height:100px; padding-top:20px;">
                                                <h3> <?php echo $fol_wrks['work_title'];?></h3>
                                            </div>
                                        </div></a>
                                        
 <!--work project Model Begin-->
  <div class="remodal" data-remodal-id="popup_work_<?php echo $fol_wrks['work_id'];?>" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
  <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
  
  <div>
  
  <h2><span><?php echo $_SESSION['Name'];?></span></h2>
  <div class="col-lg-6">
    <h4 id="modal1Title"><?php echo $fol_wrks['work_title'];?></h4>
   	<p><?php echo $fol_wrks['work_description'];?></p>
   
    <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
  
  <button type="submit"  data-remodal-action="confirm" class="remodal-confirm">OK</button>
  
  </div>
  <div class="col-lg-6">
  <img src="fb_users/<?php echo $usr_dis['Gender'];?>/<?php echo $usr_dis['Email'];?>/Projects/<?php echo $fol_wrks['work_image'];?>" style="min-height:250px;max-height:250px;min-width:250px;max-width:250px;"/>
  </div>
   
  </div>
  <br>
  <br>&nbsp;
  
  
 
 
 
</div>
                                                    <!-- End work project  Model-->                        
                                                                    
                                        
                                        
                                        
                                        <?php
									}
									}else{
										?>
                                     <p>Result Not found</p>   
                                      <?php
									}
									  ?> 
                                      
                                       
                                       <!-- <div class="folio_wrk_4">
                                            <div align="center" style="color:#fff; height:100px; padding-top:20px;">
                                                <h3>click</h3>
                                            </div>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            
 <?php /*?><!--work Model Begin-->
  <div class="remodal" data-remodal-id="folio" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
  <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
  <form method="post" action="">
  <div>
  
  <h2><span><?php echo $_SESSION['Name'];?></span></h2>
  <div class="col-lg-12">
    <h4 id="modal1Title">WHO AM I</h4>
    <?php 
	$foloi_exe=mysqli_query($conn,"select * from folio where user_id='$_SESSION[id]'");
	$folio=mysqli_fetch_array($foloi_exe);
	?>
    <textarea cols="80" rows="3" style="resize:none" name="folio_desc" id="folio_desc"><?php echo $folio['description'];?></textarea>
  </div>
   
   
  </div>
  <br>
  
  <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
  
  <button type="submit"  onClick="add_folio_desc();"  class="remodal-confirm">ADD</button>
 
  </form>
 
</div>
                                                    <!-- End work Model-->           <?php */?>                      
                            
  <?php /*?>   <!--Skill Model Begin-->
  <div class="remodal" data-remodal-id="skill" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
  <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
  <form method="post" action="">
  <div>
  
  <h2><span><?php echo $_SESSION['Name'];?></span></h2>
  <div class="col-lg-12">
    <h4 id="modal1Title">My Skills</h4>
    <div class="form-group"> 
                                                        <input type="text" class="form-control" name="skill_name" id="skill_name" placeholder="Skill Name"> 
                                                    </div>                                                     
                                                    <div class="form-group"> 
                                                        <input type="text" class="form-control" name="skill_rate" id="skill_rate" placeholder="Give Ur Own Rating "> 
                                                    </div>                                                     
                                                                                                         
                                                   
    
  </div>
   
   
  </div>
  <br>
  
  <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
  
  <button type="submit"  onClick="add_user_skill();" data-remodal-action="confirm" class="remodal-confirm">ADD SKILLS</button>
 
  </form>
 
</div>
                                                    <!-- End Skill Model-->     <?php */?>                   
                            
                            
                            
                            
        <?php /*?>  <!--Work And Project Model Begin-->
  <div class="remodal" data-remodal-id="user_work" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
  <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
  <form method="post" action="script_code.php" enctype="multipart/form-data">
  <div>
  
  <h2><span><?php echo $_SESSION['Name'];?></span></h2>
  <div class="col-lg-12">
    <h4 id="modal1Title">My Works And Projects</h4>
    <div class="form-group"> 
                                                        <input type="text" class="form-control" name="project_name" id="project_name" placeholder="Project Name"> 
                                                    </div>                                                     
                                                    <div class="form-group"> 
                                                        <textarea  class="form-control" rows="3" cols="80" name="project_desc" id="project_desc" placeholder="Project Description"> </textarea>
                                                    </div> 
                                                    <div class="form-group"> 
                                                        <input type="file" class="form-control" name="file" id="file" placeholder="Give Ur Own Rating "> 
                                                    </div>                                                     
                                                                                                         
                                                   
    
  </div>
   
   
  </div>
  <br>
  
  <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
  
  <button type="submit" name="add_work_projects"  class="remodal-confirm">ADD Projects</button>
 
  </form>
 
</div>
                                                    <!-- End Work And Project Model-->                        
                                               
                            
                            
                                           
              <!----=--------------------------------------------END FOLIO--------------------------------------------><?php */?>
                                        </div>
                                        <div class="tab-pane" id="tab10">
              <!-----------------------------------------BEGIN FORumS------------------------------------>
               <div class="col-lg-12" style="height:850px; padding:0px;">
                                         <div class="col-lg-12" style="background-color:#afdf7c; height:50px;">
                                                <span><h3 class="club_headers" style="text-align:center;color:#fff">
       Forums</h3> </span>
                                            </div>
                                      <div class="col-lg-12" style="height:800px; overflow-y:scroll; padding:0px;">
                                            <div id="txtQuest">
                                            <?php
                                            $dis_geet_qut=mysqli_query($conn,"select * from question where question LIKE '%$_GET[search_data]%'");
											$cou_forums=mysqli_num_rows($dis_geet_qut);
											if($cou_forums!=0)
											{
											while($qust_d=mysqli_fetch_array($dis_geet_qut))
											{
												$qusr_exe=mysqli_query($conn,"select * from users where user_id='$qust_d[user_id]'");
												$quser=mysqli_fetch_array($qusr_exe);
												$qusr_pic_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$quser[user_id]'");
												$qusrpic=mysqli_fetch_array($qusr_pic_exe);
											?>
                                            
                                                <div class="col-lg-12 pad_0" style="height:80px; border-bottom:1px solid #afdf7c;">
                                                    <div class="col-lg-3 pad_0" style="width:80px;">
                                                        <img src="fb_users/<?php echo $quser['Gender']?>/<?php echo $quser['Email'];?>/Profile/<?php echo $qusrpic['image'];?>" width="80px" style="margin-left:0px;" />
                                                    </div>    
                                                    <!--width:810px;-->                                                 
                                                    <div class="col-lg-9 pad_0" style="height:80px;padding-left:15px;">
                                                        <div class="col-lg-10"> 
                                                           <a href="forum_ans.php?Qid=<?php echo $qust_d['q_id'];?>"> <span><h4 class="club_headers" style="width:500px;">
           <?php echo $qust_d['question'];?> &nbsp <span class="badge">unread</span></h4></span></a>
                                                        </div>
                                                        <div class="col-lg-2" align="right">
                                                            <h4><i class="fa fa-comment" style="color:#afdf7c;"> 3</i></h4>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <span class="club_headers" style="color:#000;">Inked by <a href="#" style="color:#afdf7c;"><?php echo $quser['Name']?></a> &nbsp <i class="fa fa-clock-o" style="color:#a9a9a9; font-size:13px;">&nbsp <?php echo $qust_d['datetime'];?></i> </span>
                                                        </div>
                                                    </div>
                                                </div>
                                              <?php
											}
											}else{
											  ?>
                                              <p>Result not found</p>
                                              <?php
											}
											  ?>
                                           </div>
                                         
                                            
                                              
                                           </div>
                                            </div>
          <!--------------------------------------------------END SEARCH FOURMS----------------------------------------------------->
                                        </div>
                                        <div class="tab-pane" id="tab11">
                                           <?php include 'club_files/tags.php';?>
                                        </div>
                                        <div class="tab-pane" id="tab12">
                                            <?php include 'club_files/club_settings.php';?>
                                        </div>
                                    </div>
                                </div>
                           
                            </div>
						
                       
                      
                      
                    </div>
                    <?php
				}else{
					
				?>
                 <div class="tab-content">
                 <p>NO reselts Found</p>
                 </div>
                <?php
				}
				?>
                </div>                 
                <div class="col-md-3 col-lg-3 b_s">
                    <div class="row">
                       
                        <div class="col-lg-6">
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
         
         
       <!-- <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>-->
        <script src="js/index.js"></script>
       
      
      
        
    
        
    </body>
</html>
