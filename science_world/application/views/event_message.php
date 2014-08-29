
    <div class="section_w560">
        <h2>
            <a href="">
                <?php echo $result->event_title; ?> </a> 
        </h2>

        
            
            
            
            <img src="<?php echo base_url();?><?php echo $result->event_image; ?>" alt="dell" width="150" height="120"/><i>
            
        

        <p>
            <?php
            $string = $result->event_description;
            $string1 = word_limiter($string, 10);
            echo $string1;
            ?>
        </p>
        
        <?php
                    $user_id=$this->session->userdata('user_id');
                    if($user_id!=NULL)
                    {
                
                ?>
        <form action="<?php echo base_url();?>blogger/save_participate" method="post" enctype="multipart/form-data"  onsubmit="return validateStandard(this)">
    <table border="1" align="center">
         <tr>
            <td>Name:</td>
            <td><input type="text" name="user_name" placeholder="Your Name" tabindex="4" /></td>
             <input type="hidden"  name="event_id" value="<?php echo $result->event_id;?>">
        </tr>
        <tr>
            <td>Participate:</td>
            <td>
                <input type="radio" name="join_status" value="1" checked="checked"  />Join
                <input type="radio" name="join_status" value="0"  />Ignore
            </td>
        </tr>
        
         <tr>
            <td colspan="2" align="center"><input type="submit" name="btn" tabindex="11" value="Submit"/></td>
        </tr>
    </table>
</form>
        <?php
                    }
                    else{
                ?>
        <h3>You must be logged in to join in this event!!!</h3>
         <?php } ?>
        
        
        
        
        
        <a href="">Read more</a>
         <br/> <br/>
        <div class="post_info">
            Posted by <a href="http://www.templatemo.com" target="_blank">Admin</a><br/>Date: <?php echo $result->in_date; ?>,   in <a href="#">Dhaka</a>
        </div>

        <div class="cleaner"></div>
    </div>

    <div class="cleaner_h50"></div>


