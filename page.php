<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package business_factory
 */

get_header(); ?>
		<div class="container">
			<main class="content">
				<div class="place_names_article">
					<?php if ( function_exists('yoast_breadcrumb') ) {
						yoast_breadcrumb('<p id="breadcrumbs">','</p>');
					} ?>
				</div>
				<div style="padding-top: 20px; text-align: center;">
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- BiznesFabrika - Page Upper Post Place (468*60) -->
					<ins class="adsbygoogle"
						 style="display:inline-block;width:468px;height:60px"
						 data-ad-client="ca-pub-4061901667790874"
						 data-ad-slot="5462115147"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</div>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'page' ); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>

				<?php endwhile; // end of the loop. ?>
			</main>
		</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
