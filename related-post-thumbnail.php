<?php
/**
 * @package Package name
 * @version 1.0
 */
/*
Plugin Name: My plugin my-related-post-humbnail
Plugin URI: http://wp-admin.com.ua
Description: спасибо сайту wp-admin.com.ua, за хороший пример плагина )
Armstrong: My Plugin.
Author: Name Author
Version: 1.0
Author URI: http://wp-admin.com.ua
*/
/*
display related data: <?php echo my_related_posts(); ?>
*/
function my_related_posts() {
	$tags = the_tags('');
	$args = array(
		'posts_per_page' => 4,
		'post__in'  => $tags,
	);
	$the_query = new WP_Query( $args );
	$res .= '<ul>';
		while ( $the_query->have_posts() ) : $the_query->the_post();
			?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?>
			<?php
			/*if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					the_post_thumbnail( );
			}*/
			?>
			</a></li>
		<?php
	endwhile;
	$res .= '</ul>';
	wp_reset_postdata();
	return $res;
}
?>
