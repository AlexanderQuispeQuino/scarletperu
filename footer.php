<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<style type="text/css" media="screen">
	.container-footer{
		background-color: #fff;
    	box-shadow: 1px 1px 4px 0 rgba(0,0,0,.1);
    	/*height: 150px;*/
    	display: flex;
    	justify-content: space-around;
    	align-items: center;

	}

	.redes-sociales ul a i{
		color: black;
	}
	.redes-sociales ul a i:hover{
		color: #ff59de;
		
	}


	.redes-sociales ul{
		padding: 0;
	    width: 100%;
	    justify-content: space-around;
	    display: flex;
	}

	.container-redes-sociales{
		height: 100%;
	    justify-content: space-evenly;
	    flex-direction: column;
	    display: flex;
	}

	.container-contacto{
		display: flex;
    	flex-direction: column;
    	height: 100%;
    	justify-content: space-evenly;
	}

	.container-info{
		display: flex;
	    flex-direction: column;
	    height: 100%;
	    justify-content: space-evenly;
	}

	.container-info a{
		text-decoration: none;
    	color: black;
	}

	.container-contacto .title, .container-info .title, .container-redes-sociales .title{
		font-size: 25px;
    	color: #8e8b8bed;
    	font-weight: 700;
	}

	.container-footer div{
		margin: 30px 0px;
	}

	@media screen and (max-width: 800px) {


		
	}

	@media screen and (max-width: 500px) {
		.container-footer{
			display: block;
    		text-align: center;
		}

		.redes-sociales ul {
		    padding: 0;
		    width: 100%;
		    justify-content: space-evenly;
		    display: flex;
		}

		.logo-footer a img{
			margin-top: 20px;
		}
		
		.redes-sociales{
			margin: 0px;
		}

		.container-footer .container-redes-sociales {
    		margin:0px;
		}
		
	}


</style>
<footer>
	<div class="container-footer">
		<div class="logo-footer">
			<a href=""><img style="height: 50px;" src="images/logo.png" alt="logo"></a>	
		</div>

		
			
			<div class="container-contacto">
				<span class="title">Contacto</span><br>
				<span><strong>Oficina:</strong> cercado de lima lima</span><br>
				<span><strong>Dirección:</strong> cuadra cuadraaaaa </span> 				
			</div>
			<div class="container-info">
				<span class="title">Informes</span><br>
				<a href="TEL: 999999"><strong>Teléfono:</strong> <span>999999</span></a><br>
				<a href="mailto:info@cosmetica.com"><strong>  E-mail:</strong> <span>info@cosmetica.com</span></a>	
			</div>
		
		<div class="container-redes-sociales">
			<span class="title">Redes Sociales</span><br>
			<div class="redes-sociales"  style="margin: 0px;">
				<ul>
					<a href=""><i class="fab fa-facebook-f"></i></a>
					<a href=""><i class="fab fa-instagram"></i></a>
					<a href=""><i class="fab fa-youtube"></i></a>
				</ul>
		 	</div>
		</div>

	</div>
</footer>