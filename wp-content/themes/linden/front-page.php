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
                        <a href="#" class="front-main-section__link">
                            Watch more
                            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                 <path d="m13.765 8.265-4.5 4.5a.375.375 0 0 1-.53-.53l3.86-3.86H2.5a.375.375 0 0 1 0-.75h10.094l-3.859-3.86a.375.375 0 0 1 .53-.53l4.5 4.5a.375.375 0 0 1 0 .53Z" fill="#7B00DB"/>
                            </svg>
                        </a>
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
        <section class="front-latest-section">
            <div class="container">
                <div class="row">
                     <div class="col">
                         <div class="front-section-title">
                             <h2 class="front-section-title__subtitle">The latest from LindenMe</h2>
                             <ul class="front-section-title__list front-section-title-list">
                                 <li class="front-section-title-list__item">
                                     <a href="#" class="front-section-title-list__link">
                                         On-Page SEO
                                     </a>
                                 </li>
                                 <li class="front-section-title-list__item">
                                     <a href="#" class="front-section-title-list__link">
                                         On-Page SEO
                                     </a>
                                 </li>
                                 <li class="front-section-title-list__item">
                                     <a href="#" class="front-section-title-list__link">
                                         On-Page SEO
                                     </a>
                                 </li>
                                 <li class="front-section-title-list__item">
                                     <a href="#" class="front-section-title-list__link">
                                         On-Page SEO
                                     </a>
                                 </li>
                                 <li class="front-section-title-list__item">
                                     <a href="#" class="front-section-title-list__link">
                                         On-Page SEO
                                     </a>
                                 </li>
                             </ul>
                         </div>
                         <?php
                         $args = array(
                             'post_type' => 'post'
                         );
                         $post_query = new WP_Query($args);

                         if($post_query->have_posts() ) {?>
                        <ul class="front-section-posts carousel">
                         <?php
                             while($post_query->have_posts() ) {
                                 $post_query->the_post();
                                 ?>
                                 <li class="front-section-posts__item front-section-posts-item">
                                     <a href="<?php echo get_the_permalink();?>" class="front-section-posts-item__link">
                                         <img src="<?php echo get_template_directory_uri();?>/img/post-1.png" alt="<?php the_title();?>" class="front-section-posts-item__image">
                                         <div class="front-section-posts-item__category-views">
                                             <span class="front-section-posts-item__category">
                                                 On-Page SEO
                                             </span>
                                             <span class="front-section-posts-item__views">
                                                 1290 views
                                             </span>
                                         </div>
                                         <span class="front-section-posts-item__title">
                                            <?php the_title();?>: A Beginner’s Guide to Using TouchDesigner with Live
                                         </span>
                                     </a>
                                 </li>
                                 <li class="front-section-posts__item front-section-posts-item">
                                     <a href="<?php echo get_the_permalink();?>" class="front-section-posts-item__link">
                                         <img src="<?php echo get_template_directory_uri();?>/img/post-1.png" alt="<?php the_title();?>" class="front-section-posts-item__image">
                                         <div class="front-section-posts-item__category-views">
                                             <span class="front-section-posts-item__category">
                                                 On-Page SEO
                                             </span>
                                             <span class="front-section-posts-item__views">
                                                 1290 views
                                             </span>
                                         </div>
                                         <span class="front-section-posts-item__title">
                                            <?php the_title();?>: A Beginner’s Guide to Using TouchDesigner with Live
                                         </span>
                                     </a>
                                 </li>
                                 <li class="front-section-posts__item front-section-posts-item">
                                     <a href="<?php echo get_the_permalink();?>" class="front-section-posts-item__link">
                                         <img src="<?php echo get_template_directory_uri();?>/img/post-1.png" alt="<?php the_title();?>" class="front-section-posts-item__image">
                                         <div class="front-section-posts-item__category-views">
                                             <span class="front-section-posts-item__category">
                                                 On-Page SEO
                                             </span>
                                             <span class="front-section-posts-item__views">
                                                 1290 views
                                             </span>
                                         </div>
                                         <span class="front-section-posts-item__title">
                                            <?php the_title();?>: A Beginner’s Guide to Using TouchDesigner with Live
                                         </span>
                                     </a>
                                 </li>
                                 <?php
                             }?>
                         </ul>
                         <?php } ?>
                     </div>
                </div>
            </div>
        </section>

        <?php
        $args1 = array(
            'post_type' => 'post'
        );
        $post_query = new WP_Query($args1);

        if($post_query->have_posts() ) {?>
            <section class="front-one-post-section">
                <div class="container">
                    <div class="row">
                    <?php
                    while($post_query->have_posts() ) {
                        $post_query->the_post();
                        ?>
                        <div class="col one-post">
                            <a class="one-post__content" href="<?php echo get_the_permalink();?>" >
                                <div class="one-post__title">
                                    <?php the_title();?>: A Beginner’s Guide to Using TouchDesigner with Live
                                </div>
                                <div class="one-post__text">
                                    <?php the_title();?>: A Beginner’s Guide to Using TouchDesigner with Live
                                </div>
                                <div class="one-post__category-views">
                                    <span class="one-post__category">
                                         On-Page SEO
                                    </span>
                                    <span class="one-post__views">
                                         1290 views
                                    </span>
                                </div>
                            </a>
                            <div class="one-post__photo">
                                <img src="<?php echo get_template_directory_uri();?>/img/post-1.png" alt="<?php the_title();?>" class="one-post__image">
                            </div>
                        </div>
                        <?php
                    }?>
                    </div>
                </div>
            </section>
        <?php } ?>
            <section class="front-new-section">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="front-section-title">
                                <h2 class="front-section-title__subtitle">New posts</h2>
                                <a href="#" class="front-section-title-list__link">
                                    See more
                                    <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                        <path d="m13.765 8.265-4.5 4.5a.375.375 0 0 1-.53-.53l3.86-3.86H2.5a.375.375 0 0 1 0-.75h10.094l-3.859-3.86a.375.375 0 0 1 .53-.53l4.5 4.5a.375.375 0 0 1 0 .53Z" fill="#7B00DB"/>
                                    </svg>
                                </a>
                            </div>
                            <?php
                            $args3 = array(
                                'post_type' => 'post'
                            );
                            $post_query = new WP_Query($args3);

                            if($post_query->have_posts() ) {?>
                                <ul class="front-section-posts carousel">
                                    <?php
                                    while($post_query->have_posts() ) {
                                        $post_query->the_post();
                                        ?>
                                        <li class="front-section-posts__item front-section-posts-item">
                                            <a href="<?php echo get_the_permalink();?>" class="front-section-posts-item__link">
                                                <img src="<?php echo get_template_directory_uri();?>/img/post-1.png" alt="<?php the_title();?>" class="front-section-posts-item__image">
                                                <span class="front-section-posts-item__title">
                                            <?php the_title();?>: A Beginner’s Guide to Using TouchDesigner with Live
                                         </span>
                                            </a>
                                        </li>
                                        <li class="front-section-posts__item front-section-posts-item">
                                            <a href="<?php echo get_the_permalink();?>" class="front-section-posts-item__link">
                                                <img src="<?php echo get_template_directory_uri();?>/img/post-1.png" alt="<?php the_title();?>" class="front-section-posts-item__image">
                                                <span class="front-section-posts-item__title">
                                            <?php the_title();?>: A Beginner’s Guide to Using TouchDesigner with Live
                                         </span>
                                            </a>
                                        </li>
                                        <li class="front-section-posts__item front-section-posts-item">
                                            <a href="<?php echo get_the_permalink();?>" class="front-section-posts-item__link">
                                                <img src="<?php echo get_template_directory_uri();?>/img/post-1.png" alt="<?php the_title();?>" class="front-section-posts-item__image">
                                                <span class="front-section-posts-item__title">
                                            <?php the_title();?>: A Beginner’s Guide to Using TouchDesigner with Live
                                         </span>
                                            </a>
                                        </li>
                                        <?php
                                    }?>
                                </ul>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </section>
            <section class="front-case-section">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="front-section-title">
                                <h2 class="front-section-title__subtitle">Case Studies</h2>
                                <a href="#" class="front-section-title-list__link">
                                    See more
                                    <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                        <path d="m13.765 8.265-4.5 4.5a.375.375 0 0 1-.53-.53l3.86-3.86H2.5a.375.375 0 0 1 0-.75h10.094l-3.859-3.86a.375.375 0 0 1 .53-.53l4.5 4.5a.375.375 0 0 1 0 .53Z" fill="#7B00DB"/>
                                    </svg>
                                </a>
                            </div>
                            <?php
                            $args4 = array(
                                'post_type' => 'post'
                            );
                            $post_query = new WP_Query($args4);

                            if($post_query->have_posts() ) {?>
                                <ul class="front-section-posts carousel">
                                    <?php
                                    while($post_query->have_posts() ) {
                                        $post_query->the_post();
                                        ?>
                                        <li class="front-section-posts__item front-section-posts-item">
                                            <a href="<?php echo get_the_permalink();?>" class="front-section-posts-item__link">
                                                <img src="<?php echo get_template_directory_uri();?>/img/post-1.png" alt="<?php the_title();?>" class="front-section-posts-item__image">
                                                <div class="front-section-posts-item__category-views">
                                             <span class="front-section-posts-item__category">
                                                 On-Page SEO
                                             </span>
                                                    <span class="front-section-posts-item__views">
                                                 1290 views
                                             </span>
                                                </div>
                                                <span class="front-section-posts-item__title">
                                            <?php the_title();?>: A Beginner’s Guide to Using TouchDesigner with Live
                                         </span>
                                            </a>
                                        </li>
                                        <li class="front-section-posts__item front-section-posts-item">
                                            <a href="<?php echo get_the_permalink();?>" class="front-section-posts-item__link">
                                                <img src="<?php echo get_template_directory_uri();?>/img/post-1.png" alt="<?php the_title();?>" class="front-section-posts-item__image">
                                                <div class="front-section-posts-item__category-views">
                                             <span class="front-section-posts-item__category">
                                                 On-Page SEO
                                             </span>
                                                    <span class="front-section-posts-item__views">
                                                 1290 views
                                             </span>
                                                </div>
                                                <span class="front-section-posts-item__title">
                                            <?php the_title();?>: A Beginner’s Guide to Using TouchDesigner with Live
                                         </span>
                                            </a>
                                        </li>
                                        <li class="front-section-posts__item front-section-posts-item">
                                            <a href="<?php echo get_the_permalink();?>" class="front-section-posts-item__link">
                                                <img src="<?php echo get_template_directory_uri();?>/img/post-1.png" alt="<?php the_title();?>" class="front-section-posts-item__image">
                                                <div class="front-section-posts-item__category-views">
                                             <span class="front-section-posts-item__category">
                                                 On-Page SEO
                                             </span>
                                                    <span class="front-section-posts-item__views">
                                                 1290 views
                                             </span>
                                                </div>
                                                <span class="front-section-posts-item__title">
                                            <?php the_title();?>: A Beginner’s Guide to Using TouchDesigner with Live
                                         </span>
                                            </a>
                                        </li>
                                        <?php
                                    }?>
                                </ul>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php
        endwhile; // End of the loop.
        ?>
            <section class="tags">
                <div class="container">
                    <div class="row">
                        <div class="col tags-block">
                            <div class="tags-block__title">More:</div>
                            <ul class="tags-block__list">
                                <li class="tags-block__item">
                                    <a href="#" class="tags-block__link">
                                        On-Page SEO
                                    </a>
                                </li>
                                <li class="tags-block__item">
                                    <a href="#" class="tags-block__link">
                                        On-Page SEO
                                    </a>
                                </li>
                                <li class="tags-block__item">
                                    <a href="#" class="tags-block__link">
                                        On-Page SEO
                                    </a>
                                </li>
                                <li class="tags-block__item">
                                    <a href="#" class="tags-block__link">
                                        On-Page SEO
                                    </a>
                                </li>
                                <li class="tags-block__item">
                                    <a href="#" class="tags-block__link">
                                        On-Page SEO
                                    </a>
                                </li>
                                <li class="tags-block__item">
                                    <a href="#" class="tags-block__link">
                                        On-Page SEO
                                    </a>
                                </li>
                                <li class="tags-block__item">
                                    <a href="#" class="tags-block__link">
                                        On-Page SEO
                                    </a>
                                </li>
                                <li class="tags-block__item">
                                    <a href="#" class="tags-block__link">
                                        On-Page SEO
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

        <div class="overlay" id="video-modal">
            <div class="overlay__bg"></div>
            <div class="overlay__content">
                <div class="overlay__iframe-scaler">
                    <button title="Close (Esc)" type="button" class="overlay__close">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 32 32">
                            <path fill="#fff" d="M20.53 12.53 17.06 16l3.47 3.47c.0737.0687.1328.1515.1738.2435.041.092.063.1913.0648.292.0018.1007-.0167.2007-.0545.2941-.0377.0934-.0938.1782-.1651.2494-.0712.0713-.156.1274-.2494.1651-.0934.0377-.1934.0563-.2941.0545-.1007-.0018-.2-.0238-.292-.0648-.092-.041-.1748-.1001-.2435-.1738L16 17.06l-3.47 3.47c-.1422.1325-.3302.2046-.5245.2012-.1943-.0035-.3797-.0822-.5171-.2196-.1374-.1374-.2161-.3228-.2196-.5171-.0034-.1943.0687-.3823.2012-.5245L14.94 16l-3.47-3.47c-.1325-.1422-.2046-.3302-.2012-.5245.0035-.1943.0822-.3797.2196-.5171.1374-.1374.3228-.2161.5171-.2196.1943-.0034.3823.0687.5245.2012L16 14.94l3.47-3.47c.1422-.1325.3302-.2046.5245-.2012.1943.0035.3797.0822.5171.2196.1374.1374.2162.3228.2196.5171.0034.1943-.0687.3823-.2012.5245ZM28.75 16c0 2.5217-.7478 4.9868-2.1488 7.0835-1.4009 2.0967-3.3922 3.7309-5.722 4.696-2.3297.965-4.8933 1.2175-7.3666.7255-2.4733-.4919-4.74509-1.7063-6.52821-3.4894-1.78312-1.7831-2.99743-4.0549-3.4894-6.5282-.49196-2.4733-.23947-5.0369.72555-7.3666.96502-2.32977 2.59922-4.32105 4.69594-5.72204C11.0132 3.99777 13.4783 3.25 16 3.25c3.3803.00397 6.621 1.34854 9.0112 3.73877C27.4015 9.379 28.746 12.6197 28.75 16Zm-1.5 0c0-2.225-.6598-4.4001-1.896-6.25016-1.2361-1.85006-2.9931-3.292-5.0488-4.14348-2.0557-.85149-4.3177-1.07428-6.5-.64019-2.1822.43408-4.1868 1.50554-5.76015 3.07888-1.57334 1.57334-2.6448 3.57785-3.07888 5.76015-.43408 2.1823-.21129 4.4443.64019 6.5.85149 2.0557 2.29343 3.8127 4.14348 5.0488C11.5999 26.5902 13.775 27.25 16 27.25c2.9827-.0033 5.8422-1.1896 7.9513-3.2987C26.0604 21.8422 27.2467 18.9827 27.25 16Z"/>
                        </svg>
                    </button>
                    <iframe class="overlay__iframe" frameborder="0" allowfullscreen="">
                    </iframe>
                </div>
            </div>
        </div>
    </main><!-- #main -->
<?php
//get_sidebar();
get_footer();
