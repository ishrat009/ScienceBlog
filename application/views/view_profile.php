
<h2>
    Profile<a href="<?php echo base_url();?>blogger/edit_profile">Edit</a>
</h2>
<table border="0" align="center">
    
     <tr>
            <td>Profile Picture </td>
            <td> 
            
            
            <img src="<?php echo base_url();?><?php echo $result->profile_image; ?>" alt="dell" width="150" height="120"/><i>
            </td>
        </tr>
        <tr>
            <td>Full Name:</td>
            <td> <?php 
            echo $result->first_name.' '.$result->last_name;
            ?></td>
        </tr>
        
        <tr>
            <td>Email Address:</td>
            <td>
                <?php 
            echo $result->email_address;
            ?>
            </td>
        </tr>
       
        <tr>
            <td>Address:</td>
            <td>
             <?php 
            echo $result->address;
            ?>
            </td>
        </tr>
        <tr>
            <td>Mobile No:</td>
            <td>
             <?php 
            echo $result->mobile_no;
            ?>
            </td>
        </tr>
        <tr>
            <td>City:</td>
            <td> <?php 
            echo $result->city;
            ?> </td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td> <?php 
            echo $result->gender;
            ?>
                </td>
        </tr>
        <tr>
            <td>Country:</td>
            <td> <?php 
            echo $result->country;
            ?>
            </td>
        </tr>
        <tr>
            <td>Zip Code:</td>
            <td> <?php 
            echo $result->zip_code;
            ?></td>
        </tr>
         <tr>
            <td>Member Since:</td>
            <td> <?php 
            echo $result->in_date;
            ?></td>
        </tr>
       
       
    </table>

