@extends('layouts/main')
@section('title',': Detail Obat')
    
@section('container')

    <div class="col-4" style="margin-left:10px">
    <h3>Detail Obat</h3>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$obat->nama_obat}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$obat->kegunaan}}</h6>
          <p class="card-text">{{$obat->harga}}</p>
          
          <a href="{{$obat->id}}/edit" class="btn btn-secondary">Edit</a>
          <form action="{{$obat->id}}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
          <a href="/obat" class="btn btn-success">Kembali</a>
        </div>
      </div>
</div>


@endsection