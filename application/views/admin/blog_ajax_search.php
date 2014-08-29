<table id="table">
			<thead>
    <tr>
        <th> Blog Title</th>
        
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php 
        foreach($all_blog as $v_blog)
        {
    ?>
    <tr>
        <td><?php echo $v_blog->blog_title; ?></td>
        
        <td>
 <a href="<?php echo base_url();?>super_admin/delete_blog/<?php echo $v_blog->blog_id?>" onclick="return checkDelete();"><img src="<?php echo base_url();?>admin_img/cancel.jpg" alt="cancel"/> </a>
       
        </td>
    </tr>
    <?php } ?>
    </tbody>
</table>

