<h3 align="center">Show all comments</h3>
<table id="table">
    <thead>
    <tr>
        <th>Name</th>
        <th>Comments Description</th>
        <th>
         Comments Status
        </th>
        <th>
              Action 
        </th>
        </tr>
    </thead>
         <?php
        foreach ($all_comments as $v_comments)
        {
        ?>
        <tr>
            <td><?php echo $v_comments->name;?></td>
             <td><?php echo $v_comments->comments_description;?></td>
             
            <td>
             <?php 
             if(($v_comments->status)==1)
             {
                 echo 'publish';
             }
 else 
     {
                 echo 'unpublish';
     }
 
             ?>
         </td>
         <td>
               <a href="<?php echo base_url();?>super_admin/edit_comments/<?php echo $v_comments->comments_id;?>"><img src="<?php echo base_url();?>admin_img/edit.jpg" alt="edit"/></a>&nbsp; &nbsp;
                <a href="<?php echo base_url();?>super_admin/delete_comments/<?php echo $v_comments->comments_id;?>" onclick="return checkDelete();"><img src="<?php echo base_url();?>admin_img/cancel.jpg" alt="cancel"/> </a>
                                   
         
         </td>
        </tr>
        <?php }?>
</table>
