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
        <script src="js/modernizr.min.js"></script>
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
            height: 200px;
            margin-left: 60px;
            margin-right: 60px;
            position: relative;
            }
            .txt
            {
            }
            .txt_
            {
            border:3px #000 !important;
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
                <figure>
                    <a href="http://goo.gl/NJ1Dhf" class="photostack-img">
                        <img src="img/5.jpg" alt="img05" />
                    </a>
                    <figcaption>
                        <h2 class="photostack-title">Speed Racer</h2>
                        <div class="photostack-back">
                            <p>Here he comes Here comes Speed Racer. He's a demon on wheels. Wouldn't you like to get away? Sometimes you want to go where everybody knows <span>the</span> your name. And they're always glad you came! </p>
                        </div>
                    </figcaption>
                </figure>
                <figure>
                    <a href="http://goo.gl/fhwlSP" class="photostack-img">
                        <img src="img/2.jpg" alt="img02" />
                    </a>
                    <figcaption>
                        <h2 class="photostack-title">Happy Days</h2>
                        <div class="photostack-back">
                            <p>These Happy Days are yours and mine Happy Days. It's a beautiful day in this neighborhood a beautiful day for a neighbor. Would you be mine?</p>
                        </div>
                    </figcaption>
                </figure>
                <figure>
                    <a href="http://goo.gl/Jmvr4u" class="photostack-img">
                        <img src="img/3.jpg" alt="img03" />
                    </a>
                    <figcaption>
                        <h2 class="photostack-title">Beautywood</h2>
                        <div class="photostack-back">
                            <p>It's a neighborly day in this beautywood a neighborly day for a beauty. Would you be mine? Could you be mine. Now the world don't move to the beat of just one drum.</p>
                        </div>
                    </figcaption>
                </figure>
                <figure>
                    <a href="http://goo.gl/Qw3ND4" class="photostack-img">
                        <img src="img/1.jpg" alt="img01" />
                    </a>
                    <figcaption>
                        <h2 class="photostack-title">Serenity Beach</h2>
                        <div class="photostack-back">
                            <p>I have never been to a place so serene in my entire life before. Swimming in clear waters opened my mind to nature and reminded me of my and <span>eveybody</span> everybody else's mortality.</p>
                        </div>
                    </figcaption>
                </figure>
                <figure>
                    <a href="http://goo.gl/49lN3k" class="photostack-img">
                        <img src="img/4.jpg" alt="img04" />
                    </a>
                    <figcaption>
                        <h2 class="photostack-title">Heaven of time</h2>
                        <div class="photostack-back">
                            <p>What might be right for you may not be right for some. And we know Flipper lives in a world full of wonder flying there-under under the sea.</p>
                        </div>
                    </figcaption>
                </figure>
                <figure>
                    <a href="http://goo.gl/Ms7VDl" class="photostack-img">
                        <img src="img/6.jpg" alt="img06" />
                    </a>
                    <figcaption>
                        <h2 class="photostack-title">Forever this</h2>
                        <div class="photostack-back">
                            <p>Fish don't fry in the kitchen and beans don't burn on the grill. Took a whole lotta tryin' just to get up that hill. Baby if you've ever wondered - wondered whatever became of me. </p>
                        </div>
                    </figcaption>
                </figure>
                <figure data-dummy>
                    <a href="#" class="photostack-img">
                        <img src="img/7.jpg" alt="img07" />
                    </a>
                    <figcaption>
                        <h2 class="photostack-title">Lovely Green</h2>
                    </figcaption>
                </figure>
                <figure data-dummy>
                    <a href="#" class="photostack-img">
                        <img src="img/8.jpg" alt="img08" />
                    </a>
                    <figcaption>
                        <h2 class="photostack-title">Wonderful</h2>
                    </figcaption>
                </figure>
                <figure data-dummy>
                    <a href="#" class="photostack-img">
                        <img src="img/9.jpg" alt="img09" />
                    </a>
                    <figcaption>
                        <h2 class="photostack-title">Love Addict</h2>
                    </figcaption>
                </figure>
                <figure data-dummy>
                    <a href="#" class="photostack-img">
                        <img src="img/10.jpg" alt="img10" />
                    </a>
                    <figcaption>
                        <h2 class="photostack-title">Friendship</h2>
                    </figcaption>
                </figure>
                <figure data-dummy>
                    <a href="#" class="photostack-img">
                        <img src="img/11.jpg" alt="img11" />
                    </a>
                    <figcaption>
                        <h2 class="photostack-title">White Nights</h2>
                    </figcaption>
                </figure>
                <figure data-dummy>
                    <a href="#" class="photostack-img">
                        <img src="img/12.jpg" alt="img12" />
                    </a>
                    <figcaption>
                        <h2 class="photostack-title">Serendipity</h2>
                    </figcaption>
                </figure>
                <figure data-dummy>
                    <a href="#" class="photostack-img">
                        <img src="img/13.jpg" alt="img13" />
                    </a>
                    <figcaption>
                        <h2 class="photostack-title">Pure Soul</h2>
                    </figcaption>
                </figure>
                <figure data-dummy>
                    <a href="#" class="photostack-img">
                        <img src="img/14.jpg" alt="img14" />
                    </a>
                    <figcaption>
                        <h2 class="photostack-title">Winds of Peace</h2>
                    </figcaption>
                </figure>
                <figure data-dummy>
                    <a href="#" class="photostack-img">
                        <img src="img/15.jpg" alt="img15" />
                    </a>
                    <figcaption>
                        <h2 class="photostack-title">Shades of blue</h2>
                    </figcaption>
                </figure>
                <figure data-dummy>
                    <a href="#" class="photostack-img">
                        <img src="img/16.jpg" alt="img16" />
                    </a>
                    <figcaption>
                        <h2 class="photostack-title">Lightness</h2>
                    </figcaption>
                </figure>
            </div>
        </section>
        <div class="container-fluid  hgt_signup" align="center" style=" text-align:center;">
            <div class="col-lg-6 jumbotron su_div_pad">
</div>
            <div class="col-lg-6 jumbotron su_div_pad">
                <form role="form" method="post" action=""> 
                    <div class="form-group"> 
                        <input type="email" class="form-control  txt_" name="email" id="exampleInputEmail1" placeholder="Entrepreneur"> 
                    </div>                     
                    <div class="form-group"> 
                        <input type="password" class="form-control txt_" name="pwd" id="exampleInputPassword1" placeholder="Password"> 
                    </div>                     
                    <button type="submit" name="login" class="btn">OPEN DAIRY</button>                     
                </form>
            </div>
        </div>
        <footer class="footer">
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
