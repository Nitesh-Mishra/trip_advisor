
<?php ?>

<style type="text/css">

.fade-carousel {
    position: relative;
    height: 100vh;
}
.fade-carousel .carousel-inner .item {
    height: 100vh;
}
.fade-carousel .carousel-indicators > li {
    margin: 0 2px;
    background-color: #f39c12;
    border-color: #f39c12;
    opacity: .7;
}
.fade-carousel .carousel-indicators > li.active {
  width: 10px;
  height: 10px;
  opacity: 1;
}

.hero {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 3;
    color: #fff;
    text-align: center;
    text-transform: uppercase;
    text-shadow: 1px 1px 0 rgba(0,0,0,.75);
      -webkit-transform: translate3d(-50%,-50%,0);
         -moz-transform: translate3d(-50%,-50%,0);
          -ms-transform: translate3d(-50%,-50%,0);
           -o-transform: translate3d(-50%,-50%,0);
              transform: translate3d(-50%,-50%,0);
}
.hero h1 {
    font-size: 6em;    
    font-weight: bold;
    margin: 0;
    padding: 0;
}

.fade-carousel .carousel-inner .item .hero {
    opacity: 0;
    -webkit-transition: 2s all ease-in-out .1s;
       -moz-transition: 2s all ease-in-out .1s; 
        -ms-transition: 2s all ease-in-out .1s; 
         -o-transition: 2s all ease-in-out .1s; 
            transition: 2s all ease-in-out .1s; 
}
.fade-carousel .carousel-inner .item.active .hero {
    opacity: 1;
    -webkit-transition: 2s all ease-in-out .1s;
       -moz-transition: 2s all ease-in-out .1s; 
        -ms-transition: 2s all ease-in-out .1s; 
         -o-transition: 2s all ease-in-out .1s; 
            transition: 2s all ease-in-out .1s;    
}

/********************************/
/*            Overlay           */
/********************************/
.overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: 2;
    background-color: #080d15;
    opacity: .7;
}

/********************************/
/*          Custom Buttons      */
/********************************/
.btn.btn-lg {padding: 10px 40px;}
.btn.btn-hero,
.btn.btn-hero:hover,
.btn.btn-hero:focus {
    color: #f5f5f5;
    background-color: #1abc9c;
    border-color: #1abc9c;
    outline: none;
    margin: 20px auto;
}

/********************************/
/*       Slides backgrounds     */
/********************************/
.fade-carousel .slides .slide-1, 
.fade-carousel .slides .slide-2,
.fade-carousel .slides .slide-3 {
  height: 100vh;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
}
.fade-carousel .slides .slide-1 {
  background-image: url(images/image11.jpg); 
}
.fade-carousel .slides .slide-2 {
  background-image: url(images/image12.jpg);
}
.fade-carousel .slides .slide-3 {
  background-image: url(images/image13.jpg);
}

/********************************/
/*          Media Queries       */
/********************************/
@media screen and (min-width: 980px){
    .hero { width: 980px; }    
}
@media screen and (max-width: 640px){
    .hero h1 { font-size: 4em; }    
}
</style>
    
<style type="text/css">
.divonimageheader{
  margin-bottom: 18px;
font-weight: normal;
font-size: 3.3em;
line-height: 1em;
color: #FFF;
}

.divonimage {
    
    padding: 18px 18px 12px 16px;
    border: 1px solid #FFF;
    border-radius: 4px;
    background: url("http://c1.tacdn.com/img2/meta_sprites/meta_bg_wht.png") repeat scroll 0px 0px transparent;
}
</style>

</head>
<body >
<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
  <!-- Overlay -->
  <div class="overlay"></div>

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="hero">
        <hgroup>
            <h3 class="divonimageheader" >Plan and Book Your Perfect Trip</h3>        
            <div class="row">
              
              <div class="col-md-12 divonimage" >
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="hotels" value="1" checked>
                      Hotels
                  </label>
                  <label>
                    <input type="radio" name="optionsRadios" id="restaurants" value="2" checked>
                      Restaurants
                  </label>
                  <label>
                    <input type="radio" name="optionsRadios" id="flights" value="3" checked>
                      Flights
                  </label>
                  <label>
                    <input type="radio" name="optionsRadios" id="destinations" value="4" checked>
                      Destinations
                  </label>
                </div>
                <!-- div to show clicked content -->
                <div id="result"></div>
              </div>
              
              </div>
              
    
        </hgroup>
        <button class="btn btn-hero btn-lg" role="button">See all features</button>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero">        
        <hgroup>
            <h1>We are smart</h1>        
            <h3>Get start your next awesome project</h3>
        </hgroup>       
        <button class="btn btn-hero btn-lg" role="button">See all features</button>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
      <div class="hero">        
        <hgroup>
            <h1>We are amazing</h1>        
            <h3>Get start your next awesome project</h3>
        </hgroup>
        <button class="btn btn-hero btn-lg" role="button">See all features</button>
      </div>
    </div>
  </div> 
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $('input[name=optionsRadios]').on('change', function(){
    var n = $(this).val();
    switch(n)
    {
            case '1':
                  $('#result').html("1st radio button");
                  break;
            case '2':
                  $('#result').html("2nd radio button");
                  break;
            case '3':
                  $('#result').html("3rd radio button");
                  break;
            case '4':
                  $('#result').html("4rd radio button");
                  break;
        }
    });
});
</script>
</body>
</html>
