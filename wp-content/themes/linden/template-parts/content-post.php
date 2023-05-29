<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package linden
 */

?>
<article class="front-section-posts__item front-section-posts-item">
    <a href="<?php echo get_the_permalink();?>" class="front-section-posts-item__link">
        <img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php the_title();?>" class="front-section-posts-item__image">
        <div class="front-section-posts-item__category-views">
            <?php
            $categories = get_the_category();
            if ( ! empty( $categories ) ) {
                $color = get_field('main_color', $categories[0]);
                echo '<span class="front-section-posts-item__category" style="color:'. $color .'">' . esc_html( $categories[0]->name ) . '</span>';
            }
            ?>

            <span class="front-section-posts-item__views">
                                                 <?php echo gt_get_post_view(); ?>
                                             </span>
        </div>
        <span class="front-section-posts-item__title">
                                            <?php the_title();?>: A Beginner’s Guide to Using TouchDesigner with Live
                                         </span>
    </a>
</article>
