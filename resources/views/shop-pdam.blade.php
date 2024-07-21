@if($errors->any())
<script>
    alert('{{$errors->first()}}') 
</script>
@endif

<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Single Page Header start -->
    <div class="container-fluid page-header py-5">
        <div class="telkomsel-page d-flex position-relative mx-auto">
            <div class="rounded position-relative fruite-item border border-secondary bg-white shadow">
                <div class="fruite-img">
                    <img src="{!! URL::asset('/img/hero-img-1.png')!!}" class="img-fluid w-100 rounded-top" alt="">
                </div>
            </div>
        </div>
        
    </div>
    <!-- Single Page Header End -->

    <!-- Single Product Start -->
    <div class="container-fluid py-5 mt-5">
        <div class="container py-5">
            <div class="container bg-white my-4 py-2 rounded shadow">
                {{-- Check Data Menggunakan JS bernama datacheck  --}}
                <form id="noPDAM-form" method="POST" action="{{ url('/shop/pdam/check') }}" class="input-group w-75 mx-auto d-flex py-2 my-4">
                    @csrf
                    <input type="text" id="noPDAM-input" class="form-control p-3" name="no_meteran_pdam" placeholder="Enter data">
                    <button type="submit" name="submit"><i class="fa fa-search"></i></button>
                </form>

                <div id="errorMessagePdam" class="hidden">
                    <p class="d-flex justify-content-center">Nomor PDAM tidak ada, masukkan nomer yang valid</p>
                </div> 
            
                <div class="row g-4 mb-5 py-4 px-5 mx-4 my-4 hidden" id="noPDAM-Detail" >
                    <h4 class="nominal d-flex ">Data Anda</h4>
                    <div class="col-lg-12">
                        <div class="tab-content mb-5">
                            <div class="row ">
                                <div class="description col-sm-6 col-lg-6 col-xl-6">
                                    <span class="name">No. Pelanggan</span>
                                </div>

                                <div class="description col-sm-6 col-lg-6 col-xl-6">    
                                    <input class="name" id="noPDAM-Detail-Input" name="cust_pdam_no" readonly></input>
                                    <input class="name" id="noPDAM-ID" name="cust_pdam_id" readonly></input>
                                </div>

                                <div class="description col-sm-6 col-lg-6 col-xl-6">    
                                    <span class="name">Alamat</span>
                                </div>

                                <div class="description col-sm-6 col-lg-6 col-xl-6"> 
                                    <input class="name" id="alamatPDAM" name="cust_pdam_alamat" readonly></input>
                                </div>

                                <div class="description col-sm-6 col-lg-6 col-xl-6">
                                    <span class="name">Periode</span>
                                </div>

                                <div class="description col-sm-6 col-lg-6 col-xl-6">    
                                    <span class="name" id="tagihanPDAM"name="tagihan_pdam_periode"></span>
                                </div>

                                <div class="description col-sm-6 col-lg-6 col-xl-6">
                                    <span class="name fw-bold">Periode</span>
                                </div>

                                <div class="description col-sm-6 col-lg-6 col-xl-6">    
                                    <span class="name fw-bold" id="periodePDAM" name= "tagihan_pdam_periode" ></span>
                                </div>

                                {{-- <div class="description py-5 justify-content-center">
                                    <img src="{!! URL::asset('/img/qr-code.png')!!}" alt="" class="qr">
                                </div> --}}

                                <div class="container bg-white mb-4 rounded py-4">
                                    <h5 class="mb-4">Voucher</h5>
                                    <button class="btn btn-primary text-white justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#voucher">Choose Voucher</button>
                                </div>

                                <div class="description col-sm-6 col-lg-6 col-xl-6">
                                    <span class="name fw-bold">Voucher yang Dipilih :</span>
                                </div>

                                <div class="description col-sm-6 col-lg-6 col-xl-6">    
                                    <span class="name fw-bold">Rp 20.000</span>
                                </div>
    
                                <div class="container bg-white mb-4 rounded py-4">
                                    <div class="justify-content-between d-flex w-100">
                                        <h5 class="mb-4">Total Setelah Diskon : </h5>
                                        <span >Rp 130.000</span>
                                    </div>
                                    <a href="{{ ('/shop-detail/invoice-pdam') }}"  class="btn btn-primary border-0 border-secondary py-2 px-2 rounded text-white justify-content-center w-100">Pay Now</a>
                                </div>
                            </div>    

                            {{-- <div class="tab-pane" id="nav-mission" role="tabpanel" aria-labelledby="nav-mission-tab">
                                <div class="d-flex">
                                    <img src="img/avatar.jpg" class="img-fluid rounded-circle p-3" style="width: 100px; height: 100px;" alt="">
                                    <div class="">
                                        <p class="mb-2" style="font-size: 14px;">April 12, 2024</p>
                                        <div class="d-flex justify-content-between">
                                            <h5>Jason Smith</h5>
                                            <div class="d-flex mb-3">
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <p>The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic 
                                            words etc. Susp endisse ultricies nisi vel quam suscipit </p>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <img src="img/avatar.jpg" class="img-fluid rounded-circle p-3" style="width: 100px; height: 100px;" alt="">
                                    <div class="">
                                        <p class="mb-2" style="font-size: 14px;">April 12, 2024</p>
                                        <div class="d-flex justify-content-between">
                                            <h5>Sam Peters</h5>
                                            <div class="d-flex mb-3">
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <p class="text-dark">The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic 
                                            words etc. Susp endisse ultricies nisi vel quam suscipit </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="nav-vision" role="tabpanel">
                                <p class="text-dark">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                                    amet diam et eos labore. 3</p>
                                <p class="mb-0">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.
                                    Clita erat ipsum et lorem et sit</p>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <h1 class="fw-bold mb-0">Other Product</h1>
            <div class="vesitable">
                <div class="owl-carousel vegetable-carousel justify-content-center">
                    <div class="border border-primary rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                            <img src="{!! URL::asset('/img/xl.png')!!}" class="img-fluid w-100 rounded-top" alt="">
                        </div>
                        <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Pulsa</div>
                        <div class="p-2 pb-0 rounded-bottom">
                            <h4 class="justify-content-center w-100 d-flex">XL</h4>
                        </div>
                    </div>

                    <div class="border border-primary rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                            <img src="{!! URL::asset('/img/hero-img-2.png')!!}" class="img-fluid w-100 rounded-top" alt="">
                        </div>
                        <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Pulsa</div>
                        <div class="p-2 pb-0 rounded-bottom">
                            <h4 class="justify-content-center w-100 d-flex">Telkomsel</h4>
                        </div>
                    </div>

                    <div class="border border-primary rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                            <img src="{!! URL::asset('/img/pln.png')!!}" class="img-fluid w-100 rounded-top" alt="">
                        </div>
                        <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">PLN</div>
                        <div class="p-2 pb-0 rounded-bottom">
                            <h4 class="justify-content-center w-100 d-flex">PLN Prabayar</h4>
                        </div>
                    </div>

                    <div class="border border-primary rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                            <img src="{!! URL::asset('/img/three.png')!!}" class="img-fluid w-100 rounded-top" alt="">
                        </div>
                        <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Pulsa</div>
                        <div class="p-2 pb-0 rounded-bottom">
                            <h4 class="justify-content-center w-100 d-flex">Three</h4>
                        </div>
                    </div>

                    <div class="border border-primary rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                            <img src="{!! URL::asset('/img/indosat.png')!!}" class="img-fluid w-100 rounded-top" alt="">
                        </div>
                        <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Pulsa</div>
                        <div class="p-2 pb-0 rounded-bottom">
                            <h4 class="justify-content-center w-100 d-flex">Indosat</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single Product End -->

    <!-- Modal Voucher -->
    <div class="modal fade" id="voucher" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title d-flex justify-content-center w-100" id="exampleModalLabel">My Voucher</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center">
                    <div class="d-flex align-items-center w-100 justify-content-center flex-column gap-4">
                        <button class="btn text-dark align-items-center border-2 border-primary w-50 d-flex justify-content-center gap-4">
                            <img class="diskon" src="{!! URL::asset('/img/discount.png')!!}" alt="">
                            <span>Diskon 20 Ribu</span>
                        </button>
                        <button class="btn text-dark align-items-center border-2 border-primary w-50 d-flex justify-content-center gap-4">
                            <img class="diskon" src="{!! URL::asset('/img/discount.png')!!}" alt="">
                            <span>Diskon 20 Ribu</span>
                        </button>
                        <button class="btn text-dark align-items-center border-2 border-primary w-50 d-flex justify-content-center gap-4">
                            <img class="diskon" src="{!! URL::asset('/img/discount.png')!!}" alt="">
                            <span>Diskon 20 Ribu</span>
                        </button>
                        <button class="btn text-dark align-items-center border-2 border-primary w-50 d-flex justify-content-center gap-4">
                            <img class="diskon" src="{!! URL::asset('/img/discount.png')!!}" alt="">
                            <span>Diskon 20 Ribu</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-layout>

<script>
    document.getElementById('noPDAM-input').addEventListener('input', function() {
        document.getElementById('noPDAM-Detail-Input').value = this.value;
    });
</script>