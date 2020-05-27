@extends('layouts.master')

@section('content')


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" style="height: 46rem !important;" src="{{asset('images/banniere.jpg')}}" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" style="height: 46rem !important;" src="{{asset('images/banniere.jpg')}}" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" style="height: 46rem !important;" src="{{asset('images/banniere.jpg')}}" alt="Third slide">
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


  <div class="grid">
    <div class="row" style="margin-top: 3%;">
        <div class="col-md-4">
            <figure class="effect-ravi">
                <img src="{{asset('images/iphone9.png')}}" alt="img17" />
                <figcaption>
                    <h2>Coque Jaune <span>Epsilon</span></h2>
                    <p>
                        <a href="{{ route('products.index')}}"><i class="fa fa-search"></i></a>
                    </p>
                </figcaption>
            </figure>
        </div>
        <div class="col-md-4">
            <figure class="effect-ravi">
                <img src="{{asset('images/iphone10.png')}}" alt="img25" />
                <figcaption>
                    <h2>Coque Space <span>Epsilon</span></h2>
                    <p>
                        <a href="{{ route('products.index')}}"><i class="fa fa-search"></i></a>
  
                    </p>
                </figcaption>
            </figure>
        </div>
        <div class="col-md-4">
            <figure class="effect-ravi">
                <img src="{{asset('images/iphone11.png')}}" alt="img25" style="width: 540px; height: 539px;"/>
                <figcaption>
                    <h2>Coque Space <span>Epsilon</span></h2>
                    <p>
                        <a href="{{ route('products.index')}}"><i class="fa fa-search"></i></a>
  
                    </p>
                </figcaption>
            </figure>
        </div>
    </div>
  </div>


<div class="otherarticle" style="margin-top:3%; margin-bottom:3%;">
  <h2 style="font-size: 1.70rem !important;">Nos collections</h2>
</div>

<div class="grid">
  <div class="row">
      <div class="col-md-4">
          <figure class="effect-ravi">
              <img src="{{asset('images/ss1.jpg')}}" alt="img17" />
              <figcaption>
                  <h2>Sweat White <span>Epsilon</span></h2>
                  <p>
                      <a href="{{ route('products.index')}}"><i class="fa fa-search"></i></a>
                  </p>
              </figcaption>
          </figure>
      </div>
      <div class="col-md-4">
          <figure class="effect-ravi">
              <img src="{{asset('images/ss2.jpg')}}" alt="img25" />
              <figcaption>
                  <h2>Sweat Red <span>Epsilon</span></h2>
                  <p>
                      <a href="{{ route('products.index')}}"><i class="fa fa-search"></i></a>

                  </p>
              </figcaption>
          </figure>
      </div>
      <div class="col-md-4">
          <figure class="effect-ravi">
              <img src="{{asset('images/tshirt3.png')}}" alt="img25" style="width: 540px; height: 539px;"/>
              <figcaption>
                  <h2>Tee-Shirt <span>Epsilon</span></h2>
                  <p>
                      <a href="{{ route('products.index')}}"><i class="fa fa-search"></i></a>

                  </p>
              </figcaption>
          </figure>
      </div>
  </div>
  <div class="row">
      <div class="col">
          <figure class="effect-ravi">
              <img src="{{asset('images/summer.jpg')}}" alt="img25" style="height: 615px; width: 100%;"/>
              <figcaption>
                  <h2>Collection <span>Été</span></h2>
                  <p>
                      <a href="#"><i class="fa fa-search"></i></a>

                  </p>
              </figcaption>
          </figure>
      </div>
      <div class="col">
          <figure class="effect-ravi">
              <img src="{{asset('images/winter.jpg')}}" alt="img25" style="height: 615px; width: 100%;"/>
              <figcaption>
                  <h2>Collection <span>Hiver</span></h2>
                  <p>
                      <a href="#"><i class="fa fa-search"></i></a>

                  </p>
              </figcaption>
          </figure>
      </div>
  </div>
  <div class="row">
      <div class="col">
          <figure class="effect-ravi">
              <img src="{{asset('images/banniere.jpg')}}" alt="img25" style="    height: 600px; width: 100%;"/>
              <figcaption>
                  <h2>L'histoire <span>Epsilon</span></h2>
                  <p>
                      <a href="#"><i class="fa fa-search"></i></a>

                  </p>
              </figcaption>
          </figure>

      </div>
  </div>

</div>

</div>

@endsection

@section('extra-js')
<script>
$('.carouselExampleIndicators').carousel()
</script>
@endsection