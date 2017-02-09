<?php
error_reporting(0);
include '../config.php';
session_start();
/*if(!$_SESSION['Email'])
{
	header("location:signup.php");
}*/

?>
<?php
// add about data
if(isset($_POST['about_data']))
{
	$ins_about=mysqli_query($conn,"INSERT INTO `lnb_about`( `about_description`) VALUES ('".$_POST['about_data']."')");
}
//add advertises
if(isset($_POST['add_advertise']))
{
	    $img_name=$_FILES['Advertise_img']['name'];
    	$img_tmp_name=$_FILES['Advertise_img']['tmp_name'];
    	$prod_img_path=$img_name;
		move_uploaded_file($img_tmp_name,"advertises/".$prod_img_path);
	$ins_ads=mysqli_query($conn,"INSERT INTO `advertisments`( `ads_name`,`advertise_image`, `ads_desc`) VALUES ('$_POST[Advertise_name]','$prod_img_path','$_POST[advertise_desc]')");
	header("location:add_advertise.php");
}
//add clubs
if(isset($_POST['club_name']))
{
	$ins_clubs=mysqli_query($conn,"INSERT INTO `tbl_club`( `CL_NAME`, `CL_DESC`) VALUES ('$_POST[club_name]','$_POST[club_desc]')");
}
//add help
if(isset($_POST['help_data']))
{
	$ins_help=mysqli_query($conn,"INSERT INTO `lnb_help`( `help_desc`) VALUES ('$_POST[help_data]')");
}
//add terms and conditions
if(isset($_POST['trmcon_data']))
{
	$ins_tem_cod=mysqli_query($conn,"INSERT INTO `terms_conditions`( `term_cond`) VALUES ('$_POST[trmcon_data]')");
}
//add career.com
if(isset($_POST['career_data']))
{
	$ins_career=mysqli_query($conn,"INSERT INTO `lnb_careers`( `career_is`) VALUES ('$_POST[career_data]')");
}
?>