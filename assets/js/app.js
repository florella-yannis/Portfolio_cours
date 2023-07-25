
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
    if (this.classList.contains('fa-sun')) {
        this.classList.replace('fa-sun', 'fa-moon');
        // Ajoutez ici le code pour basculer vers le thème sombre si nécessaire
    } else {
        this.classList.replace('fa-moon', 'fa-sun');
        // Ajoutez ici le code pour basculer vers le thème clair si nécessaire
    }
});

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



