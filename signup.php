<?php
include 'config.php';
if(isset($_POST['login']))
{
	$log_sts=mysqli_query($conn,"select * from users where Email='$_POST[email]' AND Password='$_POST[pwd]'");
	$loc=mysqli_num_rows($log_sts);
	if($loc)
	{
		$fet_da=mysqli_fetch_array($log_sts);
		session_start();
		$_SESSION['id']=$fet_da['user_id'];
		$_SESSION['Email']=$fet_da['Email'];
		$_SESSION['Name']=$fet_da['Name'];
		$_SESSION['Gender']=$fet_da['Gender'];
		header("location:index.php");

	}else
	{
		echo "<script>alert('Invalid Credentials')</script>";
	}
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
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 
    <![endif]-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Noto+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <!--<link href='flipping_gallery.css' rel='stylesheet' type='text/css'> -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>         
        <!-- <script type="text/javascript" src="jquery.flipping_gallery.js"></script>      
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/salon-font.css">
        <link rel="stylesheet" href="css/plugins.css">
        <link rel="stylesheet" href="css/style.css">        
        <script src="js/modernizr.min.js"></script>-->         
        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/component.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/custom.css" />
        <link rel="stylesheet" href="assets/font/font-awesome/css/font-awesome.min.css">
        <script src="js/modernizr.min.js"></script>
        <link rel="stylesheet" href="assets/css/remodal.css">
        <link rel="stylesheet" href="assets/css/remodal-default-theme.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <!-- <link rel="stylesheet" href="/resources/demos/style.css">-->
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
        <style>
            .remodal-bg.with-red-theme.remodal-is-opening,
            .remodal-bg.with-red-theme.remodal-is-opened {
            filter: none;
            }
            .remodal-overlay.with-red-theme {
            background-color: #f44336;
            }
            .remodal.with-red-theme {
            background: #fff;
            }

</style>
        <style type="text/css">
            .photostack-perspective
            {
            -webkit-perspective: 1800px;
            perspective: 1800px;
            }
            .shadow
            {
            -moz-box-shadow: inset 0 0 10px #000000;
            -webkit-box-shadow: inset 0 0 10px #000000;
            box-shadow: inset 0 0 10px #000000;
            }
            .hgt_signup
            {
            }
            .shadow
            {
            width: 1;
            }
            .shadow
            {
            padding-top: 10px;
            }
            .paper {
            font: normal 12px/1.5 "Lucida Grande", arial, sans-serif;
            width: 100%;
            height: 100%;
            margin: 0 auto;
            padding: 6px 5px 4px 42px;
            position: relative;
            color: #444;
            line-height: 20px;
            border: 1px solid #d2d2d2;
            background: #fff;
            background: -webkit-gradient(linear, 0 0, 0 100%, from(#d9eaf3), color-stop(4%, #fff)) 0 4px;
            background: -webkit-linear-gradient(top, #d9eaf3 0%, #fff 8%) 0 4px;
            background: -moz-linear-gradient(top, #d9eaf3 0%, #fff 8%) 0 4px;
            background: -ms-linear-gradient(top, #d9eaf3 0%, #fff 8%) 0 4px;
            background: -o-linear-gradient(top, #d9eaf3 0%, #fff 8%) 0 4px;
            background: linear-gradient(top, #d9eaf3 0%, #fff 8%) 0 4px;
            -webkit-background-size: 100% 20px;
            -moz-background-size: 100% 20px;
            -ms-background-size: 100% 20px;
            -o-background-size: 100% 20px;
            background-size: 100% 20px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.07);
            -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.07);
            box-shadow: 0 1px 2px rgba(0,0,0,0.07);
            width: 100%;
            height: 1056px;
            }
            .su_div_pad
            {
            margin-top: 30px;
            width: 40%;
            height: 210px;
            margin-left: 60px;
            margin-right: 60px;
            position: relative;
            color:#fff;
            }
            .txt
            {
            }
            .txt_
            {
            border: 3px #000 !important;
            border-bottom: 3px #000;
            }

</style>
        <!--<script>
	  $(document).ready( function() {
	    $(".gallery").flipping_gallery({
	      enableScroll: true,
	      autoplay: 2000
	    });
	    
	    $(".next").click(function() {
	      $(".gallery").flipForward();
	      return false;
	    });
	    $(".prev").click(function() {
	      $(".gallery").flipBackward();
	      return false;
	    });
	  });
		
	</script>     -->         
        <!-- <style> 
            html {
            height: 100%;
            }
            .wrapper {
            height: auto !important;
            height: 100%;
            margin: 0 auto;
            overflow: hidden;
            }
            a {
            text-decoration: none;
            }
            h1, h2 {
            width: 100%;
            float: left;
            }
            h1 {
            margin-top: 100px;
            color: #00B0FF;
            margin-bottom: 5px;
            font-size: 70px;
            letter-spacing: -4px;
            }
            h2 {
            letter-spacing: 0px;
            color: rgba(255,255,255,0.65);
            font-weight: 100;
            margin-top: 10px;
            margin-bottom: 10px;
            }
            .pointer {
            color: #00B0FF;
            font-family: 'Pacifico';
            font-size: 24px;
            margin-top: 15px;
            position: absolute;
            top: 130px;
            right: -40px;
            }
            .pointer2 {
            color: #00B0FF;
            font-family: 'Pacifico';
            font-size: 24px;
            margin-top: 15px;
            position: absolute;
            top: 130px;
            left: -40px;
            }
            pre {
            margin: 80px auto;
            }
            pre code {
            padding: 35px;
            border-radius: 5px;
            font-size: 15px;
            background: rgba(0,0,0,0.1);
            border: rgba(0,0,0,0.05) 5px solid;
            max-width: 500px;
            }
            .main {
            float: left;
            width: 100%;
            margin: 0 auto;
            }
            .main h1 {
            padding: 20px 50px 10px;
            float: left;
            width: 100%;
            font-size: 60px;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            font-weight: 100;
            margin: 0;
            padding-top: 25px;
            font-family: 'Noto Serif';
            font-style: italic;
            letter-spacing: 2px;
            text-transform: capitalize;
            }
            .main h1.demo1 {
            background: #1ABC9C;
            }
            .reload.bell {
            font-size: 12px;
            padding: 20px;
            width: 45px;
            text-align: center;
            height: 47px;
            border-radius: 50px;
            -webkit-border-radius: 50px;
            -moz-border-radius: 50px;
            }
            .reload.bell #notification {
            font-size: 25px;
            line-height: 140%;
            }
            .reload, .btn {
            display: inline-block;
            border: 4px solid #A2261E;
            border-radius: 5px;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            background: #CC3126;
            display: inline-block;
            line-height: 100%;
            padding: 0.7em;
            text-decoration: none;
            color: #0D2633;
            width: 100px;
            line-height: 140%;
            font-size: 17px;
            font-family: open sans;
            font-weight: bold;
            }
            .reload:hover {
            background: #A2261E;
            }
            .btn {
            width: 200px;
            color: #0D2633;
            border: none;
            margin-left: 10px;
            background: #00B0FF;
            }
            .clear {
            width: auto;
            }
            .btn:hover, .btn:hover {
            background: #00CDFF;
            }
            .btns {
            width: 410px;
            margin: 50px auto;
            }
            .credit {
            font-family: "noto serif";
            font-style: italic;
            text-align: center;
            color: #3D5455;
            color: rgba(255,255,255,0.35);
            padding: 10px;
            margin: 0 0 40px 0;
            float: left;
            width: 100%;
            letter-spacing: 1px;
            }
            .credit a {
            text-decoration: none;
            font-weight: bold;
            color: rgba(255,255,255,0.55);
            }
            .back {
            position: absolute;
            top: 0;
            left: 0;
            text-align: center;
            display: block;
            padding: 7px;
            width: 100%;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            background: rgba(0,0,0,0.25);
            font-weight: bold;
            font-size: 13px;
            color: rgba(255,255,255,0.5);
            -webkit-transition: all 200ms ease-out;
            -moz-transition: all 200ms ease-out;
            -o-transition: all 200ms ease-out;
            transition: all 200ms ease-out;
            }
            .back:hover {
            background: rgba(0,0,0,0.5);
            }
            .page-container {
            max-width: 700px;
            margin: auto;
            position: relative;
            }
            .page-container p {
            font-size: 21px;
            font-weight: 100;
            line-height: 180%;
            }
            .page-container h3 {
            font-family: "noto serif";
            font-size: 23px;
            }
            .gallery {
            width: 500px;
            height: 333px;
            margin: 150px auto 100px;
            }
            .navigation {
            margin-bottom: 150px;
            }
            .fg-card, .fg-card > img {
            border-radius: 3px;
            }
            .fg-caption {
            color: white;
            font-style: italic;
            font-family: noto serif;
            font-size: 24px;
            }
            /* 

            <!-- <script>
      $(document).ready( function() {
        $(".gallery").flipping_gallery({
          enableScroll: true,
          autoplay: 2000
        });
        
        $(".next").click(function() {
          $(".gallery").flipForward();
          return false;
        });
        $(".prev").click(function() {
          $(".gallery").flipBackward();
          return false;
        });
      });
        
    </script>*/     
     
            .cintaEsq {
            position: relative; 
            display: inline-block; 
            margin: 50px; 
            /*text-align: center; */
            }
            .cintaEsq::before {
            content: ""; 
            display: block; 
            position: absolute; 
            top: 0; left: -20px; 
            width: 60px; height: 20px; 
            background-color: rgba(200,200,50,.3); 
            -webkit-transform: rotate(125deg); 
            transform: rotate(125deg); 
            box-shadow: 80px -265px 0 1px rgba(200,200,50,.3); 
            }
            .cintaEsq::after {
            content: ""; 
            display: block; 
            position: absolute; 
            bottom: 5px; left: -20px; 
            width: 70px; height: 20px; 
            background-color: rgba(200,200,50,.3); 
            -webkit-transform: rotate(55deg); 
            transform: rotate(55deg); 
            box-shadow: -80px -255px 0 1px rgba(200,200,50,.3);
            }
</style>-->
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
                    <a class="navbar-brand" style="padding-left: 500px;" href="#">LN.BUSINESS</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <!--<ul class="nav navbar-nav">
        <li class="active">
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#about">About</a>
        </li>
        <li>
            <a href="#contact">Contact</a>
        </li>
    </ul>-->
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
        <section id="photostack-1" class="photostack photostack-start" hidden>
            <div>
</div>
        </section>
        <section id="photostack-2" class="photostack photostack-start" hidden>
            <div>
</div>
        </section>
        <section id="photostack-3" class="photostack paper">
            <div>
            <?php
            $sinyy_exe=mysqli_query($conn,"select * from users");
			while($sunny=mysqli_fetch_array($sinyy_exe))
			{
			?>
                <figure style="width: 297px;
text-align: left;
margin-top: 0px;padding:0px; height:157px;" class="su_card_shadow">
                    <div class="col-lg-6 cf_card  " style="width:290px;padding:0px; border:1px solid #fff;">
                        <div class="col-lg-12" style="height:120px;padding-top:10px;">
                            <div class="col-lg-10" style="padding:0px; font-family:lato; ">
                                <span style="text-align:center; color:#afdf7c; font-family:lato"> <?php echo $sunny['industry'];?></span>
                                <br>
                                <span style="color:#d3d3d3;"><?php echo $sunny['Name'];?></span>
                                <br>
                                <span style="color:#d3d3d3;"><?php echo $sunny['designation'];?></span>
                                <br>
                                <span style="color:#d3d3d3;"><?php echo $sunny['company'];?></span>
                            </div>
                            <div align="right" style="margin:0px; width:40px; padding:0px;" class="col-lg-2">
                                <img src="images/profile/logo.jpg" width="25px;" />
                            </div>
                        </div>
                        <div class="col-lg-12" style="height:22px;background-color:#afdf7c;">
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-phone" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-envelope" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-search" style="color:#fff;"></i>
                            </div>
                        </div>
                    </div>
                </figure>
                <?php
			}
				?>
                <figure style="width: 297px;
text-align: left;
margin-top: 0px;padding:0px; height:157px;" class="su_card_shadow">
                    <div class="col-lg-6 cf_card  " style="width:290px;padding:0px; border:1px solid #fff;">
                        <div class="col-lg-12" style="height:120px;padding-top:10px;">
                            <div class="col-lg-10" style="padding:0px; font-family:lato; ">
                                <span style="text-align:center; color:#afdf7c; font-family:lato"> IT - SOFTWARE</span>
                                <br>
                                <span style="color:#d3d3d3;">Rajesh</span>
                                <br>
                                <span style="color:#d3d3d3;">CEO-founder</span>
                                <br>
                                <span style="color:#d3d3d3;">Beta Solutions</span>
                            </div>
                            <div align="right" style="margin:0px; width:40px; padding:0px;" class="col-lg-2">
                                <img src="images/profile/logo.jpg" width="25px;" />
                            </div>
                        </div>
                        <div class="col-lg-12" style="height:22px;background-color:#afdf7c;">
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-phone" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-envelope" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-search" style="color:#fff;"></i>
                            </div>
                        </div>
                    </div>
                </figure>
                <figure style="width: 297px;
text-align: left;
margin-top: 0px;padding:0px; height:157px;" class="su_card_shadow">
                    <div class="col-lg-6 cf_card  " style="width:290px;padding:0px; border:1px solid #fff;">
                        <div class="col-lg-12" style="height:120px;padding-top:10px;">
                            <div class="col-lg-10" style="padding:0px; font-family:lato; ">
                                <span style="text-align:center; color:#afdf7c; font-family:lato"> IT - SOFTWARE</span>
                                <br>
                                <span style="color:#d3d3d3;">Rajesh</span>
                                <br>
                                <span style="color:#d3d3d3;">CEO-founder</span>
                                <br>
                                <span style="color:#d3d3d3;">Beta Solutions</span>
                            </div>
                            <div align="right" style="margin:0px; width:40px; padding:0px;" class="col-lg-2">
                                <img src="images/profile/logo.jpg" width="25px;" />
                            </div>
                        </div>
                        <div class="col-lg-12" style="height:22px;background-color:#afdf7c;">
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-phone" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-envelope" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-search" style="color:#fff;"></i>
                            </div>
                        </div>
                    </div>
                </figure>
                <figure style="width: 297px;
text-align: left;
margin-top: 0px;padding:0px; height:157px;" class="su_card_shadow">
                    <div class="col-lg-6 cf_card  " style="width:290px;padding:0px; border:1px solid #fff;">
                        <div class="col-lg-12" style="height:120px;padding-top:10px;">
                            <div class="col-lg-10" style="padding:0px; font-family:lato; ">
                                <span style="text-align:center; color:#afdf7c; font-family:lato"> IT - SOFTWARE</span>
                                <br>
                                <span style="color:#d3d3d3;">Rajesh</span>
                                <br>
                                <span style="color:#d3d3d3;">CEO-founder</span>
                                <br>
                                <span style="color:#d3d3d3;">Beta Solutions</span>
                            </div>
                            <div align="right" style="margin:0px; width:40px; padding:0px;" class="col-lg-2">
                                <img src="images/profile/logo.jpg" width="25px;" />
                            </div>
                        </div>
                        <div class="col-lg-12" style="height:22px;background-color:#afdf7c;">
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-phone" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-envelope" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-search" style="color:#fff;"></i>
                            </div>
                        </div>
                    </div>
                </figure>
                <figure style="width: 297px;
text-align: left;
margin-top: 0px;padding:0px; height:157px;" class="su_card_shadow">
                    <div class="col-lg-6 cf_card  " style="width:290px;padding:0px; border:1px solid #fff;">
                        <div class="col-lg-12" style="height:120px;padding-top:10px;">
                            <div class="col-lg-10" style="padding:0px; font-family:lato; ">
                                <span style="text-align:center; color:#afdf7c; font-family:lato"> IT - SOFTWARE</span>
                                <br>
                                <span style="color:#d3d3d3;">Rajesh</span>
                                <br>
                                <span style="color:#d3d3d3;">CEO-founder</span>
                                <br>
                                <span style="color:#d3d3d3;">Beta Solutions</span>
                            </div>
                            <div align="right" style="margin:0px; width:40px; padding:0px;" class="col-lg-2">
                                <img src="images/profile/logo.jpg" width="25px;" />
                            </div>
                        </div>
                        <div class="col-lg-12" style="height:22px;background-color:#afdf7c;">
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-phone" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-envelope" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-search" style="color:#fff;"></i>
                            </div>
                        </div>
                    </div>
                </figure>
                <figure style="width: 297px;
text-align: left;
margin-top: 0px;padding:0px; height:157px;" class="su_card_shadow">
                    <div class="col-lg-6 cf_card  " style="width:290px;padding:0px; border:1px solid #fff;">
                        <div class="col-lg-12" style="height:120px;padding-top:10px;">
                            <div class="col-lg-10" style="padding:0px; font-family:lato; ">
                                <span style="text-align:center; color:#afdf7c; font-family:lato"> IT - SOFTWARE</span>
                                <br>
                                <span style="color:#d3d3d3;">Rajesh</span>
                                <br>
                                <span style="color:#d3d3d3;">CEO-founder</span>
                                <br>
                                <span style="color:#d3d3d3;">Beta Solutions</span>
                            </div>
                            <div align="right" style="margin:0px; width:40px; padding:0px;" class="col-lg-2">
                                <img src="images/profile/logo.jpg" width="25px;" />
                            </div>
                        </div>
                        <div class="col-lg-12" style="height:22px;background-color:#afdf7c;">
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-phone" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-envelope" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-search" style="color:#fff;"></i>
                            </div>
                        </div>
                    </div>
                </figure>
                <figure style="width: 297px;
text-align: left;
margin-top: 0px;padding:0px; height:157px;" class="su_card_shadow">
                    <div class="col-lg-6 cf_card  " style="width:290px;padding:0px; border:1px solid #fff;">
                        <div class="col-lg-12" style="height:120px;padding-top:10px;">
                            <div class="col-lg-10" style="padding:0px; font-family:lato; ">
                                <span style="text-align:center; color:#afdf7c; font-family:lato"> IT - SOFTWARE</span>
                                <br>
                                <span style="color:#d3d3d3;">Rajesh</span>
                                <br>
                                <span style="color:#d3d3d3;">CEO-founder</span>
                                <br>
                                <span style="color:#d3d3d3;">Beta Solutions</span>
                            </div>
                            <div align="right" style="margin:0px; width:40px; padding:0px;" class="col-lg-2">
                                <img src="images/profile/logo.jpg" width="25px;" />
                            </div>
                        </div>
                        <div class="col-lg-12" style="height:22px;background-color:#afdf7c;">
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-phone" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-envelope" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-search" style="color:#fff;"></i>
                            </div>
                        </div>
                    </div>
                </figure>
                <figure style="width: 297px;
text-align: left;
margin-top: 0px;padding:0px; height:157px;" class="su_card_shadow">
                    <div class="col-lg-6 cf_card  " style="width:290px;padding:0px; border:1px solid #fff;">
                        <div class="col-lg-12" style="height:120px;padding-top:10px;">
                            <div class="col-lg-10" style="padding:0px; font-family:lato; ">
                                <span style="text-align:center; color:#afdf7c; font-family:lato"> IT - SOFTWARE</span>
                                <br>
                                <span style="color:#d3d3d3;">Rajesh</span>
                                <br>
                                <span style="color:#d3d3d3;">CEO-founder</span>
                                <br>
                                <span style="color:#d3d3d3;">Beta Solutions</span>
                            </div>
                            <div align="right" style="margin:0px; width:40px; padding:0px;" class="col-lg-2">
                                <img src="images/profile/logo.jpg" width="25px;" />
                            </div>
                        </div>
                        <div class="col-lg-12" style="height:22px;background-color:#afdf7c;">
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-phone" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-envelope" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-search" style="color:#fff;"></i>
                            </div>
                        </div>
                    </div>
                </figure>
                <figure style="width: 297px;
text-align: left;
margin-top: 0px;padding:0px; height:157px;" class="su_card_shadow">
                    <div class="col-lg-6 cf_card  " style="width:290px;padding:0px; border:1px solid #fff;">
                        <div class="col-lg-12" style="height:120px;padding-top:10px;">
                            <div class="col-lg-10" style="padding:0px; font-family:lato; ">
                                <span style="text-align:center; color:#afdf7c; font-family:lato"> IT - SOFTWARE</span>
                                <br>
                                <span style="color:#d3d3d3;">Rajesh</span>
                                <br>
                                <span style="color:#d3d3d3;">CEO-founder</span>
                                <br>
                                <span style="color:#d3d3d3;">Beta Solutions</span>
                            </div>
                            <div align="right" style="margin:0px; width:40px; padding:0px;" class="col-lg-2">
                                <img src="images/profile/logo.jpg" width="25px;" />
                            </div>
                        </div>
                        <div class="col-lg-12" style="height:22px;background-color:#afdf7c;">
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-phone" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-envelope" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-search" style="color:#fff;"></i>
                            </div>
                        </div>
                    </div>
                </figure>
                <figure style="width: 297px;
text-align: left;
margin-top: 0px;padding:0px; height:157px;" class="su_card_shadow">
                    <div class="col-lg-6 cf_card  " style="width:290px;padding:0px; border:1px solid #fff;">
                        <div class="col-lg-12" style="height:120px;padding-top:10px;">
                            <div class="col-lg-10" style="padding:0px; font-family:lato; ">
                                <span style="text-align:center; color:#afdf7c; font-family:lato"> IT - SOFTWARE</span>
                                <br>
                                <span style="color:#d3d3d3;">Rajesh</span>
                                <br>
                                <span style="color:#d3d3d3;">CEO-founder</span>
                                <br>
                                <span style="color:#d3d3d3;">Beta Solutions</span>
                            </div>
                            <div align="right" style="margin:0px; width:40px; padding:0px;" class="col-lg-2">
                                <img src="images/profile/logo.jpg" width="25px;" />
                            </div>
                        </div>
                        <div class="col-lg-12" style="height:22px;background-color:#afdf7c;">
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-phone" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-envelope" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-search" style="color:#fff;"></i>
                            </div>
                        </div>
                    </div>
                </figure>
                <figure style="width: 297px;
text-align: left;
margin-top: 0px;padding:0px; height:157px;" class="su_card_shadow">
                    <div class="col-lg-6 cf_card  " style="width:290px;padding:0px; border:1px solid #fff;">
                        <div class="col-lg-12" style="height:120px;padding-top:10px;">
                            <div class="col-lg-10" style="padding:0px; font-family:lato; ">
                                <span style="text-align:center; color:#afdf7c; font-family:lato"> IT - SOFTWARE</span>
                                <br>
                                <span style="color:#d3d3d3;">Rajesh</span>
                                <br>
                                <span style="color:#d3d3d3;">CEO-founder</span>
                                <br>
                                <span style="color:#d3d3d3;">Beta Solutions</span>
                            </div>
                            <div align="right" style="margin:0px; width:40px; padding:0px;" class="col-lg-2">
                                <img src="images/profile/logo.jpg" width="25px;" />
                            </div>
                        </div>
                        <div class="col-lg-12" style="height:22px;background-color:#afdf7c;">
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-phone" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-envelope" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-search" style="color:#fff;"></i>
                            </div>
                        </div>
                    </div>
                </figure>
                <figure style="width: 297px;
text-align: left;
margin-top: 0px;padding:0px; height:157px;" class="su_card_shadow">
                    <div class="col-lg-6 cf_card  " style="width:290px;padding:0px; border:1px solid #fff;">
                        <div class="col-lg-12" style="height:120px;padding-top:10px;">
                            <div class="col-lg-10" style="padding:0px; font-family:lato; ">
                                <span style="text-align:center; color:#afdf7c; font-family:lato"> IT - SOFTWARE</span>
                                <br>
                                <span style="color:#d3d3d3;">Rajesh</span>
                                <br>
                                <span style="color:#d3d3d3;">CEO-founder</span>
                                <br>
                                <span style="color:#d3d3d3;">Beta Solutions</span>
                            </div>
                            <div align="right" style="margin:0px; width:40px; padding:0px;" class="col-lg-2">
                                <img src="images/profile/logo.jpg" width="25px;" />
                            </div>
                        </div>
                        <div class="col-lg-12" style="height:22px;background-color:#afdf7c;">
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-phone" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-envelope" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-search" style="color:#fff;"></i>
                            </div>
                        </div>
                    </div>
                </figure>
                <figure style="width: 297px;
text-align: left;
margin-top: 0px;padding:0px; height:157px;" class="su_card_shadow">
                    <div class="col-lg-6 cf_card  " style="width:290px;padding:0px; border:1px solid #fff;">
                        <div class="col-lg-12" style="height:120px;padding-top:10px;">
                            <div class="col-lg-10" style="padding:0px; font-family:lato; ">
                                <span style="text-align:center; color:#afdf7c; font-family:lato"> IT - SOFTWARE</span>
                                <br>
                                <span style="color:#d3d3d3;">Rajesh</span>
                                <br>
                                <span style="color:#d3d3d3;">CEO-founder</span>
                                <br>
                                <span style="color:#d3d3d3;">Beta Solutions</span>
                            </div>
                            <div align="right" style="margin:0px; width:40px; padding:0px;" class="col-lg-2">
                                <img src="images/profile/logo.jpg" width="25px;" />
                            </div>
                        </div>
                        <div class="col-lg-12" style="height:22px;background-color:#afdf7c;">
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-phone" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-envelope" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-search" style="color:#fff;"></i>
                            </div>
                        </div>
                    </div>
                </figure>
                <figure style="width: 297px;
text-align: left;
margin-top: 0px;padding:0px; height:157px;" class="su_card_shadow">
                    <div class="col-lg-6 cf_card  " style="width:290px;padding:0px; border:1px solid #fff;">
                        <div class="col-lg-12" style="height:120px;padding-top:10px;">
                            <div class="col-lg-10" style="padding:0px; font-family:lato; ">
                                <span style="text-align:center; color:#afdf7c; font-family:lato"> IT - SOFTWARE</span>
                                <br>
                                <span style="color:#d3d3d3;">Rajesh</span>
                                <br>
                                <span style="color:#d3d3d3;">CEO-founder</span>
                                <br>
                                <span style="color:#d3d3d3;">Beta Solutions</span>
                            </div>
                            <div align="right" style="margin:0px; width:40px; padding:0px;" class="col-lg-2">
                                <img src="images/profile/logo.jpg" width="25px;" />
                            </div>
                        </div>
                        <div class="col-lg-12" style="height:22px;background-color:#afdf7c;">
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-phone" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-envelope" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-search" style="color:#fff;"></i>
                            </div>
                        </div>
                    </div>
                </figure>
                <figure style="width: 297px;
text-align: left;
margin-top: 0px;padding:0px; height:157px;" class="su_card_shadow">
                    <div class="col-lg-6 cf_card  " style="width:290px;padding:0px; border:1px solid #fff;">
                        <div class="col-lg-12" style="height:120px;padding-top:10px;">
                            <div class="col-lg-10" style="padding:0px; font-family:lato; ">
                                <span style="text-align:center; color:#afdf7c; font-family:lato"> IT - SOFTWARE</span>
                                <br>
                                <span style="color:#d3d3d3;">Rajesh</span>
                                <br>
                                <span style="color:#d3d3d3;">CEO-founder</span>
                                <br>
                                <span style="color:#d3d3d3;">Beta Solutions</span>
                            </div>
                            <div align="right" style="margin:0px; width:40px; padding:0px;" class="col-lg-2">
                                <img src="images/profile/logo.jpg" width="25px;" />
                            </div>
                        </div>
                        <div class="col-lg-12" style="height:22px;background-color:#afdf7c;">
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-phone" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-envelope" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-search" style="color:#fff;"></i>
                            </div>
                        </div>
                    </div>
                </figure>
                <figure style="width: 297px;
text-align: left;
margin-top: 0px;padding:0px; height:157px;" class="su_card_shadow">
                    <div class="col-lg-6 cf_card  " style="width:290px;padding:0px; border:1px solid #fff;">
                        <div class="col-lg-12" style="height:120px;padding-top:10px;">
                            <div class="col-lg-10" style="padding:0px; font-family:lato; ">
                                <span style="text-align:center; color:#afdf7c; font-family:lato"> IT - SOFTWARE</span>
                                <br>
                                <span style="color:#d3d3d3;">Rajesh</span>
                                <br>
                                <span style="color:#d3d3d3;">CEO-founder</span>
                                <br>
                                <span style="color:#d3d3d3;">Beta Solutions</span>
                            </div>
                            <div align="right" style="margin:0px; width:40px; padding:0px;" class="col-lg-2">
                                <img src="images/profile/logo.jpg" width="25px;" />
                            </div>
                        </div>
                        <div class="col-lg-12" style="height:22px;background-color:#afdf7c;">
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-phone" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-envelope" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-search" style="color:#fff;"></i>
                            </div>
                        </div>
                    </div>
                </figure>
                <figure style="width: 297px;
text-align: left;
margin-top: 0px;padding:0px; height:157px;" class="su_card_shadow">
                    <div class="col-lg-6 cf_card  " style="width:290px;padding:0px; border:1px solid #fff;">
                        <div class="col-lg-12" style="height:120px;padding-top:10px;">
                            <div class="col-lg-10" style="padding:0px; font-family:lato; ">
                                <span style="text-align:center; color:#afdf7c; font-family:lato"> IT - SOFTWARE</span>
                                <br>
                                <span style="color:#d3d3d3;">Rajesh</span>
                                <br>
                                <span style="color:#d3d3d3;">CEO-founder</span>
                                <br>
                                <span style="color:#d3d3d3;">Beta Solutions</span>
                            </div>
                            <div align="right" style="margin:0px; width:40px; padding:0px;" class="col-lg-2">
                                <img src="images/profile/logo.jpg" width="25px;" />
                            </div>
                        </div>
                        <div class="col-lg-12" style="height:22px;background-color:#afdf7c;">
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-phone" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-envelope" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-search" style="color:#fff;"></i>
                            </div>
                        </div>
                    </div>
                </figure>
                <figure style="width: 297px;
text-align: left;
margin-top: 0px;padding:0px; height:157px;" class="su_card_shadow">
                    <div class="col-lg-6 cf_card  " style="width:290px;padding:0px; border:1px solid #fff;">
                        <div class="col-lg-12" style="height:120px;padding-top:10px;">
                            <div class="col-lg-10" style="padding:0px; font-family:lato; ">
                                <span style="text-align:center; color:#afdf7c; font-family:lato"> IT - SOFTWARE</span>
                                <br>
                                <span style="color:#d3d3d3;">Rajesh</span>
                                <br>
                                <span style="color:#d3d3d3;">CEO-founder</span>
                                <br>
                                <span style="color:#d3d3d3;">Beta Solutions</span>
                            </div>
                            <div align="right" style="margin:0px; width:40px; padding:0px;" class="col-lg-2">
                                <img src="images/profile/logo.jpg" width="25px;" />
                            </div>
                        </div>
                        <div class="col-lg-12" style="height:22px;background-color:#afdf7c;">
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-phone" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-envelope" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-search" style="color:#fff;"></i>
                            </div>
                        </div>
                    </div>
                </figure>
                <figure style="width: 297px;
text-align: left;
margin-top: 0px;padding:0px; height:157px;" class="su_card_shadow">
                    <div class="col-lg-6 cf_card  " style="width:290px;padding:0px; border:1px solid #fff;">
                        <div class="col-lg-12" style="height:120px;padding-top:10px;">
                            <div class="col-lg-10" style="padding:0px; font-family:lato; ">
                                <span style="text-align:center; color:#afdf7c; font-family:lato"> IT - SOFTWARE</span>
                                <br>
                                <span style="color:#d3d3d3;">Rajesh</span>
                                <br>
                                <span style="color:#d3d3d3;">CEO-founder</span>
                                <br>
                                <span style="color:#d3d3d3;">Beta Solutions</span>
                            </div>
                            <div align="right" style="margin:0px; width:40px; padding:0px;" class="col-lg-2">
                                <img src="images/profile/logo.jpg" width="25px;" />
                            </div>
                        </div>
                        <div class="col-lg-12" style="height:22px;background-color:#afdf7c;">
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-phone" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-envelope" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-search" style="color:#fff;"></i>
                            </div>
                        </div>
                    </div>
                </figure>
                <figure style="width: 297px;
text-align: left;
margin-top: 0px;padding:0px; height:157px;" class="su_card_shadow">
                    <div class="col-lg-6 cf_card  " style="width:290px;padding:0px; border:1px solid #fff;">
                        <div class="col-lg-12" style="height:120px;padding-top:10px;">
                            <div class="col-lg-10" style="padding:0px; font-family:lato; ">
                                <span style="text-align:center; color:#afdf7c; font-family:lato"> IT - SOFTWARE</span>
                                <br>
                                <span style="color:#d3d3d3;">Rajesh</span>
                                <br>
                                <span style="color:#d3d3d3;">CEO-founder</span>
                                <br>
                                <span style="color:#d3d3d3;">Beta Solutions</span>
                            </div>
                            <div align="right" style="margin:0px; width:40px; padding:0px;" class="col-lg-2">
                                <img src="images/profile/logo.jpg" width="25px;" />
                            </div>
                        </div>
                        <div class="col-lg-12" style="height:22px;background-color:#afdf7c;">
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-phone" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-envelope" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-search" style="color:#fff;"></i>
                            </div>
                        </div>
                    </div>
                </figure>
                <figure style="width: 297px;
text-align: left;
margin-top: 0px;padding:0px; height:157px;" class="su_card_shadow">
                    <div class="col-lg-6 cf_card  " style="width:290px;padding:0px; border:1px solid #fff;">
                        <div class="col-lg-12" style="height:120px;padding-top:10px;">
                            <div class="col-lg-10" style="padding:0px; font-family:lato; ">
                                <span style="text-align:center; color:#afdf7c; font-family:lato"> IT - SOFTWARE</span>
                                <br>
                                <span style="color:#d3d3d3;">Rajesh</span>
                                <br>
                                <span style="color:#d3d3d3;">CEO-founder</span>
                                <br>
                                <span style="color:#d3d3d3;">Beta Solutions</span>
                            </div>
                            <div align="right" style="margin:0px; width:40px; padding:0px;" class="col-lg-2">
                                <img src="images/profile/logo.jpg" width="25px;" />
                            </div>
                        </div>
                        <div class="col-lg-12" style="height:22px;background-color:#afdf7c;">
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-phone" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-envelope" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-search" style="color:#fff;"></i>
                            </div>
                        </div>
                    </div>
                </figure>
                <figure style="width: 297px;
text-align: left;
margin-top: 0px;padding:0px; height:157px;" class="su_card_shadow">
                    <div class="col-lg-6 cf_card  " style="width:290px;padding:0px; border:1px solid #fff;">
                        <div class="col-lg-12" style="height:120px;padding-top:10px;">
                            <div class="col-lg-10" style="padding:0px; font-family:lato; ">
                                <span style="text-align:center; color:#afdf7c; font-family:lato"> IT - SOFTWARE</span>
                                <br>
                                <span style="color:#d3d3d3;">Rajesh</span>
                                <br>
                                <span style="color:#d3d3d3;">CEO-founder</span>
                                <br>
                                <span style="color:#d3d3d3;">Beta Solutions</span>
                            </div>
                            <div align="right" style="margin:0px; width:40px; padding:0px;" class="col-lg-2">
                                <img src="images/profile/logo.jpg" width="25px;" />
                            </div>
                        </div>
                        <div class="col-lg-12" style="height:22px;background-color:#afdf7c;">
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-phone" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-envelope" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-search" style="color:#fff;"></i>
                            </div>
                        </div>
                    </div>
                </figure>
                <figure style="width: 297px;
text-align: left;
margin-top: 0px;padding:0px; height:157px;" class="su_card_shadow">
                    <div class="col-lg-6 cf_card  " style="width:290px;padding:0px; border:1px solid #fff;">
                        <div class="col-lg-12" style="height:120px;padding-top:10px;">
                            <div class="col-lg-10" style="padding:0px; font-family:lato; ">
                                <span style="text-align:center; color:#afdf7c; font-family:lato"> IT - SOFTWARE</span>
                                <br>
                                <span style="color:#d3d3d3;">Rajesh</span>
                                <br>
                                <span style="color:#d3d3d3;">CEO-founder</span>
                                <br>
                                <span style="color:#d3d3d3;">Beta Solutions</span>
                            </div>
                            <div align="right" style="margin:0px; width:40px; padding:0px;" class="col-lg-2">
                                <img src="images/profile/logo.jpg" width="25px;" />
                            </div>
                        </div>
                        <div class="col-lg-12" style="height:22px;background-color:#afdf7c;">
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-phone" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-envelope" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-search" style="color:#fff;"></i>
                            </div>
                        </div>
                    </div>
                </figure>
                <figure style="width: 297px;
text-align: left;
margin-top: 0px;padding:0px; height:157px;" class="su_card_shadow">
                    <div class="col-lg-6 cf_card  " style="width:290px;padding:0px; border:1px solid #fff;">
                        <div class="col-lg-12" style="height:120px;padding-top:10px;">
                            <div class="col-lg-10" style="padding:0px; font-family:lato; ">
                                <span style="text-align:center; color:#afdf7c; font-family:lato"> IT - SOFTWARE</span>
                                <br>
                                <span style="color:#d3d3d3;">Rajesh</span>
                                <br>
                                <span style="color:#d3d3d3;">CEO-founder</span>
                                <br>
                                <span style="color:#d3d3d3;">Beta Solutions</span>
                            </div>
                            <div align="right" style="margin:0px; width:40px; padding:0px;" class="col-lg-2">
                                <img src="images/profile/logo.jpg" width="25px;" />
                            </div>
                        </div>
                        <div class="col-lg-12" style="height:22px;background-color:#afdf7c;">
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-phone" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-envelope" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-search" style="color:#fff;"></i>
                            </div>
                        </div>
                    </div>
                </figure>
                <figure style="width: 297px;
text-align: left;
margin-top: 0px;padding:0px; height:157px;" class="su_card_shadow">
                    <div class="col-lg-6 cf_card  " style="width:290px;padding:0px; border:1px solid #fff;">
                        <div class="col-lg-12" style="height:120px;padding-top:10px;">
                            <div class="col-lg-10" style="padding:0px; font-family:lato; ">
                                <span style="text-align:center; color:#afdf7c; font-family:lato"> IT - SOFTWARE</span>
                                <br>
                                <span style="color:#d3d3d3;">Rajesh</span>
                                <br>
                                <span style="color:#d3d3d3;">CEO-founder</span>
                                <br>
                                <span style="color:#d3d3d3;">Beta Solutions</span>
                            </div>
                            <div align="right" style="margin:0px; width:40px; padding:0px;" class="col-lg-2">
                                <img src="images/profile/logo.jpg" width="25px;" />
                            </div>
                        </div>
                        <div class="col-lg-12" style="height:22px;background-color:#afdf7c;">
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-phone" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-envelope" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-search" style="color:#fff;"></i>
                            </div>
                        </div>
                    </div>
                </figure>
                <figure style="width: 297px;
text-align: left;
margin-top: 0px;padding:0px; height:157px;" class="su_card_shadow">
                    <div class="col-lg-6 cf_card  " style="width:290px;padding:0px; border:1px solid #fff;">
                        <div class="col-lg-12" style="height:120px;padding-top:10px;">
                            <div class="col-lg-10" style="padding:0px; font-family:lato; ">
                                <span style="text-align:center; color:#afdf7c; font-family:lato"> IT - SOFTWARE</span>
                                <br>
                                <span style="color:#d3d3d3;">Rajesh</span>
                                <br>
                                <span style="color:#d3d3d3;">CEO-founder</span>
                                <br>
                                <span style="color:#d3d3d3;">Beta Solutions</span>
                            </div>
                            <div align="right" style="margin:0px; width:40px; padding:0px;" class="col-lg-2">
                                <img src="images/profile/logo.jpg" width="25px;" />
                            </div>
                        </div>
                        <div class="col-lg-12" style="height:22px;background-color:#afdf7c;">
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-phone" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-envelope" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-search" style="color:#fff;"></i>
                            </div>
                        </div>
                    </div>
                </figure>
                <figure style="width: 297px;
text-align: left;
margin-top: 0px;padding:0px; height:157px;" class="su_card_shadow">
                    <div class="col-lg-6 cf_card  " style="width:290px;padding:0px; border:1px solid #fff;">
                        <div class="col-lg-12" style="height:120px;padding-top:10px;">
                            <div class="col-lg-10" style="padding:0px; font-family:lato; ">
                                <span style="text-align:center; color:#afdf7c; font-family:lato"> IT - SOFTWARE</span>
                                <br>
                                <span style="color:#d3d3d3;">Rajesh</span>
                                <br>
                                <span style="color:#d3d3d3;">CEO-founder</span>
                                <br>
                                <span style="color:#d3d3d3;">Beta Solutions</span>
                            </div>
                            <div align="right" style="margin:0px; width:40px; padding:0px;" class="col-lg-2">
                                <img src="images/profile/logo.jpg" width="25px;" />
                            </div>
                        </div>
                        <div class="col-lg-12" style="height:22px;background-color:#afdf7c;">
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-phone" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-envelope" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-search" style="color:#fff;"></i>
                            </div>
                        </div>
                    </div>
                </figure>
                <figure style="width: 297px;
text-align: left;
margin-top: 0px;padding:0px; height:157px;" class="su_card_shadow">
                    <div class="col-lg-6 cf_card  " style="width:290px;padding:0px; border:1px solid #fff;">
                        <div class="col-lg-12" style="height:120px;padding-top:10px;">
                            <div class="col-lg-10" style="padding:0px; font-family:lato; ">
                                <span style="text-align:center; color:#afdf7c; font-family:lato"> IT - SOFTWARE</span>
                                <br>
                                <span style="color:#d3d3d3;">Rajesh</span>
                                <br>
                                <span style="color:#d3d3d3;">CEO-founder</span>
                                <br>
                                <span style="color:#d3d3d3;">Beta Solutions</span>
                            </div>
                            <div align="right" style="margin:0px; width:40px; padding:0px;" class="col-lg-2">
                                <img src="images/profile/logo.jpg" width="25px;" />
                            </div>
                        </div>
                        <div class="col-lg-12" style="height:22px;background-color:#afdf7c;">
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-phone" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-envelope" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-search" style="color:#fff;"></i>
                            </div>
                        </div>
                    </div>
                </figure>
                <figure style="width: 297px;
text-align: left;
margin-top: 0px;padding:0px; height:157px;" class="su_card_shadow">
                    <div class="col-lg-6 cf_card  " style="width:290px;padding:0px; border:1px solid #fff;">
                        <div class="col-lg-12" style="height:120px;padding-top:10px;">
                            <div class="col-lg-10" style="padding:0px; font-family:lato; ">
                                <span style="text-align:center; color:#afdf7c; font-family:lato"> IT - SOFTWARE</span>
                                <br>
                                <span style="color:#d3d3d3;">Rajesh</span>
                                <br>
                                <span style="color:#d3d3d3;">CEO-founder</span>
                                <br>
                                <span style="color:#d3d3d3;">Beta Solutions</span>
                            </div>
                            <div align="right" style="margin:0px; width:40px; padding:0px;" class="col-lg-2">
                                <img src="images/profile/logo.jpg" width="25px;" />
                            </div>
                        </div>
                        <div class="col-lg-12" style="height:22px;background-color:#afdf7c;">
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-phone" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-envelope" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-search" style="color:#fff;"></i>
                            </div>
                        </div>
                    </div>
                </figure>
                <figure style="width: 297px;
text-align: left;
margin-top: 0px;padding:0px; height:157px;" class="su_card_shadow">
                    <div class="col-lg-6 cf_card  " style="width:290px;padding:0px; border:1px solid #fff;">
                        <div class="col-lg-12" style="height:120px;padding-top:10px;">
                            <div class="col-lg-10" style="padding:0px; font-family:lato; ">
                                <span style="text-align:center; color:#afdf7c; font-family:lato"> IT - SOFTWARE</span>
                                <br>
                                <span style="color:#d3d3d3;">Rajesh</span>
                                <br>
                                <span style="color:#d3d3d3;">CEO-founder</span>
                                <br>
                                <span style="color:#d3d3d3;">Beta Solutions</span>
                            </div>
                            <div align="right" style="margin:0px; width:40px; padding:0px;" class="col-lg-2">
                                <img src="images/profile/logo.jpg" width="25px;" />
                            </div>
                        </div>
                        <div class="col-lg-12" style="height:22px;background-color:#afdf7c;">
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-phone" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-envelope" style="color:#fff;"></i>
                            </div>
                            <div class="col-lg-4" style="padding:0px; height:20px;" align="center">
                                <i class="fa fa-1x fa-search" style="color:#fff;"></i>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
        </section>
        <div class="container-fluid  hgt_signup  su_shdw" align="center" style=" text-align:center; height:270px; ">
            <div class="col-lg-6  su_div_pad col-md-6 " id="tape" style="background-color:#d8d8d8; margin-bottom:50px;  color: #fff;">
                <h3 style="margin-top: 0px !important;margin-bottom:0px !important; padding-top:0px;">
        NEW TO LNB</h3>
                <h5 style="margin-top:5px !important; margin-bottom:5px !important;">
        Create account and write your dairy</h5>
                <h5 style="font-weight:bold; margin-top:5px !important;margin-bottom:5px !important;" style="height:50px;">
        LNB helps you to record your Business journey every moment and connecting business</h5>
                <div class="row">
                    <div class="col-lg-6" align="right;">
                        <h4 style="margin-top:0px;margin-bottom:0px; text-align:right">
                Network  </h4>
                        <h4 style="margin-top:0px;margin-bottom:0px;text-align:right">
                Share  </h4>
                        <h4 style="margin-top:0px;margin-bottom:0px;text-align:right">
                Read  </h4>
                    </div>
                    <div class="col-lg-6" style="border-left:2px solid #fff; height:50px;" align="left">
                        <h2 style="padding:0px;margin:0px; margin-top:5px;">
              Business</h2> 
                    </div>
                </div>
                <div align="center" style="padding-top:5px;" class="remodal-bg">
                    <!--<input type="button" class="btn btn_grn " value="Start" style="width:100px; padding-top:3px;" />-->
                    <a href="#modal" class="btn btn_grn" style="width:100px; padding-top:3px;">Submit</a>
                </div>
            </div>
            <div class="col-lg-6  su_div_pad col-md-6 pst_box" style="border:2px dotted #afdf7c;background-color:#fff; color:#000;" align="center">
                <form role="form" method="post" action=""> 
                    <div class="form-group"> 
                        <input type="email" class=" club_txt txt_font" name="email" id="exampleInputEmail1" placeholder="Entrepreneur"> 
                    </div>                     
                    <div class="form-group"> 
                        <input type="password" class=" club_txt txt_font" name="pwd" id="exampleInputPassword1" placeholder="Password"> 
                    </div>                     
                    <div align="right" style="padding-right:5px;">
                        <button type="submit" name="login" class="btn btn_grn" style="float:right;">OPEN DAIRY</button>                         
                        <br>
                        <br>
                        <br>
                        <a href="#"><span>Unable to login</span></a>
                    </div>
                </form>
            </div>
        </div>
        <div class="remodal" data-remodal-id="modal" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
            <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
            <div>
                <h2 class="club_headers" style="text-align:center;">Sign up</h2>
                <form role="form" style="font-size:14px;"> 
                    <input type="text" class="club_txt" placeholder="Name" />
                    <select class="select_color" style="width:599px; margin-left:10px; margin-top:20px;">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                    <div style="margin-left:10px;margin-top:20px;">
                        <span><select class="select_color" style="width:197px">
                                <option>
                                    <p style="color:#d8d8dd8;">Date</p>
                                </option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select></span>
                        <span><select class="select_color" style="width:197px">
                                <option>
                                    <small style="color:#d8d8dd8;">Month</small>
                                </option>
                                <option>Jan</option>
                                <option>Feb</option>
                                <option>Mar</option>
                                <option>Apr</option>
                                <option>May</option>
                                <option>Jun</option>
                                <option>Jul</option>
                                <option>Aug</option>
                                <option>Sep</option>
                                <option>Oct</option>
                                <option>Nov</option>
                                <option>Dec</option>
                            </select></span>
                        <span><select class="select_color" style="width:197px">
                                <option>
                                    <small style="color:#d8d8dd8;">Year</small>
                                </option>
                                <option>2017</option>
                                <option>2016</option>
                                <option>2015</option>
                                <option>2014</option>
                                <option>2013</option>
                                <option>2012</option>
                                <option>2011</option>
                                <option>2010</option>
                                <option>2009</option>
                                <option>2008</option>
                                <option>2007</option>
                                <option>2006</option>
                            </select></span>
                    </div>
                    <input type="email" class="club_txt" placeholder="Email" />
                    <input type="password" class="club_txt" placeholder="Password" />
                    <input type="password" class="club_txt" placeholder="Verify" />
                </form>
            </div>
            <br>
            <button data-remodal-action="cancel" class="btn btn_grn" style="background-color:#F48E8B;">Cancel</button>
            <button data-remodal-action="confirm" class="btn btn_grn" style="width:67px;">Submit</button>
        </div>
        <footer class="footer" style="background-color:#afdf7c">
</footer>
        <!-- /.container -->
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
        <script src="js/classie.js"></script>
        <script src="js/photostack.js"></script>
        <script>
            // [].slice.call( document.querySelectorAll( '.photostack' ) ).forEach( function( el ) { new Photostack( el ); } );
            
            new Photostack( document.getElementById( 'photostack-1' ), {
                callback : function( item ) {
                    //console.log(item)
                }
            } );
            new Photostack( document.getElementById( 'photostack-2' ), {
                callback : function( item ) {
                    //console.log(item)
                }
            } );
            new Photostack( document.getElementById( 'photostack-3' ), {
                callback : function( item ) {
                    //console.log(item)
                }
            } );
        </script>
        <script>
			new Photostack( document.getElementById( 'photostack-3' ), {
  // any other options here,
    afterInit: function(ps) {
        setTimeout(function() {
            ps._open(true);
        }, 2500);
    },
    afterShowPhoto: function(ps) {
        setTimeout(function() {
            ps._navigate('next');
        }, 2500);
    }
}); 
		</script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/jquery.min.js"><\/script>')</script>
        <script src="assets/js/remodal.js"></script>
        <!-- Events -->
        <script>
  $(document).on('opening', '.remodal', function () {
    console.log('opening');
  });

  $(document).on('opened', '.remodal', function () {
    console.log('opened');
  });

  $(document).on('closing', '.remodal', function (e) {
    console.log('closing' + (e.reason ? ', reason: ' + e.reason : ''));
  });

  $(document).on('closed', '.remodal', function (e) {
    console.log('closed' + (e.reason ? ', reason: ' + e.reason : ''));
  });

  $(document).on('confirmation', '.remodal', function () {
    console.log('confirmation');
  });

  $(document).on('cancellation', '.remodal', function () {
    console.log('cancellation');
  });

//  Usage:
//  $(function() {
//
//    // In this case the initialization function returns the already created instance
//    var inst = $('[data-remodal-id=modal]').remodal();
//
//    inst.open();
//    inst.close();
//    inst.getState();
//    inst.destroy();
//  });

  //  The second way to initialize:
  $('[data-remodal-id=modal2]').remodal({
    modifier: 'with-red-theme'
  });
</script>
        <script>
        flatpickr(".selector", {}); // [Flatpickr, Flatpickr, ...]
document.getElementById("myID").flatpickr(config); // Flatpickr
let calendar = new Flatpickr(element, config); // Flatpickr

// jQuery
$(".selector").flatpickr({});
        </script>
        <!-- <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>         -->
