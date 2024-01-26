<!DOCTYPE html>
<html lang="en"><!-- english tab-->

    <head>
        <title>Bootstrap Carousel</title>
        <meta charset="utf-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>//
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js"
            integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P"
            crossorigin="anonymous"></script>
-->

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
                        <li class="nav-item TAB1"><a class="nav-link active" href="#TAB1" data-toggle="tab">English</a>
                        </li>
                        <li class="nav-item TAB2"><a class="nav-link" href="#TAB2" data-toggle="tab">Arabic</a></li>
                        <li class="nav-item TAB3"><a class="nav-link" href="#TAB3" data-toggle="tab">Chinese</a></li>
                        <li class="nav-item TAB4"><a class="nav-link" href="#TAB4" data-toggle="tab">French</a></li>
                        <li class="nav-item TAB5"><a class="nav-link" href="#TAB5" data-toggle="tab">Russian</a></li>
                        <li class="nav-item TAB6"><a class="nav-link" href="#TAB6" data-toggle="tab">Spanish</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade show active" id="TAB1">
                            <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                                <!-- Carousel indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel1" data-slide-to="0" class="item1 active"></li>
                                    <li data-target="#myCarousel1" data-slide-to="1" class="item2"></li>
                                    <li data-target="#myCarousel1" data-slide-to="2" class="item3"></li>
                                    <li data-target="#myCarousel1" data-slide-to="3" class="item4"></li>
                                    <li data-target="#myCarousel1" data-slide-to="4" class="item5"></li>
                                    <li data-target="#myCarousel1" data-slide-to="5" class="item6"></li>
                                </ol>
                                <!-- Wrapper for carousel items -->
                                <div class="carousel-inner">
                                    <div class="carousel-item active video" duration="28040">
                                        <video class="d-block" id="video11" controls autoplay muted>
                                            <source src="/sliders/English/Animation1.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="carousel-item video" duration="25760">
                                        <video class="d-block" id="video12" controls autoplay muted>
                                            <source src="/sliders/English/Animation2.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="carousel-item video" duration="17000">
                                        <video class="d-block" id="video13" controls autoplay muted>
                                            <source src="/sliders/English/Animation3.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="carousel-item video" duration="25000">
                                        <video class="d-block" id="video14" controls autoplay muted>
                                            <source src="/sliders/English/Animation4.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="carousel-item video" duration="17200">
                                        <video class="d-block" id="video15" controls autoplay muted>
                                            <source src="/sliders/English/Animation5.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="carousel-item video" duration="30200">
                                        <video class="d-block" id="video16" controls autoplay muted>
                                            <source src="/sliders/English/Animation6.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                                <!-- Carousel controls -->
                                <a class="carousel-control left" href="#myCarousel1" data-slide="prev"><span
                                        class="glyphicon glyphicon-chevron-left"></span></a>
                                <a class="carousel-control right" href="#myCarousel1" data-slide="next"><span
                                        class="glyphicon glyphicon-chevron-right"></span></a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="TAB2">
                            <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                                <!-- Carousel indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel2" data-slide-to="0" class="item21 active"></li>
                                    <li data-target="#myCarousel2" data-slide-to="1" class="item22"></li>
                                    <li data-target="#myCarousel2" data-slide-to="2" class="item23"></li>
                                    <li data-target="#myCarousel2" data-slide-to="3" class="item24"></li>
                                    <li data-target="#myCarousel2" data-slide-to="4" class="item25"></li>
                                    <li data-target="#myCarousel2" data-slide-to="5" class="item26"></li>
                                </ol>
                                <!-- Wrapper for carousel items -->
                                <div class="carousel-inner">
                                    <div class="carousel-item active video">
                                        <video class="d-block " id="video21" controls autoplay muted>
                                            <source src="/sliders/Arabic/Animation1.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="carousel-item video">
                                        <video class="d-block" id="video22" controls autoplay muted>
                                            <source src="/sliders/Arabic/Animation2.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="carousel-item video">
                                        <video class="d-block" id="video23" controls autoplay muted>
                                            <source src="/sliders/Arabic/Animation3.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="carousel-item video">
                                        <video class="d-block" id="video24" controls autoplay muted>
                                            <source src="/sliders/Arabic/Animation4.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="carousel-item video">
                                        <video class="d-block" id="video25" controls autoplay muted>
                                            <source src="/sliders/Arabic/Animation5.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="carousel-item video">
                                        <video class="d-block" id="video26" controls autoplay muted>
                                            <source src="/sliders/Arabic/Animation6.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                                <!-- Carousel controls -->
                                <a class="carousel-control left" href="#myCarousel2" data-slide="prev"><span
                                        class="glyphicon glyphicon-chevron-left"></span></a>
                                <a class="carousel-control right" href="#myCarousel2" data-slide="next"><span
                                        class="glyphicon glyphicon-chevron-right"></span></a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="TAB3">
                            <div id="myCarousel3" class="carousel slide" data-ride="carousel">
                                <!-- Carousel indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel3" data-slide-to="0" class="item31 active"></li>
                                    <li data-target="#myCarousel3" data-slide-to="1" class="item32"></li>
                                    <li data-target="#myCarousel3" data-slide-to="2" class="item33"></li>
                                    <li data-target="#myCarousel3" data-slide-to="3" class="item34"></li>
                                    <li data-target="#myCarousel3" data-slide-to="4" class="item35"></li>
                                    <li data-target="#myCarousel3" data-slide-to="5" class="item36"></li>
                                </ol>
                                <!-- Wrapper for carousel items -->
                                <div class="carousel-inner">
                                    <div class="carousel-item active video">
                                        <video class="d-block" id="video31" controls autoplay muted>
                                            <source src="/sliders/Chinese/Animation1.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="carousel-item video">
                                        <video class="d-block" id="video32" controls autoplay muted>
                                            <source src="/sliders/Chinese/Animation2.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="carousel-item video">
                                        <video class="d-block" id="video33" controls autoplay muted>
                                            <source src="/sliders/Chinese/Animation3.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="carousel-item video">
                                        <video class="d-block" id="video34" controls autoplay muted>
                                            <source src="/sliders/Chinese/Animation3.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="carousel-item video">
                                        <video class="d-block" id="video35" controls autoplay muted>
                                            <source src="/sliders/Chinese/Animation5.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="carousel-item video">
                                        <video class="d-block" id="video36" controls autoplay muted>
                                            <source src="/sliders/Chinese/Animation6.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                                <!-- Carousel controls -->
                                <a class="carousel-control left" href="#myCarousel3" data-slide="prev"><span
                                        class="glyphicon glyphicon-chevron-left"></span></a>
                                <a class="carousel-control right" href="#myCarousel3" data-slide="next"><span
                                        class="glyphicon glyphicon-chevron-right"></span></a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="TAB4">
                            <div id="myCarousel4" class="carousel slide" data-ride="carousel">
                                <!-- Carousel indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel4" data-slide-to="0" class="item41 active"></li>
                                    <li data-target="#myCarousel4" data-slide-to="1" class="item42"></li>
                                    <li data-target="#myCarousel4" data-slide-to="2" class="item43"></li>
                                    <li data-target="#myCarousel4" data-slide-to="3" class="item44"></li>
                                    <li data-target="#myCarousel4" data-slide-to="4" class="item45"></li>
                                    <li data-target="#myCarousel4" data-slide-to="5" class="item46"></li>
                                </ol>
                                <!-- Wrapper for carousel items -->
                                <div class="carousel-inner">
                                    <div class="carousel-item active video">
                                        <video class="d-block" id="video41" controls autoplay muted>
                                            <source src="/sliders/French/Animation1.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="carousel-item video">
                                        <video class="d-block" id="video42" controls autoplay muted>
                                            <source src="/sliders/French/Animation2.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="carousel-item video">
                                        <video class="d-block" id="video43" controls autoplay muted>
                                            <source src="/sliders/French/Animation3.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="carousel-item video">
                                        <video class="d-block" id="video44" controls autoplay muted>
                                            <source src="/sliders/French/Animation4.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="carousel-item video">
                                        <video class="d-block" id="video45" controls autoplay muted>
                                            <source src="/sliders/French/Animation5.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="carousel-item video">
                                        <video class="d-block" id="video46" controls autoplay muted>
                                            <source src="/sliders/French/Animation6.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                                <!-- Carousel controls -->
                                <a class="carousel-control left" href="#myCarousel4" data-slide="prev"><span
                                        class="glyphicon glyphicon-chevron-left"></span></a>
                                <a class="carousel-control right" href="#myCarousel4" data-slide="next"><span
                                        class="glyphicon glyphicon-chevron-right"></span></a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="TAB5">
                            <div id="myCarousel5" class="carousel slide" data-ride="carousel">
                                <!-- Carousel indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel5" data-slide-to="0" class="item51 active"></li>
                                    <li data-target="#myCarousel5" data-slide-to="1" class="item52"></li>
                                    <li data-target="#myCarousel5" data-slide-to="2" class="item53"></li>
                                    <li data-target="#myCarousel5" data-slide-to="3" class="item54"></li>
                                    <li data-target="#myCarousel5" data-slide-to="4" class="item55"></li>
                                    <li data-target="#myCarousel5" data-slide-to="5" class="item56"></li>
                                </ol>
                                <!-- Wrapper for carousel items -->
                                <div class="carousel-inner">
                                    <div class="carousel-item active video">
                                        <video class="d-block" id="video51" controls autoplay muted>
                                            <source src="/sliders/Russian/Animation1.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="carousel-item video">
                                        <video class="d-block" id="video52" controls autoplay muted>
                                            <source src="/sliders/Russian/Animation2.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="carousel-item video">
                                        <video class="d-block" id="video53" controls autoplay muted>
                                            <source src="/sliders/Russian/Animation3.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="carousel-item video">
                                        <video class="d-block" id="video54" controls autoplay muted>
                                            <source src="/sliders/Russian/Animation4.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="carousel-item video">
                                        <video class="d-block" id="video55" controls autoplay muted>
                                            <source src="/sliders/Russian/Animation5.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="carousel-item video">
                                        <video class="d-block" id="video56" controls autoplay muted>
                                            <source src="/sliders/Russian/Animation6.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                                <!-- Carousel controls -->
                                <a class="carousel-control left" href="#myCarousel5" data-slide="prev"><span
                                        class="glyphicon glyphicon-chevron-left"></span></a>
                                <a class="carousel-control right" href="#myCarousel5" data-slide="next"><span
                                        class="glyphicon glyphicon-chevron-right"></span></a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="TAB6">
                            <div id="myCarousel6" class="carousel slide" data-ride="carousel">
                                <!-- Carousel indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel6" data-slide-to="0" class="item61 active"></li>
                                    <li data-target="#myCarousel6" data-slide-to="1" class="item62"></li>
                                    <li data-target="#myCarousel6" data-slide-to="2" class="item63"></li>
                                    <li data-target="#myCarousel6" data-slide-to="3" class="item64"></li>
                                    <li data-target="#myCarousel6" data-slide-to="4" class="item65"></li>
                                    <li data-target="#myCarousel6" data-slide-to="5" class="item66"></li>
                                </ol>
                                <!-- Wrapper for carousel items -->
                                <div class="carousel-inner">
                                    <div class="carousel-item active video">
                                        <video class="d-block" id="video61" controls autoplay muted>
                                            <source src="/sliders/Spanish/Animation1.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="carousel-item video">
                                        <video class="d-block" id="video62" controls autoplay muted>
                                            <source src="/sliders/Spanish/Animation2.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="carousel-item video">
                                        <video class="d-block" id="video63" controls autoplay muted>
                                            <source src="/sliders/Spanish/Animation3.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="carousel-item video">
                                        <video class="d-block" id="video64" controls autoplay muted>
                                            <source src="/sliders/Spanish/Animation4.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="carousel-item video">
                                        <video class="d-block" id="video65" controls autoplay muted>
                                            <source src="/sliders/Spanish/Animation5.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="carousel-item video">
                                        <video class="d-block" id="video66" controls autoplay muted>
                                            <source src="/sliders/Spanish/Animation6.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                                <!-- Carousel controls -->
                                <a class="carousel-control left" href="#myCarousel6" data-slide="prev"><span
                                        class="glyphicon glyphicon-chevron-left"></span></a>
                                <a class="carousel-control right" href="#myCarousel6" data-slide="next"><span
                                        class="glyphicon glyphicon-chevron-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
            <script>
                $(document).ready(function () {
                    $("#myCarousel1").carousel(); // Activate Carousel  
                    var slider = $("#myCarousel1");
                    // Enable Carousel Indicators
                    $(".item1").click(function () {
                        $("#myCarousel1").carousel(0);
                    });
                    $(".item2").click(function () {
                        $("#myCarousel1").carousel(1);
                    });
                    $(".item3").click(function () {
                        $("#myCarousel1").carousel(2);
                    });
                    $(".item4").click(function () {
                        $("#myCarousel1").carousel(3);
                    });
                    $(".item5").click(function () {
                        $("#myCarousel1").carousel(4);
                    });
                    $(".item6").click(function () {
                        $("#myCarousel1").carousel(5);
                    });
                    // Enable Carousel Controls
                    $(".left").click(function () {
                        $("#myCarousel1").carousel("prev");
                    });
                    $(".right").click(function () {
                        $("#myCarousel1").carousel("next");
                    });
                    $('#myCarousel1').on('slide.bs.carousel', function () {
                        var interval = $('div.item.active').attr('duration');
                        setTimeout(function () {
                            $('.carousel').carousel('next');
                        }, interval);
                    });
                    $('.myTab .TAB2 a').click(function (e) {
                        e.preventDefault();
                        $(this).tab('show');
                        $("#myCarousel2").carousel(); // Activate Carousel
                        var slider2 = $("#myCarousel2");
                        // Enable Carousel Indicators
                        $(".item21").click(function () {
                            $("#myCarousel2").carousel(0);
                        });
                        $(".item22").click(function () {
                            $("#myCarousel2").carousel(1);
                        });
                        $(".item23").click(function () {
                            $("#myCarousel2").carousel(2);
                        });
                        $(".item24").click(function () {
                            $("#myCarousel2").carousel(3);
                        });
                        $(".item25").click(function () {
                            $("#myCarousel2").carousel(4);
                        });
                        $(".item26").click(function () {
                            $("#myCarousel2").carousel(5);
                        });
                        // Enable Carousel Controls
                        $(".left").click(function () {
                            $("#myCarousel2").carousel("prev");
                        });
                        $(".right").click(function () {
                            $("#myCarousel2").carousel("next");
                        });
                    });
                    //$(document).ready(function () {
                    $('.myTab .TAB3 a').click(function (e) {
                        e.preventDefault();
                        $(this).tab('show');
                        $("#myCarousel3").carousel(); // Activate Carousel
                        // Enable Carousel Indicators
                        $(".item31").click(function () {
                            $("#myCarousel3").carousel(0);
                        });
                        $(".item32").click(function () {
                            $("#myCarousel3").carousel(1);
                        });
                        $(".item33").click(function () {
                            $("#myCarousel3").carousel(2);
                        });
                        $(".item34").click(function () {
                            $("#myCarousel3").carousel(3);
                        });
                        $(".item35").click(function () {
                            $("#myCarousel3").carousel(4);
                        });
                        $(".item36").click(function () {
                            $("#myCarousel3").carousel(5);
                        });
                        // Enable Carousel Controls
                        $(".left").click(function () {
                            $("#myCarousel3").carousel("prev");
                        });
                        $(".right").click(function () {
                            $("#myCarousel3").carousel("next");
                        });
                    });
                    $('.myTab .TAB4 a').click(function (e) {
                        e.preventDefault();
                        $(this).tab('show');
                        $("#myCarousel4").carousel(); // Activate Carousel
                        // Enable Carousel Indicators
                        $(".item41").click(function () {
                            $("#myCarousel4").carousel(0);
                        });
                        $(".item42").click(function () {
                            $("#myCarousel4").carousel(1);
                        });
                        $(".item43").click(function () {
                            $("#myCarousel4").carousel(2);
                        });
                        $(".item44").click(function () {
                            $("#myCarousel4").carousel(3);
                        });
                        $(".item45").click(function () {
                            $("#myCarousel4").carousel(4);
                        });
                        $(".item46").click(function () {
                            $("#myCarousel4").carousel(5);
                        });
                        // Enable Carousel Controls
                        $(".left").click(function () {
                            $("#myCarousel4").carousel("prev");
                        });
                        $(".right").click(function () {
                            $("#myCarousel4").carousel("next");
                        });
                    });
                    $('.myTab .TAB5 a').click(function (e) {
                        e.preventDefault();
                        $(this).tab('show');
                        $("#myCarousel5").carousel(); // Activate Carousel
                        // Enable Carousel Indicators
                        $(".item51").click(function () {
                            $("#myCarousel5").carousel(0);
                        });
                        $(".item52").click(function () {
                            $("#myCarousel5").carousel(1);
                        });
                        $(".item53").click(function () {
                            $("#myCarousel5").carousel(2);
                        });
                        $(".item54").click(function () {
                            $("#myCarousel5").carousel(3);
                        });
                        $(".item55").click(function () {
                            $("#myCarousel5").carousel(4);
                        });
                        $(".item56").click(function () {
                            $("#myCarousel5").carousel(5);
                        });
                        // Enable Carousel Controls
                        $(".left").click(function () {
                            $("#myCarousel5").carousel("prev");
                        });
                        $(".right").click(function () {
                            $("#myCarousel5").carousel("next");
                        });

                    });
                    $('.myTab .TAB6 a').click(function (e) {
                        e.preventDefault();
                        $(this).tab('show');
                        $("#myCarousel6").carousel(); // Activate Carousel
                        // Enable Carousel Indicators
                        $(".item61").click(function () {
                            $("#myCarousel6").carousel(0);
                        });
                        $(".item62").click(function () {
                            $("#myCarousel6").carousel(1);
                        });
                        $(".item63").click(function () {
                            $("#myCarousel6").carousel(2);
                        });
                        $(".item64").click(function () {
                            $("#myCarousel6").carousel(3);
                        });
                        $(".item65").click(function () {
                            $("#myCarousel6").carousel(4);
                        });
                        $(".item66").click(function () {
                            $("#myCarousel6").carousel(5);
                        });
                        // Enable Carousel Controls
                        $(".left").click(function () {
                            $("#myCarousel6").carousel("prev");
                        });
                        $(".right").click(function () {
                            $("#myCarousel6").carousel("next");
                        });
                        var totalSlides6 = $('#myCarousel6 .carousel-item').length; // Get the total number of slides 
                        //console.log(totalSlides6);
                        for (var i = 0; i < totalSlides6; i++) {  // Iterate over each video to get its duration and set the interval
                            var video6 = $('#myCarousel6 .carousel-item').eq(i).find('video')[0];  // Calculate interval based on video duration
                            // console.log(video6);
                            var interval6 = video6.duration * 1000; // Convert to milliseconds 
                            console.log(interval6);
                            $('#myCarousel6').carousel({  // Set the interval for each video
                                interval: interval6,
                                pause: null,
                            });
                        }
                        $('#myCarousel6').on('slid.bs.carousel', function () { // Listen for the 'slid.bs.carousel' event to detect when a slide transition is complete
                            var video6 = $('div.carousel-item.active video')[0];
                            video6.play();
                            $("#myCarousel6").carousel("pause");
                        });
                    });
                });
            </Script>
    </body>

</html>