<?php
/*
    Template Name: Properties Page
*/
?>

<?php get_header() ?>

<!-- CONTENT START -->

    <!-- start of properties -->
    <section class="propBanner" id="pageBanner" style="background-image: url(<?php echo get_field('banner_img');?>)">
        <div class="container">
            <div class="propBanner__wrapper">
                <h2><?php echo get_field('banner_text');?></h2>
            </div>
        </div>
    </section>

    <section class="properties py100 bg-light dark:bg-dark_2">
        <div class="container">
            <div class="properties__wrapper grid xl:grid-cols-[_2fr, _1fr] gap-6">
                <div class="properties__properties">
                    <div class="properties__cards">
                        <?php 
                            $properties_post = array(
                                'post_type' => 'properties_post',
                                'posts_per_page' => 6,
                                'paged' =>  get_query_var('paged', 2) 
                            );
                            $properties_postQuery = new WP_Query($properties_post)
                        ?>
                        <?php if($properties_postQuery->have_posts()) : while($properties_postQuery->have_posts()) : $properties_postQuery->the_post();?>
                            <div class="properties__card cCard">
                                <div class="card__img"><img src="<?php echo get_field('property_image'); ?>" alt=""><span class="price"><?php echo get_field('property_price'); ?></span></div>
                                <div class="card__text">
                                    <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                                    <p class="location"><?php echo get_field('property_address'); ?></p>
                                    <ul>
                                    <li><img src="<?php echo home_url(); ?>/wp-content/uploads/2024/04/bed.svg" alt="bed icon"><span><?php echo get_field('property_number_of_beds'); ?> Beds</span></li>
                                        <li><img src="<?php echo home_url(); ?>/wp-content/uploads/2024/04/bath.svg" alt="bath icon"><span><?php echo get_field('property_number_of_baths'); ?> Baths</span></li>
                                        <li><img src="<?php echo home_url(); ?>/wp-content/uploads/2024/04/size.svg" alt="size icon"><span><?php echo get_field('property_size'); ?> sqft</span></li>
                                    </ul>
                                    <button class="btn bg--transparent-p"><?php echo get_field('property_for_sale_or_rent'); ?></button>
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
                    
                    <div class="properties__page__selection">
                        <div class="properties__page__selection__wrapper">
                            <?php 
                                global $wp_query;
                                $big = 999999999; // need an unlikely integer
                                echo paginate_links( array(
                                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                    'format' => '?paged=%#%',
                                    'current' => max( 1, get_query_var('paged') ),
                                    'prev_next'    => true, // shows previous and next buttons
                                    'prev_text'    => __('<i class="fas fa-chevron-left"></i>'), // change prev link text
                                    'next_text'    => __('<i class="fas fa-chevron-right"></i>'), // change next link text
                                    'total' => $properties_postQuery->max_num_pages
                                ) );
                            ?>
                        </div>
                    </div>
                </div>
                
                <div class="properties__selection__sidebar">
                    <div class="selection__wrapper">
                        <div class="selection__forms">
                            <!-- selector for cite -->
                            <div>
                                <h3 class="title">City</h3>
                                <select class="selector" name="Property City" id="city">
                                    <?php if(have_rows("property_city")) : ?>
                                    <?php while( have_rows('property_city') ) : the_row(); ?>
                                        <option value="<?php echo get_sub_field('city');?>"><?php echo get_sub_field('city');?></option>
                                    <?php endwhile; else: echo "No more property cities"; endif; ?>
                                </select>
                            </div>
                            <!-- selector for property category -->
                            <div>
                                <h3 class="title">Property Category</h3>
                                <select class="selector" name="Property Category" id="category">
                                    <?php if(have_rows("property_category")) : ?>
                                    <?php while( have_rows('property_category') ) : the_row(); ?>
                                        <option value="<?php echo get_sub_field('category');?>"><?php echo get_sub_field('category');?></option>
                                    <?php endwhile; else: echo "No more property categories"; endif; ?>
                                </select>
                            </div>  
                            <!-- radiobutton for bedrooms -->
                            <div>
                                <h3 class="title">Number of Bedrooms</h3>
                                <div class="selection__room">
                                    <ul>
                                        <li>
                                            <label class="rms">
                                                <input type="checkbox" id="roomCheckbox1"><label class="checkbox__label" for="checkbox1"><span class="checkmark"></span> Room 1</label>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="rms">
                                                <input type="checkbox" id="roomCheckbox2"><label class="checkbox__label" for="checkbox2"><span class="checkmark"></span> Room 2</label>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="rms">
                                                <input type="checkbox" id="roomCheckbox3"><label class="checkbox__label" for="checkbox3"><span class="checkmark"></span> Room 3</label>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="rms">
                                                <input type="checkbox" id="roomCheckbox4"><label class="checkbox__label" for="checkbox4"><span class="checkmark"></span> Room 4</label>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="rms">
                                                <input type="checkbox" id="roomCheckbox5"><label class="checkbox__label" for="checkbox5"><span class="checkmark"></span> Room 5</label>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="rms">
                                                <input type="checkbox" id="roomCheckbox6"><label class="checkbox__label" for="checkbox6"><span class="checkmark"></span> Room 6</label>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- checkboxes for rooms -->
                            <div>
                                <h3 class="title">Number of Bathrooms</h3>
                                <div class="selection__bathroom">
                                    <ul>
                                        <li>
                                            <label class="rms">
                                                <input type="checkbox" id="bathroomCheckbox1"><label class="checkbox__label" for="checkbox"><span class="checkmark"></span> Bathroom 1</label>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="rms">
                                                <input type="checkbox" id="bathroomCheckbox2"><label class="checkbox__label" for="checkbox"><span class="checkmark"></span> Bathroom 2</label>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="rms">
                                                <input type="checkbox" id="bathroomCheckbox3"><label class="checkbox__label" for="checkbox"><span class="checkmark"></span> Bathroom 3</label>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="rms">
                                                <input type="checkbox" id="bathroomCheckbox4"><label class="checkbox__label" for="checkbox"><span class="checkmark"></span> Bathroom 4</label>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="rms">
                                                <input type="checkbox" id="bathroomCheckbox5"><label class="checkbox__label" for="checkbox"><span class="checkmark"></span> Bathroom 5</label>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="rms">
                                                <input type="checkbox" id="bathroomCheckbox6"><label class="checkbox__label" for="checkbox"><span class="checkmark"></span> Bathroom 6</label>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- sqft range slider -->
                            <div class="sqft_slider_wrapper">
                                <h3 class="title">Square Feet</h3>
                                <div class="sqft_slider">
                                    <div id="range_slider_sqft"></div>
                                    <p class="range_label">300 sq. ft. - 1000 sq. ft.</p>
                                </div>
                            </div>
                            <!-- price range slider -->
                            <div class="price_slider_wrapper">
                                <h3 class="title">Price</h3>
                                <div class="price_slider">
                                    <div id="range_slider_price"></div>
                                    <p class="range_label">Range: $1000 - 10,000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of properties -->

<!-- CONTENT END -->

<?php get_footer() ?>