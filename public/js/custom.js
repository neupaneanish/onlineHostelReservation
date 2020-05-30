
let navbarButton = document.querySelector("#navbar-button");
let responsiveNav = document.querySelector('.responsive-nav');
let hider = document.querySelector('.booking-details-cards');
navbarButton.addEventListener('click', e => {
    responsiveNav.classList.toggle('responsive-nav-active')
    hider.classList.toggle('hider')
});

function calculator(){
    let mrp = document.getElementById('kyc-price').innerHTML;
    let id = document.getElementById('duration').value;
    let total = document.getElementById('total-price');
    let price = mrp.replace("NPR","");
    let sum = price * id;
    total.innerHTML = sum +"/-";
}