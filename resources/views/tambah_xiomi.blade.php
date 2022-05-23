@extends('main')
@section('judul','Tambah XIOMI')

@section('isi')
    <div class="container">
    <div class="row">
    <div class="col-10">
    <h1 class="mt-3">Tambah XIOMI</h1>

    <form method="post" action='/prosestambahxiomi' enctype="multipart/form-data">
            @csrf
          <div class="mb-1 col-5">
            <label for="nama" class="form-label">Nama</label>
            <input class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="masukan nama" name="nama" require>
          </div>
          <div class="mb-3 col-5">
            <label for="npm" class="form-label">prosesor</label>
            <input class="form-control @error('npm') is-invalid @enderror" id="npm" placeholder="masukan prosesor" name="prosesor">
          </div>
          <div class="mb-3 col-5">
            <label for="email" class="form-label">penyimpanan</label>
            <input class="form-control" id="nama" placeholder="masukan penyimpanan" name="penyimpanan">
          </div>
          <div class="mb-3 col-5">
            <label for="email" class="form-label">harga</label>
            <input class="form-control" id="nama" placeholder="masukan harga" name="harga">
          </div>
          <div class="form-group">
                <label for="image">Pilih foto</label>
                  <input type="file" class="form-control-file" id="image" name="image">
          </div>
          <button type="submit" class="btn btn-primary">Tambah</button>
    </form>

    </div>
    </div>
    </div>
@endsection