<?php
include 'config.php';
session_start();
if(!$_SESSION['Email'])
{
	header("location:signup.php");
}
// insert forum questions
if(isset($_POST['forum_question']))
{
	echo "<script>alert('hello')</script>";
	$ins_forms=mysqli_query($conn,"INSERT INTO `question`( `user_id`, `question`, `que_desc`, `INDUSTRY_ID`) VALUES ('$_SESSION[id]','$_POST[forum_question]','$_POST[quest_desc]','$_POST[set_indus]')");
}

// insert fourm answers--
if(isset($_POST['ans_frms']))
{
	if($_POST['ans_frms']!="")
	{
		$ins_frmans=mysqli_query($conn,"INSERT INTO `answered`(`user_id`, `quest_id`, `answer`) VALUES ('$_SESSION[id]','$_POST[que_id]','$_POST[ans_frms]')");
	}
}
?>