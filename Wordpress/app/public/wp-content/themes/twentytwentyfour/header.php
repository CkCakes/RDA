<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


<div class="site-background"></div>


<div class="top-bar">
    <div class="top-bar-content">
        <a href="<?php echo home_url(); ?>" class="site-logo"><?php bloginfo('name'); ?></a>
        <nav class="top-bar-navigation">
            <ul class = "top-bar-nav">
                <li>
                    <a href="<?php echo home_url(); ?>/store">Store</a>
                </li>
                <li>
                    <a href="<?php echo home_url(); ?>/delivery">Delivery</a>
                </li>
                <li>
                    <a href="<?php echo home_url(); ?>/business">Business</a>
                </li>
                <li>
                    <a href="<?php echo home_url(); ?>/sustainability">Sustainability</a>
                </li>
            </ul>
        </nav>
        <div class="top-bar-search">
            <?php get_search_form(); ?>
        </div>
    </div>
</div>