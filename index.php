<?php  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    
    <title> Trip Advisor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    	hr {
			  -moz-border-bottom-colors: none;
			  -moz-border-image: none;
			  -moz-border-left-colors: none;
			  -moz-border-right-colors: none;
			  -moz-border-top-colors: none;
			  border-color: #337AB7;
			  border-style: solid none;
			  border-width: 3px 0;
			  margin: 18px 0;
			}
    </style>
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
<?php 
	include("nav.php");
	include("menu.php"); 
	include("below_menu_slider.php");
?>

<!-- This is for upper  carousel
Start -->

<div class="container" style="padding:5px; background-color:">
    <div class="col-md-12">
        <div class="carousel slide" id="myCarousel">
          <div class="carousel-inner">
                <div class="item active">
                  <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                  <a href="#"><img src="images/image6.jpg" class="img-responsive">The World's best hotel</a></div>
                </div>
                <div class="item">
                  <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                  <a href="#"><img src="images/image2.jpg" class="img-responsive">Top 25 destinations</a></div>
                </div>
                <div class="item">
                  <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                  <a href="#"><img src="images/image3.jpg" class="img-responsive">The World's best hotel</a></div>
                </div>
                <div class="item">
                  <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                  <a href="#"><img src="images/image4.jpg" class="img-responsive">The World's best hotel</a></div>
                </div>
                <div class="item">
                  <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                  <a href="#"><img src="images/image5.jpg" class="img-responsive">The World's best hotel</a></div>
                </div>
                <div class="item">
                  <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                  <a href="#"><img src="images/image6.jpg" class="img-responsive">The World's best hotel</a></div>
                </div>
                <div class="item">
                  <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                  <a href="#"><img src="images/image7.jpg" class="img-responsive">The World's best hotel</a></div>
                </div>
                <div class="item">
                  <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                  <a href="#"><img src="images/image8.jpg" class="img-responsive">The World's best hotel</a></div>
                </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
        </div>
    </div>

<br/>

	<!-- End -->


	<div class="col-md-12">
	<div class="item">
        <div class="col-lg-8 col-xs-8 col-md-8 col-sm-8">

        	<!-- This is for first panel i.e welcome back
        	Start -->
        	<div class="panel panel-primary">
			  <div class="panel-heading">
			    <h2 class="panel-title">Welcome Back, Nitesh!</h2>
			  </div>
			  <div class="panel-body">
			    <div class="media"><br/>
				  		<a class="pull-left" href="#">
				  			<img class="media-object img-circle"  src="images/no_user_photo.gif">
				  		</a> 
				  		<div class="media-body">
				  			<h4 class="media-heading">Let's hear from you. Where have you travelled lately?</h4>
				  			<button type="button" class="btn btn-success">Write your first review</button>

				  		</div>
				  	</div>
			  </div>
			   <div class="panel-footer">
			  	<span class="glyphicon glyphicon-search"></span><a href="#">Create your travel map</a>
			  	 &nbsp;&nbsp;<b>|&nbsp;&nbsp; </b><a href="#"><img src="images/facebook.png"></a> <a href="#">383 friends</a>
			  </div>
			</div>	
			<!-- End -->	

			<!-- This is for second panel i.e. What travellers are saying about China Town
			Start -->
        	<div class="panel panel-primary">
   				<div class="panel-heading">
      				<h3 class="panel-title">What travellers are saying about China Town </h3>
   				</div>
			   <div class="panel-body">
			      <div class="row">
						<div class="col-md-1"></div>
  						<div class="col-md-11">
  							<ul class="nav nav-tabs nav-justified" role="tablist">
  	  							<li><a href="#hotel_reviews" data-toggle="tab">Hotel Reviews</a></li>
	  							<li><a href="#photos" data-toggle="tab">Photos<div class="badge pull-right"> 3,059</div></a></li>
	  							<li><a href="#forums" data-toggle="tab">Forums<div class="badge pull-right"> 2,056</div></a></li>
	 						</ul>
							<div class="tab-content">
					  			<div class="tab-pane active" id="hotel_reviews">
					  				<div class="media"><br/>
								  		<a class="pull-left" href="#">
								  			<img class="media-object img-circle" src="images/icon.png">
								  		</a> 
								  		<div class="media-body">
								  			<h4 class="mrdia-heading"><a href="#"><em>ROU_Alexandru</em></a></h4>
								  			<small><a href=""> by travellersfrom</a>18:50, 2 replies </small>
								  		</div>
								  	</div>
								  	<div class="media"><br/>
								  		<a class="pull-left" href="#">
								  			<img class="media-object img-circle"  src="images/icon.png">
								  		</a> 
								  		<div class="media-body">
								  			<h4 class="mrdia-heading"><a href="#"><em>ROU_Alexandru</em></a></h4>
								  			<small><a href=""> by travellersfrom</a>18:50, 2 replies </small>
								  		</div>
								  	</div>
								  	<div class="media"><br/>
								  		<a class="pull-left" href="#">
								  			<img class="media-object img-circle" src="images/icon.png">
								  		</a> 
								  		<div class="media-body">
								  			<h4 class="mrdia-heading"><a href="#"><em>ROU_Alexandru</em></a></h4>
								  			<small><a href=""> by travellersfrom</a>18:50, 2 replies </small>
								  		</div>
								  	</div>
								  	<div class="media"><br/>
								  		<a class="pull-left" href="#">
								  			<img class="media-object img-circle" src="images/icon.png">
								  		</a> 
								  		<div class="media-body">
								  			<h4 class="mrdia-heading"><a href="#"><em>ROU_Alexandru</em></a></h4>
								  			<small><a href=""> by travellersfrom</a>18:50, 2 replies </small>
								  		</div>
								  	</div>
					  			</div>
					  			<div class="tab-pane" id="photos">
					  	
					  			</div>
					  
					  			<div class="tab-pane" id="forums">
					  			<div class="media"><br/>
								  		<a class="pull-left" href="#">
								  			<img class="media-object" src="images/favicon.png">
								  		</a> 
								  		<div class="media-body">
								  			<h4 class="mrdia-heading"><a href="#"><em>“Chania to Kythira”</em></a></h4>
								  			<small><a href=""> by travellersfrom</a>18:50, 2 replies </small>
								  		</div>
								</div>
								  	<div class="media"><br/>
								  		<a class="pull-left" href="#">
								  			<img class="media-object" src="images/favicon.png">
								  		</a> 
								  		<div class="media-body">
								  			<h4 class="mrdia-heading"><a href="#"><em>“Chania to Kythira”</em></a></h4>
								  			<small><a href=""> by travellersfrom</a>18:50, 2 replies </small>
								  		</div>
								  	</div>
								  	<div class="media"><br/>
								  		<a class="pull-left" href="#">
								  			<img class="media-object" src="images/favicon.png">
								  		</a> 
								  		<div class="media-body">
								  			<h4 class="mrdia-heading"><a href="#"><em>“Chania to Kythira”</em></a></h4>
								  			<small><a href=""> by travellersfrom</a>18:50, 2 replies </small>
								  		</div>
								  	</div>
								  	<div class="media"><br/>
								  		<a class="pull-left" href="#">
								  			<img class="media-object" src="images/favicon.png">
								  		</a> 
								  		<div class="media-body">
								  			<h4 class="mrdia-heading"><a href="#"><em>“Chania to Kythira”</em></a></h4>
								  			<small><a href=""> by travellersfrom</a>18:50, 2 replies </small>
								  		</div>
								  	</div>
								  	<div class="media"><br/>
								  		<a class="pull-left" href="#">
								  			<img class="media-object" src="images/favicon.png">
								  		</a> 
								  		<div class="media-body">
								  			<h4 class="mrdia-heading"><a href="#"><em>“Chania to Kythira”</em></a></h4>
								  			<small><a href=""> by travellersfrom</a>18:50, 2 replies </small>
								  		</div>
								  	</div>
					  			</div>
					  
				   			</div>


				  		</div>
				   </div>
				</div>
			</div>
			<!-- End -->

			<!-- This is for third panel i.e welcome back
        	Start -->
        	<div class="panel panel-primary">
			  <div class="panel-heading">
			    <h2 class="panel-title">Most popular places in Mumbai</h2>
			  </div>
			  <div class="panel-body">
			    <div class="col-lg-6 col-xs-6 col-md-6 col-sm-6">
			    	<h3> Restaurants </h3>
			    	<ol>
			    		<li>
			    			<h4><a href="#" class="text-primary">Shree Thaker Bhojanalay</a></h4>
			    			<a href="">199 reviews</a> 
			    		</li>
			    		<li>
			    			<h4><a href="#" class="text-primary">O:h Cha Kitchen & Bar</a></h4>
			    			<a href="">127 reviews</a> 
			    		</li>
			    		<li>
			    			<h4><a href="#" class="text-primary">Peshawri</a></h4>
			    			<a href="">504 reviews</a> 
			    		</li>
			    	</ol>
			    </div>
			    <div class="col-lg-6 col-xs-6 col-md-6 col-sm-6">
			    	<h3>Things to do</h3>
			    	<ol>
			    		<li>
			    			<h4><a href="#" class="text-primary">Shree Thaker Bhojanalay</a></h4>
			    			<a href="">1,054 reviews</a> 
			    		</li>
			    		<li>
			    			<h4><a href="#" class="text-primary">O:h Cha Kitchen & Bar</a></h4>
			    			<a href="">41 reviews</a> 
			    		</li>
			    		<li>
			    			<h4><a href="#" class="text-primary">Peshawri</a></h4>
			    			<a href="">194 reviews</a> 
			    		</li>

			    	</ol>
			    </div>
			  </div>
			   
			</div>	
			<!-- End -->

			<!-- This is for Spot light destination div
        	Start -->

        	<div class="bg-info" style="padding:2px;">
	        	<div class="media " >
	        		<h3>Spotlight Destination</h3>
				  	<a class="pull-left" href="#">
				    	<img class="media-object" src="images/kyoto-prefecture.jpg"height="90px" width="90px">
				  	</a>
				  	<div class="media-body">
				    	<h4 class="media-heading"><b>Madhya Pradesh:</b> Spot the stripped stalker in the National Parks of Bandhavgarh one of the finest and best administered National Parks in Asia, an irresistible attraction for all wildlife lovers and a true haven for its animal and avian population. Come Visit us today.</h4>
				  	</div>
				  	
	           	</div>
	           	<div class="row"> 
		           	<div class="col-lg-5 col-xs-5 col-md-5 col-sm-5 pull-left">
					  		<small>Description provided by: <a href="#">Himachal Pradesh Tourism Development Corporation</a></small>
					</div>
					<div class="col-lg-5 col-xs-5 col-md-5 col-sm-5 pull-right">
				  		<small><a href="#">Read more about Himachal Pradesh » </a></small>
				  	</div>
				</div> 
			</div> 	 		 	
        	<!-- End -->
		</div>
		<div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">

			<div>
				<img class="img-responsive" src="images/image14.jpg" >
			</div>
			<br/>
			<hr/>
			<div class="media " >
        		<a class="pull-left" href="#">
			    	<img class="media-object img-responsive" src="images/media_browser_icon.jpg" style="max-width:70px; max-height:60px;">
			  	</a>
			  	<div class="media-body">
			    	<h4 class="media-heading">Subscribe to our free weekly TripWatch newsletter!</h4>
			  	</div>
			  	
        	</div>
        	<br/>
			<h5>Get the latest deals, reviews & articles. Tailored for the destinations you choose.</h5>
			<form>
			  <fieldset>
			    <input type="email" placeholder="Enter your Email" style="width:100%; font-size:14px;"><br/><br/>
			    <button type="submit" class="btn btn-primary">Submit</button>
			  </fieldset>
			</form>
			<hr/>
			<h3>Follow us</h3>
			<div class="media " >
	        		<a class="pull-left" href="#">
				    	<img class="media-object" src="images/twitter-icon.png">
				  	</a>
				  	<div class="media-body">
				    	<h4 class="media-heading"><a href="#">Follow us on Twitter</a></h4>
				  	</div>
				  	
	        </div>
		</div>
	</div>
	</div>

	<hr/>



</div>

<?php include("footer.php"); ?>

<script>
  $('#myTab a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
})
</script>

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
