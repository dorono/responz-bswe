<?php get_header(); ?>

<?php
/** Themify Default Variables
 *  @var object */
global $themify; ?>

<?php dynamic_sidebar('top-728x90-ad'); ?>
<?php if (is_home() && !is_paged()) { get_template_part( 'includes/header-slider'); } ?>
<!-- <?php if(is_front_page() && !is_paged()) { ?>
  <div id="header-slider" class="pagewidth slider" style="visibility: visible;height: auto;">
    					<div class="carousel-wrap carousel-ready" style="position: relative;">
  <?php dynamic_sidebar('top-homepage-slider'); ?></div></div> -->
<?php } ?>
<!-- layout-container -->
<div id="layout" class="clearfix pagewidth">

	<!-- contentwrap -->
	<div id="contentwrap">

    	<?php themify_content_before(); //hook ?>
		<!-- content -->
		<div id="content" class="clearfix">
			<?php dynamic_sidebar('homepage-newsletter'); ?>

        	<?php themify_content_start(); //hook ?>

			<?php
			/////////////////////////////////////////////
			// Author Page
			/////////////////////////////////////////////
			?>
			<?php if(is_author()) : ?>
				<?php
				$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
				$author_url = $curauth->user_url;
				?>
				<div class="author-bio clearfix">
					<p class="author-avatar"><?php echo get_avatar( $curauth->user_email, $size = '48' ); ?></p>
					<h2 class="author-name"><?php _e('About','themify'); ?> <?php echo $curauth->first_name; ?> <?php echo $curauth->last_name; ?></h2>
					<?php if($author_url != ''): ?><p class="author-url"><a href="<?php echo $author_url; ?>"><?php echo $author_url; ?></a></p><?php endif; //author url ?>
					<div class="author-description">
						<?php echo $curauth->user_description; ?>
					</div>
					<!-- /.author-description -->
				</div>
				<!-- /.author bio -->

				<h2 class="author-posts-by"><?php _e('Posts by','themify'); ?> <?php echo $curauth->first_name; ?> <?php echo $curauth->last_name; ?>:</h2>
			<?php endif; ?>

			<?php
			/////////////////////////////////////////////
			// Search Title
			/////////////////////////////////////////////
			?>
			<?php if(is_search()): ?>
				<h1 class="page-title"><?php _e('Search Results for:','themify'); ?> <em><?php echo get_search_query(); ?></em></h1>
			<?php endif; ?>

			<?php
		/////////////////////////////////////////////
		// Date Archive Title
		/////////////////////////////////////////////
		?>
		<?php if ( is_day() ) : ?>
			<h1 class="page-title"><?php printf( __( 'Daily Archives: <span>%s</span>', 'themify' ), get_the_date() ); ?></h1>
		<?php elseif ( is_month() ) : ?>
			<h1 class="page-title"><?php printf( __( 'Monthly Archives: <span>%s</span>', 'themify' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'themify' ) ) ); ?></h1>
		<?php elseif ( is_year() ) : ?>
			<h1 class="page-title"><?php printf( __( 'Yearly Archives: <span>%s</span>', 'themify' ), get_the_date( _x( 'Y', 'yearly archives date format', 'themify' ) ) ); ?></h1>
		<?php endif; ?>

		<?php
			/////////////////////////////////////////////
			// Category Title
			/////////////////////////////////////////////
			?>
			<?php if(is_category() || is_tag() || is_tax() ): ?>
				<h1 class="page-title"><?php single_cat_title(); ?></h1>
			<?php echo $themify->get_category_description(); ?>
			<?php endif; ?>

			<?php
			/////////////////////////////////////////////
			// Default query categories
			/////////////////////////////////////////////
			?>
			<?php if( !is_search() ): ?>
				<?php
				global $query_string;
				query_posts( apply_filters( 'themify_query_posts_args', $query_string.'&order='.$themify->order.'&orderby='.$themify->orderby ) );
				?>
			<?php endif; ?>

			<?php
			/////////////////////////////////////////////
			// Loop
			/////////////////////////////////////////////
			?>
			<?php if (have_posts()) : ?>

				<!-- loops-wrapper -->
				<div id="loops-wrapper" class="loops-wrapper <?php echo $themify->layout . ' ' . $themify->post_layout; ?>">

					<?php
            while (have_posts()) : the_post();
              $count++;
              $index = $wp_query->current_post + 2;
          ?>

		<?php if($index == 4): ?>
            <?php dynamic_sidebar('inside-the-loop'); ?>
          <?php endif; ?>
						<?php if(is_search()): ?>
							<?php get_template_part( 'includes/loop','search'); ?>
						<?php else: ?>
							<?php get_template_part( 'includes/loop','index'); ?>
						<?php endif; ?>

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
