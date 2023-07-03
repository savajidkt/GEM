<?php 

get_header();?>



<?php 
    $loop = new WP_Query( array( 
        'post_type' => 'blog',   /* edit this line */
        'posts_per_page' => 15 ) );
?>

<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>  

    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
        <?php the_post_thumbnail('thumbnail'); ?>
    </a>

<?php endwhile; ?> 



<?php get_footer();?>