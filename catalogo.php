<!DOCTYPE html>
<html>
<head>
	<title>catalogo</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/masonry.css">
</head>
	<?php include('header.php'); ?>
<body>

  <style type="text/css">

    .container-parallax-catalogo{
      margin-top:60px;
    }

    .container-categoria article{
      padding: 40px 50px;
    }
    .container-parallax-catalogo figure{
      display: flex;
      margin-top: 80px;
      background-color: #75bda7;
      color: white;
      /*padding: 30px;*/
      /*margin: 60px 0px;*/
      margin:0px;
      background-image: url(https://www.cosmoenespanol.com/wp-content/uploads/2018/06/Dec%C3%A1logo-de-belleza-para-ser-la-m%C3%A1s-guapa.jpg);
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
    .catalogo-fondo{
      justify-content: space-evenly;
      align-items: center;
      height: 200px;
      display: flex;
      color: white;
      background: #27948b57;
      width: 100%;
    }

    .catalogo-fondo span{
      font-size: 50px;
      font-weight: 600;
      letter-spacing: 5px;
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



/*    MOVIL*/

    @media screen and (max-width: 500px) {

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
      
    }

  </style>

<!-- 	<h1>Pure CSS Masonry</h1>
<p>By using CSS3 columns, we can easily create a Masonry.js-like layout where random-height blocks fit together.</p> -->

<div class="container-parallax-catalogo">
  <figure>
    
    <div class="catalogo-fondo">
      <span>Catálogo</span>
      
    </div>
    
  </figure>
	
</div>

<div>

    <div class="container-categoria">
    
      <div class="categoria">
        <span>Ordenar por:</span>
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
    <div class="fondocategoria">
      
      <img src="" alt="">
    </div>
    
  </div>
	<article>
		
	

  <section>
  	<img src="https://goo.gl/NiXtS3" alt="" style="width:100%;" />

    <span>titulo</span>
    <p>Lorem ipsum dolor sit amet, consectetur.</p>
    <a class="button-ver" href="detalle.php">Ver más</a>
  </section>
  
  <section>
  	<img src="https://goo.gl/bybkCD" alt="" style="width:100%;" />
    <span>titulo</span>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error aliquid reprehenderit expedita odio beatae est.</p>
    <a class="button-ver" href="detalle.php">Ver más</a>
  </section>
  
  <section>
  	<img src="https://images.clarin.com/2018/02/05/SJ91OSiUM_930x525__1.jpg" alt="" style="width:100%;" />
    <span>titulo</span>
    <p>Lorem ipsum dolor sit amet, consectetur.</p>
    <a class="button-ver" href="detalle.php">Ver más</a>
  </section>
  
  <section>
  	<img src="https://goo.gl/Akx3Oh" alt="" style="width:100%;" />
    <span>titulo</span>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis quaerat suscipit ad.</p>
    <a class="button-ver" href="detalle.php">Ver más</a>
  </section>

  <section>
  	<img src="https://goo.gl/oyBrGp" alt="" style="width:100%;" />
    <span>titulo</span>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem nihil.</p>
    <a class="button-ver" href="detalle.php">Ver más</a>
  </section>


  <section>
  	<img src="https://goo.gl/iUOjWW" alt="" style="width:100%;" />
    <span>titulo</span>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem ut debitis .</p>
    <a class="button-ver" href="detalle.php">Ver más</a>
  </section>
  
  <section>
  	<img src="https://goo.gl/H9xGFt" alt="" style="width:100%;" />
    <span>titulo</span>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    <a class="button-ver" href="detalle.php">Ver más</a>
  </section>
  
  <section>
  	<img src="https://goo.gl/BZ6Uiv" alt="" style="width:100%;" />
    <span>titulo</span>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    <a class="button-ver" href="detalle.php">Ver más</a>
  </section>
  
  <section>
  	<img src="https://goo.gl/TALyhb" alt="" style="width:100%;" />
    <span>titulo</span>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
    <a class="button-ver" href="detalle.php">Ver más</a>
  </section>
  
  <section>
  	<img src="https://goo.gl/QO52Sd" alt="" style="width:100%;" />
    <span>titulo</span>
    <p>Lorem ipsum dolor sit.</p>
    <a class="button-ver" href="detalle.php">Ver más</a>
  </section>
  
  <section>
  	<img src="https://goo.gl/QO52Sd" alt="" style="width:100%;" />
    <span>titulo</span>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    <a class="button-ver" href="detalle.php">Ver más</a>
  </section>
  
  <section>
  	<img src="https://goo.gl/bybkCD" alt="" style="width:100%;" />
    <span>titulo</span>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    <a class="button-ver" href="detalle.php">Ver más</a>
  </section>
    <section>
  	<img src="https://goo.gl/TALyhb" alt="" style="width:100%;" />
    <span>titulo</span>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    <a class="button-ver" href="detalle.php">Ver más</a>
  </section>
  
  <section>
  	<img src="https://goo.gl/QO52Sd" alt="" style="width:100%;" />
    <span>titulo</span>
    <p>Lorem ipsum dolor sit, consectetur adipisicing elit.</p>
    <a class="button-ver" href="detalle.php">Ver más</a>
  </section>
  
  <section>
  	<img src="https://goo.gl/QO52Sd" alt="" style="width:100%;" />
    <span>titulo</span>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
    <a class="button-ver" href="detalle.php">Ver más</a>
  </section>
  
  <section>
  	<img src="https://goo.gl/bybkCD" alt="" style="width:100%;" />
    <span>titulo</span>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    <a class="button-ver" href="detalle.php">Ver más</a>
  </section>

    <section>
  	<img src="https://goo.gl/TALyhb" alt="" style="width:100%;" />
    <span>titulo</span>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit </p>
    <a class="button-ver" href="detalle.php">Ver más</a>
  </section>
  
  <section>
  	<img src="https://goo.gl/QO52Sd" alt="" style="width:100%;" />
    <span>titulo</span>
    <p>Lorem ipsum dolor sit.</p>
    <a class="button-ver" href="detalle.php">Ver más</a>
  </section>
  
  <section>
  	<img src="https://goo.gl/QO52Sd" alt="" style="width:100%;" />
    <span>titulo</span>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
    <a class="button-ver" href="detalle.php">Ver más</a>
  </section>
  
  <section>
  	<img src="https://goo.gl/bybkCD" alt="" style="width:100%;" />
    <span>titulo</span>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    <a class="button-ver" href="detalle.php">Ver más</a>
  </section>

    <section>
  	<img src="https://goo.gl/TALyhb" alt="" style="width:100%;" />
    <span>titulo</span>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit accusamus </p>
    <a class="button-ver" href="detalle.php">Ver más</a>
  </section>
  
  <section>
  	<img src="https://goo.gl/QO52Sd" alt="" style="width:100%;" />
    <span>titulo</span>
    <p>Lorem ipsum dolor sit.</p>
    <a class="button-ver" href="detalle.php">Ver más</a>
  </section>
  
  <section>
  	<img src="https://goo.gl/QO52Sd" alt="" style="width:100%;" />
    <span>titulo</span>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima asperiores </p>
    <a class="button-ver" href="detalle.php">Ver más</a>
  </section>
  
  <section>
  	<img src="https://goo.gl/bybkCD" alt="" style="width:100%;" />
    <span>titulo</span>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus </p>
    <a class="button-ver" href="detalle.php">Ver más</a>
  </section>
  </article>
</div>
	
		
	
<!-- 		<h2>Masonry Gallery</h2>
		<div class="grid effect-2" id="grid">
		    <div class="item"><a href="#"><img src="https://goo.gl/NiXtS3" alt="" /></a></div>
		    <div class="item"><a href="#"><img src="https://goo.gl/bybkCD" alt="" /></a></div>
		    <div class="item"><a href="#"><img src="https://goo.gl/g5jr1N" alt="" /></a></div>
		    <div class="item"><a href="#"><img src="https://goo.gl/Akx3Oh" alt="" /></a></div>
		    <div class="item"><a href="#"><img src="https://goo.gl/oyBrGp" alt="" /></a></div>
		    <div class="item"><a href="#"><img src="https://goo.gl/iUOjWW" alt="" /></a></div>
		    <div class="item"><a href="#"><img src="https://goo.gl/H9xGFt" alt="" /></a></div>
		    <div class="item"><a href="#"><img src="https://goo.gl/BZ6Uiv" alt="" /></a></div>
		    <div class="item"><a href="#"><img src="https://goo.gl/TALyhb" alt="" /></a></div>
		    <div class="item"><a href="#"><img src="https://goo.gl/QO52Sd" alt="" /></a></div>
		    <div class="item"><a href="#"><img src="https://goo.gl/NiXtS3" alt="" /></a></div>
		    <div class="item"><a href="#"><img src="https://goo.gl/bybkCD" alt="" /></a></div>
		</div> -->
	
<!-- 

	<script type="text/javascript">
		
		$("#grid2 img").each(function() {
		  var $this = $(this);
		  $this.wrap('<div class="item"><a></a></div>');
		  $("a").removeAttr("href");
		});
		$("#grid2").addClass("effect-2");

		$(window).load(function() {
		  var $container = $(".grid");
		  // initialize
		  $container.masonry({
		    //columnWidth: 200,
		    itemSelector: ".item"
		  });
		  $(".item > a").removeAttr("href");
		});

	</script> -->

</body>
	<?php include('footer.php'); ?>
</html>