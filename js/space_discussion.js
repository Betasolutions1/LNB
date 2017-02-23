

//-------Add Fourm Quesations------

function Fourmquestions()
{
	alert('hello');
	var forum_question = document.getElementById("forum_question").value;
    var quest_desc = document.getElementById("quest_desc").value;
	var set_indus = document.getElementById("set_indus").value;
	
	alert("hello" + set_indus);
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'forum_question=' + forum_question + '&quest_desc=' + quest_desc + '&set_indus=' + set_indus;
      
                    // AJAX code to submit form.
                    $.ajax({
                    type: "POST",
                    url: "script2.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    //alert(html);
					document.getElementById("forum_question").value='';
					document.getElementById("quest_desc").value='';
					$('#txtQuest').load('forum.php #txtQuest');
					$('#frm_Qus').load('forum.php #frm_Qus');
                    }
                    });
               
        return false;
}

function get_industryquestions(ind)
{
	if (ind=="") {
    document.getElementById("txtQuest").innerHTML="";
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
      document.getElementById("txtQuest").innerHTML=this.responseText;
    }
  }
xmlhttp.open("GET","industry_questions.php?q="+ind,true);
xmlhttp.send();
}

function get_industryanswers(ans)
{
	if (ans=="") {
    document.getElementById("txtAnswe").innerHTML="";
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
      document.getElementById("txtAnswe").innerHTML=this.responseText;
    }
  }
xmlhttp.open("GET","industry_answer.php?as="+ans,true);
xmlhttp.send();
}


function insert_answer(faid)
{
	//alert('hello');
	var que_id = document.getElementById("que_id_"+faid).value;
    var ans_frms = document.getElementById("ans_frms_"+faid).value;
	//var set_indus = document.getElementById("set_indus").value;
	
	alert("hello" + que_id);
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'que_id=' + que_id + '&ans_frms=' + ans_frms ;
      
                    // AJAX code to submit form.
                    $.ajax({
                    type: "POST",
                    url: "script2.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    //alert(html);
					document.getElementById("ans_frms").value='';
					$('#workspace-vr').load('forum_ans.php #workspace-vr');
                    }
                    });
               
        return false;
}

 function sendmails(mci)
{
	
	var recer_user_id = document.getElementById("recer_user_id_"+mci).value;
    var mail_subject = document.getElementById("mail_subject_"+mci).value;
	var mail_desc = document.getElementById("mail_desc_"+mci).value;
	alert('hello'+mci);
	//alert("hello" + que_id);
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'recer_user_id=' + recer_user_id + '&mail_subject=' + mail_subject + '&mail_desc=' + mail_desc ;
      
                    // AJAX code to submit form.
                    $.ajax({
                    type: "POST",
                    url: "script2.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    //alert(html);
					document.getElementById("mail_desc").value='';
					document.getElementById("mail_subject").value='';
					//$('#txtAnswe').load('forum_ans.php #txtAnswe');
                    }
                    });
               
        return false;
}