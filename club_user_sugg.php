  <?php
error_reporting(0);
include 'config.php';
session_start();
if(!$_SESSION['Email'])
{
	header("location:signup.php");
}
?>
  
  <?php  
	  $val1=$_GET['q'];
	 // echo $val1;
?>
  
 											 <div class="row">
  											<?php
                                            $usr_ret_exe=mysqli_query($conn,"select * from `users` where `user_id`='$val1'");
											$usr_res=mysqli_fetch_array($usr_ret_exe);
											$usr_pic_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$val1'");
											$usr_ppic=mysqli_fetch_array($usr_pic_exe);
											$usr_sggtp_exe=mysqli_query($conn,"select * from tbl_suggest_topic where user_id='$val1'");
											
											?>
                                                <div class="club_suggest_top_div row">
                                                    <div class="col-lg-2" style="padding-left:0px;padding-right:0px; width:80px; ">
                                                        <div class="col-lg-4" align="left" style="padding-left:3px;padding-right:0px; width:80px;">
                                                            <img src="fb_users/<?php echo $usr_res['Gender'];?>/<?php echo $usr_res['Email'];?>/Profile/<?php echo $usr_ppic['image'];?>" width="80">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 club_msg_shape" style=" height:80px; padding-right:0px;width:86%; padding-top:7px;" align="left">
                                                        <span style="font-size:16px;"><?php echo $usr_res['Name'];?> </span>
                                                        <br>
                                                        <span style="font-size:16px;"> <?php echo $usr_res['company'];?> </span> 
                                                        <br>
                                                        <span style="font-size:16px;"> <?php echo $usr_res['industry'];?>  </span>
                                                    </div>
                                                </div>
                                                <div class="club_sugg_scroll">
                                                <?php
                                                while($usr_sgg=mysqli_fetch_array($usr_sggtp_exe))
												{
												?>
                                                    <div class="td_div club_sug_row_bg" style="  height:30px;">
                                                        <div class="col-lg-10" style="text-align:left">
                                                            <span><?php echo $usr_sgg['suggest_topic'];?> </span> 
                                                        </div>
                                                        <div align="right" class="col-lg-2" style="text-align:right;">
                                                            <span style="text-align:right; color:#d3d3d3;font-size:12px; "><?php echo $usr_sgg['sug_date'];?></span>
                                                        </div>
                                                    </div>
                                                   <?php 
												}
												   ?>
                                                    
                                                
                                                </div>
                                            </div>