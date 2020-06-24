@extends('layouts.app')

@section('content')
<div class="container">
<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>Album example</h1>
      <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
      <p>
        <a href="#" class="btn btn-primary my-2">Main call to action</a>
        <a href="#" class="btn btn-secondary my-2">Secondary action</a>
      </p>
    </div>
  </section>

<h2>Category</h2>
@foreach(App\Category::all() as $cat)
    <a href="{{ route('product.list', [$cat->slug]) }}" class="btn btn-secondary">{{ $cat->name }}</a>
@endforeach
  <div class="album py-5 bg-light">
    <div class="container">
    <h2 class="m-2">Products</h2>
      <div class="row">

    @foreach($products as $product)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="{{ Storage::url($product->image) }}" class="img-fluid">
            <div class="card-body">
            <p><b>{{ $product->name }}</b></p>
              <p class="card-text">{{ Str::limit($product->description, 100) }}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="{{route('product.view',[$product->id])}}"><button type="button" class="btn btn-sm btn-outline-success">View</button></a>
                  <a href="{{ route('add.cart', [$product->id]) }}" type="button" class="btn btn-sm btn-outline-primary">Add to cart</a>
                </div>
                <small class="text-muted">${{ $product->price }}</small>
              </div>
            </div>
          </div>
        </div>
    @endforeach
      </div>
    </div>
  </div>

</main>
<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Back to top</a>
    </p>
    <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
    <p>New to Bootstrap? <a href="https://getbootstrap.com/">Visit the homepage</a> or read our <a href="/docs/4.4/getting-started/introduction/">getting started guide</a>.</p>
  </div>
</footer>
</div>
@endsection
