<?php
/** Themify Default Variables
 * @var object */
global $themify; ?>

<?php get_template_part( 'includes/footer-slider'); ?>

	<?php themify_layout_after(); //hook ?>
	</div>
	<!-- /body -->

	<div id="footerwrap">

    	<?php themify_footer_before(); //hook ?>
		<footer id="footer" class="pagewidth clearfix" itemscope="itemscope" itemtype="https://schema.org/WPFooter" role="contentinfo">
        	<?php themify_footer_start(); //hook ?>

			<?php get_template_part( 'includes/footer-widgets'); ?>

			<div class="footer-nav-wrap">
				<p class="back-top"><a href="#header">&uarr;</a></p>

				<?php if (function_exists('wp_nav_menu')) {
					wp_nav_menu(array('theme_location' => 'footer-nav' , 'fallback_cb' => '' , 'container'  => '' , 'menu_id' => 'footer-nav' , 'menu_class' => 'footer-nav'));
				} ?>
			</div>
			<!-- /footer-nav-wrap -->

			<div class="footer-text clearfix">
				<?php themify_the_footer_text(); ?>
				<?php themify_the_footer_text('right'); ?>
			</div>
			<!-- /footer-text -->

			<?php themify_footer_end(); //hook ?>
		</footer>
		<!-- /#footer -->
        <?php themify_footer_after(); //hook ?>

	</div>
	<!-- /#footerwrap -->

</div>
<!-- /#pagewrap -->

<?php
/**
 *  Stylesheets and Javascript files are enqueued in theme-functions.php
 */
?>

<?php themify_body_end(); // hook ?>
<!-- wp_footer -->
<?php wp_footer(); ?>

<!-- BEGIN SHARPSPRING ADS TRACKING CODE -->
<script type="text/javascript">
    var _ss = _ss || [];
    _ss.push(['_setDomain', 'https://koi-3QNPV4UII8.marketingautomation.services/net']);
    _ss.push(['_setAccount', 'KOI-4ELMYLYH54']);
    _ss.push(['_trackPageView']);
    window._pa = window._pa || {};
    // _pa.orderId = "myOrderId"; // OPTIONAL: attach unique conversion identifier to conversions
    // _pa.revenue = "19.99"; // OPTIONAL: attach dynamic purchase values to conversions
    // _pa.productId = "myProductId"; // OPTIONAL: Include product ID for use with dynamic ads
(function() {
    var ss = document.createElement('script');
    ss.type = 'text/javascript'; ss.async = true;
    ss.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'koi-3QNPV4UII8.marketingautomation.services/client/ss.js?ver=2.4.0';
    var scr = document.getElementsByTagName('script')[0];
    scr.parentNode.insertBefore(ss, scr);
})();
</script>
<!-- END SHARPSPRING ADS TRACKING CODE -->

</body>
</html>
