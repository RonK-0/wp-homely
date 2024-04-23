<?php
/*
    Template Name: About Page
*/
?>

<?php get_header() ?>
 
<!-- CONTENT START -->
    <section class="propBanner" id="pageBanner" style="background-image: url(<?php echo get_field('banner_img');?>)">
        <div class="container">
            <div class="propBanner__wrapper">
                <h2><?php echo get_field('banner_text');?></h2>
            </div>
        </div>
    </section>

    <section class="about py100 bg-l_gray dark:bg-dark_2">
        <div class="container">
            <div class="about__wrapper">
                <div class="about__card cCard">
                    <img src="<?php echo get_field('about_image');?>" alt="" class="about__card__img">
                    <div class="about__card__text card__text">
                        <h4><?php echo get_field('about_address');?></h4>
                        <p class="location"><?php echo get_field('about_sub_address');?></p>
                        <ul>
                            <li><img src="<?php echo home_url(); ?>/wp-content/uploads/2024/04/bed.svg" alt="bed icon"><span><?php echo get_field('about_bed_number');?> Bed</span></li>
                            <li><img src="<?php echo home_url(); ?>/wp-content/uploads/2024/04/bath.svg" alt="bath icon"><span><?php echo get_field('about_baths_number');?> Baths</span></li>
                            <li><img src="<?php echo home_url(); ?>/wp-content/uploads/2024/04/size.svg" alt="size icon"><span><?php echo get_field('about_sqft_number');?> sqft</span></li>
                        </ul>
                    </div>
                </div>
                <div class="about__details">
                    <div class="about__details__content">
                        <h2><?php echo get_field('about_us_title');?></h2>
                        <h4>History:</h4>
                        <p class="mb-4"><?php echo get_field('about_history');?></p>
                        <h4>Mission:</h4>
                        <p class="mb-8"><?php echo get_field('about_mission');?></p>
                    </div>
                    <ul class="flex between-end flex-wrap md:flex-nowrap">
                        <li class="">
                            <img src="<?php echo get_field('about_icon_mission_1');?>" alt="">
                            <p><?php echo get_field('about_sub_mission_1');?></p>
                        </li>
                        <li class="">
                            <img src="<?php echo get_field('about_icon_mission_2');?>" alt="">
                            <p><?php echo get_field('about_sub_mission_2');?></p>
                        </li>
                        <li class="">
                            <img src="<?php echo get_field('about_icon_mission_3');?>" alt="">
                            <p><?php echo get_field('about_sub_mission_3');?></p>
                        </li>
                        <li class="">
                            <img src="<?php echo get_field('about_icon_mission_4');?>" alt="">
                            <p><?php echo get_field('about_sub_mission_4');?></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="homeAgents py100 bg-light dark:bg-dark">
        <div class="container">
            <div class="sectionHeading">
                <h2><?php echo get_field('about_estate_agents_title');?></h2>
                <p><?php echo get_field('about_estate_agents_sub');?></p>
            </div>
            <div class="homeAgents__wrapper">
                <?php 
                    $realEstateAgents = array(
                        'post_type' => 'realEstateAgents', 
                        'posts_per_page' => 6,
                    );
                    $realEstateAgentsQuery = new WP_Query($realEstateAgents)
                ?>
                <?php if($realEstateAgentsQuery->have_posts()) : while($realEstateAgentsQuery->have_posts()) : $realEstateAgentsQuery->the_post();?>
                <div class="homeAgents__card">
                    <?php the_post_thumbnail(); ?>
                    <h4 class="agentName"><?php the_title(); ?></h4>
                    <p class="agentDesignation"><?php echo get_field('agent_designation');?></p>
                    <div class="agentSocials">
                        <a href="<?php echo get_field('agent_facebook_link'); ?>"><i class="fab fa-facebook-f"></i></a>
                        <a href="<?php echo get_field('agent_instagram_link'); ?>"><i class="fab fa-instagram"></i></a>
                        <a href="<?php echo get_field('agent_twitter_link'); ?>"><i class="fab fa-twitter"></i></a>
                        <a href="<?php echo get_field('agent_linkedin_link'); ?>"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <?php
                    endwhile;
                    else :
                         echo "No available agents yet";
                    endif;
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>

    <section class="homeClientStories py100 bg-l_gray dark:bg-dark_2">
        <div class="container">
            <div class="sectionHeading">
                <h2><?php echo get_field('about_success_title');?></h2>
                <p><?php echo get_field('about_success_sub');?></p>
            </div>
            <div class="homeClientStories__wrapper">
            <?php 
                    $clientTestimonies = array(
                        'post_type' => 'clientTestimonies', 
                        'posts_per_page' => 6,
                    );
                    $clientTestimoniesQuery = new WP_Query($clientTestimonies)
                ?>
                <?php if($clientTestimoniesQuery->have_posts()) : while($clientTestimoniesQuery->have_posts()) : $clientTestimoniesQuery->the_post();?>
                <div class="homeClientStories__card">
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2024/04/quote.png" alt="" class="storiesQuoteSym">
                    <img src="<?php echo get_field('property_image');?>" alt="" class="w-full">
                    <img src="<?php echo get_field('client_image');?>" alt="" class="storiesClientImg">
                    <h4 class="storiesClientName"><?php the_title(); ?></h4>
                    <p class="storiesClientQuoteText"><?php echo get_field('client_quote');?></p>
                </div>
                <?php
                    endwhile;
                    else :
                         echo "No available client stories yet";
                    endif;
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
    
    <section class="homeClientSlider bg-light dark:bg-dark py-[32px] md:py-[48px] lg:py-clientSlider_p">
        <div class="container">
            <div class="homeClientSlider_logos flex select-none ease-linear">
                <?php if(have_rows("client_slider_logos")) : ?>
                    <?php while( have_rows('client_slider_logos') ) : the_row(); ?>
                        <img src="<?php echo get_sub_field('client_slider_logo');?>" alt="">
                <?php endwhile; else: echo "No more client logos"; endif; ?>
            </div>
        </div>
    </section>
<!-- CONTENT END -->

<?php get_footer() ?>