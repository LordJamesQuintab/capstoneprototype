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

<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
