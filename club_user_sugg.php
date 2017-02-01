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
?>
  
 											 <div class="row">
  											<?php
                                            $res11=mysqli_query($conn,"select * from users where user_id='$val1'");
											$res12=mysqli_fetch_array($res11);
											$res13=mysqli_query($conn,"select * from user_profile_pic where user_id='$val1'");
											$res14=mysqli_fetch_array($res13);
											$res15=mysqli_query($conn,"select * from tbl_suggest_topic where user_id='$val1'");
											
											?>
                                                <div class="club_suggest_top_div row">
                                                    <div class="col-lg-2" style="padding-left:0px;padding-right:0px; width:80px; ">
                                                        <div class="col-lg-4" align="left" style="padding-left:3px;padding-right:0px; width:80px;">
                                                            <img src="fb_users/<?php echo $res11['Gender'];?>/<?php echo $res11['Email'];?>/Profile/<?php echo $res14['image'];?>" width="80">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 club_msg_shape" style=" height:80px; padding-right:0px;width:86%; padding-top:7px;" align="left">
                                                        <span style="font-size:16px;"><?php echo $res11['Name'];?> </span>
                                                        <br>
                                                        <span style="font-size:16px;"> <?php echo $res11['company'];?> </span> 
                                                        <br>
                                                        <span style="font-size:16px;"> <?php echo $res11['industry'];?>  </span>
                                                    </div>
                                                </div>
                                                <div class="club_sugg_scroll">
                                                <?php
                                                while($res16=mysqli_fetch_array($res15))
												{
												?>
                                                    <div class="td_div club_sug_row_bg" style="  height:30px;">
                                                        <div class="col-lg-10" style="text-align:left">
                                                            <span><?php echo $res16['suggest_topic'];?> </span> 
                                                        </div>
                                                        <div align="right" class="col-lg-2" style="text-align:right;">
                                                            <span style="text-align:right; color:#d3d3d3;font-size:12px; "><?php echo $res16['sug_date'];?></span>
                                                        </div>
                                                    </div>
                                                   <?php 
												}
												   ?>
                                                    
                                                
                                                </div>
                                            </div>