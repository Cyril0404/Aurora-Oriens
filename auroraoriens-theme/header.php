<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo( 'description' ); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<nav class="nav">
  <div class="nav__inner">
    <?php
    if ( has_custom_logo() ) {
      the_custom_logo();
    } else {
      echo '<a href="' . esc_url( home_url( '/' ) ) . '" class="nav__logo">' . get_bloginfo( 'name' ) . '</a>';
    }
    ?>

    <ul class="nav__links">
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
      <li><a href="<?php echo esc_url( get_permalink( wc_get_page_id( 'shop' ) ) ); ?>">Collections</a></li>
      <li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>">Our Story</a></li>
      <li><a href="<?php echo esc_url( home_url( '/bespoke' ) ); ?>">Bespoke</a></li>
    </ul>

    <div class="nav__right">
      <?php auroraoriens_cart_icon(); ?>
      <a href="<?php echo esc_url( get_permalink( wc_get_page_id( 'shop' ) ) ); ?>" class="nav__cta">Explore the Edit</a>
    </div>
  </div>
</nav>

<main class="main-content">
