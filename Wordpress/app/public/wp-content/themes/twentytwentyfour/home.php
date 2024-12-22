<?php
get_header(); ?>

    <div class="homepage-container">
        <h1>Welcome to Our Food Waste Reduction Service</h1>
        <p>Find discounted meals and help reduce food waste in your area!</p>

        <section class="featured-restaurants">
<!--            placeholder things here-->
            <h2>Placeholder</h2>
            <ul>
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 5,
                );
                $query = new WP_Query($args);

                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post(); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <p><?php the_excerpt(); ?></p>
                        </li>
                    <?php }
                    wp_reset_postdata();
                } else {
                    echo '<p>No content available.</p>';
                }
                ?>
            </ul>
        </section>
        <section class = "bottom">
            <div class="homepage-bottom">
                <div class="grid-container">
                    <!-- 1 Reuse -->
                    <div class="grid-item">
                        <p class="icon-container"</p>
                        <p class="item-text">Turn Surplus into Sustainability</p>
                        <button class="item-button">Reuse More</button>
                    </div>
                    <!-- 2 Deliver -->
                    <div class="grid-item">
                        <p class="icon-container"</p>
                        <p class="item-text">Turn-by-Step Delivery into Meals</p>
                        <button class="item-button">Deliver More</button>
                    </div>
                    <!-- 3 Meal?? wat -->
                    <div class="grid-item">
                        <p class="icon-container"</p>
                        <p class="item-text">Comfort Meal Excess into Valuable Recite</p>
                        <button class="item-button">Appetize More</button>
                    </div>

                    <!-- 4 business -->
                    <div class="grid-item">
                        <p class="icon-container"</p>
                        <p class="item-text">Benefits for Business</p>
                        <button class="item-button">Learn More</button>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php
get_footer();
?>