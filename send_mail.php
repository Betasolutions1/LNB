
<?php
error_reporting(0);
include 'config.php';
session_start();
if(!$_SESSION['Email'])
{
	header("location:signup.php");
}

   
    //post message
    if(isset($_POST['subject'])){
        $subject = mysqli_real_escape_string($conn, $_POST['subject']);
		$mail_desc =mysqli_real_escape_string($conn,$_POST['mail_desc']);
        $conversation_id = mysqli_real_escape_string($conn, $_POST['conversation_id']);
        $user_form = mysqli_real_escape_string($conn, $_POST['user_form']);
        $user_to = mysqli_real_escape_string($conn, $_POST['user_to']);
		
		
 
        //decrypt the conversation_id,user_from,user_to
        $conversation_id = base64_decode($conversation_id);
       $user_form = base64_decode($user_form);
      $user_to = base64_decode($user_to);
	  
	  //INSERT INTO `send_mails` VALUES ('','$conversation_id','$user_form','$user_to','$message')
	  
 		//
        //insert into `messages`
        $q = mysqli_query($conn, "INSERT INTO `send_mails`( `conversation_id`, `recive_user_id`, `sender_user_id`, `subject`, `matter_desc`) VALUES ('$conversation_id','$user_to','$user_form','$subject','$mail_desc')");
        if($q){
            echo "Posted";
        }else{
            echo "Error";
        }
    }
?>