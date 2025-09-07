
let nav = document.querySelector(".navbar");
window.onscroll = function(){
  if(document.documentElement.scrollTop > 50){
    nav.classList.add("header-scrolled");
  }else{
    nav.classList.remove("header-scrolled");
  }
}
let navBar=document.querySelectorAll(".nav-link");
let navCollapse=document.querySelector(".navbar-collapse.collapse");
navBar.forEach(function(a){
  a.addEventListener("click",function(){
    navCollapse.classList.remove("show");
  })
})

var swiper = new Swiper(".myswiper", {
    // Optional parameters
    direction: "vertical",
    loop: true,
    // If we need pagination
    pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
    autoplay:{
        delay:3000,
    },
});

document.addEventListener("DOMContentLoaded", () => {
  function counter(id, start, end, duration) {
      let obj = document.getElementById(id),
          current = start,
          range = end - start,
          increment = end > start ? 1 : -1,
          step = Math.abs(Math.floor(duration / range)),
          timer = setInterval(() => {
              current += increment;
              obj.textContent = current;
              if (current == end) {
                  clearInterval(timer);
              }
          }, step);
  }
  counter("count1", 0, 7677, 3000);
  counter("count2", 100, 1786, 2500);
  counter("count3", 0, 9440, 2000);
  counter("count4", 0, 5110, 3000);
});

var swiper = new Swiper(".our-partner", {
  // slidesPerView: auto,
  spaceBetween: 30,
  loop: true,
  autoplay: {
      delay: 2000,
  },
  breakpoints: {
      '991': {
          slidesPerView: 4,
          spaceBetween: 20,
      },
      '767': {
          slidesPerView: 3,
          spaceBetween: 10,
      },
      '320': {
          slidesPerView: 2,
          spaceBetween: 8,
      },
      '220' : {
        slidesPerView: 1,
          spaceBetween: 8,
      }
  },
});
