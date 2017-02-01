 <div class="pst_main_background" style="background-color:#fff;">
                                <div class="pst_box">
                                    <div class="parallax_folio">
                                   
                                    </div>
                                    <br>
                                    <br>
                                    <div style="border-top:1px solid #afdf7c;border-bottom:1px solid #afdf7c; width:570px; margin-left:10px; margin-right:10px;">
                                     
                                        <br>
                                      <h4 style="color:#afdf7c;">
    WHO I AM <span class="icon" ><a href="#folio" class="icon" > <i class="fa fa-pencil icon"></i></a> </span></h4>
                                        <P style="color:#d3d3d3">
        Lorem ipsum dolor sit amet, inimicus electram convenire ad mel, no his verear delicata concludaturque, laudem singulis est id. Enim sale adolescens vim te. Ea ignota gloriatur eos, no minim zril quo. Mei graece recteque id. Cu per facer recusabo, te labore equidem vix, cu eam singulis mediocrem. Et nec facete maiestatis, quo impedit aliquando ei. Saepe animal recteque ad eam, sea vitae putent causae ei, eu qui everti vituperata</P>
                                        <br>
                                    </div>
                                
                                    
                                    
                                    
                                    
                                    <br>
                                    <div style="border-bottom:1px solid #afdf7c; width:570px; margin-left:10px; margin-right:10px;">
                                        <h4 style="color:#afdf7c;">
    SKILLS </h4>
                                        <br>
                                    </div>
                                    <br>
                                    <div style=" width:570px; margin-left:10px; margin-right:10px;">
                                        <h4 style="color:#afdf7c;">
   WORKS </h4>
                                        <BR>
                                    </div>
                                    <div> 
                                        <div class="folio_wrk">
                                            <div align="center" style="color:#fff; height:100px; padding-top:20px;">
                                                <h3> My First Project</h3>
                                            </div>
                                        </div>
                                        <div class="folio_wrk_1">
                                            <div align="center" style="color:#fff; height:100px; padding-top:20px;">
                                                <h3> low polygon </h3>
                                            </div>
                                        </div>
                                        <div class="folio_wrk_2">
                                            <div align="center" style="color:#fff; height:100px; padding-top:20px;">
                                                <h3>landscape</h3>
                                            </div>
                                        </div>
                                        <div class="folio_wrk_3">
                                            <div align="center" style="color:#fff; height:100px; padding-top:20px;">
                                                <h3> dynamic</h3>
                                            </div>
                                        </div>
                                        <div class="folio_wrk_4">
                                            <div align="center" style="color:#fff; height:100px; padding-top:20px;">
                                                <h3>click</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            
 <!--work Model Begin-->
  <div class="remodal" data-remodal-id="folio" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
  <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
  
  <div>
  
  <h2><span><?php echo $_SESSION['Name'];?></span></h2>
  <div class="col-lg-12">
    <h4 id="modal1Title">WHO AM I</h4>
    <?php 
	$foloi_exe=mysqli_query($conn,"select * from folio where user_id='$_SESSION[id]'");
	$folio=mysqli_fetch_array($foloi_exe);
	?>
    <textarea><?php echo $folio['description'];?></textarea>
  </div>
   
   
  </div>
  <br>
  
  <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
  
  <button type="submit"  onClick="add_description();" data-remodal-action="confirm" class="remodal-confirm">ADD</a>
 
  
 
</div>
                                                    <!-- End work Model-->                                 
                            
                            
                            
                            
                            
                            
                            
                            
                            