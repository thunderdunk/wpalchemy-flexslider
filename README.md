
## Heptagon Combo Slider

### Using WPAlchemy custom metaboxes to create a custom slideshow for your WordPress theme.

** Must have WPAlchemy setup in theme **

This all depends on having WPAlchemy in use in your theme. 


	/**
 * WPAlchemy Metaboxes
 */

//You should already have this in your functions.php file per the WPAlchemy basic setup. Just add reference to heptagon-slider-spec.php

include_once 'metaboxes/setup.php';

include_once 'metaboxes/heptagon-slider-spec.php';




Include in head or using wp_enqueue_script:

	/heptagon-slider/flexslider/jquery.flexslider-min.js
	/heptagon-slider/flexslider/flexslider.css

