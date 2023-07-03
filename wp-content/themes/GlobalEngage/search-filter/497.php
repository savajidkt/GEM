<?php
/**
 * Search & Filter Pro 
 *
 * Sample Results Template
 * 
 * @package   Search_Filter
 * @author    Ross Morsali
 * @link      https://searchandfilter.com
 * @copyright 2018 Search & Filter
 * 
 * Note: these templates are not full page templates, rather 
 * just an encaspulation of the your results loop which should
 * be inserted in to other pages by using a shortcode - think 
 * of it as a template part
 * 
 * This template is an absolute base example showing you what
 * you can do, for more customisation see the WordPress docs 
 * and using template tags - 
 * 
 * http://codex.wordpress.org/Template_Tags
 *
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( $query->have_posts() )
{
	?>
	
	<?php
	while ($query->have_posts())
	{
		$query->the_post();
        $product_id = $query->post->ID;
		$image = wp_get_attachment_image_src( get_post_thumbnail_id($product_id), 'single-post-thumbnail' );
		?>
		<div class="conferences-page-right-side-content" id="<?php echo $product_id;?>">
                    <div class="conferences-page-right-side-subcontent-a">
                        <img src="<?php  echo $image[0]; ?>" alt="">
                    </div>

                    <div class="conferences-page-right-side-subcontent-b">

                        
                        <div class="conferences-text-content">
                            <p id="international-heading"><?php the_title();?></p>
                            <p><?php the_excerpt();?></p>
                            
                            <div class="conference-details">
                                <p><strong>Location: </strong></p>
                                <p><?php echo get_post_meta($product_id,'WooCommerceEventsLocation',true);?></p>
                                
                                <div class="conference-sub-details">
                                    <p><strong>Date:</strong></p>
                                    <p><?php echo get_post_meta($product_id,'WooCommerceEventsDate',true);?></p>
                                </div>
                            </div>
                            <div class="conference-details">
                                <p><strong>Field:</strong></p>
                                <p><?php echo get_field('field');?></p>
                            </div>
                            <div class="conference-details">
                            <p><strong>Subject:</strong></p>
                                <p><?php echo get_field('subject');?></p>
                            </div>
                        </div>
                        <div class="conferences-text-content-c">
                            <div class="conferences-text-sub-content-c">
                                <img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/05/Group-2571.svg" alt="" >
                                <p>Multibuy discount available</p>
                            </div>
                            <div class="conferences-text-sub-content-c">
                                <img src="http://localhost/public_html/wp-content/uploads/2023/05/Group-2572.svg" alt="" >
                                <p>Earlybird discount available
                                    until <strong><?php echo get_post_meta($product_id,'WooCommerceEventsDate',true);?></strong></p>
                            </div>
                            <div class="conferences-text-sub-content-c">
                                <img src="http://localhost/public_html/wp-content/uploads/2023/05/Group-2570.svg" alt="" >
                                <p>Secure payment</p>
                            </div>
                            <div class="conferences-text-sub-content-ca">
                                <a href="<?php echo site_url();?>/conference-and-training/?add-to-cart=<?=$product_id;?>" class="conference-btn">Book Now</a>
                                <a href="<?php echo get_permalink($product_id);?>" class="conferences-btn-2">View details</a></div>
                            </div>
                        </div>
                    </div>

		<?php
	}
	?>
    
    <div class="resource-load">
        <div class="pagination">       
       
        <?php
            /* example code for using the wp_pagenavi plugin */
            if (function_exists('wp_pagenavi'))
            {
                wp_pagenavi( array( 'query' => $query ) );
            }
        ?>
    </div>
                   <!--  <a class="resource-load-btn" href="">Load More</a> -->

     </div>
	<?php
}
else
{
	echo "No Results Found";
}
?>