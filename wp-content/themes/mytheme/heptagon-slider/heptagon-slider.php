<?php
/* Heptagon Slider */


//include_once get_stylesheet_directory() . '/metaboxes/setup.php';

//include_once get_stylesheet_directory() . '/metaboxes/heptagon-slider-spec.php';

function heptagon_slider() { ?>

	<section class="big-slider" >
		<div class="color-overlay">
		
		<?php global $heptagon_slider_mb; ?>

			<div class="upper flexslider" id="slides">
				<ul class="slides">
					<?php while ( $heptagon_slider_mb->have_fields('slider-img') ) { ?>
						<li style="background-image: url('<?php $heptagon_slider_mb->the_value('slide-imgurl'); ?>');">
							
								<div class="slider-item-wrap container">
									<hgroup class="intro">
										<h2><?php $heptagon_slider_mb->the_value('slide-heading'); ?></h2>
									</hgroup>

									<?php if( $heptagon_slider_mb->get_the_value('slide-pagelink') ) { ?>

										<?php $pageid = $heptagon_slider_mb->get_the_value('slide-pagelink'); ?>

										<div class="slide-callouts">
											<a class="button" href="<?php echo get_permalink($pageid); ?>"><?php $heptagon_slider_mb->the_value('slide-button'); ?></a>
										</div><!--.slide-callouts-->
						

									<?php } ?>
									
								</div><!--.slide-item-wrap-->
						
						</li>

					<?php } ?>
				</ul>

				
			</div><!--.upper #home-slides-->



			
		</div><!--.color-overlay-->
	</section><!--.big-slider-->
	<?php
}

?>