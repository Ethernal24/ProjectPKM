<!-- Footer Start -->
<div class="container-fluid text-white-50 footer pt-5 mt-5">
    <div class="container py-5">
        <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(226, 175, 24, 0.5) ;">
            <div class="row g-4">
                <div class="col-lg-3">
                    <a href="#">
                        <h1 class="text-primary mb-0">EcoShop</h1>
                    </a>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative mx-auto">
                        <input class="form-control border-0 w-100 py-3 px-4 rounded-pill" type="number" placeholder="Your Email">
                        <button type="submit" class="btn btn-primary border-0 border-secondary py-3 px-4 position-absolute rounded-pill text-white" style="top: 0; right: 0;">Subscribe Now</button>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="d-flex justify-content-center pt-2">
                        <a class="btn  btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-secondary btn-md-square rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-5 col-md-6">
                <div class="footer-item">
                    <h4 class="text-light mb-3">About US</h4>
                    <p class="mb-4">Merupakan Website Top UP untuk kebutuhan sehari-hari menggunakan voucher, seperti top up pulsa, pembayaran PLN dan juga
                        Pembayaran PDAM.</p>
                </div>
            </div>
            @auth
            <div class="col-lg-2 col-md-6">
                <div class="d-flex flex-column text-start footer-item">
                    <h4 class="text-light mb-3">Account</h4>
                    <a class="btn-link" href="{{ ('/profile') }}">My Account</a>
                    <a class="btn-link" href="{{ ('/profile/history') }}">Order History</a>
                </div>
            </div>
            @endauth

            @guest
            <div class="col-lg-2 col-md-6">
                <div class="d-flex flex-column text-start footer-item">
                    <h4 class="text-light mb-3">Account</h4>
                    <a class="btn-link" href="{{ ('/login') }}">My Account</a>
                    <a class="btn-link" href="{{ ('/login') }}">Order History</a>
                </div>
            </div>
            @endguest

            <div class="col-lg-5 col-md-6">
                <div class="footer-item">
                    <h4 class="text-light mb-3">Contact</h4>
                    <p>Address: Jl. Sutorejo Prima Utara II No.1, Kalisari, Kec. Mulyorejo, Surabaya, Jawa Timur 60112</p>
                    <p>Email: ecoshop@gmail.com</p>
                    <p>Phone: 089517999078</p>
                    <p>Payment Accepted</p>
                    <img src="{!! URL::asset('img/quick-response-code-indonesia-standard-qris-seeklogo-2-white.png ')!!}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Copyright Start -->
<div class="container-fluid copyright py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Ecoshop</a></span>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->

<!-- Back to Top -->
<a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   
