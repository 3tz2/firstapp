<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>our snacks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row bg-img">
                <nav class="navbar navbar-expand-lg bg-dark" dir='ltr'>
                    <div class="container-fluid">
                    <a href="#" class="navbar-brand text-warning">Our Snacks</a>
                    <button class="navbar-toggler" type="button" data-ds-toggle="#navbarNav"
                    aria-expanded="false" aria-label="Toggle Navigation" aria-controls="navbarNav">
                     <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end d-flix" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item mx-3"><a href="#" class="nav-link active text-warning" aria-current="page">الطلبات</a></li>
                            <li class="nav-item mx-3"><a href="#" class="nav-link text-warning ">Features</a></li>
                            <li class="nav-item mx-3"><a href="#" class="nav-link text-warning">Pricing</a></li>
                            <li class="nav-item mx-3"><a href="#" class="nav-link text-warning">Disabled</a></li>
                            @if (Route::has('login'))
                            @auth
                            <li class="nav-item mx-3">
                                <a href="{{'/home'}}" class="nav-link">home</a>
                            </li>
                                @else
                                <li class="nav-item mx-3">
                                    <a href="{{route('login')}}" class="nav-link text-warning">Login</a>
                                </li>
                                @if (Route::has('register'))
                                <li class="nav-item mx-3">
                                    <a href="{{route('register')}}" class="nav-link text-warning">Register</a>
                                </li>
                                @endif
                            @endauth

                        @else

                        @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
  <div class="row my-3 justify-content-between mx-1 p-2">
    <div class="card py-2" style="width: 18rem;">
        <img src="{{ asset('img/burger.jpg.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">BBQ</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
         <div class="row justify-content-center">
            <a href="#" class="btn btn-warning">order now</a>
         </div>
        </div>
      </div>
      <div class="card py-2" style="width: 18rem;">
        <img src="{{ asset('img/bbq.jpg.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"> Burgers</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
         <div class="row justify-content-center">
            <a href="#" class="btn btn-warning">order now</a>
         </div>
        </div>
      </div>
      <div class="card py-2" style="width: 18rem;">
        <img src="{{ asset('img/close-up-fried-chicken-fries.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Pizza </h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
         <div class="row justify-content-center">
            <a href="#" class="btn btn-warning">order now</a>
         </div>
        </div>
      </div>
      <div class="card py-2" style="width: 18rem;">
        <img src="{{ asset('img/closeup-shot-cajun-basket-with-sauce-chips.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Rice </h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
         <div class="row justify-content-center">
            <a href="#" class="btn btn-warning">order now</a>
         </div>
        </div>
      </div>



  </div>
</body>

</html>
