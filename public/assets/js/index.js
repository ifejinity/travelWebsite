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
});