
    <div class="section_w560">
        <h2>
            <a href="<?php echo base_url(); ?>welcome/single_blog/<?php echo $result->blog_id; ?>">
                <?php echo $result->blog_title; ?> </a> 
        </h2>

        <img class="image_wrapper fl_image" src="<?php echo base_url(); ?>images/templatemo_image_04.jpg" alt="image" />

      <p>  <?php echo $result->blog_description;?> </p>
        
        
        <br/>
        <hr/>
        <div class="post_info">
            Posted by <a href="http://www.templatemo.com" target="_blank">Blogger</a><br/>Date:  <?php echo $result->created_date_time; ?>, in <a href="#">Dhaka</a>
        </div>
         <div class="cleaner"></div>
         <br />
         <p><span>
            
        <?php echo print_r($all_comments,1);?> </span> Comments</p>
                <h3>
    <?php
    $exception=$this->session->userdata('exception');
    if(isset($exception)){
        echo $exception;
        $this->session->unset_userdata('exception');
    }
    
    ?>
    
</h3>
         <h1>Comments</h1> 
   
         
         
         <table>
            <?php 
                foreach($comments as $acomments)
                {
            ?>
            <tr>
                <td>Name</td>
                <td>
                    <?php echo $acomments->name;?>
                </td>
            </tr>

            <tr>
                <td>Comment</td>
                <td>
                    <?php echo $acomments->comments_description;?>
                </td>
            </tr>
            <?php } ?>
        </table>
         <form action="<?php echo base_url();?>welcome/save_comments" method="post">
        <table>
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="name" placeholder="Name">
                    <input type="hidden"  name="blog_id" value="<?php echo $result->blog_id;?>">
                </td>
            </tr>

            <tr>
                <td>Comment</td>
                <td><textarea name="comments_description" id="" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            <td><input type="submit" name="btn" value="Submit Comments">
            </td>
            </tr>
        </table>
      
            </form>

        <div class="cleaner"></div>
    </div>

    <div class="cleaner_h50"></div>

