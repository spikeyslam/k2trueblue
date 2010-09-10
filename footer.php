<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage K2
 * @since K2 unknown
 */
?>

	<?php /* K2 Hook */ do_action('template_after_content'); ?>


<?php /* K2 Hook */ do_action('template_before_footer'); ?>

<footer id="footer">

	<?php locate_template( array('blocks/k2-footer.php'), true ); ?>

	<?php /* K2 Hook */ do_action('template_footer'); ?>

</footer>
	<div class="clear"></div>
</div> <!-- Close Page -->

<?php wp_footer(); ?>

<!--
<script type="text/javascript">
	jQuery(document).ready(function(){
		var divHeight = 0;

		jQuery('.primary, #widgets-sidebar-1, #widgets-sidebar-2').each(function(){
			if ( jQuery(this).outerHeight() > divHeight ) divHeight = jQuery(this).outerHeight();
		});

		jQuery('.primary, #widgets-sidebar-1, #widgets-sidebar-2').height(divHeight);
	});
</script>
-->

</body>
</html>
