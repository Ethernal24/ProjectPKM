<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>{{ $title }}</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{!! URL::asset('lib/lightbox/css/lightbox.min.css')!!}" rel="stylesheet">
        <link href="{!! URL::asset('lib/owlcarousel/assets/owl.carousel.min.css')!!}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        {{-- <link href="css/bootstrap.min.css" rel="stylesheet"> --}}
        <link rel="stylesheet" href="{!! URL::asset('css/bootstrap.min.css') !!}">

        <!-- Template Stylesheet -->
        <link href="{!! URL::asset('css/style.css')!!}" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css" integrity="sha512-DIW4FkYTOxjCqRt7oS9BFO+nVOwDL4bzukDyDtMO7crjUZhwpyrWBFroq+IqRe6VnJkTpRAS6nhDvf0w+wHmxg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


        <script>
            function rupiah(x) {
                return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            }
        </script>
    </head>
    <body class="{{ request()->is('shop-detail') || ('user')  ? 'shop-detail' : '' }}">
        <x-navbar></x-navbar>
        <main>
            {{ $slot }}
        </main>
        <!-- JavaScript Libraries -->
        <script src="{!! URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js')!!}"></script>
        <script src="{!! URL::asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js')!!}"></script>
        <script src="{!! URL::asset('lib/easing/easing.min.js')!!}"></script>
        <script src="{!! URL::asset('lib/waypoints/waypoints.min.js')!!}"></script>
        <script src="{!! URL::asset('lib/lightbox/js/lightbox.min.js')!!}"></script>
        <script src="{!! URL::asset('lib/owlcarousel/owl.carousel.min.js')!!}"></script>
        <script src="https://kit.fontawesome.com/445c1285d8.js" crossorigin="anonymous"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



        <!-- Template Javascript -->
        <script src="{!! URL::asset('js/main.js')!!}"></script>
        <script src="{!! URL::asset('js/datacheck.js')!!}"></script>
        <script src="{!! URL::asset('js/datacheck-pln.js')!!}"></script>
        <script src="{!! URL::asset('js/invoicevalidation.js')!!}"></script>
        <x-footer></x-footer>

        <script>
            $(document).ready(function(){
                $("[rel='tooltip']").tooltip();
            });
        </script>
    </body>
</html>
    

