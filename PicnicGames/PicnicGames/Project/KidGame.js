window.addEventListener("scroll" , function () {
    var navbarr = document.getElementById("navbarr");
    navbarr.classList.toggle("sticky" , window.scrollY > 0);
})

window.addEventListener("scroll", reveal);

function reveal() {
    var reveals = document.querySelectorAll(".reveal")

    for (var i = 0; i < reveals.length; i++) {
        var windowheight = window.innerHeight;
        var revealtop = reveals[i].getBoundingClientRect().top;
        var revealpoint = 150;

        if (revealtop < windowheight - revealpoint) {
            reveals[i].classList.add('active');
            
        }
        else {
            reveals[i].classList.remove('active');
        }
    }
}

