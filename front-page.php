<?php get_header() ?>
 
<!-- CONTENT START -->
    <section class="homeBanner bg-cover bg-center relative" id="pageBanner" style="background-image: url(<?php echo get_field('banner_img');?>)">
        <div class="container">
            <div class="homeBanner__wrapper h-[95vh] md:h-[100vh] f-col-center relative">
                <h1 class="text-center text-heading_h2 lg:text-banner_h1 ft-b text-light uppercase lh-120"><?php echo get_field('banner_text');?></h1>
                <a href="./properties" class="btn bg--primary-w">Find Home</a>

                <div class="homeBanner_categorySlider_bg bg-l_gray dark:bg-dark_2 rounded-t-[30px] w-bannerSlider_card_bg h-[11vw] lg:h-[7.75vw] xl:h-[7vw] 2xl:h-[5.5vw] absolute content-[''] bottom-[-1px] left-1/2 -translate-x-1/2">
                </div>
                <div class="homeBanner_categorySlider">
                    <div class="container">
                        <div class="homeBanner_categorySlider__wrapper">
                            <?php if(have_rows("category_cards")) : ?>
                                <?php while( have_rows('category_cards') ) : the_row(); ?>
                                    <div class="categorySlider_card">
                                        <object data="<?php echo get_sub_field('category_symbol');?>"></object>
                                        <h4><?php echo get_sub_field('category_label');?></h4>
                                        <!-- <p><?php echo get_sub_field('category_count');?> Properties</p> -->
                                    </div>
                            <?php endwhile; else: echo "No more property categories"; endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="homeFeaturedProperties pt-[50px] pb-100 bg-l_gray dark:bg-dark_2">
        <div class="container">
            <div class="sectionHeading">
                <h2>CHECK OUT OUR FEATURED PROPERTIES</h2>
                <p>Explore our exclusive collection of top-rated properties, carefully<br> handpicked to offer something for every lifestyle and budget.</p>
            </div>
            <div class="homeFeaturedProperties__entries">
                <?php 
                    $properties_post = array(
                        'post_type' => 'properties_post',
                        'posts_per_page' => 5,
                    );
                    $properties_postQuery = new WP_Query($properties_post)
                ?>
                <?php if($properties_postQuery->have_posts()) : while($properties_postQuery->have_posts()) : $properties_postQuery->the_post();?>
                <div class="homeFeaturedProperties__card cCard">
                    <div class="card__img"><img src="<?php echo get_field('property_image'); ?>" alt=""><span class="price"><?php echo get_field('property_price'); ?></span></div>
                    <div class="card__text">
                        <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                        <p class="location"><?php echo get_field('property_address'); ?></p>
                        <ul>
                        <li><img src="<?php echo home_url(); ?>/wp-content/uploads/2024/04/bed.svg" alt="bed icon"><span><?php echo get_field('property_number_of_beds'); ?> Beds</span></li>
                            <li><img src="<?php echo home_url(); ?>/wp-content/uploads/2024/04/bath.svg" alt="bath icon"><span><?php echo get_field('property_number_of_baths'); ?> Baths</span></li>
                            <li><img src="<?php echo home_url(); ?>/wp-content/uploads/2024/04/size.svg" alt="size icon"><span><?php echo get_field('property_size'); ?> sqft</span></li>
                        </ul>
                        <a href="<?php the_permalink();?>" class="btn bg--light-p"><?php echo get_field('property_for_sale_or_rent'); ?></a>
                    </div>
                </div>
                <?php
                    endwhile;
                    else :
                         echo "No available properties posts yet";
                    endif;
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>

    <section class="homeSolution py100 bg-light dark:bg-dark">
        <div class="container">
            <div class="sectionHeading">
                <h2>YOUR ONE-STOP PROPERTY SOLUTION</h2>
                <p>Discover a hassle-free way to buy, sell, or rent your dream<br> property with our all-in-one real estate solution.</p>
            </div>
            <div class="homeSolution__wrapper">
                <?php if(have_rows("solutions_cards")) : ?>
                    <?php while( have_rows('solutions_cards') ) : the_row(); ?>
                        <div class="homeSolution__card">
                            <img src="<?php echo get_sub_field('solution_image');?>" alt="">
                            <h4><?php echo get_sub_field('solution_label');?></h4>
                            <p><?php echo get_sub_field('solution_description');?></p>
                            <a href="<?php echo get_sub_field('solution_link');?>" class="btn bg--light-p"><?php echo get_sub_field('solution_button');?></a>
                        </div>
                <?php endwhile; else: echo "No more client logos"; endif; ?>
            </div>
        </div>
    </section>

    <section class="homeDreamHome py100 bg-l_gray dark:bg-dark_2">
        <div class="container">
            <div class="sectionHeading">
                <h2>DISCOVER YOUR DREAM HOME</h2>
                <p>Discover a hassle-free way to buy, sell, or rent your dream<br> property with our all-in-one real estate solution.</p>
            </div>
            <div class="homeDreamHome__wrapper">
                <?php if(have_rows("dream_home_images")) : ?>
                    <?php while( have_rows('dream_home_images') ) : the_row(); ?>
                        <div class="homeDreamHome__entry"><img src="<?php echo get_sub_field('dream_home_image');?>" alt=""></div>
                <?php endwhile; else: echo "No more client logos"; endif; ?>
            </div>
        </div>
    </section>
        
    <section class="homeTopRatedProperties py100 bg-light dark:bg-dark">
        <div class="container">
            <div class="sectionHeading">
                <h2>OUR TOP-RATED PROPERTIES</h2>
                <p>Discover our top properties, carefully selected for quality, style, <br>and value. Find your dream home today</p>
            </div>
            <div class="homeTopRatedProperties__entries">
                <?php 
                    $properties_post = array(
                        'post_type' => 'properties_post', 
                        'posts_per_page' => 3,
                    );
                    $properties_postQuery = new WP_Query($properties_post)
                ?>
                <?php if($properties_postQuery->have_posts()) : while($properties_postQuery->have_posts()) : $properties_postQuery->the_post();?>
                <div class="homeTopRatedProperties__card cCard">
                    <div class="card__img"><img src="<?php echo get_field('property_image'); ?>" alt=""><span class="price"><?php echo get_field('property_price'); ?></span></div>
                    <div class="card__text">
                        <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                        <p class="location"><?php echo get_field('property_address'); ?></p>
                        <ul>
                            <li><img src="<?php echo home_url(); ?>/wp-content/uploads/2024/04/bed.svg" alt="bed icon"><span><?php echo get_field('property_number_of_beds'); ?> Beds</span></li>
                            <li><img src="<?php echo home_url(); ?>/wp-content/uploads/2024/04/bath.svg" alt="bath icon"><span><?php echo get_field('property_number_of_baths'); ?> Baths</span></li>
                            <li><img src="<?php echo home_url(); ?>/wp-content/uploads/2024/04/size.svg" alt="size icon"><span><?php echo get_field('property_size'); ?> sqft</span></li>
                        </ul>
                        <a href="<?php the_permalink();?>" class="btn bg--transparent-p"><?php echo get_field('property_for_sale_or_rent'); ?></a>
                    </div>
                </div>
                <?php
                    endwhile;
                    else :
                         echo "No available blog posts yet";
                    endif;
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>

    <section class="homeClientStories py100 bg-l_gray dark:bg-dark_2">
        <div class="container">
            <div class="sectionHeading">
                <h2>OUR CLIENT'S SUCCESS STORIES</h2>
                <p>Discover how our clients found their dream homes and successful<br> real estate investments with the help of our expert agents.</p>
            </div>
            <div class="homeClientStories__wrapper">
                <?php 
                    $clientTestimonies = array(
                        'post_type' => 'clientTestimonies', 
                        'posts_per_page' => -1,
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

    <section class="homeAgents py100 bg-light dark:bg-dark">
        <div class="container">
            <div class="sectionHeading">
                <h2>MEET OUR REAL ESTATE AGENTS</h2>
                <p>Meet our team of experienced and professional real estate agents <br>ready to help you with your property needs.</p>
            </div>
            <div class="homeAgents__wrapper">
                <?php 
                    $realEstateAgents = array(
                        'post_type' => 'realEstateAgents', 
                        'posts_per_page' => -1,
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
 
    <section class="homeBlog bg-l_gray dark:bg-dark_2 py100">
        <div class="container">
            <div class="sectionHeading">
                <h2>STAY INFORMED WITH OUR LATEST BLOG</h2>
                <p>Stay up-to-date with the latest news and trends in the real estate <br>market with our informative blog articles.</p>
            </div>
            <div class="homeBlogEntries">
                <?php 
                    $blog_Post = array(
                        'post_type' => 'blog_Post', 
                        'posts_per_page' => -1,
                    );
                    $blog_PostQuery = new WP_Query($blog_Post)
                ?>
                <?php if($blog_PostQuery->have_posts()) : while($blog_PostQuery->have_posts()) : $blog_PostQuery->the_post();?>
                <div class="homeBlogEntries__card">
                    <div class="card__img"><img src="<?php echo get_field('blog_post_image'); ?>" alt=""><span class="date"><?php echo get_the_date();?></span></div>
                    <div class="card__text">
                        <span class="blogCategory"><?php echo get_the_category()[0]->name;?></span>
                        <a href="#"><?php the_title();?></a>
                        <ul>
                            <li><i class="far fa-calendar"></i><span><?php echo get_the_date();?></span></li>
                            <li><i class="far fa-message"></i><span><?php echo get_field('blog_post_messages_count');?></span></li>
                        </ul>
                    </div>
                </div>
                <?php
                    endwhile;
                    else :
                         echo "No available blog posts yet";
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