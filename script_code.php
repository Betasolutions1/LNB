<?php
include 'config.php';
session_start();
if(isset($_POST['post_data']))
{
	/*$txt= $_POST['post_data'];*/
	
	$ins_post=mysqli_query($conn,"insert into user_post(`user_id`,`post_txt`)values('".$_SESSION['id']."','".$_POST['post_data']."')");
	/* ".$_POST['post_data']." */
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

if(isset($_POST['cmt_txt']))
{
$ins_comment=mysqli_query($conn,"INSERT INTO `user_post_comment`( `post_id`, `user_id`, `comment`, `comment_time`) VALUES('$_POST[cmt_post_id]','$_SESSION[id]','$_POST[cmt_txt]','$_POST[cmt_ins_date]')");
	if($ins_comment)
	{
		header("location:index.php");
	}
}

//---TODO Insertion----

if(isset($_POST['todo_title']))
{
	echo "<script>alert('resfgbdzf')</script>";
	$todo_ins11=mysqli_query($conn,"INSERT INTO `todo_insertions` ( `todo_user_id`, `todo_type`, `todo_contact`, `todo_label`,`todo_datetime`) VALUES ('$_SESSION[id]','$_POST[todo_type]','$_POST[todo_contacts]','$_POST[todo_title]','$_POST[todo_date]')");
	if($todo_ins11)
	{
		header("location:index.php");
	}else
	{
		echo "<script>alert('Data insertion Fail')</script>";
	}
}

/*if(isset($_POST['todo_inserttttttt']))
{
	echo "<script>alert('resfgbdzf')</script>";
$todoins=mysqli_query($conn,"INSERT INTO `user_todolist`(`todo_user_id`,`todo_type`,`todo_contact`,`todo_label`,`todo_status`) VALUES('".$_SESSION['id']."','".$_POST['todo_type']."','".$_POST['todo_contacts']."','".$_POST['todo_title']."')");
	if($todoins)
	{
		echo "<script>alert('Todo data inserted')</script>";
	}
	else
	{
		echo "<script>alert('Data insertion Fail')</script>";
	}
	
}*/

if(isset($_POST['todo_status']))
{
	$upd_td=mysqli_query($conn,"update todo_insertions set todo_status='1' where todo_id='".$_POST['todo_status']."'");
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

if(isset($_POST['club_user_name']))
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
	//	header("location:index.php");
		
	}else
	{
		echo "<script>alert('Please Enter valid details')</script>";
		//header("location:index.php");
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
//----Disconnect Suggestions---
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

//------Networking---
if(isset($_POST['msg_user_id']))
{
	if($_POST['chat_txt']!='')
	{
		$ins_grp_msg=mysqli_query($conn,"INSERT INTO `group_chat`( `user_id`, `chat_txt`, `time`) VALUES ('$_POST[msg_user_id]','$_POST[chat_txt]','$_POST[msg_time_date]')");
	}
}

//------add tags-------
if(isset($_POST['tag_title']))
{
	$ins_tags=mysqli_query($conn,"INSERT INTO `tbl_reference`( `club_id`, `who_user_id`, `to_whom_user_id`, `for_what`, `vendor_name`, `vendor_phone`, `vendor_email`) VALUES('$_SESSION[club_id]','$_SESSION[id]','$_POST[club_memb]','$_POST[tag_title]','$_POST[vendor_name]','$_POST[vendor_phone]','$_POST[vendor_email]')");
	
}

//accept tags--

if(isset($_POST['accref_id']))
{
	$acc_tag=mysqli_query($conn,"update tbl_reference set status='1' where  refrence_id='".$_POST['accref_id']."'");
	
}
//reject Refrel
if(isset($_POST['rejref_id']))
{
	$acc_tag=mysqli_query($conn,"update tbl_reference set status='0' where  refrence_id='".$_POST['rejref_id']."'");
	
}

//------------Change password from club-----


if(isset($_POST['old_pwd']))
{
	if($_POST['new_password']==$_POST['re_password'])
	{
		//$cur_pwd=$_POST['cur_password'];
		//$enc_pwd=base64_encode($cur_pwd);
		$change_pwd=mysqli_query($conn,"select * from club_signup where user_id='$_SESSION[id]'");
		$fet_pwd=mysqli_fetch_array($change_pwd);
		if($_POST['old_pwd']==$fet_pwd['club_pwd'])
		{
			//$enc_new_pwd=base64_encode($_POST['new_password']);
			$upda_pwd=mysqli_query($conn,"update club_signup set club_pwd='$_POST[new_password]' where user_id='$_SESSION[id]'");
			if($upda_pwd)
			{
				echo "<script>alert('Password successfully  Updated ')</script>";
				$_SESSION['club_user']='';
				$_SESSION['club_id']='';
				//header("location:index.php");
			}
			else
			{
				echo "<script>alert('Password updation fail ')</script>";
			}
			
		}
		else
		{
			echo "<script>alert('Enter Password is wrong')</script>";
		}
	}
	else
	{
		echo "<script>alert('Password doesnt match')</script>";
	}
}

//---Remove from Club---
if(isset($_POST['club_rm_id']))
{
	$remove_club=mysqli_query($conn,"delete from club_signup where user_id='$_POST[club_rm_id]'");
	if($remove_club)
	{
		$_SESSION['club_id']='';
	}
}

//Add user projects---

if(isset($_POST['add_work_projects']))
{
	echo "<script>alert('pjs')</script>";
	
	
		
		$get_cu_pjs=mysqli_query($conn,"select * from work_projects where user_id='$_SESSION[id]'");
		$pj_cu=mysqli_num_rows($get_cu_pjs);
		$pj=$pj_cu+1;
		$post_date=date('d-m-Y h:i');
		
		$img_name=$_FILES['file']['name'];
    	$img_tmp_name=$_FILES['file']['tmp_name'];
    	$prod_img_path=$img_name;
		$proj_path="fb_users/".$_SESSION['Gender']."/".$_SESSION['Email']."/Projects/".$prod_img_path;
		$post_path="fb_users/".$_SESSION['Gender']."/".$_SESSION['Email']."/Post/".$prod_img_path;
    	move_uploaded_file($img_tmp_name,$proj_path);
		
		
		$ins_prjs=mysqli_query($conn,"INSERT INTO `work_projects`( `user_id`, `work_title`, `work_description`, `work_image`) VALUES ('$_SESSION[id]','$_POST[project_name]','$_POST[project_desc]','$prod_img_path')");
		if(copy($proj_path,$post_path))
		{
		$ins_prj_post=mysqli_query($conn,"INSERT INTO `user_post`( `user_id`, `post_txt`, `post_pic`, `post_time`, `priority`) VALUES ('$_SESSION[id]','$_POST[project_desc]','$prod_img_path','$post_date','$_POST[foli_pri]')");
		}
		header("location:index.php");
	
	
	
	
	
	//$ins_prjs=mysqli_query($conn,"INSERT INTO `work_projects`( `user_id`, `work_title`, `work_description`, `work_image`) VALUES ('$_SESSION[id]','$_POST[project_name]','$_POST[project_desc]','$prod_img_path')");
}

//---Company Discussion---

if(isset($_POST['disscussion_topic']))
{
	$ins_dissc=mysqli_query($conn,"INSERT INTO `company_discussions`( `user_id`,`company`, `discussion_txt`) VALUES ('$_SESSION[id]','$_POST[dis_company]','$_POST[disscussion_topic]')");
}

//--insert skills--

if(isset($_POST['skill_name']))
{
	$ins_skills=mysqli_query($conn,"INSERT INTO `user_skills`(`user_id`, `skill`, `skill_rating`) VALUES ('$_SESSION[id]','$_POST[skill_name]','$_POST[skill_rate]')");
}

// ---Folio Description---

if(isset($_POST['folio_desc']))
{
	$ins_folio_desc=mysqli_query($conn,"update folio set description='$_POST[folio_desc]' where user_id='$_SESSION[id]'");
}


//--stage2 signin---

if(isset($_POST['sub_stage2']))
{
	$ins_stage2=mysqli_query($conn,"update user_info set school='$_POST[school]',collage='$_POST[college]',hometown='$_POST[hometown]',current_city='$_POST[presentown]' where user_id='$_SESSION[id]'");
	$up_user=mysqli_query($conn,"update users set description='$_POST[about]' where user_id='$_SESSION[id]'");
	
	header("location:index.php");
}

if(isset($_POST['client_name']))
{
	$ins_todo_clients=mysqli_query($conn,"INSERT INTO `user_clients`( `user_id`, `client_name`, `client_company`, `client_phone`, `clients_details`) VALUES ('$_SESSION[id]','$_POST[client_name]','$_POST[client_company]','$_POST[client_phone_no]','$_POST[client_details]')");
}
// update profile pic
if(isset($_POST['sub_edit_ppic']))
{
	echo "<script>alert('Image')</script>";
	if(($_FILES['profile_pic']['type']=='image/gif') || ($_FILES['profile_pic']['type']=='image/jpeg')
	|| ($_FILES['profile_pic']['type']=='image/png') || ($_FILES['profile_pic']['type']=='image/pjpeg')
	&& ($_FILES['profile_pic']['size']<200000))
	{
		if($_FILES['profile_pic']['error']>0)
		{
			echo "return code:" ,$_FILES['profile_pic']['error'];
		}
		/*else if(file_exists('advertises/'.$_FILES['Advertise_img']['name']))
		{
			echo $_FILES['Advertise_img']['name']."Already Exits";
		}
*/		
		else if(move_uploaded_file($_FILES['profile_pic']['tmp_name'],'fb_users/'.$_SESSION['Gender'].'/'.$_SESSION['Email'].'/Profile/'.$_FILES['profile_pic']['name']))
		{
			$user_profile_pic=$_FILES['profile_pic']['name'];
			
			$ins_ppic=mysqli_query($conn,"UPDATE `user_profile_pic` SET `image`='$user_profile_pic' WHERE `user_id`='$_SESSION[id]'");
			header("location:index.php");
		}
	}else{
		echo "<script>alert('Image Size Lessthan 2mb')</script>";
		header("location:index.php");
	}
	//$ins_ppic=mysqli_query($conn,"UPDATE `user_profile_pic` SET `image`=[value-3] WHERE `user_id`='$_SESSION[id]'");
}

//update cover pic
if(isset($_POST['sub_edit_coverpic']))
{
	echo "<script>alert('Image')</script>";
	if(($_FILES['cover_pic']['type']=='image/gif') || ($_FILES['cover_pic']['type']=='image/jpeg')
	|| ($_FILES['cover_pic']['type']=='image/png') || ($_FILES['cover_pic']['type']=='image/pjpeg')
	&& ($_FILES['cover_pic']['size']<200000))
	{
		if($_FILES['cover_pic']['error']>0)
		{
			echo "return code:" ,$_FILES['cover_pic']['error'];
		}
		/*else if(file_exists('advertises/'.$_FILES['Advertise_img']['name']))
		{
			echo $_FILES['Advertise_img']['name']."Already Exits";
		}
*/		
		else if(move_uploaded_file($_FILES['cover_pic']['tmp_name'],'fb_users/'.$_SESSION['Gender'].'/'.$_SESSION['Email'].'/Cover/'.$_FILES['cover_pic']['name']))
		{
			$user_cover_pic=$_FILES['cover_pic']['name'];
			
			$ins_ppic=mysqli_query($conn,"UPDATE `user_cover_pic` SET `image`='$user_cover_pic' WHERE `user_id`='$_SESSION[id]'");
			header("location:index.php");
		}
	}else{
		echo "<script>alert('Image Size Lessthan 2mb')</script>";
		header("location:index.php");
	}
	//$ins_ppic=mysqli_query($conn,"UPDATE `user_profile_pic` SET `image`=[value-3] WHERE `user_id`='$_SESSION[id]'");
}

//insert forum questions

if(isset($_POST['sub_forms']))
{
	$ins_forms=mysqli_query($conn,"INSERT INTO `question`( `user_id`, `question`, `que_desc`, `INDUSTRY_ID`) VALUES ('$_SESSION[id]','$_POST[forum_question]','$_POST[quest_desc]','$_POST[set_indus]')");
}

//insert user quotes

if(isset($_POST['user_quote']))
{
	if($_POST['user_quote']!='')
	{
		$ins_us_qu=mysqli_query($conn,"INSERT INTO `users_quotes`( `user_id`, `quote_txt`) VALUES ('$_SESSION[id]','$_POST[user_quote]') ");
	}
}


// add acomplishments

if(isset($_POST['acomp_title']))
{
	if($_POST['acomp_title']!='')
	{
		$ins_acomp=mysqli_query($conn,"INSERT INTO `user_accomplishments`( `user_id`, `start_year`, `end_year`, `acomp_title`, `acomp_desc`) VALUES ('$_SESSION[id]','$_POST[from_year]','$_POST[to_year]','$_POST[acomp_title]','$_POST[acomp_desc]')");
	}
}
?>




