  <div class="pst_main_background" style="background-color:#fff;">
                                        <div>
                                            <div style="height:80px;position:relative;  background-color:#afdf7c; z-index:1;" align="right">
                                                <h1 style="padding-top:30px; padding-right:20px;color:#fff; font-size:40px; font-family:lato-regular;">
           <?php echo $_SESSION['Name'];?></h1>
                                            </div>
                                            <div style="z-index:3;position:relative; top:-50px; left:20px; border:5px solid #fff; width:140px; padding:0px; border-radius:50%;">
                                                <img src="fb_users/<?php echo $usr_dis['Gender']?>/<?php echo $usr_dis['Email']?>/Profile/<?php echo $fet_ppic['image'];?>" width="130px" style="border-radius:50%" />
                                            </div>
                                            <div style="height:150px;width: 100%;background-color: rgb(216, 216, 216);z-index: 2;margin: 0px 0px 0px 540px !important;top: -140px;left: -540px;position: relative" align="right">
                                                <div class="row">
                                                    <div class="col-lg-4" style="height:150px;width:170px; background-color:#fff;border-bottom:1px dashed #afdf7c;">
</div>
                                                    <div class="col-lg-8" style="height:150px;width:420px; background-color:#fff; border-bottom:1px dashed #afdf7c;">
                                                        <div class="col-lg-12" style="padding-right: 5px;">
                                                            <h3 class="club_headers" style="text-align:right;font-family:lato-hairline; margin-right:0px;">
            FOUNDER</h3>
                                                        </div>
                                                        <div class="col-lg-12" style="padding-right:0px;">
                                                            <blockquote style="color:#afdf7c; font-family:lato-light; border-left:5px solid #afdf7c;">
                                                               <?php echo $usr_dis['description'];?>
</blockquote>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>