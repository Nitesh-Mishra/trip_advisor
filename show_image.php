<?php
	include("nav.php");
	include("menu.php");
?>


<!DOCTYPE html>
<html>
<head>
	<title>Image Gallery</title>
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
    <!-- This id for image CSS -->
    <style type="text/css">
    	.imgclass {
		  filter: gray; /* IE6-9 */
		  -webkit-filter: grayscale(1); /* Google Chrome, Safari 6+ & Opera 15+ */
		    -webkit-box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
		    -moz-box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
		    box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
		    margin-bottom:20px;

		}

		img:hover {
		  filter: none; /* IE6-9 */
		  -webkit-filter: grayscale(0); /* Google Chrome, Safari 6+ & Opera 15+ */
		 
		}
    </style>
	<script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
        	<div class="col-md-6 col-sm-6 col-xs-6">
        		<img class="img-responsive imgclass" src="images/image11.jpg" alt="Images">
        		
        	</div>
        	<div class="col-md-6 col-sm-6 col-xs-6">
        		<h3>The Taj Mahal (/ˌtɑːdʒ məˈhɑːl/, more often /ˈtɑːʒ/;,[2] from Persian and Arabic,[3][4] "crown of palaces", pronounced [ˈt̪aːdʒ mɛˈɦɛl]; also "the Taj"[5]) is a white marble mausoleum located in Agra, Uttar Pradesh, India. It was built by Mughal emperor Shah Jahan in memory of his third wife, Mumtaz Mahal. The Taj Mahal is widely recognized as "the jewel of Muslim art in India and one of the universally admired masterpieces of the world's heritage".[6]</h3>
        	</div>
        </div>
    </div>


<hr/>
<div class="row">

    <div class="col-lg-12">
          
            <div class="col-lg-3 col-md-4 col-xs-6 ">
            	<a class="gallery" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="This is a first Image." data-image="images/image5.jpg" data-target="#image-gallery">
                	<img class="img-responsive imgclass" src="images/image5.jpg" alt="Images">
            	</a>
        	</div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            	<a class="gallery" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="This is a second Image." data-image="images/image6.jpg" data-target="#image-gallery">
                	<img class="img-responsive imgclass" src="images/image6.jpg" alt="Images">
            	</a>
        	</div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            	<a class="gallery" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="This is a Third image." data-image="images/image7.jpg" data-target="#image-gallery">
                	<img class="img-responsive imgclass" src="images/image7.jpg" alt="Images">
            	</a>
        	</div>
        	<div class="col-lg-3 col-md-4 col-xs-6 thumb">
            	<a class="gallery" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="This is a Third image." data-image="images/image8.jpg" data-target="#image-gallery">
                	<img class="img-responsive imgclass" src="images/image8.jpg" alt="Images">
            	</a>
        	</div>
        	<div class="col-lg-3 col-md-4 col-xs-6 thumb">
            	<a class="gallery" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="This is a Third image." data-image="images/image9.jpg" data-target="#image-gallery">
                	<img class="img-responsive imgclass" src="images/image9.jpg" alt="Images">
            	</a>
        	</div>
        	<div class="col-lg-3 col-md-4 col-xs-6 thumb">
            	<a class="gallery" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="This is a Third image." data-image="images/image1.jpg" data-target="#image-gallery">
                	<img class="img-responsive imgclass" src="images/image1.jpg" alt="Images">
            	</a>
        	</div>
        	<div class="col-lg-3 col-md-4 col-xs-6 thumb">
            	<a class="gallery" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="This is a Third image." data-image="images/image2.jpg" data-target="#image-gallery">
                	<img class="img-responsive imgclass" src="images/image2.jpg" alt="Images">
            	</a>
        	</div>
        	<div class="col-lg-3 col-md-4 col-xs-6 thumb">
            	<a class="gallery" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="This is a Third image." data-image="images/image3.jpg" data-target="#image-gallery">
                	<img class="img-responsive imgclass" src="images/image3.jpg" alt="Images">
            	</a>
        	</div>
	</div>



<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="image-gallery-title"></h4>
            </div>
            <div class="modal-body">
                <img id="image-gallery-image" class="img-responsive" src="">
            </div>
            <div class="modal-footer">

                <div class="col-md-2">
                    <button type="button" class="btn btn-primary" id="show-previous-image">Previous</button>
                </div>

                <div class="col-md-8 text-justify" id="image-gallery-caption">
                    This text will be overwritten by jQuery
                </div>

                <div class="col-md-2">
                    <button type="button" id="show-next-image" class="btn btn-default">Next</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</div>
<script type="text/javascript">
	$(document).ready(function(){

    loadGallery(true, 'a.gallery');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current){
        $('#show-previous-image, #show-next-image').show();
        if(counter_max == counter_current){
            $('#show-next-image').hide();
        } else if (counter_current == 1){
            $('#show-previous-image').hide();
        }
    }

    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */

    function loadGallery(setIDs, setClickAttr){
        var current_image,
            selector,
            counter = 0;

        $('#show-next-image, #show-previous-image').click(function(){
            if($(this).attr('id') == 'show-previous-image'){
                current_image--;
            } else {
                current_image++;
            }

            selector = $('[data-image-id="' + current_image + '"]');
            updateGallery(selector);
        });

        function updateGallery(selector) {
            var $sel = selector;
            current_image = $sel.data('image-id');
            $('#image-gallery-caption').text($sel.data('caption'));
            $('#image-gallery-title').text($sel.data('title'));
            $('#image-gallery-image').attr('src', $sel.data('image'));
            disableButtons(counter, $sel.data('image-id'));
        }

        if(setIDs == true){
            $('[data-image-id]').each(function(){
                counter++;
                $(this).attr('data-image-id',counter);
            });
        }
        $(setClickAttr).on('click',function(){
            updateGallery($(this));
        });
    }
});
</script>
</body>
</html>


<?php include("footer.php"); ?>