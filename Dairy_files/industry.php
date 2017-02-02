<div class="bg_pst">

 <?php
                             $industry_count=100;
                             $industry_users_exe=mysqli_query($conn,"select * from users where industry='$usr_dis[industry]'");
                             while($industry_users_ret=mysqli_fetch_array($industry_users_exe))
							 {

                                 $industry_post_users_execu = mysqli_query($conn, "select * from user_post where user_id='$industry_users_ret[user_id]'");
                                 while ($industry_post_rety = mysqli_fetch_array($industry_post_users_execu))
								 {
                                     $industry_user_profile_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$industry_post_rety[user_id]'");
                                     $indus_usr_prof_pic=mysqli_fetch_array($industry_user_profile_exe);
                                     $industry_post_usr_profi_pic=$indus_usr_prof_pic[2];

                                     $industry_post_user_data_exeu=mysqli_query($conn,"select * from users where user_id='$industry_post_rety[user_id]'");
                                     $industry_post_user_data_retry=mysqli_fetch_array($industry_post_user_data_exeu);

                                     ?>
                                            <div class="pst_box" style="background-color:#fff;">
                                                <div class="pst_head">
                                                    <div class="row pst_row_fill" style="">
                                                        <div class="col-lg-2 " align="left" style="width:70px;">
                                                            <a href="profile.php?id=<?php echo $industry_post_rety['user_id']?>" class="pst_head_left">
                                                                <img src="fb_users/<?php echo $industry_post_user_data_retry['Gender']; ?>/<?php echo $industry_post_user_data_retry['Email']?>/Profile/<?php echo $industry_post_usr_profi_pic; ?>" width="70" style="margin-left:-15px;">
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-8 pst_head_txt">
                                                            <a href="profile.php?id=<?php echo $users_id?>" class="text_wht"><?php echo $industry_post_user_data_retry['Name'];?></a>
                                                            <br>
                                                            <span class="pst_head_pos text_wht"><?php echo $industry_post_user_data_retry['designation'];?>-<?php echo $industry_post_user_data_retry['company'];?></span>
                                                            <br>
                                                            <span class="text_wht"><?php echo $industry_post_user_data_retry['industry'];?></span>
                                                        </div>
                                                        <div class="col-lg-2">
                                                       <?php
                                                     $industry_post_status_exe=mysqli_query($conn,"select * from user_post_status where post_id='$industry_post_rety[post_id]'");
                                                     $industry_post_status_count=mysqli_num_rows($industry_post_status_exe);
													 $industry_post_status_retry=mysqli_fetch_array($industry_post_status_exe);
													 if($industry_post_status_retry['status']=='Like')
													 {
                                                     ?>
				
					
                    <span><a href=""   onClick="unlike(<?php echo $industry_post_rety['post_id'];?>,<?php echo $_SESSION['id'];?>);" >unlike</a></span>
                    <?php
													 }
													else{
													  ?>
					
                
                <span><a href=""  onClick="like(<?php echo  $industry_post_rety['post_id'];?>,<?php echo $_SESSION['id'];?>);" id="<?php echo $resp['post_id'];?>" data-src="<?php echo $_SESSION['id'];?>">like</a></span>
                <?php
				}
				?>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                                <div class="pst_body">
                                                  <?php
                                             if($industry_post_rety['post_pic']!='') {
                                                 ?>
                                                    <span><img src="fb_users/<?php echo $industry_post_user_data_retry['Gender']; ?>/<?php echo $industry_post_user_data_retry['Email'];?>/Post/<?php echo $industry_post_rety['post_pic'];?>" class="img-responsive" style=""></span>
                                                    <?php
												}
												?>
                                                    <br>
                                                      <p style="margin-top:10px;"><?php echo $industry_post_rety['post_txt'];?></p> 
                                                    <span style="font-size:10px;"> - <?php echo $industry_post_rety['post_time'];?></span>
                                                    
                                                </div>
                                                <div class="pst_cmt">
                                                <?php

                                         $industry_post_comment_exeu=mysqli_query($conn,"select * from user_post_comment where post_id='$industry_post_rety[post_id]'");
                                         $industry_post_comment_count=mysqli_num_rows($industry_post_comment_exeu);
                                         $industry_count++;
                                         ?>
                                                    <div class="pst_cmt_tog pst_cmt_pad">
                                                        <!--comment toggle-->
                                                        <i></i>
                                                        <a href="#"><span style="margin-left:10px;">View Comments</span></a>
                                                        <span class="pst_cmt_muted"><?php echo $industry_post_comment_count;?> writes</span>
                                                    </div>
                                                     <?php
                                             while($industry_post_comment_retry=mysqli_fetch_array($industry_post_comment_exeu)) {
                                                 $industry_post_comment_user_details_exe=mysqli_query($conn,"select * from users where user_id='$industry_post_comment_retry[user_id]'");
                                                 $industry_post_comment_user_retry=mysqli_fetch_array($industry_post_comment_user_details_exe);
                                                 $indusry_post_comment_user_pofile_pic_exeu=mysqli_query($conn,"select * from user_profile_pic where user_id='$industry_post_comment_user_retry[user_id]'");
                                                 $industry_post_comment_user_pic_retry=mysqli_fetch_array($indusry_post_comment_user_pofile_pic_exeu);

                                                 ?>
                                                    <div class="row  pst_cmt_body">
                                                        <div class="col-lg-2" style="width:70px;">
                                                            <a href="profile.php?id=<?php echo $industry_post_comment_user_retry['user_id'] ?>" class="pst_head_left">
                                                                <img src="fb_users/<?php echo $industry_post_comment_user_retry['Gender']?>/<?php echo $industry_post_comment_user_retry['Email']?>/Profile/<?php echo$industry_post_comment_user_pic_retry['image'];?>"  width="70" style="margin-left:-15px;">
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-10" style="padding-top:5px;">
                                                            <a href="profile.php?id=<?php echo $industry_post_comment_user_retry['user_id'] ?>" style="color:#000;"><?php echo $industry_post_comment_user_retry['Name']; ?></a>
                                                            <br>
                                                            <span class="pst_head_pos  pst_cmt_muted">-wrote on <?php echo $industry_post_comment_retry['comment_time'];?></span>
                                                            <br>
                                                            <div style="margin-left:10px;"><?php echo $industry_post_comment_retry['comment']; ?></div>
                                                        </div>
                                                    </div>
                                                    <?php
				}
													?>
                                                    
                                                    <div class="row pst_cmt_row"> 
                                                        <div class="col-lg-10 pst_cmt_pad">
                                                        <form method="post" action="script_code.php">
                                                        <input type="hidden" name="cmt_ins_id" value="<?php echo $_SESSION['id'];?>">
              											<input type="hidden" name="cmt_post_id" value="<?php echo $industry_post_rety['post_id'];?>">
                                                        <?php
                                                        $date=date('Y-m-d h:i');
														
														?>
                                                        <input type="hidden" name="cmt_ins_date" value="<?php echo $date;?>">
                                                        <input type="text" class="form-control" name="cmt_txt" style="width:100%; padding-left:10px;padding-right:10px; " placeholder="Write..."> 
                                                        <input type="submit" name="cmt_ins" style="display:none;">
                                                            </form>
                                                        </div>
                                                        <!--<div class="col-lg-2 pst_cmt_c1">
                                                            <button type="button" class="btn btn-primary" href="#" style="background:#afdf7c; ">
                                                                <i class="fa fa-pencil"></i>
                                                            </button>                                                             
                                                        </div>-->
                                                    </div>
                                                </div>
                                            </div>
                                             <?php
                                 }
                             }
                                    ?>
											</div>