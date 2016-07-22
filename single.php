<?php
/**
 * The template for displaying all single posts.
 *
 * @package business_factory
 */
get_header(); ?>
<? include("related-post-thumbnail.php");?>		
<div class="container">
			<main class="content">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<div class="place_names_article">
							<?php if ( function_exists('yoast_breadcrumb') ) {
								yoast_breadcrumb('<p id="breadcrumbs">','</p>');
							} ?>
						</div>
						<div style="padding-top: 10px;text-align: center;">
							<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							<!-- BiznesFabrika - Single Upper Post Place (478*60) -->
							<ins class="adsbygoogle"
								 style="display:inline-block;width:468px;height:60px"
								 data-ad-client="ca-pub-4061901667790874"
								 data-ad-slot="6938848345"></ins>
							<script>
							(adsbygoogle = window.adsbygoogle || []).push({});
							</script>
						</div>
						<h1><?php the_title();?></h1>
						<?
							if( get_the_post_thumbnail() ) {
								echo "<div class='place_content_img'>".get_the_post_thumbnail($image_id)."</div>";
							}
						?>
						<? the_content('');?>
					<?php endwhile; ?>
				<?php endif; ?>
				<div class="form_podpis">
				<div class="form_podpis_img">
					<div class="form_podpis_active_elem f_right">
						<div class="form_podpis_text f_right">29 бесплатных уроков по франчайзингу</div>
						<div style="display: table; float: right; width: 60%;">
							<form class='widget2-subscribe-form' accept-charset='utf-8' action='http://e.lifeha.ru/add_contact_webform.html?u=QfBS' method='post' target='_blank'>							
								<table style="float: right;">
									<tr width="100%">
										<td width="50%"><input class='podpis_input email' type='email' required='' name='email' placeholder='Введите Ваш Email'></td>
										<td width="50%"><input class='podpis_input_button wf-button submit-template-lifeha widget2-subscribe-submit' type='submit' name='submit' value='Получить доступ'></td>
									</tr>
								</table>
								<input class=' widget-subscribe-webform-id' type='hidden' name='webform_id' value='6098141'>
							</form>
							<div class='notice-of-confidential-information'>Эту книгу уже скачало 1282 человек</div>
							<script class='widget-subscribe-script' type='text/javascript' src='http://e.lifeha.ru/view_webform.js?wid=6098165&amp;u=QfBS&amp;mg_param1=1'></script>
						</div>
					</div>
				</div>
				</div>

				<hr>
				
				<div class="share_place">
					<div class="share">
						<div class="share_text f_left">Поделиться: </div>
						<div class="share_img_place f_left"><?php echo do_shortcode('[smm_buttons]'); ?></div>
					</div>
				</div>
				
				<div class="share_place">
					<div class="share">
						<div class="share_text f_left">Автор: &nbsp;</div>
						<div class="share_text f_left"><?php the_author(); ?></div>
					</div>
				</div>
				
				<div class="share_place">
					<div class="share">
						<div class="share_text f_left">Дата: &nbsp;</div>
						<div class="share_text f_left"><?php echo the_date()."г."; ?></div>
					</div>
				</div>

				<hr>
				
				<div style="padding-top: 10px; padding-bottom: 10px; text-align: center;">
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- BiznesFabrika - Single Under Post Place (468*60) -->
					<ins class="adsbygoogle"
						 style="display:inline-block;width:468px;height:60px"
						 data-ad-client="ca-pub-4061901667790874"
						 data-ad-slot="8415581549"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</div>
				
				<hr>
				
				<div class="prev_next_place">
					<div class="prev_place f_left">
					<? if (get_previous_post_link() ) {?>
						<div class="prev_next_title left_text">Предыдущая статья</div>
						<div class="prev_next_al"><span><img src="/wp-content/themes/business_factory/img/arrow_left.png"></span><?php previous_post_link('%link', '%title', true); ?></div>
					<? } ?>
					</div>

					<div class="next_place f_right">
						<? if (get_next_post_link() ) {?>
						<div class="prev_next_title right_text">Следующая статья</div>
						<div class="prev_next_ar"><?php next_post_link('%link', '%title', true); ?><span><img src="/wp-content/themes/business_factory/img/arrow_right.png"></span></div>
						<? } ?>
					</div>
				</div>

				<hr>
				
				<div class="recommended_article f_left">
						<div class="recommended_article_header">
							<div class="recommended_article_header_img f_left"></div><div class="recommended_article_header_text f_left">РЕКОМЕНДУЕМЫЕ СТАТЬИ</div>
						</div>
						<div class="recommended_article_blk">
							<div class="recommended_article_links">
							<?php
								$categories = get_the_category($post->ID);
								if ($categories) {
									$category_ids = array();
									foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
									$args=array (
									  'category__in' => $category_ids,
									  'post__not_in' => array($post->ID),
									  'showposts'=>7,
									  'orderby'=>rand,
									  'caller_get_posts'=>1);
									$my_query = new wp_query($args);
									echo "<ul>";
									if( $my_query->have_posts() ) {
										while ($my_query->have_posts()) {
											$my_query->the_post();
											?>
											<span class="seolink" rel="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></span></li>
											<?php
											$count++;
										}
										echo "</ul>";
									}
									wp_reset_query();
								}
							?>
							</div>
						</div>
				</div>
				
				<div>
					<div class="recommended_article_header">
						<div class="recommended_article_header_img f_left"></div><div class="recommended_article_header_text f_left">КОММЕНТАРИИ</div>
					</div>
					<div class="place_social">
						<!-- VK & Facebook -->
						<div class="place_vk_com f_left">
							<script type="text/javascript" src="//vk.com/js/api/openapi.js?120"></script>

							<script type="text/javascript">
							  VK.init({apiId: 5145176, onlyWidgets: true});
							</script>
							<div id="vk_comments"></div>
							<script type="text/javascript">
							VK.Widgets.Comments("vk_comments", {limit: 10, width: "330", attach: "*"});
							</script>
						</div>

						<div class="place_vk_com f_left">
							<div class="fb-comments" data-href="http://biznesfabrika.ru/" data-width="330" data-numposts="5"></div>
						</div>
					</div>
				</div>
				
	</main>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
