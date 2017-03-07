


<?php
                                                $fee_mol_post_exe=mysqli_query($conn,"select * from user_post where post_id='$resp[post_id]'");
												$fee_mol_post=mysqli_fetch_array($fee_mol_post_exe);
												$fee_mo_user_exe=mysqli_query($conn,"select * from users where user_id='$fee_mol_post[user_id]'");
												$fee_mol_usr=mysqli_fetch_array($fee_mo_user_exe);
												$fee_mol_ppic_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$fee_mol_post[user_id]'");
												$fee_mol_ppic=mysqli_fetch_array($fee_mol_ppic_exe);
												?>

  <div class="pst_box" style="background-color:#eee;height:300px">
                                                    <div class="row">
                                                       
                                                      <div class="col col-lg-9" style="background-color:#fff; height:300px;padding:0px;">
                                                      <?php
                                                      $feed_md_liks=mysqli_query($conn,"select * from user_post_status where post_id='$fee_mol_post[post_id]' AND user_id='$_SESSION[id]'");
													  $fee_lik=mysqli_fetch_array($feed_md_liks);
													  ?>
                                                            <div>
                                                            <?php
                                                                if($fee_lik['status']=='Like')
                                                                {

                                                                    ?>
                                                                    <a href="#"   onClick="return unlike(<?php echo $fee_mol_post['post_id'];?>,<?php echo $_SESSION['id'];?>);" >
                                                                <img src="images/others/unnote_1.png" height="90" style="position:absolute;left:365px;top:0px;" /></a>
                                                                 <?php
                                                                }else
                                                                {
                                                                   
                                                                    ?>
                                                                <a href="#"  onClick="return like(<?php echo $fee_mol_post['post_id'];?>,<?php echo $_SESSION['id'];?>);" ><img src="images/others/note.png" height="90" style="position:absolute;left:365px;top:0px;"  /></a>
                                                                <?php
                                                        }
                                                        ?>
                                                            </div>
                                                           
                                                            <div class="pst_body" style="height:px;overflow-y:scroll; padding-right:10px; height:240px">
                                                            <?php
                                                        if($fee_mol_post['post_pic']!='')
                                                        {
                                                            ?>
                                                           
                                                              <img src="fb_users/<?php echo $fee_mol_usr['Gender']?>/<?php echo $fee_mol_usr['Email'];?>/Post/<?php echo $fee_mol_post['post_pic'];?>" class="img-responsive " width="400" />
                                                             
                                                              <?php
                                                        }
                                                        ?>
                                                                <p style="margin-top:10px;margin-right:30px;text-align:"><?php echo $fee_mol_post['post_txt'];?></p> 
                                                            </div>
                                                           
                                                         
                                                            
                                                        </div>
                                                         <div class="col col-lg-3" style="background-color:#eee;  border-right:1px dashed #ddd;height:300px; padding:5px;">
                                                         <div class="col-lg-12" style="padding:0px;;bottom:0px;">
                                                         <!--position:absolute-->
                                                            <form method="post" action="" id="form_<?php echo $from_count;?>">
                                                                    <input type="hidden" name="cmt_ins_id" id="cmt_ins_id_<?php echo $from_count;?>" value="<?php echo $_SESSION['id'];?>">
                                                                    <input type="hidden" name="cmt_post_id" id="cmt_post_id_<?php echo $from_count;?>" value="<?php echo $fee_mol_post['post_id'];?>">
                                                                    <?php
                                                                    $date=date('Y-m-d h:i');

                                                                    ?>
                                                                    <input type="hidden" name="cmt_ins_date" id="cmt_ins_date_<?php echo $from_count;?>" value="<?php echo $date;?>">
                                                                <input type="text" class="form-control" name="cmt_txt" id="cmt_txt_<?php echo $from_count;?>" style="width:100%; padding-left:10px;padding-right:10px; border-radius:0px;" placeholder="Ink...">
                                                                <input type="submit" name="cmt_ins" onClick="return comment_insertion(<?php echo $from_count;?>);" style="display:none;">
                                                                        </form>
                                                            </div>
                                                           
                                                           
                                                            <div style="position:absolute;bottom:0px;right:0px;padding:0px;padding-bottom:10px;" lign="center" class=" col-lg-12">
                                                            <?php
                                                                $feed_modl_licoun_exe=mysqli_query($conn,"select * from user_post_status where post_id='$resp[post_id]'");
                                                                
                                                                $feed_lk_coun=mysqli_num_rows($feed_modl_licoun_exe);
																$ret_coments_feedmd=mysqli_query($conn,"select * from user_post_comment where post_id='$resp[post_id]'");
														         $new_poe_cmcou_feedmd=mysqli_num_rows($ret_coments);

                                                      
                                                                ?>
                                                                <div class="col col-lg-6" style="padding:0px;" align="center">
                                                                    <i class="fa fa-pencil-square-o"> <a href="#" style="font-size:13px">+<?php echo $new_poe_cmcou_feedmd;?></a></i> 
                                                                </div>
                                                                <div class="col col-lg-6" style="padding:0px;" align="center">
                                                                    <i class="fa fa-tag" style=""> <a href="#" style="font-size:13px">+<?php echo $feed_lk_coun['likes'];?></a></i>
                                                                </div>
                                                                <br />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>































  <div class="col-lg-12">
                                                <div class="col-lg-9">
                                                <?php
                                                $fee_mol_post_exe=mysqli_query($conn,"select * from user_post where post_id='$resp[post_id]'");
												$fee_mol_post=mysqli_fetch_array($fee_mol_post_exe);
												$fee_mo_user_exe=mysqli_query($conn,"select * from users where user_id='$fee_mol_post[user_id]'");
												$fee_mol_usr=mysqli_fetch_array($fee_mo_user_exe);
												$fee_mol_ppic_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$fee_mol_post[user_id]'");
												$fee_mol_ppic=mysqli_fetch_array($fee_mol_ppic_exe);
												?>

                                                    <div class="pst_box" style="background-color:#eee;height:370px">
                                                    <div class="row">
                                                        <div class="col col-lg-3" style="background-color:#eee;  border-right:1px dashed #ddd;height:300px; padding:5px;">
                                                            <div align="center" style="margin-top:5px;">
                                                           <a href="profile.php?id=<?php echo $resp['user_id'] ?>" ><!--class="pst_head_left"-->
                                                            <?php
                                                                if($fee_mol_ppic['image']!='')
																{
																?>
                                                                <img src="fb_users/<?php echo $fee_mol_usr['Gender']?>/<?php echo $fee_mol_usr['Email'];?>/Profile/<?php echo $fee_mol_ppic['image'];?>" width="80" class="triangle-down" />
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
                                                                    <a href="profile.php?id=<?php echo $resp['user_id'] ?>"><span style="color:#000; font-family:lato-bold;font-size:12px;"><?php echo $fee_mol_usr['Name'];?></span></a>
                                                                    <br />
                                                                </div>
                                                                <div style="line-height:15px;border-bottom:1px dashed #000;padding-bottom:5px;">
                                                                    <span style="color:#000; font-family:lato-light;font-size:11px;line-height:.1px;">
        <?php echo $fee_mol_usr['designation'];?></span>
                                                                    <br />
                                                                </div>
                                                                <div style="line-height:15px;border-bottom:1px dashed #000;padding-bottom:5px;">
                                                                    <span style="color:#000; font-family:lato-light;font-size:11px;line-height:.1px;"><?php echo $fee_mol_usr['company'];?></span>
                                                                    <br />
                                                                </div>
                                                                <div style="line-height:15px;border-bottom:1px dashed #000;padding-bottom:5px;">
                                                                    <span style="color:#000; font-family:lato-regular;font-size:11px;line-height:.1px;"><?php echo $fee_mol_usr['industry'];?> </span>
                                                                </div>
                                                            </div>
                                                            <div style="position:absolute;bottom:0px;right:0px;padding:0px;padding-bottom:10px;" lign="center" class=" col-lg-12">
                                                            <?php
                                                                $pse=mysqli_query($conn,"select * from user_post_status where post_id='$resp[post_id]' AND user_id='$_SESSION[id]'");
                                                                $ps=mysqli_fetch_array($pse);
                                                                $psc=mysqli_num_rows($pse);
																$ret_coments=mysqli_query($conn,"select * from user_post_comment where post_id='$resp[post_id]'");
														         $new_poe_cmcou=mysqli_num_rows($ret_coments);
                                                      
                                                                ?>
                                                                <div class="col col-lg-6" style="padding:0px;" align="center">
                                                                    <i class="fa fa-pencil-square-o"> <a href="#" style="font-size:13px">+<?php echo $new_poe_cmcou;?></a></i> 
                                                                </div>
                                                                <div class="col col-lg-6" style="padding:0px;" align="center">
                                                                    <i class="fa fa-tag" style=""> <a href="#" style="font-size:13px">+<?php echo $resp['likes'];?></a></i>
                                                                </div>
                                                                <br />
                                                            </div>
                                                        </div>
                                                        <div class="col col-lg-9" style="background-color:#fff; height:370px;padding:0px;">
                                                            <div>
                                                            <?php
                                                                if($ps['status']=='Like')
                                                                {
                                                                    ?>
                                                                    <a href="#"   onClick="return unlike(<?php echo $resp['post_id'];?>,<?php echo $_SESSION['id'];?>);" >
                                                                <img src="images/others/unnote_1.png" height="90" style="position:absolute;left:400px;top:0px;" /></a>
                                                                 <?php
                                                                }else
                                                                {
                                                                   
                                                                    ?>
                                                                <a href="#"  onClick="return like(<?php echo $resp['post_id'];?>,<?php echo $_SESSION['id'];?>);" ><img src="images/others/note.png" height="90" style="position:absolute;left:400px;top:0px;"  /></a>
                                                                <?php
                                                        }
                                                        ?>
                                                            </div>
                                                            
                                                            <div class="pst_body" style="height:px;overflow-y:scrol; padding-right:10px; height:500px">
                                                            <?php
                                                        if($resp['post_pic']!='')
                                                        {
                                                            ?>
                                                              <img src="fb_users/<?php echo $fee_mol_usr['Gender']?>/<?php echo $fee_mol_usr['Email'];?>/Post/<?php echo $fee_mol_post['post_pic'];?>" class="img-responsive" width="400" />
                                                              <?php
                                                        }
                                                        ?>
                                                                <p style="margin-top:10px;margin-right:30px;text-align:"><?php echo $fee_mol_post['post_txt'];?></p> 
                                                            </div>
                                                           
                                                            <div class="col-lg-12" style=" border-top:1px dashed #eee; position:absolute;bottom:35px;" align="right">
                                                                <span style="font-size:10px; margin-left:5px;"> - on <?php echo $fee_mol_post['post_time'];?></span>
                                                            </div>
                                                            
                                                           
                                                            
                                                            
                                                            
                                                            <div class="col-lg-12" style="padding:0px;position:absolute;bottom:0px;">
                                                            <form method="post" action="" id="form_<?php echo $from_count;?>">
                                                                    <input type="hidden" name="cmt_ins_id" id="cmt_ins_id_<?php echo $from_count;?>" value="<?php echo $_SESSION['id'];?>">
                                                                    <input type="hidden" name="cmt_post_id" id="cmt_post_id_<?php echo $from_count;?>" value="<?php echo $fee_mol_post['post_id'];?>">
                                                                    <?php
                                                                    $date=date('Y-m-d h:i');
                                                                    ?>
                                                                    <input type="hidden" name="cmt_ins_date" id="cmt_ins_date_<?php echo $from_count;?>" value="<?php echo $date;?>">
                                                                <input type="text" class="form-control" name="cmt_txt" id="cmt_txt_<?php echo $from_count;?>" style="width:100%; padding-left:10px;padding-right:10px; border-radius:0px;" placeholder="Ink...">
                                                                <input type="submit" name="cmt_ins" onClick="return comment_insertion(<?php echo $from_count;?>);" style="display:none;">
                                                                        </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                  
                                                </div>
                                                <div class="col-lg-3">
                                                
                                                 <?php
												 $ret_cmt_exe=mysqli_query($conn,"select * from user_post_comment where post_id='$resp[post_id]'");
                                                        while($ret_cmt=mysqli_fetch_array($ret_cmt_exe))
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

                                                </div>
                                               </div>



//-----------------------------------------------------------------------------------------------------------




 <div class="col-lg-12" >
                                                <div class="col-lg-8">
                                                <?php
                                                $fee_mol_post_exe=mysqli_query($conn,"select * from user_post where post_id='$resp[post_id]'");
												$fee_mol_post=mysqli_fetch_array($fee_mol_post_exe);
												$fee_mo_user_exe=mysqli_query($conn,"select * from users where user_id='$fee_mol_post[user_id]'");
												$fee_mol_usr=mysqli_fetch_array($fee_mo_user_exe);
												$fee_mol_ppic_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$fee_mol_post[user_id]'");
												$fee_mol_ppic=mysqli_fetch_array($fee_mol_ppic_exe);
												?>

                                                    <div class="pst_box" style="background-color:#eee;height:370px">
                                                    <div class="row">
                                                       
                                                        <div class="col col-lg-12" style="background-color:#fff; height:370px;padding:0px;">
                                                           <?php /*?> <div>
                                                            <?php
                                                                if($ps['status']=='Like')
                                                                {
                                                                    ?>
                                                                    <a href="#" data-remodal-action="confirm"  onClick="return unlike(<?php echo $resp['post_id'];?>,<?php echo $_SESSION['id'];?>);" >
                                                                <img src="images/others/unnote_1.png" height="90" style="position:absolute;left:400px;top:0px;" /></a>
                                                                 <?php
                                                                }else
                                                                {
                                                                   
                                                                    ?>
                                                                <a href="#" data-remodal-action="confirm"  onClick="return like(<?php echo $resp['post_id'];?>,<?php echo $_SESSION['id'];?>);" ><img src="images/others/note.png" height="90" style="position:absolute;left:400px;top:0px;"  /></a>
                                                                <?php
                                                        }
                                                        ?>
                                                            </div><?php */?>
                                                            
                                                            <div class="pst_body" style="height:350px;overflow-y:scroll; padding-right:10px; height:500px">
                                                            <?php
                                                        if($resp['post_pic']!='')
                                                        {
                                                            ?>
                                                              <img src="fb_users/<?php echo $fee_mol_usr['Gender']?>/<?php echo $fee_mol_usr['Email'];?>/Post/<?php echo $fee_mol_post['post_pic'];?>" class="img-responsive" width="400" />
                                                              <?php
                                                        }
                                                        ?>
                                                                <p style="margin-top:10px;margin-right:30px;text-align:"><?php echo $fee_mol_post['post_txt'];?></p> 
                                                            </div>
                                                           
                                                          
                                                            
                                                           
                                                            
                                                            
                                                            
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                  
                                                </div>
                                                <div class="col-lg-4" style="overflow-y:scroll;height:350px;">
                                                <?php
                                                 $ret_cmt_exe=mysqli_query($conn,"select * from user_post_comment where post_id='$resp[post_id]'");
												 $ret_cmt_count=mysqli_num_rows($ret_cmt_exe);
												?>
                                                  <div class="col-lg-12" style=" border-top:1px dashed #eee; position:absolute;bottom:35px;" align="right">
                                                  <span style="font-size:10px; margin-left:5px;"> - on <?php echo $ret_cmt_count;?></span>
                                                            </div>
                                                 <div class="col-lg-12" style="padding:0px;position:absolute;bottom:0px;">
                                                            <form method="post" action="" id="form_<?php echo $from_count;?>">
                                                                    <input type="hidden" name="cmt_ins_id" id="cmt_ins_id_<?php echo $from_count;?>" value="<?php echo $_SESSION['id'];?>">
                                                                    <input type="hidden" name="cmt_post_id" id="cmt_post_id_<?php echo $from_count;?>" value="<?php echo $fee_mol_post['post_id'];?>">
                                                                    <?php
                                                                    $date=date('Y-m-d h:i');
                                                                    ?>
                                                                    <input type="hidden" name="cmt_ins_date" id="cmt_ins_date_<?php echo $from_count;?>" value="<?php echo $date;?>">
                                                                <input type="text" class="form-control" name="cmt_txt" id="cmt_txt_<?php echo $from_count;?>" style="width:100%; padding-left:10px;padding-right:10px; border-radius:0px;" placeholder="Ink...">
                                                                <input type="submit" name="cmt_ins" onClick="return comment_insertion(<?php echo $from_count;?>);" style="display:none;">
                                                                        </form>
                                                            </div>
                                                 <?php
												 
												 $ret_cmt_exe=mysqli_query($conn,"select * from user_post_comment where post_id='$resp[post_id]'");
                                                        while($ret_cmt=mysqli_fetch_array($ret_cmt_exe))
                                                        {
                                                            $us_co_de=mysqli_query($conn,"select * from users where user_id='$ret_cmt[user_id]'");
                                                            $use_cm=mysqli_fetch_array($us_co_de);
                                                            $us_cmt_pic_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$use_cm[user_id]'");
                                                            $us_cmt_pic=mysqli_fetch_array($us_cmt_pic_exe);
                                                            ?>
                                                            <div class="row  pst_cmt_body" style="overflow-y:scroll;">
                                                                <div class="col-lg-2" style="width:70px;" style="overflow-y:scroll;">
                                                                    <a data-remodal-action="confirm" href="profile.php?id=<?php echo $use_cm['user_id'] ?>" class="pst_head_left">
                                                                    <?php
                                                                    if($us_cmt_pic['image']!='')
																	{
																	?>
                                                                        <img src="fb_users/<?php echo $use_cm['Gender']?>/<?php echo $use_cm['Email']?>/Profile/<?php echo $us_cmt_pic['image'];?>"  width="20" height="20" style="margin-left:-15px;">
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
                                                                    <a data-remodal-action="confirm" href="profile.php?id=<?php echo $use_cm['user_id'] ?>" style="color:#000;"><?php echo $use_cm['Name']; ?></a>
                                                                    <br>
                                                                    <span class="pst_head_pos  pst_cmt_muted">- Inked On <?php echo $ret_cmt['comment_time'];?></span>
                                                                    <br>
                                                                    <div style="margin-left:10px;"><?php echo $ret_cmt['comment'];?></div>
                                                                </div>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>

                                                </div>
                                               </div>
                                               
<script >
function club_tab8()
{
	document.getElementById('club_tab11').style.display='block';
	document.getElementById('club_tab12').style.display='none';
	document.getElementById('clubingb_tab21').style.display='none';
	document.getElementById('clubingb_tab22').style.display='block';
	document.getElementById('clubtagme_tab31').style.display='none';
	document.getElementById('clubtagme_tab32').style.display='block';
	document.getElementById('clubtag_tab41').style.display='none';
	document.getElementById('clubtag_tab42').style.display='block';
	document.getElementById('clubsettings_tab51').style.display='none';
	document.getElementById('clubsettings_tab52').style.display='block';
}
function clubbind_tab9()
{
	document.getElementById('club_tab11').style.display='none';
	document.getElementById('club_tab12').style.display='block';
	document.getElementById('clubingb_tab21').style.display='block';
	document.getElementById('clubingb_tab22').style.display='none';
	document.getElementById('clubtagme_tab31').style.display='none';
	document.getElementById('clubtagme_tab32').style.display='block';
	document.getElementById('clubtag_tab41').style.display='none';
	document.getElementById('clubtag_tab42').style.display='block';
	document.getElementById('clubsettings_tab51').style.display='none';
	document.getElementById('clubsettings_tab52').style.display='block';
}
function tagme_tab10()
{
	document.getElementById('club_tab11').style.display='none';
	document.getElementById('club_tab12').style.display='block';
	document.getElementById('clubingb_tab21').style.display='none';
	document.getElementById('clubingb_tab22').style.display='block';
	document.getElementById('clubtagme_tab31').style.display='block';
	document.getElementById('clubtagme_tab32').style.display='none';
	document.getElementById('clubtag_tab41').style.display='none';
	document.getElementById('clubtag_tab42').style.display='block';
	document.getElementById('clubsettings_tab51').style.display='none';
	document.getElementById('clubsettings_tab52').style.display='block';
}
function tag_tab11()
{
	document.getElementById('club_tab11').style.display='none';
	document.getElementById('club_tab12').style.display='block';
	document.getElementById('clubingb_tab21').style.display='none';
	document.getElementById('clubingb_tab22').style.display='block';
	document.getElementById('clubtagme_tab31').style.display='none';
	document.getElementById('clubtagme_tab32').style.display='block';
	document.getElementById('clubtag_tab41').style.display='block';
	document.getElementById('clubtag_tab42').style.display='none';
	document.getElementById('clubsettings_tab51').style.display='none';
	document.getElementById('clubsettings_tab52').style.display='block';
}
function settigs_tab12()
{
	document.getElementById('club_tab11').style.display='none';
	document.getElementById('club_tab12').style.display='block';
	document.getElementById('clubingb_tab21').style.display='none';
	document.getElementById('clubingb_tab22').style.display='block';
	document.getElementById('clubtagme_tab31').style.display='none';
	document.getElementById('clubtagme_tab32').style.display='block';
	document.getElementById('clubtag_tab41').style.display='none';
	document.getElementById('clubtag_tab42').style.display='block';
	document.getElementById('clubsettings_tab51').style.display='block';
	document.getElementById('clubsettings_tab52').style.display='none';
}
</script>                                               