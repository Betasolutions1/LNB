  <div class="pst_box" style="background-color:#eee;height:300px">
                                                    <div class="row">
                                                        <div class="col col-lg-3" style="background-color:#eee;  border-right:1px dashed #ddd;height:300px; padding:5px;">
                                                            <div align="center" style="margin-top:5px;">
                                                           <a href="profile.php?id=<?php echo $industry_post_rety['user_id']?>" ><!--class="pst_head_left"-->
                                                             <?php
																if($industry_post_usr_profi_pic!='')
																{
																?>
                                                                <img src="fb_users/<?php echo $industry_post_user_data_retry['Gender']; ?>/<?php echo $industry_post_user_data_retry['Email']?>/Profile/<?php echo $industry_post_usr_profi_pic; ?>" width="80" class="triangle-down" />
                                                                <?php
																}else
																{
																	?>
                                                                    <img src="images/profile/sq.PNG" width="80" class="triangle-down">
                                                                    <?php
																}
																	?>
                                                                </a>
                                                            </div>
                                                            <div align="center" style="margin-top:5px;">
                                                                <div style="border-bottom:1px dashed #000;line-height:15px;padding-bottom:5px;">
                                                                    <a href="profile.php?id=<?php echo $industry_post_rety['user_id']?>"><span style="color:#000; font-family:lato-bold;font-size:12px;"><?php echo $industry_post_user_data_retry['Name'];?></span></a>
                                                                    <br />
                                                                </div>
                                                                <div style="line-height:15px;border-bottom:1px dashed #000;padding-bottom:5px;">
                                                                    <span style="color:#000; font-family:lato-light;font-size:11px;line-height:.1px;">
       <?php echo $industry_post_user_data_retry['designation'];?></span>
                                                                    <br />
                                                                </div>
                                                                <div style="line-height:15px;border-bottom:1px dashed #000;padding-bottom:5px;">
                                                                    <span style="color:#000; font-family:lato-light;font-size:11px;line-height:.1px;"><?php echo $industry_post_user_data_retry['company'];?></span>
                                                                    <br />
                                                                </div>
                                                                <div style="line-height:15px;border-bottom:1px dashed #000;padding-bottom:5px;">
                                                                    <span style="color:#000; font-family:lato-regular;font-size:11px;line-height:.1px;"><?php echo $industry_post_user_data_retry['industry'];?> </span>
                                                                </div>
                                                            </div>
                                                            <div style="position:absolute;bottom:0px;right:0px;padding:0px;padding-bottom:10px;" lign="center" class=" col-lg-12">
                                                           <?php
                                                                $industry_post_status_exe=mysqli_query($conn,"select * from user_post_status where post_id='$industry_post_rety[post_id]'");
                                                                $industry_post_status_count=mysqli_num_rows($industry_post_status_exe);
                                                                $industry_post_status_retry=mysqli_fetch_array($industry_post_status_exe);
																$industry_post_comment_exeu=mysqli_query($conn,"select * from user_post_comment where post_id='$industry_post_rety[post_id]'");
                                                        $industry_post_comment_count=mysqli_num_rows($industry_post_comment_exeu);
                                                                ?>
                                                                <div class="col col-lg-6" style="padding:0px;" align="center">
                                                                    <i class="fa fa-pencil-square-o"> <a href="#" style="font-size:13px">+<?php echo $industry_post_comment_count ?></a></i>
                                                                </div>
                                                                <div class="col col-lg-6" style="padding:0px;" align="center">
                                                                    <i class="fa fa-tag" style=""> <a href="#" style="font-size:13px">+<?php echo $industry_post_status_count;?></a></i>
                                                                </div>
                                                                <br />
                                                            </div>
                                                        </div>
                                                        <div class="col col-lg-9" style="background-color:#fff; height:300px;padding:0px;">
                                                            <div>
                                                            <?php
                                                                if($industry_post_status_retry['status']=='Like')
                                                                {

                                                                    ?>
                                                                    <a href="#"  onClick="return unlike(<?php echo $industry_post_rety['post_id'];?>,<?php echo $_SESSION['id'];?>);"  >
                                                                <img src="images/others/unnote_1.png" height="90" style="position:absolute;left:365px;top:0px;" /></a>
                                                                 <?php
                                                                }else
                                                                {

                                                                    ?>
                                                                <a href="#"  onClick="return like(<?php echo  $industry_post_rety['post_id'];?>,<?php echo $_SESSION['id'];?>);" ><img src="images/others/note.png" height="90" style="position:absolute;left:365px;top:0px;"  /></a>
                                                                <?php
                                                        }
                                                        ?>
                                                            </div>
                                                            <div class="pst_body" style="height:px;overflow-y:scroll; padding-right:10px; height:240px">
                                                            <?php
                                                        if($industry_post_rety['post_pic']!='')
                                                        {
                                                            ?>
                                                              <img src="fb_users/<?php echo $industry_post_user_data_retry['Gender']; ?>/<?php echo $industry_post_user_data_retry['Email'];?>/Post/<?php echo $industry_post_rety['post_pic'];?>" class="img-responsive" width="400" />
                                                              <?php
                                                        }
                                                        ?>
                                                                <p style="margin-top:10px;margin-right:30px;text-align:"><?php echo $industry_post_rety['post_txt'];?></p>
                                                            </div>
                                                            <div class="col-lg-12" style=" border-top:1px dashed #eee; position:absolute;bottom:35px;" align="right">
                                                                <span style="font-size:10px; margin-left:5px;"> - on  <?php echo $industry_post_rety['post_time'];?></span>
                                                            </div>


                                                            <div class="col-lg-12" style="padding:0px;position:absolute;bottom:0px;">
                                                             <form method="post" action="" id="form_<?php echo $from_count;?>">
                                                                    <input type="hidden" name="cmt_ins_id_<?php echo $from_count;?>" value="<?php echo $_SESSION['id'];?>">
                                                                    <input type="hidden" name="cmt_post_id" id="cmt_post_id_<?php echo $from_count;?>" value="<?php echo $industry_post_rety['post_id'];?>">
                                                                    <?php
                                                                    $date=date('Y-m-d h:i');

                                                                    ?>
                                                                    <input type="hidden" name="cmt_ins_date_<?php echo $from_count;?>" id="cmt_ins_date_<?php echo $from_count;?>" value="<?php echo $date;?>">
                                                                <input type="text" name="cmt_txt" id="cmt_txt_<?php echo $from_count;?>" class="form-control" style="width:100%; padding-left:10px;padding-right:10px; border-radius:0px;" placeholder="Ink...">
                                                                <input type="submit" name="cmt_ins" onClick="return comment_insertion(<?php echo $from_count;?>);" style="display:none;">
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>