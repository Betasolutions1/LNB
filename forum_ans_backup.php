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
        <style>
            /* hola bonita */
            /*#parallelogram {
            width: 150px;
            height: 100px;
            -webkit-transform: skew(20deg);
            -moz-transform: skew(20deg);
            -o-transform: skew(20deg);
            background:#afdf7c;
            }*/

</style>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#" style="font-family:Stencil Std;color:#808080;">
    LN.BUSINESS</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                       <li style=" padding-left:30px; padding-top:10px; padding-right:20px;">
                            <input type="text" placeholder=" Search" class="club_tx" style="width:350px; height:30px;padding:0px;margin:0px; color:#fff;">
                        </li>
                        <li style=" padding-top:11px; padding-right:30px; padding-left:30px">
                            <a href="card_file.php" style="padding:0px;"> <i class="fa fa-id-card fa-2x" style="margin-top:px;color:#808080"></i></a>
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
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
        <div class="container-fluid paper" style=" padding-top: 30px;">
            <div class="row" style="overflow-x:none;"> 
                <div class="col-lg-3 col-md-4" align="center">
                    <div class="row pst_box" style="background-color:#fff; padding-bottom:250px; margin-bottom:30px; height:280px;">
                        <div class="col-lg-12" style="background-color:#afdf7c; padding:0px;">
                            <h3 class="club_headers" style="text-align:center; padding:0px; color:#fff">
           Category</h3>
                        </div>
                        <div class="col-lg-12" style="padding:0px; overflow-y:scroll; height:230px">
                          <div class="col-lg-12" style="padding:0px; overflow-y:scroll; height:230px">
                        <?php
                        $dis_indu=mysqli_query($conn,"select * from add_industry");
						while($ddii=mysqli_fetch_array($dis_indu))
						{
							$qt_cou_exe=mysqli_query($conn,"select * from question where INDUSTRY_ID='$ddii[INDUSTRY_ID]'");
							$di_cou=mysqli_num_rows($qt_cou_exe);
						?>
                            <button onClick="get_industryanswers(<?php echo $ddii['INDUSTRY_ID']?>)" style="border:1px dotted #afdf7c;background-color:#fff;width:270px;color:#afdf7c;text-align:left;">
                                <span> <h5><?php echo $ddii['INDUSTRY_NAME'];?> &nbsp <span class="badge"><?php echo $di_cou;?></span></h5> </span> 
                            </button>
                            <?php
						}
							?>
                          
                           <!-- <button style="border:1px dotted #afdf7c;background-color:#fff;width:270px;color:#afdf7c;text-align:left;">
                                <span> <h5>Furniture &nbsp <span class="badge">43</span></h5> </span> 
                            </button>-->
                        </div>
                        
                            <!--<button style="border:1px dotted #afdf7c;background-color:#fff;width:270px;color:#afdf7c;text-align:left;">
                                <span> <h5>IT-Software &nbsp <span class="badge">43</span></h5> </span> 
                            </button>-->
                          
                        </div>
                    </div>
                    <div class="row pst_box" style="background-color:#fff; padding-bottom:250px; margin-bottom:30px; height:280px;">
                        <div class="col-lg-12" style="background-color:#afdf7c; padding:0px;">
                            <h3 class="club_headers" style="text-align:center; padding:0px; color:#fff">
           Filter by</h3>
                        </div>
                        <div class="col-lg-12" style="padding:0px; overflow-y:scroll; height:230px" align="left">
                            <input type="text" class="club_txt" placeholder="search" />
                            <br>
                            <br>
                            <label> 
                                <input class="control-label" type="checkbox" value="">        &nbsp Unanswered        
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 "> 
                    <div class="tab-content">
                        <div class="tab-pane active" id="workspace-vr">
                            <div class="pst_main_background pst_box " style="background-color:#fff;" >
                                <br>
                                <div class="club_sub_div_height" style="height:1120px" id="txtAnswe" >
                                    <div class="row" style="padding:0px;" >
                                        <div class="col-lg-12" style="border-bottom:2px solid #afdf7c">
                                        <?php
                                        $get_Qust_ans_exe=mysqli_query($conn,"select * from question where q_id='$_GET[Qid]'");
										$ques_desc=mysqli_fetch_array($get_Qust_ans_exe);
										$in_qeuser_exe=mysqli_query($conn,"select * from users where user_id='$ques_desc[user_id]'");
										$in_qwy=mysqli_fetch_array($in_qeuser_exe);
										$inqppic=mysqli_query($conn,"select * from user_profile_pic where user_id='$in_qwy[user_id]'");
										$upiv=mysqli_fetch_array($inqppic);
										//echo $in_qwy['Name'];
										?>
                                        
                                            <div class="col-lg-12 pad_0" style="border-bottom:1px solid #afdf7c;margin-bottom:10px;">
                                                <div class="col-lg-2 pad_0" align="left" style="width:80px;">
                                                <?php
                                                if($upiv['image']!='')
												{
												?>
                                                    <img src="fb_users/<?php echo $in_qwy['Gender']?>/<?php echo $in_qwy['Email'];?>/Profile/<?php echo $upiv['image'];?>" width="80" />
												<?php
												}else{
													?>
                                                    <img src="images/profile/sq.PNG" width="80">
                                                    <?php }?>
                                                </div>
                                                <div class="col-lg-10">
                                                    <h3 class="club_headers" style="width:500px;">
          <?php echo $ques_desc['question'];?></h3>
                                                    <span class="club_headers" style="color:#000;">Inked by <a href="#" style="color:#afdf7c;"><?php echo $in_qwy['Name'];?></a> &nbsp <i class="fa fa-clock-o" style="color:#a9a9a9; font-size:13px;">&nbsp <?php echo $ques_desc['datetime'];?></i> </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-12" style="margin-bottom:15px;">
                                                <p>
            <?php echo $ques_desc['que_desc'];?></p>
                                                <span style="color:#a9a9a9">thanks</span>
                                                <br>
                                                <span style="color:#a9a9a9"><?php echo $in_qwy['Name'];?></span>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <br>
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
                                                    <div class="col-lg-2 pad_0" style="width:80px;">
                                                    <?php
                                                    if($ur_pic['image']!='')
													{
													?>
                                                        <img src="fb_users/<?php echo $watq['Gender'];?>/<?php echo $watq['Email'];?>/Profile/<?php echo $ur_pic['image'];?>" width="80px" />
                                                        <?php }else {?>
                                                        <img src="images/profile/sq.PNG" width="80">
                                                        <?php }?>
                                                    </div>                                                     
                                                    <div class="col-lg-10 pad_0" style="width:810px;padding-left:15px;">
                                                        <div class="col-lg-12" style="padding:5px;padding-left:5px">
                                                            <span class="club_headers" style="color:#808080;">Inked by <a href="#" style="color:#afdf7c;"><?php echo $watq['Name'];?></a> &nbsp <i class="fa fa-clock-o" style="color:#a9a9a9; font-size:13px;">&nbsp <?php echo $dip_ans['datetime'];?></i> </span>
                                                        </div>
                                                        <div class="col-lg-12"> 
                                                            <p><?php echo $dip_ans['answer'];?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                          <?php
											}
										  ?>
                                            
                                              </div>
                                              
                                              
                                              <!--  <div class="col-lg-12 pad_0" style=" border-bottom:1px solid #afdf7c; ">
                                                    <div class="col-lg-2 pad_0" style="width:80px;">
                                                        <img src="images/profile/1.jpg" width="80px" />
                                                    </div>                                                     
                                                    <div class="col-lg-10 pad_0" style="width:810px;padding-left:15px;">
                                                        <div class="col-lg-12" style="padding:5px;padding-left:5px">
                                                            <span class="club_headers" style="color:#808080;">Inked by <a href="#" style="color:#afdf7c;">Rajesh</a> &nbsp <i class="fa fa-clock-o" style="color:#a9a9a9; font-size:13px;">&nbsp 11-02-2017 12:10</i> </span>
                                                        </div>
                                                        <div class="col-lg-12"> 
                                                            <p>
            Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem singulis est id. Enim sale adolescens vim te. Ea ignota gloriatur eos, no minim zril quo. Mei graece recteque id. Cu per facer recusabo, te labore equidem vix, cu eam singulis mediocrem. Et nec facete maiestatis, quo impedit aliquando ei. Saepe animal recteque ad eam, sea vitae putent causae ei, eu qui everti vituperata.
Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem singulis est id. Enim sale adolescens vim te. Ea ignota gloriatur eos, no minim zril quo. Mei graece recteque id. Cu per facer recusabo, te labore equidem vix, cu eam singulis mediocrem. Et nec facete maiestatis, quo impedit aliquando ei. Saepe animal recteque ad eam, sea vitae putent causae ei, eu qui everti vituperata.</p>
                                                        </div>
                                                    </div>
                                                </div>-->
                                            </div>
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
