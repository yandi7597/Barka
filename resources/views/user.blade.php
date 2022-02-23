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
<div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">Barka Service</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="feature col">
        <h2>Apotek</h2>
        <br>
        <p>Apotek Barka menyediakan berbagai kebutuhan obat dan peralatan medis lainnya.</p>
        <br>
        <a href="/apotek" class="btn btn-outline-primary pull-right">
          Beli
        </a>
      </div>
      <div class="feature col">
        <h2>Praktek Dokter</h2>
        <br>
        <p>Praktek Dokter Barka tersedia pada hari senin - sabtu, siap melayani anda.</p>
        <br>
        <a href="https://api.whatsapp.com/send?phone=6289652367909&text=Halo%20Barka%20!%20saya%20berminat%20mengambil%20nomor%20antre,%20terimakasih%20:)%20" class="btn btn-outline-primary pull-right">
          Ambil No. Antre
        </a>
      </div>
      <div class="feature col">
        <h2>Call Center</h2>
        <br>
        <p>Untuk informasi lainnya, silahkan menghubungi call center kami, terimakasih!</p>
        <br>
        <a href=/callcenter class="btn btn-outline-primary pull-right">
          Hubungi
        </a>
      </div>
    </div>
  </div>
  <br>
  <div class="col">
  <div class="row justify-content-md-center">
    <div class="col-lg-5">
        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
            <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                <div class="bg-overlay bg-overlay--blue"></div>
                <h3>
                    <i class="zmdi zmdi-account-calendar"></i>21 February, 2021</h3>
                        <button class="au-btn-plus">
                        <i class="zmdi zmdi-plus"></i>
                        </button>
                </div>
                <div class="au-task js-list-load">
                    <div class="au-task__title">
                    <p>Praktek Dokter Barka</p>
                </div>
                <div class="au-task-list js-scrollbar3">
                    <div class="au-task__item au-task__item--danger">
                        <div class="au-task__item-inner">
                        <h5 class="task">
                        <a href="#">Praktek dr. Ibnu Syifa</a>
                        </h5>
                        <span class="time">08:00 AM</span>
                    </div>
                </div>
                <div class="au-task__item au-task__item--warning">
                    <div class="au-task__item-inner">
                        <h5 class="task">
                        <a href="#">Praktek dr. Lulu</a>
                        </h5>
                        <span class="time">15:00 PM</span>
                    </div>
                </div>
                <div class="au-task__item au-task__item--primary">
                    <div class="au-task__item-inner">
                        <h5 class="task">
                        <a href="#">Praktek dr. Adria Nelly</a>
                        </h5>
                        <span class="time">08:00 AM</span>
                    </div>
                </div>
                <div class="au-task__item au-task__item--success">
                    <div class="au-task__item-inner">
                        <h5 class="task">
                        <a href="#">Praktek dr. Ibnu Syifa</a>
                        </h5>
                        <span class="time">15:00 PM</span>
                    </div>
                </div>
                <div class="au-task__item au-task__item--danger js-load-item">
                    <div class="au-task__item-inner">
                        <h5 class="task">
                        <a href="#">Praktek dr. Lulu</a>
                        </h5>
                        <span class="time">08:00 AM</span>
                    </div>
                </div>
                <div class="au-task__item au-task__item--warning js-load-item">
                    <div class="au-task__item-inner">
                        <h5 class="task">
                        <a href="#">Praktek dr. Adria Nelly</a>
                        </h5>
                        <span class="time">15:00 PM</span>
                    </div>
                </div>
                </div>
                <div class="au-task__footer">
                <button class="au-btn au-btn-load js-load-btn">load more</button>
                </div>
            </div>
        </div>
    </div>
  <div class="col">
      <div class="google-maps">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d495.3343038790201!2d106.93924388496926!3d-6.6871895708954385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69b75be17a474f%3A0xd2e63b41e577ee57!2sDr.%20Adria%20nelly%20.s!5e0!3m2!1sid!2sid!4v1644975069763!5m2!1sid!2sid" 
                  width="565" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
        </div>
  </div>
  <br>
  <br>
  <div class="col">
    <h2 class="pb-2 border-bottom">Artikel Kesehatan</h2>
    <br>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100">
        <img src="omicron.jpeg" class="card-img-top" alt="jpeg">
        <div class="card-body">
          <h5 class="card-title">Kenali 5 Gejala Utama Varian Omicron</h5>
          <p class="card-text">Varian virus corona Omicron, saat ini semakin berkembang di Indonesia. Jumlah sebaran yang terinfeksi Omicron bahkan sudah mencapai lebih dari 1 juta kasus (diperbarui pada 9/2).</p>
          <br>
          <a href="https://www.halodoc.com/artikel/kenali-5-gejala-utama-varian-omicron" class="btn btn-outline-secondary pull-right">Baca Selanjutnya</a>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="suntik.jpeg" class="card-img-top" alt="jpeg">
        <div class="card-body">
          <h5 class="card-title">Penting! Ini Aturan Vaksin Booster COVID-19 yang Berlaku di Indonesia</h5>
          <p class="card-text">Aturan vaksin booster COVID-19 banyak dicari tahu masyarakat. Pasalnya, hal ini karena banyak masyarakat yang ingin mendapat vaksin dosis ketiga atau booster untuk melindungi diri dari gejala parah virus Corona, termasuk Omicron.</p>
          <br>
          <a href="https://health.detik.com/berita-detikhealth/d-5944648/penting-ini-aturan-vaksin-booster-covid-19-yang-berlaku-di-indonesia" class="btn btn-outline-secondary pull-right">Baca Selanjutnya</a>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="pasien.jpeg" class="card-img-top" alt="jpeg">
        <div class="card-body">
          <h5 class="card-title">Kasus COVID-19 RI Pecah Rekor, Kemenkes Klaim Pasien di RS Masih Terkendali</h5>
          <p class="card-text">Kasus harian COVID-19 RI mencatatkan rekor tertinggi pada Selasa (15/2/2022), mencapai 57.049. Rekor sebelumnya terjadi pada puncak gelombang Delta di bulan Juli 2021 dengan 56.757 kasus COVID-19 dalam sehari.</p>
          <br>
          <a href="https://health.detik.com/berita-detikhealth/d-5944323/kasus-covid-19-ri-pecah-rekor-kemenkes-klaim-pasien-di-rs-masih-terkendali" class="btn btn-outline-secondary pull-right">Baca Selanjutnya</a>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<div class="col">
<a href="" class="link-secondary pull-right">Artikel Lainnya</a>
</div>
@endsection