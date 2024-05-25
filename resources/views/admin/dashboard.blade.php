<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Mral Adminbord</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


</head>
<body>
    @include('sweetalert::alert')

<div class='container-fluid'>

<div class="row">
<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
  <a class="navbar-brand text-white" href="#">Our Meal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">

      <li class="nav-item container mx-3">
        <a class="nav-link text-white" href="{{ url('/Categories') }}">Categories</a>
      </li>
      <li class="nav-item container mx-3">
        <a class="nav-link text-white" href="{{ url('/') }}">Meals</a>
      </li>
      <li class="nav-item container mx-3">
        <a class="nav-link text-white" href="#">Orders</a>
      </li>
    </ul>

    @if (Route::has('login'))

                    @auth
                    <a href="{{ url('/home') }}" class="nav-item mx-2 text-white"> <button type="button" class="btn btn-dark"> Home </button> </a>
                    @else
                        <a href="{{ route('login') }}" class="nav-item mx-2 text-white">  <button type="button" class="btn btn-dark"> Log in </button> </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-item mx-2 text-white"> <button type="button" class="btn btn-dark"> Register </button> </a>
                        @endif
                    @endauth

       @endif

  </div>
</nav>
</div>

    <div class="row">
        @yield('DynamicContent')
    </div>
</div>


</body>
</html>
