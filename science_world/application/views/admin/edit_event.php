
<form  action="<?php echo base_url()?>super_admin/update_event" method="post" onsubmit="return validateStandard(this)" enctype="multipart/form-data" >
    <h2 align="center"> <u>Edit Category</u></h2>  
    <table border="0" align="center" width="90%">
        <tr> 
            <td>Event Title:</td>
            <td>
                <input type="text" name="event_title" value="<?php echo $result->event_title;?>" placeholder="event_title" tabindex="1" maxlength="25" required="0"  err="Enter event_title" size="40" /><span class="required"> * </span>
                <input type="hidden" name="event_id" value="<?php echo $result->event_id;?>"  />
            </td> 
        </tr>
       
        <tr>
            <td>Event Description:</td>
            <td>
                <textarea name="event_description" placeholder="Event Description" id="ck_editor" tabindex="2" cols="31"><?php echo $result->event_description;?></textarea> 
<span class="required"> * </span></td> 
        </tr>       
         <tr>
            <td>Image</td>
            <td> 


                <img src="<?php echo base_url(); ?><?php echo $result->event_image; ?>" alt="dell" width="150" height="120"/><i>
            </td>
        </tr>
         <tr>
            <td> Change Image</td>
            <td>
                <input type="file" name="event_image" value="<?php echo $result->event_image; ?>" tabindex="8"/>                
            </td>
        </tr>  
       
         <tr>
            <td colspan="2" align="center"><input type="submit" name="btn" tabindex="6" value="Update"/></td>
        </tr>
    </table>
</form>
