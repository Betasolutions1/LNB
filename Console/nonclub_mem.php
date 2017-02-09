<?php
error_reporting(0);
include 'config.php';
session_start();
/*if(!$_SESSION['Email'])
{
	header("location:signup.php");
}*/
?>
  
  <?php  
	  $val1=$_GET['q'];
	  
?>

   
                                            <div class="form-control"> 
                                                <!--<input type="text" class="form-control" placeholder="Ink Your Reflections..."> -->
                                                <select class="form-control" name="club_mem" id="club_mem">
                                                <?php
                                                $res11=mysqli_query($conn,"select * from club_signup where club_id='$val1'");
												while($red=mysqli_fetch_array($res11))
												{
													$get_user_exe=mysqli_query($conn,"select * from users where user_id!='$red[user_id]'");
													$get_user=mysqli_fetch_array($get_user_exe);
												?>	
                                            <option>Select Club Member</option>
                                            <?php
												}
											?>
                                            </select>
                                            </div>