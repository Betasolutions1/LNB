
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
                                                    <div class="panel-content" id="screen">
                                                        <form>
                                                            <fieldset>
                                                                <ul class="tasks">
                                                                 <?php
																	$td_cu=0;
                                                                    $tdl=mysqli_query($conn,"select * from user_todolist where todo_status='0' AND todo_user_id='".$_SESSION['id']."'");
																	while($ret_td=mysqli_fetch_array($tdl))
																	{
																		++$td_cu;
																	?>
                                                                    <li class="task">
                                                                     <?php if($ret_td['todo_status']!=0)
																	{
																		
																	?>
                                                                        <input type="checkbox" name="todo-tasks" id="task<?php echo $td_cu;?>" checked="checked" />
                                                                          <?php
																	}else
																	{
																		?>
                                                                        <input type="checkbox" name="todo-tasks" id="task<?php echo $td_cu;?>" value="<?php echo $ret_td['todo_id'];?>"   onClick="change_to(this.value);"/>
                                                                        <?php
																	}
																		?>
                                                                        <label for="task<?php echo $td_cu;?>"><?php echo $ret_td['todo_label'];?>
                                                                            <span class="line-through"></span>
                                                                            
                                                                        </label>
                                                                        <p class="pull-right alert-numb" style="padding-left:250px;     font-size: x-small;     color: grey;    padding-top: 10px; "><?php echo $ret_td['todo_datetime']?></p>
                                                                    </li>
                                                                     <?php
																	}
																	
																		?>
                                                                  
                                                                </ul>
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                    
                                                    <!--Invisable Panel-->
                                                    
                                                      <div class="panel-content" style="display:none" id="screen1">
                                                        <form>
                                                            <fieldset>
                                                                <ul class="tasks">
                                                                  <?php
																	$td_cu=0;
                                                                    $tdl=mysqli_query($conn,"select * from user_todolist where todo_status='1' AND todo_user_id='".$_SESSION['id']."'");
																	while($ret_td=mysqli_fetch_array($tdl))
																	{
																		++$td_cu;
																	?>
                                                                    <li class="task">
                                                                     <?php if($ret_td['todo_status']!=0)
																	{
																		
																	?>
                                                                        <input type="checkbox" name="todo-tasks" id="task<?php echo $td_cu;?>" checked="checked" />
                                                                          <?php
																	}else
																	{
																		?>
                                                                        <input type="checkbox" name="todo-tasks" id="task<?php echo $td_cu;?>" value="<?php echo $ret_td['todo_id'];?>"   onClick="change_to(this.value);"/>
                                                                        <?php
																	}
																		?>
                                                                        <label for="task<?php echo $td_cu;?>"><?php echo $ret_td['todo_label'];?>
                                                                            <span class="line-through"></span>
                                                                            
                                                                        </label>
                                                                        <p class="pull-right alert-numb" style="padding-left:250px;     font-size: x-small;     color: grey;    padding-top: 10px; "><?php echo $ret_td['todo_datetime']?></p>
                                                                    </li>
                                                                     <?php
																	}
																	
																		?>
                                                                  
                                                                </ul>
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <a href="#" class="ws_ta_tab_a"><i class="fa fa-comments"></i> LEDGER</a>
                                            <div class="sub-nav">
                                             <div class="w_todo td_div">
                                                            <span class=" todo_right"><a href="#modal1" > <i class="fa fa-plus "></i></a></span>
                                                             <span class="todo_right " ><a href="#"><i class="fa fa-id-card"></i></a></span>
                                                           
                                                        </div>
                                                <div class="html chat">
                                                     <table class="dynamicTable scrollVertical table table-primary " style="height:20px; overflow-y:scroll;">
    <!-- Table heading -->
    <thead style="background:#8BBF61;">
        <tr style="background:#8BBF61;">
            <th>Date</th>
            <th>Details</th>
            <th>Debit</th>
            <th>Credit</th>
            <th>Balance</th>
        </tr>
    </thead>
    <!-- // Table heading END -->
    <!-- Table body -->
    <tbody>
    <?php
    $led_de=mysqli_query($conn,"select * from user_ledger where user_id='".$_SESSION['id']."'");
	while($led_ret=mysqli_fetch_array($led_de))
	{
	?>
        <!-- Table row -->
        <tr class="gradeX">
            <td><?php echo $led_ret['date'];?></td>
            <td><?php echo $led_ret['led_reason'];?></td>
            <td><?php echo $led_ret['debit'];?></td>
            <td class="center"><?php echo $led_ret['credit'];?></td>
            <td class="center"><?php echo $led_ret['total_bal'];?></td>
        </tr>
        <!-- // Table row END -->
       
       <?php
	}
	?>
        
       
    </tbody>
    <!-- // Table body END -->
</table>
                                                </div>
                                            </div>
                                            <a href="#"><i class="fa fa-envelope"></i> CLIENTS <span class="pull-right alert-numb">21</span></a>
                                            <div class="sub-nav">
                                                   <div class="html chat">
                                                     <table class="dynamicTable scrollVertical table table-primary " style="height:20px; overflow-y:scroll;">
    <!-- Table heading -->
    <thead>
        <tr>
            <th>Name</th>
            <th>Company</th>
            <th>Phone_no</th>
            <th>Details</th>
            
        </tr>
    </thead>
    <!-- // Table heading END -->
    <!-- Table body -->
    <tbody>
    <?php
    $cli_de=mysqli_query($conn,"select * from user_clients where user_id='".$_SESSION['id']."'");
	while($cli_ret=mysqli_fetch_array($cli_de))
	{
	?>
        <!-- Table row -->
        <tr class="gradeX">
            <td><?php echo $cli_ret['client_name'];?></td>
            <td><?php echo $cli_ret['client_company'];?></td>
            <td><?php echo $cli_ret['client_phone'];?></td>
            <td class="center"><?php echo $cli_ret['clients_details'];?></td>
           
        </tr>
        <!-- // Table row END -->
       
       <?php
	}
	?>
        
       
    </tbody>
    <!-- // Table body END -->
</table>
</div>
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
         
         
         
         
         <!--Ledger Model begin Panel-->                               
         
          <div class="remodal" data-remodal-id="modal1" id="modal1" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
  <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
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
                                                                                        
                                                                                       
                                                                                           
                                                                                            
                                                                                          
                                                                                     
                                                                                    
  </div>
  <br>
 
  <button  data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
  <button type="submit" data-remodal-action="confirm" onClick="ledger_insert();" class="remodal-confirm">Credit Or Debit</button>
  
   </form>
</div>
    
         
         <!--Ledger End MOdel-->