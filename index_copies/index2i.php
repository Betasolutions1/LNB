
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
         <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/style.css">
        <style>
		/*.dropdown {
    position: relative;
    display: inline-block;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content p {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}
.dropdown:hover.dropdown-content {
    display: block;
}
*/
	.popover.fade.bottom.in{
			/*width:400px;
			height:200px;
			margin-left:-90px;*/
			}
        /* hola bonita */
            /*#parallelogram {
            width: 150px;
            height: 100px;
            -webkit-transform: skew(20deg);
            -moz-transform: skew(20deg);
            -o-transform: skew(20deg);
            background:#afdf7c;
            }*/
</style>
<!-- notification-->
<style>

.dropdown-content:before {
    overflow:hidden;
    bottom: 100%;
    left: 50%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    /**/
    border-bottom-color: #f9f9f9;
    border-width: 8px;
    margin-left: -7px;
    
}
.dropdown-content {
	
	margin-left:-50px;
    margin-top: 10px;
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 250px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content p {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
	
}



.dropdown:hover .dropdown-content {
    display: block;
	
}

</style>

<!--<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css'>
<link rel="stylesheet" href="css/style2.css">-->


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
                    <div class="dropdown">
                    <a class="navbar-brand" href="#" id="lnb" style="font-family:Stencil Std;">
    LN.BUSINESS</a>
    <div class="dropdown-content" style="margin-top:50px;font-family:Stencil Std;">
    
    <p>ghfghfh</p>
    <p>ghfghfh</p>
   
    </div>
    </div>
    
                </div>
                
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li style=" padding-left:30px; padding-top:10px; padding-right:100px;">
                            <input type="text" placeholder="search" style="width:350px; height:30px">
                        </li>
                        <li class="active">
                            <a href="#" style="font-family:Stencil Std; font-size:24px; padding-left:25px; padding-right:25px;">F</a>
                        </li>
                        <li>
                            <a href="#about" style="font-family:Stencil Std; font-size:24px; padding-left:25px; padding-right:25px;">M</a>
                        </li>
                        <li>
                            <a href="#contact" style="font-family:Stencil Std; font-size:24px; padding-left:25px; padding-right:25px;">S</a>
                        </li>
                        <li>
                                        <p class="diary" style="padding-top:5px; padding-left:50px;"><span class="day" style="font-family:Stencil Std; font-size:11px;"><?php echo date("l"); ?></span><br><span class="month" style="font-family:Stencil Std; font-size:11px;"><?php echo date("F"); ?></span><br><span class="year" style="font-family:Stencil Std; font-size:11px;"><?php echo date("Y"); ?></span></p>
                                    </li>
                                    <li>
                                        <!--<hr style="width:0px; height:10px;" class="vertical" />-->
                                        <div style="border-left:2px solid #d3d3d3;margin-top:6px; margin-left:4px; margin-right:4px;" class="line_div">
</div>
                                    </li>
                                    <li>
                                        <span class="date" style="font-family:Stencil Std; font-size:40px; padding-top:5px; padding-right:10px;"><?php echo date("j"); ?></span>
                                    </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
        <div class="container-fluid paper" style=" padding-top: 30px;">
            <div class="row" style="overflow-x:none;"> 
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
                            <div class="pst_main_background pst_box " style="background-color:#fff;">
                                <br>
                                <div class="club_sub_div_height">
                                    <ul class="nav nav-tabs"> 
                                        <li class="active">
                                            <a href="#tab6" data-toggle="tab"><i class="fa fa-pencil"></i> Work</a>
                                        </li>                                         
                                        <li>
                                            <a href="#tab7" data-toggle="tab"><i class="fa fa-pencil"></i> Space</a>
                                        </li>                                         
                                        <!-- <li>
        <a href="#tab8" data-toggle="tab">Messages</a>
    </li>     
    <li>
        <a href="#tab9" data-toggle="tab" data-pg-id="689">Settings</a>
    </li>     -->
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab6">
                                            <div class="accordion-wrap">
                                                <div class="accordion">
                                                    <a href="#" class="active"><i class="fa fa-user"></i> TODO</a>
                                                    <div class="sub-nav active">
                                                        <!--  <div class="html about-me">
        <div class="photo">
            <div class="photo-overlay">
                <span class="plus" data-pg-id="700">+</span>
            </div>
        </div>
        <h4 data-pg-id="701">@khadkamhn</h4>
        <p data-pg-id="702">Hi, It's me Mohan. I'm a web and graphics designer. Designing is my passion and I have been working on various designing projects.</p>
        <div class="social-link" data-pg-id="703">
            <a class="link link-twitter" href="http://twitter.com/khadkamhn/" target="_blank" data-pg-id="704"><i class="fa fa-twitter" data-pg-id="705"></i></a>
            <a class="link link-codepen" href="http://codepen.io/khadkamhn/" target="_blank" data-pg-id="706"><i class="fa fa-codepen" data-pg-id="707"></i></a>
            <a class="link link-facebook" href="http://facebook.com/khadkamhn/" target="_blank" data-pg-id="708"><i class="fa fa-facebook" data-pg-id="709"></i></a>
            <a class="link link-dribbble" href="http://dribbble.com/khadkamhn" target="_blank" data-pg-id="710"><i class="fa fa-dribbble" data-pg-id="711"></i></a>
        </div>
    </div>-->
                                                        <div id="todo" class="panel">
                                                            <h2 class="panel-title">Tasks</h2>
                                                            <!--<h2 class="panel-title">Tasks </h2>-->
                                                            <div class="w_todo td_div">
                                                                <span class=" todo_right"><a href="#modal"> <i class="fa fa-plus "></i></a></span>
                                                                <!-- <span class="todo_right " ><a href="#"><i class="fa fa-id-card"></i></a></span>-->
                                                                <span class="todo_right " id="datepicker2"><a href="#" data-toggle=""><i class="fa fa-calendar "></i></a></span>
                                                                <span id="test" class="todo_right "><a href="#" id="check" onclick="Check()"><i class="fa fa-check-square-o "></i></a></span>
                                                            </div>
                                                            <div class="panel-content">
                                                                <form>
                                                                    <fieldset>
                                                                        <ul class="tasks">
                                                                            <li class="task">
                                                                                <input type="checkbox" name="todo-tasks" id="task1" checked="checked" />
                                                                                <label for="task1">Prepare for Session
                                                                                    <span class="line-through"></span>
                                                                                </label>
                                                                            </li>
                                                                            <li class="task">
                                                                                <input type="checkbox" name="todo-tasks" id="task2" checked="checked" />
                                                                                <label for="task2">Assign Tasks
                                                                                    <span class="line-through"></span>
                                                                                </label>
                                                                            </li>
                                                                            <li class="task">
                                                                                <input type="checkbox" name="todo-tasks" id="task3" />
                                                                                <label for="task3">Be there on time
                                                                                    <span class="line-through"></span>
                                                                                </label>
                                                                            </li>
                                                                            <li class="task">
                                                                                <input type="checkbox" name="todo-tasks" id="task4" />
                                                                                <label for="task4">Start Session
                                                                                    <span class="line-through"></span>
                                                                                </label>
                                                                            </li>
                                                                        </ul>
                                                                    </fieldset>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="ws_ta_tab_a"><i class="fa fa-comments"></i> LEDGER</a>
                                                    <div class="sub-nav">
                                                        <div class="html chat">
                                                            <div class="user user-khadkamhn clearfix">
                                                                <span class="text-msg pull-right">I'm so unhappy :(</span>
                                                            </div>
                                                            <div class="user user-khadkamhn clearfix">
                                                                <span class="text-msg pull-right">I have no invitation in dribbble yet. why?</span>
                                                            </div>
                                                            <div class="user user-dribble clearfix">
                                                                <span class="photo pull-left" data-username="dribbble"><i class="fa fa-dribbble"></i></span>
                                                                <span class="text-msg">Don't worry dude!</span>
                                                            </div>
                                                            <div class="user user-dribble clearfix">
                                                                <span class="photo pull-left" data-username="dribbble"><i class="fa fa-dribbble"></i></span>
                                                                <span class="text-msg">Some awesome people may find you and invite you soon.... :)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="#"><i class="fa fa-envelope"></i> CLIENTS <span class="pull-right alert-numb">21</span></a>
                                                    <div class="sub-nav">
                                                        <a href="#">Inbox <span class="pull-right alert-numb">11</span></a>
                                                        <a href="#">Important <span class="pull-right alert-numb">10</span></a>
                                                        <a href="#">Sent</a>
                                                        <a href="#">Draft</a>
                                                        <a href="#">Trash</a>
                                                        <a href="#">All messages</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab7">
                                            <br>
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
                                                            <div style="width:150px; height:180px;" align="center" id="c_hs">
                                                                <img src="images/profile/6.jpg" width="120" style="border-radius:50%; padding-left:3px; padding-top:3px;" alt="" />
                                                                <h4 style=" color:#afdf7c">
              Rajesh</h4>
                                                                <h5 style=" color:#afdf7c">
              CEO</h5>
                                                            </div>
                                                            <div style="width:150px; height:180px;" align="center" id="c_hs">
                                                                <img src="images/profile/6.jpg" width="120" style="border-radius:50%; padding-left:3px; padding-top:3px;" alt="" />
                                                                <h4 style=" color:#afdf7c">
              Rajesh</h4>
                                                                <h5 style=" color:#afdf7c">
              CEO</h5>
                                                            </div>
                                                            <div style="width:150px; height:180px;" align="center" id="c_hs">
                                                                <img src="images/profile/6.jpg" width="120" style="border-radius:50%; padding-left:3px; padding-top:3px;" alt="" />
                                                                <h4 style=" color:#afdf7c">
              Rajesh</h4>
                                                                <h5 style=" color:#afdf7c">
              CEO</h5>
                                                            </div>
                                                            <div style="width:150px; height:180px;" align="center" id="c_hs">
                                                                <img src="images/profile/6.jpg" width="120" style="border-radius:50%; padding-left:3px; padding-top:3px;" alt="" />
                                                                <h4 style=" color:#afdf7c">
              Rajesh</h4>
                                                                <h5 style=" color:#afdf7c">
              CEO</h5>
                                                            </div>
                                                            <div style="width:150px; height:180px;" align="center" id="c_hs">
                                                                <img src="images/profile/6.jpg" width="120" style="border-radius:50%; padding-left:3px; padding-top:3px;" alt="" />
                                                                <h4 style=" color:#afdf7c">
              Rajesh</h4>
                                                                <h5 style=" color:#afdf7c">
              CEO</h5>
                                                            </div>
                                                        </div>
                                                        <div style="width:150px; height:180px;" align="center" id="c_hs">
                                                            <img src="images/profile/6.jpg" width="120" style="border-radius:50%; padding-left:3px; padding-top:3px;" alt="" />
                                                            <h4 style=" color:#afdf7c">
              Rajesh</h4>
                                                            <h5 style=" color:#afdf7c">
              CEO</h5>
                                                        </div>
                                                        <div style="width:150px; height:180px;" align="center" id="c_hs">
                                                            <img src="images/profile/6.jpg" width="120" style="border-radius:50%; padding-left:3px; padding-top:3px;" alt="" />
                                                            <h4 style=" color:#afdf7c">
              Rajesh</h4>
                                                            <h5 style=" color:#afdf7c">
              CEO</h5>
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                                <div class="col-lg-12">
                                                    <br>
                                                    <h4 class="club_headers">
        DISSCUSSIONS </h4>
                                                    <input type="text" placeholder="INK..." class="club_txt" style="margin-top:5px;margin-bottom:5px;">
                                                    <br>
                                                    <div class="club_network" style="height:300px; background-color:#eee;">
                                                        <div class="row club_network_row" style="width:100%;">
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
                                                        </div>
                                                        <div class="row club_network_row" style="width:100%;">
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
                                                        </div>
                                                        <div class="row club_network_row" style="width:100%;">
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
                                                        </div>
                                                        <div class="row club_network_row" style="width:100%;">
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
                                                        </div>
                                                        <div class="row club_network_row" style="width:100%;">
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
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="club-vr">
                            <div class="pst_main_background pst_box " align="center" style="background-color:#fff; z-index:-1;">
                                <br>
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
                                            <div>
                                                <div>
                                                    <h4 class="club_headers">
        CLUB ID # 1234</h4>
                                                    <div class="col-lg-12 club_txtbox" style="padding-left:0px; padding-right:10px;paddin-top:0px;margin-top:0px;">
                                                        <!--<textarea class="form-control txt" rows="1" style="height:35px;"></textarea>-->
                                                        <input type="text" placeholder="Suggest Me To" class="club_txt">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row" style="margin-top:30px;">
                                                    <br>
                                                    <h3 class="club_headers">
        Ankitha Info</h3>
                                                    <div class="col-lg-12 club_txtbox" style="padding-left:0px; padding-right:10px; background-color:#eee;">
                                                        <!--<textarea class="form-control txt" rows="1" style="height:35px;"></textarea>-->
                                                        <p class="club_info">
    Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem singulis est id. Enim sale adolescens vim te. Ea ignota gloriatur eos, no minim zril quo. Mei graece recteque id. Cu per facer recusabo, te labore equidem vix, cu eam singulis mediocrem. Et nec facete maiestatis, quo impedit aliquando ei. Saepe animal recteque ad eam, sea vitae putent causae ei, eu qui everti vituperata.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="margin:10px;"> 
                                                <div class="col-lg-4 grow" align="center">
                                                    <h4>
        IT-SOFTWARE</h4>
                                                    <img src="images/profile/6.jpg" width="70" style="margin-top:5px;">
                                                    <br>
                                                    <span>Rajesh</span>
                                                    <br>
                                                    <span>CEO-Beta Solutions</span>
                                                    <br>
                                                    <span>IT-Softwarre</span>
                                                    <h4>
      gayatri hospital</h4>
                                                    <p>
            Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem singulis est id. Enim sale adolescens vim te. Ea ignota gloriatur eos, no minim zril quo. Mei graece recteque id. Cu per facer</p>
                                                </div>
                                                <div class="col-lg-4 grow" align="center">
                                                    <h4>
        IT-SOFTWARE</h4>
                                                    <img src="images/profile/6.jpg" width="70" style="margin-top:5px;">
                                                    <br>
                                                    <span>Rajesh</span>
                                                    <br>
                                                    <span>CEO-Beta Solutions</span>
                                                    <br>
                                                    <span>IT-Softwarre</span>
                                                    <h4>
      gayatri hospital</h4>
                                                    <p>
            Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem singulis est id. Enim sale adolescens vim te. Ea ignota gloriatur eos, no minim zril quo. Mei graece recteque id. Cu per facer</p>
                                                </div>
                                                <div class="col-lg-4 grow" align="center">
                                                    <h4>
        IT-SOFTWARE</h4>
                                                    <img src="images/profile/6.jpg" width="70" style="margin-top:5px;">
                                                    <br>
                                                    <span>Rajesh</span>
                                                    <br>
                                                    <span>CEO-Beta Solutions</span>
                                                    <br>
                                                    <span>IT-Softwarre</span>
                                                    <h4>
      gayatri hospital</h4>
                                                    <p>
            Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem singulis est id. Enim sale adolescens vim te. Ea ignota gloriatur eos, no minim zril quo. Mei graece recteque id. Cu per facer</p>
                                                </div>
                                                <div class="col-lg-4 grow" align="center">
                                                    <h4>
        IT-SOFTWARE</h4>
                                                    <img src="images/profile/6.jpg" width="70" style="margin-top:5px;">
                                                    <br>
                                                    <span>Rajesh</span>
                                                    <br>
                                                    <span>CEO-Beta Solutions</span>
                                                    <br>
                                                    <span>IT-Softwarre</span>
                                                    <h4>
      gayatri hospital</h4>
                                                    <p>
            Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem singulis est id. Enim sale adolescens vim te. Ea ignota gloriatur eos, no minim zril quo. Mei graece recteque id. Cu per facer</p>
                                                </div>
                                                <div class="col-lg-4 grow" align="center">
                                                    <h4>
        IT-SOFTWARE</h4>
                                                    <img src="images/profile/6.jpg" width="70" style="margin-top:5px;">
                                                    <br>
                                                    <span>Rajesh</span>
                                                    <br>
                                                    <span>CEO-Beta Solutions</span>
                                                    <br>
                                                    <span>IT-Softwarre</span>
                                                    <h4>
      gayatri hospital</h4>
                                                    <p>
            Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem singulis est id. Enim sale adolescens vim te. Ea ignota gloriatur eos, no minim zril quo. Mei graece recteque id. Cu per facer</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab9">
                                            <h4 class="club_headers">
        Networking </h4>
                                            <input type="text" placeholder="Let's Network" class="club_txt">
                                            <br>
                                            <br>
                                            <div class="club_network">
                                                <div class="row club_network_row" style="width:100%;">
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
                                                </div>
                                                <div class="row club_network_row" style="width:100%;">
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
                                                </div>
                                                <div class="row club_network_row" style="width:100%;">
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
                                                </div>
                                                <div class="row club_network_row" style="width:100%;">
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
                                                </div>
                                                <div class="row club_network_row" style="width:100%;">
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
                                                </div>
                                                <div class="row club_network_row" style="width:100%;">
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
                                                </div>
                                                <div class="row club_network_row" style="width:100%;">
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
                                                </div>
                                                <div class="row club_network_row" style="width:100%;">
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
                                                </div>
                                                <div class="row club_network_row" style="width:100%;">
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
                                                </div>
                                                <div class="row club_network_row" style="width:100%;">
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
                                                </div>
                                                <div class="row club_network_row" style="width:100%;">
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
                                                </div>
                                                <div class="row club_network_row" style="width:100%;">
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
                                                </div>
                                                <div class="row club_network_row" style="width:100%;">
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
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab10">
                                            <h4 class="club_headers">
       Suggestions</h4>
                                            <br>
                                            <div class="row">
                                                <div class="club_suggest_top_div row">
                                                    <div class="col-lg-2" style="padding-left:0px;padding-right:0px; width:80px; ">
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
                                                    </div>
                                                </div>
                                                <div class="club_sugg_scroll">
                                                    <div class="td_div club_sug_row_bg" style="  height:30px;">
                                                        <div class="col-lg-10" style="text-align:left">
                                                            <span>Lorem ipsum dolor sit amet, inimicus electrama </span> 
                                                        </div>
                                                        <div align="right" class="col-lg-2" style="text-align:right;">
                                                            <span style="text-align:right; color:#d3d3d3;font-size:12px; ">30-01-2017</span>
                                                        </div>
                                                    </div>
                                                    <div class="td_div club_sug_row_bg" style="  height:30px;">
                                                        <div class="col-lg-10" style="text-align:left">
                                                            <span>Lorem ipsum dolor sit amet, inimicus electrama </span> 
                                                        </div>
                                                        <div align="right" class="col-lg-2" style="text-align:right;">
                                                            <span style="text-align:right; color:#d3d3d3;font-size:12px; ">30-01-2017</span>
                                                        </div>
                                                    </div>
                                                    <div class="td_div club_sug_row_bg" style="  height:30px;">
                                                        <div class="col-lg-10" style="text-align:left">
                                                            <span>Lorem ipsum dolor sit amet, inimicus electrama </span> 
                                                        </div>
                                                        <div align="right" class="col-lg-2" style="text-align:right;">
                                                            <span style="text-align:right; color:#d3d3d3;font-size:12px; ">30-01-2017</span>
                                                        </div>
                                                    </div>
                                                    <div class="td_div club_sug_row_bg" style="  height:30px;">
                                                        <div class="col-lg-10" style="text-align:left">
                                                            <span>Lorem ipsum dolor sit amet, inimicus electrama </span> 
                                                        </div>
                                                        <div align="right" class="col-lg-2" style="text-align:right;">
                                                            <span style="text-align:right; color:#d3d3d3;font-size:12px; ">30-01-2017</span>
                                                        </div>
                                                    </div>
                                                    <div class="td_div club_sug_row_bg" style="  height:30px;">
                                                        <div class="col-lg-10" style="text-align:left">
                                                            <span>Lorem ipsum dolor sit amet, inimicus electrama </span> 
                                                        </div>
                                                        <div align="right" class="col-lg-2" style="text-align:right;">
                                                            <span style="text-align:right; color:#d3d3d3;font-size:12px; ">30-01-2017</span>
                                                        </div>
                                                    </div>
                                                    <div class="td_div club_sug_row_bg" style="  height:30px;">
                                                        <div class="col-lg-10" style="text-align:left">
                                                            <span>Lorem ipsum dolor sit amet, inimicus electrama </span> 
                                                        </div>
                                                        <div align="right" class="col-lg-2" style="text-align:right;">
                                                            <span style="text-align:right; color:#d3d3d3;font-size:12px; ">30-01-2017</span>
                                                        </div>
                                                    </div>
                                                    <div class="td_div club_sug_row_bg" style="  height:30px;">
                                                        <div class="col-lg-10" style="text-align:left">
                                                            <span>Lorem ipsum dolor sit amet, inimicus electrama </span> 
                                                        </div>
                                                        <div align="right" class="col-lg-2" style="text-align:right;">
                                                            <span style="text-align:right; color:#d3d3d3;font-size:12px; ">30-01-2017</span>
                                                        </div>
                                                    </div>
                                                    <div class="td_div club_sug_row_bg" style="  height:30px;">
                                                        <div class="col-lg-10" style="text-align:left">
                                                            <span>Lorem ipsum dolor sit amet, inimicus electrama </span> 
                                                        </div>
                                                        <div align="right" class="col-lg-2" style="text-align:right;">
                                                            <span style="text-align:right; color:#d3d3d3;font-size:12px; ">30-01-2017</span>
                                                        </div>
                                                    </div>
                                                    <div class="td_div club_sug_row_bg" style="  height:30px;">
                                                        <div class="col-lg-10" style="text-align:left">
                                                            <span>Lorem ipsum dolor sit amet, inimicus electrama </span> 
                                                        </div>
                                                        <div align="right" class="col-lg-2" style="text-align:right;">
                                                            <span style="text-align:right; color:#d3d3d3;font-size:12px; ">30-01-2017</span>
                                                        </div>
                                                    </div>
                                                    <div class="td_div club_sug_row_bg" style="  height:30px;">
                                                        <div class="col-lg-10" style="text-align:left">
                                                            <span>Lorem ipsum dolor sit amet, inimicus electrama </span> 
                                                        </div>
                                                        <div align="right" class="col-lg-2" style="text-align:right;">
                                                            <span style="text-align:right; color:#d3d3d3;font-size:12px; ">30-01-2017</span>
                                                        </div>
                                                    </div>
                                                    <div class="td_div club_sug_row_bg" style="  height:30px;">
                                                        <div class="col-lg-10" style="text-align:left">
                                                            <span>Lorem ipsum dolor sit amet, inimicus electrama </span> 
                                                        </div>
                                                        <div align="right" class="col-lg-2" style="text-align:right;">
                                                            <span style="text-align:right; color:#d3d3d3;font-size:12px; ">30-01-2017</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="row">
                                                <div class="club_suggest_top_div row" style="padding-top:10px;padding-bottom:10px;">
                                                    <!--<div class="col-lg-2" style="padding-left:0px;padding-right:0px; width:80px; ">
        <div class="col-lg-4" align="left" style="padding-left:3px;padding-right:0px; width:80px;">
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
                                                    <div class="td_div club_sug_row_bg" style="  height:50px;">
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
                                                    </div>
                                                    <div class="td_div club_sug_row_bg" style="  height:50px;">
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
                                                    </div>
                                                    <div class="td_div club_sug_row_bg" style="  height:50px;">
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
                                                    </div>
                                                    <div class="td_div club_sug_row_bg" style="  height:50px;">
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
                                                    </div>
                                                    <div class="td_div club_sug_row_bg" style="  height:50px;">
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
                                                    </div>
                                                    <div class="td_div club_sug_row_bg" style="  height:50px;">
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab11">
                                            <h4 class="club_headers">
       Tags</h4>
                                            <br>
                                            <div class="row" style="width:400px">
                                                <h4 class="club_headers">
        Add Tags</h4>
                                                <form role="form">
                                                    <div class="form-group"> 
                                                        <select id="formInput139" class="select_color"> 
                                                            <option>club member 1</option>                                                             
                                                            <option>club member 2</option>                                                             
                                                            <option>club member 3</option>                                                             
                                                        </select>
                                                    </div>                                                     
                                                    <div class="form-group"> 
                                                        <input type="text" class="form-control" id="tagtitle" placeholder="Tag Title"> 
                                                    </div>                                                     
                                                    <div class="form-group"> 
                                                        <input type="text" class="form-control" id="tagtitle" placeholder="Vendor Name"> 
                                                    </div>                                                     
                                                    <div class="form-group"> 
                                                        <input type="text" class="form-control" id="tagtitle" placeholder="Vendor phone no"> 
                                                    </div>                                                     
                                                    <div class="form-group"> 
                                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Vendor email"> 
                                                    </div>                                                     
                                                    <button type="submit" class="btn btn_grn">Submit</button>                                                     
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
                                                    <div class="td_div club_sug_row_bg" style="  height:50px;">
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
                                                    </div>
                                                    <div class="td_div club_sug_row_bg" style="  height:50px;">
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
                                                    </div>
                                                    <div class="td_div club_sug_row_bg" style="  height:50px;">
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
                                                    </div>
                                                    <div class="td_div club_sug_row_bg" style="  height:50px;">
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
                                                    </div>
                                                    <div class="td_div club_sug_row_bg" style="  height:50px;">
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
                                                    </div>
                                                    <div class="td_div club_sug_row_bg" style="  height:50px;">
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
                                                    </div>
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
                                                    <div class="td_div club_sug_row_bg" style="  height:50px;">
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
                                                    </div>
                                                    <div class="td_div club_sug_row_bg" style="  height:50px;">
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
                                                    </div>
                                                    <div class="td_div club_sug_row_bg" style="  height:50px;">
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
                                                    </div>
                                                    <div class="td_div club_sug_row_bg" style="  height:50px;">
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
                                                    </div>
                                                    <div class="td_div club_sug_row_bg" style="  height:50px;">
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
                                                    </div>
                                                    <div class="td_div club_sug_row_bg" style="  height:50px;">
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab12">
                                            <br>
                                            <h4 class="club_headers">
        Settings</h4>
                                            <br>
                                            <div class="row" style="width:400px;">
                                                <form role="form"> 
                                                    <div class="form-group"> 
                                                        <input type="email" class="form-control" id="old_password" placeholder="Old Password"> 
                                                    </div>                                                     
                                                    <div class="form-group"> 
                                                        <input type="password" class="form-control" id="club_password" placeholder="Password"> 
                                                    </div>                                                     
                                                    <div class="form-group"> 
                                                        <input type="password" class="form-control" id="v_password" placeholder="Verify"> 
                                                    </div>                                                     
                                                    <button type="submit" class="btn btn_grn">Change Password</button>                                                     
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
                                                    <input type="button" value="Remove from this Club" class="btn" style="background-color:#F48E8B; color:#fff;">
                                                    <br>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                        <div class="tab-pane " id="dairy-vr">
                            <div class="pst_main_background pst_box">
                                <ul class="nav nav-tabs"> 
                                    <li class="active">
                                        <a href="#tab1" data-toggle="tab"><i class="fa fa-pencil"></i> Following</a>
                                    </li>                                     
                                    <li>
                                        <a href="#tab2" data-toggle="tab"><i class="fa fa-pencil"></i> Industry</a>
                                    </li>                                     
                                    <li>
                                        <a href="#tab3" data-toggle="tab"><i class="fa fa-pencil"></i> Inked</a>
                                    </li>                                     
                                    <li>
                                        <a href="#tab4" data-toggle="tab"><i class="fa fa-pencil"></i> Noted</a>
                                    </li>
                                    <li>
                                        <a href="#tab5" data-toggle="tab"><i class="fa fa-pencil"></i> Ankitha</a>
                                    </li>                                     
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab1">
                                        <div>
                                            <br>
                                            <div style="background-color:transparent" class="shdw">
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
                                            <div class="bg_pst">
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
                                            </div>
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
                                    <div class="tab-pane" id="tab5">
                                        <div style="background-color:#fff;height:850px; width:590px; ">
                                            <div>
                                                <div style="height:80px;position:relative;  background-color:#afdf7c; z-index:1;" align="right">
                                                    <h1 style="padding-top:30px; padding-right:20px;color:#fff; font-size:40px; font-family:lato-regular;">
            Rajesh</h1>
                                                </div>
                                                <div style="z-index:3;position:relative; top:-50px; left:20px; border:5px solid #fff; width:140px; padding:0px; border-radius:50%;">
                                                    <img src="images/profile/6.jpg" width="130px" style="border-radius:50%" />
                                                </div>
                                                <div style="height:150px;width: 591px;;background-color: rgb(216, 216, 216);z-index: 2;margin: 0px 0px 0px 540px !important;top: -140px;left: -540px;position: relative ;" align="right">
                                                    <div class="row">
                                                        <div class="col-lg-4" style="height:150px;width:170px; background-color:#fff;border-bottom:1px dashed #afdf7c;">
</div>
                                                        <div class="col-lg-8" style="height:150px;width:420px; background-color:#fff; border-bottom:1px dashed #afdf7c;">
                                                            <div class="col-lg-12" style="padding-right: 5px;">
                                                                <h3 class="club_headers" style="text-align:right;font-family:lato-hairline; margin-right:0px;">
            FOUNDER</h3>
                                                            </div>
                                                            <div style="height:30px; ">
                                                                <img src="images/others/d_quote1.png" width="40px" style="opacity:.1" />
                                                            </div>
                                                            <div class="col-lg-12" style="padding-right:0px;">
                                                                <blockquote style="color:#afdf7c; font-family:lato-light; border-left:5px solid #afdf7c;">
                                                                    Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque,s
</blockquote>
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
        +91 9515103611</span>
                                                                </div>
                                                                <div>
                                                                    <h5 style="color:#afdf7c;margin-bottom:2px;">
        ADDRESS</h5>
                                                                    <span>
        NAD</span>
                                                                    <br>
                                                                    <span>VISAKHAPATNAM</span>
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
        rajesh.betasolutions.in</span>
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
        Beta Solutions</span>
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
        Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem singulis est id. Enim sale adolescens vim te. Ea ignota gloriatur eos, no minim zril </p>
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
                                                                    <input type="button" class="btn btn_grn" value="UI" style="height:30px; margin:5px;">
                                                                    <input type="button" class="btn btn_grn" value="PHOTOSHOP" style=" margin:1px; height:30px;">
                                                                    <input type="button" class="btn btn_grn" value="WEB DESIGN" style=" margin:1px; height:30px;"> 
                                                                    <input type="button" class="btn btn_grn" value="PHP" style=" margin:1px; height:30px;"> 
                                                                    <input type="button" class="btn btn_grn" value="3D MODELING" style=" margin:1px;height:30px;">
                                                                    <input type="button" class="btn btn_grn" value="C#" style=" margin:1px;height:30px;"> 
                                                                    <input type="button" class="btn btn_grn" value="DOT.NET" style=" margin:1px;height:30px;"> 
                                                                    <input type="button" class="btn btn_grn" value="CINEMA4D" style=" margin:1px;height:30px;">
                                                                    <input type="button" class="btn btn_grn" value="ANIMATION" style=" margin:1px;height:30px;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="folio-vr">
                            <div class="pst_main_background" style="background-color:#fff;">
                                <div class="pst_box">
                                    <div class="parallax_folio">
</div>
                                    <br>
                                    <br>
                                    <div style="border-top:1px solid #afdf7c;border-bottom:1px solid #afdf7c; width:570px; margin-left:10px; margin-right:10px;">
                                        <br>
                                        <h4 style="color:#afdf7c;">
    WHO I AM </h4>
                                        <P style="color:#d3d3d3">
        Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem singulis est id. Enim sale adolescens vim te. Ea ignota gloriatur eos, no minim zril quo. Mei graece recteque id. Cu per facer recusabo, te labore equidem vix, cu eam singulis mediocrem. Et nec facete maiestatis, quo impedit aliquando ei. Saepe animal recteque ad eam, sea vitae putent causae ei, eu qui everti vituperata</P>
                                        <br>
                                    </div>
                                    <br>
                                    <div style="border-bottom:1px solid #afdf7c; width:570px; margin-left:10px; margin-right:10px;">
                                        <h4 style="color:#afdf7c;">
    SKILLS </h4>
                                        <br>
                                    </div>
                                    <br>
                                    <div style=" width:570px; margin-left:10px; margin-right:10px;">
                                        <h4 style="color:#afdf7c;">
   WORKS </h4>
                                        <BR>
                                    </div>
                                    <div> 
                                        <div class="folio_wrk">
                                            <div align="center" style="color:#fff; height:100px; padding-top:20px;">
                                                <h3> My First Project</h3>
                                            </div>
                                        </div>
                                        <div class="folio_wrk_1">
                                            <div align="center" style="color:#fff; height:100px; padding-top:20px;">
                                                <h3> low polygon </h3>
                                            </div>
                                        </div>
                                        <div class="folio_wrk_2">
                                            <div align="center" style="color:#fff; height:100px; padding-top:20px;">
                                                <h3>landscape</h3>
                                            </div>
                                        </div>
                                        <div class="folio_wrk_3">
                                            <div align="center" style="color:#fff; height:100px; padding-top:20px;">
                                                <h3> dynamic</h3>
                                            </div>
                                        </div>
                                        <div class="folio_wrk_4">
                                            <div align="center" style="color:#fff; height:100px; padding-top:20px;">
                                                <h3>click</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    <!--notification-->
    
   <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js'></script>

    <script src="js/index2.js"></script>-->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
        <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
        <script src="js/index.js"></script>
    </body>
</html>
