const menuToggle = document.querySelector('div.menu-toggle#mobile-menu');
const mobileNav = document.querySelector('ul.menu-items');
const isActive = document.querySelector('div.menu-toggle#mobile-menu');
menuToggle.addEventListener('click', () => {
    isActive.classList.toggle('is-active');
    mobileNav.classList.toggle('mobile-nav')

  })
 