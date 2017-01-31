<?php
session_start();
$reset=$_SESSION['club_id']='';
$_SESSION['club_user']='';

header("location:index.php");
/*}else
{
	echo "<script>alert('fail')</script>";
}*/
?>