<?php if(!is_single()) { global $more; $more = 0; } //enable more link ?>
<?php
/** Themify Default Variables
 *  @var object */
global $themify; ?>

<?php themify_post_before(); //hook ?>
    <article itemscope itemtype="http://schema.org/Article" id="post-<?php the_ID(); ?>" <?php post_class("post clearfix " . $themify->get_categories_as_classes(get_the_ID())); ?>>
	<?php themify_post_start(); // hook ?>

	<?php if ( $themify->hide_image != 'yes' ) : ?>
		<?php themify_before_post_image(); // Hook ?>

		<?php if ( themify_get( 'video_url' ) != '' ) : ?>

			<?php
				global $wp_embed;
				echo $wp_embed->run_shortcode('[embed]' . themify_get('video_url') . '[/embed]');
			?>

		<?php elseif( $post_image = themify_get_image($themify->auto_featured_image . $themify->image_setting ) ) : ?>

                <?php if (is_front_page() || is_archive()) { ?>
                <div class="img-container">
                <?php } ?>
			<figure class="post-image <?php echo $themify->image_align; ?>">
				<?php if( 'yes' == $themify->unlink_image): ?>
					<?php echo $post_image; ?>
				<?php else: ?>
        <?php $external_product_page_url = get_post_meta( get_the_ID(), 'external_product_page_url', true); ?>


					<a target="_blank" href="<?php echo $external_product_page_url ?>"><?php echo $post_image; ?><?php themify_zoom_icon(); ?></a>

				<?php endif; // unlink image ?>
			</figure>
                <?php if (is_front_page() || is_archive()) { ?>
                </div>
                <?php } ?>



		<?php endif; // video else image ?>

		<?php themify_after_post_image(); // Hook ?>
	<?php endif; // hide image ?>

	<div class="post-content">

		<?php //PREVIOUSLY POST DATE ?>

		<?php if($themify->hide_title != "yes"): ?>
                <?php themify_before_post_title(); // Hook ?>
                <?php if($themify->unlink_title == "yes"): ?>
                    <h1 class="post-title entry-title" itemprop="name"><?php the_title(); ?> </h1>
                <?php else: ?>
<?php $external_product_page_url = get_post_meta( get_the_ID(), 'external_product_page_url', true); ?>
              <div class="product-info-section">

                <div class="product-title-section">
                  <h1 class="post-title entry-title" itemprop="name"><a target="_blank" href="<?php echo $external_product_page_url ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_title(); ?></a>
                  </h1>
                </div>

                <div class="product-cta-section">
                  <a href="<?php echo $external_product_page_url ?>" class="see-all" target="_blank">SEE ALL</a>
                </div>

              </div>


                <?php endif; //unlink post title ?>
                <?php themify_after_post_title(); // Hook ?>
		<?php endif; //post title ?>

		<?php
      // POST META PREVIOUSLY WENT HERE
      // POST SOCIAL ICONS PREVIOUSLY WENT HERE
    ?>


            <div class="entry-content" style="padding-top: 10px" itemprop="articleBody">


		</div><!-- /.entry-content -->

		<?php edit_post_link(__('Edit', 'themify'), '<span class="edit-button">[', ']</span>'); ?>

	</div>
	<!-- /.post-content -->
	<?php themify_post_end(); //hook ?>

</article>
<!-- /.post -->
<?php //themify_post_after(); //hook ?>
