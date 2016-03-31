<!DOCTYPE html>
<html>
    <head>
        <title>Főoldal</title>
        <meta charset="utf-8">
		<link rel='stylesheet' href='styles.css' type='text/css'>
        <script src="jquery.js"></script>  <!--jQuery Beidézése -->
    </head>
    
    <body>
        
        <section class="firstpart" id ="bemutatoSection">
        
		<?php require('header.php');?>
		
		<div id="slider">
	            <ul class="slides">
	                <li class="slide slide1"></li>
	                <li class="slide slide2"></li>
	                <li class="slide slide3"></li>
	                <li class="slide slide4"></li>
	                <li class="slide slide5"></li>
	            </ul>
	      </div>
          <div id = "slidearrow">
            <img src="img/arrow.png" id="csempek" class="arrow">
          </div>
    	</section>
    	
    	<section class="fullscreen first">
    	
    		Gép képernyője sliderrel, szöveg
    		
    		<div id = "slidearrow">
            	<img src="img/arrow.png" id="csempek" class="arrow">
        	</div>
    	
		</section>
    	
		<section class="fullscreen second">
			
			Random tartalom
    	
    		<?php require('footer.php');?>
    	
		</section>
		
        <script type="text/javascript">
            'use strict';

            $(function() {

                //settings for slider
                var width =  $('#slider').width();
                var animationSpeed = 1000;
                var pause = 5000;
                var currentSlide = 1;

                //cache DOM elements
                var $slider = $('#slider');
                var $slideContainer = $('.slides', $slider);
                var $slides = $('.slide', $slider);

                var interval;

                function startSlider() {
                    interval = setInterval(function() {
                        $slideContainer.animate({'margin-left': '-='+width}, animationSpeed, function() {
                            if (++currentSlide === $slides.length) {
                                currentSlide = 1;
                                $slideContainer.css('margin-left', 0);
                            }
                        });
                    }, pause);
                }

                startSlider();


            });
        </script>
        
        <script type="text/javascript">
        
            $(document).ready(function(){
               slide(); 
            });
            
            function slide(){
                $("#slidearrow img").click(function(e){
                    var sectionID = e.currentTarget.id + "Section";
                    
                    $("html body").animate({
                        scrollTop: $("#"+sectionID).offset().top
                    }, 1000)
                })
                
                $(".header-nav a").click(function(e){
                    e.preventDefault();
                    var sectionID = e.currentTarget.id + "Section";
                    
                    $("html body").animate({
                        scrollTop: $("#"+sectionID).offset().top
                    }, 1000)
                })
            }
            
        </script>

    </body>
    
</html>