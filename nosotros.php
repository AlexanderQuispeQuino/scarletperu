<!DOCTYPE html>
<html>
<head>
	<title>Nosotros</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>

<style type="text/css">
	.info-mision i, .info-vision i{
		font-size: 90px;
	    color: #ff95ea;
	}

	.info-mision, .info-vision{
		display: flex;
	    flex-direction: column;
	    justify-content: center;
	    align-items: center;
	    width: 30%;
    	text-align: justify;
	}


	.container-parallax-nosotros{
      margin-top:60px;
    }

    .container-parallax-nosotros figure{
      display: flex;
      margin-top: 80px;
      background-color: #75bda7;
      color: white;
      /*padding: 30px;*/
      /*margin: 60px 0px;*/
      margin:0px;
      background-image: url(https://www.aventuracosmetica.com/wp-content/uploads/foto-grupo-junto-al-lago.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center bottom;
      background-attachment: fixed;
      justify-content: center;
      height: 200px;
      align-items: center;
    }


    .nosotros-fondo{
      justify-content: space-evenly;
      align-items: center;
      height: 200px;
      display: flex;
      color: white;
      background: #09b1aa57;
      width: 100%;
    }

    .nosotros-fondo span{
      font-size: 50px;
      font-weight: 600;
      letter-spacing: 5px;
    }



	
	.info-nosotros  p{
		text-align: justify;
	}

	.imagen-nosotros{

		width: 30%;
	}

	.imagen-nosotros{
    	box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
    	width: 100%;

	}

	.container-imagen{
		display: flex;
	    justify-content: center;
	    align-items: center;
	    width: 30%;
	}

	.info-nosotros{
		width: 30%;
	}

	.container-info-imagen{
		display: flex;
    	justify-content: space-evenly;
    	padding-top: 40px;
	}

	@media screen and (max-width: 1024px) {
		
		.info-nosotros, .container-imagen, .info-mision , .info-vision{
			width: 40%;

		}
		
	}

	


		/*    MOVIL*/


	@media screen and (max-width: 500px) {
		.info-mision, .info-vision {
		    width: inherit;
		}

		.container-info-imagen {
    		display: block;	
		}

		.imagen-nosotros{
			width: 100%;
		}

		.container-imagen {
    
    		width: 100%;
		}

		.info-nosotros {
    		width: 100%;
		}

		.categoria span {
        color: white;
        font-size: 25px;
      }
}
</style>
<body>
	<?php include('header.php'); ?>


	<div class="container-parallax-nosotros">
	  <figure>
	    
	    <div class="nosotros-fondo">
	      <span>Nosotros</span>	      
	    </div>
	    
	  </figure>
	
	</div>

	<div class="container-nosotros">
		<div class="container-info-imagen">
			<div class="info-nosotros">
				<span class="title-nosotros">Acerca de nosotros</span>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				
			</div>

			<div class="container-imagen">
				<img class="imagen-nosotros" src="https://www.truseguros.com/wp-content/uploads/2018/02/trabaja-con-nosotros.jpg" alt="">
			</div>
			
		</div>

		<div class="container-mision-vision">
			<div class="info-mision">
				<i class="fas fa-bullseye"></i>
				<span class="title-mision">Misión</span>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				
			</div>
			<div class="info-vision">

				<i class="far fa-eye"></i>
				<span class="title-vision">Visión</span>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				
			</div>
			
		</div>

	</div>

	<?php include('footer.php'); ?>
</body>
</html>