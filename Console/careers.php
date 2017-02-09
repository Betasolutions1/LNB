<?php
error_reporting(0);
include '../config.php';
session_start();
/*if(!$_SESSION['Email'])
{
	header("location:signup.php");
}*/

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
        <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="starter-template.css" rel="stylesheet">
        <link rel="stylesheet" href="../assets/font/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/custom.css">
        <?php //include 'assets/css/folio.php';?>
         <link rel="stylesheet" href="../assets/css/folio.php">
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
    <script src="../Remodal-1.1.0/libs/jquery-loader.js"></script>

    <!-- Load local QUnit -->
    <link rel="stylesheet" href="../Remodal-1.1.0/libs/qunit/qunit/qunit.css" media="screen">
    <script src="../Remodal-1.1.0/libs/qunit/qunit/qunit.js"></script>

    <!-- Load local lib and tests -->
    <link rel="stylesheet" href="../Remodal-1.1.0/src/remodal.css">
    <link rel="stylesheet" href="../Remodal-1.1.0/src/remodal-default-theme.css">
    <script src="../Remodal-1.1.0/src/remodal.js"></script>
    <script src="../Remodal-1.1.0/remodal_test.js"></script>
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
  <script type="application/javascript" src="js/admin_js.js"></script>      
             
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
                    <a class="navbar-brand" href="#">
    LN.BUSINESS</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li style=" padding-left:30px; padding-top:10px; padding-right:100px;">
                            <input type="text" laceholder="search" style="width:350px; height:30px">
                        </li>
                        <li class="active">
                            <a href="#" style="font-family:StencilStd; font-size:24px; padding-left:25px; padding-right:25px;">F</a>
                        </li>
                        <li>
                            <a href="#about" style="font-family:StencilStd; font-size:24px; padding-left:25px; padding-right:25px;">M</a>
                        </li>
                        <li>
                            <a href="#contact" style="font-family:StencilStd; font-size:24px; padding-left:25px; padding-right:25px;">S</a>
                        </li>
                        <li>
                            <a href="#" style="font-family:StencilStd; font-size:24px; padding-left:25px; padding-right:25px;">N</a>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
        <div class="container-fluid paper" style=" padding-top: 30px;margin-top:50px">
            <div class="row"> 
                <div class="col-lg-3 col-md-4" align="center">
                    <div class="jumbotron" style="padding-bottom:150px;">
</div>
                    <div class="jumbotron banner_1_sticky sticky">
                        <img src="../assets//images/b_2.jpg" style="width:275px; height:400px; margin-left:-60px; margin-top:-45px; margin-bottom:-45px" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 "> 
                 <div style="background-color:#fff" class="shdw">
                                            <div class="media  bg" style="background:#afdf7c"> 
                                                <a href="" class="pull-left">
                                                    <img src="../images/profile/logo.jpg" width="50" class="media-object">
                                                </a>                                                 
                                                <div class="media-body innerTB half bg" style="padding-top:4px;"> 
                                                    <a href="#" class="pull-right innerT innerR text-white"> </a> 
                                                    <a href="" class="text-white strong display-block">Admin Name</a> 
                                                    <br>
                                                    <span style="color:#fff;">CAREER</span> 
                                                    <?php /*?><span style="color:#fff;">-</span>
                                                    <span style="color:#fff;"><?php echo $usr_dis['company'];?></span><?php */?>
                                                </div>                                                 
                                            </div>
                                            <br style="height:2px;">
                                            <form method="post" action="">
                                            <div class="input-group comment"> 
                                                <!--<input type="text" class="form-control" placeholder="Ink Your Reflections..."> -->
                                                <textarea style="resize:none" class="span12 form-control" name="career_data" id="career_data" cols="90" rows="10" placeholder="ITS LNB CAREER.COM..."></textarea>
                                            </div>
                                            <div style="border-bottom:5px solid #ADCA8CM; margin-bottom: 10px; float:right;">
                                                <button type="submit" name="sub_post" onClick="return ins_career_Lnb();" class="btn btn-success navbar-btn" style="">
                                                   	CAREER
</button>
                                              <!--  <button type="button" class="btn btn-success navbar-btn">
                                                    SCHEDULE
</button>
                                                <button type="button" class="btn btn-success navbar-btn">
                                                    DUST
</button>-->
                                            </div>
                                            </form>
                                        </div>
                   <?php /*?> <div class="tab-content">
                        <div class="tab-pane active" id="workspace-vr">
                           
                           
                        </div>
                        <div class="tab-pane" id="club-vr">
                           
						</div>
                        <div class="tab-pane " id="dairy-vr">
                            
                          
                        </div>
                        <div class="tab-pane" id="folio-vr">
                            <?php include 'folio_files/folio.php';?>
						</div>
                        <div class="tab-pane" id="hub-vr">
                            hub
</div>
                    </div><?php */?>
                </div>                 
                <div class="col-md-3 col-lg-3 b_s">
                    <div class="row">
                      <?php /*?>  <div class="col-lg-3" align="left">
                            <ul class="nav nav-tabs tabs-right vertical-text right" style="right:40px;  top:15px">
                                <li class="active " style="font-color:solid #fff;" id="parallelogram">
                                    <a href="#workspace-vr" data-toggle="tab" id="workspace_tab">WORKSPACE</a>
                                </li>
                                <li>
                                    <a href="#club-vr" data-toggle="tab" id="club_tab">CLUB</a>
                                </li>
                                <li>
                                    <a href="#dairy-vr" data-toggle="tab" id="dairy_tab">DAIRY</a>
                                </li>
                                <li>
                                    <a href="#folio-vr" data-toggle="tab" id="folio_tab">FOLIO</a>
                                </li>
                                <li>
                                    <a href="#hub-vr" data-toggle="tab" id="hub_tab">HUB</a>
                                </li>
                                <!--<li>
        <a href="#settings-vr" data-toggle="tab">Jun</a>
    </li>-->
                            </ul>
                        </div><?php */?>
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
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../assets/js/ie10-viewport-bug-workaround.js"></script>
         
         
       <!-- <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>-->
        <script src="../js/index.js"></script>
       
      
      
        
        
        
    </body>
</html>
