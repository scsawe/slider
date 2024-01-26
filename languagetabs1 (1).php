<!DOCTYPE html>
<html>

  <head>
    <title>Measuring Progress III</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
      nav>.nav.nav-tabs {

        border: none;
        color: #fff;
        background: #272e38;
        border-radius: 0;

      }

      nav>div a.nav-item.nav-link,
      nav>div a.nav-item.nav-link.active {
        border: none;
        padding: 1px 2px;
        color: #fff;
        background: #2a98c5;
        border-radius: 0;
      }

      nav>div a.nav-item.nav-link.active:after {
        content: "";
        position: relative;
        bottom: -30px;
        left: -10%;
        border: 1px solid transparent;
        border-top-color: #2a98c5;
      }

      .tab-content {
        background: #fdfdfd;
        line-height: 2px;
        border: 1px solid #ddd;
        border-top: 1px solid #2a98c5;
        border-bottom: 1px solid #2a98c5;
        padding: 3px 2px;
      }

      nav>div a.nav-item.nav-link:hover,
      nav>div a.nav-item.nav-link:focus {
        border: none;
        background: #e74c3c;
        color: #fff;
        border-radius: 0;
        transition: background 0.28s linear;
      }
    </style>

  </head>
  <!--<div class="container">
              <div class="row">-->
  <div class="col-xs-12 ">
    <nav>
      <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
          aria-controls="nav-home" aria-selected="true">English</a>
        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
          aria-controls="nav-profile" aria-selected="false">Arabic</a>
        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab"
          aria-controls="nav-contact" aria-selected="false">Chinese</a>
        <a class="nav-item nav-link" id="nav-french-tab" data-toggle="tab" href="#nav-french" role="tab"
          aria-controls="nav-french" aria-selected="false">French</a>
        <a class="nav-item nav-link" id="nav-russian-tab" data-toggle="tab" href="#nav-russian" role="tab"
          aria-controls="nav-russian" aria-selected="false">Russian</a>
        <a class="nav-item nav-link" id="nav-spanish-tab" data-toggle="tab" href="#nav-spanish" role="tab"
          aria-controls="nav-spanish" aria-selected="false">Spanish</a>
      </div>
    </nav>
    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
      <!-- english -->
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <div id="carouselExample" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExample" data-slide-to="1"></li>
            <li data-target="#carouselExample" data-slide-to="2"></li>
            <li data-target="#carouselExample" data-slide-to="3"></li>
            <li data-target="#carouselExample" data-slide-to="4"></li>
            <li data-target="#carouselExample" data-slide-to="5"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <video class="d-block" width="100%" height="300px" id="video1" controls autoplay muted>
                <source src="/slider/English/Animation1.mp4" type="video/mp4">
              </video>
            </div>
            <div class="carousel-item">
              <video class="d-block" width="100%" height="300px" id="video2" controls autoplay muted>
                <source src="/slider/English/Animation2.mp4" type="video/mp4">
              </video>
            </div>
            <div class="carousel-item">
              <video class="d-block" width="100%" height="300px" id="video3" controls autoplay muted>
                <source src="/slider/English/Animation3.mp4" type="video/mp4">
              </video>
            </div>
            <div class="carousel-item">
              <video class="d-block" width="100%" height="300px" id="video4" controls autoplay muted>
                <source src="/slider/English/Animation4.mp4" type="video/mp4">
              </video>
            </div>
            <div class="carousel-item">
              <video class="d-block" width="100%" height="300px" id="video5" controls autoplay muted>
                <source src="/slider/English/Animation5.mp4" type="video/mp4">
              </video>
            </div>
            <div class="carousel-item">
              <video class="d-block" width="100%" height="300px" id="video6" controls autoplay muted>
                <source src="/slider/English/Animation6.mp4" type="video/mp4">
              </video>
            </div>
          </div>
        </div>
      </div>
      <!-- Arabic -->
      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
        <div id="carouselExample" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExample" data-slide-to="1"></li>
            <li data-target="#carouselExample" data-slide-to="2"></li>
            <li data-target="#carouselExample" data-slide-to="3"></li>
            <li data-target="#carouselExample" data-slide-to="4"></li>
            <li data-target="#carouselExample" data-slide-to="5"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <video class="d-block" width="100%" height="300px" id="video1" controls autoplay muted>
                <source src="/slider/Arabic/Animation1.mp4" type="video/mp4">
              </video>
            </div>
            <div class="carousel-item">
              <video class="d-block" width="100%" height="300px" id="video2" controls autoplay muted>
                <source src="/slider/Arabic/Animation2.mp4" type="video/mp4">
              </video>
            </div>
            <div class="carousel-item">
              <video class="d-block" width="100%" height="300px" id="video3" controls autoplay muted>
                <source src="/slider/Arabic/Animation3.mp4" type="video/mp4">
              </video>
            </div>
            <div class="carousel-item">
              <video class="d-block" width="100%" height="300px" id="video4" controls autoplay muted>
                <source src="/slider/Arabic/Animation4.mp4" type="video/mp4">
              </video>
            </div>
            <div class="carousel-item">
              <video class="d-block " width="100%" height="300px" id="video5" controls autoplay muted>
                <source src="/slider/Arabic/Animation5.mp4" type="video/mp4">
              </video>
            </div>
            <div class="carousel-item">
              <video class="d-block" width="100%" height="300px" id="video6" controls autoplay muted>
                <source src="/slider/Arabic/Animation6.mp4" type="video/mp4">
              </video>
            </div>
          </div>
        </div>
      </div>
      <!-- Chinese -->
      <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
        <div id="carouselExample" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExample" data-slide-to="1"></li>
            <li data-target="#carouselExample" data-slide-to="2"></li>
            <li data-target="#carouselExample" data-slide-to="3"></li>
            <li data-target="#carouselExample" data-slide-to="4"></li>
            <li data-target="#carouselExample" data-slide-to="5"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <video class="d-block" width="100%" height="300px" id="video1" controls autoplay muted>
                <source src="/slider/Chinese/Animation1.mp4" type="video/mp4">
              </video>
            </div>
            <div class="carousel-item">
              <video class="d-block" width="100%" height="300px" id="video2" controls autoplay muted>
                <source src="/slider/Chinese/Animation2.mp4" type="video/mp4">
              </video>
            </div>
            <div class="carousel-item">
              <video class="d-block" width="100%" height="300px" id="video3" controls autoplay muted>
                <source src="/slider/Chinese/Animation3.mp4" type="video/mp4">
              </video>
            </div>
            <div class="carousel-item">
              <video class="d-block" width="100%" height="300px" id="video4" controls autoplay muted>
                <source src="/slider/Chinese/Animation4.mp4" type="video/mp4">
              </video>
            </div>
            <div class="carousel-item">
              <video class="d-block" width="100%" height="300px" id="video5" controls autoplay muted>
                <source src="/slider/Chinese/Animation5.mp4" type="video/mp4">
              </video>
            </div>
            <div class="carousel-item">
              <video class="d-block" width="100%" height="300px" id="video6" controls autoplay muted>
                <source src="/slider/Chinese/Animation6.mp4" type="video/mp4">
              </video>
            </div>
          </div>
        </div>
      </div>
      <!-- French -->
      <div class="tab-pane fade" id="nav-french" role="tabpanel" aria-labelledby="nav-french-tab">
        <div id="carouselExample" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExample" data-slide-to="1"></li>
            <li data-target="#carouselExample" data-slide-to="2"></li>
            <li data-target="#carouselExample" data-slide-to="3"></li>
            <li data-target="#carouselExample" data-slide-to="4"></li>
            <li data-target="#carouselExample" data-slide-to="5"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <video class="d-block" width="100%" height="300px" id="video1" controls autoplay muted>
                <source src="/slider/French/Animation1.mp4" type="video/mp4">
              </video>
            </div>
            <div class="carousel-item">
              <video class="d-block" width="100%" height="300px" id="video2" controls autoplay muted>
                <source src="/slider/French/Animation2.mp4" type="video/mp4">
              </video>
            </div>
            <div class="carousel-item">
              <video class="d-block" width="100%" height="300px" id="video3" controls autoplay muted>
                <source src="/slider/French/Animation3.mp4" type="video/mp4">
              </video>
            </div>
            <div class="carousel-item">
              <video class="d-block" width="100%" height="300px" id="video4" controls autoplay muted>
                <source src="/slider/French/Animation4.mp4" type="video/mp4">
              </video>
            </div>
            <div class="carousel-item">
              <video class="d-block" width="100%" height="300px" id="video5" controls autoplay muted>
                <source src="/slider/French/Animation5.mp4" type="video/mp4">
              </video>
            </div>
            <div class="carousel-item">
              <video class="d-block" width="100%" height="300px" id="video6" controls autoplay muted>
                <source src="/slider/French/Animation6.mp4" type="video/mp4">
              </video>
            </div>
          </div>
        </div>
      </div>
      <!-- Russian -->
      <div class="tab-pane fade" id="nav-russian" role="tabpanel" aria-labelledby="nav-russian-tab">
        <div id="carouselExample" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExample" data-slide-to="1"></li>
            <li data-target="#carouselExample" data-slide-to="2"></li>
            <li data-target="#carouselExample" data-slide-to="3"></li>
            <li data-target="#carouselExample" data-slide-to="4"></li>
            <li data-target="#carouselExample" data-slide-to="5"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <video class="d-block" width="100%" height="300px" id="video1" controls autoplay muted>
                <source src="/slider/Russian/Animation1.mp4" type="video/mp4">
              </video>
            </div>
            <div class="carousel-item">
              <video class="d-block" width="100%" height="300px" id="video2" controls autoplay muted>
                <source src="/slider/Russian/Animation2.mp4" type="video/mp4">
              </video>
            </div>
            <div class="carousel-item">
              <video class="d-block" width="100%" height="300px" id="video3" controls autoplay muted>
                <source src="/slider/Russian/Animation3.mp4" type="video/mp4">
              </video>
            </div>
            <div class="carousel-item">
              <video class="d-block" width="100%" height="300px" id="video4" controls autoplay muted>
                <source src="/slider/Russian/Animation4.mp4" type="video/mp4">
              </video>
            </div>
            <div class="carousel-item">
              <video class="d-block" width="100%" height="300px" id="video5" controls autoplay muted>
                <source src="/slider/Russian/Animation5.mp4" type="video/mp4">
              </video>
            </div>
            <div class="carousel-item">
              <video class="d-block" width="100%" height="300px" id="video6" controls autoplay muted>
                <source src="/slider/Russian/Animation6.mp4" type="video/mp4">
              </video>
            </div>
          </div>
        </div>
      </div>
      <!-- Spanish -->
      <div class="tab-pane fade" id="nav-spanish" role="tabpanel" aria-labelledby="nav-spanish-tab">
        <div id="carouselExample" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExample" data-slide-to="1"></li>
            <li data-target="#carouselExample" data-slide-to="2"></li>
            <li data-target="#carouselExample" data-slide-to="3"></li>
            <li data-target="#carouselExample" data-slide-to="4"></li>
            <li data-target="#carouselExample" data-slide-to="5"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <video class="d-block" width="100%" height="300px" id="video1" controls autoplay muted>
                <source src="/slider/Spanish/Animation1.mp4" type="video/mp4">
              </video>
            </div>
            <div class="carousel-item">
              <video class="d-block" width="100%" height="300px" id="video2" controls autoplay muted>
                <source src="/slider/Spanish/Animation2.mp4" type="video/mp4">
              </video>
            </div>
            <div class="carousel-item">
              <video class="d-block" width="100%" height="300px" id="video3" controls autoplay muted>
                <source src="/slider/Spanish/Animation3.mp4" type="video/mp4">
              </video>
            </div>
            <div class="carousel-item">
              <video class="d-block" width="100%" height="300px" id="video4" controls autoplay muted>
                <source src="/slider/Spanish/Animation4.mp4" type="video/mp4">
              </video>
            </div>
            <div class="carousel-item">
              <video class="d-block" width="100%" height="300px" id="video5" controls autoplay muted>
                <source src="/slider/Spanish/Animation5.mp4" type="video/mp4">
              </video>
            </div>
            <div class="carousel-item">
              <video class="d-block" width="100%" height="300px" id="video6" controls autoplay muted>
                <source src="/slider/Spanish/Animation6.mp4" type="video/mp4">
              </video>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function () {
      var carousel = $('#carouselExample');

      // Play the first video on carousel load
      carousel.on('slide.bs.carousel', function () {
        var currentSlide = $(this).find('.carousel-item.active');
        var video = currentSlide.find('video')[0];
        video.play();
      });

      // Pause the current video when sliding to the next or previous slide
      carousel.on('slide.bs.carousel', function () {
        var currentSlide = $(this).find('.carousel-item.active');
        var video = currentSlide.find('video')[0];
        video.pause();
      });

      // Play the video of the newly shown slide
      carousel.on('slid.bs.carousel', function () {
        var currentSlide = $(this).find('.carousel-item.active');
        var video = currentSlide.find('video')[0];
        video.play();
      });

      // Automatically slide to the next video when the current video ends
      carousel.on('slid.bs.carousel', function () {
        var currentSlide = $(this).find('.carousel-item.active');
        var video = currentSlide.find('video')[0];

        video.addEventListener('ended', function () {
          carousel.carousel('next');
        });
      });
      $(".nav-item").click(function () {
        carousel.on('slide.bs.carousel', function () {
          var currentSlide = $(this).find('.carousel-item.active');
          var video = currentSlide.find('video')[0];
          video.play();
        });
        // Pause the current video when sliding to the next or previous slide
        carousel.on('slide.bs.carousel', function () {
          var currentSlide = $(this).find('.carousel-item.active');
          var video = currentSlide.find('video')[0];
          video.pause();
        });

        // Play the video of the newly shown slide
        carousel.on('slid.bs.carousel', function () {
          var currentSlide = $(this).find('.carousel-item.active');
          var video = currentSlide.find('video')[0];
          video.play();
        });

        // Automatically slide to the next video when the current video ends
        carousel.on('slid.bs.carousel', function () {
          var currentSlide = $(this).find('.carousel-item.active');
          var video = currentSlide.find('video')[0];

          video.addEventListener('ended', function () {
            carousel.carousel('next');
          });
        });
      });
    });
  </script>
  </body>

</html>