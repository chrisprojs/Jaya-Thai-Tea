<a class="card card-box" href="menu/{{ $product->product_id }}">
  <div class="card-img-top">
    <img src="{{ asset('images/menu/'.$product->image) }}" alt="Card image cap">
  </div>
  <div class="card-body">
    <h5 class="card-title">{{$product->name}}</h5>
    <p class="card-text card-desc">{{$product->description}}</p>
  </div>
</a>