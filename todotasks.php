<?php
include 'config.php';
session_start();
$task_type=$_GET['q'];
?> 
 
 <div id="todo_tasks_refresh">
                                                    <div class="panel-content clo-lg-9" id="screen" style="display:none;height:400px; overflow-y:scroll;" id="screen1">
                                                        <form>
                                                            <fieldset>
                                                                <ul class="tasks">
                                                                    <?php
                                                                    $td_cu=0;
                                                                    $tdl=mysqli_query($conn,"select * from todo_insertions where todo_status='0' AND todo_user_id='".$_SESSION['id']."' AND todo_type='".$task_type."'");
                                                                    while($ret_td=mysqli_fetch_array($tdl))
                                                                    {
                                                                        ++$td_cu;
                                                                        ?>
                                                                        <li class="task">
                                                                            <?php if($ret_td['todo_status']==0)
                                                                            {

                                                                                ?>
                                                                                <input type="checkbox" name="todo-tasks" id="task<?php echo $td_cu;?>" value="<?php echo $ret_td['todo_id'];?>"   onClick="return change_to(this.value);"/>
                                                                                <?php
                                                                            }
                                                                            ?>
                                                                            <label for="task<?php echo $td_cu;?>"><?php echo $ret_td['todo_label'];?>
                                                                                <span class="line-through"></span>

                                                                            </label>
                                                                            <p class="pull-right alert-numb" style="padding-left:250px;     font-size: x-small;     color: grey; margin-top:-23px;    "><?php echo $ret_td['todo_datetime']?></p>
                                                                        </li>
                                                                        <?php
                                                                    }

                                                                    ?>

                                                                </ul>
                                                            </fieldset>
                                                        </form>
                                                    </div>

                                                    <!--Invisable Panel-->

                                                    <div class="panel-content col-lg-9" style="display:none;height:400px; overflow-y:scroll;" id="screen1">
                                                        <form method="post">
                                                            <fieldset>
                                                                <ul class="tasks">
                                                                    <?php
                                                                    $td_cu=0;
                                                                    $tdl=mysqli_query($conn,"select * from todo_insertions where todo_status='1' AND todo_user_id='".$_SESSION['id']."' AND todo_type='".$task_type."'");
                                                                    while($ret_td=mysqli_fetch_array($tdl))
                                                                    {
                                                                        ++$td_cu;
                                                                        ?>
                                                                        <li class="task">
                                                                            <?php if($ret_td['todo_status']!=0)
                                                                            {

                                                                                ?>
                                                                                <input type="checkbox" name="todo-tasks" id="task<?php echo $td_cu;?>" checked="checked"  value="<?php echo $ret_td['todo_id'];?>"  onClick="return changestatus(this.value);"/>
                                                                                <?php
                                                                            }
                                                                            ?>
                                                                            <label for="task<?php echo $td_cu;?>"><?php echo $ret_td['todo_label'];?>
                                                                                <span class="line-through"></span>

                                                                            </label>
                                                                            <p class="pull-right alert-numb" style="padding-left:250px;     font-size: x-small;     color: grey;  margin-top:-23px; "><?php echo $ret_td['todo_datetime']?></p>
                                                                        </li>
                                                                        <?php
                                                                    }

                                                                    ?>

                                                                </ul>
                                                            </fieldset>
                                                        </form>
                                                    </div>
												</div>