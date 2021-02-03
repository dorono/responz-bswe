<?php
/**
* Template Name: Shop
**/
 ?>

<?php get_header(); ?>

<?php
/** Themify Default Variables
 *  @var object */
global $themify; ?>

<?php dynamic_sidebar('top-728x90-ad'); ?>

<!-- layout-container -->
<div id="layout" class="clearfix pagewidth">

	<!-- contentwrap -->
	<div id="contentwrap">

    	<?php themify_content_before(); //hook ?>
		<!-- content -->
		<div id="content" class="clearfix">
    				<?php if($themify->page_title != "yes"): ?>
					<h1 class="page-title" itemprop="name"><?php the_title(); ?></h1>
				<?php endif; ?>
        <?php the_content() ?>
				<!-- /page-title -->
			<?php dynamic_sidebar('homepage-newsletter'); ?>
			<!-- page-title -->

        	<?php themify_content_start(); //hook ?>








			<?php
			/////////////////////////////////////////////
			// Loop
			/////////////////////////////////////////////
			?>
			<?php if (have_posts()) : ?>

				<!-- loops-wrapper -->
				<div id="loops-wrapper" class="store-products loops-wrapper<?php //echo $themify->layout . ' ' . $themify->post_layout; ?>">

					<?php $query = new WP_Query( array('post_type' => 'products', 'posts_per_page' => 5 ) );
while ( $query->have_posts() ) : $query->the_post(); ?>
			<?php get_template_part( 'custom/bswe_loop','index'); ?>


					<?php endwhile; ?>

				</div>
				<!-- /loops-wrapper -->

				<?php get_template_part( 'includes/pagination'); ?>

			<?php
			/////////////////////////////////////////////
			// Error - No Page Found
			/////////////////////////////////////////////
			?>

			<?php else : ?>

				<p><?php _e( 'Sorry, nothing found.', 'themify' ); ?></p>

			<?php endif; ?>

    		<?php themify_content_end(); //hook ?>
		</div>
		<!--/content -->
        <?php themify_content_after() //hook; ?>

	</div>
	<!-- /contentwrap -->

	<?php
	/////////////////////////////////////////////
	// Sidebar
	/////////////////////////////////////////////
	if ($themify->layout != "sidebar-none"): get_sidebar(); endif; ?>

</div>
<!-- layout-container -->

<?php get_footer(); ?>
