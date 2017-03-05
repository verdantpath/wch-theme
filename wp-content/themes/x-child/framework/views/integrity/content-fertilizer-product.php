<?php

// =============================================================================
// VIEWS/INTEGRITY/CONTENT-FERTILIZER-PRODUCT.PHP
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
	$pods = pods('fertilizer-product', $slug);

	//set our variables
	$fertilizer_product = $pods->display('fertilizer-product');
	$fertilizer_product_img = $pods->field('image');
	$fertilizer_label_2up = $pods->field('2up_label');
	$fertilizer_product_img_output = pods_image($fertilizer_product_img['ID'], $size = 'large', $default = 0, $attributes = 'class=product-img', $force = false);
	$fertilizer_product_points = $pods->display('points');
	$fertilizer_product_description = $pods->display('description');
	$fertilizer_product_label_btn = $pods->display('label_button');
	$fertilizer_product_label_b_btn = $pods->display('label_button_b');
	$fertilizer_product_msds_btn = $pods->display('msds_button');
	$fertilizer_product_msds_b_btn = $pods->display('msds_button_b');

?>
<div class="entry-wrap">
<div class="entry-content product-single fertilizer-product <?php if($fertilizer_label_2up) { echo 'label-2up'; } ?>">
<div id="x-section-1" class="x-section">

<?php
// var_dump($slug);
// var_dump($pods);
// var_dump($fertilizer_product_img);
?>
<header class="entry-header">
<?php
print '<h1 class="fertilizer-product-name entry-title">' . $fertilizer_product . '</h1>';
?>
</header>

<div class="x-container max width">

<div class="x-column x-sm x-1-2">
<?php print $fertilizer_product_img_output; ?>
</div>

<div class="x-column x-sm x-1-2">
<?php
print $fertilizer_product_points;
?>

<?php
// if( $grow_media_product_label_btn !== ""){
if( $fertilizer_product_label_btn && $fertilizer_label_2up) {
	// print '<p>label_button set</p>';
	print '<a class="x-btn x-btn-mini" href="' . $fertilizer_product_label_btn . '" data-options="thumbnail: \'\'">Download Label A<i class="x-icon mvn mls mrn x-icon-caret-down" data-x-icon="" aria-hidden="true"></i></a>
	<hr class="x-gap">';
} elseif( $fertilizer_product_label_btn) {
	print '<a class="x-btn x-btn-mini" href="' . $fertilizer_product_label_btn . '" data-options="thumbnail: \'\'">Download Label<i class="x-icon mvn mls mrn x-icon-caret-down" data-x-icon="" aria-hidden="true"></i></a>
	<hr class="x-gap">';
}
// else {
// 	print '<p>label_button NOT set</p>';
// }
?>

<!-- <a class="x-btn x-btn-mini" href=" -->
<?php // print $fertilizer_product_label_btn; ?>
<!-- " data-options="thumbnail: ''">Download Label<i class="x-icon mvn mls mrn x-icon-caret-down" data-x-icon="" aria-hidden="true"></i></a> -->



<?php
if( $fertilizer_product_label_b_btn) {
	// print '<p>label_button_b set</p>';
	print '<a class="x-btn x-btn-mini" href="' . $fertilizer_product_label_b_btn . '" data-options="thumbnail" \'\'">Download Label B<i class="x-icon mvn mls mrn x-icon-caret-down" data-x-icon="" aria-hidden="true"></i></a>
	<hr class="x-gap">';
} 
// else {
// 	print '<p>label_button_b NOT set</p>';
// }
?>



<?php
// if( $grow_media_product_msds_btn !== "") {
if($fertilizer_product_msds_btn && $fertilizer_label_2up) {
	// print '<p>msds_button set</p>';
	print '<a class="x-btn x-btn-mini" href="' . $fertilizer_product_msds_btn . '" data-options="thumbnail: \'\'">Download MSDS A<i class="x-icon mvn mls mrn x-icon-caret-down" data-x-icon="" aria-hidden="true"></i></a>';
} elseif($fertilizer_product_msds_btn) {
	// print '<p>msds_button set</p>';
	print '<a class="x-btn x-btn-mini" href="' . $fertilizer_product_msds_btn . '" data-options="thumbnail: \'\'">Download MSDS<i class="x-icon mvn mls mrn x-icon-caret-down" data-x-icon="" aria-hidden="true"></i></a>';
}
// else {
// 	print '<p>msds_button NOT set</p>';
// }
?>

<!-- <a class="x-btn x-btn-mini" href=" -->
<?php // print $fertilizer_product_msds_btn; ?>
<!-- " data-options="thumbnail: ''">Download MSDS<i class="x-icon mvn mls mrn x-icon-caret-down" data-x-icon="" aria-hidden="true"></i></a> -->

<hr class="x-gap">

<?php
if($fertilizer_product_msds_b_btn) {
	// print '<p>msds_button_b set</p>';
	print '<a class="x-btn x-btn-mini" href="' . $fertilizer_product_msds_b_btn . '" data-options="thumbnail: \'\'">Download MSDS B<i class="x-icon mvn mls mrn x-icon-caret-down" data-x-icon="" aria-hidden="true"></i></a>';
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

<?php print $fertilizer_product_description; ?>

</div>

</div>
<!--end x-container-->

</div>
<!--end x-section-1-->

</div>
<!--end fertilizer-product-->

</div>
<!--end entry-wrap-->