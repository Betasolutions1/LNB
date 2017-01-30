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

//-----club login ---

if(isset($_POST['club_login']))
{
	echo "<script>alert('hello')</script>";
	$club_log_crede=mysqli_query($conn,"select * from club_signup where club_user_name='$_POST[club_user_name]' AND club_pwd='$_POST[club_pwd]' AND user_id='$_SESSION[id]'");
	$clb_cunt=mysqli_num_rows($club_log_crede);
	if($clb_cunt!=0)
	{
		echo "<script>alert('Login Success')</script>";
		$ret_clb_cred=mysqli_fetch_array($club_log_crede);
		$_SESSION['club_id']=$ret_clb_cred['club_id'];
		$_SESSION['club_user']=$ret_clb_cred['club_user_name'];
		header("location:index.php");
		
	}else
	{
		echo "<script>alert('Please Enter valid details')</script>";
	}
}

//---insert_ suggestion---
if(isset($_POST['sug_usrt_id']))
{
	if($_POST['sugg_info']!='')
	{
	$add_sudd=mysqli_query($conn,"insert into tbl_suggest_topic (user_id,suggest_topic,sug_date)Values('$_POST[sug_usrt_id]','$_POST[sugg_info]','$_POST[sug_date]')");
	/*$get_sug_top_id=mysqli_query($conn,"select * from tbl_suggest_topic order by suggest_topic_id desc limit 1");
	$get_sugid=mysqli_fetch_array($get_sug_top_id);
	$ad_su_id=mysqli_query($conn,"insert into tbl_suggestions (suggest_topic_id,whos_suggest)values('$get_sugid[suggest_topic_id]','$_POST[sug_usrt_id]')");*/
	}
	
}

//-----connect suggestion---

if(isset($_POST['whos_sugg']))
{
	$connect=mysqli_query($conn,"INSERT INTO `tbl_suggestions`( `suggest_topic_id`, `whos_suggest`, `to_whom_accept`, `status`) VALUES ('$_POST[sugg_id]','$_POST[whos_sugg]','$_SESSION[id]','1')");
	if($connect)
	{
		$upda_sugg_coun=mysqli_query($conn,"select * from tbl_suggest_topic where suggest_topic_id='$_POST[sugg_id]'");
		$get_counts=mysqli_fetch_array($upda_sugg_coun);
		$sugg_count_inc=$get_counts['count_connects'];
		$update_sugg=mysqli_query($conn,"update tbl_suggest_topic set count_connects='$sugg_count_inc+1' where suggest_topic_id='$_POST[sugg_id]'");
	}
}

if(isset($_POST['diswhos_sugg']))
{
	$dis_connect=mysqli_query($conn,"delete from `tbl_suggestions` where suggest_topic_id='$_POST[dissugg_id]' AND whos_suggest='$_POST[diswhos_sugg]' AND to_whom_accept='$_SESSION[id]'");
	if($dis_connect)
	{
		$res1_exe=mysqli_query($conn,"select * from tbl_suggest_topic where suggest_topic_id='$_POST[dissugg_id]'");
		$res2=mysqli_fetch_array($res1_exe);
		$n1=$res2['count_connects'];
		$res3_up_is_exe=mysqli_query($conn,"update tbl_suggest_topic set count_connects=$n1-1 where suggest_topic_id='$_POST[dissugg_id]' ");
	}
}


?>




