<div class="pst_main_background pst_box " align="center" style="background-color:#fff;">
                                <br>
                                <h3 style="color:#afdf7c; text-align:center;">Club Login</h3>
                                <br>
                                <div class="club_login_wid">
                                    <form role="form" method="post" action="script_code.php"> 
                                        <div class="form-group"> 
                                            <input type="text" class="form-control" name="club_user_name" id="club_user_name" placeholder="Enter Club Name"> 
                                        </div>                                         
                                        <div class="form-group"> 
                                            <input type="password" class="form-control" name="club_pwd" id="club_pwd" placeholder="Password"> 
                                        </div>  
                                        <input type="hidden" name="club_user_id" id="club_user_id" value="<?php echo $_SESSION['id']; ?>">                                       
                                        <button type="submit" name="club_login"   class="btn btn_grn">Submit</button>                                         
                                    </form>
                                </div>
                                <br>
                                <br>
                            </div>
                        