
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title() ?></title>

    <!-- INTER FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <!-- POPPINS FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <?php wp_head() ?>

</head>
<body id="top" class="bg-light dark:bg-dark dark:text-light">
    <header class="header text-dark absolute top-0 l-0 z-[999] w-full py-[20px] pt-[25px]">
        <div class="container">
            <nav class="header__wrapper flex between-center relative">
                <?php the_custom_logo();?>
                <div>
                    <button class="burger p-[10px] text-[24px] block xl:hidden"><i class="fas fa-bars"></i></button>
                    <ul class="nav__links hidden xl:flex flex-col xl:flex-row xl:justify-between gap-[30px]">
                        <?php wp_nav_menu( array(
                            'theme_location' => 'header_menu',
                        ))?>
                        <button class="toggleBtn block xl:hidden" id="b-w-button-1"><i class="fas fa-circle-half-stroke"></i></button>
                    </ul>
                </div>
                <div class="hidden xl:flex gap-3 items-center">
                    <div class="hidden xl:flex justify-end gap-[clamp(12px,0.83vw,20px)] text-[clamp(20px,1.25vw,36px)] items-center ">
                        <object data="<?php echo home_url(); ?>/wp-content/uploads/2024/04/phone.svg">"></object>
                        <?php if( have_rows('footer_contact_tel', 'option') ): ?>
                            <?php $first_entry = true;  while( have_rows('footer_contact_tel', 'option') ) :  the_row(); if($first_entry){ ?>
                                <a href="tel:<?php echo str_replace(' ', '', get_sub_field('contact_tel')); ?>"><span class="ft-md hover:text-primary"><?php echo get_sub_field('contact_tel'); ?></span></a>
                            <?php $first_entry = false; } endwhile; endif; ?>
                    </div>
                    <button class="toggleBtn hidden xl:block" id="b-w-button-2"><i class="fas fa-circle-half-stroke"></i></button>
                </div>
            </nav>
        </div>
    </header>