<html>

    <head>
        <title>sample page</title>
        <style>
            * {
                box-sizing: border-box
            }

            body {
                font-family: Verdana, sans-serif;
                margin: 0
            }

            .mySlides {
                display: none
            }

            img {
                vertical-align: middle;
            }

            /* Slideshow container */
            .slideshow-container {
                max-width: 1000px;
                position: relative;
                margin: auto;
            }

            /* Next & previous buttons */
            .prev,
            .next {
                cursor: pointer;
                position: absolute;
                top: 50%;
                width: auto;
                padding: 16px;
                margin-top: -22px;
                color: white;
                font-weight: bold;
                font-size: 18px;
                transition: 0.6s ease;
                border-radius: 0 3px 3px 0;
                user-select: none;
            }

            /* Position the "next button" to the right */
            .next {
                right: 0;
                border-radius: 3px 0 0 3px;
            }

            /* On hover, add a black background color with a little bit see-through */
            .prev:hover,
            .next:hover {
                background-color: rgba(0, 0, 0, 0.8);
            }

            /* Caption text */
            .text {
                color: #f2f2f2;
                font-size: 15px;
                padding: 8px 12px;
                position: absolute;
                bottom: 8px;
                width: 100%;
                text-align: center;
            }

            /* Number text (1/3 etc) */
            .numbertext {
                color: #f2f2f2;
                font-size: 12px;
                padding: 8px 12px;
                position: absolute;
                top: 0;
            }

            /* The dots/bullets/indicators */
            .dot {
                cursor: pointer;
                height: 15px;
                width: 15px;
                margin: 0 2px;
                background-color: #bbb;
                border-radius: 50%;
                display: inline-block;
                transition: background-color 0.6s ease;
            }

            .active,
            .dot:hover {
                background-color: #717171;
            }

            /* Fading animation */
            .fade {
                -webkit-animation-name: fade;
                -webkit-animation-duration: 1.5s;
                animation-name: fade;
                animation-duration: 1.5s;
            }

            @-webkit-keyframes fade {
                from {
                    opacity: .4
                }

                to {
                    opacity: 1
                }
            }

            @keyframes fade {
                from {
                    opacity: .4
                }

                to {
                    opacity: 1
                }
            }

            /* On smaller screens, decrease text size */
            @media only screen and (max-width: 300px) {

                .prev,
                .next,
                .text {
                    font-size: 11px
                }
            }




            .sliderVideo {
                margin: 0 auto;
                max-width: 100%;
                box-shadow: 0 20px 20px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04) !important;
                -webkit-box-shadow: 0 20px 20px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04) !important;
                -moz-box-shadow: 0 20px 20px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04) !important;
                -ms-box-shadow: 0 20px 20px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04) !important;
                -o-box-shadow: 0 20px 20px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04) !important;
            }

            .slide_group_video {
                height: 100%;
                position: relative;
                width: 100%;
            }

            .slideVideo {}

            .slideVideo:first-child {
                display: block;
            }

            .slideVideo:nth-of-type(1) {
                background-color: black;

            }

            .slideVideo:nth-of-type(2) {
                background-color: black;
            }

            .slideVideo:nth-of-type(3) {
                background-color: black;
            }

            .slideVideo_buttons {
                position: relative;
                text-align: center;
                bottom: 21%;
                z-index: 10;
                background-color: rgba(255, 255, 255, 0.3);
                box-shadow: 0 20px 20px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04) !important;
                -webkit-box-shadow: 0 20px 20px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04) !important;
                -moz-box-shadow: 0 20px 20px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04) !important;
                -ms-box-shadow: 0 20px 20px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04) !important;
                -o-box-shadow: 0 20px 20px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04) !important;
            }

            a.slidevideo_btn {
                color: #000000;
                font-size: 42px;
                margin: 0 0.175em;
                -webkit-transition: all 0.4s ease-in-out;
                -moz-transition: all 0.4s ease-in-out;
                -ms-transition: all 0.4s ease-in-out;
                -o-transition: all 0.4s ease-in-out;
                transition: all 0.4s ease-in-out;
            }

            .slidevideo_btn.active,
            .slidevideo_btn:hover {
                color: #04fffd;
                cursor: pointer;
            }

            .directional_nav {
                height: 340px;
                margin: 0 auto;
                max-width: 940px;
                position: relative;
                top: -340px;
            }

            .previousVideo_btn {
                bottom: 0;
                left: 10%;
                margin: auto;
                position: absolute;
                top: 0;
                text-align: center;
            }

            .nextVideo_btn {
                bottom: 0;
                margin: auto;
                position: absolute;
                right: 10%;
                top: 0;
                text-align: center;
            }

            .previousVideo_btn,
            .nextVideo_btn {
                cursor: pointer;
                height: 45px;
                opacity: 0.5;
                -webkit-transition: opacity 0.4s ease-in-out;
                -moz-transition: opacity 0.4s ease-in-out;
                -ms-transition: opacity 0.4s ease-in-out;
                -o-transition: opacity 0.4s ease-in-out;
                transition: opacity 0.4s ease-in-out;
                width: 65px;
            }

            .previousVideo_btn:hover,
            .nextVideo_btn:hover {
                opacity: 1;
            }

            @media only screen and (max-width: 767px) {
                .previousVideo_btn {
                    left: 10%;
                    text-align: center;
                }

                .nextVideo_btn {
                    right: 10%;
                    text-align: center;
                }
            }


            .play-button {
                position: absolute;
                top: 50%;
                left: 50%;
                width: 4em;
                height: 3em;
                margin-top: -1.5em;
                margin-left: -2em;
                background: red;
                border-radius: 1em;
                cursor: pointer;
                text-align: center;
            }

            .play-button:after {
                content: "\25b6";
                font-size: 2em;
                line-height: 1.4em;
            }

            video {
                max-height: 100%;
                max-width: 100%;
                width: 100%;
                object-fit: cover;
            }

            .overlay-content {
                background: rgba(0, 0, 0, 0.7);
                position: absolute;
                top: 0;
                left: 0;
                height: 100%;
                width: 100%;
                opacity: 1;
                transition: 0.4s opacity;
            }

            .text {
                display: none;
            }

            .slideVideo.playing .overlay-content {
                opacity: 0;
                visibility: hidden;
            }
        </style>
    </head>

    <body>
        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <div class="sliderVideo">
                    <div class="slideVideo">

                        <video controls id="myVideo" class="slider-video"
                            poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1724357/placecard_jetblue.jpg">
                            <source src="/slider/Chinese/Animation1.mp4" type="video/mp4" />
                            <source src="/slider/Arabic/Animation1.mp4" type="video/mp4" />
                            <source src="/slider/Arabic/Animation2.mp4" type="video/mp4" />
                        </video>
                        <div class="overlay-content">
                            <div class="play-button"></div>
                        </div>


                    </div>
                </div>
                <div class="text">Caption Text</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <div class="sliderVideo">
                    <div class="slideVideo">

                        <video id="myVideo2" class="slider-video"
                            poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1724357/placecard_jetblue.jpg">
                            <source src="/slider/Arabic/Animation1.mp4" type="video/mp4" type="video/mp4" />
                            <source src="/slider/Arabic/Animation1.mp4" type="video/mp4" type="video/webm" />
                            <source src="/slider/Arabic/Animation1.mp4" type="video/mp4" type="video/ogg" />
                        </video>
                        <div class="overlay-content">
                            <div class="play-button"></div>
                        </div>


                    </div>
                </div>
                <div class="text">Caption Two</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <div class="sliderVideo">
                    <div class="slideVideo">

                        <video id="myVideo3" class="slider-video"
                            poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1724357/placecard_jetblue.jpg">
                            <source
                                src="https://www.learningcontainer.com/wp-content/uploads/2020/05/sample-mp4-file.mp4"
                                type="video/mp4" />
                            <source
                                src="https://www.learningcontainer.com/wp-content/uploads/2020/05/sample-mp4-file.mp4"
                                type="video/webm" />
                            <source
                                src="https://www.learningcontainer.com/wp-content/uploads/2020/05/sample-mp4-file.mp4"
                                type="video/ogg" />
                        </video>
                        <div class="overlay-content">
                            <div class="play-button"></div>
                        </div>


                    </div>
                </div>
                <div class="text">Caption Three</div>
            </div>
            <a class="prev" onclick="toPrevSlide()">&#10094;</a>
            <a class="next" onclick="toNextSlide()">&#10095;</a>

        </div>
        <br>

        <div class="bullets" style="text-align:center">
            <span class="dot" onclick="setActiveSlide(0)"></span>
            <span class="dot" onclick="setActiveSlide(1)"></span>
            <span class="dot" onclick="setActiveSlide(2)"></span>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            playVideo = function (video) {
                if (video && video.length) {
                    video[0].play();
                    video[0].controls = true;
                }
            }

            var slider = $('.slideshow-container');
            var setActiveSlide = function (slideIndex, autoplay) {
                const activeSlide = slider.find('.mySlides').eq(slideIndex);
                if (!activeSlide) return;
                activeSlideIndex = slideIndex;
                slider.find('.mySlides').hide(); // hide all slides
                activeSlide.show(); // display active slide
                $('.bullets').find('.dot').removeClass('active');
                $('.bullets').find('.dot').eq(slideIndex).addClass('active');

                // Pause all video
                slider.find('video').each(function (elemIndex, elem) {
                    elem.pause();
                });
                if (autoplay) {
                    playVideo(activeSlide.find('video'));
                }
            };
            var activeSlideIndex = 0;
            setActiveSlide(activeSlideIndex);

            var toNextSlide = function (autoplay) {
                // Return if last slide
                if (activeSlideIndex >= slider.find('.mySlides').length) return;
                setActiveSlide(activeSlideIndex + 1, autoplay);
            }
            var toPrevSlide = function () {
                // Return if first slide
                if (activeSlideIndex === 0) return;
                setActiveSlide(activeSlideIndex - 1);
            }
            // ADD EVENT LISTENERS
            $('.play-button').on('click', function (e) {
                var video = $(e.target).parents('.slideVideo').find('video');
                playVideo(video);
            })

            $('video').on('play', function (e) {
                $(e.target).parents('.slideVideo').addClass('playing');
            });
            $('video').on('pause', function (e) {
                $(e.target).parents('.slideVideo').removeClass('playing');
            });

            $('video').on('ended', function (e) {
                toNextSlide(true);
            });
        </script>
    </body>

</html>