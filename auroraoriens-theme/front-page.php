<?php
/**
 * Front Page Template
 *
 * @package AuroraOriens
 */

get_header();
?>

<!-- ======================== HERO ======================== -->
<section class="hero">
  <div class="hero__content">
    <p class="hero__eyebrow">Eastern Craftsmanship, Timeless Treasure</p>
    <h1 class="hero__title">Where Oriental<br>Artistry Meets<br>Modern Elegance</h1>
    <p class="hero__subtitle">Handcrafted Chinese jewelry designed for the discerning. Each piece tells a story of heritage, reimagined for today.</p>
    <div class="hero__actions">
      <a href="<?php echo esc_url( get_permalink( wc_get_page_id( 'shop' ) ) ); ?>" class="btn--primary">Explore Collections</a>
      <a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="btn--ghost">Our Story</a>
    </div>
  </div>
  <div class="hero__image">
    <img src="https://images.unsplash.com/photo-1515562141207-7a88fb7ce338?w=900&q=80" alt="Oriental jewelry hero">
  </div>
</section>

<!-- ======================== BRAND PILLARS ======================== -->
<section class="pillars">
  <div class="pillars__inner">
    <div class="pillar">
      <span class="pillar__icon">✦</span>
      <h3 class="pillar__title">Artisan Crafted</h3>
      <p class="pillar__text">Each piece is hand-finished by skilled Chinese artisans using techniques passed down through generations.</p>
    </div>
    <div class="pillar">
      <span class="pillar__icon">◈</span>
      <h3 class="pillar__title">Certified Quality</h3>
      <p class="pillar__text">Ethically sourced gemstones with GIA/IGI certification. Every piece passes our 12-point quality inspection.</p>
    </div>
    <div class="pillar">
      <span class="pillar__icon">◇</span>
      <h3 class="pillar__title">Global Delivery</h3>
      <p class="pillar__text">Insured worldwide shipping with DHL Express. 30-day hassle-free returns for all orders.</p>
    </div>
  </div>
</section>

<!-- ======================== COLLECTIONS ======================== -->
<section class="collections">
  <p class="section-label">Curated for You</p>
  <h2 class="section-title">Our Collections</h2>
  <p class="section-subtitle">From everyday elegance to statement pieces — find the jewelry that speaks to you.</p>

  <div class="collections__grid">
    <div class="collection-card">
      <img class="collection-card__image" src="https://images.unsplash.com/photo-1535632066927-ab7c9ab60908?w=600&q=80" alt="Daily Essentials">
      <div class="collection-card__overlay">
        <h3 class="collection-card__name">Daily Essentials</h3>
        <p class="collection-card__price">From $35</p>
      </div>
      <a href="<?php echo esc_url( get_permalink( wc_get_page_id( 'shop' ) ); ?>" class="btn--primary" style="display:block;text-align:center;">View All — From $35</a>
    </div>
    <div class="collection-card">
      <img class="collection-card__image" src="https://images.unsplash.com/photo-1611652022419-a9419f0d6d3e?w=600&q=80" alt="Statement Edit">
      <div class="collection-card__overlay">
        <h3 class="collection-card__name">Statement Edit</h3>
        <p class="collection-card__price">From $65</p>
      </div>
      <a href="<?php echo esc_url( get_permalink( wc_get_page_id( 'shop' ) ); ?>" class="btn--primary" style="display:block;text-align:center;">View All — From $65</a>
    </div>
    <div class="collection-card">
      <img class="collection-card__image" src="https://images.unsplash.com/photo-1602751584552-8ba73aad10e1?w=600&q=80" alt="Bespoke">
      <div class="collection-card__overlay">
        <h3 class="collection-card__name">Bespoke Service</h3>
        <p class="collection-card__price">From $150</p>
      </div>
      <a href="<?php echo esc_url( home_url( '/bespoke' ) ); ?>" class="btn--primary" style="display:block;text-align:center;">Enquire Now</a>
    </div>
  </div>
</section>

<!-- ======================== FEATURED PRODUCT ======================== -->
<section class="featured">
  <div class="featured__inner">
    <div class="featured__image-wrap">
      <img class="featured__image" src="https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?w=800&q=80" alt="Lotus Enamel Pendant">
      <span class="featured__badge">Bestseller</span>
    </div>
    <div class="featured__content">
      <p class="section-label" style="text-align:left">Featured Piece</p>
      <h2 class="featured__title">Lotus Enamel Pendant<br>with Natural Jade Inlay</h2>
      <p class="featured__price">$68.00 USD</p>
      <p class="featured__desc">Inspired by classical Chinese lotus motifs, this pendant features hand-applied cloisonné enamel and a natural jade cabochon. Adjustable 18K gold-filled chain, suitable for everyday wear.</p>
      <div class="featured__meta">
        <div class="featured__meta-item">
          <span class="featured__meta-label">Material</span>
          <span class="featured__meta-value">18K Gold-Fill + Jade</span>
        </div>
        <div class="featured__meta-item">
          <span class="featured__meta-label">Chain Length</span>
          <span class="featured__meta-value">16"–20" Adjustable</span>
        </div>
        <div class="featured__meta-item">
          <span class="featured__meta-label">Certificate</span>
          <span class="featured__meta-value">IGI Certified</span>
        </div>
        <div class="featured__meta-item">
          <span class="featured__meta-label">Shipping</span>
          <span class="featured__meta-value">Free worldwide</span>
        </div>
      </div>
      <?php
      // If WooCommerce product exists, show Add to Cart; otherwise show shop link
      $featured_product_id = apply_filters( 'auroraoriens_featured_product_id', 0 );
      if ( $featured_product_id && function_exists( 'woocommerce_template_single_add_to_cart' ) ) {
        echo '<div class="featured__atc">';
        do_action( 'woocommerce_simple_add_to_cart' );
        echo '</div>';
      } else {
        ?>
        <a href="<?php echo esc_url( get_permalink( wc_get_page_id( 'shop' ) ) ); ?>" class="btn--primary" style="width:100%;text-align:center;">Shop Now — $68</a>
        <?php
      }
      ?>
    </div>
  </div>
</section>

<!-- ======================== CRAFTSMANSHIP ======================== -->
<section class="crafts">
  <p class="section-label">Our Heritage</p>
  <h2 class="section-title">Craftsmanship Beyond Compare</h2>
  <div class="crafts__grid">
    <div class="craft-item">
      <img class="craft-item__image" src="https://images.unsplash.com/photo-1618403088890-3d9ff6f4e0b1?w=600&q=80" alt="Gold Filigree">
      <h3 class="craft-item__title">Gold Filigree</h3>
      <p class="craft-item__text">Intricate gold wire work dating back 700 years. Each filament is 0.08mm — thinner than human hair.</p>
    </div>
    <div class="craft-item">
      <img class="craft-item__image" src="https://images.unsplash.com/photo-1573408301185-9146fe634ad0?w=600&q=80" alt="Cloisonné Enamel">
      <h3 class="craft-item__title">Cloisonné Enamel</h3>
      <p class="craft-item__text">Hand-applied enamel using the Limoges technique, reimagined with Chinese color palettes and motifs.</p>
    </div>
    <div class="craft-item">
      <img class="craft-item__image" src="https://images.unsplash.com/photo-1603974372039-0a2dd4f93aec?w=600&q=80" alt="Jade Micro-Carving">
      <h3 class="craft-item__title">Jade Micro-Carving</h3>
      <p class="craft-item__text">Nephrite jade hand-carved by master sculptors from the jade capital of China — Nanyang, Henan Province.</p>
    </div>
  </div>
</section>

<?php
get_footer();
