<?php
/**
 * The template for displaying the blog page.
 *
 * @package PositiveHouseWP
 * @modified_by Niyo
 */
get_header();
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
            ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="entry-meta">
                            <?php the_time('F j, Y'); ?> by <?php the_author_posts_link(); ?>
                        </div>
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>
                    </article>
            <?php
                endwhile;
            else :
                ?>
                <p><?php esc_html_e('No posts found.', 'PositiveHouseWP'); ?></p>
            <?php
            endif;
            ?>
            <div class="pagination">
                <?php the_posts_pagination(); ?>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>