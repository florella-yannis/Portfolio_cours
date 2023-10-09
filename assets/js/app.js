
const toggle = document.getElementById('toggleDark');

toggle.addEventListener('click', function () {
    const html = document.querySelector('html');
    if (html.classList.contains('light')) {
        html.classList.remove('light');
    } else {
        html.classList.add('light');
    }
});

toggle.addEventListener('click', function () {
    if (this.classList.contains('fa-solid fa-lightbulb')) {
        this.classList.replace('fa-solid fa-lightbulb', 'fa-regular fa-lightbulb');
    } else {
        this.classList.replace('fa-regular fa-lightbulb', 'fa-solid fa-lightbulb');
    }
});

// a finir 


const menuHamburger = document.querySelector(".fa-bars")
const navLinks = document.querySelector("#nav-links")

menuHamburger.addEventListener('click',function(){
navLinks.classList.toggle('mobile-menu');
})


// faire le curseur suivre la souris 
const cursor = document.querySelector('.cursor');

document.addEventListener('mousemove', (event) => {
    console.log(event)
    let x = event.clientX;
    let y = event.clientY;
    cursor.style.left = x + "px";
    cursor.style.top= y + "px";
});



