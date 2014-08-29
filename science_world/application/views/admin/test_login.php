<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login | Profi Admin</title>
<link href="<?php echo base_url();?>admin_css/960.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>admin_css/reset.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>admin_css/text.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>admin_css/login.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
<div class="container_16">
  <div class="grid_6 prefix_5 suffix_5">
   	  <h1>Profi Admin - Login</h1>
    	<div id="login">
    	  <p class="tip">You just need to hit the button and you're in!</p>
          <p class="error">
                            <h3>
    <?php
    $exception=$this->session->userdata('exception');
    if(isset($exception)){
        echo $exception;
        $this->session->unset_userdata('exception');
    }
    
    ?>
    
</h3>
              
              
          </p>        
          <form   method="post" action="<?php echo base_url();?>admin_login/check_admin_login">
    	    <p>
    	      <label><strong>Admin Email</strong>
<input type="text" name="admin_email_address" class="inputText" id="textfield" />
    	      </label>
  	      </p>
    	    <p>
    	      <label><strong>Password</strong>
  <input type="password" name="admin_password" class="inputText" id="textfield2" />
  	        </label>
    	    </p>
    		 <button type="submit" class="ok">Login</button> 
<!--             <label>
             <input type="checkbox" name="checkbox" id="checkbox" />
              Remember me</label>            -->
    	  </form>
          
		  <br clear="all" />
    	</div>
<!--        <div id="forgot">
        <a href="#" class="forgotlink"><span>Forgot your username or password?</span></a></div>-->
  </div>
</div>
<br clear="all" />
</body>
</html>
