<?php

// =============================================================================
// VIEWS/INTEGRITY/CONTENT-grow_media_product.PHP
// -----------------------------------------------------------------------------
// Standard post output for Integrity.
// =============================================================================

?>
<?php /*
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="entry-featured">
    <?php x_featured_image(); ?>
  </div>
  <div class="entry-wrap">
    <?php x_get_view( 'integrity', '_content', 'post-header' ); ?>
    <?php x_get_view( 'global', '_content' ); ?>
  </div>
  <?php x_get_view( 'integrity', '_content', 'post-footer' ); ?>
</article>
*/
?>

<?php // echo '<p>hello</p>'; ?>

<?php
	// get current item
	$slug = pods_v('last', 'url');

	//get pods object for current item
	$pods = pods('grow_media_product', $slug);

	//set our variables
	$grow_media_product = $pods->display('grow_media_product');
	$grow_media_product_img = $pods->field('image');
	$grow_media_label_2up = $pods->field('2up_label');
	$grow_media_product_img_output = pods_image($grow_media_product_img['ID'], $size = 'large', $default = 0, $attributes = 'class=product-img', $force = false);
	$grow_media_product_points = $pods->display('points');
	$grow_media_product_description = $pods->display('description');
	$grow_media_product_label_btn = $pods->display('label_button');
	$grow_media_product_label_b_btn = $pods->display('label_button_b');
	$grow_media_product_msds_btn = $pods->display('msds_button');
	$grow_media_product_msds_b_btn = $pods->display('msds_button_b');
?>
<div class="entry-wrap">
<div class="entry-content product-single grow_media_product <?php if($grow_media_label_2up) { echo 'label-2up'; } ?>">
<div id="x-section-1" class="x-section">

<?php
// var_dump($slug);
// var_dump($pods);
// var_dump($grow_media_product_img);
?>
<header class="entry-header">
<?php
print '<h1 class="grow_media_product-name entry-title">' . $grow_media_product . '</h1>';
?>
</header>

<div class="x-container max width">

<div class="x-column x-sm x-1-2">
<?php print $grow_media_product_img_output; ?>
</div>

<div class="x-column x-sm x-1-2">
<?php
print $grow_media_product_points;
?>

<?php
// if( $grow_media_product_label_btn !== ""){
if( $grow_media_product_label_btn) {
	// print '<p>label_button set</p>';
	print '<a class="x-btn x-btn-mini" href="' . $grow_media_product_label_btn . '" data-options="thumbnail: \'\'">Download Label<i class="x-icon mvn mls mrn x-icon-caret-down" data-x-icon="" aria-hidden="true"></i></a>';
} 
// else {
// 	print '<p>label_button NOT set</p>';
// }
?>

<!-- <a class="x-btn x-btn-mini" href=" -->
<?php // print $grow_media_product_label_btn; ?>
<!-- " data-options="thumbnail: ''">Download Label<i class="x-icon mvn mls mrn x-icon-caret-down" data-x-icon="" aria-hidden="true"></i></a>
 -->

<hr class="x-gap">

<?php
if( $grow_media_product_label_b_btn) {
	// print '<p>label_button_b set</p>';
	print '<a class="x-btn x-btn-mini" href="' . $grow_media_product_label_b_btn . '" data-options="thumbnail: \'\'">Download Label B<i class="x-icon mvn mls mrn x-icon-caret-down" data-x-icon="" aria-hidden="true"></i></a>';
} 
// else {
// 	print '<p>label_button_b NOT set</p>';
// }
?>

<hr class="x-gap">

<?php
// if( $grow_media_product_msds_btn !== "") {
if($grow_media_product_msds_btn) {
	// print '<p>msds_button set</p>';
	print '<a class="x-btn x-btn-mini" href="' . $grow_media_product_msds_btn . '" data-options="thumbnail: \'\'">Download MSDS<i class="x-icon mvn mls mrn x-icon-caret-down" data-x-icon="" aria-hidden="true"></i></a>';
} 
// else {
// 	print '<p>msds_button NOT set</p>';
// }
?>

<!-- <a class="x-btn x-btn-mini" href=" -->
<?php // print $grow_media_product_msds_btn; ?>
<!-- " data-options="thumbnail: ''">Download MSDS<i class="x-icon mvn mls mrn x-icon-caret-down" data-x-icon="" aria-hidden="true"></i></a> -->

<hr class="x-gap">

<?php
if($grow_media_product_msds_b_btn) {
	// print '<p>msds_button_b set</p>';
	print '<a class="x-btn x-btn-mini" href="' . $grow_media_product_msds_b_btn . '" data-options="thumbnail: \'\'">Download MSDS B<i class="x-icon mvn mls mrn x-icon-caret-down" data-x-icon="" aria-hidden="true"></i></a>';
} 
// else {
// 	print '<p>msds_button_b NOT set</p>';
// }
?>

</div>

</div>
<!--end x-container-->

<div class="x-container max width">

<div class="x-column x-sm x-1-1">

<?php print $grow_media_product_description; ?>

</div>

</div>
<!--end x-container-->

</div>
<!--end x-section-1-->

</div>
<!--end grow_media_product-->

</div>
<!--end entry-wrap-->