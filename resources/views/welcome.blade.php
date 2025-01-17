<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid d-flex align-items-center justify-content-between">
        <div class="col-4 d-flex justify-content-start align-items-center">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('logo.svg') }}" alt="Manga Hinog Logo" style="height: 40px;">
            </a>
        </div>
        <div class="col-4 d-flex justify-content-center align-items-center">
            <ul class="navbar-nav d-flex align-items-center my-2 my-lg-0">
                <li class="nav-item">
                    <a class="nav-link active d-flex align-items-center" aria-current="page" href="{{ url('/') }}" style="gap: 0;">
                        <lottie-player 
                            src="https://lottie.host/f6b09ba4-d924-4500-94f8-8daedc7ad04e/OAcyVftV9M.json" 
                            background="transparent" 
                            speed="1" 
                            style="width: 50px; height: 30px; vertical-align: middle; margin-right: -10px;" 
                            loop 
                            autoplay>
                        </lottie-player>
                        <span style="font-size: 18px; vertical-align: middle; margin-top: 13px;">Home</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 18px; vertical-align: middle; margin-top: 13px;">
                        Browse
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('action') }}">Action</a></li>
                        <li><a class="dropdown-item" href="{{ url('another-action') }}">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ url('something-else') }}">Something else here</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
            <form class="d-flex align-items-center" role="search">
                <input class="form-control" type="search" placeholder="Type your Anime" aria-label="Search">
                <button class="btn bg-black text-white ms-2" type="submit">Search</button>
                @if (session('username'))
                    <div class="dropdown ms-3">
                        <a href="#" class="d-flex align-items-center" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <lottie-player 
                                src="https://lottie.host/25a30cb3-2c11-4ad3-95fa-8743f28b1403/fuMx2pN8sR.json" 
                                background="transparent" 
                                speed="1" 
                                style="width: 40px; height: 30px;" 
                                loop 
                                autoplay>
                            </lottie-player>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <span class="ms-2">{{ session('username') }}</span>
                            <li><a class="dropdown-item" href="{{ url('profile') }}">Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ url('logout') }}">Logout</a></li>
                        </ul>
                    </div>
                @else
                    <a href="{{ url('login') }}" class="ms-3">
                        <lottie-player 
                            src="https://lottie.host/25a30cb3-2c11-4ad3-95fa-8743f28b1403/fuMx2pN8sR.json" 
                            background="transparent" 
                            speed="1" 
                            style="width: 50px; height: 50px;" 
                            loop 
                            autoplay>
                        </lottie-player>
                    </a>
                @endif
            </form>
        </div>
    </div>
</nav>

<!-- Add your h1 heading here -->
<div class="container mt-4 text-center">
    <h1 class="text-black">Featured Manga</h1>
</div>

<div class="container mt-4">
  <div id="mangaCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
          <!-- Repeat this block for each manga -->
          <div class="carousel-item active">
              <div class="relative">
                  <div class="blur-background" style="background-image: url('https://uploads.mangadex.org/covers/1/cover_file_name.256.jpg');"></div>
                  <div class="feature-card">
                      <img src="https://uploads.mangadex.org/covers/1/cover_file_name.256.jpg" alt="Manga Title" class="img-fluid rounded-lg" />
                      <h2 class="text-white">Manga Title</h2>
                      <p class="text-white">Rating: N/A</p>
                      <p class="text-white">Status: Unknown</p>
                      <p class="text-white">Genres: Action/Adventure</p>
                      <p class="text-white">No synopsis available</p>
                  </div>
              </div>
          </div>
          <!-- End of manga block -->
          <div class="carousel-item">
              <div class="relative">
                  <!-- Use another MangaDex cover image here -->
                  <div class="blur-background" style="background-image: url('https://uploads.mangadex.org/covers/2/cover_file_name.256.jpg');"></div>
                  <div class="feature-card">
                      <img src="https://uploads.mangadex.org/covers/2/cover_file_name.256.jpg" alt="Another Manga Title" class="img-fluid rounded-lg" />
                      <h2 class="text-white">Another Manga Title</h2>
                      <p class="text-white">Rating: N/A</p>
                      <p class="text-white">Status: Unknown</p>
                      <p class="text-white">Genres: Action/Adventure</p>
                      <p class="text-white">No synopsis available</p>
                  </div>
              </div>
          </div>
          <!-- Repeat more carousel items as needed -->
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#mangaCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#mangaCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
      </button>
  </div>
</div>

<div class="container mt-4 text-center">
    <h1 class="text-black">Most Popular</h1>
</div>

<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="{{ asset('js/fetchData.js') }}"></script>

</body>
</html>
