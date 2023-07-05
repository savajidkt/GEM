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

  
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <?php wp_head(); ?>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

       <!--<link rel="stylesheet" href="https://unpkg.com/carbon-components@latest/css/carbon-components.min.css">-->
       <link rel="icon" type="image/x-icon" href="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/06/Global-Engage-Favicon-01.svg">
       
       
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/splidejs/4.1.4/css/splide.min.css" integrity="sha512-KhFXpe+VJEu5HYbJyKQs9VvwGB+jQepqb4ZnlhUF/jQGxYJcjdxOTf6cr445hOc791FFLs18DKVpfrQnONOB1g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.css" integrity="sha512-UiVP2uTd2EwFRqPM4IzVXuSFAzw+Vo84jxICHVbOA1VZFUyr4a6giD9O3uvGPFIuB2p3iTnfDVLnkdY7D/SJJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.css" integrity="sha512-NDcw4w5Uk5nra1mdgmYYbghnm2azNRbxeI63fd3Zw72aYzFYdBGgODILLl1tHZezbC8Kep/Ep/civILr5nd1Qw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .myCls{ position: fixed !important;
    width: 100%;
    background-color: #333333;
    top: 0; }
    </style>
</head>



<body <?php body_class(); ?>>


       

        

<header id="header">

        <div class="main-header myCls">


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

                      

                    </div>

                    

                </div>

                

            </div>

        </div>

    </header>

 

     

     

     

     

     

