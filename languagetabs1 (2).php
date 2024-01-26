
<!-- carousel.php -->
<div id="<?= $_GET['lang'] ?>-carousel" class="carousel slide" data-ride="false">
  <div class="carousel-inner">
    <?php for ($i = 1; $i <= 6; $i++) : ?>
      <div class="carousel-item<?= ($i === 1) ? ' active' : ''; ?>">
        <video id="<?= $_GET['lang'] ?>-video-<?= $i ?>" controls autoplay muted>
          <source src="Comms/<?= ucfirst($_GET['lang']) ?>/Animation<?= strtolower($_GET['lang']) . $i ?>.mp4" type="video/mp4">
        </video>
      </div>
    <?php endfor; ?>
  </div>
  <a class="carousel-control-prev" href="#<?= $_GET['lang'] ?>-carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#<?= $_GET['lang'] ?>-carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>