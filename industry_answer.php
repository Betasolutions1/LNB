
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
     if(isset($_GET['as']))
   {
	   $form_answ=0;
	   $val2=$_GET['as'];
   ?>  
   
       <ul  style="padding:0px;">
                      
   <?php
    $get_Qust_ans_exe=mysqli_query($conn,"select * from question where INDUSTRY_ID='$val2'");
										while($ques_desc=mysqli_fetch_array($get_Qust_ans_exe))
										{
											++$form_answ;
   ?>
   
   
       <li style="border-bottom:2px solid  #DBD8D8;list-style:none;"  id="txtAnswe">
             <?php
                                        
										$in_qeuser_exe=mysqli_query($conn,"select * from users where user_id='$ques_desc[user_id]'");
										$in_qwy=mysqli_fetch_array($in_qeuser_exe);
										$inqppic=mysqli_query($conn,"select * from user_profile_pic where user_id='$in_qwy[user_id]'");
										$upiv=mysqli_fetch_array($inqppic);
										//echo $in_qwy['Name'];
										?>
                                                                                                    
                                                                         <i style="float:left;" class="fa fa-comments">+99</i>
                                                                         <br/>
                                                                         <span style="float:left;">1 day ago</span>
                                                                        
                                                                         <a href="forum_ans.php?Qid=<?php echo $qust_d['q_id'];?>"><?php echo $ques_desc['question'];?> &nbsp</a>
                                                                         <br>
                                                                           <span class="club_headers" style="color:#000;">Inked by <a href="#" style="color:#afdf7c;"><?php echo $in_qwy['Name'];?></a> &nbsp <i class="fa fa-clock-o" style="color:#a9a9a9; font-size:13px;">&nbsp  <?php echo $ques_desc['datetime'];?></i> </span>
                                                                           
                                                 <?php
                                                if($upiv['image']!='')
												{
												?>
                                                    <img src="fb_users/<?php echo $in_qwy['Gender']?>/<?php echo $in_qwy['Email'];?>/Profile/<?php echo $upiv['image'];?>" width="40" style="margin-left:0px;border-radius:50px"/>
												<?php
												}else{
													?>
                                                    <img src="images/profile/sq.PNG" width="80" style="margin-left:0px;border-radius:50px">
                                                    <?php }?>
                                                    <br/>
                                                    <br>

                                                      <div  style="margin-bottom:15px;">
                                                <p><span><h4>Description:</h4></span>
            <?php echo $ques_desc['que_desc'];?></p>
                                               <!-- <span style="color:#a9a9a9">thanks</span>
                                                <br>-->
                                               <?php /*?> <span style="color:#a9a9a9"><?php echo $in_qwy['Name'];?></span><?php */?>
                                            </div>
                                               <br/><br>
  
                                                 
                                                  <div class="col-lg-12" style="height:100px; padding:0px;">
                                            <div class="col-lg-12">
                                            <?php 
											$dummy_frm_id=1;
											?>
                                            <form method="post" action="" id="form_<?php echo $form_answ;?>">
                                            <input type="hidden" name="qus_id" id="que_id_<?php echo $form_answ;?>" value="<?php echo $ques_desc['q_id'];?>">
                                                <input type="text" class="club_txt" name="ans_frms" id="ans_frms_<?php echo $form_answ;?>"style="margin-bottom:15px;" placeholder="Ink your reply...">
                                                <input type="submit" style="display:none;"  onClick="return insert_answer(<?php echo $form_answ;?>);" >
                                             </form>
                                            </div><br><br>
                                            <div class="col-lg-12" style="height:800px; overflow-y:scroll; padding:0px; border-top:2px solid #afdf7c">
                                            <div id="disanswers">
                                            <?php
                                            $get_anse_frm_qte=mysqli_query($conn,"select * from answered where quest_id='$ques_desc[q_id]' order by ans_id desc");
											while($dip_ans=mysqli_fetch_array($get_anse_frm_qte))
											{
											$watq_exe=mysqli_query($conn,"select * from users where user_id='$dip_ans[user_id]'");
											$watq=mysqli_fetch_array($watq_exe);
											$ah_ppic_exe=mysqli_query($conn,"select * from user_profile_pic where user_id='$watq[user_id]'");
											$ur_pic=mysqli_fetch_array($ah_ppic_exe);
											?>
                                                <div class="col-lg-12 pad_0" style=" border-bottom:1px solid #afdf7c; ">
                                                    <div class="col-lg-2 pad_0" style="width:80px;float:right;">
                                                    <?php
                                                    if($ur_pic['image']!='')
													{
													?>
                                                        <img src="fb_users/<?php echo $watq['Gender'];?>/<?php echo $watq['Email'];?>/Profile/<?php echo $ur_pic['image'];?>" width="40" style="margin-left:0px;border-radius:50px"/>
                                                        <?php }else {?>
                                                        <img src="images/profile/sq.PNG" width="40" style="margin-left:0px;border-radius:50px">
                                                        <?php }?>
                                                    </div>                                                     
                                                    <div class="col-lg-10 pad_0" style="width:810px;padding-left:15px;">
                                                        <div class="col-lg-12" style="padding:5px;padding-left:5px">
                                                            <span class="club_headers" style="color:#808080;">Inked by <a href="#" style="color:#afdf7c;"><?php echo $watq['Name'];?></a> &nbsp <i class="fa fa-clock-o" style="color:#a9a9a9; font-size:13px;">&nbsp <?php echo $dip_ans['datetime'];?></i> </span>
                                                        </div>
                                                        <div class="col-lg-12" style="float:left;"> 
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
                                                         
                                                                          
                                                         
                                                          
                                                      
                                                      
                                                                         
                              </li>
                             
   
   							<?php
										}
							?>
   							</ul>
   
   <?php
   }
   ?>
   
   
   
    <?php /*?><div class="club_sub_div_height" style="height:1120px" id="txtAnswe" >
                                    <div class="row" style="padding:0px;" >
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
                                                <?php
                                                if($upiv['image']!='')
												?>
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
                                        
                                      
                                        <div class="col-lg-12" style="height:100px; padding:0px;">
                                            <div class="col-lg-12">
                                            <?php 
											$dummy_frm_id=1;
											?>
                                            <form method="post" action="" id="form_<?php echo $form_answ;?>">
                                            <input type="hidden" name="qus_id" id="que_id_<?php echo $form_answ;?>" value="<?php echo $ques_desc['q_id'];?>">
                                                <input type="text" class="club_txt" name="ans_frms" id="ans_frms_<?php echo $form_answ;?>"style="margin-bottom:15px;" placeholder="Ink your reply...">
                                                <input type="submit" style="display:none;"  onClick="return insert_answer(<?php echo $form_answ;?>);" >
                                             </form>
                                            </div>
                                            <div class="col-lg-12" style="height:800px; overflow-y:scroll; padding:0px; border-top:2px solid #afdf7c">
                                            <div id="disanswers">
                                            <?php
                                            $get_anse_frm_qte=mysqli_query($conn,"select * from answered where quest_id='$ques_desc[q_id]' order by ans_id desc");
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
                                </div><?php */?>
   
   <script type="text/javascript" src="js/space_discussion.js"></script>