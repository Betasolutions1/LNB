



function club_login()
{
	alert("hello" );
    var club_user_name  = document.getElementById("club_user_name").value;
    var club_pwd = document.getElementById("club_pwd").value;
	
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'club_user_name=' + club_user_name + '&club_pwd=' + club_pwd;
      
                    // AJAX code to submit form.
                    $.ajax({
                    type: "POST",
                    url: "script_code.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    //alert(html);
					document.getElementById("club_user_name").value='';
					document.getElementById("club_pwd").value='';
					$('#club_login_acce').load('index2.php #club_login_acce');
                    }
                    });
               
        return false;
}