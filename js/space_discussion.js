

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
xmlhttp.open("GET","industry_questions.php?as="+ans,true);
xmlhttp.send();
}


function insert_answer()
{
	//alert('hello');
	var que_id = document.getElementById("que_id").value;
    var ans_frms = document.getElementById("ans_frms").value;
	//var set_indus = document.getElementById("set_indus").value;
	
	//alert("hello" + que_id);
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
					$('#txtAnswe').load('forum_ans.php #txtAnswe');
                    }
                    });
               
        return false;
}