<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Rental Mobil</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('frontend/css/styles.css') }}" rel="stylesheet }}" />
    <link rel="{{ asset('frontend/stylesheet') }}" href="css/custom.css }}" />
  </head>
  <body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="{{ route('homepage') }}">RentCar</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            {{-- @auth
              <li class="nav-item">
                <a class="nav-link active" href="{{ route('admin.dashboard.index') }}">Dashboard</a>
              </li>
            @else
              <li class="nav-item">
                <a class="nav-link active" href="{{ route('homepage') }}">Home</a>
              </li>
            @endauth --}}
            @auth
                @if(auth()->user()->is_admin)
                <li class="nav-item">
                  <a class="nav-link active" href="{{ route('admin.dashboard.index') }}">Dashboard</a>
                </li>
                @else
                <li class="nav-item">
                  <a class="nav-link active" href="{{ route('homepage') }}">Home</a>
                </li>
                @endif
            @endauth
            


            <li class="nav-item">
              <a class="nav-link" href="{{ route('contact') }}">Contact</a>
            </li>
            @auth
              <li class="nav-item">
                {{-- <a class="nav-link" href="{{ route('logout') }}">Logout</a> --}}
                <a class="nav-link" onclick="document.getElementById('logout-form').submit()" href="#">
                  <i class="fas fa-logout fa-fw"></i>
                  <span>Logout</span></a>
                  <form id="logout-form" action="{{route('logout')}}" method="post">
                      @csrf
                  </form>
              </li>
            @else
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
              </li>
            @endauth
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header-->
    @yield('content')
    <!-- Footer-->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">
          Copyright &copy; RentCar 2022
        </p>
      </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="{{ asset('frontend/js/bootstrap.js') }}"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('frontend/js/scripts.js') }}"></script>
  </body>
</html>
