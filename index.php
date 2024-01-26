<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" />-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- MDB -->
    <script type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
      #myCarousel {
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
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <ul class="nav navbar-nav" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                data-toggle="tab"><span>English</span></a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab"
                data-toggle="tab"><span>Arabic</span></a></li>
            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">
                <span>Chinese</span></a></li>
            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab"
                data-toggle="tab"><span>French</span></a></li>
            <li role="presentation"><a href="#extra" aria-controls="settings" role="tab"
                data-toggle="tab"><span>Russian</span></a></li>
            <li><a href="#extraSpanish" aria-controls="Spanish" role="tab" data-toggle="tab"><span>Spanish</span></a>
            </li>
          </ul>
        </div>
      </nav>


      <div class="tab-content" id="myTabContent">
        <div role="tabpanel" class="tab-pane active" id="home">

          <div id="myCarousel" class="carousel slide" data-interval="false">
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
              <div class="carousel-item active">
                <video controls autoplay loop muted class="myvid" id="player">
                  <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4"
                    type="video/mp4">
                </video>
              </div>

              <div class="carousel-item">
                <video controls autoplay class="myvid" id="player2">
                  <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ElephantsDream.mp4"
                    type="video/mp4">
                </video>
              </div>

              <div class="carousel-item">
                <video controls autoplay class="myvid" id="player2">
                  <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerBlazes.mp4"
                    type="video/mp4">
                </video>
              </div>
            </div>

            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Vorige</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Volgende</span>
            </a>
          </div>


          <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <div class="sliderVideo">
              <div class="slideVideo">

                <video controls id="myVideo" class="slider-video"
                  poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1724357/placecard_jetblue.jpg">
                  <source src="https://www.learningcontainer.com/wp-content/uploads/2020/05/sample-mp4-file.mp4"
                    type="video/mp4" />
                  <source src="https://www.learningcontainer.com/wp-content/uploads/2020/05/sample-mp4-file.mp4"
                    type="video/mp4" />
                  <source src="https://www.learningcontainer.com/wp-content/uploads/2020/05/sample-mp4-file.mp4"
                    type="video/mp4" />
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
                  <source src="https://www.learningcontainer.com/wp-content/uploads/2020/05/sample-mp4-file.mp4"
                    type="video/mp4" />
                  <source src="https://www.learningcontainer.com/wp-content/uploads/2020/05/sample-mp4-file.mp4"
                    type="video/webm" />
                  <source src="https://www.learningcontainer.com/wp-content/uploads/2020/05/sample-mp4-file.mp4"
                    type="video/ogg" />
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
                  <source src="https://www.learningcontainer.com/wp-content/uploads/2020/05/sample-mp4-file.mp4"
                    type="video/mp4" />
                  <source src="https://www.learningcontainer.com/wp-content/uploads/2020/05/sample-mp4-file.mp4"
                    type="video/webm" />
                  <source src="https://www.learningcontainer.com/wp-content/uploads/2020/05/sample-mp4-file.mp4"
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

          <div id="myCarousel" class="carousel slide" data-interval="false">
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
              <div class="carousel-item active">
                <video controls autoplay loop muted class="myvid" id="player">
                  <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4"
                    type="video/mp4">
                </video>
              </div>

              <div class="carousel-item">
                <video controls autoplay class="myvid" id="player2">
                  <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ElephantsDream.mp4"
                    type="video/mp4">
                </video>
              </div>

              <div class="carousel-item">
                <video controls autoplay class="myvid" id="player2">
                  <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerBlazes.mp4"
                    type="video/mp4">
                </video>
              </div>
            </div>

            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Vorige</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Volgende</span>
            </a>
          </div>

          <div id="myCarousel" class="carousel slide" data-interval="false">
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
              <div class="carousel-item active">
                <video controls autoplay loop muted class="myvid" id="player">
                  <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4"
                    type="video/mp4">
                </video>
              </div>

              <div class="carousel-item">
                <video controls autoplay class="myvid" id="player2">
                  <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ElephantsDream.mp4"
                    type="video/mp4">
                </video>
              </div>

              <div class="carousel-item">
                <video controls autoplay class="myvid" id="player2">
                  <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerBlazes.mp4"
                    type="video/mp4">
                </video>
              </div>
            </div>

            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Vorige</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Volgende</span>
            </a>
          </div>


          <div id="myCarousel" class="carousel slide" data-interval="false">
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
              <div class="carousel-item active">
                <video controls autoplay loop muted class="myvid" id="player">
                  <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4"
                    type="video/mp4">
                </video>
              </div>

              <div class="carousel-item">
                <video controls autoplay class="myvid" id="player2">
                  <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ElephantsDream.mp4"
                    type="video/mp4">
                </video>
              </div>

              <div class="carousel-item">
                <video controls autoplay class="myvid" id="player2">
                  <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerBlazes.mp4"
                    type="video/mp4">
                </video>
              </div>
            </div>

            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Vorige</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Volgende</span>
            </a>
          </div>

          <div id="myCarousel" class="carousel slide" data-interval="false">
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
              <div class="carousel-item active">
                <video controls autoplay loop muted class="myvid" id="player">
                  <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4"
                    type="video/mp4">
                </video>
              </div>

              <div class="carousel-item">
                <video controls autoplay class="myvid" id="player2">
                  <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ElephantsDream.mp4"
                    type="video/mp4">
                </video>
              </div>

              <div class="carousel-item">
                <video controls autoplay class="myvid" id="player2">
                  <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerBlazes.mp4"
                    type="video/mp4">
                </video>
              </div>
            </div>

            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Vorige</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Volgende</span>
            </a>
          </div>

          <div id="myCarousel" class="carousel slide" data-interval="false">
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
              <div class="carousel-item active">
                <video controls autoplay loop muted class="myvid" id="player">
                  <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4"
                    type="video/mp4">
                </video>
              </div>

              <div class="carousel-item">
                <video controls autoplay class="myvid" id="player2">
                  <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ElephantsDream.mp4"
                    type="video/mp4">
                </video>
              </div>

              <div class="carousel-item">
                <video controls autoplay class="myvid" id="player2">
                  <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerBlazes.mp4"
                    type="video/mp4">
                </video>
              </div>
            </div>

            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Vorige</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Volgende</span>
            </a>
          </div>

          <div id="myCarousel" class="carousel slide" data-interval="false">
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
              <div class="carousel-item active">
                <video controls autoplay loop muted class="myvid" id="player">
                  <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4"
                    type="video/mp4">
                </video>
              </div>

              <div class="carousel-item">
                <video controls autoplay class="myvid" id="player2">
                  <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ElephantsDream.mp4"
                    type="video/mp4">
                </video>
              </div>

              <div class="carousel-item">
                <video controls autoplay class="myvid" id="player2">
                  <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerBlazes.mp4"
                    type="video/mp4">
                </video>
              </div>
            </div>

            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Vorige</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Volgende</span>
            </a>
          </div>

          <div id="myCarousel" class="carousel slide" data-interval="false">
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
              <div class="carousel-item active">
                <video controls autoplay loop muted class="myvid" id="player">
                  <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4"
                    type="video/mp4">
                </video>
              </div>

              <div class="carousel-item">
                <video controls autoplay class="myvid" id="player2">
                  <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ElephantsDream.mp4"
                    type="video/mp4">
                </video>
              </div>

              <div class="carousel-item">
                <video controls autoplay class="myvid" id="player2">
                  <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerBlazes.mp4"
                    type="video/mp4">
                </video>
              </div>
            </div>

            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Vorige</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Volgende</span>
            </a>
          </div>



        </div>
        <div role="tabpanel" class="tab-pane" id="profile">Lorem Ipsum is simply dummy text of the printing and
          typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
          unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
        <div role="tabpanel" class="tab-pane" id="messages">Lorem Ipsum is simply dummy text of the printing and
          typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
          unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not
          only
          five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
          popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
          recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
        <div role="tabpanel" class="tab-pane" id="settings">Lorem Ipsum is simply dummy text of the printing and
          typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
          unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not
          only
          five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
          popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passage..</div>
        <div role="tabpanel" class="tab-pane" id="extra">Lorem Ipsum is simply dummy text of the printing and
          typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
          unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not
          only
          five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
          popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passage..</div>
        <div role="tabpanel" class="tab-pane" id="extraSpanish">
          <p> Spanish</p>
        </div>
      </div>




    </div>
    <script>
      let allVids = $("#myCarousel").find('.carousel-item');

      allVids.each(function (index, el) {
        if (index !== 0) {
          $(this).find('video')[0].pause();
        }
      });

      $("#myCarousel").on('slide.bs.carousel', function (ev) {
        let slides = $(this).find('.carousel-item');
        let pvid = slides[ev.from].querySelectorAll('video')[0];
        let vid = slides[ev.to].querySelectorAll('video')[0];
        let isPlaying = vid.currentTime > 0 && vid.readyState > 2;

        vid.play();

        if (isPlaying) {
          pvid.pause();
        }
      });





















































    </script>

  </body>

</html>