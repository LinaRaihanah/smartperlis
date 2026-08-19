// ===============================
// SMART PERLIS TOURISM PORTAL
// script.js
// ===============================

// ===============================
// LIVE SEARCH DESTINATION
// ===============================

const search = document.getElementById("search");

if (search) {

    search.addEventListener("keyup", function () {

        let keyword = this.value.toLowerCase();

        let cards = document.querySelectorAll(".card");

        cards.forEach(function(card){

            let text = card.innerText.toLowerCase();

            if(text.indexOf(keyword) > -1){

                card.parentElement.style.display = "block";

            }

            else{

                card.parentElement.style.display = "none";

            }

        });

    });

}

// ===============================
// SMOOTH SCROLL
// ===============================

document.querySelectorAll('a[href^="#"]').forEach(function(anchor){

    anchor.addEventListener("click", function(e){

        e.preventDefault();

        let target = document.querySelector(this.getAttribute("href"));

        if(target){

            target.scrollIntoView({

                behavior:"smooth"

            });

        }

    });

});

// ===============================
// BACK TO TOP BUTTON
// ===============================

let button = document.createElement("button");

button.innerHTML = "↑";

button.id = "topButton";

document.body.appendChild(button);

button.style.position = "fixed";
button.style.bottom = "30px";
button.style.right = "30px";
button.style.width = "50px";
button.style.height = "50px";
button.style.border = "none";
button.style.borderRadius = "50%";
button.style.background = "#198754";
button.style.color = "white";
button.style.fontSize = "22px";
button.style.cursor = "pointer";
button.style.display = "none";
button.style.zIndex = "999";

window.addEventListener("scroll", function(){

    if(window.scrollY > 300){

        button.style.display = "block";

    }

    else{

        button.style.display = "none";

    }

});

button.addEventListener("click", function(){

    window.scrollTo({

        top:0,

        behavior:"smooth"

    });

});

// ===============================
// CARD ANIMATION
// ===============================

const cards = document.querySelectorAll(".card");

window.addEventListener("scroll", function(){

    cards.forEach(function(card){

        let position = card.getBoundingClientRect().top;

        let screen = window.innerHeight;

        if(position < screen - 100){

            card.style.opacity = "1";

            card.style.transform = "translateY(0px)";

        }

    });

});

cards.forEach(function(card){

    card.style.opacity = "0";

    card.style.transform = "translateY(40px)";

    card.style.transition = "0.8s";

});

// ===============================
// AUTO CLOSE NAVBAR (MOBILE)
// ===============================

const navLinks = document.querySelectorAll(".nav-link");

const navbarCollapse = document.querySelector(".navbar-collapse");

navLinks.forEach(function(link){

    link.addEventListener("click", function(){

        if(navbarCollapse.classList.contains("show")){

            bootstrap.Collapse.getInstance(navbarCollapse).hide();

        }

    });

});

// ===============================
// SLIDER AUTO SPEED
// ===============================

let carousel = document.querySelector(".carousel");

if(carousel){

    new bootstrap.Carousel(carousel,{

        interval:4000,

        ride:"carousel"

    });

}

console.log("Smart Perlis Tourism Portal Loaded Successfully");