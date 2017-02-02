<div class="bg_pst">
<?php
            $user_noted_posts_exe=mysqli_query($conn,"select * from user_post_status where user_id='$_GET[id]'");
			while($ret_user_noted=mysqli_fetch_array($user_noted_posts_exe))
			{
			?>
            
            <?php
			 
			$count=0;
            $user_noted_post_exet=mysqli_query($conn,"select * from user_post where post_id='".$ret_user_noted['post_id']."'");
			$user_noted_post=mysqli_fetch_array($user_noted_post_exet);
			
				$count++;
			?>
            <?php 
			$user_noted_photo_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$user_noted_post[user_id]'");
			$user_noted_ppic=mysqli_fetch_array($user_noted_photo_exe);
			?>
            
            <?php
            $user_noted_pers_de_ex=mysqli_query($conn,"select * from users where user_id='".$user_noted_post['user_id']."'");
			$user_pos_nrty=mysqli_fetch_array($user_noted_pers_de_ex);
			?>                       <div class="pst_box" style="background-color:#fff;">
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
                                            <?php
				}
											?>
</div>