<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package business_factory
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
		<aside class="right-sidebar">
		<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
			<div>
				<?php
				$args = array(
				  'orderby' => 'name',
				  'order' => 'ASC'
				  );
				$categories = get_categories($args);
				if($categories){
					echo "
						<div class='catalog'>
							<div class='catalog_header'>Рубрики</div>
							<ul class='list_sideabar'>
					";
					$all_categories="";
					foreach($categories as $category) {
						$i++;
						$all_categories=$all_categories."<li><span class='seolink' rel='".get_category_link($category->term_id)."' title='".$category->cat_name."'>".$category->cat_name."</span></li>";
					}
					echo $all_categories;
					echo "
							</ul>
						</div>
					</div>";
						
				}
				?>
				
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
				
				<div style="text-align: center;">
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- BiznesFabrika - SideBar Place (120*240) -->
				<ins class="adsbygoogle"
					 style="display:inline-block;width:120px;height:240px"
					 data-ad-client="ca-pub-4061901667790874"
					 data-ad-slot="7100298747"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
				</div>
				
			</div><!-- .widget-area -->
			
		<?php endif; ?>
			
		</aside>