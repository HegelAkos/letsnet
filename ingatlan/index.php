<!DOCTYPE html>
<html>
    <head>
        <title>Főoldal</title>
        <meta charset="utf-8">
		<link rel='stylesheet' href='style.css' type='text/css'>
        <script src="jquery.js"></script>  <!--jQuery Beidézése -->
    </head>
    
    
    <body>
        <div class="elsotetules" id="elsotetules">
        
        </div>
        
        <section class="fullscreen" id ="bemutatoSection">
        
		<?php require('header.php');?>
		
		<div id="slider">
	            <ul class="slides">
	                <li class="slide slide1"></li>
	                <li class="slide slide2"></li>
	                <li class="slide slide3"></li>
	                <li class="slide slide4"></li>
	                <li class="slide slide5"></li>
	            </ul>
				<div class="group1-Wrapper">
					<a class="group1-Prev" id="slideLeft"></a>
					<a class="group1-Next" id="slideRight"></a>
				</div>
	      </div>
	      <div class="feher">
              <div id = "slidearrow">
                <img src="img/arrow.png" id = "csempek" class="arrow">
              </div>
            </div>
    	</section>
        
        <section class="container" id="container">
            
            
            <section class="fullscreen csempekresz" id="csempekSection">
	            <a href="munkaim.php" style="background-image: url('img/csempe/1.jpg');"><span>Ingatlanok</span></a><!--
                --><a href="munkaim.php" style="background-image: url('img/csempe/2.jpg');"><span>Szobák/Helységek</span></a><!--
                --><a href="munkaim.php" style="background-image: url('img/csempe/3.jpg');"><span>Egyedi tervezés</span></a><!--
                --><a href="munkaim.php" style="background-image: url('img/csempe/4.jpg');"><span>Kapcsolat</span></a> 
            
				<div id = "slidearrow">
                <img src="img/arrow.png" id = "kalkulator" class="arrow-2">
              </div>
            
            </section>
            
            <section class="fullscreen" id="kalkulatorSection">
	            <section class="table-cell"> 
	        	<h2>Számítsa ki mennyibe fog kerülni a felújítás!</h2>
	            
	           <section class="halves">
	           <div class="half1">
			   		<input type="number" name="squaremeters" placeholder="Négyzetméter">
		           	<label>
		           		<button>Mehet!</button>
		           	</label>
	           </div><!--
	           --><div class="half2">
	           <div>
		           <nav>
					<div>
						Általunk
					</div><!--
					--><div>
						Más által
					</div><!--
					--><div>
						Saját kezűleg
					</div>
				</nav>
				<div class="content">
					Tartalom Tartalom Tartalom Tartalom Tartalom Tartalom Tartalom Tartalom Tartalom
				</div>
	           </div>
	           </div>  
	            </section>
			   
			   <p>A kalkulátor eléréséhez kattintson a lenti képek egyikére.</p>
			   
			   
	            <section class ="calculatorresz" id="calculatorresz">
	                <div class="calculator-kepek" id="calculator-kepek">
	                    <!--<img src="img/kalkulatorkepek/1.jpg">
	                    <img src="img/kalkulatorkepek/2.jpg">
	                    <img src="img/kalkulatorkepek/3.jpg">
	                    <img src="img/kalkulatorkepek/4.jpg">
	                    <img src="img/kalkulatorkepek/5.jpg">-->
	                    <div class="kalk-img-div" style="background-image: url('img/kalkulatorkepek/1.jpg');"></div><!--
	                    --><div class="kalk-img-div" style="background-image: url('img/kalkulatorkepek/2.jpg');"></div><!--
	                    --><div class="kalk-img-div" style="background-image: url('img/kalkulatorkepek/3.jpg');"></div><!--
	                    --><div class="kalk-img-div" style="background-image: url('img/kalkulatorkepek/4.jpg');"></div><!--
	                    --><div class="kalk-img-div" style="background-image: url('img/kalkulatorkepek/5.jpg');"></div>
	                </div>
	            </section>
	            </section>
	            
	            <div id = "slidearrow">
                <img src="img/arrow.png" id = "ajanlat" class="arrow-2">
              </div>
	            
            </section>
            
            <section class="fullscreen" id="ajanlatSection">
    
            <section class="table-cell">
                <h2>Kérjen most egyedi ajánlatot!</h2>
                <p>Ha eszébe jut egy újabb ötlet, ne habozzon, küldje el most, hogy a munkálatok azonnal elkezdődhessenek! </p>
                <form id="offer">
	                <div class="formcolumn">
		                <input  style = "border-radius: 5px;" type="text" id ="nev2" placeholder="Név">
		                <input style = "border-radius: 5px;" type="text" id ="email2" placeholder="E-mail">
		                <input style = "border-radius: 5px;" type="number" id ="negyzetmeterek" placeholder="Lakás/Ház mérete">
	                </div><!--
					--><div class="formcolumn">
	                	<textarea style = "border-radius: 5px;" type="text" id ="currentcondition" placeholder="Lakás/Ház jelenlegi állapota"></textarea>
						<textarea style = "border-radius: 5px;" type="text" id ="munkaamitmegkellcsinalni" placeholder="Elvégzendő felújítási munkálatok"></textarea>
					</div><!--
					--><label>
						<button style = "border-radius: 5px;" id="mehetbtn-ajanlatpopup">Mehet!</button>
					</label>
                </form>
            </section>
    
		<?php require('footer.php');?>
		
            </section>
        </section>

        <script type="text/javascript">
        
            $(document).ready(function(){
               slide(); 
			   initSlider();
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
			
			function initSlider() {

                //settings for slider
                var width =  $('#slider').width();
                var animationSpeed = 1000;
                var pause = 5000;

                //cache DOM elements
                var $slider = $('#slider');
                var $slideContainer = $('.slides', $slider);
                var $slides = $('.slide', $slider);
				
				var canmanual = true;
				var maxmargin = ($slides.length-1)*width;
                var interval;
				
                function startSlider() {
                    interval = setInterval(function() {
						canmanual = false;
						if($slideContainer.css('margin-left') === "0px"){
							$slideContainer.css('margin-left', -maxmargin);
						}
						else {
							$slideContainer.animate({'margin-left': '+='+width}, animationSpeed, function() {
								canmanual = true;
							});
						}
                    }, pause);
                }
				
				$slideContainer.css('margin-left', -maxmargin);
                startSlider();
				
				$("#slideLeft").click(function (e) {
					e.preventDefault();
					clearInterval(interval);
					if (canmanual) {
						canmanual = false;
						if($slideContainer.css('margin-left') === "0px"){
							$slideContainer.css('margin-left', -maxmargin);
							canmanual = true;
							}
						else {
							$slideContainer.animate({'margin-left': '+='+width}, animationSpeed, function() {
								startSlider();
								canmanual = true;
							});
						}			
					}
				});
				$("#slideRight").click(function (e) {
					e.preventDefault();
					clearInterval(interval);
					if (canmanual) {
						canmanual = false;
						if($slideContainer.css('margin-left') === -maxmargin.toString() + "px"){
							$slideContainer.css('margin-left', 0);
							canmanual = true;
							}
						else {
							$slideContainer.animate({'margin-left': '-='+width}, animationSpeed, function() {
								startSlider();
								canmanual = true;
							});
						}			
					}
				});
            }
        </script>

    </body>
    
</html>