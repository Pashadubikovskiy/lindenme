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
                        <p class="front-main-section__description">
                            Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.
                        </p>
                        <div class="front-main-section__btns">
                            <a class="front-main-section__btn front-main-section__btn--arrow" href="#">
                                Get started
                                <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                    <path d="m13.765 8.265-4.5 4.5a.375.375 0 0 1-.53-.53l3.86-3.86H2.5a.375.375 0 0 1 0-.75h10.094l-3.859-3.86a.375.375 0 0 1 .53-.53l4.5 4.5a.375.375 0 0 1 0 .53Z" fill="#fff"/>
                                </svg>
                            </a>
                            <button class="front-main-section__btn front-main-section__btn--watch">
                                <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                    <path d="M16 3a13 13 0 1 0 13 13A13.016 13.016 0 0 0 16 3Zm4.555 13.832-6 4A1 1 0 0 1 13 20v-8a1 1 0 0 1 1.555-.832l6 4a1 1 0 0 1 0 1.665Z" fill="#1A1A1A"/>
                                </svg>
                                Watch video
                            </button>
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
                        <ul class="front-main-section__list">
                            <li class="front-main-section__item">Get a comprehensive SEO audit of your website.</li>
                            <li class="front-main-section__item">Learn more about search engines and search engine marketing.</li>
                            <li class="front-main-section__item">Enroll in the LindenMe business support program for Ukrainians.</li>
                            <li class="front-main-section__item">Explore case studies to find a solution for your own business.</li>
                        </ul>
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
                            Do you have any questions?
                            Leave your contacts and we will contact you.
                        </div>
                        <form action="#" class="front-main-section-form__form">
                            <input type="text" placeholder="Write your email">
                            <button>
                                Get started
                            </button>
                        </form>
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
                         .
                     </div>
                </div>
            </div>
        </section>
        <?php
        endwhile; // End of the loop.
        ?>

    </main><!-- #main -->
<?php
//get_sidebar();
get_footer();
