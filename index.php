<?php
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
        <link href="//db.onlinewebfonts.com/c/93c4327f0457b01d13b376849536395d?family=Stencil+Std" rel="stylesheet" type="text/css" />
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    
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
        
        
        
        <!--TODO SCRIPT-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>

<script>
x=false;
function Check(){
    if(x){    
document.getElementById("screen").style.display='inline';
document.getElementById("screen1").style.display='none';
x=false;
    }
    else{
 document.getElementById("screen").style.display='none'; 
     document.getElementById("screen1").style.display='inline';   
x=true;    
    }
    
}


function change_to(str)
{
	alert("hello"+str );
	var dataString = 'todo_status=' + str ;
      
                    // AJAX code to submit form.
                    $.ajax({
                    type: "POST",
                    url: "script_code.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    //alert(html);
					document.getElementById("firstname").select();
                    }
                    });
               
        return false;
	
}

function ledger_insert() {
	alert("hello" );
	var led_cur_date  = document.getElementById("led_cur_date").value;
	var led_details  = document.getElementById("led_details").value;
    var led_credit  = document.getElementById("led_credit").value;
    var led_debit = document.getElementById("led_debit").value;
	//alert("hello" + todo_title );
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'led_cur_date=' + led_cur_date + '&led_details=' + led_details + '&led_credit=' + led_credit + '&led_debit=' +led_debit;
      
                    // AJAX code to submit form.
                    $.ajax({
                    type: "POST",
                    url: "script_code.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    //alert(html);
					
					document.getElementById("led_details").value='';
					document.getElementById("led_credit").value='';
					document.getElementById("led_debit").value='';
                    }
                    });
               
        return false;
}

function todo_insert() {
	alert("hello" );
	var todo_title  = document.getElementById("todo_title").value;
    var todo_contacts  = document.getElementById("todo_contacts").value;
    var todo_type = document.getElementById("todo_type").value;
	//alert("hello" + todo_title );
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'todo_title=' + todo_title + '&todo_contacts=' + todo_contacts + '&todo_type=' + todo_type;
      
                    // AJAX code to submit form.
                    $.ajax({
                    type: "POST",
                    url: "script_code.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    //alert(html);
					document.getElementById("todo_contacts").value='';
					document.getElementById("todo_contacts").value='';
					document.getElementById("todo_type").value='';
                    }
                    });
               
        return false;
}



</script>
        <!--End todo Script-->
        
        <!--End Remodel-->
        
             
    </head>
    <body>
    <?php
$user_det=mysqli_query($conn,"select * from users where user_id='$_SESSION[id]'");
$usr_dis=mysqli_fetch_array($user_det);
$get_user_ppic_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$_SESSION[id]'");
$fet_ppic=mysqli_fetch_array($get_user_ppic_exe);
$user_personal_dets_exe=mysqli_query($conn,"select * from user_info where user_id='$_SESSION[id]'");
$fet_pes=mysqli_fetch_array($user_personal_dets_exe);
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
                    <div class="tab-content">
                        <div class="tab-pane active" id="workspace-vr">
                            <ul class="nav nav-tabs"> 
                                <li class="active">
                                    <a href="#tab6" data-toggle="tab"><i class="fa fa-pencil"></i> Work</a>
                                </li>                                 
                                <li>
                                    <a href="#tab7" data-toggle="tab"><i class="fa fa-pencil"></i> Space</a>
                                </li>                                 
                               
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab6">
                                    <div class="accordion-wrap">
                                        <?php include 'workspace/work.php';?>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab7">
                                    <p>Tab 2 content goes here...</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="club-vr">
                            <div class="pst_main_background pst_box " align="center" style="background-color:#fff; z-index:-1;">
                            <?php
							if(!$_SESSION['club_id'])
							{
                            include 'club_files/club_login.php';
							}else
							{
							?>
                            <div class="club_sub_div_height">
                                    <ul class="nav nav-tabs"> 
                                        <li class="active">
                                            <a href="#tab8" data-toggle="tab"><i class="fa fa-pencil"></i> Club Sheet</a>
                                        </li>                                         
                                        <li>
                                            <a href="#tab9" data-toggle="tab"><i class="fa fa-pencil"></i> Networking</a>
                                        </li>                                         
                                        <li>
                                            <a href="#tab10" data-toggle="tab"><i class="fa fa-pencil"></i> Suggestions</a>
                                        </li>                                         
                                        <li>
                                            <a href="#tab11" data-toggle="tab"><i class="fa fa-pencil"></i> Tag</a>
                                        </li>                                         
                                        <li>
                                            <a href="#tab12" data-toggle="tab"><i class="fa fa-pencil"></i> Settings</a>
                                        </li>                                         
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab8">
                                           <?php include 'club_files/club_sheet.php';?>
                                        </div>
                                        <div class="tab-pane" id="tab9">
                                            <p>Tab 2 content goes here...</p>
                                        </div>
                                        <div class="tab-pane" id="tab10">
                                            <p>Tab 3 content goes here...</p>
                                        </div>
                                        <div class="tab-pane" id="tab11">
                                            <p>Tab 4 content goes here...</p>
                                        </div>
                                        <div class="tab-pane" id="tab12">
                                            <p>Tab 5 content goes here...</p>
                                        </div>
                                    </div>
                                </div>
                            <?php
							}
							?>
                            </div>
						</div>
                        <div class="tab-pane " id="dairy-vr">
                            <ul class="nav nav-tabs"> 
                                <li class="active">
                                    <a href="#tab1" data-toggle="tab">Card Files</a>
                                </li>                                 
                                <li>
                                    <a href="#tab2" data-toggle="tab">Industry</a>
                                </li>                                 
                                <li>
                                    <a href="#tab3" data-toggle="tab">Inked</a>
                                </li>                                 
                                <li>
                                    <a href="#tab4" data-toggle="tab">Noted</a>
                                </li> 
                                <li>
                                    <a href="#tab5" data-toggle="tab">Ankita</a>
                                </li>                                
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab1">
                                    <div class="pst_main_background">
                                        <br>
                                        <div style="background-color:#fff" class="shdw">
                                            <div class="media  bg" style="background:#afdf7c"> 
                                                <a href="" class="pull-left">
                                                    <img src="../assets/images/people/50/15.jpg" width="50" class="media-object">
                                                </a>                                                 
                                                <div class="media-body innerTB half bg" style="padding-top:4px;"> 
                                                    <a href="#" class="pull-right innerT innerR text-white"> </a> 
                                                    <a href="" class="text-white strong display-block">RAJESH</a> 
                                                    <br>
                                                    <span style="color:#fff;">CEO</span> 
                                                    <span style="color:#fff;">-</span>
                                                    <span style="color:#fff;">Beta Solutions</span>
                                                </div>                                                 
                                            </div>
                                            <br style="height:2px;">
                                            <div class="input-group comment"> 
                                                <!--<input type="text" class="form-control" placeholder="Ink Your Reflections..."> -->
                                                <textarea class="span12 form-control" cols="90" rows="2" placeholder="INK YOUR REFLECTIONS..."></textarea>
                                            </div>
                                            <div style="border-bottom:5px solid #ADCA8CM; margin-bottom: 10px; ">
                                                <button type="button" class="btn btn-success navbar-btn">
                                                    WRITE
</button>
                                                <button type="button" class="btn btn-success navbar-btn">
                                                    SCHEDULE
</button>
                                                <button type="button" class="btn btn-success navbar-btn">
                                                    DUST
</button>
                                            </div>
                                        </div>
                                        <!--<hr class="style5">-->
                                        <br /> 
                                        
                                        <?php include 'Dairy_files/news_feed.php';?>
                                        
                                        <?php /*?><div class="bg_pst">
                                            <div class="pst_box" style="background-color:#fff;">
                                                <div class="pst_head">
                                                    <div class="row pst_row_fill" style="">
                                                        <div class="col-lg-2 " align="left" style="width:70px;">
                                                            <a href="#" class="pst_head_left">
                                                                <img src="images/profile/6.jpg" width="70" style="margin-left:-15px;">
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-8 pst_head_txt">
                                                            <a href="#" class="text_wht">Steve</a>
                                                            <br>
                                                            <span class="pst_head_pos text_wht">CEO-Beta Solutions</span>
                                                            <br>
                                                            <span class="text_wht">IT-Industry</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pst_body">
                                                    <p style="margin-top:10px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, pariatur!</p> 
                                                    <span style="font-size:10px;"> - on 15th January, 2014</span>
                                                </div>
                                                <div class="pst_cmt">
                                                    <div class="pst_cmt_tog pst_cmt_pad">
                                                        <!--comment toggle-->
                                                        <i></i>
                                                        <a href="#"><span style="margin-left:10px;">View Comments</span></a>
                                                        <span class="pst_cmt_muted">+2 writes</span>
                                                    </div>
                                                    <div class="row  pst_cmt_body">
                                                        <div class="col-lg-2" style="width:70px;">
                                                            <a href="#" class="pst_head_left">
                                                                <img src="images/profile/1.jpg" width="70" style="margin-left:-15px;">
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-10" style="padding-top:5px;">
                                                            <a href="#" style="color:#000;">Steve</a>
                                                            <br>
                                                            <span class="pst_head_pos  pst_cmt_muted">- 29 jan 2017</span>
                                                            <br>
                                                            <div style="margin-left:10px;">CONGRATS STEVE</div>
                                                        </div>
                                                    </div>
                                                    <div class="row pst_cmt_row"> 
                                                        <div class="col-lg-10 pst_cmt_pad pst_cmt_wid" style="width:550px;">
                                                            <input type="text" class="form-control" style="width:100%;  " placeholder="Write..."> 
                                                        </div>
                                                        <div class="col-lg-2 pst_cmt_c1">
                                                            <button type="button" class="btn btn-primary" href="#" style="background:#afdf7c; ">
                                                                <i class="fa fa-pencil"></i>
                                                            </button>                                                             
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pst_box" style="background-color:#fff;">
                                                <div class="pst_head">
                                                    <div class="row pst_row_fill" style="">
                                                        <div class="col-lg-2 " align="left" style="width:70px;">
                                                            <a href="#" class="pst_head_left">
                                                                <img src="images/profile/6.jpg" width="70" style="margin-left:-15px;">
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-8 pst_head_txt">
                                                            <a href="#" class="text_wht">Steve</a>
                                                            <br>
                                                            <span class="pst_head_pos text_wht">CEO-Beta Solutions</span>
                                                            <br>
                                                            <span class="text_wht">IT-Industry</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pst_body">
                                                    <span><img src="images/post/pst_1.jpg" class="img-responsive" style=""></span>
                                                    <br>
                                                    <span style="font-size:10px;"> - on 15th January, 2014</span>
                                                </div>
                                                <div class="pst_cmt">
                                                    <div class="pst_cmt_tog pst_cmt_pad">
                                                        <!--comment toggle-->
                                                        <i></i>
                                                        <a href="#"><span style="margin-left:10px;">View Comments</span></a>
                                                        <span class="pst_cmt_muted">+2 writes</span>
                                                    </div>
                                                    <div class="row  pst_cmt_body">
                                                        <div class="col-lg-2" style="width:70px;">
                                                            <a href="#" class="pst_head_left">
                                                                <img src="images/profile/1.jpg" width="70" style="margin-left:-15px;">
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-10" style="padding-top:5px;">
                                                            <a href="#" style="color:#000;">Steve</a>
                                                            <br>
                                                            <span class="pst_head_pos  pst_cmt_muted">- 29 jan 2017</span>
                                                            <br>
                                                            <div style="margin-left:10px;">CONGRATS STEVE</div>
                                                        </div>
                                                    </div>
                                                    <div class="row pst_cmt_row"> 
                                                        <div class="col-lg-10 pst_cmt_pad">
                                                            <input type="text" class="form-control" style="width:100%; padding-left:10px;padding-right:10px; " placeholder="Write..."> 
                                                        </div>
                                                        <div class="col-lg-2 pst_cmt_c1">
                                                            <button type="button" class="btn btn-primary" href="#" style="background:#afdf7c; ">
                                                                <i class="fa fa-pencil"></i>
                                                            </button>                                                             
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pst_box" style="background-color:#fff;">
                                                <div class="pst_head">
                                                    <div class="row pst_row_fill" style="">
                                                        <div class="col-lg-2 " align="left" style="width:70px;">
                                                            <a href="#" class="pst_head_left">
                                                                <img src="images/profile/6.jpg" width="70" style="margin-left:-15px;">
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-8 pst_head_txt">
                                                            <a href="#" class="text_wht">Steve</a>
                                                            <br>
                                                            <span class="pst_head_pos text_wht">CEO-Beta Solutions</span>
                                                            <br>
                                                            <span class="text_wht">IT-Industry</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pst_body">
                                                    <p style="margin-top:10px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, pariatur!</p> 
                                                    <span style="font-size:10px;"> - on 15th January, 2014</span>
                                                </div>
                                                <div class="pst_cmt">
                                                    <div class="pst_cmt_tog pst_cmt_pad">
                                                        <!--comment toggle-->
                                                        <i></i>
                                                        <a href="#"><span style="margin-left:10px;">View Comments</span></a>
                                                        <span class="pst_cmt_muted">+2 writes</span>
                                                    </div>
                                                    <div class="row  pst_cmt_body">
                                                        <div class="col-lg-2" style="width:70px;">
                                                            <a href="#" class="pst_head_left">
                                                                <img src="images/profile/1.jpg" width="70" style="margin-left:-15px;">
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-10" style="padding-top:5px;">
                                                            <a href="#" style="color:#000;">Steve</a>
                                                            <br>
                                                            <span class="pst_head_pos  pst_cmt_muted">- 29 jan 2017</span>
                                                            <br>
                                                            <div style="margin-left:10px;">CONGRATS STEVE</div>
                                                        </div>
                                                    </div>
                                                    <div class="row pst_cmt_row"> 
                                                        <div class="col-lg-10 pst_cmt_pad">
                                                            <input type="text" class="form-control" style="width:100%; padding-left:10px;padding-right:10px; " placeholder="Write..."> 
                                                        </div>
                                                        <div class="col-lg-2 pst_cmt_c1">
                                                            <button type="button" class="btn btn-primary" href="#" style="background:#afdf7c; ">
                                                                <i class="fa fa-pencil"></i>
                                                            </button>                                                             
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><?php */?>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab2">
                                    <?php include 'Dairy_files/industry.php';?>
                                </div>
                                <div class="tab-pane" id="tab3">
                                    <?php include 'Dairy_files/inked.php';?>
                                </div>
                                <div class="tab-pane" id="tab4">
                                     <?php include 'Dairy_files/noted.php';?>
                                </div>
                                <div class="tab-pane" id="tab5">
                                    <p>Tab 5 content goes here...</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="folio-vr">
                            folio
</div>
                        <div class="tab-pane" id="hub-vr">
                            hub
</div>
                    </div>
                </div>                 
                <div class="col-md-3 col-lg-3 b_s">
                    <div class="row">
                        <div class="col-lg-3" align="left">
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
                        </div>
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
         
        <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
        <script src="js/index.js"></script>
        <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
        <!--Bookmark Begin-->
         <script>
function like(lpost_id,luser_id) {
	//alert("hello" );
    //var lpost_id=$(this).attr('id');
	//var luser_id=$(this).attr('data-src');
	alert("hello" + luser_id );
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'luser_id=' + luser_id + '&lpost_id=' + lpost_id;
      
                    // AJAX code to submit form.
                    $.ajax({
                    type: "POST",
                    url: "script_code.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    //alert(html);
					//document.getElementById("firstname").select();
                    }
                    });
               
        return false;
}

function unlike(ulpost_id,uluser_id) {
	//alert("hello" );
   // var ulpost_id=$(this).attr('id');
	//var uluser_id=$(this).attr('data-src');
	alert("hello" + ulpost_id );
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'uluser_id=' + uluser_id + '&ulpost_id=' + ulpost_id;
      
                    // AJAX code to submit form.
                    $.ajax({
                    type: "POST",
                    url: "script_code.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    //alert(html);
					//document.getElementById("firstname").select();
                    }
                    });
               
        return false;
}

//-- sug_ins

function ins_suggest() {
	alert("hello" );
    var sugg_info  = document.getElementById("suggest_me_to").value;
	var sug_usrt_id  = document.getElementById("sug_usrt_id").value;
	var sug_date = document.getElementById("sug_date").value;
    //sug_usrt_id
	//alert("hello" + bpost_id );
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'sugg_info=' + sugg_info + '&sug_usrt_id=' +sug_usrt_id + '&sug_date=' +sug_date;
      
                    // AJAX code to submit form.
                    $.ajax({
                    type: "POST",
                    url: "script_code.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    //alert(html);
					document.getElementById("suggest_me_to").value='';
                    }
                    });
               
        return false;
}


//---connect Suggestion--

function connect_suggest()
{
	var whos_sugg = document.getElementById("whos_sugg").value;
	var sugg_id = document.getElementById("sugg_id").value;
	var dataString= 'whos_sugg='+whos_sugg+ '&sugg_id=' +sugg_id;
	 $.ajax({
                    type: "POST",
                    url: "script_code.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    //alert(html);
					//document.getElementById("suggest_me_to").value='';
                    }
                    });
}
</script>
        <!--Bookmark End-->
        
    </body>
</html>
