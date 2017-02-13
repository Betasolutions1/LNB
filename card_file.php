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

        <link rel="stylesheet" href="css/style.css">
        <style>
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
                            <a href="#" style="font-family:Stencil Std; color:#808080;font-size:24px; padding-left:25px; padding-right:25px;">F</a>
                        </li>
                        <li>
                            <a href="mail.php" style="font-family:Stencil Std;color:#808080; font-size:24px; padding-left:25px; padding-right:25px;">M</a>
                        </li>
                        <li>
                            <a href="#contact" style="font-family:Stencil Std;color:#808080; font-size:24px; padding-left:25px; padding-right:25px;">S</a>
                        </li>
                        <li>
                            <a href="#" style="font-family:Stencil Std; font-size:24px;color:#808080; padding-left:25px; padding-right:25px;">N</a>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
        <div class="container-fluid paper" style=" padding-top: 30px;">
            <div class="row"> 
                <div class="col-lg-3 col-md-4" align="center">
                       <div class="row pst_box" style="background-color:#fff; padding-bottom:250px; margin-bottom:30px; height:280px;">
                        <div class="col-lg-12" style="background-color:#afdf7c; padding:0px;">
                            <h3 class="club_headers" style="text-align:center; padding:0px; color:#fff">
           Category</h3>
                        </div>
                        <div class="col-lg-12" style="padding:0px; overflow-y:scroll; height:230px">
                            <button style="border:1px dotted #afdf7c;background-color:#fff;width:270px;color:#afdf7c;text-align:left;">
                                <span> <h5>IT-Software &nbsp <span class="badge">43</span></h5> </span> 
                            </button>
                            <button style="border:1px dotted #afdf7c;background-color:#fff;width:270px;color:#afdf7c;text-align:left;">
                                <span> <h5>IT-Hardware &nbsp <span class="badge">43</span></h5> </span> 
                            </button>
                            <button style="border:1px dotted #afdf7c;background-color:#fff;width:270px;color:#afdf7c;text-align:left;">
                                <span> <h5>Iot &nbsp <span class="badge">43</span></h5> </span> 
                            </button>
                            <button style="border:1px dotted #afdf7c;background-color:#fff;width:270px;color:#afdf7c;text-align:left;">
                                <span> <h5>Textiles &nbsp <span class="badge">43</span></h5> </span> 
                            </button>
                            <button style="border:1px dotted #afdf7c;background-color:#fff;width:270px;color:#afdf7c;text-align:left;">
                                <span> <h5>Gold &nbsp <span class="badge">43</span></h5> </span> 
                            </button>
                            <button style="border:1px dotted #afdf7c;background-color:#fff;width:270px;color:#afdf7c;text-align:left;">
                                <span> <h5>Furniture &nbsp <span class="badge">43</span></h5> </span> 
                            </button>
                        </div>
                    </div>
                     <div class="jumbotron banner_1_sticky sticky">
                     <?php
                    $get_ads_exe=mysqli_query($conn,"select * from advertisments order by RAND() desc limit 1");
					$ads=mysqli_fetch_array($get_ads_exe);
					
					?>
                        <img src="Console/advertises/<?php echo $ads['advertise_image'];?>" style="width:275px; height:400px; margin-left:-60px; margin-top:-45px; margin-bottom:-45px" />
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 "> 
                    <div class="pst_main_background" style="background-color:#fff;">
                        <div class="row cf_block_height">
                        <?php
                        $usr_frnd_list_exe=mysqli_query($conn,"select * from friend_request where who_sent_user_id='".$_SESSION['id']."' AND status='1'");
 while($usr_frnd_list=mysqli_fetch_array($usr_frnd_list_exe))
 {
	 $usr_frnds_deta=mysqli_query($conn,"select * from users where  user_id='$usr_frnd_list[to_whom_user_id]'");
	 $usr_frnd_details=mysqli_fetch_array($usr_frnds_deta);
	
	 ?>
						
                            <div class="col-lg-4 cf_card  ">
                                <div class="col-lg-12" style="height:120px;padding-top:10px;">
                                    <div class="col-lg-10" style="padding:0px; font-family:lato; ">
                                        <span style="text-align:center; color:#afdf7c; font-family:lato;text-transform:uppercase; "> <?php echo $usr_frnd_details['industry'];?></span>
                                        <br>
                                        <span style="color:#d3d3d3;text-transform:capitalize;"><?php echo $usr_frnd_details['Name'];?></span>
                                        <br>
                                        <span style="color:#d3d3d3;"><?php echo $usr_frnd_details['designation'];?></span>
                                        <br>
                                        <span style="color:#d3d3d3;"><?php echo $usr_frnd_details['company'];?></span>
                                    </div>
                                    <div align="right" style="margin:0px; width:25px; padding:0px;" class="col-lg-2">
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
                                       <a href="profile.php?id=<?php echo $usr_frnd_details['user_id'];?>"> <i class="fa fa-1x fa-book" style="color:#fff;"></i></a>
                                    </div>
                                </div>
                            </div>
                            <?php
 }
							?>
                            
                            
                             <?php
 $urr_frnd_list_exe=mysqli_query($conn,"select * from friend_request where to_whom_user_id='$_SESSION[id]' AND status='1'");
 while($urr_frnd_list=mysqli_fetch_array($urr_frnd_list_exe))
 {
	 $urr_frnds_deta=mysqli_query($conn,"select * from users where  user_id='$urr_frnd_list[who_sent_user_id]'");
	 $urr_frnd_details=mysqli_fetch_array($urr_frnds_deta);
	
	 
	 
	 ?>
                            
                            <div class="col-lg-4 cf_card  ">
                                <div class="col-lg-12" style="height:120px;padding-top:10px;">
                                    <div class="col-lg-10" style="padding:0px; font-family:lato; ">
                                        <span style="text-align:center; color:#afdf7c; font-family:lato;text-transform:uppercase;"> <?php echo $urr_frnd_details['industry']?></span>
                                        <br>
                                        <span style="color:#d3d3d3; text-transform:capitalize;"><?php echo $urr_frnd_details['Name'];?></span>
                                        <br>
                                        <span style="color:#d3d3d3;"><?php echo $urr_frnd_details['designation'];?></span>
                                        <br>
                                        <span style="color:#d3d3d3;"><?php echo $urr_frnd_details['company'];?></span>
                                    </div>
                                    <div align="right" style="margin:0px; width:25px; padding:0px;" class="col-lg-2">
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
                                       <a href="profile.php?id=<?php echo $usr_frnd_details['user_id'];?>"> <i class="fa fa-1x fa-book" style="color:#fff;"></i></a>
                                    </div>
                                </div>
                            </div>
                           
                            <?php
 }
							?>
                        
                           
                        </div>
                    </div>
                </div>                 
              <?php /*?>  <div class="col-md-3 col-lg-3 b_s">
                    <div class="row">
                        <div>
                            <img class="b_s" src="../assets//images/Banner_1.jpg" style="width:200px; height:900px;" />
                        </div>
                    </div>
                    <!-- Widget -->
                    <!-- // Widget END -->
                </div>   <?php */?>              
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
    </body>
</html>
