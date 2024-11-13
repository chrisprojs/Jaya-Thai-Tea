@extends('layouts.main')

@section('container')
<!-- Banner 1 Part -->
<div class="row pt-2 pb-2">
  <div class="col-12 d-flex justify-content-center">
    <div class="banner-img position-relative">
      <img src="{{ asset('images/thai_tea_banner1.png') }}" />
      <a href="tel:+6285779083324" class="home-button btn btn-warning">Order Sekarang Juga!</a>
    </div>
  </div>
</div>
<!-- Menu Part -->
@include('partials.menu-template',[
    'products' => $products
  ])

<!-- Banner 2 Part -->
<div class="row pt-2 pb-2 banner-2">
  <div class="col-12 d-flex justify-content-center">
    <img class="banner-img" src="{{ asset('images/thai_tea_banner2.png') }}">
  </div>
</div>
@endsection
