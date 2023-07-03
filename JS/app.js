$(document).ready(function(){
//   HERO SLIDER

$('#hero-slider').owlCarousel({
    loop:true,
    margin:0,
    items:1,
    nav:true,
    smartSpeed:1000,
    dots:false,
    navText:['PREV','NEXT'],
    responsive:{
        0:{
            nav:false
        },
        768:{
           nav:true
        },
        1000:{
            // items:5
        }
    }
})
// project-slider
$('#project-slider').owlCarousel({
    loop:true,
    margin:24,
    // items:1,
    nav:true,
    smartSpeed:1000,
    dots:true,
    navText:['PREV','NEXT'],
    responsive:{
        0:{
            items:1,
            nav:false,
            margin:0,
        },
        768:{
           items:2,
        },
        1140:{
            items:2,
            center:true,
            dots:true,  
        }
    }
});
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    items:1,
    // nav:true,
    smartSpeed:1000,
    dots:true,

    })

})
var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 90,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });