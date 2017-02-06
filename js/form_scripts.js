

//todo status list display


x=false;
function Check(){
    if(x){    
document.getElementById("screen").style.display='inline';
document.getElementById("screen1").style.display='none';
x=false;
    }
    else{
 document.getElementById("screen").style.display='none'; 
     document.getElementById("screen1").style.display='inline';   
x=true;    
    }
    
}


//---Change pwd form Club--
function change_pwd()
{
	//alert('hello');
	 var old_pwd  = document.getElementById("old_pwd").value;
    var new_password = document.getElementById("new_password").value;
	var re_password = document.getElementById("re_password").value;
	
	//alert("hello" + user_id );
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'old_pwd=' + old_pwd + '&new_password=' + new_password + '&re_password=' +re_password ;
      
                    // AJAX code to submit form.
                    $.ajax({
                    type: "POST",
                    url: "script_code.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    //alert(html);
					document.getElementById("new_password").value='';
					document.getElementById("old_pwd").value='';
					document.getElementById("re_password").value='';
					
                    }
                    });
               
        return false;
	
}

// Todo Insert

function todo_insert()
{
	alert('hello');
	var todo_title  = document.getElementById("todo_title").value;
    var todo_type = document.getElementById("todo_type").value;
	var todo_contacts = document.getElementById("todo_contacts").value;
	
	//alert("hello" + user_id );
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'todo_title=' + todo_title + '&todo_type=' + todo_type + '&todo_contacts=' +todo_contacts ;
      
                    // AJAX code to submit form.
                    $.ajax({
                    type: "POST",
                    url: "script_code.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    //alert(html);
					document.getElementById("todo_title").value='';
					document.getElementById("todo_type").value='';
					document.getElementById("todo_contacts").value='';
					
                    }
                    });
               
        return false;
	
}


// Club suggestions

function Get_clb_user_sugg(str)
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
xmlhttp.open("GET","club_user_sugg.php?q="+str,true);
xmlhttp.send();
}


//Ledger Insertion


