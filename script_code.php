<?php
include 'config.php';
session_start();
if(isset($_POST['sub_post']))
{
	echo "<script>alert('insertion Fail')<script>";
	$ins_post=mysqli_query($conn,"insert into user_post(`user_id`,`post_txt`,`priority`)values('".$_SESSION['id']."','".$_POST['post_data']."','".$_POST['post_priority']."')");
	if($ins_post)
	{
		header("location:index.php");
	}
	else{
		echo "<script>alert('insertion Fail')<script>";
	}
}

if(isset($_POST['luser_id']))
{
	$lpost_id=$_POST['lpost_id'];
	$luser_id=$_POST['luser_id'];
	$result=mysqli_query($conn,"select * from user_post where post_id='$lpost_id'");
	$rio=mysqli_fetch_array($result);
	$n=$rio['likes'];
	mysqli_query($conn,"update user_post set likes=$n+1 where post_id='$lpost_id'");
	mysqli_query($conn,"insert into user_post_status(user_id,post_id,status) values ('$luser_id','$lpost_id','Like')");
}

if(isset($_POST['ulpost_id']))
{
	$ulpost_id=$_POST['ulpost_id'];
	$uluser_id=$_POST['uluser_id'];
	$result=mysqli_query($conn,"select * from user_post where post_id='$ulpost_id'");
	$rio=mysqli_fetch_array($result);
	$n=$rio['likes'];
	mysqli_query($conn,"delete from user_post_status where post_id='$ulpost_id' and user_id='$uluser_id'");
	mysqli_query($conn,"update user_post set likes=$n-1 where post_id='$ulpost_id'");
	
	exit();
}


//---Comment Insertion---

if(isset($_POST['cmt_ins']))
?>




