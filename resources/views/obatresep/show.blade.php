@extends('layouts/app')
    
@section('content')
<nav class="navbar navbar-light bg-white fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand mb-0 h1" href="#">Barka</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Barka</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" href="/user">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/praktek">Praktek Dokter</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/apotek">Apotek</a>
              </li>
            <li class="nav-item">
                <a class="nav-link active"href="/aboutus">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active"href="/callcenter">Call Center</a>
            </li>
            
          </ul>
        </div>
      </div>
    </div>
  </nav>
    <div class="px-4 pt-5 my-5 text-center border-bottom">
        <h1 class="display-4 fw-bold">Apotek Barka</h1>
        <br>
            <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Resep berhasil dikirimkan, mohon untuk menunggu beberapa saat hingga anda mendapatkan pesan dari kami, terimakasih.  </p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                <a href="/obatresep/create" class="btn btn-outline-primary btn-lg px-4 me-sm-3">Upload Resep Lagi</a>
                <a href="/apotek" class="btn btn-outline-danger btn-lg px-4">Kembali</a>
            </div>
            </div>
            <div class="overflow-hidden" style="max-height: 30vh;">
            <div class="container px-5">
                <img src="barka1.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
            </div>
        </div>
    </div>          
@endsection