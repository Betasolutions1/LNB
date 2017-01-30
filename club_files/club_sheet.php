 											<div>
                                                <div>
                                                 
                                                    <h4 class="club_headers">
        CLUB ID # 1234</h4>
                                                    <div class="col-lg-12 club_txtbox" style="padding-left:0px; padding-right:10px;paddin-top:0px;margin-top:0px;">
                 									<?php
                                                    $sug_date=date('Y-m-d h:i');
													?>   
                                                    <form method="post" action="">                                   
                                                   <input type="text" placeholder="Suggest Me To" class="club_txt" id="suggest_me_to">
                                                   <input type="hidden" name="sug_usrt_id" id="sug_usrt_id" value="<?php echo $_SESSION['id'];?>"/>
                                                   <input type="hidden" name="sug_date" id="sug_date" value="<?php echo $sug_date;?>">
        	                                       <input type="submit" name="sug_sub" style="display:none;" onClick="ins_suggest();" />
                                                   </form>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row" style="margin-top:30px;">
                                                    <br>
                                                    <h3 class="club_headers">
        Ankitha Info</h3>
                                                    <div class="col-lg-12 club_txtbox" style="padding-left:0px; padding-right:10px; background-color:#eee;">
                                                        <!--<textarea class="form-control txt" rows="1" style="height:35px;"></textarea>-->
                                                        <p class="club_info"><?php echo $usr_dis['description'];?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="margin:10px;"> 
                                            <?php
											 $get_club_menem=mysqli_query($conn,"select * from club_signup where club_id='$_SESSION[club_id]'");
											 while($club_members=mysqli_fetch_array($get_club_menem))
											 {
												 $get_club_name_exe=mysqli_query($conn,"select * from tbl_club where CLUB_ID='$_SESSION[club_id]'");
												 $clb_name=mysqli_fetch_array($get_club_name_exe);
												 
												 $get_user_sugg_exe=mysqli_query($conn,"select * from tbl_suggest_topic where user_id='$club_members[user_id]'");
												 $get_ur_sugg=mysqli_fetch_array($get_user_sugg_exe);
												 
												 $get_club_user_deta_exe=mysqli_query($conn,"select * from users where user_id='$club_members[user_id]'");
												 $fet_mem_de=mysqli_fetch_array($get_club_user_deta_exe);
												 $get_pic_clb=mysqli_query($conn,"select * from user_profile_pic where user_id='$fet_mem_de[user_id]'");
												 $gclb_uspi=mysqli_fetch_array($get_pic_clb);
											?>
                                            
                                                <div class="col-lg-4 grow" align="center">
                                                    <h4>
        <?php echo $fet_mem_de['industry'];?></h4>
                                                    <img src="fb_users/<?php echo $fet_mem_de['Gender']?>/<?php echo $fet_mem_de['Email']?>/Profile/<?php echo $gclb_uspi['image']?>" width="70" style="margin-top:5px;">
                                                    <br>
                                                    <span><?php echo $fet_mem_de['Name'];?></span>
                                                    <br>
                                                    <span><?php echo $fet_mem_de['designation']?>-<?php echo $fet_mem_de['company'];?></span>
                                                    <br>
                                                    <span><?php echo $fet_mem_de['industry'];?></span>
                                                    <h4><?php echo $get_ur_sugg['suggest_topic'];?></h4>
                                                    <form method="post" action="">
                                                    <input type="hidden" name="whos_sugg" id="whos_sugg" value="<?php echo $fet_mem_de['user_id'];?>">
                                                    <input type="hidden" name="whom_acc" id="whom_acc" value="<?php echo $_SESSION['id'];?>">
                                                    <input type="hidden" name="sugg_id" id="sugg_id" value="<?php echo $get_ur_sugg['suggest_topic_id'];?>">
                                                    <span><input type="submit" class="btn btn_grn" onClick="connect_suggest();" value="Connect"></span>
                                                    
                                                    </form>
                                                    
                                                    <p><?php echo $fet_mem_de['description'];?></p>
                                                </div>
                                                <?php
											 }
												?>
                                               <!-- <div class="col-lg-4 grow" align="center">
                                                    <h4>
        IT-SOFTWARE</h4>
                                                    <img src="images/profile/6.jpg" width="70" style="margin-top:5px;">
                                                    <br>
                                                    <span>Rajesh</span>
                                                    <br>
                                                    <span>CEO-Beta Solutions</span>
                                                    <br>
                                                    <span>IT-Softwarre</span>
                                                    <h4>gayatri hospital</h4>
                                                    <span><input type="submit" class="btn btn_grn" value="Connect"></span>
                                                    <p>
            Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem singulis est id. Enim sale adolescens vim te. Ea ignota gloriatur eos, no minim zril quo. Mei graece recteque id. Cu per facer</p>
                                                </div>-->
                                                <!--<div class="col-lg-4 grow" align="center">
                                                    <h4>
        IT-SOFTWARE</h4>
                                                    <img src="images/profile/6.jpg" width="70" style="margin-top:5px;">
                                                    <br>
                                                    <span>Rajesh</span>
                                                    <br>
                                                    <span>CEO-Beta Solutions</span>
                                                    <br>
                                                    <span>IT-Softwarre</span>
                                                    <h4>gayatri hospital</h4>
                                                    <span><input type="submit" class="btn btn_grn" value="Connect"></span>
                                                    <p>
            Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem singulis est id. Enim sale adolescens vim te. Ea ignota gloriatur eos, no minim zril quo. Mei graece recteque id. Cu per facer</p>
                                                </div>-->
                                                <!--<div class="col-lg-4 grow" align="center">
                                                    <h4>
        IT-SOFTWARE</h4>
                                                    <img src="images/profile/6.jpg" width="70" style="margin-top:5px;">
                                                    <br>
                                                    <span>Rajesh</span>
                                                    <br>
                                                    <span>CEO-Beta Solutions</span>
                                                    <br>
                                                    <span>IT-Softwarre</span>
                                                    <h4>gayatri hospital</h4>
     												<span><input type="submit" class="btn btn_grn" value="Connect"></span>
                                                    <p>
            Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem singulis est id. Enim sale adolescens vim te. Ea ignota gloriatur eos, no minim zril quo. Mei graece recteque id. Cu per facer</p>
                                                </div>-->
                                                <!--<div class="col-lg-4 grow" align="center">
                                                    <h4>
        IT-SOFTWARE</h4>
                                                    <img src="images/profile/6.jpg" width="70" style="margin-top:5px;">
                                                    <br>
                                                    <span>Rajesh</span>
                                                    <br>
                                                    <span>CEO-Beta Solutions</span>
                                                    <br>
                                                    <span>IT-Softwarre</span>
                                                    <h4>gayatri hospital</h4>
                                                    <span><input type="submit" class="btn btn_grn" value="Connect"></span>
                                                    <p>
            Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem singulis est id. Enim sale adolescens vim te. Ea ignota gloriatur eos, no minim zril quo. Mei graece recteque id. Cu per facer</p>
                                                </div>-->
                                            </div>