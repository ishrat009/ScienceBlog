<h2 align="center"> <u>Change Logo:</u></h2> 
<form action="<?php echo base_url(); ?>super_admin/update_logo" method="post" enctype="multipart/form-data">
    <table border="0" align="center">
        <tr>
            <td>Select Logo:</td>
            <td>
                <input type="file" name="logo_image" tabindex="1" size="25" />
                <input type="hidden" name="image_file_name" />
            </td>
        </tr>

        <tr>
            <td>Logo Description</td>
            <td><input type="text" name="logo_description" value="<?php echo $site_logo->logo_description; ?>"tabindex="1" size="25" /></td>
        </tr>

        <tr>
            <td>Logo have Choosen:</td>

            <td>
                <img src="<?php echo base_url(); ?>images/logo_image/<?php echo $site_logo->image_file_name ?>" width="80px" height="60px" alt="logo"/>
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center"><input type="submit" name="btn" tabindex="11" value="Update"/></td>
        </tr>

    </table>
</form>

