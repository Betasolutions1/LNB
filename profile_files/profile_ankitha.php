 <div style="background-color:#fff;height:850px; width:590px; ">
                                            <div>
                                                <div style="height:80px;position:relative;  background-color:#afdf7c; z-index:1;" align="right">
                                                    <h1 style="padding-top:25px; padding-right:20px;color:#fff; font-size:40px; font-family:lato-regular;"><?php echo $candy['Name'];?></h1>
                                                </div>
                                                <div style="z-index:3;position:relative; top:-50px; left:20px; border:5px solid #fff; width:140px; padding:0px; border-radius:50%;">
                                                <?php
                                                if($candy_pic['image']!='')
												{
												?>
                                                    <img src="fb_users/<?php echo $candy['Gender']?>/<?php echo $candy['Email']?>/Profile/<?php echo $candy_pic['image'];?>" width="130px" style="border-radius:50%" />
                                                    <?php
                                                    }else
                                                    {
														?>
                                                        <img src="images/profile/sq.PNG" width="80" class="triangle-down">
                                                        <?php
                                                    }?>
                                                    <?php
                                                    $chek_frndlist=mysqli_query($conn,"select * from  friend_request where who_sent_user_id='$_SESSION[id]' AND to_whom_user_id='$_GET[id]' AND status='1'");
													$check_statct=mysqli_num_rows($chek_frndlist);
													if($check_statct!=0)
													{?>
                                                    <form method="post">
                                                    <input type="hidden" name="req_deluser_id" id="requser_id" value="<?php echo $_SESSION['id'];?>">
                                                    <input type="hidden" name="frnd_userid" id="frnd_userid" value="<?php echo $_GET['id']?>">
                                                    <button type="submit" onClick="delte_friend();" class="btn btn_grn">Friends</button>
                                                    </form>
                                                    <?php
													}else if($check_statct==0){
														$chek_frndlist1=mysqli_query($conn,"select * from friend_request where  to_whom_user_id='$_SESSION[id]' AND who_sent_user_id='$_GET[id]' AND status='1'");
														$ck_syoi=mysqli_num_rows($chek_frndlist1);
														if($ck_syoi!=0)
														{
															?>
                                                            <input type="hidden" name="req_deluser_id" id="requser_id" value="<?php echo $_SESSION['id'];?>">
                                                    <input type="hidden" name="frnd_userid" id="frnd_userid" value="<?php echo $_GET['id']?>">
                                                            <button type="submit" onClick="delte_friend();" class="btn btr_grn">Friends</button>
                                                            <?php
														}else{
													?>
                                                    <input type="hidden" name="sent_req_urid" id="sent_req_urid" value="<?php echo $_SESSION['id'];?>">
                                                    <input type="hidden" name="reci_req_urid" id="reci_req_urid" value="<?php echo $_GET['id'];?>">
                                                    <button type="submit" onClick="ask_friend();" class="btn btr_grn">Add Friend</button>
                                                    <?php
													}
													}
													?>
                                                </div>
                                                <div style="height:150px;width: 591px;;background-color: rgb(216, 216, 216);z-index: 2;margin: 0px 0px 0px 540px !important;top: -140px;left: -540px;position: relative ;" align="right">
                                                    <div class="row">
                                                        <div class="col-lg-4" style="height:150px;width:170px; background-color:#fff;border-bottom:1px dashed #afdf7c;">
                                                        
													</div>
                                                        <div class="col-lg-8" style="height:150px;width:420px; background-color:#fff; border-bottom:1px dashed #afdf7c;">
                                                            <div class="col-lg-12" style="padding-right: 5px;">
                                                                <h3 class="club_headers" style="text-align:right;font-family:lato-hairline; margin-right:0px;">
            <?php echo $candy['designation'];?></h3>
                                                            </div>
                                                            <div style="height:30px; ">
                                                                <img src="images/others/d_quote1.png" width="40px" style="opacity:.1" />
                                                            </div>
                                                            <div class="col-lg-12" style="padding-right:0px;">
                                                                <blockquote style="color:#afdf7c; font-family:lato-light; border-left:5px solid #afdf7c;"><?php echo $candy_info['quote'];?></blockquote>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row" style=" background-color:#fff;height:610px;">
                                                        <div class="col-lg-4 profile_left_navbar" style="border-right:1px dashed #acdf7c; height:500px; margin-top:10px; margin-bottom:10px;">
                                                            <div class="col-lg-12 profile_l_n_personal">
                                                                <h3 class="club_headers" style="text-align:right;margin-right:0px;">
            PERSONAL</h3>
                                                                <div>
                                                                    <h5 style="color:#afdf7c;margin-bottom:2px;">
        CONTACT</h5>
                                                                    <span>
        +91 <?php echo $candy_info['mobile_no'];?></span>
                                                                </div>
                                                                <div>
                                                                    <h5 style="color:#afdf7c;margin-bottom:2px;">
        ADDRESS</h5>
                                                                    <span>
       <?php echo $candy_info['hometown'];?></span>
                                                                    <br>
                                                                    <span><?php echo $fet_info['current_city'];?></span>
                                                                </div>
                                                                <div>
                                                                    <h5 style="color:#afdf7c;margin-bottom:2px;">
        EMAIL</h5>
                                                                    <span>
        <?php echo $candy_info['Email'];?></span>
                                                                </div>
                                                                <div>
                                                                    <h5 style="color:#afdf7c;margin-bottom:2px;">
        WEBSITE</h5>
                                                                    <span>
        <?php echo $candy_info['website'];?></span>
                                                                </div>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-12 profile_l_n_personal">
                                                                <h3 class="club_headers" style="text-align:right;margin-right:0px;">
            COMPANY</h3>
                                                                <div>
                                                                    <h5 style="color:#afdf7c;margin-bottom:2px;">
        COMPANY NAME</h5>
                                                                    <span>
        <?php echo $candy['company'];?></span>
                                                                </div>
                                                                <div>
                                                                    <h5 style="color:#afdf7c;margin-bottom:2px;">
        EMAIL</h5>
                                                                    <span>
        info@betasolutions.in</span>
                                                                </div>
                                                                <div>
                                                                    <h5 style="color:#afdf7c;margin-bottom:2px;">
        WEBSITE</h5>
                                                                    <span>
        www.betasolutions.in</span>
                                                                </div>
                                                                <br>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8" style=" margin-top:10px; margin-bottom:10px; height:600px;">
                                                            <div class="row">
                                                                <div class="col-lg-12 p_r_box">
                                                                    <h3 class="club_headers" style="text-align:left;margin-left:0px;">
        PROFILE</h3>
                                                                    <p>
        <?php echo $candy['description'];?></p>
                                                                </div>
                                                                <div class="col-lg-12 p_r_box" style="overflow-y:none;">
                                                                    <h3 class="club_headers" style="text-align:left;margin-left:0px;">
        ACCOMPLISHMENTS</h3>
                                                                    <div class="col-lg-12" tyle="height:40px; border-bottom:1px dashed #afdf7c" align="left">
                                                                        <div class="col-lg-4" style="background-color:#afdf7c;height:40px;color:#fff;">
                                                                            <h5>
    2015-2016</h5> 
                                                                        </div>
                                                                        <div class="col-lg-8" tyle="border:1px solid #afdf7c;height:40px; color:#a9a9a9;">
                                                                            <h5 style="margin:0px;color:#afdf7c">
                BIG PROJECT</h5>
                                                                            <p style="text-align:;">
               electram convenire ad mel, no his verear delicata concludaturque, laudem singulis est id. Enim sale a</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12" tyle="height:40px; border-bottom:1px dashed #afdf7c" align="left">
                                                                        <div class="col-lg-4" style="background-color:#afdf7c;height:40px;color:#fff;">
                                                                            <h5>
    2015-2016</h5> 
                                                                        </div>
                                                                        <div class="col-lg-8" tyle="border:1px solid #afdf7c;height:40px; color:#a9a9a9;">
                                                                            <h5 style="margin:0px;color:#afdf7c">
                BIG PROJECT</h5>
                                                                            <p style="text-align:;">
               electram convenire ad mel, no his verear delicata concludaturque, laudem singulis est id. Enim sale a</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12" tyle="height:40px; border-bottom:1px dashed #afdf7c" align="left">
                                                                        <div class="col-lg-4" style="background-color:#afdf7c;height:40px;color:#fff;">
                                                                            <h5>
    2015-2016</h5> 
                                                                        </div>
                                                                        <div class="col-lg-8" tyle="border:1px solid #afdf7c;height:40px; color:#a9a9a9;">
                                                                            <h5 style="margin:0px;color:#afdf7c">
                BIG PROJECT</h5>
                                                                            <p style="text-align:;">
               electram convenire ad mel, no his verear delicata concludaturque, laudem singulis est id. Enim sale a</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 p_r_box">
                                                                    <h3 class="club_headers" style="text-align:left;margin-left:0px;">
        EDUCATION</h3>
                                                                    <span> <b style="color:#afdf7c">2010-2016</b> &nbsp;|&nbsp; Beta Solutions </span>
                                                                    <br>
                                                                    <span> <b style="color:#afdf7c">2010-2016</b> &nbsp;|&nbsp; Beta Solutions </span>
                                                                    <br>
                                                                    <span> <b style="color:#afdf7c">2010-2016</b> &nbsp;|&nbsp; Beta Solutions </span>
                                                                    <br>
                                                                    <span> <b style="color:#afdf7c">2010-2016</b> &nbsp;|&nbsp; Beta Solutions </span>
                                                                    <br>
                                                                    <span> <b style="color:#afdf7c">2010-2016</b> &nbsp;|&nbsp; Beta Solutions </span>
                                                                    <br>
                                                                    <span> <b style="color:#afdf7c">2010-2016</b> &nbsp;|&nbsp; Beta Solutions </span>
                                                                </div>
                                                                <div class="col-lg-12 p_r_box" style="border-bottom:none;">
                                                                    <h3 class="club_headers" style="text-align:left;margin-left:0px;">
        SKILLS</h3>
        <?php
        $candy_sli_exe=mysqli_query($conn,"select * from user_skills where user_id='$_GET[id]'");
		while($candyskil=mysqli_fetch_array($candy_sli_exe))
		{
		?>
                                                                    <button type="button" class="btn btn_grn" value="" style="height:30px; margin:5px;text-transform:uppercase;"><?php echo $candyskil['skill'];?></button>
                                                                    <?php
		}
																	?>
                                                                   <!-- <input type="button" class="btn btn_grn" value="PHOTOSHOP" style=" margin:1px; height:30px;">
                                                                    <input type="button" class="btn btn_grn" value="WEB DESIGN" style=" margin:1px; height:30px;"> 
                                                                    <input type="button" class="btn btn_grn" value="PHP" style=" margin:1px; height:30px;"> 
                                                                    <input type="button" class="btn btn_grn" value="3D MODELING" style=" margin:1px;height:30px;">
                                                                    <input type="button" class="btn btn_grn" value="C#" style=" margin:1px;height:30px;"> 
                                                                    <input type="button" class="btn btn_grn" value="DOT.NET" style=" margin:1px;height:30px;"> 
                                                                    <input type="button" class="btn btn_grn" value="CINEMA4D" style=" margin:1px;height:30px;">
                                                                    <input type="button" class="btn btn_grn" value="ANIMATION" style=" margin:1px;height:30px;">-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>