<!-- Spinner Start -->
<div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
</div>
<!-- Spinner End -->

<!-- Navbar start-->
<nav class="container-fluid fixed-top">
    <div class="container topbar bg-primary d-none d-lg-block">
        <div class="d-flex justify-content-center">
            <div class="top-info ps-2 ">
                <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a href="#" class="text-white">Jl. Sutorejo Prima Utara II No.1</a></small>
                <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="#" class="text-white">ecoshop@gmail.com</a></small>
            </div>
        </div>
    </div>
    <div class="container px-0">
        <nav class="navbar navbar-light navbar-expand-xl">
            <a href="{{ ('/') }}" class="navbar-brand"><h1 class="text-primary display-6">EcoShop</h1></a>
            <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-primary"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="{{ '/' }}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                    <a href="{{url('/contact') }}" class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
                </div>
                <div class="d-flex m-3 me-0">
                    <button class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search bs-primary"></i></button>
                    @auth
                    <a href="{{url( '/profile') }}" class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4">
                        <i class="fas fa-user bs-primary"></i>
                    </a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4"><i class="fas fa-right-from-bracket"></i></button>
                    </form>
                    @endauth

                    @guest
                    <a class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4" href="{{ route('login') }}"><i class="fas fa-right-to-bracket bs-primary"></i></a>
                    @endguest
                </div>
            </div>
        </nav>
    </div>
</nav>
<!-- Navbar End -->

<!-- Modal Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center">
                <div class="input-group w-75 mx-auto d-flex">
                    <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                    <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Search End -->

<!-- Modal Change Bio Email -->
<div class="modal fade" id="ChangeEmail" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            @auth
            <form action="{{ route('user.update.email') }}" method="POST">
                @csrf
                <div class="modal-header d-flex justify-content-center">
                    <div class="modal-title">Change Email</div>
                    <button type="button" class="btn-close p-3" data-bs-dismiss="modal" aria-label="Close"></button>  
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="form-group w-100">
                        <label class="mb-2">Email</label>
                        <input class="form-control" type="email" name="email" value="{{ Auth::user()->email }}" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-bs-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-primary" value="Update">
                </div>
            </form>
            @endauth
        </div>
    </div>
</div>

<!-- Modal Change Name -->
<div class="modal fade" id="ChangeName" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-2">
            @auth
            <form action="{{ route('user.update.name') }}" method="POST">
                @csrf
                <div class="modal-header d-flex justify-content-center">
                    <div class="modal-title">Change Name</div>
                    <button type="button" class="btn-close p-3" data-bs-dismiss="modal" aria-label="Close"></button>  
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="form-group w-100">
                        <label class="mb-2">Name</label>
                        <input class="form-control" type="text" name="name" value="{{ Auth::user()->name }}" required>
                    </div>  
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-bs-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-primary" value="Update">
                </div>
            </form>
            @endauth
        </div>
    </div>
</div>
<!-- Modal Search End -->