<!DOCTYPE html>
<html>
<head>
	<title>contacto</title>
	<meta charset="utf-8">
</head>

<style type="text/css">

	.container-formulario{
		margin-top:60px;
		background-image: url(https://2380ie25r0n01w5tt7mvyi81-wpengine.netdna-ssl.com/wp-content/uploads/2016/09/Verdadero_significado_de_la_belleza_joya_life_2.jpg);
    	background-position: right center;
    	display: flex;
	    align-items: center;
	    justify-content: space-around;
	    height: 500px;
	    background-size: cover;
	}
	
	.input{
		color: #8a8a8a;
	    display: block;
	    width: 90%;
	    height: 44px;
	    padding: 5px 5%;
	    /*border: 1px solid #ccc;*/
	    border: 1px solid #332e2e;
	    -moz-border-radius: 27px;
	    -webkit-border-radius: 27px;
	    border-radius: 27px;
	    -moz-background-clip: padding;
	    -webkit-background-clip: padding-box;
	    background-clip: padding-box;
	   /* background-color: #fff;*/
	   	background-color: #ffffffc2;
	    font-family: 'HelveticaNeue','Arial', sans-serif;
	    font-size: 105%;
	    letter-spacing: .8px;
	}

	.input:focus {
	    outline: none;
	    border: 1px solid #ff59dec2;
	    color: #58bff6;
	}

	.enviar{
		float: right;
	    width: 112px;
	    height: 37px;
	    -moz-border-radius: 19px;
	    -webkit-border-radius: 19px;
	    border-radius: 19px;
	    -moz-background-clip: padding;
	    -webkit-background-clip: padding-box;
	    background-clip: padding-box;
	    background-color: #ff59dec2;
	    border: 1px solid #ff59dec2;
	    border: none;
	    color: #fff;
	    font-weight: bold;
	}

	.enviar:hover {
		background-color: #ce60b8b0;
    	border: 1px solid #ff59dec2;
    	color: white;
    	cursor: pointer;
	}

	.formulario{
		display: flex;
	    justify-content: center;
	    align-items: center;
	}

	.title-formulario span{
	    font-size: 50px;
	    color: #211f1f;
	    font-weight: bold;
		
		}





	@media screen and (max-width: 500px) {
		.title-formulario {
		    justify-content: center;
		    display: flex;
		}

		.title-formulario span{
		    font-size: 30px;
			text-align: center;
		}

		.container-formulario {
			flex-direction: column;
   
		}


		.formulario form {
    		text-align: center;
		}
		
		.enviar{

			float: none;
		}
	}









990178301 enrique hernandez


	.mapa{
		margin-top: 50px;
	}
</style>
<body>
	<?php include('header.php'); ?>

	<div class="container-formulario">
		<div class="title-formulario">
				<span >DEJANOS	<br> TU MENSAJE!</span>
			</div>
		
		<div class="formulario">
			
			
			<form  style="min-width: 300px;" action="/contacto.php" method="post">
			  <!-- Nombre:<br> -->
			  <input class="input" type="text" name="nombre" placeholder="nombre"  required="">
			  <br>
			  <!-- Email:<br> -->
			  <input class="input" type="email" name="email" placeholder="email" required="">
			  <br>
			   <!-- Celular:<br> -->
			  <input class="input" type="text" name="celular" placeholder="celular" required="">
			  <br>
			   <!-- Mensaje:<br> -->
<!-- 			  <input class="input" type="text" name="mensaje" placeholder="mi consulta" required=""> -->

			  <textarea class="input" placeholder="Mi consulta" name="message"   rows="4" cols="30" maxlength="100"></textarea>
			  <br><br>
			  <input class="enviar" type="submit" value="Enviar">

			</form> 
		</div>
				
	</div>

	<div class="mapa">
		
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8509.955369569889!2d-77.0415973414975!3d-12.055095386371399!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8c0e8cfe8ef%3A0x8a87f7e9799e4277!2sAv+Paseo+de+la+Rep%C3%BAblica+252%2C+Cercado+de+Lima+15001!5e0!3m2!1ses-419!2spe!4v1537908382090" width="100%" height="400px"  frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>

	<?php include('footer.php'); ?>

</body>
</html>