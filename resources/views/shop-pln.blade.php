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
                    <img src="{!! URL::asset('/img/pln.png')!!}" class="img-fluid w-100 rounded-top" alt="">
                </div>
            </div>
        </div>
        
    </div>
    <!-- Single Page Header End -->

    <!-- Single Product Start -->
    <div class="container-fluid py-5 mt-5">
        <div class="container py-5">
            <div class="container bg-white my-4 py-2 rounded shadow">
                {{-- Check Data Menggunakan JS bernama datacheck-pln  --}}
                <form id="noPLN-Form" action="{{ url('/shop/pln/check') }}" method="POST" class="input-group w-75 mx-auto d-flex py-2 my-4">
                    @csrf
                    <input type="text" id="noPLN-Input" class="form-control p-3" name="no_meteran_pln" placeholder="Enter data">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>

                <div id="errorMessage" class="hidden">
                    <p class="d-flex justify-content-center">Nomor tidak ada, masukkan nomer yang valid</p>
                </div> 

                <div class="row g-4 mb-5 hidden" id="noPLN-Detail">
                    <div class="col-lg-8 col-xl-8">
                        <div class="row g-5">
                            <div class="d-flex text-center">
                                <span class="form-section-number">1</span>
                                <h4 class="nominal_pln d-flex ">Pilih Nominal</h4>
                            </div>
                            <div class="col-lg-12">
                                <div class="tab-content mb-5">
                                    <div class="container bg-white py-4 rounded">
                                        {{-- <ul class="row nominal_pln-voucher d-flex w-100">
                                            <li class="btn text-dark align-items-center col-sm rounded mx-4 my-4">
                                                <button class=" btn text-dark align-items-center border-primary border-2 voucher">Rp10.000</button>
                                            </li>
                                            <li class="col-sm rounded mx-4 my-4">
                                                <button class=" btn text-dark align-items-center border-primary border-2 voucher">Rp15.000</button>
                                            </li>
                                            <li class="col-sm rounded mx-4 my-4">
                                                <button class=" btn text-dark align-items-center border-primary border-2 voucher">Rp20.000</button>
                                            </li>
                                            <li class="col-sm rounded mx-4 my-4">
                                                <button class=" btn text-dark align-items-center border-primary border-2 voucher">Rp25.000</button>
                                            </li>
                                            <li class="col-sm rounded mx-4 my-4">
                                                <button class=" btn text-dark align-items-center border-primary border-2 voucher">Rp50.000</button>
                                            </li>
                                            <li class="col-sm rounded mx-4 my-4">
                                                <button class=" btn text-dark align-items-center border-primary border-2 voucher">Rp100.000</button>
                                            </li>
                                            <li class="col-sm rounded mx-4 my-4">
                                                <button class=" btn text-dark align-items-center border-primary border-2 voucher">Rp200.000</button>
                                            </li>
                                            <li class="col-sm rounded mx-4 my-4">
                                                <button class=" btn text-dark align-items-center border-primary border-2 voucher">Rp500.000</button>
                                            </li>
                                        </ul> --}}

                                        <div class="row nominal_pln-voucher d-flex w-100">
                                            {{-- @dd($nominal_pln_pulsas) --}}
                                            @foreach ($nominal_plns as $nominal_pln)   
                                                <div class="col-md-3 mb-4">
                                                {{-- <div class="btn text-dark align-items-center col-sm rounded mx-4 my-4"> --}}
                                                    @if ($nominal_pln->status_tersedia == 0)
                                                        <button class="btn text-dark align-items-center border-primary border-2 voucher" onclick="set_nominal_pln('{{ $nominal_pln->nominal_pln }}', '{{ $nominal_pln->nominal_pln_id }}')" disabled>Rp  {{ number_format($nominal_pln->nominal_pln, 0, ',','.') }} <i class='fa fa-times ms-1 text-danger'></i></button>
                                                    @else 
                                                    <button class="btn text-dark align-items-center border-primary border-2 voucher" onclick="set_nominal_pln('{{ $nominal_pln->nominal_pln }}','{{ $nominal_pln->nominal_pln_id }}')">Rp  {{ number_format($nominal_pln->nominal_pln, 0, ',','.') }}</button>
                                                    {{-- <button class="btn text-dark align-items-center border-primary border-2 voucher" onclick="set_nominal_pln('{{ $nominal_pln->nominal_pln }}','{{ $nominal_pln->nominal_pln_id }}')">Rp  {{ number_format($nominal_pln->nominal_pln, 0, ',','.') }}</button> --}}
                                                    @endif
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-4">
                        <div class="row g-4 fruite">
                            <div class="d-flex text-center">
                                <span class="form-section-number">2</span>
                                <h4 class="nominal_pln d-flex ">Masukkan Data</h4>
                            </div>
                            {{-- <div class="col-lg-12">
                                <div class="container bg-white mb-4 rounded py-4">
                                    <h5>Jumlah Token</h5>
                                    <input class="form-control" type="number" readonly>
                                </div>
                            </div> --}}
                            <form action="{{ route('shop.invoice-pln') }}" method="post">
                            {{-- <form action="{{ url("/shop/invoice-pln")}}" method="post"> --}}
                                <div class="col-lg-12">

                                    <input type="hidden" name="invoice_type" value="1">

                                    @csrf
                                    <div class="container bg-white mb-4 rounded py-4">
                                        <h5>Nomer Meteran</h5>
                                        <input class="form-control" name="no_pln_ui" id="noPLN-Detail-Input" type="number" readonly>
                                        <input class="form-control" id="noPLN-ID" name="noPLN-ID" nmae="list_no_pln_id" type="hidden" readonly>
                                    </div>
                                    
                                    <div class="container bg-white mb-4 rounded py-4">
                                        <h5 class="mb-4">Harga Token PLN</h5>
                                        <input type="hidden" name="nominal_pln_id" id="hidden_nominal_pln_id" value="0">
                                        <input class="form-control" type="hidden" name="" id="nominal_pln_real" value="0" readonly>
                                        <input class="form-control" type="text" placeholder="Pilih Jumlah" id="nominal_pln" readonly>
                                    </div>

                                    <div class="container bg-white mb-4 rounded py-4">
                                        <h5 class="mb-4">Voucher yang Dipilih</h5>
                                        <input class="form-control" type="hidden" id="voucher_id_real" name="voucher_id" value="0">
                                        <input class="form-control" type="hidden" id="nominal_disc_real" value="0" readonly>
                                        <input class="form-control" type="text" placeholder=""  id="nominal_disc" readonly>
                                    </div>

                                    <div class="container bg-white mb-4 rounded py-4">
                                        <h5 class="mb-4">Metode Pembayaran</h5>
                                        <div class="justify-content-between w-100 border border-primary border-2 py-2 px-2 rounded d-flex align-items-center" >
                                            <img class="qris" src="{!! URL::asset('/img/quick-response-code-indonesia-standard-qris-seeklogo-2 1.png')!!}" alt="">
                                            <span id="total_pay">Rp 0</span>

                                        </div>
                                            
                                    </div>

                                    <div class="container bg-white mb-4 rounded py-4">
                                        <h5 class="mb-4">Voucher</h5>
                                        <button type='button' class="btn btn-primary text-white justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#voucher">Choose Voucher</button>
                                    </div>

                                    <div class="container bg-white mb-4 rounded py-4">
                                        <div class="justify-content-between d-flex w-100">
                                            <h5 class="mb-4">Total </h5>
                                            <span id="total_pay_fix">Rp 0</span>
                                        </div>
                                        <button type='submit' class="btn btn-primary border-0 border-secondary py-2 px-2 rounded text-white justify-content-center w-100">Pay Now</submit>
                                    </div>
                                </div>
                            </form>
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
                    {{-- <div class="d-flex align-items-center w-100 justify-content-center flex-column gap-4">
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
                    </div> --}}
                    <div class="d-flex align-items-center w-100 justify-content-center flex-column gap-4" data-bs-dismiss="modal">
                        @foreach ($nominal_vouchers as $nominal_voucher)
                        <button class="btn text-dark align-items-center border-2 border-primary w-50 d-flex justify-content-center gap-4" onclick="set_nominal_voucher('{{ $nominal_voucher->nominal_disc }}' ,'{{ $nominal_voucher->voucher_id }}')">
                            <img class="diskon" src="{!! URL::asset('/img/discount.png')!!}" alt="">
                            <span>Diskon {{ $nominal_voucher->nominal_disc /1000 }} Ribu</span>
                        </button>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>


<script>
    function set_nominal_pln(nominal_pln, nominal_pln_id){
        
        $('#nominal_pln').val("Rp " + rupiah(nominal_pln));
        $('#nominal_pln_real').val(nominal_pln);
        set_total_pay();

        // setting id juga
        $("#hidden_nominal_pln_id").val(nominal_pln_id);
    }

    function set_nominal_voucher(nominal_disc, voucher_id){
        var nominal_pln_real = $('#nominal_pln_real').val();

        if(parseInt(nominal_disc) > parseInt(nominal_pln_real)){
            iziToast.error({
                position: 'topCenter',
                title: 'GAGAL',
                message: 'nominal voucher tidak boleh lebih besar dari nominal pln'
            });
        }
        else {
            $('#nominal_disc').val("Rp " + rupiah(nominal_disc));
            $('#nominal_disc_real').val(nominal_disc);
            $('#voucher_id_real').val(voucher_id);
            set_total_pay();
        }
    }

    function set_total_pay(){
        var nominal_pln_real = $('#nominal_pln_real').val();
        var nominal_disc_real = $('#nominal_disc_real').val();

        var total_pay = parseInt(nominal_pln_real) - parseInt(nominal_disc_real);

        $('#total_pay').html("Rp " + rupiah(total_pay));
        $('#total_pay_fix').html("Rp " + rupiah(total_pay));
    }

    function rupiah(angka){
        var reverse = angka.toString().split('').reverse().join(''),
            ribuan = reverse.match(/\d{1,3}/g);
            ribuan = ribuan.join('.').split('').reverse().join('');
        return ribuan;
    }

    document.getElementById('noPLN-Input').addEventListener('input', function() {
        document.getElementById('noPLN-Detail-Input').value = this.value;
    });
</script>
