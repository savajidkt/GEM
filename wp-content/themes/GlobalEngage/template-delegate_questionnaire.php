<?php
/*
Template Name: Delegate Questionnaire
*/
get_header();?>

<?php
$banner_title = get_field('banner_title',$post->ID);
$content = get_field('content',$post->ID);
?>
<div class="container ">
   <div class="header-banner-text">
      <?php if(!empty($banner_title)) { ?>
        <h2><?php echo $banner_title;?></h2>
      <?php } else { ?>
        <h2><?php the_title();?></h2>
      <?php } ?>
      <p><?php echo $content; ?></p>
   </div>
</div>

<section>
        <div class="container">
        <ul class="breadcrumb">
            <li><a href="<?php echo site_url('/');?>"><strong>Home </strong></a></li>/
            <li><a href="<?php echo get_permalink();?>"><?php the_title();?></a></li>
        </ul>
    </div>
</section>


<section>
    <div class="container">
        <div class="delegate_questionnaire-form-block">
            <div class="form-dg">
                <div class="bg-form-dq">
                <h2>Badge Details</h2>
                <p>
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                </p>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
               
                <div title="select-title">
                        <select id="select">
                            <option>Mr.</option>
                            <option>two</option>
                            <option>three</option>
                        </select>
                </div>
                      <input type="text" name="Your name"  placeholder="Your name*" >
                      <input type="text" name="Company" placeholder="Company*" >
                      <input type="text" name="Job Title" placeholder="Job Title*" >
                      <input type="tel" id="phone" name="phone" placeholder="Mobile number*" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                      
            </div>
            <div class="bg-form-dq">
                <h2>Do You Have Any Dietary Requirements?</h2>
                <textarea name="comment" rows="5" cols="40" placeholder="Your message"></textarea>
                </div>
            <div class="bg-form-dq">
                <h2>Questions</h2>
                <h2>What Area(s) Does Your Work Cover Mostly?</h2>
                <div class="checkbox-option">
                    <div>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> option1</label>
                    </div>
                    <div>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> option1</label>
                    </div>
                    <div>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> option1</label>
                    </div>
                    <div>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> option1</label>
                    </div>
                    <div>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> option1</label>
                    </div>
                    <div>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> option1</label>
                    </div>
                    <div>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> option1</label>
                    </div>
                    <div>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> option1</label>
                    </div>
                    <div>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> option1</label>
                    </div>
                    <div>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> option1</label>
                    </div>
                 
                </div>
                <div class="option-info-text">
               <div>
                   <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> option1</label>
               </div>
                
                <input type="text" name="Company" placeholder="Please specify" >
                    </div>
                    
                     <hr>
                 <h2>What Is Your Department’s Budget?</h2>
                <div class="checkbox-option">
                    <div>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> option1</label>
                    </div>
                    <div>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> option1</label>
                    </div>
                    <div>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> option1</label>
                    </div>
                    <div>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> option1</label>
                    </div>
                    <div>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> option1</label>
                    </div>
                </div>
                     <hr>
                 <h2>What Is Your Department’s Budget?</h2>
                <div class="checkbox-option">
                    <div>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> option1</label>
                    </div>
                    <div>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> option1</label>
                    </div>
                    <div>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> option1</label>
                    </div>
                    <div>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> option1</label>
                    </div>
                    <div>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> option1</label>
                    </div>
                </div>
                     <hr>
                 <h2>What Is Your Department’s Budget?</h2>
                <div class="checkbox-option">
                    <div>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> option1</label>
                    </div>
                    <div>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> option1</label>
                    </div>
                    <div>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> option1</label>
                    </div>
                    <div>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> option1</label>
                    </div>
                    <div>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> option1</label>
                    </div>
                </div>
                     <hr>
                 <h2>What Is Your Department’s Budget?</h2>
                <div class="checkbox-option">
                    <div>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> option1</label>
                    </div>
                    <div>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> option1</label>
                    </div>
                    <div>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> option1</label>
                    </div>
                    <div>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> option1</label>
                    </div>
                    <div>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> option1</label>
                    </div>
                    <div>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> option1</label>
                    </div>
                    <div>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> option1</label>
                    </div>
                    <div>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> option1</label>
                    </div>
                    <div>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> option1</label>
                    </div>
                    <div>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> option1</label>
                    </div>
                </div>
                
                <hr>
                <h2>Do You Have Any Dietary Requirements?</h2>
                <textarea name="comment" rows="5" cols="40" placeholder="Your message"></textarea>
                <hr>
                <h2>Do You Have Any Dietary Requirements?</h2>
                <textarea name="comment" rows="5" cols="40" placeholder="Your message"></textarea>
                <hr>
                <h2>Do You Have Any Dietary Requirements?</h2>
                <textarea name="comment" rows="5" cols="40" placeholder="Your message"></textarea>
               </div>
               <div class="bg-form-dq">
                   <hr>
                 <h2>What Is Your Department’s Budget?</h2>
                <div class="checkbox-option">
                    <div>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> option1</label>
                    </div>
                    <div>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> option1</label>
                    </div>
                    <div>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> option1</label>
                    </div>
                    
                </div>
                   <hr>
                 <h2>What Is Your Department’s Budget?</h2>
                <div class="checkbox-option">
                    <div>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> option1</label>
                    </div>
                    <div>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> option1</label>
                    </div>
                    <div>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1"> option1</label>
                    </div>
                    
                </div>
                 </div>
            <button type="submit" form="form1" value="Submit" class="btn">Submit questionnaire</button>
                </form>
                
            </div>
        </div>
        
    </div>
</section>





<?php get_footer();?>