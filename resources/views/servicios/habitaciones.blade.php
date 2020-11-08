 
    @extends('Layout.master')
    @section('content')
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <style>
          h1{
            font-family: 'Lobster', cursive;
            }
    </style>
    <h1>
    
      
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="https://www.enjoyzaragoza.es/wp-content/uploads/2017/03/suite-palafox.jpg">
            <div class="carousel-caption d-none d-md-block">
                <h1> habitaciones tipo Estandar</h1>
                <p>Pregunta por la tuya.</p>
            </div>

            </div>
            <div class="carousel-item">
            <img src="https://eraseunhotel.com/wp-content/uploads/2018/09/galeria-habitaciones-11.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1>Habitacion Ejecutiva </h1>
                <p>Muy comoda para nuestro trabajo.</p>
            </div>


            </div>
            <div class="carousel-item">
            <img src="https://horasminutosysegundos.com/media/k2/items/cache/9b5ae2ddd25a714803c8e62862b17d63_XL.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1>Suit</h1>
                <p>La mejor de todas.</p>
            </div>
            </div>
            

        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
  </h1>
    @stop