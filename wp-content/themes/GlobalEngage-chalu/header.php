<?php

/**

 * The header.

 *

 * This is the template that displays all of the <head> section and everything up until main.

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package WordPress

 * @subpackage Twenty_Twenty_One

 * @since Twenty Twenty-One 1.0

 */



?>

<!DOCTYPE html>

<html <?php language_attributes(); ?>>



<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

       <!--<link rel="stylesheet" href="https://unpkg.com/carbon-components@latest/css/carbon-components.min.css">-->
       <link rel="icon" type="image/x-icon" href="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/06/Global-Engage-Favicon-01.svg">

</head>



<body <?php body_class(); ?>>

<?php if(!is_page(33)) { 

    $banner = get_field('banner',$post->ID);

    $default_banner = get_field('default_banner','option');

    if(!empty($banner)) {

 ?>

        <header id="headers" style='background-image: url(<?php echo $banner['url'];?>)'>

    <?php } else { ?>

        <header id="headers" style='background-image: url(<?php echo $default_banner['url'];?>)'>

    <?php } ?>

        <div class="main-header">

            <div class="top-header">

                <div class="container top-right-info-text">

                    <?php

                    $phone_number = get_field('phone_numbers','option');

                    if(!empty($phone_number)) { 

                        foreach($phone_number as $phone) { 

                            $country = $phone['country'];

                            $phone_number = $phone['phone_number'];

                    ?>

                            <div class="content-name">

                                <h2><span><?php if(!empty($country)) { echo $country;}?></span> 

                                <?php if(!empty($phone_number)) { ?>

                                    <a href="tel:<?php echo $phone_number;?>"><?php echo $phone_number;?></a>

                                <?php } ?>

                                </h2>

                            </div>

                            <span class="line-between"></span>

                    <?php } } ?>

                </div>

            </div>

            <div class="header">

                <div class="container">

                    <div class="logo-nav-block">

                        <?php

                        $logo = get_field('header_logo','option');

                        if(!empty($logo)) { ?>

                            <div id="header-image">

                                <a href="<?php echo site_url('/'); ?>">

                                    <img src="<?php echo $logo['url'];?>" alt="<?php echo $logo['alt'];?>"/>

                                </a>

                            </div>

                        <?php } ?>

                        <nav class="desktop-menu">

                            <?php wp_nav_menu(array('menu'=>'Main menu'));?>

                        </nav>

                        <nav class="mobile-menu">

                            <?php wp_nav_menu(array('menu'=>'Main menu'));?>

                            

                        </nav>

                        <div class="toggle_btn">

                           <i class="fa-solid fa-bars"></i>

                           <span class="menu-title">Menu</span>

                        </div>

                    </div>

                     

                </div>

            </div>

            

        </div>

        

    </header>

<?php } else { ?>

        

         <header id="header">

        <div class="main-header">

            <div class="top-header">

                <div class="container top-right-info-text">

                    <?php

                    $phone_number = get_field('phone_numbers','option');

                    if(!empty($phone_number)) { 

                        foreach($phone_number as $phone) { 

                            $country = $phone['country'];

                            $phone_number = $phone['phone_number'];

                    ?>

                            <div class="content-name">

                                <h2><span><?php if(!empty($country)) { echo $country;}?></span> 

                                <?php if(!empty($phone_number)) { ?>

                                    <a href="tel:<?php echo $phone_number;?>"><?php echo $phone_number;?></a>

                                <?php } ?>

                                </h2>

                            </div>

                            <span class="line-between"></span>

                    <?php } } ?>

                </div>

            </div>

            <div class="header">

                <div class="container">

                    <div class="logo-nav-block">

                        <?php

                        $logo = get_field('header_logo','option');

                        if(!empty($logo)) { ?>

                            <div id="header-image">

                                <a href="<?php echo site_url('/'); ?>">

                                    <img src="<?php echo $logo['url'];?>" alt="<?php echo $logo['alt'];?>"/>

                                </a>

                            </div>

                        <?php } ?>

                        <nav class="desktop-menu">

                            <?php wp_nav_menu(array('menu'=>'Main menu'));?>

                        </nav>

                        <nav class="mobile-menu">

                            <?php wp_nav_menu(array('menu'=>'Main menu'));?>

                        </nav>

                        <div class="toggle_btn">

                           <i class="fa-solid fa-bars"></i>

                           <span class="menu-title">Menu</span>

                        </div>

                    </div>

                    

                </div>

                

            </div>

        </div>

    </header>

     <?php }?>

     

     

     

     

     

