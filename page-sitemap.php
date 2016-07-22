<?php
/*
Template Name: Sitemap
*/
?>
<?php get_header(); ?>

<div class="container">
	<main class="content">
	  <div>
		<h1 style="font-size:x-large; font-weight:bold;">Карта сайта</h1>
	  </div>
	  <div class="siteMap">
			  <h2 id="posts">Записи</h2>
			  <ul>
				<?php
					// Add categories seprated with comma (,) you'd like to hide to display on sitemap
					$cats = get_categories('exclude=');
					foreach ($cats as $cat) {
					  echo "<li><h3>".$cat->cat_name."</h3>";
					  echo "<ul>";
					  query_posts('posts_per_page=-1&cat='.$cat->cat_ID);
					  while(have_posts()) {
						the_post();
						$category = get_the_category();
						// Only display a post link once, even if it's in multiple categories
						if ($category[0]->cat_ID == $cat->cat_ID) {
						  echo '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
						}
					  }
					  echo "</ul>";
					  echo "</li>";
					}
				?>
			  </ul>
			  <!-- ----------------- Display Categories ----------------- -->
			  <h2>Категории</h2>
			  <ul>
				<?php wp_list_cats("sort_column=name&optioncount=1&hierarchical=0"); ?>
			  </ul>
			  <!-- ----------------- Display Pages ----------------- -->
			  <h2 id="pages">Страницы</h2>
			  <ul>
				<?php
				// Add pages seprated with comma[,] that you'd like to hide to display on sitemap
				wp_list_pages(
				  array(
					'exclude' => '',
					'title_li' => '',
				  )
				);
				?>
			  </ul>
		</div>
  </main>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>