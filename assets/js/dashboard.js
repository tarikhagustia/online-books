$('.owl-carousel').owlCarousel({
    // margin:0,
    // lazyLoad: true,
    // nav: true,
    loop:true,
    responsiveClass:true,
    // pagination: true,
    items:4,
    // autoWidth:true,
    nav: false,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    }
})
