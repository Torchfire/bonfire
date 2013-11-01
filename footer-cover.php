<?php
/**
 * vanilla Footer for Bonfire Cover Page.
 *
 * @package WordPress
 * @subpackage Bonfire
 * @since Bonfire 0.0.1
 */
?>

	<footer>

<?php
	get_sidebar( 'footer' );
?>

		<p>site designed by <a href="mailto:mbrazil@thingwone.com">thingwone</a></p>

	</footer>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>