const burger = document.getElementById('burger');
const navLinks = document.querySelector('.nav-links');

const x = document.getElementById("main");
const y = document.getElementById("footer");

burger.addEventListener('click', () => {
    navLinks.classList.toggle('active');
    
    if (x.style.display === "none") {
        x.style.display = "block";
        y.style.display = "block";
      } else {
        x.style.display = "none";
        y.style.display = "none";
      }
})
