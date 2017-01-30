<h4 class="club_headers">
        Networking </h4>
        					<form method="post"  action="">
                                            <input type="text" placeholder="Let's Network" class="club_txt" name="chat_txt" id="chat_txt">
                                             <?php
                    $msg_date=date("Y-m-d h:i");
					?>
                    <input type="hidden" name="msg_time_date" id="msg_time_date" value="<?php echo $msg_date;?>"/>
                    <input type="hidden" name="msg_user_id" id="msg_user_id" value="<?php echo $_SESSION['id']?>">  
                    <input type="submit" style="display:none;" name="Message_send" onClick="inse_msg();"/>
                                  </form>          
                                            <br>
                                            <br>
                                            <div class="club_network">
                                             <?php
                        $group_chat_exe=mysqli_query($conn,"select * from group_chat order by chat_id desc");
						while($grp_ct=mysqli_fetch_array($group_chat_exe))
						{
							$gp_us_pp_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$grp_ct[user_id]'");
							$gp_ppic=mysqli_fetch_array($gp_us_pp_exe);
							$gp_user_details_exe=mysqli_query($conn,"select * from users where user_id='$grp_ct[user_id]'");
							$gp_det=mysqli_fetch_array($gp_user_details_exe);
							
						?>
                                                <div class="row club_network_row" style="width:100%;">
                                                    <div class="col-lg-2" style="padding-left:0px;padding-right:0px; width:80px; ">
                                                        <div class="col-lg-4" align="left" style="padding-left:3px;padding-right:0px; width:80px;">
                                                            <img src="fb_users/<?php echo $gp_det['Gender'];?>/<?php echo $gp_det['Email'];?>/Profile/<?php echo $gp_ppic['image'];?>" width="80">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 club_msg_shape" style=" height:80px; background-color:#eee; padding-right:0px;width:86%;" align="left">
                                                        <span style="text-align:right; color:#d3d3d3;font-size:10px;">
    <?php echo $gp_det['Name'];?> - <?php echo $gp_det['company']?> - <?php echo $gp_det['industry'];?> </span>
    <span class="pull-right" style="text-align:right; color:#d3d3d3;font-size:10px;"><?php echo $grp_ct['time'];?> </span>
                                                        <p> <?php echo $grp_ct['chat_txt'];?></p>
                                                    </div>
                                                </div>
                                                 <?php
						}
						?>
                                               
                                               
                                                
                                               
                                              
                                          
                                             
                                              
                                              
                                              <?php /*?>  <div class="row club_network_row" style="width:100%;">
                                                    <div class="col-lg-2" style="padding-left:0px;padding-right:0px; width:80px; ">
                                                        <div class="col-lg-4" align="left" style="padding-left:3px;padding-right:0px; width:80px;">
                                                            <img src="images/profile/6.jpg" width="80">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 club_msg_shape" style=" height:80px; background-color:#eee; padding-right:0px;width:86%;" align="left">
                                                        <span style="text-align:right; color:#d3d3d3;font-size:10px;">
    Rajesh - Beta Solutions - IT - Software  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 30-jan-2017 12:22am </span>
                                                        <p> 
        Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, </p>
                                                    </div>
                                                </div><?php */?>
                                                
                                                
                                            </div>