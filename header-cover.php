<?php
/**
 * vanilla Header for Bonfire cover page.
 *
 * Displays all of the <head> section
 *
 * @package WordPress
 * @subpackage Bonfire
 * @since Bonfire 0.0.1
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<title>Torchfire | Social Engagement</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />

<link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400' rel='stylesheet' type='text/css'>
<link rel='stylesheet' href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/typography.css" type='text/css'>

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
 
<script src="<?php bloginfo('template_directory'); ?>/js/modernizr-1.6.min.js"></script>
 
<?php
    /* We add some JavaScript to pages with the comment form
     * to support sites with threaded comments (when in use).
     */
    if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );
 
    /* Always have wp_head() just before the closing </head>
     * tag of your theme, or you will break many plugins, which
     * generally use this hook to add elements to <head> such
     * as styles, scripts, and meta tags.
     */
    wp_head();
?>
</head>
 
<body <?php body_class(); ?>>