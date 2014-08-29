
<h2>
    Sign Up Form
</h2>
<h3><?php 
$message=$this->session->userdata('message');
if(isset($message)){
    echo $message;
    $this->session->unset_userdata('message');
}
?></h3><br/>
<form action="<?php echo base_url();?>index.php/login/save_user" method="post" enctype="multipart/form-data"  onsubmit="return validateStandard(this)">
    <table border="1" align="center">
        <tr>
            <td>First Name:</td>
            <td><input type="text" name="first_name"  placeholder="First Name" tabindex="1" required="1" regexp="JSVAL_RX_ALPHA" err="Enter First Name.." /><span class="required">*</span></td>
        </tr>
        <tr>
            <td>Last Name:</td>
            <td><input type="text" name="last_name" placeholder="Last Name" tabindex="2"  required="1" regexp="JSVAL_RX_ALPHA" err="Enter Last Name.."/><span class="required">*</span></td>
        </tr>
        </tr>
        <tr>
            <td>Email Address:</td>
            <td><input type="text" name="email_address" placeholder="Email Address" tabindex="3" required="1" regexp="JSVAL_RX_EMAIL" err="Enter Valid Email Address.." /><span class="required">*</span></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password" placeholder="Your Password" tabindex="4"  required="1" regexp="JSVAL_RX_ALPHA_NUMERIC_WITHOUT_HIFANE" err="Enter Valid password.."  /><span class="required">*</span></td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><textarea cols="30" rows="10" name="address" placeholder="Your Address" tabindex="6"></textarea></td>
        </tr>
        <tr>
            <td>Mobile No:</td>
            <td><input type="text" name="mobile_no" placeholder="Your Mobile No" tabindex="7"/></td>
        </tr>
        <tr>
            <td>City:</td>
            <td><input type="text" name="city" placeholder="Your City" tabindex="8" /></td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td>
                <input type="radio" name="gender" value="male" checked="checked"  />Male
                <input type="radio" name="gender" value="female"  />Female
            </td>
        </tr>
        <tr>
            <td>Country:</td>
            <td><select tabindex="9" name="country" required="1" exclude=" ">
                    <option value=" ">Select Country.....</option>
                    <script type="text/javascript">
                    printCountryOptions();
                    </script>
                </select>
            </td>
        </tr>
        <tr>
            <td>Zip Code:</td>
            <td><input type="text" name="zip_code" placeholder="Your Zip Code" tabindex="10"/></td>
        </tr>
         <tr>
            <td>Profile Image</td>
            <td>
                <input type="file" name="profile_image" tabindex="8"/>                
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="btn" tabindex="11" value="Sign Up"/></td>
        </tr>
    </table>
</form>
