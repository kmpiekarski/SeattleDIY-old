<?php
/*
Template Name: DIY Events Page

 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">
				<div style="width:545px !important; overflow:visible; ">
			<?php
				include('/home/seattled/public_html/calendar/index.php');
			?>
				</div>
			</div><!-- #content -->
		</div><!-- #contwainer -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
