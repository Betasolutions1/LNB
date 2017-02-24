  <div class="bg_pst" style="background-color:transparent;">
  
   
                                                <div class="pst_box" style="background-color:#eee;height:370px">
                                                    <div class="row">
                                                        <div class="col col-lg-3" style="background-color:#eee;  border-right:1px dashed #ddd;height:300px; padding:5px;">
                                                            <div align="center" style="margin-top:5px;">
                                                           <a href="profile.php?id=<?php echo $candy['user_id'] ?>" ><!--class="pst_head_left"-->
                                                             <?php 
																if($candy_pic['image']!='')
																{
																?>
                                                                <img src="fb_users/<?php echo $user_pos_nrty['Gender']; ?>/<?php echo $user_pos_nrty['Email']; ?>/Profile/<?php echo $user_noted_ppic['image'];?>" width="80" class="triangle-down" />
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
                                                                    <a href="profile.php?id=<?php echo $user_pos_nrty['user_id'] ?>"><span style="color:#000; font-family:lato-bold;font-size:12px;"><?php echo $user_pos_nrty['Name'];?></span></a>
                                                                    <br />
                                                                </div>
                                                                <div style="line-height:15px;border-bottom:1px dashed #000;padding-bottom:5px;">
                                                                    <span style="color:#000; font-family:lato-light;font-size:11px;line-height:.1px;">
        <?php echo $user_pos_nrty['designation'];?></span>
                                                                    <br />
                                                                </div>
                                                                <div style="line-height:15px;border-bottom:1px dashed #000;padding-bottom:5px;">
                                                                    <span style="color:#000; font-family:lato-light;font-size:11px;line-height:.1px;"><?php echo $user_pos_nrty['company']?></span>
                                                                    <br />
                                                                </div>
                                                                <div style="line-height:15px;border-bottom:1px dashed #000;padding-bottom:5px;">
                                                                    <span style="color:#000; font-family:lato-regular;font-size:11px;line-height:.1px;"><?php echo $user_pos_nrty['industry'];?></span>
                                                                </div>
                                                            </div>
                                                            <div style="position:absolute;bottom:0px;right:0px;padding:0px;padding-bottom:10px;" lign="center" class=" col-lg-12">
                                                           <?php
                                                                $candy_noted_exe=mysqli_query($conn,"select * from user_post_status where post_id='$user_noted_post[post_id]' AND user_id='$_SESSION[id]'");
				$can=mysqli_fetch_array($candy_noted_exe);
				$cany=mysqli_num_rows($candy_noted_exe);
				 $user_noted_post_comment_execu=mysqli_query($conn,"select * from user_post_comment where post_id='$user_noted_post[post_id]'");
				$user_noted_comment_count=mysqli_num_rows($user_noted_post_comment_execu);
                                                                ?>
                                                                <div class="col col-lg-6" style="padding:0px;" align="center">
                                                                    <i class="fa fa-pencil-square-o"> <a href="#" style="font-size:13px">+<?php echo $user_noted_comment_count; ?></a></i> 
                                                                </div>
                                                                <div class="col col-lg-6" style="padding:0px;" align="center">
                                                                    <i class="fa fa-tag" style=""> <a href="#" style="font-size:13px">+<?php echo $user_noted_post['likes'];?></a></i>
                                                                </div>
                                                                <br />
                                                            </div>
                                                        </div>
                                                        <div class="col col-lg-9" style="background-color:#fff; height:370px;padding:0px;">
                                                            <div>
                                                            <?php
                                                                if($can['status']=='Like')
                                                                {

                                                                    ?>
                                                                    <a href="#"    onClick="return unlike(<?php echo $user_noted_post['post_id'];?>,<?php echo $_SESSION['id'];?>);"  >
                                                                <img src="images/others/unnote_1.png" height="90" style="position:absolute;left:400px;top:0px;" /></a>
                                                                 <?php
                                                                }else
                                                                {
                                                                   
                                                                    ?>
                                                                <a href="#"  onClick="return like(<?php echo $user_noted_post['post_id'];?>,<?php echo $_SESSION['id'];?>);" ><img src="images/others/note.png" height="90" style="position:absolute;left:400px;top:0px;"  /></a>
                                                                <?php
                                                        }
                                                        ?>
                                                            </div>
                                                            <div class="pst_body" style="height:px;overflow-y:scrol; padding-right:10px; height:500px">
                                                            <?php
                                                        if($user_noted_post['post_pic']!='')
                                                        {
                                                            ?>
                                                              <img src="fb_users/<?php echo $user_pos_nrty['Gender'];?>/<?php echo $user_pos_nrty['Email']; ?>/Post/<?php echo $user_noted_post['post_pic'];?>" class="img-responsive" width="400" />
                                                              <?php
                                                        }
                                                        ?>
                                                                <p style="margin-top:10px;margin-right:30px;text-align:"><?php echo $user_noted_post['post_txt']?></p> 
                                                            </div>
                                                            <div class="col-lg-12" style=" border-top:1px dashed #eee; position:absolute;bottom:35px;" align="right">
                                                                <span style="font-size:10px; margin-left:5px;"> - on  <?php echo $user_noted_post['post_time'];?></span>
                                                            </div>
                                                            
                                                            
                                                            <div class="col-lg-12" style="padding:0px;position:absolute;bottom:0px;">
                                                              <form method="post" action="script_code.php" id="form_<?php echo $from_count;?>" >
                                                                <input type="hidden" name="cmt_ins_id" id="cmt_ins_id_<?php echo $from_count;?>" value="<?php echo $_SESSION['id'];?>">
                                                                <input type="hidden" name="cmt_post_id" id="cmt_post_id_<?php echo $from_count;?>" value="<?php echo $user_profile_post['post_id'];?>">
                                                                <?php
                                                                $date=date('Y-m-d h:i');

                                                                ?>
                                                                <input type="hidden" name="cmt_ins_date" id="cmt_ins_date_<?php echo $from_count;?>" value="<?php echo $date;?>">
                                                                <input type="text"  name="cmt_txt" id="cmt_txt_<?php echo $from_count;?>" class="form-control" style="width:100%; padding-left:10px;padding-right:10px; border-radius:0px;" placeholder="Ink...">
                                                                <input type="submit" name="cmt_ins" onClick="return comment_insertion(<?php echo $from_count;?>);" style="display:none;">
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                <div class="pst_box" style="background-colr:#fff;">
                                                    <div class="row">
                                                        <div class="col col-lg-3" style="background-color:#eee; height:300px; border-right:1px dashed #ddd;">
                                                            <div align="center" style="margin-top:5px;">
                                                                <img src="images/profile/6.jpg" width="80" class="triangle-down" />
                                                            </div>
                                                            <div align="center" style="margin-top:5px;">
                                                                <span style="color:#000; font-family:lato-bold;font-size:15px;">Rajesh Reddy </span>
                                                                <BR>
                                                                <span style="color:#000; font-family:lato-light;font-size:13px;">
        CEO</span>
                                                                <br>
                                                                <span style="color:#000; font-family:lato-light;font-size:13px;">Beta Solutions</span>
                                                                <BR>
                                                                <span style="color:#000; font-family:lato-regular;font-size:13px;">IT-Sofware </span>
                                                                <BR>
                                                            </div>
                                                        </div>
                                                        <div class="col col-lg-9" style="background-color:#fff; height:300px;padding:0px;">
                                                            <div class="pst_body" style="height:170px;overflow-y:scroll; padding-right:10px;">
                                                                <img src="images/post/f_c.jpg" width="400" />
                                                            </div>
                                                            <div style=" border-top:1px dashed #eee;">
                                                                <span style="font-size:10px; margin-left:5px;"> - on 15th January, 2014</span>
                                                            </div>
                                                            <div class="pst_cmt" style="">
                                                                <div class="pst_cmt_tog pst_cmt_pad" style="background-color:#fff;border-top:1px dashed #eee;padding-top:4px;">
                                                                    <!--comment toggle-->
                                                                    <i></i>
                                                                    <a href="#"><span style="margin-left:10px;padding-top:5px;">View Inks</span></a>
                                                                    <span class="pst_cmt_muted">+2 Inks</span>
                                                                    <span class="pst_cmt_muted">+2 noted</span>
                                                                </div>
                                                                <div class="row  pst_cmt_body">
                                                                    <div class="col-lg-2" style="width:40px">
                                                                        <a href="#" class="pst_head_left">
                                                                            <img src="images/profile/1.jpg" width="40" style="margin-left:-15px;">
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-lg-10" style="padding-top:0px;">
                                                                        <a href="#" style="color:#000; font-size:13px;">Steve</a>
                                                                        <span class="pst_head_pos  pst_cmt_muted" style="padding:0px;">- 29 jan 2017</span>
                                                                        <div style="margin-left:0px; font-size:11px;">CONGRATS STEVE</div>
                                                                    </div>
                                                                </div>
                                                                <div class="row pst_cmt_row"> 
                                                                    <div class="col-lg-10 pst_cmt_pad">
                                                                        <input type="text" class="form-control" style="width:100%; padding-left:10px;padding-right:10px; border-radius:0px;" placeholder="INK..."> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pst_box" style="background-colr:#fff;">
                                                    <div class="row">
                                                        <div class="col col-lg-3" style="background-color:#eee; height:300px; border-right:1px dashed #ddd;">
                                                            <div align="center" style="margin-top:5px;">
                                                                <img src="images/profile/6.jpg" width="80" class="triangle-down" />
                                                            </div>
                                                            <div align="center" style="margin-top:5px;">
                                                                <span style="color:#000; font-family:lato-bold;font-size:15px;">Rajesh Reddy </span>
                                                                <BR>
                                                                <span style="color:#000; font-family:lato-light;font-size:13px;">
        CEO</span>
                                                                <br>
                                                                <span style="color:#000; font-family:lato-light;font-size:13px;">Beta Solutions</span>
                                                                <BR>
                                                                <span style="color:#000; font-family:lato-regular;font-size:13px;">IT-Sofware </span>
                                                                <BR>
                                                            </div>
                                                        </div>
                                                        <div class="col col-lg-9" style="background-color:#fff; height:300px;padding:0px;">
                                                            <div class="pst_body" style="height:170px;overflow-y:scroll; padding-right:10px;">
                                                                <p style="margin-top:10px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, pariatur!
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, pariatur!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, pariatur!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, pariatur!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, pariatur!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, pariatur!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, pariatur!</p> 
                                                            </div>
                                                            <div style=" border-top:1px dashed #eee;">
                                                                <span style="font-size:10px; margin-left:5px;"> - on 15th January, 2014</span>
                                                            </div>
                                                            <div class="pst_cmt" style="">
                                                                <div class="pst_cmt_tog pst_cmt_pad" style="background-color:#fff;border-top:1px dashed #eee;padding-top:4px;">
                                                                    <!--comment toggle-->
                                                                    <i></i>
                                                                    <a href="#"><span style="margin-left:10px;padding-top:5px;">View Inks</span></a>
                                                                    <span class="pst_cmt_muted">+2 Inks</span>
                                                                    <span class="pst_cmt_muted">+2 noted</span>
                                                                </div>
                                                                <div class="row  pst_cmt_body">
                                                                    <div class="col-lg-2" style="width:40px">
                                                                        <a href="#" class="pst_head_left">
                                                                            <img src="images/profile/1.jpg" width="40" style="margin-left:-15px;">
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-lg-10" style="padding-top:0px;">
                                                                        <a href="#" style="color:#000; font-size:13px;">Steve</a>
                                                                        <span class="pst_head_pos  pst_cmt_muted" style="padding:0px;">- 29 jan 2017</span>
                                                                        <div style="margin-left:0px; font-size:11px;">CONGRATS STEVE</div>
                                                                    </div>
                                                                </div>
                                                                <div class="row pst_cmt_row"> 
                                                                    <div class="col-lg-10 pst_cmt_pad">
                                                                        <input type="text" class="form-control" style="width:100%; padding-left:10px;padding-right:10px; border-radius:0px;" placeholder="INK..."> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            ////---------------------ORIGINAM INDEX DATA---------------------------
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                              <div class="pst_box" style="background-color:#fff;">
                                                    <div class="pst_head">
                                                        <div class="row pst_row_fill" style="">
                                                            <div class="col-lg-2 " align="left" style="width:70px;height:70px;">
                                                                <?php
                                                                //$ency=base64_encode('id=$resp[user_id]');
                                                                ?>
                                                                <a href="profile.php?id=<?php echo $resp['user_id'] ?>" class="pst_head_left">
                                                                <?php
                                                                if($pupp['image']!='')
																{
																?>
                                                                    <img src="fb_users/<?php echo $pud['Gender']?>/<?php echo $pud['Email'];?>/Profile/<?php echo $pupp['image'];?>" width="70" height="70" style="margin-left:-15px;">
                                                                    <?php
																}else
																{
																	?>
                                                                    <img src="images/profile/sq.PNG" width="70" height="70" style="margin-left:-15px;">
                                                                    <?php
																}
																	?>
                                                                </a>
                                                            </div>
                                                            <div class="col-lg-8 pst_head_txt">
                                                                <a href="profile.php?id=<?php echo $resp['user_id'] ?>" class="text_wht"><?php echo $pud['Name'];?></a>
                                                                <br>
                                                                <span class="pst_head_pos text_wht">CEO-Beta Solutions</span>
                                                                <br>
                                                                <span class="text_wht">IT-Industry</span>
                                                            </div>
                                                            <div class="col-lg-2" style="
    float: right;
    background-color: #afdf7c;
    width: 126px;
    height: 70px;
">
                                                            <div id="bookmarks" style="
    float: right;
">
                                                                <?php
                                                                $pse=mysqli_query($conn,"select * from user_post_status where post_id='$resp[post_id]' AND user_id='$_SESSION[id]'");
                                                                $ps=mysqli_fetch_array($pse);
                                                                $psc=mysqli_num_rows($pse);
                                                                ?>
                                                                <?php
                                                                if($ps['status']=='Like')
                                                                {

                                                                    ?>
                                                                    <span>
                                                                    <?php /*?>id="<?php echo $resp['post_id'];?>" data-src="<?php echo $_SESSION['id'];?>"<?php */?>
                                                                    <a href="#"   onClick="return unlike(<?php echo $resp['post_id'];?>,<?php echo $_SESSION['id'];?>);" ><img src="images/others/unnote_1.png" style="margin-bottom: 0px;position: relative;height: 100px;z-index: 1; "/></a></span>
                                                                    <!--unlike-->
                                                                    <?php
                                                                }else
                                                                {
                                                                    //echo $resp['post_id'] ."<br>";
                                                                    //echo $_SESSION['id'];
                                                                    ?>

                                                                    <span>
                                                                    <?php /*?>id="<?php echo $resp['post_id'];?>" data-src="<?php echo $_SESSION['id'];?>"<?php */?>
                                                                    <a href="#"  onClick="return like(<?php echo $resp['post_id'];?>,<?php echo $_SESSION['id'];?>);" ><img src="images/others/note.png" style="margin-bottom: 0px;position: relative;height: 100px;z-index: 1;"   /></a></span>
                                                                                                                                        <!--like-->

                                                                    <?php
                                                                }
                                                                ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="pst_body">
                                                        <?php
                                                        if($resp['post_pic']!='')
                                                        {
                                                            ?>
                                                            <span><img src="fb_users/<?php echo $pud['Gender']?>/<?php echo $pud['Email'];?>/Post/<?php echo $resp['post_pic'];?>" class="img-responsive" style=""></span>
                                                            <?php
                                                        }
                                                        ?>
                                                        <br>
                                                        <p style="margin-top:10px;"><?php echo $resp['post_txt'];?></p>
                                                        <span style="font-size:10px;"> - <?php echo $resp['post_time'];?></span>

                                                    </div>
                                                    <div class="pst_cmt">
                                                        <?php $ret_coments=mysqli_query($conn,"select * from user_post_comment where post_id='$resp[post_id]'");
														$new_poe_cmcou=mysqli_num_rows($ret_coments);

                                                        ?>
                                                        <div class="pst_cmt_tog pst_cmt_pad">
                                                            <!--comment toggle-->
                                                            <i></i>
                                                            <a href="#"><span style="margin-left:10px;">View Inks</span></a>
                                                            <span class="pst_cmt_muted"><?php echo $new_poe_cmcou;?> Inks</span><span class="pst_cmt_muted"><?php echo $psc;?>Notes</span>
                                                        </div>
                                                        <?php
                                                        while($ret_cmt=mysqli_fetch_array($ret_coments))
                                                        {
                                                            $us_co_de=mysqli_query($conn,"select * from users where user_id='$ret_cmt[user_id]'");
                                                            $use_cm=mysqli_fetch_array($us_co_de);
                                                            $us_cmt_pic_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$use_cm[user_id]'");
                                                            $us_cmt_pic=mysqli_fetch_array($us_cmt_pic_exe);
                                                            ?>
                                                            <div class="row  pst_cmt_body">
                                                                <div class="col-lg-2" style="width:70px;">
                                                                    <a href="profile.php?id=<?php echo $use_cm['user_id'] ?>" class="pst_head_left">
                                                                    <?php
                                                                    if($us_cmt_pic['image']!='')
																	{
																	?>
                                                                        <img src="fb_users/<?php echo $use_cm['Gender']?>/<?php echo $use_cm['Email']?>/Profile/<?php echo $us_cmt_pic['image'];?>"  width="70" height="70" style="margin-left:-15px;">
                                                                        <?php
																	}else
																	{
																		?>
                                                                        <img src="images/profile/sq.PNG" width="70" height="70" style="margin-left:-15px;" />
                                                                      <?php
																	}
																	  ?>  
                                                                    </a>
                                                                </div>
                                                                <div class="col-lg-10" style="padding-top:5px;">
                                                                    <a href="profile.php?id=<?php echo $use_cm['user_id'] ?>" style="color:#000;"><?php echo $use_cm['Name']; ?></a>
                                                                    <br>
                                                                    <span class="pst_head_pos  pst_cmt_muted">- Inked On <?php echo $ret_cmt['comment_time'];?></span>
                                                                    <br>
                                                                    <div style="margin-left:10px;"><?php echo $ret_cmt['comment'];?></div>
                                                                </div>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>

                                                        <div class="row pst_cmt_row">
                                                            <div class="col-lg-10 pst_cmt_pad">
                                                                <form method="post" action="" id="form_<?php echo $from_count;?>">
                                                                    <input type="hidden" name="cmt_ins_id" id="cmt_ins_id_<?php echo $from_count;?>" value="<?php echo $_SESSION['id'];?>">
                                                                    <input type="hidden" name="cmt_post_id" id="cmt_post_id_<?php echo $from_count;?>" value="<?php echo $resp['post_id'];?>">
                                                                    <?php
                                                                    $date=date('Y-m-d h:i');

                                                                    ?>
                                                                    <input type="hidden" name="cmt_ins_date" id="cmt_ins_date_<?php echo $from_count;?>" value="<?php echo $date;?>">
                                                                    <input type="text" class="form-control" name="cmt_txt" id="cmt_txt_<?php echo $from_count;?>" style="width:100%; padding-left:10px;padding-right:10px; " placeholder="INK...">
                                                                    <input type="submit" name="cmt_ins" onClick="return comment_insertion(<?php echo $from_count;?>);" style="display:none;">
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
                                                
                                                
                                                
                                                
 //--------------------------------ORGINAL INDEX INDUSTRY--------------------------------------------------------
 
 
   <div class="pst_box" style="background-color:#fff;">
                                                    <div class="pst_head">
                                                        <div class="row pst_row_fill" style="">
                                                            <div class="col-lg-2 " align="left" style="width:70px;">
                                                                <a href="profile.php?id=<?php echo $industry_post_rety['user_id']?>" class="pst_head_left">
                                                                <?php 
																if($industry_post_usr_profi_pic!='')
																{
																?>
                                                                    <img src="fb_users/<?php echo $industry_post_user_data_retry['Gender']; ?>/<?php echo $industry_post_user_data_retry['Email']?>/Profile/<?php echo $industry_post_usr_profi_pic; ?>" width="70" style="margin-left:-15px;">
                                                                    <?php
																}else
																{
																	?>
                                                                    <img src="images/profile/sq.PNG"  width="70" style="margin-left:-15px;">
                                                                  <?php
																}
																  ?>  
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


                                                                    <span><a href="#" onClick="return unlike(<?php echo $industry_post_rety['post_id'];?>,<?php echo $_SESSION['id'];?>);" ><img src="images/others/unnote_1.png" style="margin-bottom: 0px;position: relative;height: 100px;z-index: 1; "   /></a></span>
                                                                    <?php
                                                                }
                                                                else{
                                                                    ?>


                                                                    <span>
                                                                    <?php /*?>id="<?php echo $resp['post_id'];?>" data-src="<?php echo $_SESSION['id'];?>"<?php */?>
                                                                    <a href="#"  onClick="return like(<?php echo  $industry_post_rety['post_id'];?>,<?php echo $_SESSION['id'];?>);" ><img src="images/others/note.png" style="margin-bottom: 0px;position: relative;height: 100px;z-index: 1;"   /></a></span>
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
                                                            <a href="#"><span style="margin-left:10px;">View Inks</span></a>
                                                            <span class="pst_cmt_muted"><?php echo $industry_post_comment_count;?> Inks</span>
                                                            <span class="pst_cmt_muted"><?php echo $industry_post_status_count;?>Notes</span>
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
                                                                    <?php
                                                                    if($industry_post_comment_user_pic_retry['image']!='')
																	{
																	?>
                                                                        <img src="fb_users/<?php echo $industry_post_comment_user_retry['Gender']?>/<?php echo $industry_post_comment_user_retry['Email']?>/Profile/<?php echo $industry_post_comment_user_pic_retry['image'];?>"  width="70" style="margin-left:-15px;">
                                                                        <?php
																	}else
																	{
																		?>
                                                                        <img src="images/profile/sq.PNG"  width="70" style="margin-left:-15px;">
                                                                        <?php
																	}
																		?>
                                                                    </a>
                                                                </div>
                                                                <div class="col-lg-10" style="padding-top:5px;">
                                                                    <a href="profile.php?id=<?php echo $industry_post_comment_user_retry['user_id'] ?>" style="color:#000;"><?php echo $industry_post_comment_user_retry['Name']; ?></a>
                                                                    <br>
                                                                    <span class="pst_head_pos  pst_cmt_muted">-Inked on <?php echo $industry_post_comment_retry['comment_time'];?></span>
                                                                    <br>
                                                                    <div style="margin-left:10px;"><?php echo $industry_post_comment_retry['comment']; ?></div>
                                                                </div>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>

                                                        <div class="row pst_cmt_row">
                                                            <div class="col-lg-10 pst_cmt_pad">
                                                                <form method="post" action="" id="form_<?php echo $from_count;?>">
                                                                    <input type="hidden" name="cmt_ins_id_<?php echo $from_count;?>" value="<?php echo $_SESSION['id'];?>">
                                                                    <input type="hidden" name="cmt_post_id" id="cmt_post_id_<?php echo $from_count;?>" value="<?php echo $industry_post_rety['post_id'];?>">
                                                                    <?php
                                                                    $date=date('Y-m-d h:i');

                                                                    ?>
                                                                    <input type="hidden" name="cmt_ins_date_<?php echo $from_count;?>" id="cmt_ins_date_<?php echo $from_count;?>" value="<?php echo $date;?>">
                                                                    <input type="text" class="form-control" name="cmt_txt" id="cmt_txt_<?php echo $from_count;?>" style="width:100%; padding-left:10px;padding-right:10px; " placeholder="Ink...">
                                                                    <input type="submit" name="cmt_ins" onClick="return comment_insertion(<?php echo $from_count;?>);" style="display:none;">
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
                                                
                                                //---END INDUSTRY----                                               
                                                
                                                
                                                //----BEGIN INKED---
   <div class="pst_box" style="background-color:#fff;">
                                                <div class="pst_head">
                                                    <div class="row pst_row_fill" style="">
                                                        <div class="col-lg-2 " align="left" style="width:70px;">
                                                            <a href="#" class="pst_head_left">
                                                            <?php
															if($user_profile_pic['image']!='')
                                                            {
															?>
                                                                <img src="fb_users/<?php echo $usr_dis['Gender']; ?>/<?php echo $usr_dis['Email']; ?>/Profile/<?php echo $user_profile_pic['image'];?>" width="70" style="margin-left:-15px;">
                                                                <?php
															}else{
																?>
                                                                <img src="images/profile/sq.PNG"  width="70" style="margin-left:-15px;">
                                                                <?php
															}
																?>
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-8 pst_head_txt">
                                                            <a href="#" class="text_wht"><?php echo $usr_dis['Name'];?></a>
                                                            <br>
                                                            <span class="pst_head_pos text_wht"><?php echo $usr_dis['designation'];?>-<?php echo $usr_dis['company']?></span>
                                                            <br>
                                                            <span class="text_wht"><?php echo $usr_dis['industry'];?></span>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <?php
                                                            $user_profile_bookmark_exe=mysqli_query($conn,"select * from user_post_status where post_id='$user_profile_post[post_id]'");
                                                            $user_profilr_bookmark=mysqli_fetch_array($user_profile_bookmark_exe);
															$ink_pos_not_cou=mysqli_num_rows($user_profile_bookmark_exe);
                                                            if($user_profilr_bookmark['status']=='Like')
                                                            {
                                                                ?>


                                                                <span><a href="#"  onClick="return unlike(<?php echo $user_profile_post['post_id'];?>,<?php echo $_SESSION['id'];?>);" ><img src="images/others/unnote_1.png" style="margin-bottom: 0px;position: relative;height: 100px;z-index: 1; "   /></a></span>
                                                                <?php
                                                            }else
                                                            {
                                                                //echo $resp['post_id'] ."<br>";
                                                                //echo $_SESSION['id'];
                                                                ?>

                                                                <span><a href="#"  onClick="return like(<?php echo $user_profile_post['post_id'];?>,<?php echo $_SESSION['id'];?>);" ><img src="images/others/note.png" style="margin-bottom: 0px;position: relative;height: 100px;z-index: 1;"   /></a></span>
                                                                <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="pst_body">
                                                    <?php
                                                    if($user_profile_post['post_pic'])
                                                    {
                                                        ?>
                                                        <span><img src="fb_users/<?php echo $usr_dis['Gender'];?>/<?php echo $usr_dis['Email']; ?>/Post/<?php echo $user_profile_post['post_pic'];?>" class="img-responsive" style=""></span>
                                                        <?php
                                                    }
                                                    ?>
                                                    <br>
                                                    <p style="margin-top:10px;"><?php echo $user_profile_post['post_txt']?></p>
                                                    <span style="font-size:10px;"> - <?php echo $user_profile_post['post_time'];?></span>

                                                </div>
                                                <div class="pst_cmt">
                                                    <?php
                                                    $user_profile_post_comment_execu=mysqli_query($conn,"select * from user_post_comment where post_id='$user_profile_post[post_id]'");
                                                    $user_profile_comment_count=mysqli_num_rows($user_profile_post_comment_execu);

                                                    ?>
                                                    <div class="pst_cmt_tog pst_cmt_pad">
                                                        <!--comment toggle-->
                                                        <i></i>
                                                        <a href="#"><span style="margin-left:10px;">View Inks</span></a>
                                                        <span class="pst_cmt_muted"><?php echo $user_profile_comment_count;?> Inks</span>
                                                        <span class="pst_cmt_muted"><?php echo $ink_pos_not_cou;?>Notes</span>
                                                    </div>
                                                    <?php
                                                    while($user_profile_post_comment=mysqli_fetch_array($user_profile_post_comment_execu))
                                                    { ++$from_count;
                                                        $profile_post_comment_user_exec=mysqli_query($conn,"select * from users where user_id='$user_profile_post_comment[user_id]'");
                                                        $profile_post_comment_user_de=mysqli_fetch_array($profile_post_comment_user_exec);
                                                        $profile_post_comment_user_pic_exect=mysqli_query($conn,"select * from user_profile_pic where user_id='$user_profile_post_comment[user_id]'");
                                                        $prof_post_comment_user_pp=mysqli_fetch_array($profile_post_comment_user_pic_exect);
                                                        ?>

                                                        <div class="row  pst_cmt_body">
                                                            <div class="col-lg-2" style="width:70px;">
                                                                <a href="#" class="pst_head_left">
                                                                <?php
                                                                if($prof_post_comment_user_pp['image']!='')
																{
																?>
                                                                    <img src="fb_users/<?php echo $profile_post_comment_user_de['Gender'];?>/<?php echo $profile_post_comment_user_de['Email']; ?>/Profile/<?php echo $prof_post_comment_user_pp['image']; ?>"  width="70" style="margin-left:-15px;">
                                                                    <?php
																}else
																{
																	?>
                                                                    <img src="images/profile/sq.PNG" width="70" style="margin-left:-15px;">
                                                                    <?php
																}
																	?>
                                                                </a>
                                                            </div>
                                                            <div class="col-lg-10" style="padding-top:5px;">
                                                                <a href="#" style="color:#000;"><?php echo $profile_post_comment_user_de['Name'];?></a>
                                                                <br>
                                                                <span class="pst_head_pos  pst_cmt_muted">- Inked on <?php echo $user_profile_post_comment['comment_time'];?></span>
                                                                <br>
                                                                <div style="margin-left:10px;"><?php echo $user_profile_post_comment['comment'];?></div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                    ?>

                                                    <div class="row pst_cmt_row">
                                                        <div class="col-lg-10 pst_cmt_pad">
                                                            <form method="post" action="script_code.php" id="form_<?php echo $from_count;?>" >
                                                                <input type="hidden" name="cmt_ins_id" id="cmt_ins_id_<?php echo $from_count;?>" value="<?php echo $_SESSION['id'];?>">
                                                                <input type="hidden" name="cmt_post_id" id="cmt_post_id_<?php echo $from_count;?>" value="<?php echo $user_profile_post['post_id'];?>">
                                                                <?php
                                                                $date=date('Y-m-d h:i');

                                                                ?>
                                                                <input type="hidden" name="cmt_ins_date" id="cmt_ins_date_<?php echo $from_count;?>" value="<?php echo $date;?>">
                                                                <input type="text" class="form-control" name="cmt_txt" id="cmt_txt_<?php echo $from_count;?>" style="width:100%; padding-left:10px;padding-right:10px; " placeholder="Ink...">
                                                                <input type="submit" name="cmt_ins" onClick="return comment_insertion(<?php echo $from_count;?>);" style="display:none;">
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
                                            //--END INKED                                              
                                                
                            //----BEGIN NOTED---------------
                            
                            
                                <div class="pst_box" style="background-color:#fff;">
                                            <div class="pst_head">
                                                <div class="row pst_row_fill" style="">
                                                    <div class="col-lg-2 " align="left" style="width:70px;">
                                                        <a href="profile.php?id=<?php echo $user_pos_nrty['user_id'] ?>" class="pst_head_left">
                                                        <?php
                                                        if($user_noted_ppic['image']!='')
														{
														?>
                                                            <img src="fb_users/<?php echo $user_pos_nrty['Gender']; ?>/<?php echo $user_pos_nrty['Email']; ?>/Profile/<?php echo $user_noted_ppic['image'];?>" width="70" style="margin-left:-15px;">
                                                            <?php
														}else
														{
															?>
                                                            <img src="images/profile/sq.PNG"  width="70" style="margin-left:-15px;">
                                                            <?php
														}
															?>
                                                        </a>
                                                    </div>
                                                    <div class="col-lg-8 pst_head_txt">
                                                        <a href="profile.php?id=<?php echo $user_pos_nrty['user_id'] ?>" class="text_wht"><?php echo $user_pos_nrty['Name'];?></a>
                                                        <br>
                                                        <span class="pst_head_pos text_wht"><?php echo $user_pos_nrty['designation'];?>-<?php echo $user_pos_nrty['company']?></span>
                                                        <br>
                                                        <span class="text_wht"><?php echo $user_pos_nrty['industry'];?></span>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <?php
                                                        /*$pse=mysqli_query($conn,"select * from user_post_status where post_id='$user_noted_post[post_id]' AND user_id='$_SESSION[id]'");
                                                        $ps=mysqli_fetch_array($pse);
                                                        $psc=mysqli_num_rows($pse);*/
                                                        ?>
                                                        <?php
                                                        if($ret_user_noted['status']=='Like')
                                                        {

                                                            ?>
                                                            <span>
                                                            <?php /*?>id="<?php echo $user_noted_post['post_id'];?>" data-src="<?php echo $_SESSION['id'];?>"<?php */?>
                                                            <a href="#"   onClick="return unlike(<?php echo $user_noted_post['post_id'];?>,<?php echo $_SESSION['id'];?>);" ><img src="images/others/unnote_1.png" style="margin-bottom: 0px;position: relative;height: 100px;z-index: 1; "   /></a></span>
                                                            <?php
                                                        }else
                                                        {
                                                            //echo $resp['post_id'] ."<br>";
                                                            //echo $_SESSION['id'];
                                                            ?>

                                                            <span>
                                                            <?php /*?>id="<?php echo $user_noted_post['post_id'];?>" data-src="<?php echo $_SESSION['id'];?>"<?php */?>
                                                            <a href="#"  onClick="return like(<?php echo $user_noted_post['post_id'];?>,<?php echo $_SESSION['id'];?>);" ><img src="images/others/note.png" style="margin-bottom: 0px;position: relative;height: 100px;z-index: 1;"   /></a></span>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="pst_body">
                                                <?php
                                                if($user_noted_post['post_pic']!='')
                                                {
                                                    ?>
                                                    <span><img src="fb_users/<?php echo $user_pos_nrty['Gender'];?>/<?php echo $user_pos_nrty['Email']; ?>/Post/<?php echo $user_noted_post['post_pic'];?>" class="img-responsive" style=""></span>
                                                    <?php
                                                }
                                                ?>
                                                <br>
                                                <p style="margin-top:10px;"><?php echo $user_noted_post['post_txt']?></p>
                                                <span style="font-size:10px;"> - <?php echo $user_noted_post['post_time'];?></span>

                                            </div>
                                            <div class="pst_cmt">
                                                <?php
                                                $user_noted_post_comment_execu=mysqli_query($conn,"select * from user_post_comment where post_id='$user_noted_post[post_id]'");
                                                $user_noted_comment_count=mysqli_num_rows($user_noted_post_comment_execu);

                                                ?>
                                                <div class="pst_cmt_tog pst_cmt_pad">
                                                    <!--comment toggle-->
                                                    <i></i>
                                                    <a href="#"><span style="margin-left:10px;">View Comments</span></a>
                                                    <span class="pst_cmt_muted"><?php echo $user_noted_comment_count;?> Inks</span>
                                                   <span class="pst_cmt_muted"> <?php echo $user_noted_post['likes']?>Notes</span>
                                                </div>
                                                <?php
                                                while($user_profile_post_comment=mysqli_fetch_array($user_noted_post_comment_execu))
                                                {
													++$from_count;
                                                    $profile_post_comment_user_exec=mysqli_query($conn,"select * from users where user_id='$user_profile_post_comment[user_id]'");
                                                    $profile_post_comment_user_de=mysqli_fetch_array($profile_post_comment_user_exec);
                                                    $profile_post_comment_user_pic_exect=mysqli_query($conn,"select * from user_profile_pic where user_id='$user_profile_post_comment[user_id]'");
                                                    $prof_post_comment_user_pp=mysqli_fetch_array($profile_post_comment_user_pic_exect);
                                                    ?>
                                                    <div class="row  pst_cmt_body">
                                                        <div class="col-lg-2" style="width:70px;">
                                                            <a href="profile.php?id=<?php echo $profile_post_comment_user_de['user_id'] ?>" class="pst_head_left">
                                                            <?php
                                                            if($prof_post_comment_user_pp['image']!='')
															{
															?>
                                                                <img src="fb_users/<?php echo $profile_post_comment_user_de['Gender'];?>/<?php echo $profile_post_comment_user_de['Email']; ?>/Profile/<?php echo $prof_post_comment_user_pp['image']; ?>"  width="70" style="margin-left:-15px;">
                                                                <?php
															}else
															{
																?>
                                                                <img src="images/profile/sq.PNG" width="70" style="margin-left:-15px;">
                                                                <?php
															}
																?>
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-10" style="padding-top:5px;">
                                                            <a href="profile.php?id=<?php echo $profile_post_comment_user_de['user_id'] ?>" style="color:#000;"><?php echo $profile_post_comment_user_de['Name'];?></a>
                                                            <br>
                                                            <span class="pst_head_pos  pst_cmt_muted">- wrote on <?php echo $user_profile_post_comment['comment_time'];?></span>
                                                            <br>
                                                            <div style="margin-left:10px;"><?php echo $user_profile_post_comment['comment'];?></div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                                ?>

                                                <div class="row pst_cmt_row">
                                                    <div class="col-lg-10 pst_cmt_pad">
                                                        <form method="post" action="" id="form_<?php echo $from_count;?>" >
                                                            <input type="hidden" name="cmt_ins_id" id="cmt_ins_id_<?php echo $from_count;?>" value="<?php echo $_SESSION['id'];?>">
                                                            <input type="hidden" name="cmt_post_id" id="cmt_post_id_<?php echo $from_count;?>" value="<?php echo $user_noted_post['post_id'];?>">
                                                            <?php
                                                            $date=date('Y-m-d h:i');

                                                            ?>
                                                            <input type="hidden" name="cmt_ins_date" id="cmt_ins_date_<?php echo $from_count;?>" value="<?php echo $date;?>">
                                                            <input type="text" class="form-control" name="cmt_txt" id="cmt_txt_<?php echo $from_count;?>" style="width:100%; padding-left:10px;padding-right:10px; " placeholder="Ink...">
                                                            <input type="submit" name="cmt_ins" onClick="return comment_insertion(<?php echo $from_count;?>);" style="display:none;">
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
                                        //--END NOTED----------                    
                                        
                                        
                                        
                                        //---------BEGIN PROFILE INKED--------------
                                        
                                         <div class="pst_box" style="background-color:#fff;">
                                                <div class="pst_head">
                                                    <div class="row pst_row_fill" style="">
                                                        <div class="col-lg-2 " align="left" style="width:70px;">
                                                            <a href="#" class="pst_head_left">
                                                                <img src="fb_users/<?php echo $candy['Gender']; ?>/<?php echo $candy['Email']; ?>/Profile/<?php echo $candy_pic['image'];?>" width="70" style="margin-left:-15px;">
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-8 pst_head_txt">
                                                            <a href="#" class="text_wht"><?php echo $candy['Name'];?></a>
                                                            <br>
                                                            <span class="pst_head_pos text_wht"><?php echo $candy['designation'];?>-<?php echo $candy['company']?></span>
                                                            <br>
                                                            <span class="text_wht"><?php echo $candy['industry'];?></span>
                                                        </div>
                                                        <div class="col-lg-2">
                                                       <?php
                            $user_profile_bookmark_exe=mysqli_query($conn,"select * from user_post_status where post_id='$user_profile_post[post_id]' AND user_id='$_SESSION[id]'");
							$user_profilr_bookmark=mysqli_fetch_array($user_profile_bookmark_exe);
							if($user_profilr_bookmark['status']=='Like')
							{
							?>
					
					
                    <span><a href=""  onClick="unlike(<?php echo $user_profile_post['post_id'];?>,<?php echo $_SESSION['id'];?>);" >unlike</a></span>
                    <?php
				}else
				{
					//echo $resp['post_id'] ."<br>";
					//echo $_SESSION['id'];
				?>
                
                <span><a href=""  onClick="like(<?php echo $user_profile_post['post_id'];?>,<?php echo $_SESSION['id'];?>);" >like</a></span>
                <?php
				}
				?>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                                <div class="pst_body">
                                                 <?php
                    if($user_profile_post['post_pic'])
					{
					?>
                                                    <span><img src="fb_users/<?php echo $candy['Gender'];?>/<?php echo $candy['Email']; ?>/Post/<?php echo $user_profile_post['post_pic'];?>" class="img-responsive" style=""></span>
                                                     <?php
												}
												?>
                                                    <br>
                                                      <p style="margin-top:10px;"><?php echo $user_profile_post['post_txt']?></p> 
                                                    <span style="font-size:10px;"> - <?php echo $user_profile_post['post_time'];?></span>
                                                   
                                                </div>
                                                <div class="pst_cmt">
                                                  <?php
                $user_profile_post_comment_execu=mysqli_query($conn,"select * from user_post_comment where post_id='$user_profile_post[post_id]'");
				$user_profile_comment_count=mysqli_num_rows($user_profile_post_comment_execu);
				
				?>
                                                    <div class="pst_cmt_tog pst_cmt_pad">
                                                        <!--comment toggle-->
                                                        <i></i>
                                                        <a href="#"><span style="margin-left:10px;">View Comments</span></a>
                                                        <span class="pst_cmt_muted"><?php echo $user_profile_comment_count;?> writes</span>
                                                    </div>
                                                    <?php
                                                   while($user_profile_post_comment=mysqli_fetch_array($user_profile_post_comment_execu))
				{
				$profile_post_comment_user_exec=mysqli_query($conn,"select * from users where user_id='$user_profile_post_comment[user_id]'");
				$profile_post_comment_user_de=mysqli_fetch_array($profile_post_comment_user_exec);
				$profile_post_comment_user_pic_exect=mysqli_query($conn,"select * from user_profile_pic where user_id='$user_profile_post_comment[user_id]'");
				$prof_post_comment_user_pp=mysqli_fetch_array($profile_post_comment_user_pic_exect);
				?>
													
                                                    <div class="row  pst_cmt_body">
                                                        <div class="col-lg-2" style="width:70px;">
                                                            <a href="#" class="pst_head_left">
                                                                <img src="fb_users/<?php echo $profile_post_comment_user_de['Gender'];?>/<?php echo $profile_post_comment_user_de['Email']; ?>/Profile/<?php echo $prof_post_comment_user_pp['image']; ?>"  width="70" style="margin-left:-15px;">
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-10" style="padding-top:5px;">
                                                            <a href="#" style="color:#000;"><?php echo $profile_post_comment_user_de['Name'];?></a>
                                                            <br>
                                                            <span class="pst_head_pos  pst_cmt_muted">- wrote on <?php echo $user_profile_post_comment['comment_time'];?></span>
                                                            <br>
                                                            <div style="margin-left:10px;"><?php echo $user_profile_post_comment['comment'];?></div>
                                                        </div>
                                                    </div>
                                                    <?php
				}
													?>
                                                    
                                                    <div class="row pst_cmt_row"> 
                                                        <div class="col-lg-10 pst_cmt_pad">
                                                        <form method="post" action="script_code.php">
                                                        <input type="hidden" name="cmt_ins_id" value="<?php echo $_SESSION['id'];?>">
              											<input type="hidden" name="cmt_post_id" value="<?php echo $user_profile_post['post_id'];?>">
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
                                            
                                            
                                            //----------PROFILE NOTED FILES----------
                                            
                                            
                                              <div class="pst_box" style="background-color:#fff;">
                                                <div class="pst_head">
                                                    <div class="row pst_row_fill" style="">
                                                        <div class="col-lg-2 " align="left" style="width:70px;">
                                                            <a href="#" class="pst_head_left">
                                                                <img src="fb_users/<?php echo $user_pos_nrty['Gender']; ?>/<?php echo $user_pos_nrty['Email']; ?>/Profile/<?php echo $user_noted_ppic['image'];?>" width="70" style="margin-left:-15px;">
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-8 pst_head_txt">
                                                            <a href="#" class="text_wht"><?php echo $user_pos_nrty['Name'];?></a>
                                                            <br>
                                                            <span class="pst_head_pos text_wht"><?php echo $user_pos_nrty['designation'];?>-<?php echo $user_pos_nrty['company']?></span>
                                                            <br>
                                                            <span class="text_wht"><?php echo $user_pos_nrty['industry'];?></span>
                                                        </div>
                                                        <div class="col-lg-2">
                                                        <?php
				$candy_noted_exe=mysqli_query($conn,"select * from user_post_status where post_id='$user_noted_post[post_id]' AND user_id='$_SESSION[id]'");
				$can=mysqli_fetch_array($candy_noted_exe);
				$cany=mysqli_num_rows($candy_noted_exe);
				?>
				<?php 
				if($can['status']=='Like')
				{
					
					?>
                    <span><a href=""   onClick="unlike(<?php echo $user_noted_post['post_id'];?>,<?php echo $_SESSION['id'];?>);" id="<?php echo $user_noted_post['post_id'];?>" data-src="<?php echo $_SESSION['id'];?>">unlike</a></span>
                    <?php
				}else
				{
					//echo $resp['post_id'] ."<br>";
					//echo $_SESSION['id'];
				?>
                
                <span><a href=""  onClick="like(<?php echo $user_noted_post['post_id'];?>,<?php echo $_SESSION['id'];?>);" id="<?php echo $user_noted_post['post_id'];?>" data-src="<?php echo $_SESSION['id'];?>">like</a></span>
                <?php
				}
				?>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                                <div class="pst_body">
                                                 <?php 
					                        	if($user_noted_post['post_pic']!='')
					                        	{
							                    ?>
                                                    <span><img src="fb_users/<?php echo $user_pos_nrty['Gender'];?>/<?php echo $user_pos_nrty['Email']; ?>/Post/<?php echo $user_noted_post['post_pic'];?>" class="img-responsive" style=""></span>
                                                     <?php
												}
												?>
                                                    <br>
                                                      <p style="margin-top:10px;"><?php echo $user_noted_post['post_txt']?></p> 
                                                    <span style="font-size:10px;"> - <?php echo $user_noted_post['post_time'];?></span>
                                                   
                                                </div>
                                                <div class="pst_cmt">
                                                <?php
                $user_noted_post_comment_execu=mysqli_query($conn,"select * from user_post_comment where post_id='$user_noted_post[post_id]'");
				$user_noted_comment_count=mysqli_num_rows($user_noted_post_comment_execu);
				
				?>
                                                    <div class="pst_cmt_tog pst_cmt_pad">
                                                        <!--comment toggle-->
                                                        <i></i>
                                                        <a href="#"><span style="margin-left:10px;">View Comments</span></a>
                                                        <span class="pst_cmt_muted"><?php echo $user_noted_comment_count;?> writes</span>
                                                    </div>
                                                    <?php
                while($user_profile_post_comment=mysqli_fetch_array($user_noted_post_comment_execu))
				{
				$profile_post_comment_user_exec=mysqli_query($conn,"select * from users where user_id='$user_profile_post_comment[user_id]'");
				$profile_post_comment_user_de=mysqli_fetch_array($profile_post_comment_user_exec);
				$profile_post_comment_user_pic_exect=mysqli_query($conn,"select * from user_profile_pic where user_id='$user_profile_post_comment[user_id]'");
				$prof_post_comment_user_pp=mysqli_fetch_array($profile_post_comment_user_pic_exect);
				?>
                                                    <div class="row  pst_cmt_body">
                                                        <div class="col-lg-2" style="width:70px;">
                                                            <a href="#" class="pst_head_left">
                                                                <img src="fb_users/<?php echo $profile_post_comment_user_de['Gender'];?>/<?php echo $profile_post_comment_user_de['Email']; ?>/Profile/<?php echo $prof_post_comment_user_pp['image']; ?>"  width="70" style="margin-left:-15px;">
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-10" style="padding-top:5px;">
                                                            <a href="#" style="color:#000;"><?php echo $profile_post_comment_user_de['Name'];?></a>
                                                            <br>
                                                            <span class="pst_head_pos  pst_cmt_muted">- wrote on <?php echo $user_profile_post_comment['comment_time'];?></span>
                                                            <br>
                                                            <div style="margin-left:10px;"><?php echo $user_profile_post_comment['comment'];?></div>
                                                        </div>
                                                    </div>
                                                    <?php
				}
													?>
                                                    
                                                    <div class="row pst_cmt_row"> 
                                                        <div class="col-lg-10 pst_cmt_pad">
                                                        <form method="post" action="script_code.php">
                                                        <input type="hidden" name="cmt_ins_id" value="<?php echo $_SESSION['id'];?>">
              											<input type="hidden" name="cmt_post_id" value="<?php echo $user_noted_post['post_id'];?>">
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
                                            