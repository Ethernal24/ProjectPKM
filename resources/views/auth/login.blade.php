<x-loginlayout>
    <x-slot:title>Login</x-slot>
    <header class="login-page">
        <div class="title"><a class="title" href="{{ url('/') }}">
            <h1 class="first text-third">Eco</h1>
            <h1 class="next">Shop</h1>
            </a>
        </div>
        <div class="container px-0 konten ">
            <h2 class="login-title">Login</h2>
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-group d-flex mx-auto w-50">
                    <h5 class="title-email">E-mail</h5>
                    <div class="input-group d-flex mx-auto">
                        <input class="form-control" type="email" name="email" placeholder="Masukkan E-mail" required>
                    </div>
                </div>
                <div class="input-group d-flex mx-auto w-50">
                    <h5 class="title-email">Password</h5>
                    <div class="input-group d-flex mx-auto ">
                        <input class="form-control" type="password" name="password" placeholder="Masukkan Password" aria-describedby="eyes-icon" id="password" required>
                        <span id="eyes-icon" class="input-group-text p-3">
                            <i id="togglePassword" class="fa fa-eye"></i>
                        </span>
                    </div>
                </div>
                <div class="reset-password mx-auto w-50">
                    <span>Forgot Password?</span>
                    <a href="#">Reset Password</a>
                </div>
                <button type="submit" class="btn btn-primary to-login w-50 mx-auto py-2 border-0 border-secondary position-relative d-flex rounded-pill text-white text-center justify-content-center">Login</button>
                <div class="register mx-auto w-50 justify-content-end">
                    <span>Don't have account?</span>
                    <a href="{{ url('/register') }}">Register Now</a>
                </div>
            </form>
        </div>
    </header>
</x-loginlayout>