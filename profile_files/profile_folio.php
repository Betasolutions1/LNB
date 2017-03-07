 <div class="pst_main_background" style="background-color:#fff;">
 <?php
 $candy_cv_pic_exe=mysqli_query($conn,"select * from user_cover_pic where user_id='$_GET[id]'");
 $candy_cvpic=mysqli_fetch_array($candy_cv_pic_exe);
 ?>
                                <div class="pst_box">
                                    <div class="parallax_folio" style="background-image: url('fb_users/<?php echo $candy['Gender'];?>/<?php echo $candy['Email'];?>/Cover/<?php echo $candy_cvpic['image'];?>');">
                                   
                                    </div>
                                    <br>
                                    <br>
                                    <div style="border-top:1px solid #afdf7c;border-bottom:1px solid #afdf7c; width:570px; margin-left:10px; margin-right:10px;">
                                     
                                        <br>
                                      <h4 style="color:#afdf7c;">
    WHO I AM <span class="icon" ><!--<a href="#folio" class="icon" > <i class="fa fa-pencil icon"></i></a>--> </span></h4>
    <?php
	$folio_desc=mysqli_query($conn,"select * from folio where user_id='$_GET[id]'");
	$fo_des=mysqli_fetch_array($folio_desc);
	?>
                                        <P style="color:#d3d3d3">
        <?php echo $fo_des['description'];?></P>
                                        <br>
                                    </div>
                                
                                    
                                    
                                    
                                    
                                    <br>
                                    <div style="border-bottom:1px solid #afdf7c; width:570px; margin-left:10px; margin-right:10px;">
                                        <h4 style="color:#afdf7c;">
    SKILLS <span class="icon" ><!--<a href="#skill" class="icon" > <i class="fa fa-pencil icon"></i></a>--> </span></h4>
                                        <br>
                                    </div>
                                    <br>
                                    <div style=" width:570px; margin-left:10px; margin-right:10px;">
                                        <h4 style="color:#afdf7c;">
   WORKS <span class="icon" ><!--<a href="#user_work" class="icon" > <i class="fa fa-pencil icon"></i></a> --></span></h4>
                                        <BR>
                                    </div>
                                    <div> 
                                    <?php 
									$get_wpjs=mysqli_query($conn,"select * from work_projects where user_id='$_GET[id]'");
									while($fol_wrks=mysqli_fetch_array($get_wpjs))
									{
									?>
                                     <a href="#popup_work_<?php echo $fol_wrks['work_id'];?>">
                                        <div class="folio_wrk" style="background-image: url('fb_users/<?php echo $candy['Gender'];?>/<?php echo $candy['Email'];?>/Projects/<?php echo $fol_wrks['work_image'];?>');">
                                            <div align="center" style="color:#fff; height:100px; padding-top:20px;">
                                                <h3> <?php echo $fol_wrks['work_title'];?></h3>
                                            </div>
                                        </div></a>
                                        
 <!--Skill Model Begin-->
  <div class="remodal" data-remodal-id="popup_work_<?php echo $fol_wrks['work_id'];?>" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
  <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
  
  <div>
  
  <h2><span><?php echo $_SESSION['Name'];?></span></h2>
  <div class="col-lg-6">
    <h4 id="modal1Title"><?php echo $fol_wrks['work_title'];?></h4>
   	<p><?php echo $fol_wrks['work_description'];?></p>
   
    <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
  
  <button type="submit"  data-remodal-action="confirm" class="remodal-confirm">OK</button>
  
  </div>
  <div class="col-lg-6">
  <img src="fb_users/<?php echo $candy['Gender'];?>/<?php echo $candy['Email'];?>/Projects/<?php echo $fol_wrks['work_image'];?>" style="min-height:250px;max-height:250px;min-width:250px;max-width:250px;"/>
  </div>
   
  </div>
  <br>
  <br>&nbsp;
  
  
 
 
 
</div>
                                                    <!-- End Skill Model-->                        
                                                                    
                                        
                                        
                                        
                                        <?php
									}
										?>
                                        
                                       
                                      
                                       
                                       <!-- <div class="folio_wrk_4">
                                            <div align="center" style="color:#fff; height:100px; padding-top:20px;">
                                                <h3>click</h3>
                                            </div>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            
 <!--work Model Begin-->
  <div class="remodal" data-remodal-id="folio" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
  <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
  <form method="post" action="">
  <div>
  
  <h2><span><?php echo $_SESSION['Name'];?></span></h2>
  <div class="col-lg-12">
    <h4 id="modal1Title">WHO AM I</h4>
    <?php 
	$foloi_exe=mysqli_query($conn,"select * from folio where user_id='$_SESSION[id]'");
	$folio=mysqli_fetch_array($foloi_exe);
	?>
    <textarea cols="80" rows="3" style="resize:none"><?php echo $folio['description'];?></textarea>
  </div>
   
   
  </div>
  <br>
  
  <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
  
  <button type="submit"  onClick="add_folio_desc();" data-remodal-action="confirm" class="remodal-confirm">ADD</button>
 
  </form>
 
</div>
                                                    <!-- End work Model-->                                 
                            
     <!--Skill Model Begin-->
  <div class="remodal" data-remodal-id="skill" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
  <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
  <form method="post" action="">
  <div>
  
  <h2><span><?php echo $_SESSION['Name'];?></span></h2>
  <div class="col-lg-12">
    <h4 id="modal1Title">My Skills</h4>
    <div class="form-group"> 
                                                        <input type="text" class="form-control" name="skill_name" id="skill_name" placeholder="Skill Name"> 
                                                    </div>                                                     
                                                    <div class="form-group"> 
                                                        <input type="text" class="form-control" name="skill_rate" id="skill_rate" placeholder="Give Ur Own Rating "> 
                                                    </div>                                                     
                                                                                                         
                                                   
    
  </div>
   
   
  </div>
  <br>
  
  <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
  
  <button type="submit"  onClick="add_user_skill();" data-remodal-action="confirm" class="remodal-confirm">ADD SKILLS</button>
 
  </form>
 
</div>
                                                    <!-- End Skill Model-->                        
                            
                            
                            
                            
          <!--Work And Project Model Begin-->
  <div class="remodal" data-remodal-id="user_work" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
  <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
  <form method="post" action="script_code.php" enctype="multipart/form-data">
  <div>
  
  <h2><span><?php echo $_SESSION['Name'];?></span></h2>
  <div class="col-lg-12">
    <h4 id="modal1Title">My Works And Projects</h4>
    <div class="form-group"> 
                                                        <input type="text" class="form-control" name="project_name" id="project_name" placeholder="Project Name"> 
                                                    </div>                                                     
                                                    <div class="form-group"> 
                                                        <textarea  class="form-control" rows="3" cols="80" name="project_desc" id="project_desc" placeholder="Project Description"> </textarea>
                                                    </div> 
                                                    <div class="form-group"> 
                                                        <input type="file" class="form-control" name="project_image" id="project_image" placeholder="Give Ur Own Rating "> 
                                                    </div>                                                     
                                                                                                         
                                                   
    
  </div>
   
   
  </div>
  <br>
  
  <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
  
  <button type="submit" name="add_work_projects" onClick="add_work_projects();"  data-remodal-action="confirm" class="remodal-confirm">ADD Projects</button>
 
  </form>
 
</div>
                                                    <!-- End Work And Project Model-->                        
                                               
                            
                            