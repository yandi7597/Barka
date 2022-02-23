@extends('layouts/main')
@section('title',' : Edit Data Resep')

@section('container')
<div class="col-lg-6">
    <div class="card">
        <form method="post" action="/obatresep/{{$obatresep->id}}" enctype="multipart/form-data">
            @method('patch')
                @csrf
                <div class="card-header"><strong>Edit</strong><small> Data</small></div>
                    <div class="card-body card-block">
                        <div class="mb-3">
                          <label class="form-label">Nama</label>
                          <input type="text" name="nama" value="{{$obatresep->nama}}" class="form-control @error('nama') is-invalid @enderror" placeholder="Ketik Nama">
                          @error('nama')
                              <div class="invalid-feedback{{$message}}"></div>
                          @enderror
                          <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No. Hp</label>
                            <input type="text" name="no_hp" value="{{$obatresep->no_hp}}" class="form-control  @error('no_hp') is-invalid @enderror" placeholder="Ketik No. Hp">
                            @error('no_hp')
                              <div class="invalid-feedback{{$message}}"></div>
                            @enderror
                            <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                        </div>
                        @if($obatresep->foto)
                          <img src="/post-images/{{$obatresep->foto}}" width="100px" height="100px">
                        @else
                          <p>Tidak Ada Foto</p>
                        @endif
                        <br>
                        <br>
                        <div class="mt-3">
                          <label class="form-label">Foto</label>
                          <input type="file" name="foto" value="{{$obatresep->foto}}" class="form-control  @error('foto') is-invalid @enderror" placeholder="Masukkan foto">
                          @error('foto')
                            <div class="invalid-feedback{{$message}}"></div>
                          @enderror
                          <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
                        
                        <button type="submit" class="btn btn-primary">Update Data</button>
                        <a href="/obatresep" class="btn btn-danger">Kembali</a>
                    </form>
                </div>
                </div>

@endsection