//Space company discussion

function space_disscussion()
{
	//alert('hello');
	 var dis_company  = document.getElementById("dis_company").value;
     var disscussion_topic = document.getElementById("disscussion_topic").value;
	
	
	
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'dis_company=' + dis_company + '&disscussion_topic=' + disscussion_topic ;
      
                    // AJAX code to submit form.
                    $.ajax({
                    type: "POST",
                    url: "script_code.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    //alert(html);
					document.getElementById("disscussion_topic").value='';
					$('#club_discuss').load('index2.php #club_discuss');
					
                    }
                    });
               
        return false;
	
}

//---club log in---

//get suggestions--

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


function change_to(str)
{
	alert("hello"+str );
	var dataString = 'todo_status=' + str ;
      
                    // AJAX code to submit form.
                    $.ajax({
                    type: "POST",
                    url: "script_code.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    //alert(html);
					document.getElementById("firstname").select();
                    }
                    });
               
        return false;
	
}

function ledger_insert() {
	alert("hello" );
	var led_cur_date  = document.getElementById("led_cur_date").value;
	var led_details  = document.getElementById("led_details").value;
    var led_credit  = document.getElementById("led_credit").value;
    var led_debit = document.getElementById("led_debit").value;
	//alert("hello" + todo_title );
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'led_cur_date=' + led_cur_date + '&led_details=' + led_details + '&led_credit=' + led_credit + '&led_debit=' +led_debit;
      
                    // AJAX code to submit form.
                    $.ajax({
                    type: "POST",
                    url: "script_code.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    //alert(html);
					
					document.getElementById("led_details").value='';
					document.getElementById("led_credit").value='';
					document.getElementById("led_debit").value='';
					$('#ledger_tbl').load('index2.php #ledger_tbl');
                    }
                    });
               
        return false;
}

function todo_insert() {
	alert("hello" );
	var todo_title  = document.getElementById("todo_title").value;
    var todo_contacts  = document.getElementById("todo_contacts").value;
    var todo_type = document.getElementById("todo_type").value;
	//alert("hello" + todo_title );
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'todo_title=' + todo_title + '&todo_contacts=' + todo_contacts + '&todo_type=' + todo_type;
      
                    // AJAX code to submit form.
                    $.ajax({
                    type: "POST",
                    url: "script_code.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    //alert(html);
					document.getElementById("todo_title").value='';
					document.getElementById("todo_contacts").value='';
					document.getElementById("todo_type").value='';
                    }
                    });
               
        return false;
}


//----add skills---

function add_user_skill()
{
	alert("hello" );
	var skill_name  = document.getElementById("skill_name").value;
    var skill_rate  = document.getElementById("skill_rate").value;
   
	
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'skill_name=' + skill_name + '&skill_rate=' + skill_rate ;
      
                    // AJAX code to submit form.
                    $.ajax({
                    type: "POST",
                    url: "script_code.php",
                    data: dataString,
                    cache: false,
                    success: function(result) {
                    //alert(html);
					document.getElementById("skill_name").value='';
					document.getElementById("skill_rate").value='';
					document.getElementById("skill5").innerHTML=result;
					 //$("#skill5").show(skill_name);
					//$("#skill5").html($("#skill5"));
					$('#skill5').load('index2.php #skill5');
					// evt.preventDefault();
					// return false;
                    }
                    });
               
        return false;
}

//---ADD folio--
function add_folio_desc()
{
	
	var folio_desc  = document.getElementById("folio_desc").value;
    //var folio_desc  = document.getElementById("folio_desc").value;
   
	
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'folio_desc=' + folio_desc ;
      
                    // AJAX code to submit form.
                    $.ajax({
                    type: "POST",
                    url: "script_code.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                   
				   
                    }
                    });
               
        return false;
}

// Bookmark Begin
        
function like(lpost_id,luser_id) {
	//alert("hello" );
    //var lpost_id=$(this).attr('id');
	//var luser_id=$(this).attr('data-src');
	alert("hello" + luser_id );
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'luser_id=' + luser_id + '&lpost_id=' + lpost_id;
      
                    // AJAX code to submit form.
                    $.ajax({
                    type: "POST",
                    url: "script_code.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    //alert(html);
					//document.getElementById("firstname").select();
					$('#news_feed_like').load('index2.php #news_feed_like');
					$('#my_industry').load('index2.php #my_industry');
					$('#my_inked').load('index2.php #my_inked');
					//$('#industry_likes').load('index2.php #industry_likes');
					//$('#inked_likes').load('index2.php #inked_likes');
					$('#noted_likes').load('index2.php #noted_likes');
					
					
                    }
                    });
               
        return false;
}

function unlike(ulpost_id,uluser_id) {
	//alert("hello" );
   // var ulpost_id=$(this).attr('id');
	//var uluser_id=$(this).attr('data-src');
	alert("hello" + ulpost_id );
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'uluser_id=' + uluser_id + '&ulpost_id=' + ulpost_id;
      
                    // AJAX code to submit form.
                    $.ajax({
                    type: "POST",
                    url: "script_code.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    //alert(html);
					//document.getElementById("firstname").select();,
					$('#news_feed_like').load('index2.php #news_feed_like');
					$('#my_industry').load('index2.php #my_industry');
					$('#my_inked').load('index2.php #my_inked');
				  // $('#industry_likes').load('index2.php #industry_likes');
					//$('#inked_likes').load('index2.php #inked_likes');
					$('#noted_likes').load('index2.php #noted_likes');
					
					
                    }
                    });
               
        return false;
}

//-- sug_ins

function ins_suggest() {
	
    var sugg_info  = document.getElementById("suggest_me_to").value;
	var sug_usrt_id  = document.getElementById("sug_usrt_id").value;
	var sug_date = document.getElementById("sug_date").value;
    if(sugg_info.length > 10) //i got a problem with this one i think
    {
     alert("Suggest info must be less than 160 characters");
     return false;
    }else
	{
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'sugg_info=' + sugg_info + '&sug_usrt_id=' +sug_usrt_id + '&sug_date=' +sug_date;
      
                    // AJAX code to submit form.
                    $.ajax({
                    type: "POST",
                    url: "script_code.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    //alert(html);
					document.getElementById("suggest_me_to").value='';
					$('#user_suggestions').load('index2.php #user_suggestions');
                    }
                    });
               
        return false;
	}
}


//---connect Suggestion--

function connect_suggest(whos_sugg,sugg_id)
{
	//var whos_sugg = document.getElementById("whos_sugg").value;
	//var sugg_id = document.getElementById("sugg_id").value;
	var dataString= 'whos_sugg='+whos_sugg+ '&sugg_id=' +sugg_id;
	 $.ajax({
                    type: "POST",
                    url: "script_code.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    //alert(html);
					//document.getElementById("suggest_me_to").value='';
					$('#connect_suggestion').load('index2.php #connect_suggestion');
					$('#connect_suggestion2').load('index2.php #connect_suggestion2');
                    }
                    });
					
		return false;
}

//---Disconnect suggest---

function disconnect_suggest(diswhos_sugg,dissugg_id)
{
	var dataString= 'diswhos_sugg='+diswhos_sugg+ '&dissugg_id=' +dissugg_id;
	 $.ajax({
                    type: "POST",
                    url: "script_code.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    //alert(html);
					//document.getElementById("suggest_me_to").value='';
					$('#connect_suggestion').load('index2.php #connect_suggestion');
					$('#connect_suggestion2').load('index2.php #connect_suggestion2');
                    }
                    });
					
		return false;
}

//----Networking-----

function inse_msg() {
	//alert("hello" );
    var chat_txt  = document.getElementById("chat_txt").value;
    var msg_time_date = document.getElementById("msg_time_date").value;
	 var msg_user_id = document.getElementById("msg_user_id").value;
	//alert("hello" + user_id );
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'chat_txt=' + chat_txt + '&msg_time_date=' + msg_time_date + '&msg_user_id=' +msg_user_id;
      
                    // AJAX code to submit form.
                    $.ajax({
                    type: "POST",
                    url: "script_code.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    //alert(html);
					document.getElementById("chat_txt").value='';
					$('#club_networks').load('index2.php #club_networks');
                    }
                    });
               
        return false;
}

//-----Tags begin

function add_refrals()
{
	alert("hello"  );
	var club_memb  = document.getElementById("club_memb").value;
    var tag_title = document.getElementById("tag_title").value;
	var vendor_name = document.getElementById("vendor_name").value;
	var vendor_phone = document.getElementById("vendor_phone").value;
    var vendor_email = document.getElementById("vendor_email").value;
	
	//alert("hello" + user_id );
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'club_memb=' + club_memb + '&tag_title=' + tag_title + '&vendor_name=' +vendor_name+ '&vendor_phone=' +vendor_phone+ '&vendor_email=' +vendor_email;
      
                    // AJAX code to submit form.
                    $.ajax({
                    type: "POST",
                    url: "script_code.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    //alert(html);
					document.getElementById("tag_title").value='';
					document.getElementById("vendor_name").value='';
					document.getElementById("vendor_phone").value='';
					document.getElementById("vendor_email").value='';
					$('#add_tags').load('index2.php #add_tags');
                    }
                    });
               
        return false;
}

//--accept tags

function acc_tags(accref_id,accwhom_id)
{
	var dataString= 'accref_id='+accref_id+ '&accwhom_id=' +accwhom_id;
	 $.ajax({
                    type: "POST",
                    url: "script_code.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    //alert(html);
					//document.getElementById("suggest_me_to").value='';
					$('#accept_tag_confirmation').load('index2.php #accept_tag_confirmation');
                    }
                    });
					
		return false;
}

function reje_tags(rejref_id,rejwhom_id)
{
	var dataString= 'rejref_id='+rejref_id+ '&rejwhom_id=' +rejwhom_id;
	 $.ajax({
                    type: "POST",
                    url: "script_code.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    //alert(html);
					//document.getElementById("suggest_me_to").value='';
					$('#accept_tag_confirmation').load('index2.php #accept_tag_confirmation');
                    }
                    });
					
		return false;
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
					$('#club_login').load('index2.php #club_login');
                    }
                    });
               
        return false;
	
}

//--remove Club--

function remove_club(club_rm_id)
{
	var dataString= 'club_rm_id='+club_rm_id;
	 $.ajax({
                    type: "POST",
                    url: "script_code.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    //alert(html);
					//document.getElementById("suggest_me_to").value='';
                    }
                    });
					
		return false;
}

//insert posts--
function ins_posts()
{
	//alert('hello');
	 var post_data  = document.getElementById("post_data").value;
    
	
	//alert("hello" + user_id );
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'post_data=' + post_data  ;
      
                    // AJAX code to submit form.
                    $.ajax({
                    type: "POST",
                    url: "script_code.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    //alert(html);
					document.getElementById("post_data").value='';
					
					$('#news_feed').load('index2.php #news_feed');
					$('#my_industry').load('index2.php #my_industry');
					$('#my_inked').load('index2.php #my_inked');
					//$('#noted_likes').load('index2.php #noted_likes');
                    }
                    });
               
        return false;
	
}

//Add Projects--

function add_work_projects()
{
	alert('hello');
	 var project_name  = document.getElementById("project_name").value;
    var project_desc = document.getElementById("project_desc").value;
	var project_image = document.getElementById("project_image").value;
	
	//alert("hello" + user_id );
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'project_name=' + project_name + '&project_desc=' + project_desc + '&project_image=' +project_image ;
      
                    // AJAX code to submit form.
                    $.ajax({
                    type: "POST",
                    url: "script_code.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    //alert(html);
					document.getElementById("project_name").value='';
					document.getElementById("project_desc").value='';
					document.getElementById("project_image").value='';
					$('#project_works').load('index2.php #project_works');
                    }
                    });
               
        return false;
	
}

function comment_insertion()
{
	alert('hello');
	var cmt_txt  = document.getElementById("cmt_txt").value;
    var cmt_post_id = document.getElementById("cmt_post_id").value;
	var cmt_ins_date = document.getElementById("cmt_ins_date").value;
	
	//alert("hello" + user_id );
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'cmt_txt=' + cmt_txt + '&cmt_post_id=' + cmt_post_id + '&cmt_ins_date=' +cmt_ins_date ;
      
                    // AJAX code to submit form.
                    $.ajax({
                    type: "POST",
                    url: "script_code.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    //alert(html);
					document.getElementById("cmt_txt").value='';
					
					$('#news_feed').load('index2.php #news_feed');
                    }
                    });
               
        return false;
	
}

function add_work_projects()
{
	
}