@extends('main')
@section('judul','Edit VIVO')

@section('isi')
    <div class="container">
    <div class="row">
    <div class="col-10">
    <h1 class="mt-3">Edit VIVO</h1>

    <form method="post" action='/editvivo/{{$vivo->id}}' enctype="multipart/form-data">
            @method('patch')
            @csrf
          <div class="mb-1 col-5">
            <label for="nama" class="form-label">Nama</label>
            <input class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="masukan nama" name="nama" value="{{ $vivo->nama }}">
          </div>
          <div class="mb-3 col-5">
            <label for="npm" class="form-label">prosesor</label>
            <input class="form-control @error('npm') is-invalid @enderror" id="npm" placeholder="masukan prosesor" value="{{ $vivo->prosesor }}" name="prosesor">
          </div>
          <div class="mb-3 col-5">
            <label for="email" class="form-label">penyimpanan</label>
            <input class="form-control" id="nama" placeholder="masukan penyimpanan" name="penyimpanan" value="{{ $vivo->penyimpanan }}">
          </div>
          <div class="mb-3 col-5">
            <label for="email" class="form-label">harga</label>
            <input class="form-control" id="nama" placeholder="masukan harga" name="harga" value="{{ $vivo->harga }}">
          </div>
          <div class="form-group">
              <label for="image">pilih poto</label>
              <input type="file" class="form-control-file" id="image" name="image">
            </div>
           <div class="">
              <img src="/image/{{ $vivo->image }}" width="90" height="90">
            </div>
              <br>

          <button type="submit" class="btn btn-danger">Edit</button>
    </form>

    </div>
    </div>
    </div>
@endsection