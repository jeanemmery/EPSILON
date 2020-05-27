<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Site e-commerce de la marque Epsilon">
    <meta name="author" content="Epsilon">
    @yield('extra-meta')

    <title>Epsilon | Boutique</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    @yield('extra-script')

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- FontAwesome 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon.png') }}"/>

    <!-- Ecommerce App CSS -->
    <link rel="stylesheet" href="{{ asset('css/ecommerce.css') }}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/nav.css')}}">
    <link rel="stylesheet" href="{{asset('css/contact.css')}}">
    <link rel="stylesheet" href="{{asset('css/style-mobile.css')}}">
  </head>

  <body style="background-color: #f2f2f2;">
<div>
  <div class="container" style="max-width: 1600px !important; min-height: 720px;">
    <header class="blog-header pt-3">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
          <a class="text-muted" href="{{ route('cart.index') }}">Panier <span class="badge badge-pill badge-info text-white bg-color" style="background-color: #45007F;">{{ Cart::count() }}</span></a>
        </div>
        <div class="col-4 text-center">
          <a class="blog-header-logo" style="color: #17a2b8 !important;" href="{{ route('products.index') }}"><img src="{{ asset('images/logo2.png') }}" class="img-logo" width="100px" alt=""></a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
          @include('partials.search')
          @include('partials.auth')
        </div>
      </div>
    </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 text-muted" href="{{ route('accueil.index')}}">Accueil</a>
      @foreach (App\Category::all() as $category)
      <a class="p-2 text-muted" href="{{ route('products.index', ['categorie' => $category->slug]) }}">{{ $category->name }}</a>
      @endforeach
    </nav>
  </div>

  @if (session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
  @endif

  @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
  @endif

  @if (count($errors) > 0)
      <div class="alert alert-danger">
        <ul class="mb-0 mt-0">
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
  @endif

  {{-- <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
      <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
      <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
    </div>
  </div> --}}
  @if (request()->input('q'))
    <h6>{{ $products->total() }} résultat(s) pour la recherche "{{ request()->q }}"</h6>
  @endif
  <div class="row my-5">
  @yield('content')
  </div>
</div>


<!-- Site footer -->
<footer class="blog-footer site-footer">
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <h6>Informations</h6>
        <ul class="footer-links">
          <li><a href="{{ route('register') }}">S'inscrire</a></li>
          <li><a href="{{ route('home') }}">Statut commande</a></li>
        </ul>
      </div>

      <div class="col-sm">
        <h6>Aide</h6>
        <ul class="footer-links">
          <li><a href="{{ route('contact.index')}}">Nous contacter</a></li>
        </ul>
      </div>

      <div class="col-sm">
        <h6>A propos de Epsilon</h6>
        <ul class="footer-links">
          <li><a href="#">Actualités</a></li>
        </ul>
      </div>
    </div>
    <hr>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-6 col-xs-12">
        <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by
     <a href="#">Epsilon</a>.
        </p>
      </div>

      <div class="col-md-4 col-sm-6 col-xs-12">
        <ul class="social-icons">
          <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
          <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
</div>
@yield('extra-js')
</body>
</html>
