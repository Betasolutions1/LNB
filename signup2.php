<?php
error_reporting(0);
include 'config.db.php';
//echo $_GET['id'];
if(isset($_POST['signup2']))
{
	$ins_sign2=mysqli_query($conn,"update users set description='$_POST[about]' where user_id='$_GET[id]'");
	
	$inui=mysqli_query($conn,"update user_info set school_or_collage='".$_POST['schooling'].$_POST['Collage']."',current_city='$_POST[presenttown]',hometown='$_POST[hometown]' where user_id='$_GET[id]'");
	
	$id=$_GET['id'];
	header("location:signup3.php?id=$id");
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>LNBusiness</title>
<link href="bootstarp/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
<link href="bootstarp/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
<script src="bootstarp/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
<script src="bootstarp/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container-fluid">
<div class="row"><div>
<nav class="navbar navbar-default top-nav navbar-fixed-top" style="border-bottom:2px solid #ADCA8C; padding-bottom:-12px;" role="navigation">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle btn btn-default" data-toggle="collapse" data-target="#navbar-fixed-layout-collapse">
                                <i class="fa fa-indent"></i>
                            </button>
                            <!--<a class="navbar-brand" href="#">
        <img src="../assets//images/logo/logo.jpg" alt="">
    </a>-->
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div align="center" class="collapse navbar-collapse" id="navbar-fixed-layout-collapse" style="padding-bottom:0px;">
                            <ul class="nav navbar-nav" style="padding-bottom:0px;">



                                <h4 style="font-family:lintsec; padding:18px; padding-bottom:-0px; font-size:150%; margin-left:10px; "><a style="color:#8bbf61;margin-left:400px;" href="#" >LN.BUSINESS</a></h4>
                            </ul>
                            <form class="navbar-form navbar-left hidden-sm" role="search">
                                <!--<div class="form-group inline-block">
                                    <input type="text" class="form-control " placeholder="SEARCH" style="width:400px;">
                                </div>-->
                                <!--<button type="submit" class="btn btn-inverse">
        <i class="fa fa-search fa-fw"></i>
    </button>-->
                            </form>
                            <a class="navbar-brand" href="#">
                              <!--   <img src="../assets/images/vc.jpg" alt="" style="width:40px; height:30px;"> -->
                              <!-- <i class="fa fa-search" aria-hidden="true"></i> -->
                              <i class="fa fa-card" aria-hidden="true"></i>
                            </a>
                       <?php /*?>     <div class="container" style="padding-right:20px;">
                                <ul class="nav navbar-nav navbar-right">
                                    <li>

                                       <a href="support_questions.php?id=<?php echo $user_id?>"> <h4 style="font-family:lintsec; padding:18px; padding-bottom:-0px; font-size:150%; ">F</h4></a>
                                    </li>
                                    <li>
                                       <a href="email.php?id=<?php echo $user_id?>"><h4 style="font-family:lintsec; padding:18px; padding-bottom:-0px; font-size:150%;">M</h4></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><h4 style="font-family:lintsec; padding:18px; padding-bottom:-0px; font-size:150%; ">S</h4></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="logout.php">Close Diary</a>
                                            </li>
                                           <!--  <li>
                                                <a href="#">Another action</a>
                                            </li>
                                            <li>
                                                <a href="#">Something else here</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="#">Separated link</a>
                                            </li> -->
                                        </ul>
                                    </li>


                                    <li>
                                        <p class="diary" style="padding-top:5px; padding-left:50px;"><span class="day" style="font-family:lintsec; font-size:11px;"><?php echo date("l"); ?></span><br><span class="month" style="font-family:lintsec; font-size:11px;"><?php echo date("F"); ?></span><br><span class="year" style="font-family:lintsec; font-size:11px;"><?php echo date("Y"); ?></span></p>
                                    </li>
                                    <li>
                                        <!--<hr style="width:0px; height:10px;" class="vertical" />-->
                                        <div style="border-left:2px solid #d3d3d3;margin-top:6px; margin-left:4px; margin-right:4px;" class="line_div">
</div>
                                    </li>
                                    <li>
                                        <span class="date" style="font-family:lintsec; font-size:40px; padding-top:5px; padding-right:10px;"><?php echo date("j"); ?></span>
                                    </li>
                                </ul>
                            </div><?php */?>
                        </div>
                        <!-- /.navba
r-collapse -->
                    </div>
                    <!-- /.container-fluid -->
                </nav>
</div></div>

<div class="row">
<div class="col-lg-10" style="margin-left:50px;margin-top:150px;">
								  		<form role="form" action="" method="post" class="col-lg-6">
									  		<div class="form-group ">
									    		<label for="exampleInputEmail1">About You</label>
									    		<input type="text" class="form-control" name="about" id="about" placeholder="About you">
									  		</div>
									  		
									  		<div class="form-group ">
									    		<label for="exampleInputEmail1">Schooling</label>
									    		<input type="text" class="form-control" name="schooling" id="schooling" placeholder="Schooling">
									  		</div>
									  		<div class="form-group ">
									    		<label for="exampleInputEmail1">Collage</label>
									    		<input type="text" class="form-control" name="Collage" id="Collage" placeholder="Collage">
									  		</div>
									  		<div class="form-group ">
									    		<label for="exampleInputEmail1">Home Town</label>
									    		<input type="text" class="form-control" name="hometown" id="hometown" placeholder="Home Town">
									  		</div>
									  		<div class="form-group ">
									    		<label for="exampleInputEmail1">Present Town</label>
									    		<input type="text" class="form-control" name="presenttown" id="presenttown" placeholder="Present Town">
									  		</div>
									  		
								  	  		
									  		<button  type="submit" class="btn btn-primary" name="signup2" style="float:right;" >Next</button>
										</form>
							  		</div>
                                    </div>
                                    </div>
</body>
</html>