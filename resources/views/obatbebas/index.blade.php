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
<div class="col">
    <h2 class="pb-2 border-bottom">Obat Bebas
        <a href="/apotek" class="text-decoration-none text-danger pull-right">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"></path>
        </svg>
        </a>
    </h2>
    <br>
      <div id="search-box">
        <form class="row" method="GET" action="{{url('/obatbebas')}}" id='search-form'>
            <div class="col-md-3 ml-auto">
              <input id="search-text" type="text" class="form-control" name="keyword" placeholder="Pencarian">
            </div>
            <div class="col-auto">
              <button  id="search-button" type="submit" class="btn btn-outline-secondary">Cari</button>
            </div>
          </form>
      </div>
      <br>
        <div class="row align-items-start">
            @foreach ($obatbebas as $ob)
            <div class="col">
                <div class="card" style="width: 15rem;">
                    <img src="{{$ob->foto}}" class="card-img-top" alt="..." style="height: 13rem">
                    <div class="card-body">
                    <h5 class="card-title">{{$ob->nama}}</h5>
                    <p class="card-text">Rp. {{$ob->harga}}</p>
                    <a href="https://api.whatsapp.com/send?phone=6289652367909&text=Halo%20Barka%20!%20saya%20berminat%20untuk%20memesan%20obat%20ini,%20terimakasih%20:)%20"
                    class="btn btn-outline-primary pull-right">Beli</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>






@endsection