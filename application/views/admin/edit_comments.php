<form action="<?php echo base_url();?>super_admin/update_comments/<?php echo $all_comments->comments_id;?>" method="post" >
    <h2 align="center"> <u>Edit Comments</u></h2>  
    <table border="0" align="center" width="90%">
        <tr> 
            <td>Name:</td>
            <td><input type="text" name="name" value="<?php echo $all_comments->name; ?>"  tabindex="1" maxlength="25" required="1"   size="40" /><span class="required"> * </span></td> 
  <td><input type="hidden" name="blog_id" value="<?php echo $all_comments->blog_id; ?>"/></td> 
  
        </tr>
     
         
        <tr>
            <td>Comments Description:</td>
            <td>
                <textarea name="comments_description"    id="ck_editor" tabindex="2" cols="31"><?php echo $all_comments->comments_description; ?></textarea> 
                <span class="required"> * </span></td> 
        </tr>
             
        <tr>
            
            <td>Status:</td>
            <td>
                
                    <?php
                
                    
                    
                    if($all_comments->status==1)
                        {
                        ?>
                    
                    <input type="radio" name="status" value="1" checked="checked" tabindex="3" />Publish
                        <?php }
    
                    else
                    
                    {
                     ?>
                    <input type="radio" name="status" value="1" tabindex="4" />Publish
                   <?php
                    }
                   ?>
                    
                    <?php
                
                    
                    
                    if($all_comments->status==0)
                        {
                        ?>
                    
                    <input type="radio" name="status" value="0"  checked="checked" tabindex="3" />Unpublish
                        <?php }
    
                    else
                    
                    {
                     ?>
                    <input type="radio" name="status" value="0"  tabindex="4" />Unpublish
                   <?php
                    }
                   ?>
                 
      
            </td>
            
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="btn" tabindex="6" value="Update"/></td>
        </tr>
    </table>
</form>


