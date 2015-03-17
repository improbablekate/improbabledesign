<?php
/**
 * Template Name: Home Page
 *
 * @package _s
 */
get_header(); ?>

<div class="hero" style="background-image: url(<?php the_field('hero_background_image'); ?>);">
    <div class="content-wrap row">
        <h1><?php the_field('hero_headline'); ?></h1>
        <h3><?php the_field('hero_subhead'); ?></h3>
        <a class="button" href="<?php the_field('hero_button_link'); ?>"><?php the_field('hero_button_label'); ?></a>
    </div><!-- end .content-wrap -->
    
</div><!-- end .hero -->

<div class="drivers">
    <div class="row">
        <div class="driver-column"><!-- driver 1 -->
            <img class="driver-icon" src="<?php the_field('driver_icon_1'); ?>" />
            <h2><?php the_field('driver_title_1'); ?></h2>
            <p><?php the_field('driver_text_1'); ?></p>
        </div><!-- end .driver-column 1 -->
        
        <div class="driver-column"><!-- driver 2 -->
            <img class="driver-icon" src="<?php the_field('driver_icon_2'); ?>" />
            <h2><?php the_field('driver_title_2'); ?></h2>
            <p><?php the_field('driver_text_2'); ?></p>
        </div><!-- end .driver-column 2 -->
        
        <div class="driver-column"><!-- driver 3 -->
            <img class="driver-icon" src="<?php the_field('driver_icon_3'); ?>" />
            <h2><?php the_field('driver_title_3'); ?></h2>
            <p><?php the_field('driver_text_3'); ?></p>
        </div><!-- end .driver-column 3 -->
        
    </div><!-- end .row -->
</div><!-- end .drivers -->


<?php get_footer(); ?>