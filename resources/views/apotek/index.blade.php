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
    <div class="mb-auto">
    <div style="position: relative; width: 100%; height: ; padding-top: 33.3333%;
    padding-bottom: 48px; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
    border-radius: 8px; will-change: transform;">
        <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
        src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAE4ekvl1Sk&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
        </iframe>
    </div>
    <a href="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAE4ekvl1Sk&#x2F;view?utm_content=DAE4ekvl1Sk&amp;utm_campaign=designshare&amp;utm_medium=embeds&amp;utm_source=link" target="_blank" rel="noopener"></a>
    </div>
</div>
<div class="container px-4 py-5" id="custom-cards">
    <h2 class="pb-2 border-bottom">Apotek Barka</h2>
            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
        <div class="col">
            <div class="card card-cover h-60 text-white bg-dark rounded-2" style="background-image: url('background1.png');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                    <h2 class="pt-6 mt-4 mb-5 display-6 lh-1 fw-normal text-white">Obat Bebas
                        <a href="/obatbebas" class="text-decoration-none text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8zm-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5z"></path>
                            </svg>
                        </a>
                    </h2>
                 </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-cover h-60 text-white bg-dark rounded-2" style="background-image: url('background1.png');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                    <h2 class="pt-6 mt-4 mb-5 display-6 lh-1 fw-normal text-white">Obat Resep
                        <a href="/obatresep/create" class="text-decoration-none text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8zm-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5z"></path>
                            </svg>
                        </a>
                    </h2>
                 </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-cover h-60 text-white bg-dark rounded-2" style="background-image: url('background1.png');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                    <h2 class="pt-6 mt-4 mb-5 display-6 lh-1 fw-normal text-white">Obat Herbal
                        <a href="/obatherbal" class="text-decoration-none text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8zm-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5z"></path>
                            </svg>
                        </a>
                    </h2>
                 </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-cover h-60 text-white bg-dark rounded-2" style="background-image: url('background1.png');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                    <h2 class="pt-6 mt-4 mb-5 display-6 lh-1 fw-normal text-white">Vitamin Supplement
                        <a href="/vitamin" class="text-decoration-none text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8zm-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5z"></path>
                            </svg>
                        </a>
                    </h2>
                 </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-cover h-60 text-white bg-dark rounded-2" style="background-image: url('background1.png');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                    <h2 class="pt-6 mt-4 mb-5 display-6 lh-1 fw-normal text-white">Mom & Baby
                        <a href="/mombaby" class="text-decoration-none text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8zm-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5z"></path>
                            </svg>
                        </a>
                    </h2>
                 </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-cover h-60 text-white bg-dark rounded-2" style="background-image: url('background1.png');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                    <h2 class="pt-6 mt-4 mb-5 display-6 lh-1 fw-normal text-white">Beauty & Skincare
                        <a href="/beauty" class="text-decoration-none text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8zm-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5z"></path>
                            </svg>
                        </a>
                    </h2>
                 </div>
            </div>
        </div>
    </div>
</div>

@endsection