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

	<form class="form-horizontal" role="form" method="post" action="">
  <div>
     
                                                                                        <div class="form-group">
                                                                                            <label class="col-sm-2 control-label">Date</label>
                                                                                            <div class="col-sm-10">
                                                                                            <?php $date=date('Y-m-d');?>
                                                                                                <input type="text" class="form-control" id="led_cur_date" placeholder="" value="<?php echo $date;?>" name="led_cur_date" readonly/>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label class="col-sm-2 control-label">Details</label>
                                                                                            <div class="col-sm-10">
                                                                                                <input type="text" class="form-control" id="led_details" placeholder="" name="led_details">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label class="col-sm-2 control-label">Credit</label>
                                                                                            <div class="col-sm-10">
                                                                                                <input type="text" class="form-control" id="led_credit" placeholder="" name="led_credit">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label class="col-sm-2 control-label">Debit</label>
                                                                                            <div class="col-sm-10">
                                                                                                <input type="text" class="form-control" id="led_debit" placeholder="" name="led_debit">
                                                                                            </div>
                                                                                        </div>
                                                                                        
                                                                                       
                                                                                           
                                                                                            
                                                                                           <?php /*?> <div class="form-group">
                                                                                                <div class="col-sm-offset-2 col-sm-10">
</div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <div class="col-sm-offset-2 col-sm-10">
                                                                                                    <input type="submit" class="btn btn-primary" name="todo_ins" value="INK" onClick="ledger_insert();">
                                                                                                </div>
                                                                                            </div><?php */?>
                                                                                     
                                                                                    
  </div>
  <br>
 
  <button  data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
  <button type="submit" data-remodal-action="confirm" onClick="ledger_insert();" class="remodal-confirm">Credit Or Debit</button>
  
   </form>
		

  <a data-remodal-action="cancel" class="remodal-cancel" href="#">Cancel</a>
  <a data-remodal-action="confirm" class="remodal-confirm" href="#">OK</a>
</div>
      <!--End todo Model Code-->
                                        