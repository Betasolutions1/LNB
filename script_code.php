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
{
	$ins_comment=mysqli_query($conn,"INSERT INTO `user_post_comment`( `post_id`, `user_id`, `comment`, `comment_time`) VALUES ('$_POST[cmt_post_id]','$_POST[cmt_ins_id]','$_POST[cmt_txt]','$_POST[cmt_ins_date]')");
	if($ins_comment)
	{
		header("location:index.php");
	}
}

//---TODO Insertion----

/*if(isset($_POST['to_insert']))
{
	$todo_ins=mysqli_query($conn,"INSERT INTO `user_todolist`( `todo_user_id`, `todo_type`, `todo_contact`, `todo_label`, `todo_datetime`) VALUES ('$_SESSION[id]','$_POST[todo_type]','$_POST[todo_contacts]','$_POST[todo_title]','$_POST[todo_date]')");
	if($todo_ins)
	{
		header("location:index.php");
	}
}*/

if(isset($_POST['todo_title']))
{
	echo "<script>alert('server connected')</script>";

	$quer=mysqli_query($conn,"insert into user_todolist (`todo_type`,`todo_user_id`,`todo_contact`,`todo_label`,`todo_status`) VALUES ('".$_POST['todo_type']."','".$_SESSION['id']."','".$_POST['todo_contacts']."','".$_POST['todo_title']."','0')");
	if($quer)
	{
		echo "<script>alert('Todo data inserted')</script>";
	}
	else
	{
		echo "<script>alert('Data insertion Fail')</script>";
	}
	
}

if(isset($_POST['todo_status']))
{
	$upd_td=mysqli_query($conn,"update user_todolist set todo_status='1' where todo_id='".$_POST['todo_status']."'");
}


//----Ledger Insertion--

if(isset($_POST['led_cur_date']))
{
	$led_inst=mysqli_query($conn,"INSERT INTO `user_ledger`( `user_id`, `date`, `credit`, `debit`, `led_reason`) VALUES ('".$_SESSION['id']."','".$_POST['led_cur_date']."','".$_POST['led_credit']."','".$_POST['led_debit']."','".$_POST['led_details']."')");
	if($led_inst)
	{
		echo "<script>alert('Ledger data inserted')</script>";
	}
	else
	{
		echo "<script>alert('ledger insertion Fail')</script>";
	}
}


?>




