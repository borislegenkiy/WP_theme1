<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package business_factory
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta property="fb:app_id" content="222796847889899"/>
<meta property="fb:admins" content="100009387122456"/>

<link rel="profile" href="http://gmpg.org/xfn/11">
<link type="image/x-icon" href="/wp-content/themes/business_factory/favicon.ico" rel="shortcut icon">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/business_factory/js/span.js"></script>
<script type="text/javascript" src="/wp-content/themes/business_factory/js/google_analytics.js"></script>

<script type="text/javascript" src="/wp-content/themes/business_factory/js/facebook.js"></script>
<?php wp_head(); ?>
<!--For Span in Head Menu-->
<?php require_once("walker_menu.php"); ?>
</head>

<body <?php body_class(); ?>>
	<div class="wrapper">
		<header class="header">
			<div class="header_line1">
				<div class="logo f_left"><!--noindex--><span class="seolink" rel="http://biznesfabrika.ru/" title="Фабрика Бизнеса"><div class="logo_img"></div></span><!--/noindex--></div>
				<div class="search_place f_left">
					 <form method="get" id="searchform" action="/">
						<input class="search_input" type="search" required='' placeholder="Поиск по сайту" name="s" id="s">
					 </form>
				</div>
				<div class="group_links f_right">
					<div class="first_group f_left">
						<!--noindex--><span class="seolink" rel="/free_courses" title="Бесплатные курсы">Бесплатные курсы</span><!--/noindex-->
						<!--noindex--><span class="seolink" rel="/timetable" title="Расписание">Расписание</span><!--/noindex-->
					</div>
					<div class="second_group f_right">
						<!--noindex--><span class="seolink" rel="/store" title="Магазин">Магазин</span><!--/noindex-->
						<!--noindex--><span class="seolink" rel="/services" title="Услуги">Услуги</span><!--/noindex-->
					</div>
				</div>
			</div>
			<div class="header_line2">
				<!--noindex-->				
				<div class="header_line2_menu">
					<?
						$walker = new mainMenuWalker ();
						$args_menu_top = array(
						'menu'    => 'top_menu',
						'container'   => '',
						'walker' => $walker
						);
						wp_nav_menu( $args_menu_top );
					?>
				</div>
				<!--/noindex-->
			</div>
		</header>

		<div class="middle">