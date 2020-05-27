@extends('layouts.master')

@section('title')
    Epsilon | Boutique
@endsection

@section('content')
  @foreach ($products as $product)
    <div class="col-sm" style="max-width: 33%;">
      <div class="row no-gutters border rounded d-flex align-items-center flex-md-row mb-4 shadow-sm position-relative">
        <div class="col p-3 d-flex flex-column position-static shadow-sm">
          <div class="test">
            <img src="{{ asset('storage/' . $product->image) }}" class="img-product" alt="image produit" style="width: 490px; height: 490px;">
          </div>
          <div class="text-text p-2 m-2">
          <small class="d-inline-block text-info mb-2">
            @foreach ($product->categories as $category)
                {{ $category->name }}{{ $loop->last ? '' : ', '}}
            @endforeach
          </small>
          <h5 class="mb-0">{{ $product->title }}</h5>
          <p class="mb-3 text-muted">{{ $product->subtitle }}</p>
          <strong class="display-4 mb-4 text-secondary">{{ $product->getPrice() }}</strong>
          </div>
          <a href="{{ route('products.show', $product->slug) }}" class="stretched-link btn btn-info"><i class="fa fa-location-arrow" aria-hidden="true"></i> Consulter le produit</a>
        </div>
      </div>
    </div>
  @endforeach
  {{ $products->appends(request()->input())->links() }}
@endsection
