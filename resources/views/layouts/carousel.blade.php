<div id='carousel-position'>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        @foreach($slides as $slide)
        <li data-target="#myCarousel" data-slide-to="{{$slide}}"></li>
        @endforeach
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="img-responsive radius" src="{{asset('gallery/stacjadiag.jpg')}}" alt="First slide">
          <div class="container">
            <div class="carousel-caption text-left">
              <div class="text-karuzela">
              <h1>Diagnostyka</h1>
              <p>Jeżeli dbanie o aspekt techniczny auta to dla Ciebie piorytet, nasza firma pomoże Ci sprawdzić Twoje auto.</p>
              </div>
              <p><a class="btn btn-lg btn-primary" href="{{url("diagnostyka")}}" role="button">Sign up today</a></p>
          </div>
          </div>
        </div>
				@foreach($photos as $photo)
        <div class="carousel-item">
          <img class="img-responsive radius" src="{{$photo->src}}" alt="{{$photo->alt}}">
          <div class="container">
            <div class="carousel-caption">
              <div class="text-karuzela">
              <h1>{{$photo->h1}}</h1>
              <p>{{$photo->p}}</p>
            </div>
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
</div>
