<?php
get_header();

if(is_page('store')):?>
    <div class="store-container">
        <!-- Meals -->
        <section class="meals-section">
            <div class="meals-grid">

                <?php
                // WP_Query to fetch the posts (meals)
                $args = array(
                    'post_type' => 'post', // or the custom post type if meals are a custom post type
                    'posts_per_page' => 6, // You can change this number to display more or fewer meals
                    'orderby' => 'date',   // Order by the date to get the most recent posts
                    'order' => 'DESC',     // Display most recent first
                );

                $meal_query = new WP_Query($args);

                if ($meal_query->have_posts()) :
                    while ($meal_query->have_posts()) : $meal_query->the_post(); ?>
                        <div class="meal-item">
                            <!-- Featured Image -->
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="meal-thumbnail">
                                    <?php the_post_thumbnail('medium'); ?>
                                </div>
                            <?php endif; ?>

                            <!-- Meal Title -->
                            <h3 class="meal-title"><?php the_title(); ?></h3>

                            <!-- Meal Excerpt -->
                            <p class="meal-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>

                            <!-- View Meal Button -->
                            <a href="<?php the_permalink(); ?>" class="meal-button">View</a>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();
                else : ?>
                    <p>No meals found.</p>
                <?php endif; ?>
            </div>
        </section>
    </div>

    <?php
else:
    echo "this is where regular pages go";
endif;
    ?>
<?php
get_footer();
?>