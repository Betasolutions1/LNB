function ins_abu_Lnb()
{
	alert('hello');
	 var about_data  = document.getElementById("about_data").value;
   
	//alert("hello" + user_id );
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'about_data=' + about_data ;
      
                    // AJAX code to submit form.
                    $.ajax({
                    type: "POST",
                    url: "admin_script.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    //alert(html);
					document.getElementById("about_data").value='';
					
					
                    }
                    });
               
        return false;
	
}
//add help

function ins_help_Lnb()
{
	alert('hello');
	 var help_data  = document.getElementById("help_data").value;
   
	//alert("hello" + user_id );
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'help_data=' + help_data ;
      
                    // AJAX code to submit form.
                    $.ajax({
                    type: "POST",
                    url: "admin_script.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    //alert(html);
					document.getElementById("help_data").value='';
					
					
                    }
                    });
               
        return false;
	
}

//add advertisements

function ins_advertisements()
{
	alert('hello');
	 var Advertise_name  = document.getElementById("Advertise_name").value;
   	var advertise_desc = document.getElementById("advertise_desc").value;
	//alert("hello" + user_id );
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'Advertise_name=' + Advertise_name + '&advertise_desc=' + advertise_desc;
      
                    // AJAX code to submit form.
                    $.ajax({
                    type: "POST",
                    url: "admin_script.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    //alert(html);
					document.getElementById("Advertise_name").value='';
					document.getElementById("advertise_desc").value='';
					
					
                    }
                    });
               
        return false;
}

//add clubs

function ins_clubs()
{
	alert('hello');
	 var club_name  = document.getElementById("club_name").value;
   	var club_desc = document.getElementById("club_desc").value;
	//alert("hello" + user_id );
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'club_name=' + club_name + '&club_desc=' + club_desc;
      
                    // AJAX code to submit form.
                    $.ajax({
                    type: "POST",
                    url: "admin_script.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    //alert(html);
					document.getElementById("club_name").value='';
					document.getElementById("club_desc").value='';
					
					
                    }
                    });
               
        return false;
}

function ins_terms_condi_Lnb()
{
	alert('hello');
	 var trmcon_data  = document.getElementById("trmcon_data").value;
   
	//alert("hello" + user_id );
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'trmcon_data=' + trmcon_data ;
      
                    // AJAX code to submit form.
                    $.ajax({
                    type: "POST",
                    url: "admin_script.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    //alert(html);
					document.getElementById("trmcon_data").value='';
					
					
					
                    }
                    });
               
        return false;
}

function ins_career_Lnb()
{
	alert('hello');
	 var career_data  = document.getElementById("career_data").value;
   
	//alert("hello" + user_id );
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'career_data=' + career_data ;
      
                    // AJAX code to submit form.
                    $.ajax({
                    type: "POST",
                    url: "admin_script.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    //alert(html);
					document.getElementById("career_data").value='';
					
					
					
                    }
                    });
               
        return false;
}
// display users for adding into clubs

function showusers(str)
{
	
if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
xmlhttp.open("GET","nonclub_mem.php?q="+str,true);
xmlhttp.send();
}