  <h3>
    <?php
    $exception=$this->session->userdata('exception');
    if(isset($exception)){
        echo $exception;
        $this->session->unset_userdata('exception');
    }
    
    ?>
    
</h3>
<form action="<?php echo base_url()?>super_admin/save_event" method="post" onsubmit="return validateStandard(this)" enctype="multipart/form-data" >
    <h2 align="center"> <u>Add Event</u></h2>  
    <table border="0" align="center" width="90%">
        <tr> 
            <td>Event Title:</td>
            <td><input type="text" name="event_title" placeholder="Event Name.." tabindex="1" maxlength="50" required="0"  err="Enter Event Name" size="40" /><span class="required"> * </span></td> 
        </tr>
        <tr>
            <td>Event Description:</td>
            <td>
                <textarea name="event_description" placeholder="Event Description" id="ck_editor" tabindex="2" cols="31"></textarea>
<span class="required"> * </span></td> 
        </tr>
         <tr>
            <td>Event Image</td>
            <td>
                <input type="file" name="event_image" tabindex="3"/>                
            </td>
        </tr>
        
         <tr>
            <td colspan="2" align="center"><input type="submit" name="btn" tabindex="6" value="Save"/></td>
        </tr>
    </table>
</form>

