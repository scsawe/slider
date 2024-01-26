<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active" duration="3000">
            <img src="http://placehold.it/400x200" alt="..." />
            <div class="carousel-caption">
                First
            </div>
        </div>
        <div class="item" duration="2000">
            <img src="http://placehold.it/400x200" alt="..." />
            <div class="carousel-caption">
                Second
            </div>
        </div>
        <div class="item" duration="1000">
            <img src="http://placehold.it/400x200" alt="..." />
            <div class="carousel-caption">
                Third
            </div>
        </div>
        <div class="item" duration="500">
            <img src="http://placehold.it/400x200" alt="..." />
            <div class="carousel-caption">
                Fourth
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<script>
    $('#carousel-example-generic').on('slide.bs.carousel', function () {
        var interval = $('div.item.active').attr('duration');
        setTimeout(function () {
            $('.carousel').carousel('next');
        }, interval);
    });
</script>