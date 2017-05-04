 <?php
 error_reporting(0);
include 'config.php';
session_start();
if(!$_SESSION['Email'])
{
	header("location:signup.php");
}
    if(isset($_GET['c_id'])){
        //get the conversation id and
        $conversation_id = base64_decode($_GET['c_id']);
        //fetch all the messages of $user_id(loggedin user) and $user_two from their conversation
        $q = mysqli_query($conn, "SELECT * FROM `send_mails` WHERE conversation_id='$conversation_id'");
        //check their are any messages
        if(mysqli_num_rows($q) > 0){
            while ($m = mysqli_fetch_assoc($q)) {
                //format the message and display it to the user
                $user_form = $m['sender_user_id'];
                $user_to = $m['recive_user_id'];
                $subject = $m['subject'];
				$matter_desc=$m['matter_desc'];
				$datetim=$m['datetime'];
 
                //get name and image of $user_form from `user` table
                $user = mysqli_query($conn, "SELECT * FROM `users` WHERE user_id='$user_form'");
                $user_fetch = mysqli_fetch_array($user);
				$user_pic=mysqli_query($conn,"select * from user_profile_pic where user_id='$user_fetch[user_id]'");
				$upic=mysqli_fetch_array($user_pic);
				//display the message
               ?>
 
                
                <div class="col-lg-12" style="border-bottom:2px solid #7c7c7c; margin-bottom:10px; padding-top:10px;">
                                            <div class="col-lg-12 pad_0" style="margin-bottom:10px;">
                                           
          
                                                <div class="col-lg-3 pad_0" align="left" style="width:80px;">
                                                    <img class="img-circle" src="fb_users/<?php echo $user_fetch['Gender']?>/<?php echo $user_fetch['Email'];?>/Profile/<?php echo $upic['image'];?>" width="80" />
                                                </div>
                                                <div class="col-lg-9" style="width:91%"> 
                                                    <div class="col-lg-12 pad_0">
                                                        <div class="col-lg-9 pad_0">
                                                            <h3 class="club_headers" style="width:500px;color: #808080">
           <?php $user_fetch['Name'];?> </h3> 
                                                        </div><div class="col-lg-1"></div>
                                                        <div class="col-lg-2" align="right" style="padding:15px;">
                                                            <a href="#"><i class="fa fa-forward" style="color:#7c7c7c;padding-right:5px;"></i></a>
                                                            <a href="#"><i class="fa fa-share" style="color:#7c7c7c;padding-right:5px;"></i></a>
                                                            <a href="#"><i class="fa fa-trash" style="color:#7c7c7c;padding-right:5px;"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="club_headers" style="color:#000;">Inked by <a href="#" style="color:#7c7c7c;"><?php echo $_SESSION['Name'];?></a> &nbsp <i class="fa fa-clock-o" style="color:#a9a9a9; font-size:13px;">&nbsp <?php echo $datetim;?></i> </span>
                                                </div>



                                                <div class="col-lg-12 pad_0">
                                                    <h4>
    Please Share the document to my mail id....</h4>
                                                </div>
                                            </div>
                                             <hr style="color: #7c7c7c;width: 100%">
                                            <div class="col-lg-12" style="margin-bottom:15px;">
                                                <p>
            <?php echo $matter_desc;?></p>
                                                <span style="color:#a9a9a9">thanks</span>
                                                <br>
                                                <span style="color:#a9a9a9">Rajesh</span>
                                                <br>
                                                <span style="color:#a9a9a9">www.ln.business</span>
                                            </div>
                                        </div>
                            
             <?php               
 
            }
        }else{
            echo "No Messages";
        }
    }
 
?>
 
  