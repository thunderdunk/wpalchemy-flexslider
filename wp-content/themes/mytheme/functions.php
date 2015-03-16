<?php

//Add the following to functions.php to include the Heptagon Slider

/**
 * Heptagon Slider
 */

require get_template_directory() . '/heptagon-slider/heptagon-slider.php';

/**
 * WPAlchemy Metaboxes
 */

//You should already have this in your functions.php file per the WPAlchemy basic setup. Just add reference to heptagon-slider-spec.php

include_once 'metaboxes/setup.php';

include_once 'metaboxes/heptagon-slider-spec.php';
?>