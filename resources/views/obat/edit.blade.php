@extends('layouts/main')
@section('title',': Edit Data Obat')
    
@section('container')
<div class="row">
<div class="col-4" style="margin-left:10px">
    <h3>Edit Data</h3>
    <form method="post" action="/obat/{{$obat->id}}">
        @method('patch')
        @csrf
        <div class="mb-3">
          <label class="form-label">Nama Obat</label>
          <input type="text" name="nama_obat" value="{{$obat->nama_obat}}" class="form-control @error('nama_obat') is-invalid @enderror" placeholder="Ketik Nama Obat">
          @error('nama_obat')
              <div class="invalid-feedback{{$message}}"></div>
          @enderror
          <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
        </div>
        <div class="mb-3">
            <label class="form-label">Bentuk Obat</label>
            <input type="text" name="bentuk_obat" value="{{$obat->bentuk_obat}}" class="form-control  @error('bentuk_obat') is-invalid @enderror" placeholder="Ketik Bentuk Obat">
            @error('bentuk_obat')
              <div class="invalid-feedback{{$message}}"></div>
            @enderror
            <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
        </div>
        <div class="mb-3">
            <label class="form-label">Dosis</label>
            <input type="text" name="dosis" value="{{$obat->dosis}}" class="form-control @error('dosis') is-invalid @enderror" placeholder="Ketik Dosis">
            @error('dosis')
              <div class="invalid-feedback{{$message}}"></div>
            @enderror
            <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
          </div>
        <div class="mb-3">
            <label class="form-label">Kegunaan</label>
            <input type="text" name="kegunaan" value="{{$obat->kegunaan}}" class="form-control  @error('kegunaan') is-invalid @enderror" placeholder="Ketik Kegunaan">
            @error('kegunaan')
              <div class="invalid-feedback{{$message}}"></div>
            @enderror
            <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
        </div>
        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="text" name="harga" value="{{$obat->harga}}" class="form-control  @error('harga') is-invalid @enderror" placeholder="Ketik Harga">
            @error('harga')
              <div class="invalid-feedback{{$message}}"></div>
            @enderror
            <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
        </div>
       
        
        <button type="submit" class="btn btn-primary">Update Data</button>
        <a href="/obat" class="btn btn-danger">Kembali</a>
    </form>
</div>
</div>

@endsection