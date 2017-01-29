<div class="accordion">
                                            <a href="#" class="active"><i class="fa fa-user"></i> TODO</a>
                                            <div class="sub-nav active">
                                               
                                                <div id="todo" class="panel">
                                                    <h2 class="panel-title">Tasks</h2>
                                                    <!--<h2 class="panel-title">Tasks </h2>-->
                                                    <div class="w_todo td_div">
                                                        <span class=" todo_right"><a href="#" data-remodal-target="modal"> <i class="fa fa-plus "></i></a></span>
                                                        <!-- <span class="todo_right " ><a href="#"><i class="fa fa-id-card"></i></a></span>-->
                                                        <span class="todo_right " id="datepicker2"><a href="#" data-toggle=""><i class="fa fa-calendar "></i></a></span>
                                                        <span id="test" class="todo_right "><a href="#" id="check" onclick="Check()"><i class="fa fa-check-square-o "></i></a></span>
                                                    </div>
                                                    <div class="panel-content">
                                                        <form>
                                                            <fieldset>
                                                                <ul class="tasks">
                                                                    <li class="task">
                                                                        <input type="checkbox" name="todo-tasks" id="task1" checked="checked" />
                                                                        <label for="task1">Prepare for Session
                                                                            <span class="line-through"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="task">
                                                                        <input type="checkbox" name="todo-tasks" id="task2" checked="checked" />
                                                                        <label for="task2">Assign Tasks
                                                                            <span class="line-through"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="task">
                                                                        <input type="checkbox" name="todo-tasks" id="task3" />
                                                                        <label for="task3">Be there on time
                                                                            <span class="line-through"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="task">
                                                                        <input type="checkbox" name="todo-tasks" id="task4" />
                                                                        <label for="task4">Start Session
                                                                            <span class="line-through"></span>
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="ws_ta_tab_a"><i class="fa fa-comments"></i> LEDGER</a>
                                            <div class="sub-nav">
                                                <div class="html chat">
                                                    <div class="user user-khadkamhn clearfix">
                                                        <span class="text-msg pull-right">I'm so unhappy :(</span>
                                                    </div>
                                                    <div class="user user-khadkamhn clearfix">
                                                        <span class="text-msg pull-right">I have no invitation in dribbble yet. why?</span>
                                                    </div>
                                                    <div class="user user-dribble clearfix">
                                                        <span class="photo pull-left" data-username="dribbble"><i class="fa fa-dribbble"></i></span>
                                                        <span class="text-msg">Don't worry dude!</span>
                                                    </div>
                                                    <div class="user user-dribble clearfix">
                                                        <span class="photo pull-left" data-username="dribbble"><i class="fa fa-dribbble"></i></span>
                                                        <span class="text-msg">Some awesome people may find you and invite you soon.... :)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#"><i class="fa fa-envelope"></i> CLIENTS <span class="pull-right alert-numb">21</span></a>
                                            <div class="sub-nav">
                                                <a href="#">Inbox <span class="pull-right alert-numb">11</span></a>
                                                <a href="#">Important <span class="pull-right alert-numb">10</span></a>
                                                <a href="#">Sent</a>
                                                <a href="#">Draft</a>
                                                <a href="#">Trash</a>
                                                <a href="#">All messages</a>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        
      <!--Todo Model Code-->                                  
      <div class="remodal" data-remodal-id="modal">
  <a data-remodal-action="close" class="remodal-close"></a>

<form class="form-horizontal" role="form" method="post" action="script_code.php">
  <div>
     
                                                                                        <div class="form-group">
                                                                                            <label class="col-sm-2 control-label">TITLE</label>
                                                                                            <div class="col-sm-10">
                                                                                                <input type="text" class="form-control" id="todo_title" name="todo_title" placeholder="TITLE" name="todo_title">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label class="col-sm-2 control-label">Date</label>
                                                                                            <div class="col-sm-10">
                                                                                         
                                                                                                <input type="text" class="form-control" id="todo_date" name="todo_date" placeholder="Date" name="todo_date">
                                                                                            </div>
                                                                                        </div>
                                                                                        
                                                                                        <div class="form-group">
                                                                                            <label for="type" class="col-sm-2 control-label">TYPE</label>
                                                                                            <div class="col-sm-10">
                                                                                                <div class="row">
                                                                                                    <select class="selectpicker col-md-12 form-control" name="todo_type" id="todo_type">
                                                                                                        <option>CONSIGNMENTS</option>
                                                                                                        <option>MEETINGS</option>
                                                                                                        <option>CALL</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                                <!--<input type="text" class="form-control" id="inputEmail3" placeholder="Email">-->
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="contact" class="col-sm-2 control-label">CONTACT</label>
                                                                                            <div class="col-sm-10">
                                                                                                <div class="row">
                                                                                                    <select class="selectpicker col-md-12 form-control" name="todo_contacts" id="todo_contacts">
                                                                                                        <option>Mustard</option>
                                                                                                        <option>Ketchup</option>
                                                                                                        <option>Relish</option>
                                                                                                        <option>Tent</option>
                                                                                                        <option>Flashlight</option>
                                                                                                        <option>Toilet Paper</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                               
                                                                                            </div>
                                                                                           
                                                                                        </div>
                                                                                    
  </div>
  <br>
 
  <button  data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
  <button type="submit" data-remodal-action="confirm" name="to_insert" onClick="todo_insert();" class="remodal-confirm">INK</button>
  
   </form>
		

  <!--<a data-remodal-action="cancel" class="remodal-cancel" href="#">Cancel</a>
  <a data-remodal-action="confirm" class="remodal-confirm" href="#">OK</a>-->
</div>
      <!--End todo Model Code-->
                                        