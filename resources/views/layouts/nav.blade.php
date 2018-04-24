<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    @if(count($photos)>=2)
    @foreach($slides as $slide)
    <li data-target="#myCarousel" data-slide-to="{{$slide}}"></li>
    @endforeach
    @else
    @endif
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{$photos[0]['src']}} alt="First slide">
      <div class="container">
        <div class="carousel-caption text-left">
          <div class="text-karuzela">
          <h1>{{$photos[0]['h1']}}</h1>
          <p>{{$photos[0]['p']}}</p>
          </div>
        </div>
      </div>
    </div>
    @foreach(array_slice($photos,1) as $photo)
    <div class="carousel-item">
      <img class="d-block w-100" src="{{$photo['src']}}" alt="{{$photo['alt']}}">
      <div class="container">
        <div class="carousel-caption text-left">
          <div class="text-karuzela">
          <h1>{{$photo['h1']}}</h1>
          <p>{{$photo['p']}}</p>
        </div>
        </div>
      </div>
    </div>
    @endforeach
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Third slide">
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
