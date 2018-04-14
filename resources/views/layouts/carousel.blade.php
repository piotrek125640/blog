<div id='carousel-position'>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        @if(count($photos)>=2)
        @foreach($slides as $slide)
        <li data-target="#myCarousel" data-slide-to="{{$slide}}"></li>
        @endforeach
        @else
        @endif
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="img-responsive radius" src="{{$photos[0]['src']}}" alt="First slide">
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
          <img class="img-responsive radius" src="{{$photo['src']}}" alt="{{$photo['alt']}}">
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
</div>
