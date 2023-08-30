let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
  menu.classList.toggle('fa-times');
  navbar.classList.toggle('active');
};

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
 };

 var swiper = new Swiper(".home-slider", {
    loop:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
 });
 
 

   /*[ Back to top ]
    
  const backtotopBtn = document.querySelector(".scroll-to-top");
   
const refreshButtonVisibility = () => {

  if (document.documentElement.scrollTop <= 0 ){
    backtotopBtn.style.display="none";
  }
  else {
    backtotopBtn.style.display ="block";
  }
  refreshButtonVisibility();
}

 
backtotopBtn.addEventListener("click",() =>{
  document.documentElement.scrollTop=0;
});

document.addEventListener("scroll",(e) =>{
  refreshButtonVisibility();
});
*/

window.addEventListener('scroll',function(){
  var scroll= this.document.querySelector('.scroll-to-top');
  scroll.classList.toggle("active",window.scrollY >500)
})

function scrollToTop(){
  window.scrollTo({
    top:0,
    behavior:'smooth'
  })
}