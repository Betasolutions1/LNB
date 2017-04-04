<?php include'config.php';
$val=$_GET['s'];

session_start();
if(!$_SESSION['Email'])
{
  header("location:signup.php");
}
   ?>
<div class="tab-pane">


                                                             <!--BEGIN CLUB SUGGESTIONS-->


                                            <div class="row" style="margin: 10px;
    max-height:465px">
    <div class="col-md-12" style="    margin-top: -10px;
    margin-left: -20px;
    width: 1085px;">
                                            <br>
                                            <div class="club_suggest_top_di row col-md-12" align="center" style="margin-top:-15px">
                                            <div align="center" style="background:#808080;height:40px;margin-top:5px;padding-top:1px; color:#fff"><h4>SUGGESTIONS</h4> </div>
                                                </div>
                                                <div class="col-md-12" id="mamber-suggestions">
                                                 <div id="club_networks">
                                            <div class="club_network" style="height:350px;background-color:#fff">
                                                <?php
                                            $usr_ret_exe=mysqli_query($conn,"select * from `users` where `user_id`='$val'");
                      $usr_res=mysqli_fetch_array($usr_ret_exe);
                      $usr_pic_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$val'");
                      $usr_ppic=mysqli_fetch_array($usr_pic_exe);
                      $usr_sggtp_exe=mysqli_query($conn,"select * from tbl_suggest_topic where user_id='$val'");
                      
                     
                                                while($usr_sgg=mysqli_fetch_array($usr_sggtp_exe))
                        {
                        ?>
                                                    <div class="col-lg-12" style="border-bottom:1px solid #000;padding-left:0px;  ">
                                                        <div class="col-lg-2 row club_network_row" style="padding-left:0px;padding-right:0px; width:80px; ">
                                                            <div class="col-lg-4" align="left" style="padding-left:3px;padding-right:0px; width:80px;">
                                                            <?php
                                                            if($usr_ppic['image']!='')
                              {
                              ?>
                                                                <img src="fb_users/<?php echo $usr_res['Gender'];?>/<?php echo $usr_res['Email'];?>/Profile/<?php echo $usr_ppic['image'];?>" width="50" height="80">
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
    <?php echo $usr_res['Name'];?> / <?php echo $usr_res['company']?> / <?php echo $usr_res['industry'];?> </span>
    
                                                            <span class="pull-right" style="text-align:right; color:#808080;font-size:10px;"><?php echo $usr_sgg['sug_date'];?> </span>

                                                            <p style="color:#808080"> <?php echo $usr_sgg['suggest_topic'];?></p>

                                                            <?php

                                                                 
                                                                    $sugg_count_exe=mysqli_query($conn,"select * from tbl_suggestions where suggest_topic_id='$usr_sgg[suggest_topic_id]' AND whos_suggest='$usr_res[user_id]' AND to_whom_accept='$_SESSION[id]' AND status='1'");
                                                                    $cn1=mysqli_num_rows($sugg_count_exe);
                                                                    if($cn1!=0)
                                                                    {
                                                                        ?>

                                                                        <button style="margin-left: 763px;color: white;background-color: #808080;" onClick="return disconnect_suggest(<?php echo $usr_res['user_id'];?>,<?php echo $usr_sgg['suggest_topic_id'];?>);">connected
                                                                        </button>
                                                                        <?php
                                                                    }else
                                                                    {
                                                                        ?>
                                                                         <button style="margin-left: 763px;color: white;background-color: #808080;" onClick="return connect_suggest(<?php echo $usr_res['user_id'];?>,<?php echo $usr_sgg['suggest_topic_id'];?>);">connect
                                                                        </button>

                                                                        <?php
                                                                    }
                                                                     
                                                                    ?>

                                                        </div>

                                                   </div>
                                                   <?php } ?>



                        </div>
                                            </div>
                                                </div>
                                                <div class="col-md-12">
                                                <!-- <form method="post"  action="">
                                            <!--maxlength="160"->
                                                <input type="text" placeholder="Let's Network (160 characters only..)"  class="club_txt" name="chat_txt" id="chat_txt">
                                                <?php
                                                //$msg_date=date("Y-m-d h:i");
                                                ?>
                                                <input type="hidden" name="msg_time_date" id="msg_time_date" value="<?php //echo $msg_date;?>"/>
                                                <input type="hidden" name="msg_user_id" id="msg_user_id" value="<?php //echo $_SESSION['id']?>">
                                                <input type="submit" style="display:none;" name="Message_send" onClick="return inse_msg();"/>
                                            </form>
                                            <div align="left" id="network_valid" style="display:none;color:red;font-weight:bold;margin-left:15px;">Message Length Must Be 160 Characters Only</div> -->
                                            <br>
                                            <br>
                                            </div>
                                                </div>
                                                 <!--members of suggestion-->
                                                

                                                <!--end members suggestion-->

                                                </div>





	</div>