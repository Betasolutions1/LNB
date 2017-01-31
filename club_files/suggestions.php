<h4 class="club_headers">
       Suggestions</h4>
                                            <br>
                                            <div class="row">
                                                <div class="club_suggest_top_div row">
                                                    <div class="col-lg-2" style="padding-left:0px;padding-right:0px; width:80px; ">
                                                        <div class="col-lg-4" align="left" style="padding-left:3px;padding-right:0px; width:80px;">
                                                            <img src="fb_users/<?php echo $usr_dis['Gender'];?>/<?php echo $usr_dis['Email'];?>/Profile/<?php echo $fet_ppic['image'];?>" width="80">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 club_msg_shape" style=" height:80px; padding-right:0px;width:86%; padding-top:7px;" align="left">
                                                        <span style="font-size:16px;"><?php echo $usr_dis['Name'];?> </span>
                                                        <br>
                                                        <span style="font-size:16px;"> <?php echo $usr_dis['company']?> </span> 
                                                        <br>
                                                        <span style="font-size:16px;"> <?php echo $usr_dis['industry'];?>  </span>
                                                    </div>
                                                </div>
                                                <div class="club_sugg_scroll">
                                                <?php 
												$gu_sugg=mysqli_query($conn,"select * from tbl_suggest_topic where user_id='$_SESSION[id]' order by sug_date desc");
												while($dis_usr_sugg=mysqli_fetch_array($gu_sugg))
												{
												?>
                                                    <div class="td_div club_sug_row_bg" style="  height:30px;">
                                                        <div class="col-lg-10" style="text-align:left">
                                                            <span><?php echo $dis_usr_sugg['suggest_topic']?></span> 
                                                        </div>
                                                        <div align="right" class="col-lg-2" style="text-align:right;">
                                                            <span style="text-align:right; color:#d3d3d3;font-size:12px; "><?php echo $dis_usr_sugg['sug_date'];?></span>
                                                        </div>
                                                    </div>
                                                    
                                                  <?php
												}
												  ?>  
                                                   <!-- <div class="td_div club_sug_row_bg" style="  height:30px;">
                                                        <div class="col-lg-10" style="text-align:left">
                                                            <span>Lorem ipsum dolor sit amet, inimicus electrama </span> 
                                                        </div>
                                                        <div align="right" class="col-lg-2" style="text-align:right;">
                                                            <span style="text-align:right; color:#d3d3d3;font-size:12px; ">30-01-2017</span>
                                                        </div>
                                                    </div>-->
                                                  
                                                  
                                                  
                                                  
                                                 
                                                   
                                                  
                                                  
                                                  
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="row">
                                                <div class="club_suggest_top_div row" style="padding-top:10px;padding-bottom:10px;">
                                                    <!--<div class="col-lg-2" style="padding-left:0px;padding-right:0px; width:80px; ">
        <div class="col-lg-4" align="left" style="padding-left:3px;padding-right:0px; width:80px;" data-pg-id="8677">
            <img src="images/profile/6.jpg" width="80" data-pg-id="8678">
        </div>
    </div>
    <div class="col-lg-10 club_msg_shape" style=" height:80px; padding-right:0px;width:86%; padding-top:7px;" align="left" data-pg-id="8679">
        <span style="font-size:16px;" data-pg-id="8680">Rajesh </span>
        <br data-pg-id="8681">
        <span style="font-size:16px;" data-pg-id="8682"> Beta Solutions </span> 
        <br data-pg-id="8683">
        <span style="font-size:16px;" data-pg-id="8684"> IT - Software  </span>
    </div>-->
                                                    <span>Club Member Suggestions</span>
                                                </div>
                                                <div class="club_sugg_scroll">
                                                <?php
                                                $result_exe_club_mem=mysqli_query($conn,"select * from club_signup where club_id='$_SESSION[club_id]' AND user_id!='$_SESSION[id]'");
												while($result_club_mem=mysqli_fetch_array($result_exe_club_mem))
												{
													$res_clbmem_det=mysqli_query($conn,"select * from users where user_id='$result_club_mem[user_id]'");
													$clb_mde=mysqli_fetch_array($res_clbmem_det);
													$cib_ppic_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$clb_mde[user_id]'");
													$clb_pic=mysqli_fetch_array($cib_ppic_exe);
													$get_clb_sugg=mysqli_query($conn,"select * from tbl_suggest_topic where user_id='$result_club_mem[user_id]'  ORDER BY sug_date DESC");
													$kiloo=mysqli_fetch_array($get_clb_sugg);
													if($kiloo['suggest_topic']!='')
													{
												?>
                                                
                                                    <div class="td_div club_sug_row_bg" style="  height:50px;">
                                                        <div class="col-lg-10" style="text-align:left; padding-left:0px;padding-right:0px;">
                                                            <div class="col-lg-2" style="padding:0px; width:50px;" ata-pg-id="8953">
                                                                <img src="fb_users/<?php echo $clb_mde['Gender']?>/<?php echo $clb_mde['Email']?>/Profile/<?php echo $clb_pic['image'];?>" width="50">
                                                            </div>                                                             
                                                            <div class="col-lg-10" style="padding-left:10px; padding-right:0px;">
                                                                <span><?php echo $kiloo['suggest_topic'];?> </span>
                                                            </div>
                                                        </div>
                                                        <div align="right" class="col-lg-2" style="text-align:right;">
                                                            <span style="text-align:right; color:#d3d3d3;font-size:12px; "><?php echo $kiloo['sug_date'];?></span>
                                                            <br>
                                                            <?php
                                                            $sugg_count_exe=mysqli_query($conn,"select * from tbl_suggestions where suggest_topic_id='$kiloo[suggest_topic_id]' AND whos_suggest='$clb_mde[user_id]' AND to_whom_accept='$_SESSION[id]' AND status='1'");
															$cn1=mysqli_num_rows($sugg_count_exe);
															if($cn1!=0)
															{
															?>
                                                            <span><a href="" class="btn btn_grn" onClick="disconnect_suggest(<?php echo $clb_mde['user_id'];?>,<?php echo $kiloo['suggest_topic_id'];?>);" style="margin-left:-15px; height:20px;padding-top:0px;padding-bottom:0px;">Connected</a></span>
                                                            <?php
															}else
															{
															?>
                                                            <span><a href="" class="btn btn_grn" onClick="connect_suggest(<?php echo $clb_mde['user_id'];?>,<?php echo $kiloo['suggest_topic_id'];?>);" style="margin-left:-15px; height:20px;padding-top:0px;padding-bottom:0px;">Connect</a></span>
                                                            <?php
															}
															?>
                                                        </div>
                                                    </div>
                                                    <?php
													}
												}
													?>
                                                    
                                                   <!-- <div class="td_div club_sug_row_bg" style="  height:50px;">
                                                        <div class="col-lg-10" style="text-align:left; padding-left:0px;padding-right:0px;">
                                                            <div class="col-lg-2" style="padding:0px; width:50px;" ata-pg-id="8953">
                                                                <img src="images/profile/6.jpg" width="50">
                                                            </div>                                                             
                                                            <div class="col-lg-10" style="padding-left:10px; padding-right:0px;">
                                                                <span>Lorem ipsum dolor sit amet, inimicus electrama </span>
                                                            </div>
                                                        </div>
                                                        <div align="right" class="col-lg-2" style="text-align:right;">
                                                            <span style="text-align:right; color:#d3d3d3;font-size:12px; ">30-01-2017</span>
                                                        </div>
                                                    </div>-->
                                                   
                                                   
                                                    
                                                   
                                                </div>
                                            </div>