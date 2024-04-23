<?php get_header() ?>

<!-- CONTENT START -->
<section class="propBanner" id="pageBanner" style="background-image: url(<?php echo get_field('per_page_banner','option');?>)">
        <div class="container">
            <div class="propBanner__wrapper">
                <h2>PROPERTY DETAILS</h2>
            </div>
        </div>
    </section>

    <section class="property__main py100">
        <!-- PROPERTY SLIDER -->
        <section class="property__detail mb-8 md:mb-[42px] lg:mb-12 xl:mb-16">
            <div class="container">
                <h2 class="ft-sb text-prop_title uppercase fs-40 mb-[18px] md:mb-[22px] lg:mb-[26px] xl:mb-8 text-dark dark:text-light -ls-1 lh-120"><?php the_title();?></h2>
                <div class="house__detail xl:flex flex-col">
                    <div class="house__detail_wrapper mb-[1.3rem] overflow-hidden rounded-[0.625rem]">
                        <div class="house__detail__slider flex">
                            <?php if(have_rows("house_detail")) : ?>
                                <?php while( have_rows('house_detail') ) : the_row(); ?>
                                <div id="house-<?php echo get_row_index();?>-content" class="house__item">
                                    <img src="<?php echo get_sub_field('house_detail_image');?>" alt="">
                                </div>
                            <?php endwhile; else: echo "No more property images yet"; endif; ?>
                        </div>
                    </div>

                    <div class="house__detail__slider__thumbnails flex flex-row gap-5" id="house__slider__nav__small">
                        <?php if(have_rows("house_detail")) : ?>
                            <?php while( have_rows('house_detail') ) : the_row(); ?>
                            <button><img src="<?php echo get_sub_field('house_detail_image');?>" alt="" class="rounded-[0.625rem]"></button>
                        <?php endwhile; else: echo "No more property images yet"; endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- PROPERTY SLIDER END -->

        <!-- PROPERTY SCHEDULE AND INFORMATION -->
        <section class="property__sched__info py-8 xl:pb-[4.5rem]">
            <div class="container">
                <div class="property_sched__info__wrapper grid xl:grid-cols-[_26rem,_1fr] gap-6">
                    <!-- LEFT SIDE FORM - w-[33%]-->
                    <div class="schedule__tour font-text-inter">
                        <div class="contact bg-l_gray dark:bg-d_gray p-8 rounded-[0.65rem] mb-6">
                            <h2 class="mb-4 ft-md text-lg xl:text-2xl text-dark dark:text-light">Schedule a Tour</h2>
                            <form action="">
                                <div class="form__wrapper flex xl:f-col flex-wrap gap-6">
                                    <div class="flex f-col md:flex-row xl:f-col gap-6 w-full">
                                        <input type="date" name="date">
                                        <input type="time" name="time">
                                    </div>
                                    <div class="flex f-col md:flex-row xl:f-col gap-6 w-full">
                                        <input type="text" name="name" placeholder="Your Name">
                                        <input type="email" name="email" placeholder="Your Email">
                                    </div>
                                    <input type="tel" name="phone" placeholder="Your Phone Number">
                                    <textarea name="message" id="" cols="30" rows="10" placeholder="Message"></textarea>   
                                    <button class="btn bg--primary-w-BIG">Submit A Tour Request
                                    </a> 
                                </div>
                            </form>
                        </div>
                        <div class="broker bg-l_gray dark:bg-d_gray rounded-[0.65rem]">
                            <div class="broker__wrapper py-[1.875rem] flex flex-col items-center gap-1 xl:gap-2">
                                <?php if(have_rows("broker_info")) : ?>
                                    <?php while( have_rows('broker_info') ) : the_row(); ?>
                                        <!-- <option value="<?php //echo get_sub_field('city');?>"><?php //echo get_sub_field('city');?></option> -->

                                        <img src="<?php echo get_sub_field('broker_image');?>" alt="">
                                        <h5 class="text-lg xl:text-[1.438rem] ft-md text-dark dark:text-light"><?php echo get_sub_field('broker_name');?></h5>
                                        <small class="text-fs-16 text-gray dark:text-light_2/80 mb-2 ft-md xl:text-fs-16_md xl:mb-3"><?php echo get_sub_field('broker_position');?></small>

                                        <ul class="flex gap-6">
                                            <?php if(have_rows("broker_socials")) : ?>
                                                <?php while( have_rows('broker_socials') ) : the_row(); ?>
                                                    <li><a href="<?php echo get_sub_field('broker_social_link'); ?>"><i class="<?php echo get_sub_field('broker_social_icon'); ?>"></i></a></li>
                                            <?php endwhile; else: echo "No Broker Socials Available yet"; endif; ?>
                                        </ul>
                                <?php endwhile; else: echo "No Broker Info Available at the moment."; endif; ?>
                            </div>
                        </div>
                    </div>

                    <!-- RIGHT SIDE INFORMATION - w-[67%]-->
                    <div class="house__information__reviews font-text-inter">
                        <div class="house__info bg-l_gray dark:bg-d_gray p-4 sm:p-8 rounded-[0.65rem] mb-8">
                            <h2 class="mb-4 ft-md text-2xl text-dark dark:text-light">Details</h2>
                            <ul class="grid sm:grid-cols-2 md:grid-cols-3 items-center">
                                <li>
                                    <img src="<?php echo get_field('global_bed_icon','option');?>" alt="">
                                    <h3 class="text-xl"><?php echo get_field('bedroom'); ?> Bed Rooms</h3>
                                </li>
                                <li>
                                    <img src="<?php echo get_field('global_bath_icon','option');?>" alt="">
                                    <h3 class="text-xl"><?php echo get_field('bathroom'); ?> Bathrooms</h3>
                                </li>
                                <li>
                                    <img src="<?php echo get_field('global_size_icon','option');?>" alt="">
                                    <h3 class="text-xl"><?php echo get_field('size'); ?></h3>
                                </li>
                                <li>
                                    <img src="<?php echo get_field('global_date_built_icon','option');?>" alt="">
                                    <h3 class="text-xl"><?php echo get_field('date'); ?></h3>
                                </li>
                                <li>
                                    <img src="<?php echo get_field('global_garage_icon','option');?>" alt="">
                                    <h3 class="text-xl"><?php echo get_field('garage'); ?></h3>
                                </li>
                                <li>
                                    <img src="<?php echo get_field('global_property_type_icon','option');?>" alt="">
                                    <h3 class="text-xl"><?php echo get_field('property_type'); ?></h3>
                                </li>
                            </ul>
                        </div>

                        <div class="house__overview bg-l_gray dark:bg-d_gray p-4 sm:p-8 rounded-[0.65rem] mb-8">
                            <h2 class="ft-md text-2xl mb-4 text-dark dark:text-light">Overview</h2>
                            <p class="mb-0 text-gray dark:text-light_2 text-[16px] ls-3 line-clamp-5 text-ellipsis lg:line-clamp-none"><?php echo get_field('overview_info'); ?>
                            </p>
                        </div>

                        <div class="house__location bg-l_gray dark:bg-d_gray p-4 sm:p-8 rounded-[0.65rem] mb-8">
                            <h2 class="ft-md text-2xl mb-4 text-dark dark:text-light">Location</h2>
                            <span class="text-gray dark:text-light_2/70 mb-1 text-fs-16"><?php echo get_field('location_info'); ?></span>
                            <div>
                                <iframe src="<?php echo get_field('map'); ?>" height="300" width="100%"  style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>

                        <div class="house__floor_plans bg-l_gray dark:bg-d_gray p-4 sm:p-8 rounded-[0.65rem] mb-8">
                            <h2 class="ft-md text-2xl mb-4 text-dark dark:text-light">Floor Plans</h2>
                            <div class="floor__plans__wrapper flex flex-col flex-wrap gap-3">
                                <?php if(have_rows("floor_plans_accordion")) : ?>
                                <?php while( have_rows('floor_plans_accordion') ) : the_row(); ?>
                                    <div class="floor_plans_accordion">
                                        <div class="floor_plans_info">
                                            <span><i class="fa-solid fa-angle-down"></i><?php echo get_sub_field('floor');?></span>  
                                            <ul class="">
                                                <li>Rooms: <?php echo get_sub_field('rooms');?></li>
                                                <li>Baths: <?php echo get_sub_field('baths');?></li>
                                                <li>Size: <?php echo get_sub_field('size');?></li>
                                            </ul>  
                                        </div>
                                        <div class="floor__plan__img">
                                            <img src="<?php echo get_sub_field('accordion_image');?>" alt="">
                                        </div>     
                                    </div>
                                <?php endwhile; else: echo "No floor plans available yet"; endif; ?>
                            </div>
                        </div>

                        <div class="house__demo bg-l_gray dark:bg-d_gray p-4 sm:p-8 rounded-[0.65rem] mb-8">
                            <h2 class="ft-md text-2xl mb-4 text-dark dark:text-light">Video</h2>
                            <div class="img-box" style="background-image: url(<?php echo get_field('video_image');?>)">   
                                <div class="overlay">
                                    <button class="play-btn">
                                        <i class="fa-solid fa-play"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="video-box">
                                <video controls=""><source src="<?php echo get_field('video_source');?>" type="video/mp4"></video>
                            </div>
                        </div>

                        <div class="house__reviews bg-l_gray dark:bg-d_gray p-4 sm:p-8 rounded-[0.65rem] mb-8">
                            <?php if(have_rows("customer_reviews")) : ?>
                                <h2 class="ft-md text-2xl mb-4 text-dark dark:text-light">(<?php echo count(get_field('customer_reviews')); ?> Reviews)</h2>
                                <?php while( have_rows('customer_reviews') ) : the_row(); ?>
                                    <div class="customer__reviews mb-8">
                                        <div class="customer__user flex justify-between items-center mb-4">
                                            <div class="customer__info flex items-center gap-3 sm:gap-7">
                                                <img src="<?php echo get_sub_field('customer_image');?>" alt="">
                                                <div>
                                                    <h4 class="text-[16px] ft-md mb-2"><?php echo get_sub_field('customer_name');?></h4>
                                                    <p class="text-[13px] sm:text-[16px] ft-normal"><?php echo get_sub_field('review_date');?></p>
                                                </div>
                                            </div>
                                            <div class="customer__stars flex gap-3">
                                                <?php $stars = get_sub_field('review_stars');
                                                for ($i=1; $i <= $stars; $i++) { 
                                                    echo '<i class="fas fa-star"></i>';
                                                 } ?>
                                            </div>
                                        </div>
                                        <p><?php echo get_sub_field('review');?></p>
                                    </div>
                            <?php endwhile; else: echo "No Customer Reviews yet"; endif; ?>
                        </div>

                        <div class="add__review bg-l_gray dark:bg-d_gray p-4 sm:p-8 rounded-[0.65rem] mb-8 font-text-inter">
                            <h2 class="ft-md text-2xl mb-4 text-dark dark:text-light">Add A Review</h2>
                    
                            <div class="flex items-center gap-[12px] mb-5">
                                <div class="rating"> <h2 class="ft-md text-2xl text-dark dark:text-light">Rating</h2> </div>

                                <label class="star__reviews">
                                    <input type="radio" id="rating-0" name="rating" value="0">
                                    <label class="rating-0" for="rating-0" class="opacity-0">
                                        <button id="star-0" class="fa-solid fa-star"></button>
                                    </label>

                                    <input type="radio" id="rating-1" name="rating" value="1" checked="checked">
                                    <label for="rating-1">
                                        <button id="star-1" class="star fa-solid fa-star text-primary active"></button>
                                    </label>
                                    
                                    <?php for($i=2; $i<=5; $i++){?>
                                        <input type="radio" id="rating-<?php echo $i?>" name="rating" value="<?php echo $i?>">
                                        <label for="rating-<?php echo $i?>">
                                            <button id="star-<?php echo $i?>" class="star fa-regular fa-star"></button>
                                        </label>
                                    <?php } ?>
                                </label>
                            </div>
                            <form action="">
                                <div class="form__review mb-5">
                                    <div class="form__identity mb-5 grid gap-3 grid-cols-1 lg:grid-cols-2 lg:gap-5">
                                        <input type="text" name="name" placeholder="Your Name">
                                        <input type="email" name="email" placeholder="Your Email"> 
                                    </div>
                                    <label class="reminder">
                                        <input type="checkbox" id="checkbox">
                                        <label for="checkbox" class="checkbox__label relative">
                                            <span class="checkmark"></span>
                                            Keep me posted via email for future comments on this website
                                        </label>
                                    </label>
                                    <textarea name="review" id="" cols="30" rows="10" placeholder="Review" class="max-h-[240px]"></textarea>
                                </div>
                                <a href="#"  class="btn bg--primary-w-BIG">Submit Review</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PROPERTY SCHEDULE AND INFORMATION END -->
    </section>
   

    <!-- PROPERTY CHECKOUT -->
    <section class="propertyCheckout py100 bg-l_gray dark:bg-dark_2">
        <div class="container">
            <div class="sectionHeading text-left">
                <h2>RELATED PROPERTIES</h2>
            </div>
            <div class="propertyCheckout__entries">
                <?php 
                    $properties_post = array(
                        'post_type' => 'properties_post',
                        'posts_per_page' => 5,
                    );
                    $properties_postQuery = new WP_Query($properties_post)
                ?>
                <?php if($properties_postQuery->have_posts()) : while($properties_postQuery->have_posts()) : $properties_postQuery->the_post();?>
                <div class="propertyCheckout__card cCard">
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
                         echo "No available properties posts yet";
                    endif;
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>

    <!-- PROPERTY CHECKOUT END -->
<!-- CONTENT END -->
<?php get_footer() ?>