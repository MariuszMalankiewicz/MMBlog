document.querySelector("[data-hamburger]").addEventListener("click", toggleNav);
document.querySelector("[data-x-mark]").addEventListener("click", toggleNav);

function toggleNav()
{
    document.querySelector("[data-mobileNavContainer]").classList.toggle("hidden");
    blur();
    translateFromTopToBottom();
    changeFromHamburgerToXmark();

}


function changeFromHamburgerToXmark() 
{
    document.querySelector("[data-hamburger]").classList.toggle("hidden");
    document.querySelector("[data-x-mark]").classList.toggle("hidden");
}

function blur()
{
    document.querySelector("[data-blur]").classList.toggle("blur-sm");
}

function translateFromTopToBottom()
{
    document.querySelector("[data-mobileNavContainer]").classList.toggle("translateFromTopToBottom");
}
