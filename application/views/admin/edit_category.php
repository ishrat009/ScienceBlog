<form  action="<?php echo base_url()?>super_admin/update_category" method="post" onsubmit="return validateStandard(this)">
    <h2 align="center"> <u>Edit Category</u></h2>  
    <table border="0" align="center" width="90%">
        <tr> 
            <td>Category Name:</td>
            <td>
                <input type="text" name="category_name" value="<?php echo $result->category_name;?>" placeholder="category_name" tabindex="1" maxlength="25" required="0"  err="Enter category_name" size="40" /><span class="required"> * </span>
                <input type="hidden" name="category_id" value="<?php echo $result->category_id;?>"  />
            </td> 
        </tr>
       
        <tr>
            <td>Category Description:</td>
            <td>
                <textarea name="category_description" placeholder="Category Description" id="ck_editor" tabindex="2" cols="31"><?php echo $result->category_description;?></textarea> 
<span class="required"> * </span></td> 
        </tr>       
       
         <tr>
            <td colspan="2" align="center"><input type="submit" name="btn" tabindex="6" value="Update"/></td>
        </tr>
    </table>
</form>
