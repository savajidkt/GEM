<?php



/*

Template Name: About Us

*/

get_header();

?>



<?php

$banner_title = get_field('banner_title',$post->ID);

$content = get_field('content',$post->ID);

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

    </div>

</div>

<!--<section id="breadcrumb">-->

<!--        <div class="container">-->

<!--        <ul class="breadcrumb">-->

<!--            <li><a href="<?php //echo site_url('/');?>"><strong>Home</strong></a></li>-->

<!--            <storng>/</storng>-->

<!--            <li><?php //the_title();?></li>-->

<!--        </ul>-->

<!--    </div>-->

<!--</section>-->



<?php

    $orders = get_field('section_order');

    foreach($orders as $order):

        if(!empty($order)):

            set_query_var( 'section_data', $order );

            echo get_template_part( 'parts/content',$order['acf_fc_layout'] );

        endif;

    endforeach;

?>









<!--<section>-->

<!--    <div class="container">-->

<!--        <div class="after-breadcrumb-text">-->

<!--            <p>-->

<!--                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut-->

<!--                labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et-->

<!--                ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum-->

<!--                dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore-->

<!--                magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet-->

<!--                clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.-->

<!--            </p>-->

<!--            <p>-->

<!--                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut-->

<!--                labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et-->

<!--                ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor.-->

<!--            </p>-->

<!--        </div>-->



<!--    </div>-->

<!--</section>-->



<?php //get_template_part('block-page/block','usp');?>

<?php //get_template_part('block-page/block','multi_drop');?>



<!--<section id="wbs" style="background-color: #fff;">-->

<!--    <div class="container">-->

<!--        <div class="wbs-main-text">-->

<!--            <h2> Our Values </h2>-->

<!--            <div class="wbs-row">-->

<!--                <div class="wbs-item-block">-->

<!--                    <div class="wbs-block">-->

<!--                        <h2>-->

<!--                            01-->

<!--                        </h2>-->

<!--                        <p>-->

<!--                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor-->

<!--                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.-->

<!--                        </p>-->

<!--                    </div>-->

<!--                </div>-->

<!--                <div class="wbs-item-block">-->

<!--                    <div class="wbs-block">-->

<!--                        <h2>-->

<!--                            02-->

<!--                        </h2>-->

<!--                        <p>-->

<!--                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor-->

<!--                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.-->

<!--                        </p>-->

<!--                    </div>-->

<!--                </div>-->

<!--                <div class="wbs-item-block">-->

<!--                    <div class="wbs-block">-->

<!--                        <h2>-->

<!--                            03-->

<!--                        </h2>-->

<!--                        <p>-->

<!--                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor-->

<!--                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.-->

<!--                        </p>-->

<!--                    </div>-->

<!--                </div>-->



<!--            </div>-->

<!--            <div class="wbs-button">-->

<!--                <a href="#" class="btn">Browse our conferences</a>-->

<!--                <a href="#" class="wot-btn">Enquire now</a>-->

<!--            </div>-->







<!--        </div>-->



<!--    </div>-->

<!--</section>-->

<?php //get_template_part('block-page/block','smb');?>





<!--<section class="ourpeople">-->

<!--    <div class="container">-->

<!--        <h2>Our People</h2>-->

<!--        <div class="our-people-member">-->

<!--            <div class="team-member text-center">-->

<!--                <div class="team-img">-->

<!--                    <img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/04/christina-wocintechchat-com-0Zx1bDv5BNY-unsplash.png"-->

<!--                        alt="member">-->

<!--                    <div class="overlay">-->

<!--                        <div class="team-details text-center">-->

<!--                            <h2>Persons Name</h2>-->

<!--                            <p>-->

<!--                                Job Title-->

<!--                            </p>-->

<!--                            <div class="socials mt-20">-->

<!--                                <button class="btn">Find out more</button>-->

<!--                            </div>-->

<!--                        </div>-->

<!--                    </div>-->

<!--                </div>-->

<!--            </div>-->

<!--            <div class="team-member text-center">-->

<!--                <div class="team-img">-->

<!--                    <img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/04/christina-wocintechchat-com-0Zx1bDv5BNY-unsplash.png"-->

<!--                        alt="member">-->

<!--                    <div class="overlay">-->

<!--                        <div class="team-details text-center">-->

<!--                            <h2>Persons Name</h2>-->

<!--                            <p>-->

<!--                                Job Title-->

<!--                            </p>-->

<!--                            <div class="socials mt-20">-->

<!--                                <button class="btn">Find out more</button>-->

<!--                            </div>-->

<!--                        </div>-->

<!--                    </div>-->

<!--                </div>-->

<!--            </div>-->

<!--            <div class="team-member text-center">-->

<!--                <div class="team-img">-->

<!--                    <img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/04/thisisengineering-raeng-TXxiFuQLBKQ-unsplash.png"-->

<!--                        alt="member">-->

<!--                    <div class="overlay">-->

<!--                        <div class="team-details text-center">-->

<!--                            <h2>Persons Name</h2>-->

<!--                            <p>-->

<!--                                Job Title-->

<!--                            </p>-->

<!--                            <div class="socials mt-20">-->

<!--                                <button class="btn">Find out more</button>-->

<!--                            </div>-->

<!--                        </div>-->

<!--                    </div>-->

<!--                </div>-->

<!--            </div>-->

<!--            <div class="team-member text-center">-->

<!--                <div class="team-img">-->

<!--                    <img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/04/linkedin-sales-solutions-pAtA8xe_iVM-unsplash.png"-->

<!--                        alt="member">-->

<!--                    <div class="overlay">-->

<!--                        <div class="team-details text-center">-->

<!--                            <h2>Persons Name</h2>-->

<!--                            <p>-->

<!--                                Job Title-->

<!--                            </p>-->

<!--                            <div class="socials mt-20">-->

<!--                                <button class="btn">Find out more</button>-->

<!--                            </div>-->

<!--                        </div>-->

<!--                    </div>-->

<!--                </div>-->

<!--            </div>-->





<!--            <div class="our_member_img text">-->

<!--                <h2>Join Our Team</h2>-->

<!--                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut-->

<!--                    labore et dolore magna aliquyam erat, sed diam voluptua. </p>-->

<!--                <a href="#" class="btn">Find out more</a>-->

<!--            </div>-->

<!--            <div class="team-member text-center">-->

<!--                <div class="team-img">-->

<!--                    <img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/04/linkedin-sales-solutions-pAtA8xe_iVM-unsplash.png"-->

<!--                        alt="member">-->

<!--                    <div class="overlay">-->

<!--                        <div class="team-details text-center">-->

<!--                            <h2>Persons Name</h2>-->

<!--                            <p>-->

<!--                                Job Title-->

<!--                            </p>-->

<!--                            <div class="socials mt-20">-->

<!--                                <button class="btn">Find out more</button>-->

<!--                            </div>-->

<!--                        </div>-->

<!--                    </div>-->

<!--                </div>-->

<!--            </div>-->

<!--            <div class="team-member text-center">-->

<!--                <div class="team-img">-->

<!--                    <img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/04/linkedin-sales-solutions-pAtA8xe_iVM-unsplash.png"-->

<!--                        alt="member">-->

<!--                    <div class="overlay">-->

<!--                        <div class="team-details text-center">-->

<!--                            <h2>Persons Name</h2>-->

<!--                            <p>-->

<!--                                Job Title-->

<!--                            </p>-->

<!--                            <div class="socials mt-20">-->

<!--                                <button class="btn">Find out more</button>-->

<!--                            </div>-->

<!--                        </div>-->

<!--                    </div>-->

<!--                </div>-->

<!--            </div>-->

<!--            <div class="team-member text-center">-->

<!--                <div class="team-img">-->

<!--                    <img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/04/linkedin-sales-solutions-pAtA8xe_iVM-unsplash.png"-->

<!--                        alt="member">-->

<!--                    <div class="overlay">-->

<!--                        <div class="team-details text-center">-->

<!--                            <h2>Persons Name</h2>-->

<!--                            <p>-->

<!--                                Job Title-->

<!--                            </p>-->

<!--                            <div class="socials mt-20">-->

<!--                                <button class="btn">Find out more</button>-->

<!--                            </div>-->

<!--                        </div>-->

<!--                    </div>-->

<!--                </div>-->

<!--            </div>-->

<!--            <div class="team-member text-center">-->

<!--                <div class="team-img">-->

<!--                    <img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/04/linkedin-sales-solutions-pAtA8xe_iVM-unsplash.png"-->

<!--                        alt="member">-->

<!--                    <div class="overlay">-->

<!--                        <div class="team-details text-center">-->

<!--                            <h2>Persons Name</h2>-->

<!--                            <p>-->

<!--                                Job Title-->

<!--                            </p>-->

<!--                            <div class="socials mt-20">-->

<!--                                <button class="btn">Find out more</button>-->

<!--                            </div>-->

<!--                        </div>-->

<!--                    </div>-->

<!--                </div>-->

<!--            </div>-->

<!--            <div class="team-member text-center">-->

<!--                <div class="team-img">-->

<!--                    <img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/04/linkedin-sales-solutions-pAtA8xe_iVM-unsplash.png"-->

<!--                        alt="member">-->

<!--                    <div class="overlay">-->

<!--                        <div class="team-details text-center">-->

<!--                            <h2>Persons Name</h2>-->

<!--                            <p>-->

<!--                                Job Title-->

<!--                            </p>-->

<!--                            <div class="socials mt-20">-->

<!--                                <button class="btn">Find out more</button>-->

<!--                            </div>-->

<!--                        </div>-->

<!--                    </div>-->

<!--                </div>-->

<!--            </div>-->



<!--        </div>-->



<!--    </div>-->

<!--</section>-->





<?php get_footer();?>