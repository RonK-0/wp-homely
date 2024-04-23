
    <!-- FOOTER -->
    <footer class="footer bg-cover bg-no-repeat bg-center font-text-inter" style="background-image:url(<?php echo home_url(); ?>/wp-content/uploads/2024/04/footer-bg.png)">
        <div class="container">
            <div class="footer__wrapper text-light pt-[100px] pb-[30px]">
                <div class="footer__top f-col-center mb-10 md:mb-8 text-center">
                    <h2 class="mb-4 fs-40 ft-sb lh-120 text-light dark:text-light lg:max-w-[66.67%]"><?php echo get_field('footer_text','option'); ?></h2>
                    <a href="<?php echo get_field('footer_button_link','option'); ?>" class="btn bg--primary-w ft-sb"><?php echo get_field('footer_button','option'); ?></a>
                </div>
                <div class="footer__middle flex flex-wrap lg:flex-nowrap lg:justify-between">
                    <div class="lg:order-1 mb-[54px] w-full lg:w-[25%] text-wrap px-0 lg:px-2">
                        <h3 class="text-[28px] mb-3 ft-md">LOCATION</h3>
                        <?php if( have_rows('footer_location', 'option') ): ?>
                            <?php $location_count = count(get_field('footer_location','option')) ?>
                            <?php while( have_rows('footer_location', 'option') ) : the_row(); ?>
                                <?php if($location_count <= get_row_index()) { ?>
                                    <p class="fs-19 lh-130 mb-10"><?php echo get_sub_field('location_address') ?></p>
                                 <?php } else { ?>
                                    <p class="fs-19 lh-130 mb-3"><?php echo get_sub_field('location_address') ?></p>
                                <?php } ?>
                        <?php endwhile; endif; ?>

                        <h3 class="text-[28px] mb-4 ft-md">TIMING</h3>
                        <?php if( have_rows('footer_timing', 'option') ): ?>
                            <?php $email_count = count(get_field('footer_timing','option')) ?>
                            <?php while( have_rows('footer_timing', 'option') ) : the_row(); ?>
                                <?php if(get_row_index() == 1) { ?>
                                    <p class="fs-19 lh-130 mb-3 ft-md -ls-2"><?php echo get_sub_field('timing'); ?></p>
                                <?php } else { ?>
                                    <p class="fs-19 lh-130 ft-md -ls-2"><?php echo get_sub_field('timing'); ?></p>
                                <?php } ?>
                        <?php endwhile; endif; ?>
                    </div>
                    <div class="order-first lg:order-2 lg:mx-auto w-full lg:w-[33.33%] mb-12 lg:mt-[150px] lg:mb-[90px] px-0 lg:px-2">
                        <h3 class="fs-23 ft-md mb-4">Subscribe Our Newsletter</h3>
                        <form action="" class="w-full flex justify-between bg-light dark:bg-dark_2 py-[12px] px-[24px] rounded-[10px] fs-19">
                            <input type="email" placeholder="Your Email" id="footerEmailInput" class="w-full bg-light dark:bg-dark_2 text-d_gray dark:text-light_2">
                            <button class="text-d_gray dark:text-light_2 text-[24px] leading-none mr-1"><i class="fas fa-paper-plane"></i></button>
                        </form>
                    </div>
                    <div class="lg:order-3 mb-[54px] w-full lg:w-[25%] text-wrap f-col px-0 lg:px-2">
                        <h3 class="text-[28px] mb-3 ft-md">CONTACT US</h3>
                        <?php if( have_rows('footer_contact_tel', 'option') ): ?>
                            <?php while( have_rows('footer_contact_tel', 'option') ) : the_row(); ?>
                                <a href="tel:<?php echo str_replace(' ', '', get_sub_field('contact_tel')); ?>" class="mb-3"><span class="ft-sb hover:text-primary"><?php echo get_sub_field('contact_tel'); ?></span></a>
                        <?php endwhile; endif; ?>
                        
                        <?php if( have_rows('footer_contact_email', 'option') ): ?>
                            <?php $email_count = count(get_field('footer_contact_email','option')) ?>
                            <?php while( have_rows('footer_contact_email', 'option') ) : the_row(); ?>
                                <?php if($email_count <= get_row_index()) { ?>
                                    <a href="mailto:<?php echo get_sub_field('email') ?>" class="mb-8"><span class="ft-md hover:text-primary"><?php echo get_sub_field('email') ?></span></a>
                                <?php } else { ?>
                                    <a href="mailto:<?php echo get_sub_field('email') ?>" class="mb-3"><span class="ft-md hover:text-primary"><?php echo get_sub_field('email') ?></span></a>
                                <?php } ?>
                        <?php endwhile; endif; ?>
                        

                        <h3 class="text-[28px] mb-3">FOLLOW US</h3>
                        <ul class="flex text-[24px] gap-3">
                            <?php if( have_rows('footer_socials', 'option') ): ?>
                                <?php while( have_rows('footer_socials', 'option') ) : the_row(); ?>
                                    <li><a href="<?php echo get_sub_field('footer_social_link'); ?>" class="<?php echo get_sub_field('footer_social_icon'); ?> hover:text-primary"></a></li>
                                    <li><a href=""><i class=""></i></a></li>
                            <?php endwhile; endif; ?>
                        </ul>
                    </div>
                </div>
                <p class="text-center fs-19"><?php echo get_field('footer_copyright','option'); ?></p>
            </div>
        </div>
    </footer>

    <div class="backTop">
        <button class="back-to-top fas fa-angle-up" onclick="scrollToTop()"></button>
        <div class="back-to-top-bg"></div>
    </div>
    <?php wp_footer() ?>
</body>
</html>