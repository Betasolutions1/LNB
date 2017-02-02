  <div style="background-color:#fff" class="shdw">
                                            <div class="media  bg" style="background:#afdf7c"> 
                                                <a href="" class="pull-left">
                                                    <img src="fb_users/<?php echo $usr_dis['Gender']?>/<?php echo $usr_dis['Email']?>/Profile/<?php echo $fet_ppic['image'];?>" width="50" class="media-object">
                                                </a>                                                 
                                                <div class="media-body innerTB half bg" style="padding-top:4px;"> 
                                                    <a href="#" class="pull-right innerT innerR text-white"> </a> 
                                                    <a href="" class="text-white strong display-block"><?php echo $usr_dis['Name']?></a> 
                                                    <br>
                                                    <span style="color:#fff;"><?php echo $usr_dis['designation'];?></span> 
                                                    <span style="color:#fff;">-</span>
                                                    <span style="color:#fff;"><?php echo $usr_dis['company'];?></span>
                                                </div>                                                 
                                            </div>
                                            <br style="height:2px;">
                                            <form method="post" action="script_code.php">
                                            <div class="input-group comment"> 
                                                <!--<input type="text" class="form-control" placeholder="Ink Your Reflections..."> -->
                                                <textarea style="resize:none" class="span12 form-control" name="post_data" cols="90" rows="2" placeholder="INK YOUR REFLECTIONS..."></textarea>
                                            </div>
                                            <div style="border-bottom:5px solid #ADCA8CM; margin-bottom: 10px; ">
                                                <button type="submit" name="sub_post" class="btn btn-success navbar-btn">
                                                    WRITE
</button>
                                                <button type="button" class="btn btn-success navbar-btn">
                                                    SCHEDULE
</button>
                                                <button type="button" class="btn btn-success navbar-btn">
                                                    DUST
</button>
                                            </div>
                                            </form>
                                        </div>
                                        <!--<hr class="style5">-->
                                        <br />

<div class="bg_pst">

                                            <?php /*?><div class="pst_box" style="background-color:#fff;">
                                                <div class="pst_head">
                                                    <div class="row pst_row_fill" style="">
                                                        <div class="col-lg-2 " align="left" style="width:70px;">
                                                            <a href="#" class="pst_head_left">
                                                                <img src="" class="img-size" width="70" style="margin-left:-15px;">
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-8 pst_head_txt">
                                                            <a href="#" class="text_wht">Steve</a>
                                                            <br>
                                                            <span class="pst_head_pos text_wht">CEO-Beta Solutions</span>
                                                            <br>
                                                            <span class="text_wht">IT-Industry</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pst_body">
                                                    <p style="margin-top:10px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, pariatur!</p> 
                                                    <span style="font-size:10px;"> - on 15th January, 2014</span>
                                                </div>
                                                <div class="pst_cmt">
                                                    <div class="pst_cmt_tog pst_cmt_pad">
                                                        <!--comment toggle-->
                                                        <i></i>
                                                        <a href="#"><span style="margin-left:10px;">View Comments</span></a>
                                                        <span class="pst_cmt_muted">+2 writes</span>
                                                    </div>
                                                    <div class="row  pst_cmt_body">
                                                        <div class="col-lg-2" style="width:70px;">
                                                            <a href="#" class="pst_head_left">
                                                                <img src="images/profile/1.jpg" width="70" style="margin-left:-15px;">
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-10" style="padding-top:5px;">
                                                            <a href="#" style="color:#000;">Steve</a>
                                                            <br>
                                                            <span class="pst_head_pos  pst_cmt_muted">- 29 jan 2017</span>
                                                            <br>
                                                            <div style="margin-left:10px;">CONGRATS STEVE</div>
                                                        </div>
                                                    </div>
                                                    <div class="row pst_cmt_row"> 
                                                        <div class="col-lg-10 pst_cmt_pad pst_cmt_wid" style="width:550px;">
                                                            <input type="text" class="form-control" style="width:100%;  " placeholder="Write..."> 
                                                        </div>
                                                        <div class="col-lg-2 pst_cmt_c1">
                                                            <button type="button" class="btn btn-primary" href="#" style="background:#afdf7c; ">
                                                                <i class="fa fa-pencil"></i>
                                                            </button>                                                             
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><?php */?>
                                            <?php
				$retpe=mysqli_query($conn,"select * from user_post order by post_id desc");
				while($resp=mysqli_fetch_array($retpe))
				{
					$pue=mysqli_query($conn,"select * from users where user_id='$resp[user_id]'");
					$pud=mysqli_fetch_array($pue);
					$pupe=mysqli_query($conn,"select * from user_profile_pic where user_id='$resp[user_id]'");
					$pupp=mysqli_fetch_array($pupe);
				?>
                                            <div class="pst_box" style="background-color:#fff;">
                                                <div class="pst_head">
                                                    <div class="row pst_row_fill" style="">
                                                        <div class="col-lg-2 " align="left" style="width:70px;">
                                                        	<?php 
															//$ency=base64_encode('id=$resp[user_id]');
															?>
                                                            <a href="profile.php?id=<?php echo $resp['user_id'] ?>" class="pst_head_left">
                                                                <img src="fb_users/<?php echo $pud['Gender']?>/<?php echo $pud['Email'];?>/Profile/<?php echo $pupp['image'];?>" width="70" style="margin-left:-15px;">
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-8 pst_head_txt">
                                                            <a href="profile.php?id=<?php echo $resp['user_id'] ?>" class="text_wht"><?php echo $pud['Name'];?></a>
                                                            <br>
                                                            <span class="pst_head_pos text_wht">CEO-Beta Solutions</span>
                                                            <br>
                                                            <span class="text_wht">IT-Industry</span>
                                                        </div>
                                                        <div class="col-lg-2">
                                                        <?php
				$pse=mysqli_query($conn,"select * from user_post_status where post_id='$resp[post_id]' AND user_id='$_SESSION[id]'");
				$ps=mysqli_fetch_array($pse);
				$psc=mysqli_num_rows($pse);
				?>
				<?php 
				if($ps['status']=='Like')
				{
					
					?>
                    <span><a href=""   onClick="unlike(<?php echo $resp['post_id'];?>,<?php echo $_SESSION['id'];?>);" id="<?php echo $resp['post_id'];?>" data-src="<?php echo $_SESSION['id'];?>">unlike</a></span>
                    <?php
				}else
				{
					//echo $resp['post_id'] ."<br>";
					//echo $_SESSION['id'];
				?>
                
                <span><a href=""  onClick="like(<?php echo $resp['post_id'];?>,<?php echo $_SESSION['id'];?>);" id="<?php echo $resp['post_id'];?>" data-src="<?php echo $_SESSION['id'];?>">like</a></span>
                <?php
				}
				?>
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
				
					?>
                                                    <div class="pst_cmt_tog pst_cmt_pad">
                                                        <!--comment toggle-->
                                                        <i></i>
                                                        <a href="#"><span style="margin-left:10px;">View Comments</span></a>
                                                        <span class="pst_cmt_muted">+2 writes</span>
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
                                                                <img src="fb_users/<?php echo $use_cm['Gender']?>/<?php echo $use_cm['Email']?>/Profile/<?php echo $us_cmt_pic['image'];?>"  width="70" style="margin-left:-15px;">
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-10" style="padding-top:5px;">
                                                            <a href="profile.php?id=<?php echo $use_cm['user_id'] ?>" style="color:#000;"><?php echo $use_cm['Name']; ?></a>
                                                            <br>
                                                            <span class="pst_head_pos  pst_cmt_muted">- 29 jan 2017</span>
                                                            <br>
                                                            <div style="margin-left:10px;"><?php echo $ret_cmt['comment'];?></div>
                                                        </div>
                                                    </div>
                                                    <?php
				}
													?>
                                                    
                                                    <div class="row pst_cmt_row"> 
                                                        <div class="col-lg-10 pst_cmt_pad">
                                                        <form method="post" action="script_code.php">
                                                        <input type="hidden" name="cmt_ins_id" value="<?php echo $_SESSION['id'];?>">
              											<input type="hidden" name="cmt_post_id" value="<?php echo $resp['post_id'];?>">
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
											?>
                                            
                                           
                                        </div>