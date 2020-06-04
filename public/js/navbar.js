let navbarButton = document.querySelector("#navbar-button");
let responsiveNav = document.querySelector('.responsive-nav');
let hider = document.querySelector('.booking-details-cards');
let search = document.querySelector(".search-tab");
let book = document.querySelector('.booking-cards');
let Hello = document.querySelector('.hello');
console.log(Hello);
navbarButton.addEventListener('click', () => {
    responsiveNav.classList.toggle('responsive-nav-active');
    Hello.classList.toggle('hider');
});
