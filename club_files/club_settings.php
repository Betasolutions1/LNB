 <h4 class="club_headers">
        Settings</h4>
                                            <br>
                                            <div class="row" style="width:400px;">
                                                <form role="form"> 
                                                    <div class="form-group"> 
                                                        <input type="email" class="form-control" id="old_pwd" name="old_pwd" placeholder="Old Password"> 
                                                    </div>                                                     
                                                    <div class="form-group"> 
                                                        <input type="password" class="form-control" id="new_password" name="new_password" placeholder="Password"> 
                                                    </div>                                                     
                                                    <div class="form-group"> 
                                                        <input type="password" class="form-control" id="re_password" name="re_password" placeholder="Verify"> 
                                                    </div>                                                     
                                                    <button type="submit" class="btn btn_grn" onClick="change_pwd();">Change Password</button>                                                     
                                                </form>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-lg-12" style="height:40px; background-color:#F48E8B;">
                                                    <h4 style="color:#fff; ">
            Remove From club</h4>
                                                </div>
                                                <div class="col-lg-12" style="border:1px dotted #F48E8B">
                                                    <br>
                                                    <input type="button" value="Remove from this Club" class="btn" onClick="remove_club(<?php echo $_SESSION['id']?>);" style="background-color:#F48E8B; color:#fff;">
                                                    <br>
                                                    <br>
                                                </div>
                                            </div>