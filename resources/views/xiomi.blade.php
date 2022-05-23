@extends('main')
@section('judul','xiomi')

@section('isi')
    <div class="container">
    <div class="row">
    <div class="col-10">
    <h1 class="mt-3">Daftar handphone</h1>

    <a href="/tambah_xiomi" class="btn btn-success my-2">Tambah handphone</a>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">prosesor</th>
            <th scope="col">penyimpanan</th>
            <th scope="col">harga</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($xiomi as $swa)
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$swa->nama}}</td>
              <td>{{$swa->prosesor}}</td>
              <td>{{$swa->penyimpanan}}</td>
              <td>{{$swa->harga}}</td>
              <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                  <form class="" action="/xiomi/{{ $swa->id }}" method="post">
                     @method('delete')
                     @csrf
                     <button type="submit"  onclick="return confirm ('yakin atau enggak?')" class="btn btn-danger">Hapus</button>
                     <a href="/editxiomi/{{$swa->id}}" class="btn btn-warning">Edit</a>
                   </form>
                </div>
              </td>
            </tr>
        @endforeach
        </tbody>
      </table>

</div>
</div>
</div>
@endsection