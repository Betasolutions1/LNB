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
                                        
                                         <a href="club_logout.php" style="on-hover:#AFDF7C;" ><i style="margin-top:15px;" class="fa fa-sign-out"></i></a>
                                        
                                                                              
                                    </ul>
                                   
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab8">
                                        <!--club sheet-->
                                           <?php include 'club_files/club_sheet.php';?>
                                        </div>
                                        <div class="tab-pane" id="tab9">
                                        <!--networking-->
                                           <?php include 'club_files/networking.php';?>
                                        </div>
                                        <div class="tab-pane" id="tab10">
                                           <?php include 'club_files/suggestions.php';?>
                                        </div>
                                        <div class="tab-pane" id="tab11">
                                           <?php include 'club_files/tags.php';?>
                                        </div>
                                        <div class="tab-pane" id="tab12">
                                            <?php include 'club_files/club_settings.php';?>
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
                                       
                                        
                                        <?php include 'Dairy_files/news_feed.php';?>
                                        
                                        
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
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
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

function connect_suggest(whos_sugg,sugg_id)
{
	//var whos_sugg = document.getElementById("whos_sugg").value;
	//var sugg_id = document.getElementById("sugg_id").value;
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
					
		return false;
}

//---Disconnect suggest---

function disconnect_suggest(diswhos_sugg,dissugg_id)
{
	var dataString= 'diswhos_sugg='+diswhos_sugg+ '&dissugg_id=' +dissugg_id;
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
					
		return false;
}

//----Networking-----

function inse_msg() {
	//alert("hello" );
    var chat_txt  = document.getElementById("chat_txt").value;
    var msg_time_date = document.getElementById("msg_time_date").value;
	 var msg_user_id = document.getElementById("msg_user_id").value;
	//alert("hello" + user_id );
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'chat_txt=' + chat_txt + '&msg_time_date=' + msg_time_date + '&msg_user_id=' +msg_user_id;
      
                    // AJAX code to submit form.
                    $.ajax({
                    type: "POST",
                    url: "script_code.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    //alert(html);
					document.getElementById("chat_txt").value='';
                    }
                    });
               
        return false;
}

//-----Tags begin

function add_refrals()
{
	var club_memb  = document.getElementById("club_memb").value;
    var tag_title = document.getElementById("tag_title").value;
	var vendor_name = document.getElementById("vendor_name").value;
	var vendor_phone = document.getElementById("vendor_phone").value;
    var vendor_email = document.getElementById("vendor_email").value;
	
	//alert("hello" + user_id );
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'club_memb=' + club_memb + '&tag_title=' + tag_title + '&vendor_name=' +vendor_name+ '&vendor_phone=' +vendor_phone+ '&vendor_email=' +vendor_email;
      
                    // AJAX code to submit form.
                    $.ajax({
                    type: "POST",
                    url: "script_code.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    //alert(html);
					document.getElementById("tag_title").value='';
					document.getElementById("vendor_name").value='';
					document.getElementById("vendor_phone").value='';
					document.getElementById("vendor_email").value='';
                    }
                    });
               
        return false;
}

//--accept tags

function acc_tags(accref_id,accwhom_id)
{
	var dataString= 'accref_id='+accref_id+ '&accwhom_id=' +accwhom_id;
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
					
		return false;
}

function reje_tags(rejref_id,rejwhom_id)
{
	var dataString= 'rejref_id='+rejref_id+ '&rejwhom_id=' +rejwhom_id;
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
					
		return false;
}

//---Change pwd form Club--
function change_pwd()
{
	//alert('hello');
	 var old_pwd  = document.getElementById("old_pwd").value;
    var new_password = document.getElementById("new_password").value;
	var re_password = document.getElementById("re_password").value;
	
	//alert("hello" + user_id );
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'old_pwd=' + old_pwd + '&new_password=' + new_password + '&re_password=' +re_password ;
      
                    // AJAX code to submit form.
                    $.ajax({
                    type: "POST",
                    url: "script_code.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    //alert(html);
					document.getElementById("new_password").value='';
					document.getElementById("old_pwd").value='';
					document.getElementById("re_password").value='';
					
                    }
                    });
               
        return false;
	
}

//--remove Club--

function remove_club(club_rm_id)
{
	var dataString= 'club_rm_id='+club_rm_id;
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
					
		return false;
}

</script>


        <!--Bookmark End-->
        <!--Get club member Suggestions-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">
</script>
<script type="text/javascript">
function Get_clb_user_sugg(str)
{
	
if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
xmlhttp.open("GET","club_user_sugg.php?q="+str,true);
xmlhttp.send();
}
</script>
        
        <!--End Suggestions-->
        
        
        
    </body>
</html>
