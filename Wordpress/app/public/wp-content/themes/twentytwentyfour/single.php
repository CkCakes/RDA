<?php
get_header();

?>

    <main id="primary" class="post-main">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <!-- title -->
            <header class="entry-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
            </header>

            <!-- image -->
            <?php if (has_post_thumbnail()) : ?>
                <div class="post-thumbnail">
                    <?php the_post_thumbnail('large'); ?>
                </div>
            <?php endif; ?>

            <!-- tags and categories -->
            <div class="meal-details">
                <p class="meal-categories">
                    <?php
                    $categories = get_the_category();
                    if (!empty($categories)) :
                        foreach ($categories as $category) : ?>
                            <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="category-box"><?php echo esc_html($category->name); ?></a>
                        <?php endforeach;
                    endif;
                    ?>
                </p>

                <p class="meal-tags">
                    <?php
                    $tags = get_the_tags();
                    if ($tags) :
                        foreach ($tags as $tag) : ?>
                            <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" class="tag-box"><?php echo esc_html($tag->name); ?></a>
                        <?php endforeach;
                    endif;
                    ?>
                </p>

            </div>

        </article>
    </main>

<?php
get_footer();
?>