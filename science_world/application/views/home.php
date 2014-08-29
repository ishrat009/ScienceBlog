<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title; ?></title>
<meta name="keywords" content="company template, free website templates, green color bar, CSS, HTML" />
<meta name="description" content="Company Template (Green) is a free website template provided by templatemo.com" />
<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>images/fav.ico" />
<link href="<?php echo base_url(); ?>css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>css/s3slider.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/s3Slider.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>scripts/country.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>scripts/jsval.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#slider').s3Slider({
            timeOut: 3000
        });
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

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<script type="text/javascript">



function DisplayTime(){
if (!document.all && !document.getElementById)
return
timeElement=document.getElementById? document.getElementById("curTime"): document.all.tick2
var CurrentDate=new Date()
var hours=CurrentDate.getHours()
var minutes=CurrentDate.getMinutes()
var seconds=CurrentDate.getSeconds()
var DayNight="PM"
if (hours<12) DayNight="AM";
if (hours>12) hours=hours-12;
if (hours==0) hours=12;
if (minutes<=9) minutes="0"+minutes;
if (seconds<=9) seconds="0"+seconds;
var currentTime=hours+":"+minutes+":"+seconds+" "+DayNight;
timeElement.innerHTML="<font style='font-family:verdana, arial,tahoma;font-size:12px;color:#E25984; font-weight:bold;'>"+currentTime+"</b>"
setTimeout("DisplayTime()",1000)
}
window.onload=DisplayTime
</script>
</head>
<body>
    

<div id="templatemo_site_title_bar_wrapper">

    <div id="templatemo_site_title_bar">

        
 <div id="site_title">
            <h1>
                <a href="<?php echo base_url(); ?>">
                    <img src="<?php echo base_url(); ?>images/logo_image/<?php echo $site_logo->image_file_name ?>" width="150px" height="40px" alt="logo"/>
                </a>
<!--            <a href="http://www.templatemo.com" target="_parent">Company Template
            <span>free html/css layout</span></a>-->
            </h1>
        </div>
        <ul id="top_menu">
             
            <li class="first"><a href="#">Home</a></li>
            <?php
                    $user_id=$this->session->userdata('user_id');
                    if($user_id!=NULL)
                    {
                
                ?>
            <li><a href="<?php echo base_url();?>blogger/profile">Profile</a></li>
             <li><a href="<?php echo base_url();?>blogger/logout">Logout</a></li>
             <?php
                    }
                    else{
                ?>
            <li><a href="<?php echo base_url(); ?>login/sign_up">Sign Up</a></li>
            <li><a href="<?php echo base_url(); ?>login/user_login">Login</a></li>
              <?php } ?>
        </ul>
    
    </div> <!-- end of site title bar -->
</div> <!-- end of site title bar wrapper -->

<div id="templatemo_banner_wrapper">

	<div id="templatemo_banner">
    
          <div id="slider">
                    <ul id="sliderContent">
                        <li class="sliderImage">
                            <a href="http://www.templatemo.com" target="_blank"><img src="<?php echo base_url(); ?>gallery/01.jpg" alt="1" /></a>
                            <span class="bottom"><strong>Project 1</strong><br />Suspendisse turpis arcu, dignissim ac laoreet a, condimentum in massa.</span>
                        </li>
                        <li class="sliderImage">
                            <a href="http://www.templatemo.com" target="_blank"><img src="<?php echo base_url(); ?>gallery/02.jpg" alt="2" /></a>
                            <span class="bottom"><strong>Project 2</strong><br />uisque eget elit quis augue pharetra feugiat.</span>
                        </li>
                        <li class="sliderImage">
                            <a href="http://www.templatemo.com" target="_blank"><img src="<?php echo base_url(); ?>gallery/03.jpg" alt="3" /></a>
                            <span class="bottom"><strong>Project 3</strong><br />Sed et quam vitae ipsum vulputate varius vitae semper nunc.</span>
                        </li>
                        <li class="sliderImage">
                            <a href="http://www.templatemo.com" target="_blank"><img src="<?php echo base_url(); ?>gallery/04.jpg" alt="4" /></a>
                            <span class="bottom"><strong>Project 4</strong><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </li>
                    </ul>
                    <div class="clear sliderImage"></div>
                </div>
   
    	
        <div id="banner_content">
            <h2>Lorem ipsum dolor sit amet</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras auctor, arcu sit amet auctor luctus, lectus sem rhoncus felis, dignissim convallis nulla quam ac dolor.</p>
            <a href="http://www.templatemo.com" target="_parent">Read more</a>
        </div>

	</div> <!-- end of banner-->

</div> <!-- end of banner wrapper -->

<div id="templatemo_menu_wrapper">

	<div id="templatemo_menu">
    
   		<ul>
            <li><a href="<?php echo base_url(); ?>welcome/index" class="current fast">Home</a></li>
             <li><a href="#" target="_parent">Flash</a></li>
            <?php
                    $user_id=$this->session->userdata('user_id');
                    if($user_id!=NULL)
                    {
                
                ?>
             <li><a href="<?php echo base_url(); ?>blogger/add_blog" target="_parent">Add Blog</a></li>
            <li><a href="<?php echo base_url(); ?>blogger/my_blogs" target="_parent">My blogs</a></li>
           <?php
                    }
                    else{
                ?>
           
            <li><a href="#">Blog</a></li>
            <li><a href="#">Company</a></li>
              <?php } ?>
        </ul>
            
    
    </div> <!-- end of menu -->

</div> <!-- end of menu wrapper -->

<div id="templatemo_content">

 <div id="main_column">
            
<?php echo $maincontent; ?>	
            </div> <!-- end of main column -->
            
            <div id="side_column">
            
                <div class="side_column_box">
                    <h3><span id=curTime></span>   </h3>
                    <h2>Upcoming Events</h2>
                    
                    <?php
                            foreach ($all_events as $v_events) {
                                ?>
                    
                    <div class="news_section">
                    	
                        <h3>   <li><a href="<?php echo base_url(); ?>welcome/event_blog/<?php echo $v_events->event_id?>"><?php echo $v_events->event_title; ?></a></li> </h3>
                      
                    </div>
                    
                      <?php } ?>
                    
                    <div class="button bottom_02"><a href="#">View All</a></div>   
                </div>
                
                <div class="cleaner_h20"></div>
                
            <div>
                        <h2>Categories</h2>
                        <ul>
                            <?php
                            foreach ($all_category as $v_category) {
                                ?>
                                <li><a href="<?php echo base_url(); ?>welcome/category_blog/<?php echo $v_category->category_id ?>"><?php echo $v_category->category_name; ?></a></li>
                            <?php } ?>

                        </ul>    
                    </div>
                  <div class="cleaner_h20"></div>
                
                <div class="side_column_box">
                
                    <h2>Newsletter</h2>
                    <form action="#" method="get">
                        <input type="text" value="Enter your email address..." name="q" size="10" class="inputfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
                        
                        <input type="submit" name="Subscribe" value="Subscribe" alt="Subscribe" class="submitbutton" title="Search" />
                    </form>
                </div>

            </div> <!-- end of side column -->

	<div class="cleaner"></div>
    
</div> <!-- end of content -->

<div id="templatemo_footer_wrapper">

	<div id="templatemo_footer">
    
        <ul class="footer_menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">CSS</a></li>
            <li><a href="#">Flash</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">Blog</a></li>
            <li class="last_menu"><a href="#">Contact</a></li>
        </ul>

        Copyright © 2048 <a href="#">Your Company Name</a> | 
        <a href="http://www.iwebsitetemplate.com" target="_parent">Website Templates</a> by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a></div> 
	<!-- end of footer -->
    
</div> <!-- end of footer wrapper -->
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>