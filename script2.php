<?php
include 'config.php';
session_start();
if(isset($_POST['forum_question']))
{
	echo "<script>alert('hello')</script>";
	$ins_forms=mysqli_query($conn,"INSERT INTO `question`( `user_id`, `question`, `que_desc`, `INDUSTRY_ID`) VALUES ('$_SESSION[id]','$_POST[forum_question]','$_POST[quest_desc]','$_POST[set_indus]')");
}
?>