<?php
/**
 * Cart Template — Aurora Oriens Override
 *
 * Removes default WC styling so our CSS takes over.
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

do_action( 'woocommerce_before_cart' );
?>

<div class="woocommerce-cart-container">
  <?php woocommerce_cart(); ?>
</div>

<style>
.woocommerce-cart-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 4rem 2rem;
}
</style>

<?php do_action( 'woocommerce_after_cart' ); ?>
