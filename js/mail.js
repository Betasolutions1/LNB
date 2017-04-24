 function smails()
{
	
	var subject = document.getElementById("mail_subject").value;
    var desc = document.getElementById("mail_desc").value;
	var conversation_id = document.getElementById("conversation_id").value;
	var user_form = document.getElementById("user_form").value;
	var user_to =document.getElementById("user_to").value;
	//var user_to = document.getElementById("user_to_").value;
	alert('hello');
	//alert("hello" + que_id);
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'subject=' + subject + '&desc=' + desc + '&conversation_id=' + conversation_id + '&user_form=' + user_form + '&user_to=' + user_to ;
      
                    // AJAX code to submit form.
                    $.ajax({
                    type: "POST",
                    url: "send_mail.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    //alert(html);
					document.getElementById("mail_desc").value='';
					document.getElementById("mail_subject").value='';
				   // $("#mail_msgs").load("get_mail.php?c_id="+conversation_id, 2000);
   					 setInterval(function(){
      $("#mail_msgs").load("get_mail.php?c_id="+c_id);
    }, 2000);
	$("#mail_msgs").scrollTop($("#mail_msgs")[0].scrollHeight);

					//$('#txtAnswe').load('forum_ans.php #txtAnswe');
                    }
                    });
               
        return false;
}



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
        $(".display-message").load("get_mail.php?c_id="+c_id);
    }, 2000);
 
    $(".display-message").scrollTop($(".display-message")[0].scrollHeight);
});