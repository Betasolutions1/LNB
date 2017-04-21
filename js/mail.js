
$(document).ready(function(){
    /*post message via ajax*/
    $("#mail_rply").on("click", function(){
        var subject = $.trim($("#mail_subject").val()),
			desc = $.trim($("#mail_desc").val()),
            conversation_id = $.trim($("#conversation_id").val()),
            user_form = $.trim($("#user_form").val()),
            user_to = $.trim($("#user_to").val()),
            error = $("#error");
 
        if((subject != "") && (desc != "") && (conversation_id != "") && (user_form != "") && (user_to != "")){
            error.text("Sending...");
            $.post("send_mail.php",{subject:subject,desc:desc,conversation_id:conversation_id,user_form:user_form,user_to:user_to}, function(data){
                error.text(data);
                //clear the message box
                $("#mail_subject").val("");
				$("#mail_desc").val("");
            });
        }
    });
 
 
    //get message
    c_id = $("#conversation_id").val();
    //get new message every 2 second
    setInterval(function(){
        $("#mail_msgs").load("get_mail.php?c_id="+c_id);
    }, 2000);
 
    $("#mail_msgs").scrollTop($("#mail_msgs")[0].scrollHeight);
});