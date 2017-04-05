   <?php include'config.php';
$val=$_GET['q'];
   ?>
    
                                            <div class="club_network" style="height:350px;background-color:#fff">
                                                <?php
                                                //order by chat_id desc
                                                $group_chat_exe=mysqli_query($conn,"select * from group_chat where user_id='$val' order by chat_id desc ");
                                                while($grp_ct=mysqli_fetch_array($group_chat_exe))
                                                {
                                                    $gp_us_pp_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$grp_ct[user_id]'");
                                                    $gp_ppic=mysqli_fetch_array($gp_us_pp_exe);
                                                    $gp_user_details_exe=mysqli_query($conn,"select * from users where user_id='$grp_ct[user_id]'");
                                                    $gp_det=mysqli_fetch_array($gp_user_details_exe);

                                                    ?>
                                                    <div class="col-lg-12" style="border-bottom:1px solid #000;padding-left:0px;    ">
                                                        <div class="col-lg-2 row club_network_row" style="padding-left:0px;padding-right:0px; width:50px; ">
                                                            <div class="col-lg-4" align="left" style="padding-left:3px;padding-right:0px; width:80px;">
                                                            <?php
                                                            if($gp_ppic['image']!='')
                                                            {
                                                            ?>
                                                                <img src="fb_users/<?php echo $gp_det['Gender'];?>/<?php echo $gp_det['Email'];?>/Profile/<?php echo $gp_ppic['image'];?>" width="50" height="80">
                                                                <?php
                                                            }else
                                                            {
                                                                ?>
                                                             <img src="images/profile/sq.PNG" width="80"/>
                                                                <?php
                                                            }
                                                                ?>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-10 club_msg_shape" style=" height:80px; background-color:#fff; padding-right:0px;" align="left">
                                                        <span style="text-align:right; color:#000;font-size:10px;">
    <?php echo $gp_det['Name'];?> / <?php echo $gp_det['company']?> / <?php echo $gp_det['industry'];?> </span>
                                                            <span class="pull-right" style="text-align:right; color:#808080;font-size:10px;"><?php echo $grp_ct['time'];?> </span>
                                                            <p style="color:#808080"> <?php echo $grp_ct['chat_txt'];?></p>
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
                                           