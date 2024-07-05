<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <x-sidemenu>
        <h5 class="title-profile">Account</h5>
        <div class="row g-1 d-flex justify-content-center align-items-center">
            <div class="img-profile d-flex justify-content-center align-items-center">
                <img class="avatar"src="/img/avatar.jpg" alt="">
                <button class="btn btn-primary choose">Choose Photo</button>
            </div>
            <h5 class="bio-title">Bio</h5>
            <div class="description">
                <span class="name">Name</span>
                <span class="name">Gilbert Giovanni</span>
                <button class="btn btn-primary px-3">Change</button>
            </div>
            <h5 class="bio-title">Contact</h5>
            <div class="description">
                <span class="name">Email</span>
                <span class="name">gilberttt@gmail.com</span>
                <button class="btn btn-primary px-3">Change</button>
            </div>
            <div class="description">
                <span class="name">Phone</span>
                <span class="name">089574698770</span>
                <button class="btn btn-primary px-3">Change</button>
            </div>
        </div>
    </x-sidemenu>
</x-layout>