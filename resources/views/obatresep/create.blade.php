@extends('layouts/app')
    
@section('content')
<nav class="navbar navbar-light bg-white fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand">
        <img src="clinic.png" style="width: 3rem" alt=".."/>
      Barka
      </a>
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
<div id="card-resep"> 
<div class="col">
<div class="row justify-content-center">
    <div class="col-lg-5">
        <div class="card">
            <div class="card-header">
            Upload Resep
            </div>
            <div class="card-body">
            <form method="post" action="/obatresep" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" value="{{old('nama')}}" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama">
                @error('nama')
                    <div class="invalid-feedback{{$message}}"></div>
                @enderror
                <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                </div>
                <div class="mb-3">
                    <label class="form-label">No. Hp</label>
                    <input type="text" name="no_hp" value="{{old('no_hp')}}" class="form-control  @error('no_hp') is-invalid @enderror" placeholder="Masukkan No. Hp">
                    @error('no_hp')
                    <div class="invalid-feedback{{$message}}"></div>
                    @enderror
                    <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                </div>
                <div class="mb-3">
                    <label class="form-label">Upload Resep</label>
                    <input type="file" name="foto" value="{{old('foto')}}" class="form-control @error('foto') is-invalid @enderror" placeholder="Masukkan Foto">
                    @error('foto')
                    <div class="invalid-feedback{{$message}}"></div>
                    @enderror
                    <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                </div>
                <button type="submit" class="btn btn-outline-primary pull-right">Tambah Data</button>
                <a href="/apotek" class="btn btn-outline-danger">Kembali</a>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection