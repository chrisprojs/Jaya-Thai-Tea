<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" type='text/css'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/navbar.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/card.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/home.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/menu-detail.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/footer.css') }}">
  <title>Jaya Thai Tea</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
  <body>
  @include('partials.navbar')
  <div class="container-fluid bg-e5dfc7">
    @yield('container')
  </div>
  @include('partials.footer')
  </body>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</html>