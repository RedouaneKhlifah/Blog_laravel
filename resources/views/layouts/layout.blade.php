<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <title>Document</title>
</head>
<body>
<nav
      class="navbar navbar-expand-lg bg-light px-lg-3 py-lg-2 shadow-sm sticky-top"
    >
      <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold fs-5 h-font" href="index.php"
          >Pestana</a
        >
        <button
          class="navbar-toggler shadow-none"
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
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <!-- <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="http://localhost/home/rooms"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link me-2" href="http://localhost/home/rooms">Rooms</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-2" href="ttp://localhost/home/rooms">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-2" href="ttp://localhost/home/rooms">Contact Us</a>
            </li> -->
          </ul>
          <div class="d-flex" role="search">


              <a href="<?php  ?>/login/index"><button
              type="submit"
              class="btn btn-outline-dark shadow-none me-lg-3 me-2"
              data-bs-toggle="modal"
              data-bs-target="#loginModel"
            >
              Login
            </button></a>

            <a href="<?php  ?>/login/signup"><button
              type="button"
              class="btn btn-outline-dark shadow-none"
              data-bs-toggle="modal"
              data-bs-target="#registerModel"
            >
              Register
            </button></a>
          




          </div>
        </div>
      </div>
    </nav>
    @yield('content')
   
    
</body>
</html>