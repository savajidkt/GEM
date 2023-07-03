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
<div class="resource-content">
    <?php
	while ($query->have_posts())
	{
		$query->the_post();
		$product_id = $post->ID;
        $image = wp_get_attachment_image_src( get_post_thumbnail_id($product_id), 'single-post-thumbnail' );
		$terms = get_the_terms( $post->ID, 'resource-type' );
// 		echo '<pre>';
// 		print_r($terms);
        if($terms[0]->slug == 'blog'){
		?>
    <div class="resource-content-heading">
        <img src="<?php  echo $image[0]; ?>" alt="">
        <h4>
            <?php the_title(); ?>
        </h4>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>">Read More</a>
    </div>
    <?php
    }
    if($terms[0]->slug == 'webinar-recordings'){?>
        <!--Webinar-->
        <div id="Webinar" class="tabcontent">
            <div class="resource-content_webinar-recordings">
                <div class="resource-downloads">
                    <div class="resource-center-content-overlay">
                        <img class="icons-download"
                            src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrorplay.svg" alt="">
                        <div class="overlay">
                            <a class="video-link icon" href="https://www.youtube.com/watch?v=07d2dXHYb94" data-width="383px"
                                data-height="246px">
                                <img src="<?php  echo $image[0]; ?>" alt="">
                            </a>
                        </div>
                    </div>
                    <h4>
                        <?php the_title(); ?>
                    </h4>
                    <?php the_excerpt(); ?>
                    <a class="read-more-btn" href="<?php the_permalink(); ?>">Watch here</a>
                </div>
            </div>
            
        </div>
        <!--end-->
    <?php }
    if($terms[0]->slug == 'downloads'){?>
        <!--download-->
        <div id="Downloads" class="tabcontent">
            <div class="resource-content_download">
                <div class="resource-content-heading resource-downloads">
                    <div class="resource-center-content-overlay">
                        <img class="icons-download" src="<?php echo get_stylesheet_directory_uri(); ?>/images/download_icon.svg" alt="">
                        <div class="overlay">
                         
                                <img src="<?php  echo $image[0]; ?>" alt="">
                            
                        </div>
                    </div>
                    <h4><?php the_title(); ?></h4>
                     <p><?php the_excerpt(); ?></p>
                     <?php if(get_field('popup_form') == 'noform'){?>
                    <a class="read-more-btn" href="<?php echo get_field('pdf_upload');?>">Download here</a>
                    <?php }else{?>
                        <a class="read-more-btn" href="<?php the_permalink(); ?>">Download here</a>
                    <?php }?>
                </div>
            </div>
            
        </div>
    <?php }
	}
	?>
</div>


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