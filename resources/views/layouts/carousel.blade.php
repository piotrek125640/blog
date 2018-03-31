<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="" src="http://www.gsfdcy.com/data/img/29/1454740-euro-truck-simulator-2-wallpaper.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption text-left">
              <h1>Diagnostyka</h1>
              <p>Jeżeli dbanie o aspekt techniczny auta to dla Ciebie piorytet, nasza firma pomoże Ci sprawdzić Twoje auto.</p>
              <p><a class="btn btn-lg btn-primary" href="{{url("diagnostyka")}}" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
				@foreach($photos as $photo)
        <div class="carousel-item">
          <img class="" src="{{$photo->src}}" alt="{{$photo->alt}}">
          <div class="container">
            <div class="carousel-caption">
              <h1>{{$photo->h1}}</h1>
              <p>{{$photo->p}}</p>
              <p><a class="btn btn-lg btn-primary" href="{{url("transport")}}" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
				@endforeach
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
</div>
