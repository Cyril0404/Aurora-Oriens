</main><!-- .main-content -->

<!-- ======================== NEWSLETTER ======================== -->
<section class="newsletter">
  <h2 class="newsletter__title">Join the Inner Circle</h2>
  <p class="newsletter__sub">Early access to new collections · Private sale invitations · Artisan stories</p>
  <form class="newsletter__form" action="#" method="post">
    <input class="newsletter__input" type="email" name="email" placeholder="Your email address" required>
    <button class="newsletter__btn" type="submit">Subscribe</button>
  </form>
</section>

<!-- ======================== FOOTER ======================== -->
<footer class="footer">
  <div class="footer__inner">
    <div class="footer__brand">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo get_bloginfo( 'name' ); ?></a>
    </div>

    <ul class="footer__links">
      <li><a href="<?php echo esc_url( home_url( '/shipping-returns' ) ); ?>">Shipping & Returns</a></li>
      <li><a href="<?php echo esc_url( home_url( '/care-instructions' ) ); ?>">Care Instructions</a></li>
      <li><a href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>">Privacy Policy</a></li>
      <li><a href="<?php echo esc_url( get_permalink( wc_get_page_id( 'contact' ) ) ); ?>">Contact Us</a></li>
    </ul>

    <p class="footer__copy">&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>. All rights reserved.</p>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
