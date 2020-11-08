
 
    @extends('Layout.master')
    @section('content')


    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <style>
          h1{
            font-family: 'Lobster', cursive;
            }
    </style>

      <h1> Bienvenido al hotel La Riviera </h1>
     
            
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="https://cdn.forbes.co/2020/02/sofitel-legend-santa-clara-outdoor-pool.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="https://ik.imagekit.io/grgdihc3l/getmedia/7c8a28dc-786d-470b-8169-3333f2e2b9fa/St-Regis-Resort-Pool-1440x900.jpg.aspx?width=1440&height=900&ext=.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="https://cdn.forbes.com.mx/2018/11/st.jpg" class="d-block w-100" alt="...">
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
      
        </div>

    @stop