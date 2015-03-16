<div class="farts_meta_control">

<?php global $wpalchemy_media_access; ?>	

	
	<section>
		<h2>Slides</h2>
 		
 		<?php while($mb->have_fields_and_multi('slider-img')): //Open Group 'home-img' ?>
		<?php $mb->the_group_open(); ?>

			<div class="repeating-heading">
				<h3>Slide</h3>
				<a href="#" class="dodelete button"><i class="fa fa-times"></i></a>
			</div><!--.repeating-heading-->

			<div class="content">
				<div class="meta-label">
					<label>Large Slider Image</label>
					<br /><span>Required</span>
				</div><!--.meta-label-->

				<div class="meta-input">
					<?php $mb->the_field('slide-imgurl'); ?>
				    <?php $wpalchemy_media_access->setGroupName('img-n' . $mb->get_the_index())->setInsertButtonLabel('Insert'); ?>
				 
				    <p>
				        <?php echo $wpalchemy_media_access->getField(array('name' => $mb->get_the_name(), 'value' => $mb->get_the_value())); ?>
				        <?php echo $wpalchemy_media_access->getButton(); ?>
				        <span>Image will be centered horizontally and vertically, and will stretch to fill the width of the browser window. Please use an image that is at least 1280px wide by 600px tall, and if possible under 120KB.</span>
				    </p>
			    </div><!--.meta-input-->

			    <div class="meta-label">
					<label>Heading</label>
				</div><!--.meta-label-->
			 	
			 	<div class="meta-input">
					<p>
						<?php $mb->the_field('slide-heading'); ?>
						<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
						<span>Enter in a heading.</span>
					</p>
				</div><!--.meta-field-->
			 	
			

				<div class="meta-label"> 	
					<label>Button Text</label>
				</div><!--.meta-label-->
			 
				<div class="meta-input">
					<p>
						<?php $mb->the_field('slide-button'); ?>
						<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
						<span>Enter text for linked button</span>
					</p>
				</div><!--.meta-field-->

				
				<div class="meta-label">
					<label>Select Page</label><br/>
				</div><!--meta-label-->
				
				<?php //Setup Page selector
				$args1 = array(
					'sort_order' => 'ASC',
					'sort_column' => 'post_title',
					'post_type' => 'page',
					'post_status' => 'publish',
				); 

				$pages = get_pages( $args1 ); ?>

				<div class="meta-input">	
					<?php $mb->the_field('slide-pagelink'); ?>
					<select name="<?php $mb->the_name(); ?>">
						<option value="">- None -</option>

						<?php foreach ( $pages as $page ) { 
							$title = $page->post_title;
							$pageid = $page->ID; // Will get permalink by ID in frontend
						?>
							<option value="<?php echo $pageid; ?>" <?php $mb->the_select_state($pageid); ?>><?php echo $title; ?></option>
							<?php } 

							?>
					</select>
					<span>Select a page for the button to link to. Leave 'None' selected for no button.</span>
				</div><!--.meta-input-->

			</div><!--.content-->

		 	<?php $mb->the_group_close(); //Close Group 'home-img'?>
		<?php endwhile; ?>
 		
 		<!--Add Button button-->
		<p style="margin-bottom:15px; padding-top:5px;"><a href="#" class="docopy-slider-img add button"><i class="fa fa-plus-circle"></i> Add Slide</a></p>

	</section>
</div>