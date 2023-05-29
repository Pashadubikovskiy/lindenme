<?php
/**
 * The template for displaying blog page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aiLeads
 */

get_header();
?>
    <main id="primary" class="site-main blog-page">

        <section class="page-hero">
            <div class="container">
                <div class="page-hero-content">
                    <h1 class="page-hero-content-title">
<!--                        --><?php //echo get_field('blog_title', 42);?>
                        The latest from LindenMe
                    </h1>
                    <?php $categories = get_categories(); ?>
                    <ul class="cat-list">
                        <li><a class="page-hero__category-link active" href="#!" data-slug="" style="color:#0023db; --data-bg: #f0f2ff;">All posts</a></li>

                        <?php foreach($categories as $category) :
                            $term = get_queried_object();
                            $color = get_field('main_color', $category);
                            $color2 = get_field('secondary_color', $category);
                            ?>
                            <li class="page-hero__category">
                                <a class="page-hero__category-link" href="#!" data-slug="<?= $category->slug; ?>" style="color:<?php echo $color; ?>; --data-bg: <?php echo $color2; ?>;">
                                    <?= $category->name; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </section>
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 6,
            'order_by' => 'date',
            'order' => 'desc',
        );
        $post_query = new WP_Query( $args ); // or $q = get_posts( $args );
        ?>
        <section class="blog-section">
            <div class="container">
                <div class="row posts-block">
                    <?php
                    if($post_query->have_posts() ) {
                        while($post_query->have_posts() ) {
                            $post_query->the_post();
                            get_template_part( 'template-parts/content', get_post_type() );
                        }
                        wp_reset_postdata();
                    }
                    ?>

                    <?php if ($post_query->max_num_pages > 1 ) {?>
                            <div style="width: 100%;" class="btn btn--secondary"><a id="more_posts" data-page="1" data-category="post" data-cat="">Load More</a></div>
                    <?php } ?>
                </div>
            </div>
            <div class="front-main-section__form front-main-section-form">
                <div class="container">
                    <div class="row">
                        <div class="front-main-section-form__text">
                            <?php if (get_field('form_text', 2)){the_field('form_text', 2);} ?>
                        </div>
                        <!--                        <form action="#" class="front-main-section-form__form">-->
                        <!--                            <input type="text" placeholder="Write your email">-->
                        <!--                            <button>-->
                        <!--                                Get started-->
                        <!--                            </button>-->
                        <!--                        </form>-->
                        <?php echo do_shortcode('[contact-form-7 id="32" title="Contact form 1" html_class="front-main-section-form__form"]');?>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- #main -->
<?php
get_footer();
