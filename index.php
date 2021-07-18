<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

if ( have_posts() ) {

	// Load posts loop.
	while ( have_posts() ) {
		the_post();

		get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
	}
	$options = get_option( 'my_framework' ); // unique id of the framework




// Text
?><div class="heading">Text Field</div> <?php
echo "<h2 class='text'>".$options['opt-text']."</h2>"; // id of the field

//TextArea
?><div class="heading">TextArea</div> <?php
echo "<p class='text' >".$options['opt-textarea']."</p>"; // id of the field

 ?> 


<div class="heading">BackGround</div>
<div class="csf text" style="height:50vh; width:50vw; margin-left:25vw">
	

		
</div>

 
 <?php


//Button Set
?><div class="heading">Button Set</div> <?php
echo "<p class='text' >Button Set Value : ".$options['opt-button-set-1']."</p>"; // id of the field

//Checkbox
?><div class="heading">Checkbox</div> <?php
$checkbox_array=$options['opt-checkbox-2'];
foreach($checkbox_array as $checkbox_value){
	echo "<p class='text' >".$checkbox_value."</p>"; 
}

//Color
?><div class="heading">Color Field</div> <?php
echo "<p class='text2' >This is Color Field Test.</p>"; // id of the field

//Date
?><div class="heading">Date</div> <?php
echo "<p class='text' >".$options['opt-date-1']."</p>"; // id of the field

//Link
?><div class="heading">Link</div> <?php
echo "<p class='text'><a  href='".$options['opt-link-1']['url']."' >".$options['opt-link-1']['text']."</a></p>"; // id of the field

//Map
?><div class="heading">Map</div> <?php
echo "<p class='text' >Latitude : ".$options['opt-map-1']['latitude']." --- Longitude : ".$options['opt-map-1']['longitude']."</p>"; // id of the field


//Image
?><div class="heading">Media</div> <?php
echo "<img class='image text'  src='".$options['opt-media-1']['url']."'  />"; // id of the field


//Number
?><div class="heading">Number</div> <?php
echo "<p class='text' >".$options['opt-number-1']."</p>"; // id of the field


//Color Palette
?><div class="heading">Color Palette</div> <?php
echo "<p class='text' >".$options['opt-palette-1']."</p>"; // id of the field


//Repeater
?><div class="heading">Repeater Fields</div> <?php
$repeater=$options['opt-repeater-1'];

foreach($repeater as $field){
	foreach($field as $key=>$field_value){
	echo "<p class='text' >".$key."=>".$field_value."</p>"; // id of the field
}
}

// Media Upload
?><div class="heading">Media Upload</div> <?php
echo "<img class='image text'  src='".$options['opt-upload-2']."'  />"; // id of the field


//Switcher
?><div class="heading">Switcher</div> <?php
//0 for disabled,  1 for enabled
echo "<p class='text' >".$options['opt-switcher-5']."</p>"; // id of the field


//Spinner
?><div class="heading">Spinner</div> <?php
echo "<p class='text' >".$options['opt-spinner-4']."</p>"; // id of the field

//Selector
?><div class="heading">Select</div> <?php
echo "<p class='text' >".$options['opt-select-11']."</p>"; // id of the field







	// Previous/next page navigation.
	twenty_twenty_one_the_posts_navigation();

} else {

	// If no content, include the "No posts found" template.
	get_template_part( 'template-parts/content/content-none' );

}

get_footer();
