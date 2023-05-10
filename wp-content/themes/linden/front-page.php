<?php
/**
 * The template for displaying front-page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gipnoliga
 */

get_header();
?>
    <main id="primary" class="site-main">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
        <section class="front-main-section">
            <div class="container">
                <div class="row">
                    <div class="front-main-section__text">
                        <h1 class="front-main-section__title">
                            Linden<span class="front-main-section__title--highlited">Me</span>
                        </h1>
                        <div class="front-main-section__description">
                            <?php the_content();?>
                        </div>
                        <div class="front-main-section__btns">
                            <a class="c-button front-main-section__btn front-main-section__btn--arrow" href="<?php if (get_field('get_started_link')){the_field('get_started_link');} else { echo '#contact';}?>">
                                Get started
                                <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                    <path d="m13.765 8.265-4.5 4.5a.375.375 0 0 1-.53-.53l3.86-3.86H2.5a.375.375 0 0 1 0-.75h10.094l-3.859-3.86a.375.375 0 0 1 .53-.53l4.5 4.5a.375.375 0 0 1 0 .53Z" fill="#fff"/>
                                </svg>
                            </a>
                            <?php if (get_field('video_embed_code')){?>
                                <button class="front-main-section__btn front-main-section__btn--watch" data-src="<?php echo get_field('video_embed_code');?>">
                                    <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                        <path d="M16 3a13 13 0 1 0 13 13A13.016 13.016 0 0 0 16 3Zm4.555 13.832-6 4A1 1 0 0 1 13 20v-8a1 1 0 0 1 1.555-.832l6 4a1 1 0 0 1 0 1.665Z" fill="#1A1A1A"/>
                                    </svg>
                                    Watch video
                                </button>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="front-main-section__decor">
                        <picture class="front-main-section__picture front-main-section__picture--1 front-main-section__picture--active">
                            <img src="<?php echo get_template_directory_uri();?>/img/picture-1.png"
                                 :srcset="<?php echo get_template_directory_uri();?>/img/picture-1-2x.png 2x"
                                 alt="LindenMe person">
                        </picture>
                        <picture class="front-main-section__picture">
                            <img src="<?php echo get_template_directory_uri();?>/img/picture-2.png"
                                 :srcset="<?php echo get_template_directory_uri();?>/img/picture-2-2x.png 2x"
                                 alt="LindenMe person">
                        </picture>
                        <picture class="front-main-section__picture">
                            <img src="<?php echo get_template_directory_uri();?>/img/picture-3.png"
                                 :srcset="<?php echo get_template_directory_uri();?>/img/picture-3-2x.png 2x"
                                 alt="LindenMe person">
                        </picture>
                        <picture class="front-main-section__picture">
                            <img src="<?php echo get_template_directory_uri();?>/img/picture-4.png"
                                 :srcset="<?php echo get_template_directory_uri();?>/img/picture-4-2x.png 2x"
                                 alt="LindenMe person">
                        </picture>
                        <picture class="front-main-section__picture">
                            <img src="<?php echo get_template_directory_uri();?>/img/picture-5.png"
                                 :srcset="<?php echo get_template_directory_uri();?>/img/picture-5-2x.png 2x"
                                 alt="LindenMe person">
                        </picture>
                        <picture class="front-main-section__picture">
                            <img src="<?php echo get_template_directory_uri();?>/img/picture-6.png"
                                 :srcset="<?php echo get_template_directory_uri();?>/img/picture-6-2x.png 2x"
                                 alt="LindenMe person">
                        </picture>
                        <picture class="front-main-section__picture">
                            <img src="<?php echo get_template_directory_uri();?>/img/picture-7.png"
                                 :srcset="<?php echo get_template_directory_uri();?>/img/picture-7-2x.png 2x"
                                 alt="LindenMe person">
                        </picture>
                        <picture class="front-main-section__picture">
                            <img src="<?php echo get_template_directory_uri();?>/img/picture-8.png"
                                 :srcset="<?php echo get_template_directory_uri();?>/img/picture-8-2x.png 2x"
                                 alt="LindenMe person">
                        </picture>
                    </div>
                    <div class="front-main-section__content">
                        <?php if (get_field('homepage-list')){?>
                            <ul class="front-main-section__list">
                                <?php
                                    foreach (get_field('homepage-list') as $item) {
                                        echo '<li class="front-main-section__item">'.$item['homepage-list-text'].'</li>';
                                    }
                                ?>
                            </ul>
                        <?php } ?>
<!--                        for full version-->
<!--                        <a href="#" class="front-main-section__link">-->
<!--                            Watch more-->
<!--                            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">-->
<!--                                 <path d="m13.765 8.265-4.5 4.5a.375.375 0 0 1-.53-.53l3.86-3.86H2.5a.375.375 0 0 1 0-.75h10.094l-3.859-3.86a.375.375 0 0 1 .53-.53l4.5 4.5a.375.375 0 0 1 0 .53Z" fill="#7B00DB"/>-->
<!--                            </svg>-->
<!--                        </a>-->
                    </div>
                </div>
            </div>
            <div class="front-main-section__form front-main-section-form">
                <div class="container">
                    <div class="row">
                        <div class="front-main-section-form__text">
                            <?php if (get_field('form_text')){the_field('form_text');} ?>
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
<!--        <section class="front-latest-section">-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                     <div class="col">-->
<!--                         <div class="front-section-title">-->
<!--                             <h2 class="front-section-title__subtitle">The latest from LindenMe</h2>-->
<!--                             <ul class="front-section-title__list front-section-title-list">-->
<!--                                 <li class="front-section-title-list__item">-->
<!--                                     <a href="#" class="front-section-title-list__link">-->
<!--                                         On-Page SEO-->
<!--                                     </a>-->
<!--                                 </li>-->
<!--                                 <li class="front-section-title-list__item">-->
<!--                                     <a href="#" class="front-section-title-list__link">-->
<!--                                         On-Page SEO-->
<!--                                     </a>-->
<!--                                 </li>-->
<!--                                 <li class="front-section-title-list__item">-->
<!--                                     <a href="#" class="front-section-title-list__link">-->
<!--                                         On-Page SEO-->
<!--                                     </a>-->
<!--                                 </li>-->
<!--                                 <li class="front-section-title-list__item">-->
<!--                                     <a href="#" class="front-section-title-list__link">-->
<!--                                         On-Page SEO-->
<!--                                     </a>-->
<!--                                 </li>-->
<!--                                 <li class="front-section-title-list__item">-->
<!--                                     <a href="#" class="front-section-title-list__link">-->
<!--                                         On-Page SEO-->
<!--                                     </a>-->
<!--                                 </li>-->
<!--                             </ul>-->
<!--                         </div>-->
<!--                         --><?php
//                         $args = array(
//                             'post_type' => 'post'
//                         );
//                         $post_query = new WP_Query($args);
//
//                         if($post_query->have_posts() ) {?>
<!--                        <ul class="front-section-posts">-->
<!--                         --><?php
//                             while($post_query->have_posts() ) {
//                                 $post_query->the_post();
//                                 ?>
<!--                                 <li class="front-section-posts__item front-section-posts-item">-->
<!--                                     <a href="--><?php //echo get_the_permalink();?><!--" class="front-section-posts-item__link">-->
<!--                                         <img src="--><?php //echo get_template_directory_uri();?><!--/img/post-1.png" alt="--><?php //the_title();?><!--" class="front-section-posts-item__image">-->
<!--                                         <div class="front-section-posts-item__category-views">-->
<!--                                             <span class="front-section-posts-item__category">-->
<!--                                                 On-Page SEO-->
<!--                                             </span>-->
<!--                                             <span class="front-section-posts-item__views">-->
<!--                                                 1290 views-->
<!--                                             </span>-->
<!--                                         </div>-->
<!--                                         <span class="front-section-posts-item__title">-->
<!--                                            --><?php //the_title();?><!--: A Beginner’s Guide to Using TouchDesigner with Live-->
<!--                                         </span>-->
<!--                                     </a>-->
<!--                                 </li>-->
<!--                                 --><?php
//                             }?>
<!--                         </ul>-->
<!--                         --><?php //} ?>
<!--                     </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->
        <?php
        endwhile; // End of the loop.
        ?>


        <div class="overlay" id="video-modal">
            <div class="overlay__bg"></div>
            <div class="overlay__content">
                <div class="overlay__iframe-scaler">
                    <button title="Close (Esc)" type="button" class="overlay__close">×</button>
                    <iframe class="overlay__iframe" frameborder="0" allowfullscreen="">
                    </iframe>
                </div>
            </div>
        </div>
    </main><!-- #main -->
<?php
//get_sidebar();
get_footer();
