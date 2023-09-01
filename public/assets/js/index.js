$(document).ready(function () {
    // navigation
    const mobileNavBtn = document.querySelector("#mobileNavToggler");
    const mobileNav = document.querySelector("#mobileNav");
    const mobileNavCheckbox = document.querySelector("#mobileNavToggler input[type=checkbox]");
    mobileNavBtn.addEventListener('click', ()=>{
        if(mobileNavCheckbox.checked) {
            mobileNav.classList.replace('hidden', 'flex');
        } else {
            mobileNav.classList.replace('flex', 'hidden');
        }
    })
    // swiper hero
    var swiper = new Swiper("#hero .mySwiper", {
        spaceBetween: 30,
        effect: "fade",
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
    // image background parallax effect
    // const parallax = document.querySelector("#parallax");
    // window.addEventListener("scroll", function () {
    //     let offset = window.pageYOffset;
    //     parallax.style.backgroundPositionY = offset * 0.7 + "px";
    // });
});