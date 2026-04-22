<?php
/**
 * Contact Page Template
 *
 * @package AuroraOriens
 */

get_header();
?>

<!-- Header -->
<div class="page-header">
  <p class="section-label">Get in Touch</p>
  <h1> We'd Love to Hear From You</h1>
  <p>Whether you have a question about a piece, need help with your order, or are interested in a bespoke commission.</p>
</div>

<!-- FAQ -->
<section class="faq-section">
  <div class="faq__header">
    <h2>Common Questions</h2>
  </div>

  <div class="faq__item">
    <div class="faq__question">
      <span class="faq__question-text">What materials do you use?</span>
      <span class="faq__toggle">+</span>
    </div>
    <div class="faq__answer">We use 18K gold-fill, 14K gold-fill, genuine freshwater pearls (AAA grade), nephrite jade, sterling silver, and cubic zirconia set in 24K gold-plated brass. All gemstones are GIA or IGI certified. Every material is nickel-free and hypoallergenic.</div>
  </div>

  <div class="faq__item">
    <div class="faq__question">
      <span class="faq__question-text">Do you offer international shipping?</span>
      <span class="faq__toggle">+</span>
    </div>
    <div class="faq__answer">Yes — we ship worldwide via DHL Express with full insurance. All orders over $35 qualify for free shipping. Typical delivery is 7–12 business days.</div>
  </div>

  <div class="faq__item">
    <div class="faq__question">
      <span class="faq__question-text">What is your return policy?</span>
      <span class="faq__toggle">+</span>
    </div>
    <div class="faq__answer">We offer a 30-day hassle-free return policy. Items must be unworn and in original packaging. Bespoke and personalized items are final sale. To initiate a return, email us at hello@auroraoriens.com with your order number.</div>
  </div>

  <div class="faq__item">
    <div class="faq__question">
      <span class="faq__question-text">How do I find my ring size?</span>
      <span class="faq__toggle">+</span>
    </div>
    <div class="faq__answer">Our adjustable rings fit US sizes 5–9. For a precise measurement, we recommend a ring sizing tool or a local jeweler. If you're unsure, contact us — we're happy to help.</div>
  </div>

  <div class="faq__item">
    <div class="faq__question">
      <span class="faq__question-text">Can I customize a piece?</span>
      <span class="faq__toggle">+</span>
    </div>
    <div class="faq__answer">Yes. Our Custom Initials Pendant starts at $150 — choose initials or a meaningful word, your gemstone center, and chain length. For heritage replicas or engagement ring design, email us directly with your concept and we'll respond within 2 business days.</div>
  </div>

  <div class="faq__item">
    <div class="faq__question">
      <span class="faq__question-text">How long does bespoke or custom work take?</span>
      <span class="faq__toggle">+</span>
    </div>
    <div class="faq__answer">Custom pieces: 5–7 business days. Heritage replicas: 4–8 weeks. Engagement ring design: 3 rounds of sketches, then 4–6 weeks after your final approval. All timelines are confirmed before work begins.</div>
  </div>

  <div class="faq__item">
    <div class="faq__question">
      <span class="faq__question-text">How do I care for my jewelry?</span>
      <span class="faq__toggle">+</span>
    </div>
    <div class="faq__answer">Put jewelry on last when dressing, remove first when undressing. Avoid perfume, moisturizer, and water. Store in the provided pouch or a separate compartment. Jade is the most durable — clean with warm water and a soft brush. Pearls should be wiped after wearing.</div>
  </div>

  <div class="faq__item">
    <div class="faq__question">
      <span class="faq__question-text">Are your pieces certified?</span>
      <span class="faq__toggle">+</span>
    </div>
    <div class="faq__answer">Yes. All jade pieces include a GIA-certified appraisal. Pearls are graded by recognized laboratories. Enamel and metal pieces carry IGI certification. Each piece passes our internal 12-point quality inspection before shipping.</div>
  </div>
</section>

<!-- Divider -->
<div class="section-divider"><hr></div>

<!-- Contact form -->
<section class="contact-section">
  <h2 class="contact-section__title">Send us a message</h2>
  <p class="contact-section__sub">We respond within 24 hours on business days.</p>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; endif; ?>

  <form id="contactForm">
    <div class="form-group">
      <label class="form-label" for="name">Name</label>
      <input class="form-input" id="name" type="text" placeholder="Your name" required>
      <span class="form-error" id="err-name"></span>
    </div>
    <div class="form-group">
      <label class="form-label" for="email">Email</label>
      <input class="form-input" id="email" type="email" placeholder="you@example.com" required>
      <span class="form-error" id="err-email"></span>
    </div>
    <div class="form-group">
      <label class="form-label" for="subject">Subject <span style="font-size:0.65rem;text-transform:none;letter-spacing:0">(optional)</span></label>
      <input class="form-input" id="subject" type="text" placeholder="e.g. Bespoke commission">
    </div>
    <div class="form-group">
      <label class="form-label" for="message">Message</label>
      <textarea class="form-textarea" id="message" placeholder="Tell us how we can help..." required></textarea>
      <span class="form-error" id="err-message"></span>
    </div>
    <button class="form-submit" type="submit">Send Message ✦</button>
  </form>

  <div class="form-success" id="formSuccess">
    <div class="form-success__icon">✦</div>
    <h3 class="form-success__title">Message sent</h3>
    <p class="form-success__text">Thank you for reaching out. We'll get back to you within 24 hours.</p>
  </div>
</section>

<!-- Contact info -->
<section class="contact-info">
  <div class="contact-info__inner">
    <p class="contact-info__label">Email</p>
    <p class="contact-info__value"><a href="mailto:hello@auroraoriens.com">hello@auroraoriens.com</a></p>
    <p class="contact-info__note">Monday–Friday, 9am–6pm CST. For bespoke commissions, engagement ring design, or heritage replicas, email us directly — we respond within 2 business days.</p>
  </div>
</section>

<script>
document.querySelectorAll('.faq__item').forEach(item => {
  item.addEventListener('click', () => { item.classList.toggle('open'); });
});

document.getElementById('contactForm').addEventListener('submit', function(e) {
  e.preventDefault();
  let valid = true;
  ['name','email','message'].forEach(f => {
    const el = document.getElementById(f);
    const err = document.getElementById('err-' + f);
    el.classList.remove('error');
    err.textContent = '';
    if (!el.value.trim()) { el.classList.add('error'); err.textContent = 'Required'; valid = false; }
  });
  const emailEl = document.getElementById('email');
  if (emailEl.value && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailEl.value)) {
    emailEl.classList.add('error');
    document.getElementById('err-email').textContent = 'Invalid email';
    valid = false;
  }
  if (valid) {
    document.getElementById('contactForm').style.display = 'none';
    document.getElementById('formSuccess').classList.add('show');
  }
});
</script>

<?php
get_footer();
