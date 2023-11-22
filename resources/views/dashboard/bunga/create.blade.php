@extends('dashboard.layouts.main')
@section('konten')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Tambah bunga</h1>
                <form action="{{ route('store.bunga') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan"></textarea>
                      </div>
                      <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Harga</label>
                          <input type="number" class="form-control" id="exampleFormControlInput1" name="harga">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Stok</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" name="stok">
                        </div>
                        <div class="mb-3">
                          <label for="formFile" class="form-label">Masukan Gambar</label>
                          <input class="form-control" type="file" id="formFile" name="gambar">
                        </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection
