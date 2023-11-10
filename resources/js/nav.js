
const hamburger = document.querySelector("[data-hamburger]");


hamburger.addEventListener("click", openMenu);


function openMenu()
{
    document.querySelector("[data-mobileNavContainer]").classList.toggle("hidden");
    blur();
    animation();
}

function blur()
{
    document.querySelector("[data-blur]").classList.toggle("blur-sm");
}

function animation()
{
    document.querySelector("[data-mobileNavContainer]").classList.toggle("ani");
}