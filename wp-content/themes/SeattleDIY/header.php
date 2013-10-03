<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
 
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta name="description" content="... events and information about the Do It Yourself community in Seattle." />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link href="/calendar/theme/default/esstyle.css" rel="stylesheet" type="text/css"/> 
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
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

<script type="text/JavaScript" src="/calendar/overLIB/overlib_mini.js"></script>
<style type="text/css">
#flickr_badge_source_txt {padding:0; font: 11px Arial, Helvetica, Sans serif; color:#666666;}
#flickr_badge_icon {display:block !important; margin:0 !important; border: 1px solid rgb(0, 0, 0) !important;}
#flickr_icon_td {padding:0 5px 0 0 !important;}
.flickr_badge_image {text-align:center !important;}
.flickr_badge_image img {border: 1px solid black !important;}
#flickr_www {display:block; padding:0 10px 0 10px !important; font: 11px Arial, Helvetica, Sans serif !important; color:#3993ff !important;}
#flickr_badge_uber_wrapper a:hover,
#flickr_badge_uber_wrapper a:link,
#flickr_badge_uber_wrapper a:active,
#flickr_badge_uber_wrapper a:visited {text-decoration:none !important; background:inherit !important;color:#3993ff;}
#flickr_badge_wrapper {}
#flickr_badge_source {padding:0 !important; font: 11px Arial, Helvetica, Sans serif !important; color:#666666 !important;}
</style>

<?php $CSS=1; require("calendar/calendar.php"); ?></head>

<body <?php body_class(); ?>><?php $OL=1; require("calendar/calendar.php"); ?>
<div id="wrapper" class="hfeed">
	<div id="header">
		<div id="masthead">
			<div id="branding" role="banner">
            
            <!-- Start of Flickr Badge -->
<center>
<table id="flickr_badge_uber_wrapper" cellpadding="0" cellspacing="10" border="0"><tr><td><table cellpadding="0" cellspacing="10" border="0" id="flickr_badge_wrapper">
<tr>
<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=13&display=latest&size=t&layout=h&context=in%2Fpool-seattlediy%2F&source=group&group=967008%40N22"></script>
</tr>
</table>
</td></tr></table>
</center>
<!-- End of Flickr Badge -->

				<?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'div'; ?>
				<<?php echo $heading_tag; ?> id="site-title">
					<span>
						<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					</span>
				</<?php echo $heading_tag; ?>>
				<div id="site-description"><?php bloginfo( 'description' ); ?></div>

				
			</div><!-- #branding -->

			<div id="access" role="navigation">
			  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
				<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>"><?php _e( 'Skip to content', 'twentyten' ); ?></a></div>
				<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
			</div><!-- #access -->
            
            <?php if ( is_active_sidebar( 'header-widget-area' ) ) : ?>
				<div id="first" class="widget-area">
					<ul class="xoxo">
						<?php dynamic_sidebar( 'header-widget-area' ); ?>
					</ul>
				</div><!-- #first .widget-area -->
			<?php endif; ?>
            
		</div><!-- #masthead -->
	</div><!-- #header -->

	<div id="main">
