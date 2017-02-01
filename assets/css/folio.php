<?php

header("Content-type: text/css; charset: UTF-8"); 
include '../../config.php';
session_start();
?>
<?php 

$cover_pic_exe=mysqli_query($conn,"select * from user_cover_pic where user_id='$_SESSION[id]'");
$cvpic=mysqli_fetch_array($cover_pic_exe);
?>
.parallax_folio
{
    height: 250px;
    background-image: url("../../fb_users/<?php echo $_SESSION['Gender'];?>/<?php echo $_SESSION['Email'];?>/Cover/<?php echo $cvpic['image'];?>");
    background-attachment: fixed;
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: cover;
}

.folio_wrk
{
    height: 100px;
    
    background-attachment: fixed;
    background-position: top;
    background-repeat: no-repeat;
    background-size: cover;
}
.folio_wrk_1
{
    height: 100px;
    background-image: url("../../images/post/folio_cover_3.jpg");
    background-attachment: fixed;
    background-position: top;
    background-repeat: no-repeat;
    background-size: cover;
}
.folio_wrk_2
{
    height: 100px;
    background-image: url("../../images/post/folio_cover.jpg");
    background-attachment: fixed;
    background-position: top;
    background-repeat: no-repeat;
    background-size: cover;
}
.folio_wrk_3
{
    height: 100px;
    background-image: url("../../images/post/f_c.jpg");
    background-attachment: fixed;
    background-position: top;
    background-repeat: no-repeat;
    background-size: cover;
}
.folio_wrk_4
{
    height: 100px;
    background-image: url("../../images/post/pst_1.jpg");
    background-attachment: fixed;
    background-position: top;
    background-repeat: no-repeat;
    background-size: cover;
}



