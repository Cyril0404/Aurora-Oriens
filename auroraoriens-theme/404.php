<?php
/**
 * 404 Page Template
 *
 * @package AuroraOriens
 */

get_header();
?>

<section class="not-found">
  <p class="not-found__eyebrow">404 · Page not found</p>
  <h1 class="not-found__quote">Some paths<br>are meant to wander</h1>
  <p class="not-found__sub">The page you're looking for doesn't exist or has been moved.</p>
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn--outline">Return Home ✦</a>
</section>

<?php
get_footer();
