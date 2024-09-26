<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <!-- navbar section start -->
     <section class="container-fluid py-2 bg-danger d-flex justify-content-evenly align-items-center">
        <a class="navbar-brand text-light fw-bold" href="#">Hz Food</a>
        <div class="bg-light p-2 rounded-2">
              <input class="me-2 border-0" type="search" placeholder="Search" aria-label="Search">
              <i class="fa-solid fa-magnifying-glass"></i>
        </div>
        <div class="icon text-light">
          <a class="text-light" href="./cart.html"><i class="fa-solid fa-cart-shopping mx-2"></i></a>
          <a class="text-light" href="./register.html"> <i class="fa-solid fa-user mx-2"></i></a>
        </div>
     </section>
     <section class="bg-light">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav w-100 d-flex justify-content-center">
                  <li class="nav-item mx-2">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item mx-2">
                    <a class="nav-link" href="../html/about.html">About Us</a>
                  </li>
                  <li class="nav-item mx-2 dropdown">
                    <a class="nav-link dropdown-toggle" href="./category.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     Category
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="./category.html">Bugger</a></li>
                      <li><a class="dropdown-item" href="./category.html">Juice</a></li>
                      <li><a class="dropdown-item" href="./category.html">Pizza</a></li>
                    </ul>
                  </li>
                  <li class="nav-item mx-2">
                    <a class="nav-link" href="#">Service</a>
                  </li>
                  <li class="nav-item mx-2">
                    <a class="nav-link" href="#">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
     </section>
     <!-- navbar section end -->
