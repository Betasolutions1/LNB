<?php
include 'config.php';
session_start();
if(!$_SESSION['Email'])
{
	header("location:login.php");
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
        <style>
            /*#parallelogram {
            width: 150px;
            height: 100px;
            -webkit-transform: skew(20deg);
            -moz-transform: skew(20deg);
            -o-transform: skew(20deg);
            background:#afdf7c;
            }*/
            .tabs-left, .tabs-right
            {
            border-bottom: none;
            padding-top: 25px;
            }
            .tabs-left
            {
            border-right: 3px solid #ddd;
            }
            .tabs-right
            {
            border-left: 3px solid #ddd;
            }
            .tabs-left>li, .tabs-right>li
            {
            float: none;
            margin-bottom: 2px;
            }
            .tabs-left>li
            {
            margin-right: -1px;
            }
            .tabs-right>li
            {
            margin-left: -1px;
            color: #fff;
            }
            .tabs-left>li.active>a,
            .tabs-left>li.active>a:hover,
            .tabs-left>li.active>a:focus
            {
            border-bottom-color: #ddd;
            border-right-color: transparent;
            }
            .tabs-right>li.active>a,
            .tabs-right>li.active>a:hover,
            .tabs-right>li.active>a:focus
            {
            background: #afdf7c;
            color: #fff;
            -webkit-clip-path: polygon(0 0, 70% 0, 100% 100%, 30% 100%);
            clip-path: polygon(0 0, 70% 0, 100% 100%, 30% 100%);
            }
            .tabs-left>li>a
            {
            border-radius: 4px 0 0 4px;
            margin-right: 0;
            display: block;
            }
            .tabs-right>li>a
            {
            border-radius: 0 4px 4px 0;
            margin-right: 0;
            }
            .vertical-text
            {
            margin-top: 40px;
            border: none;
            position: relative;
            }
            .vertical-text>li
            {
            height: 16px;
            width: 170px;
            margin-bottom: 100px;
            }
            .vertical-text>li>a
            {
            border-bottom: 1px solid #ddd;
            border-right-color: transparent;
            text-align: center;
            border-radius: 4px 4px 0px 0px;
            -webkit-clip-path: polygon(0 0, 70% 0, 100% 100%, 30% 100%);
            clip-path: polygon(0 0, 70% 0, 100% 100%, 30% 100%);
            }
            .vertical-text>li.active>a,
            .vertical-text>li.active>a:hover,
            .vertical-text>li.active>a:focus
            {
            border-bottom-color: transparent;
            border-right-color: #FFF;
            border-left-color: #ddd;
            color: #fff;
            }
            .vertical-text.tabs-left
            {
            }
            .vertical-text.tabs-right
            {
            }
            .vertical-text.tabs-right>li
            {
            -webkit-transform: rotate(90deg);
            -moz-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            -o-transform: rotate(90deg);
            transform: rotate(90deg);
            }
            .vertical-text.tabs-left>li
            {
            -webkit-transform: rotate(-90deg);
            -moz-transform: rotate(-90deg);
            -ms-transform: rotate(-90deg);
            -o-transform: rotate(-90deg);
            transform: rotate(-90deg);
            }
            .pst_box
            {
            border: 1px dotted #afdf7c;
            margin-bottom: 20px;
            }
            .pst_head
            {
            background-color: #ffffff;
            text-align: left;
            }
            .pst_head_left
            {
            }
            .text_wht
            {
            color: #fff;
            font-size: 15px;
            font-weight: bold;
            }
            .pst_row_fill
            {
            background-color: #afdf7c;
            margin-left: 0px;
            }
            .pst_head_txt
            {
            position: relative;
            padding-top: 3px;
            }
            .pst_body
            {
            padding-top: 10px;
            padding-bottom: 10px;
            margin-left: 10px;
            margin-right: 10px;
            text-align: left;
            }
            .pst_cmt
            {
            position: relative;
            }
            .pst_cmt_body
            {
            background-color: rgba(251, 251, 251, 0.97);
            border-top: 1px dotted #afdf7c;
            }
            .pst_cmt_muted
            {
            font-size: 10px;
            color: #5c5c5c;
            }
            .pst_cmt_tog
            {
            background-color: #ededed;
            height: 30px;
            }
            .pst_cmt_pad
            {
            padding-left: 0px;
            padding-right: 0px;
            width: 100%;
            }
            .pst_cmt_c1
            {
            padding-left: 0px;
            padding-right: 0px;
            width: 37px;
            }
            .pst_cmt_row
            {
            }
	.img-size
	{
		min-width: 50px;max-width: 50px;max-height: 50px;min-height: 50px;
	}
	.cmt-img
	{
		min-width: 35px;max-width: 35px;max-height: 35px;min-height: 35px;
	}
</style>
    </head>
    <body>
    <?php
$user_det=mysqli_query($conn,"select * from users where user_id='$_SESSION[id]'");
$usr_dis=mysqli_fetch_array($user_det);
$get_user_ppic_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$_SESSION[id]'");
$fet_ppic=mysqli_fetch_array($get_user_ppic_exe);
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
                            workspace
</div>
                        <div class="tab-pane" id="club-vr">
                            club
</div>
                        <div class="tab-pane " id="dairy-vr">
                            <ul class="nav nav-tabs"> 
                                <li class="active">
                                    <a href="#tab1" data-toggle="tab">Home</a>
                                </li>                                 
                                <li>
                                    <a href="#tab2" data-toggle="tab">Profile</a>
                                </li>                                 
                                <li>
                                    <a href="#tab3" data-toggle="tab">Messages</a>
                                </li>                                 
                                <li>
                                    <a href="#tab4" data-toggle="tab">Settings</a>
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
                                    <p>Tab 2 content goes here...</p>
                                </div>
                                <div class="tab-pane" id="tab3">
                                    <p>Tab 3 content goes here...</p>
                                </div>
                                <div class="tab-pane" id="tab4">
                                    <p>Tab 4 content goes here...</p>
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
</script>
        <!--Bookmark End-->
        
    </body>
</html>
