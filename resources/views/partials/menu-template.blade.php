<div class="row pt-2 pb-2">
  <div class="col-12 d-flex justify-content-center">
    <h1 class="header-text">Menu</h1>
  </div>
</div>
<div class="row pt-2 pb-2 d-flex justify-content-center">
    @foreach ($products as $product)
      <div class="col-lg-3 col-6 mb-4">
        @include('partials.card',[
            'product' => $product
          ])
      </div>
    @endforeach
</div>