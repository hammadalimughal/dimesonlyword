AOS.init({
    once: true
})
$(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 100) {
        $("header").addClass("bg_header");
    } else {
        $("header").removeClass("bg_header");
    }
});

$('#slider_vid').owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    dots: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 4
        }
    }
});
$("#play_vid").click(function () {
    debugger
    $(this).parents(".thumbnail_item").css('display', 'none')
    let vid_main = $(".main_video figure video");
    $(vid_main).attr('controls', true);
    vid_main[0].play();
});

$('#video_suggestion').slick({
    dots: false,
    autoplay: false,
    infinite: false,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    verticalSwiping: true,
    prevArrow: $("#vid_que_lft"),
    nextArrow: $("#vid_que_rgt"),
    vertical: true,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 2,
            }
        }

    ]
});
$('#dancers_slider').slick({
    dots: false,
    autoplay: true,
    infinite: true,
    speed: 300,
    centerMode: true,
    centerPadding: '0',
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow: $("#dancer_lft"),
    nextArrow: $("#dancer_rgt"),
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
            }
        }

    ]
});

function queVid(vid__){
    let sor = $(vid__).children().children("figure").children().attr('src');
    $(".main_video figure video").attr('poster',sor)
}