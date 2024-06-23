<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <div class="container profile bg-white py-5 rounded-3 shadow ">
        <div class="container bg-white py-1 my-5 invoice">
            <div class="typography-invoice py-1 my-2">
                <h5 class="title-invoice py-3 my-2">INVOICE</h5>
                <div class="row">
                    <div class="description col-sm-6 col-lg-6 col-xl-6">
                        <span class="name">Transaction ID</span>
                    </div>

                    <div class="description col-sm-6 col-lg-6 col-xl-6">    
                        <span class="name">12345</span>
                    </div>

                    <div class="description col-sm-6 col-lg-6 col-xl-6">    
                        <span class="name">Date of Transaction</span>
                    </div>

                    <div class="description col-sm-6 col-lg-6 col-xl-6"> 
                        <span class="name">24 Juni 2024</span>
                    </div>

                    <div class="description col-sm-6 col-lg-6 col-xl-6">
                        <span class="name">Email</span>
                    </div>

                    <div class="description col-sm-6 col-lg-6 col-xl-6">    
                        <span class="name">gilbert@gmail.com</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="container bg-white py-1 my-5 invoice">
            <div class="typography-invoice py-1 my-2">
                <h5 class="title-invoice py-3 my-2">Detail Product</h5>
                <img class="avatar" src="{!! URL::asset('/img/three.png')!!}" alt="">
                <div class="row">
                    <div class="description col-sm-6 col-lg-6 col-xl-6">
                        <span class="name">Product</span>
                    </div>

                    <div class="description col-sm-6 col-lg-6 col-xl-6">    
                        <span class="name">Pulsa Three</span>
                    </div>

                    <div class="description col-sm-6 col-lg-6 col-xl-6">    
                        <span class="name">Phone</span>
                    </div>

                    <div class="description col-sm-6 col-lg-6 col-xl-6"> 
                        <span class="name">0895176628</span>
                    </div>

                    <div class="description col-sm-6 col-lg-6 col-xl-6">
                        <span class="name">Nominal</span>
                    </div>

                    <div class="description col-sm-6 col-lg-6 col-xl-6">    
                        <span class="name">Rp 20.000</span>
                    </div>

                    {{-- Kalau Top up PLN kode token baru tergenerate kalau sudah sukses transaksi --}}
                    <div class="description col-sm-6 col-lg-6 col-xl-6 hidden" id="tittleTokenPLN">
                        <span class="name fw-bold">Kode Token</span>
                    </div>

                    <div class="description col-sm-6 col-lg-6 col-xl-6 hidden" id="tokenPLN">    
                        <span class="name fw-bold">2d41zd2</span>
                    </div>
                    {{-- end of Top up PLN --}}

                </div>
            </div>
        </div>
        <div class="container bg-white py-1 my-5 invoice">
            <div class="typography-invoice py-1 my-2">
                <h5 class="title-invoice py-3 my-2">Payment Detail</h5>
                <div class="row">
                    <div class="description col-sm-6 col-lg-6 col-xl-6">
                        <span class="name">Payment Status</span>
                    </div>

                    <div class="description col-sm-6 col-lg-6 col-xl-6">    
                        <span class="name">Success</span>
                    </div>

                    <div class="description col-sm-6 col-lg-6 col-xl-6">    
                        <span class="name">Payment Method</span>
                    </div>

                    <div class="description col-sm-6 col-lg-6 col-xl-6"> 
                        <span class="name">Qris</span>
                    </div>

                    <div class="description col-sm-6 col-lg-6 col-xl-6">
                        <span class="name">Status Transaction</span>
                    </div>

                    <div class="description col-sm-6 col-lg-6 col-xl-6">    
                        <span class="name">Pending</span>
                    </div>
                    <div class="description col-sm-6 col-lg-6 col-xl-6">    
                        <span class="name fw-bold">Total Payment</span>
                    </div>
                    <div class="description col-sm-6 col-lg-6 col-xl-6">    
                        <span class="name fw-bold">Rp20.000</span>
                    </div>
                </div>
            </div>
        </div>
        {{-- QR Code --}}

        {{-- IF not PLN just scan --}}
        {{-- <div class="container bg-white py-1 my-5 invoice">
            <div class="typography-invoice py-1 my-2">
                <h5 class="title-invoice py-3 my-2">QR-Code</h5>
                <div class="d-flex justify-content-center row">
                    <img src="{!! URL::asset('/img/qr-code.png')!!}" alt="" class="qr">
                    <div class="d-flex justify-content-center p-3 fw-bold">Scan Now</div>  
                </div> 
            </div>
        </div> --}}
        
        {{-- IF PLN, scan to reveal the token PLN, the script in invoice validation --}}
        <div class="container bg-white py-1 my-5 invoice">
            <div class="typography-invoice py-1 my-2">
                <h5 class="title-invoice py-3 my-2">QR-Code</h5>
                <div class="d-flex justify-content-center row">
                    <a id="submitButton" class="d-flex justify-content-center">
                        <img src="{!! URL::asset('/img/qr-code.png')!!}" alt="" class="qr">
                    </a>
                    <div class="d-flex justify-content-center p-3 fw-bold">Scan Now</div>  
                </div> 
            </div>
        </div>
    </div>
</x-layout>