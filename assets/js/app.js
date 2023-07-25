
/*let sun = document.querySelector('#sun');
let moon = document.querySelector('#moon');
let turn = document.querySelector('.turn')

turn.addEventListener('click',function(){

    sun.classList.toggle('moon');
    moon.classList.toggle('sun');


})*/
// a refaire 
const menuHamburger = document.querySelector(".fa-bars")
const navLinks = document.querySelector("#nav-links")

menuHamburger.addEventListener('click',function(){
navLinks.classList.toggle('mobile-menu');
})


/*
const sun = document.getElementById('sun');
const moon = document.getElementById('moon');


    document.documentElement.setAttribute('data-theme', 'dark');
    document.documentElement.classList.remove('light');
    document.documentElement.classList.add('dark');
    moon.classList.add('active');
    sun.classList.remove('active');

*/

const cursor = document.querySelector('.cursor');

document.addEventListener('mousemove', (event) => {
    console.log(event)
    let x = event.clientX;
    let y = event.clientY;
    cursor.style.left = x + "px";
    cursor.style.top= y + "px";
});



