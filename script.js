let cartCount = 0;

function addToCart() {
  cartCount++;
  document.getElementById('cart-count').innerText = cartCount;
}

function switchLanguage(lang) {
  window.location.href = `translate.php?lang=${lang}`;
}
