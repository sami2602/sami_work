const slider = document.querySelector('.slider');

function activate(e) {
  const items = document.querySelectorAll('.item');
  e.target.matches('.next') && slider.append(items[0])
  e.target.matches('.prev') && slider.prepend(items[items.length-1]);
}

document.addEventListener('click',activate,false);


window.addEventListener("scroll" , function () {
  var navbarr = document.getElementById("navbarr");
  navbarr.classList.toggle("sticky" , window.scrollY > 0);
})