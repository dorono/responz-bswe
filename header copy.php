<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php
/** Themify Default Variables
 @var object */
global $themify; ?>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<!-- reset viewport for mobile -->


<title itemprop="name"><?php wp_title(); ?></title>

<?php
/**
 *  Stylesheets and Javascript files are enqueued in theme-functions.php
 */
?>

<!-- wp_header -->
<?php wp_head(); ?>

<script src="//platform-api.sharethis.com/js/sharethis.js#property=5adb1bcabc190a0013e2aba9&product=gdpr-compliance-tool"></script>

<?php //For Facebook to create custom audience out of my website visitors ?>
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s) {
    if(f.fbq) return; n=f.fbq=function() {
      n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)
    };
    if(!f._fbq) f._fbq=n; n.push=n; n.loaded=!0; n.version='2.0';
    n.queue=[]; t=b.createElement(e); t.async=!0;
    t.src=v; s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)
  }(window,document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init','751675342232877');
  fbq('track','PageView');
  fbq('dataProcessingOptions', ['LDU'], 0, 0);
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=211589990286087&ev=PageView&noscript=1" /></noscript>
<!-- End Facebook Pixel Code -->


  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/all.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

	<!-- start Google Analytics Tracking Code -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-8542965-5', 'auto');
		ga('create', 'UA-8542965-5', 'auto', 'adClickTracker');
		ga('send', 'pageview');
	</script>
	<!-- end Google Analytics Tracking Code -->

<!-- start Mailchimp popup code -->
<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/42c62e22f20fe87b4c27dc640/faaf9ce4ac699adc7e27a3d46.js");</script>
<!-- end Mailchimp popup code -->

</head>

<body <?php body_class(); ?>>

<?php themify_body_start(); //hook ?>
<div id="pagewrap" class="hfeed site">

	<div id="headerwrap">

		<div id="nav-bar">

			<div class="pagewidth clearfix">
				<?php dynamic_sidebar('top-text-ad'); ?>

				<div class="nav-menu-container">
				<?php if (function_exists('wp_nav_menu')) {
					wp_nav_menu(array('theme_location' => 'top-nav' , 'fallback_cb' => '' , 'container'  => '' , 'menu_id' => 'top-nav' , 'menu_class' => 'top-nav'));
				} ?>
			</div>
			</div>
		</div>
		<!-- /nav-bar -->

		<?php themify_header_before(); //hook ?>
		<header id="header" class="pagewidth" itemscope="itemscope" itemtype="https://schema.org/WPHeader" role="banner">
        	<?php themify_header_start(); //hook ?>

			<hgroup>
			<?php echo themify_logo_image('site_logo'); ?>

			<?php if ( $site_desc = get_bloginfo( 'description' ) ) : ?>
				<?php global $themify_customizer; ?>
				<div id="site-description" class="site-description"><?php echo class_exists( 'Themify_Customizer' ) ? $themify_customizer->site_description( $site_desc ) : $site_desc; ?></div>
			<?php endif; ?>
			</hgroup>

			<div class="header-widget">
				<?php dynamic_sidebar('header-widget'); ?>
			</div>
			<!--/header widget -->

			<?php if(!themify_check('setting-exclude_search_form')): ?>
				<div id="searchform-wrap">
					<div id="search-icon" class="mobile-button"></div>
					<?php get_search_form(); ?>
				</div>
				<!-- /searchform-wrap -->
			<?php endif ?>

			<div class="social-widget">
				<?php dynamic_sidebar('social-widget'); ?>

				<?php if(!themify_check('setting-exclude_rss')): ?>
					<div class="rss"><a href="<?php if(themify_get('setting-custom_feed_url') != ""){ echo themify_get('setting-custom_feed_url'); } else { echo bloginfo('rss2_url'); } ?>">RSS</a></div>
				<?php endif ?>
			</div>
			<!-- /.social-widget -->

            <div id="main-nav-wrap">
                <div id="menu-icon" class="mobile-button"></div>
                <nav>
                    <?php
					if ( function_exists( 'themify_custom_menu_nav' ) ) {
						themify_custom_menu_nav();
					} else {
						wp_nav_menu( array(
							'theme_location' => 'main-nav',
							'fallback_cb'    => 'themify_default_main_nav',
							'container'      => '',
							'menu_id'        => 'main-nav',
							'menu_class'     => 'main-nav'
						));
					}
					?>
                </nav>
                <span class="screen-reader-text"><?php _e( 'Scroll down to content', 'themify' ); ?></span>
		<!-- /#main-nav -->
	</div>
            <!-- /#main-nav-wrap -->

			<?php themify_header_end(); //hook ?>
		</header>
		<!-- /#header -->
        <?php themify_header_after(); //hook ?>

	</div>
	<!-- /#headerwrap -->

	<div id="body" class="clearfix">
	<?php themify_layout_before(); //hook ?>
