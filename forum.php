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
.line_div
{
    height: 47px;
    background-color: #424141;
    padding-top: 10px;
}
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
                        <li style=" padding-left:30px; padding-top:10px; padding-right:20px;">
                            <input type="text" placeholder=" Search" class="club_tx" style="width:350px; height:30px;padding:0px;margin:0px; color:#fff;">
                        </li>
                        <li style=" padding-top:11px; padding-right:30px; padding-left:30px">
                            <a href="card_file.php" style="padding:0px;"> <i class="fa fa-id-card fa-2x" style="margin-top:px;color:#808080"></i></a>
                        </li>
                        <li class="active">
                            <a href="forum.php" style="font-family:Stencil Std;color:#808080;; font-size:24px; padding-left:25px; padding-right:25px;">F</a>
                        </li>
                        <li>
                            <a href="mail.php" style="font-family:Stencil Std;color:#808080; font-size:24px; padding-left:25px; padding-right:25px;">M</a>
                        </li>
                        <li>
                            <a href="#contact" style="font-family:Stencil Std;color:#808080; font-size:24px; padding-left:25px; padding-right:25px;">S</a>
                        </li>
                        <!-- <li>
                            <a href="#" style="font-family:Stencil Std; font-size:24px;color:#808080; padding-left:25px; padding-right:25px;">N</a>
                        </li>-->
                       <?php /*?> <li>
                                        <a class="diary" style="padding-left:25px; padding-right:25px;"><span class="day" style="font-family:Stencil Std; font-size:11px;"><?php echo date("l"); ?></span><br><span class="month" style="font-family:Stencil Std; font-size:11px;"><?php echo date("F"); ?></span><br><span class="year" style="font-family:Stencil Std; font-size:11px;"><?php echo date("Y"); ?></span></a>
                                    </li>
                                    <li>
                                       
                                        <div style="border-left:2px solid #d3d3d3;margin-top:6px; margin-left:4px; margin-right:4px;" class="line_div">
</div>
                                    </li>
                                    <li>
                                        <a class="date" style="font-family:Stencil Std;color:#808080; font-size:24px; padding-top:5px; padding-right:10px;"><?php echo date("j"); ?></a>
                                    </li><?php */?>
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
                        <div id="frm_Qus">
                        <?php
                        $dis_indu=mysqli_query($conn,"select * from add_industry");
						while($ddii=mysqli_fetch_array($dis_indu))
						{
							$qt_cou_exe=mysqli_query($conn,"select * from question where INDUSTRY_ID='$ddii[INDUSTRY_ID]'");
							$di_cou=mysqli_num_rows($qt_cou_exe);
						?>
                            <button onClick="get_industryquestions(<?php echo $ddii['INDUSTRY_ID']?>)" style="border:1px dotted #afdf7c;background-color:#fff;width:270px;color:#afdf7c;text-align:left;">
                                <span> <h5><?php echo $ddii['INDUSTRY_NAME'];?> &nbsp <span class="badge"><?php echo $di_cou;?></span></h5> </span> 
                            </button>
                            <?php
						}
							?>
                          </div>
                           <!-- <button style="border:1px dotted #afdf7c;background-color:#fff;width:270px;color:#afdf7c;text-align:left;">
                                <span> <h5>Furniture &nbsp <span class="badge">43</span></h5> </span> 
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
                            <div class="pst_main_background pst_box " style="background-color:#fff;">
                                <br>
                                <div class="club_sub_div_height">
                                    <div class="row" style="padding:0px;">
                                        <div class="col-lg-12" align="center">
                                            <a href="#fourms" class="btn btn_grn" style="width:280px;height:50px;padding:12px ">
                                               RAISE A TOPIC 
</a>
                                        </div>
                                        <br>
                                        <br>
                                        <br>
                                        <div class="col-lg-12" style="height:850px; padding:0px;">
                                            <div class="col-lg-12" style="background-color:#afdf7c; height:50px;">
                                                <span><h3 class="club_headers" style="text-align:center;color:#fff">
       Forums</h3> </span>
                                            </div>
                                            <div class="col-lg-12" style="height:800px; overflow-y:scroll; padding:0px;">
                                            <div id="txtQuest">
                                            <?php
                                            $dis_geet_qut=mysqli_query($conn,"select * from question order by  q_id desc");
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
											  ?>
                                              
                                           </div>
                                         
                                            
                                              
                                              
                                            <!--  
                                                <div class="col-lg-12 pad_0" style="height:80px; border-bottom:1px solid #afdf7c;">
                                                    <div class="col-lg-2 pad_0" style="width:80px;">
                                                        <img src="images/profile/1.jpg" width="80px" />
                                                    </div>                                                     
                                                    <div class="col-lg-10 pad_0" style="width:810px;height:80px;padding-left:15px;">
                                                        <div class="col-lg-10"> 
                                                            <span><h4 class="club_headers" style="width:500px;">
           How google work? &nbsp <span class="badge">unread</span></h4></span>
                                                        </div>
                                                        <div class="col-lg-2" align="right">
                                                            <h4><i class="fa fa-comment" style="color:#afdf7c;"> 3</i></h4>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <span class="club_headers" style="color:#000;">Inked by <a href="#" style="color:#afdf7c;">Rajesh</a> &nbsp <i class="fa fa-clock-o" style="color:#a9a9a9; font-size:13px;">&nbsp 11-02-2017 12:10</i> </span>
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
                                        
       
        
        <!-- /.container -->
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script type="text/javascript" src="js/space_discussion.js"></script>
        <script src="assets/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
        <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
        <script src="js/index.js"></script>
    </body>
</html>
