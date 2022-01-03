<?php
  include 'includes/header.php';
  $page = 'home';
?>
<main class="home_page">
    <section class="banner_main">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="banner_content">
                        <h5 data-aos="fade-left" data-aos-duration="1200" data-aos-delay="400">Welcome to</h5>
                        <h2 data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="0">Dimes Only World</h2>
                        <p data-aos="fade-right" data-aos-duration="1200" data-aos-delay="400">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                        <div data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="900">
                            <a href="javascript:;" class="playnow">
                                <span class="play_icon"><i class="fas fa-play"></i></span>
                                <h4>play now</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slider_vid">
        <div class="container-fluid p-0 m-0">
            <div class="owl-carousel owl-theme" id="slider_vid">
                <div class="item" data-aos="zoom-in-right" data-aos-duration="1200" data-aos-delay="400">
                    <figure>
                        <img class="img-fluid" src="images/slider_img_1.png" alt="">
                    </figure>
                    <a data-fancybox data-type="video" href="video/video-1.mp4">
                        <span class="vid_icon"><i class="fas fa-play"></i></span>
                    </a>
                </div>
                <div class="item" data-aos="zoom-in-down" data-aos-duration="1200" data-aos-delay="400">
                    <figure>
                        <img class="img-fluid" src="images/slider_img_2.png" alt="">
                    </figure>
                    <a data-fancybox data-type="video" href="video/video-1.mp4">
                        <span class="vid_icon"><i class="fas fa-play"></i></span>
                    </a>
                </div>
                <div class="item" data-aos="zoom-in-left" data-aos-duration="1200" data-aos-delay="400">
                    <figure>
                        <img class="img-fluid" src="images/slider_img_3.png" alt="">
                    </figure>
                    <a data-fancybox data-type="video" href="video/video-1.mp4">
                        <span class="vid_icon"><i class="fas fa-play"></i></span>
                    </a>
                </div>
                <div class="item" data-aos="zoom-in-up" data-aos-duration="1200" data-aos-delay="400">
                    <figure>
                        <img class="img-fluid" src="images/slider_img_4.png" alt="">
                    </figure>
                    <a data-fancybox data-type="video" href="video/video-1.mp4">
                        <span class="vid_icon"><i class="fas fa-play"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="reality_show">
        <div class="container">
            <div class="row justify-content-center px-3">
                <div class="col-10 p-0 px-4">
                    <div class="d-flex align-items-end justify-content-between">
                        <div class="top_content" data-aos="fade-right" data-aos-duration="900" data-aos-delay="400">
                            <h3>Reality Show</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. </p>
                        </div>
                        <div class="arrows_">
                            <a href="javascript:;" id="vid_que_lft"><i class="fas fa-chevron-left"></i></a>
                            <a href="javascript:;" id="vid_que_rgt"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="row mt-4 align-items-center">
                        <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                            <div class="main_video">
                                <figure class="">
                                    <video class="img-fluid" src="video/video-1.mp4" poster="images/vid_thumb.png"
                                        preload="none"></video>
                                </figure>
                                <div class="thumbnail_item">
                                    <div class="vid_icon">
                                        <div data-aos="zoom-in" data-aos-duration="900" data-aos-delay="700">
                                        <a href="javascript:;" id="play_vid"><span><i
                                                    class="fas fa-play"></i></span></a>
                                        <h6>Full Episode</h6>
                                        </div>
                                    </div>
                                    <div class="video_title" data-aos="fade-left" data-aos-duration="900" data-aos-delay="400">
                                        <h4>Lorem ipsum dolor sit amet</h4>
                                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam
                                            nihil molestiae consequatur,</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                            <div class="video_suggestion" id="video_suggestion">
                                <a href="javascript:;" data-aos="fade-right" data-aos-duration="900" data-aos-delay="400">
                                    <div class="que_item">
                                        <figure>
                                            <img class="img-fluid" src="images/suggested_vid_1.png" alt="">
                                        </figure>
                                        <div class="vid_det">
                                            <h4>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                accusantium
                                            </h4>
                                            <h3>S1,E1</h3>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:;" data-aos="fade-left" data-aos-duration="900" data-aos-delay="400">
                                    <div class="que_item">
                                        <figure>
                                            <img class="img-fluid" src="images/suggested_vid_2.png" alt="">
                                        </figure>
                                        <div class="vid_det">
                                            <h4>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                accusantium
                                            </h4>
                                            <h3>S1,E1</h3>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:;" data-aos="fade-right" data-aos-duration="900" data-aos-delay="400">
                                    <div class="que_item">
                                        <figure>
                                            <img class="img-fluid" src="images/suggested_vid_3.png" alt="">
                                        </figure>
                                        <div class="vid_det">
                                            <h4>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                accusantium
                                            </h4>
                                            <h3>S1,E1</h3>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:;">
                                    <div class="que_item">
                                        <figure>
                                            <img class="img-fluid" src="images/suggested_vid_1.png" alt="">
                                        </figure>
                                        <div class="vid_det">
                                            <h4>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                accusantium
                                            </h4>
                                            <h3>S1,E1</h3>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:;">
                                    <div class="que_item">
                                        <figure>
                                            <img class="img-fluid" src="images/suggested_vid_2.png" alt="">
                                        </figure>
                                        <div class="vid_det">
                                            <h4>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                accusantium
                                            </h4>
                                            <h3>S1,E1</h3>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:;">
                                    <div class="que_item">
                                        <figure>
                                            <img class="img-fluid" src="images/suggested_vid_3.png" alt="">
                                        </figure>
                                        <div class="vid_det">
                                            <h4>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                accusantium
                                            </h4>
                                            <h3>S1,E1</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our_members">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-4 px-4">
                    <div class="our_members_content">
                        <h2 data-aos="fade-left" data-aos-duration="900" data-aos-delay="400">Our Members</h2>
                        <p data-aos="zoom-in-down" data-aos-duration="900" data-aos-delay="700"><span>VOTE ON DANCERS!</span>26 MEMBERS WILL BE CHOSEN TO BE ON THE SHOW AND A LOT MORE!
                            CLICK MEMBERS BELOW FOR MORE DETAILS! POSITIONS ARE LIMITED! ARE YOU REALLY READY? COMPLETE
                            DETAILS AND SIGN-UP FORM ON NEXT PAGE.</p>
                        <a href="javascript:;" data-aos="fade-right" data-aos-duration="900" data-aos-delay="400">Members</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="dancers_main" data-aos="zoom-in-down" data-aos-duration="900" data-aos-delay="400">
        <div class="container">
            <div class="row justify-content-center px-3">
                <div class="col-10 p-0 px-4">
                    <div class="d-flex align-items-end justify-content-between">
                        <div class="top_content">
                            <h3>Dancers</h3>
                            <p>If you are chosen for the show, you will receive a text message to set up a phone
                                interview and a contract via DocuSign.</p>
                        </div>
                        <div class="arrows_">
                            <a href="javascript:;" id="dancer_lft"><i class="fas fa-chevron-left"></i></a>
                            <a href="javascript:;" id="dancer_rgt"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="dancers_slider" id="dancers_slider">
                        <div class="slider_item">
                            <figure><img class="img-fluid" src="images/dancer_img_2.png" alt=""></figure>
                            <div class="slid_vid_icon">
                                <a data-fancybox="" data-type="video" href="video/video-1.mp4"><span><i class="fas fa-play"></i></span></a>
                            </div>
                        </div>
                        <div class="slider_item">
                            <figure><img class="img-fluid" src="images/dancer_img_1.png" alt=""></figure>
                            <div class="slid_vid_icon">
                                <a data-fancybox="" data-type="video" href="video/video-1.mp4"><span><i class="fas fa-play"></i></span></a>
                            </div>
                        </div>
                        <div class="slider_item">
                            <figure><img class="img-fluid" src="images/dancer_img_3.png" alt=""></figure>
                            <div class="slid_vid_icon">
                                <a data-fancybox="" data-type="video" href="video/video-1.mp4"><span><i class="fas fa-play"></i></span></a>
                            </div>
                        </div>
                        <div class="slider_item">
                            <figure><img class="img-fluid" src="images/dancer_img_2.png" alt=""></figure>
                            <div class="slid_vid_icon">
                                <a data-fancybox="" data-type="video" href="video/video-1.mp4"><span><i class="fas fa-play"></i></span></a>
                            </div>
                        </div>
                        <div class="slider_item">
                            <figure><img class="img-fluid" src="images/dancer_img_1.png" alt=""></figure>
                            <div class="slid_vid_icon">
                                <a data-fancybox="" data-type="video" href="video/video-1.mp4"><span><i class="fas fa-play"></i></span></a>
                            </div>
                        </div>
                        <div class="slider_item">
                            <figure><img class="img-fluid" src="images/dancer_img_3.png" alt=""></figure>
                            <div class="slid_vid_icon">
                                <a data-fancybox="" data-type="video" href="video/video-1.mp4"><span><i class="fas fa-play"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
  include 'includes/footer.php';
  $page = 'home';
?>