const menu_burger = document.querySelector('.menu-burger')
const overlay = document.querySelector('.overlay')
const logo_smash_black = document.querySelector('.logo-smash-black')
const logo_smash_white = document.querySelector('.logo-smash-white')
const menu_auth_icon = document.querySelector('.menu-auth a svg')

menu_burger.addEventListener('click', () => {
    overlay.classList.toggle('active')
    menu_burger.classList.toggle('active')
    logo_smash_black.classList.toggle('active')
    logo_smash_white.classList.toggle('active')
    menu_auth_icon.classList.toggle('active')
})