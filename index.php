<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package business_factory
 */
get_header(); ?>
	<div class="container">
			<main class="content">
			<div style="padding-top: 20px;text-align: center;">
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- BiznesFabrika - Index Upper Post Place (468*60) -->
				<ins class="adsbygoogle"
					 style="display:inline-block;width:468px;height:60px"
					 data-ad-client="ca-pub-4061901667790874"
					 data-ad-slot="8555182341"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>
			
			<div class="place_names_article">
			</div>
				<? if (have_posts()) : ?>
				<? while (have_posts()) : the_post();
					$image_url2 = wp_get_attachment_image_src($image_id,'medium');
					$image_url2 = $image_url2[0];
					if( get_the_post_thumbnail() ) {
						$image_url=get_the_post_thumbnail($image_id,array(240,240));
					} else {
						$image_url="<img src='/wp-content/themes/business_factory/img/for_bf_images.png'>";
					}
				?>
				<div class="entry">
					<div class="entry_title"><a href="<?php the_permalink() ?>"><?php  the_title(); ?></a></div>
					<div class="entry_content">
						<table>
							<tr>
								<td class="item_content_td1"><a href="<?php the_permalink();?>"><?php echo $image_url;?></a></td>
								<!--<td>
									<div class="entry_img_place1 f_left"><a href="<?php the_permalink() ?>"><img src='/wp-content/themes/business_factory/img/for_bf_images.png'></a></div>
								</td>-->
								<td>
									<div class="entry_text_place f_left">
										<div class="entry_text">
											<?php the_excerpt(); ?>
										</div>
									</div>
									<div class="entry_link"><a href="<?php the_permalink() ?>">Читать далее</a>&nbsp;&raquo;</div>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<? endwhile; ?>
				<? endif; ?>
			
				<div class="digits">
		            <?php wp_pagenavi(); ?>
				</div>
				
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
			</main>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
