<?php
include 'config.php';
date_default_timezone_set('Asia/Kolkata');

//signin stage 1

/*if(isset($_POST['sub_stage1']))
{
	$check_email=mysqli_query($conn,"select * from users where Email='".$_POST['email']."'");
	$chek_cou=mysqli_num_rows($check_email);
	if($chek_cou==0)
	{
	if($_POST['pwd']==$_POST['con_pwd'])
	{
	$ins_s1=mysqli_query($conn,"INSERT INTO `users`(`Name`, `Email`, `Password`, `Gender`, `Birthday_Date`, `designation`, `company`, `industry`,`phone`) VALUES ('".$_POST['username']."','".$_POST['email']."','".$_POST['pwd']."','".$_POST['gender']."','".$_POST['day'].$_POST['month'].$_POST['year']."','".$_POST['designation']."','".$_POST['company']."','".$_POST['industry']."','".$_POST['phone']."')");
	
	if($ins_s1)
	{
		
		$path = "fb_users/".$_POST['gender']."/".$_POST['email']."/Profile/";
		$path2 ="fb_users/".$_POST['gender']."/".$_POST['email']."/Post/";
		$path3 ="fb_users/".$_POST['gender']."/".$_POST['email']."/Cover/";
		$path4="fb_users/".$_POST['gender']."/".$_POST['email']."/Projects/";
		mkdir($path, 0, true);
		mkdir($path2, 0, true);
		mkdir($path3, 0, true);
		mkdir($path4, 0, true);
		
	$last_user=mysqli_insert_id($conn);
	$ins_use_info=mysqli_query($conn,"insert into user_info (user_id,mobile_no,Email)values('$last_user','$_POST[phone]','$_POST[email]')");
	$in_se_q=mysqli_query($conn,"insert into user_secret_quotes (user_id) values('$last_user')");
	$ins_folio=mysqli_query($conn,"insert into folio (user_id)values('$last_user')");
	
	
	echo "<script>alert('Successfully Registered Please Be login')</script>";
	}
	else
	{
		echo "<script>alert(' Registration Fail')</script>";
	}
	
	
	//header("location:signup2.php?id=$id");
	}else
	{
		echo "<script>alert('Chech Ur verify Password')</script>";
	}
	}else
	{
		echo "<script>alert('Existed Email')</script>";
	}
}


//--stage2 signin---

if(isset($_POST['sub_stage2']))
{
	$ins_stage2=mysqli_query($conn,"update user_info set school='$_POST[school]',collage='$_POST[college]',hometown='$_POST[hometown]',current_city='$_POST[presentown]' where user_id='$_SESSION[id]'");
	$up_user=mysqli_query($conn,"update users set description='$_POST[about]' where user_id='$_GET[id]'");
	$id=$_GET['id'];
	header("location:signup3.php?id=$id");
}*/

if(isset($_POST['sub_stage3']))
{
	$set_prioti=mysqli_query($conn,"update user_info set mobile_no_priority='$_POST[mb_priority]',Email_id_priority='$_POST[email_priority]' where user_id='$_GET[id]' ");
	$in_s_qt=mysqli_query($conn,"update user_secret_quotes set Question1='$_POST[pr_q1]',Answer1='$_POST[pr_a1]',Question2='$_POST[pr_q2]',Answer2='$_POST[pr_a2]' where user_id='$_GET[id]'");
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
       <?php /*?> <section id="photostack-3" class="photostack paper">
            <div>
            <?php
            $sinyy_exe=mysqli_query($conn,"select * from users order by RAND()");
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
                                <span style="color:#d3d3d3;text-transform:capitalize;"><?php echo $sunny['Name'];?></span>
                                <br>
                                <span style="color:#d3d3d3;text-transform:capitalize;"><?php echo $sunny['designation'];?></span>
                                <br>
                                <span style="color:#d3d3d3;text-transform:capitalize;"><?php echo $sunny['company'];?></span>
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
            
               
            </div>
        </section><?php */?>
        <div class="container-fluid  hgt_signup  su_shdw" align="center" style=" text-align:center; height:270px; ">
        <form role="form" style="font-size:14px;" method="post" action="">
           <h2 class="club_headers" style="text-align:center;">About u</h2>
            <div class="col-lg-6  su_div_pad col-md-6 "  style=" margin-bottom:50px;  color: #000;">
                 
            <div>
             
               
                    <select class="select_color" style="width:599px; margin-left:10px; margin-top:20px;" name="mb_priority">
                        <option>Mobile Priority</option>
                        <option value="Public">Public</option>
                        <option value="Private">Private</option>
                    </select>
                   
                    <select class="select_color" style="width:599px; margin-left:10px; margin-top:20px;" name="pr_q1">
                        <option>Security Questions2</option>
                        <option value="Security Questions11">Security Questions11</option>
                        <option value="Security Questions12">Security Questions22</option>
                    </select>
                    
                    <select class="select_color" style="width:599px; margin-left:10px; margin-top:20px;" name="pr_a1">
                        <option>Security Answers1</option>
                        <option value="Security Answers11">Security Answers11</option>
                        <option value="Security Answers12">Security Answers12</option>
                    </select>
                    
            </div>
           
            
            </div>
            
            <div class="col-lg-6  su_div_pad col-md-6 "  style=" margin-bottom:50px;  color: #000;">
                <form role="form" style="font-size:14px;" method="post" action="script_code.php"> 
            <div>
                
                   <select class="select_color" style="width:599px; margin-left:10px; margin-top:20px;" name="email_priority">
                        <option>Email Priority</option>
                        <option value="Public">Public</option>
                        <option value="Private">Private</option>
                    </select>
                     <select class="select_color" style="width:599px; margin-left:10px; margin-top:20px;" name="pr_q2">
                        <option>Security Questions2</option>
                        <option value="Security Questions21">Security Questions21</option>
                        <option value="Security Questions22">Security Questions22</option>
                    </select>
                    
                    <select class="select_color" style="width:599px; margin-left:10px; margin-top:20px;" name="pr_a2">
                        <option>Security Answers2</option>
                        <option value="Security Answers21">Security Answers21</option>
                        <option value="Security Answers22">Security Answers22</option>
                    </select>
                    
                
            </div>
            <br>
            
            
            </div> 
            <button data-remodal-action="cancel" class="btn btn_grn" style="background-color:#F48E8B;">Cancel</button>
            <button type="submit"  class="btn btn_grn" onClick="submit_stage1();" name="sub_stage3" style="width:67px;">Submit</button>
           </form>
        </div>
    
        <footer class="footer" style="background-color:#afdf7c;margin-top:200px;">
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
