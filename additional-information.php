<?php
/**
 * Additional Information tab
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $woocommerce, $post, $product;
?>

<?php $product->list_attributes(); ?>


<!-- Display attributes in a list -->
<?php

$subheadingvalues = get_the_terms( $product->id, 'pa_attribute');

if ($subheadingvalues): ?>
<ul>
	<?php foreach ( $subheadingvalues as $subheadingvalue ): ?>
		<li>
			<?php echo $subheadingvalue->name; ?>
		</li>
	<?php endforeach; ?>
</ul>

<?php endif; ?>