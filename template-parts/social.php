<?php
/*
*
* Template part for displaying social media icons and links
*
*/

$social_query = array();

$fb = '<i class="fab fa-facebook"></i>';
$insta = '<i class="fab fa-instagram"></i>';
$snap = '<i class="fab fa-snapchat-square"></i>';
$gplus = '<i class="fab fa-google-plus-square"></i>';
$youtube = '<i class="fab fa-youtube-square"></i>';
$twitter = '<i class="fab fa-twitter-square"></i>';
$pinterest = '<i class="fab fa-pinterest-square"></i>';
$tumblr = '<i class="fab fa-tumblr-square"></i>';
$linkedin = '<i class="fab fa-linkedin"></i>';
$xing = '<i class="fab fa-xing-square"></i>';



if ( get_theme_mod('social_fb_link', '') != '' ) :
	$fb_link = get_theme_mod('social_fb_link', '');
	$fb_clr = get_theme_mod('social_fb_color', '#2244aa');

	$fb_array = array(
		'icon' => $fb,
		'link' => $fb_link,
		'color' => $fb_clr,
	);
	array_push( $social_query, $fb_array );
endif;

if ( get_theme_mod('social_insta_link', '') != '' ) :
	$insta_link = get_theme_mod('social_insta_link', '');
	$insta_clr = get_theme_mod('social_insta_color', '#8942f4');

	$insta_array = array(
		'icon' => $insta,
		'link' => $insta_link,
		'color' => $insta_clr,
	);
	array_push( $social_query, $insta_array );
endif;

if ( get_theme_mod('social_snap_link', '') != '' ) :
	$snap_link = get_theme_mod('social_snap_link', '');
	$snap_clr = get_theme_mod('social_snap_color', '#f4e542');

	$snap_array = array(
		'icon' => $snap,
		'link' => $snap_link,
		'color' => $snap_clr,
	);
	array_push( $social_query, $snap_array );
endif;

if ( get_theme_mod('social_gplus_link', '') != '' ) :
	$gplus_link = get_theme_mod('social_gplus_link', '');
	$gplus_clr = get_theme_mod('social_gplus_color', '#c11919');

	$gplus_array = array(
		'icon' => $gplus,
		'link' => $gplus_link,
		'color' => $gplus_clr,
	);
	array_push( $social_query, $gplus_array );
endif;

if ( get_theme_mod('social_youtube_link', '') != '' ) :
	$youtube_link = get_theme_mod('social_youtube_link', '');
	$youtube_clr = get_theme_mod('social_youtube_color', '#ff0000');

	$youtube_array = array(
		'icon' => $youtube,
		'link' => $youtube_link,
		'color' => $youtube_clr,
	);
	array_push( $social_query, $youtube_array );
endif;

if ( get_theme_mod('social_twitter_link', '') != '' ) :
	$twitter_link = get_theme_mod('social_twitter_link', '');
	$twitter_clr = get_theme_mod('social_twitter_color', '#42c9ff');

	$twitter_array = array(
		'icon' => $twitter,
		'link' => $twitter_link,
		'color' => $twitter_clr,
	);
	array_push( $social_query, $twitter_array );
endif;

if ( get_theme_mod('social_pinterest_link', '') != '' ) :
	$pinterest_link = get_theme_mod('social_pinterest_link', '');
	$pinterest_clr = get_theme_mod('social_pinterest_color', '#aa0a0a');

	$pinterest_array = array(
		'icon' => $pinterest,
		'link' => $pinterest_link,
		'color' => $pinterest_clr,
	);
	array_push( $social_query, $pinterest_array );
endif;

if ( get_theme_mod('social_tumblr_link', '') != '' ) :
	$tumblr_link = get_theme_mod('social_tumblr_link', '');
	$tumblr_clr = get_theme_mod('social_tumblr_color', '#354e7a');

	$tumblr_array = array(
		'icon' => $tumblr,
		'link' => $tumblr_link,
		'color' => $tumblr_clr,
	);
	array_push( $social_query, $tumblr_array );
endif;

if ( get_theme_mod('social_linkedin_link', '') != '' ) :
	$linkedin_link = get_theme_mod('social_linkedin_link', '');
	$linkedin_clr = get_theme_mod('social_linkedin_color', '#4873bf');

	$linkedin_array = array(
		'icon' => $linkedin,
		'link' => $linkedin_link,
		'color' => $linkedin_clr,
	);
	array_push( $social_query, $linkedin_array );
endif;

if ( get_theme_mod('social_xing_link', '') != '' ) :
	$xing_link = get_theme_mod('social_xing_link', '');
	$xing_clr = get_theme_mod('social_xing_color', '#185941');

	$xing_array = array(
		'icon' => $xing,
		'link' => $xing_link,
		'color' => $xing_clr,
	);
	array_push( $social_query, $xing_array );
endif;


foreach ( $social_query as $social ) :
	echo '<a class="social_links" href="' . $social['link'] . '" style="color:' . $social['color'] . '!important;">' . $social['icon'] . '</a>';
endforeach;

?>