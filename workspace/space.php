  <div class="row">
                                                <div class="col-lg-12" style="border-bottom:1px dashed #afdf7c;">
                                                    <div class="col-lg-10" tyle="padding:0px;">
                                                        <h4 class="club_headers" style="margin:0px;">
               COMPANY INFO </h4>
                                                        <br>
                                                        <p style="font-family:lato-light; color:#a9a9a9;">
                    Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem singulis est id. Enim sale adoLorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem singulis est id. Enim sale ado</p>
                                                    </div>
                                                    <div class="col-lg-2" style="padding:0px;">
                                                        <img src="images/profile/logo.jpg" width="100" />
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="col-lg-12" style="border-bottom:1px dashed #afdf7c;">
                                                    <br>
                                                    <h4 class="club_headers" style="margin:0px;">
               COLLEAGUES </h4>
                                                    <br>
                                                    <div id="gallerycontainer">
                                                        <div id="gallery">
                                                        <?php 
														$collegus_exe=mysqli_query($conn,"select * from users where company='$usr_dis[company]'");
														while($colle=mysqli_fetch_array($collegus_exe))
														{
															$colle_ppic_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$colle[user_id]'");
															$colle_pic=mysqli_fetch_array($colle_ppic_exe);
														?>
                                                        
                                                            <div style="width:150px; height:180px;" align="center" id="c_hs">
                                                                <img src="fb_users/<?php echo $colle['Gender']?>/<?php echo $colle['Email']?>/Profile/<?php echo $colle_pic['image'];?>" width="120" style="border-radius:50%; padding-left:3px; padding-top:3px;" alt="" />
                                                                <h4 style=" color:#afdf7c">
              <?php echo $colle['Name'];?></h4>
                                                                <h5 style=" color:#afdf7c">
             <?php echo $colle['designation'];?></h5>
                                                            </div>
                                                            <?php
														}
															?>
                                                           <?php /*?> <div style="width:150px; height:180px;" align="center" id="c_hs">
                                                                <img src="images/profile/6.jpg" width="120" style="border-radius:50%; padding-left:3px; padding-top:3px;" alt="" />
                                                                <h4 style=" color:#afdf7c">
              Rajesh</h4>
                                                                <h5 style=" color:#afdf7c">
              CEO</h5>
                                                            </div><?php */?>
                                                          
                                                          
                                                        
                                                        </div>
                                                      <!--  <div style="width:150px; height:180px;" align="center" id="c_hs">
                                                            <img src="images/profile/6.jpg" width="120" style="border-radius:50%; padding-left:3px; padding-top:3px;" alt="" />
                                                            <h4 style=" color:#afdf7c">
              Rajesh</h4>
                                                            <h5 style=" color:#afdf7c">
              CEO</h5>
                                                        </div>-->
                                                       <?php /*?> <div style="width:150px; height:180px;" align="center" id="c_hs">
                                                            <img src="images/profile/6.jpg" width="120" style="border-radius:50%; padding-left:3px; padding-top:3px;" alt="" />
                                                            <h4 style=" color:#afdf7c">
              Rajesh</h4>
                                                            <h5 style=" color:#afdf7c">
              CEO</h5>
                                                        </div><?php */?>
                                                    </div>
                                                    <br>
                                                </div>
                                                <div class="col-lg-12">
                                                    <br>
                                                    <h4 class="club_headers">DISSCUSSIONS </h4>
                                                    <form method="post" action="">
                                                    <input type="hidden" name="dis_company" id="dis_company" value="<?php echo $usr_dis['company']?>">
                                                    <input type="text" placeholder="INK..." class="club_txt" name="disscussion_topic" id="disscussion_topic" style="margin-top:5px;margin-bottom:5px;">
                                                    <input type="submit" name="dis_sub" onClick="space_disscussion();" style="display:none;">
                                                    </form>
                                                    <br>
                                                    <div class="club_network" style="height:300px; background-color:#eee;">
                                                    <?php
                                                    $twity_exe=mysqli_query($conn,"select * from company_discussions where company='$usr_dis[company]'");
													while($twity=mysqli_fetch_array($twity_exe))
													{
													$twity_details_exe=mysqli_query($conn,"select * from users where user_id='$twity[user_id]'");
														$twity_det=mysqli_fetch_array($twity_details_exe);
														$twity_pic_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$twity[user_id]'");
														$twity_pic=mysqli_fetch_array($twity_pic_exe);
													?>
                                                    
                                                        <div class="row club_network_row" style="width:100%;">
                                                            <div class="col-lg-2" style="padding-left:0px;padding-right:0px; width:70px; ">
                                                                <div class="col-lg-4" align="left" style="padding-left:3px;padding-right:0px; width:70px;">
                                                                    <img src="fb_users/<?php echo $twity_det['Gender']?>/<?php echo $twity_det['Email'];?>/Profile/<?php echo $twity_pic['image'];?>" width="70">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-10 club_msg_shape" style=" height:70px; background-color:#eee; padding-right:0px;width:86%;" align="left">
                                                                <span style="text-align:right; color:#d3d3d3;font-size:10px;">
    <?php echo $twity_det['Name']?> - <?php echo $twity_det['company']?> - <?php echo $twity_det['designation'];?>  </span><span class="pull-right" style="text-align:right; color:#d3d3d3;font-size:10px;"> <?php echo $twity['date'];?> </span>
                                                                <p> 
       <?php echo $twity['discussion_txt'];?></p>
                                                            </div>
                                                        </div>
                                                        <?php
													}
														?>
                                                      <?php /*?>  <div class="row club_network_row" style="width:100%;">
                                                            <div class="col-lg-2" style="padding-left:0px;padding-right:0px; width:70px; ">
                                                                <div class="col-lg-4" align="left" style="padding-left:3px;padding-right:0px; width:70px;">
                                                                    <img src="images/profile/6.jpg" width="70">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-10 club_msg_shape" style=" height:70px; background-color:#eee; padding-right:0px;width:86%;" align="left">
                                                                <span style="text-align:right; color:#d3d3d3;font-size:10px;">
    Rajesh - Beta Solutions - IT - Software  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 30-jan-2017 12:22am </span>
                                                                <p> 
        Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, </p>
                                                            </div>
                                                        </div><?php */?>
                                                     
                                                     
                                                      
                                                      
                                                      
                                                    </div>
                                                </div>
                                            </div>