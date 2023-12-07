var bars = document.querySelector(".fa-solid.fa-bars");
var menuMobile = document.querySelector(".menu-mobile");
var menu = document.querySelector("#menu-menu-mobile");

bars.addEventListener("click", () => {
  menuMobile.classList.add("show");
});

menuMobile.addEventListener("click", (e) => {
  if (!menu.contains(e.target)) {
    menuMobile.classList.remove("show");
  }
});

var swiper = new Swiper(".heading", {
  slidesPerView: 1,
  spaceBetween: 30,
  autoplay: true,
  loop: true,
  pagination: {
    el: ".swiper-pagination-heading",
    clickable: true,
  },
});
