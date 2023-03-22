<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
    <!-- MDBootstrap -->
    <script src="https://kit.fontawesome.com/825719bb21.js" crossorigin="anonymous"></script>
    <!-- MDB -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
    ></script>
    <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">

    <script scr="{{asset('js/mdb.min.js')}}"></script>
    <title>Desarrollo web profesional</title>
</head>
<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>
            <div class="collapse navbar-collapse" id="navbarExample01">
                          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item active">
                              <a class="nav-link active" aria-current="page" href="http://127.0.0.1:8000/">Home</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Serie</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Peliculas</a>
                            </li>
                            @auth
                              <div class="d-flex aling-items-center">
                                <a href="{{route ('post.create')}}" class="btn btn-link px-3 me-2">
                                  <i class="fas fa-plus-circle"></i>Crear Post
                                </a>
                              </div>
                            @endauth
                            @auth
                            <form action="{{route('logout')}}" method="POST">
                              @csrf
                              <button type="submit" class="btn btn-link px-3 me-2">LogOut</button>
                            </form>
                            @endauth
                      
                            @guest
                            <li class="nav-item">
                              <a class="nav-link" href="http://127.0.0.1:8000/login">Log In</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="http://127.0.0.1:8000/formulario">Sing In</a>
                            </li>
                            @endguest
                            

                            </li>
                          </ul>
                        </div>
          </div>
        </nav>
        <!-- Navbar -->
        <!-- Background image -->
        <div
        class="p-5 text-center bg-image"
        style="background-image: url('https://i.blogs.es/259581/one-piece/1366_2000.jpeg');
               height: 300px;">
          <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="text-white">
                <h1 class="mb-3">One Piece</h1>
                <h4 class="mb-3">Creador: Eiichirō Oda</h4>
                <a class="btn btn-outline-light btn-lg" href="#!" role="button"
                >Live action</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="slider">
          <div class="slide-track">
            <div class="slide">
              <img src="https://ramenparados.com/wp-content/uploads/2016/03/one-piece-strong-1000x600.png" alt="">
            </div>
            <div class="slide">
              <img src="https://i.blogs.es/040680/one-piece-film-red-mexico-fecha-estreno-cinepolis/1366_2000.jpeg" alt="">
            </div>
            <div class="slide">
              <img src="https://occ-0-1555-784.1.nflxso.net/dnm/api/v6/6AYY37jfdO6hpXcMjf9Yu5cnmO0/AAAABQqi72f3QUPYXG3NR4SOt8sZIN4UY8Wc8J5i1c3VqLZP-2wZcXqS97PfNJ7XbYRMxmMZtT4nFaLODb5O4qPI4fdye89k5qJ0TsSV.jpg?r=d98" alt="">
            </div>
            <div class="slide">
              <img src="https://tierragamer.com/wp-content/uploads/2019/02/one-piece-1.jpg" alt="">
            </div>
            <div class="slide">
              <img src="https://occ-0-55-32.1.nflxso.net/dnm/api/v6/6gmvu2hxdfnQ55LZZjyzYR4kzGk/AAAABbcr6onkENvQAe-SmFIFKk9FAh-PDdsKBEQrpvToUYYtpAY7hIeTyCmQR3_VkZ8rQtqwG9up034yfiHhfTPdM6VzJlYDkhiVnrto.jpg?r=c83" alt="">
            </div>
            <div class="slide">
              <img src="http://koi-nya.net/img/subidos_posts/2014/07/One-Piece-3D2Y-Ace-no-Shi-wo-Koete-Luffy-Nakama-to-no-Chikai.jpg" alt="">
            </div>
          </div>
        </div>
        <!-- Background image -->
      </header>
      <div class="container mt-5 mb-5">
                <h1>@yield('titulo')</h1>
      
        <hr class="hr">
      
        @yield('contenido')
        
      </div>
      <footer class="bg-success text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
          <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #3b5998;"
        href="#!"
        role="button"
        ><i class="fab fa-facebook-f"></i
          ></a>
          
          <!-- Twitter -->
          <a
          class="btn text-white btn-floating m-1"
          style="background-color: #55acee;"
          href="#!"
          role="button"
        ><i class="fab fa-twitter"></i
          ></a>
          
          <!-- Google -->
          <a
          class="btn text-white btn-floating m-1"
        style="background-color: #dd4b39;"
        href="#!"
        role="button"
        ><i class="fab fa-google"></i
          ></a>
          
          <!-- Instagram -->
          <a
          class="btn text-white btn-floating m-1"
          style="background-color: #ac2bac;"
          href="#!"
        role="button"
        ><i class="fab fa-instagram"></i
          ></a>
          
      <!-- Linkedin -->
      <a
      class="btn text-white btn-floating m-1"
        style="background-color: #0082ca;"
        href="#!"
        role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>
      <!-- Github -->
      <a
      class="btn text-white btn-floating m-1"
      style="background-color: #333333;"
      href="#!"
      role="button"
      ><i class="fab fa-github"></i
        ></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->
    
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Copyright:
      <a class="text-white" href="">Bernardo Paredes De Santos</a>
    </div>
    <!-- Copyright -->
</footer>
</body>
</html>