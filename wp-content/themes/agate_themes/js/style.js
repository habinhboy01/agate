// menu pc

// $(document).ready(function() {
//     $(window).scroll(function(event) {
//         var pos_body = $('html,body').scrollTop();
//         if (pos_body > 0) {
//             $('.bg-header').addClass('sticky');
//         }
//         else {
//             $('.bg-header').removeClass('sticky');
//         }
//     })
// })


// menu mobile

$('.icon-bar').on('click',function(){
    $('.bg-mobile').slideToggle();
});



$('.carousel_1').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<div class='btn-prev'><i class='fas fa-angle-left'></i></div>","<div class='btn-next'><i class='fas fa-angle-right'></i></div>"],

    autoplay:true,
    autoplayTimeout:8000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:3
        }
    }
})