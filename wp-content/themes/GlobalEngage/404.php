<?php
/* Template Name: 404 Template*/ 
get_header(); 
?>
<?php
$page_id = 1987;
$banner_title = get_field('banner_title',$page_id);

$content = get_field('content',$page_id);
$button1 = get_field('button',$page_id);

     $button_text = $button1['button_label'];

     $link = $button1['button_link'];

     $internal_link = $button1['internal_link'];

     $external_link = $button1['external_link'];

     if($link == 'internal_link'){

     $btnurl = $internal_link;

     $target = '_self';

     } else {

     $btnurl = $external_link;

     $target = '_blank';

     }

    $button2 = get_field('button_1',1987);

    $button_text2 = $button2['button_label'];

    $link2 = $button2['button_link'];

    $internal_link2 = $button2['internal_link'];

    $external_link2 = $button2['external_link'];

    if($link2 == 'internal_link'){

    $btnurl2 = $internal_link2;

    $target2 = '_self';

    } else {

    $btnurl2 = $external_link2;

    $target2 = '_blank';

    }


?>

<div class="container sub_banner_title">

    <div class="header-banner-text">

        <?php if(!empty($banner_title)) { ?>

        <h2>

            <?php echo $banner_title;?>

        </h2>

        <?php } else { ?>

        <h2>

            <?php the_title();?>

        </h2>

        <?php } ?>

        <p>

            <?php echo $content; ?>

        </p>
        
        <div class="404-button">
          <?php if (!empty($button_text) && (!empty($button_text2))) { ?>

                    <a href="<?php echo $btnurl;?>" target="<?php echo $target;?>"><?php echo $button_text;?></a>

                   <a href="<?php echo $btnurl2;?>" target="<?php echo $target2;?>"><?php echo $button_text2;?></a>

                   <?php } ?>
        </div>
       
    </div>

</div>
<?php

    $orders = get_field('section_order',$page_id);

    foreach($orders as $order):

        if(!empty($order)):

            set_query_var( 'section_data', $order );

            echo get_template_part( 'parts/content',$order['acf_fc_layout'] );

        endif;

    endforeach;

?>

<?php get_footer();?>