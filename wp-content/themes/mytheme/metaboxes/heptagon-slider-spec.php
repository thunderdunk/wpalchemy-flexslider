<?php

$custom_metabox = $heptagon_slider_mb = new WPAlchemy_MetaBox(array
(
	'id' => '_heptagon_slider_meta',
	'title' => 'Slider Options',
	'template' => get_stylesheet_directory() . '/metaboxes/heptagon-slider-meta.php',
	'types'	=> array('page'),
));

/* eof */