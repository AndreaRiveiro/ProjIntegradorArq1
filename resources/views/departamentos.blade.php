@extends('template')

@section('container')


<style>
            /*carouseller.js 0.32b https://github.com/shrue348/responsive.carouseller Open source under the MIT License. Copyright © 2015-2017 Aleksander Alekseev All rights reserved.*/
.carouseller:before, .carouseller:after {  content: " ";  display: table;}
.carouseller:after { clear: both;}
.carouseller { position: relative;}

.carouseller [class*="car__"]{
	/*display: inline-block;*/ 
	position: relative;
    margin-left: 0.2564102564102564% !important;
    float: left;
    -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
            box-sizing: border-box;
}
.carouseller [class*="car__"]:first-child  { margin-left: 0 !important;}
.carouseller [class*="car__"]:nth-child(n+7) { display: none;}

.carouseller .car__by5 { width: 1.793789743589745%;}
.carouseller .car__12 { width: 10%;}
.carouseller .car__6 { width: 4.8837948717948715%;}
.carouseller .car__4 { width: 3.1703931623931625%;}
.carouseller .car__3 { width: 2.3136923076923077%;}
.carouseller .car__2 { width: 1.452991452991453%;}
.carouseller .car__1 { width: 0.5982905982905983%;}

.carouseller .carouseller__list { position: relative; width: 997.4358974358974%;}
.carouseller .carouseller__wrap { overflow: hidden; position: relative; margin: 0 35px}

.carouseller .carouseller__left, 
.carouseller .carouseller__right {
	position: absolute; 
	margin: 0; 
	bottom: 25px;
    background: none repeat scroll 0 0 transparent;
    font-size: 80px;
    opacity: 0.5;
    text-align: center;
	color: #000;
	text-decoration: none;
}
.carouseller .carouseller__left { left: 0;}
.carouseller .carouseller__right { right: 0;}
.carouseller .carouseller__left:hover, .carouseller .carouseller__:hover { opacity: 0.8;}


/*------Responsive-----------*/
/* Portrait tablet to landscape and desktop */
@media (min-width: 768px) and (max-width: 979px) { 
	.carouseller .car__by5,
	.carouseller .car__12,
	.carouseller .car__6,
	.carouseller .car__4,
	.carouseller .car__3,
	.carouseller .car__2,
	.carouseller .car__1 { width: 3.1623931623931625%;}
}
/* Landscape phone to portrait tablet */
@media (max-width: 767px) {
	.carouseller .car__by5,
	.carouseller .car__12,
	.carouseller .car__6,
	.carouseller .car__4,
	.carouseller .car__3,
	.carouseller .car__2,
	.carouseller .car__1 { width: 4.8717948717948715%;}
}
/* Landscape phones and down */
@media (max-width: 480px) {
	.carouseller .car__by5,
	.carouseller .car__12,
	.carouseller .car__6,
	.carouseller .car__4,
	.carouseller .car__3,
	.carouseller .car__2,
	.carouseller .car__1 { width: 10%;}
}



/* This can be deleted */
[class*="car__"] { text-align: center; font-size: 30px; font-weight: bold; background-color: #e5e5e5;}
h1 {font-size: 40px; margin-bottom: 30px;}
.carouseller { margin-bottom: 20px;}

        </style>

    </header>
        <div id="carousel-cards" class="carouseller">  
                <div class="carouseller__wrap"> 
                    <div class="carouseller__list dep"> 
                        <div class="car__3 ">
                            <img src="img/Raizs/carrossel/Oleo-de-Coco-Extra-Virgem-Organico-500ml---Finococo.jpg" alt="Logo" id="imagem Açai">
                        </div>
                        <div class="car__3">
                            <img src="img/Raizs/carrossel/A_AVEIA_FLOCOS_FINOS_G_FRE_ss.jpg" alt="Logo" id="imagemlogo">
                        </div>
                        <div class="car__3">
                            <img src="img/Raizs/carrossel/Pao-de-Quinoa-Organico-440g---Monama.jpg.png" alt="Logo" id="imagemlogo">
                        </div>
                        <div class="car__3">
                            <img src="img/Raizs/carrossel/Sal-Rosa-do-Himalaia-Fino-Pote-250g---Ecobio.jpg" alt="Logo" id="imagemlogo">
                        </div>
                        <div class="car__3">
                            <img src="img/Raizs/carrossel/Proteina-de-Leite-de-Coco-e-Vegetais-em-Po-270g---FaroVitta.jpg" alt="Logo" id="imagemlogo">
                        </div>
                        <div class="car__3">
                            <img src="img/Raizs/carrossel/acai-guarana-pote.jpg" alt="Logo" id="imagemlogo">
                        </div>
                        <div class="car__3">
                            <img src="img/Raizs/carrossel/mascaraCapilarCoco.jpg" alt="Logo" id="imagemlogo">
                        </div>
                    </div>
                </div>
                <a href="javascript:void(0)" class="carouseller__right">›</a>
      <a href="javascript:void(0)" class="carouseller__left">‹</a>
            </div>
            <script type="text/javascript">
                $(function() {
                    $('#carousel-cards').carouseller({
                        scrollSpeed: 200,
                        autoScrollDelay: 1000,
                        easing: 'linear'
                    });
                });

                //carouseller.js 0.32b https://github.com/shrue348/responsive.carouseller Open source under the MIT License. Copyright © 2015-2017 Aleksander Alekseev All rights reserved.
(function($) {
	$.fn.carouseller = function(options) {
		var options = $.extend({
			scrollSpeed: 200,
			sens: 100,
			autoScrollDelay: 0,
			hoverStopScroll: true,
			easing: 'linear'
		}, options),
		
		obj = $(this),
		left_btn = obj.find('.carouseller__left'),
		right_btn = obj.find('.carouseller__right'),
		list = obj.find('.carouseller__list'),
		wrapper = obj.find('.carouseller__wrap'),
		count = obj.find('[class*="car__"]').length,
		sens = options.sens,
		touch, startX, endX, result, wrap, t, count, can_view,
		
		init = function() {
			this.interval = null;
			this.stop = !1;
			
			left_btn.on('click', left);
			right_btn.on('click', right);
			list.on('touchstart', touchstart);
			list.on('touchmove', touchmove);
			list.on('touchend', touchend);
			
			if (options.hoverStopScroll) {
				obj.on('mouseenter', mousein);
				obj.on('mouseleave', mouseout);
			}
			
			if (options.autoScrollDelay > 0) this.interval = window.setInterval(function(){ right('click')}, options.autoScrollDelay);
			if (options.autoScrollDelay < 0) this.interval = window.setInterval(function(){ left('click')}, -options.autoScrollDelay);
		},
		
		mousein = function(){
			window.clearInterval(this.interval);
		},
		mouseout = function(){
			if (options.autoScrollDelay > 0) this.interval = window.setInterval(function(){ right('click')}, options.autoScrollDelay);
			if (options.autoScrollDelay < 0) this.interval = window.setInterval(function(){ left('click')}, -options.autoScrollDelay);
		},

		get_el_width = function(){
			return obj.find('[class*="car__"]').eq(-1).outerWidth(true);
		},
		get_view_count = function(t){
			return Math.round(wrapper.width() / t)
		},

		left = function(e, result){
			t = get_el_width();
			can_view = get_view_count(t);

			if ( count > can_view) {
				if (e.type == 'touchend') {
					list.animate({
						left: '0px'
					}, options.scrollSpeed, options.easing, function() {
						this.stop = !1;
					});
				} else {
					obj.find('[class*="car__"]').eq(-1).prependTo(list);
					list.css({ left: '-'+t+'px' });
					list.stop().animate({
						left: '0px'
					}, options.scrollSpeed, options.easing, function() {
						this.stop = !1;
					});
				}
			} else {
				list.stop().animate({left: '10px'},100),
				list.animate({left: '0'},100)
			}
		},

		right = function(e, result){
			t = get_el_width();
			can_view = get_view_count(t);

			if ( count > can_view) {
				if (e.type == 'touchend') {
					list.animate({
						left: -2*t+'px'
						
					}, options.scrollSpeed, options.easing, function() {
						obj.find('[class*="car__"]').eq(0).appendTo(list);
						obj.find('[class*="car__"]').eq(0).appendTo(list);
						list.css({ left: '0px' });

						this.stop = !1;
					});
				} else {
					list.stop().animate({
						left: '-' + t + 'px'
					}, options.scrollSpeed, options.easing, function() {
						obj.find('[class*="car__"]').eq(0).appendTo(list);
						list.css({ left: '0px' });

						this.stop = !1;
					});
				}

			} else {
				list.stop().animate({left: '-10px'},100),
				list.animate({left: '0'},100)
			}
		},
		
		back = function(result){
			t = get_el_width();
			can_view = get_view_count(t);
			
			if( result = 0) {
				list.animate({
					left: '-' + t + 'px'
				}, options.scrollSpeed, options.easing, function() {
					obj.find('[class*="car__"]').eq(0).appendTo(list);
					list.css({ left: '0px' });
					this.stop = !1;
				});
			}
		},

		touchstart = function(e) {
			t = get_el_width();
			can_view = get_view_count(t);;
			result=0;
			
			if ( count > can_view ) {
				obj.find('[class*="car__"]').eq(-1).prependTo(list);
				list.css({ left: '-'+t+'px' });
				touch = e.originalEvent.touches[0] || e.originalEvent.changedTouches[0];
				startX = touch.clientX
			}
		},

		touchmove = function(e) {
			t = get_el_width();
			can_view = get_view_count(t);
			touch = e.originalEvent.touches[0] || e.originalEvent.changedTouches[0];
			
			if ( count > can_view ) {
				endX = touch.clientX
				result = startX - endX;
			} else {
				result = 0;
			}
			
			if ( Math.abs(result) > 30 && Math.abs(result) < t+30 ){
				e.preventDefault();
				list.css({ left: '-'+t-result+'px' });
			}
		},

		touchend = function(e) {
			( result > sens ) ? right(e,result) : ( result < -sens ) ? left(e,result) : back(result);
		};
		return this.each(init);
	}
})(jQuery);
            </script>
	

@endsection