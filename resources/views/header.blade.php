<nav class="navbar navbar-expand-md bg-light fixed-top shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">
            <div class="d-flex">
                <img src="{{asset('Image/logo2.png')}}" alt="Company Logo" style="width:40px;" class="rounded-pill">
                <h5 class="my-2" style="color: rgba(30, 208, 112, 1)">Furrever Safe</h5>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <div class="ms-auto">
                <form action="{{route('home')}}">
                    @csrf
                    <div class="d-flex">
                        <input class="form-control" name="search" type="search" placeholder="Search.." aria-label="Search" value="{{ request('search') }}">
                        <button class="btn rounded-pill ms-2" style="background-color: rgba(30, 208, 112, 1)" type="submit"><i class="bi bi-search"></i></button>
                    </div>
                </form>
            </div>
        
                @auth
                    <ul class="navbar-nav list-group ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('register_sitter')}}">Become a pet sitter</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Welcome back, {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{route('dashboard')}}"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form action="{{route('logout')}}" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                @else
    
                    <div class="ms-auto d-flex">
                        <a class="btn" href="{{route('login')}}">Become a pet sitter</a>
                        <button class="btn" type="button" style="color: rgba(30, 208, 112, 1)"><a class="nav-link" href="{{route('login')}}">LOGIN</a></button>
                    </div>
    
                @endauth
               
        </div>
    </div>
</nav>

