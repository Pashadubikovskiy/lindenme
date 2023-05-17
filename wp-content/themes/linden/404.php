<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package linden
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'The page you’re looking for can’t be found.', 'linden' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
                <?php
                get_search_form();
                ?>
                <div class="error-404__links">
                    <a href="#">
                        Return to Previous Page
                        <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                            <path d="m13.765 8.265-4.5 4.5a.375.375 0 0 1-.53-.53l3.86-3.86H2.5a.375.375 0 0 1 0-.75h10.094l-3.859-3.86a.375.375 0 0 1 .53-.53l4.5 4.5a.375.375 0 0 1 0 .53Z" fill="#7B00DB"/>
                        </svg>
                    </a>
                    <a href="#">
                        Bring me Home
                        <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                            <path d="m13.765 8.265-4.5 4.5a.375.375 0 0 1-.53-.53l3.86-3.86H2.5a.375.375 0 0 1 0-.75h10.094l-3.859-3.86a.375.375 0 0 1 .53-.53l4.5 4.5a.375.375 0 0 1 0 .53Z" fill="#7B00DB"/>
                        </svg>
                    </a>
                    <a href="#">
                        Contact Support
                        <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                            <path d="m13.765 8.265-4.5 4.5a.375.375 0 0 1-.53-.53l3.86-3.86H2.5a.375.375 0 0 1 0-.75h10.094l-3.859-3.86a.375.375 0 0 1 .53-.53l4.5 4.5a.375.375 0 0 1 0 .53Z" fill="#7B00DB"/>
                        </svg>
                    </a>
                </div>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
