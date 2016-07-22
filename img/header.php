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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>	
	<div class="wrapper">
		<header class="header">
			<div class="header_line1">
				<div class="logo f_left"><a href="http://bf.lifeha.ru"><div class="logo_img"></div></a></div>
				<div class="search f_left">
					<input class="search_input" type="search" placeholder="Поиск по сайту">
					<input class="search_submit" class="submit" />
				</div>
				<div class="group_links f_right">
					<div class="first_group f_left">
						<a href="/free_courses">Бесплатные курсы</a>
						<a href="/timetable">Расписание</a>
					</div>
					<div class="second_group f_right">
						<a href="/store">Магазин</a>
						<a href="/services">Услуги</a>
					</div>
				</div>
			</div>
			<div class="header_line2">
				<div class="header_line2_menu">
					<? $args_menu_top = array(
						'menu'    => 'top_menu',
						'container'   => '',
						);
					   wp_nav_menu( $args_menu_top );?>
				</div>
			</div>
		</header>

		<div class="middle">

