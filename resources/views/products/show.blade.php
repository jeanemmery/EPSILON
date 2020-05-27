@extends('layouts.master')

@section('title')
    Epsilon | {{ $product->title }}
@endsection

@section('extra-js')
<script>
  function toggleReplyComment(id)
  {
    let element = document.getElementById('replyComment-' + id);
    element.classList.toggle('d-none');
  }
</script>
@endsection
@section('content')
  <div class="col-md-12">
    <div class="row no-gutters p-3 border rounded d-flex align-items-center flex-md-row mb-4 shadow-sm position-relative">
      <div class="col p-3 d-flex flex-column position-static" id="container-gauche">
        <muted class="d-inline-block mb-2 text-info">
          <div class="badge badge-pill badge-info">{{ $stock }}</div>
          @foreach ($product->categories as $category)
              {{ $category->name }}{{ $loop->last ? '' : ', '}}
          @endforeach
        </muted>
        <h3 class="mb-4">{{ $product->title }}</h3>
        <span>{!! $product->description !!}</span>
        <strong class="mb-4 display-4 text-secondary">{{ $product->getPrice() }}</strong>
        <form>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Taille :</label>
          <select class="form-control" id="taille-form" style="width: 16%;">
            <option>S</option>
            <option>M</option>
            <option>L</option>
            <option>XL</option>
          </select>
        </div>
        </form>
        @if ($stock === 'Disponible')
        <form action="{{ route('cart.store') }}" method="POST">
          @csrf
          <input type="hidden" name="product_id" value="{{ $product->id }}">
          <button type="submit" class="btn btn-success mb-2"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Ajouter au panier</button>
        </form>
        @endif
      </div>
      <div class="col-auto d-lg-block">
        <img src="{{ asset('storage/' . $product->image) }}" id="mainImage" class="img-show" style="width: 450px; height: 450px;">
      </div>
    </div>

    <div class="row no-gutters p-3 border rounded d-flex align-items-center flex-md-row mb-4 shadow-sm position-relative">
      <div class="otherarticle">
        <h2 style="font-size: 1.70rem !important;">Laisser un avis !</h2>
      </div>
    <form action="{{ route('comments.store', $product) }}" method="POST" style="width: 100%;">
      @csrf
      <div class="form-group">
      <label for="content">Commentaire :</label>
      <textarea type="text" name="content" id="content" class="form-control" aria-describedby="content" placeholder="Votre avis..."></textarea>
      <button type="submit" class="btn btn-success mb-2" style="margin-top: 1%;"><i class="far fa-comment" aria-hidden="true"></i>Submit</button>
      </div>
    </form>
    </div>
  </div>

  <div class="col-md-12">
    @forelse ($product->comments as $comment)
       
      <div class="card">
      <div class="card-body">
        {{$comment->content}}
        <div class="d-flex justify-content-between align-items-center">
          <small>Posté le {{$comment->created_at->format('d/m/Y')}}</small>
          <span class="badge badge-primary">{{ $comment->user->name}}</span>
        </div>
      </div>
      </div>

    @foreach ($comment->comments as $replyComment)
    <div class="card ml-5">
      <div class="card-body">
        {{$replyComment->content}}
        <div class="d-flex justify-content-between align-items-center">
          <small>Posté le {{$replyComment->created_at->format('d/m/Y')}}</small>
          <span class="badge badge-primary">{{ $replyComment->user->name}}</span>
        </div>
      </div>
    </div>
    @endforeach

    @auth
    <button class="btn btn-primary mt-2 mb-2" onclick="toggleReplyComment({{$comment->id}})">Répondre</button>
    <form action="{{ route('comments.storeReply', $comment) }}" method="POST" class="mb-3 ml-5 d-none" id="replyComment-{{ $comment->id }}">
      @csrf
      <div class="form-group">
        <label for="replyComment">Ma réponse</label>
        <textarea name="replyComment" class="form-control" id="replyComment" rows="5"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Répondre à ce commentaire</button>
    </form>
    @endauth
    @empty
        <div class="alert alert-info">Aucun commentaire pour ce topic</div>
    @endforelse
      
  </div>

@endsection


@section('extra-js')
  <script>
    var mainImage = document.querySelector('#mainImage');
    var thumbnails = document.querySelectorAll('.img-thumbnail');

    thumbnails.forEach((element) => element.addEventListener('click', changeImage));

    function changeImage(e) {
      mainImage.src = this.src;
    }
  </script>
@endsection
