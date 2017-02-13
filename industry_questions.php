
<?php
error_reporting(0);
include 'config.php';
session_start();
if(!$_SESSION['Email'])
{
	header("location:signup.php");
}

?>


<?php  
// -----------INDUSTRY QUESTIONS------------------
if(isset($_GET['q']))
{
	  $val1=$_GET['q'];
	 // echo $val1;
?>



<?php
                                            $dis_geet_qut=mysqli_query($conn,"select * from question where INDUSTRY_ID='$val1'");
											while($qust_d=mysqli_fetch_array($dis_geet_qut))
											{
												$qusr_exe=mysqli_query($conn,"select * from users where user_id='$qust_d[user_id]'");
												$quser=mysqli_fetch_array($qusr_exe);
												$qusr_pic_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$quser[user_id]'");
												$qusrpic=mysqli_fetch_array($qusr_pic_exe);
											?>
                                            
                                                <div class="col-lg-12 pad_0" style="height:80px; border-bottom:1px solid #afdf7c;">
                                                    <div class="col-lg-3 pad_0" style="width:80px;">
                                                        <img src="fb_users/<?php echo $quser['Gender']?>/<?php echo $quser['Email'];?>/Profile/<?php echo $qusrpic['image'];?>" width="80px" style="margin-left:0px;" />
                                                    </div>    
                                                    <!--width:810px;-->                                                 
                                                    <div class="col-lg-9 pad_0" style="height:80px;padding-left:15px;">
                                                        <div class="col-lg-10"> 
                                                            <a href="forum_ans.php?Qid=<?php echo $qust_d['q_id'];?>"><span><h4 class="club_headers" style="width:500px;">
           <?php echo $qust_d['question'];?> &nbsp <span class="badge">unread</span></h4></span></a>
                                                        </div>
                                                        <div class="col-lg-2" align="right">
                                                            <h4><i class="fa fa-comment" style="color:#afdf7c;"> 3</i></h4>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <span class="club_headers" style="color:#000;">Inked by <a href="#" style="color:#afdf7c;"><?php echo $quser['Name']?></a> &nbsp <i class="fa fa-clock-o" style="color:#a9a9a9; font-size:13px;">&nbsp <?php echo $qust_d['datetime'];?></i> </span>
                                                        </div>
                                                    </div>
                                                </div>
                                              <?php
											}
											  ?>
											  
    <?php
}
//------------END INDUSTRY QUESTIONS-------------------------
	?> 
    
   <?php
   if(isset($_GET['as']))
   {
	   $val2=$_GET['as'];
   ?>                                          
   <?php
    $get_Qust_ans_exe=mysqli_query($conn,"select * from question where INDUSTRY_ID='$val2'");
										while($ques_desc=mysqli_fetch_array($get_Qust_ans_exe))
										{
   ?>
     <div class="row" style="padding:0px;">
                                        <div class="col-lg-12" style="border-bottom:2px solid #afdf7c">
                                        
                                        <?php
                                       
										$in_qeuser_exe=mysqli_query($conn,"select * from users where user_id='$ques_desc[user_id]'");
										$in_qwy=mysqli_fetch_array($in_qeuser_exe);
										$inqppic=mysqli_query($conn,"select * from user_profile_pic where user_id='$in_qwy[user_id]'");
										$upiv=mysqli_fetch_array($inqppic);
										//echo $in_qwy['Name'];
										?>
                                        
                                            <div class="col-lg-12 pad_0" style="border-bottom:1px solid #afdf7c;margin-bottom:10px;">
                                                <div class="col-lg-2 pad_0" align="left" style="width:80px;">
                                                    <img src="fb_users/<?php echo $in_qwy['Gender']?>/<?php echo $in_qwy['Email'];?>/Profile/<?php echo $upiv['image'];?>" width="80" />
                                                </div>
                                                <div class="col-lg-10">
                                                    <h3 class="club_headers" style="width:500px;">
          <?php echo $ques_desc['question'];?></h3>
                                                    <span class="club_headers" style="color:#000;">Inked by <a href="#" style="color:#afdf7c;"><?php echo $in_qwy['Name'];?></a> &nbsp <i class="fa fa-clock-o" style="color:#a9a9a9; font-size:13px;">&nbsp <?php echo $ques_desc['datetime'];?></i> </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-12" style="margin-bottom:15px;">
                                                <p>
            <?php echo $ques_desc['que_desc'];?></p>
                                                <span style="color:#a9a9a9">thanks</span>
                                                <br>
                                                <span style="color:#a9a9a9"><?php echo $in_qwy['Name'];?></span>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <br>
                                        <div class="col-lg-12" style="height:100px; padding:0px;">
                                            <div class="col-lg-12">
                                            <form method="post" action="">
                                            <input type="hidden" name="qus_id" id="que_id" value="<?php echo $ques_desc['q_id'];?>">
                                                <input type="text" class="club_txt" name="ans_frms" id="ans_frms"style="margin-bottom:15px;" placeholder="Ink your reply...">
                                                <input type="submit" style="display:none;"  onClick="return insert_answer();" >
                                             </form>
                                            </div>
                                            <div class="col-lg-12" style="height:800px; overflow-y:scroll; padding:0px; border-top:2px solid #afdf7c">
                                            <div id="disanswers">
                                            <?php
                                            $get_anse_frm_qte=mysqli_query($conn,"select * from answered where quest_id='$ques_desc[q_id]'");
											while($dip_ans=mysqli_fetch_array($get_anse_frm_qte))
											{
											$watq_exe=mysqli_query($conn,"select * from users where user_id='$dip_ans[user_id]'");
											$watq=mysqli_fetch_array($watq_exe);
											$ah_ppic_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$watq[user_id]'");
											$ur_pic=mysqli_fetch_array($ah_ppic_exe);
											?>
                                                <div class="col-lg-12 pad_0" style=" border-bottom:1px solid #afdf7c; ">
                                                    <div class="col-lg-2 pad_0" style="width:80px;">
                                                        <img src="fb_users/<?php echo $watq['Gender'];?>/<?php echo $watq['Email'];?>/Profile/<?php echo $ur_pic['image'];?>" width="80px" />
                                                    </div>                                                     
                                                    <div class="col-lg-10 pad_0" style="width:810px;padding-left:15px;">
                                                        <div class="col-lg-12" style="padding:5px;padding-left:5px">
                                                            <span class="club_headers" style="color:#808080;">Inked by <a href="#" style="color:#afdf7c;"><?php echo $watq['Name'];?></a> &nbsp <i class="fa fa-clock-o" style="color:#a9a9a9; font-size:13px;">&nbsp <?php echo $dip_ans['datetime'];?></i> </span>
                                                        </div>
                                                        <div class="col-lg-12"> 
                                                            <p><?php echo $dip_ans['answer'];?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                          <?php
											}
										  ?>
                                            
                                              </div>
                                              
                                              
                                             
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <?php 
									  }
									  ?>
   
   <?php
   }
   
   ?>
   <script type="text/javascript" src="js/space_discussion.js"></script>