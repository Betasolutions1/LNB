<h4 class="club_headers">
       Tags</h4>
                                            <br>
                                            <div class="row" style="width:400px">
                                                <h4 class="club_headers">
        Add Tags</h4>
                                                <form role="form" method="post" action="script_code.php">
                                                    <div class="form-group"> 
                                                        <select id="formInput139" name="club_memb" id="club_memb" class="form-control"> 
                                                            <option>Select Club Member</option>                                                             <?php
                                                            $sel_tg_mem_exe=mysqli_query($conn,"select * from club_signup where club_id='$_SESSION[club_id]' AND user_id!='$_SESSION[id]'");
															$model_count=0;
															while($sel_frg=mysqli_fetch_array($sel_tg_mem_exe))
															{
																++$model_count;
																$frdeta=mysqli_query($conn,"select * from users where user_id='$sel_frg[user_id]'");
																$get_tg_der=mysqli_fetch_array($frdeta);
															?>
                                                            <option value="<?php echo $sel_frg['user_id'];?>"><?php echo $get_tg_der['Name'];?></option>                                                             
                                                           <?php
															}
														   ?>                                                             
                                                        </select>
                                                    </div>                                                     
                                                    <div class="form-group"> 
                                                        <input type="text" class="form-control" name="tag_title" id="tag_title" placeholder="Tag Title"> 
                                                    </div>                                                     
                                                    <div class="form-group"> 
                                                        <input type="text" class="form-control" name="vendor_name" id="vendor_name" placeholder="Vendor Name"> 
                                                    </div>                                                     
                                                    <div class="form-group"> 
                                                        <input type="text" class="form-control" name="vendor_phone" id="vendor_phone" placeholder="Vendor phone no"> 
                                                    </div>                                                     
                                                    <div class="form-group"> 
                                                        <input type="email" class="form-control" name="vendor_email" id="vendor_email" placeholder="Vendor email"> 
                                                    </div>
                                                                                                           
                                                    <button type="submit" onClick="add_refrals();" name="add_refrals" class="btn btn_grn">Submit</button>                                                     
                                                    <button type="button" class="btn btn_grn">Clear</button>                                                     
                                                </form>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="club_suggest_top_div row" style="padding-top:10px;padding-bottom:10px;">
                                                    <!--<div class="col-lg-2" style="padding-left:0px;padding-right:0px; width:80px; ">
        <div class="col-lg-4" align="left" style="padding-left:3px;padding-right:0px; width:80px;">
            <img src="images/profile/6.jpg" width="80">
        </div>
    </div>
    <div class="col-lg-10 club_msg_shape" style=" height:80px; padding-right:0px;width:86%; padding-top:7px;" align="left">
        <span style="font-size:16px;">Rajesh </span>
        <br>
        <span style="font-size:16px;"> Beta Solutions </span> 
        <br>
        <span style="font-size:16px;"> IT - Software  </span>
    </div>-->
                                                    <span>Tagged to you</span>
                                                </div>
                                                <div class="club_sugg_scroll">
                                                <?php
                                                $find_refer=mysqli_query($conn,"select * from tbl_reference where to_whom_user_id='$_SESSION[id]'  order by date desc");
												while($gred=mysqli_fetch_array($find_refer))
												{
														$kill_user=mysqli_query($conn,"select * from users where user_id='who_user_id'");
														$kill=mysqli_fetch_array($kill_user);
												?>
                                                
                                                    <div class="td_div club_sug_row_bg" style="  height:50px;">
                                                        <div class="col-lg-10" style="text-align:left; padding-left:0px;padding-right:0px;">
                                                            <div class="col-lg-2" style="padding:0px; width:50px;" ata-pg-id="8953">
                                                              <a href="#modal_<?php echo $model_count;?>">  <img src="fb_users/<?php echo $usr_dis['Gender'];?>/<?php echo $usr_dis['Email'];?>/Profile/<?php echo $fet_ppic['image'];?>" width="50"></a>
                                                            </div>                                                             
                                                            <div class="col-lg-10" style="padding-left:10px; padding-right:0px;">
                                                                <span><?php echo $gred['for_what'];?> </span>
                                                            </div>
                                                        </div>
                                                        
                                                        <div align="left" class="col-lg-2" style="float:left;" >
                                                            <span style="text-align:left;float:left; color:#d3d3d3;font-size:12px; "><?php echo $gred['date'];?></span>
                                                        </div>
                                                    </div>
                                                    
  <!--Model Begin-->
  <div class="remodal" data-remodal-id="modal_<?php echo $model_count;?>" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
  <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
  
  <div>
  
  <h2><span><?php echo $kill['Name'];?></span></h2>
    <h4 id="modal1Title"><?php echo $gred['for_what'];?></h4>
    
   <p> <label>Vendor Name :</label><label><?php echo $gred['vendor_name'];?></label><br></p>
    <p> <label>Vendor Phone No :</label><label><?php echo $gred['vendor_phone'];?></label><br></p>
    <p> <label>Vendor Email :</label><label><?php echo $gred['vendor_email'];?></label><br></p>
    
   
  </div>
  <br>
  
  <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
  <?php
  if($gred['status']!=0)
  {
  ?>
  <a href="" onClick="reje_tags(<?php echo $gred['refrence_id']?>,<?php echo $gred['who_user_id'];?>);" data-remodal-action="confirm" class="remodal-confirm">Confirm</a>
  <?php
  }else
  {
  ?>
   <a href="" onClick="acc_tags(<?php echo $gred['refrence_id']?>,<?php echo $gred['who_user_id'];?>);" data-remodal-action="confirm" class="remodal-confirm">Accept</a>
  <?php
  }
  ?>
</div>
                                                    <!--End Model-->                                                      
                                                    
                                                    
                                                  
                                                    
                                                    
                                                    <?php
												}
													?>
                                                  <?php /*?>  <div class="td_div club_sug_row_bg" style="  height:50px;">
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
                                                    </div><?php */?>
                                                   
                                                 
                                                  
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="row">
                                                <div class="club_suggest_top_div row" style="padding-top:10px;padding-bottom:10px;">
                                                    <!--<div class="col-lg-2" style="padding-left:0px;padding-right:0px; width:80px; ">
        <div class="col-lg-4" align="left" style="padding-left:3px;padding-right:0px; width:80px;">
            <img src="images/profile/6.jpg" width="80">
        </div>
    </div>
    <div class="col-lg-10 club_msg_shape" style=" height:80px; padding-right:0px;width:86%; padding-top:7px;" align="left">
        <span style="font-size:16px;">Rajesh </span>
        <br>
        <span style="font-size:16px;"> Beta Solutions </span> 
        <br>
        <span style="font-size:16px;"> IT - Software  </span>
    </div>-->
                                                    <span>Tagged others</span>
                                                </div>
                                                <div class="club_sugg_scroll">
                                                <?php
                                                $add_fre=mysqli_query($conn,"select * from tbl_reference where who_user_id='$_SESSION[id]'");
												while($jill=mysqli_fetch_array($add_fre))
												{
													++$model_count;
													$ji_user_de=mysqli_query($conn,"select * from users where user_id='$jill[to_whom_user_id]'");
													$jil_data=mysqli_fetch_array($ji_user_de);
													$jill_pic_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$jil_data[user_id]'");
													$jil_pic=mysqli_fetch_array($jill_pic_exe);
													
												?>
                                                
                                                    <div class="td_div club_sug_row_bg" style="  height:50px;">
                                                        <div class="col-lg-10" style="text-align:left; padding-left:0px;padding-right:0px;">
                                                            <div class="col-lg-2" style="padding:0px; width:50px;" ata-pg-id="8953">
                                                              <a href="#modal_<?php echo $model_count;?>">  <img src="fb_users/<?php echo $jil_data['Gender']?>/<?php echo $jil_data['Email'];?>/Profile/<?php echo $jil_pic['image'];?>" width="50"></a>
                                                            </div>                                                             
                                                            <div class="col-lg-10" style="padding-left:10px; padding-right:0px;">
                                                                <span><?php echo $jill['for_what'];?> </span>
                                                            </div>
                                                        </div>
                                                        <div align="right" class="col-lg-2" style="text-align:right;">
                                                            <span style="text-align:right; color:#d3d3d3;font-size:12px; "><?php echo $jill['date'];?></span>
                                                        </div>
                                                    </div>
                                                    
                                                    <!--Model Begin-->
  <div class="remodal" data-remodal-id="modal_<?php echo $model_count;?>" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
  <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
  
  <div>
  <h2><span><?php echo $jil_data['Name'];?></span></h2>
    <h4 id="modal1Title"><?php echo $jill['for_what'];?></h4>
    
   <p> <label>Vendor Name :</label><label><?php echo $jill['vendor_name'];?></label><br></p>
    <p> <label>Vendor Phone No :</label><label><?php echo $jill['vendor_phone'];?></label><br></p>
    <p> <label>Vendor Email :</label><label><?php echo $jill['vendor_email'];?></label><br></p>
    
   
  </div>
  <br>
  
  <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
  <?php
  if($jill['status']!=0)
  {
  ?>
  <a data-remodal-action="confirm" class="remodal-confirm">Accepted</a>
  <?php
  }else
  {
  ?>
   <a data-remodal-action="confirm" class="remodal-confirm">Not Accepted</a>
  <?php
  }
  ?>
</div>
                                                    <!--End Model-->   
                                                    
                                                    <?php
												}
													?>
                                                   <?php /*?> <div class="td_div club_sug_row_bg" style="  height:50px;">
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
                                                    </div><?php */?>
                                                
                                                 
                                                 
                                                  
                                                </div>
                                            </div>
                                            
                                            
                                            
                                            
                                            
                                         
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            