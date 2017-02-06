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
        <?php //include 'assets/css/folio.php';?>
         <link rel="stylesheet" href="assets/css/folio.php">
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
       
         <!--Get club member Suggestions-->
      
</script>

<script type="text/javascript">
function club_login()
{
	alert("hello" );
    var club_user_name  = document.getElementById("club_user_name").value;
    var club_pwd = document.getElementById("club_pwd").value;
	
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'club_user_name=' + club_user_name + '&club_pwd=' + club_pwd;
      
                    // AJAX code to submit form.
                    $.ajax({
                    type: "POST",
                    url: "script_code.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    //alert(html);
					document.getElementById("club_user_name").value='';
					document.getElementById("club_pwd").value='';
					
                    }
                    });
               
        return false;
}
</script>
        
        <!--End Remodel-->
        
      <script type="text/javascript" src="js/scripts.js"></script>       
    </head>
    <body>
    <?php
$user_det=mysqli_query($conn,"select * from users where user_id='$_SESSION[id]'");
$usr_dis=mysqli_fetch_array($user_det);
$get_user_ppic_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$_SESSION[id]'");
$fet_ppic=mysqli_fetch_array($get_user_ppic_exe);
$user_personal_dets_exe=mysqli_query($conn,"select * from user_info where user_id='$_SESSION[id]'");
$fet_info=mysqli_fetch_array($user_personal_dets_exe);
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
                                        <!-----------------------------WORK BEGIN------------------------------------->

                                        <div class="accordion">
                                            <a href="#" class="active"><i class="fa fa-user"></i> TODO</a>
                                            <div class="sub-nav active">

                                                <div id="todo" class="panel">
                                                    <h2 class="panel-title">Tasks</h2>
                                                    <!--<h2 class="panel-title">Tasks </h2>-->
                                                    <div class="w_todo td_div">
                                                        <span class=" todo_right"><a href="#" data-remodal-target="modal"> <i class="fa fa-plus "></i></a></span>
                                                        <!-- <span class="todo_right " ><a href="#"><i class="fa fa-id-card"></i></a></span>-->
                                                        <span class="todo_right " id="datepicker2"><a href="#" data-toggle=""><i class="fa fa-calendar "></i></a></span>
                                                        <span id="test" class="todo_right "><a href="#" id="check" onclick="Check()"><i class="fa fa-check-square-o "></i></a></span>
                                                    </div>
                                                    <div class="panel-content" id="screen">
                                                        <form>
                                                            <fieldset>
                                                                <ul class="tasks">
                                                                    <?php
                                                                    $td_cu=0;
                                                                    $tdl=mysqli_query($conn,"select * from user_todolist where todo_status='0' AND todo_user_id='".$_SESSION['id']."'");
                                                                    while($ret_td=mysqli_fetch_array($tdl))
                                                                    {
                                                                        ++$td_cu;
                                                                        ?>
                                                                        <li class="task">
                                                                            <?php if($ret_td['todo_status']!=0)
                                                                            {

                                                                                ?>
                                                                                <input type="checkbox" name="todo-tasks" id="task<?php echo $td_cu;?>" checked="checked" />
                                                                                <?php
                                                                            }else
                                                                            {
                                                                                ?>
                                                                                <input type="checkbox" name="todo-tasks" id="task<?php echo $td_cu;?>" value="<?php echo $ret_td['todo_id'];?>"   onClick="change_to(this.value);"/>
                                                                                <?php
                                                                            }
                                                                            ?>
                                                                            <label for="task<?php echo $td_cu;?>"><?php echo $ret_td['todo_label'];?>
                                                                                <span class="line-through"></span>

                                                                            </label>
                                                                            <p class="pull-right alert-numb" style="padding-left:250px;     font-size: x-small;     color: grey;    padding-top: 10px; "><?php echo $ret_td['todo_datetime']?></p>
                                                                        </li>
                                                                        <?php
                                                                    }

                                                                    ?>

                                                                </ul>
                                                            </fieldset>
                                                        </form>
                                                    </div>

                                                    <!--Invisable Panel-->

                                                    <div class="panel-content" style="display:none" id="screen1">
                                                        <form>
                                                            <fieldset>
                                                                <ul class="tasks">
                                                                    <?php
                                                                    $td_cu=0;
                                                                    $tdl=mysqli_query($conn,"select * from user_todolist where todo_status='1' AND todo_user_id='".$_SESSION['id']."'");
                                                                    while($ret_td=mysqli_fetch_array($tdl))
                                                                    {
                                                                        ++$td_cu;
                                                                        ?>
                                                                        <li class="task">
                                                                            <?php if($ret_td['todo_status']!=0)
                                                                            {

                                                                                ?>
                                                                                <input type="checkbox" name="todo-tasks" id="task<?php echo $td_cu;?>" checked="checked" />
                                                                                <?php
                                                                            }else
                                                                            {
                                                                                ?>
                                                                                <input type="checkbox" name="todo-tasks" id="task<?php echo $td_cu;?>" value="<?php echo $ret_td['todo_id'];?>"   onClick="change_to(this.value);"/>
                                                                                <?php
                                                                            }
                                                                            ?>
                                                                            <label for="task<?php echo $td_cu;?>"><?php echo $ret_td['todo_label'];?>
                                                                                <span class="line-through"></span>

                                                                            </label>
                                                                            <p class="pull-right alert-numb" style="padding-left:250px;     font-size: x-small;     color: grey;    padding-top: 10px; "><?php echo $ret_td['todo_datetime']?></p>
                                                                        </li>
                                                                        <?php
                                                                    }

                                                                    ?>

                                                                </ul>
                                                            </fieldset>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                            <a href="#" class="ws_ta_tab_a"><i class="fa fa-comments"></i> LEDGER</a>
                                            <div class="sub-nav">
                                                <div class="w_todo td_div">
                                                    <span class=" todo_right"><a href="#modal1" > <i class="fa fa-plus "></i></a></span>
                                                    <span class="todo_right " ><a href="#"><i class="fa fa-id-card"></i></a></span>

                                                </div>
                                                <div class="html chat">
                                                <div id="ledger_tbl">
                                                    <table class="dynamicTable scrollVertical table table-primary " style="height:20px; overflow-y:scroll;">
                                                        <!-- Table heading -->
                                                        <thead style="background:#8BBF61;">
                                                        <tr style="background:#8BBF61;">
                                                            <th>Date</th>
                                                            <th>Details</th>
                                                            <th>Debit</th>
                                                            <th>Credit</th>
                                                            <th>Balance</th>
                                                        </tr>
                                                        </thead>
                                                        <!-- // Table heading END -->
                                                        <!-- Table body -->
                                                        <tbody>
                                                        <?php
                                                        $led_de=mysqli_query($conn,"select * from user_ledger where user_id='".$_SESSION['id']."'");
                                                        while($led_ret=mysqli_fetch_array($led_de))
                                                        {
                                                            ?>
                                                            <!-- Table row -->
                                                            <tr class="gradeX">
                                                                <td><?php echo $led_ret['date'];?></td>
                                                                <td><?php echo $led_ret['led_reason'];?></td>
                                                                <td><?php echo $led_ret['debit'];?></td>
                                                                <td class="center"><?php echo $led_ret['credit'];?></td>
                                                                <td class="center"><?php echo $led_ret['total_bal'];?></td>
                                                            </tr>
                                                            <!-- // Table row END -->

                                                            <?php
                                                        }
                                                        ?>


                                                        </tbody>
                                                        <!-- // Table body END -->
                                                    </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#"><i class="fa fa-envelope"></i> CLIENTS <!--<span class="pull-right alert-numb"></span>--></a>
                                            <div class="sub-nav">
                                                <div class="html chat">
                                                    <table class="dynamicTable scrollVertical table table-primary " style="height:20px; overflow-y:scroll;">
                                                        <!-- Table heading -->
                                                        <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Company</th>
                                                            <th>Phone_no</th>
                                                            <th>Details</th>

                                                        </tr>
                                                        </thead>
                                                        <!-- // Table heading END -->
                                                        <!-- Table body -->
                                                        <tbody>
                                                        <?php
                                                        $cli_de=mysqli_query($conn,"select * from user_clients where user_id='".$_SESSION['id']."'");
                                                        while($cli_ret=mysqli_fetch_array($cli_de))
                                                        {
                                                            ?>
                                                            <!-- Table row -->
                                                            <tr class="gradeX">
                                                                <td><?php echo $cli_ret['client_name'];?></td>
                                                                <td><?php echo $cli_ret['client_company'];?></td>
                                                                <td><?php echo $cli_ret['client_phone'];?></td>
                                                                <td class="center"><?php echo $cli_ret['clients_details'];?></td>

                                                            </tr>
                                                            <!-- // Table row END -->

                                                            <?php
                                                        }
                                                        ?>


                                                        </tbody>
                                                        <!-- // Table body END -->
                                                    </table>
                                                </div>
                                            </div>
                                        </div>




                                        <!--Todo Model Code-->
                                        <div class="remodal" data-remodal-id="modal">
                                            <a data-remodal-action="close" class="remodal-close"></a>

                                            <form class="form-horizontal" role="form" method="post" action="script_code.php">
                                                <div>

                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">TITLE</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="todo_title" name="todo_title" placeholder="TITLE" >
                                                        </div>
                                                    </div>
                                                  <!--  <div class="form-group">
                                                        <label class="col-sm-2 control-label">Date</label>
                                                        <div class="col-sm-10">

                                                            <input type="text" class="form-control" id="todo_date" name="todo_date" placeholder="Date" name="todo_date">
                                                        </div>
                                                    </div>-->

                                                    <div class="form-group">
                                                        <label for="type" class="col-sm-2 control-label">TYPE</label>
                                                        <div class="col-sm-10">
                                                            <div class="row">
                                                                <select class="selectpicker col-md-12 form-control" name="todo_type" id="todo_type">
                                                                    <option>CONSIGNMENTS</option>
                                                                    <option>MEETINGS</option>
                                                                    <option>CALL</option>
                                                                </select>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="contact" class="col-sm-2 control-label">CONTACT</label>
                                                        <div class="col-sm-10">
                                                            <div class="row">
                                                                <select class="selectpicker col-md-12 form-control" name="todo_contacts" id="todo_contacts">
                                                                    <option>Mustard</option>
                                                                    <option>Ketchup</option>
                                                                    <option>Relish</option>
                                                                    <option>Tent</option>
                                                                    <option>Flashlight</option>
                                                                    <option>Toilet Paper</option>
                                                                </select>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>
                                                <br>

                                                <button  data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
                                                <!--onClick="todo_insert();"-->
                                                <button type="submit" data-remodal-action="confirm" name="todo_inserttttttt"  class="remodal-confirm">INK</button>

                                            </form>


                                            <!--<a data-remodal-action="cancel" class="remodal-cancel" href="#">Cancel</a>
                                            <a data-remodal-action="confirm" class="remodal-confirm" href="#">OK</a>-->
                                        </div>
                                        <!--End todo Model Code-->




                                        <!--Ledger Model begin Panel-->

                                        <div class="remodal" data-remodal-id="modal1" id="modal1" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                                            <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                                            <form class="form-horizontal" role="form" method="post" action="">
                                                <div>

                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Date</label>
                                                        <div class="col-sm-10">
                                                            <?php $date=date('Y-m-d');?>
                                                            <input type="text" class="form-control" id="led_cur_date" placeholder="" value="<?php echo $date;?>" name="led_cur_date" readonly/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Details</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="led_details" placeholder="" name="led_details">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Credit</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="led_credit" placeholder="" name="led_credit">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Debit</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="led_debit" placeholder="" name="led_debit">
                                                        </div>
                                                    </div>







                                                </div>
                                                <br>

                                                <button  data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
                                                <button type="submit" data-remodal-action="confirm" onClick="ledger_insert();" class="remodal-confirm">Credit Or Debit</button>

                                            </form>
                                        </div>


                                        <!--Ledger End MOdel-->

                                        <!-----------------------------END WORK-------------------------------------------------->
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab7">
                                    <!-----------------------------------------SPACE BEGIN----------------------------------------->

                                    <div class="row">
                                        <div class="col-lg-12" style="border-bottom:1px dashed #afdf7c;">
                                            <div class="col-lg-10" tyle="padding:0px;">
                                                <h4 class="club_headers" style="margin:0px;">
                                                    COMPANY INFO </h4>
                                                <br>
                                                <p style="font-family:lato-light; color:#a9a9a9;">
                                                    Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem singulis est id. Enim sale adoLorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem singulis est id. Enim sale ado</p>
                                            </div>
                                            <div class="col-lg-2" style="padding:0px;">
                                                <img src="images/profile/logo.jpg" width="100" />
                                            </div>
                                        </div>
                                        <br>
                                        <div class="col-lg-12" style="border-bottom:1px dashed #afdf7c;">
                                            <br>
                                            <h4 class="club_headers" style="margin:0px;">
                                                COLLEAGUES </h4>
                                            <br>
                                            <div id="gallerycontainer">
                                                <div id="gallery">
                                                    <?php
                                                    $collegus_exe=mysqli_query($conn,"select * from users where company='$usr_dis[company]'");
                                                    while($colle=mysqli_fetch_array($collegus_exe))
                                                    {
                                                        $colle_ppic_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$colle[user_id]'");
                                                        $colle_pic=mysqli_fetch_array($colle_ppic_exe);
                                                        ?>

                                                        <div style="width:150px; height:180px;" align="center" id="c_hs">
                                                            <img src="fb_users/<?php echo $colle['Gender']?>/<?php echo $colle['Email']?>/Profile/<?php echo $colle_pic['image'];?>" width="120" style="border-radius:50%; padding-left:3px; padding-top:3px;" alt="" />
                                                            <h4 style=" color:#afdf7c">
                                                                <?php echo $colle['Name'];?></h4>
                                                            <h5 style=" color:#afdf7c">
                                                                <?php echo $colle['designation'];?></h5>
                                                        </div>
                                                        <?php
                                                    }
                                                    ?>
                                                    <?php /*?> <div style="width:150px; height:180px;" align="center" id="c_hs">
                                                                <img src="images/profile/6.jpg" width="120" style="border-radius:50%; padding-left:3px; padding-top:3px;" alt="" />
                                                                <h4 style=" color:#afdf7c">
              Rajesh</h4>
                                                                <h5 style=" color:#afdf7c">
              CEO</h5>
                                                            </div><?php */?>



                                                </div>
                                                <!--  <div style="width:150px; height:180px;" align="center" id="c_hs">
                                                      <img src="images/profile/6.jpg" width="120" style="border-radius:50%; padding-left:3px; padding-top:3px;" alt="" />
                                                      <h4 style=" color:#afdf7c">
        Rajesh</h4>
                                                      <h5 style=" color:#afdf7c">
        CEO</h5>
                                                  </div>-->
                                                <?php /*?> <div style="width:150px; height:180px;" align="center" id="c_hs">
                                                            <img src="images/profile/6.jpg" width="120" style="border-radius:50%; padding-left:3px; padding-top:3px;" alt="" />
                                                            <h4 style=" color:#afdf7c">
              Rajesh</h4>
                                                            <h5 style=" color:#afdf7c">
              CEO</h5>
                                                        </div><?php */?>
                                            </div>
                                            <br>
                                        </div>
                                        <div class="col-lg-12">
                                            <br>
                                            <h4 class="club_headers">DISSCUSSIONS </h4>
                                            <form method="post" action="">
                                                <input type="hidden" name="dis_company" id="dis_company" value="<?php echo $usr_dis['company']?>">
                                                <input type="text" placeholder="INK..." class="club_txt" name="disscussion_topic" id="disscussion_topic" style="margin-top:5px;margin-bottom:5px;">
                                                <input type="submit" name="dis_sub" onClick="space_disscussion();" style="display:none;">
                                            </form>
                                            <br>
                                            <div class="club_network" style="height:300px; background-color:#eee;">
                                                <?php
                                                $twity_exe=mysqli_query($conn,"select * from company_discussions where company='$usr_dis[company]'");
                                                while($twity=mysqli_fetch_array($twity_exe))
                                                {
                                                    $twity_details_exe=mysqli_query($conn,"select * from users where user_id='$twity[user_id]'");
                                                    $twity_det=mysqli_fetch_array($twity_details_exe);
                                                    $twity_pic_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$twity[user_id]'");
                                                    $twity_pic=mysqli_fetch_array($twity_pic_exe);
                                                    ?>

                                                    <div class="row club_network_row" style="width:100%;">
                                                        <div class="col-lg-2" style="padding-left:0px;padding-right:0px; width:70px; ">
                                                            <div class="col-lg-4" align="left" style="padding-left:3px;padding-right:0px; width:70px;">
                                                                <img src="fb_users/<?php echo $twity_det['Gender']?>/<?php echo $twity_det['Email'];?>/Profile/<?php echo $twity_pic['image'];?>" width="70">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-10 club_msg_shape" style=" height:70px; background-color:#eee; padding-right:0px;width:86%;" align="left">
                                                                <span style="text-align:right; color:#d3d3d3;font-size:10px;">
    <?php echo $twity_det['Name']?> - <?php echo $twity_det['company']?> - <?php echo $twity_det['designation'];?>  </span><span class="pull-right" style="text-align:right; color:#d3d3d3;font-size:10px;"> <?php echo $twity['date'];?> </span>
                                                            <p>
                                                                <?php echo $twity['discussion_txt'];?></p>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                                ?>
                                                <?php /*?>  <div class="row club_network_row" style="width:100%;">
                                                            <div class="col-lg-2" style="padding-left:0px;padding-right:0px; width:70px; ">
                                                                <div class="col-lg-4" align="left" style="padding-left:3px;padding-right:0px; width:70px;">
                                                                    <img src="images/profile/6.jpg" width="70">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-10 club_msg_shape" style=" height:70px; background-color:#eee; padding-right:0px;width:86%;" align="left">
                                                                <span style="text-align:right; color:#d3d3d3;font-size:10px;">
    Rajesh - Beta Solutions - IT - Software  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 30-jan-2017 12:22am </span>
                                                                <p>
        Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, </p>
                                                            </div>
                                                        </div><?php */?>





                                            </div>
                                        </div>
                                    </div>

                                    <!--------------------------------------------END SPACE------------------------------------------------->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="club-vr">
                            <div class="pst_main_background pst_box " align="center" style="background-color:#fff; z-index:-1;">
                            <?php
							if(!$_SESSION['club_id'])
							{
                                ?>
                                <!----------------------------------CLUB LOGIN BEGIN---------------------------------->
                                <div class="pst_main_background pst_box " align="center" style="background-color:#fff;">
                                    <br>
                                    <h3 style="color:#afdf7c; text-align:center;">Club Login</h3>
                                    <br>
                                    <div class="club_login_wid">
                                        <form method="post" action="">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="club_user_name" id="club_user_name" placeholder="Enter Club Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="club_pwd" id="club_pwd" placeholder="Password">
                                            </div>
                                          <?php /*?>  <input type="hidden" name="club_user_id" id="club_user_id" value="<?php echo $_SESSION['id']; ?>"><?php */?>
                                            <button type="submit" name="club_login" onClick="club_login();"  class="btn btn_grn">Submit</button>
                                        </form>
                                    </div>
                                    <br>
                                    <br>
                                </div>

                                <!----------------------------------------END CLUB LOGIN------------------------------->
                                <?php
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
                                        
                                         <a href="club_logout.php" style="on-hover:#AFDF7C;" ><i style="margin-top:15px;" class="fa fa-sign-out icon"></i></a>
                                        
                                                                              
                                    </ul>
                                   
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab8">
                                        <!-------------------------------------club sheet BEGIN------------------------------------------------->
                                            <div>
                                                <div>

                                                    <h4 class="club_headers">
                                                        CLUB ID # 1234</h4>
                                                    <div class="col-lg-12 club_txtbox" style="padding-left:0px; padding-right:10px;paddin-top:0px;margin-top:0px;">
                                                        <?php
                                                        $sug_date=date('Y-m-d');
                                                        ?>
                                                        <form method="post" action="">
                                                            <input type="text" placeholder="Suggest Me To" class="club_txt" id="suggest_me_to">
                                                            <input type="hidden" name="sug_usrt_id" id="sug_usrt_id" value="<?php echo $_SESSION['id'];?>"/>
                                                            <input type="hidden" name="sug_date" id="sug_date" value="<?php echo $sug_date;?>">
                                                            <input type="submit" name="sug_sub" style="display:none;" onClick="ins_suggest();" />
                                                        </form>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row" style="margin-top:30px;">
                                                    <br>
                                                    <h3 class="club_headers">
                                                        Ankitha Info</h3>
                                                    <div class="col-lg-12 club_txtbox" style="padding-left:0px; padding-right:10px; background-color:#eee;">
                                                        <!--<textarea class="form-control txt" rows="1" style="height:35px;"></textarea>-->
                                                        <p class="club_info"><?php echo $usr_dis['description'];?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="margin:10px;">
                                                <?php
                                                $get_club_menem=mysqli_query($conn,"select * from club_signup where club_id='$_SESSION[club_id]' and user_id!='$_SESSION[id]'");
                                                while($club_members=mysqli_fetch_array($get_club_menem))
                                                {


                                                    $get_user_sugg_exe=mysqli_query($conn,"select * from tbl_suggest_topic where user_id='$club_members[user_id]' order by sug_date desc");
                                                    $get_ur_sugg=mysqli_fetch_array($get_user_sugg_exe);

                                                    $get_club_user_deta_exe=mysqli_query($conn,"select * from users where user_id='$club_members[user_id]'");
                                                    $fet_mem_de=mysqli_fetch_array($get_club_user_deta_exe);
                                                    $get_pic_clb=mysqli_query($conn,"select * from user_profile_pic where user_id='$fet_mem_de[user_id]'");
                                                    $gclb_uspi=mysqli_fetch_array($get_pic_clb);
                                                    ?>

                                                    <div class="col-lg-4 grow" align="center">
                                                        <h4>
                                                            <?php echo $fet_mem_de['industry'];?></h4>
                                                        <img src="fb_users/<?php echo $fet_mem_de['Gender']?>/<?php echo $fet_mem_de['Email']?>/Profile/<?php echo $gclb_uspi['image']?>" width="70" style="margin-top:5px;">
                                                        <br>
                                                        <span><?php echo $fet_mem_de['Name'];?></span>
                                                        <br>
                                                        <span><?php echo $fet_mem_de['designation']?>-<?php echo $fet_mem_de['company'];?></span>
                                                        <br>
                                                        <span><?php echo $fet_mem_de['industry'];?></span>
                                                        <h4><?php echo $get_ur_sugg['suggest_topic'];?></h4>
                                                        <?php
                                                        if($get_ur_sugg['suggest_topic']!='')
                                                        {

                                                            $check_connect=mysqli_query($conn,"select * from tbl_suggestions where suggest_topic_id='$get_ur_sugg[suggest_topic_id]' AND whos_suggest='$fet_mem_de[user_id]' AND to_whom_accept='$_SESSION[id]' AND status='1'");
                                                            $get_count_sug=mysqli_num_rows($check_connect);
                                                            if($get_count_sug!=0)
                                                            {
                                                                ?>
                                                                <form method="post" action="">
                                                                    <input type="hidden" name="diswhos_sugg" id="diswhos_sugg" value="<?php echo $fet_mem_de['user_id'];?>">
                                                                    <input type="hidden" name="diswhom_acc" id="diswhom_acc" value="<?php echo $_SESSION['id'];?>">
                                                                    <input type="hidden" name="dissugg_id" id="dissugg_id" value="<?php echo $get_ur_sugg['suggest_topic_id'];?>">
                                                                    <span><a href="" class="btn btn_grn" onClick="disconnect_suggest(<?php echo $fet_mem_de['user_id'];?>,<?php echo $get_ur_sugg['suggest_topic_id'];?>);" >Connected</a></span>

                                                                </form>
                                                                <?php
                                                            }else
                                                            {

                                                                ?>

                                                                <span><a href="" class="btn btn_grn" onClick="connect_suggest(<?php echo $fet_mem_de['user_id'];?>,<?php echo $get_ur_sugg['suggest_topic_id'];?>);" >Connect</a></span>


                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                        <p><?php echo $fet_mem_de['description'];?></p>
                                                    </div>
                                                    <?php
                                                }
                                                ?>
                                                <!-- <div class="col-lg-4 grow" align="center">
                                                     <h4>
         IT-SOFTWARE</h4>
                                                     <img src="images/profile/6.jpg" width="70" style="margin-top:5px;">
                                                     <br>
                                                     <span>Rajesh</span>
                                                     <br>
                                                     <span>CEO-Beta Solutions</span>
                                                     <br>
                                                     <span>IT-Softwarre</span>
                                                     <h4>gayatri hospital</h4>
                                                     <span><input type="submit" class="btn btn_grn" value="Connect"></span>
                                                     <p>
             Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem singulis est id. Enim sale adolescens vim te. Ea ignota gloriatur eos, no minim zril quo. Mei graece recteque id. Cu per facer</p>
                                                 </div>-->
                                                <!--<div class="col-lg-4 grow" align="center">
                                                    <h4>
        IT-SOFTWARE</h4>
                                                    <img src="images/profile/6.jpg" width="70" style="margin-top:5px;">
                                                    <br>
                                                    <span>Rajesh</span>
                                                    <br>
                                                    <span>CEO-Beta Solutions</span>
                                                    <br>
                                                    <span>IT-Softwarre</span>
                                                    <h4>gayatri hospital</h4>
                                                    <span><input type="submit" class="btn btn_grn" value="Connect"></span>
                                                    <p>
            Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem singulis est id. Enim sale adolescens vim te. Ea ignota gloriatur eos, no minim zril quo. Mei graece recteque id. Cu per facer</p>
                                                </div>-->
                                                <!--<div class="col-lg-4 grow" align="center">
                                                    <h4>
        IT-SOFTWARE</h4>
                                                    <img src="images/profile/6.jpg" width="70" style="margin-top:5px;">
                                                    <br>
                                                    <span>Rajesh</span>
                                                    <br>
                                                    <span>CEO-Beta Solutions</span>
                                                    <br>
                                                    <span>IT-Softwarre</span>
                                                    <h4>gayatri hospital</h4>
     												<span><input type="submit" class="btn btn_grn" value="Connect"></span>
                                                    <p>
            Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem singulis est id. Enim sale adolescens vim te. Ea ignota gloriatur eos, no minim zril quo. Mei graece recteque id. Cu per facer</p>
                                                </div>-->
                                                <!--<div class="col-lg-4 grow" align="center">
                                                    <h4>
        IT-SOFTWARE</h4>
                                                    <img src="images/profile/6.jpg" width="70" style="margin-top:5px;">
                                                    <br>
                                                    <span>Rajesh</span>
                                                    <br>
                                                    <span>CEO-Beta Solutions</span>
                                                    <br>
                                                    <span>IT-Softwarre</span>
                                                    <h4>gayatri hospital</h4>
                                                    <span><input type="submit" class="btn btn_grn" value="Connect"></span>
                                                    <p>
            Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem singulis est id. Enim sale adolescens vim te. Ea ignota gloriatur eos, no minim zril quo. Mei graece recteque id. Cu per facer</p>
                                                </div>-->
                                            </div>

                               <!------------------------------------------END CLUB SHEET-------------------------------------------->
                                        </div>
                                        <div class="tab-pane" id="tab9">
                        <!-------------------------------BEGIN networking------------------------------------------------------------->
                                            <h4 class="club_headers">
                                                Networking </h4>
                                            <form method="post"  action="">
                                                <input type="text" placeholder="Let's Network" class="club_txt" name="chat_txt" id="chat_txt">
                                                <?php
                                                $msg_date=date("Y-m-d h:i");
                                                ?>
                                                <input type="hidden" name="msg_time_date" id="msg_time_date" value="<?php echo $msg_date;?>"/>
                                                <input type="hidden" name="msg_user_id" id="msg_user_id" value="<?php echo $_SESSION['id']?>">
                                                <input type="submit" style="display:none;" name="Message_send" onClick="inse_msg();"/>
                                            </form>
                                            <br>
                                            <br>
                                            <div class="club_network">
                                                <?php
                                                $group_chat_exe=mysqli_query($conn,"select * from group_chat order by chat_id desc");
                                                while($grp_ct=mysqli_fetch_array($group_chat_exe))
                                                {
                                                    $gp_us_pp_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$grp_ct[user_id]'");
                                                    $gp_ppic=mysqli_fetch_array($gp_us_pp_exe);
                                                    $gp_user_details_exe=mysqli_query($conn,"select * from users where user_id='$grp_ct[user_id]'");
                                                    $gp_det=mysqli_fetch_array($gp_user_details_exe);

                                                    ?>
                                                    <div class="row club_network_row" style="width:100%;">
                                                        <div class="col-lg-2" style="padding-left:0px;padding-right:0px; width:80px; ">
                                                            <div class="col-lg-4" align="left" style="padding-left:3px;padding-right:0px; width:80px;">
                                                                <img src="fb_users/<?php echo $gp_det['Gender'];?>/<?php echo $gp_det['Email'];?>/Profile/<?php echo $gp_ppic['image'];?>" width="80">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-10 club_msg_shape" style=" height:80px; background-color:#eee; padding-right:0px;width:86%;" align="left">
                                                        <span style="text-align:right; color:#d3d3d3;font-size:10px;">
    <?php echo $gp_det['Name'];?> - <?php echo $gp_det['company']?> - <?php echo $gp_det['industry'];?> </span>
                                                            <span class="pull-right" style="text-align:right; color:#d3d3d3;font-size:10px;"><?php echo $grp_ct['time'];?> </span>
                                                            <p> <?php echo $grp_ct['chat_txt'];?></p>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                                ?>









                                                <?php /*?>  <div class="row club_network_row" style="width:100%;">
                                                    <div class="col-lg-2" style="padding-left:0px;padding-right:0px; width:80px; ">
                                                        <div class="col-lg-4" align="left" style="padding-left:3px;padding-right:0px; width:80px;">
                                                            <img src="images/profile/6.jpg" width="80">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 club_msg_shape" style=" height:80px; background-color:#eee; padding-right:0px;width:86%;" align="left">
                                                        <span style="text-align:right; color:#d3d3d3;font-size:10px;">
    Rajesh - Beta Solutions - IT - Software  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 30-jan-2017 12:22am </span>
                                                        <p>
        Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, </p>
                                                    </div>
                                                </div><?php */?>


                                            </div>
                       <!--------------------------------------END NETWORKING----------------------------------------------------->

                                        </div>
                                        <div class="tab-pane" id="tab10">
                    <!-------------------------------------------BEGIN CLUB SUGGESTIONS------------------------------------------------->

                                            <h4 class="club_headers">
                                                Suggestions</h4>
                                            <br>
                                            <div class="row" id="txtHint">
                                                <div class="club_suggest_top_div row">
                                                    <div class="col-lg-2" style="padding-left:0px;padding-right:0px; width:80px; ">
                                                        <div class="col-lg-4" align="left" style="padding-left:3px;padding-right:0px; width:80px;">
                                                            <img src="fb_users/<?php echo $usr_dis['Gender'];?>/<?php echo $usr_dis['Email'];?>/Profile/<?php echo $fet_ppic['image'];?>" width="80">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 club_msg_shape" style=" height:80px; padding-right:0px;width:86%; padding-top:7px;" align="left">
                                                        <span style="font-size:16px;"><?php echo $usr_dis['Name'];?> </span>
                                                        <br>
                                                        <span style="font-size:16px;"> <?php echo $usr_dis['company']?> </span>
                                                        <br>
                                                        <span style="font-size:16px;"> <?php echo $usr_dis['industry'];?>  </span>
                                                    </div>
                                                </div>
                                                <div class="club_sugg_scroll">
                                                    <?php
                                                    $gu_sugg=mysqli_query($conn,"select * from tbl_suggest_topic where user_id='$_SESSION[id]' order by sug_date desc");
                                                    while($dis_usr_sugg=mysqli_fetch_array($gu_sugg))
                                                    {
                                                        ?>
                                                        <div class="td_div club_sug_row_bg" style="  height:30px;">
                                                            <div class="col-lg-10" style="text-align:left">
                                                                <span><?php echo $dis_usr_sugg['suggest_topic']?></span>
                                                            </div>
                                                            <div align="right" class="col-lg-2" style="text-align:right;">
                                                                <span style="text-align:right; color:#d3d3d3;font-size:12px; "><?php echo $dis_usr_sugg['sug_date'];?></span>
                                                            </div>
                                                        </div>

                                                        <?php
                                                    }
                                                    ?>
                                                    <!-- <div class="td_div club_sug_row_bg" style="  height:30px;">
                                                         <div class="col-lg-10" style="text-align:left">
                                                             <span>Lorem ipsum dolor sit amet, inimicus electrama </span>
                                                         </div>
                                                         <div align="right" class="col-lg-2" style="text-align:right;">
                                                             <span style="text-align:right; color:#d3d3d3;font-size:12px; ">30-01-2017</span>
                                                         </div>
                                                     </div>-->









                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="row">
                                                <div class="club_suggest_top_div row" style="padding-top:10px;padding-bottom:10px;">
                                                    <!--<div class="col-lg-2" style="padding-left:0px;padding-right:0px; width:80px; ">
        <div class="col-lg-4" align="left" style="padding-left:3px;padding-right:0px; width:80px;" data-pg-id="8677">
            <img src="images/profile/6.jpg" width="80" data-pg-id="8678">
        </div>
    </div>
    <div class="col-lg-10 club_msg_shape" style=" height:80px; padding-right:0px;width:86%; padding-top:7px;" align="left" data-pg-id="8679">
        <span style="font-size:16px;" data-pg-id="8680">Rajesh </span>
        <br data-pg-id="8681">
        <span style="font-size:16px;" data-pg-id="8682"> Beta Solutions </span>
        <br data-pg-id="8683">
        <span style="font-size:16px;" data-pg-id="8684"> IT - Software  </span>
    </div>-->
                                                    <span>Club Member Suggestions</span>
                                                </div>
                                                <div class="club_sugg_scroll">
                                                    <?php
                                                    $result_exe_club_mem=mysqli_query($conn,"select * from club_signup where club_id='$_SESSION[club_id]' AND user_id!='$_SESSION[id]'");
                                                    while($result_club_mem=mysqli_fetch_array($result_exe_club_mem))
                                                    {
                                                        $res_clbmem_det=mysqli_query($conn,"select * from users where user_id='$result_club_mem[user_id]'");
                                                        $clb_mde=mysqli_fetch_array($res_clbmem_det);
                                                        $cib_ppic_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$clb_mde[user_id]'");
                                                        $clb_pic=mysqli_fetch_array($cib_ppic_exe);
                                                        $get_clb_sugg=mysqli_query($conn,"select * from tbl_suggest_topic where user_id='$result_club_mem[user_id]'  ORDER BY sug_date DESC");
                                                        $kiloo=mysqli_fetch_array($get_clb_sugg);
                                                        if($kiloo['suggest_topic']!='')
                                                        {
                                                            ?>

                                                            <div class="td_div club_sug_row_bg" style="  height:50px;">
                                                                <div class="col-lg-10" style="text-align:left; padding-left:0px;padding-right:0px;">
                                                                    <div class="col-lg-2" style="padding:0px; width:50px;" ata-pg-id="8953">
                                                                        <a href="" onClick="Get_clb_user_sugg(<?php echo $result_club_mem['user_id']?>);">  <img src="fb_users/<?php echo $clb_mde['Gender']?>/<?php echo $clb_mde['Email']?>/Profile/<?php echo $clb_pic['image'];?>" width="50"/></a>
                                                                    </div>
                                                                    <div class="col-lg-10" style="padding-left:10px; padding-right:0px;">
                                                                        <span><?php echo $kiloo['suggest_topic'];?> </span>
                                                                    </div>
                                                                </div>
                                                                <div align="right" class="col-lg-2" style="text-align:right;">
                                                                    <span style="text-align:right; color:#d3d3d3;font-size:12px; "><?php echo $kiloo['sug_date'];?></span>
                                                                    <br>
                                                                    <?php
                                                                    $sugg_count_exe=mysqli_query($conn,"select * from tbl_suggestions where suggest_topic_id='$kiloo[suggest_topic_id]' AND whos_suggest='$clb_mde[user_id]' AND to_whom_accept='$_SESSION[id]' AND status='1'");
                                                                    $cn1=mysqli_num_rows($sugg_count_exe);
                                                                    if($cn1!=0)
                                                                    {
                                                                        ?>
                                                                        <span><a href="" class="btn btn_grn" onClick="disconnect_suggest(<?php echo $clb_mde['user_id'];?>,<?php echo $kiloo['suggest_topic_id'];?>);" style="margin-left:-15px; height:20px;padding-top:0px;padding-bottom:0px;">Connected</a></span>
                                                                        <?php
                                                                    }else
                                                                    {
                                                                        ?>
                                                                        <span><a href="" class="btn btn_grn" onClick="connect_suggest(<?php echo $clb_mde['user_id'];?>,<?php echo $kiloo['suggest_topic_id'];?>);" style="margin-left:-15px; height:20px;padding-top:0px;padding-bottom:0px;">Connect</a></span>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </div>
                                                            </div>
                                                            <?php
                                                        }
                                                    }
                                                    ?>

                                                    <!-- <div class="td_div club_sug_row_bg" style="  height:50px;">
                                                         <div class="col-lg-10" style="text-align:left; padding-left:0px;padding-right:0px;">
                                                             <div class="col-lg-2" style="padding:0px; width:50px;" ata-pg-id="8953">
                                                                 <img src="images/profile/6.jpg" width="50">
                                                             </div>
                                                             <div class="col-lg-10" style="padding-left:10px; padding-right:0px;">
                                                                 <span>Lorem ipsum dolor sit amet, inimicus electrama </span>
                                                             </div>
                                                         </div>
                                                         <div align="right" class="col-lg-2" style="text-align:right;">
                                                             <span style="text-align:right; color:#d3d3d3;font-size:12px; ">30-01-2017</span>
                                                         </div>
                                                     </div>-->




                                                </div>
                                            </div>

                 <!----------------------------------END CLUB SUGGESTIONS------------------------------------------------------>
                                        </div>
                                        <div class="tab-pane" id="tab11">
                                        <!-- ---------------------------------------BEGIN CLUB TAGS-------------------------------------->
                                            <h4 class="club_headers">
                                                Tags</h4>
                                            <br>
                                            <div class="row" style="width:400px">
                                                <h4 class="club_headers">
                                                    Add Tags</h4>
                                                <form role="form" method="post" action="script_code.php">
                                                    <div class="form-group">
                                                        <select id="formInput139" name="club_memb" id="club_memb" class="form-control">
                                                            <option>Select Club Member</option>                                                             <?php
                                                            $sel_tg_mem_exe=mysqli_query($conn,"select * from club_signup where club_id='$_SESSION[club_id]' AND user_id!='$_SESSION[id]'");
                                                            $model_count=0;
                                                            while($sel_frg=mysqli_fetch_array($sel_tg_mem_exe))
                                                            {
                                                                ++$model_count;
                                                                $frdeta=mysqli_query($conn,"select * from users where user_id='$sel_frg[user_id]'");
                                                                $get_tg_der=mysqli_fetch_array($frdeta);
                                                                ?>
                                                                <option value="<?php echo $sel_frg['user_id'];?>"><?php echo $get_tg_der['Name'];?></option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="tag_title" id="tag_title" placeholder="Tag Title">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="vendor_name" id="vendor_name" placeholder="Vendor Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="vendor_phone" id="vendor_phone" placeholder="Vendor phone no">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="vendor_email" id="vendor_email" placeholder="Vendor email">
                                                    </div>

                                                    <button type="submit" onClick="add_refrals();" name="add_refrals" class="btn btn_grn">Submit</button>
                                                    <button type="button" class="btn btn_grn">Clear</button>
                                                </form>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="club_suggest_top_div row" style="padding-top:10px;padding-bottom:10px;">
                                                    <!--<div class="col-lg-2" style="padding-left:0px;padding-right:0px; width:80px; ">
        <div class="col-lg-4" align="left" style="padding-left:3px;padding-right:0px; width:80px;">
            <img src="images/profile/6.jpg" width="80">
        </div>
    </div>
    <div class="col-lg-10 club_msg_shape" style=" height:80px; padding-right:0px;width:86%; padding-top:7px;" align="left">
        <span style="font-size:16px;">Rajesh </span>
        <br>
        <span style="font-size:16px;"> Beta Solutions </span>
        <br>
        <span style="font-size:16px;"> IT - Software  </span>
    </div>-->
                                                    <span>Tagged to you</span>
                                                </div>
                                                <div class="club_sugg_scroll">
                                                    <?php
                                                    $find_refer=mysqli_query($conn,"select * from tbl_reference where to_whom_user_id='$_SESSION[id]'  order by date desc");
                                                    while($gred=mysqli_fetch_array($find_refer))
                                                    {
                                                        $kill_user=mysqli_query($conn,"select * from users where user_id='who_user_id'");
                                                        $kill=mysqli_fetch_array($kill_user);
                                                        ?>

                                                        <div class="td_div club_sug_row_bg" style="  height:50px;">
                                                            <div class="col-lg-10" style="text-align:left; padding-left:0px;padding-right:0px;">
                                                                <div class="col-lg-2" style="padding:0px; width:50px;" ata-pg-id="8953">
                                                                    <a href="#modal_<?php echo $model_count;?>">  <img src="fb_users/<?php echo $usr_dis['Gender'];?>/<?php echo $usr_dis['Email'];?>/Profile/<?php echo $fet_ppic['image'];?>" width="50"></a>
                                                                </div>
                                                                <div class="col-lg-10" style="padding-left:10px; padding-right:0px;">
                                                                    <span><?php echo $gred['for_what'];?> </span>
                                                                </div>
                                                            </div>

                                                            <div align="left" class="col-lg-2" style="float:left;" >
                                                                <span style="text-align:left;float:left; color:#d3d3d3;font-size:12px; "><?php echo $gred['date'];?></span>
                                                            </div>
                                                        </div>

                                                        <!--Model Begin-->
                                                        <div class="remodal" data-remodal-id="modal_<?php echo $model_count;?>" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                                                            <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>

                                                            <div>

                                                                <h2><span><?php echo $kill['Name'];?></span></h2>
                                                                <h4 id="modal1Title"><?php echo $gred['for_what'];?></h4>

                                                                <p> <label>Vendor Name :</label><label><?php echo $gred['vendor_name'];?></label><br></p>
                                                                <p> <label>Vendor Phone No :</label><label><?php echo $gred['vendor_phone'];?></label><br></p>
                                                                <p> <label>Vendor Email :</label><label><?php echo $gred['vendor_email'];?></label><br></p>


                                                            </div>
                                                            <br>

                                                            <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
                                                            <?php
                                                            if($gred['status']!=0)
                                                            {
                                                                ?>
                                                                <a href="" onClick="reje_tags(<?php echo $gred['refrence_id']?>,<?php echo $gred['who_user_id'];?>);" data-remodal-action="confirm" class="remodal-confirm">Confirm</a>
                                                                <?php
                                                            }else
                                                            {
                                                                ?>
                                                                <a href="" onClick="acc_tags(<?php echo $gred['refrence_id']?>,<?php echo $gred['who_user_id'];?>);" data-remodal-action="confirm" class="remodal-confirm">Accept</a>
                                                                <?php
                                                            }
                                                            ?>
                                                        </div>
                                                        <!--End Model-->





                                                        <?php
                                                    }
                                                    ?>
                                                    <?php /*?>  <div class="td_div club_sug_row_bg" style="  height:50px;">
                                                        <div class="col-lg-10" style="text-align:left; padding-left:0px;padding-right:0px;">
                                                            <div class="col-lg-2" style="padding:0px; width:50px;" ata-pg-id="8953">
                                                                <img src="images/profile/6.jpg" width="50">
                                                            </div>
                                                            <div class="col-lg-10" style="padding-left:10px; padding-right:0px;">
                                                                <span>Lorem ipsum dolor sit amet, inimicus electrama </span>
                                                            </div>
                                                        </div>
                                                        <div align="right" class="col-lg-2" style="text-align:right;">
                                                            <span style="text-align:right; color:#d3d3d3;font-size:12px; ">30-01-2017</span>
                                                        </div>
                                                    </div><?php */?>



                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="row">
                                                <div class="club_suggest_top_div row" style="padding-top:10px;padding-bottom:10px;">
                                                    <!--<div class="col-lg-2" style="padding-left:0px;padding-right:0px; width:80px; ">
        <div class="col-lg-4" align="left" style="padding-left:3px;padding-right:0px; width:80px;">
            <img src="images/profile/6.jpg" width="80">
        </div>
    </div>
    <div class="col-lg-10 club_msg_shape" style=" height:80px; padding-right:0px;width:86%; padding-top:7px;" align="left">
        <span style="font-size:16px;">Rajesh </span>
        <br>
        <span style="font-size:16px;"> Beta Solutions </span>
        <br>
        <span style="font-size:16px;"> IT - Software  </span>
    </div>-->
                                                    <span>Tagged others</span>
                                                </div>
                                                <div class="club_sugg_scroll">
                                                    <?php
                                                    $add_fre=mysqli_query($conn,"select * from tbl_reference where who_user_id='$_SESSION[id]'");
                                                    while($jill=mysqli_fetch_array($add_fre))
                                                    {
                                                        ++$model_count;
                                                        $ji_user_de=mysqli_query($conn,"select * from users where user_id='$jill[to_whom_user_id]'");
                                                        $jil_data=mysqli_fetch_array($ji_user_de);
                                                        $jill_pic_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$jil_data[user_id]'");
                                                        $jil_pic=mysqli_fetch_array($jill_pic_exe);

                                                        ?>

                                                        <div class="td_div club_sug_row_bg" style="  height:50px;">
                                                            <div class="col-lg-10" style="text-align:left; padding-left:0px;padding-right:0px;">
                                                                <div class="col-lg-2" style="padding:0px; width:50px;" ata-pg-id="8953">
                                                                    <a href="#modal_<?php echo $model_count;?>">  <img src="fb_users/<?php echo $jil_data['Gender']?>/<?php echo $jil_data['Email'];?>/Profile/<?php echo $jil_pic['image'];?>" width="50"></a>
                                                                </div>
                                                                <div class="col-lg-10" style="padding-left:10px; padding-right:0px;">
                                                                    <span><?php echo $jill['for_what'];?> </span>
                                                                </div>
                                                            </div>
                                                            <div align="right" class="col-lg-2" style="text-align:right;">
                                                                <span style="text-align:right; color:#d3d3d3;font-size:12px; "><?php echo $jill['date'];?></span>
                                                            </div>
                                                        </div>

                                                        <!--Model Begin-->
                                                        <div class="remodal" data-remodal-id="modal_<?php echo $model_count;?>" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                                                            <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>

                                                            <div>
                                                                <h2><span><?php echo $jil_data['Name'];?></span></h2>
                                                                <h4 id="modal1Title"><?php echo $jill['for_what'];?></h4>

                                                                <p> <label>Vendor Name :</label><label><?php echo $jill['vendor_name'];?></label><br></p>
                                                                <p> <label>Vendor Phone No :</label><label><?php echo $jill['vendor_phone'];?></label><br></p>
                                                                <p> <label>Vendor Email :</label><label><?php echo $jill['vendor_email'];?></label><br></p>


                                                            </div>
                                                            <br>

                                                            <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
                                                            <?php
                                                            if($jill['status']!=0)
                                                            {
                                                                ?>
                                                                <a data-remodal-action="confirm" class="remodal-confirm">Accepted</a>
                                                                <?php
                                                            }else
                                                            {
                                                                ?>
                                                                <a data-remodal-action="confirm" class="remodal-confirm">Not Accepted</a>
                                                                <?php
                                                            }
                                                            ?>
                                                        </div>
                                                        <!--End Model-->

                                                        <?php
                                                    }
                                                    ?>
                                                    <?php /*?> <div class="td_div club_sug_row_bg" style="  height:50px;">
                                                        <div class="col-lg-10" style="text-align:left; padding-left:0px;padding-right:0px;">
                                                            <div class="col-lg-2" style="padding:0px; width:50px;" ata-pg-id="8953">
                                                                <img src="images/profile/6.jpg" width="50">
                                                            </div>
                                                            <div class="col-lg-10" style="padding-left:10px; padding-right:0px;">
                                                                <span>Lorem ipsum dolor sit amet, inimicus electrama </span>
                                                            </div>
                                                        </div>
                                                        <div align="right" class="col-lg-2" style="text-align:right;">
                                                            <span style="text-align:right; color:#d3d3d3;font-size:12px; ">30-01-2017</span>
                                                        </div>
                                                    </div><?php */?>




                                                </div>
                                            </div>










                                            <!---------------------------------------------END CLUB TAGS---------------------------------------->
                                        </div>
                                        <div class="tab-pane" id="tab12">
                                        <!---------------------------BEGIN CLUB SETTINGS----------------------------------------->
                                            <h4 class="club_headers">
                                                Settings</h4>
                                            <br>
                                            <div class="row" style="width:400px;">
                                                <form role="form">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" id="old_pwd" name="old_pwd" placeholder="Old Password">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" class="form-control" id="new_password" name="new_password" placeholder="Password">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" class="form-control" id="re_password" name="re_password" placeholder="Verify">
                                                    </div>
                                                    <button type="submit" class="btn btn_grn" onClick="change_pwd();">Change Password</button>
                                                </form>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-lg-12" style="height:40px; background-color:#F48E8B;">
                                                    <h4 style="color:#fff; ">
                                                        Remove From club</h4>
                                                </div>
                                                <div class="col-lg-12" style="border:1px dotted #F48E8B">
                                                    <br>
                                                    <input type="button" value="Remove from this Club" class="btn" onClick="remove_club(<?php echo $_SESSION['id']?>);" style="background-color:#F48E8B; color:#fff;">
                                                    <br>
                                                    <br>
                                                </div>
                                            </div>

                                         <!------------------------------END CLUB TAGS--------------------------------------->
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
                                     <!---------------------------------------NEWS FEED BEGIN---------------------------------------->
                                        <div style="background-color:#fff" class="shdw">
                                            <div class="media  bg" style="background:#afdf7c">
                                                <a href="" class="pull-left">
                                                    <img src="fb_users/<?php echo $usr_dis['Gender']?>/<?php echo $usr_dis['Email']?>/Profile/<?php echo $fet_ppic['image'];?>" width="50" class="media-object">
                                                </a>
                                                <div class="media-body innerTB half bg" style="padding-top:4px;">
                                                    <a href="#" class="pull-right innerT innerR text-white"> </a>
                                                    <a href="" class="text-white strong display-block"><?php echo $usr_dis['Name']?></a>
                                                    <br>
                                                    <span style="color:#fff;"><?php echo $usr_dis['designation'];?></span>
                                                    <span style="color:#fff;">-</span>
                                                    <span style="color:#fff;"><?php echo $usr_dis['company'];?></span>
                                                </div>
                                            </div>
                                            <br style="height:2px;">
                                            <form method="post" action="script_code.php">
                                                <div class="input-group comment">
                                                    <!--<input type="text" class="form-control" placeholder="Ink Your Reflections..."> -->
                                                    <textarea style="resize:none" class="span12 form-control" name="post_data" cols="90" rows="2" placeholder="INK YOUR REFLECTIONS..."></textarea>
                                                </div>
                                                <div style="border-bottom:5px solid #ADCA8CM; margin-bottom: 10px; ">
                                                    <button type="submit" name="sub_post" class="btn btn-success navbar-btn">
                                                        WRITE
                                                    </button>
                                                    <button type="button" class="btn btn-success navbar-btn">
                                                        SCHEDULE
                                                    </button>
                                                    <button type="button" class="btn btn-success navbar-btn">
                                                        DUST
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                        <!--<hr class="style5">-->
                                        <br />

                                        <div class="bg_pst">

                                            <?php
                                            $retpe=mysqli_query($conn,"select * from user_post order by post_id desc");
                                            while($resp=mysqli_fetch_array($retpe))
                                            {
                                                $pue=mysqli_query($conn,"select * from users where user_id='$resp[user_id]'");
                                                $pud=mysqli_fetch_array($pue);
                                                $pupe=mysqli_query($conn,"select * from user_profile_pic where user_id='$resp[user_id]'");
                                                $pupp=mysqli_fetch_array($pupe);
                                                ?>
                                                <div class="pst_box" style="background-color:#fff;">
                                                    <div class="pst_head">
                                                        <div class="row pst_row_fill" style="">
                                                            <div class="col-lg-2 " align="left" style="width:70px;">
                                                                <?php
                                                                //$ency=base64_encode('id=$resp[user_id]');
                                                                ?>
                                                                <a href="profile.php?id=<?php echo $resp['user_id'] ?>" class="pst_head_left">
                                                                    <img src="fb_users/<?php echo $pud['Gender']?>/<?php echo $pud['Email'];?>/Profile/<?php echo $pupp['image'];?>" width="70" style="margin-left:-15px;">
                                                                </a>
                                                            </div>
                                                            <div class="col-lg-8 pst_head_txt">
                                                                <a href="profile.php?id=<?php echo $resp['user_id'] ?>" class="text_wht"><?php echo $pud['Name'];?></a>
                                                                <br>
                                                                <span class="pst_head_pos text_wht">CEO-Beta Solutions</span>
                                                                <br>
                                                                <span class="text_wht">IT-Industry</span>
                                                            </div>
                                                            <div class="col-lg-2">
                                                            <div id="bookmarks">
                                                                <?php
                                                                $pse=mysqli_query($conn,"select * from user_post_status where post_id='$resp[post_id]' AND user_id='$_SESSION[id]'");
                                                                $ps=mysqli_fetch_array($pse);
                                                                $psc=mysqli_num_rows($pse);
                                                                ?>
                                                                <?php
                                                                if($ps['status']=='Like')
                                                                {

                                                                    ?>
                                                                    <span><a href=""   onClick="unlike(<?php echo $resp['post_id'];?>,<?php echo $_SESSION['id'];?>);" id="<?php echo $resp['post_id'];?>" data-src="<?php echo $_SESSION['id'];?>">unlike</a></span>
                                                                    <?php
                                                                }else
                                                                {
                                                                    //echo $resp['post_id'] ."<br>";
                                                                    //echo $_SESSION['id'];
                                                                    ?>

                                                                    <span><a href=""  onClick="like(<?php echo $resp['post_id'];?>,<?php echo $_SESSION['id'];?>);" id="<?php echo $resp['post_id'];?>" data-src="<?php echo $_SESSION['id'];?>">like</a></span>
                                                                    <?php
                                                                }
                                                                ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="pst_body">
                                                        <?php
                                                        if($resp['post_pic']!='')
                                                        {
                                                            ?>
                                                            <span><img src="fb_users/<?php echo $pud['Gender']?>/<?php echo $pud['Email'];?>/Post/<?php echo $resp['post_pic'];?>" class="img-responsive" style=""></span>
                                                            <?php
                                                        }
                                                        ?>
                                                        <br>
                                                        <p style="margin-top:10px;"><?php echo $resp['post_txt'];?></p>
                                                        <span style="font-size:10px;"> - <?php echo $resp['post_time'];?></span>

                                                    </div>
                                                    <div class="pst_cmt">
                                                        <?php $ret_coments=mysqli_query($conn,"select * from user_post_comment where post_id='$resp[post_id]'");

                                                        ?>
                                                        <div class="pst_cmt_tog pst_cmt_pad">
                                                            <!--comment toggle-->
                                                            <i></i>
                                                            <a href="#"><span style="margin-left:10px;">View Comments</span></a>
                                                            <span class="pst_cmt_muted">+2 writes</span>
                                                        </div>
                                                        <?php
                                                        while($ret_cmt=mysqli_fetch_array($ret_coments))
                                                        {
                                                            $us_co_de=mysqli_query($conn,"select * from users where user_id='$ret_cmt[user_id]'");
                                                            $use_cm=mysqli_fetch_array($us_co_de);
                                                            $us_cmt_pic_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$use_cm[user_id]'");
                                                            $us_cmt_pic=mysqli_fetch_array($us_cmt_pic_exe);
                                                            ?>
                                                            <div class="row  pst_cmt_body">
                                                                <div class="col-lg-2" style="width:70px;">
                                                                    <a href="profile.php?id=<?php echo $use_cm['user_id'] ?>" class="pst_head_left">
                                                                        <img src="fb_users/<?php echo $use_cm['Gender']?>/<?php echo $use_cm['Email']?>/Profile/<?php echo $us_cmt_pic['image'];?>"  width="70" style="margin-left:-15px;">
                                                                    </a>
                                                                </div>
                                                                <div class="col-lg-10" style="padding-top:5px;">
                                                                    <a href="profile.php?id=<?php echo $use_cm['user_id'] ?>" style="color:#000;"><?php echo $use_cm['Name']; ?></a>
                                                                    <br>
                                                                    <span class="pst_head_pos  pst_cmt_muted">- 29 jan 2017</span>
                                                                    <br>
                                                                    <div style="margin-left:10px;"><?php echo $ret_cmt['comment'];?></div>
                                                                </div>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>

                                                        <div class="row pst_cmt_row">
                                                            <div class="col-lg-10 pst_cmt_pad">
                                                                <form method="post" action="script_code.php">
                                                                    <input type="hidden" name="cmt_ins_id" value="<?php echo $_SESSION['id'];?>">
                                                                    <input type="hidden" name="cmt_post_id" value="<?php echo $resp['post_id'];?>">
                                                                    <?php
                                                                    $date=date('Y-m-d h:i');

                                                                    ?>
                                                                    <input type="hidden" name="cmt_ins_date" value="<?php echo $date;?>">
                                                                    <input type="text" class="form-control" name="cmt_txt" style="width:100%; padding-left:10px;padding-right:10px; " placeholder="Write...">
                                                                    <input type="submit" name="cmt_ins" style="display:none;">
                                                                </form>
                                                            </div>
                                                            <!--<div class="col-lg-2 pst_cmt_c1">
                                                                <button type="button" class="btn btn-primary" href="#" style="background:#afdf7c; ">
                                                                    <i class="fa fa-pencil"></i>
                                                                </button>
                                                            </div>-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                            ?>


                                        </div>

                                     <!-----------------------------------------END NEWS FEED------------------------------------>
                                        
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab2">
                                 <!------------------------------------BEGIN INDUSTRY--------------------------------------------------->
                                    <div class="bg_pst">

                                        <?php
                                        $industry_count=100;
                                        $industry_users_exe=mysqli_query($conn,"select * from users where industry='$usr_dis[industry]'");
                                        while($industry_users_ret=mysqli_fetch_array($industry_users_exe))
                                        {

                                            $industry_post_users_execu = mysqli_query($conn, "select * from user_post where user_id='$industry_users_ret[user_id]'");
                                            while ($industry_post_rety = mysqli_fetch_array($industry_post_users_execu))
                                            {
                                                $industry_user_profile_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$industry_post_rety[user_id]'");
                                                $indus_usr_prof_pic=mysqli_fetch_array($industry_user_profile_exe);
                                                $industry_post_usr_profi_pic=$indus_usr_prof_pic[2];

                                                $industry_post_user_data_exeu=mysqli_query($conn,"select * from users where user_id='$industry_post_rety[user_id]'");
                                                $industry_post_user_data_retry=mysqli_fetch_array($industry_post_user_data_exeu);

                                                ?>
                                                <div class="pst_box" style="background-color:#fff;">
                                                    <div class="pst_head">
                                                        <div class="row pst_row_fill" style="">
                                                            <div class="col-lg-2 " align="left" style="width:70px;">
                                                                <a href="profile.php?id=<?php echo $industry_post_rety['user_id']?>" class="pst_head_left">
                                                                    <img src="fb_users/<?php echo $industry_post_user_data_retry['Gender']; ?>/<?php echo $industry_post_user_data_retry['Email']?>/Profile/<?php echo $industry_post_usr_profi_pic; ?>" width="70" style="margin-left:-15px;">
                                                                </a>
                                                            </div>
                                                            <div class="col-lg-8 pst_head_txt">
                                                                <a href="profile.php?id=<?php echo $users_id?>" class="text_wht"><?php echo $industry_post_user_data_retry['Name'];?></a>
                                                                <br>
                                                                <span class="pst_head_pos text_wht"><?php echo $industry_post_user_data_retry['designation'];?>-<?php echo $industry_post_user_data_retry['company'];?></span>
                                                                <br>
                                                                <span class="text_wht"><?php echo $industry_post_user_data_retry['industry'];?></span>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <?php
                                                                $industry_post_status_exe=mysqli_query($conn,"select * from user_post_status where post_id='$industry_post_rety[post_id]'");
                                                                $industry_post_status_count=mysqli_num_rows($industry_post_status_exe);
                                                                $industry_post_status_retry=mysqli_fetch_array($industry_post_status_exe);
                                                                if($industry_post_status_retry['status']=='Like')
                                                                {
                                                                    ?>


                                                                    <span><a href=""   onClick="unlike(<?php echo $industry_post_rety['post_id'];?>,<?php echo $_SESSION['id'];?>);" >unlike</a></span>
                                                                    <?php
                                                                }
                                                                else{
                                                                    ?>


                                                                    <span><a href=""  onClick="like(<?php echo  $industry_post_rety['post_id'];?>,<?php echo $_SESSION['id'];?>);" id="<?php echo $resp['post_id'];?>" data-src="<?php echo $_SESSION['id'];?>">like</a></span>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="pst_body">
                                                        <?php
                                                        if($industry_post_rety['post_pic']!='') {
                                                            ?>
                                                            <span><img src="fb_users/<?php echo $industry_post_user_data_retry['Gender']; ?>/<?php echo $industry_post_user_data_retry['Email'];?>/Post/<?php echo $industry_post_rety['post_pic'];?>" class="img-responsive" style=""></span>
                                                            <?php
                                                        }
                                                        ?>
                                                        <br>
                                                        <p style="margin-top:10px;"><?php echo $industry_post_rety['post_txt'];?></p>
                                                        <span style="font-size:10px;"> - <?php echo $industry_post_rety['post_time'];?></span>

                                                    </div>
                                                    <div class="pst_cmt">
                                                        <?php

                                                        $industry_post_comment_exeu=mysqli_query($conn,"select * from user_post_comment where post_id='$industry_post_rety[post_id]'");
                                                        $industry_post_comment_count=mysqli_num_rows($industry_post_comment_exeu);
                                                        $industry_count++;
                                                        ?>
                                                        <div class="pst_cmt_tog pst_cmt_pad">
                                                            <!--comment toggle-->
                                                            <i></i>
                                                            <a href="#"><span style="margin-left:10px;">View Comments</span></a>
                                                            <span class="pst_cmt_muted"><?php echo $industry_post_comment_count;?> writes</span>
                                                        </div>
                                                        <?php
                                                        while($industry_post_comment_retry=mysqli_fetch_array($industry_post_comment_exeu)) {
                                                            $industry_post_comment_user_details_exe=mysqli_query($conn,"select * from users where user_id='$industry_post_comment_retry[user_id]'");
                                                            $industry_post_comment_user_retry=mysqli_fetch_array($industry_post_comment_user_details_exe);
                                                            $indusry_post_comment_user_pofile_pic_exeu=mysqli_query($conn,"select * from user_profile_pic where user_id='$industry_post_comment_user_retry[user_id]'");
                                                            $industry_post_comment_user_pic_retry=mysqli_fetch_array($indusry_post_comment_user_pofile_pic_exeu);

                                                            ?>
                                                            <div class="row  pst_cmt_body">
                                                                <div class="col-lg-2" style="width:70px;">
                                                                    <a href="profile.php?id=<?php echo $industry_post_comment_user_retry['user_id'] ?>" class="pst_head_left">
                                                                        <img src="fb_users/<?php echo $industry_post_comment_user_retry['Gender']?>/<?php echo $industry_post_comment_user_retry['Email']?>/Profile/<?php echo$industry_post_comment_user_pic_retry['image'];?>"  width="70" style="margin-left:-15px;">
                                                                    </a>
                                                                </div>
                                                                <div class="col-lg-10" style="padding-top:5px;">
                                                                    <a href="profile.php?id=<?php echo $industry_post_comment_user_retry['user_id'] ?>" style="color:#000;"><?php echo $industry_post_comment_user_retry['Name']; ?></a>
                                                                    <br>
                                                                    <span class="pst_head_pos  pst_cmt_muted">-wrote on <?php echo $industry_post_comment_retry['comment_time'];?></span>
                                                                    <br>
                                                                    <div style="margin-left:10px;"><?php echo $industry_post_comment_retry['comment']; ?></div>
                                                                </div>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>

                                                        <div class="row pst_cmt_row">
                                                            <div class="col-lg-10 pst_cmt_pad">
                                                                <form method="post" action="script_code.php">
                                                                    <input type="hidden" name="cmt_ins_id" value="<?php echo $_SESSION['id'];?>">
                                                                    <input type="hidden" name="cmt_post_id" value="<?php echo $industry_post_rety['post_id'];?>">
                                                                    <?php
                                                                    $date=date('Y-m-d h:i');

                                                                    ?>
                                                                    <input type="hidden" name="cmt_ins_date" value="<?php echo $date;?>">
                                                                    <input type="text" class="form-control" name="cmt_txt" style="width:100%; padding-left:10px;padding-right:10px; " placeholder="Write...">
                                                                    <input type="submit" name="cmt_ins" style="display:none;">
                                                                </form>
                                                            </div>
                                                            <!--<div class="col-lg-2 pst_cmt_c1">
                                                                <button type="button" class="btn btn-primary" href="#" style="background:#afdf7c; ">
                                                                    <i class="fa fa-pencil"></i>
                                                                </button>
                                                            </div>-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>

                                  <!----------------------------------END INDUSTRY---------------------------------------------------->
                                </div>
                                <div class="tab-pane" id="tab3">
                                 <!------------------------------------------BEGIN INKED--------------------------------->

                                    <div class="bg_pst">

                                        <?php
                                        $user_profile_photo_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$_SESSION[id]'");
                                        $user_profile_pic=mysqli_fetch_array($user_profile_photo_exe);
                                        ?>
                                        <?php

                                        $count=0;
                                        $user_profile_post_exet=mysqli_query($conn,"select * from user_post where user_id='".$_SESSION['id']."'");
                                        while($user_profile_post=mysqli_fetch_array($user_profile_post_exet))
                                        {
                                            $count++;
                                            ?>
                                            <div class="pst_box" style="background-color:#fff;">
                                                <div class="pst_head">
                                                    <div class="row pst_row_fill" style="">
                                                        <div class="col-lg-2 " align="left" style="width:70px;">
                                                            <a href="#" class="pst_head_left">
                                                                <img src="fb_users/<?php echo $usr_dis['Gender']; ?>/<?php echo $usr_dis['Email']; ?>/Profile/<?php echo $user_profile_pic['image'];?>" width="70" style="margin-left:-15px;">
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-8 pst_head_txt">
                                                            <a href="#" class="text_wht"><?php echo $usr_dis['Name'];?></a>
                                                            <br>
                                                            <span class="pst_head_pos text_wht"><?php echo $usr_dis['designation'];?>-<?php echo $usr_dis['company']?></span>
                                                            <br>
                                                            <span class="text_wht"><?php echo $usr_dis['industry'];?></span>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <?php
                                                            $user_profile_bookmark_exe=mysqli_query($conn,"select * from user_post_status where post_id='$user_profile_post[post_id]'");
                                                            $user_profilr_bookmark=mysqli_fetch_array($user_profile_bookmark_exe);
                                                            if($user_profilr_bookmark['status']=='Like')
                                                            {
                                                                ?>


                                                                <span><a href=""  onClick="unlike(<?php echo $user_profile_post['post_id'];?>,<?php echo $_SESSION['id'];?>);" >unlike</a></span>
                                                                <?php
                                                            }else
                                                            {
                                                                //echo $resp['post_id'] ."<br>";
                                                                //echo $_SESSION['id'];
                                                                ?>

                                                                <span><a href=""  onClick="like(<?php echo $user_profile_post['post_id'];?>,<?php echo $_SESSION['id'];?>);" >like</a></span>
                                                                <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="pst_body">
                                                    <?php
                                                    if($user_profile_post['post_pic'])
                                                    {
                                                        ?>
                                                        <span><img src="fb_users/<?php echo $usr_dis['Gender'];?>/<?php echo $usr_dis['Email']; ?>/Post/<?php echo $user_profile_post['post_pic'];?>" class="img-responsive" style=""></span>
                                                        <?php
                                                    }
                                                    ?>
                                                    <br>
                                                    <p style="margin-top:10px;"><?php echo $user_profile_post['post_txt']?></p>
                                                    <span style="font-size:10px;"> - <?php echo $user_profile_post['post_time'];?></span>

                                                </div>
                                                <div class="pst_cmt">
                                                    <?php
                                                    $user_profile_post_comment_execu=mysqli_query($conn,"select * from user_post_comment where post_id='$user_profile_post[post_id]'");
                                                    $user_profile_comment_count=mysqli_num_rows($user_profile_post_comment_execu);

                                                    ?>
                                                    <div class="pst_cmt_tog pst_cmt_pad">
                                                        <!--comment toggle-->
                                                        <i></i>
                                                        <a href="#"><span style="margin-left:10px;">View Comments</span></a>
                                                        <span class="pst_cmt_muted"><?php echo $user_profile_comment_count;?> writes</span>
                                                    </div>
                                                    <?php
                                                    while($user_profile_post_comment=mysqli_fetch_array($user_profile_post_comment_execu))
                                                    {
                                                        $profile_post_comment_user_exec=mysqli_query($conn,"select * from users where user_id='$user_profile_post_comment[user_id]'");
                                                        $profile_post_comment_user_de=mysqli_fetch_array($profile_post_comment_user_exec);
                                                        $profile_post_comment_user_pic_exect=mysqli_query($conn,"select * from user_profile_pic where user_id='$user_profile_post_comment[user_id]'");
                                                        $prof_post_comment_user_pp=mysqli_fetch_array($profile_post_comment_user_pic_exect);
                                                        ?>

                                                        <div class="row  pst_cmt_body">
                                                            <div class="col-lg-2" style="width:70px;">
                                                                <a href="#" class="pst_head_left">
                                                                    <img src="fb_users/<?php echo $profile_post_comment_user_de['Gender'];?>/<?php echo $profile_post_comment_user_de['Email']; ?>/Profile/<?php echo $prof_post_comment_user_pp['image']; ?>"  width="70" style="margin-left:-15px;">
                                                                </a>
                                                            </div>
                                                            <div class="col-lg-10" style="padding-top:5px;">
                                                                <a href="#" style="color:#000;"><?php echo $profile_post_comment_user_de['Name'];?></a>
                                                                <br>
                                                                <span class="pst_head_pos  pst_cmt_muted">- wrote on <?php echo $user_profile_post_comment['comment_time'];?></span>
                                                                <br>
                                                                <div style="margin-left:10px;"><?php echo $user_profile_post_comment['comment'];?></div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                    ?>

                                                    <div class="row pst_cmt_row">
                                                        <div class="col-lg-10 pst_cmt_pad">
                                                            <form method="post" action="script_code.php">
                                                                <input type="hidden" name="cmt_ins_id" value="<?php echo $_SESSION['id'];?>">
                                                                <input type="hidden" name="cmt_post_id" value="<?php echo $user_profile_post['post_id'];?>">
                                                                <?php
                                                                $date=date('Y-m-d h:i');

                                                                ?>
                                                                <input type="hidden" name="cmt_ins_date" value="<?php echo $date;?>">
                                                                <input type="text" class="form-control" name="cmt_txt" style="width:100%; padding-left:10px;padding-right:10px; " placeholder="Write...">
                                                                <input type="submit" name="cmt_ins" style="display:none;">
                                                            </form>
                                                        </div>
                                                        <!--<div class="col-lg-2 pst_cmt_c1">
                                                            <button type="button" class="btn btn-primary" href="#" style="background:#afdf7c; ">
                                                                <i class="fa fa-pencil"></i>
                                                            </button>
                                                        </div>-->
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>

                                    </div>
                                 <!---------------------------------------------END INKED---------------------------------------->
                                </div>
                                <div class="tab-pane" id="tab4">
                                 <!---------------------------------------------------BEGIN NOTED FILE---------------------------->

                                    <div class="bg_pst">
                                        <?php
                                        $user_noted_posts_exe=mysqli_query($conn,"select * from user_post_status where user_id='$_SESSION[id]'");
                                        while($ret_user_noted=mysqli_fetch_array($user_noted_posts_exe))
                                        {
                                            ?>

                                            <?php

                                            $count=0;
                                            $user_noted_post_exet=mysqli_query($conn,"select * from user_post where post_id='".$ret_user_noted['post_id']."'");
                                            $user_noted_post=mysqli_fetch_array($user_noted_post_exet);

                                            $count++;
                                            ?>
                                            <?php
                                            $user_noted_photo_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$user_noted_post[user_id]'");
                                            $user_noted_ppic=mysqli_fetch_array($user_noted_photo_exe);
                                            ?>

                                            <?php
                                            $user_noted_pers_de_ex=mysqli_query($conn,"select * from users where user_id='".$user_noted_post['user_id']."'");
                                            $user_pos_nrty=mysqli_fetch_array($user_noted_pers_de_ex);
                                            ?>                       <div class="pst_box" style="background-color:#fff;">
                                            <div class="pst_head">
                                                <div class="row pst_row_fill" style="">
                                                    <div class="col-lg-2 " align="left" style="width:70px;">
                                                        <a href="profile.php?id=<?php echo $user_pos_nrty['user_id'] ?>" class="pst_head_left">
                                                            <img src="fb_users/<?php echo $user_pos_nrty['Gender']; ?>/<?php echo $user_pos_nrty['Email']; ?>/Profile/<?php echo $user_noted_ppic['image'];?>" width="70" style="margin-left:-15px;">
                                                        </a>
                                                    </div>
                                                    <div class="col-lg-8 pst_head_txt">
                                                        <a href="profile.php?id=<?php echo $user_pos_nrty['user_id'] ?>" class="text_wht"><?php echo $user_pos_nrty['Name'];?></a>
                                                        <br>
                                                        <span class="pst_head_pos text_wht"><?php echo $user_pos_nrty['designation'];?>-<?php echo $user_pos_nrty['company']?></span>
                                                        <br>
                                                        <span class="text_wht"><?php echo $user_pos_nrty['industry'];?></span>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <?php
                                                        /*$pse=mysqli_query($conn,"select * from user_post_status where post_id='$user_noted_post[post_id]' AND user_id='$_SESSION[id]'");
                                                        $ps=mysqli_fetch_array($pse);
                                                        $psc=mysqli_num_rows($pse);*/
                                                        ?>
                                                        <?php
                                                        if($ret_user_noted['status']=='Like')
                                                        {

                                                            ?>
                                                            <span><a href=""   onClick="unlike(<?php echo $user_noted_post['post_id'];?>,<?php echo $_SESSION['id'];?>);" id="<?php echo $user_noted_post['post_id'];?>" data-src="<?php echo $_SESSION['id'];?>">unlike</a></span>
                                                            <?php
                                                        }else
                                                        {
                                                            //echo $resp['post_id'] ."<br>";
                                                            //echo $_SESSION['id'];
                                                            ?>

                                                            <span><a href=""  onClick="like(<?php echo $user_noted_post['post_id'];?>,<?php echo $_SESSION['id'];?>);" id="<?php echo $user_noted_post['post_id'];?>" data-src="<?php echo $_SESSION['id'];?>">like</a></span>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="pst_body">
                                                <?php
                                                if($user_noted_post['post_pic']!='')
                                                {
                                                    ?>
                                                    <span><img src="fb_users/<?php echo $user_pos_nrty['Gender'];?>/<?php echo $user_pos_nrty['Email']; ?>/Post/<?php echo $user_noted_post['post_pic'];?>" class="img-responsive" style=""></span>
                                                    <?php
                                                }
                                                ?>
                                                <br>
                                                <p style="margin-top:10px;"><?php echo $user_noted_post['post_txt']?></p>
                                                <span style="font-size:10px;"> - <?php echo $user_noted_post['post_time'];?></span>

                                            </div>
                                            <div class="pst_cmt">
                                                <?php
                                                $user_noted_post_comment_execu=mysqli_query($conn,"select * from user_post_comment where post_id='$user_noted_post[post_id]'");
                                                $user_noted_comment_count=mysqli_num_rows($user_noted_post_comment_execu);

                                                ?>
                                                <div class="pst_cmt_tog pst_cmt_pad">
                                                    <!--comment toggle-->
                                                    <i></i>
                                                    <a href="#"><span style="margin-left:10px;">View Comments</span></a>
                                                    <span class="pst_cmt_muted"><?php echo $user_noted_comment_count;?> writes</span>
                                                </div>
                                                <?php
                                                while($user_profile_post_comment=mysqli_fetch_array($user_noted_post_comment_execu))
                                                {
                                                    $profile_post_comment_user_exec=mysqli_query($conn,"select * from users where user_id='$user_profile_post_comment[user_id]'");
                                                    $profile_post_comment_user_de=mysqli_fetch_array($profile_post_comment_user_exec);
                                                    $profile_post_comment_user_pic_exect=mysqli_query($conn,"select * from user_profile_pic where user_id='$user_profile_post_comment[user_id]'");
                                                    $prof_post_comment_user_pp=mysqli_fetch_array($profile_post_comment_user_pic_exect);
                                                    ?>
                                                    <div class="row  pst_cmt_body">
                                                        <div class="col-lg-2" style="width:70px;">
                                                            <a href="profile.php?id=<?php echo $profile_post_comment_user_de['user_id'] ?>" class="pst_head_left">
                                                                <img src="fb_users/<?php echo $profile_post_comment_user_de['Gender'];?>/<?php echo $profile_post_comment_user_de['Email']; ?>/Profile/<?php echo $prof_post_comment_user_pp['image']; ?>"  width="70" style="margin-left:-15px;">
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-10" style="padding-top:5px;">
                                                            <a href="profile.php?id=<?php echo $profile_post_comment_user_de['user_id'] ?>" style="color:#000;"><?php echo $profile_post_comment_user_de['Name'];?></a>
                                                            <br>
                                                            <span class="pst_head_pos  pst_cmt_muted">- wrote on <?php echo $user_profile_post_comment['comment_time'];?></span>
                                                            <br>
                                                            <div style="margin-left:10px;"><?php echo $user_profile_post_comment['comment'];?></div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                                ?>

                                                <div class="row pst_cmt_row">
                                                    <div class="col-lg-10 pst_cmt_pad">
                                                        <form method="post" action="script_code.php">
                                                            <input type="hidden" name="cmt_ins_id" value="<?php echo $_SESSION['id'];?>">
                                                            <input type="hidden" name="cmt_post_id" value="<?php echo $user_noted_post['post_id'];?>">
                                                            <?php
                                                            $date=date('Y-m-d h:i');

                                                            ?>
                                                            <input type="hidden" name="cmt_ins_date" value="<?php echo $date;?>">
                                                            <input type="text" class="form-control" name="cmt_txt" style="width:100%; padding-left:10px;padding-right:10px; " placeholder="Write...">
                                                            <input type="submit" name="cmt_ins" style="display:none;">
                                                        </form>
                                                    </div>
                                                    <!--<div class="col-lg-2 pst_cmt_c1">
                                                        <button type="button" class="btn btn-primary" href="#" style="background:#afdf7c; ">
                                                            <i class="fa fa-pencil"></i>
                                                        </button>
                                                    </div>-->
                                                </div>
                                            </div>
                                        </div>
                                            <?php
                                        }
                                        ?>
                                    </div>

                                 <!------------------------------END NOTED FILES----------------------------------------------->
                                </div>
                                <div class="tab-pane" id="tab5">
                                  <!------------------------------------------------BEGIN ANKITHA FILE--------------------------->
                                    <div style="background-color:#fff;height:850px; width:590px; ">
                                        <div>
                                            <div style="height:80px;position:relative;  background-color:#afdf7c; z-index:1;" align="right">
                                                <h1 style="padding-top:25px; padding-right:20px;color:#fff; font-size:40px; font-family:lato-regular;"><?php echo $_SESSION['Name'];?></h1>
                                            </div>
                                            <div style="z-index:3;position:relative; top:-50px; left:20px; border:5px solid #fff; width:140px; padding:0px; border-radius:50%;">
                                                <img src="fb_users/<?php echo $usr_dis['Gender']?>/<?php echo $usr_dis['Email']?>/Profile/<?php echo $fet_ppic['image'];?>" width="130px" style="border-radius:50%" />
                                            </div>
                                            <div style="height:150px;width: 591px;;background-color: rgb(216, 216, 216);z-index: 2;margin: 0px 0px 0px 540px !important;top: -140px;left: -540px;position: relative ;" align="right">
                                                <div class="row">
                                                    <div class="col-lg-4" style="height:150px;width:170px; background-color:#fff;border-bottom:1px dashed #afdf7c;">

                                                    </div>
                                                    <div class="col-lg-8" style="height:150px;width:420px; background-color:#fff; border-bottom:1px dashed #afdf7c;">
                                                        <div class="col-lg-12" style="padding-right: 5px;">
                                                            <h3 class="club_headers" style="text-align:right;font-family:lato-hairline; margin-right:0px;">
                                                                <?php echo $usr_dis['designation'];?></h3>
                                                        </div>
                                                        <div style="height:30px; ">
                                                            <img src="images/others/d_quote1.png" width="40px" style="opacity:.1" />
                                                        </div>
                                                        <div class="col-lg-12" style="padding-right:0px;">
                                                            <blockquote style="color:#afdf7c; font-family:lato-light; border-left:5px solid #afdf7c;"><?php echo $fet_info['quote'];?></blockquote>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row" style=" background-color:#fff;height:610px;">
                                                    <div class="col-lg-4 profile_left_navbar" style="border-right:1px dashed #acdf7c; height:500px; margin-top:10px; margin-bottom:10px;">
                                                        <div class="col-lg-12 profile_l_n_personal">
                                                            <h3 class="club_headers" style="text-align:right;margin-right:0px;">
                                                                PERSONAL</h3>
                                                            <div>
                                                                <h5 style="color:#afdf7c;margin-bottom:2px;">
                                                                    CONTACT</h5>
                                                                <span>
        +91 <?php echo $fet_info['mobile_no'];?></span>
                                                            </div>
                                                            <div>
                                                                <h5 style="color:#afdf7c;margin-bottom:2px;">
                                                                    ADDRESS</h5>
                                                                <span>
       <?php echo $fet_info['hometown'];?></span>
                                                                <br>
                                                                <span><?php echo $fet_info['current_city'];?></span>
                                                            </div>
                                                            <div>
                                                                <h5 style="color:#afdf7c;margin-bottom:2px;">
                                                                    EMAIL</h5>
                                                                <span>
        <?php echo $fet_info['Email'];?></span>
                                                            </div>
                                                            <div>
                                                                <h5 style="color:#afdf7c;margin-bottom:2px;">
                                                                    WEBSITE</h5>
                                                                <span>
        <?php echo $fet_info['website'];?></span>
                                                            </div>
                                                            <br>
                                                        </div>
                                                        <div class="col-lg-12 profile_l_n_personal">
                                                            <h3 class="club_headers" style="text-align:right;margin-right:0px;">
                                                                COMPANY</h3>
                                                            <div>
                                                                <h5 style="color:#afdf7c;margin-bottom:2px;">
                                                                    COMPANY NAME</h5>
                                                                <span>
        <?php echo $usr_dis['company'];?></span>
                                                            </div>
                                                            <div>
                                                                <h5 style="color:#afdf7c;margin-bottom:2px;">
                                                                    EMAIL</h5>
                                                                <span>
        info@betasolutions.in</span>
                                                            </div>
                                                            <div>
                                                                <h5 style="color:#afdf7c;margin-bottom:2px;">
                                                                    WEBSITE</h5>
                                                                <span>
        www.betasolutions.in</span>
                                                            </div>
                                                            <br>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8" style=" margin-top:10px; margin-bottom:10px; height:600px;">
                                                        <div class="row">
                                                            <div class="col-lg-12 p_r_box">
                                                                <h3 class="club_headers" style="text-align:left;margin-left:0px;">
                                                                    PROFILE</h3>
                                                                <p>
                                                                    <?php echo $usr_dis['description'];?></p>
                                                            </div>
                                                            <div class="col-lg-12 p_r_box" style="overflow-y:none;">
                                                                <h3 class="club_headers" style="text-align:left;margin-left:0px;">
                                                                    ACCOMPLISHMENTS</h3>
                                                                <div class="col-lg-12" tyle="height:40px; border-bottom:1px dashed #afdf7c" align="left">
                                                                    <div class="col-lg-4" style="background-color:#afdf7c;height:40px;color:#fff;">
                                                                        <h5>
                                                                            2015-2016</h5>
                                                                    </div>
                                                                    <div class="col-lg-8" tyle="border:1px solid #afdf7c;height:40px; color:#a9a9a9;">
                                                                        <h5 style="margin:0px;color:#afdf7c">
                                                                            BIG PROJECT</h5>
                                                                        <p style="text-align:;">
                                                                            electram convenire ad mel, no his verear delicata concludaturque, laudem singulis est id. Enim sale a</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12" tyle="height:40px; border-bottom:1px dashed #afdf7c" align="left">
                                                                    <div class="col-lg-4" style="background-color:#afdf7c;height:40px;color:#fff;">
                                                                        <h5>
                                                                            2015-2016</h5>
                                                                    </div>
                                                                    <div class="col-lg-8" tyle="border:1px solid #afdf7c;height:40px; color:#a9a9a9;">
                                                                        <h5 style="margin:0px;color:#afdf7c">
                                                                            BIG PROJECT</h5>
                                                                        <p style="text-align:;">
                                                                            electram convenire ad mel, no his verear delicata concludaturque, laudem singulis est id. Enim sale a</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12" tyle="height:40px; border-bottom:1px dashed #afdf7c" align="left">
                                                                    <div class="col-lg-4" style="background-color:#afdf7c;height:40px;color:#fff;">
                                                                        <h5>
                                                                            2015-2016</h5>
                                                                    </div>
                                                                    <div class="col-lg-8" tyle="border:1px solid #afdf7c;height:40px; color:#a9a9a9;">
                                                                        <h5 style="margin:0px;color:#afdf7c">
                                                                            BIG PROJECT</h5>
                                                                        <p style="text-align:;">
                                                                            electram convenire ad mel, no his verear delicata concludaturque, laudem singulis est id. Enim sale a</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 p_r_box">
                                                                <h3 class="club_headers" style="text-align:left;margin-left:0px;">
                                                                    EDUCATION</h3>
                                                                <span> <b style="color:#afdf7c">2010-2016</b> &nbsp;|&nbsp; Beta Solutions </span>
                                                                <br>
                                                                <span> <b style="color:#afdf7c">2010-2016</b> &nbsp;|&nbsp; Beta Solutions </span>
                                                                <br>
                                                                <span> <b style="color:#afdf7c">2010-2016</b> &nbsp;|&nbsp; Beta Solutions </span>
                                                                <br>
                                                                <span> <b style="color:#afdf7c">2010-2016</b> &nbsp;|&nbsp; Beta Solutions </span>
                                                                <br>
                                                                <span> <b style="color:#afdf7c">2010-2016</b> &nbsp;|&nbsp; Beta Solutions </span>
                                                                <br>
                                                                <span> <b style="color:#afdf7c">2010-2016</b> &nbsp;|&nbsp; Beta Solutions </span>
                                                            </div>
                                                            <div class="col-lg-12 p_r_box" style="border-bottom:none;">
                                                                <h3 class="club_headers" style="text-align:left;margin-left:0px;">
                                                                    SKILLS</h3>
                                                                <?php
                                                                $us_sli_exe=mysqli_query($conn,"select * from user_skills where user_id='$_SESSION[id]'");
                                                                while($uskil=mysqli_fetch_array($us_sli_exe))
                                                                {
                                                                    ?>
                                                                    <button type="button" class="btn btn_grn" value="" style="height:30px; margin:5px;text-transform:uppercase;"><?php echo $uskil['skill'];?></button>
                                                                    <?php
                                                                }
                                                                ?>
                                                                <!-- <input type="button" class="btn btn_grn" value="PHOTOSHOP" style=" margin:1px; height:30px;">
                                                                 <input type="button" class="btn btn_grn" value="WEB DESIGN" style=" margin:1px; height:30px;">
                                                                 <input type="button" class="btn btn_grn" value="PHP" style=" margin:1px; height:30px;">
                                                                 <input type="button" class="btn btn_grn" value="3D MODELING" style=" margin:1px;height:30px;">
                                                                 <input type="button" class="btn btn_grn" value="C#" style=" margin:1px;height:30px;">
                                                                 <input type="button" class="btn btn_grn" value="DOT.NET" style=" margin:1px;height:30px;">
                                                                 <input type="button" class="btn btn_grn" value="CINEMA4D" style=" margin:1px;height:30px;">
                                                                 <input type="button" class="btn btn_grn" value="ANIMATION" style=" margin:1px;height:30px;">-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 <!--------------------------------END ANKITHA FILE--------------------------------------->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="folio-vr">
                         <!-----------------------------------------BEGIN FOLIO---------------------------------------->

                            <div class="pst_main_background" style="background-color:#fff;">
                                <?php
                                $cover_pic_exe=mysqli_query($conn,"select * from user_cover_pic where user_id='$_SESSION[id]'");
                                $cvpic=mysqli_fetch_array($cover_pic_exe);
                                ?>
                                <div class="pst_box">
                                    <div class="parallax_folio" style="background-image: url('fb_users/<?php echo $usr_dis['Gender'];?>/<?php echo $usr_dis['Email'];?>/Cover/<?php echo $cvpic['image'];?>');">

                                    </div>
                                    <br>
                                    <br>
                                    <div style="border-top:1px solid #afdf7c;border-bottom:1px solid #afdf7c; width:570px; margin-left:10px; margin-right:10px;">

                                        <br>
                                        <h4 style="color:#afdf7c;">
                                            WHO I AM <span class="icon" ><a href="#folio" class="icon" > <i class="fa fa-pencil icon"></i></a> </span></h4>
                                        <?php
                                        $folio_desc=mysqli_query($conn,"select * from folio where user_id='$_SESSION[id]'");
                                        $fo_des=mysqli_fetch_array($folio_desc);
                                        ?>
                                        <P style="color:#d3d3d3">
                                            <?php echo $fo_des['description'];?></P>
                                        <br>
                                    </div>





                                    <br>
                                   
                                    <div style="border-bottom:1px solid #afdf7c; width:570px; margin-left:10px; margin-right:10px;">
                                        <h4 style="color:#afdf7c;">SKILLS <span class="icon" ><a href="#skill" class="icon" > <i class="fa fa-pencil icon"></i></a> </span></h4>
                                        <br>
                                         <div id="skill5">
                                        <?php
                                        $us_sli_exe11=mysqli_query($conn,"select * from user_skills where user_id='$_SESSION[id]'");
                                        while($uskil11=mysqli_fetch_array($us_sli_exe11))
                                        {
                                            ?>
                                            <button type="button" class="btn btn_grn" value="" style="height:30px; margin:5px;text-transform:uppercase;"><?php echo $uskil11['skill'];?></button>
                                            <?php
                                        }
                                        ?>
                                        </div>

                                        <br>
                                    </div>
                                    
                                    <br>
                                    <div style=" width:570px; margin-left:10px; margin-right:10px;">
                                        <h4 style="color:#afdf7c;">
                                            WORKS <span class="icon" ><a href="#user_work" class="icon" > <i class="fa fa-pencil icon"></i></a> </span></h4>
                                        <BR>
                                    </div>
                                    <div>
                                        <?php
                                        $get_wpjs=mysqli_query($conn,"select * from work_projects where user_id='$_SESSION[id]'");
                                        while($fol_wrks=mysqli_fetch_array($get_wpjs))
                                        {
                                            ?>
                                            <a href="#popup_work_<?php echo $fol_wrks['work_id'];?>">
                                                <div class="folio_wrk" style="background-image: url('fb_users/<?php echo $usr_dis['Gender'];?>/<?php echo $usr_dis['Email'];?>/Projects/<?php echo $fol_wrks['work_image'];?>');">
                                                    <div align="center" style="color:#fff; height:100px; padding-top:20px;">
                                                        <h3> <?php echo $fol_wrks['work_title'];?></h3>
                                                    </div>
                                                </div></a>

                                            <!--Skill Model Begin-->
                                            <div class="remodal" data-remodal-id="popup_work_<?php echo $fol_wrks['work_id'];?>" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                                                <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>

                                                <div>

                                                    <h2><span><?php echo $_SESSION['Name'];?></span></h2>
                                                    <div class="col-lg-6">
                                                        <h4 id="modal1Title"><?php echo $fol_wrks['work_title'];?></h4>
                                                        <p><?php echo $fol_wrks['work_description'];?></p>

                                                        <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>

                                                        <button type="submit"  data-remodal-action="confirm" class="remodal-confirm">OK</button>

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <img src="fb_users/<?php echo $usr_dis['Gender'];?>/<?php echo $usr_dis['Email'];?>/Projects/<?php echo $fol_wrks['work_image'];?>" style="min-height:250px;max-height:250px;min-width:250px;max-width:250px;"/>
                                                    </div>

                                                </div>
                                                <br>
                                                <br>&nbsp;





                                            </div>
                                            <!-- End Skill Model-->




                                            <?php
                                        }
                                        ?>




                                        <!-- <div class="folio_wrk_4">
                                             <div align="center" style="color:#fff; height:100px; padding-top:20px;">
                                                 <h3>click</h3>
                                             </div>
                                         </div>-->
                                    </div>
                                </div>
                            </div>




                            <!--work Model Begin-->
                            <div class="remodal" data-remodal-id="folio" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                                <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                                <form method="post" action="">
                                    <div>

                                        <h2><span><?php echo $_SESSION['Name'];?></span></h2>
                                        <div class="col-lg-12">
                                            <h4 id="modal1Title">WHO AM I</h4>
                                            <?php
                                            $foloi_exe=mysqli_query($conn,"select * from folio where user_id='$_SESSION[id]'");
                                            $folio=mysqli_fetch_array($foloi_exe);
                                            ?>
                                            <textarea cols="80" rows="3" style="resize:none" name="folio_desc" id="folio_desc"><?php echo $folio['description'];?></textarea>
                                        </div>


                                    </div>
                                    <br>

                                    <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>

                                    <button type="submit"  onClick="add_folio_desc();"  class="remodal-confirm">ADD</button>

                                </form>

                            </div>
                            <!-- End work Model-->

                            <!--Skill Model Begin-->
                            <div class="remodal" data-remodal-id="skill" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                                <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                                <form method="post" action="">
                                    <div>

                                        <h2><span><?php echo $_SESSION['Name'];?></span></h2>
                                        <div class="col-lg-12">
                                            <h4 id="modal1Title">My Skills</h4>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="skill_name" id="skill_name" placeholder="Skill Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="skill_rate" id="skill_rate" placeholder="Give Ur Own Rating ">
                                            </div>



                                        </div>


                                    </div>
                                    <br>

                                    <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>

                                    <button type="submit"  onClick="add_user_skill();" data-remodal-action="confirm" class="remodal-confirm">ADD SKILLS</button>

                                </form>

                            </div>
                            <!-- End Skill Model-->




                            <!--Work And Project Model Begin-->
                            <div class="remodal" data-remodal-id="user_work" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                                <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                                <form method="post" action="script_code.php" enctype="multipart/form-data">
                                    <div>

                                        <h2><span><?php echo $_SESSION['Name'];?></span></h2>
                                        <div class="col-lg-12">
                                            <h4 id="modal1Title">My Works And Projects</h4>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="project_name" id="project_name" placeholder="Project Name">
                                            </div>
                                            <div class="form-group">
                                                <textarea  class="form-control" rows="3" cols="80" name="project_desc" id="project_desc" placeholder="Project Description"> </textarea>
                                            </div>
                                            <div class="form-group">
                                                <input type="file" class="form-control" name="file" id="file" placeholder="Give Ur Own Rating ">
                                            </div>



                                        </div>


                                    </div>
                                    <br>

                                    <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>

                                    <button type="submit" name="add_work_projects"  class="remodal-confirm">ADD Projects</button>

                                </form>

                            </div>
                            <!-- End Work And Project Model-->




                            <!--------------------------------------END FOLIO----------------------------------------------->
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
         
     




        <!--Bookmark End-->
        <!--End todo Script-->
        <!-- /.container -->
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
        
        <script src="js/index.js"></script>
         
        <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
        
        
        
    </body>
</html>
