<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

	<style type="text/css">

	.categoria-cosmetica{
		display: flex;
		margin: 40px 0px;
	}

	.container-parallax-imagen{
		/*background-image: url(http://ecolisima.com/wp-content/uploads/2017/12/cuidado-natural-mujer.jpg);*/
		    	
	    justify-content: space-evenly;
	    align-items: center;
		height: 200px;
    	display: flex;
  		color: white;
  		background:#276f927d;
	}

	.button-whatsapp:hover {
	    background-color: #efefef96;
	    color: #a23c97d4;
	    text-decoration: none;
	    border: 1px solid #a23c97d4;
	}

	.container-parallax figure{
		margin: 0;    
		background-image: url(http://ecolisima.com/wp-content/uploads/2017/12/cuidado-natural-mujer.jpg);
		background-repeat: no-repeat;
		background-position: center center;
	    background-size: cover;
  		background-attachment: fixed;
	}


	.container-parallax-imagen p{
		font-size: 40px;
		font-weight: bold;
	}

	.button-whatsapp{
		background-color: #b96ab0d4;
	    padding: 20px 10px;
	    border-radius: 14px;
	    color: white;
	    text-decoration: none;
	    border: 1px solid #d6bfbf;
	}

	.productos-recientes{
		margin: 50px 0px;
	}

	.container-info-index{
		padding: 50px;
	    display: flex;
	    justify-content: center;
	}
	
	.info-nosotros-index{
		width: 50%;
	}
	.title-nosotros-index{
		font-size: 40px;
		font-weight: bold;
    	color: #ff95ea;
	}

	.info-nosotros-index p{
		text-align: justify;
	}
	.categoria-cosmetica figure {
		position: relative;
	    float: left;
	    overflow: hidden;
	    width: 100%;
	    margin: 0;
	    background: #3085a3;
	    text-align: center;
	    cursor: pointer;
	}

.categoria-cosmetica figure img {
	position: relative;
	display: block;
	min-height: 100%;
	max-width: 100%;
	opacity: 0.8;
}

.categoria-cosmetica figure figcaption {
/*	padding: 2em;*/
	color: #fff;
	text-transform: uppercase;
	font-size: 1.25em;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}

.categoria-cosmetica figure figcaption::before,
.categoria-cosmetica figure figcaption::after {
	pointer-events: none;
}

.categoria-cosmetica figure figcaption,
.categoria-cosmetica figure figcaption > a {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
/*	display: flex;*/
}

/* Anchor will cover the whole item by default */
/* For some effects it will show as a button */
.categoria-cosmetica figure figcaption > a {
	z-index: 1000;
	text-indent: 200%;
	white-space: nowrap;
	font-size: 0;
	opacity: 0;
}

.categoria-cosmetica figure h2 {
	word-spacing: -0.15em;
	font-weight: 300;
}

.categoria-cosmetica figure h2 span {
	font-weight: 800;
}

.categoria-cosmetica figure h2,
.categoria-cosmetica figure p {
	margin: 0;
}

.categoria-cosmetica figure p {
	letter-spacing: 1px;
	font-size: 68.5%;
}
		/*---------------*/
/***** Bubba *****/
/*---------------*/

figure.effect-bubba {
	background: #9e5406;
}

figure.effect-bubba img {
	opacity: 0.7;
	-webkit-transition: opacity 0.35s;
	transition: opacity 0.35s;
}

figure.effect-bubba:hover img {
	opacity: 0.4;
}

figure.effect-bubba figcaption::before,
figure.effect-bubba figcaption::after {
	position: absolute;
	top: 30px;
	right: 30px;
	bottom: 30px;
	left: 30px;
	content: '';
	opacity: 0;
	-webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
	transition: opacity 0.35s, transform 0.35s;
}

figure.effect-bubba figcaption::before {
	border-top: 1px solid #fff;
	border-bottom: 1px solid #fff;
	-webkit-transform: scale(0,1);
	transform: scale(0,1);
}

figure.effect-bubba figcaption::after {
	border-right: 1px solid #fff;
	border-left: 1px solid #fff;
	-webkit-transform: scale(1,0);
	transform: scale(1,0);
}

figure.effect-bubba h2 {
	padding-top: 30%;
	-webkit-transition: -webkit-transform 0.35s;
	transition: transform 0.35s;
	-webkit-transform: translate3d(0,-20px,0);
	transform: translate3d(0,-20px,0);
}

figure.effect-bubba p {
	padding: 20px 0px;
	opacity: 0;
	-webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
	transition: opacity 0.35s, transform 0.35s;
	-webkit-transform: translate3d(0,20px,0);
	transform: translate3d(0,20px,0);
}

figure.effect-bubba:hover figcaption::before,
figure.effect-bubba:hover figcaption::after {
	opacity: 1;
	-webkit-transform: scale(1);
	transform: scale(1);
}

figure.effect-bubba:hover h2,
figure.effect-bubba:hover p {
	opacity: 1;
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
    justify-content: center;
    align-items: center;
    display: flex;
    width: 100%;
/*    font-size: 25px;*/
}




/*CLIENTE CARRUSEL CON JQUERY*/



.cliente-title{
	color: #dc6cc6;
    font-size: 35px;
    text-align: center;
}
/* Slider */

.slick-slide {
    margin: 0px 20px;
}

.slick-slide img {
    width: 100%;
}

.slick-slider
{
    position: relative;
    display: block;
    box-sizing: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
            user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list
{
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 0;
}
.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;
    display: block;
}
.slick-track:before,
.slick-track:after
{
    display: table;
    content: '';
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
}
[dir='rtl'] .slick-slide
{
    float: right;
}
.slick-slide img
{
    display: block;
}
.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;
    height: auto;
    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}



/*tablets*/
@media screen and (max-width: 1024px ) {
	figure.effect-bubba h2 {
		font-size: 20px
	}
	
}

@media screen and (max-width: 1024px ) {
	.info-nosotros-index{
		width: 80%;
	}
	
}

/*movil*/
@media screen and (max-width: 500px) {
	.categoria-cosmetica {
	    display: block;
	    margin: 40px 0px;
	}

	.container-parallax-imagen{
		flex-direction: column;
    	text-align: center;
	}

	.container-info-index {
    	padding: 20px;
	}

	.container-parallax-imagen p {
	    font-size: 22px;
	}
	.button-whatsapp{
		padding: 15px;
	}

	.info-nosotros-index{
		width: 100%;
	}

	.title-nosotros-index {
    	font-size: 25px;
	}


	.cliente-title {
	    font-size: 20px;
	}
	
}



@media screen and (max-width: 25em) {
	.codrops-header {
		font-size: 75%;
	}
	.codrops-icon span {
		display: none;
	}
}

	</style>
	<?php include('header.php'); ?>


	<div class="slider-container">
	  <div class="menu-slider">
	    <label for="slide-dot-1"></label>
	    <label for="slide-dot-2"></label>
	    <label for="slide-dot-3"></label>
	  </div>
  
	  <input id="slide-dot-1" type="radio" name="slides" checked>
	    <div class="slide slide-1"></div>
	  
	  <input id="slide-dot-2" type="radio" name="slides">
	    <div class="slide slide-2"></div>
	  
	  <input id="slide-dot-3" type="radio" name="slides">
	    <div class="slide slide-3"></div>
	</div>

	<div class="container-info-index">
			<div class="info-nosotros-index">
				<span class="title-nosotros-index">Acerca de nosotros</span>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				
			</div>

<!-- 			<div class="container-imagen">
				<img class="imagen-nosotros" src="https://www.truseguros.com/wp-content/uploads/2018/02/trabaja-con-nosotros.jpg" alt="">
			</div> -->
			
	</div>

	<div class="productos-recientes">

		<div class="container-cliente">
		  <h2 class="cliente-title">Productos Recientes</h2>
		   <section class="customer-logos slider-cliente">
		      <div class="slide-cliente">
		      	<img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg">
		      	<div class="" style="text-align: center;">
			      	<span>nombre</span>
	    			<br>
	    			<a class="button-ver" href="detalle.php">Ver detalles</a>
		      		
		      	</div>
		      </div>
		      <div class="slide-cliente">
		      	<img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg">
		      	<div class="" style="text-align: center;">
			      	<span>nombre</span>
	    			<br>
	    			<a class="button-ver" href="detalle.php">Ver detalles</a>
	    		</div>
		      </div>
		      <div class="slide-cliente">
		      	<img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg">
		      	<div class="" style="text-align: center;">
			      	<span>nombre</span>
	    			<br>
	    			<a class="button-ver" href="detalle.php">Ver detalles</a>
	    		</div>
		      </div>
		      <div class="slide-cliente">
		      	<img src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg">
		      	<div class="" style="text-align: center;">
			      	<span>nombre</span>
	    			<br>
	    			<a class="button-ver" href="detalle.php">Ver detalles</a>
	    		</div>
		      </div>
		      <div class="slide-cliente">
		      	<img src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg">
		      	<div class="" style="text-align: center;">
			      	<span>nombre</span>
	    			<br>
	    			<a class="button-ver" href="detalle.php">Ver detalles</a>
	    		</div>
		      </div>
		      <div class="slide-cliente">
		      	<img src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg">
		      	<div class="" style="text-align: center;">
			      	<span>nombre</span>
	    			<br>
	    			<a class="button-ver" href="detalle.php">Ver detalles</a>
	    		</div>
		      </div>
		      <div class="slide-cliente">
		      	<img src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg">
		      	<div class="" style="text-align: center;">
			      	<span>nombre</span>
	    			<br>
	    			<a class="button-ver" href="detalle.php">Ver detalles</a>
	    		</div>
		      </div>
		      <div class="slide-cliente">
		      	<img src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg">
		      	<div class="" style="text-align: center;">
			      	<span>nombre</span>
	    			<br>
	    			<a class="button-ver" href="detalle.php">Ver detalles</a>
	    		</div>
		      </div>
   			</section>
		</div>
		
	</div>

	<div class="container-parallax">
		<figure >
			
			<div class="container-parallax-imagen">
				<p>¿Deseas recibir mayor información? <br>Comunicate con nosotros ahora</p>
				<!-- <span>Comunicate con nosotros ahora</span> -->
				<a class="button-whatsapp" href="https://api.whatsapp.com/send?phone=51951676915&text=Hola,%20qué%20tal%20Huayruro%20Tours"><span class="socicon socicon-whatsapp mbr-iconfont mbr-iconfont-btn"><i class="fab fa-whatsapp"></i></span> Dale Click</a>
			</div>
		</figure>
	</div>

	<div class="categoria-cosmetica">
		
  		<div class="maquillaje">
  			<figure class="effect-bubba">
						<img src="https://www.spaexperience.cl/wp-content/uploads/2017/12/1_limpieza-facial-con-extraccion.jpg" alt="img02"/>
						<figcaption>
							<h2>Maquillaje</h2>
							<p>Ver más</p>
							<a href="#"></a>
						</figcaption>			
			</figure>
  		</div>
  		<div class="cuidado-capilar">
  			<figure class="effect-bubba">
						<img src="http://www.ilahy.es/wp-content/uploads/2017/01/bioestimulacion-capilar-prp.jpg" alt="img02"/>
						<figcaption>
							<h2>Capilar</h2>
							<p>Ver más</p>
							<a href="catalogo.php"></a>
						</figcaption>			
			</figure>
  		</div>
  		<div class="fragancia">
  			<figure class="effect-bubba">
						<img src="https://www.bricolemar.com/16352-thickbox_default/fragancia-a-cesped-recien-cortado-750ml-nortene.jpg" alt="img02"/>
						<figcaption>
							<h2>Fragancias</h2>
							<p>Ver más</p>
							<a href="#"></a>
						</figcaption>			
			</figure>
  		</div>
  		<div class="cuidado-piel">
        <figure class="effect-bubba">
						<img src="http://www.reborncancun.com/blog/wp-content/uploads/2017/12/C%C3%B3mo-se-eliminan-las-manchas-en-la-piel-de-manera-natural.png" alt="img02"/>
						<figcaption>
							<h2>Cuidado de la piel</h2>
							<p>Ver más</p>
							<a href="#"></a>
						</figcaption>			
			</figure>
      </div>  	
	</div>

<script type="text/javascript">
	$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 2
            }
        }]
    });
});
</script>


	<?php include('footer.php'); ?>



</body>
</html>