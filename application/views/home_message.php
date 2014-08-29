<?php
foreach ($result as $vresult) {
    ?>
    <div class="section_w560">
        <h2>
            <a href="<?php echo base_url(); ?>welcome/single_blog/<?php echo $vresult->blog_id; ?>">
                <?php echo $vresult->blog_title; ?> </a> 
        </h2>

        <img class="image_wrapper fl_image" src="<?php echo base_url(); ?>images/templatemo_image_04.jpg" alt="image" />

        <p>
            <?php
            $string = $vresult->blog_description;
            $string1 = word_limiter($string, 10);
            echo $string1;
            ?>
        </p>
        
        <a href="<?php echo base_url();?>welcome/single_blog/<?php echo $vresult->blog_id;?>">Read more</a>
         <br/> <br/>
        <div class="post_info">
            Posted by <a href="http://www.templatemo.com" target="_blank">Blogger</a><br/>Date:  <?php echo $vresult->created_date_time; ?>, in <a href="#">Dhaka</a>
        </div>

        <div class="cleaner"></div>
    </div>

    <div class="cleaner_h50"></div>

<?php } ?>










<!--<div class="section_w560">
                
                  <h2>Web Design Trends</h2>
            
                                        
                     <img class="image_wrapper fr_image" src="images/templatemo_image_01.jpg" alt="image" />              
                   
                    <p>Suspendisse feugiat, augue ac tincidunt vestibulum, ligula orci tincidunt arcu, quis scelerisque ante magna quis urna. Ut quis est congue dui porttitor porta. Suspendisse eu erat at nunc luctus rhoncus ut ut purus. Duis mollis dignissim fringilla. </p>
                    <p>In hac habitasse platea dictumst. Nullam orci ante, tempor ac blandit eget, tristique non neque. Pellentesque eu leo tortor. Mauris et lectus eget elit sodales mattis ac id ligula. Quisque fermentum malesuada felis at suscipit. </p>
      <div class="cleaner_h20"></div>
                    <ul class="list_01">
                      <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur.</li>
                        <li>Nulla facilisi. Phasellus posuere justo id nunc bibendum convallis.</li>
                        <li>Aliquam sed nisi nulla, sit amet commodo arcu.</li>
                        <li>Sed sagittis, mauris vel fringilla varius, lacus diam faucibus nisl.</li>
                  </ul>
                  
                    
                                        <div class="button bottom_01"><a href="#">View All</a></div>    
                </div>
                
                <div class="cleaner"></div>-->
