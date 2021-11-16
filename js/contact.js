const menuToggle = document.querySelector('.menu-toggle input');
const nav = document.querySelector('nav ul');
const kotak = document.querySelector('.kotak-hitam');

menuToggle.addEventListener('click', function () {
  nav.classList.toggle('slide');
  kotak.classList.toggle("kotak_mobile");
});