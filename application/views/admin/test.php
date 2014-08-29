<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dashboard | Modern Admin</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>admin_css/960.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>admin_css/reset.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>admin_css/text.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>admin_css/green.css" />
<link type="text/css" href="<?php echo base_url();?>admin_css/smoothness/ui.css" rel="stylesheet" />  
    <script type="text/javascript" src="../../ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>admin_js/blend/jquery.blend.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>admin_js/ui.core.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>admin_js/ui.sortable.js"></script>    
    <script type="text/javascript" src="<?php echo base_url();?>admin_js/ui.dialog.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>admin_js/ui.datepicker.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>admin_js/effects.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>admin_js/flot/jquery.flot.pack.js"></script>
    <!--[if IE]>
    <script language="javascript" type="text/javascript" src="js/flot/excanvas.pack.js"></script>
    <![endif]-->
	<!--[if IE 6]>
	<link rel="stylesheet" type="text/css" href="css/iefix.css" />
	<script src="js/pngfix.js"></script>
    <script>
        DD_belatedPNG.fix('#menu ul li a span span');
    </script>        
    <![endif]-->
    <script id="source" language="javascript" type="text/javascript" src="js/graphs.js"></script>

</head>

<body>
<!-- WRAPPER START -->
<div class="container_16" id="wrapper">	
<!-- HIDDEN COLOR CHANGER -->      
      <div style="position:relative;">
      	<div id="colorchanger">
        	<a href="dashboard_red.html"><span class="redtheme">Red Theme</span></a>
            <a href="dashboard.html"><span class="bluetheme">Blue Theme</span></a>
            <a href="dashboard_green.html"><span class="greentheme">Green Theme</span></a>
        </div>
      </div>
  	<!--LOGO-->
	<div class="grid_8" id="logo">Profi Admin - Website Administration</div>
    <div class="grid_8">
<!-- USER TOOLS START -->
      <div id="user_tools"><span><a href="#" class="mail">(1)</a> Welcome <a href="#">Admin Username</a>  |  <a class="dropdown" href="#">Change Theme</a>  |  <a href="<?php echo base_url();?>super_admin/logout">Logout</a></span></div>
    </div>
<!-- USER TOOLS END -->    
<div class="grid_16" id="header">
<!-- MENU START -->
<div id="menu">
	<ul class="group" id="menu_group_main">
		<li class="item first" id="one"><a href="#" class="main current"><span class="outer"><span class="inner dashboard">Dashboard</span></span></a></li>
        <li class="item middle" id="two"><a href="<?php echo base_url(); ?>super_admin/add_category" class="main"><span class="outer"><span class="inner content">Category</span></span></a></li>
        <li class="item middle" id="three"><a href="#"><span class="outer"><span class="inner reports png">Reports</span></span></a></li>
        <li class="item middle" id="four"><a href="#" class="main"><span class="outer"><span class="inner users">Users</span></span></a></li>
		<li class="item middle" id="five"><a href="#" class="main"><span class="outer"><span class="inner media_library">Media Library</span></span></a></li>        
		<li class="item middle" id="six"><a href="#" class="main"><span class="outer"><span class="inner event_manager">Event Manager</span></span></a></li>        
		<li class="item middle" id="seven"><a href="#" class="main"><span class="outer"><span class="inner newsletter">Newsletter</span></span></a></li>        
		<li class="item last" id="eight"><a href="<?php echo base_url(); ?>super_admin/change_logo" class="main"><span class="outer"><span class="inner settings">Change Logo</span></span></a></li>        
    </ul>
</div>
<!-- MENU END -->
</div>
<!--<div class="grid_16">
 TABS START 
   
<div id="tabs">
         <div class="container">
            <ul>
                      <li><a href="#" class="current"><span>Dashboard elements</span></a></li>
                      <li><a href="forms_green.html"><span>Content Editing</span></a></li>
                      <li><a href="#"><span>Submenu Link 3</span></a></li>
                      <li><a href="#"><span>Submenu Link 4</span></a></li>
                      <li><a href="#"><span>Submenu Link 5</span></a></li>
                      <li><a href="#"><span>Submenu Link 6</span></a></li>
                      <li><a href="#" class="more"><span>More Submenus</span></a></li>            
           </ul>
        </div>
    </div>

 TABS END     
</div>-->
<!-- HIDDEN SUBMENU START -->
<!--<div class="grid_16" id="hidden_submenu">
	  <ul class="more_menu">
		<li><a href="#">More link 1</a></li>
		<li><a href="#">More link 2</a></li>  
	    <li><a href="#">More link 3</a></li>    
        <li><a href="#">More link 4</a></li>                               
      </ul>
	  <ul class="more_menu">
		<li><a href="#">More link 5</a></li>
		<li><a href="#">More link 6</a></li>  
	    <li><a href="#">More link 7</a></li> 
        <li><a href="#">More link 8</a></li>                                  
      </ul>
	  <ul class="more_menu">
		<li><a href="#">More link 9</a></li>
		<li><a href="#">More link 10</a></li>  
	    <li><a href="#">More link 11</a></li>  
        <li><a href="#">More link 12</a></li>                                 
      </ul>            
  </div>-->
<!-- HIDDEN SUBMENU END -->  

<!-- CONTENT START -->
    <div class="grid_16" id="content">
    <!--  TITLE START  --> 
    <div class="grid_9">
    <h1 class="dashboard">Dashboard</h1>
    </div>
    <!--RIGHT TEXT/CALENDAR-->
    <div class="grid_6" id="eventbox"><a href="#" class="inline_calendar">You don't have any events for today! Yay!</a>
    	<div class="hidden_calendar"></div>
    </div>
    <!--RIGHT TEXT/CALENDAR END-->
    <div class="clear">
    </div>
    <!--  TITLE END  -->    
    <!-- #PORTLETS START -->
    <div id="portlets">
    <!-- FIRST SORTABLE COLUMN START -->
     
   <?php echo $admin_maincontent; ?>
    
    
      <!-- FIRST SORTABLE COLUMN END -->
      <!-- SECOND SORTABLE COLUMN START -->
     
      
      
	<!--  SECOND SORTABLE COLUMN END -->
    <div class="clear"></div>
    <!--THIS IS A WIDE PORTLET-->
    <div class="portlet">
        <div class="portlet-header fixed"><img src="<?php echo base_url();?>admin_images/icons/user.gif" width="16" height="16" alt="Latest Registered Users" /> Last Registered users Table Example</div>
		<div class="portlet-content nopadding">
        <form action="" method="post">
          <table width="100%" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet">
            <thead>
              <tr>
                <th width="34" scope="col"><input type="checkbox" name="allbox" id="allbox" onclick="checkAll()" /></th>
                <th width="136" scope="col">Name</th>
                <th width="102" scope="col">Username</th>
                <th width="109" scope="col">Date</th>
                <th width="129" scope="col">Location</th>
                <th width="171" scope="col">E-mail</th>
                <th width="123" scope="col">Phone</th>
                <th width="90" scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td width="34"><label>
                    <input type="checkbox" name="checkbox" id="checkbox" />
                </label></td>
                <td>Stephen C. Cox</td>
                <td>stephen</td>
                <td>20.06.2009</td>
                <td>Los Angeles, CA</td>
                <td>address1@yahoo.com</td>
                <td>332-5447879</td>
                <td width="90"><a href="#" class="approve_icon" title="Approve"></a> <a href="#" class="reject_icon" title="Reject"></a> <a href="#" class="edit_icon" title="Edit"></a> <a href="#" class="delete_icon" title="Delete"></a></td>
              </tr>
              <tr>
                <td width="34"><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                <td>Josephin Tan</td>
                <td>josephin</td>
                <td>20.06.2009</td>
                <td>Los Angeles, CA</td>
                <td>address1@yahoo.com</td>
                <td>332-5447879</td>
                <td width="90"><a href="#" class="approve_icon" title="Approve"></a> <a href="#" class="reject_icon" title="Reject"></a> <a href="edit_modal.html" class="edit_icon" title="Edit"></a> <a href="#" class="delete_icon" title="Delete"></a></td>
              </tr>
              <tr>
                <td width="34"><input type="checkbox" name="checkbox3" id="checkbox3" /></td>
                <td>Joyce Ming</td>
                <td>joyce_m</td>
                <td>20.06.2009</td>
                <td>Los Angeles, CA</td>
                <td>address1@yahoo.com</td>
                <td>332-5447879</td>
                <td width="90"><a href="#" class="approve_icon" title="Approve"></a> <a href="#" class="reject_icon" title="Reject"></a> <a href="#" class="edit_icon" title="Edit"></a> <a href="#" class="delete_icon" title="Delete"></a></td>
              </tr>
              <tr>
                <td width="34"><input type="checkbox" name="checkbox4" id="checkbox4" /></td>
                <td>James A. Pentel</td>
                <td>james_pent</td>
                <td>20.06.2009</td>
                <td>Los Angeles, CA</td>
                <td>address1@yahoo.com</td>
                <td>332-5447879</td>
                <td width="90"><a href="#" class="approve_icon" title="Approve"></a> <a href="#" class="reject_icon" title="Reject"></a> <a href="#" class="edit_icon" title="Edit"></a> <a href="#" class="delete_icon" title="Delete"></a></td>
              </tr>
              <tr class="footer">
                <td colspan="4"><a href="#" class="edit_inline">Edit all</a><a href="#" class="delete_inline">Delete all</a><a href="#" class="approve_inline">Approve all</a><a href="#" class="reject_inline">Reject all</a></td>
                <td align="right">&nbsp;</td>
                <td colspan="3" align="right">
				<!--  PAGINATION START  -->             
                    <div class="pagination">
                    <span class="previous-off">&laquo; Previous</span>
                    <span class="active">1</span>
                    <a href="query_41878854">2</a>
                    <a href="query_8A8058C2">3</a>
                    <a href="query_2823E521">4</a>
                    <a href="query_B322F5B7">5</a>
                    <a href="query_3A2A444D">6</a>
                    <a href="query_912D14DB">7</a>
                    <a href="query_41878854" class="next">Next &raquo;</a>
                    </div>  
                <!--  PAGINATION END  -->       
                </td>
              </tr>
            </tbody>
          </table>
        </form>
		</div>
      </div>
<!--  END #PORTLETS -->  
   </div>
    <div class="clear"> </div>
<!-- END CONTENT-->    
  </div>
<div class="clear"> </div>

		<!-- This contains the hidden content for modal box calls -->
		<div class='hidden'>
			<div id="inline_example1" title="This is a modal box" style='padding:10px; background:#fff;'>
			<p><strong>This content comes from a hidden element on this page.</strong></p>
            			
			<p><strong>Try testing yourself!</strong></p>
            <p>You can call as many dialogs you want with jQuery UI.</p>
			</div>
		</div>
</div>
<!-- WRAPPER END -->
<!-- FOOTER START -->
<div class="container_16" id="footer">
Website Administration by <a href="../index.htm">WebGurus</a></div>
<!-- FOOTER END -->
</body>
</html>
