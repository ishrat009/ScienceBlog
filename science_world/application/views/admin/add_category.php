  <h3>
    <?php
    $exception=$this->session->userdata('exception');
    if(isset($exception)){
        echo $exception;
        $this->session->unset_userdata('exception');
    }
    
    ?>
    
</h3>
<form action="<?php echo base_url()?>super_admin/save_category" method="post" onsubmit="return validateStandard(this)">
    <h2 align="center"> <u>Add Category</u></h2>  
    <table border="0" align="center" width="90%">
        <tr> 
            <td>Category Name:</td>
            <td><input type="text" name="category_name" placeholder="Category Name.." tabindex="1" maxlength="25" required="0"  err="Enter Your First Name" size="40" /><span class="required"> * </span></td> 
        </tr>
        <tr>
            <td>category Description:</td>
            <td>
                <textarea name="category_description" placeholder="Category Description" id="ck_editor" tabindex="2" cols="31"></textarea>
<span class="required"> * </span></td> 
        </tr>       
        
         <tr>
            <td colspan="2" align="center"><input type="submit" name="btn" tabindex="6" value="Save"/></td>
        </tr>
    </table>
</form>
