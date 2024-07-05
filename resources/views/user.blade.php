<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <x-sidemenu>
        <h5 class="title-profile">Account</h5>
        <div class="row g-1 d-flex justify-content-center align-items-center">
        <div class="img-profile d-flex justify-content-center align-items-center">
            <img class="avatar" src="{{ Auth::user()->image ? asset('images/' . Auth::user()->image) : asset('img/avatar.jpg') }}" alt="User Avatar">
            <form id="imageUploadForm" action="{{ route('user.image.upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="image" id="imageInput" style="display: none;" required>
                <button class="btn btn-primary" type="button" onclick="document.getElementById('imageInput').click();">Choose Photo</button>
                <button class="btn btn-success d-none" type="submit">Upload</button>
            </form>
        </div>
            <h5 class="bio-title">Bio</h5>
            <div class="description">
                <span class="name">Name</span>
                <span class="name">{{ Auth::user()->name }}</span>
                <button class="btn btn-primary px-3">Change</button>
            </div>
            <h5 class="bio-title">Contact</h5>
            <div class="description">
                <span class="name">Email</span>
                <span class="name">{{ Auth::user()->email }}</span>
                <button class="btn btn-primary px-3">Change</button>
            </div>
        </div>
    </x-sidemenu>
</x-layout>

<script>
    document.getElementById('imageInput').addEventListener('change', function() {
        document.getElementById('imageUploadForm').submit(); 
    });
</script>