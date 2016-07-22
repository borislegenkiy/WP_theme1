<?
//function for video text box - future shotrcode
function video_text($atts) {
		extract(shortcode_atts(array(
	      'content' => ''
		), $atts));
		return "<div class='video_text'>".$content."</div>";
}

//function for green  block - future shotrcode
function green_block($atts, $content = null) {
		return "<div class='place_green_block'>
			<div class='green_block'>
				<div class='img_place f_left'>
					<div class='img_book'></div>
				</div>
				<div class='text_place_block f_left'>".$content."
				</div>
			</div>
			</div>";
}

//function for red  block - future shotrcode
function red_block($atts, $content = null) {
		return "<div class='place_red_block'>
			<div class='red_block'>
				<div class='img_place f_left'>
					<div class='img_warning'></div>
				</div>
				<div class='text_place_block f_left'>".$content."
				</div>
			</div>
			</div>";
}

//function for yellow  block - future shotrcode
function yellow_block($atts, $content = null) {
		return "<div class='place_yellow_block'>
			<div class='yellow_block'>
				<div class='img_place f_left'>
					<div class='img_lamp'></div>
				</div>
				<div class='text_place_block f_left'>".$content."
				</div>
			</div>
			</div>";
}

//function for blue  block - future shotrcode
function blue_block($atts, $content = null) {
		return "<div class='place_blue_block'>
			<div class='blue_block'>
				<div class='img_place f_left'>
					<div class='img_attention'></div>
				</div>
				<div class='text_place_block f_left'>".$content."
				</div>
			</div>
			</div>";

}

function print_smm_buttons ($atts) {
	 extract(shortcode_atts(array(
	      'smm_url' => '',
	      'smm_title' => '',
	      'smm_image' => '',
	      'smm_desc' => ''
		  ), $atts));

	$smm_class_id = "ya_share_" . rand(1000,9999);
	
	$smm_code =
	"<script type='text/javascript' src='https://yastatic.net/share/share.js' charset='utf-8'></script>
	<script type='text/javascript'>
	new Ya.share({
		theme: 'counter',
	        element: '" . $smm_class_id . "'";

	if($smm_url !="") $smm_code = $smm_code . ", link: '" . $smm_url . "'";
	if($smm_title !="") $smm_code = $smm_code . ", title: '" . $smm_title . "'";
	if($smm_url_img !="") $smm_code = $smm_code . ", image: '" . $smm_title . "'";
	if($smm_description !="") $smm_code = $smm_code . ", description: '" . $smm_description . "'";

	$smm_code = $smm_code . 
	"});
	</script>
	<span id='" . $smm_class_id . "'></span>";

	return $smm_code;
}

// function for place post advert
function place_training_advert ($atts) {
	extract(shortcode_atts(array(
	      'first_advert' => '',
	      'second_advert' => '',
	      'third_advert' => ''
	   ), $atts));

	$line_advert = "<div class='place_shop_level_test'>". $first_advert;
	$line_advert = $line_advert+$second_advert;
	$line_advert = $line_advert+$third_advert;
	$line_advert = $line_advert ."</div>";
	return $line_advert;
}

// function for trainings post advert
function trainings_advert ($atts) {
	 extract(shortcode_atts(array(
	      'href' => '',
	      'image' => '',
	      'desc_small' => '',
	      'desc_full' => ''
	   ), $atts));

	$trainings_advert =
	"	<div class='place_shop_item' onclick=window.open('".$href."','_blank')>
		<div class='place_shop_item_img'>
			<a href='#'>
				<img class='alignnone size-full wp-image-4482' src='".$image."' alt='Убойный отдел продаж' width='200' height='140' />
			</a>
		</div>
		<div class='place_shop_item_theme'>
			<a href='#'>".$desc_small."</a>
		</div>
		<div class='place_shop_item_info'>".$desc_full."</div>
	</div>";

	return $trainings_advert;
}
// function for book post advert
function books_advert ($atts) {
	 extract(shortcode_atts(array(
	      'href' => '',
	      'image' => '',
	      'desc_small' => '',
	      'desc_full' => ''

	   ), $atts));



	$books_advert =
	"
		<div class='place_shop_item_books'>
		<div class='place_shop_item_img'>

		<a href='#".$href."'><img class='".$href."_img alignnone wp-image-5821 size-full' src='".$image."'/></a>

		</div>
		<div class='place_shop_item_theme'><a href='#".$href."'>".$desc_small."</a></div>
		<div class='place_shop_item_info'>".$desc_full."</div>
		</div>
	";

	return $books_advert;
}
// function for create new line
function new_line () {
	return "<div class='clear'></div>";
}
?>