<?php
/**
 * The front page template file
 * This is the template file for the front page.
 * 
 * Please see /external/bootstrap-utilities.php for info on BsWp::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Bootstrap 5.3.2
 * @autor 		Niyo
 */
$BsWp = new BsWp;

$BsWp->get_template_parts([
	'parts/shared/html-header', 
	'parts/shared/header',
	'parts/shared/carousel',
	'parts/shared/about',
	'parts/shared/solutions',
	'parts/shared/blog',
]);

?>



<?php 
$BsWp->get_template_parts([
	'parts/shared/footer',
	'parts/shared/html-footer'
]);
?>
