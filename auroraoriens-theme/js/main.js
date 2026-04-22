/**
 * Aurora Oriens Theme JS
 * Minimal JS — cart functionality handled by WooCommerce AJAX.
 */

(function() {
  'use strict';

  // FAQ accordion (Contact page)
  document.querySelectorAll('.faq__item').forEach(function(item) {
    item.addEventListener('click', function() {
      this.classList.toggle('open');
    });
  });

})();
