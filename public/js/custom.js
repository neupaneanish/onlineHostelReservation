
let navbarButton = document.querySelector("#navbar-button");
let responsiveNav = document.querySelector('.responsive-nav');
let hider = document.querySelector('.booking-details-cards');
let search = document.querySelector(".search-tab");
navbarButton.addEventListener('click', () => {
    responsiveNav.classList.toggle('responsive-nav-active')
    search.classList.toggle('hider'); 
});




//script for booking form

// const roomType = document.getElementById('room-type').addEventListener("change",room);
// const roomFacility = document.getElementById('room-facility').addEventListener("change",facility);
// let mrp = document.getElementById('kyc-price').innerHTML;
// let price = Number(mrp.replace("NPR",""));
// const total = document.getElementById('total-price');
// const rate = 0.25;
// let grandTotal = price;

// function calculator(){
//     let id = document.getElementById('duration').value;
//     let sum = price * id;
//     grandTotal = sum;
//     total.innerHTML = sum +"/-";
//     let event = new Event('change');
//     document.getElementById('room-type').dispatchEvent(event);   
//     document.getElementById('room-facility').dispatchEvent(event);  
// }

// function room(){
//     let roomAdder = multiplier();
//     if (this.value == 2){
//       document.querySelector(".total-price1").style.display="flex";
//       document.getElementById('total-price1').innerHTML = "+" + roomAdder;
//     }else {
//         document.getElementById('total-price1').innerHTML = 0;
//         document.querySelector(".total-price1").style.display="none";
//     }
//     grandSum();
// }

// function facility(){
//     let roomAdder = multiplier();
//     if (this.value == 2){
//       document.querySelector(".total-price2").style.display="flex";
//       document.getElementById('total-price2').innerHTML = "+" + roomAdder;;
//     }else {
//         document.getElementById('total-price2').innerHTML = 0;
//         document.querySelector(".total-price2").style.display="none";
//     }
//     grandSum();
// }

// function grandSum(){
//     let a = Number(document.getElementById('total-price1').innerHTML);
//     let b = Number(document.getElementById('total-price2').innerHTML);
//     sum = a + b;
//     total.innerHTML = grandTotal + sum; 
// }

// function multiplier(){
//     return (grandTotal * rate);
// }

// //script for adding see more on bookingDetails 


//     let showChar = 400;
//     let moreText = "...SeeMore";
//     let target = document.getElementById('booking-hostel-description-sub');
//     let store = target.innerHTML; 
//     let content = target.innerHTML;
//     showLess();
//     function showLess(){
//       if (content.length > showChar) {
//         let c = content.substr(0, showChar);
//         let html = c + '<span id = "seeMore" class="more-anchor">' + moreText + '</span>';
//         target.innerHTML = html;
//         document.getElementById('seeMore').addEventListener('click',showMore);
//       }
//     }

//     function showMore(){
//         content = store;
//         let html = content + '<span id = "seeLess" class="more-anchor">...SeeLess</span>';
//         target.innerHTML = html;
//         document.getElementById('seeLess').addEventListener('click',showLess);
//     }
 



    //string reducer

    let reducer = 18;
    let addressReducer = 35;
    let hostelName = document.getElementsByClassName('hostel-name');
    let hostelAddress = document.getElementsByClassName('hostel-address');
    let lengthCalc = hostelName.length;
    let addressCalc = hostelAddress.length;

    looper(hostelName,lengthCalc,reducer);
    looper(hostelAddress,addressCalc,addressReducer);

    function looper(name,calc,reduce){
        for(let i=0; i<calc; i++){
        let hostelString = name[i].innerHTML;
        stringReducer(hostelString,name[i],reduce);
        }
    }
    function stringReducer(htmlStore, idCatcher,reduce){
    if (htmlStore.length > reduce){
        let c = htmlStore.substr(0, reduce);
        idCatcher.innerHTML = c + "..."
     }

    }

