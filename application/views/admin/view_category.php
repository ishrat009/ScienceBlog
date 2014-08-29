<table id="table">
			<thead>
			<tr>
				
				<th>Category Name</th>
				
				<th>Actions</th>
				
			</tr>
			</thead>
			<tbody>
                             <?php 
        foreach($all_category as $v_category)
        {
    ?>
			<tr>
				
				<td><?php echo $v_category->category_name; ?></td>
				
                                <td>
                                           <a href="<?php echo base_url();?>super_admin/edit_category/<?php echo $v_category->category_id?>"><img src="<?php echo base_url();?>admin_img/edit.jpg" alt="edit"/></a>&nbsp; &nbsp;
                                    <a href="<?php echo base_url();?>super_admin/delete_category/<?php echo $v_category->category_id?>" onclick="return checkDelete();"><img src="<?php echo base_url();?>admin_img/cancel.jpg" alt="cancel"/> </a>
                                   
                             
                                </td>
				
			</tr>
			
			    <?php } ?>
			</tbody>
		</table>
<div class="pagination">
    <?php echo $this->pagination->create_links(); ?>
</div>