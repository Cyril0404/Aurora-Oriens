<?php
/**
 * Aurora Oriens Theme Functions
 *
 * @package AuroraOriens
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

// ========== THEME SETUP ==========

function auroraoriens_setup() {
  // Register menus
  register_nav_menus( array(
    'primary'   => 'Primary Navigation',
    'footer'    => 'Footer Navigation',
  ) );

  // Theme supports
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'custom-logo' );
  add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

  // Gutenberg compatible
  add_theme_support( 'editor-styles' );
  add_theme_support( 'wp-block-styles' );
}
add_action( 'after_setup_theme', 'auroraoriens_setup' );

// ========== GOOGLE FONTS ==========

function auroraoriens_enqueue_assets() {
  // Google Fonts
  wp_enqueue_style(
    'auroraoriens-fonts',
    'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&family=Inter:wght@300;400;500&display=swap',
    array(),
    null
  );

  // Main stylesheet
  wp_enqueue_style( 'auroraoriens-style', get_stylesheet_uri(), array(), '1.0.0' );

  // Theme JS
  wp_enqueue_script( 'auroraoriens-main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'auroraoriens_enqueue_assets' );

// ========== WOOCOMMERCE SUPPORT ==========

add_action( 'after_setup_theme', function() {
  add_theme_support( 'woocommerce' );
} );

// Declare WooCommerce support
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );

// ========== WOOCOMMERCE MINI-CART AJAX FRAGMENTS ==========

/**
 * Echoes the mini-cart markup into the header cart icon
 */
function auroraoriens_cart_icon() {
  $count = 0;
  if ( isset( WC()->cart ) && WC()->cart ) {
    $count = WC()->cart->get_cart_contents_count();
  }
  ?>
  <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="nav__cart" aria-label="<?php esc_attr_e( 'Shopping cart', 'auroraoriens' ); ?>">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
      <path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/>
      <line x1="3" y1="6" x2="21" y2="6"/>
      <path d="M16 10a4 4 0 01-8 0"/>
    </svg>
    <?php if ( $count > 0 ) : ?>
      <span class="nav__cart-badge"><?php echo esc_html( $count ); ?></span>
    <?php endif; ?>
  </a>
  <?php
}

/**
 * Add AJAX cart fragment refresh
 */
function auroraoriens_cart_fragment( $fragments ) {
  $count = 0;
  if ( isset( WC()->cart ) && WC()->cart ) {
    $count = WC()->cart->get_cart_contents_count();
  }
  $fragments['a.nav__cart'] = sprintf(
    '<a href="%s" class="nav__cart" aria-label="%s">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
        <path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/>
        <line x1="3" y1="6" x2="21" y2="6"/>
        <path d="M16 10a4 4 0 01-8 0"/>
      </svg>
      %s
    </a>',
    esc_url( wc_get_cart_url() ),
    esc_attr__( 'Shopping cart', 'auroraoriens' ),
    $count > 0
      ? sprintf( '<span class="nav__cart-badge">%d</span>', $count )
      : ''
  );
  return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'auroraoriens_cart_fragment' );

// ========== REMOVE WOOCOMMERCE DEFAULT STYLES (we provide our own) ==========

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

// ========== WOOCOMMERCE PRODUCT COLUMNS ==========

add_filter( 'loop_shop_columns', function() { return 3; } );

// ========== WOOCOMMERCE RESULT COUNT / SORTING STYLING ==========

add_action( 'woocommerce_before_shop_loop', function() {
  echo '<div class="woocommerce-loop-header">';
}, 5 );

add_action( 'woocommerce_after_shop_loop', function() {
  echo '</div>';
}, 5 );

// ========== CUSTOM WOOCOMMERCE HOOKS — PRODUCT ARCHIVE HEADER ==========

/**
 * Output collection page header on product archive (shop) page
 */
function auroraoriens_product_archive_header() {
  if ( ! is_shop() && ! is_product_category() && ! is_tag() ) {
    return;
  }
  ?>
  <div class="page-header">
    <p class="section-label">Curated for You</p>
    <h1><?php woocommerce_page_title(); ?></h1>
    <p>From everyday elegance to statement pieces — find the jewelry that speaks to you.</p>
  </div>
  <?php
}
add_action( 'woocommerce_before_main_content', 'auroraoriens_product_archive_header', 5 );

// ========== BODY CLASS ==========

function auroraoriens_body_classes( $classes ) {
  if ( is_cart() ) {
    $classes[] = 'page-cart';
  }
  if ( is_checkout() ) {
    $classes[] = 'page-checkout';
  }
  return $classes;
}
add_filter( 'body_class', 'auroraoriens_body_classes' );

// ========== WOOCOMMERCE TEMPLATE OVERRIDE DIRECTORY ==========

add_filter( 'woocommerce_template_path', function() {
  return 'woocommerce/';
} );
