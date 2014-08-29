<table id="table">
			<thead>
			<tr>
				
				<th>Event Title</th>
				
				<th>Actions</th>
				
			</tr>
			</thead>
			<tbody>
                             <?php 
        foreach($all_events as $v_events)
        {
    ?>
			<tr>
				
				<td><?php echo $v_events->event_title; ?></td>
				
                                <td>
                                    <a href="<?php echo base_url();?>super_admin/edit_event/<?php echo $v_events->event_id?>"><img src="<?php echo base_url();?>admin_img/edit.jpg" alt="edit"/></a>&nbsp; &nbsp;
                                    <a href="<?php echo base_url();?>super_admin/delete_event/<?php echo $v_events->event_id?>" onclick="return checkDelete();"><img src="<?php echo base_url();?>admin_img/cancel.jpg" alt="cancel"/> </a>
                                   
                             
                                </td>
				
			</tr>
			
			    <?php } ?>
			</tbody>
		</table>
