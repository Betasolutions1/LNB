
<nav class="navbar navbar-inverse navbar-fixed-top " style="height:10%;border-bottom:3px solid #808080;">
						<div class="container" align="center" style="padding-left:9%;height:100%;position:relative;top:10%;">
								<div class="navbar-header ">
										<!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
										</button> -->
										<a class="navbar-brand" href="#" style="font-family:Stencil Std;color: #808080;">
		LN BUSINESS</a>
								</div>
								<div id="navbar" class="collapse navbar-collapse">
										<ul class="nav navbar-nav">

												<li style=" padding-left:30px; padding-top:10px; padding-right:20px; ">
													<div style="background-color:#808080;padding-right:5px;">
                                                     <form method="get" action="search.php">
														<input type="text" name="search_data" id="search_data" style="width:350px; height:30px;background-color:#808080; border:0px; color:#fff;margin-left:5px;">
														<i class="fa   fa-search" style="color:#fff; padding-top:5px;"></i>
                                                        <input type="submit" name="sub_search" style="display:none;">
                            </form>
												</div>
												</li>
												<li>
													<i class="fa fa-2x fa-id-card " style="padding-left:0px; padding-right:25px; margin-top:11px;"></i>
												</li>
												<li  class="active" >
														<a href="forum.php" style="font-family:Stencil Std; font-size:24px; padding-left:25px; padding-right:25px; background-color:#808080;color:#fff;">F</a>
												</li>
												<li>
														<a href="mail.php" style="font-family:Stencil Std; font-size:24px; padding-left:25px; padding-right:25px; color: #808080;">M</a>
												</li>
																							 <li style="height:50px;line-height:10px;padding-top:3px;text-align:right;">
														<p class="diary" style="padding-top:0px; padding-left:50px;color:#808080">
															<span class="day" style="font-family:Stencil Std; font-size:10px;"><?php echo date("l"); ?></span>
															<br>
															<span class="month" style="font-family:Stencil Std; font-size:10px;"><?php echo date("F"); ?></span>
															<br>
															<span class="year" style="font-family:Stencil Std; font-size:10px;"><?php echo date("Y"); ?></span></p>
												</li>
												<li style="height:50px;">
														<!--<hr style="width:0px; height:10px;" class="vertical" />-->
														<div style="border-left:2px solid #d3d3d3;margin-top:6px; margin-left:4px; margin-right:4px;height:40px;" class="line_div">
</div>
												</li>
												<li style="height:50px; float:right; padding-top:20px;">
														<span class="date" style="font-family:Stencil Std; font-size:40px; padding-top:0px; padding-right:10px;color:#808080;"><?php echo date("j"); ?></span>
												</li>
										</ul>
								</div>
								<!--/.nav-collapse -->
						</div>
				</nav>
