<!DOCTYPE html>
<html>
<head>
	<title>Detalle</title>
	<meta charset="utf-8">
</head>
<body>

	<style type="text/css">


	/*DETALLE PRODUCTO*/

	/* fonts  */
@import url('https://fonts.googleapis.com/css?family=Abel|Aguafina+Script|Artifika|Athiti|Condiment|Dosis|Droid+Serif|Farsan|Gurajada|Josefin+Sans|Lato|Lora|Merriweather|Noto+Serif|Open+Sans+Condensed:300|Playfair+Display|Rasa|Sahitya|Share+Tech|Text+Me+One|Titillium+Web');

body {
background: #DFC2F2;
	background-image: linear-gradient( 135deg, #CE9FFC 10%, #7367F0 100%);
	background-attachment: fixed;	
	background-size: cover;
	}

#container{
	box-shadow: 0 15px 30px 1px rgba(128, 128, 128, 0.31);
	background: rgba(255, 255, 255, 0.90);
	text-align: center;
	border-radius: 5px;
	overflow: hidden;
	margin: 5em auto;
	height: 350px;
	width: 1000px;
	
}



/* 	Product details  */
.product-details {
	position: relative;
	text-align: left;
	overflow: hidden;
	padding: 30px;
/*	height: 100%;*/
	float: left;
	width: 40%;

}

/* 	Product Name */
#container .product-details h1{
	font-family: 'Old Standard TT', serif;
	display: inline-block;
	position: relative;
	font-size: 34px;
	color: #344055;
	margin: 0;
	
}

#container .product-details h1:before{
	position: absolute;
	content: '';
	right: 0%; 
	top: 0%;
	transform: translate(25px, -15px);
	font-family: 'Farsan', cursive;
	display: inline-block;
	background: #FFA69E;
	border-radius: 5px;
	font-size: 14px;
	padding: 5px;
	color: #FFF;
	margin: 0;
	animation: chan-sh 6s ease infinite;

}


@keyframes chan-sh {
	from  {content: 'free shipping';}
	to  {content: 'New';}
	
}

/*Product Rating  */
.hint-star {
	display: inline-block;
	margin-left: 0.5em;
	color: gold;
/*	width: 50%;*/
}


/* The most important information about the product */
#container .product-details > p {
	font-family: 'Farsan', cursive;
	text-align: center;
	font-size: 20px;
	color: #7d7d7d;
	
}






/* control */

.control{
/*	position: absolute;*/
	bottom: 20%;
	left: 22.8%;
	
}
/* the Button */
.btn {
	transform: translateY(0px);
	transition: 0.3s linear;
	background: #49C608;
	border-radius: 5px;
  position: relative;
  overflow: hidden;
	cursor: pointer;
	outline: none;
	border: none;
	color: #eee;
	padding: 0;
	margin: 0;
	
}

.btn:hover{transform: translateY(-4px);}

.btn span, .btn a {
	font-family: 'Farsan', cursive;
	transition: transform 0.3s;
	display: inline-block;
  	padding: 10px 20px;
	font-size: 1.2em;
	margin:0;
	
}
/* shopping cart icon */
.btn .price, .shopping-cart{
	background: #333;
	border: 0;
	margin: 0;
}

.btn .price {
	transform: translateX(-10%); padding-right: 15px;
}

/* the Icon */
.btn .shopping-cart {
	transform: translateX(-100%);
  position: absolute;
	background: #333;
	z-index: 1;
  left: 0;
  top: 0;
}

/* buy */
.btn .buy {z-index: 3; font-weight: bolder;}

.btn:hover .price {transform: translateX(-110%);}

.btn:hover .shopping-cart {transform: translateX(0%);}



/* product image  */
.product-image {
	transition: all 0.3s ease-out;
	display: inline-block;
	position: relative;
	overflow: hidden;
	height: 100%;
	float: right;
	width: 50%;
	display: inline-block;
}

#container img {width: 100%;height: 100%;}

.info {
    background: rgba(27, 26, 26, 0.9);
    font-family: 'Farsan', cursive;
    transition: all 0.3s ease-out;
    transform: translateX(-100%);
    position: absolute;
    line-height: 1.9;
    text-align: left;
    font-size: 120%;
    cursor: no-drop;
    color: #FFF;
    height: 100%;
    width: 100%;
    left: 0;
    top: 0;
}

.info h2 {text-align: center}
.product-image:hover .info{transform: translateX(0);}

.info ul li{transition: 0.3s ease;}
.info ul li:hover{transform: translateX(50px) scale(1.3);}

.product-image:hover img {transition: all 0.3s ease-out;}
.product-image:hover img {transform: scale(1.2, 1.2);}



	.container-parallax-detalle{
      margin-top:60px;
    }

    .container-categoria article{
      padding: 40px 50px;
    }
    .container-parallax-detalle figure{
      display: flex;
      margin-top: 80px;
      background-color: #75bda7;
      color: white;
      /*padding: 30px;*/
      /*margin: 60px 0px;*/
      margin:0px;
      background-image: url(http://www.espaciotradem.com/wp-content/uploads/2015/06/403.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
      background-attachment: fixed;
      justify-content: center;
      height: 200px;
      align-items: center;
    }

    .container-categoria{
      background-color: #ff5b66;
      height: 150px;
    }

    .categoria{
      display: flex;
      height: 100%;
      align-items: center;
      justify-content: space-evenly;
    }

    .categoria span {
      color: white;
      font-size: 35px;
    }

    .categoria-item a{
      color:white;
      text-decoration: none; 
      font-size:18px;
    }
    .detalle-fondo{
      justify-content: space-evenly;
      align-items: center;
      height: 200px;
      display: flex;
      color: white;
      background: #ac2eb357;
      width: 100%;
    }

    .detalle-fondo span{
      font-size: 50px;
      font-weight: 600;
      letter-spacing: 5px;
      text-align: center;
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

		/*movil*/
	@media screen and (max-width: 750px) {

		#container{
			display: flex;
    		flex-direction: column;
    		height: 100%;
    		width: 300px;

		}

		.product-details{
			width: auto;
		}

		.product-image{
			width: 100%;
		}

	}


	@media screen and (max-width: 900px) {


      .categoria{
        margin-left: 20px;
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        align-items: flex-start;
      }


      .categoria-item a{
        color:white;
        text-decoration: none; 
        font-size:16px;
    }
      
    }



		/*movil*/
	@media screen and (max-width: 500px) {
		.categoria-cosmetica {
		    display: block;
		    margin: 40px 0px;
		}

		.categoria{
	        margin-left: 20px;
	        display: flex;
	        flex-direction: column;
	        justify-content: space-evenly;
	        align-items: flex-start;
      }

      	.categoria-item a{
	        color:white;
	        text-decoration: none; 
	        font-size:16px;
      }

      	.categoria span {
	        color: white;
	        font-size: 25px;
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



	</style>



	<?php include('header.php'); ?>
	<div class="container-parallax-detalle">
	  <figure>
	    
	    <div class="detalle-fondo">
	      <span>Detalle de Producto</span>
	      
	    </div>
	    
	  </figure>
		
	</div>

    <div class="container-categoria">
    
      <div class="categoria">
        <span>Categoria:</span>
        <div class="categoria-item">
          <a href="categoria.php"><i class="fas fa-search"></i>  Maquillaje</a>
        </div>
        <div class="categoria-item">
          <a href="categoria.php"><i class="fas fa-search"></i>  Cuidado Capilar</a>
        </div>
        <div class="categoria-item">
          <a href="categoria.php"><i class="fas fa-search"></i>  Fragancias</a>
        </div>
        <div class="categoria-item">
          <a href="categoria.php"><i class="fas fa-search"></i>  Cuidado de la piel</a>
        </div>
       </div>
    </div>


	<div id="container">	
	
<!-- Start	Product details -->
	<div class="product-details">
		
		<!-- 	Product Name -->
	<h1>Producto</h1>
<!-- 		<span class="hint new">New</span> -->
<!-- 		<span class="hint free-shipping">Free Shipping</span> -->
<!-- 		the Product rating -->
	<span class="hint-star star">
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star-half-o" aria-hidden="true"></i>
		<i class="fa fa-star-o" aria-hidden="true"></i>
	</span>
		
	
<!-- The most important information about the product -->
		<p class="information">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam "</p>

		
		
<!-- 		Control -->
<div class="control">
	
<!-- Start Button buying -->
	<button class="btn">
<!-- 		the Price -->
	 <span class="price">S/ 49 </span>
<!-- 		shopping cart icon-->
   <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
<!-- 		Buy Now / ADD to Cart-->
   <a href="contacto.php" class="buy" style="color: white;text-decoration: none;">Cotizar</a>
 </button>
	<!-- End Button buying -->
	
</div>
			
</div>
	
<!-- 	End	Product details   -->
	
	
	
<!-- 	Start product image & Information -->
	
<div class="product-image">
	
	<img src="https://sc01.alicdn.com/kf/HTB1Cic9HFXXXXbZXpXXq6xXFXXX3/200006212/HTB1Cic9HFXXXXbZXpXXq6xXFXXX3.jpg" alt="Omar Dsoky">
	
<!-- 	product Information-->
<div class="info">
	<h2>Descripción</h2>
	<ul>
		<li><strong>Color: </strong>negro</li>
		<li><strong>Tamaño: </strong>1 onz</li>
		<li><strong>Categoria: </strong>litro</li>
		<!--<li><strong>: </strong>2 - 3 feet</li> 
		<li><strong>Blooms in: </strong>Mid‑Summer - Mid‑Fall</li>
		<li><strong>Features: </strong>Tolerates heat</li> -->
	</ul>
</div>
</div>
<!--  End product image  -->


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

	<?php include('footer.php'); ?>
</body>
</html>