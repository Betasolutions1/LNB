

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
					
					//$('#todo_clients').load('index.php #todo_clients');
                    }
                    });
               
        return false;
}