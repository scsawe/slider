<!DOCTYPE html>
<html lang="en"><!-- english tab-->

    <head>
        <title>Bootstrap Carousel</title>
        <meta charset="utf-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>//-->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js"
            integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P"
            crossorigin="anonymous"></script>


        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css"
            integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
        <style>
            #carouselExample {
                max-width: 1200px;
                margin: 0 auto;
            }

            .carousel-control-next,
            .carousel-control-prev {
                width: 9% !important;
            }

            .carousel-inner {
                background: #111;
            }

            .carousel-indicators {
                bottom: -13px !important;
            }

            .carousel-item {
                padding-bottom: 25px;
            }

            video {
                width: 100%;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="false">
                <div class="bs-example">
                    <ul id="myTab" class="nav nav-tabs myTab">
                        <li class="nav-item"><a class="nav-link active" href="#TAB1" data-toggle="tab">English</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#TAB2" data-toggle="tab">Arabic</a></li>
                        <li class="nav-item"><a class="nav-link" href="#TAB3" data-toggle="tab">Chinese</a></li>
                        <li class="nav-item"><a class="nav-link" href="#TAB4" data-toggle="tab">French</a></li>
                        <li class="nav-item"><a class="nav-link" href="#TAB5" data-toggle="tab">Russian</a></li>
                        <li class="nav-item "><a class="nav-link" href="#TAB6" data-toggle="tab">Spanish</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade show active" id="TAB1">
                            <div id="myCarousel" class="carousel slide">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="active item">
                                        <video id="video1" width="400" height="200" autoplay controls>
                                            <source src="http://www.w3schools.com/html/mov_bbb.mp4" type="video/webm">
                                        </video>
                                    </div>
                                    <div class="item">
                                        <video id="video2" width="400" height="200" controls>
                                            <source src="http://www.w3schools.com/html/mov_bbb.mp4" type="video/webm">
                                        </video>
                                    </div>
                                </div>
                                <!-- Carousel nav -->
                                <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                                <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="TAB2">
                            <section class="bootstrap_carousel_wrap bootstrap_carousel_wrap_1249"
                                style="margin-top: 0;">
                                <div class="bootstrap_carousel carousel slide" data-pause="hover" data-ride="carousel"
                                    data-wrap="true" id="bootstrap_carousel_1249" data-interval="269000">
                                    <div class="bootstrap_carousel_bottom">
                                        <ol class="carousel-indicators">
                                            <li class="active" data-slide-to="0" data-target="#bootstrap_carousel_1249">
                                            </li>
                                            <li class="" data-slide-to="1" data-target="#bootstrap_carousel_1249"></li>
                                            <li class="" data-slide-to="2" data-target="#bootstrap_carousel_1249"></li>
                                            <li class="" data-slide-to="3" data-target="#bootstrap_carousel_1249"></li>
                                            <li class="" data-slide-to="4" data-target="#bootstrap_carousel_1249"></li>
                                        </ol>
                                        <div class="dynalist dynalist_bootstrap_carousel_bottom_1249"
                                            id="dynalist_bootstrap_carousel_bottom_1249">
                                            <div class="dynalist_entry dynalist_odd dynalist_end ai_edit_toggle dynalist_edit_off"
                                                id="dl_entry_bootstrap_carousel_bottom_1249_0">
                                            </div>
                                        </div><!-- [[END DYNAMIC LIST 'bootstrap_carousel_bottom_1249']] -->
                                    </div>
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item carousel-item slide-1 active" data-interval="269000">
                                            <div class="carousel-video-inner embed-responsive embed-responsive-16by9">
                                                <div id="video-player" data-video-id="0vrdgDdPApQ"></div>
                                            </div>
                                        </div>
                                        <div class="item carousel-item slide-2" data-interval="15000"
                                            data-url="about-us">
                                            <div class="overlay"></div><img class="d-block w-100"
                                                src="https://cdn.rawgit.com/KimSarabia/bootstrap-carousel-sample/a1eee04b/slide-3.jpg"
                                                alt="First slide">
                                            <div class="container h-100">
                                                <div class="carousel-caption h-100 animated fadeIn">
                                                    <h1 class=" animated fadeIn"><strong>RESPONSIVE IS
                                                            HERE!!!<br></strong></h1>
                                                    <div>
                                                        <h1 class=" animated fadeIn"><img
                                                                src="uploads/dynamic_areas/8AhjJ8ywaTCen98BDhEg/34/rsz_autostrada_logo_final_all_white.png"
                                                                width="65%&quot;"></h1>
                                                    </div>
                                                    <p class=" animated fadeIn"><strong><strong>Premium Performance For
                                                                Today's Independent Auto Dealer!</strong></strong></p>
                                                    <div class=" animated fadeIn">
                                                        <a class="btn btn-lg btn-primary" href="about-us" role="button"
                                                            target="_self"><strong>Learn More</strong></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item carousel-item slide-3" data-interval="20000">
                                            <div class="overlay"></div><img class="d-block w-100"
                                                src="https://cdn.rawgit.com/KimSarabia/bootstrap-carousel-sample/a1eee04b/slide-3.jpg"
                                                alt="First slide">
                                            <div class="container h-100">
                                                <div class="carousel-caption h-100 animated fadeIn">
                                                    <h1 class=" animated fadeIn"><strong>
                                                            <font face="Source Sans Pro, sans-serif">DESIGNED FOR GOOGLE
                                                                MOBILE!!!</font>
                                                        </strong></h1>
                                                    <p class=" animated fadeIn"><strong>Get Better SEO Consideration
                                                            With Google Mobile First Matched UX &amp; Design!</strong>
                                                    </p>
                                                    <div class=" animated fadeIn">
                                                        <a class="btn btn-lg btn-primary" href="contact-us"
                                                            role="button" target="_self"><strong>Contact Us</strong></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item carousel-item slide-4" data-interval="6000">
                                            <div class="overlay"></div><img class="d-block w-100"
                                                src="https://cdn.rawgit.com/KimSarabia/bootstrap-carousel-sample/a1eee04b/slide-3.jpg"
                                                alt="First slide">
                                            <div class="container h-100">
                                                <div class="carousel-caption h-100 animated fadeIn">
                                                    <h1 class=" animated fadeIn"><strong>
                                                            <font face="Source Sans Pro, sans-serif">BE SEEN ON ALL
                                                                DEVICES!!!</font>
                                                        </strong></h1>
                                                    <p class=" animated fadeIn"><strong>No Matter The Screen Size or
                                                            Operating System Reaching Your Max Audience!</strong></p>
                                                    <div class=" animated fadeIn">
                                                        <a class="btn btn-lg btn-primary" href="applications"
                                                            role="button" target="_self"><strong>Get Approved
                                                                Now</strong></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item carousel-item slide-5" data-interval="15000">
                                            <div class="overlay"></div><img class="d-block w-100"
                                                src="https://cdn.rawgit.com/KimSarabia/bootstrap-carousel-sample/a1eee04b/slide-3.jpg"
                                                alt="First slide">
                                            <div class="container h-100">
                                                <div class="carousel-caption h-100 animated fadeIn">
                                                    <h1 class=" animated fadeIn"><strong>
                                                            <font face="Source Sans Pro, sans-serif">GET ATTENTION WITH
                                                                PREMIUM STYLING!!!</font>
                                                        </strong></h1>
                                                    <p class=" animated fadeIn"><strong>Flexibly Manage Your Dealerships
                                                            Market Content Across All Devices!</strong></p>
                                                    <div class=" animated fadeIn">
                                                        <a class="btn btn-lg btn-primary" href="locations" role="button"
                                                            target="_self"><strong>Learn More!</strong></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="tab-pane fade" id="TAB3">
                            <video id="my_video_1" class="video-js vjs-default-skin" controls preload="auto" width="640"
                                height="268" data-setup='{ }' muted autoplay>
                                <source src="http://vjs.zencdn.net/v/oceans.mp4" type='video/mp4'>
                            </video>
                        </div>
                        <div class="tab-pane fade" id="TAB4">French
                        </div>
                        <div class="tab-pane fade" id="TAB5">
                            Russian
                        </div>
                        <div class="tab-pane fade" id="TAB6">Spanish
                        </div>
                    </div>
                </div>
            </div>
            <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>-->
            <script>
                $(document).ready(function () {
                    $('#myCarousel').carousel('pause');

                    var video1 = document.getElementById("video1");
                    var video2 = document.getElementById("video2");

                    video1.onended = function (e) {
                        $('#myCarousel').carousel('next');
                        video2.play();
                    }
                    var currPlayer = videojs("my_video_1")
                    var player = currPlayer
                    console.log("Start");
                    console.log(player);
                    currPlayer.play()
                    currPlayer.on('ended', function () {
                        // Play the endPlayer
                        console.dir("Done");
                        player.pause()
                        player.src({
                            src: '/sliders/English/Animation2.mp4',
                            type: 'video/mp4'
                        })
                        //  player.setAttribute('src','https://d2zihajmogu5jn.cloudfront.net/bipbop-advanced/bipbop_16x9_variant.m3u8')
                        //  player.setAttribute('type','application/x-mpegURL')
                        console.log(player.currentSrc())
                        player.load()
                        player.play()
                    });
                });
            </Script>
    </body>

</html>