@extends('layouts.main')

@section('container')
  @include('partials.menu-template',[
    'products' => $products
  ])
@endsection