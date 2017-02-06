<?php
include '../config.php';
date_default_timezone_set('Asia/Kolkata');

if(isset($_POST['industry']))
{
	if($_POST['industry']!='')
	{
	$ins_indu=mysqli_query($conn,"INSERT INTO `add_industry`( `INDUSTRY_NAME`) VALUES ('".$_POST['industry']."')");
	}
}

//--stage2 signin---

/*if(isset($_POST['sub_stage2']))
{
	$ins_stage2=mysqli_query($conn,"update user_info set school='$_POST[school]',collage='$_POST[college]',hometown='$_POST[hometown]',current_city='$_POST[presentown]' where user_id='$_SESSION[id]'");
	$up_user=mysqli_query($conn,"update users set description='$_POST[about]' where user_id='$_GET[id]'");
	$id=$_GET['id'];
	header("location:signup3.php?id=$id");
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
        <link href="../starter-template.css" rel="stylesheet">
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
        <link rel="stylesheet" type="text/css" href="../css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="../css/demo.css" />
        <link rel="stylesheet" type="text/css" href="../css/component.css" />
        <link rel="stylesheet" type="text/css" href="../assets/css/custom.css" />
        <link rel="stylesheet" href="../assets/font/font-awesome/css/font-awesome.min.css">
        <script src="../js/modernizr.min.js"></script>
        <link rel="stylesheet" href="../assets/css/remodal.css">
        <link rel="stylesheet" href="../assets/css/remodal-default-theme.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <!-- <link rel="stylesheet" href="/resources/demos/style.css">-->
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
  <script type="text/javascript">
  function Add_industry() {
	alert("hello" );
    var industry  = document.getElementById("industry").value;
	
    //sug_usrt_id
	//alert("hello" + bpost_id );
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'industry=' + industry;
      
                    // AJAX code to submit form.
                    $.ajax({
                    type: "POST",
                    url: "add_industry.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    //alert(html);
					document.getElementById("industry").value='';
                    }
                    });
               
        return false;
}
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
        
           <h2 class="club_headers" style="text-align:center;">ADD INDUSTRY</h2>
            <div class="col-lg-12 su_div_pad col-md-12 "  style=" margin-bottom:50px;  color: #000;">
               <form role="form" style="font-size:14px;" method="post" action="">  
            <div>
             
                <input type="text" class="club_txt" name="industry" id="industry" placeholder="INDUSTRY NAME" />
                   
                   <!-- <select class="select_color" style="width:599px; margin-left:10px; margin-top:20px;" name="gender">
                        <option>Male</option>
                        <option>Female</option>
                    </select>-->
                   <br>
                   <br>
                  
                <button data-remodal-action="cancel" class="btn btn_grn" style="background-color:#F48E8B;">Cancel</button>
            <button type="submit"  class="btn btn_grn" onClick="Add_industry();" name="Add_industry" style="width:67px;">Submit</button>    
            </div>
            </form>
            
            </div>
            
           
            
          
        </div>
    
        <footer class="footer" style="background-color:#afdf7c;margin-top:200px;">
</footer>
        <!-- /.container -->
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../assets/js/ie10-viewport-bug-workaround.js"></script>
        <script src="../js/classie.js"></script>
        <script src="../js/photostack.js"></script>
        <!--Jquery Scripts---->
        
         <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">
         <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
          <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
        
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
        <script src="../assets/js/remodal.js"></script>
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
