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
        <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->



        <meta name="description" content="">
        <meta name="author" content="">
        <title>LN.BUSINESS</title>
        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
       <!-- <link href="assets/css/non-responsive.css" rel="stylesheet">-->


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

  <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Pacifico'>
        <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
        <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
        <link rel="stylesheet" href="css/style.css">


        <!-- club member -->

        <script>
function members(str) {
    if (str == "") {
        document.getElementById("mamber-chat").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("mamber-chat").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getchat.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>

        <!-- end club member -->

        <!-- suggestions -->

        <script>
function suggest(str) {
    if (str == "") {
        document.getElementById("mamber-suggestions").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("mamber-suggestions").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","suggestion.php?s="+str,true);
        xmlhttp.send();
    }
}
</script>

<!-- end suggestions -->

        <!--REmodel Begin-->
        <!-- editor-->
         <!--   <script src="//cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>-->
          <script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
          <script src="http://cloud.tinymce.com/stable/tinymce.min.js?apiKey=3x8m7u6eu4r17en245q10ya3a0u7j7695z1elia7zhm2o1xk	"></script>
  <script>
  tinymce.init({
  selector: 'post_data',
  height: 200,
  statusbar: false,
  menubar: false,
  plugins: [
    'advlist autolink lists link image charmap  preview anchor',
    'searchreplace',
    'insertdatetime media '
  ],
  toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  content_css: '//www.tinymce.com/css/codepen.min.css'
});</script>
<!-- include libraries(jQuery, bootstrap) -->
<!-- include summernote css/js-->
<!--<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>-->

<!----------------------------------EDITOR------------------------------>
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
    <style type="text/css">
      .club1:hover{
        color: #000;
        text-decoration: none;
      }
      .club1{
        color: #000;
      }
    </style>
        <!--End Remodel-->
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Stencil+Std" />
     <style>
	 @import url(//db.onlinewebfonts.com/c/93c4327f0457b01d13b376849536395d?family=Stencil+Std);#3 Use font-face declaration Fonts.(http | https)@font-face {font-family: "Stencil Std";
    src: url("//db.onlinewebfonts.com/t/93c4327f0457b01d13b376849536395d.eot");
    src: url("//db.onlinewebfonts.com/t/93c4327f0457b01d13b376849536395d.eot?#iefix") format("embedded-opentype"),
    url("//db.onlinewebfonts.com/t/93c4327f0457b01d13b376849536395d.woff2") format("woff2"),
    url("//db.onlinewebfonts.com/t/93c4327f0457b01d13b376849536395d.woff") format("woff"),
    url("//db.onlinewebfonts.com/t/93c4327f0457b01d13b376849536395d.ttf") format("truetype"),
    url("//db.onlinewebfonts.com/t/93c4327f0457b01d13b376849536395d.svg#Stencil Std") format("svg");
}


font-face {
        font-family: "Lato Black";
        src: url('698242188-Lato-Bla.eot');
        src: url('698242188-Lato-Bla.eot?#iefix') format('embedded-opentype'),
        url('698242188-Lato-Bla.svg#Lato Black') format('svg'),
        url('698242188-Lato-Bla.woff') format('woff'),
        url('698242188-Lato-Bla.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
}
	 </style>

<script type="text/javascript">
function on_profile_hover()
{
	document.getElementById("change_user_ppic").style.display='block';
}

function out_profile_hover()
{
	document.getElementById("change_user_ppic").style.display='none';
}

function dis_cover_pic_edit()
{
	document.getElementById("edit_cover_button").style.display='block';
}

function out_cover_pic_edit()
{
	document.getElementById("edit_cover_button").style.display='none';
}
function change_activetab()
{
	document.getElementById('act_tbw21').style.display='block';
	document.getElementById('act_tbw22').style.display='none';
	document.getElementById('act_tab11').style.display='none';
	document.getElementById('act_tab12').style.display='block';
}

function change_activetab11()
{
	document.getElementById('act_tbw21').style.display='none';
	document.getElementById('act_tbw22').style.display='block';
	document.getElementById('act_tab11').style.display='block';
	document.getElementById('act_tab12').style.display='none';
}
function club_tab8()
{
	document.getElementById('club_tab11').style.display='block';
	document.getElementById('club_tab12').style.display='none';
	document.getElementById('clubingb_tab21').style.display='none';
	document.getElementById('clubingb_tab22').style.display='block';
	document.getElementById('clubtagme_tab31').style.display='none';
	document.getElementById('clubtagme_tab32').style.display='block';
	document.getElementById('clubtag_tab41').style.display='none';
	document.getElementById('clubtag_tab42').style.display='block';
	document.getElementById('clubsettings_tab51').style.display='none';
	document.getElementById('clubsettings_tab52').style.display='block';
}
function clubbind_tab9()
{
	document.getElementById('club_tab11').style.display='none';
	document.getElementById('club_tab12').style.display='block';
	document.getElementById('clubingb_tab21').style.display='block';
	document.getElementById('clubingb_tab22').style.display='none';
	document.getElementById('clubtagme_tab31').style.display='none';
	document.getElementById('clubtagme_tab32').style.display='block';
	document.getElementById('clubtag_tab41').style.display='none';
	document.getElementById('clubtag_tab42').style.display='block';
	document.getElementById('clubsettings_tab51').style.display='none';
	document.getElementById('clubsettings_tab52').style.display='block';
}
function tagme_tab10()
{
	document.getElementById('club_tab11').style.display='none';
	document.getElementById('club_tab12').style.display='block';
	document.getElementById('clubingb_tab21').style.display='none';
	document.getElementById('clubingb_tab22').style.display='block';
	document.getElementById('clubtagme_tab31').style.display='block';
	document.getElementById('clubtagme_tab32').style.display='none';
	document.getElementById('clubtag_tab41').style.display='none';
	document.getElementById('clubtag_tab42').style.display='block';
	document.getElementById('clubsettings_tab51').style.display='none';
	document.getElementById('clubsettings_tab52').style.display='block';
}
function tag_tab11()
{
	document.getElementById('club_tab11').style.display='none';
	document.getElementById('club_tab12').style.display='block';
	document.getElementById('clubingb_tab21').style.display='none';
	document.getElementById('clubingb_tab22').style.display='block';
	document.getElementById('clubtagme_tab31').style.display='none';
	document.getElementById('clubtagme_tab32').style.display='block';
	document.getElementById('clubtag_tab41').style.display='block';
	document.getElementById('clubtag_tab42').style.display='none';
	document.getElementById('clubsettings_tab51').style.display='none';
	document.getElementById('clubsettings_tab52').style.display='block';
}
function settigs_tab12()
{
	document.getElementById('club_tab11').style.display='none';
	document.getElementById('club_tab12').style.display='block';
	document.getElementById('clubingb_tab21').style.display='none';
	document.getElementById('clubingb_tab22').style.display='block';
	document.getElementById('clubtagme_tab31').style.display='none';
	document.getElementById('clubtagme_tab32').style.display='block';
	document.getElementById('clubtag_tab41').style.display='none';
	document.getElementById('clubtag_tab42').style.display='block';
	document.getElementById('clubsettings_tab51').style.display='block';
	document.getElementById('clubsettings_tab52').style.display='none';
}
</script>

      <script type="text/javascript" src="js/scripts.js"></script>
      <link rel="stylesheet" href="../preloaders/css3-preloader-transition-finish/css/main.css">
	<script src="../preloaders/css3-preloader-transition-finish/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body class="paper">
    <?php
    if($_SESSION['sess_count']==0)
	{
		++$_SESSION['sess_count'];
	?>
    <!-- <div id="loader-wrapper" >
			<div id="loader" ></div>

			<div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

   </div> -->
   <?php
	}
   ?>
    <?php
$user_det=mysqli_query($conn,"select * from users where user_id='$_SESSION[id]'");
$usr_dis=mysqli_fetch_array($user_det);
$get_user_ppic_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$_SESSION[id]'");
$fet_ppic=mysqli_fetch_array($get_user_ppic_exe);
$user_personal_dets_exe=mysqli_query($conn,"select * from user_info where user_id='$_SESSION[id]'");
$fet_info=mysqli_fetch_array($user_personal_dets_exe);
$from_count=0;
?>
<nav class="navbar navbar-inverse navbar-fixed-top " style="height:10%;">
						<div class="container">
								<div class="navbar-header ">
										<!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
										</button> -->
										<a class="navbar-brand" href="#" style="font-family:Stencil Std;color: #808080;">
		LN BUSINESS</a>
								</div>
								<div id="navbar" class="collapse navbar-collapse">
										<ul class="nav navbar-nav">

												<li style=" padding-left:30px; padding-top:10px; padding-right:100px; ">
													<div style="background-color:#808080;padding-right:5px;">
														<input type="text" style="width:350px; height:30px;background-color:#808080; border:0px; color:#fff;margin-left:5px;">
														<i class="fa  fa-2x fa-search" style="color:#fff; padding-top:5px;"></i>
												</div>
												</li>
												<li>
													<i class="fa fa-2x fa-id-card " style="padding-left:0px; padding-right:25px; margin-top:15px;"></i>
												</li>
												<li >
														<a href="#" style="font-family:Stencil Std; font-size:24px; padding-left:25px; padding-right:25px; color: #808080;">F</a>
												</li>
												<li>
														<a href="#about" style="font-family:Stencil Std; font-size:24px; padding-left:25px; padding-right:25px; color: #808080;">M</a>
												</li>
																							 <li style="height:50px;line-height:13px;padding-top:3px;">
														<p class="diary" style="padding-top:0px; padding-left:50px;color:#808080">
															<span class="day" style="font-family:Stencil Std; font-size:10px;">friday</span>
															<br>
															<span class="month" style="font-family:Stencil Std; font-size:10px;">March</span>
															<br>
															<span class="year" style="font-family:Stencil Std; font-size:10px;">2017</span></p>
												</li>
												<li style="height:50px;">
														<!--<hr style="width:0px; height:10px;" class="vertical" />-->
														<div style="border-left:2px solid #d3d3d3;margin-top:6px; margin-left:4px; margin-right:4px;height:40px;" class="line_div">
</div>
												</li>
												<li style="height:50px; float:right;">
														<span class="date" style="font-family:Stencil Std; font-size:40px; padding-top:5px; padding-right:10px;color:#808080;">31</span>
												</li>
										</ul>
								</div>
								<!--/.nav-collapse -->
						</div>
				</nav>
        <div class="container " style="width:100%;">
        <div class="container " style=" padding-top: 30px;">
            <div class="row">

                <div class="col-lg-12 col-md-12">

                <div class="col-lg-12 col-md-12  ">

                    <div class="tab-content">
                        <div class="tab-pane active" id="workspace-vr">
                            <ul class="nav nav-tabs centered " id="id_hover"style="margin-left:50%;">
    <li class="active tab_border tab_trans">
        <!-- <a href="#tab6" data-toggle="tab" onClick="return change_activetab11();">
            <img id="act_tab11" src="images/others/s_n_2.png" width="70" />
             <img id="act_tab12" style="display:none" src="images/others/s_n_1.png" width="70" />
            <h5 style="text-align:center; position:absolute; top:45px; left:45px;font-size:12px; color:#5a5a5a">
            Work</h5>
        </a> -->
				<a href="#tab6" data-toggle="tab"> Work</a>
    </li>
    <li class="hover_li tab_trans">
        <!-- <a href="#tab7" data-toggle="tab" onClick="return change_activetab();">
            <img id="act_tbw21" src="images/others/s_n_2.png" width="70" style="display:none;"/>
             <img id="act_tbw22" src="images/others/s_n_1.png" width="70" />
            <h5 style="text-align:center; position:absolute; top:45px; left:40px;font-size:12px; color:#5a5a5a">
            Space</h5>
        </a> -->
				<a href="#tab7" data-toggle="tab"> Space</a>
    </li>
    <!-- <li>
        <a href="#tab8" data-toggle="tab">Messages</a>
    </li>
    <li>
        <a href="#tab9" data-toggle="tab">Settings</a>
    </li>     -->
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
                                                        <span id="test" class="todo_right "><a href="#" id="check" onclick="return Check()"><i class="fa fa-check-square-o "></i></a></span>

                                                       <span class=" todo_right">
                                                       <select class="selectpicker col-md-12 form-control" name="todo_type" id="todo_type" onChange="return getodotype(this.value);">
                                                       <option>Select Todo Type</option>
                                                                    <option>CONSIGNMENTS</option>
                                                                    <option>MEETINGS</option>
                                                                    <option>CALL</option>
                                                                </select></span>
                                                    </div>
                                                    <div id="todo_tasks_refresh">
                                                    <div class="panel-content" id="screen">
                                                        <form>
                                                            <fieldset>
                                                                <ul class="tasks">
                                                                    <?php
                                                                    $td_cu=0;
                                                                    $tdl=mysqli_query($conn,"select * from todo_insertions where todo_status='0' AND todo_user_id='".$_SESSION['id']."'");
                                                                    while($ret_td=mysqli_fetch_array($tdl))
                                                                    {
                                                                        ++$td_cu;
                                                                        ?>
                                                                        <li class="task">
                                                                            <?php if($ret_td['todo_status']==0)
                                                                            {

                                                                                ?>
                                                                                <input type="checkbox" name="todo-tasks" id="task<?php echo $td_cu;?>" value="<?php echo $ret_td['todo_id'];?>"   onClick="return change_to(this.value);"/>
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
                                                        <form method="post">
                                                            <fieldset>
                                                                <ul class="tasks">
                                                                    <?php
                                                                    $td_cu=0;
                                                                    $tdl=mysqli_query($conn,"select * from todo_insertions where todo_status='1' AND todo_user_id='".$_SESSION['id']."'");
                                                                    while($ret_td=mysqli_fetch_array($tdl))
                                                                    {
                                                                        ++$td_cu;
                                                                        ?>
                                                                        <li class="task">
                                                                            <?php if($ret_td['todo_status']!=0)
                                                                            {

                                                                                ?>
                                                                                <input type="checkbox" name="todo-tasks" id="task<?php echo $td_cu;?>" checked="checked"  value="<?php echo $ret_td['todo_id'];?>"  onClick="return changestatus(this.value);"/>
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
                                            </div>
                                            <a href="#" class="ws_ta_tab_a"><i class="fa fa-comments"></i> LEDGER</a>
                                            <div class="sub-nav">
                                                <div class="w_todo td_div">
                                                    <span class="todo_right"><a href="#modal1" > <i class="fa fa-plus "></i></a></span>
                                                    <span class="todo_right " ><a href="#"><i class="fa fa-id-card"></i></a></span>

                                                </div>
                                                <div class="html chat">
                                                <div id="ledger_tbl" style="height:250px; overflow-y:scroll;">
                                                    <table class="dynamicTable scrollVertical table table-primary " >
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
                                                        $led_de=mysqli_query($conn,"select * from user_ledger where user_id='".$_SESSION['id']."' order by ledger_id desc");
                                                        while($led_ret=mysqli_fetch_array($led_de))
                                                        {
                                                            ?>
                                                            <!-- Table row -->
                                                            <tr class="gradeX">
                                                                <td><?php echo $led_ret['date'];?></td>
                                                                <td><?php echo $led_ret['led_reason'];?></td>
                                                                <td>
																<?php
																if($led_ret['debit']==0)
																{
																	echo "-";
																}else
																{
																	echo $led_ret['debit'];
																}
																?>

                                                                </td>
                                                                <td class="center">
																<?php
																if($led_ret['credit']==0)
																{
																	echo "-";
																}else
																{
																 echo $led_ret['credit'];
																}
																 ?>
                                                                </td>
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
                                             <div class="w_todo td_div">
                                                    <span class="todo_right"><a href="#clientsmodel" > <i class="fa fa-plus "></i></a></span>
                                                    <span class="todo_right " ><a href="#csv_upload"><i class="fa fa-upload"></i></a></span>
                                                    <span class="todo_right " ><a href="#"><i class="fa fa-id-card"></i></a></span>

                                                </div>
                                                <div class="html chat" id="todo_clients" style="height:250px; overflow-y:scroll;">
                                                <?php
                                                if(!empty($_GET['status'])){
    switch($_GET['status']){
        case 'succ':
            $statusMsgClass = 'alert-success';
            $statusMsg = 'Members data has been inserted successfully.';
            break;
        case 'err':
            $statusMsgClass = 'alert-danger';
            $statusMsg = 'Some problem occurred, please try again.';
            break;
        case 'invalid_file':
            $statusMsgClass = 'alert-danger';
            $statusMsg = 'Please upload a valid CSV file.';
            break;
        default:
            $statusMsgClass = '';
            $statusMsg = '';
    }
}
												?>
                                                    <table class="dynamicTable scrollVertical table table-primary " style="height:20px; overflow-y:scroll;">
                                                        <!-- Table heading -->
                                                        <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Company</th>
                                                            <th>Phone No</th>
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
												<!--script_code.php-->
                                            <form class="form-horizontal"  method="post" action="">
                                                <div>

                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">TITLE</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="todo_title" name="todo_title" placeholder="TITLE" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Date</label>
                                                        <div class="col-sm-10">
															<?php
                                                            $tododate=date('Y-m-d h:i');
															?>
                                                            <input type="text" class="form-control" id="todo_date" value="<?php echo $tododate;?>" name="todo_date" placeholder="Date" name="todo_date">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="type" class="col-sm-2 control-label">TYPE</label>
                                                        <div class="col-sm-10">
                                                            <div class="row">
                                                                <select class="selectpicker col-md-12 form-control" name="todo_type" id="todo_type" required>
                                                                    <option>CONSIGNMENTS</option>
                                                                    <option>MEETINGS</option>
                                                                    <option>CALL</option>
                                                                </select>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="contact" class="col-sm-2 control-label">Clients</label>
                                                        <div class="col-sm-10">
                                                            <div class="row">
                                                                <select class="selectpicker col-md-12 form-control" name="todo_contacts" id="todo_contacts" required>
                                                                    <option value="">Select Client</option>
                                                                    <?php
                                                                    $get_clients_data=mysqli_query($conn,"select * from user_clients where user_id='$_SESSION[id]'");
																	while($client_ret=mysqli_fetch_array($get_clients_data))
																	{

																	?>
                                                                    <option value="<?php echo $client_ret['client_name'];?>"><?php echo $client_ret['client_name'];?></option>
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
                                                <!-- data-remodal-action="confirm"-->
                                           <button type="submit"  data-remodal-action="confirm"  name="todo_insert" onClick="return todoinsertions();"  class="remodal-confirm">INK</button>

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
                                                            <?php
                                                            $led_cur_date=date('Y-m-d');
															?>
                                                            <input type="text" class="form-control" id="led_cur_date" placeholder="" value="<?php echo $led_cur_date;?>" name="led_cur_date" readonly/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Details</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="led_details" onFocus="return show_credit_debit();" placeholder="" name="led_details" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group" id="ledger_credit">
                                                        <label class="col-sm-2 control-label">Credit</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="led_credit" placeholder="" name="led_credit" onFocus="return disable_debit();" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group" id="ledger_debit">
                                                        <label class="col-sm-2 control-label">Debit</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="led_debit" onFocus="return diable_credit();" placeholder="" name="led_debit" >
                                                        </div>
                                                    </div>







                                                </div>
                                                <br>

                                                <button  data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
                                                <button type="submit" data-remodal-action="confirm" onClick="ledger_insert();" class="remodal-confirm">Credit Or Debit</button>

                                            </form>
                                        </div>


                                        <!--Ledger End MOdel-->


                                        <!---------------------------Clients Normal insertion model--------------------------->

                                           <div class="remodal" data-remodal-id="clientsmodel" id="clientsmodel" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                                            <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                                            <form class="form-horizontal" role="form" method="post" action="">
                                                <div>

                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Name</label>
                                                        <div class="col-sm-10">

                                                            <input type="text" class="form-control" id="client_name" placeholder=""  name="client_name"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Company</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="client_company" placeholder="" name="client_company">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Phone No</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="client_phone_no" placeholder="" name="client_phone_no">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Details</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="client_details" placeholder="" name="client_details">
                                                        </div>
                                                    </div>







                                                </div>
                                                <br>

                                                <button  data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
                                                <button type="submit" data-remodal-action="confirm" onClick="return clientinsertions();" class="remodal-confirm">Client Data</button>

                                            </form>
                                        </div>

                                        <!--------------------------------END clients Model------------------------------------>
                                        <!-------BEGIn client csv upload--------------------->

                                           <div class="remodal" data-remodal-id="csv_upload" id="csv_upload" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                                            <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                                            <form class="form-horizontal" role="form" action="script_code.php" method="post" enctype="multipart/form-data" id="importFrm">
                                                <div>

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Upload CSV File</label>
                                                        <div class="col-sm-9">

                                                            <input type="file" class="form-control" id="client_csv" placeholder=""  name="client_csv"/>
                                                        </div>
                                                    </div>


                                                </div>
                                                <br>

                                                <button  data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
                                                <!--onClick="return clientcsvupload();" data-remodal-action="confirm"-->
                                                <button type="submit"  name="csv_uploaddata" class="remodal-confirm">Client Data</button>

                                            </form>
                                        </div>


                                        <!------------End csv upload clients------------------>

                                        <!-----------------------------END WORK-------------------------------------------------->
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab7">
                                    <!-----------------------------------------SPACE BEGIN----------------------------------------->

                                    <div class="row pst_box " style="background-color:#fff; height:550px">
                                    <br>
																		<!-- disscussions	 -->

																	                                        <div class="col-lg-6 col-md-6">
																	                                            <br>
																																							<div align="center" style="background:#808080;height:40px;margin-top:5px;padding-top:1px; color:#fff"><h4> DISSCUSSION THREAD</h4> </div>
																	                                            <!-- <h4 class="club_headers">DISSCUSSION THREAD </h4> -->
																	                                            <form method="post" action="" id="form_dis_sub">
																	                                                <input type="hidden" name="dis_company" id="dis_company" value="<?php echo $usr_dis['company']?>">
																	                                                <!--maxlength="161"-->
																	                                          <input type="text"  placeholder="INK... (160 characters only..)" class="club_txt" name="disscussion_topic" id="disscussion_topic" style="margin-top:5px;margin-bottom:5px;">
																	                                          <!--  -->
																	                                                <input type="submit" name="dis_sub"  id="dis_sub" onClick="return space_disscussion();" style="display:none;">
																	                                            </form>
																	                                            <div align="left" id="discu_valid" style="display:none;color:red;margin-left:15px;">The Length Must be 160 Charecters only</div>
																	                                            <br>
																	                                            <div class="club_network" style="height:350px; background-color:#eee;">
																	                                            <div id="club_discuss">
																	                                                <?php
																	                                                $twity_exe=mysqli_query($conn,"select * from company_discussions where company='$usr_dis[company]' order by dscussion_id desc");
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
																	                                                            <?php
																																if($twity_pic['image']!='')
																																{
																																?>
																	                                                                <img src="fb_users/<?php echo $twity_det['Gender']?>/<?php echo $twity_det['Email'];?>/Profile/<?php echo $twity_pic['image'];?>" width="70">
																	                                                                <?php
																																}else
																																{
																																	?>
																	                                                             <img src="images/profile/sq.PNG" width="70"/>
																	                                                                <?php
																																}
																																	?>
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
																																					<!-- discussion end -->
<!-- company info -->
<div class="col-lg-6 col-md-6">


                                        <div class="col-lg-12" style="border-bottom:1px dashed #afdf7c;">
                                            <div class="col-lg-12" tyle="padding:0px;">
																							<div align="center" style="background:#808080;height:40px;margin-top:5px;padding-top:1px; color:#fff"><h4>  COMPANY INFO</h4> </div>
                                                <!-- <h4 class="club_headers" style="margin:0px;float:left;">
                                                    COMPANY INFO </h4> -->
																										<a href="#Your_role" class="icon" style="float:left;margin-left:10px;"> <i class="fa fa-pencil icon"></i></a>
                                                <br>
																								<div class="col-lg-10 col-md-10">


                                                <p id="role" style="font-family:lato-light; color:#a9a9a9;">
                                                <?php
												$get_user_role=mysqli_query($conn,"select * from user_info where user_id='$_SESSION[id]'");
												$rolie=mysqli_fetch_array($get_user_role);
												?>
                                                    <?php echo $rolie['company_role_info']; ?></p>
																										</div>
                                            </div>
                                            <div class="col-lg-2" style="padding:0px;">
                                                <img src="images/profile/logo.jpg" width="80" />
                                            </div>
                                        </div>
                                        <br>
	<!-- colleagues																			 -->
                                        <div class="col-lg-12" style="border-bottom:1px dashed #afdf7c;">
                                            <br>
																						<div align="center" style="background:#808080;height:40px;margin-top:5px;padding-top:1px; color:#fff"><h4>COLLEAGUES</h4> </div>
                                            <!-- <h4 class="club_headers" style="margin:0px;">
                                                COLLEAGUES </h4> -->
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

                                                        <div style="width:150px; height:190px;" align="center" id="c_hs">

                                                        <?php
                                                        if($colle_pic['image']!='')
														{
														?>
                                                            <img src="fb_users/<?php echo $colle['Gender']?>/<?php echo $colle['Email']?>/Profile/<?php echo $colle_pic['image'];?>" width="120" height="90" style="border-radius:50%; padding-left:3px; padding-top:3px;" alt="" />
                                                            <?php
														}else
														{
															?>
                                                            <img src="images/profile/sq.PNG" width="120" height="90" style="border-radius:50%; padding-left:3px; padding-top:3px;" alt=""/>
                                                            <?php
														}
															?>
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


                                            </div>
                                            <br>
                                        </div>
																				</div>

                                    </div>

                                    <!----------users Company Role begin------------------>



                                           <div class="remodal" data-remodal-id="Your_role" id="Your_role" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                                            <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                                            <form class="form-horizontal" role="form" action="" method="post" id="importFrm">
                                                <div>

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Your Role</label>
                                                        <div class="col-sm-9">

                                                            <textarea  class="form-control" id="user_role" placeholder=""  name="user_role"><?php echo $fet_info['company_role_info'];?></textarea>
                                                        </div>
                                                    </div>


                                                </div>
                                                <br>

                                                <button  data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
                                                <!--data-remodal-action="confirm"-->
                                                <button type="submit" data-remodal-action="confirm" name="comp_role" onClick="return rlioncopmrole();"  class="remodal-confirm">Info</button>

                                            </form>
                                        </div>




									<!--END users role-->
                                    <!--END SPACE-->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="club-vr">
                            <div class="pst_main_background pst_box " align="center" style="background-color:#fff; z-index:-1;margin-top: 25px;">
                            <div id="club_login">
                            <?php
							$ckuic_exe=mysqli_query($conn,"select * from club_signup where user_id='$_SESSION[id]'");
							$ck_cyt=mysqli_num_rows($ckuic_exe);
							if($ck_cyt==0)
							{

								?>
                                <div class="pst_main_background pst_box " align="center" style="background-color:#fff;height:300px;">
                                <h2 style="color:#4D1B1B;margin-top:90px;">Hello <?php echo $_SESSION['Name'];?></h2>
                                <h4>Please Join Club</h4>
                                </div>
                                <?php
							}
							else if(!$_SESSION['club_id'])
							{
                                ?>
                                <!----------------------------------CLUB LOGIN BEGIN---------------------------------->

                                <div class="pst_main_background  " align="center" style="background-color:#fff;">
                                    <br>
                                    <h3 style="color:#afdf7c; text-align:center;">Club Login</h3>
                                    <br>
                                    <div class="club_login_wid">
                                    <!--script_code.php-->
                                        <form class="form-horizontal" method="post" action="" >
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="club_user_name" id="club_user_name" placeholder=" Enter Club Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="club_pwd" id="club_pwd" placeholder=" Password" >
                                            </div>
                                          <!--return lnb_club() -->
                                            <input type="submit" name="club_login" id="club_login" onclick="return lnb_club()" value="Submit"  class="btn btn_grn">
                                        </form>
                                    </div>
                                    <br>
                                    <br>

								</div>
                               <!-- END CLUB LOGIN-->
                                <?php
							}else
							{
							?>
                            <div id="club_login_acce">
                            <div class="club_sub_div_height">
                                    <ul class="nav nav-tabs">
                                        <li class="active">

                                            <a href="#tab8" data-toggle="tab">Club Sheet</a>
                                             <!-- <img id="club_tab11" src="images/others/s_n_2.png" width="70" />
                                             <img id="club_tab12" style="display:none" src="images/others/s_n_1.png" width="70" /> -->
                                              <!--<h5 style="text-align:center; position:absolute; top:45px; left:45px;font-size:12px; color:#5a5a5a">Club Sheet</h5></a>-->
                                        </li>
                                        <li class="hover_li">
                                            <a href="#tab9" data-toggle="tab" >Clubbing</a>
                                            <!-- <img id="clubingb_tab21" style="display:none" src="images/others/s_n_2.png" width="70" />
                                            <img id="clubingb_tab22"  src="images/others/s_n_1.png" width="70" /> -->
                                           <!-- <h5 style="text-align:center; position:absolute; top:45px; left:45px;font-size:12px; color:#5a5a5a">Clubbing</h5>
                                             </a>-->
                                        </li>
                                        <li class="hover_li">
                                            <a href="#tab10" data-toggle="tab" >Suggestions</a>
                                            <!-- <img id="clubtagme_tab31" style="display:none" src="images/others/s_n_2.png" width="70" />
                                            <img id="clubtagme_tab32"  src="images/others/s_n_1.png" width="70" /> -->
                                            <!--<h5 style="text-align:center; position:absolute; top:45px; left:45px;font-size:12px; color:#5a5a5a">Tag Me</h5>
                                             </a>-->
                                        </li>
                                        <li class="hover_li">
                                            <a href="#tab11" data-toggle="tab" >Tags		</a>
                                            <!-- <img id="clubtag_tab41" style="display:none" src="images/others/s_n_2.png" width="70" />
                                            <img id="clubtag_tab42"  src="images/others/s_n_1.png" width="70" /> -->
                                            <!--<h5 style="text-align:center; position:absolute; top:45px; left:45px;font-size:12px; color:#5a5a5a">Tag</h5>
                                             </a>-->


																			  </li>

                                        <li class="hover_li">
                                            <!-- <a href="#tab12" data-toggle="tab" onClick="return settigs_tab12();"> -->
                                            <!-- <img id="clubsettings_tab51" style="display:none" src="images/others/s_n_2.png" width="70" />
                                            <img id="clubsettings_tab52"  src="images/others/s_n_1.png" width="70" /> -->
                                            <!-- <h5 style="text-align:center; position:absolute; top:45px; left:45px;font-size:12px; color:#5a5a5a">Settings</h5> -->
                                             <!-- </a> -->

                                            <a href="#tab12" data-toggle="tab" >Settings</a>

																						<!-- <a href="#tab12" data-toggle="tab" >Settings</a> -->

                                        </li>

                                         <a href="club_logout.php" style="on-hover:#AFDF7C;" ><i style="margin-top:15px;" class="fa fa-sign-out icon"></i></a>


                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab8">



                                                                  <!--club sheet BEGIN-->


<div class="row" style="height: 520px;
    border: 2px solid #808080;
    margin: 10px;overflow-y: scroll;">



																						<div class="col-lg-2 grow" align="center" style="
    padding: 10px;
    margin: 10px;
    margin-top: 20px;
">
                                                <div>

                                                    <h4 class="club_headers">
                                                        CLUB ID # 1<?php echo $_SESSION['club_id']?></h4>
                                                    <div class="col-lg-12 club_txtbox" style="padding-left:0px; padding-right:10px;paddin-top:0px;margin-top:0px;">
                                                        <?php
                                                        $sug_date=date('Y-m-d');
                                                        ?>
                                                        <form method="post" action="">
                                                        <!--maxlength="160"-->

                                                            <input type="text" placeholder="Tag Me To (160 Characters only..)"  class="club_txt" id="suggest_me_to">
                                                            <input type="hidden" name="sug_usrt_id" id="sug_usrt_id" value="<?php echo $_SESSION['id'];?>"/>
                                                            <input type="hidden" name="sug_date" id="sug_date" value="<?php echo $sug_date;?>">

                                                            <input type="submit" name="sug_sub" style="display:none;" onClick="return ins_suggest();" />
                                                        </form>
                                                        <div align="left" id="sugg_valid" style="display:none;color:red;margin-left:15px;">The Length Must Be 160 Characters Only</div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row" style="margin-top:30px;">
                                                    <br>
                                                    <h3 class="club_headers" style="float:left;">
                                                        <?php echo $_SESSION['Name']?> Gen</h3><a href="#user_club_info" class="icon" style="float:left;margin-left:10px;margin-top:15px;"> <i class="fa fa-pencil icon"></i></a>
                                                    <div class="col-lg-12 club_txtbox" style="padding-left:0px; padding-right:10px; background-color:#eee;">
                                                        <!--<textarea class="form-control txt" rows="1" style="height:35px;"></textarea>-->
                                                        <p id="user_pinoo" class="club_info"><?php echo $usr_dis['description'];?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="connect_suggestion">
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

                                                    <div class="col-lg-2 grow" align="center" style="
    padding: 10px;
    margin: 10px;

">
													<div class="row">
                                                    <div class="col-md-3" align="left" style="margin-left: -5px;">
                                                    <?php
                                                            if($gclb_uspi['image']!='')
															{
															?>

                                                        <img src="fb_users/<?php echo $fet_mem_de['Gender']?>/<?php echo $fet_mem_de['Email']?>/Profile/<?php echo $gclb_uspi['image']?>" style="width: 55px;">
                                                        <?php
															}else
															{
														?>
                                                        <img src="images/profile/sq.PNG" width="50" style="margin-top:5px;">
                                                        <?php
															}
														?>
                                                    </div>
                                                    <div class="col-md-9" style="    text-align: initial;
    font-size: 12px;
    line-height: 13px;margin-left: 5px;">
                                                  
                                                        <span>   <b><?php echo $fet_mem_de['industry'];?></b><br>

                                                        <?php echo $fet_mem_de['Name'];?>
                                                        <br>
                                                        <?php echo $fet_mem_de['designation']?>-<?php echo $fet_mem_de['company'];?>
                                                        <br>
                                                        <?php echo $fet_mem_de['industry'];?></span>
                                                    </div>
                                                    <div class="col-md-12" align="center">
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
                                                                    <span><a href="#" class="btn btn_grn" onClick="return disconnect_suggest(<?php echo $fet_mem_de['user_id'];?>,<?php echo $get_ur_sugg['suggest_topic_id'];?>);" >Connected</a></span>

                                                                </form>
                                                                <?php
                                                            }else
                                                            {

                                                                ?>

                                                                <span><a href="#" class="btn btn_grn" onClick="return connect_suggest(<?php echo $fet_mem_de['user_id'];?>,<?php echo $get_ur_sugg['suggest_topic_id'];?>);" >Connect</a></span>


                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                    </div>
                                                    <div class="col-md-12" style="text-align: justify;">
                                                     <p><?php echo $fet_mem_de['description'];?></p>
                                                     </div>
                                                    </div>

                                                            <?php /*?><?php
                                                            if($gclb_uspi['image']!='')
															{
															?>

                                                        <img src="fb_users/<?php echo $fet_mem_de['Gender']?>/<?php echo $fet_mem_de['Email']?>/Profile/<?php echo $gclb_uspi['image']?>" width="70" style="margin-top:5px;">
                                                        <?php
															}else
															{
														?>
                                                        <img src="images/profile/sq.PNG" width="70" style="margin-top:5px;">
                                                        <?php
															}
														?><?php */?>




                                                    </div>
                                                    <?php
                                                }
                                                ?>
                                                </div>
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



                                            </div>

                                               <!----------users club info begin model------------------>



                                           <div class="remodal" data-remodal-id="user_club_info" id="user_club_info" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                                            <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                                            <form class="form-horizontal" role="form" action="" method="post" >
                                                <div>

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Personal Description</label>
                                                        <div class="col-sm-9">

                                                            <textarea  class="form-control" id="user_pers_desc" placeholder="" rows="3" cols="90" style="resize:none;" name="user_pers_desc"><?php echo $usr_dis['description'];?></textarea>
                                                        </div>
                                                    </div>


                                                </div>
                                                <br>

                                                <button  data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
                                                <!--data-remodal-action="confirm"-->
                                                <button type="submit" data-remodal-action="confirm" name="comp_role" onClick="return user_persdo_descbhg();"  class="remodal-confirm">Ur Info</button>

                                            </form>
                                        </div>
                                        

</div>


									<!-----------------END users club info moddel----------------------->



                               <!------------------------------------------END CLUB SHEET-------------------------------------------->
                                        </div>
                                        <div class="tab-pane" id="tab9">
                                                                       <!--BEGIN networking-->

																					  <div class="row" >
    <div class="col-md-9" style=" border: 2px solid #7c7c7c;margin-top: 10px;height: 495px;">
    
                                            <br>
                                            <div class="club_suggest_top_di row col-md-12" align="center" style="margin-top:-15px">
                                            <div align="center" style="background:#808080;height:40px;margin-top:5px;padding-top:1px; color:#fff;        margin-left: -48px;
    width: 1120px;"><h4>CLUBBING</h4> </div>
                                                </div>
                                                <div class="col-md-12" >
                                                 <div id="club_networks">
                                            <div class="club_network" style="height: 385px;background-color:#fff" id="mamber-chat">
                                                <?php
                                                $group_chat_exe=mysqli_query($conn,"select * from group_chat order by chat_id desc");
                                                while($grp_ct=mysqli_fetch_array($group_chat_exe))
                                                {
                                                    $gp_us_pp_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$grp_ct[user_id]'");
                                                    $gp_ppic=mysqli_fetch_array($gp_us_pp_exe);
                                                    $gp_user_details_exe=mysqli_query($conn,"select * from users where user_id='$grp_ct[user_id]'");
                                                    $gp_det=mysqli_fetch_array($gp_user_details_exe);

                                                    ?>
                                                    <div class="col-lg-12" style="border-bottom:1px solid #000;padding-left:0px;	">
                                                        <div class="col-lg-2 row club_network_row" style="padding-left:0px;padding-right:0px; width:80px; ">
                                                            <div class="col-lg-4" align="left" style="padding-left:3px;padding-right:0px; width:80px;">
                                                            <?php
                                                            if($gp_ppic['image']!='')
															{
															?>
                                                                <img src="fb_users/<?php echo $gp_det['Gender'];?>/<?php echo $gp_det['Email'];?>/Profile/<?php echo $gp_ppic['image'];?>" width="50" height="80">
                                                                <?php
															}else
															{
																?>
                                                             <img src="images/profile/sq.PNG" width="80"/>
                                                                <?php
															}
																?>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-10 club_msg_shape" style=" height:80px; background-color:#fff; padding-right:0px;" align="left">
                                                        <span style="text-align:right; color:#000;font-size:10px;">
    <?php echo $gp_det['Name'];?> / <?php echo $gp_det['company']?> / <?php echo $gp_det['industry'];?> </span>
                                                            <span class="pull-right" style="text-align:right; color:#808080;font-size:10px;"><?php echo $grp_ct['time'];?> </span>
                                                            <p style="color:#808080"> <?php echo $grp_ct['chat_txt'];?></p>
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
                                            </div>
                                                </div>

                                                <div class="col-md-12" style="margin-top: -20px;">
                                                <form method="post"  action="">
                                            <!--maxlength="160"-->
                                                <input type="text" placeholder="Let's Network (160 characters only..)"  class="club_txt" name="chat_txt" id="chat_txt">
                                                <?php
                                                $msg_date=date("Y-m-d h:i");
                                                ?>
                                                <input type="hidden" name="msg_time_date" id="msg_time_date" value="<?php echo $msg_date;?>"/>
                                                <input type="hidden" name="msg_user_id" id="msg_user_id" value="<?php echo $_SESSION['id']?>">
                                                <input type="submit" style="display:none;" name="Message_send" onClick="return inse_msg();"/>
                                            </form>
                                            <div align="left" id="network_valid" style="display:none;color:red;font-weight:bold;margin-left:15px;">Message Length Must Be 160 Characters Only</div>
                                            <br>
                                            <br>
                                            </div>
                                            
                                                </div>
                                                 <!--members of networking-->
                                                <div class="col-md-3">
                                                <div class="col-md-12" style="margin-top: 10px;
    border: 2px solid #7c7c7c;
    height: 495px;">
                                                  <br>

                                            <div class="club_suggest_top_di row col-md-12" align="center" style="margin-top:-15px">
                                            <div align="center" style="background:#808080;height:40px;margin-top:5px;padding-top:1px; color:#fff;    margin-left: -30px;
    width: 332px;"><h4>MEMBERS</h4> </div>
                                                </div>
                                                <!-- member data -->
                                                
                                                <div class="col-md-12">
                                                 <div id="club_networks">
                                            <div class="club_network" style="    height: 420px;background-color:#fff">
                                                <?php
                                                $group_chat_exe=mysqli_query($conn,"select * from group_chat order by chat_id desc");
                                                while($grp_ct=mysqli_fetch_array($group_chat_exe))
                                                {
                                                    $gp_us_pp_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$grp_ct[user_id]'");
                                                    $gp_ppic=mysqli_fetch_array($gp_us_pp_exe);
                                                    $gp_user_details_exe=mysqli_query($conn,"select * from users where user_id='$grp_ct[user_id]'");
                                                    $gp_det=mysqli_fetch_array($gp_user_details_exe);

                                                    ?>
                                                    <div class="col-lg-12" style="border-bottom:1px solid #000;padding-left:0px; ">
                                                      
                                                        <div class="col-lg-10 club_msg_shape" style="background-color:#fff; padding-right:0px;float: left;    margin-left: -25px;" align="right"><span style="text-align:right; color:#000;font-size:10px;line-height: 0px"><b><?php echo $grp_ct['chat_txt'];?></b><br>
                                                        
    <a href="#" class="club1" onclick="return members(<?php echo $grp_ct['user_id'];?>)"><?php echo $gp_det['Name'];?></a><br><?php echo $gp_det['company']?> <br><?php echo $gp_det['industry'];?> </span>
                                                           
                                                        </div>
                                                          <div class="col-lg-2 row club_network_row" style="padding-left:0px;padding-right:0px; width:30px; " align="left">
                                                            
                                                            <?php
                                                            if($gp_ppic['image']!='')
                              {
                              ?>
                                                                <a href="#" class="club1" onclick="return members(<?php echo $grp_ct['user_id'];?>)"><img src="fb_users/<?php echo $gp_det['Gender'];?>/<?php echo $gp_det['Email'];?>/Profile/<?php echo $gp_ppic['image'];?>" width= "80" height="65"></a>
                                                                <?php
                              }else
                              {
                                ?>
                                                             <img src="images/profile/sq.PNG"     width= "80"
    height="65"/>
                                                                <?php
                              }
                                ?>
                                                            
                                                        </div>

                                                   </div>

                                                    <?php
                                                }
                                                ?>


                        </div>
                                            </div>
                                                </div>
                                                
                                                
                                                <!-- end member data -->
                                                </div>

                                                <!--end members-->
                                                </div>
                                                </div>


                                                  <!--END NETWORKING-->

                                        </div>


                                        <div class="tab-pane" id="tab10">


                                                             <!--BEGIN CLUB SUGGESTIONS-->


                                            <div class="row" style="    margin: 10px;
    border: 2px solid #7c7c7c;
    width: 99%;
    height: 497px;">
   
                                            <br>
                                            <div class="club_suggest_top_di row col-md-12" align="center" style="margin-top: -15px;
    margin-left: -17px;
    width: 1465px;
    margin-bottom: 0px;
;">
                                            <div align="center" style="background:#808080;height:40px;margin-top:5px;padding-top:1px; color:#fff;width:1465px"><h4>SUGGESTIONS</h4> </div>
                                                </div>
                                                <div class="col-md-12"  id="suggest1">
                                                 <div id="club_networks" style="    margin-left: -10px;
    width: 1390px;">
                                            <div class="club_network" style="height:400px;background-color:#fff" id="mamber-suggestions">
                                                <?php
                                                $sug1=mysqli_query($conn,"select * from tbl_suggest_topic where user_id='$_SESSION[id]' order by sug_date desc");
                                                while($sug2=mysqli_fetch_array($sug1))
                                                {
                                                   
                                                   


                                                    // $sug3=mysqli_query($conn,"select * from tbl_suggestions where suggest_topic_id='$sug2[suggest_topic_id]'");
                                                    // $sug4=mysqli_fetch_array($sug3);
                                                    // $sug5=mysqli_query($conn,"select * from user_profile_pic where user_id='$sug2[user_id]'");
                                                    // $sug6=mysqli_fetch_array($sug5);
                                                    // $sug7=mysqli_query($conn,"select * from users where user_id='$sug2[user_id]'");
                                                    // $sug8=mysqli_fetch_array($sug7);

                                                    ?>
                                                    <div class="col-lg-12" style="border-bottom:1px solid #000;padding-left:0px;">
                                                       <!--  <div class="col-lg-2 row club_network_row" style="padding-left:0px;padding-right:0px; width:80px; ">
                                                            <div class="col-lg-4" align="left" style="padding-left:3px;padding-right:0px; width:80px;">
                                                            <?php
                                                            //if($fet_ppic['image']!='')
                              {
                              ?>
                                                                <img src="fb_users/<?php //echo $usr_dis['Gender'];?>/<?php //echo $usr_dis['Email'];?>/Profile/<?php //echo $fet_ppic['image'];?>" width="50" height="80">
                                                                <?php
                              }//else
                              {
                                ?>
                                                             <img src="images/profile/sq.PNG" width="80"/>
                                                                <?php
                              }
                                ?>
                                                            </div>
                                                        </div> -->
                                                        <div class="col-lg-12 club_msg_shape" style="     height: 34px;
    background-color: #fff;
    padding-right: 0px;
    margin-top: 5px;" align="left">
                                                       <!--  <span style="text-align:right; color:#000;font-size:10px;">
    <?php// echo $usr_dis['Name'];?> / <?php// echo $usr_dis['company']?> / <?php// echo $usr_dis['industry'];?> </span> -->


    <div class="col-md-8" align="left" style=""><p style="color:#808080"> <?php echo $sug2['suggest_topic'];?></p></div>
                                                            <div class="col-md-2" align="right" style="margin-right: -10px"><span class="pull-right" style="text-align:right; color:#808080;font-size:10px;margin-right: -120px;"><?php echo $sug2['sug_date'];?> </span></div>
                                                            

                                                            <?php
                                                                    $sugg_count_exe=mysqli_query($conn,"select * from tbl_suggestions where suggest_topic_id='$sug2[suggest_topic_id]' AND whos_suggest='$usr_dis[user_id]' AND to_whom_accept='$_SESSION[id]' AND status='1'");
                                                                    $cn1=mysqli_num_rows($sugg_count_exe);
                                                                    if($cn1!=0)
                                                                    {
                                                                        ?>

                                      <div class="col-md-2" align="left" ><button style="color: white;background-color: #808080;margin-left: 115px;" onClick="return disconnect_suggest(<?php echo $usr_dis['user_id'];?>,<?php echo $sug2['suggest_topic_id'];?>);">connected
                                      </button></div>


    <?php } else { ?>
                                      <div class="col-md-2" align="left" ><button style="color: white;background-color: #808080;margin-left: 115px;" onClick="return connect_suggest(<?php echo $usr_dis['user_id'];?>,<?php echo $sug2['suggest_topic_id'];?>);">connect
                                      </button></div>
                                      <?php } ?>

                                                        </div>

                                                   </div>

                                                    <?php
                                                  }
                                                ?>


                        </div>
                                            </div>
                                                </div>
                                                <!--<div class="col-md-12">
                                                 <form method="post"  action="">
                                            <!--maxlength="160"->
                                                <input type="text" placeholder="Let's Network (160 characters only..)"  class="club_txt" name="chat_txt" id="chat_txt">
                                                <?php
                                                //$msg_date=date("Y-m-d h:i");
                                                ?>
                                                <input type="hidden" name="msg_time_date" id="msg_time_date" value="<?php //echo $msg_date;?>"/>
                                                <input type="hidden" name="msg_user_id" id="msg_user_id" value="<?php //echo $_SESSION['id']?>">
                                                <input type="submit" style="display:none;" name="Message_send" onClick="return inse_msg();"/>
                                            </form>
                                            <div align="left" id="network_valid" style="display:none;color:red;font-weight:bold;margin-left:15px;">Message Length Must Be 160 Characters Only</div>
                                            <br>
                                            <br>
                                            </div> -->
                                                
                                                 <!--members of suggestion-->
                                                

                                                <!--end members suggestion-->

                                                </div>





	</div>
                 <!----------------------------------END CLUB SUGGESTIONS------------------------------------------------------>

                                        <div class="tab-pane" id="tab11">
                                        <!-- ---------------------------------------BEGIN CLUB TAGS-------------------------------------->
                                            <h4 class="club_headers" style="color: #808080">
                                                 Add Tags</h4>
                                            <br>
                                             <i class="fa fa-plus" style="color: #808080;margin-left: -1450px" data-toggle="modal" data-target="#tags"></i>
                                             <!-- modal tags -->

                                               <div class="modal fade" id="tags" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">TAGS</h4>
        </div>
        <div class="modal-body">
           <div class="row" style="width:400px">
                                                
                                                <form role="form" method="post" action="">
                                                    <div class="form-group">
                                                        <select  name="club_memb" id="club_memb" class="club_txt">
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
                                                    <!---->

                                                    <button type="button"  name="add_refrals" onClick="return refrals_insertins();" class="btn btn_grn" data-dismiss="modal">Submit</button>
                                                    <button type="button" class="btn btn_grn" data-dismiss="modal">Clear</button>
                                                </form>
                                            </div>
        </div>
        
      </div>
      
    </div>
  </div>

                                             <!-- end tag modal -->
                                            <br>
                                            <div class="row" style="margin: 10px">
                                            <div class="col-md-6" style="    border: 2px solid #7c7c7c;
    height: 450px;margin-left: -5px;">
                                                <div class="club_suggest_top_div row" style="padding-top: 10px;
    padding-bottom: 10px;
    margin-top: 5px;
    background-color: #808080;
    margin-left: -15px;
    width: 727px;">
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
                                                <div id="accept_tag_confirmation">
                                                <div class="club_sugg_scroll" style="    height: 400px;
    width: 100%;">
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
                                                                    <a href="#modal_<?php echo $model_count;?>">
                                                                    <?php
                                                                    if($fet_ppic['image']!='')
																	{
																	?>
                                                                      <img src="fb_users/<?php echo $usr_dis['Gender'];?>/<?php echo $usr_dis['Email'];?>/Profile/<?php echo $fet_ppic['image'];?>" width="50">
                                                                      <?php
																	}else
																	{
																	  ?>
                                                                      <img src="images/profile/sq.PNG" width="50">
                                                                      <?php
																	}
																	  ?>
                                                                      </a>
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
                                                                <a href="#" onClick="return reje_tags(<?php echo $gred['refrence_id']?>,<?php echo $gred['who_user_id'];?>);" data-remodal-action="confirm" class="remodal-confirm">Confirm</a>
                                                                <?php
                                                            }else
                                                            {
                                                                ?>
                                                                <a href="#" onClick="return acc_tags(<?php echo $gred['refrence_id']?>,<?php echo $gred['who_user_id'];?>);" data-remodal-action="confirm" class="remodal-confirm">Accept</a>
                                                                <?php
                                                            }
                                                            ?>
                                                        </div>
                                                        <!--End Model-->





                                                        <?php
                                                    }
                                                    ?>
                                                    </div>
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
                                            <div class="col-md-6" style="margin-top: -40px;
    border: 2px solid #7c7c7c;
    width: 48%;
    height: 450px;
    margin-left: 15px;">
                                                <div class="club_suggest_top_div row" style="    padding-top: 10px;
    padding-bottom: 10px;
    margin-top: 5px;
    margin-left: -15px;
    background-color: #808080;
    width: 698px;">
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
                                                <div id="add_tags" style="    width: 102%;">
                                                <div class="club_sugg_scroll" style="height: 400px">
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
                                                                    <a href="#modal_<?php echo $model_count;?>">
                                                                    <?php
                                                                    if($jil_pic['image']!='')
																	{
																	?>
                                                                    <img src="fb_users/<?php echo $jil_data['Gender']?>/<?php echo $jil_data['Email'];?>/Profile/<?php echo $jil_pic['image'];?>" width="50">
                                                                    <?php
																	}else
																	{
																	?>
                                                                    <img src="images/profile/sq.PNG" width="50">
                                                                    <?php
																	}
																	?>
                                                                    </a>
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
                                                    </div>
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
</div>









                                            <!---------------------------------------------END CLUB TAGS---------------------------------------->
                                        </div>
                                        <div class="tab-pane" id="tab12">
                                        <!--BEGIN CLUB SETTINGS--><div style="border: 2px solid #7c7c7c;margin: 10px">
                                            <h4 class="club_headers">
                                                Settings</h4>
                                            <br>
                                            <div class="row" style="    margin-top: 70px;
    width: 400px;">
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
                                                    <button type="submit" class="btn btn_grn" onClick="change_pwd();" style="background-color: #7c7c7c">Change Password</button>
                                                </form>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-lg-12" style="height: 40px;
    background-color: #7c7c7c;">
                                                    <h4 style="color:#7c7c7c; ">
                                                        Remove From club</h4>
                                                </div>
                                                <div class="col-lg-12" style="border:1px dotted #7c7c7c">
                                                    <br>
                                                    <input type="button" value="Remove from this Club" class="btn" onClick="remove_club(<?php echo $_SESSION['id']?>);" style="background-color:#7c7c7c; color:#fff;">
                                                    <br>
                                                    <br>
                                                </div>
                                            </div>
                                            </div>

                                         <!--END CLUB TAGS-->
                                        </div>
                                    </div>

                                </div>
                                </div>
                            <?php
							}
							?>
                             </div>
                            </div>
						</div>
                        <div class="tab-pane " id="dairy-vr">
                            <ul class="nav nav-tabs" id="id_hover">
                                <li class="active">
                                    <a href="#tab1" data-toggle="tab" onClick="return chng_dryfeed();">
                                    <img id="dry_feed11" src="images/others/s_n_2.png" width="70" />
                                    <img id="dry_feed12" src="images/others/s_n_1.png" width="70" style="display:none;"/>
                                    <h5 style="text-align:center; position:absolute; top:45px; left:45px;font-size:12px; color:#5a5a5a">
            Feed</h5>
           <!-- <h5 style="text-align:center; position:absolute; top:25px; left:32px; color:#fff">Feed</h5>--></a>
                                </li>
                                <li>
                                    <a href="#tab2" data-toggle="tab" onClick="return chng_dryindu();">
                                    <img id="dry_indu21" src="images/others/s_n_1.png" width="70" />
                                    <img id="dry_indu22" src="images/others/s_n_2.png" width="70" style="display:none;" />
                               <h5 style="text-align:center; position:absolute; top:45px; left:35px;font-size:12px; color:#5a5a5a">
            Industry</h5>
           <!-- <h5 style="text-align:center; position:absolute; top:25px; left:25px; color:#fff">Industry</h5>--></a>
                                </li>
                                <li>
                                    <a href="#tab3" data-toggle="tab" onClick="return chng_dryinkd();">
                                    <img id="dry_ink31" src="images/others/s_n_1.png" width="70" />
                                    <img id="dry_ink32" src="images/others/s_n_2.png" width="70" style="display:none;" />
                                    <h5 style="text-align:center; position:absolute; top:45px; left:45px;font-size:12px; color:#5a5a5a">
            Inked</h5>
            <!--<h5 style="text-align:center; position:absolute; top:25px; left:32px; color:#fff">Inked</h5>--></a>
                                </li>
                                <li>
                                    <a href="#tab4" data-toggle="tab" onClick="return chng_drynoted();">
                                    <img id="dry_not41" src="images/others/s_n_1.png" width="70" />
                                    <img id="dry_not42" src="images/others/s_n_2.png" width="70" style="display:none;" />
                                    <h5 style="text-align:center; position:absolute; top:45px; left:45px;font-size:12px; color:#5a5a5a">
            Noted</h5>
            <!--<h5 style="text-align:center; position:absolute; top:25px; left:32px; color:#fff">Noted</h5>--></a>
                                </li>
                                <li>
                                    <a href="#tab5" data-toggle="tab" style="text-transform:capitalize" onClick="return chng_dryuinfo();">
                                    <img id="dry_uinfo51" src="images/others/s_n_1.png" width="70" />
                                    <img id="dry_uinfo52" src="images/others/s_n_2.png" width="70" style="display:none;" />
                                    <h5 style="text-align:center; position:absolute; top:45px; left:45px;font-size:12px; color:#5a5a5a">
            <?php echo $_SESSION['Name'];?></h5>
            <?php /*?><h5 style="text-align:center; position:absolute; top:25px; left:32px; color:#fff"><?php echo $_SESSION['Name'];?></h5><?php */?></a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab1">
                                    <div class="pst_main_background">
                                        <br>
                                     <!---------------------------------------NEWS FEED BEGIN---------------------------------------->
                                        <div style="background-color:#fff;padding:5px;"  >
                                            <div class="media  bg" style="background:#afdf7c">
                                                <a href="" class="pull-left">
                                                <?php
                                                if($fet_ppic['image']!='')
												{
												?>
                                                    <img src="fb_users/<?php echo $usr_dis['Gender']?>/<?php echo $usr_dis['Email']?>/Profile/<?php echo $fet_ppic['image'];?>" width="50" class="media-object">
                                                    <?php
												}else
												{
													?>
                                                    <img src="images/profile/sq.PNG" width="50" height="50" class="media-object">
                                                   <?php
												}
												   ?>
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
                                                    <textarea style="resize:none;border:1px solid #afdf7c;" class=" span12 form-control" name="post_data" id="post_data" data-id="post_data" cols="90" rows="2" placeholder=" Ink your reflections..."></textarea>



                                                </div>
                                                <div style="border-bottom:5px solid #ADCA8CM; margin-bottom: 10px; margin-top:10px; ">
                                                <!-- -->
                                                    <button type="submit" name="sub_post" onClick="return ins_posts();" class="btn btn_grn">
                                                        INK
                                                    </button>
                                                    <?php /*?><button type="button" class="btn btn-success navbar-btn">
                                                        SCHEDULE
                                                    </button><?php */?>
                                                    <button type="button" class="btn btn_grn">
                                                        DUST
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                        <!--<hr class="style5">-->
                                        <br />
										<div id="news_feed">
                                        <div class="bg_pst">
										<div id="news_feed_like">
                                        <div id="news_feed_comment">
                                            <?php
                                            $retpe=mysqli_query($conn,"select * from user_post order by post_id desc");

                                            while($resp=mysqli_fetch_array($retpe))
                                            {
												++$from_count;
                                                $pue=mysqli_query($conn,"select * from users where user_id='$resp[user_id]'");
                                                $pud=mysqli_fetch_array($pue);
                                                $pupe=mysqli_query($conn,"select * from user_profile_pic where user_id='$resp[user_id]'");
                                                $pupp=mysqli_fetch_array($pupe);
                                                ?>

                                               <div class="pst_box" style="background-color:#eee;height:300px">
                                                    <div class="row">
                                                        <div class="col col-lg-3" style="background-color:#eee;  border-right:1px dashed #ddd;height:300px; padding:5px;">
                                                            <div align="center" style="margin-top:5px;">
                                                           <a href="profile.php?id=<?php echo $resp['user_id'] ?>" ><!--class="pst_head_left"-->
                                                            <?php
                                                                if($pupp['image']!='')
																{
																?>
                                                                <img src="fb_users/<?php echo $pud['Gender']?>/<?php echo $pud['Email'];?>/Profile/<?php echo $pupp['image'];?>" width="80" class="triangle-down" />
                                                                <?php
																}else
																{
																	?>
                                                                    <img src="images/profile/sq.PNG" width="80" class="triangle-down">
                                                                    <?php
																}
																	?>
                                                                </a>
                                                            </div>
                                                            <div align="center" style="margin-top:5px;">
                                                                <div style="border-bottom:1px dashed #000;line-height:15px;padding-bottom:5px;">
                                                                    <a href="profile.php?id=<?php echo $resp['user_id'] ?>"><span style="color:#000; font-family:lato; font-weight:bold;font-size:12px;"><?php echo $pud['Name'];?></span></a>
                                                                    <br />
                                                                </div>
                                                                <div style="line-height:15px;border-bottom:1px dashed #000;padding-bottom:5px;">
                                                                    <span style="color:#5a5a5a; font-family:lato;font-size:11px;line-height:.1px;">
        <?php echo $pud['designation'];?></span>
                                                                    <br />
                                                                </div>
                                                                <div style="line-height:15px;border-bottom:1px dashed #000;padding-bottom:5px;">
                                                                    <span style="color:#5a5a5a; font-family:lato;font-size:11px;line-height:.1px;"><?php echo $pud['company'];?></span>
                                                                    <br />
                                                                </div>
                                                                <div style="line-height:15px;border-bottom:1px dashed #000;padding-bottom:5px;">
                                                                    <span style="color:#5a5a5a; font-family:lato;font-size:11px;line-height:.1px;"><?php echo $pud['industry'];?> </span>
                                                                </div>
                                                            </div>
                                                            <div style="position:absolute;bottom:0px;right:0px;padding:0px;padding-bottom:10px;" lign="center" class=" col-lg-12">
                                                            <?php
                                                                $pse=mysqli_query($conn,"select * from user_post_status where post_id='$resp[post_id]' AND user_id='$_SESSION[id]'");
                                                                $ps=mysqli_fetch_array($pse);
                                                                $psc=mysqli_num_rows($pse);
																$ret_coments=mysqli_query($conn,"select * from user_post_comment where post_id='$resp[post_id]'");
														         $new_poe_cmcou=mysqli_num_rows($ret_coments);


                                                                ?>
                                                                <div class="col col-lg-6" style="padding:0px;" align="center">
                                                                    <i class="fa fa-pencil-square-o"> <a href="#" style="font-size:13px">+<?php echo $new_poe_cmcou;?></a></i>
                                                                </div>
                                                                <div class="col col-lg-6" style="padding:0px;" align="center">
                                                                    <i class="fa fa-tag" style=""> <a href="#" style="font-size:13px">+<?php echo $resp['likes'];?></a></i>
                                                                </div>
                                                                <br />
                                                            </div>
                                                        </div>
                                                        <div class="col col-lg-9" style="background-color:#fff; height:300px;padding:0px;">
                                                            <div>
                                                            <?php
                                                                if($ps['status']=='Like')
                                                                {

                                                                    ?>
                                                                    <a href="#"   onClick="return unlike(<?php echo $resp['post_id'];?>,<?php echo $_SESSION['id'];?>);" >
                                                                <img src="images/others/unnote_1.png" height="90" style="position:absolute;left:365px;top:0px;" /></a>
                                                                 <?php
                                                                }else
                                                                {

                                                                    ?>
                                                                <a href="#"  onClick="return like(<?php echo $resp['post_id'];?>,<?php echo $_SESSION['id'];?>);" ><img src="images/others/note.png" height="90" style="position:absolute;left:365px;top:0px;"  /></a>
                                                                <?php
                                                        }
                                                        ?>
                                                            </div>
                                                            <a href="#feepost_cmts_<?php echo $resp['post_id'];?>">
                                                            <div class="pst_body" style="height:px;overflow-y:scroll; padding-right:10px; height:240px">
                                                            <?php
                                                        if($resp['post_pic']!='')
                                                        {
                                                            ?>

                                                              <img src="fb_users/<?php echo $pud['Gender']?>/<?php echo $pud['Email'];?>/Post/<?php echo $resp['post_pic'];?>" class="img-responsive " width="400" />

                                                              <?php
                                                        }
                                                        ?>
                                                                <p style="margin-top:10px;margin-right:30px;text-align:"><?php echo $resp['post_txt'];?></p>
                                                            </div>

                                                            <div class="col-lg-12" style=" border-top:1px dashed #eee; position:absolute;bottom:35px;" align="right">
                                                                <span style="font-size:10px; margin-left:5px;"> - on <?php echo $resp['post_time'];?></span>
                                                            </div>
                                                             </a>




                                                            <div class="col-lg-12" style="padding:0px;position:absolute;bottom:0px;">
                                                            <form method="post" action="" id="form_<?php echo $from_count;?>">
                                                                    <input type="hidden" name="cmt_ins_id" id="cmt_ins_id_<?php echo $from_count;?>" value="<?php echo $_SESSION['id'];?>">
                                                                    <input type="hidden" name="cmt_post_id" id="cmt_post_id_<?php echo $from_count;?>" value="<?php echo $resp['post_id'];?>">
                                                                    <?php
                                                                    $date=date('Y-m-d h:i');

                                                                    ?>
                                                                    <input type="hidden" name="cmt_ins_date" id="cmt_ins_date_<?php echo $from_count;?>" value="<?php echo $date;?>">
                                                                <input type="text" class="form-control" name="cmt_txt" id="cmt_txt_<?php echo $from_count;?>" style="width:100%; padding-left:10px;padding-right:10px; border-radius:0px;" placeholder="Ink...">
                                                                <input type="submit" name="cmt_ins" onClick="return comment_insertion(<?php echo $from_count;?>);" style="display:none;">
                                                                        </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>




                                               <!----------feed post begin model------------------>



                                           <div class="remodal" data-remodal-id="feepost_cmts_<?php echo $resp['post_id'];?>" id="feepost_cmts_<?php echo $resp['post_id'];?>" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                                            <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>



                                                <!--data-remodal-action="confirm"-->
                                                <div>
                                                <?php
                                                $fee_mol_post_exe=mysqli_query($conn,"select * from user_post where post_id='$resp[post_id]'");
												$fee_mol_post=mysqli_fetch_array($fee_mol_post_exe);
												$fee_mo_user_exe=mysqli_query($conn,"select * from users where user_id='$fee_mol_post[user_id]'");
												$fee_mol_usr=mysqli_fetch_array($fee_mo_user_exe);
												$fee_mol_ppic_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$fee_mol_post[user_id]'");
												$fee_mol_ppic=mysqli_fetch_array($fee_mol_ppic_exe);
												?>
												<div class="box">
													<div style="
													max-width: 200px;
												">
														<img src="img/04.jpg" alt="">
														<img src="img/07.jpg" class="img-circle" alt="" style="
													position: absolute;
													left: 120px;
													width: 80px;
													top: 90px;
												">
														<h3>Rajesh</h3>
														<h5>IT-Software / Beta Solutions / Founder </h5>
														<h2> My first #d project </h2>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
														Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
													Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>

												<hr style="margin:10px;">


													</div>
												</div>
  <div class="pst_box" style="background-color:#eee;height:300px">
                                                    <div class="row">

                                                      <div class="col col-lg-8" style="background-color:#fff; height:300px;padding:0px;">
                                                      <?php
                                                      $feed_md_liks=mysqli_query($conn,"select * from user_post_status where post_id='$fee_mol_post[post_id]' AND user_id='$_SESSION[id]'");
													  $fee_lik=mysqli_fetch_array($feed_md_liks);
													  ?>
                                                            <div>
                                                            <?php
                                                                if($fee_lik['status']=='Like')
                                                                {

                                                                    ?>
                                                                    <a href="#"   onClick="return unlike(<?php echo $fee_mol_post['post_id'];?>,<?php echo $_SESSION['id'];?>);" >
                                                                <img src="images/others/unnote_1.png" height="90" style="position:absolute;left:365px;top:0px;" /></a>
                                                                 <?php
                                                                }else
                                                                {

                                                                    ?>
                                                                <a href="#"  onClick="return like(<?php echo $fee_mol_post['post_id'];?>,<?php echo $_SESSION['id'];?>);" ><img src="images/others/note.png" height="90" style="position:absolute;left:365px;top:0px;"  /></a>
                                                                <?php
                                                        }
                                                        ?>
                                                            </div>

                                                            <div class="pst_body" style="height:px;overflow-y:scroll; padding-right:10px; height:240px">
                                                            <?php
                                                        if($fee_mol_post['post_pic']!='')
                                                        {
                                                            ?>

                                                              <img src="fb_users/<?php echo $fee_mol_usr['Gender']?>/<?php echo $fee_mol_usr['Email'];?>/Post/<?php echo $fee_mol_post['post_pic'];?>" class="img-responsive " width="400" />

                                                              <?php
                                                        }
                                                        ?>
                                                                <p style="margin-top:10px;margin-right:30px;text-align:"><?php echo $fee_mol_post['post_txt'];?></p>
                                                            </div>



                                                        </div>
                                                         <div class="col col-lg-4" style="background-color:#eee;  border-right:1px dashed #ddd;height:300px; padding:5px;">
                                                          <div style="bottom:0px;right:0px;padding:0px;padding-bottom:10px;" lign="center" class=" col-lg-12"><!--position:absolute;-->
                                                            <?php
                                                                $feed_modl_licoun_exe=mysqli_query($conn,"select * from user_post_status where post_id='$resp[post_id]'");

                                                                $feed_lk_coun=mysqli_num_rows($feed_modl_licoun_exe);
																$ret_coments_feedmd=mysqli_query($conn,"select * from user_post_comment where post_id='$resp[post_id]'");
														         $new_poe_cmcou_feedmd=mysqli_num_rows($ret_coments);


                                                                ?>
                                                                <div class="col col-lg-6" style="padding:0px;" align="center">
                                                                    <i class="fa fa-pencil-square-o"> <a href="#" style="font-size:13px">+<?php echo $new_poe_cmcou_feedmd;?></a></i>
                                                                </div>
                                                                <div class="col col-lg-6" style="padding:0px;" align="center">
                                                                    <i class="fa fa-tag" style=""> <a href="#" style="font-size:13px">+<?php echo $feed_lk_coun;?></a></i>
                                                                </div>
                                                                <br />
                                                            </div>
                                                         <div class="col-lg-12" style="padding:0px;;bottom:0px;">
                                                         <!--position:absolute-->
                                                            <form method="post" action="" id="form_<?php echo $from_count;?>">
                                                                    <input type="hidden" name="cmt_ins_id" id="cmt_ins_id_<?php echo $from_count;?>" value="<?php echo $_SESSION['id'];?>">
                                                                    <input type="hidden" name="cmt_post_id" id="cmt_post_id_<?php echo $from_count;?>" value="<?php echo $fee_mol_post['post_id'];?>">
                                                                    <?php
                                                                    $date=date('Y-m-d h:i');

                                                                    ?>
                                                                    <input type="hidden" name="cmt_ins_date" id="cmt_ins_date_<?php echo $from_count;?>" value="<?php echo $date;?>">
                                                                <input type="text" class="form-control" name="cmt_txt" id="cmt_txt_<?php echo $from_count;?>" style="width:100%; padding-left:10px;padding-right:10px; border-radius:0px;" placeholder="Ink...">
                                                                <input type="submit" name="cmt_ins" onClick="return comment_insertion(<?php echo $from_count;?>);" style="display:none;">
                                                                        </form>
                                                            </div>
                                                           <div class="row col-lg-12" style="height:250px;overflow-y:scroll;">
                                                            <?php
												 $ret_cmt_exe=mysqli_query($conn,"select * from user_post_comment where post_id='$fee_mol_post[post_id]'");
                                                        while($ret_cmt=mysqli_fetch_array($ret_cmt_exe))
                                                        {
                                                            $us_co_de=mysqli_query($conn,"select * from users where user_id='$ret_cmt[user_id]'");
                                                            $use_cm=mysqli_fetch_array($us_co_de);
                                                            $us_cmt_pic_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$use_cm[user_id]'");
                                                            $us_cmt_pic=mysqli_fetch_array($us_cmt_pic_exe);
                                                            ?>
                                                            <div class="row  pst_cmt_body">
                                                                <div class="col-lg-2" ><!--style="width:70px;"-->
                                                                    <a href="profile.php?id=<?php echo $use_cm['user_id'] ?>" class="pst_head_left">
                                                                    <?php
                                                                    if($us_cmt_pic['image']!='')
																	{
																	?>
                                                                        <img src="fb_users/<?php echo $use_cm['Gender']?>/<?php echo $use_cm['Email']?>/Profile/<?php echo $us_cmt_pic['image'];?>"  width="40" height="40" style="margin-left:-15px;">
                                                                        <?php
																	}else
																	{
																		?>
                                                                        <img src="images/profile/sq.PNG" width="70" height="70" style="margin-left:-15px;" />
                                                                      <?php
																	}
																	  ?>
                                                                    </a>
                                                                </div>
                                                                <div class="col-lg-10" style="padding-top:5px;">
                                                                    <a href="profile.php?id=<?php echo $use_cm['user_id'] ?>" style="color:#000;"><?php echo $use_cm['Name']; ?></a>
                                                                    <br>
                                                                    <span class="pst_head_pos  pst_cmt_muted">- Inked On <?php echo $ret_cmt['comment_time'];?></span>
                                                                    <br>
                                                                    <div style="margin-left:10px;"><?php echo $ret_cmt['comment'];?></div>
                                                                </div>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>
                                                           </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                </div>

                                        </div>




									<!-----------------END feed post moddel----------------------->




                                                <?php
                                            }
                                            ?>
											</div></div>
											</div>
                                        </div>

                                     <!-----------------------------------------END NEWS FEED------------------------------------>

                                    </div>
                                </div>
                                <div class="tab-pane" id="tab2">
                                 <!------------------------------------BEGIN INDUSTRY--------------------------------------------------->
                                 <div id="my_industry">


                                    <div class="bg_pst">


                                        <?php
                                        $industry_count=100;
                                        $industry_users_exe=mysqli_query($conn,"select * from users where industry='$usr_dis[industry]'");
                                        while($industry_users_ret=mysqli_fetch_array($industry_users_exe))
                                        {
											++$from_count;

                                            $industry_post_users_execu = mysqli_query($conn, "select * from user_post where user_id='$industry_users_ret[user_id]' order by post_id desc");
                                            while ($industry_post_rety = mysqli_fetch_array($industry_post_users_execu))
                                            {
												++$from_count;
                                                $industry_user_profile_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$industry_post_rety[user_id]'");
                                                $indus_usr_prof_pic=mysqli_fetch_array($industry_user_profile_exe);
                                                $industry_post_usr_profi_pic=$indus_usr_prof_pic[2];

                                                $industry_post_user_data_exeu=mysqli_query($conn,"select * from users where user_id='$industry_post_rety[user_id]'");
                                                $industry_post_user_data_retry=mysqli_fetch_array($industry_post_user_data_exeu);

                                                ?>


                                                <div class="pst_box" style="background-color:#eee;height:300px">
                                                    <div class="row">
                                                        <div class="col col-lg-3" style="background-color:#eee;  border-right:1px dashed #ddd;height:300px; padding:5px;">
                                                            <div align="center" style="margin-top:5px;">
                                                           <a href="profile.php?id=<?php echo $industry_post_rety['user_id']?>" ><!--class="pst_head_left"-->
                                                             <?php
																if($industry_post_usr_profi_pic!='')
																{
																?>
                                                                <img src="fb_users/<?php echo $industry_post_user_data_retry['Gender']; ?>/<?php echo $industry_post_user_data_retry['Email']?>/Profile/<?php echo $industry_post_usr_profi_pic; ?>" width="80" class="triangle-down" />
                                                                <?php
																}else
																{
																	?>
                                                                    <img src="images/profile/sq.PNG" width="80" class="triangle-down">
                                                                    <?php
																}
																	?>
                                                                </a>
                                                            </div>
                                                            <div align="center" style="margin-top:5px;">
                                                                <div style="border-bottom:1px dashed #000;line-height:15px;padding-bottom:5px;">
                                                                    <a href="profile.php?id=<?php echo $industry_post_rety['user_id']?>"><span style="color:#000; font-family:lato-bold;font-size:12px;"><?php echo $industry_post_user_data_retry['Name'];?></span></a>
                                                                    <br />
                                                                </div>
                                                                <div style="line-height:15px;border-bottom:1px dashed #000;padding-bottom:5px;">
                                                                    <span style="color:#000; font-family:lato-light;font-size:11px;line-height:.1px;">
       <?php echo $industry_post_user_data_retry['designation'];?></span>
                                                                    <br />
                                                                </div>
                                                                <div style="line-height:15px;border-bottom:1px dashed #000;padding-bottom:5px;">
                                                                    <span style="color:#000; font-family:lato-light;font-size:11px;line-height:.1px;"><?php echo $industry_post_user_data_retry['company'];?></span>
                                                                    <br />
                                                                </div>
                                                                <div style="line-height:15px;border-bottom:1px dashed #000;padding-bottom:5px;">
                                                                    <span style="color:#000; font-family:lato-regular;font-size:11px;line-height:.1px;"><?php echo $industry_post_user_data_retry['industry'];?> </span>
                                                                </div>
                                                            </div>
                                                            <div style="position:absolute;bottom:0px;right:0px;padding:0px;padding-bottom:10px;" lign="center" class=" col-lg-12">
                                                           <?php
                                                                $industry_post_status_exe=mysqli_query($conn,"select * from user_post_status where post_id='$industry_post_rety[post_id]'");
                                                                $industry_post_status_count=mysqli_num_rows($industry_post_status_exe);
                                                                $industry_post_status_retry=mysqli_fetch_array($industry_post_status_exe);
																$industry_post_comment_exeu=mysqli_query($conn,"select * from user_post_comment where post_id='$industry_post_rety[post_id]'");
                                                        $industry_post_comment_count=mysqli_num_rows($industry_post_comment_exeu);
                                                                ?>
                                                                <div class="col col-lg-6" style="padding:0px;" align="center">
                                                                    <i class="fa fa-pencil-square-o"> <a href="#" style="font-size:13px">+<?php echo $industry_post_comment_count ?></a></i>
                                                                </div>
                                                                <div class="col col-lg-6" style="padding:0px;" align="center">
                                                                    <i class="fa fa-tag" style=""> <a href="#" style="font-size:13px">+<?php echo $industry_post_status_count;?></a></i>
                                                                </div>
                                                                <br />
                                                            </div>
                                                        </div>
                                                        <div class="col col-lg-9" style="background-color:#fff; height:300px;padding:0px;">
                                                            <div>
                                                            <?php
                                                                if($industry_post_status_retry['status']=='Like')
                                                                {

                                                                    ?>
                                                                    <a href="#"  onClick="return unlike(<?php echo $industry_post_rety['post_id'];?>,<?php echo $_SESSION['id'];?>);"  >
                                                                <img src="images/others/unnote_1.png" height="90" style="position:absolute;left:365px;top:0px;" /></a>
                                                                 <?php
                                                                }else
                                                                {

                                                                    ?>
                                                                <a href="#"  onClick="return like(<?php echo  $industry_post_rety['post_id'];?>,<?php echo $_SESSION['id'];?>);" ><img src="images/others/note.png" height="90" style="position:absolute;left:365px;top:0px;"  /></a>
                                                                <?php
                                                        }
                                                        ?>
                                                            </div>
                                                            <div class="pst_body" style="height:px;overflow-y:scroll; padding-right:10px; height:240px">
                                                            <?php
                                                        if($industry_post_rety['post_pic']!='')
                                                        {
                                                            ?>
                                                              <img src="fb_users/<?php echo $industry_post_user_data_retry['Gender']; ?>/<?php echo $industry_post_user_data_retry['Email'];?>/Post/<?php echo $industry_post_rety['post_pic'];?>" class="img-responsive" width="400" />
                                                              <?php
                                                        }
                                                        ?>
                                                                <p style="margin-top:10px;margin-right:30px;text-align:"><?php echo $industry_post_rety['post_txt'];?></p>
                                                            </div>
                                                            <div class="col-lg-12" style=" border-top:1px dashed #eee; position:absolute;bottom:35px;" align="right">
                                                                <span style="font-size:10px; margin-left:5px;"> - on  <?php echo $industry_post_rety['post_time'];?></span>
                                                            </div>


                                                            <div class="col-lg-12" style="padding:0px;position:absolute;bottom:0px;">
                                                             <form method="post" action="" id="form_<?php echo $from_count;?>">
                                                                    <input type="hidden" name="cmt_ins_id_<?php echo $from_count;?>" value="<?php echo $_SESSION['id'];?>">
                                                                    <input type="hidden" name="cmt_post_id" id="cmt_post_id_<?php echo $from_count;?>" value="<?php echo $industry_post_rety['post_id'];?>">
                                                                    <?php
                                                                    $date=date('Y-m-d h:i');

                                                                    ?>
                                                                    <input type="hidden" name="cmt_ins_date_<?php echo $from_count;?>" id="cmt_ins_date_<?php echo $from_count;?>" value="<?php echo $date;?>">
                                                                <input type="text" name="cmt_txt" id="cmt_txt_<?php echo $from_count;?>" class="form-control" style="width:100%; padding-left:10px;padding-right:10px; border-radius:0px;" placeholder="Ink...">
                                                                <input type="submit" name="cmt_ins" onClick="return comment_insertion(<?php echo $from_count;?>);" style="display:none;">
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>




                                                <?php
                                            }
                                        }
                                        ?>

                                    </div>
									</div>
                                  <!----------------------------------END INDUSTRY---------------------------------------------------->
                                </div>
                                <div class="tab-pane" id="tab3">
                                 <!------------------------------------------BEGIN INKED--------------------------------->
									<div id="my_inked">

                                    <div class="bg_pst">

                                        <?php
                                        $user_profile_photo_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$_SESSION[id]'");
                                        $user_profile_pic=mysqli_fetch_array($user_profile_photo_exe);
                                        ?>
                                        <?php

                                        $count=0;
                                        $user_profile_post_exet=mysqli_query($conn,"select * from user_post where user_id='".$_SESSION['id']."' order by post_id desc");
                                        while($user_profile_post=mysqli_fetch_array($user_profile_post_exet))
                                        { ++$from_count;
                                            $count++;
                                            ?>


                                                <div class="pst_box" style="background-color:#eee;height:300px">
                                                    <div class="row">
                                                        <div class="col col-lg-3" style="background-color:#eee;  border-right:1px dashed #ddd;height:300px; padding:5px;">
                                                            <div align="center" style="margin-top:5px;">
                                                           <a href="profile.php?id=<?php echo $industry_post_rety['user_id']?>" ><!--class="pst_head_left"-->
                                                             <?php
																if($user_profile_pic['image']!='')
																{
																?>
                                                                <img src="fb_users/<?php echo $usr_dis['Gender']; ?>/<?php echo $usr_dis['Email']; ?>/Profile/<?php echo $user_profile_pic['image'];?>" width="80" class="triangle-down" />
                                                                <?php
																}else
																{
																	?>
                                                                    <img src="images/profile/sq.PNG" width="80" class="triangle-down">
                                                                    <?php
																}
																	?>
                                                                </a>
                                                            </div>
                                                            <div align="center" style="margin-top:5px;">
                                                                <div style="border-bottom:1px dashed #000;line-height:15px;padding-bottom:5px;">
                                                                    <a href="profile.php?id=<?php echo $industry_post_rety['user_id']?>"><span style="color:#000; font-family:lato-bold;font-size:12px;"><?php echo $usr_dis['Name'];?></span></a>
                                                                    <br />
                                                                </div>
                                                                <div style="line-height:15px;border-bottom:1px dashed #000;padding-bottom:5px;">
                                                                    <span style="color:#000; font-family:lato-light;font-size:11px;line-height:.1px;">
        <?php echo $usr_dis['designation'];?></span>
                                                                    <br />
                                                                </div>
                                                                <div style="line-height:15px;border-bottom:1px dashed #000;padding-bottom:5px;">
                                                                    <span style="color:#000; font-family:lato-light;font-size:11px;line-height:.1px;"><?php echo $usr_dis['company']?></span>
                                                                    <br />
                                                                </div>
                                                                <div style="line-height:15px;border-bottom:1px dashed #000;padding-bottom:5px;">
                                                                    <span style="color:#000; font-family:lato-regular;font-size:11px;line-height:.1px;"><?php echo $usr_dis['industry'];?> </span>
                                                                </div>
                                                            </div>
                                                            <div style="position:absolute;bottom:0px;right:0px;padding:0px;padding-bottom:10px;" lign="center" class=" col-lg-12">
                                                           <?php
                                                                $user_profile_bookmark_exe=mysqli_query($conn,"select * from user_post_status where post_id='$user_profile_post[post_id]'");
                                                            $user_profilr_bookmark=mysqli_fetch_array($user_profile_bookmark_exe);
															$ink_pos_not_cou=mysqli_num_rows($user_profile_bookmark_exe);
															$user_profile_post_comment_execu=mysqli_query($conn,"select * from user_post_comment where post_id='$user_profile_post[post_id]'");
                                                    $user_profile_comment_count=mysqli_num_rows($user_profile_post_comment_execu);
                                                                ?>
                                                                <div class="col col-lg-6" style="padding:0px;" align="center">
                                                                    <i class="fa fa-pencil-square-o"> <a href="#" style="font-size:13px">+<?php echo $user_profile_comment_count; ?></a></i>
                                                                </div>
                                                                <div class="col col-lg-6" style="padding:0px;" align="center">
                                                                    <i class="fa fa-tag" style=""> <a href="#" style="font-size:13px">+<?php echo $ink_pos_not_cou;?></a></i>
                                                                </div>
                                                                <br />
                                                            </div>
                                                        </div>
                                                        <div class="col col-lg-9" style="background-color:#fff; height:300px;padding:0px;">
                                                            <div>
                                                            <?php
                                                                if($user_profilr_bookmark['status']=='Like')
                                                                {

                                                                    ?>
                                                                    <a href="#"   onClick="return unlike(<?php echo $user_profile_post['post_id'];?>,<?php echo $_SESSION['id'];?>);"  >
                                                                <img src="images/others/unnote_1.png" height="90" style="position:absolute;left:365px;top:0px;" /></a>
                                                                 <?php
                                                                }else
                                                                {

                                                                    ?>
                                                                <a href="#"  onClick="return like(<?php echo $user_profile_post['post_id'];?>,<?php echo $_SESSION['id'];?>);" ><img src="images/others/note.png" height="90" style="position:absolute;left:365px;top:0px;"  /></a>
                                                                <?php
                                                        }
                                                        ?>
                                                            </div>
                                                           <div class="pst_body" style="height:px;overflow-y:scroll; padding-right:10px; height:240px">
                                                            <?php
                                                        if($user_profile_post['post_pic']!='')
                                                        {
                                                            ?>
                                                              <img src="fb_users/<?php echo $usr_dis['Gender'];?>/<?php echo $usr_dis['Email']; ?>/Post/<?php echo $user_profile_post['post_pic'];?>" class="img-responsive" width="400" />
                                                              <?php
                                                        }
                                                        ?>
                                                                <p style="margin-top:10px;margin-right:30px;text-align:"><?php echo $user_profile_post['post_txt']?></p>
                                                            </div>
                                                            <div class="col-lg-12" style=" border-top:1px dashed #eee; position:absolute;bottom:35px;" align="right">
                                                                <span style="font-size:10px; margin-left:5px;"> - on  <?php echo $user_profile_post['post_time'];?></span>
                                                            </div>


                                                            <div class="col-lg-12" style="padding:0px;position:absolute;bottom:0px;">
                                                              <form method="post" action="script_code.php" id="form_<?php echo $from_count;?>" >
                                                                <input type="hidden" name="cmt_ins_id" id="cmt_ins_id_<?php echo $from_count;?>" value="<?php echo $_SESSION['id'];?>">
                                                                <input type="hidden" name="cmt_post_id" id="cmt_post_id_<?php echo $from_count;?>" value="<?php echo $user_profile_post['post_id'];?>">
                                                                <?php
                                                                $date=date('Y-m-d h:i');

                                                                ?>
                                                                <input type="hidden" name="cmt_ins_date" id="cmt_ins_date_<?php echo $from_count;?>" value="<?php echo $date;?>">
                                                                <input type="text"  name="cmt_txt" id="cmt_txt_<?php echo $from_count;?>" class="form-control" style="width:100%; padding-left:10px;padding-right:10px; border-radius:0px;" placeholder="Ink...">
                                                                <input type="submit" name="cmt_ins" onClick="return comment_insertion(<?php echo $from_count;?>);" style="display:none;">
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            <?php
                                        }
                                        ?>

										</div>
                                    </div>
                                 <!---------------------------------------------END INKED---------------------------------------->
                                </div>
                                <div class="tab-pane" id="tab4">
                                 <!---------------------------------------------------BEGIN NOTED FILE---------------------------->
									<div id="noted_likes">
                                    <div class="bg_pst">
                                        <?php
                                        $user_noted_posts_exe=mysqli_query($conn,"select * from user_post_status where user_id='$_SESSION[id]'");

                                        while($ret_user_noted=mysqli_fetch_array($user_noted_posts_exe))
                                        {
										++$from_count;
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
                                            ?>

                                            <div class="pst_box" style="background-color:#eee;height:300px">
                                                    <div class="row">
                                                        <div class="col col-lg-3" style="background-color:#eee;  border-right:1px dashed #ddd;height:300px; padding:5px;">
                                                            <div align="center" style="margin-top:5px;">
                                                           <a href="profile.php?id=<?php echo $user_pos_nrty['user_id'] ?>" ><!--class="pst_head_left"-->
                                                             <?php
																if($user_noted_ppic['image']!='')
																{
																?>
                                                                <img src="fb_users/<?php echo $user_pos_nrty['Gender']; ?>/<?php echo $user_pos_nrty['Email']; ?>/Profile/<?php echo $user_noted_ppic['image'];?>" width="80" class="triangle-down" />
                                                                <?php
																}else
																{
																	?>
                                                                    <img src="images/profile/sq.PNG" width="80" class="triangle-down">
                                                                    <?php
																}
																	?>
                                                                </a>
                                                            </div>
                                                            <div align="center" style="margin-top:5px;">
                                                                <div style="border-bottom:1px dashed #000;line-height:15px;padding-bottom:5px;">
                                                                    <a href="profile.php?id=<?php echo $user_pos_nrty['user_id'] ?>"><span style="color:#000; font-family:lato-bold;font-size:12px;"><?php echo $user_pos_nrty['Name'];?></span></a>
                                                                    <br />
                                                                </div>
                                                                <div style="line-height:15px;border-bottom:1px dashed #000;padding-bottom:5px;">
                                                                    <span style="color:#000; font-family:lato-light;font-size:11px;line-height:.1px;">
        <?php echo $user_pos_nrty['designation'];?></span>
                                                                    <br />
                                                                </div>
                                                                <div style="line-height:15px;border-bottom:1px dashed #000;padding-bottom:5px;">
                                                                    <span style="color:#000; font-family:lato-light;font-size:11px;line-height:.1px;"><?php echo $user_pos_nrty['company']?></span>
                                                                    <br />
                                                                </div>
                                                                <div style="line-height:15px;border-bottom:1px dashed #000;padding-bottom:5px;">
                                                                    <span style="color:#000; font-family:lato-regular;font-size:11px;line-height:.1px;"><?php echo $user_pos_nrty['industry'];?> </span>
                                                                </div>
                                                            </div>
                                                            <div style="position:absolute;bottom:0px;right:0px;padding:0px;padding-bottom:10px;" lign="center" class=" col-lg-12">
                                                           <?php
                                                                $user_noted_bookmark_exe=mysqli_query($conn,"select * from user_post_status where post_id='$user_noted_post[post_id]'");
															$ink_noted_not_cou=mysqli_num_rows($user_noted_bookmark_exe);
															 $user_noted_post_comment_execu=mysqli_query($conn,"select * from user_post_comment where post_id='$user_noted_post[post_id]'");
                                                $user_noted_comment_count=mysqli_num_rows($user_noted_post_comment_execu);
                                                                ?>
                                                                <div class="col col-lg-6" style="padding:0px;" align="center">
                                                                    <i class="fa fa-pencil-square-o"> <a href="#" style="font-size:13px">+<?php echo $user_noted_comment_count ?></a></i>
                                                                </div>
                                                                <div class="col col-lg-6" style="padding:0px;" align="center">
                                                                    <i class="fa fa-tag" style=""> <a href="#" style="font-size:13px">+<?php echo $ink_noted_not_cou;?></a></i>
                                                                </div>
                                                                <br />
                                                            </div>
                                                        </div>
                                                        <div class="col col-lg-9" style="background-color:#fff; height:300px;padding:0px;">
                                                            <div>
                                                            <?php
                                                                if($ret_user_noted['status']=='Like')
                                                                {

                                                                    ?>
                                                                    <a href="#"   onClick="return unlike(<?php echo $user_noted_post['post_id'];?>,<?php echo $_SESSION['id'];?>);"  >
                                                                <img src="images/others/unnote_1.png" height="90" style="position:absolute;left:365px;top:0px;" /></a>
                                                                 <?php
                                                                }else
                                                                {

                                                                    ?>
                                                                <a href="#"  onClick="return like(<?php echo $user_noted_post['post_id'];?>,<?php echo $_SESSION['id'];?>);" ><img src="images/others/note.png" height="90" style="position:absolute;left:365px;top:0px;"  /></a>
                                                                <?php
                                                        }
                                                        ?>
                                                            </div>

                                                           <div class="pst_body" style="height:px;overflow-y:scroll; padding-right:10px; height:240px">

                                                            <?php
                                                        if($user_noted_post['post_pic']!='')
                                                        {
                                                            ?>
                                                              <img src="fb_users/<?php echo $user_pos_nrty['Gender'];?>/<?php echo $user_pos_nrty['Email']; ?>/Post/<?php echo $user_noted_post['post_pic'];?>" class="img-responsive" width="400" />
                                                              <?php
                                                        }
                                                        ?>
                                                                <p style="margin-top:10px;margin-right:30px;text-align:"><?php echo $user_noted_post['post_txt']?></p>

                                                            </div>

                                                            <div class="col-lg-12" style=" border-top:1px dashed #eee; position:absolute;bottom:35px;" align="right">
                                                                <span style="font-size:10px; margin-left:5px;"> - on  <?php echo $user_noted_post['post_time'];?></span>
                                                            </div>


                                                            <div class="col-lg-12" style="padding:0px;position:absolute;bottom:0px;">
                                                              <form method="post" action="script_code.php" id="form_<?php echo $from_count;?>" >
                                                                <input type="hidden" name="cmt_ins_id" id="cmt_ins_id_<?php echo $from_count;?>" value="<?php echo $_SESSION['id'];?>">
                                                                <input type="hidden" name="cmt_post_id" id="cmt_post_id_<?php echo $from_count;?>" value="<?php echo $user_profile_post['post_id'];?>">
                                                                <?php
                                                                $date=date('Y-m-d h:i');

                                                                ?>
                                                                <input type="hidden" name="cmt_ins_date" id="cmt_ins_date_<?php echo $from_count;?>" value="<?php echo $date;?>">
                                                                <input type="text"  name="cmt_txt" id="cmt_txt_<?php echo $from_count;?>" class="form-control" style="width:100%; padding-left:10px;padding-right:10px; border-radius:0px;" placeholder="Ink...">
                                                                <input type="submit" name="cmt_ins" onClick="return comment_insertion(<?php echo $from_count;?>);" style="display:none;">
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                            <?php
                                        }
                                        ?>
                                    </div>
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
                                            <?php
                                            if($fet_ppic['image']!='')
											{
											?>
                                                <img src="fb_users/<?php echo $usr_dis['Gender']?>/<?php echo $usr_dis['Email']?>/Profile/<?php echo $fet_ppic['image'];?>" width="130px" height="130px" style="border-radius:50%"  onMouseOver="return on_profile_hover();" onMouseOut="return out_profile_hover();"/>
                                                <?php
											}else{
												?>
                                                <img src="images/profile/sq.PNG" width="130px" style="border-radius:50%"  onMouseOver="return on_profile_hover();" onMouseOut="return out_profile_hover();"/>
                                                <?php
											}
												?>
                                                <div style="display:none;position:absolute; left:17.4%; top:52%; z-index:1;" id="change_user_ppic" >
                                              <a href="#profilepic" class="icon" onMouseOver="return on_profile_hover();" onMouseOut="return out_profile_hover();" > <i class="btn btn-success" >Edit Pic</i></a></div>
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
                                                        <div class="col-lg-12" style="padding-right:0px;" id="disp_user_quote">
                                                        <?php
                                                        $get_user_quotes=mysqli_query($conn,"select * from users_quotes where user_id='$_SESSION[id]' order by quote_id desc limit 1");
														$quote_desc=mysqli_fetch_array($get_user_quotes);
														?>
                                                        <a href="#user_quote" class="icon" > <i class="fa fa-pencil icon"></i></a>
                                                            <blockquote style="color:#afdf7c; font-family:lato-light; border-left:5px solid #afdf7c;"><?php echo $quote_desc['quote_txt'];?></blockquote>
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
        <!--info@betasolutions.in--><?php echo $fet_info['Email'];?></span>
                                                            </div>
                                                            <div>
                                                                <h5 style="color:#afdf7c;margin-bottom:2px;">
                                                                    WEBSITE</h5>
                                                                <span>
        <!--www.betasolutions.in--><?php echo $fet_info['website'];?></span>
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
                                                            <div id="user_acomplis" class="col-lg-12 p_r_box" style="overflow-y:none;">
                                                                <h3 class="club_headers" style="text-align:left;margin-left:0px;">
                                                                    ACCOMPLISHMENTS</h3>
                                                                    <a href="#ACCOMPLISHMENTS" class="icon" style="margin-top:-32px;"> <i class="fa fa-pencil icon"></i></a>
                                                                    <?php
                                                                    $ret_acopmi_exe=mysqli_query($conn,"select * from user_accomplishments where user_id='$_SESSION[id]' order by accomp_id desc");
																	while($ret_acompy=mysqli_fetch_array($ret_acopmi_exe))
																	{
																	?>
                                                                <div class="col-lg-12" tyle="height:40px; border-bottom:1px dashed #afdf7c" align="left">
                                                                    <div class="col-lg-4" style="background-color:#afdf7c;height:40px;color:#fff;">
                                                                        <h5>
                                                                            <?php echo $ret_acompy['start_year'];?>-<?php echo $ret_acompy['end_year'];?></h5>
                                                                    </div>
                                                                    <div class="col-lg-8" tyle="border:1px solid #afdf7c;height:40px; color:#a9a9a9;">
                                                                        <h5 style="margin:0px;color:#afdf7c">
                                                                            <?php echo $ret_acompy['acomp_title'];?></h5>
                                                                        <p style="text-align:;">
                                                                            <?php echo $ret_acompy['acomp_desc'];?></p>
                                                                    </div>
                                                                </div>
                                                                <?php
																	}
																?>
                                                               <!-- <div class="col-lg-12" tyle="height:40px; border-bottom:1px dashed #afdf7c" align="left">
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
                                                                </div>-->

                                                            </div>
                                                         <!--   <div class="col-lg-12 p_r_box">
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
                                                            </div>-->
                                                            <div class="col-lg-12 p_r_box" style="border-bottom:none;">
                                                            <div id="skill6">
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
                                    </div>


                                    <!--Edit Profile Model Begin-->
                                      <div class="remodal" data-remodal-id="profilepic" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                                <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                                <form method="post" action="script_code.php" enctype="multipart/form-data">
                                    <div>

                                        <h2><span><?php echo $_SESSION['Name'];?></span></h2>
                                        <div class="col-lg-12">
                                            <h4 id="modal1Title">Edit Profile Pic</h4>

                                            <input type="file"  name="profile_pic" id="profile_pic"/>
                                        </div>


                                    </div>
                                    <br>

                                    <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
										<!--data-remodal-action="confirm"-->
                                    <button type="submit"  name="sub_edit_ppic"   class="remodal-confirm">Edit Pic</button>

                                </form>

                            </div>

                                    <!------END Edit Profile Model------------->
                                    <!--ADD QUOTE OF THE DAY BEGIN-->
                                     <div class="remodal" data-remodal-id="user_quote" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                                <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                                <form method="post" action="">
                                    <div>

                                        <h2><span><?php echo $_SESSION['Name'];?></span></h2>
                                        <div class="col-lg-12">
                                            <h4 id="modal1Title">Today Quote</h4>

                                            <input type="text" class="form-control"  name="user_quote" id="user_quote"/>
                                            <br/><br/>
                                        </div>


                                    </div>
                                    <br><br/>

                                    <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
										<!--data-remodal-action="confirm"-->
                                    <button type="submit" data-remodal-action="confirm"  onClick="return inseruserquote();"  class="remodal-confirm">Quote</button>

                                </form>

                            </div>
                                    <!--END QUOTE OF THE DAY-->

                              <!--add Acomplishments model begin-->

                                     <div class="remodal" data-remodal-id="ACCOMPLISHMENTS" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                                <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                                <form method="post" action="">
                                    <div>

                                        <h2><span><?php echo $_SESSION['Name'];?></span></h2>
                                        <div class="col-lg-12">
                                            <h4 id="modal1Title">Add Accomplishments</h4>
                                            <div class="col-lg-6">
                                            <div class="form-group">
                                            <select  name="from_year" id="from_year" class="club_txt" required>
                                                            <option>From year</option>
                                                            <option value="2009">2009</option> <option value="2010">2010</option> <option value="2011">2011</option> <option value="2012">2012</option> <option value="2013">2013</option> <option value="2014">2014</option> <option value="2015">2015</option> <option value="2016">2016</option> <option value="2017">2017</option>

                                                        </select>
                                                        </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                        <div class="form-group">
                                            <select  name="to_year" id="to_year" class="club_txt" required>
                                                            <option>to year</option>
                                                            <option value="2009">2009</option> <option value="2010">2010</option> <option value="2011">2011</option> <option value="2012">2012</option> <option value="2013">2013</option> <option value="2014">2014</option> <option value="2015">2015</option> <option value="2016">2016</option> <option value="2017">2017</option>

                                                        </select>
                                                        </div>
                                                        </div>


                                                      <div class="col-lg-12">
                                            			<div class="form-group">
                                                        <input type="text" class="club_txt" name="acomp_title" id="acomp_title" placeholder="Project Title" required>
                                                   		 </div>
                                                     </div>
                                                      <div class="col-lg-12">
                                            			<div class="form-group">
                                                        <input type="text" class="club_txt" name="acomp_desc" id="acomp_desc" placeholder="Project Descriptions" required>
                                                   		 </div>
                                                     </div>

                                        </div>


                                    </div>
                                    <br><br/>

                                    <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
										<!--data-remodal-action="confirm"-->
                                    <button type="submit" data-remodal-action="confirm"  onClick="return insertaccomplishments();"  class="remodal-confirm">ADD</button>

                                </form>

                            </div>

                               <!--end model accomplishments-->
                                 <!--------------------------------END ANKITHA FILE--------------------------------------->
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane" id="folio-vr">
                         <!-----------------------------------------BEGIN FOLIO---------------------------------------->


						 <!--Edit Cover pic Model Begin-->
                                      <div class="remodal" data-remodal-id="coverpic" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                                <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                                <form method="post" action="script_code.php" enctype="multipart/form-data">
                                    <div>

                                        <h2><span><?php echo $_SESSION['Name'];?></span></h2>
                                        <div class="col-lg-12">
                                            <h4 id="modal1Title">Edit Profile Pic</h4>

                                            <input type="file"  name="cover_pic" id="cover_pic"/>
                                        </div>


                                    </div>
                                    <br>

                                    <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
										<!--data-remodal-action="confirm"-->
                                    <button type="submit"  name="sub_edit_coverpic"   class="remodal-confirm">Edit Pic</button>

                                </form>

                            </div>

                                    <!------END Edit Cover Model------------->


                            <div class="pst_main_background" style="background-color:#fff;">
                                <?php
                                $cover_pic_exe=mysqli_query($conn,"select * from user_cover_pic where user_id='$_SESSION[id]'");
                                $cvpic=mysqli_fetch_array($cover_pic_exe);
                                ?>
                                <div class="pst_box">
                                <?php
                                if($cvpic['image']!='')
								{
								?>
                                    <div class="parallax_folio"  style="background-image: url('fb_users/<?php echo $usr_dis['Gender'];?>/<?php echo $usr_dis['Email'];?>/Cover/<?php echo $cvpic['image'];?>');" onMouseOver="dis_cover_pic_edit()" onMouseOut="out_cover_pic_edit()">
								<?php }else{?>
                                <div class="parallax_folio"  style="background-image:url(images/profile/Capture2.PNG);" onMouseOver="dis_cover_pic_edit()" onMouseOut="out_cover_pic_edit()">
                                <?php } ?>
                                    </div>
                                    <!--top:30%;-->
                                    <div style="position:absolute; left:75%;margin-top:-100px;  z-index:1; display:none;" id="edit_cover_button" >
                                    <a href="#coverpic" class="icon" onMouseOver="dis_cover_pic_edit();"onMouseOut="out_cover_pic_edit();" > <i class="btn btn-success" >Edit Cover Photo</i></a>
                                    <!--<input type="button" onMouseOver="dis_cover_pic_edit();" value="Change Cover" onMouseOut="out_cover_pic_edit();" onClick="Change_cover_pic()">-->
                                     </div>
                                    <br>
                                    <br>
                                   <!--id="folio_desc"-->
                                    <div  style="border-top:1px solid #afdf7c;border-bottom:1px solid #afdf7c; width:570px; margin-left:10px; margin-right:10px;">

                                        <br>
                                        <h4 style="color:#afdf7c;">
                                            WHO I AM <span class="icon" ><a href="#folio" class="icon" > <i class="fa fa-pencil icon"></i></a> </span></h4>
                                            <div id="folio_dynmic_refer">
                                        <?php
                                        $folio_desc=mysqli_query($conn,"select * from folio where user_id='$_SESSION[id]'");
                                        $fo_des=mysqli_fetch_array($folio_desc);
                                        ?>
                                        <P style="color:#d3d3d3">
                                            <?php echo $fo_des['description'];?></P>
                                        <br>
                                        </div>
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
                                    <div id="project_works">
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
										<!---->
                                    <button type="button" data-remodal-action="confirm"  onClick="return folio_ins_desc();"  class="remodal-confirm">ADD</button>

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
											 <select  name="foli_pri" id="foli_pri" class="form-control">
                                              <option>Priority</option>
                                              <option value="public">Public</option>
                                              <option value="private">Private</option>
                                             </select>


                                        </div>


                                    </div>
                                    <br>

                                    <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>

                                    <button type="submit" name="add_work_projects" id="add_work_projects" class="remodal-confirm">ADD Projects</button>

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

                        <div  align="right">
                            <ul class="nav nav-tabs tabs-right vertical-text right" style="position:fixed;top:90px;right:100px;background:#fff;width:0px;">
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
                                    <a href="#hub-vr" data-toggle="tab" id="hub_tab">WEBSITED FEED</a>
                                </li>
                                <!--<li>
        <a href="#settings-vr" data-toggle="tab">Jun</a>
    </li>-->
                            </ul>
                        </div>
                         <?php /* <div class="col-lg-6 ">
                        <div id="inadex_ads2">
                         <?php
                    $get_ads_exe2=mysqli_query($conn,"select * from advertisments2 order by RAND() desc limit 1");
					$ads2=mysqli_fetch_array($get_ads_exe2);

					?>
                            <img class="b_s" src="Console/advertises2/<?php echo $ads2['advertise_image2'];?>" style="width:200px; height:900px;" />
                            </div>
                        </div>
												*/?>

            </div>
            <div>
</div>
        </div>
    </div>
		<footer>
		</footer>

<script type="text/javascript">
//dairy tab change script

function chng_dryfeed()
{
	document.getElementById('dry_feed11').style.display='block';
	document.getElementById('dry_feed12').style.display='none';
	document.getElementById('dry_indu21').style.display='block';
	document.getElementById('dry_indu22').style.display='none';
	document.getElementById('dry_ink31').style.display='block';
	document.getElementById('dry_ink32').style.display='none';
	document.getElementById('dry_not41').style.display='block';
	document.getElementById('dry_not42').style.display='none';
	document.getElementById('dry_uinfo51').style.display='block';
	document.getElementById('dry_uinfo52').style.display='none';

}
function chng_dryindu()
{
	document.getElementById('dry_feed11').style.display='none';
	document.getElementById('dry_feed12').style.display='block';
	document.getElementById('dry_indu21').style.display='none';
	document.getElementById('dry_indu22').style.display='block';
	document.getElementById('dry_ink31').style.display='block';
	document.getElementById('dry_ink32').style.display='none';
	document.getElementById('dry_not41').style.display='block';
	document.getElementById('dry_not42').style.display='none';
	document.getElementById('dry_uinfo51').style.display='block';
	document.getElementById('dry_uinfo52').style.display='none';

}
function chng_dryinkd()
{
	document.getElementById('dry_feed11').style.display='none';
	document.getElementById('dry_feed12').style.display='block';
	document.getElementById('dry_indu21').style.display='block';
	document.getElementById('dry_indu22').style.display='none';
	document.getElementById('dry_ink31').style.display='none';
	document.getElementById('dry_ink32').style.display='block';
	document.getElementById('dry_not41').style.display='block';
	document.getElementById('dry_not42').style.display='none';
	document.getElementById('dry_uinfo51').style.display='block';
	document.getElementById('dry_uinfo52').style.display='none';

}
function chng_drynoted()
{
	document.getElementById('dry_feed11').style.display='none';
	document.getElementById('dry_feed12').style.display='block';
	document.getElementById('dry_indu21').style.display='block';
	document.getElementById('dry_indu22').style.display='none';
	document.getElementById('dry_ink31').style.display='block';
	document.getElementById('dry_ink32').style.display='none';
	document.getElementById('dry_not41').style.display='none';
	document.getElementById('dry_not42').style.display='block';
	document.getElementById('dry_uinfo51').style.display='block';
	document.getElementById('dry_uinfo52').style.display='none';

}
function chng_dryuinfo()
{
	document.getElementById('dry_feed11').style.display='none';
	document.getElementById('dry_feed12').style.display='block';
	document.getElementById('dry_indu21').style.display='block';
	document.getElementById('dry_indu22').style.display='none';
	document.getElementById('dry_ink31').style.display='block';
	document.getElementById('dry_ink32').style.display='none';
	document.getElementById('dry_not41').style.display='block';
	document.getElementById('dry_not42').style.display='none';
	document.getElementById('dry_uinfo51').style.display='none';
	document.getElementById('dry_uinfo52').style.display='block';

}

</script>



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="../preloaders/css3-preloader-transition-finish/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
	<script src="../preloaders/css3-preloader-transition-finish/js/main.js"></script>

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

         <script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script>

    </body>
</html>
