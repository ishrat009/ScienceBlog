<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AdminTheme - Ultimate Admin Panel Solution</title>
	<meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="robots" content="index,follow" />
	
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>admin_css/style.css" />
    <link rel="Stylesheet" type="text/css" href="<?php echo base_url();?>admin_css/smoothness/jquery-ui-1.7.1.custom.css"  />	
	<!--[if IE 7]><link rel="stylesheet" href="css/ie.css" type="text/css" media="screen, projection" /><![endif]-->
	<!--[if IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="screen, projection" /><![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>markitup/skins/markitup/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>markitup/sets/default/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>admin_css/superfish.css" media="screen">
	<!--[if IE]>
		<style type="text/css">
		  .clearfix {
		    zoom: 1;     /* triggers hasLayout */
		    display: block;     /* resets display for IE/Win */
		    }  /* Only IE can see inside the conditional comment
		    and read this CSS rule. Don't ever use a normal HTML
		    comment inside the CC or it will close prematurely. */
		</style>
	<![endif]-->
	<!-- JavaScript -->
    <script type="text/javascript" src="<?php echo base_url();?>admin_js/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>admin_js/jquery-ui-1.7.1.custom.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>admin_js/hoverIntent.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>admin_js/superfish.js"></script>
	<script type="text/javascript">
		// initialise plugins
		jQuery(function(){
			jQuery('ul.sf-menu').superfish();
		});

	</script>
         <script type="text/javascript">
            function checkDelete()
            {
                var chk = confirm("Are you sure to delete this ? ");
                if (chk)
                {
                    return true;
                }
                else {
                    return false;
                }
            }
        </script>
	<script type="text/javascript" src="<?php echo base_url();?>admin_js/excanvas.pack.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>admin_js/jquery.flot.pack.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>markitup/jquery.markitup.pack.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>markitup/sets/default/set.js"></script>
  	<script type="text/javascript" src="<?php echo base_url();?>admin_js/custom.js"></script>

	 <!--[if IE]><script language="javascript" type="text/javascript" src="excanvas.pack.js"></script><![endif]-->
</head>
<body>
<div class="container" id="container">
    <div  id="header">
    	<div id="profile_info">
			<img src="<?php echo base_url();?>admin_img/avatar.jpg" id="avatar" alt="avatar" />
			<p>Welcome <strong>Admin</strong>. <a href="#">Log out</a></p>
<!--			<p>System messages: 3. <a href="#">Read?</a></p>-->
			<p class="last_login">Last login: 21:03 12.05.2009</p>
		</div>
		<div id="logo"><h1><a href="/">AdmintTheme</a></h1></div>
		
    </div><!-- end header -->
	    <div id="content" >
	    <div id="top_menu" class="clearfix">
	    	<ul class="sf-menu"> <!-- DROPDOWN MENU -->
			<li class="current">
				<a href="#a">Home</a><!-- First level MENU -->
<!--				<ul>
					<li>
						<a href="#aa">Database options</a>
					</li>
					<li class="current">
						<a href="#ab">Blog settings</a>  Second level MENU 
						<ul>
							<li class="current"><a href="#">Settings</a></li>
							<li><a href="#aba">menu item</a></li>
							<li><a href="#abb">menu item</a></li>
							<li><a href="#abc">menu item</a></li>
							<li><a href="#abd">menu item</a></li>
						</ul>
					</li>
					
					
				</ul>-->
			</li>
			<li>
				<a href="#">Some option</a>
			</li>
			<li>
				<a href="#">Category</a>
				<ul>
					
					
					<li>
						<a href="<?php echo base_url(); ?>super_admin/add_category">Add Category</a>
<!--						<ul>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
							<li><a href="#">menu item</a></li>
						</ul>-->
					</li>
                                       <li>
				                 <a href="<?php echo base_url(); ?>super_admin/view_category">View Categories</a>
			                </li>
					
				</ul>
			</li>
			<li>
				<a href="#">Events</a>
                                <ul>
					
					
					<li>
						<a href="<?php echo base_url(); ?>super_admin/add_event">Add Event</a>
						
					</li>
                                       <li>
				                 <a href="<?php echo base_url(); ?>super_admin/view_event">View Events</a>
			                </li>
					
				</ul>
			</li>
		</ul>
			<a href="#" id="visit" class="right">Visit site</a>
	    </div>
		<div id="content_main" class="clearfix">
			<div id="main_panel_container" class="left">
			<div id="dashboard">
			<?php echo $admin_maincontent; ?>
                            <br/><br/><br/><br/>
                            
			</div><!-- end #dashboard -->
			
			<br/><br/>
			
			<div id="shortcuts" class="clearfix">
				<h2 class="ico_mug">Panel shortcuts</h2>
				<ul>
					<li class="first_li"><a href=""><img src="<?php echo base_url();?>admin_img/theme.jpg" alt="themes" /><span>Themes</span></a></li>
					<li><a href=""><img src="<?php echo base_url();?>admin_img/statistic.jpg" alt="statistics" /><span>Statistics</span></a></li>
					<li><a href="<?php echo base_url(); ?>super_admin/view_blogs"><img src="<?php echo base_url();?>admin_img/ftp.jpg" alt="FTP" /><span>view All blogs</span></a></li>
					<li><a href=""><img src="<?php echo base_url();?>admin_img/users.jpg" alt="Users" /><span>Users</span></a></li>
					<li><a href="<?php echo base_url();?>super_admin/show_all_comments"><img src="<?php echo base_url();?>admin_img/comments.jpg" alt="Comments" /><span>All Comments</span></a></li>
					<li><a href="<?php echo base_url(); ?>super_admin/change_logo"><img src="<?php echo base_url();?>admin_img/gallery.jpg" alt="Gallery" /><span>Change Logo</span></a></li>
					<li><a href="<?php echo base_url();?>super_admin/logout"><img src="<?php echo base_url();?>admin_img/security.jpg" alt="Security" /><span>Log out</span></a></li>
					
				</ul>
			</div><!-- end #shortcuts -->
			</div>
			<div id="sidebar" class="right">
				<h2 class="ico_mug">Sidebar</h2>
			<ul id="menu">
				<li>
					<a href="#" class="ico_posts">Posts</a>
					<ul>
						<li><a href="#">Edit posts</a></li>
						<li><a href="#">Add post</a></li>
						<li><a href="#">Manage posts</a></li>
					</ul>
					<a href="#" class="ico_page">Pages</a>
					<ul>
						<li><a href="#">Edit pages</a></li>
						<li><a href="#">Add page</a></li>
						<li><a href="#">Manage pages</a></li>
					</ul>
					<a href="#" class="ico_user">Users</a>
					<ul>
						<li><a href="#">Edit users</a></li>
						<li><a href="#">Add user</a></li>
						<li><a href="#">Manage users</a></li>
					</ul>
					<a href="#" class="ico_settings">Settings</a>
					<ul>
						<li><a href="#">Database</a></li>
						<li><a href="#">Themes</a></li>
						<li><a href="#">Options</a></li>
					</ul>
					<a href="#" class="ico_settings">Settings</a>
					<ul>
						<li><a href="#">Database</a></li>
						<li><a href="#">Themes</a></li>
						<li><a href="#">Options</a></li>
					</ul>
				</li>
		
				
			</ul>

			</div><!-- end #sidebar -->
		</div><!-- end #content_main -->
		
		   
    <div  id="footer" class="clearfix">
    	<p class="left">AdminTheme - Ultimate Admin Panel Solution</p>
		<p class="right">© 2009 AdminTheme by rzepak, via Themeforest</p>
	</div><!-- end #footer -->
</div><!-- end container -->

</body>
</html>
