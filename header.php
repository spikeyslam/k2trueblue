<?php
/**
 * The template for displaying the header.
 *
 * @package WordPress
 * @subpackage K2
 * @since K2 unknown
 */

// Prevent users from directly loading this theme file
defined( 'K2_CURRENT' ) or die ( __('Error: This file can not be loaded directly.', 'k2') );
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://microformats.org/profile/specs http://microformats.org/profile/hatom">
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="template" content="K2 <?php k2info('version'); ?>">
<meta name="viewport" content="initial-scale=1.0, width=device-width, maximum-scale=1.0"/>

<title><?php wp_title('&laquo;', true, 'right'); ?><?php bloginfo('name'); ?></title>

<?php if ( get_option('k2usestyle') != 0 ): ?>
	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_url'); ?>/style.css" />
<?php endif; ?>

<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_url'); ?>" />

<?php if ( is_singular() ): ?>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php endif; ?>

<?php wp_get_archives('type=monthly&format=link'); ?>

<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class('trueblue'); ?>>

<?php /* K2 Hook */ do_action('template_body_top'); ?>

<div id="page">

	<?php /* K2 Hook */ do_action('template_before_header'); ?>

	<div id="header">

		<?php locate_template( array('blocks/k2-header.php'), true ); ?>

		<?php /* K2 Hook */ do_action('template_header'); ?>

	</div> <!-- #header -->

	<hr />

	<?php /* K2 Hook */ do_action('template_before_content'); ?>
