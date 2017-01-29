<?php
include 'config.php';
session_start();
if(!$_SESSION['Email'])
{
	header("location:login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>LNB</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    
    <style>
	.scroll
	{
		border:solid 1px #221414;overflow-y:scroll;height:250px;
	}
	.img-size
	{
		min-width: 50px;max-width: 50px;max-height: 50px;min-height: 50px;
	}
	.cmt-img
	{
		min-width: 35px;max-width: 35px;max-height: 35px;min-height: 35px;
	}
	</style>
</head>
<body>
<?php
$user_det=mysqli_query($conn,"select * from users where user_id='$_SESSION[id]'");
$usr_dis=mysqli_fetch_array($user_det);
$get_user_ppic_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$_SESSION[id]'");
$fet_ppic=mysqli_fetch_array($get_user_ppic_exe);
?>
<div class="container">
	<div class="row" style="margin-top: 25px;">
		<div class="col-lg-4 scroll" >
			<h2>Friend Request(Card accepted And request Files)</h2>
            <?php include 'other_files/friend_request.php';?>
            
		</div>
		<div class="col-lg-4 scroll"  >
         <?php include 'other_files/news_feed.php';?>
		
		</div>
		<div class="col-lg-4 scroll" >
        <!--club sheet-->
        <h2>Club Sheet</h2>
        <?php include 'club_files/club_sheet.php'; ?>
		<!--club sheet--->
		</div>
        <div class="col-lg-4 scroll" >
        <!--Grp meg-->
        <h2>Grp Msg Or Networking</h2>
        <?php include 'club_files/grp_messages.php'; ?>
		<!--grp msg--->
		</div>
        
         <div class="col-lg-4 scroll" >
        <!--refernce-->
        <h2>References</h2>
        <?php include 'club_files/reference.php'; ?>
		<!--Reference--->
		</div>
        
         <div class="col-lg-4 scroll" >
        <!--Suggestions-->
        <h2>Suggestions</h2>
        <?php include 'club_files/Suggestions.php'; ?>
		<!--En suggestions--->
		</div>
        
         <div class="col-lg-4 scroll" >
        <!--Club Settings-->
        <h2>Club Settings</h2>
        <?php include 'club_files/settings.php'; ?>
		<!--Club Settings--->
		</div>
        
         <div class="col-lg-4 scroll" >
        <!--Card File-->
        <h2>Card files</h2>
        <?php include 'dairy_files/user_cardfile.php'; ?>
		<!--Card Files--->
		</div>
        
        <div class="col-lg-4 scroll" >
        <!--User inustry-->
        <h2>industry</h2>
        <?php include 'dairy_files/user_industry.php'; ?>
		<!--User inustry--->
		</div>
        
        <div class="col-lg-4 scroll" >
        <!--User notes-->
        <h2>Use noted file</h2>
        <?php include 'dairy_files/user_noteds.php'; ?>
		<!--User notes--->
		</div>
        
        <div class="col-lg-4 scroll">
        <!--User profile-->
        <h2>User profile</h2>
        <?php include 'dairy_files/user_profile.php'; ?>
		<!--User profile--->
		</div>
        
        <div class="col-lg-4 scroll" >
        <!--User timeline-->
        <h2>User timeline</h2>
        <?php include 'dairy_files/user_timeline.php'; ?>
		<!--User timeline--->
		</div>
        
         <div class="col-lg-4 scroll">
        <!--User workspace-->
        <h2>Workspace</h2>
        <?php include 'workspace_files/workspace.php'; ?>
		<!--User workspace--->
		</div>
        
	</div>
</div>
<script>
function like() {
	//alert("hello" );
    var lpost_id=$(this).attr('id');
	var luser_id=$(this).attr('data-src');
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

function unlike() {
	//alert("hello" );
    var ulpost_id=$(this).attr('id');
	var uluser_id=$(this).attr('data-src');
	alert("hello" + bpost_id );
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
</script>

</body>
</html>