
<h2>
    Edit
</h2>
<br/>
<form name="edit_profile" action="<?php echo base_url(); ?>blogger/update_user" method="post" enctype="multipart/form-data" >
    <table border="1" align="center">
        <tr>
            <td>First Name:</td>
            <td><input type="text" name="first_name" value="<?php echo $result->first_name; ?>"  placeholder="First Name" tabindex="1" /></td>
        </tr>
        <tr>
            <td>Last Name:</td>
            <td><input type="text" name="last_name" value="<?php echo $result->last_name; ?>" placeholder="Last Name" tabindex="2"/></td>
        </tr>
        <tr>
            <td>Email Address:</td>
            <td><input type="text" name="email_address" value="<?php echo $result->email_address; ?>" placeholder="Email Address" tabindex="3"/></td>
        </tr>

        <tr>
            <td>Address:</td>
            <td><textarea cols="30" rows="10" name="address" placeholder="Your Address" tabindex="6">
                    <?php echo $result->address; ?> 
                </textarea></td>
        </tr>
        <tr>
            <td>Mobile No:</td>
            <td><input type="text" name="mobile_no" value="<?php echo $result->mobile_no; ?>" placeholder="Your Mobile No" tabindex="7"/></td>
        </tr>
        <tr>
            <td>City:</td>
            <td><input type="text" name="city" value="<?php echo $result->city; ?>" placeholder="Your City" tabindex="8" /></td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td>
                <?php
                if ($result->gender == 'male') {
                    ?>
                    <input type="radio" name="gender" value="male" checked="checked"  />Male
                <?php } else {
                    ?>
                    <input type="radio" name="gender" value="male"  />Male
                <?php }
                ?>
                <?php
                if ($result->gender == 'female') {
                    ?>
                    <input type="radio" name="gender" value="female" checked="checked"  />Female
                <?php } else {
                    ?>
                    <input type="radio" name="gender" value="female"  />Female
                <?php }
                ?>
            </td>
        </tr>
        <tr>
            <td>Country:</td>
            <td><select tabindex="9" name="country" value="<?php echo $result->country; ?>" >
                    <option value="">Select Country.....</option>
                    <script type="text/javascript">
                        printCountryOptions();
                    </script>
                </select>
            </td>
        </tr>
        <tr>
            <td>Zip Code:</td>
            <td><input type="text" name="zip_code" value="<?php echo $result->zip_code; ?>"  placeholder="Your Zip Code" tabindex="10"/></td>
        </tr>

        <tr>
            <td>Image</td>
            <td> 


                <img src="<?php echo base_url(); ?><?php echo $result->profile_image; ?>" alt="dell" width="150" height="120"/><i>
            </td>
        </tr>

        <tr>
            <td> Change Image</td>
            <td>
                <input type="file" name="profile_image" value="<?php echo $result->profile_image; ?>" tabindex="8"/>                
            </td>
        </tr>     

        <tr>
            <td colspan="2" align="center"><input type="submit" name="btn" tabindex="11" value="Update"/></td>
        </tr>
    </table>
</form>
<script type="text/javascript" language="javascript">
    document.forms['edit_profile'].elements['country'].value = '<?php echo $result->country ?>';
</script>
