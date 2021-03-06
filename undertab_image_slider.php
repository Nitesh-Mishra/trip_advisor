<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Infinite carousel (loop) multi-Item - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        .carousel-inner .active.left { left: -33%; }
.carousel-inner .next        { left:  33%; }
.carousel-inner .prev        { left: -33%; }
.carousel-control.left,.carousel-control.right {background-image:none;}
.item:not(.prev) {visibility: visible;}
.item.right:not(.prev) {visibility: hidden;}
.rightest{ visibility: visible;}

    </style>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="col-md-12">
        <div class="carousel slide" id="myCarousel">
          <div class="carousel-inner">
                <div class="item active">
                  <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                  <a href="#"><img src="images/image1.jpg" class="img-responsive">The World's best hotel</a></div>
                </div>
                <div class="item">
                  <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                  <a href="#"><img src="images/image2.jpg" class="img-responsive">Top 25 destinations</a></div>
                </div>
                <div class="item">
                  <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                  <a href="#"><img src="images/image3.jpg" class="img-responsive">ndndnd</a></div>
                </div>
                <div class="item">
                  <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                  <a href="#"><img src="images/image4.jpg" class="img-responsive">nndndn</a></div>
                </div>
                <div class="item">
                  <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                  <a href="#"><img src="images/image5.jpg" class="img-responsive"></a></div>
                </div>
                <div class="item">
                  <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                  <a href="#"><img src="images/image6.jpg" class="img-responsive"></a></div>
                </div>
                <div class="item">
                  <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                  <a href="#"><img src="images/image7.jpg" class="img-responsive"></a></div>
                </div>
                <div class="item">
                  <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                  <a href="#"><img src="images/image8.jpg" class="img-responsive"></a></div>
                </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
        </div>
    </div>
</div>

<script type="text/javascript">
$('#myCarousel').carousel({
  interval: 40000
});

$('.carousel .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));

  if (next.next().length>0) {
 
      next.next().children(':first-child').clone().appendTo($(this)).addClass('rightest');
      
  }
  else {
      $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
     
  }
});
</script>
</body>
</html>
